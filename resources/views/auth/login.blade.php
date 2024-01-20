<x-main title="login Presto.it">

    <x-secondary-header/>

    <div class="form_container row">
        <div class="form_side col-4">
            <p>Presto.it</p>
        </div>

        <div class="col-8">
            <div class="form_fit">
              <h2>iscriviti a Presto.it</h2>

              <div class="d-flex form_icons">
                {{-- logo google --}}
                <a href="/auth/google"><i class="bi bi-google px-1"></i></a>
                {{-- logo git hub --}}
                <a href="/auth/github"><i class="bi bi-github px-1"></i></a>

              </div>

                <form class="login_form " action="/login" method="POST">
                    @csrf

                    <div class="mb-3">
                        <input type="email" name="email" class="" placeholder="Email" value="{{ old('name') }}"
                            aria-describedby="emailHelp">
                            
                        @error('email')
                            {{ $message }}
                        @enderror
                    </div>

                    <div class="mb-3">
                        <input type="password" name="password" id="password" class="" placeholder="Password">

                        <button type="button" id="show_password">
                          <i id="eye" class="bi bi-eye-fill"></i>
                        </button>
                        
                        @error('password')
                            {{ $message }}
                        @enderror
                    </div>

                    <button type="submit " class="form_submit_button mx-auto d-block">LOGIN</button>
                    <a href="/forgot-password"><button type="submit " class="form_forgot_button mx-auto d-block" style="background-color: var(--white)">PASSWORD DIMENTICATA</button></a>
                </form>
            </div>

        </div>

    </div>

    

</x-main>
