<nav class="container p-0">
    <div class="navbar_main">

        <div class="navbar_component navbar_home_button">

            <ul class="">
                <li>
                    <a href="">
                        Presto.it
                    </a>
                </li>
            </ul>

        </div>

        

        <div class="">
            <ul class="navbar_component">
                <li class="nav-item navbar_start">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>


                {{-- REGISTER E LOGIN --}}
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('ad.create') }}">Inserisci annuncio</a>
                    </li>
                @endguest


                {{-- OPZIONI ANNUNCI --}}
                @auth

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('ad.create') }}">Inserisci annuncio</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('ads.index') }}">Tutti gli annunci</a>
                    </li>

                @endauth

                {{-- drpdown --}}
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">{{ Auth::user()->name }} </a>
                        <ul class="dropdown-menu">

                            <li>
                                <a class="dropdown-item" href="">Opzione 1</a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="">Opzione 2</a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="">Opzione 3</a>
                            </li>

                            {{-- LOGOUT --}}
                            <li><a class="dropdown-item" href="{{ route('logout') }}"
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
