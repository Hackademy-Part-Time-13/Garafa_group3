<?php

namespace App\Livewire\Ads;

use App\Models\Ad;
use App\Models\Favorite;
use Livewire\Component;
use Livewire\WithPagination;

class IndexCategory extends Component
{   
    
    public $sortSelect;
    public $ads;

    public $title;
    public $category_name;

    public $bool = true;
    public $categorySelect;
    public $category_id;

    public function applySort()
    {
        if ($this->sortSelect === 'noSorted') {
            $this->bool = true;
            $this->render();

        } elseif ($this->sortSelect === 'newest') {
            $this->bool = false;
            $this->newest();

        } elseif ($this->sortSelect === 'oldest') {
            $this->bool = false;
            $this->oldest();

        } elseif ($this->sortSelect === 'cheapest') {
            $this->bool = false;
            $this->cheapest();

        } elseif ($this->sortSelect === 'mostExpensive') {
            $this->bool = false;
            $this->mostExpensive();
        }
    }



    public function newest(){   
        $this->ads = Ad::where('is_accepted', true)
        ->where('category_id', $this->category_id)
        ->orderBy('id','DESC')->get();     
    }
    
    public function oldest(){
        $this->ads = Ad::where('is_accepted', true)
        ->where('category_id', $this->category_id)->get();
    }
    
    public function cheapest(){
        $this->ads = Ad::where('is_accepted', true)
        ->where('category_id', $this->category_id)
        ->orderBy('price','ASC')->get(); 
    }

    public function mostExpensive(){
        $this->ads = Ad::where('is_accepted', true)
        ->where('category_id', $this->category_id)
        ->orderBy('price', 'DESC')->get();
    }

    // SORT CATEGORIE
    public function applyCat(){
        if($this->categorySelect != 'noSelected') {
            return redirect()->route('adsByCat', $this->categorySelect);
        } 
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
        
    $this->categorySelect = $this->category_id;

    if ($this->bool) {
        $this->ads = Ad::where('is_accepted', true)
        ->where('category_id', $this->category_id)->get();
        return view('livewire.ads.indexCategory');
    } else {
        return view('livewire.ads.indexCategory');
    }

    } 
}
