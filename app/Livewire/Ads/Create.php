<?php

namespace App\Livewire\Ads;

use App\Jobs\GoogleVisionSafeSearch;
use App\Models\Ad;
use Livewire\Component;
use App\Jobs\ResizeImage;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
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
        $this->user_id = Auth::id();
        $this->validate();
        $this->ad = Ad::create($this->all());
        if(count($this->images)) {
            foreach($this->images as $this->index => $image) {

                $name = $this->index + 1 . '.jpg';
                $path = $image->storeAs('images/' . $this->ad->id , $name, 'public');
                $newImage = $this->ad->images()->create(['path' => $path]);

              
                // $watermark = Image::make(public_path('images/watermark.png'))
                // ->opacity(50)
                // ->resize($path->width() / 2, $path->height() / 2);
        
                //  $path->insert($watermark, 'left');

                //  $path->save(public_path('images/' . $this->ad->id ,'watermarked'.$name, 'public'));


                dispatch(new ResizeImage($newImage->path, 400, 400));
                dispatch(new ResizeImage($newImage->path, 80, 80));               
                dispatch(new ResizeImage($newImage->path, 300, 450));

                dispatch(new GoogleVisionSafeSearch($newImage->id));
            }

            File::deleteDirectory(storage_path('/app/livewire-tmp'));
        }
        $this->reset();
        return redirect()->route('ad.create')->with('success', 'Annuncio creato correttamente e in stato di revisione');
    }

    public function render()
    {
        return view('livewire.ads.create');
    }

}
