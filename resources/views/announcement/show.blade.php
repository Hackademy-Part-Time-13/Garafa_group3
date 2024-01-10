{{-- GABRI
    - Dettaglio annuncio: CARD -> Titolo, categoria, prezzo, descrizione, foto segnaposto, venditore, data pubblicazione.
    - Carosello: (lorem picsum) N-foto segnaposto
    --}}
    
    
    <x-main>
        
        <div class="container row" >
            {{-- inizio carosello --}}
            <div class="col-8">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" class="g-col-6" data-bs-ride="carousel">
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
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden"></span>
                    </button>
                </div>
            </div>   
            {{-- fine carosello --}}
            
            <div class="col-4">
                
                <h3>{{$announcement->category->name}}</h3>
                <hr>
                <h4>{{$announcement->created_at}}</h4>
                <h1>{{$announcement->title}}</h1>
                {{-- <h3> luogo</h3>  extra --}}
                <h3>{{$announcement->price}}</h3>
                
            </div>
        </div>
        <hr>   
        
        {{-- <div>
            <h2>dati di Dettaglio</h2>
        </div> extra --}} 
        <hr>
        <div>
            <h2>Descrizione</h2>
            <p>{{$announcement->description}}</p>
        </div>
        
        
        
        
        
        
        
        
        
        
        
    </x-main>