<?php

namespace App\Livewire\Announcement;

use App\Models\Ad;
use App\Models\Category;
use Livewire\Component;


class Index extends Component
{   
    
    public $announcements;
    public $bool = true;

    public function sortCategory(Category $category){
        
        $this->announcements = Ad::where('category_id', $category->id)->get();   
        $this->bool = false;
    }

    
    public function sortNEW(){
        
        $this->announcements = Ad::orderBy('id','DESC')->get();
        $this->bool = false;
        
        
    }
    
    public function sortOLD(){
        
        $this->announcements = Ad::all();
        $this->bool = false;
    }
    
    public function expensiveToCheap(){
        
        $this->announcements = Ad::orderBy('price','DESC')->get();
        $this->bool = false;
        
        
    }

    public function cheapToExpensive(){
        
        $this->announcements = Ad::orderBy('price')->get();
        $this->bool = false;
        
        
    }

    public function render()
    {   
        if($this->bool){
            $this->announcements = Ad::all();
        }
        return view('livewire.ads.index');
    }
}
