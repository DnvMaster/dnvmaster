<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>{{ (isset($title)) ? $title : 'DnvMaster' }}</title>
    <meta name="keywords" content="{{ (isset($keywords)) ? $keywords : 'HTML, CSS, JavaScript, PHP, Laravel, Bootstrap' }}">
    <meta name="description" content="{{ (isset($description)) ? $description : 'Если Вы хотите иметь современный, высококачественный и функциональный веб-сайт, заходите к нам' }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,900" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('master/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('master/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('master/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('master/fonts/ionicons/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('master/fonts/fontawesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('master/fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('master/css/style.css') }}">
</head>
<body>
    <header role="banner">
        <nav class="navbar navbar-expand-md navbar-dark bg-light">
            <div class="container">
                <a class="navbar-brand absolute" href="{{ url('/') }}">{{ __('DnvMaster') }}</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
                    @yield('navigation')
                </div>
            </div>
        </nav>
    </header>
    @yield('content')
    @yield('footer')
    <!-- loader js files -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>
    <script src="{{ asset('master/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('master/js/jquery-migrate-3.0.0.js') }}"></script>
    <script src="{{ asset('master/js/popper.min.js') }}"></script>
    <script src="{{ asset('master/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('master/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('master/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('master/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('master/js/main.js') }}"></script>
</body>
</html>
