<!DOCTYPE html>
<!--[if IE 8]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->


<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8" />
    <!-- [if IE ]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/><![endif] -->
    <title>@yield('title', 'Clineva - Research Laboratories')</title>
    <meta name="description" content="Clineva Research Laboratories is a modern healthcare and laboratory center dedicated to professional medical diagnostics and research.">
    <meta name="keywords" content="medical html template, healthcare website, hospital, clinic, doctor, responsive, bootstrap 5, appointment, dentist, health care, medical landing page">
    <meta name="author" content="themesflat.com" />

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" />
    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.min.css') }}" />
    <!-- Magnific-popup -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/magnific-popup.min.css') }}" />
    <!-- Swiper -->
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
    <!-- Odometer -->
    <link rel="stylesheet" href="{{ asset('css/odometer-theme-default.css') }}">
    <!-- Nice Select -->
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
    <!-- Jquery-ui -->
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}">
    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}" />

    <!-- Icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('icons/icomoon/style.css') }}" />

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{ asset('image/logo/favicon.png') }}" />
    <link rel="apple-touch-icon-precomposed" href="{{ asset('image/logo/favicon.png') }}" />


</head>

<body class="counter-scroll">

    <!-- .preload -->
    <div id="loading">
        <div id="loading-center">
            <div class="loader-container">
                <div class="wrap-loader">
                    <div class="loader">
                    </div>
                    <div class="icon">
                        <img src="{{ asset('image/logo/favicon.png') }}" alt="logo">
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.preload -->

    <div class="wrapper">
        <!-- Top-bar -->
        <div class="top-bar">
            <div class="top-bar-inner flex align-items-center justify-content-between mx-30">
                <div class="tf-tb-left flex align-items-center">
                    <span class="text-topbar">Need professional medical & health Care?</span>
                    <div class="top-bar-item phone-topbar">
                        <i class="icon-phone-volume"></i>
                        <div class="content">
                            <span>Call : </span>
                            <a href="#">+1 (234) 5688 9990</a>
                        </div>
                    </div>
                    <span class="dot-topbar dot bg-paragraph"></span>
                    <div class="top-bar-item email-topbar">
                        <i class="icon-envelope"></i>
                        <div class="content">
                            <span>Email : </span>
                            <a href="#">support@gmail.com</a>
                        </div>
                    </div>
                </div>
                <div class="tf-tb-right flex align-items-center">
                    <div class="top-bar-item time-topbar">
                        <i class="icon-clock"></i>
                        <div class="content">
                            <span>Working Hours : </span>
                            <span class="color-title">Mon-Friday, 08am - 09pm</span>
                        </div>
                    </div>
                    <span class="dot-topbar dot bg-paragraph"></span>
                    <ul class="post-social">
                        <li><a href="#" class="icon-social"><i class="icon-facebook"></i></a></li>
                        <li><a href="#" class="icon-social"><i class="icon-twitter"></i></a></li>
                        <li><a href="#" class="icon-social"><i class="icon-linkedin2"></i></a></li>
                        <li><a href="#" class="icon-social"><i class="icon-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div><!-- /.top-bar -->

        <!-- Header -->
        <header class="header header-sticky" id="header-sticky">
            <div class="header-content flex justify-content-between align-items-center mx-30">
                <div class="header-left flex align-items-center">
                    <div class="logo logo-header">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('image/logo/logo.svg') }}" alt="Clineva Research Laboratories">
                        </a>
                    </div>
                    <nav class="main-menu">
                        <ul class="menu-primary-menu">
                            <li class="menu-item {{ request()->routeIs('home') ? 'current-menu-item' : '' }}">
                                <a href="{{ route('home') }}" class="item-link body-2">
                                    <span>Home</span>
                                </a>
                            </li>
                            <li class="menu-item menu-item-has-children position-relative {{ request()->routeIs('about*') || request()->routeIs('history') || request()->routeIs('faq') || request()->routeIs('pricing') ? 'current-menu-item' : '' }}">
                                <a href="{{ route('about') }}" class="item-link body-2">
                                    <span>About Us</span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="sub-menu-item"><a href="{{ route('about') }}" class="item-link-2 body-2">About Clineva</a></li>
                                    <li class="sub-menu-item"><a href="{{ route('history') }}" class="item-link-2 body-2">Our History</a></li>
                                    <li class="sub-menu-item"><a href="{{ route('faq') }}" class="item-link-2 body-2">FAQs</a></li>
                                    <li class="sub-menu-item"><a href="{{ route('pricing') }}" class="item-link-2 body-2">Pricing Plans</a></li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-has-children position-relative {{ request()->routeIs('services*') || request()->routeIs('clinic*') ? 'current-menu-item' : '' }}">
                                <a href="{{ route('services') }}" class="item-link body-2">
                                    <span>Services</span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="sub-menu-item"><a href="{{ route('services') }}" class="item-link-2 body-2">All Services</a></li>
                                    <li class="sub-menu-item"><a href="{{ route('clinic.healthcare') }}" class="item-link-2 body-2">Health Care Clinic</a></li>
                                    <li class="sub-menu-item"><a href="{{ route('clinic.dental') }}" class="item-link-2 body-2">Dental Clinic</a></li>
                                    <li class="sub-menu-item"><a href="{{ route('clinic.childcare') }}" class="item-link-2 body-2">Child Care Clinic</a></li>
                                    <li class="sub-menu-item"><a href="{{ route('clinic.eyecare') }}" class="item-link-2 body-2">Eye Care Clinic</a></li>
                                </ul>
                            </li>
                            <li class="menu-item {{ request()->routeIs('doctors*') ? 'current-menu-item' : '' }}">
                                <a href="{{ route('doctors') }}" class="item-link body-2">
                                    <span>Doctors</span>
                                </a>
                            </li>
                            <li class="menu-item {{ request()->routeIs('appointment') ? 'current-menu-item' : '' }}">
                                <a href="{{ route('appointment') }}" class="item-link body-2">
                                    <span>Appointment</span>
                                </a>
                            </li>
                            <li class="menu-item {{ request()->routeIs('blog*') ? 'current-menu-item' : '' }}">
                                <a href="{{ route('blog') }}" class="item-link body-2">
                                    <span>Blog</span>
                                </a>
                            </li>
                            <li class="menu-item {{ request()->routeIs('contact') ? 'current-menu-item' : '' }}">
                                <a href="{{ route('contact') }}" class="item-link body-2">
                                    <span>Contact</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="header-right">
                    <div class="nav-icon">
                        <div class="nav-search nav-item">
                            <a class="search-btn" href="#canvasSearch" data-bs-toggle="offcanvas">
                                <i class="icon-magnifying-glass"></i>
                            </a>
                        </div>
                        <div class="mobile-button nav-item d-xl-none">
                            <a href="#canvasMobile" data-bs-toggle="offcanvas">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                    </div>
                    <div class="nav-btn">
                        <a href="{{ route('appointment') }}" class="tf-btn style-small">
                            <span>Make Appointment</span>
                            <i class="icon-arrow-right"></i>
                        </a>
                    </div>
                    <div class="nav-megamenu">
                        <a href="#canvnasMegamenu" data-bs-toggle="offcanvas" class="megamenu-btn">
                            <i class="icon-megamenu"></i>
                        </a>
                    </div>
                </div>
            </div>
        </header>

        <header class="header" id="header">
            <div class="header-content flex justify-content-between align-items-center mx-30">
                <div class="header-left flex align-items-center">
                    <div class="logo logo-header">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('image/logo/logo.svg') }}" alt="Clineva Research Laboratories">
                        </a>
                    </div>
                    <nav class="main-menu">
                        <ul class="menu-primary-menu">
                            <li class="menu-item {{ request()->routeIs('home') ? 'current-menu-item' : '' }}">
                                <a href="{{ route('home') }}" class="item-link body-2">
                                    <span>Home</span>
                                </a>
                            </li>
                            <li class="menu-item menu-item-has-children position-relative {{ request()->routeIs('about*') || request()->routeIs('history') || request()->routeIs('faq') || request()->routeIs('pricing') ? 'current-menu-item' : '' }}">
                                <a href="{{ route('about') }}" class="item-link body-2">
                                    <span>About Us</span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="sub-menu-item"><a href="{{ route('about') }}" class="item-link-2 body-2">About Clineva</a></li>
                                    <li class="sub-menu-item"><a href="{{ route('history') }}" class="item-link-2 body-2">Our History</a></li>
                                    <li class="sub-menu-item"><a href="{{ route('faq') }}" class="item-link-2 body-2">FAQs</a></li>
                                    <li class="sub-menu-item"><a href="{{ route('pricing') }}" class="item-link-2 body-2">Pricing Plans</a></li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-has-children position-relative {{ request()->routeIs('services*') || request()->routeIs('clinic*') ? 'current-menu-item' : '' }}">
                                <a href="{{ route('services') }}" class="item-link body-2">
                                    <span>Services</span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="sub-menu-item"><a href="{{ route('services') }}" class="item-link-2 body-2">All Services</a></li>
                                    <li class="sub-menu-item"><a href="{{ route('clinic.healthcare') }}" class="item-link-2 body-2">Health Care Clinic</a></li>
                                    <li class="sub-menu-item"><a href="{{ route('clinic.dental') }}" class="item-link-2 body-2">Dental Clinic</a></li>
                                    <li class="sub-menu-item"><a href="{{ route('clinic.childcare') }}" class="item-link-2 body-2">Child Care Clinic</a></li>
                                    <li class="sub-menu-item"><a href="{{ route('clinic.eyecare') }}" class="item-link-2 body-2">Eye Care Clinic</a></li>
                                </ul>
                            </li>
                            <li class="menu-item {{ request()->routeIs('doctors*') ? 'current-menu-item' : '' }}">
                                <a href="{{ route('doctors') }}" class="item-link body-2">
                                    <span>Doctors</span>
                                </a>
                            </li>
                            <li class="menu-item {{ request()->routeIs('appointment') ? 'current-menu-item' : '' }}">
                                <a href="{{ route('appointment') }}" class="item-link body-2">
                                    <span>Appointment</span>
                                </a>
                            </li>
                            <li class="menu-item {{ request()->routeIs('blog*') ? 'current-menu-item' : '' }}">
                                <a href="{{ route('blog') }}" class="item-link body-2">
                                    <span>Blog</span>
                                </a>
                            </li>
                            <li class="menu-item {{ request()->routeIs('contact') ? 'current-menu-item' : '' }}">
                                <a href="{{ route('contact') }}" class="item-link body-2">
                                    <span>Contact</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="header-right">
                    <div class="nav-icon">
                        <div class="nav-search nav-item">
                            <a class="search-btn" href="#canvasSearch" data-bs-toggle="offcanvas">
                                <i class="icon-magnifying-glass"></i>
                            </a>
                        </div>
                        <div class="mobile-button nav-item d-xl-none">
                            <a href="#canvasMobile" data-bs-toggle="offcanvas">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                    </div>
                    <div class="nav-btn">
                        <a href="{{ route('appointment') }}" class="tf-btn style-small">
                            <span>Make Appointment</span>
                            <i class="icon-arrow-right"></i>
                        </a>
                    </div>
                    <div class="nav-megamenu">
                        <a href="#canvnasMegamenu" data-bs-toggle="offcanvas" class="megamenu-btn">
                            <i class="icon-megamenu"></i>
                        </a>
                    </div>
                </div>
            </div>
        </header>
        <!-- /.header -->


        <!-- Main Content Area -->
        <main id="main">
            @yield('content')
        </main>

        <footer class="footer" id="footer">
            <div class="tf-container">
                <div class="footer-inner flex justify-content-between">
                    <div class="footer-left">
                        <div class="top subscribe-footer">
                            <h3 class="title-footer">
                                Newsletter Subscribe
                            </h3>
                            <div class="sub-title">
                                Subscribe our newsletter to get more updates
                            </div>
                            <form action="javascript:void(0)" method="POST" class="form-newsletter">
                                
                                <fieldset class="flex align-items-center g-22">
                                    <input type="text" placeholder="Email Address" required>
                                    <button type="submit" class="tf-btn hover-bg-white">
                                        <span>Subscribe Now</span>
                                        <i class="icon-arrow-right"></i>
                                    </button>
                                </fieldset>
                            </form>
                        </div>
                        <div class="middle flex justify-content-between">
                            <div class="footer-about">
                                <div class="logo logo-footer">
                                    <img src="{{ asset('image/logo/logo-text-white.svg') }}" alt="Clineva Research Laboratories">
                                </div>

                                <div class="desc">
                                    Medical care is essential for maintaining
                                    overall health to being providing preventive
                                    diagnostic, and treatment services.
                                </div>

                                <a href="{{ route('appointment') }}" class="tf-btn style-small style-border border-color-white">
                                    <span>Make Appointment</span>
                                    <i class="icon-arrow-right"></i>
                                </a>

                            </div>

                            <div class="footer-content our-community footer-col-block">
                                <h5 class="title-mobile">
                                    Community
                                    <i class="icon-chevron-right"></i>
                                </h5>
                                <div class="tf-collapse-content" style="display: unset;">
                                    <ul>
                                        <li class="support-item-footer"><a href="{{ route('doctors') }}">Doctors</a></li>
                                        <li class="support-item-footer"><a href="#">Testimonials</a></li>
                                        <li class="support-item-footer"><a href="{{ route('faq') }}">FAQs</a></li>
                                        <li class="support-item-footer"><a href="{{ route('blog') }}">Blog</a></li>
                                        <li class="support-item-footer"><a href="#">Site Map</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="footer-content our-services footer-col-block">
                                <h5 class="title-mobile  ">
                                    Services
                                    <i class="icon-chevron-right"></i>
                                </h5>
                                <div class="tf-collapse-content" style="display: unset;">
                                    <ul>
                                        <li class="support-item-footer"><a href="{{ route('clinic.healthcare') }}">Healthcare</a></li>
                                        <li class="support-item-footer"><a href="{{ route('home') }}">Medicine Care</a></li>
                                        <li class="support-item-footer"><a href="#">Advance Lab Test</a></li>
                                        <li class="support-item-footer"><a href="#">Ambulance Car</a></li>
                                        <li class="support-item-footer"><a href="#">Schedule & Date</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-right">
                        <div class="swiper tf-swiper sw-box-item-footer" data-swiper='{
                                "slidesPerView": 1,
                                "spaceBetween": 20,
                                "direction": "horizontal",
                                "pagination": { "el": ".sw-pagination-box", "clickable": true },
                                "breakpoints": {
                                    "575": { "slidesPerView": 2, "slidesPerGroup": 1, "direction": "horizontal"},
                                    "991": { "slidesPerView": 3, "slidesPerGroup": 1, "direction": "vertical"}
                                    }
                                }'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="box-item-footer">
                                        <div class="top-box">
                                            <i class="icon-location-dot"></i>
                                            <h4 class="title-box fw6 lsp-0">
                                                Our Location
                                            </h4>
                                        </div>
                                        <div class="desc body-2 lh-30">
                                            70 Washington Square South, New York, NY 10012, United States
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="box-item-footer support-box-item">
                                        <div class="top-box">
                                            <i class="icon-headphones-simple"></i>
                                            <h4 class="title-box fw6 lsp-0">
                                                Support
                                            </h4>
                                        </div>
                                        <div class="desc">
                                            <ul>
                                                <li class="body-2 lh-35">Email Us : <a href="#"> example@gmail.com</a></li>
                                                <li class="body-2 lh-35">Phone no : <a href="#"> +1 (234) 567 88 9990</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="box-item-footer clock-box-item">
                                        <div class="top-box">
                                            <i class="icon-clock"></i>
                                            <h4 class="title-box fw6 lsp-0">
                                                Schedule Hours
                                            </h4>
                                        </div>
                                        <div class="desc flex justify-content-between align-items-center lh-30 flex-wrap rg-10">
                                            <span class="body-2 lh-30">Monday – Friday</span>
                                            <span class="fw7 body-2 lh-30">08am - 09pm</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sw-pagination-box sw-pagination d-lg-none mt-15 justify-content-center"></div>
                    </div>
                </div>
                <div class="bottom">
                    <span><a href="#" class="color-white">© Clineva</a>, All Rights Reserved</span>
                    <ul>
                        <li><a href="#">Privacy policy</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">FAQs</a></li>
                    </ul>
                </div>
            </div>
        </footer>

        <!-- Mobile-nav-wrap -->
        <div class="offcanvas offcanvas-start mobile-nav-wrap" id="canvasMobile">
            <div class="inner-mobile-nav">
                <div class="top-header-mobi">
                    <div class="logo-mobile">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('image/logo/logo.svg') }}" alt="Clineva Research Laboratories">
                        </a>
                    </div>
                    <button class="mobile-nav-close" data-bs-dismiss="offcanvas" aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="black" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 122.878 122.88" enable-background="new 0 0 122.878 122.88" xml:space="preserve">
                            <g>
                                <path d="M1.426,8.313c-1.901-1.901-1.901-4.984,0-6.886c1.901-1.902,4.984-1.902,6.886,0l53.127,53.127l53.127-53.127 c1.901-1.902,4.984-1.902,6.887,0c1.901,1.901,1.901,4.985,0,6.886L68.324,61.439l53.128,53.128c1.901,1.901,1.901,4.984,0,6.886 c-1.902,1.902-4.985,1.902-6.887,0L61.438,68.326L8.312,121.453c-1.901,1.902-4.984,1.902-6.886,0 c-1.901-1.901-1.901-4.984,0-6.886l53.127-53.128L1.426,8.313L1.426,8.313z">
                                </path>
                            </g>
                        </svg>
                    </button>
                </div>
                <nav class="mobile-main-nav">
                    <ul id="menu-mobile" class="menu">
                        <li class="menu-item current-menu-mobile-item">
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="menu-item menu-item-has-children-mobile">
                            <a href="#dropdown-menu-2" data-bs-toggle="collapse" class="collapsed">Services</a>
                            <div id="dropdown-menu-2" class="collapse" data-bs-parent="#menu-mobile">
                                <ul class="sub-menu-mobile">
                                    <li class="menu-item"><a href="{{ route('services') }}">Our Services</a></li>
                                    <li class="menu-item"><a href="{{ route('services.details') }}">Services Details</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="menu-item menu-item-has-children-mobile">
                            <a href="#dropdown-menu-3" data-bs-toggle="collapse" class="collapsed">Doctors</a>
                            <div id="dropdown-menu-3" class="collapse" data-bs-parent="#menu-mobile">
                                <ul class="sub-menu-mobile">
                                    <li class="menu-item"><a href="{{ route('doctors') }}">Doctors</a></li>
                                    <li class="menu-item"><a href="{{ route('doctors.details') }}">Doctors Details</a></li>
                                </ul>
                            </div>
                        </li>

                        <li class="menu-item menu-item-has-children-mobile">
                            <a href="#dropdown-menu-4" data-bs-toggle="collapse" class="collapsed">Pages</a>
                            <div id="dropdown-menu-4" class="collapse" data-bs-parent="#menu-mobile">
                                <ul class="sub-menu-mobile" id="sub-menu-mobile-1">
                                    <li class="menu-item"><a href="{{ route('about') }}">About Us</a></li>
                                    <li class="menu-item"><a href="{{ route('history') }}">History</a></li>
                                    <li class="menu-item"><a href="{{ route('events') }}">Events Calendar</a></li>
                                    <li class="menu-item"><a href="{{ route('appointment') }}">Make An Appointment</a></li>
                                    <li class="menu-item"><a href="{{ route('faq') }}">FAQs</a></li>
                                    <li class="menu-item"><a href="{{ route('pricing') }}">Pricing Table</a></li>
                                    <li class="menu-item"><a href="{{ route('login') }}">Login</a></li>
                                    <li class="menu-item"><a href="{{ route('signup') }}">Sign up</a></li>
                                    <li class="menu-item menu-item-has-children-mobile">
                                        <a href="#sub-menu1" data-bs-toggle="collapse" class="collapsed" aria-expanded="true">Portfolio</a>
                                        <div id="sub-menu1" class="collapse" data-bs-parent="#sub-menu-mobile-1">
                                            <ul class="sub-menu-mobile sub-menu-mobile-2">
                                                <li class="menu-item"><a href="{{ route('portfolio') }}">Portfolio</a></li>
                                                <li class="menu-item"><a href="{{ route('portfolio.details') }}">Portfolio Details</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="menu-item menu-item-has-children-mobile">
                                        <a href="#sub-menu2" data-bs-toggle="collapse" class="collapsed" aria-expanded="true">Shop</a>
                                        <div id="sub-menu2" class="collapse" data-bs-parent="#sub-menu-mobile-1">
                                            <ul class="sub-menu-mobile sub-menu-mobile-2">
                                                <li class="menu-item"><a href="{{ route('shop') }}">Shop</a></li>
                                                <li class="menu-item"><a href="{{ route('shop.details') }}">Shop Details</a></li>
                                                <li class="menu-item"><a href="{{ route('cart') }}">Cart</a></li>
                                                <li class="menu-item"><a href="{{ route('checkout') }}">Checkout</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="menu-item menu-item-has-children-mobile">
                            <a href="#dropdown-menu-6" data-bs-toggle="collapse" class="collapsed">Blog</a>
                            <div id="dropdown-menu-6" class="collapse" data-bs-parent="#menu-mobile">
                                <ul class="sub-menu-mobile">
                                    <li class="menu-item"><a href="{{ route('blog') }}">Blog Standard</a></li>
                                    <li class="menu-item"><a href="{{ route('blog.details') }}">Blog Details</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('contact') }}">Contact</a>
                        </li>
                    </ul>
                    <div class="contact-mobile">
                        <h6 class="title-contact-mobile">Contact Info</h6>
                        <ul class="mb-15">
                            <li class="content-contact-moblile"><i class="icon-location-dot2"></i> <a href="#" class="caption-1">70 Washington Square South, New York, NY 10012, United States</a>
                            </li>
                            <li class="content-contact-moblile">
                                <i class="icon-envelope"></i><a href="mailto:example@gmail.com" class="caption-1">example@gmail.com</a>
                            </li>
                            <li class="content-contact-moblile">
                                <i class="icon-phone"></i><a href="tel:+00012345688" class="caption-1">+000 (123) 456 88</a>
                            </li>
                        </ul>

                        <ul class="post-social style-border">
                            <li><a href="#" class="icon-social"><i class="icon-facebook"></i></a></li>
                            <li><a href="#" class="icon-social"><i class="icon-twitter"></i></a></li>
                            <li><a href="#" class="icon-social"><i class="icon-linkedin2"></i></a></li>
                            <li><a href="#" class="icon-social"><i class="icon-instagram"></i></a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- /.mobile-nav-wrap -->

        <div class="offcanvas offcanvas-top offcanvas-search" id="canvasSearch">
            <button class="btn-close-popup" data-bs-dismiss="offcanvas" aria-label="Close">
                <i class="icon-close"></i>
            </button>
            <div class="tf-container">
                <div class="wg-box-search">
                    <form action="javascript:void(0)" class="form-search-siderbar">
                        <fieldset>
                            <input type="text" placeholder="Keywords">
                            <button type="submit" class="tf-btn-search"><i class="icon-magnifying-glass"></i></button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>

        <!-- OffcanvasMegamenu -->
        <div class="offcanvas offcanvas-end offcanvasMegamenu" id="canvnasMegamenu">
            <div class="heading flex justify-content-between">
                <div class="logo-megamenu">
                    <img src="{{ asset('image/logo/logo.svg') }}" alt="Clineva Research Laboratories">
                </div>
                <button class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
                </button>
            </div>
            <div class="desc">
                Join our newsletter today to get the latest updates and easily manage your data more efficiently!
            </div>

            <div class="contact-mega-menu meag-menu-item">
                <ul class="contact-list-mega-menu">
                    <li>
                        <p>Address:
                            <a href="#" target="_blank">
                                70 Washington Square South, New York, NY 10012, United States
                            </a>
                        </p>
                    </li>
                    <li>
                        <p>Email:
                            <a href="mailto:example@gmail.com">
                                example@gmail.com
                            </a>
                        </p>
                    </li>
                    <li>
                        <p> Call: <a href="tel:+00012345688">
                                +000 (123) 456 88</a>
                        </p>
                    </li>
                </ul>
            </div>

            <div class="megamenu-subscribe">
                <h5 class="title-content">
                    Newsletter Subscribe
                </h5>
                <form action="javascript:void(0)" method="POST" class="form-newsletter2 subscribe-form" accept-charset="utf-8">
                    
                    <input type="email" name="email-form" class="subscribe-email" placeholder="Email address" tabindex="0" aria-required="true" required="">
                    <button class="subscribe-button tf-btn-newsletter">
                        <i class="icon-send"></i>
                    </button>
                </form>
            </div>

            <div class="megamenu-recent">
                <h5 class="title-content">
                    Recent News
                </h5>
                <div class="tf-post-list style-small hover-img">
                    <a href="{{ route('blog.details') }}" class="image">
                        <img src="{{ asset('image/blog/tf-post-list-1.jpg') }}" data-src="{{ asset('image/blog/tf-post-list-1.jpg') }}" alt="" class="lazyload">
                    </a>
                    <div class="post-content">
                        <div class="post-date caption-1">
                            25 February 2025
                        </div>
                        <a href="{{ route('blog.details') }}" class="name-post fw7 lh-24">
                            Future Healthcare Innovations
                            in Medical Treatment
                        </a>
                    </div>
                </div>
                <div class="tf-post-list style-small hover-img">
                    <a href="{{ route('blog.details') }}" class="image">
                        <img src="{{ asset('image/blog/tf-post-list-2.jpg') }}" data-src="{{ asset('image/blog/tf-post-list-2.jpg') }}" alt="" class="lazyload">
                    </a>
                    <div class="post-content">
                        <div class="post-date caption-1">
                            25 February 2025
                        </div>
                        <a href="{{ route('blog.details') }}" class="name-post fw7 lh-24">
                            Future Healthcare Innovations
                            in Medical Treatment
                        </a>
                    </div>
                </div>
                <div class="tf-post-list style-small hover-img">
                    <a href="{{ route('blog.details') }}" class="image">
                        <img src="{{ asset('image/blog/tf-post-list-3.jpg') }}" data-src="{{ asset('image/blog/tf-post-list-3.jpg') }}" alt="" class="lazyload">
                    </a>
                    <div class="post-content">
                        <div class="post-date caption-1">
                            25 February 2025
                        </div>
                        <a href="{{ route('blog.details') }}" class="name-post fw7 lh-24">
                            Future Healthcare Innovations
                            in Medical Treatment
                        </a>
                    </div>
                </div>

            </div>

        </div>
        <!-- /.offcanvasMegamenu -->

        <!-- Go-top -->
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 277.672;">
                </path>
            </svg>
        </div>
        <!-- /.go-top -->

    </div>

    <!-- Javascript -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/lazysize.min.js') }}"></script>
    <script src="{{ asset('js/jquery-validate.js') }}"></script>
    <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/gsap.min.js') }}"></script>
    <script src="{{ asset('js/gsap-animation.js') }}"></script>
    <script src="{{ asset('js/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('js/Splitetext.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('js/carousel.js') }}"></script>
    <script src="{{ asset('js/odometer.min.js') }}"></script>
    <script src="{{ asset('js/ScrollSmooth.js') }}"></script>
    <script src="{{ asset('js/simpleParallaxVanilla.js') }}"></script>

    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
    <!-- /Javascript -->


        <script>
        if (window.jQuery) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        }
    </script>
    @stack('scripts')
</body>


</html>