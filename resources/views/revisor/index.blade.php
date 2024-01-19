<x-main>
    <div class="container">
      @if (session('status'))
      <div class="ms-auto me-auto text-center col-6 my-2 alert alert-success">
          {{ session('status') }}
      </div>

      @elseif (session('message'))
      <div class="ms-auto me-auto text-center col-6 my-2 alert alert-success">
          {{ session('message') }}
      </div>
  
      @elseif (session()->has('success'))
      <div class="ms-auto me-auto text-center col-6 my-2 alert alert-success">
          {{session('success')}}
      </div>
  
      @elseif ($errors->any())
          @foreach ($errors->all() as $error) 
          <div class="ms-auto me-auto text-center col-6 my-2 alert alert-danger">
              <li>{{$error}}</li>
          </div>
          @endforeach            
  
      @elseif (session('error'))
      <div class="ms-auto me-auto text-center col-6 my-2 alert alert-danger">
          {{ session('error') }}
      </div>
      @endif
        <div class="row">
            <div class="col-12">
                <h1 class="mt-5">
                    @if($ads_to_check->isEmpty())
                    'Non ci sono annunci da revisionare'
                    @else
                    'Ecco l'annuncio da revisionare'
                    @endif
                </h1>
            </div>
        </div>
    </div>

    @if(!$ads_to_check->isEmpty())

        @foreach($ads_to_check as $ad_to_check)
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div id="carouselExampleControlsNoTouching" class="carousel slide" style="height: 60%" data-bs-touch="false">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="https://picsum.photos/80" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://picsum.photos/80" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://picsum.photos/80" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
                  <h5 class="card-title">Titolo:{{$ad_to_check->title}}</h5>
                  <p class="card-text">Descrizione:{{$ad_to_check->description}}</p>
                  <p class="card-publisced">Pubblicato il:{{$ad_to_check->created_at->format('d/m/Y')}}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <form action="{{route('revisor.accept_ad',['ad'=>$ad_to_check])}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button>Accetta</button>
                </form>
            </div>
            <div class="col-12 col-md-6 text-end">
                <form action="{{route('revisor.reject_ad',['ad'=>$ad_to_check])}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button>Rifiuta</button>
                </form>
            </div>
        </div>
    </div>

    @endforeach
    @endif
</x-main>