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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <div class="container px-4">
            <a class="navbar-brand" href="#page-top">Percetakan Rajawali</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span
                    class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Service</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/product') }}">Products</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>

                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                {{ auth()->user()->name }}
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ url('/dashboard') }}"><i class="fa-solid fa-gauge-high"></i> My Dashboard</a></li>
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
                                <li><a class="dropdown-item"
                                        href="{{ url('/login') }}"><i class="fa-solid fa-arrow-right-to-bracket"></i> Sign In </a></li>
                                <li><a class="dropdown-item"
                                        href="{{ url('/register') }}"><i class="fa-solid fa-user"></i> Sign Up </a></li>
                            </ul>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header-->
    <header class="bg-primary bg-gradient text-white">
        <div class="container px-4 text-center">
            <h1 class="fw-bolder">Selamat datang</h1>
            <p class="lead">Rumah bagi layanan percetakan berkualitas yang memenuhi segala kebutuhan desain dan
                cetakan Anda.</p>
            <a class="btn btn-lg btn-light" href="#about">Pesan sekarang</a>
        </div>
    </header>
    <!-- About section-->
    <section id="about">
        <div class="container px-4">
            <div class="row gx-4 justify-content-center">
                <div class="col-lg-8">
                    <h2>Tentang Kami</h2>
                    <p class="lead">Percetakan Rajawali (2010-Sekarang)</p>
                    <p>
                        Berawal dari keinginan untuk memenuhi kebutuhan akan layanan cetak yang handal, Rajawali lahir
                        dari semangat untuk menghadirkan solusi cetak yang inovatif dan berkualitas
                        tinggi. Dengan dedikasi yang kokoh terhadap keunggulan, kami telah
                        membangun jejak prestasi sebagai penyedia layanan percetakan yang andal dan profesional. Sejak
                        awal, Rajawali telah mengedepankan nilai integritas, kreativitas, dan komitmen untuk memberikan
                        hasil cetak yang memukau serta memenuhi harapan pelanggan.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Services section-->
    <section class="bg-light" id="services">
        <div class="container px-4">
            <div class="row gx-4 justify-content-center">
                <div class="col-lg-8">
                    <h2>Layanan Kami</h2>
                    <p class="lead">Temukan pilihan yang tepat untuk kebutuhan Anda</p>

                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col">
                            <div class="card h-100">
                                <img src="{{ asset('assets/images/layanan01.jpg') }}" class="card-img-top" alt="undangan">
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
                                <img src="{{ asset('assets/images/layanan02.jpg') }}" class="card-img-top" alt="banner">
                                <div class="card-body">
                                    <h5 class="card-title">Cetak Banner</h5>
                                    <p class="card-text">Layanan cetak banner dengan beragam pilihan desain dan kualitas
                                        terbaik, cocok untuk berbagai keperluan seperti acara bisnis, perayaan, promosi,
                                        dan kegiatan spesial lainnya.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="{{ asset('assets/images/layanan03.jpeg') }}" class="card-img-top" alt="elektronik">
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
