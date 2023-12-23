<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Scrolling Nav - Start Bootstrap Template</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico') }}" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" />
    <!-- Fontawesome -->
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.min.css') }}">
</head>

<body id="page-top">
    <!-- Navigation-->
    @include('layouts.navbar')

    <!-- Header-->
    <header class="bg-primary bg-gradient text-white">
        <div class="container px-4 text-center">
            <h1 class="fw-bolder">Kontak Kami</h1>
            <p class="lead">Tunggu apa lagi? Segera hubungi kami untuk solusi cepat dan tepat terkait
                kebutuhan Anda. <br> Kami siap memberikan layanan terbaik kami untuk Anda!</p>
        </div>
    </header>

    <!-- Content -->
    <section id="contact">
        <div class="container px-4">
            <div class="row gx-4 justify-content-center">
                <div class="col-lg-8">
                    <h2>Kontak Kami</h2>
                    <p class="lead">"Tunggu apa lagi? Segera hubungi kami untuk solusi cepat dan tepat terkait
                        kebutuhan Anda. Kami siap memberikan layanan terbaik kami untuk Anda!"</p>
                </div>
                <div class="col-lg-8">
                    <form action="">
                        {{-- nama --}}
                        <div class="mb-3">
                            <input type="text" name="nama" id="nama" class="form-control" placeholder="Name" autofocus>
                        </div>
                        {{-- email  --}}
                        <div class="mb-3">
                            <input type="email" name="mail" id="mail" class="form-control"
                                placeholder="Email">
                        </div>
                        {{-- pesan --}}
                        <div class="mb-3">
                            <textarea name="pesan" id="pesan" class="form-control" rows="3" placeholder="Message"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer-->
    @include('layouts.footer')

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <!-- Fontawesome js -->
    <script src="{{ asset('assets/fontawesome/js/all.min.js') }}"></script>
</body>

</html>
