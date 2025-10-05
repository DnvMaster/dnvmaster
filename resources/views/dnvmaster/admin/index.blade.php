<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>DnvMaster | Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="descriptions" content="">
        <meta name="keywords" content="">
        <link href="{{ asset('dnvmaster/backend/images/favicon.ico') }}" rel="shortcut icon">
        <link href="{{ asset('dnvmaster/backend/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet">
        <link href="{{ asset('dnvmaster/backend/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
        <link href="{{ asset('dnvmaster/backend/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet">  
        <link href="{{ asset('dnvmaster/backend/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet">
        <link href="{{ asset('dnvmaster/backend/css/icons.min.css') }}" rel="stylesheet">
        <link href="{{ asset('dnvmaster/backend/css/app.min.css') }}" id="app-style" rel="stylesheet">
    </head>
    <body data-topbar="dark">
        <div id="layout-wrapper">
            @include('dnvmaster.admin.header')
            @include('dnvmaster.admin.leftSidebar')
            <div class="main-content">
                <div class="page-content">
                    <div class="container-fluid">
                        

                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">{{ __('Инструменты') }}</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">{{ __('DnvMaster') }}</a></li>
                                            <li class="breadcrumb-item active">{{ __('Главная') }}</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <!-- Start column 706 -->
                        </div>


                    </div>
                </div>
                @include('dnvmaster.admin.footer')
            </div>
        </div>
        <div class="rightbar-overlay"></div>
        <!-- JAVASCRIPT -->
        <script src="{{ asset('dnvmaster/backend/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('dnvmaster/backend/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('dnvmaster/backend/libs/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('dnvmaster/backend/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('dnvmaster/backend/libs/node-waves/waves.min.js') }}"></script>
        <script src="{{ asset('dnvmaster/backend/libs/apexcharts/apexcharts.min.js') }}"></script>
        <script src="{{ asset('dnvmaster/backend/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
        <script src="{{ asset('dnvmaster/backend/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js') }}"></script>
        <script src="{{ asset('dnvmaster/backend/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('dnvmaster/backend/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('dnvmaster/backend/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('dnvmaster/backend/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('dnvmaster/backend/js/pages/dashboard.init.js') }}"></script>
        <script src="{{ asset('dnvmaster/backend/js/app.js') }}"></script>
    </body>
</html>