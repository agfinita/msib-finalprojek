<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
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
                        <div class="col-md-12"><!-- general form elements -->
                            <div class="card card-primary">
                                <!-- card-header -->
                                <div class="card-header">
                                    <h3 class="card-title">Tambah Produk</h3>
                                </div>
                                <!-- /.card-header -->

                                {{-- alert --}}
                                @if (session('status'))
                                    <div class="alert alert-danger">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                {{-- alert --}}

                                <!-- form start -->
                                <form action="{{ url('/tables') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group mb-3">
                                            <label for="name" class="lbl mb-2">Product Name</label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                placeholder="Enter name of product" autocomplete="off" autofocus/>

                                            @if (count($errors) > 0)
                                                <div style="width: auto; color:red; margin-top:0.25rem;">
                                                    {{ $errors->first('name') }}
                                                </div>
                                            @endif
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="category" class="lbl mb-2">Category Product</label></br>
                                            <select class="form-select" aria-label="Default select example"
                                                id="category" name="category">
                                                <option value="0">- Select Category -</option>
                                                <option value="6"> Desserts </option>
                                                <option value="7"> Seafood </option>
                                                <option value="8"> Snacks </option>
                                            </select>

                                            @if (count($errors) > 0)
                                                <div style="width: auto; color:red; margin-top:0.25rem;">
                                                    {{ $errors->first('category') }}
                                                </div>
                                            @endif
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="code" class="lbl mb-2">Product Code</label>
                                            <input type="text" class="form-control" id="code" name="code"
                                                placeholder="Enter code of product" autocomplete="off" />

                                            @if (count($errors) > 0)
                                                <div style="width: auto; color:red; margin-top:0.25rem;">
                                                    {{ $errors->first('code') }}
                                                </div>
                                            @endif
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="price" class="lbl mb-2">Price</label>
                                            <input type="text" class="form-control" id="price" name="price"
                                                placeholder="Enter price of product" autocomplete="off" />

                                            @if (count($errors) > 0)
                                                <div style="width: auto; color:red; margin-top:0.25rem;">
                                                    {{ $errors->first('price') }}
                                                </div>
                                            @endif
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="desc" class="mb-2">Description</label>
                                            <input type="text" class="form-control" id="desc" name="desc"
                                                placeholder="Enter description of product" autocomplete="off" />
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="unit" class="lbl mb-2">Unit Product</label>
                                            <input type="text" class="form-control" id="unit" name="unit"
                                                placeholder="Enter unit of product" autocomplete="off" />

                                            @if (count($errors) > 0)
                                                <div style="width: auto; color:red; margin-top:0.25rem;">
                                                    {{ $errors->first('unit') }}
                                                </div>
                                            @endif
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="stock" class="lbl mb-2">Stock Product</label>
                                            <input type="text" class="form-control" id="stock" name="stock"
                                                placeholder="Enter stock of product" autocomplete="off" />

                                            @if (count($errors) > 0)
                                                <div style="width: auto; color:red; margin-top:0.25rem;">
                                                    {{ $errors->first('stock') }}
                                                </div>
                                            @endif
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="disc" class="lbl mb-2">Discount</label>
                                            <input type="text" class="form-control" id="disc" name="disc"
                                                placeholder="Enter discount of product" autocomplete="off" />

                                            @if (count($errors) > 0)
                                                <div style="width: auto; color:red; margin-top:0.25rem;">
                                                    {{ $errors->first('disc') }}
                                                </div>
                                            @endif
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="image" class="form-label">Image</label>
                                            <input class="form-control" type="file" id="image" name="image">

                                            @if (count($errors) > 0)
                                                <div style="width: auto; color:red; margin-top:0.25rem;">
                                                    {{ $errors->first('image') }}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" name="submit" class="btn btn-success">
                                            Tambah Data
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card -->
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
