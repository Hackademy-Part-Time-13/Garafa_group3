<x-main title="Reset Password">

    <form action="/reset-password" method="POST">
        @csrf
            <div class="mb-3">
              <label class="form-label">Inserisci il tuo indirizzo mail</label>
              <input type="email" class="form-control" value="{{old('email')}}" name="email" >
              @error('email') {{$message}} @enderror

            </div>
            <div class="mb-3">
              <label class="form-label">Nuova password</label>
              <input type="password" class="form-control" name="password">
              @error('password') {{$message}} @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Conferma Password</label>
                <input type="password" class="form-control" name="password_confirmation">
              </div>

              <input type="hidden"  name="token" value="{{request()->route('token')}}">


            <button type="submit" class="btn btn-primary">Invia</button>

    </form>
</x-main>