<div >

    @if (session('status'))
    <div class="ms-auto me-auto text-center col-6 my-2 alert alert-success">
        {{ session('status') }}
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


    



    <div class="form_container row">
        <div class="form_side col-12">
            <p>Presto.it</p>
        </div>

        <div class="col-12">
            <div class="form_fit">
                <h2>Inserisci annuncio</h2>
                

                <form class="login_form " wire:submit.prevent="store" >
                    
                    <div class="col my-2">
                        <input wire:model.blur="title" type="text" placeholder="Titolo" class="form-control shadow-sm @error('title') is-invalid @enderror" required>
                        @error('title')
                        <span class="small text-danger">{{$message}}</span>
                        @enderror
                    </div>
            
                    <div class="col my-2">
                        <select class="form-select shadow-sm" aria-placeholder="Categoria" wire:model="category_id">
                            <option selected value="none">Seleziona categoria</option>
                            @foreach(\App\Models\Category::all() as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
            
                    <div class="col my-2">
                        <input type="number" step="0.01" placeholder="Prezzo" class="form-control shadow-sm" wire:model.blur="price">            
                        @error('price')
                        <span class="small text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    
                    <div class="col my-2">
                        <textarea wire:model.blur="description" placeholder="Descrizione articolo" class="form-control shadow-sm @error('description') is-invalid @enderror" rows="5" required></textarea>
                        @error('description')
                        <span class="small text-danger">{{$message}}</span>
                        @enderror
                    </div>
            
            
            
                    

                    <button type="submit " class="form_submit_button mx-auto d-block">Crea annuncio</button>
                </form>
            </div>

        </div>

    </div>
</div>
