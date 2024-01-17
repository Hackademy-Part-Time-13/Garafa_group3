<div class="">

    <div class="container">

        <div class="index_sort">
            <div class="index_sort_box mt-5">
                <form class="header_form" action="{{route('ad.searched')}}">
                    <input type="text" name="searched">
                    <button type="submit">Cerca</button>
                </form>
            </div>
        </div>

    {{-- BOTTONI SORT --}}
    <div class="container mt-3 mb-3">
        <div class="d-flex justify-content-end">
            <div class="col-auto">
                <select wire:model.change="$sortSelect" class="form-select">
                    <option selected value="noSorted">Nessun ordine</option>
                    <option value="newest">Dal più recente</option>
                    <option value="oldest">Dal meno recente</option>
                    <option value="cheapest">Dal più economico</option>
                    <option value="mostExpensive">Dal più caro</option>
                </select>
            </div>
        </div>
    </div>
    
    </div>


    {{-- INDEX ANNUNCI --}}
    <div class="index_back">
        <div class="index_box">
            <div class="row g-5 px-3">

            @foreach ($ads as $ad)

            <div class="col-4 d-flex justify-content-center">
                <div class="ads_container ">

                    <img class="ads_img_container" src="https://picsum.photos/400/400" alt="">

                    <span class="ads_dettaglio_batton"><a href="{{ route('ad.show', $ad->id) }}">vista dettaglio</a></span>
                    <p class="ads_titale">{{ $ad->title }}</p>

                    <div class="ads_favorites">

                    @if (App\Models\Favorite::where('ad_id', $ad->id)->where('user_id', auth()->user()->id)->exists())
                        <span wire:click="unlike({{$ad}})" class="d-flex"> <i class="bi bi-heart-fill"></i>
                            <p>{{ $ad->favorites->count() }}</p>
                        </span>

                    @else
                        <span wire:click="liker({{$ad}})" class="d-flex"><i class="bi bi-heart"></i>
                            <p>{{ $ad->favorites->count() }}</p>
                        </span>
                    @endif

                    </div>
                </div>
            </div>

            @endforeach

            </div>
        </div>
    </div>

</div>
