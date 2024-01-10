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
    public $user_id;

    public function store()
    {
        dd($this->all());
        //Announcement::create([$this->all()]);
        Announcement::create([
            'title'=>$this->title,
            'description'=>$this->description,
            'price'=>$this->price,
            'category_id'=>$this->category_id,
            'user_id'=>$this->user_id,
        ]);

        $this->reset();
        session()->flash('success', 'Annuncio creato correttamente');
    }

    public function render()
    {
        return view('livewire.announcements.create');
    }

}
