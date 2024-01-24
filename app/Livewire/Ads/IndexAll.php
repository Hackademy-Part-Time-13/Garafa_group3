<?php

namespace App\Livewire\Ads;

use App\Models\Ad;
use Livewire\Component;
use App\Models\Favorite;
use Livewire\WithPagination;



class IndexAll extends Component
{   
    use WithPagination;

    public $sortSelect;
    public $ads;
    public $title;
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

    public function applyCat(){
        return redirect()->route('adsByCat', $this->categorySelect);
    }

    public function newest(){   
        $this->ads = Ad::where('is_accepted', true)
        ->orderBy('id','DESC')->get();     
    }
    
    public function oldest(){
        $this->ads = Ad::where('is_accepted', true)->get();
    }
    
    public function cheapest(){
        $this->ads = Ad::where('is_accepted', true)
        ->orderBy('price','ASC')->get(); 
    }

    public function mostExpensive(){
        $this->ads = Ad::where('is_accepted', true)
        ->orderBy('price', 'DESC')->get();
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

    if ($this->bool) {
        $this->ads = Ad::where('is_accepted', true)->get();
        return view('livewire.ads.indexAll');
        // return view('livewire.ads.indexAll', [
        //     'ads' => Ad::paginate(10),
        // ]);
    } else {
        return view('livewire.ads.indexAll');
    }

    } 
}
