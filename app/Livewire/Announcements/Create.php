<?php

namespace App\Livewire\Announcements;

use Livewire\Component;
use App\Models\Announcement;
use Illuminate\Support\Facades\Auth;

class Create extends Component
{

    public $title;
    public $description;
    public $price;
    public $category_id;
    public $user_id;

    public function store()
    {
        $this->user_id = Auth::id();
        Announcement::create($this->all());
        $this->reset();
        session()->flash('success', 'Annuncio creato correttamente');
    }

    public function render()
    {
        return view('livewire.announcements.create');
    }

}
