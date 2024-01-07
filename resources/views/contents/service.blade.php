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
    @include('layouts.navbar')

    <!-- Header-->
    <div id="carouselExampleCaptions">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('assets/images/carousel/carousel-03.jpg') }}" class="d-block w-100"
                    alt="carousel">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="fw-bolder">Layanan Kami</h1>
                    <p class="lead fw-semibold">Temukan pilihan yang tepat untuk kebutuhan Anda</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Content -->
    <section class="bg-light" id="services">
        <div class="container px-4">
            <div class="row gx-4 justify-content-center">
                <div class="col-lg-8">
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
                                    <p class="card-text">Membantu memperbaiki masalah alat elektronik rumah Anda seperti
                                        TV, magic com, kipas angin, dan kawan-kawan elektronik lainnya.</p>
                                </div>
                            </div>
                        </div>
                    </div>
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
