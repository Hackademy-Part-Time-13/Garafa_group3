<?php

namespace App\View\Components;

use Closure;
use App\Models\Ad;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class CategoryCard extends Component
{

    /**
     * Create a new component instance.
     */
    public function __construct(public $title, public $ads, public $category)
    {
        
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.CategoryCard');
    }
}
