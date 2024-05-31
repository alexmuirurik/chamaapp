<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="/img/apple-icon.png">
    <link rel="icon" type="image/png" href="{{asset('assets/img/logo-ct-dark.png')}}">
    <title> {{ config('app.name') }} </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=nunito:300,400,600,700" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nucleo-icons.css') }}">
    @livewireStyles
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
</head>

<body class="{{ $class ?? '' }} dark-content">
    @include('layouts.navbars.auth.sidenav')
    <main class="px-3">
        @include('layouts.navbars.auth.topnav', ['title' => $title ?? 'title' ])
        <div class="main-wrapper">
            @include('components.alert')
            @yield('content')
        </div>
    </main>
    <!-- Github buttons -->
    <script defer src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script defer src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script defer src="{{ asset('assets/vendor/swal/swalalert.min.js') }}"></script>
    <script defer src="{{asset('assets/vendor/apexjs/apexjs.min.js')}}"></script>
    @livewireScripts
    <script defer src="{{ asset('assets/js/index.js') }}"></script>
</body>

</html>
