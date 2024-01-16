<x-main>
    <x-header>
      <x-header-home-content/>
    </x-header>
    
    {{-- scroll categorie --}}
    <div class="container ">
        <div class=" category_card_container">

            @foreach (App\Models\Category::all() as $category)
                <x-category-card :title="$category->name" :category="$category" :ads="$category->ads()->count()" />
            @endforeach

        </div>
    </div>
    {{-- scroll categorie --}}
    {{-- <div class="container text-center home_text_one">
        
            <h2>Lorem ipsum
            </h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione neque similique, quidem ipsa eaque
                architecto eius alias repellat corrupti quisquam optio assumenda error odit quas!</p>
        

    </div> --}}



    <div class="home_back">
        <div class="home_box">

            <div>
                <img src="https://picsum.photos/400/500" alt="">
            </div>

            <div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo aliquid, alias non ullam veritatis,
                    impedit
                    beatae enim ad repudiandae officiis recusandae. Laudantium adipisci similique esse magnam ducimus
                    quae id
                    tenetur?
                </p>
            </div>


        </div>

    </div>





   </div>





   <div class="text-center home_text_one" >
      <h1>about</h1>
      <p>La nostra storia inizia con la passione di creare uno spazio online dove chiunque possa trovare ciò che cerca e, al contempo, condividere ciò che offre. Siamo mossi dalla convinzione che ogni annuncio racconti una storia e che dietro ogni ricerca ci sia qualcuno con desideri, esigenze o passioni uniche.</p>
    </div>

</x-main>
