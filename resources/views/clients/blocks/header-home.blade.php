<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from webtendtheme.net/html/2024/ravelo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Oct 2024 09:26:27 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Travelove - Travel & Tour Booking </title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="{{ asset('clients/assets/images/logos/favicon.png') }}" type="image/x-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Flaticon -->
    <link rel="stylesheet" href="{{ asset('clients/assets/css/flaticon.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('clients/assets/css/fontawesome-5.14.0.min.css') }}">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('clients/assets/css/bootstrap.min.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('clients/assets/css/magnific-popup.min.css') }}">
    <!-- Nice Select -->
    <link rel="stylesheet" href="{{ asset('clients/assets/css/nice-select.min.css') }}">
    <!-- Animate -->
    <link rel="stylesheet" href="{{ asset('clients/assets/css/aos.css') }}">
    <!-- Slick -->
    <link rel="stylesheet" href="{{ asset('clients/assets/css/slick.min.css') }}">
    <!-- Main Style -->
    <link rel="stylesheet" href="{{ asset('clients/assets/css/style.css') }}">


    {{-- boxicons --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    {{-- date time picker  --}}
    <link rel="stylesheet" href="{{ asset('clients/assets/css/jquery.datetimepicker.min.css') }}" />
    {{-- custom css  --}}
    <link rel="stylesheet" href="{{ asset('clients/assets/css/custom-css.css') }}" />
    <!-- Import CSS for Toastr -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
    {{-- Login --}}
    <link rel="stylesheet" href="{{ asset('clients/assets/css/css-login/style.css') }}">
    <link rel="stylesheet" href="{{ asset('clients/assets/css/css-login/fonts/material-icon/css/material-design-iconic-font.min.css') }}">
</head>

<body>
    {{-- Page Wrapper --}}
    <div class="page-wrapper">

        <!-- Preloader -->
        {{-- <div class="preloader"><div class="custom-loader"></div></div> --}}

        <!-- main header -->
        <header class="main-header header-one white-menu menu-absolute">
            <!--Header-Upper-->
            <div class="header-upper py-30 rpy-0">
                <div class="container-fluid clearfix">

                    <div class="header-inner rel d-flex align-items-center">
                        <div class="logo-outer">
                            <div class="logo"><a href={{ route('home') }}><img
                                        src="{{ asset('clients/assets/images/logos/logo.png') }}" alt="Logo"
                                        title="Logo"></a></div>
                        </div>

                        <div class="nav-outer mx-lg-auto ps-xxl-5 clearfix">
                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-lg">
                                <div class="navbar-header">
                                    <div class="mobile-logo">
                                        <a href={{ route('home') }}>
                                            <img src="{{ asset('clients/assets/images/logos/logo.png') }}"
                                                alt="Logo" title="Logo">
                                        </a>
                                    </div>

                                    <!-- Toggle Button -->
                                    <button type="button" class="navbar-toggle" data-bs-toggle="collapse"
                                        data-bs-target=".navbar-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <!-- Main Menu -->
                                <nav class="main-menu navbar-expand-lg">
                                    <div class="navbar-header">
                                        <div class="mobile-logo">
                                            <a href={{ route('home') }}>
                                                <img src="{{ asset('clients/assets/images/logos/logo.png') }}"
                                                    alt="Logo" title="Logo">
                                            </a>
                                        </div>

                                        <!-- Toggle Button -->
                                        <button type="button" class="navbar-toggle" data-bs-toggle="collapse"
                                            data-bs-target=".navbar-collapse">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>

                                    <div class="navbar-collapse collapse clearfix">
                                        <ul class="navigation clearfix">
                                            <li><a href={{ route('home') }}>Trang chủ</a>

                                            </li>
                                            <li><a href={{ route('about') }}>Giới thiệu</a></li>
                                            <li class="dropdown"><a href={{ route('tour') }}>Tour</a>
                                                <ul>
                                                    <li><a href={{ route('tour-sidebar') }}>Tour Sidebar</a></li>
                                                    <li><a href={{ route('team') }}>Hướng dẫn viên</a></li>
                                                    <li><a href={{ route('tour-detail') }}>Chi tiết Tour</a></li>
                                                </ul>
                                            </li>
                                            <li><a href={{ route('destination') }}>Điểm đến</a>
                                            </li>
                                            <li><a href={{ route('contact') }}>Liên hệ</a></li>
                                        </ul>
                                    </div>

                                </nav>
                                <!-- Main Menu End-->

                            </nav>
                            <!-- Main Menu End-->
                        </div>

                        <!-- Nav Search -->
                        <div class="nav-search">
                            <button class="far fa-search"></button>
                            <form action="#" class="hide">
                                <input type="text" placeholder="Search" class="searchbox" required="">
                                <button type="submit" class="searchbutton far fa-search"></button>
                            </form>
                        </div>

                        <!-- Menu Button -->
                        <div class="menu-btns py-10">
                            <a href="contact.html" class="theme-btn style-two bgc-secondary">
                                <span data-hover="Book Now">Book Now</span>
                                <i class="fal fa-arrow-right"></i>
                            </a>
                            <!-- menu sidbar -->
                            <div class="menu-sidebar">
                                <button class="bg-transparent">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Header Upper-->
        </header>
        <!--End main header -->
        <!--Form Back Drop-->
        <div class="form-back-drop"></div>

