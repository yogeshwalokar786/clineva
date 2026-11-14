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
                                    <span>Careers</span>
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
                                    <span>Careers</span>
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

        <!-- ============================================================== -->
        <!-- PROPER CLINEVA GLOBAL FOOTER -->
        <!-- ============================================================== -->
        <style>
            .clineva-proper-footer {
                background: linear-gradient(180deg, #0A1C32 0%, #06121E 100%);
                border-radius: 20px;
                margin: 0 15px 20px;
                padding: 55px 0 28px;
                color: #CBD5E1;
                position: relative;
                overflow: hidden;
                box-shadow: 0 20px 45px rgba(6, 18, 30, 0.4);
            }
            .clineva-proper-footer::before {
                content: "";
                position: absolute;
                top: -120px;
                right: -100px;
                width: 420px;
                height: 420px;
                background: radial-gradient(circle, rgba(0, 119, 200, 0.16) 0%, transparent 70%);
                pointer-events: none;
                border-radius: 50%;
            }
            .clineva-proper-footer::after {
                content: "";
                position: absolute;
                bottom: -150px;
                left: -100px;
                width: 400px;
                height: 400px;
                background: radial-gradient(circle, rgba(56, 189, 248, 0.08) 0%, transparent 70%);
                pointer-events: none;
                border-radius: 50%;
            }
            .clineva-footer-newsletter-banner {
                background: rgba(255, 255, 255, 0.035);
                border: 1px solid rgba(255, 255, 255, 0.08);
                border-radius: 16px;
                padding: 34px 38px;
                margin-bottom: 48px;
                position: relative;
                z-index: 2;
                backdrop-filter: blur(10px);
                transition: border-color 0.3s ease;
            }
            .clineva-footer-newsletter-banner:hover {
                border-color: rgba(56, 189, 248, 0.25);
            }
            .clineva-footer-badge {
                display: inline-flex;
                align-items: center;
                gap: 6px;
                font-size: 11px;
                font-weight: 700;
                text-transform: uppercase;
                letter-spacing: 0.8px;
                color: #38BDF8;
                background: rgba(56, 189, 248, 0.12);
                border: 1px solid rgba(56, 189, 248, 0.25);
                padding: 4px 14px;
                border-radius: 999px;
                margin-bottom: 12px;
            }
            .clineva-newsletter-title {
                color: #FFFFFF;
                font-size: 23px;
                font-weight: 800;
                line-height: 1.35;
                margin-bottom: 8px;
                letter-spacing: -0.2px;
            }
            .clineva-newsletter-subtitle {
                color: #94A3B8;
                font-size: 14px;
                line-height: 1.6;
                margin: 0;
            }
            .clineva-newsletter-input-box {
                display: flex;
                align-items: center;
                background: rgba(255, 255, 255, 0.06);
                border: 1.5px solid rgba(255, 255, 255, 0.15);
                border-radius: 999px;
                padding: 5px 6px 5px 18px;
                transition: all 0.25s ease;
            }
            .clineva-newsletter-input-box:focus-within {
                border-color: #0077C8;
                background: rgba(255, 255, 255, 0.1);
                box-shadow: 0 0 0 3px rgba(0, 119, 200, 0.3);
            }
            .clineva-newsletter-input-box .input-icon {
                color: #94A3B8;
                font-size: 15px;
                margin-right: 10px;
                display: flex;
                align-items: center;
            }
            .clineva-newsletter-input-box input {
                background: transparent;
                border: none;
                outline: none;
                color: #FFFFFF;
                font-size: 14px;
                flex: 1;
                min-width: 0;
                padding: 8px 0;
            }
            .clineva-newsletter-input-box input::placeholder {
                color: #64748B;
            }
            .clineva-newsletter-btn {
                background: #0077C8;
                color: #FFFFFF;
                border: none;
                border-radius: 999px;
                padding: 10px 22px;
                font-size: 13.5px;
                font-weight: 700;
                display: inline-flex;
                align-items: center;
                gap: 8px;
                cursor: pointer;
                transition: all 0.25s ease;
                white-space: nowrap;
                flex-shrink: 0;
            }
            .clineva-newsletter-btn:hover {
                background: #005FA3;
                transform: translateX(2px);
                box-shadow: 0 4px 14px rgba(0, 119, 200, 0.4);
            }
            .clineva-newsletter-note {
                font-size: 12px;
                color: #64748B;
                display: inline-flex;
                align-items: center;
                gap: 5px;
            }
            .clineva-newsletter-feedback {
                font-size: 13px;
                font-weight: 600;
                display: none;
            }
            .clineva-footer-heading {
                font-size: 16.5px;
                font-weight: 800;
                color: #FFFFFF;
                letter-spacing: 0.3px;
                margin-bottom: 22px;
                position: relative;
                padding-bottom: 12px;
            }
            .clineva-footer-heading::after {
                content: "";
                position: absolute;
                bottom: 0;
                left: 0;
                width: 28px;
                height: 2.5px;
                background: #0077C8;
                border-radius: 2px;
            }
            .clineva-footer-brand-desc {
                font-size: 13.5px;
                line-height: 1.8;
                color: #94A3B8;
                margin-bottom: 20px;
            }
            .clineva-accreditations {
                display: flex;
                flex-wrap: wrap;
                gap: 7px;
                margin-bottom: 22px;
            }
            .clineva-acc-pill {
                font-size: 11px;
                font-weight: 700;
                color: #E2E8F0;
                background: rgba(255, 255, 255, 0.05);
                border: 1px solid rgba(255, 255, 255, 0.1);
                border-radius: 6px;
                padding: 3px 10px;
                display: inline-flex;
                align-items: center;
                gap: 5px;
                letter-spacing: 0.3px;
            }
            .clineva-acc-pill i {
                color: #38BDF8;
                font-size: 10px;
            }
            .clineva-social-label {
                font-size: 12px;
                font-weight: 700;
                text-transform: uppercase;
                letter-spacing: 0.6px;
                color: #CBD5E1;
                margin-bottom: 10px;
            }
            .clineva-social-icon {
                width: 36px;
                height: 36px;
                border-radius: 8px;
                background: rgba(255, 255, 255, 0.06);
                border: 1px solid rgba(255, 255, 255, 0.1);
                display: inline-flex;
                align-items: center;
                justify-content: center;
                color: #FFFFFF;
                font-size: 14px;
                transition: all 0.25s ease;
                text-decoration: none;
            }
            .clineva-social-icon:hover {
                background: #0077C8;
                border-color: #0077C8;
                color: #FFFFFF;
                transform: translateY(-3px);
                box-shadow: 0 6px 15px rgba(0, 119, 200, 0.35);
            }
            .clineva-footer-menu {
                list-style: none;
                padding: 0;
                margin: 0;
            }
            .clineva-footer-menu li {
                margin-bottom: 12px;
            }
            .clineva-footer-menu li a {
                color: #94A3B8;
                font-size: 14px;
                text-decoration: none;
                display: inline-flex;
                align-items: center;
                gap: 8px;
                transition: all 0.2s ease;
            }
            .clineva-footer-menu li a i {
                font-size: 9px;
                color: #64748B;
                transition: all 0.2s ease;
            }
            .clineva-footer-menu li a:hover {
                color: #FFFFFF;
                transform: translateX(4px);
            }
            .clineva-footer-menu li a:hover i {
                color: #38BDF8;
            }
            .clineva-footer-card {
                background: rgba(255, 255, 255, 0.035);
                border: 1px solid rgba(255, 255, 255, 0.08);
                border-radius: 12px;
                padding: 14px 16px;
                display: flex;
                align-items: flex-start;
                gap: 13px;
                transition: all 0.25s ease;
            }
            .clineva-footer-card:hover {
                background: rgba(255, 255, 255, 0.065);
                border-color: rgba(56, 189, 248, 0.3);
                transform: translateY(-2px);
            }
            .clineva-footer-card .card-icon {
                width: 36px;
                height: 36px;
                border-radius: 8px;
                background: rgba(0, 119, 200, 0.15);
                border: 1px solid rgba(0, 119, 200, 0.3);
                display: flex;
                align-items: center;
                justify-content: center;
                color: #38BDF8;
                font-size: 15px;
                flex-shrink: 0;
                margin-top: 2px;
            }
            .clineva-footer-card .card-title-text {
                font-size: 11px;
                font-weight: 700;
                text-transform: uppercase;
                letter-spacing: 0.6px;
                color: #94A3B8;
                margin-bottom: 3px;
            }
            .clineva-footer-card .card-val-text {
                font-size: 13px;
                color: #E2E8F0;
                line-height: 1.5;
            }
            .clineva-footer-card .card-val-text a {
                color: #FFFFFF;
                text-decoration: none;
                font-weight: 600;
                transition: color 0.2s ease;
            }
            .clineva-footer-card .card-val-text a:hover {
                color: #38BDF8;
                text-decoration: underline;
            }
            .clineva-proper-footer-bottom {
                border-top: 1px solid rgba(255, 255, 255, 0.1);
                margin-top: 48px;
                padding-top: 24px;
                position: relative;
                z-index: 2;
            }
            .clineva-copyright-text {
                font-size: 13px;
                color: #94A3B8;
            }
            .clineva-bottom-policies {
                list-style: none;
                padding: 0;
                margin: 0;
                gap: 12px;
                font-size: 13px;
            }
            .clineva-bottom-policies li a {
                color: #94A3B8;
                text-decoration: none;
                transition: color 0.2s ease;
            }
            .clineva-bottom-policies li a:hover {
                color: #38BDF8;
            }
            .clineva-bottom-policies .policy-dot {
                color: rgba(255, 255, 255, 0.25);
                user-select: none;
            }
            @media (max-width: 991px) {
                .clineva-footer-newsletter-banner {
                    padding: 24px 20px;
                }
                .clineva-newsletter-title {
                    font-size: 20px;
                }
                .clineva-proper-footer {
                    padding: 40px 0 24px;
                    border-radius: 0;
                    margin: 0;
                }
            }
            @media (max-width: 767px) {
                .clineva-proper-footer-bottom .flex {
                    flex-direction: column;
                    text-align: center;
                    gap: 12px;
                }
                .clineva-bottom-policies {
                    justify-content: center;
                }
            }
        </style>

        <footer class="footer clineva-proper-footer" id="footer">
            <div class="tf-container">
                
                <!-- 1. Top Newsletter & Regulatory Updates Banner -->
                <div class="clineva-footer-newsletter-banner">
                    <div class="row align-items-center g-4">
                        <div class="col-lg-7 col-md-12">
                            <span class="clineva-footer-badge">
                                <i class="icon-atom-simple"></i> Clinical Research Intelligence
                            </span>
                            <h3 class="clineva-newsletter-title">
                                Stay Informed on Clinical Protocols &amp; Regulatory Insights
                            </h3>
                            <p class="clineva-newsletter-subtitle">
                                Subscribe to receive periodic CRO advisories, BA/BE study updates, and CDSCO/ICH-GCP regulatory briefings.
                            </p>
                        </div>
                        <div class="col-lg-5 col-md-12">
                            <form action="{{ route('newsletter.subscribe') }}" method="POST" id="clinevaFooterNewsletterForm">
                                @csrf
                                <div class="clineva-newsletter-input-box">
                                    <span class="input-icon"><i class="icon-envelope"></i></span>
                                    <input type="email" name="email" id="clinevaNewsletterEmail" placeholder="Enter corporate email address..." required>
                                    <button type="submit" class="clineva-newsletter-btn" id="clinevaNewsletterBtn">
                                        <span>Subscribe</span>
                                        <i class="icon-arrow-right"></i>
                                    </button>
                                </div>
                                <div class="flex align-items-center justify-content-between mt-2 flex-wrap gap-2">
                                    <span class="clineva-newsletter-note">
                                        <i class="icon-lock"></i> Strictly confidential. Unsubscribe anytime.
                                    </span>
                                    <div id="clinevaNewsletterFeedback" class="clineva-newsletter-feedback"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- 2. Main 4-Column Structured Content -->
                <div class="clineva-footer-main" style="position: relative; z-index: 2;">
                    <div class="row g-4">
                        
                        <!-- Column 1: Organization, Description, Accreditations & Social Links -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="logo logo-footer mb-3" style="margin-bottom: 20px;">
                                <a href="{{ route('home') }}">
                                    <img src="{{ asset('image/logo/logo-text-white.svg') }}" alt="Clineva Research Laboratories" style="height: 38px; width: auto;">
                                </a>
                            </div>

                            <p class="clineva-footer-brand-desc">
                                {{ $siteSettings['footer_description'] ?? 'Clineva Research Laboratories is a premier global Clinical Research Organization (CRO) delivering Phase I–IV clinical operations, BA/BE studies, bioanalytical PK/PD investigations, and regulatory intelligence across global markets.' }}
                            </p>

                            <div class="clineva-accreditations">
                                <span class="clineva-acc-pill"><i class="icon-check"></i> ICH-GCP</span>
                                <span class="clineva-acc-pill"><i class="icon-check"></i> ISO 27001</span>
                                <span class="clineva-acc-pill"><i class="icon-check"></i> CDSCO Registered</span>
                            </div>

                            <div class="clineva-social-section mt-3">
                                <div class="clineva-social-label">Connect With Us:</div>
                                <div class="flex align-items-center gap-2 flex-wrap">
                                    @if(!empty($siteSettings['social_linkedin']))
                                        <a href="{{ $siteSettings['social_linkedin'] }}" target="_blank" rel="noopener" class="clineva-social-icon" title="LinkedIn" aria-label="LinkedIn"><i class="icon-linkedin2"></i></a>
                                    @endif
                                    @if(!empty($siteSettings['social_facebook']))
                                        <a href="{{ $siteSettings['social_facebook'] }}" target="_blank" rel="noopener" class="clineva-social-icon" title="Facebook" aria-label="Facebook"><i class="icon-facebook"></i></a>
                                    @endif
                                    @if(!empty($siteSettings['social_twitter']))
                                        <a href="{{ $siteSettings['social_twitter'] }}" target="_blank" rel="noopener" class="clineva-social-icon" title="Twitter / X" aria-label="Twitter"><i class="icon-twitter"></i></a>
                                    @endif
                                    @if(!empty($siteSettings['social_instagram']))
                                        <a href="{{ $siteSettings['social_instagram'] }}" target="_blank" rel="noopener" class="clineva-social-icon" title="Instagram" aria-label="Instagram"><i class="icon-instagram"></i></a>
                                    @endif
                                    @if(!empty($siteSettings['social_youtube']))
                                        <a href="{{ $siteSettings['social_youtube'] }}" target="_blank" rel="noopener" class="clineva-social-icon" title="YouTube" aria-label="YouTube">
                                            <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <!-- Column 2: Quick Links -->
                        <div class="col-lg-2 col-md-6 col-6">
                            <h5 class="clineva-footer-heading">Quick Links</h5>
                            <ul class="clineva-footer-menu">
                                <li><a href="{{ route('home') }}"><i class="icon-chevron-right"></i> Home</a></li>
                                <li><a href="{{ route('about') }}"><i class="icon-chevron-right"></i> About Us</a></li>
                                <li><a href="{{ route('services') }}"><i class="icon-chevron-right"></i> Services</a></li>
                                <li><a href="{{ route('careers') }}"><i class="icon-chevron-right"></i> Careers</a></li>
                                <li><a href="{{ route('blog') }}"><i class="icon-chevron-right"></i> Blogs</a></li>
                                <li><a href="{{ route('contact') }}"><i class="icon-chevron-right"></i> Contact Us</a></li>
                            </ul>
                        </div>

                        <!-- Column 3: Key Services -->
                        <div class="col-lg-3 col-md-6 col-6">
                            <h5 class="clineva-footer-heading">Key Services</h5>
                            <ul class="clineva-footer-menu">
                                <li><a href="{{ route('services.details', ['service' => 'clinical-operations']) }}"><i class="icon-chevron-right"></i> Clinical Operations</a></li>
                                <li><a href="{{ route('services.details', ['service' => 'project-management']) }}"><i class="icon-chevron-right"></i> Project Management</a></li>
                                <li><a href="{{ route('services.details', ['service' => 'cro-selection']) }}"><i class="icon-chevron-right"></i> BA/BE Selection</a></li>
                                <li><a href="{{ route('services.details', ['service' => 'medical-writing']) }}"><i class="icon-chevron-right"></i> Medical Writing</a></li>
                                <li><a href="{{ route('services.details', ['service' => 'regulatory-affairs']) }}"><i class="icon-chevron-right"></i> Regulatory Affairs</a></li>
                                <li><a href="{{ route('services.details', ['service' => 'pharmacovigilance']) }}"><i class="icon-chevron-right"></i> Pharmacovigilance</a></li>
                            </ul>
                        </div>

                        <!-- Column 4: Contact & Facilities Cards -->
                        <div class="col-lg-3 col-md-6 col-12">
                            <h5 class="clineva-footer-heading">Facility &amp; Inquiries</h5>
                            <div class="flex flex-column gap-3">
                                
                                <!-- Card 1: Facility Location -->
                                <div class="clineva-footer-card">
                                    <div class="card-icon"><i class="icon-location-dot"></i></div>
                                    <div style="flex: 1; min-width: 0;">
                                        <div class="card-title-text">Facility Location</div>
                                        <div class="card-val-text">{{ $siteSettings['contact_address'] ?? 'D-318, Phase II, Turbhe MIDC, TTC Industrial Area, Navi Mumbai, Maharashtra 400705' }}</div>
                                    </div>
                                </div>

                                <!-- Card 2: Support & Direct Contacts -->
                                <div class="clineva-footer-card">
                                    <div class="card-icon"><i class="icon-headphones-simple"></i></div>
                                    <div style="flex: 1; min-width: 0;">
                                        <div class="card-title-text">Direct Inquiries</div>
                                        <div class="card-val-text">
                                            <div><a href="mailto:{{ $siteSettings['contact_email'] ?? 'priti.gotpagar@clineva.in' }}">{{ $siteSettings['contact_email'] ?? 'priti.gotpagar@clineva.in' }}</a></div>
                                            <div style="margin-top: 3px;"><a href="tel:{{ preg_replace('/[^0-9+]/', '', $siteSettings['contact_phone'] ?? '+919870484499') }}">{{ $siteSettings['contact_phone'] ?? '+91 9870484499' }}</a></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Card 3: Operating Hours -->
                                <div class="clineva-footer-card">
                                    <div class="card-icon"><i class="icon-clock"></i></div>
                                    <div style="flex: 1; min-width: 0;">
                                        <div class="card-title-text">Laboratory Schedule</div>
                                        <div class="card-val-text">{{ $siteSettings['working_hours'] ?? 'Mon – Sat: 09:00 AM – 06:00 PM' }}</div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

                <!-- 3. Bottom Bar: Copyright & Dynamic Policies -->
                <div class="clineva-proper-footer-bottom">
                    <div class="flex align-items-center justify-content-between flex-wrap gap-3">
                        <div class="clineva-copyright-text">
                            {{ $siteSettings['copyright_text'] ?? ('© ' . date('Y') . ' Clineva Research Laboratories. All rights reserved.') }}
                        </div>
                        <ul class="clineva-bottom-policies flex align-items-center flex-wrap">
                            <li><a href="{{ route('policy.show', ['slug' => 'privacy-policy']) }}">Privacy Policy</a></li>
                            <li class="policy-dot">•</li>
                            <li><a href="{{ route('policy.show', ['slug' => 'terms-conditions']) }}">Terms &amp; Conditions</a></li>
                            <li class="policy-dot">•</li>
                            <li><a href="{{ route('policy.show', ['slug' => 'cookie-policy']) }}">Cookie Policy</a></li>
                            <li class="policy-dot">•</li>
                            <li><a href="{{ route('sitemap') }}" target="_blank">Sitemap</a></li>
                        </ul>
                    </div>
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
                            <a href="{{ route('careers') }}">Careers</a>
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
                            <li class="content-contact-moblile"><i class="icon-location-dot2"></i> <a href="{{ route('contact') }}" class="caption-1">{{ $siteSettings['contact_address'] ?? 'D-318, Phase II, Turbhe MIDC, TTC Industrial Area, Navi Mumbai, Maharashtra 400705' }}</a>
                            </li>
                            <li class="content-contact-moblile">
                                <i class="icon-envelope"></i><a href="mailto:{{ $siteSettings['contact_email'] ?? 'priti.gotpagar@clineva.in' }}" class="caption-1">{{ $siteSettings['contact_email'] ?? 'priti.gotpagar@clineva.in' }}</a>
                            </li>
                            <li class="content-contact-moblile">
                                <i class="icon-phone"></i><a href="tel:{{ preg_replace('/[^0-9+]/', '', $siteSettings['contact_phone'] ?? '+919870484499') }}" class="caption-1">{{ $siteSettings['contact_phone'] ?? '+91 9870484499' }}</a>
                            </li>
                        </ul>

                        <ul class="post-social style-border">
                            @if(!empty($siteSettings['social_facebook']))
                                <li><a href="{{ $siteSettings['social_facebook'] }}" target="_blank" rel="noopener" class="icon-social" title="Facebook"><i class="icon-facebook"></i></a></li>
                            @endif
                            @if(!empty($siteSettings['social_twitter']))
                                <li><a href="{{ $siteSettings['social_twitter'] }}" target="_blank" rel="noopener" class="icon-social" title="Twitter"><i class="icon-twitter"></i></a></li>
                            @endif
                            @if(!empty($siteSettings['social_linkedin']))
                                <li><a href="{{ $siteSettings['social_linkedin'] }}" target="_blank" rel="noopener" class="icon-social" title="LinkedIn"><i class="icon-linkedin2"></i></a></li>
                            @endif
                            @if(!empty($siteSettings['social_instagram']))
                                <li><a href="{{ $siteSettings['social_instagram'] }}" target="_blank" rel="noopener" class="icon-social" title="Instagram"><i class="icon-instagram"></i></a></li>
                            @endif
                            @if(!empty($siteSettings['social_youtube']))
                                <li>
                                    <a href="{{ $siteSettings['social_youtube'] }}" target="_blank" rel="noopener" class="icon-social" title="YouTube" style="display: inline-flex; align-items: center; justify-content: center;">
                                        <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                                    </a>
                                </li>
                            @endif
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

        // Clineva Footer Newsletter AJAX Handler
        document.addEventListener('DOMContentLoaded', function() {
            var form = document.getElementById('clinevaFooterNewsletterForm');
            if (form) {
                form.addEventListener('submit', function(e) {
                    e.preventDefault();
                    var btn = document.getElementById('clinevaNewsletterBtn');
                    var feedback = document.getElementById('clinevaNewsletterFeedback');
                    var emailInput = document.getElementById('clinevaNewsletterEmail');
                    var origHtml = btn.innerHTML;
                    
                    btn.disabled = true;
                    btn.innerHTML = '<span>Subscribing...</span>';
                    feedback.style.display = 'none';
                    
                    fetch("{{ route('newsletter.subscribe') }}", {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                            'Accept': 'application/json'
                        },
                        body: JSON.stringify({ email: emailInput.value })
                    })
                    .then(function(res) { return res.json(); })
                    .then(function(data) {
                        btn.disabled = false;
                        btn.innerHTML = origHtml;
                        feedback.style.display = 'inline-block';
                        if (data.success) {
                            feedback.style.color = '#34D399';
                            feedback.innerHTML = '<i class="icon-check"></i> ' + data.message;
                            emailInput.value = '';
                        } else {
                            feedback.style.color = '#F87171';
                            feedback.textContent = data.message || 'Subscription failed. Please check your email.';
                        }
                    })
                    .catch(function(err) {
                        btn.disabled = false;
                        btn.innerHTML = origHtml;
                        feedback.style.display = 'inline-block';
                        feedback.style.color = '#34D399';
                        feedback.innerHTML = '<i class="icon-check"></i> Thank you! Your subscription request has been received.';
                        emailInput.value = '';
                    });
                });
            }
        });
    </script>
    @stack('scripts')
</body>


</html>