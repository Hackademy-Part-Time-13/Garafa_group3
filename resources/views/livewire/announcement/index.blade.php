<div class="">

    {{-- bottoni sort --}}
    <div>

    <ul class="conatainer ">

    <li wire:click="sortNEW" >new/old</li> 

    <li wire:click="sortOLD">old/new</li> 
    
    <li class="nav-item dropdown">

                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                category
                </a>
                <ul class="dropdown-menu">
                @foreach(App\Models\category::all() as $category)
                <li><a wire:click="sortCategory({{$category}})" class="dropdown-item" >{{$category->name}}</a></li>
                @endforeach
                </ul>

    </li>
   

    </ul>



    </div>
    {{-- fine bottoni sort --}}

    {{-- indec dei annunci --}}
    <div class="row g-3 px-3">
        
        @foreach ($announcements as $announcement)

                
                <div class="card" style="width: 18rem;">
                    <img src="https://picsum.photos/300/200" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{$announcement->title}}</h5>
                      <h6 class="card-subtitle mb-2 text-body-secondary">{{$announcement->category->name}}</h6>
                      <p class="card-text">{{Str::limit($announcement->description, 50)}}</p>
                      <p class="btn btn-primary">{{$announcement->price}}</p>
                      <a href="{{route('announcement.show',$announcement)}}" class="btn btn-primary">Card link</a>
                    </div>
                </div>

        @endforeach
    </div>
    {{-- indec dei annunci --}}

</div>
