<x-main>
    <x-header>
      <x-header-home-content/>
    </x-header>
    
   
        @if (session('status'))
         <div class="container my-5">
        <div class="ms-auto me-auto text-center col-6 my-2 alert alert-success">
            {{ session('status') }}
        </div>
         </div>
        @elseif (session('message'))
        <div class="container my-5">
        <div class="ms-auto me-auto text-center col-6 my-2 alert alert-success">
            {{ session('message') }}
        </div>
        </div>
    
        @elseif (session()->has('success'))
        <div class="container my-5">
        <div class="ms-auto me-auto text-center col-6 my-2 alert alert-success">
            {{session('success')}}
        </div>
        </div>
    
        @elseif ($errors->any())
        <div class="container my-5">
            @foreach ($errors->all() as $error) 
            <div class="ms-auto me-auto text-center col-6 my-2 alert alert-danger">
                <li>{{$error}}</li>
            </div>
            @endforeach            
        </div>

        @elseif (session('error'))
        <div class="container my-5">
        <div class="ms-auto me-auto text-center col-6 my-2 alert alert-danger">
            {{ session('error') }}
        </div>
        </div>
        @endif
   
    {{-- scroll categorie --}}
    <div class="container ">
        <div class=" category_card_container">

            @if ( Illuminate\Support\Facades\Lang::locale()== 'it')
            @foreach (App\Models\Category::all() as $category)
            <x-CategoryCard :title="$category->name_it" :category="$category" 
            :ads="App\Models\Ad::where('is_accepted', true)->where('category_id', $category->id)->get()->count()" />
        @endforeach
       

            @elseif( Illuminate\Support\Facades\Lang::locale() == 'en')

            @foreach (App\Models\Category::all() as $category)
            <x-CategoryCard :title="$category->name_en" :category="$category" 
            :ads="App\Models\Ad::where('is_accepted', true)->where('category_id', $category->id)->get()->count()" />
        @endforeach

            @elseif( Illuminate\Support\Facades\Lang::locale() == 'jp')

            @foreach (App\Models\Category::all() as $category)
            <x-CategoryCard :title="$category->name_jp" :category="$category" 
            :ads="App\Models\Ad::where('is_accepted', true)->where('category_id', $category->id)->get()->count()" />

        @endforeach
            
            @endif
          

        </div>
    </div>
    {{-- scroll categorie --}}
    
    
  

    <div class="home_back">
        <div class="home_box row">

            <div class="col-xxl-6 col-xl-3 col-md-4 col-xs-12 p-5 d-flex justify-content-center align-items-center">
                <img src="https://picsum.photos/400/500" alt="">
            </div>

            <div class="col-xxl-6 col-xl-3 col-md-4 col-xs-12 p-5  d-flex justify-content-center align-items-center">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo aliquid, alias non ullam veritatis,
                    impedit
                    beatae enim ad repudiandae officiis recusandae. Laudantium adipisci similique esse magnam ducimus
                    quae id
                    tenetur?
                </p>
            </div>


        </div>

    </div>





   </div>





   <div class="text-center home_text_one" >
      <h1>about</h1>
      <p>{{__('ui.about')}}</p>
    </div>

    <div class="home_revisori_container">
        <div class="container ">
            <h3 class="text-center p-3">Posizioni aperte</h3>
            <div class="col-12  d-flex justify-content-center">
                <a class="footer_lavora_con_noi" href="{{ route('work.with.us') }}">
                    <p>{{ __('ui.work') }}</p>
                </a>
    
            </div>
            
        <div class="home_user_box">
            @foreach (App\Models\User::where('is_revisor',true)->get() as $user)
                <x-user-card-h-ome :user="$user"/>
            @endforeach
        </div>
        

        </div>

    </div>

</x-main>


