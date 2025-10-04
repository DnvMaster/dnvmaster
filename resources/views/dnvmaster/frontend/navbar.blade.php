<div class="container-fluid container-xl position-relative d-flex align-items-center">
  <a href="{{ url('/') }}" class="logo d-flex align-items-center me-auto">
    <img src="{{ asset('dnvmaster/frontend/img/logo.png') }}" alt="{{ __('DnvMaster') }}">
    <h1 class="sitename">{{ __('DnvMaster') }}</h1>
  </a>
  <nav id="navmenu" class="navmenu">
    <ul>
      <li><a href="#hero" class="active">{{ __('Главная') }}<br></a></li>
      <li><a href="#about">{{ __('О нас') }}</a></li>
      <li><a href="#services">{{ __('Сервис') }}</a></li>
      <li><a href="#portfolio">{{ __('Портфолио') }}</a></li>
      <li><a href="#team">{{ __('Команда') }}</a></li>
      <li><a href="blog.html">{{ __('Блог') }}</a></li>
      <li class="dropdown">
        <a href="#">
          <span>{{ __('Веб') }}</span>
          <i class="bi bi-chevron-down toggle-dropdown"></i>
        </a>
        <ul>
          <li><a href="#">{{ __('Laravel') }}</a></li>
          <li><a href="#">{{ __('Livewire') }}</a></li>
          <li><a href="#">{{ __('PHP') }}</a></li>
          <li><a href="#">{{ __('MySQL') }}</a></li>
          <li><a href="#">{{ __('Bootstrap') }}</a></li>
        </ul>
      </li>
      <li><a href="#contact">{{ __('Контакты') }}</a></li>
    </ul>
    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
  </nav>
  <a class="btn-getstarted flex-md-shrink-0" href="{{ route('login') }}">{{ __('Вход') }}</a>
</div>