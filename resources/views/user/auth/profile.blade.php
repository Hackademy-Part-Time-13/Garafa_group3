<x-main>
    <x-secondary-header/>
    <div class="user_container_profile">

        <div class="user_img_name">
            <img class="image_profile" src="https://picsum.photos/400" alt="">
            <h2>{{ Auth::user()->name }}</h2>

            @if (Auth::user()->is_revisor)           
            <h6>revisore</h6>   
            @else
            <h6>utent</h6>              
            @endif

        </div>

        <div class="user_icons text-center">
            <div class="">
                <i class="bi bi-heart"></i>
                <p>23</p>

            </div>
            <div>

                <i class="bi bi-chat-square-text"></i>
                <p>4</p>
            </div>
        </div>
        <p>get in contact</p>
    </div>



<h1 class="user_text text-center">liked ads</h1>


    <div class="User_likes column">
        
            
                
                @foreach (App\Models\Favorite::where('user_id',auth()->user()->id)->get() as $favorite)
                    <div class="col-3 responsiv_likes d-flex justify-content-center">
                        <div class="ads_container ">

                            <img class="ads_img_container" src="https://picsum.photos/400/400" alt="">

                            <span class="ads_dettaglio_batton"><a href="{{ route('ad.show', $favorite->ad->id) }}">vista
                                    dettaglio</a></span>

                            <div class="ads_content">
                                <div class="ads_text_box">
                                    <p class="ads_titale ads_price">{{ $favorite->ad->price }} £</p>
                                    <p class="ads_titale">{{ $favorite->ad->title }}</p>
                                    <p class="ads_titale_description">{{ Str::limit($favorite->ad->description, 65) }}</p>

                                </div>

                                <div class="ads_favorites">

                                    <livewire:Extra.favorites :ad="$favorite->ad"/>
                                </div>
                            </div>



                        </div>
                    </div>
                @endforeach

            
        
    </div>
    <div class="user_prova">
    </div>


    <h1 class="user_text text-center">your ads</h1>

    <div class="User_likes">
            
                
                @foreach (App\Models\Ad::where('user_id',auth()->user()->id)->get() as $ad)
                    <div class="col-3 responsiv_likes d-flex justify-content-center">
                        <div class="ads_container ">

                            <img class="ads_img_container" src="https://picsum.photos/400/400" alt="">

                            <span class="ads_dettaglio_batton"><a href="{{ route('ad.show', $ad->id) }}">vista
                                    dettaglio</a></span>

                            <div class="ads_content">
                                <div class="ads_text_box">
                                    <p class="ads_titale ads_price">{{ $ad->price }} £</p>
                                    <p class="ads_titale">{{ $ad->title }}</p>
                                    <p class="ads_titale_description">{{ Str::limit($ad->description, 65) }}</p>

                                </div>

                                <div class="ads_favorites">

                                    <livewire:Extra.favorites :ad="$ad"/>
                                </div>
                            </div>



                        </div>
                    </div>
                @endforeach

            
        
    </div>
    <div class="user_prova">
    </div>


</x-main>
