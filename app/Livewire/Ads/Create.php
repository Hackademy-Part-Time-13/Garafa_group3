<?php

namespace App\Livewire\Ads;

use App\Models\Ad;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\WithFileUploads;

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

    #[Validate(['images.*' => 'image|max:2048'])]
    public $images = [];

    #[Validate(['temporary_images.*' => 'image|max:2048'])]

    public $temporary_images;

    public $ad;

    public function updatedTemporaryImages() {
        if($this->validate([
            'temporary_images.*' => 'image|max:2048'
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
            foreach($this->images as $image) {
                $this->ad->images()->create(['path' => $image->store('images/' . $this->ad->id , 'public')]);
            }
        }
        $this->reset();
        return redirect()->route('ad.create')->with('success', 'Annuncio creato correttamente e in stato di revisione');
    }

    public function render()
    {
        return view('livewire.ads.create');
    }

}
