<html class="no-js" lang="vi">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Qltv Admin - @yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-icon.png">
        <link rel="shortcut icon" href="favicon.ico">
        <link rel="stylesheet" href="{{ asset('template/vendors/bootstrap/dist/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('template/vendors/font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('template/vendors/themify-icons/css/themify-icons.css')}}">
        <link rel="stylesheet" href="{{ asset('template/vendors/flag-icon-css/css/flag-icon.min.css') }}">
        <link rel="stylesheet" href="{{ asset('template/vendors/selectFX/css/cs-skin-elastic.css') }}">
        <link rel="stylesheet" href="{{ asset('template/vendors/jqvmap/dist/jqvmap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('template/assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('template/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
        <link rel="stylesheet" href="{{ asset('template/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}">
        <link rel="stylesheet" href="{{ asset('template/assets/css/toastr.min.css') }}">
        <link href="{{ asset('template/assets/css/select2.min.css') }}" rel="stylesheet" />
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    </head>
    <body class="preloading">
        <div class="load">
            <span class="fa fa-spinner xoay icon"></span>
        </div>
        <aside id="left-panel" class="left-panel">
            <nav class="navbar navbar-expand-sm navbar-default">

                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="./"><img src="{{asset('template/images/logo4.png')}}" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="{{asset('template/images/logo3.png')}}" alt="Logo"></a>
                </div>
                @include('admin.layouts.menu')<!-- /.navbar-collapse -->
            </nav>
        </aside>
        <div id="right-panel" class="right-panel">
            @include('admin.layouts.header')<!-- /header -->
            <!-- Header-->

            <div class="breadcrumbs">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>@yield('header')</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                @yield('link')
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            @yield('content')
        </div>
    </body>
</html>
@include('admin.layouts.footer')