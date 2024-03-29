<div>

    {{-- ERRORI --}}
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
    <div class="form_side presto_createad col-12">
        <p>Presto.it</p>
    </div>

    <div class="col-12">
        <div class="form_fit">
            <h2>{{__('ui.createad')}}</h2>
                
            {{-- FORM --}}
        <form class="login_form " wire:submit.prevent="store" >
                           {{-- TITOLO --}}
            <div class="col my-2">
                <input wire:model.blur="title" type="text" placeholder="Titolo" class="form-control shadow-sm @error('title') is-invalid @enderror" required>
            </div>
            @error('title')
            <span class="small text-danger">{{$message}}</span>
            @enderror
                            {{-- CATEGORIA --}}
            <div class="col my-2">
                <select class="form-select shadow-sm" aria-placeholder="Categoria" wire:model="category_id">
                <option selected value="none">Seleziona categoria</option>
                    @foreach(\App\Models\Category::all() as $category)
                        <option value="{{$category->id}}">{{$category->name_it}}</option>
                    @endforeach
                </select>
            </div>
                            {{-- PREZZO --}}
            <div class="col my-2">
                <input type="number" step="0.01" placeholder="Prezzo" class="form-control shadow-sm" wire:model.blur="price">            
            </div>
                @error('price')
                <span class="small text-danger">{{$message}}</span>
                @enderror
                           {{-- DESCRIZIONE --}}
            <div class="col my-2">
                <textarea wire:model.blur="description" placeholder="Descrizione articolo" class="form-control shadow-sm @error('description') is-invalid @enderror" rows="5" required></textarea>
            </div>
                @error('description')
                <span class="small text-danger">{{$message}}</span>
                @enderror
                            {{-- FOTO --}}
            <div class="col my-2">
                <input wire:model="temporary_images" type="file" name="images" multiple class="form-control shadow-sm @error('temporary_images') is-invalid @enderror">               
            </div>
                @if($temporary_images == null)
                    <p class="text-center mt-1">Le foto aumentano le probabilità di vendita</p>
                @else
                    @error('temporary_images')
                    <span class="small text-danger">{{$message}}</span>
                    @enderror
                @endif

                <button type="submit " class="form_submit_button mx-auto d-block">Crea annuncio</button>

                </form>
        </div>
    </div>

            {{-- ANTEPRIMA IMMAGINI --}}
        @if(!empty($images))
            <div class="container">
                <div class="row mx-auto mx-3 border border-4 rounded py-2 my-2 shadow-sm">
                    <h5 class="text-center">Anteprima immagini</h5>

            @foreach($images as $key => $image)
                <div class="col-4 mb-3">
                    <div class="img-container position-relative">
                        <div class="img-preview shadow-sm rounded" style="background-image: url({{$image->temporaryUrl()}})">
                        </div>
                        <button type="button" class="btn btn-danger btn-sm shadow-sm position-absolute top-0 end-0" wire:click="removeImage({{$key}})">
                            <i class="bi bi-x"></i>
                        </button>
                    </div>
                </div>
            @endforeach
                
                </div>
            </div>
        @endif
</div>



</div>
