<?php

namespace App\Livewire\Ads;

use App\Models\Ad;
use Livewire\Component;
use App\Jobs\RemoveFaces;
use App\Jobs\ResizeImage;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\GoogleVisionSafeSearch;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class Create extends Component
{
    use WithFileUploads;

    #[Validate('required|min:3|max:60')] 
    public $title;

    #[Validate('required|min:5|max:1000')] 
    public $description;

    #[Validate('required|numeric|between:0,99999.99')] 
    public $price;

    #[Validate('required|exists:categories,id')] 
    public $category_id;

    #[Validate('required|exists:users,id')] 
    public $user_id;

    #[Validate(['images.*' => 'image|max:4096'])]
    public $images = [];

    #[Validate(['temporary_images.*' => 'image|max:4096'])]

    public $temporary_images;

    public $ad;
    public $index = 0;

    public function updatedTemporaryImages() {
        if($this->validate([
            'temporary_images.*' => 'image|max:4096'
        ])) {
            foreach($this->temporary_images as $tempImage) {
                $this->images[] = $tempImage;
            }
        }
    }

    public function removeImage($key) {
        if (in_array($key, array_keys($this->images))) {
            unset($this->images[$key]);
        }   
    }

    public function store()
    {
            // PRENDO ID UTENTE LOGGATO
        $this->user_id = Auth::id();

            // ESEGUO LE VALIDAZIONI
        $this->validate();

            // CREO L'ANNUNCIO
        $this->ad = Ad::create($this->all());

            // SALVO LE IMMAGINI ALLEGATE
        if(count($this->images)) {

            foreach($this->images as $this->index => $image) {
                $name = $this->index + 1 . '.jpg'; //CREO NOME UNIVOCO PER OGNI IMG
                $path = $image->storeAs('images/' . $this->ad->id , $name, 'public'); //CREO PATH INSERENDO TUTTE LE IMG NELLA STESSA CARTELLA
                $newImage = $this->ad->images()->create(['path' => $path]); //SALVO IL PATH DELL'IMG NEL DATABASE

                    // APPLICO WATERMARK SUI VOLTI E CONCATENO JOBS SUCCESSIVI
                RemoveFaces::withChain([
                        // RIDIMENSIONE LE IMG
                    new ResizeImage($newImage->path, 400, 400),
                    new ResizeImage($newImage->path, 80, 80),               
                    new ResizeImage($newImage->path, 300, 450),
                        // CONTROLLO I CONTENUTI DELLE IMG
                    new GoogleVisionSafeSearch($newImage->id),
                    new GoogleVisionLabelImage($newImage->id),                    
                ])->dispatch($newImage->id);

            }

            File::deleteDirectory(storage_path('/app/livewire-tmp'));
        }
            // SVUOTO LA FORM DI CREAZIONE ANNUNCIO
        $this->reset();
        return redirect()->route('ad.create')->with('success', 'Annuncio creato correttamente e in stato di revisione');
    }

    public function render()
    {
        return view('livewire.ads.create');
    }

}
