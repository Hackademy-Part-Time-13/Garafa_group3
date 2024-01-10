<?php

namespace App\Livewire\Announcement;

use App\Models\Announcement;
use App\Models\Category;
use Livewire\Component;


class Index extends Component
{   
    public $category;
    public $announcements;
    public $bool = true;

    public function sortCategory(Category $category){
        $this->category = $category;
        $this->announcements = Announcement::where('category_id', $category->id)->get();   
        $this->bool = false;
    }

    public function sortNEW(){
        
        $this->announcements = Announcement::orderBy('id','DESC')->get();
        $this->bool = false;
        
        
    }

    public function sortOLD(){
        
        $this->announcements = Announcement::all();
        $this->bool = false;
    }

    public function render()
    {   
        if($this->bool){
            $this->announcements = Announcement::all();
        }
        return view('livewire.announcement.index');
    }
}
