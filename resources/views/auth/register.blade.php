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
    <section class="register">
        <div class="card-body d-flex justify-content-center">
            <div class="col-md-5 shadow p-3">
                <h4 class="text-center"><b>Register</b></h4>

                <!-- form start -->
                <form action="{{ url('/prosesDaftar') }}" method="POST" class="p-5">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="username" name="username"
                            placeholder="Enter your name">
                        <label for="username">Username</label>

                        @if (count($errors) > 0)
                            <div style="width: auto; color:red; margin-top:0.25rem;">
                                {{ $errors->first('username') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="mail" name="mail"
                            placeholder="Enter a valid email address">
                        <label for="mail">Email address</label>

                        @if (count($errors) > 0)
                            <div style="width: auto; color:red; margin-top:0.25rem;">
                                {{ $errors->first('mail') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="phone" name="phone"
                            placeholder="Enter a phone number">
                        <label for="phone">Phone number</label>

                        @if (count($errors) > 0)
                            <div style="width: auto; color:red; margin-top:0.25rem;">
                                {{ $errors->first('phone') }}
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

                    <button type="submit" id="daftar" name="daftar" class="w-100 btn btn-primary">Register</button>

                    <div class="mt-2 text-end">
                        <a href="{{ url('/login') }}" class="text-decoration-none">I've an account</a>
                    </div>
                </form>
                <!-- form finish -->
            </div>
        </div>
    </section>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <!-- Fontawesome js -->
    <script src="{{ asset('assets/fontawesome/js/all.min.js') }}"></script>
</body>

</html>
