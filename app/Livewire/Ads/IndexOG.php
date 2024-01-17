<?php

namespace App\Livewire\Ads;

use App\Models\Ad;
use App\Models\Category;
use App\Models\Favorite;
use Livewire\Component;


class Index extends Component
{   
    
    public $ads;


    public $favorite;

    public $bool = true;

    public function sortCategory(Category $category){
        // dd($category->id);
        $this->ads = Ad::where('category_id', $category->id)->get();   
        $this->bool = false;
    }

    
    public function sortNEW(){
        
        $this->ads = Ad::orderBy('id','DESC')->get();
        $this->bool = false;
        
        
    }
    
    public function sortOLD(){
        
        $this->ads = Ad::all();
        $this->bool = false;
    }
    
    public function expensiveToCheap(){
        
        $this->ads = Ad::orderBy('price','DESC')->get();
        $this->bool = false;
        
        
    }

    public function cheapToExpensive(){
        
        $this->ads = Ad::orderBy('price')->get();
        $this->bool = false;
        
        
    }



    public function unlike($ad){

        $ads = Favorite::where('ad_id', $ad["id"])->where('user_id',auth()->user()->id)->get();

        
        
        foreach ($ads as $ad) {
        
            $ad->delete();
        };
    }

    public function liker($ad){
        // dd($ad["id"]);
        Favorite::create([
            'user_id'=>auth()->user()->id,
            'ad_id'=>$ad["id"]
        ]);
    }


    public function render()
    {   
        if($this->bool){
            $this->ads = Ad::where('is_accepted', true)->get();
        }
        return view('livewire.ads.index');
    }
}
