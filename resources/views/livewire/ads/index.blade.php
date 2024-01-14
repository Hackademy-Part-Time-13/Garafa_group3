<div class="">

    {{-- bottoni sort --}}

    <div class="index_sort">
        <div class="index_sort_box">
            <ul class="conatainer index_sort_ul">

                <li wire:click="sortNEW">new/old</li>

                <li wire:click="sortOLD">old/new</li>

                <li wire:click="expensiveToCheap">expensive/cheap</li>

                <li wire:click="cheapToExpensive">cheap/expensive</li>

                <li class="nav-item dropdown ">

                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        category
                    </a>
                    <ul class="dropdown-menu index_sort_ul_category">
                        @foreach (App\Models\category::all() as $category)
                            <li><a wire:click="sortCategory({{ $category }})"
                                    class="dropdown-item">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>

                </li>


            </ul>
        </div>
    </div>
    {{-- fine bottoni sort --}}

    {{-- indec dei annunci --}}
    <div class="index_back">
        <div class="index_box">
            <div class="row g-5 px-3">

                @foreach ($ads as $ad)
                    <x-ads-card :ad="$ad" />
                @endforeach
            </div>
        </div>
    </div>
    {{-- indec dei annunci --}}

</div>
