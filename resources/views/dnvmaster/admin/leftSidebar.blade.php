<div class="vertical-menu">
    <div data-simplebar class="h-100">

        <div class="user-profile text-center mt-3">
            <div>
                <img src="{{ asset('dnvmaster/backend/images/users/dnvmaster.jpg') }}" alt="" class="avatar-md rounded-circle">
            </div>
            <div class="mt-3">
                <h4 class="font-size-16 mb-1">{{ __('DnvMaster') }}</h4>
                <span class="text-muted"><i class="ri-record-circle-line align-middle font-size-14 text-success"></i> {{ __('Online') }}</span>
            </div>
        </div>

        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">{{ __('Страницы') }}</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-account-circle-line"></i>
                        <span>{{ __('Аутентификация') }}</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="auth-login.html">{{ __('Логин') }}</a></li>
                        <li><a href="auth-register.html">{{ __('Регистрация') }}</a></li>
                        <li><a href="auth-recoverpw.html">{{ __('Восстановить пароль') }}</a></li>
                        <li><a href="auth-lock-screen.html">{{ __('Блокировка') }}</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-profile-line"></i>
                        <span>{{ __('Настройки сайта') }}</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('home.section') }}">{{ __('Секция на главную стр') }}</a></li>
                        <li><a href="pages-404.html">Error 404</a></li>
                        <li><a href="pages-500.html">Error 500</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>