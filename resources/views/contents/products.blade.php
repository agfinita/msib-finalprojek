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
            <h1 class="fw-bolder">Produk Kami</h1>
            <p class="lead">Sambil menunggu cetakannmu, nikmati hidangan yang menggugah seleramu.</p>
            <a class="btn btn-lg btn-light" href="#product">Lihat produk</a>
        </div>
    </header>

    <!-- Content -->
    <section id="product" class="d-flex justify-content-center">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-4 g-5">
                @foreach ( $products as $p )
                <div class="col">
                    <div class="card border-secondary h-100 p-3">
                        <img src="{{ asset('storage/' . $p->image) }}" style="width: 100"; height="150px" alt="tidak ada gambar">
                        <div class="card-body">
                            <div class="card-title fw-bold text-uppercase mb-0"> {{ $p->product_name }} </div>
                            <div class="card-text"><span class="badge text-bg-info"> {{ $p->category_name }} </span></div>
                            <div class="card-text mt-2"> Rp{{ $p->price }} </div>
                            <div class="card-text"> {{ $p->description }} </div>
                        </div>
                        <button class="btn btn-success">Beli</button>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="text-center mt-5">
                <a href="#" class="text-decoration-none">More products <i class="fa-solid fa-angles-right"></i></a>
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
