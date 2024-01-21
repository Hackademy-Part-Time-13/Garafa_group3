<x-main>
    <x-secondary-header/>
    
    {{-- ANNUNCI CERCATI --}}
    @if(Illuminate\Support\Facades\Route::currentRouteName() == 'ad.searched')

    <livewire:ads.indexSearch :searched="$request->searched"
    title="Risultati ricerca"/>
        

    {{-- ANNUNCI PER CATEGORIA --}}
    @elseif(Illuminate\Support\Facades\Route::currentRouteName() == 'adsByCat')

    <livewire:ads.indexCategory :category_id="$category->id"/>

   
    {{-- TUTTI GLI ANNUNCI --}}

    @else 
    <livewire:ads.indexAll title="Sfoglia annunci"/>
    @endif

</x-main>