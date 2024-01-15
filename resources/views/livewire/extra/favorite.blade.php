<div>

   
    
    @if (App\Models\Favorite::where('ad_id', $ad->id)->where('user_id', auth()->user()->id)->exists())
       <span wire:click="unlike({{$ad}})" class="d-flex"> <i   class="bi bi-heart-fill"></i><p>{{$ad->favorites->count()}}</p></span> 
    @else
    {{-- @dd($ad) --}}
        <span wire:click="liker({{$ad}})" class="d-flex" ><i  class="bi bi-heart"></i><p>{{$ad->favorites->count()}}</p></span>
    
    @endif
    
</div> 
