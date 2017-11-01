<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta name="author" content="Clasified">
  <meta name="generator" content="Wordpress! - Open Source Content Management">
  @yield('title')

  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script type="text/javascript" src="/js/script.js"></script>

  <!-- Favicon -->
  <link rel="shortcut icon" href="/client_inc/assets/img/favicon.png">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="/client_inc/assets/css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="/client_inc/assets/css/jasny-bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="/client_inc/assets/css/jasny-bootstrap.min.css" type="text/css">
  <!-- Material CSS -->
  <link rel="stylesheet" href="/client_inc/assets/css/material-kit.css" type="text/css">
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="/client_inc/assets/css/font-awesome.min.css" type="text/css">
  <!-- Line Icons CSS -->
  <link rel="stylesheet" href="/client_inc/assets/fonts/line-icons/line-icons.css" type="text/css">
  <!-- Line Icons CSS -->
  <link rel="stylesheet" href="/client_inc/assets/fonts/line-icons/line-icons.css" type="text/css">
  <!-- Main Styles -->
  <link rel="stylesheet" href="/client_inc/assets/css/main.css" type="text/css">
  <!-- Animate CSS -->
  <link rel="stylesheet" href="/client_inc/assets/extras/animate.css" type="text/css">
  <!-- Owl Carousel -->
  <link rel="stylesheet" href="/client_inc/assets/extras/owl.carousel.css" type="text/css">
  <link rel="stylesheet" href="/client_inc/assets/extras/owl.theme.css" type="text/css">
  <!-- Responsive CSS Styles -->
  <link rel="stylesheet" href="/client_inc/assets/css/responsive.css" type="text/css">
  <!-- Slicknav js -->
  <link rel="stylesheet" href="/client_inc/assets/css/slicknav.css" type="text/css">
  <!-- Bootstrap Select -->
  <link rel="stylesheet" href="/client_inc/assets/css/bootstrap-select.min.css">

</head>
<body>
  <!-- Header Section Start -->
  <div class="header">
    <nav class="navbar navbar-default main-navigation" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <!-- Stat Toggle Nav Link For Mobiles -->
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- End Toggle Nav Link For Mobiles -->
          <a class="navbar-brand logo" href="/"><!--<img src="/client_inc/assets/img/logo.png" alt="">-->ServiceHunt</a>
        </div>
        <!-- brand and toggle menu for mobile End -->

        <!-- Navbar Start -->
        <div class="collapse navbar-collapse" id="navbar">
          <ul class="nav navbar-nav navbar-right">
            @if(Auth::guard('user')->user() )
            <li><a href="{{route('user.profile')}}">My account</a></li>
            <li><a href="#"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">Logout</a></li>
            <form id="logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}</form>
              @elseif(Auth::guard('admin')->user())
              <li><a href="{{route('admin.dashboard')}}">Admin</a></li>
              <li><a href="#"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">Logout</a></li>
              <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}</form>
                @else
                <li><a href="{{route('user.login')}}"><i class="lnr lnr-enter"></i> Login</a></li>
                <li><a href="{{route('user.register')}}"><i class="lnr lnr-user"></i> Signup</a></li>
                @endif
                <li class="postadd">
                  <a class="btn btn-danger btn-post" href="{{route('user.select.package')}}"><span class="fa fa-plus-circle"></span> Post an Ad</a>
                </li>
              </ul>
            </div>
            <!-- Navbar End -->
          </div>
        </nav>
        <!-- Off Canvas Navigation -->
        <div class="navmenu navmenu-default navmenu-fixed-left offcanvas">
          <!--- Off Canvas Side Menu -->
          <div class="close" data-toggle="offcanvas" data-target=".navmenu">
            <i class="fa fa-close"></i>
          </div>
          <h3 class="title-menu">All Pages</h3>
          <ul class="nav navmenu-nav"> <!--- Menu -->
            <li><a href="index.html">Home</a></li>
            <li><a href="index-v-2.html">Home Page V2</a></li>
            <li><a href="about.html">About us</a></li>
            <li><a href="category.html">Category</a></li>
            <li><a href="ads-details.html">Ads details</a></li>
            <li><a href="pricing.html">Pricing Tables</a></li>
            <li><a href="account-archived-ads.html">Account archived</a></li>
            <li><a href="account-close.html">Account-close</a></li>
            <li><a href="account-favourite-ads.html">Favourite ads</a></li>
            <li><a href="account-home.html">Account home</a></li>
            <li><a href="account-myads.html">Account myads</a></li>
            <li><a href="account-pending-approval-ads.html">pending approval</a></li>
            <li><a href="account-saved-search.html">saved search</a></li>
            <li><a href="post-ads.html">Post ads</a></li>
            <li><a href="posting-success.html">Posting-success</a></li>
            <li><a href="blog.html">Blogs</a></li>
            <li><a href="blog-details.html">Blog Details</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="forgot-password.html">Forgot-password</a></li>
            <li><a href="faq.html">Faq</a></li>
            <li><a href="signup.html">Signup</a></li>
          </ul><!--- End Menu -->
        </div> <!--- End Off Canvas Side Menu -->
        <div class="tbtn wow pulse" id="menu" data-wow-iteration="infinite" data-wow-duration="500ms" data-toggle="offcanvas" data-target=".navmenu">
          <p><i class="fa fa-file-text-o"></i> All Pages</p>
        </div>
      </div>
      <!-- Header Section End -->

      @include('layouts.resetPassword')

      @include('flash::message')

      @yield('content')

      <!--start footer section-->

      @include('layouts.siteFooter')

      <!--end footer section-->

      <!-- Go To Top Link -->
      <a href="#" class="back-to-top">
        <i class="fa fa-angle-up"></i>
      </a>

      <!-- Main JS  -->
      <script type="text/javascript" src="/client_inc/assets/js/jquery-min.js"></script>
      <script type="text/javascript" src="/client_inc/assets/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="/client_inc/assets/js/material.min.js"></script>
      <script type="text/javascript" src="/client_inc/assets/js/material-kit.js"></script>
      <script type="text/javascript" src="/client_inc/assets/js/jquery.parallax.js"></script>
      <script type="text/javascript" src="/client_inc/assets/js/owl.carousel.min.js"></script>
      <script type="text/javascript" src="/client_inc/assets/js/wow.js"></script>
      <script type="text/javascript" src="/client_inc/assets/js/main.js"></script>
      <script type="text/javascript" src="/client_inc/assets/js/jquery.counterup.min.js"></script>
      <script type="text/javascript" src="/client_inc/assets/js/waypoints.min.js"></script>
      <script type="text/javascript" src="/client_inc/assets/js/jasny-bootstrap.min.js"></script>
      <script src="/client_inc/assets/js/bootstrap-select.min.js"></script>
      <script language="javascript" type="text/javascript" src="/js/starrr.js"></script>
      <script>
        $('div.alert').not('.alert-important').delay(2000).fadeOut(1500);


  $('#main-slider').owlCarousel({
	loop:true,
  nav: true,
  autoplay:true,
  lazyLoad:true,
  singleItem: true,
  slideSpeed : 300,
  paginationSpeed : 400,
  items : 2,
  itemsDesktop : false,
  itemsDesktopSmall : false,
  itemsTablet: false,
  itemsMobile : false,
  dots: false,
  responsiveClass:true,
  navText: ["←","→"]
});

$('#main-brand-slider').owlCarousel({ loop:true,
  margin:10, nav:false, autoplay:true,
  lazyLoad:true, items : 1, itemsDesktop : false,
  itemsDesktopSmall : false, itemsTablet: false,
  itemsMobile : false, dots: false, });
      </script>

    </body>
    </html>
