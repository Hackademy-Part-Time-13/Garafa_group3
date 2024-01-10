<?php

namespace App\Livewire\Announcements;

use App\Models\Announcement;
use Livewire\Component;

class Create extends Component
{

    public $title;
    public $description;
    public $price;
    public $category_id;

    public function store()
    {
        //Announcement::create([$this->all()]);
        Announcement::create([
            'title'=>$this->title,
            'description'=>$this->description,
            'price'=>$this->price,
            'category_id'=>$this->category_id,
        ]);

        $this->reset();
        session()->flash('success', 'Annuncio creato correttamente');
    }

    public function render()
    {
        return view('livewire.announcements.create');
    }

}
