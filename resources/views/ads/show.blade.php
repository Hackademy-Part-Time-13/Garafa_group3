{{-- GABRI
    - Dettaglio annuncio: CARD -> Titolo, categoria, prezzo, descrizione, foto segnaposto, venditore, data pubblicazione.
    - Carosello: (lorem picsum) N-foto segnaposto
    --}}


<x-main>
    <x-secondary-header />


    <div class="show_contaniner">
        <div class="row">

            <div class="col-6  row justify-content-evenly">

                <div class="show_img_mini_container col-5">
                    <img src="https://picsum.photos/80/80" alt="">
                    <img src="https://picsum.photos/80/80" alt="">
                    <img src="https://picsum.photos/80/80" alt="">
                    <img src="https://picsum.photos/80/80" alt="">


                </div>

                <div class="col-7 ">
                    <img class="show_main_img"  src="https://picsum.photos/300/400" alt="">
                </div>

            </div>

            <div class="col-6  show_content_container">

                <h1>{{ $ad->title }}</h1>
                <h3>{{ $ad->category->name }}</h3>
                <hr>

                <h4 class="ads_price ">{{ $ad->price }} £</h4>

                

                <div class="mt-3">
                    <h2>Descrizione</h2>
                    <p>{{ $ad->description }}</p>
                </div>

                <button class="buy_now_button">
                    buy now
                </button>
            </div>
        </div>
    </div>



    <div class="seller_continor">

        <div class="user_img_name text-center">
            <img class="image_profile" src="https://picsum.photos/400" alt="">
            <h2>{{ $ad->user->name }}</h2>

            @if ($ad->user->is_revisor)           
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
        <p>add frieds</p>
    </div>












</x-main>
