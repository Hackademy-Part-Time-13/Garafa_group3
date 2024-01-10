<div class="card position-relative" style="width: 50rem;">

    @if(session()->has('success'))
    <div class="ms-auto me-auto text-center col-6 my-2 alert alert-success">
        {{session('success')}}
    </div>
    @endif

    <div class="card-body">
    <h4 class="card-title text-center">Inserisci annuncio</h4>

        <form wire:submit.prevent="store">

        <div class="col my-2">
            <label class="form-label">Titolo</label>
            <input wire:model.blur="title" type="text" class="form-control shadow-sm @error('title') is-invalid @enderror" required>
            @error('title')
            <span class="small text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="col my-2">
            <label class="form-label">Categoria</label>
            <select class="form-select shadow-sm" wire:model.blur="category_id">
                @foreach(\App\Models\Category::all() as $category)
                <option selected value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="col my-2">
            <label class="form-label">Prezzo</label>
            <input type="number" step="0.01" class="form-control shadow-sm" wire:model.blur="price">            
            @error('price')
            <span class="small text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <div class="col my-2">
            <label class="form-label">Descrizione articolo</label>
            <textarea wire:model.blur="description" class="form-control shadow-sm @error('description') is-invalid @enderror" rows="5" required></textarea>
            @error('description')
            <span class="small text-danger">{{$message}}</span>
            @enderror
        </div>



        <button type="submit" class="btn btn-success mt-2">Crea annuncio<i class="bi bi-box-arrow-in-right ms-2"></i></button>

        </form>

        <p class="fs-5 fst-italic position-absolute bottom-0 end-0 me-3 "><a href="" class="ms-3"><button type="button" class="btn btn-secondary">Torna alla home <i class="bi bi-arrow-bar-left"></i></button></a></p>
    
    </div>
</div>
