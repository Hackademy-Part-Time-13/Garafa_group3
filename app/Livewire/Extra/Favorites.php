<?php

namespace App\Livewire\Extra;

use App\Models\Favorite;
use Livewire\Component;

class Favorites extends Component
{
    public $ad;

    public $favorite;

    public function unlike(){

        $ads = Favorite::where('ad_id', $this->ad->id)->where('user_id',auth()->user()->id)->get();

        
        
        foreach ($ads as $ad) {
        
            $ad->delete();
        };
    }

    public function liker(){

        Favorite::create([
            'user_id'=>auth()->user()->id,
            'ad_id'=>$this->ad->id
        ]);
    }

    public function render()
    {
        return view('livewire.extra.favorite');
    }
}
