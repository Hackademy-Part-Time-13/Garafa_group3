<x-main>

    {{-- ANNUNCI CERCATI --}}

    @if(Illuminate\Support\Facades\Route::currentRouteName() == 'ad.searched')
    <x-header>
        <x-header-home-content/>
    </x-header>

    <div class="index_back">
        <div class="index_box">
            <div class="row g-5 px-3">
                
@dd($ads)
                @foreach ($ads as $ad)
                <div>ciao</div>
                {{-- @dd($ad) --}}
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
                @endforeach

            </div>
        </div>
    </div>


    {{-- TUTTI GLI ANNUNCI --}}

    @else 
    <x-header/>   
        <livewire:ads.index />
    @endif

</x-main>