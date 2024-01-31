<x-main>
    <x-secondary-header />
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
                        {{-- <h5></h5> --}}


                        <div class="google_box p-2 mt-2">
                            
                            <div class="row">
                                <div class="col-md-6 border-end">
                                    <p>Adults content: <span class="{{$img->adult}}"></span></p>
                                    <p>Counterfeit content: <span class="{{$img->spoof}}"></span></p>
                                    <p>Medical content: <span class="{{$img->medical}}"></span></p>
                                    <p>Violent content: <span class="{{$img->violence}}"></span></p>
                                    <p>Provocative content: <span class="{{$img->racy}}"></span></p>                                    
                                </div>

                                <div class="col-md-6">                                   
                                    @if ($img->labels)
                                        @foreach ($img->labels as $label)
                                            <p class="d-inline">{{$label}} - </p>
                                        @endforeach
                                    @endif
                                </div>
                            </div>

                        </div>


                    @endforeach

                    @endif
                    
                </div>

            </div>

            <div class="col-xxl-6 col-xl-3 col-md-4 col-xs-12 show_content_container">
                <h1>{{ $ad_to_check->title }}</h1>
                <p>{{$ad_to_check->category->name_it}}</p>
                <hr>

                <h4 class="ads_price ">{{ $ad_to_check->price }} £</h4>

                <div class="mt-3">
                    <h2>Descrizione</h2>
                    <p>{{ $ad_to_check->description }}</p>
                </div>

                <div class="">
                    <div>
                        <a class="seller_box col-4 mb-3" href="{{route('user.seller.profile', $ad_to_check->user)}}">
                            <img class="ads_image_profile me-3" src="https://picsum.photos/400" alt=""> <p> {{ $ad_to_check->user->name }}</p>
                        </a>                       
                    </div>
                </div>
            

                
                <div class="row revisione_accrtta_rifiutabutton mt-4">

                    <div class="col-12 col-md-4 text-center">
                    <form action="{{ route('revisor.accept_ad', ['ad' => $ad_to_check]) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button>Accetta</button>
                    </form>
                    </div>

                    <div class="col-12 col-md-4 text-center">
                    <form action="{{ route('revisor.reject_ad', ['ad' => $ad_to_check]) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button>Rifiuta</button>
                    </form>
                    </div>

                    <div class="col-12 col-md-4 text-center">
                    <form action="{{ route('revisor.reject_ad', ['ad' => $ad_to_check]) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button>Elimina</button>
                    </form>
                    </div>
                
                </div>  
        </div>        


        </div>
    </div>


</x-main>