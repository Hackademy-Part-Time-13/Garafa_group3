<x-main>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>
                    {{$ad_to_check ? 'Ecco l\'annuncio da revisionare' : 'Non ci sono annunci da revisionare'}}
                </h1>
            </div>
        </div>
    </div>
    @if($ad_to_check)
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="https://picsum.photos/300/200" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://picsum.photos/300/200" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://picsum.photos/300/200" class="d-block w-100" alt="...">
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
    @endif
</x-main>