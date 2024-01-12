<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>{{ __('DnvMaster - вход') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="{{ asset('master/auth/images/favicon.png') }}" rel="shortcut icon" >
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('master/auth/css/style.css') }}">
</head>
    <body class="img js-fullheight" style="background-image: url({{ asset('master/auth/images/bg.jpg') }});">
        <section class="ftco-section">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-md-6 text-center mb-5">
                        <h2 class="heading-section">{{ __('DnvMaster') }}</h2>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-4">
                        <div class="login-wrap p-0">
                            @if(session('status'))
                                <div class="mb-4 font-medium text-sm text-green-600">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <form class="signin-form" action="{{ route('login') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="{{ __('Е-мэйл') }}" required autofocus>
                                </div>
                                <div class="form-group">
                                    <input id="password" type="password" name="password" class="form-control" placeholder="{{ __('Пароль') }}" required autocomplete="current-password">
                                    <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary submit px-3">{{ __('Войти') }}</button>
                                </div>

                                <div class="form-group d-md-flex">
                                    <div class="w-50">
                                        <label class="checkbox-wrap checkbox-primary">{{ __('Запомнить') }}
                                            <input type="checkbox" name="remember" checked>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="w-50 text-md-right">
                                        @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}" style="color: #fff"> {{ __('Забыли пароль ?') }}</a>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Inclue Js files -->
        <script src="{{ asset('master/auth/js/jquery.min.js') }}"></script>
        <script src="{{ asset('master/auth/js/popper.js') }}"></script>
        <script src="{{ asset('master/auth/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('master/auth/js/main.js') }}"></script>
    </body>
</html>
