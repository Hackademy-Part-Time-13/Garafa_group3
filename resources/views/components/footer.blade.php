<footer>

    {{-- <div class="footer_whitecontainer">

       


    </div> --}}


    <div class="footer_logo_container">
        <span class="footer_logo">Presto.it</span>
    </div>

    <div class="container">
        <hr>
    </div>

    <div class="container d-flex justify-content-around p-5">
        <div>
            <h5>contaci</h5>
            <p>{{ env('MAIL_FROM_ADDRESS') }}</p>
            <p>tel. 7842548512</p>
            <p>via garafa</p>
            <p>00159 Torino&#40 TO &#41</p>
        </div>
        <div>
            <h5>esplora</h5>
            <p>annunci</p>
            <p>Carriere</p>
            <p>Chi siamo</p>
            <p>Informativa sulla privacy</p>
            <p>Informativa sui cookie</p>
        </div>

        <div>
            <h5>partner</h5>
            <!-- Grid container -->
            <div class="">
                <!-- Section: Social media -->
                <section class="footer_social_logo">
                    <!-- Google -->
                    <a class="me-2" href="#!"><i class="bi bi-google"></i></a>
                    <!-- Github -->
                    <a class="me-2" href="#!"><i class="bi bi-github"></i></a>
                </section>
                <!-- Section: Social media -->
            </div>
            <!-- Grid container -->
        </div>


    </div>
    <div class="container">
        <hr>
    </div>

    <div class="container copiryt_footer">
        <div class="row text-center">
            <h5 class="col-12">lavora con noi</h5>
            <div class="col-12  d-flex justify-content-center">
                <a class="footer_lavora_con_noi" href="{{ route('work.with.us') }}">
                    <p>{{ __('ui.work') }}</p>
                </a>

            </div>
            <div class="col-12 d-flex justify-content-center">
                <a class="footer_lavora_con_noi" href="{{ route('become.revisor') }}">
                    <p>{{ __('ui.revisorF') }}</p>
                </a>

            </div>
        </div>
    </div>



    {{-- <div class="footer_top">

            <!-- Grid container -->
            <div class="">
                <!-- Section: Social media -->
                <section class="">
                    <!-- Google -->
                    <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button"
                        data-mdb-ripple-color="dark"><i class="bi bi-google"></i></a>
                    <!-- Github -->
                    <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button"
                        data-mdb-ripple-color="dark"><i class="bi bi-github"></i></a>
                </section>
                <!-- Section: Social media -->
            </div>
            <!-- Grid container -->



            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <p><a href="{{ route('work.with.us') }}">{{ __('ui.work') }}</a></p>
                        <p><a href="{{ route('become.revisor') }}">{{ __('ui.revisorF') }}</a></p>

                    </div>
                </div>
            </div>


        </div> --}}

    <div class="container">
        <hr>
    </div>

    <!-- Copyright -->
    <div class="copiryt_footer">
        <div class="text-center text-white text-dark p-3">
            © 2024 Copyright:
            <a class="text-white" href="/">Presto.it</a>
        </div>
    </div>

    <!-- Copyright -->

</footer>
