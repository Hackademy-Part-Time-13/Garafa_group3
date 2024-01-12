<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="">Presto.it</a>
      <div class="collapse navbar-collapse">
        
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-2">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>          
          </li>


          {{-- REGISTER E LOGIN --}}
          @guest

          <a class="nav-link" href="{{route('register')}}">Register</a>
          <a class="nav-link" href="{{route('login')}}">Login</a>
          <li class="nav-item">
            <a class="nav-link" href="{{route('ad.create')}}">Inserisci annuncio</a>
          </li>
          @endguest


          {{-- OPZIONI ANNUNCI --}}
          @auth
          <li class="nav-item">
            <a class="nav-link" href="{{route('ad.create')}}">Inserisci annuncio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('ads.index')}}">Tutti gli annunci</a>
          </li>
          @endauth

          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Cerca articolo" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Cerca</button>
          </form>
        </ul>
        
        {{-- PROFILE --}}
        <ul class="navbar-nav me-2">
          @auth 
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img class="round-profile-image me-2" src="https://picsum.photos/200" alt="">{{Auth::user()->name}} </a>
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
                <li><a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); getElementById('form-logout').submit();">Logout</a></li>
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