<x-main title="Verifica Mail">
    <x-secondary-header/>

    <h3 class="text-center">Benvenuto su Presto.it</h3>

    @if (session('status') == 'verification-link-sent')
        <p class="text-center">Ti abbiamo inviato una mail con il link di verifica!</p>

    @else
        <p class="text-center">Verifica la tua mail per continuare!</p>
        
        <form method="POST" action="/email/verification-notification">
        @csrf
        <button type="submit " class="button_verify_email mx-auto d-block">Invia mail di conferma</button>
        </form>
    
        @endif

    
    




</x-main>