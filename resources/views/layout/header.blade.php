<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Universitas Islam Negeri Sumatera Utara (Uin-SU) </title>
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">

    <!-- plugin scripts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,500i,600,700,800%7CSatisfy&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('ladun/home_asset/site_style/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('ladun/home_asset/site_style/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('ladun/home_asset/site_style/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('ladun/home_asset/site_style/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('ladun/home_asset/site_style/plugins/fontawesome-free-5.11.2-web/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('ladun/home_asset/site_style/plugins/kipso-icons/style.css') }}">
    <link rel="stylesheet" href="{{ asset('ladun/home_asset/site_style/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('ladun/home_asset/site_style/css/vegas.min.css') }}">

    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('ladun/home_asset/site_style/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('ladun/home_asset/site_style/css/responsive.css') }}">
</head>

<body>
    <div class="preloader"><span></span></div><!-- /.preloader -->
    <div class="page-wrapper">
        <div class="topbar-one">
            <div class="container">
                <div class="topbar-one__left">
                    <a href="#">humas@uinsu.ac.id</a>
                    <a href="#">62-61-6615683</a>
                </div><!-- /.topbar-one__left -->
                <div class="topbar-one__right">
                    <a href="http://account.uinsu.ac.id">Login</a>
                    <a href="#">Register</a>
                </div><!-- /.topbar-one__right -->
            </div><!-- /.container -->
        </div><!-- /.topbar-one -->
        <header class="site-header site-header__header-one ">
            <nav class="navbar navbar-expand-lg navbar-light header-navigation stricky">
                <div class="container clearfix">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="logo-box clearfix">
                        <a class="navbar-brand" href="{{ url('') }}">
                            <img src="{{ asset('ladun/home_asset/img/logo_utama.png') }}" class="main-logo" width="208" alt="Awesome Image" />
                        </a>
                       
                        <button class="menu-toggler" data-target=".main-navigation">
                            <span class="kipso-icon-menu"></span>
                        </button>
                    </div><!-- /.logo-box -->
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="main-navigation">
                        <ul class=" navigation-box">
                            <li class="current">
                                <a href="{{ url('') }}">Home</a>
                            </li>
                            <li>
                                <a href="#">About Uinsu</a>
                                <ul class="sub-menu">
                                    <li><a href="about.html">About Page</a></li>
                                    <li><a href="gallery.html">Gallery</a></li>
                                    <li><a href="pricing.html">Pricing Plans</a></li>
                                    <li><a href="faq.html">FAQ'S</a></li>
                                </ul><!-- /.sub-menu -->
                            </li>
                            <li>
                                <a href="courses.html">Admission</a>
                                <ul class="sub-menu">
                                    <li><a href="courses.html">Courses</a></li>
                                    <li><a href="course-details.html">Course Details</a></li>
                                </ul><!-- /.sub-menu -->
                            </li>
                            <li>
                                <a href="{{ url('/academic') }}">Academic</a>
                            </li>
                            <li>
                                <a href="news.html">News</a>
                                <ul class="sub-menu">
                                    <li><a href="news.html">News Page</a></li>
                                    <li><a href="news-details.html">News Details</a></li>
                                </ul><!-- /.sub-menu -->
                            </li>
                            <li>
                                <a href="contact.html">Contact</a>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                    <div class="right-side-box">
                        <a class="header__search-btn search-popup__toggler" href="#"><i class="kipso-icon-magnifying-glass"></i>
                            <!-- /.kipso-icon-magnifying-glass --></a>
                    </div><!-- /.right-side-box -->
                </div>
                <!-- /.container -->
            </nav>
            <div class="site-header__decor">
                <div class="site-header__decor-row">
                    <div class="site-header__decor-single">
                        <div class="site-header__decor-inner-1"></div><!-- /.site-header__decor-inner -->
                    </div><!-- /.site-header__decor-single -->
                    <div class="site-header__decor-single">
                        <div class="site-header__decor-inner-2"></div><!-- /.site-header__decor-inner -->
                    </div><!-- /.site-header__decor-single -->
                    <div class="site-header__decor-single">
                        <div class="site-header__decor-inner-3"></div><!-- /.site-header__decor-inner -->
                    </div><!-- /.site-header__decor-single -->
                </div><!-- /.site-header__decor-row -->
            </div><!-- /.site-header__decor -->
        </header><!-- /.site-header -->