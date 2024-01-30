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

            <div class="col-xxl-6 col-xl-3 col-md-4 col-xs-3 responShow row justify-content-evenly">
                
                <div class="show_img_mini_container col-xxl-5 col-xl-3 col-md-4 col-xs-6">
                    @if ($ad_to_check->images->isEmpty()) 
                    <img class="min_jsSelect" src="https://picsum.photos/80/80" alt="">
                    <img class="min_jsSelect" src="https://picsum.photos/80/80"  alt="">
                    <img class="min_jsSelect" src="https://picsum.photos/80/80"  alt="">
                    <img class="min_jsSelect" src="https://picsum.photos/80/80"  alt="">
                    @else 
                    
                    @foreach ($ad_to_check->images()->get() as $img)
                        {{-- @dd($img->getUrl(80,80)) --}}
                    <img class="min_jsSelect" src="{{$img->getUrl(80,80)}}" alt="">

                    @endforeach 
                    @endif

                </div>

                <div class="col-xxl-7 col-xl-3 col-md-4 col-xs-6 ">
                    @if ($ad_to_check->images->isEmpty()) 
                    <img class="show_main_img adShow"  src="https://picsum.photos/300/451" alt="">
                    <img class="show_main_img "  src="https://picsum.photos/300/452" alt="">
                    <img class="show_main_img "  src="https://picsum.photos/300/453" alt="">
                    <img class="show_main_img "  src="https://picsum.photos/300/454" alt="">
                    @else 
                    @foreach ($ad_to_check->images()->get() as $img)
                    <img class="show_main_img "  src="{{$img->getUrl(300,450)}}" alt="">


                    @endforeach 
                    @endif
                    
                </div>

            </div>

            <div class="col-xxl-6 col-xl-3 col-md-4 col-xs-12  show_content_container">

                <h1>{{ $ad_to_check->title }}</h1>
                <p>{{$ad_to_check->category->name_it}}</p>
                <hr>

                <h4 class="ads_price ">{{ $ad_to_check->price }} £</h4>



                <div class="mt-3">
                    <h2>Descrizione</h2>
                    <p>{{ $ad_to_check->description }}</p>
                </div>
                {{-- {{route('user', $ad->user)}} --}}
                {{-- <div></div> --}}
                <form class="form_iframe" id="form_iframe" >
                    <input id="user_id_for_chat" type="text" name="user_id_chat" value="{{$ad_to_check->user->id}}">
                    <button type="submit" class="chidei_info">Dettaglio annuncio</button>
                </form>

                <div class="show_botom">

                    <div >
                        <a class="seller_box position-absolute bottom-0 end-0" href="{{route('user.seller.profile', $ad_to_check->user)}}">
                            <img class="ads_image_profile me-3" src="https://picsum.photos/400" alt=""> <p> {{ $ad_to_check->user->name }}</p>
                        </a>                       
                    </div>
                </div>

            


            </div>
        </div>

        {{-- <div class="container">
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
        </div> --}}

    </div>



                    </div>



                @endforeach
            </div>
        </div>

    @endif
</x-main>
