<x-main>
    <x-secondary-header />

<div class="show_container2">

    <div class="row justify-content-around">

        <div class="box_images col-lg-5 col-md-6 col-sm-10 mt-2">
                    
            @if ($ad_to_check->images->isEmpty()) 
                <img class="img-fluid m-1" src="https://picsum.photos/80/80" alt="">
                <img class="img-fluid m-1" src="https://picsum.photos/80/80"  alt="">
                <img class="img-fluid m-1" src="https://picsum.photos/80/80"  alt="">
                <img class="img-fluid m-1" src="https://picsum.photos/80/80"  alt="">
            @else 

            <div class="row">
                @foreach ($ad_to_check->images()->get() as $img)

                <div class="col-lg-6 col-md-10 col-sm-10 mb-3">
                    <img class="img-fluid my-2" src="{{$img->getUrl(400,400)}}" alt="">
                </div>

                <div class="col-lg-5 col-md-10 col-sm-10 d-flex align-items-center">
                    {{-- <div class="row rounded rounded-4 w-100 d-flex flex-nowrap"> --}}
                        <div class="col-lg-8 col-md-10 col-sm-12 my-2 px-3">
                            <p>Adults content: <span class="{{$img->adult}}"></span></p>
                            <p>Counterfeit content: <span class="{{$img->spoof}}"></span></p>
                            <p>Medical content: <span class="{{$img->medical}}"></span></p>
                            <p>Violent content: <span class="{{$img->violence}}"></span></p>
                            <p>Provocative content: <span class="{{$img->racy}}"></span></p>                                    
                        </div>

                        {{-- <div class="col-lg-6 col-md-10 col-sm-10 my-auto">                                   
                        @if ($img->labels)
                            @foreach ($img->labels as $label)
                                <p class="d-inline">{{$label}} - </p>
                            @endforeach
                        @endif
                        </div> --}}
                    {{-- </div> --}}
                </div>
                @endforeach 

            </div>
            @endif                    
        </div>

        <div class="col-lg-6 col-md-4 col-sm-10 box_content d-flex flex-column mt-2">
            <h1>{{ $ad_to_check->title }}</h1>
            <p>{{$ad_to_check->category->name_it}}</p>
            <hr>
            <div class="">
                <h4 class="box_price d-inline">{{ $ad_to_check->price }} £</h4>
            </div>

            <div class="mt-3">
                <h2>Descrizione</h2>
                <p>{{ $ad_to_check->description }}</p>
            </div>

            <div class="">
                <div>
                    <a class="seller_box col-lg-3 col-md-6 col-sm-12 mb-3 ms-auto me-1" href="{{route('user.seller.profile', $ad_to_check->user)}}">
                        <img class="ads_image_profile me-3" src="https://picsum.photos/400" alt=""> <p> {{ $ad_to_check->user->name }}</p>
                    </a>                       
                </div>
            </div>            
                
            <div class=" revisione_accrtta_rifiutabutton mt-auto">
                <div class="row">

                    <div class="col-lg-4 col-md-4 col-sm-6 mb-3 text-center">
                        <form action="{{ route('revisor.accept_ad', ['ad' => $ad_to_check]) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button>Accetta</button>
                        </form>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 mb-3 text-center">
                        <form action="{{ route('revisor.reject_ad', ['ad' => $ad_to_check]) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button>Rifiuta</button>
                        </form>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 mb-3 text-center">
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
</div>


</x-main>