<x-main>
    <x-secondary-header />
    <x-iframe_chat/>
    <div class="show_contaniner">
        <div class="row item_show">

            <div class="col-xxl-6 col-xl-3 col-md-4 col-xs-3 responShow row justify-content-evenly">
                
                <div class="show_img_mini_container col-xxl-5 col-xl-3 col-md-4 col-xs-6">
                    @if ($ad->images->isEmpty()) 
                    <img class="min_jsSelect" src="https://picsum.photos/80/80" alt="">
                    <img class="min_jsSelect" src="https://picsum.photos/80/80"  alt="">
                    <img class="min_jsSelect" src="https://picsum.photos/80/80"  alt="">
                    <img class="min_jsSelect" src="https://picsum.photos/80/80"  alt="">
                    @else 
                    
                    @foreach ($ad->images()->get() as $img)
                        {{-- @dd($img->getUrl(80,80)) --}}
                    <img class="min_jsSelect" src="{{$img->getUrl(80,80)}}" alt="">

                    @endforeach 
                    @endif

                </div>

                <div class="col-xxl-7 col-xl-3 col-md-4 col-xs-6 ">
                    @if ($ad->images->isEmpty()) 
                    <img class="show_main_img adShow"  src="https://picsum.photos/300/451" alt="">
                    <img class="show_main_img "  src="https://picsum.photos/300/452" alt="">
                    <img class="show_main_img "  src="https://picsum.photos/300/453" alt="">
                    <img class="show_main_img "  src="https://picsum.photos/300/454" alt="">
                    @else 

                    <img class="show_main_img_placeHoder_img adShow" id="placeHoder_img"  src="{{$ad->images()->first()->getUrl(300,450)}}" alt="">
                    @foreach ($ad->images()->get() as $img)
                    <img class="show_main_img "  src="{{$img->getUrl(300,450)}}" alt="">
                    @endforeach 
                    @endif
                    
                </div>

            </div>

            <div class="col-xxl-6 col-xl-3 col-md-4 col-xs-12  show_content_container">

                <h1>{{ $ad->title }}</h1>
                <p>{{$ad->category->name_it}}</p>
                <hr>

                <h4 class="ads_price ">{{ $ad->price }} £</h4>



                <div class="mt-3">
                    <h2>Descrizione</h2>
                    <p>{{ $ad->description }}</p>
                </div>
                {{-- {{route('user', $ad->user)}} --}}
                {{-- <div></div> --}}
                <form class="form_iframe" id="form_iframe" >
                    <input id="user_id_for_chat" type="text" name="user_id_chat" value="{{$ad->user->id}}">
                    <button type="submit" class="chidei_info">Chiedi informazioni sul annuncio</button>
                </form>

                <div class="show_botom">
                    

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
