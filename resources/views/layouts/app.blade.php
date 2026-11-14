<!DOCTYPE html>
<!--[if IE 8]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->


<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8" />
    <!-- [if IE ]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/><![endif] -->
    <title>@yield('title', 'Clineva Research Laboratories - Leading Global CRO & BA/BE Services')</title>

    @hasSection('seo')
        @yield('seo')
    @else
        <meta name="description" content="@yield('meta_description', 'Clineva Research Laboratories is an ISO 9001 and GCP compliant Contract Research Organization (CRO) specializing in clinical trials, BA/BE studies, bioanalytical LC-MS/MS, and medico-marketing services.')">
        <meta name="keywords" content="clinical trials CRO, bioequivalence studies, BA/BE India, ICH-GCP clinical research, bioanalytical LC-MS/MS, medico-marketing publications, Clineva Research Laboratories">
        <meta name="author" content="Clineva Research Laboratories" />
        <link rel="canonical" href="{{ url()->current() }}">
        <meta property="og:site_name" content="Clineva Research Laboratories">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:type" content="website">
        <meta property="og:title" content="@yield('title', 'Clineva Research Laboratories - Leading Global CRO')">
        <meta property="og:description" content="@yield('meta_description', 'ISO 9001 & GCP compliant clinical research laboratories specializing in clinical trials, BA/BE studies, and bioanalysis.')">
        <meta property="og:image" content="{{ asset('image/logo/logo-main.png') }}">
        <meta name="twitter:card" content="summary_large_image">
    @endif

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
        <div class="top-bar top-bar-modern">
            <div class="top-bar-inner flex align-items-center justify-content-between mx-30">
                <div class="tf-tb-left flex align-items-center">
                    <div class="topbar-tagline flex align-items-center">
                        <span class="tagline-badge"><i class="icon-atom-simple"></i> CRO Excellence</span>
                        <span class="tagline-text">ISO 9001 & GCP Compliant Clinical Research Laboratories</span>
                    </div>
                    <span class="topbar-separator"></span>
                    <div class="topbar-contact-group flex align-items-center">
                        <a href="tel:{{ preg_replace('/[^0-9+]/', '', $siteSettings['contact_phone'] ?? '+919870484499') }}" class="topbar-item topbar-link">
                            <span class="icon-wrap"><i class="icon-phone-volume"></i></span>
                            <span class="content"><span>Call:</span> {{ $siteSettings['contact_phone'] ?? '+91 9870484499' }}</span>
                        </a>
                        <span class="topbar-separator"></span>
                        <a href="mailto:{{ $siteSettings['contact_email'] ?? 'priti.gotpagar@clineva.in' }}" class="topbar-item topbar-link">
                            <span class="icon-wrap"><i class="icon-envelope"></i></span>
                            <span class="content"><span>Email:</span> {{ $siteSettings['contact_email'] ?? 'priti.gotpagar@clineva.in' }}</span>
                        </a>
                    </div>
                </div>
                <div class="tf-tb-right flex align-items-center">
                    <div class="topbar-item time-topbar">
                        <span class="icon-wrap"><i class="icon-clock"></i></span>
                        <div class="content">
                            <span>Hours:</span>
                            <span class="time-value">{{ $siteSettings['working_hours'] ?? 'Mon – Sat: 09:00 AM – 06:00 PM' }}</span>
                        </div>
                    </div>
                    <span class="topbar-separator"></span>
                    <ul class="topbar-social">
                        @if(!empty($siteSettings['social_facebook']))
                            <li><a href="{{ $siteSettings['social_facebook'] }}" target="_blank" rel="noopener" class="social-btn" title="Facebook" aria-label="Facebook"><i class="icon-facebook"></i></a></li>
                        @endif
                        @if(!empty($siteSettings['social_twitter']))
                            <li><a href="{{ $siteSettings['social_twitter'] }}" target="_blank" rel="noopener" class="social-btn" title="Twitter" aria-label="Twitter"><i class="icon-twitter"></i></a></li>
                        @endif
                        @if(!empty($siteSettings['social_linkedin']))
                            <li><a href="{{ $siteSettings['social_linkedin'] }}" target="_blank" rel="noopener" class="social-btn" title="LinkedIn" aria-label="LinkedIn"><i class="icon-linkedin2"></i></a></li>
                        @endif
                        @if(!empty($siteSettings['social_instagram']))
                            <li><a href="{{ $siteSettings['social_instagram'] }}" target="_blank" rel="noopener" class="social-btn" title="Instagram" aria-label="Instagram"><i class="icon-instagram"></i></a></li>
                        @endif
                        @if(!empty($siteSettings['social_youtube']))
                            <li><a href="{{ $siteSettings['social_youtube'] }}" target="_blank" rel="noopener" class="social-btn" title="YouTube" aria-label="YouTube"><i class="icon-youtube"></i></a></li>
                        @endif
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
                            <li class="menu-item {{ request()->routeIs('about*') ? 'current-menu-item' : '' }}">
                                <a href="{{ route('about') }}" class="item-link body-2">
                                    <span>About Us</span>
                                </a>
                            </li>
                            <li class="menu-item menu-item-has-children menu-item-services position-relative {{ request()->routeIs('services*') ? 'current-menu-item' : '' }}">
                                <a href="{{ route('services') }}" class="item-link body-2">
                                    <span>Services</span>
                                </a>
                                <div class="sub-menu sub-menu-services">
                                    <div class="mega-menu-inner">
                                        <div class="mega-col mega-col-1">
                                            <div class="mega-header">
                                                <i class="icon-stethoscope"></i>
                                                <h6>Clinical Trial</h6>
                                            </div>
                                            <ul class="mega-list">
                                                <li><a href="{{ route('services.details', ['service' => 'clinical-operations']) }}"><i class="icon-arrow-right"></i><span>Clinical Operations</span></a></li>
                                                <li><a href="{{ route('services.details', ['service' => 'project-management']) }}"><i class="icon-arrow-right"></i><span>Project Management</span></a></li>
                                                <li><a href="{{ route('services.details', ['service' => 'clinical-trial-monitoring']) }}"><i class="icon-arrow-right"></i><span>Clinical Trial Monitoring</span></a></li>
                                                <li><a href="{{ route('services.details', ['service' => 'medical-monitoring']) }}"><i class="icon-arrow-right"></i><span>Medical Monitoring</span></a></li>
                                                <li><a href="{{ route('services.details', ['service' => 'quality-assurance']) }}"><i class="icon-arrow-right"></i><span>Quality Assurance</span></a></li>
                                                <li><a href="{{ route('services.details', ['service' => 'medical-writing']) }}"><i class="icon-arrow-right"></i><span>Medical Writing</span></a></li>
                                                <li><a href="{{ route('services.details', ['service' => 'etmf-management']) }}"><i class="icon-arrow-right"></i><span>eTMF Management</span></a></li>
                                                <li><a href="{{ route('services.details', ['service' => 'regulatory-affairs']) }}"><i class="icon-arrow-right"></i><span>Regulatory Affairs</span></a></li>
                                                <li><a href="{{ route('services.details', ['service' => 'statistical-services']) }}"><i class="icon-arrow-right"></i><span>Statistical services</span></a></li>
                                            </ul>
                                        </div>
                                        <div class="mega-col mega-col-2">
                                            <div class="mega-header">
                                                <i class="icon-atom-simple"></i>
                                                <h6>BA/BE Services</h6>
                                            </div>
                                            <ul class="mega-list">
                                                <li><a href="{{ route('services.details', ['service' => 'cro-selection']) }}"><i class="icon-arrow-right"></i><span>CRO Selection</span></a></li>
                                                <li><a href="{{ route('services.details', ['service' => 'babe-medical-writing']) }}"><i class="icon-arrow-right"></i><span>Medical Writing</span></a></li>
                                                <li><a href="{{ route('services.details', ['service' => 'study-monitoring']) }}"><i class="icon-arrow-right"></i><span>Study Monitoring</span></a></li>
                                                <li><a href="{{ route('services.details', ['service' => 'babe-regulatory-affairs']) }}"><i class="icon-arrow-right"></i><span>Regulatory Affairs</span></a></li>
                                                <li><a href="{{ route('services.details', ['service' => 'gcp-glp-audit']) }}"><i class="icon-arrow-right"></i><span>GCP and GLP Audit</span></a></li>
                                            </ul>
                                            <div class="mega-featured-card">
                                                <a href="{{ route('services.details', ['service' => 'medical-affairs-medico-marketing']) }}" class="featured-service-link">
                                                    <div class="card-icon"><i class="icon-globe"></i></div>
                                                    <div class="card-text">
                                                        <h6>Medical affairs and Medico marketing</h6>
                                                        <span>Strategic consulting & communications</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="menu-item {{ request()->routeIs('careers') ? 'current-menu-item' : '' }}">
                                <a href="{{ route('careers') }}" class="item-link body-2">
                                    <span>Career's</span>
                                </a>
                            </li>
                            <li class="menu-item {{ request()->routeIs('blog*') ? 'current-menu-item' : '' }}">
                                <a href="{{ route('blog') }}" class="item-link body-2">
                                    <span>Blogs</span>
                                </a>
                            </li>
                            <li class="menu-item {{ request()->routeIs('contact') ? 'current-menu-item' : '' }}">
                                <a href="{{ route('contact') }}" class="item-link body-2">
                                    <span>Contact Us</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="header-right">
                    <div class="nav-icon d-xl-none">
                        <div class="mobile-button nav-item">
                            <a href="#canvasMobile" data-bs-toggle="offcanvas">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                    </div>
                    <div class="nav-btn">
                        <a href="{{ route('contact') }}" class="tf-btn style-small">
                            <span>Contact Us</span>
                            <i class="icon-arrow-right"></i>
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
                            <li class="menu-item {{ request()->routeIs('about*') ? 'current-menu-item' : '' }}">
                                <a href="{{ route('about') }}" class="item-link body-2">
                                    <span>About Us</span>
                                </a>
                            </li>
                            <li class="menu-item menu-item-has-children menu-item-services position-relative {{ request()->routeIs('services*') ? 'current-menu-item' : '' }}">
                                <a href="{{ route('services') }}" class="item-link body-2">
                                    <span>Services</span>
                                </a>
                                <div class="sub-menu sub-menu-services">
                                    <div class="mega-menu-inner">
                                        <div class="mega-col mega-col-1">
                                            <div class="mega-header">
                                                <i class="icon-stethoscope"></i>
                                                <h6>Clinical Trial</h6>
                                            </div>
                                            <ul class="mega-list">
                                                <li><a href="{{ route('services.details', ['service' => 'clinical-operations']) }}"><i class="icon-arrow-right"></i><span>Clinical Operations</span></a></li>
                                                <li><a href="{{ route('services.details', ['service' => 'project-management']) }}"><i class="icon-arrow-right"></i><span>Project Management</span></a></li>
                                                <li><a href="{{ route('services.details', ['service' => 'clinical-trial-monitoring']) }}"><i class="icon-arrow-right"></i><span>Clinical Trial Monitoring</span></a></li>
                                                <li><a href="{{ route('services.details', ['service' => 'medical-monitoring']) }}"><i class="icon-arrow-right"></i><span>Medical Monitoring</span></a></li>
                                                <li><a href="{{ route('services.details', ['service' => 'quality-assurance']) }}"><i class="icon-arrow-right"></i><span>Quality Assurance</span></a></li>
                                                <li><a href="{{ route('services.details', ['service' => 'medical-writing']) }}"><i class="icon-arrow-right"></i><span>Medical Writing</span></a></li>
                                                <li><a href="{{ route('services.details', ['service' => 'etmf-management']) }}"><i class="icon-arrow-right"></i><span>eTMF Management</span></a></li>
                                                <li><a href="{{ route('services.details', ['service' => 'regulatory-affairs']) }}"><i class="icon-arrow-right"></i><span>Regulatory Affairs</span></a></li>
                                                <li><a href="{{ route('services.details', ['service' => 'statistical-services']) }}"><i class="icon-arrow-right"></i><span>Statistical services</span></a></li>
                                            </ul>
                                        </div>
                                        <div class="mega-col mega-col-2">
                                            <div class="mega-header">
                                                <i class="icon-atom-simple"></i>
                                                <h6>BA/BE Services</h6>
                                            </div>
                                            <ul class="mega-list">
                                                <li><a href="{{ route('services.details', ['service' => 'cro-selection']) }}"><i class="icon-arrow-right"></i><span>CRO Selection</span></a></li>
                                                <li><a href="{{ route('services.details', ['service' => 'babe-medical-writing']) }}"><i class="icon-arrow-right"></i><span>Medical Writing</span></a></li>
                                                <li><a href="{{ route('services.details', ['service' => 'study-monitoring']) }}"><i class="icon-arrow-right"></i><span>Study Monitoring</span></a></li>
                                                <li><a href="{{ route('services.details', ['service' => 'babe-regulatory-affairs']) }}"><i class="icon-arrow-right"></i><span>Regulatory Affairs</span></a></li>
                                                <li><a href="{{ route('services.details', ['service' => 'gcp-glp-audit']) }}"><i class="icon-arrow-right"></i><span>GCP and GLP Audit</span></a></li>
                                            </ul>
                                            <div class="mega-featured-card">
                                                <a href="{{ route('services.details', ['service' => 'medical-affairs-medico-marketing']) }}" class="featured-service-link">
                                                    <div class="card-icon"><i class="icon-globe"></i></div>
                                                    <div class="card-text">
                                                        <h6>Medical affairs and Medico marketing</h6>
                                                        <span>Strategic consulting & communications</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="menu-item {{ request()->routeIs('careers') ? 'current-menu-item' : '' }}">
                                <a href="{{ route('careers') }}" class="item-link body-2">
                                    <span>Career's</span>
                                </a>
                            </li>
                            <li class="menu-item {{ request()->routeIs('blog*') ? 'current-menu-item' : '' }}">
                                <a href="{{ route('blog') }}" class="item-link body-2">
                                    <span>Blogs</span>
                                </a>
                            </li>
                            <li class="menu-item {{ request()->routeIs('contact') ? 'current-menu-item' : '' }}">
                                <a href="{{ route('contact') }}" class="item-link body-2">
                                    <span>Contact Us</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="header-right">
                    <div class="nav-icon d-xl-none">
                        <div class="mobile-button nav-item">
                            <a href="#canvasMobile" data-bs-toggle="offcanvas">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                    </div>
                    <div class="nav-btn">
                        <a href="{{ route('contact') }}" class="tf-btn style-small">
                            <span>Contact Us</span>
                            <i class="icon-arrow-right"></i>
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
                                    {{ $siteSettings['footer_description'] ?? 'Clineva Research Laboratories is a premier global Clinical Research Organization (CRO) delivering Phase I–IV clinical operations, BA/BE studies, bioanalytical PK/PD investigations, and regulatory intelligence across global markets.' }}
                                </div>

                                <a href="{{ route('contact') }}" class="tf-btn style-small style-border border-color-white">
                                    <span>Contact Us</span>
                                    <i class="icon-arrow-right"></i>
                                </a>

                            </div>

                            <div class="footer-content our-community footer-col-block">
                                <h5 class="title-mobile">
                                    Quick Links
                                    <i class="icon-chevron-right"></i>
                                </h5>
                                <div class="tf-collapse-content" style="display: unset;">
                                    <ul>
                                        <li class="support-item-footer"><a href="{{ route('home') }}">Home</a></li>
                                        <li class="support-item-footer"><a href="{{ route('about') }}">About Us</a></li>
                                        <li class="support-item-footer"><a href="{{ route('services') }}">Services</a></li>
                                        <li class="support-item-footer"><a href="{{ route('careers') }}">Career's</a></li>
                                        <li class="support-item-footer"><a href="{{ route('blog') }}">Blogs</a></li>
                                        <li class="support-item-footer"><a href="{{ route('contact') }}">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="footer-content our-services footer-col-block">
                                <h5 class="title-mobile">
                                    Key Services
                                    <i class="icon-chevron-right"></i>
                                </h5>
                                <div class="tf-collapse-content" style="display: unset;">
                                    <ul>
                                        <li class="support-item-footer"><a href="{{ route('services.details', ['service' => 'clinical-operations']) }}">Clinical Operations</a></li>
                                        <li class="support-item-footer"><a href="{{ route('services.details', ['service' => 'project-management']) }}">Project Management</a></li>
                                        <li class="support-item-footer"><a href="{{ route('services.details', ['service' => 'cro-selection']) }}">BA/BE - CRO Selection</a></li>
                                        <li class="support-item-footer"><a href="{{ route('services.details', ['service' => 'medical-writing']) }}">Medical Writing</a></li>
                                        <li class="support-item-footer"><a href="{{ route('services.details', ['service' => 'regulatory-affairs']) }}">Regulatory Affairs</a></li>
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
                                            {{ $siteSettings['contact_address'] ?? 'D-318, Phase II, Turbhe MIDC, TTC Industrial Area, Navi Mumbai, Maharashtra 400705' }}
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
                                                <li class="body-2 lh-35">Email Us : <a href="mailto:{{ $siteSettings['contact_email'] ?? 'priti.gotpagar@clineva.in' }}"> {{ $siteSettings['contact_email'] ?? 'priti.gotpagar@clineva.in' }}</a></li>
                                                <li class="body-2 lh-35">Phone no : <a href="tel:{{ preg_replace('/[^0-9+]/', '', $siteSettings['contact_phone'] ?? '+919870484499') }}"> {{ $siteSettings['contact_phone'] ?? '+91 9870484499' }}</a></li>
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
                                            <span class="body-2 lh-30">{{ $siteSettings['working_hours'] ?? 'Mon – Sat: 09:00 AM – 06:00 PM' }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sw-pagination-box sw-pagination d-lg-none mt-15 justify-content-center"></div>
                    </div>
                </div>
                <div class="bottom">
                    <span>{{ $siteSettings['copyright_text'] ?? ('© ' . date('Y') . ' Clineva Research Laboratories. All rights reserved.') }}</span>
                    <ul>
                        <li><a href="{{ route('policy.show', ['slug' => 'privacy-policy']) }}">Privacy Policy</a></li>
                        <li><a href="{{ route('policy.show', ['slug' => 'terms-conditions']) }}">Terms & Conditions</a></li>
                        <li><a href="{{ route('policy.show', ['slug' => 'cookie-policy']) }}">Cookie Policy</a></li>
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
                        <li class="menu-item {{ request()->routeIs('home') ? 'current-menu-mobile-item' : '' }}">
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="menu-item {{ request()->routeIs('about*') ? 'current-menu-mobile-item' : '' }}">
                            <a href="{{ route('about') }}">About Us</a>
                        </li>
                        <li class="menu-item menu-item-has-children-mobile">
                            <a href="#dropdown-menu-services-mob" data-bs-toggle="collapse" class="collapsed">Services</a>
                            <div id="dropdown-menu-services-mob" class="collapse" data-bs-parent="#menu-mobile">
                                <ul class="sub-menu-mobile" id="sub-menu-mob-services">
                                    <li class="menu-item menu-item-has-children-mobile">
                                        <a href="#sub-clinical-mob" data-bs-toggle="collapse" class="collapsed font-weight-bold" style="color: var(--primary); font-weight: 700;">Clinical Trial</a>
                                        <div id="sub-clinical-mob" class="collapse show" data-bs-parent="#sub-menu-mob-services">
                                            <ul class="sub-menu-mobile sub-menu-mobile-2">
                                                <li><a href="{{ route('services.details', ['service' => 'clinical-operations']) }}">Clinical Operations</a></li>
                                                <li><a href="{{ route('services.details', ['service' => 'project-management']) }}">Project Management</a></li>
                                                <li><a href="{{ route('services.details', ['service' => 'clinical-trial-monitoring']) }}">Clinical Trial Monitoring</a></li>
                                                <li><a href="{{ route('services.details', ['service' => 'medical-monitoring']) }}">Medical Monitoring</a></li>
                                                <li><a href="{{ route('services.details', ['service' => 'quality-assurance']) }}">Quality Assurance</a></li>
                                                <li><a href="{{ route('services.details', ['service' => 'medical-writing']) }}">Medical Writing</a></li>
                                                <li><a href="{{ route('services.details', ['service' => 'etmf-management']) }}">eTMF Management</a></li>
                                                <li><a href="{{ route('services.details', ['service' => 'regulatory-affairs']) }}">Regulatory Affairs</a></li>
                                                <li><a href="{{ route('services.details', ['service' => 'statistical-services']) }}">Statistical services</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="menu-item menu-item-has-children-mobile">
                                        <a href="#sub-babe-mob" data-bs-toggle="collapse" class="collapsed font-weight-bold" style="color: var(--primary); font-weight: 700;">BA/BE Services</a>
                                        <div id="sub-babe-mob" class="collapse show" data-bs-parent="#sub-menu-mob-services">
                                            <ul class="sub-menu-mobile sub-menu-mobile-2">
                                                <li><a href="{{ route('services.details', ['service' => 'cro-selection']) }}">CRO Selection</a></li>
                                                <li><a href="{{ route('services.details', ['service' => 'babe-medical-writing']) }}">Medical Writing</a></li>
                                                <li><a href="{{ route('services.details', ['service' => 'study-monitoring']) }}">Study Monitoring</a></li>
                                                <li><a href="{{ route('services.details', ['service' => 'babe-regulatory-affairs']) }}">Regulatory Affairs</a></li>
                                                <li><a href="{{ route('services.details', ['service' => 'gcp-glp-audit']) }}">GCP and GLP Audit</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="menu-item" style="border-top: 1px dashed var(--border-2); padding-top: 8px;">
                                        <a href="{{ route('services.details', ['service' => 'medical-affairs-medico-marketing']) }}" style="font-weight: 600; color: var(--color-title);">Medical affairs and Medico marketing</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="menu-item {{ request()->routeIs('careers') ? 'current-menu-mobile-item' : '' }}">
                            <a href="{{ route('careers') }}">Career's</a>
                        </li>
                        <li class="menu-item {{ request()->routeIs('blog*') ? 'current-menu-mobile-item' : '' }}">
                            <a href="{{ route('blog') }}">Blogs</a>
                        </li>
                        <li class="menu-item {{ request()->routeIs('contact') ? 'current-menu-mobile-item' : '' }}">
                            <a href="{{ route('contact') }}">Contact Us</a>
                        </li>
                    </ul>
                    <div class="contact-mobile">
                        <h6 class="title-contact-mobile">Contact Info</h6>
                        <ul class="mb-15">
                            <li class="content-contact-moblile"><i class="icon-location-dot2"></i> <a href="{{ route('contact') }}" class="caption-1">Shop No. 10, Patidar Complex, Kannawmar Nagar 2, Vikhroli (East), Mumbai 400083</a>
                            </li>
                            <li class="content-contact-moblile">
                                <i class="icon-envelope"></i><a href="mailto:priti.gotpagar@clineva.in" class="caption-1">priti.gotpagar@clineva.in</a>
                            </li>
                            <li class="content-contact-moblile">
                                <i class="icon-phone"></i><a href="tel:+919870484499" class="caption-1">+91 9870484499</a>
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