<!DOCTYPE html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport">
    <link rel="icon" href="{{ asset('dnvmaster/frontend/admin/img/master/favicon.ico') }}" type="image/x-icon">
    <script src="{{ asset('dnvmaster/frontend/admin/js/plugin/webfont/webfont.min.js') }}"></script>
    <script>
      WebFont.load({
        google: { families: ["Public Sans:300,400,500,600,700"] },
        custom: {
          families: ["Font Awesome 5 Solid","Font Awesome 5 Regular","Font Awesome 5 Brands","simple-line-icons",],
          urls: ["dnvmaster/frontend/admin/css/fonts.min.css"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>
    <link rel="stylesheet" href="{{ asset('dnvmaster/frontend/admin/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dnvmaster/frontend/admin/css/plugins.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dnvmaster/frontend/admin/css/kaiadmin.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dnvmaster/frontend/admin/css/demo.css') }}">
  </head>
  <body>
    <div class="wrapper">
        @include('dnvmaster.frontend.admin.navbar')
      @yield('main')
    </div>
    <script src="{{ asset('dnvmaster/frontend/admin/js/core/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('dnvmaster/frontend/admin/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('dnvmaster/frontend/admin/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('dnvmaster/frontend/admin/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
    <script src="{{ asset('dnvmaster/frontend/admin/js/plugin/chart.js/chart.min.js') }}"></script>
    <script src="{{ asset('dnvmaster/frontend/admin/js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('dnvmaster/frontend/js/plugin/chart-circle/circles.min.js') }}"></script>
    <script src="{{ asset('dnvmaster/frontend/js/plugin/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('dnvmaster/frontend/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>
    <script src="{{ asset('dnvmaster/frontend/js/plugin/jsvectormap/jsvectormap.min.js') }}"></script>
    <script src="{{ asset('dnvmaster/frontend/js/plugin/jsvectormap/world.js') }}"></script>
    <script src="{{ asset('dnvmaster/frontend/js/plugin/gmaps/gmaps.js') }}"></script>
    <script src="{{ asset('dnvmaster/frontend/js/plugin/sweetalert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('dnvmaster/frontend/js/kaiadmin.min.js') }}"></script>
  </body>
</html>
