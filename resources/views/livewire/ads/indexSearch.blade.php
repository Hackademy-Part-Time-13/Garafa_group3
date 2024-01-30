<div class="">
    <div class="container">

        <div class="index_sort">
            <div class="index_sort_box mt-5">
                <form class=" index_sort_form" action="{{ route('ad.searched') }}">
                    <input type="text" name="searched">
                    <button type="submit">Cerca</button>
                </form>

                {{-- BOTTONI SORT --}}

                <div class="index_sort_select">
                    <div class="">
                        <select wire:model.change="sortSelect" wire:change="applySort">
                            @if (Illuminate\Support\Facades\Lang::locale() == 'it')
                                <option selected value="noSorted">Nessun ordine</option>
                                <option value="newest">Dal più recente</option>
                                <option value="oldest">Dal meno recente</option>
                                <option value="cheapest">Dal più economico</option>
                                <option value="mostExpensive">Dal più caro</option>
                            @elseif(Illuminate\Support\Facades\Lang::locale() == 'en')
                                <option selected value="noSorted">Unsorted</option>
                                <option value="newest">Newest</option>
                                <option value="oldest">Oldest</option>
                                <option value="cheapest">Most affordable</option>
                                <option value="mostExpensive">Least affordable</option>
                            @elseif(Illuminate\Support\Facades\Lang::locale() == 'jp')
                                <option selected value="noSorted">並べ替えなし</option>
                                <option value="newest">最新</option>
                                <option value="oldest">最も古い</option>
                                <option value="cheapest">最も手頃な</option>
                                <option value="mostExpensive">最も高価な</option>
                            @endif
                        </select>
                    </div>

                    <div>
                        <select wire:model.change="categorySelect" wire:change="applyCat">
                            @if (Illuminate\Support\Facades\Lang::locale() == 'it')
                                <option disable selected>Filtra per categoria</option>
                                @foreach (App\Models\Category::all() as $category)
                                    <option value="{{ $category->id }}">{{ $category->name_it }}</option>
                                @endforeach
                            @elseif(Illuminate\Support\Facades\Lang::locale() == 'en')
                                <option disabled selected>Filter by category</option>
                                @foreach (App\Models\Category::all() as $category)
                                    <option value="{{ $category->id }}">{{ $category->name_en }}</option>
                                @endforeach
                            @elseif(Illuminate\Support\Facades\Lang::locale() == 'jp')
                                <option disabled selected>カテゴリでフィルタ</option>
                                @foreach (App\Models\Category::all() as $category)
                                    <option value="{{ $category->id }}">{{ $category->name_jp }}</option>
                                @endforeach
                            @endif 
                            
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- INDEX ANNUNCI --}}
    <div class="index_back">
        <div class="index_box">
            <div class="row g-5 px-3">

                @if($ads->isEmpty())
                <h4 class="text-white pt-3">La ricerca non ha prodotto risultati</h4>
                <h5 class="text-white">Prova una nuova ricerca o <a href="{{ route('ads.index')}}">sfoglia tutti gli annunci</a></h5>                  
                
                @else
                <h4 class="text-white pt-3">{{$ads->count()}} annunci trovati con la parola "{{$searched}}"</h4>

                @foreach ($ads as $ad)
                    <div class="col-xl-3 col-md-4 col-xs-12 d-flex justify-content-center">
                        <div class="ads_container ">
                            
                            <img class="ads_img_container"  @if($ad->images->isEmpty()) src="https://picsum.photos/400/400" @else src="{{Storage::url('images/' . $ad->id . '/1.jpg')}}" alt="" @endif>

                            <span class="ads_dettaglio_batton"><a href="{{ route('ad.show', $ad->id) }}">vista
                                    dettaglio</a></span>

                            <div class="ads_content"> 
                                <div class="ads_text_box">
                                    <p class="ads_titale ads_price">{{ $ad->price }} £</p>
                                    <p class="ads_titale">{{ $ad->title }}</p>
                                    <p class="ads_titale_description">{{ Str::limit($ad->description, 65) }}</p>

                                </div>

                                @auth
                                <div class="ads_favorites">

                                    
                                    @if (App\Models\Favorite::where('ad_id', $ad->id)->where('user_id', auth()->user()->id)->exists())
                                        <span wire:click="unlike({{ $ad }})" class="d-flex ads_favorites_flex"> <i
                                                class="bi bi-heart-fill"></i>
                                            <p>{{ $ad->favorites->count() }}</p>
                                        </span>
                                    @else
                                        <span wire:click="liker({{ $ad }})" class="d-flex ads_favorites_flex"><i
                                                class="bi bi-heart"></i>
                                            <p>{{ $ad->favorites->count() }}</p>
                                        </span>
                                    @endif
                                </div>
                                @endauth
                            </div>



                        </div>
                    </div>
                @endforeach
                @endif

            </div>
        </div>
    </div>

</div>
