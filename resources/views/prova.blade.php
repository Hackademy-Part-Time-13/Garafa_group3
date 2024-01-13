<x-main>

    <div class="container">
        <div class="row justify-content-around flex-wrap mx-3">
            
            @foreach(App\Models\Category::all() as $category)
        <x-category-card 
        title="{{$category->name}}"
        :ads="$category->ads()->count()"
        :category="$category"/>
            @endforeach

    </div>
    </div>


</x-main>
