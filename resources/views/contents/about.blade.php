<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Yakiniki</title>
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
                <img src="{{ asset('assets/images/carousel/carousel-about.jpg') }}" class="d-block w-100"
                    alt="carousel">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="fw-bolder">Tentang Kami</h1>
                    <p class="lead fw-semibold">Menggabungkan keahlian percetakan dan inovasi kuliner <br> untuk memberikan
                        pengalaman yang tak terlupakan bagi pelanggan kami</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Content -->
    <section id="about">
        <div class="container px-4">
            <div class="row gx-4 justify-content-center">
                <div class="col-lg-8">
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
                        solusi percetakan yang andal untuk memenuhi kebutuhan visual Anda.

                    <p>
                        Kami percaya bahwa setiap hidangan yang kami sajikan harus mencerminkan
                        keaslian dan kualitas. Setiap hidangan <i>homemade</i> yang kami tawarkan dibuat
                        dengan cinta dan perhatian terhadap rasa serta nilai gizi yang seimbang.
                        Di sisi lain, layanan percetakan kami didukung oleh teknologi mutakhir untuk
                        mencetak karya desain Anda dengan kualitas tertinggi. Apapun yang Anda butuhkan,
                        mulai dari cetakan promosi bisnis hingga kebutuhan personal Anda, Yakiniki siap
                        memberikan solusi yang sesuai dengan harapan Anda.
                    </p>

                    <p>
                        Di Yakiniki, kami terus berinovasi dalam setiap hidangan yang kami sajikan dan
                        dalam setiap cetakan yang kami hasilkan. Kami didorong oleh semangat untuk
                        memberikan yang terbaik bagi pelanggan kami. Baik Anda mencari santapan lezat
                        atau mencari solusi cetakan yang menonjol, kami berkomitmen untuk memberikan
                        pengalaman yang memuaskan. Jadikanlah Yakiniki sebagai destinasi utama Anda
                        untuk menikmati makanan olahan <i>homemade</i> yang istimewa sambil menemukan solusi
                        cetakan yang kreatif dan berkualitas.
                    </p>
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
