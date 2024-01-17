<x-main>
    <div class="container_profile">
        
         <div class="image_profile">
       <img src="https://picsum.photos/400" alt="">
         </div>
         <h2>{{Auth::user()->name }}</h2>
         <div class="button">
            <button>Modifica profilo</button>
            <button>Condividi profilo</button>
         </div>
    </div>
    <div class="home_back">
 <div class="home_box">

 </div>
    </div>
    <div class="home_back">
        <div class="home_box">
            
               <div class="ads_container ">

                <img class="ads_img_container" src="https://picsum.photos/400/400" alt="">

                <span class="ads_dettaglio_batton"><a href="">vista
                        dettaglio</a></span>

                <div class="ads_content"> 
                    <div class="ads_text_box">
                        <p class="ads_titale ads_price"> £</p>
                        <p class="ads_titale">ciao</p>
                        <p class="ads_titale_description">ahahahaha</p>

                    </div>

                    <div class="ads_favorites">

                        {{-- @if (App\Models\Favorite::where('ad_id', $ad->id)->where('user_id', auth()->user()->id)->exists())
                            <span wire:click="unlike({{ $ad }})" class="d-flex ads_favorites_flex"> <i
                                    class="bi bi-heart-fill"></i>
                                <p>{{ $ad->favorites->count() }}</p>
                            </span>
                        @else --}}
                            <span wire:click="liker()" class="d-flex ads_favorites_flex"><i
                                    class="bi bi-heart"></i>
                                <p>7</p>
                            </span>
                        {{-- @endif --}}
                    </div>
                </div>



            </div> 
           
            
           
        </div>
           </div>
       
</x-main>