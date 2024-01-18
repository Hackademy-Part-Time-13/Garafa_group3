<x-main>
    <x-secondary-header/>
    {{-- ANNUNCI CERCATI --}}
    @if(Illuminate\Support\Facades\Route::currentRouteName() == 'ad.searched')

        @if($ads->isEmpty()) {{-- NESSUN RISULTATO --}}
                    Nessun annuncio trovato. Prova ancora.

        @else {{-- RISULTATI RICERCA --}}
            <livewire:ads.indexSearch :searched="$request->searched"
            title="Risultati ricerca"/>
        @endif


    {{-- ANNUNCI PER CATEGORIA --}}
    @elseif(Illuminate\Support\Facades\Route::currentRouteName() == 'adsByCat')

    <livewire:ads.indexCategory :category_id="$category->id"/>

    
    {{-- TUTTI GLI ANNUNCI --}}

    @else 
    <livewire:ads.indexAll title="Sfoglia annunci"/>
    @endif

</x-main>