<div class="session_container  @if(session('status') || session('message') || session()->has('success') || $errors->any() || session('error') ) session_show @endif " id="session_suc_err">
    
    <div class="session_close" onclick="document.getElementById('session_suc_err').className = 'session_container hide_show';"><i class="bi bi-x-circle session_icon"></i></div>

    @if (session('status'))
    <div class="container my-5">
        <div class="ms-auto me-auto text-center col-6 my-2 alert alert-success">
            {{ session('status') }}
        </div>
    </div>
@elseif (session('message'))
    <div class="container my-5">
        <div class="ms-auto me-auto text-center col-6 my-2 alert alert-success">
            {{ session('message') }}
        </div>
    </div>
@elseif (session()->has('success'))
    <div class="container my-5">
        <div class="ms-auto me-auto text-center col-6 my-2 alert alert-success">
            {{ session('success') }}
        </div>
    </div>
@elseif ($errors->any())
    <div class="container my-5">
        @foreach ($errors->all() as $error)
            <div class="ms-auto me-auto text-center col-6 my-2 alert alert-danger">
                <li>{{ $error }}</li>
            </div>
        @endforeach
    </div>
@elseif (session('error'))
    <div class="container my-5">
        <div class="ms-auto me-auto text-center col-6 my-2 alert alert-danger">
            {{ session('error') }}
        </div>
    </div>
@endif
</div>