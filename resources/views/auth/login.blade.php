<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="PT. Taspen(persero) ">
    <meta name="keywords" content="login, signin">

    <title>Login - Dinas Perpustakaan Kota Samarinda</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,300i" rel="stylesheet">

    <!-- Styles -->
    <link href="/assets/css/core.min.css" rel="stylesheet">
    <link href="/assets/css/app.min.css" rel="stylesheet">
    <link href="/assets/css/style.min.css" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/assets/img/apple-touch-icon.png">
    <link rel="icon" href="/assets/img/favicon.png">
</head>

<body>



<div class="row min-h-fullscreen center-vh p-20 m-0">
    <div class="col-12">
        <div class="card card-shadowed px-50 py-30 w-400px mx-auto" style="max-width: 100%">
            <h5 class="text-uppercase">Sign in</h5>
            <br>

            <form class="form-type-material" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <input id="email" type="email" class="form-control pal" name="email" value="{{ old('email') }}" required autofocus>
                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                </div>

                <div class="form-group">
                    <input type="password" class="form-control" id="password" name="password" required>
                    <label for="password">Password</label>
                </div>


                @if ($errors->has('email'))
                    <div class="callout callout-danger" role="alert">
                        <button type="button" class="close" data-dismiss="callout" aria-label="Close">
                            <span>×</span>
                        </button>
                        <h5>Login Gagal!</h5>
                        <p>Pastika email dan password sudah benar!</p>
                    </div>
                @endif

                <div class="form-group flexbox flex-column flex-md-row">
                    <label class="custom-control custom-checkbox">
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} class="custom-control-input" checked>
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">Ingat saya</span>
                    </label>
                </div>

                <div class="form-group">
                    <button class="btn btn-bold btn-block btn-primary" type="submit">Login</button>
                </div>
            </form>
            <br><center><p> Dinas Perpustakaan <a></a>Kota Samarinda </p></center>
            
        </div>
        <p class="text-center text-muted fs-13 mt-20">Belum punya akun? <a class="text-primary fw-500" href="/register">Daftar</a></p>
    </div>


    <footer class="col-12 align-self-end text-center fs-13">
        <p class="mb-0"><small>Magang Industri.</small></p>
    </footer>
</div>

<!-- Scripts -->
<script src="/assets/js/core.min.js"></script>
<script src="/assets/js/app.min.js"></script>
<script src="/assets/js/script.min.js"></script>

</body>
</html>
