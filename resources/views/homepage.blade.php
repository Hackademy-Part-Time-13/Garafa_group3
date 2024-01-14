<x-main>
   <x-header />
   <div class="row">
      @foreach (App\Models\Category::all() as $category)
      
          <x-category-card :title="$category->name"
          :category="$category"
          :ads="$category->ads()->count()"/>
      @endforeach
      
   </div>
</x-main>
