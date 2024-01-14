<x-main>

<div class="row g-3 px-3">
        
    @foreach ($category->ads as $ad)

            
            <div class="card" style="width: 18rem;">

                <img src="https://picsum.photos/300/200" class="card-img-top" alt="...">

                <div class="card-body">
                    
                  <h5 class="card-title">{{$ad->title}}</h5>
                  <h6 class="card-subtitle mb-2 text-body-secondary">{{$ad->category->name}}</h6>
                  <p class="card-text">{{Str::limit($ad->description, 50)}}</p>
                  <p class="btn btn-primary">{{$ad->price}}</p>
                  <a href="{{route('ad.show',$ad)}}" class="btn btn-primary">Card link</a>
                    <livewire:extra.favorites :ad="$ad"/>
                </div>

            </div>

    @endforeach
</div>

</x-main>