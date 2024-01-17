<x-main title="Verifica Mail">

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            Ti abbiamo inviato una mail con il link di verifica!
        </div>
    @endif

    <form method="POST" action="/email/verification-notification">
        @csrf
        <button class="btn btn-primary" type="submit">Invia mail di conferma</button>
    </form>

</x-main>