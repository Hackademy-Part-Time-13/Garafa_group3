<x-main>

    {{-- ANNUNCI CERCATI --}}

    @if(Illuminate\Support\Facades\Route::currentRouteName() == 'ad.searched')
    <x-header>
        <x-header-home-content/>
    </x-header>

    <div class="index_back">
        <div class="index_box">
            <div class="row g-5 px-3">

                {{-- @foreach ($ads as $ad)
                <x-ads-card :ad="$ad" />
                @endforeach --}}
            </div>
        </div>
    </div>


    {{-- TUTTI GLI ANNUNCI --}}

    @else 
    <x-header/>   
        <livewire:ads.index />
    @endif

</x-main>