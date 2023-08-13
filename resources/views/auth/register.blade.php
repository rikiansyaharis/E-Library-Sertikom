<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('user/assets/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('user/assets/css/owl.carousel.min.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('user/assets/css/bootstrap.min.css') }}">

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('user/assets/css/style.css') }}">

    <title>E-Library</title>
</head>
<body>

    <div class="content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 contents">
                    <div class="form-block">
                        <div class="mb-4">
                            <h3>Daftar <strong>E-Library</strong></h3>
                        </div>
                        <form action="{{ route('auth.store')}}" method="POST">
                            @csrf
                            <div class="form-group first">
                                <label for="username">Username</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="username" autocomplete="off">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group first">
                                <label for="email">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" autocomplete="off">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group last mb-4">
                                <label for="password">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" autocomplete="off">
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group last mb-4">
                                <label for="password_confirmation">Konfirmasi Password</label>
                                <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" id="password_confirmation" autocomplete="off">
                                @error('password_confirmation')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button type="submit"class="btn btn-pill text-white btn-block btn-primary">Daftar</button>

                        </form>
                        <span class="d-block text-center my-4 text-muted"> Sudah punya akun? <a href="{{ route('auth')}}" id="text-sign">Sign In</a> </span>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('user/assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/main.js') }}"></script>
</body>
</html>
