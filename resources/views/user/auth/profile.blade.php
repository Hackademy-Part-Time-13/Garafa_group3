<x-main>

<div class="container text-center">
    <div >
         <img src="https://picsum.photos/300" alt="" class="round-profile-imageprofile" >
    </div>
<h1>
{{auth()->user()->name}}
</h1>
    <div>
       <button> 
        <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
        <label class="btn btn-outline-primary" for="btncheck1">Condividi</label>
        </button>

        <button>
            <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
        <label class="btn btn-outline-primary" for="btncheck2">Modifica profilo</label>
        </button>
  
    </div>

    <div>
        <button>
            creati
        </button>
        <button>
            salvati
        </button>

    </div>


    <div>
        <button>
            crea annuncio
        </button>
    </div>


        


   
   
   









</div>

</x-main>