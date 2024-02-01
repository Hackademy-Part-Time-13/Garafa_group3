<?php

namespace App\View\Components;

use Closure;
use App\Models\Ad;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class UserCardHome extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public $user)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $allFavorites = 0;
         foreach (Ad::where('user_id',$this->user->id)->where('is_accepted', true)->get() as $ad) {
            $allFavorites += $ad->favorites->count();
         }
        return view('components.user-card-home', compact('allFavorites'));
    }
}
