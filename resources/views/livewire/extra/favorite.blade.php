<div>


    
    @if (App\Models\Favorite::where('ad_id', $ad->id)->where('user_id', auth()->user()->id)->exists())
       <span wire:click="unlike({{$ad}})" class="d-flex"> <p>{{$ad->favorites->count()}}</p><i   class="bi bi-hand-thumbs-up-fill"></i></span> 
    @else
        <span wire:click="liker({{$ad}})" class="d-flex" ><p>{{$ad->favorites->count()}}</p><i  class="bi bi-hand-thumbs-up "></i></span>
    
    @endif
    
</div> 
