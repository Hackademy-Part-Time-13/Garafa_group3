<?php

namespace App\Livewire\Ads;

use App\Models\Ad;
use App\Models\Category;
use Livewire\Component;


class Index extends Component
{   
    
    public $ads;
    public $bool = true;

    public function sortCategory(Category $category){
        
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

    public function render()
    {   
        if($this->bool){
            $this->ads = Ad::all();
        }
        return view('livewire.ads.index');
    }
}
