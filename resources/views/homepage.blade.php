<x-main>
    <x-header>
        <x-header-home-content />
    </x-header>
    <x-session-error />


   

    {{-- scroll categorie --}}
    <div class="container ">
        <div class=" category_card_container">

            @if (Illuminate\Support\Facades\Lang::locale() == 'it')
                @foreach (App\Models\Category::all() as $category)
                    <x-CategoryCard :title="$category->name_it" :category="$category" :ads="App\Models\Ad::where('is_accepted', true)
                        ->where('category_id', $category->id)
                        ->get()
                        ->count()" />
                @endforeach
            @elseif(Illuminate\Support\Facades\Lang::locale() == 'en')
                @foreach (App\Models\Category::all() as $category)
                    <x-CategoryCard :title="$category->name_en" :category="$category" :ads="App\Models\Ad::where('is_accepted', true)
                        ->where('category_id', $category->id)
                        ->get()
                        ->count()" />
                @endforeach
            @elseif(Illuminate\Support\Facades\Lang::locale() == 'jp')
                @foreach (App\Models\Category::all() as $category)
                    <x-CategoryCard :title="$category->name_jp" :category="$category" :ads="App\Models\Ad::where('is_accepted', true)
                        ->where('category_id', $category->id)
                        ->get()
                        ->count()" />
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
                <p>Presto.it è un sito per pubblicare annunci caratterizzato da un design pulito atto a mettere in evidenza gli annunci pubblicati e ad agevolare le ricerche degli utenti. E' progettato per essere responsive su ogni dispositivo e inoltre pensato per essere di semplice utilizzo e accessibile a tutti i tipi di utenti.
                </p>
            </div>


        </div>

    </div>





    </div>





    <div class="text-center home_text_one">
        <h1>about</h1>
        <p>{{ __('ui.about') }}</p>
    </div>

    <div class="home_revisori_container">
        
            <h3 class="text-center p-3">{{ __('ui.position') }}</h3>
            <div class="col-12  d-flex justify-content-center">
                <a class="footer_lavora_con_noi" href="{{ route('work.with.us') }}">
                    <p>{{ __('ui.work') }}</p>
                </a>

            </div>

            <div class="home_user_box">
                <div class="row user_card_hm">
                    @foreach (App\Models\User::where('is_revisor', true)->take(3)->get() as $user)
                    <div class="col-xl-4 col-md-4 col-xs-12 ">


                        <x-user-card-home :user="$user" />



                    </div>
                    @endforeach
                </div>

            </div>


        </div>

    </div>

</x-main>
