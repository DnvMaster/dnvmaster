<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>@yield('title')</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{ asset('dnvmaster/frontend/img/logo.png') }}" rel="icon">
  <link href="{{ asset('dnvmaster/frontend/img/logo.png') }}" rel="apple-logo-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="">
  <link href="../css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('dnvmaster/frontend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('dnvmaster/frontend/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('dnvmaster/frontend/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('dnvmaster/frontend/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('dnvmaster/frontend/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link href="{{ asset('dnvmaster/frontend/css/style.css') }}" rel="stylesheet">
   <link href="{{ asset('dnvmaster/frontend/css/main.css') }}" rel="stylesheet">
</head>

<body class="index-page">


<main class="main">
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img class="img-fluid" src="{{ asset('dnvmaster/frontend/img/forms/undraw.svg') }}" alt="{{ __('Вход') }}">
                </div>
                <div class="col-md-6 contents">
                    <div class="row justity-content-center">
                        <div class="col-md-8">
                            <div class="mb-0">
                                <h3>{{ __('Вход в систему') }}</h3>
                                <p class="mb-4">{{ __('Введите свою почту и пароль.') }}</p>
                            </div>
                            <form action="{{ route('login') }}" method="post">
                                @csrf()
                                <div class="form-group mb-1">
                                    <label for="email"></label>
                                    <input type="email" class="form-control" value="example@mail.ru" id="email" name="email" required autofocus autocomplete="username">
                                </div>

                                 <div class="form-group  mb-1">
                                    <label for="password"></label>
                                    <input type="password" class="form-control" value="example" id="password" name="password" required autocomplete="current-password">
                                </div>

                                <div class="d-flex mb-4 align-items-center">
                                    <span class="ml-auto">
                                        @if (Route::has('password.request'))
                                            <a href="#" class="forgot-pass"> {{ __('Забыли пароль?') }}</a>
                                        @endif
                                    </span>
                                </div>

                                <input type="submit" value="{{ __('Вход') }}" class="btn btn-block btn-primary">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- Vendor JS Files -->
  <script src="{{ asset('dnvmaster/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('dnvmaster/frontend/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('dnvmaster/frontend/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('dnvmaster/frontend/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('dnvmaster/frontend/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('dnvmaster/frontend/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('dnvmaster/frontend/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('dnvmaster/frontend/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('dnvmaster/frontend/js/main.js') }}"></script>

</body>

</html>