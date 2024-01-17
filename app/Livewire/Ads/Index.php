<?php

namespace App\Livewire\Ads;

use App\Models\Ad;
use App\Models\Category;
use App\Models\Favorite;
use Livewire\Component;


class Index extends Component
{   
    
    public $sortSelect;
    public $ads;
    public $title;
    public $searched;
    public $category_id;

    public function applySort()
    {
        if ($this->sortSelect === 'noSorted') {
            $this->render();

        } elseif ($this->sortSelect === 'newest') {
            $this->newest();

        } elseif ($this->sortSelect === 'oldest') {
            $this->oldest();

        } elseif ($this->sortSelect === 'cheapest') {
            $this->cheapest();

        } elseif ($this->sortSelect === 'mostExpensive') {
            $this->mostExpensive();
        }
    }

    public function newest(){   
        $this->ads = Ad::orderBy('id','DESC')->get();     
    }
    
    public function oldest(){
        $this->ads = Ad::all();
    }
    
    public function cheapest(){
        $this->ads = Ad::orderBy('price','DESC')->get(); 
    }

    public function mostExpensive(){
        $this->ads = Ad::orderBy('price')->get();
    }


    // PREFERITI

    public function unlike($ad){
        $ads = Favorite::where('ad_id', $ad["id"])->where('user_id',auth()->user()->id)->get();
            foreach ($ads as $ad) {
                $ad->delete();
            };
    }

    public function liker($ad){
        Favorite::create([
            'user_id'=>auth()->user()->id,
            'ad_id'=>$ad["id"]
        ]);
    }



    public function render(){   
    
    if ($this->title == "Sfoglia annunci") {
            $this->ads = Ad::where('is_accepted', true)->get();
            return view('livewire.ads.index');

    } elseif ($this->title == "Annunci per categoria") {
            $this->ads = Ad::where('is_accepted', true)
            ->where('category_id', $this->category_id)->get();
            return view('livewire.ads.index');

    } elseif ($this->title == "Risultati ricerca") {
            $this->ads = Ad::search($this->searched)->where('is_accepted', true)->get();
            return view('livewire.ads.index');
    }

    } 
}
