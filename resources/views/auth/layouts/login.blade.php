
<html class="no-js" lang="vi">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>QLTV Admin - @yield('title')</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="{{ asset('template/vendors/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('template/vendors/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('template/vendors/themify-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('template/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{ asset('template/vendors/selectFX/css/cs-skin-elastic.css')}}">

    <link rel="stylesheet" href="{{ asset('template/assets/css/style.css')}}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body class="bg-dark">
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <img class="align-content" style="width:150px" src="{{ asset('template/images/logo4.png')}}" alt="">
                    </a>
                </div>
                @yield('content')
            </div>
        </div>
    </div>


    <script src="{{ asset('template/vendors/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{ asset('template/vendors/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{ asset('template/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('template/assets/js/main.js')}}"></script>


</body>

</html>
