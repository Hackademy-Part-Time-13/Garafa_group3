<x-main>
    <x-secondary-header />
    <div class="container">
        @if (session('status'))
            <div class="ms-auto me-auto text-center col-6 my-2 alert alert-success">
                {{ session('status') }}
            </div>
        @elseif (session('message'))
            <div class="ms-auto me-auto text-center col-6 my-2 alert alert-success">
                {{ session('message') }}
            </div>
        @elseif (session()->has('success'))
            <div class="ms-auto me-auto text-center col-6 my-2 alert alert-success">
                {{ session('success') }}
            </div>
        @elseif ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="ms-auto me-auto text-center col-6 my-2 alert alert-danger">
                    <li>{{ $error }}</li>
                </div>
            @endforeach
        @elseif (session('error'))
            <div class="ms-auto me-auto text-center col-6 my-2 alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <div class="row">
            <div class="col-12">
                <h1 class="mt-5">
                    @if ($ads_to_check->isEmpty())
                        'Non ci sono annunci da revisionare'
                    @else
                        'Ecco l'annuncio da revisionare'
                    @endif
                </h1>
            </div>
        </div>
    </div>

    @if (!$ads_to_check->isEmpty())

        <div class="container">
            <div class="row">
                @foreach ($ads_to_check as $ad_to_check)
                    <div class="col-12">
                        <div class="show_contaniner">
                            <div class="row">
                                <div class="col-12 mb-5 pb-5 d-flex justify-content-center">
                                    <div class="col-3 d-flex justify-content-center">
                                        <div class="ads_container ">

                                            <img class="ads_img_container" src="https://picsum.photos/400/400"
                                                alt="">

                                            <span class="ads_dettaglio_batton"><a
                                                    href="{{ route('ad.show', $ad_to_check->id) }}">vista
                                                    dettaglio</a></span>

                                            <div class="ads_content">
                                                <div class="ads_text_box">
                                                    <p class="ads_titale ads_price">{{ $ad_to_check->price }} £</p>
                                                    <p class="ads_titale">{{ $ad_to_check->title }}</p>
                                                    <p class="ads_titale_description">
                                                        {{ Str::limit($ad_to_check->description, 65) }}</p>

                                                </div>

                                                <div class="ads_favorites">


                                                    <span class="d-flex ads_favorites_flex"><i class="bi bi-heart"></i>
                                                        <p>0</p>
                                                    </span>

                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                </div>

                                <div class="col-6  row justify-content-evenly">

                                    <div class="show_img_mini_container col-5">
                                        <img src="https://picsum.photos/80/80" alt="">
                                        <img src="https://picsum.photos/80/80" alt="">
                                        <img src="https://picsum.photos/80/80" alt="">
                                        <img src="https://picsum.photos/80/80" alt="">


                                    </div>

                                    <div class="col-7 ">
                                        <img class="show_main_img" src="https://picsum.photos/300/400" alt="">
                                    </div>

                                </div>

                                <div class="col-6  show_content_container">

                                    <h1>{{ $ad_to_check->title }}</h1>
                                    <h3>{{ $ad_to_check->category->name }}</h3>
                                    <hr>

                                    <h4 class="ads_price ">{{ $ad_to_check->price }} £</h4>



                                    <div class="mt-3">
                                        <h2>Descrizione</h2>
                                        <p>{{ $ad_to_check->description }}</p>
                                    </div>

                                    <button class="buy_now_button">
                                        buy now
                                    </button>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="row revisione_accrtta_rifiutabutton">
                        <div class="col-12 col-md-6">
                            <form action="{{ route('revisor.accept_ad', ['ad' => $ad_to_check]) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button>Accetta</button>
                            </form>
                        </div>
                        <div class="col-12 col-md-6 text-end">
                            <form action="{{ route('revisor.reject_ad', ['ad' => $ad_to_check]) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button>Rifiuta</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    @endif
</x-main>
