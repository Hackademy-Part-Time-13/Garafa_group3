<x-main>
    <x-secondary-header/>

        @if (session('status'))
        <div class="ms-auto me-auto text-center col-6 my-2 alert alert-success">
            {{ session('status') }}
        </div>
    
        @elseif (session()->has('success'))
        <div class="ms-auto me-auto text-center col-6 my-2 alert alert-success">
            {{session('success')}}
        </div>
    
        @elseif ($errors->any())
            @foreach ($errors->all() as $error) 
            <div class="ms-auto me-auto text-center col-6 my-2 alert alert-danger">
                <li>{{$error}}</li>
            </div>
            @endforeach            
    
        @elseif (session('error'))
        <div class="ms-auto me-auto text-center col-6 my-2 alert alert-danger">
            {{ session('error') }}
        </div>
        @endif

        <div class="form_container row">
        <div class="form_side col-4">
            <p>Presto.it</p>
        </div>

        <div class="col-8">
            <div class="form_fit">
                <h2>Lavora con noi</h2>



            <form class="login_form " action="/revisorApplication" method="POST">
                @csrf
                @method('PATCH')


                <div class="mb-3">
                        <input type="email" name="email" placeholder="Email"
                            value="{{ old('email') }}" aria-describedby="emailHelp">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </div>

                    <div class="col my-2">
                        <textarea name="description" placeholder="Raccontaci in poche parole perchè vorresti lavorare con noi" class="form-control shadow-sm @error('description') is-invalid @enderror" rows="5" required></textarea>
                        @error('description')
                        <span class="small text-danger">{{$message}}</span>
                        @enderror
                    </div>


                    <button type="submit " class="form_submit_button mx-auto d-block">INVIA CANDIDATURA</button>
                </form>
            </div>

        </div>

    </div>


</x-main>