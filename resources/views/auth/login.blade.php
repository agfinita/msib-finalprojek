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

<body class="container">
    <!-- Navigation-->
    @include('layouts.navbar')

    <!-- Content -->
    <section class="login">
        <div class="card-body d-flex justify-content-center">
            <div class="col-md-5 shadow p-3">
                <h4 class="text-center"><b>Login</b></h4>

                <form action="{{ url('/prosesLogin') }}" method="POST" class="p-5">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control form-control" id="mail" name="mail"
                            placeholder="Enter a valid email address" value="{{ old('mail') }}">
                        <label for="mail">Email address</label>

                        @if (count($errors) > 0)
                            <div style="width: auto; color:red; margin-top:0.25rem;">
                                {{ $errors->first('mail') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Enter password">
                        <label for="password">Password</label>

                        @if (count($errors) > 0)
                            <div style="width: auto; color:red; margin-top:0.25rem;">
                                {{ $errors->first('password') }}
                            </div>
                        @endif
                    </div>

                    <button type="submit" id="login" name="login" class="w-100 btn btn-primary">Login</button>

                    <div class="mt-2 text-end">
                        <a href="{{ url('/register') }}" class="text-decoration-none">Don't have an account?</a>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <!-- Fontawesome js -->
    <script src="{{ asset('assets/fontawesome/js/all.min.js') }}"></script>

    <!-- Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- alert --}}
    @if ($message = Session::get('failed'))
        <script>
            Swal.fire('{{$message}}');
        </script>
    @endif
    {{-- alert --}}
</body>

</html>
