<!-- BUONA FORTUNA RAGA -->

Mostrare le rotte attive 
    - php artisan route:list

Installare bootstrap
    - npm install bootstrap

Nuovo Controller
    - php artisan make:controller "nome controller" ('-resource' -> per crearlo con le resources)

Nuovo componente
    - php artisan make:component "nome componente" ('--view' -> per crearlo senza controller)

Aggiorna la cache di Laravel
    - php artisan view:clear

Nuova classe Mailable
    - php artisan make:mail "nome mail"

Nuovo Model
    - php artisan make:model "nome model" ('-mcr' -> per crearlo con migration, controller e resources)

Nuova Migration
    - php artisan make:migration "nome migration"

Esegue la migration
    - php artisan migrate (:status / :rollback / :refresh / :fresh) (':fresh --seed' -> fa il refresh e lancia il seeder)

Nuovo Seeder
    - php artisan make:seeder "nome seeder"

Esegue il Seeder
    - php artisan db:seed

Genera nuova chiave
    - php artisan key:generate

Sintassi tabella pivot
    - php artisan make:migration 'create_actor_movie_table'

Nuovo Middleware
    - php artisan make:middleware "noome middleware"

Cartella 'Storage' in 'public'
    - php artisan storage:link

Installare livewire
    - composer require livewire/livewire

Indicizzare annunci del seeder (lanciare entrambi i comandi):
    - php artisan scout:flush "App\Models\Ad"
    - php artisan scout:import "App\Models\Ad"

Jobs:
    php artisan queue:work

