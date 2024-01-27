<x-main>
    <x-secondary-header />

    <div class="show_contaniner">
        <div class="row">

            <div class="col-xxl-6 col-xl-3 col-md-4 col-xs-3 responShow row justify-content-evenly">

                <div class="show_img_mini_container col-xxl-5 col-xl-3 col-md-4 col-xs-6">

                    <img src="https://picsum.photos/80/80" alt="">
                    <img src="https://picsum.photos/80/80" alt="">
                    <img src="https://picsum.photos/80/80" alt="">
                    <img src="https://picsum.photos/80/80" alt="">


                </div>

                <div class="col-xxl-7 col-xl-3 col-md-4 col-xs-6 ">
                    <img class="show_main_img" src="https://picsum.photos/300/450" alt="">
                </div>

            </div>

            <div class="col-xxl-6 col-xl-3 col-md-4 col-xs-12  show_content_container">

                <h1>{{ $ad->title }}</h1>
                <h3>{{ $ad->category->name }}</h3>
                <hr>

                <h4 class="ads_price ">{{ $ad->price }} £</h4>



                <div class="mt-3">
                    <h2>Descrizione</h2>
                    <p>{{$ad->category->name_it}}</p>
                    <p>{{ $ad->description }}</p>
                </div>
                <div><a class="chidei_info" href="{{route('user', $ad->user)}}">Chiedi informazioni sul annuncio</a></div>

                <div class="show_botom">
                    <button class="buy_now_button">
                        buy now
                    </button>

                    <div >
                        <a class="seller_box " href="{{route('user.seller.profile', $ad->user)}}">
                            <img class="ads_image_profile me-3" src="https://picsum.photos/400" alt=""> <p> {{ $ad->user->name }}</p>
                        </a>                       
                    </div>
                </div>

            </div>
        </div>
    </div>


















</x-main>
