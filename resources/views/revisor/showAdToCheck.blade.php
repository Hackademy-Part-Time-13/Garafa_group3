<x-main>
    <x-secondary-header />

<div class="show_container2">

    <div class="row justify-content-around">
            <div class="box_images col-lg-5 col-md-6 col-sm-12 py-2">
                    
                @if ($ad_to_check->images->isEmpty()) 
                    <img class="img-fluid m-1" src="https://picsum.photos/80/80" alt="">
                    <img class="img-fluid m-1" src="https://picsum.photos/80/80"  alt="">
                    <img class="img-fluid m-1" src="https://picsum.photos/80/80"  alt="">
                    <img class="img-fluid m-1" src="https://picsum.photos/80/80"  alt="">
                    
                @else 
                <div class="row">
                    @foreach ($ad_to_check->images()->get() as $img)

                    <div class="col-lg-5 col-md-10 col-sm-10 mb-3 mx-auto">
                        <img class="img-fluid my-2 " src="{{$img->getUrl(400,400)}}" alt="">
                    </div>

                    <div class="col-6 d-flex align-items-center">
                        <div class="row border border-4 rounded w-100 d-flex flex-nowrap">
                            <div class="col-lg-6 col-md-5 col-sm-4 border-end my-2 px-3">
                                <p>Adults content: <span class="{{$img->adult}}"></span></p>
                                <p>Counterfeit content: <span class="{{$img->spoof}}"></span></p>
                                <p>Medical content: <span class="{{$img->medical}}"></span></p>
                                <p>Violent content: <span class="{{$img->violence}}"></span></p>
                                <p>Provocative content: <span class="{{$img->racy}}"></span></p>                                    
                            </div>

                            <div class="col-lg-6 col-md-10 col-sm-10 my-auto">                                   
                                @if ($img->labels)
                                    @foreach ($img->labels as $label)
                                        <p class="d-inline">{{$label}} - </p>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach 
                </div>
                @endif
                    
            </div>

            <div class="col-lg-6 col-md-4 col-sm-10 show_content_container">
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


</x-main>