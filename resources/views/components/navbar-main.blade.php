<nav class="  p-0">
    <div class="navbar_main">

        <div class="navbar_component ">

            <ul class="">
                <li class="navbar_home_button" >

                    <a href="">
                        Presto.it
                    </a> 

                </li>
            </ul>

        </div>



        <div class="big_nav">
            <ul class=" navbar_component">
                <li class="nav_start 
                 text-white @if(Illuminate\Support\Facades\Route::currentRouteName() == 'home') carent_root @endif ">

                    <a href="{{ route('home') }}" class="">Home</a>
                </li>


                {{-- REGISTER E LOGIN --}}
                @guest
                    <li class=" @if(Illuminate\Support\Facades\Route::currentRouteName() == 'register') carent_root @endif">
                        <a href="{{ route('register') }}">
                            Register</a>
                    </li>

                    <li class=" @if(Illuminate\Support\Facades\Route::currentRouteName() == 'login') carent_root @endif">
                      
                        <a href="{{ route('login') }}">
                            Login</a>
                    </li>

                    <li class="nav_end 
                    @if(Illuminate\Support\Facades\Route::currentRouteName() == 'ad.create') carent_root @endif
                    ">
                        <a href="{{ route('ad.create') }}">Inserisci annuncio</a>
                    </li>
                @endguest


                {{-- OPZIONI ANNUNCI --}}
                @auth

                    <li class="
                    @if(Illuminate\Support\Facades\Route::currentRouteName() == 'ad.create') carent_root @endif
                    ">
                        <a class="nav-link  " href="{{ route('ad.create') }}">
                            Inserisci annuncio</a>
                    </li>

                    <li class="
                    @if(Illuminate\Support\Facades\Route::currentRouteName() == 'ads.index') carent_root @endif
                    ">
                        <a class="nav-link" href="{{ route('ads.index') }}">Tutti gli annunci</a>
                    </li>

                @endauth

                {{-- drpdown --}}
                @auth
                    <li class=" dropdown nav_end  
                    @if(Illuminate\Support\Facades\Route::currentRouteName() == 'user.auth.profile') carent_root @endif
                    ">
                        <a class="nav-link dropdown-toggle " role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">{{ Auth::user()->name }} </a>
                        <ul class="dropdown-menu ">

                            <li>
                                <a class="dropdown-item" href="{{route('user.auth.profile')}}">Il mio profilo</a>
                            </li>
                            
                            @if(auth()->user()->is_revisor)
                            <li>
                                <a class="dropdown-item" href="{{route('revisor.index')}}">Zona revisore</a>
                                <span class="position-absolute top-0 start-100 translate-niddle badge rounded-pill bg-danger" >
                                    {{App\Models\Ad::toBeRevisionedCount()}}
                                    <span>
                                        unread messages
                                    </span>
                                </span>

                            </li>
                            @endif

                            <li>
                                <a class="dropdown-item" href="">Opzione 3</a>
                            </li>

                            {{-- LOGOUT --}}
                            <li><a class="dropdown-item " href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); getElementById('form-logout').submit();">Logout</a>
                            </li>
                            <form id="form-logout" action="/logout" method="POST" class="d-none">
                                @csrf
                            </form>
                        </ul>
                    </li>

                @endauth
            </ul>

        </div>

    </div>


</nav>
