
<div class="">

    {{-- bottoni sort --}}

    <div class="index_sort">
        <div class="index_sort_box">
            <ul class="conatainer index_sort_ul">

                <li wire:click="sortNEW" >new/old</li> 
            
                <li wire:click="sortOLD">old/new</li> 
            
                <li wire:click="expensiveToCheap">expensive/cheap</li> 
            
                <li wire:click="cheapToExpensive">cheap/expensive</li> 
                
                <li class="nav-item dropdown ">
            
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            category
                            </a>
                            <ul class="dropdown-menu index_sort_ul_category">
                            @foreach(App\Models\category::all() as $category)
                            <li><a wire:click="sortCategory({{$category}})" class="dropdown-item" >{{$category->name}}</a></li>
                            @endforeach
                            </ul>
            
                </li>
               
            
                </ul>
        </div>
    </div>
    {{-- fine bottoni sort --}}

    {{-- indec dei annunci --}}
    <div class="row g-3 px-3">
        
        @foreach ($ads as $ad)

                
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
    {{-- indec dei annunci --}}

</div>
