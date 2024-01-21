<x-main title="Password dimenticata">

    <form method="POST" action="/forgot-password">
        @csrf
        <div class="mb-3">
            <label class="form-label">Inserisci il tuo indirizzo email</label>
            <input type="email" class="form-control" name="email">
        </div>
        @error('email') {{$message}} @enderror
        <button type="submit" class="btn btn-primary">Reset Password</button>
    </form>


</x-main>