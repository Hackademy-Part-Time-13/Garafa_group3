<nav class="p-0">
    <div class="navbar_main">
        <div class="navbar_component">
            <ul>
                <li class="navbar_home_button">
                    <span>Presto.it</span>
                </li>
            </ul>
        </div>
        <div class="big_nav">
            <ul class="navbar_component">
                <a href="{{ route('home') }}" class="">
                    <li class="nav_start @if (Illuminate\Support\Facades\Route::currentRouteName() == 'home') carent_root @endif ">
                        {{ __('ui.home') }}
                    </li>
                </a>

                {{-- REGISTER E LOGIN --}}

                @guest
                    <a href="{{ route('register') }}">
                        <li class=" @if (Illuminate\Support\Facades\Route::currentRouteName() == 'register') carent_root @endif">
                            {{ __('ui.register') }} </li>
                    </a>

                    <a href="{{ route('login') }}">
                        <li class=" @if (Illuminate\Support\Facades\Route::currentRouteName() == 'login') carent_root @endif">
                            {{ __('ui.login') }}</li>
                    </a>

                    <a href="{{ route('ad.create') }}">
                        <li class=" @if (Illuminate\Support\Facades\Route::currentRouteName() == 'ad.create') carent_root @endif">
                            {{ __('ui.insertAd') }}</li>
                    </a>

                @endguest


                {{-- OPZIONI ANNUNCI --}}

                @auth
                    <a class="nav-link  " href="{{ route('ad.create') }}">
                        <li class=" @if (Illuminate\Support\Facades\Route::currentRouteName() == 'ad.create') carent_root @endif">
                            {{ __('ui.insertAd') }}</li>
                    </a>

                    <a class="nav-link" href="{{ route('ads.index') }}">
                        <li class="@if (Illuminate\Support\Facades\Route::currentRouteName() == 'ads.index') carent_root @endif">
                            {{ __('ui.allAds') }}</li>
                    </a>

                @endauth


                {{-- DROPDWON PROFILO --}}

                @auth

                    <li class=" dropdown   @if (Illuminate\Support\Facades\Route::currentRouteName() == 'user.auth.profile') carent_root @endif">
                        <a class="nav-link dropdown-toggle " role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">{{ Auth::user()->name }} </a>

                        <ul class="dropdown-menu ">
                            <li>
                                <a class="dropdown-item"
                                    href="{{ route('user.auth.profile') }}">{{ __('ui.profile') }}</a>
                            </li>

                            @if (auth()->user()->is_revisor)
                                <li class="position-relative">
                                    <a class="dropdown-item"
                                        href="{{ route('revisor.index') }}">{{ __('ui.revisor') }}</a>
                                    <span class="badge_revisor translate-niddle badge rounded-pill bg-danger">
                                        {{ App\Models\Ad::toBeRevisionedCount() }}<span>
                                            {{ __('ui.messageRevisor') }}</span>
                                </li>
                            @endif
                            <li>
                                <a class="dropdown-item" href="">Opzione 3</a>
                            </li>


                            {{-- LOGOUT --}}

                            <li>
                                <a class="dropdown-item " href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); getElementById('form-logout').submit();">{{ __('ui.logout') }}</a>
                            </li>
                            <form id="form-logout" action="/logout" method="POST" class="d-none">
                                @csrf
                            </form>

                        </ul>
                    </li>

                @endauth
                <li class="dropdown ">
                    <a class="  dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        them
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#" id="them_red">red</a></li>
                        <li><a class="dropdown-item" href="#" id="them_green">green</a></li>
                        <li><a class="dropdown-item" href="#" id="them_blu">blu</a></li>
                    </ul>
                </li>


                <li class="dropdown nav_end">
                    <a class="  dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ __('ui.lang') }}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#"><x-locale lang="it" nation="it" /></a></li>
                        <li><a class="dropdown-item" href="#"><x-locale lang="en" nation="gb" /></a></li>
                        <li><a class="dropdown-item" href="#"><x-locale lang="jp" nation="jp" /></a></li>
                        
                    </ul>
                </li>

            </ul>
        </div>




        {{-- qua comuncia l'hamburgerrr --}}

        {{-- bootone hamburger --}}
        <button type="button" class="navbar_toggle" id="navbarToggle">
            <i class="bi bi-list" id="haburget_colose"></i>
        </button>
        {{-- nav mobile --}}

        <div class="mobile_nav " id="mobile_nav">
            <ul>
                <a href="{{ route('home') }}" class="">
                    <li class="nav_start ">
                        Home
                    </li>
                </a>

                {{-- REGISTER E LOGIN --}}

                @guest
                    <a href="{{ route('register') }}">
                        <li class=" ">
                            Register</li>
                    </a>

                    <a href="{{ route('login') }}">
                        <li class="">
                            Login</li>
                    </a>

                    <a href="{{ route('ad.create') }}">
                        <li class="nav_end ">
                            Inserisci annuncio</li>
                    </a>

                @endguest


                {{-- OPZIONI ANNUNCI --}}

                @auth
                    <a class="nav-link  " href="{{ route('ad.create') }}">
                        <li class=" ">
                            Inserisci annuncio</li>
                    </a>

                    <a class="nav-link" href="{{ route('ads.index') }}">
                        <li class="">
                            Tutti gli annunci</li>
                    </a>

                @endauth


                {{-- DROPDWON PROFILO --}}

                @auth

                    <li class=" dropdown nav_end ">
                        <a class="nav-link dropdown-toggle " role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">{{ Auth::user()->name }} </a>

                        <ul class="dropdown-menu ">
                            <li>
                                <a class="dropdown-item" href="{{ route('user.auth.profile') }}">Il mio profilo</a>
                            </li>

                            @if (auth()->user()->is_revisor)
                                <li class="position-relative">
                                    <a class="dropdown-item" href="{{ route('revisor.index') }}">Zona revisore</a>
                                    <span class="badge_revisor translate-niddle badge rounded-pill bg-danger">
                                        {{ App\Models\Ad::toBeRevisionedCount() }}<span> da revisionare</span>
                                </li>
                            @endif
                            <li>
                                <a class="dropdown-item" href="">Opzione 3</a>
                            </li>


                            {{-- LOGOUT --}}

                            <li>
                                <a class="dropdown-item " href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); getElementById('form-logout').submit();">Logout</a>
                            </li>
                            <form id="form-logout" action="/logout" method="POST" class="d-none">
                                @csrf
                            </form>
                            

                        </ul>
                    </li>

                @endauth

                <li class="dropdown ">
                    <a class="  dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        them
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#" id="them_red_responsiv">red</a></li>
                        <li><a class="dropdown-item" href="#" id="them_green_responsiv">green</a></li>
                        <li><a class="dropdown-item" href="#" id="them_blu_responsiv">blu</a></li>
                    </ul>
                </li>


                <li class="dropdown nav_end">
                    <a class="  dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ __('ui.lang') }}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#"><x-locale lang="it" nation="it" /></a></li>
                        <li><a class="dropdown-item" href="#"><x-locale lang="en" nation="gb" /></a></li>
                        <li><a class="dropdown-item" href="#"><x-locale lang="jp" nation="jp" /></a></li>
                    </ul>
                </li>


            </ul>
        </div>
    </div>
</nav>
