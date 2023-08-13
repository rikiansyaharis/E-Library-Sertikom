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
                <div class="col-md-6 contents">
                    <div class="form-block">
                        <div class="mb-4">
                            <h3>Masuk <strong>E-Library</strong></h3>
                        </div>
                        <form action="{{ route('auth.login')}}" method="POST">
                            @csrf
                            <div class="form-group first">
                                <label for="username">Email</label>
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group last mb-4">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password">
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="d-flex mb-5 align-items-center">
                                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                                <input type="checkbox" checked="checked"/>
                                <div class="control__indicator"></div>
                                </label>
                                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>
                            </div>

                            <button type="submit" value="Log In" class="btn btn-pill text-white btn-block btn-primary">Masuk</button>

                            <span class="d-block text-center my-4 text-muted"> Belum punya akun? <a href="{{ route('auth.register')}}" class="text-sign" id="text-sign">Daftar</a> </span>
                        </form>

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
