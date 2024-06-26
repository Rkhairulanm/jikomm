<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Log in (v2)</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <h1 class="text-xl"><b>Cash-E </b>App</h1>
            </div>
            <div class="card-body">
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <x-text-input placeholder="Email" id="email" class="block w-full form-control"
                            type="email" name="email" :value="old('email')" required autofocus
                            autocomplete="username" />
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <x-text-input placeholder="Password" id="password" class="block w-full form-control"
                            type="password" name="password" required autocomplete="current-password" />
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>

                    </div>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                </form>
            </div>

        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
</body>

</html>
