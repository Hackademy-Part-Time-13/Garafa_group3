<?php

namespace App\Livewire\Extra;

use App\Models\Favorite;
use Livewire\Component;

class Favorites extends Component
{
    public $ad;

    public $favorite;

    public function unlike(){
        // dd(Like::where('user_id', auth()->user()->id)->exists());

        $ads = Favorite::where('ad_id', $this->ad->id)->where('user_id',auth()->user()->id)->get();

        // dd($likes);
        
        foreach ($ads as $ad) {
        
            $ad->delete();
        };
    }

    public function liker(){
        // dd($post);

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
