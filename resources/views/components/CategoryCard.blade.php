
<a class="category-card  col-4" href="{{ route('adsByCat', $category) }}">

    
    {{-- <img src="https://picsum.photos/400" class="card-img-top" style="height: 40mm"> --}}

        @switch($category->id)
            @case(1)
            <img src="https://i.postimg.cc/s2mDxXKH/sedan-car-front-1.png" alt="" class="category-icon">
                @break
            @case(2)
            <img src="https://i.postimg.cc/jqNm49Yt/scooter-2.png" alt="" class="category-icon">
                @break
            @case(3)
            <img src="https://i.postimg.cc/sfqSs6MQ/imac.png" alt="" class="category-icon">
                @break
            @case(4)
            <img src="https://i.postimg.cc/cH8YP2Qc/smartphone-call.png" alt="" class="category-icon">   
                @break
            @case(5)
            <img src="https://i.postimg.cc/g0cbSPbf/videogame-console-1.png" alt="" class="category-icon">   
                @break
            @case(6)
            <img src="https://i.postimg.cc/G21hh5WK/furniture.png" alt="" class="category-icon">   
                @break
            @case(7)
            <img src="https://i.postimg.cc/MKtD0ktc/gardening.png" alt="" class="category-icon">   
                @break
            @case(8)
            <img src="https://i.postimg.cc/y8m7pPgS/electrical-appliances.png" alt="" class="category-icon">   
            @break
            @case(9)
            <img src="https://i.postimg.cc/j2yJ8fzq/bicycle-hand-drawn-ecological-transport-1.png" alt="" class="category-icon">   
            @break
            @case(10)
            <img src="https://i.postimg.cc/KzxXkSJ9/apartment.png" alt="" class="category-icon">   
            @break
            @default
                
        @endswitch
        <h5>{{ $title }}
            {{-- <a href="{{ route('adsByCat', $category) }}"></a> --}}
        </h5>
        <p>

            @if ($ads == 0)
                {{__('ui.noads')}}
            @elseif($ads == 1)
                {{ $ads }}  {{__('ui.onead')}}
            @elseif($ads > 1)
                {{ $ads }}  {{__('ui.manyads')}}
            @endif


        </p>
    
    
</a>

