<!-- EXTRAS -->

Sezione profilo:
    - Inserire un dropdown per il profilo utente (nome, foto, articoli pubblicati, etc)


Invio mail feedback:
    - Impostare invio automatico di mail per reminder del feedback

Two factor auth:
    - Implementare two factors authentication



<!-- EXTRAS DEGLI EXTRAS -->

Valutazione utente:
    - Inserire un sistema di valutazione del venditore dato dalla somma dei feedback

Aggiungere commenti:
    - Commenti/recensioni

Aggiugere messaggistica:
    - Direct messages (chatify)

CRUD annunci:
    - Possibilità per il revisore di evidenziare motivo rifiuto annuncio
    - Possibilità per l'utente di vedere annuncio rifiutato e perchè
    - Possibilità per l'utente di modificare annuncio e ri-postare



<!-- EXTRAS COMPLETATI -->

Login google:
    - Permettere login con Google e GitHub (done!!!)

Aggiunta likes:
    - Possibilità di mettere like, selezionare preferiti, etc (done!!!)









Class App\Livewire\Ads\Index located in C:/Users/Fabrizio/Desktop/git-aulab-hpt13/Garafa_group3/app\Livewire\Ads\IndexOG.php does not comply with psr-4 autoloading standard. Skipping.
Class App\View\Components\categoryCard located in C:/Users/Fabrizio/Desktop/git-aulab-hpt13/Garafa_group3/app\View\Components\category-card.php does not comply with psr-4 autoloading standard. Skipping.


Users/Groups lists side

    <div class="messenger-listView {{ !!$id ? 'conversation-active' : '' }}">
        {{-- Header and search bar --}}
        <div class="m-header">
            <nav>
                <a href="#"><i class="fas fa-inbox"></i> <span class="messenger-headTitle">MESSAGES</span> </a>
                {{-- header buttons --}}
                <nav class="m-header-right">
                    <a href="#"><i class="fas fa-cog settings-btn"></i></a>
                    <a href="#" class="listView-x"><i class="fas fa-times"></i></a>
                </nav>
            </nav>
            {{-- Search input --}}
            <input type="text" class="messenger-search" placeholder="Search" />
            {{-- Tabs --}}
            {{-- <div class="messenger-listView-tabs">
                <a href="#" class="active-tab" data-view="users">
                    <span class="far fa-user"></span> Contacts</a>
            </div> --}}
        </div>
        {{-- tabs and lists --}}
        <div class="m-body contacts-container">
           {{-- Lists [Users/Group] --}}
           {{-- ---------------- [ User Tab ] ---------------- --}}
           <div class="show messenger-tab users-tab app-scroll" data-view="users">
               {{-- Favorites --}}
               <div class="favorites-section">
                <p class="messenger-title"><span>Favorites</span></p>
                <div class="messenger-favorites app-scroll-hidden"></div>
               </div>
               {{-- Saved Messages --}}
               <p class="messenger-title"><span>Your Space</span></p>
               {!! view('Chatify::layouts.listItem', ['get' => 'saved']) !!}
               {{-- Contact --}}
               <p class="messenger-title"><span>All Messages</span></p>
               <div class="listOfContacts" style="width: 100%;height: calc(100% - 272px);position: relative;"></div>
           </div>
             {{-- ---------------- [ Search Tab ] ---------------- --}}
           <div class="messenger-tab search-tab app-scroll" data-view="search">
                {{-- items --}}
                <p class="messenger-title"><span>Search</span></p>
                <div class="search-records">
                    <p class="message-hint center-el"><span>Type to search..</span></p>
                </div>
             </div>
        </div>
    </div>




    INFO SIDE

        <div class="messenger-infoView app-scroll">
        {{-- nav actions --}}
        <nav>
            <p>User Details</p>
            <a href="#"><i class="fas fa-times"></i></a>
        </nav>
        {!! view('Chatify::layouts.info')->render() !!}
    </div>