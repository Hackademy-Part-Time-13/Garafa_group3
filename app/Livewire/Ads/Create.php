<?php

namespace App\Livewire\Ads;

use App\Models\Ad;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;

class Create extends Component
{

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

    public function store()
    {
        $this->user_id = Auth::id();
        $this->validate();
        Ad::create($this->all());
        $this->reset();
        return redirect()->route('ad.create')->with('success', 'Annuncio creato correttamente');
    }

    public function render()
    {
        
        return view('livewire.ads.create');
    }

}
