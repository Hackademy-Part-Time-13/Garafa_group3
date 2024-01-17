<x-main>

    {{-- ANNUNCI CERCATI --}}
    @if(Illuminate\Support\Facades\Route::currentRouteName() == 'ad.searched')

                @if($ads->isEmpty()) {{-- NESSUN RISULTATO --}}
                    Nessun annuncio trovato. Prova ancora.

                @else {{-- RISULTATI RICERCA --}}
                    <livewire:ads.index :searched="$request->searched"
                    title="Risultati ricerca"/>

                @endif


    {{-- ANNUNCI PER CATEGORIA --}}
    @elseif(Illuminate\Support\Facades\Route::currentRouteName() == 'adsByCat')

    <livewire:ads.index :category_id="$category->id"
    title="Annunci per categoria"/>

    
    {{-- TUTTI GLI ANNUNCI --}}

    @else 
        <livewire:ads.index title="Sfoglia annunci"/>
    @endif

</x-main>