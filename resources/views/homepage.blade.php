<x-main>
    <x-header />

    {{-- scroll categorie --}}
    <div class="container ">
        <div class=" category_card_container">

            @foreach (App\Models\Category::all() as $category)
                <x-category-card :title="$category->name" :category="$category" :ads="$category->ads()->count()" />
            @endforeach

        </div>
    </div>
    {{-- scroll categorie --}}
      <div class="container text-center my-5 py-5">
         <div class="container ">
            <h2>Lorem ipsum
         </h2>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione neque similique, quidem ipsa eaque
               architecto eius alias repellat corrupti quisquam optio assumenda error odit quas!</p>
         </div>
         
      </div>




    <div class="home_box">

      <div>
         <img src="https://picsum.photos/400/500" alt="">
      </div>

      <div>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo aliquid, alias non ullam veritatis, impedit
            beatae enim ad repudiandae officiis recusandae. Laudantium adipisci similique esse magnam ducimus quae id
            tenetur?
         </p>
      </div>
        

    </div>

    <div style="height: 200px"></div>

</x-main>
