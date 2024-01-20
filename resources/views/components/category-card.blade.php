
<a class="category-card  col-4" href="{{ route('adsByCat', $category) }}">

    
    {{-- <img src="https://picsum.photos/400" class="card-img-top" style="height: 40mm"> --}}

        @switch($category->id)
            @case(1)
            <i class="bi bi-car-front "></i>
                @break
            @case(2)
            <img src="https://i.postimg.cc/cJLFTQNT/motorcycle-2.png" alt="" style="width: 40px; height: 40px;">
                @break
            @case(3)
            <i class="bi bi-car-front "></i>    
                @break
            @case(4)
            <i class="bi bi-car-front "></i>    
                @break
            @case(5)
            <i class="bi bi-car-front "></i>    
                @break
            @case(6)
            <i class="bi bi-car-front "></i>    
                @break
            @case(7)
            <i class="bi bi-car-front "></i>    
                @break
            @case(8)
            <i class="bi bi-car-front "></i>    
                @break
            @case(9)
            <i class="bi bi-bicycle"></i>   
                @break
            @case(10)
            <i class="bi bi-car-front "></i>    
                @break
            @default
                
        @endswitch
        <h5>{{ $title }}
            {{-- <a href="{{ route('adsByCat', $category) }}"></a> --}}
        </h5>
        <p>

            @if ($ads == 0)
                Nessun annuncio
            @elseif($ads == 1)
                {{ $ads }} annuncio
            @elseif($ads > 1)
                {{ $ads }} annunci
            @endif


        </p>
    
    
</a>

