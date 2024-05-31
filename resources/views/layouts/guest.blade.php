<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="/img/apple-icon.png">
    <link rel="icon" type="image/png" href="/img/favicon.png">
    <title> {{ config('app.name') }} </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=nunito:300,400,600,700" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/guest.css') }}">
</head>

<body class="{{ $class ?? '' }} dark-content overflow-hidden">
    <main class="main ">
        <div class="">
            <div class="row" style="height: 100dvh">
                <div class="col-6 login-img d-none d-md-flex align-items-center h-100">
                    
                </div>
                <div class="col h-100 d-flex justify-content-center justify-content-md-start align-items-center">
                    <div class="col-lg-8">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Github buttons -->
    <script async defer src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script async defer src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script async defer src="{{ asset('assets/vendor/swal/swalalert.min.js') }}"></script>
    <script async defer src="{{ asset('assets/js/guest.js') }}"></script>
</body>

</html>
