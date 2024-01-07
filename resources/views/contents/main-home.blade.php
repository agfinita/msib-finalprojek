<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Yakiniki</title>
    <!-- icon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico') }}" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" />
    <!-- Fontawesome -->
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.min.css') }}">
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <div class="container px-4">
            <a class="navbar-brand" href="#page-top">Yakiniki</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span
                    class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#service">Service</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/product') }}">Products</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>

                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                {{ auth()->user()->name }}
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ url('/dashboard') }}"><i
                                            class="fa-solid fa-gauge-high"></i> My Dashboard</a></li>
                            </ul>
                        </li>
                    @endauth

                    @guest
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"
                                role="button">
                                Login
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="{{ url('/login') }}"><i
                                            class="fa-solid fa-arrow-right-to-bracket"></i> Sign In </a></li>
                                <li><a class="dropdown-item" href="{{ url('/register') }}"><i class="fa-solid fa-user"></i>
                                        Sign Up </a></li>
                            </ul>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header - carousel -->
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('assets/images/carousel/carousel-02.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="fw-bolder">Selamat Datang!</h1>
                    <p class="fw-semibold">Makanan trendi, cetakan stylish</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/images/carousel/carousel-01.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="fw-bolder">Selamat Datang!</h1>
                    <p class="fw-semibold">Makanan trendi, cetakan stylish</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/images/carousel/carousel-03.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="fw-bolder">Selamat Datang!</h1>
                    <p class="fw-semibold">Makanan trendi, cetakan stylish</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- About section-->
    <section id="about">
        <div class="container px-4">
            <div class="row gx-4 justify-content-center">
                <div class="col-lg-8">
                    <h2>Tentang Kami</h2>
                    <p class="lead">Yakiniki resto</p>
                    <p>
                        Selamat datang di Yakiniki! Kami adalah tempat di mana kreativitas
                        kuliner bertemu dengan keahlian dalam mencetak karya terbaik Anda.
                        Di Yakiniki, kami menghadirkan pengalaman kuliner yang tak
                        terlupakan dengan menawarkan beragam makanan olahan <i>homemade</i>
                        yang lezat dan segar. Tak hanya itu, kami juga memiliki
                        layanan percetakan yang inovatif untuk membantu Anda mencetak
                        karya desain yang luar biasa. Kami bangga menjadi destinasi
                        kuliner yang tidak hanya memanjakan lidah Anda tetapi juga menjadi
                        solusi percetakan yang andal untuk memenuhi kebutuhan visual Anda. <a
                            href="{{ url('/about') }}" class="text-decoration-none">Selengkapnya</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services section-->
    <section class="bg-light" id="service">
        <div class="container px-4">
            <div class="row gx-4 justify-content-center">
                <div class="col-lg-8">
                    <h2>Layanan Kami</h2>
                    <p class="lead">Temukan pilihan yang tepat untuk kebutuhan Anda</p>

                    <div class="row row-cols-1 row-cols-sm-7 row-cols-md-3 g-4">
                        <div class="col">
                            <div class="card h-100">
                                <img src="{{ asset('assets/images/layanan01.jpg') }}" class="card-img-top"
                                    alt="undangan">
                                <div class="card-body">
                                    <h5 class="card-title">Cetak Undangan</h5>
                                    <p class="card-text">Tersedia berbagai pilihan undangan mulai dari undangan
                                        slametan, undangan khitan, undangan tasyakuran, undangan selapan bayi, undangan
                                        pernikahan, dan acara istimewa lainnya.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="{{ asset('assets/images/layanan02.jpg') }}" class="card-img-top"
                                    alt="banner">
                                <div class="card-body">
                                    <h5 class="card-title">Cetak Banner</h5>
                                    <p class="card-text">Layanan cetak banner dengan beragam pilihan desain dan
                                        kualitas
                                        terbaik, cocok untuk berbagai keperluan seperti acara bisnis, perayaan, promosi,
                                        dan kegiatan spesial lainnya.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="{{ asset('assets/images/layanan03.jpeg') }}" class="card-img-top"
                                    alt="elektronik">
                                <div class="card-body">
                                    <h5 class="card-title">Service Alat Elektronik</h5>
                                    <p class="card-text">Membantu memperbaiki masalah alat elektronik rumah Anda
                                        seperti
                                        TV, magic com, kipas angin, dan kawan-kawan elektronik lainnya.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact section-->
    <section id="contact">
        <div class="container px-4">
            <div class="row gx-4 justify-content-center">
                <div class="col-lg-8">
                    <h2>Kontak Kami</h2>
                    <p class="lead">Kami siap memberikan layanan terbaik kami untuk Anda!</p>
                </div>

                <div class="col-lg-8">
                    <form action="">
                        {{-- nama --}}
                        <div class="mb-3">
                            <input type="text" name="nama" id="nama" class="form-control"
                                placeholder="Name">
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
