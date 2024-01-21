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
                            <option selected value="noSorted">Nessun ordine</option>
                            <option value="newest">Dal più recente</option>
                            <option value="oldest">Dal meno recente</option>
                            <option value="cheapest">Dal più economico</option>
                            <option value="mostExpensive">Dal più caro</option>
                        </select>
                    </div>

                    <div>
                        <select wire:model.change="sortSelect" wire:change="applySort">
                            <option selected value="noSorted">Category</option>
                            @foreach(App\Models\Category::all() as $category)
                            <option selected value="noSorted">{{$category->name}}</option>
                            @endforeach
                            
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
                <h5 class="text-white">Prova una nuova ricerca o sfoglia tutti gli annunci</h5>                    
                
                @else
                @foreach ($ads as $ad)
                    <div class="col-3 d-flex justify-content-center">
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
                            </div>



                        </div>
                    </div>
                @endforeach
                @endif

            </div>
        </div>
    </div>

</div>
