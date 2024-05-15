<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="/img/apple-icon.png">
    <link rel="icon" type="image/png" href="/img/favicon.png">
    <title> {{ config('app.name') }} </title>
    <!--     Fonts and icons     -->
    {{-- <link href="https://fonts.googleapis.com/css?family=nunito:300,400,600,700" rel="stylesheet" /> --}}
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/guest.css') }}">
</head>

<body class="{{ $class ?? '' }}">
    @include('layouts.navbars.guest.navbar')
    <main class="main-content  mt-0">
        <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg"
            style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signup-cover.jpg'); background-position: top;">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 text-center mx-auto">
                        <h1 class="text-white mb-2 mt-5">Welcome!</h1>
                        <p class="text-lead text-white">Use these awesome forms to login or create new account in your
                            project for free.</p>
                    </div>
                </div>
            </div>
        </div>
        @yield('content')
    </main>
    @include('layouts.footers.guest.footer')
    <!-- Github buttons -->
    <script async defer src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script async defer src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script async defer src="{{ asset('assets/vendor/swal/swalalert.min.js') }}"></script>
    {{-- <script async defer src="https://buttons.github.io/buttons.js"></script> --}}
    <script async defer src="{{ asset('assets/js/guest.js') }}"></script>
</body>

</html>
