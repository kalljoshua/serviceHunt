<!DOCTYPE html>
<html lang="en">
<head>
    @yield('title')
    <!--Meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Houzez HTML5 Template">
    <meta name="description" content="Houzez HTML5 Template">
    <meta name="author" content="Favethemes">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="apple-touch-icon" sizes="144x144" href="/client_inc/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="/client_inc/images/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/client_inc/images/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/client_inc/images/favicons/manifest.json">
    <link rel="mask-icon" href="/client_inc/images/favicons/safari-pinned-tab.svg" >

    <link href="/client_inc/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="/client_inc/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
    <link href="/client_inc/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="/client_inc/css/owl.carousel.css" rel="stylesheet" type="text/css" />
    <link href="/client_inc/css/jquery-ui.css" rel="stylesheet" type="text/css" />
    <link href="/client_inc/css/styles.css" rel="stylesheet" type="text/css" />
    <link href="/css/animate.css" rel="stylesheet" type="text/css" />

</head>
<body>

<button class="btn scrolltop-btn back-top"><i class="fa fa-angle-up"></i></button>
<div class="modal fade" id="pop-login" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <ul class="login-tabs">
                    <li class="active">Login</li>
                    <li>Register</li>
                </ul>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></button>

            </div>
            @include('layouts.loginRegister')

        </div>
    </div>
</div>

    @include('layouts.resetPassword')

    @include('layouts.topSection')

    @include('flash::message')

    @yield('content')

    <!--start footer section-->

    @include('layouts.siteFooter')

    <!--end footer section-->

    <!--Start Scripts-->
    <script type="text/javascript" src="/client_inc/js/jquery.js"></script>
    <script type="text/javascript" src="/client_inc/js/modernizr.custom.js"></script>
    <script type="text/javascript" src="/client_inc/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/client_inc/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="/client_inc/js/jquery.matchHeight-min.js"></script>
    <script type="text/javascript" src="/client_inc/js/bootstrap-select.js"></script>
    <script type="text/javascript" src="/client_inc/js/jquery-ui.js"></script>
    <script type="text/javascript" src="/client_inc/js/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="/client_inc/js/jquery.nicescroll.js"></script>
    <script type="text/javascript" src="/client_inc/js/custom.js"></script>
    <script>
      $('div.alert').not('.alert-important').delay(2000).fadeOut(1500);
    </script>
</body>
</html>