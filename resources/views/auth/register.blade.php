<x-main>
    <x-secondary-header/>





    <div class="form_container row">
        <div class="form_side col-4">
            <p>Presto.it</p>
        </div>

        <div class="col-8">
            <div class="form_fit">
                <h2>registrati a Presto.it</h2>

                <div class="d-flex form_icons">
                    {{-- logo google --}}
                    <a href="/auth/google"><i class="bi bi-google px-1"></i></a>
                    {{-- logo git hub --}}
                    <a href="/auth/github"><i class="bi bi-github px-1"></i></a>

                </div>

                <form class="login_form " action="/register" method="POST">
                    @csrf
                    <div class="mb-3">


                        <input type="text" name="name" placeholder="Username"
                            value="{{ old('name') }}" @error('name') {{ $message }} @enderror>

                    </div>

                    <div class="mb-3">


                        <input type="email" name="email" placeholder="Email"
                            value="{{ old('email') }}" aria-describedby="emailHelp">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </div>

                    <div class="mb-3">
                        <input type="password" id="password" name="password" placeholder="Password">

                        <button type="button" id="show_password">
                          <i id="eye" class="bi bi-eye-fill"></i>
                        </button>
                        @error('password')
                            {{ $message }}
                        @enderror
                    </div>

                    <div class="mb-3">
                        <input type="password" id="Confirm_password" name="password_confirmation" placeholder="Confirm Password">

                        <button type="button" id="Confirm_show_password">
                          <i id="Confirm_eye" class="bi bi-eye-fill"></i>
                        </button>
                    </div>

                    <button type="submit " class="form_submit_button mx-auto d-block">REGISTRATI</button>
                </form>
            </div>

        </div>

    </div>


</x-main>
