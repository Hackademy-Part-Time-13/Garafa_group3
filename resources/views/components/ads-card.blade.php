
<div class="col-4 d-flex justify-content-center">
    <div class="ads_container ">
            <img class="ads_img_container" src="https://picsum.photos/400/400" alt="">


            <span class="ads_dettaglio_batton"><a href="{{route('ad.show',$ad->id)}}">vista dettaglio</a></span>
            <p class="ads_titale">{{$ad->title}}</p>

            <div class="ads_favorites">
                <livewire:extra.favorites :ad="$ad" />
            </div>
        </div>
</div>
        

 