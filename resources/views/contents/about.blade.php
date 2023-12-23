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
            <h1 class="fw-bolder">Tentang Kami</h1>
            <p class="lead">Menggabungkan keahlian percetakan dan inovasi kuliner <br> untuk memberikan pengalaman yang tak terlupakan bagi pelanggan kami.</p>
        </div>
    </header>

    <!-- Content -->
    <section id="about">
        <div class="container px-4">
            <div class="row gx-4 justify-content-center">
                <div class="col-lg-8">
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
