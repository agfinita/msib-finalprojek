<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Percetakan Rajawali</title>
    <!-- icon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico') }}" />
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="{{ asset('assets02/css/styles.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css_native/style.css') }}">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    @include('dashboard.layouts.navbar')

    <div id="layoutSidenav">
        @include('dashboard.layouts.sidebar')

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid p-4">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            {{-- alert --}}
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif

                            @if (session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif

                            <div class="row">
                                <div class="col-md-8 mb-3">
                                    <!-- Tambah data -->
                                    <button type="submit" class="btn btn-success">
                                        <a href="{{ url('/create') }}" class="text-decoration-none text-white">
                                            <i class="fa-solid fa-plus" style="color: #ffffff;"></i> Tambah Data
                                        </a>
                                    </button>
                                </div>

                                <div class="col-md-4">
                                    <!-- Kolom pencarian -->
                                    <form action="{{ url('/tables/search') }}" method="GET" role="search">
                                        <div class="input-group mb-3">
                                            <input class="form-control" type="search" name="keyword"
                                                placeholder="Search" aria-label="Search" value="{{ $keyword ?? '' }}"
                                                autocomplete="off">
                                            <button class="btn btn-outline-secondary" type="submit"><i
                                                    class="fa-solid fa-magnifying-glass"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <!-- Table -->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Products</h3>
                                </div>
                                <!-- Start table to show product data -->
                                <div class="table-responsive-md">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">Name</th>
                                                <th scope="col">Category</th>
                                                <th scope="col">Code</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Description</th>
                                                <th scope="col">Unit</th>
                                                <th scope="col">Stock</th>
                                                <th scope="col">Discount</th>
                                                <th scope="col">Image</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($products as $p)
                                                <tr>
                                                    <td scope="row">{{ $p->product_name }}</td>
                                                    <td scope="row">{{ $p->category_name }}</td>
                                                    <td scope="row">{{ $p->product_code }}</td>
                                                    <td scope="row">{{ 'Rp' . $p->price }}</td>
                                                    <td scope="row">{{ $p->description }}</td>
                                                    <td scope="row">{{ $p->unit }}</td>
                                                    <td scope="row">{{ $p->stock }}</td>
                                                    <td scope="row">{{ $p->discount }}</td>
                                                    <td scope="row">
                                                        <img src="{{ asset('storage/' . $p->image) }}" style="width: 100px"; height="50px" alt="tidak ada gambar">
                                                    </td>
                                                    <td scope="row">
                                                        <a href="{{ url('/tables/edit/' . $p->id) }}">
                                                            <button type="button" class="btn btn-warning btn-sm">
                                                                <i class="fa-solid fa-pen-to-square"></i>
                                                            </button>
                                                        </a>

                                                        <form action="{{ url('/tables/' . $p->id) }}" method="POST"
                                                            class="d-inline"
                                                            onsubmit="return confirm('Are you sure delete data?')">
                                                            @method('delete')
                                                            @csrf
                                                            <button class="btn btn-danger btn-sm">
                                                                <i class="fa-solid fa-eraser"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- End table product -->

                                <!-- Pagination button start -->
                                <div class="col col-sm-10 col-md-10 mx-auto my-auto">
                                    <div>
                                        {{ $products->links() }}
                                    </div>
                                </div>
                                <!-- Pagination button finish -->
                            </div>
                            <!-- End card table -->
                        </div>
                        <!-- /.row -->
                    </div>
                </div>
            </main>

            <!-- footer -->
            @include('dashboard.layouts.footer')
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="{{ asset('assets02/js/scripts.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('assets02/assets/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('assets02/assets/demo/chart-bar-demo.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
    <script src="{{ asset('assets02/js/datatables-simple-demo.js') }}"></script>
</body>

</html>
