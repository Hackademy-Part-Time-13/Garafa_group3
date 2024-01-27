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

    public $querycolum;
    public $queryaction;

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
        $this->querycolum = 'id';
        $this->queryaction = 'DESC';

        // $this->ads = Ad::where('is_accepted', true)
        // ->orderBy('id','DESC')->paginate(12);     
    }
    
    public function oldest(){
        $this->querycolum = 'id';
        $this->queryaction = 'ASC';

        // $this->ads = Ad::where('is_accepted', true)->paginate(12);
    }
    
    public function cheapest(){
        $this->querycolum = 'price';
        $this->queryaction = 'ASC';

        // $this->ads = Ad::where('is_accepted', true)
        // ->orderBy('price','ASC')->get(); 
    }

    public function mostExpensive(){
        $this->querycolum = 'price';
        $this->queryaction = 'DESC';

        // $this->ads = Ad::where('is_accepted', true)
        // ->orderBy('price', 'DESC')->paginate(12);
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
        // $this->ads = Ad::where('is_accepted', true)->get();
        // return view('livewire.ads.indexAll');
        $adss = Ad::where('is_accepted', true)->paginate(12);
        // dd($adss);

        return view('livewire.ads.indexAll',compact('adss'));

    } else {

        $adss = Ad::where('is_accepted', true)
        ->orderBy($this->querycolum,$this->queryaction)->paginate(12);
        
        return view('livewire.ads.indexAll',compact('adss'));
    }

    } 
}
