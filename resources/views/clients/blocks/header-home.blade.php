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
    <title>Travelove - {{ $title }} </title>
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
    <!-- jQuery UI -->
    <link rel="stylesheet" href="{{ asset('clients/assets/css/jquery-ui.min.css') }}">
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
    {{-- custom css --}}
    <link rel="stylesheet" href="{{ asset('clients/assets/css/custom-css.css') }}" />
    <link rel="stylesheet" href="{{ asset('clients/assets/css/css-login/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('clients/assets/css/css-login/fonts/material-icon/css/material-design-iconic-font.min.css') }}">
     <!-- Import CSS for Toastr -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
    <!-- User-profile css -->
    <link rel="stylesheet" href="{{ asset('clients/assets/css/user-profile.css') }}">
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
                                            <img src="{{ asset('clients/assets/images/logos/logo.png') }}" alt="Logo" title="Logo">
                                       </a>
                                   </div>
                                   
                                    <!-- Toggle Button -->
                                    <button type="button" class="navbar-toggle" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <li class="{{ Request::url() == route('home') ? 'active' : '' }}"><a href="{{ route('home') }}">Trang Chủ</a></li>
                                        <li class="{{ Request::url() == route('about') ? 'active' : '' }}"><a href="{{ route('about') }}">Giới thiệu</a></li>
                                        <li class="dropdown {{ Request::is('tours') || Request::is('team') || Request::is('tour-detail/*') ? 'active' : '' }}"><a href="{{ route('tour') }}">Tour</a>
                                            <ul>
                                                <li><a href="{{ route('tour') }}">Tours</a></li>
                                                <li><a href="{{ route('team') }}">Hướng dẫn viên du lịch</a></li>
                                            </ul>
                                        </li>
                                        <li class="{{ Request::url() == route('destination') ? 'active' : '' }}"><a href="{{ route('destination') }}">Điểm đến</a>
                                        </li>
                                        <li class="{{ Request::url() == route('contact') ? 'active' : '' }}"><a href="{{ route('contact') }}">Liên hệ</a></li>
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
                            <a href="{{ route('tour') }}" class="theme-btn style-two bgc-secondary">
                                <span data-hover="Đặt ngay">Đặt ngay</span>
                                <i class="fal fa-arrow-right"></i>
                            </a>
                            <!-- menu sidbar -->
                            <div class="menu-sidebar">
                                <li class="drop-down">
                                    <button class="dropdown-toggle bg-transparent" id="userDropdown"
                                        style="color: white">
                                        @if (session()->has('avatar'))
                                            @php
                                                $avatar = session()->get('avatar', 'user_avatar.jpg');
                                            @endphp
                                            <img id="avatarPreview" class="img-account-profile rounded-circle"
                                                src="{{ asset('clients/assets/images/user-profile/' . $avatar) }}"
                                                style="width: 36px; height: 36px;">
                                        @else
                                            <i class='bx bxs-user bx-tada' style="font-size: 36px; color: white;"></i>
                                        @endif
                                    </button>

                                    <ul class="dropdown-menu" id="dropdownMenu">
                                        @if (session()->has('username'))
                                            <li><a href="{{ route('user-profile') }}">Thông tin cá nhân</a></li>
                                            <li><a href="#">Tour đã đặt</a></li>
                                            <li><a href="{{ route('logout') }}">Đăng xuất</a></li>
                                        @else
                                            <li><a href="{{ route('login') }}">Đăng nhập</a></li>
                                        @endif
                                    </ul>

                                </li>
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

