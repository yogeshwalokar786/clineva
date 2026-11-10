@extends('layouts.app')

@section('title', 'Health Care Clinic - Clineva')

@section('content')
<div class="flex g-10 flex-wrap mx-30">
            <div class="box-page-title box-1">
                <div class="heading">
                    <div class="title">
                        Healthcare
                    </div>
                </div>
                <div class="box-page-title-content">
                    <div class="left-box position-relative z-5">
                        <div class="title-2 text-anime" data-delay=".2s">
                            Healthcare
                            <br>Solutions
                        </div>
                        <div class="box-agent">
                            <ul class="list-img flex">
                                <li class="image wow fadeInUp" data-wow-delay=".3s"><img src="{{ asset('image/avatar/box-agent-1.jpg') }}" data-src="{{ asset('image/avatar/box-agent-1.jpg') }}" alt="" class="lazyload"></li>
                                <li class="image wow fadeInUp" data-wow-delay=".4s"><img src="{{ asset('image/avatar/box-agent-2.jpg') }}" data-src="{{ asset('image/avatar/box-agent-2.jpg') }}" alt="" class="lazyload"></li>
                                <li class="image wow fadeInUp" data-wow-delay=".5s"><img src="{{ asset('image/avatar/box-agent-3.jpg') }}" data-src="{{ asset('image/avatar/box-agent-3.jpg') }}" alt="" class="lazyload"></li>
                            </ul>
                            <h6 class="lsp-0 wow fadeInUp" data-wow-delay=".6s">10m+ Trusted Patients</h6>
                        </div>
                    </div>
                    <div class="image img-item">
                        <img src="{{ asset('image/page-title/img-box-pagetitle-1.png') }}" data-src="{{ asset('image/page-title/img-box-pagetitle-1.png') }}" alt="" class="lazyload">
                    </div>
                    <div class="right-box position-relative z-5">
                        <h6 class="text lsp-0 lh-30 wow fadeInUp" data-wow-delay=".4s">We are committed to
                            <br>delivering compassionate,
                            <br>patient centered care.
                        </h6>
                        <div class="benefit-list">
                            <div class="benefit-items wow fadeInUp" data-wow-delay=".5s">
                                <i class="icon-check"></i>
                                <span>Healthcare Services</span>
                            </div>
                            <div class="benefit-items wow fadeInUp" data-wow-delay=".6s">
                                <i class="icon-check"></i>
                                <span>Advance Lab Test</span>
                            </div>
                        </div>
                        <a href="{{ route('about') }}" class="tf-btn style-blue hover-boder-white wow fadeInUp" data-wow-delay=".7s">
                            <span>Learn more</span>
                            <i class="icon-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="box-image">
                <img src="{{ asset('image/page-title/box-img-pagetitle-h2.jpg') }}" data-src="{{ asset('image/page-title/box-img-pagetitle-h2.jpg') }}" alt="" class="lazyload">
            </div>

            <div class="box-banner box-1 h-2">
                <div class="icon position-relative wow fadeInUp" data-wow-delay=".3s">
                    <i class="icon-find-professional"></i>
                </div>
                <h2 class="title-banner position-relative text-anime">
                    Need For Online
                    <br>Appointment Booking
                </h2>
                <div class="benefit-list flex align-items-center g-30 position-relative flex-wrap">
                    <div class="benefit-items wow fadeInUp" data-wow-delay=".4s">
                        <i class="icon-check"></i>
                        <span>24/7 online support</span>
                    </div>
                    <div class="benefit-items wow fadeInUp" data-wow-delay=".5s">
                        <i class="icon-check"></i>
                        <span>No hidden charge full free</span>
                    </div>
                </div>
                <div class="btn-bottom position-relative wow fadeInUp" data-wow-delay=".6s">
                    <a href="{{ route('appointment') }}" class="tf-btn style-small style-border border-color-white hover-bg-white">
                        <span>Make Appointment</span>
                        <i class="icon-arrow-right"></i>
                    </a>
                </div>
            </div>

            <div class="box-banner box-2 h-2">
                <div class="tf-marquee">
                    <div class="marquee-wrapper">
                        <div class="initial-child-container">
                            <div class="marquee-child-item">
                                <div class="title-banner">
                                    Find medicine Doctors
                                </div>
                            </div>
                            <div class="marquee-child-item">
                                <div class="title-banner">
                                    Find medicine Doctors
                                </div>
                            </div>
                            <div class="marquee-child-item">
                                <div class="title-banner">
                                    Find medicine Doctors
                                </div>
                            </div>
                            <div class="marquee-child-item">
                                <div class="title-banner">
                                    Find medicine Doctors
                                </div>
                            </div>
                            <div class="marquee-child-item">
                                <div class="title-banner">
                                    Find medicine Doctors
                                </div>
                            </div>
                            <div class="marquee-child-item">
                                <div class="title-banner">
                                    Find medicine Doctors
                                </div>
                            </div>
                            <!-- 2 -->
                            <div class="marquee-child-item">
                                <div class="title-banner">
                                    Find medicine Doctors
                                </div>
                            </div>
                            <div class="marquee-child-item">
                                <div class="title-banner">
                                    Find medicine Doctors
                                </div>
                            </div>
                            <div class="marquee-child-item">
                                <div class="title-banner">
                                    Find medicine Doctors
                                </div>
                            </div>
                            <div class="marquee-child-item">
                                <div class="title-banner">
                                    Find medicine Doctors
                                </div>
                            </div>
                            <div class="marquee-child-item">
                                <div class="title-banner">
                                    Find medicine Doctors
                                </div>
                            </div>
                            <div class="marquee-child-item">
                                <div class="title-banner">
                                    Find medicine Doctors
                                </div>
                            </div>
                            <!-- 3 -->
                            <div class="marquee-child-item">
                                <div class="title-banner">
                                    Find medicine Doctors
                                </div>
                            </div>
                            <div class="marquee-child-item">
                                <div class="title-banner">
                                    Find medicine Doctors
                                </div>
                            </div>
                            <div class="marquee-child-item">
                                <div class="title-banner">
                                    Find medicine Doctors
                                </div>
                            </div>
                            <div class="marquee-child-item">
                                <div class="title-banner">
                                    Find medicine Doctors
                                </div>
                            </div>
                            <div class="marquee-child-item">
                                <div class="title-banner">
                                    Find medicine Doctors
                                </div>
                            </div>
                            <div class="marquee-child-item">
                                <div class="title-banner">
                                    Find medicine Doctors
                                </div>
                            </div>
                            <!-- 4 -->
                            <div class="marquee-child-item">
                                <div class="title-banner">
                                    Find medicine Doctors
                                </div>
                            </div>
                            <div class="marquee-child-item">
                                <div class="title-banner">
                                    Find medicine Doctors
                                </div>
                            </div>
                            <div class="marquee-child-item">
                                <div class="title-banner">
                                    Find medicine Doctors
                                </div>
                            </div>
                            <div class="marquee-child-item">
                                <div class="title-banner">
                                    Find medicine Doctors
                                </div>
                            </div>
                            <div class="marquee-child-item">
                                <div class="title-banner">
                                    Find medicine Doctors
                                </div>
                            </div>
                            <div class="marquee-child-item">
                                <div class="title-banner">
                                    Find medicine Doctors
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h2 class="text position-relative z-5">
                    <span class="wow fadeInUp" data-wow-delay=".6s">
                        Looking for healthcare
                        <br> doctors?
                        <a href="{{ route('doctors') }}" class="tf-btn style-small style-border border-color-black-2">
                            <span class="lsp-0">Find Doctors</span>
                            <i class="icon-arrow-right"></i>
                        </a>
                    </span>
                </h2>
                <div class="image img-item">
                    <img src="{{ asset('image/page-title/banner-box-2-h2.png') }}" data-src="{{ asset('image/page-title/banner-box-2-h2.png') }}" alt="" class="lazyload">
                </div>
            </div>
        </div>

        <div class="main-content">
            <section class="section-about h-2 tf-spacing-1 scroll-tranform-section-up">
                <div class="tf-container">
                    <div class="row rg-70">
                        <div class="col-lg-6">
                            <div class="left">
                                <div class="scroll-tranform-up">
                                    <div class="wg-year-ex bg-black-2 tf-animate-1">
                                        <div class="counter-item">
                                            <div class="counter">
                                                <div class="number-counter flex">
                                                    <h1 class="number odometer color-primary" data-to="25" data-inviewport="yes"> 0 </h1>
                                                    <h1 class="color-primary">+</h1>
                                                </div>
                                                <h4 class="title-counter fw6 lsp-0">
                                                    Years Of Experience
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="img-item">
                                            <img src="{{ asset('image/logo/logo-box-year-ex.svg') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="image">
                                    <img src="{{ asset('image/section/img-section-about-h2.jpg') }}" data-src="{{ asset('image/section/img-section-about-h2.jpg') }}" alt="" class="lazyload">
                                </div>
                                <div class="img-item-home tf-animate-4">
                                    <img src="{{ asset('image/section/item-section-about-h2.jpg') }}" alt="" class="lazyload">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right">
                                <div class="heading-section mb-50">
                                    <h6 class="sub-title mb-10 color-paragraph text-anime">
                                        About micare
                                    </h6>
                                    <h2 class="title text-anime">
                                        Committed to Your Health
                                        <br> and Well-Being
                                    </h2>
                                </div>
                                <div class="flat-animate-tab">
                                    <div class="wg-tab style-2">
                                        <ul class="tab-product" role="tablist">
                                            <li class="nav-tab-item" role="presentation">
                                                <h6 class="lsp-0 fw6">
                                                    <a href="#tab1" data-bs-toggle="tab" role="tab" class="active"><i class="icon-suitcase"></i> Our Mission</a>
                                                </h6>
                                            </li>
                                            <li class="nav-tab-item" role="presentation">
                                                <h6 class="lsp-0 fw6">
                                                    <a href="#tab2" data-bs-toggle="tab" role="tab"><i class="icon-atom-simple"></i> Our Vision</a>
                                                </h6>
                                            </li>
                                            <li class="nav-tab-item" role="presentation">
                                                <h6 class="lsp-0 fw6">
                                                    <a href="#tab3" data-bs-toggle="tab" role="tab"><i class="icon-rocket-launch"></i> Our Goals</a>
                                                </h6>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-content">
                                        <div class="tab-pane active show" id="tab1" role="tabpanel">
                                            <div class="section-content">
                                                <div class="desc mb-50">We are dedicated to providing exceptional healthcare services with compassion, innovation, and excellence. Our mission is to enhance the well-being of our patients through comprehensive medical care, cutting-edge technology</div>
                                                <div class="flex item justify-content-between mb-30">
                                                    <h5 class="title">
                                                        Qualified Doctors
                                                    </h5>
                                                    <div class="text">
                                                        Highly qualified doctors is dedicated to providing exceptional medical care with expertise, compassion,
                                                        and innovation
                                                    </div>
                                                </div>
                                                <div class="line mb-30"></div>
                                                <div class="flex item justify-content-between mb-50">
                                                    <h5 class="title">
                                                        High Treatment
                                                    </h5>
                                                    <div class="text">
                                                        We offer cutting-edge diagnostics, specialized health treatments, and personalized healthcare plans ensure effective recovery and long-term wellness.
                                                    </div>
                                                </div>
                                                <div class="bottom-btn mb-20">
                                                    <a href="{{ route('about') }}" class="tf-btn style-black-2">
                                                        <span>Learn more us</span>
                                                        <i class="icon-arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane" id="tab2" role="tabpanel">
                                            <div class="section-content">
                                                <div class="desc mb-50">We are dedicated to providing exceptional healthcare services with compassion, innovation, and excellence. Our mission is to enhance the well-being of our patients through comprehensive medical care, cutting-edge technology</div>
                                                <div class="flex item justify-content-between mb-30">
                                                    <h5 class="title">
                                                        Qualified Doctors
                                                    </h5>
                                                    <div class="text">
                                                        Highly qualified doctors is dedicated to providing exceptional medical care with expertise, compassion,
                                                        and innovation
                                                    </div>
                                                </div>
                                                <div class="line mb-30"></div>
                                                <div class="flex item justify-content-between mb-50">
                                                    <h5 class="title">
                                                        High Treatment
                                                    </h5>
                                                    <div class="text">
                                                        We offer cutting-edge diagnostics, specialized health treatments, and personalized healthcare plans ensure effective recovery and long-term wellness.
                                                    </div>
                                                </div>
                                                <div class="bottom-btn mb-20">
                                                    <a href="{{ route('about') }}" class="tf-btn style-black-2">
                                                        <span>Learn more us</span>
                                                        <i class="icon-arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane" id="tab3" role="tabpanel">
                                            <div class="section-content">
                                                <div class="desc mb-50">We are dedicated to providing exceptional healthcare services with compassion, innovation, and excellence. Our mission is to enhance the well-being of our patients through comprehensive medical care, cutting-edge technology</div>
                                                <div class="flex item justify-content-between mb-30">
                                                    <h5 class="title">
                                                        Qualified Doctors
                                                    </h5>
                                                    <div class="text">
                                                        Highly qualified doctors is dedicated to providing exceptional medical care with expertise, compassion,
                                                        and innovation
                                                    </div>
                                                </div>
                                                <div class="line mb-30"></div>
                                                <div class="flex item justify-content-between mb-50">
                                                    <h5 class="title">
                                                        High Treatment
                                                    </h5>
                                                    <div class="text">
                                                        We offer cutting-edge diagnostics, specialized health treatments, and personalized healthcare plans ensure effective recovery and long-term wellness.
                                                    </div>
                                                </div>
                                                <div class="bottom-btn mb-20">
                                                    <a href="{{ route('about') }}" class="tf-btn style-black-2">
                                                        <span>Learn more us</span>
                                                        <i class="icon-arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-department h-2 tf-spacing-1 bg-2">
                <div class="img-item tf-animate-1">
                    <img src="{{ asset('image/section/item-bg-department-h2.png') }}" data-src="{{ asset('image/section/item-bg-department-h2.png') }}" alt="" class="lazyload">
                </div>
                <div class="tf-container">
                    <div class="heading-section mb-70 text-center">
                        <h6 class="sub-title mb-10 color-paragraph text-anime">
                            Explore Medical Department
                        </h6>
                        <h2 class="title text-anime">
                            Complete Health Solutions – Because
                            <br>You Deserve the Best
                        </h2>
                    </div>
                </div>
                <div class="tf-container w-1760">
                    <div class="swiper tf-swiper sw-department-2" data-swiper='{
                            "slidesPerView": 1,
                            "spaceBetween": 30,
                            "speed": 800,
                            "navigation": {
                                "clickable": true,
                                "nextEl": ".department-next",
                                "prevEl": ".department-prev"
                            },
                            "pagination": { "el": ".sw-pagination-department2", "clickable": true },
                            "breakpoints": {
                                "575": { "slidesPerView": 2, "slidesPerGroup": 2},
                                "991": { "slidesPerView": 3, "slidesPerGroup": 1},
                                "1200": { "slidesPerView": 4, "slidesPerGroup": 1}
                            }
                        }'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="department-item style-2 hover-img">
                                    <div class="top-item">
                                        <a href="{{ route('services.details') }}" class="image">
                                            <img src="{{ asset('image/department-item/department-item-1.jpg') }}" data-src="{{ asset('image/department-item/department-item-1.jpg') }}" alt="" class="lazyload">
                                        </a>
                                        <div class="item-icon">
                                            <i class="icon-mental-health"></i>
                                        </div>
                                    </div>
                                    <div class="item-content px-mobile-lg">

                                        <h4 class="title">
                                            <a href="{{ route('services.details') }}">
                                                Mental Health & Wellness
                                            </a>
                                        </h4>

                                        <div class="desc">
                                            Counseling, therapy, and psychiatric
                                            care for mental well-being.
                                        </div>

                                        <a href="{{ route('services.details') }}" class="tf-btn style-small style-border border-color-title hover-bg-black-2">
                                            <span class="fw6 lsp-0">Read more</span>
                                            <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="department-item style-2 hover-img">
                                    <div class="top-item">
                                        <a href="{{ route('services.details') }}" class="image">
                                            <img src="{{ asset('image/department-item/department-item-2.jpg') }}" data-src="{{ asset('image/department-item/department-item-2.jpg') }}" alt="" class="lazyload">
                                        </a>
                                        <div class="item-icon bg-blue">
                                            <i class="icon-emergency"></i>
                                        </div>
                                    </div>
                                    <div class="item-content px-mobile-lg">

                                        <h4 class="title">
                                            <a href="{{ route('services.details') }}">
                                                Emergency & Urgent Care
                                            </a>
                                        </h4>

                                        <div class="desc">
                                            24/7 medical assistance for accidents, and critical health conditions.
                                        </div>

                                        <a href="{{ route('services.details') }}" class="tf-btn style-small style-border border-color-title hover-bg-black-2">
                                            <span class="fw6 lsp-0">Read more</span>
                                            <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="department-item style-2 hover-img">
                                    <div class="top-item">
                                        <a href="{{ route('services.details') }}" class="image">
                                            <img src="{{ asset('image/department-item/department-item-3.jpg') }}" data-src="{{ asset('image/department-item/department-item-3.jpg') }}" alt="" class="lazyload">
                                        </a>
                                        <div class="item-icon bg-green">
                                            <i class="icon-diagnostic"></i>
                                        </div>
                                    </div>
                                    <div class="item-content px-mobile-lg">

                                        <h4 class="title">
                                            <a href="{{ route('services.details') }}">
                                                Diagnostic & Laboratory
                                            </a>
                                        </h4>

                                        <div class="desc">
                                            Blood tests, imaging (X-rays, MRIs, CT
                                            scans), and screenings diagnosis.
                                        </div>

                                        <a href="{{ route('services.details') }}" class="tf-btn style-small style-border border-color-title hover-bg-black-2">
                                            <span class="fw6 lsp-0">Read more</span>
                                            <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="department-item style-2 hover-img">
                                    <div class="top-item">
                                        <a href="{{ route('services.details') }}" class="image">
                                            <img src="{{ asset('image/department-item/department-item-4.jpg') }}" data-src="{{ asset('image/department-item/department-item-4.jpg') }}" alt="" class="lazyload">
                                        </a>
                                        <div class="item-icon bg-yellow">
                                            <i class="icon-maternity"></i>
                                        </div>
                                    </div>
                                    <div class="item-content px-mobile-lg">

                                        <h4 class="title">
                                            <a href="{{ route('services.details') }}">
                                                Maternity & Pediatric Care
                                            </a>
                                        </h4>

                                        <div class="desc">
                                            Comprehensive care for expecting
                                            mothers, newborns, children’s health.
                                        </div>

                                        <a href="{{ route('services.details') }}" class="tf-btn style-small style-border border-color-title hover-bg-black-2">
                                            <span class="fw6 lsp-0">Read more</span>
                                            <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sw-pagination-department2 sw-pagination d-xl-none mt-15 justify-content-center"></div>
                </div>
            </section>

            <section class="section-banner h-2 flex g-10">

                <div class="wg-banner style-2">
                    <div class="banner-inner tf-spacing-2">
                        <div class="banner-content">
                            <h6 class="sub-title mb-10 text-anime">
                                Make an Appointment
                            </h6>
                            <h2 class="title mb-30 text-anime">
                                Looking for professionals &
                                <br>trusted medical healthcare?
                            </h2>
                            <div class="benefit-list flex flex-wrap rg-30 g-50 mb-40">
                                <div class="benefit-items body-2 wow fadeInUp" data-wow-delay=".2s">
                                    <i class="icon-check"></i>
                                    <span class="body-2">Advanced Medical Technology</span>
                                </div>
                            </div>
                            <div class="wow fadeInUp" data-wow-delay=".2s">
                                <a href="{{ route('appointment') }}" class="tf-btn style-white hover-boder-white">
                                    <span>Make Appointment</span>
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="image img-item tf-animate-4">
                            <img src="{{ asset('image/section/banner-item-h2-1.png') }}" data-src="{{ asset('image/section/banner-item-h2-1.png') }}" alt="" class="lazyload">
                        </div>
                    </div>
                </div>

                <div class="wg-banner style-2">
                    <div class="banner-inner tf-spacing-2">
                        <div class="banner-content">
                            <h6 class="sub-title mb-10 text-anime">
                                We are available 24/7.
                            </h6>
                            <h2 class="title mb-30 text-anime">
                                Need Emergency Care?
                                or Ambulance services?
                            </h2>
                            <div class="benefit-list flex flex-wrap rg-30 g-50 mb-40">
                                <div class="benefit-items body-2 wow fadeInUp" data-wow-delay=".3s">
                                    <i class="icon-check"></i>
                                    <span class="body-2">We are available 24/7 hours</span>
                                </div>
                            </div>
                            <div class="wow fadeInUp" data-wow-delay=".3s">
                                <a href="{{ route('contact') }}" class="tf-btn style-white hover-boder-white">
                                    <span>Contact Us</span>
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="image img-item tf-animate-4">
                            <img src="{{ asset('image/section/banner-item-h2-2.png') }}" data-src="{{ asset('image/section/banner-item-h2-2.png') }}" alt="" class="lazyload">
                        </div>
                    </div>
                </div>

            </section>

            <section class="section-team h-2 tf-spacing-6 bg-2">
                <div class="tf-container">
                    <div class="heading-section mb-50 text-center">
                        <h6 class="sub-title mb-10 color-paragraph text-anime">
                            Meet Our Doctors
                        </h6>
                        <h2 class="title text-anime">
                            Leading Medical Professionals
                            at Your Service
                        </h2>
                    </div>
                </div>
                <div class="tf-container">
                    <div class="swiper tf-swiper sw-team-2" data-swiper='{
                            "slidesPerView": 1,
                            "spaceBetween": 30,
                            "speed": 800,
                            "navigation": {
                                "clickable": true,
                                "nextEl": ".team-next",
                                "prevEl": ".team-prev"
                            },
                            "pagination": { "el": ".sw-pagination-team", "clickable": true },
                            "breakpoints": {
                                "575": { "slidesPerView": 2, "slidesPerGroup": 2},
                                "991": { "slidesPerView": 3, "slidesPerGroup": 1},
                                "1150": { "slidesPerView": 4, "slidesPerGroup": 1}
                            }
                        }'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="team-item hover-img style-2">
                                    <div class="top-item">
                                        <a href="{{ route('doctors.details') }}" class="image">
                                            <img src="{{ asset('image/team-item/team-item-5.jpg') }}" data-src="{{ asset('image/team-item/team-item-5.jpg') }}" alt="" class=" lazyloaded">
                                        </a>
                                        <a href="{{ route('doctors.details') }}" class="tf-btn-plus">+</a>
                                        <a href="{{ route('doctors.details') }}" class="tf-btn style-black-2 style-small">
                                            <span>Make Appointment</span>
                                            <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                    <div class="item-content">
                                        <h4 class="name-team">
                                            <a href="{{ route('doctors.details') }}">Rafael D. Bratcher</a>
                                        </h4>
                                        <a href="#" class="position">
                                            Neurologist
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team-item hover-img style-2">
                                    <div class="top-item">
                                        <a href="{{ route('doctors.details') }}" class="image">
                                            <img src="{{ asset('image/team-item/team-item-6.jpg') }}" data-src="{{ asset('image/team-item/team-item-6.jpg') }}" alt="" class=" lazyloaded">
                                        </a>
                                        <a href="{{ route('doctors.details') }}" class="tf-btn-plus">+</a>
                                        <a href="{{ route('doctors.details') }}" class="tf-btn style-black-2 style-small">
                                            <span>Make Appointment</span>
                                            <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                    <div class="item-content">
                                        <h4 class="name-team">
                                            <a href="{{ route('doctors.details') }}">Santiago K. Wilson</a>
                                        </h4>
                                        <a href="#" class="position">
                                            Senior Dentist
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team-item hover-img style-2">
                                    <div class="top-item">
                                        <a href="{{ route('doctors.details') }}" class="image">
                                            <img src="{{ asset('image/team-item/team-item-7.jpg') }}" data-src="{{ asset('image/team-item/team-item-7.jpg') }}" alt="" class=" lazyloaded">
                                        </a>
                                        <a href="{{ route('doctors.details') }}" class="tf-btn-plus">+</a>
                                        <a href="{{ route('doctors.details') }}" class="tf-btn style-black-2 style-small">
                                            <span>Make Appointment</span>
                                            <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                    <div class="item-content">
                                        <h4 class="name-team">
                                            <a href="{{ route('doctors.details') }}">Micheal C. Simmons</a>
                                        </h4>
                                        <a href="#" class="position">
                                            Medicine Specialist
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team-item hover-img style-2">
                                    <div class="top-item">
                                        <a href="{{ route('doctors.details') }}" class="image">
                                            <img src="{{ asset('image/team-item/team-item-8.jpg') }}" data-src="{{ asset('image/team-item/team-item-8.jpg') }}" alt="" class=" lazyloaded">
                                        </a>
                                        <a href="{{ route('doctors.details') }}" class="tf-btn-plus">+</a>
                                        <a href="{{ route('doctors.details') }}" class="tf-btn style-black-2 style-small">
                                            <span>Make Appointment</span>
                                            <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                    <div class="item-content">
                                        <h4 class="name-team">
                                            <a href="{{ route('doctors.details') }}">Columbus A. Davis</a>
                                        </h4>
                                        <a href="#" class="position">
                                            Neuro Surgeon
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sw-pagination-team sw-pagination d-xl-none mt-15 justify-content-center"></div>
            </section>

            <div class="section-contact h-2 mb-10 mx-30">
                <div class="section-contact-inner flex g-10">
                    <div class="wg-video style-color-black-2 img-3">
                        <a href="https://www.youtube.com/watch?v=XHOmBV4js_E" class="popup-youtube">
                            <div class="icon">
                                <i class="icon-play"></i>
                            </div>
                            <div class="wave"></div>
                            <div class="wave"></div>
                            <div class="wave"></div>
                        </a>
                    </div>
                    <form id="contactform" class="form-contact-us bg-black-2 px-mobile-sm" method="post" action="https://micarehtml.vercel.app/contact/contact-process.php">
                        <div class="heading-form mb-30">
                            <div class="title text-anime">
                                Make an Appointment
                            </div>
                            <div class="desc text-anime">Booking an appointment with our healthcare professionals</div>
                        </div>

                        <div class="cols mb-20 g-20 rg-20">
                            <fieldset class="item">
                                <i class="icon-user"></i>
                                <input type="text" name="name" id="name" placeholder="Name" required>
                            </fieldset>

                            <fieldset class="item">
                                <i class="icon-envelope"></i>
                                <input type="email" name="mail" id="mail" placeholder="Email Address" required>
                            </fieldset>

                            <fieldset class="item">
                                <i class="icon-phone-volume-2"></i>
                                <input type="number" name="phone" id="phone" placeholder="Phone no" required>
                            </fieldset>

                            <fieldset class="item">
                                <i class="icon-calendar-day"></i>
                                <input type="text" name="date" id="datepicker" class="date-input" placeholder="Date & Time" required>
                            </fieldset>

                            <fieldset class="item">
                                <i class="icon-stethoscope"></i>
                                <div class="nice-select">
                                    <span class="current caption-1">Department</span>
                                    <ul class="list">
                                        <li class="option option-all">
                                            Department
                                        </li>
                                        <li class="option">
                                            Department 1
                                        </li>
                                        <li class="option">
                                            Department 2
                                        </li>
                                    </ul>
                                </div>
                            </fieldset>

                            <fieldset class="item">
                                <i class="icon-user-doctor"></i>

                                <div class="nice-select">
                                    <span class="current caption-1">Doctors</span>
                                    <ul class="list">
                                        <li class="option option-all">
                                            Doctors
                                        </li>
                                        <li class="option">
                                            Doctors 1
                                        </li>
                                        <li class="option">
                                            Doctors 2
                                        </li>
                                    </ul>
                                </div>
                            </fieldset>
                        </div>

                        <div class="cols g-20 align-items-start">
                            <fieldset class="item-textarea">
                                <i class="icon-envelope-2"></i>
                                <textarea name="message" id="message" placeholder="Write message..." required></textarea>
                            </fieldset>

                            <button type="submit" class="tf-btn style-white">
                                <span>Submit now</span>
                                <i class="icon-arrow-right"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <section class="section-features h-2 tf-spacing-2 mx-30">
                <div class="img-item item-1">
                    <img src="{{ asset('image/section/item-features-h2-1.png') }}" data-src="{{ asset('image/section/item-features-h2-1.png') }}" alt="" class="lazyload">
                </div>
                <div class="img-item item-2">
                    <img src="{{ asset('image/section/item-features-h2-2.png') }}" data-src="{{ asset('image/section/item-features-h2-2.png') }}" alt="" class="lazyload">
                </div>
                <div class="tf-container">
                    <div class="heading-section style-white mb-50 text-center">
                        <h2 class="title mb-15 text-anime">
                            Quality Healthcare Under One Approach
                        </h2>
                        <div class="text wow fadeInUp" data-wow-delay=".2s">
                            Our mission is to ensure accessible, affordable, and effective healthcare that improves lives
                            <br>and promotes overall well-being health is our top priority.
                        </div>
                    </div>
                </div>
                <div class="tf-container">
                    <div class="swiper tf-swiper sw-features-2" data-swiper='{
                            "slidesPerView": 1,
                            "spaceBetween": 30,
                            "speed": 800,
                            "navigation": {
                                "clickable": true,
                                "nextEl": ".features-next",
                                "prevEl": ".features-prev"
                            },
                            "pagination": { "el": ".sw-pagination-features", "clickable": true },
                            "breakpoints": {
                                "767": { "slidesPerView": 2, "slidesPerGroup": 2},
                                "991": { "slidesPerView": 3, "slidesPerGroup": 1},
                                "1150": { "slidesPerView": 4, "slidesPerGroup": 1}
                            }
                        }'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="features-item style-2">
                                    <div class="icon">
                                        <i class="icon-advance"></i>
                                    </div>
                                    <h6 class="title">
                                        <a href="{{ route('services.details') }}">
                                            Advance Lab Test
                                        </a>
                                    </h6>
                                    <div class="desc">We offer state-of-the-art laboratory testing to provide fast, accurate, and reliable.</div>
                                    <a href="{{ route('services.details') }}" class="tf-btn no-bg">
                                        <span>Read more</span>
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="features-item style-2">
                                    <div class="icon">
                                        <i class="icon-medicine-care"></i>
                                    </div>
                                    <h6 class="title">
                                        <a href="{{ route('services.details') }}">
                                            Medicine Services
                                        </a>
                                    </h6>
                                    <div class="desc">We offer state-of-the-art laboratory testing to provide fast, accurate, and reliable.</div>
                                    <a href="{{ route('services.details') }}" class="tf-btn no-bg">
                                        <span>Read more</span>
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="features-item style-2">
                                    <div class="icon">
                                        <i class="icon-physical-rehabilitation"></i>
                                    </div>
                                    <h6 class="title">
                                        <a href="{{ route('services.details') }}">
                                            Physical Rehabilitation
                                        </a>
                                    </h6>
                                    <div class="desc">We offer state-of-the-art laboratory testing to provide fast, accurate, and reliable.</div>
                                    <a href="{{ route('services.details') }}" class="tf-btn no-bg">
                                        <span>Read more</span>
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="features-item style-2">
                                    <div class="icon">
                                        <i class="icon-ambulance-services"></i>
                                    </div>
                                    <h6 class="title">
                                        <a href="{{ route('services.details') }}">
                                            Ambulance Services
                                        </a>
                                    </h6>
                                    <div class="desc">We offer state-of-the-art laboratory testing to provide fast, accurate, and reliable.</div>
                                    <a href="{{ route('services.details') }}" class="tf-btn no-bg">
                                        <span>Read more</span>
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sw-pagination-features sw-pagination d-xl-none mt-15 justify-content-center style-white"></div>
            </section>

            <section class="section-fun-fact h-2 tf-spacing-1">
                <div class="tf-container">
                    <div class="row rg-30">
                        <div class="col-xl-3 col-md-6">
                            <div class="fun-fact-item bg-yellow mb-30 tf-animate-1 px-mobile-sm">
                                <div class="icon">
                                    <i class="icon-experienced-doctors"></i>
                                </div>
                                <div class="counter-item">
                                    <div class="counter">
                                        <div class="number-counter flex">
                                            <span class="number odometer color-primary" data-to="35" data-inviewport="yes"> 0 </span>
                                            <span class="color-primary">+</span>
                                        </div>
                                        <p class="title-counter body-2 lh-30 fw5">
                                            Experienced doctors
                                            <br>at your service
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="fun-fact-item bg-black-2 tf-animate-1 px-mobile-sm">
                                <div class="icon">
                                    <i class="icon-years-of-ex"></i>
                                </div>
                                <div class="counter-item">
                                    <div class="counter">
                                        <div class="number-counter flex">
                                            <span class="number odometer color-primary" data-to="10" data-inviewport="yes"> 0 </span>
                                            <span class="color-primary">+</span>
                                        </div>
                                        <p class="title-counter lh-30 body-2 fw5">
                                            Years Of Experience
                                            <br>in Medical Services
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 order-xl1">
                            <div class="image tf-animate-2">
                                <img src="{{ asset('image/section/img-section-fun-fact-h2.jpg') }}" data-src="{{ asset('image/section/img-section-fun-fact-h2.jpg') }}" alt="" class="lazyload">
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="fun-fact-item bg-green mb-30 tf-animate-4 px-mobile-sm">
                                <div class="icon">
                                    <i class="icon-happy-patients"></i>
                                </div>
                                <div class="counter-item">
                                    <div class="counter">
                                        <div class="number-counter flex">
                                            <span class="number odometer color-primary" data-to="8" data-inviewport="yes"> 0 </span>
                                            <span class="color-primary">m+</span>
                                        </div>
                                        <p class="title-counter body-2 lh-30 fw5">
                                            Happy patients for good
                                            <br>medical services
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="fun-fact-item bg-pink tf-animate-4 px-mobile-sm">
                                <div class="icon">
                                    <i class="icon-emergency-ambulance"></i>
                                </div>
                                <div class="counter-item">
                                    <div class="counter">
                                        <div class="number-counter flex">
                                            <span class="number odometer color-primary" data-to="200" data-inviewport="yes"> 0 </span>
                                            <span class="color-primary">+</span>
                                        </div>
                                        <p class="title-counter fw5">
                                            Emergency ambulance
                                            <br>services for 24/7 hors
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div>
                <div class="swiper tf-swiper sw-gallery h-2" 
                data-swiper='{
                    "slidesPerView": 1,
                    "spaceBetween": 30,
                    "speed": 800,
                    "navigation": {
                        "clickable": true,
                        "nextEl": ".gallery-next",
                        "prevEl": ".gallery-prev"
                    },
                    "pagination": { "el": ".sw-pagination-gallery", "clickable": true },
                    "breakpoints": {
                        "550": { "slidesPerView": 2, "slidesPerGroup": 2},
                        "1150": { "slidesPerView": 3, "slidesPerGroup": 3},
                        "1500": { "slidesPerView": 4, "slidesPerGroup": 1}
                    }
                }'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="gallery-item hover-img">
                                <a href="{{ route('services.details') }}" class="image">
                                    <img src="{{ asset('image/gallery-item/gallery-item-1.jpg') }}" data-src="{{ asset('image/gallery-item/gallery-item-1.jpg') }}" alt="" class="lazyload">
                                </a>
                                <div class="item-content">
                                    <div class="sub-title">
                                        Medical Services
                                    </div>
                                    <h4 class="title"><a href="{{ route('services.details') }}">Surgeons in Operation Theater</a></h4>
                                    <p class="desc">
                                        In the operation theater, highly skilled surgeons work with precision, expertise, and advanced.
                                    </p>
                                    <div class="bottom-btn">
                                        <a href="{{ route('services.details') }}" class="tf-btn style-small small-2 style-black-2">
                                            <span>Read more</span>
                                            <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-item hover-img">
                                <a href="{{ route('services.details') }}" class="image">
                                    <img src="{{ asset('image/gallery-item/gallery-item-2.jpg') }}" data-src="{{ asset('image/gallery-item/gallery-item-2.jpg') }}" alt="" class="lazyload">
                                </a>
                                <div class="item-content">
                                    <div class="sub-title">
                                        Medical Services
                                    </div>
                                    <h4 class="title"><a href="{{ route('services.details') }}">Surgeons in Operation Theater</a></h4>
                                    <p class="desc">
                                        In the operation theater, highly skilled surgeons work with precision, expertise, and advanced.
                                    </p>
                                    <div class="bottom-btn">
                                        <a href="{{ route('services.details') }}" class="tf-btn style-small small-2 style-black-2">
                                            <span>Read more</span>
                                            <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-item hover-img">
                                <a href="{{ route('services.details') }}" class="image">
                                    <img src="{{ asset('image/gallery-item/gallery-item-3.jpg') }}" data-src="{{ asset('image/gallery-item/gallery-item-3.jpg') }}" alt="" class="lazyload">
                                </a>
                                <div class="item-content">
                                    <div class="sub-title">
                                        Medical Services
                                    </div>
                                    <h4 class="title"><a href="{{ route('services.details') }}">Surgeons in Operation Theater</a></h4>
                                    <p class="desc">
                                        In the operation theater, highly skilled surgeons work with precision, expertise, and advanced.
                                    </p>
                                    <div class="bottom-btn">
                                        <a href="{{ route('services.details') }}" class="tf-btn style-small small-2 style-black-2">
                                            <span>Read more</span>
                                            <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-item hover-img">
                                <a href="{{ route('services.details') }}" class="image">
                                    <img src="{{ asset('image/gallery-item/gallery-item-4.jpg') }}" data-src="{{ asset('image/gallery-item/gallery-item-4.jpg') }}" alt="" class="lazyload">
                                </a>
                                <div class="item-content">
                                    <div class="sub-title">
                                        Medical Services
                                    </div>
                                    <h4 class="title"><a href="{{ route('services.details') }}">Surgeons in Operation Theater</a></h4>
                                    <p class="desc">
                                        In the operation theater, highly skilled surgeons work with precision, expertise, and advanced.
                                    </p>
                                    <div class="bottom-btn">
                                        <a href="{{ route('services.details') }}" class="tf-btn style-small small-2 style-black-2">
                                            <span>Read more</span>
                                            <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sw-pagination-gallery sw-pagination d-xl-none mt-15 justify-content-center"></div>

            </div>

            <section class="section-testimonials h-2 tf-spacing-7 flat-thumbs-tes">
                <div class="tf-container">
                    <div class="heading-section mb-70 text-center">
                        <h6 class="sub-title mb-10 color-paragraph text-anime">
                            Our Testimonials
                        </h6>
                        <h2 class="title text-anime">
                            Your Health, Our Commitment
                            <br>Hear from Our Patients
                        </h2>
                    </div>
                </div>
                <div class="tf-container">
                    <div class="row rg-30">
                        <div class="col-md-4 col-sm-5">
                            <div class="swiper sw-thumb-tes tf-thumb-tes h-2" data-space="30" data-space-lg="30">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="image">
                                            <img src="{{ asset('image/testimonials-item/img-testimonial-h2.jpg') }}" data-src="{{ asset('image/testimonials-item/img-testimonial-h2.jpg') }}" alt="" class="lazyload">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="image">
                                            <img src="{{ asset('image/testimonials-item/img-testimonial-h2.jpg') }}" data-src="{{ asset('image/testimonials-item/img-testimonial-h2.jpg') }}" alt="" class="lazyload">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="image">
                                            <img src="{{ asset('image/testimonials-item/img-testimonial-h2.jpg') }}" data-src="{{ asset('image/testimonials-item/img-testimonial-h2.jpg') }}" alt="" class="lazyload">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="image">
                                            <img src="{{ asset('image/testimonials-item/img-testimonial-h2.jpg') }}" data-src="{{ asset('image/testimonials-item/img-testimonial-h2.jpg') }}" alt="" class="lazyload">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-7">
                            <div class="swiper sw-main-tes tf-tes-main" data-space="30" data-space-lg="30">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="testimonials-item style-2">
                                            <div class="img-item">
                                                <img src="{{ asset('image/testimonials-item/bg-testimonial-style-2.png') }}" alt="">
                                            </div>
                                            <div class="rating position-relative flex">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                            </div>
                                            <p class="title fs-30 lh-40 fw7 position-relative">
                                                <a href="#">"Exceptional Care and Compassion"</a>
                                            </p>
                                            <p class="desc fs-30 lh-40 fw7 position-relative">
                                                “The doctors and nurses at provided me with outstanding care. From the moment walked care
                                                expertise and kindness."
                                            </p>
                                            <div class="icon position-relative">
                                                <i class="icon-groud-chat"></i>
                                            </div>
                                            <div class="user-testimonials flex align-items-end position-relative">
                                                <h5 class="name-user"><a href="#">Nicolas M. Baldwin,</a></h5>
                                                <a href="#" class="position">Businessman</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonials-item style-2">
                                            <div class="img-item">
                                                <img src="{{ asset('image/testimonials-item/bg-testimonial-style-2.png') }}" alt="">
                                            </div>
                                            <div class="rating position-relative flex">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                            </div>
                                            <p class="title fs-30 lh-40 fw7 position-relative">
                                                <a href="#">"Exceptional Care and Compassion"</a>
                                            </p>
                                            <p class="desc fs-30 lh-40 fw7 position-relative">
                                                “The doctors and nurses at provided me with outstanding care. From the moment walked care
                                                expertise and kindness."
                                            </p>
                                            <div class="icon position-relative">
                                                <i class="icon-groud-chat"></i>
                                            </div>
                                            <div class="user-testimonials flex align-items-end position-relative">
                                                <h5 class="name-user"><a href="#">Nicolas M. Baldwin,</a></h5>
                                                <a href="#" class="position">Businessman</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonials-item style-2">
                                            <div class="img-item">
                                                <img src="{{ asset('image/testimonials-item/bg-testimonial-style-2.png') }}" alt="">
                                            </div>
                                            <div class="rating position-relative flex">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                            </div>
                                            <p class="title fs-30 lh-40 fw7 position-relative">
                                                <a href="#">"Exceptional Care and Compassion"</a>
                                            </p>
                                            <p class="desc fs-30 lh-40 fw7 position-relative">
                                                “The doctors and nurses at provided me with outstanding care. From the moment walked care
                                                expertise and kindness."
                                            </p>
                                            <div class="icon position-relative">
                                                <i class="icon-groud-chat"></i>
                                            </div>
                                            <div class="user-testimonials flex align-items-end position-relative">
                                                <h5 class="name-user"><a href="#">Nicolas M. Baldwin,</a></h5>
                                                <a href="#" class="position">Businessman</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonials-item style-2">
                                            <div class="img-item">
                                                <img src="{{ asset('image/testimonials-item/bg-testimonial-style-2.png') }}" alt="">
                                            </div>
                                            <div class="rating position-relative flex">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                            </div>
                                            <p class="title fs-30 lh-40 fw7 position-relative">
                                                <a href="#">"Exceptional Care and Compassion"</a>
                                            </p>
                                            <p class="desc fs-30 lh-40 fw7 position-relative">
                                                “The doctors and nurses at provided me with outstanding care. From the moment walked care
                                                expertise and kindness."
                                            </p>
                                            <div class="icon position-relative">
                                                <i class="icon-groud-chat"></i>
                                            </div>
                                            <div class="user-testimonials flex align-items-end position-relative">
                                                <h5 class="name-user"><a href="#">Nicolas M. Baldwin,</a></h5>
                                                <a href="#" class="position">Businessman</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sw-pagination-tes sw-pagination style-color-black-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="wg-brand mx-30">
                <div class="tf-marquee">
                    <div class="marquee-wrapper">
                        <div class="initial-child-container">
                            <div class="marquee-child-item">
                                <a href="#" class="brand-item">
                                    <img src="{{ asset('image/brand/brand-1.png') }}" alt="">
                                </a>
                            </div>
                            <div class="marquee-child-item">
                                <a href="#" class="brand-item">
                                    <img src="{{ asset('image/brand/brand-2.png') }}" alt="">
                                </a>
                            </div>
                            <div class="marquee-child-item">
                                <a href="#" class="brand-item">
                                    <img src="{{ asset('image/brand/brand-3.png') }}" alt="">
                                </a>
                            </div>
                            <div class="marquee-child-item">
                                <a href="#" class="brand-item">
                                    <img src="{{ asset('image/brand/brand-4.png') }}" alt="">
                                </a>
                            </div>
                            <div class="marquee-child-item">
                                <a href="#" class="brand-item">
                                    <img src="{{ asset('image/brand/brand-5.png') }}" alt="">
                                </a>
                            </div>
                            <div class="marquee-child-item">
                                <a href="#" class="brand-item">
                                    <img src="{{ asset('image/brand/brand-6.png') }}" alt="">
                                </a>
                            </div>
                            <!-- 2 -->
                            <div class="marquee-child-item">
                                <a href="#" class="brand-item">
                                    <img src="{{ asset('image/brand/brand-1.png') }}" alt="">
                                </a>
                            </div>
                            <div class="marquee-child-item">
                                <a href="#" class="brand-item">
                                    <img src="{{ asset('image/brand/brand-2.png') }}" alt="">
                                </a>
                            </div>
                            <div class="marquee-child-item">
                                <a href="#" class="brand-item">
                                    <img src="{{ asset('image/brand/brand-3.png') }}" alt="">
                                </a>
                            </div>
                            <div class="marquee-child-item">
                                <a href="#" class="brand-item">
                                    <img src="{{ asset('image/brand/brand-4.png') }}" alt="">
                                </a>
                            </div>
                            <div class="marquee-child-item">
                                <a href="#" class="brand-item">
                                    <img src="{{ asset('image/brand/brand-5.png') }}" alt="">
                                </a>
                            </div>
                            <div class="marquee-child-item">
                                <a href="#" class="brand-item">
                                    <img src="{{ asset('image/brand/brand-6.png') }}" alt="">
                                </a>
                            </div>
                            <!-- 3 -->
                            <div class="marquee-child-item">
                                <a href="#" class="brand-item">
                                    <img src="{{ asset('image/brand/brand-1.png') }}" alt="">
                                </a>
                            </div>
                            <div class="marquee-child-item">
                                <a href="#" class="brand-item">
                                    <img src="{{ asset('image/brand/brand-2.png') }}" alt="">
                                </a>
                            </div>
                            <div class="marquee-child-item">
                                <a href="#" class="brand-item">
                                    <img src="{{ asset('image/brand/brand-3.png') }}" alt="">
                                </a>
                            </div>
                            <div class="marquee-child-item">
                                <a href="#" class="brand-item">
                                    <img src="{{ asset('image/brand/brand-4.png') }}" alt="">
                                </a>
                            </div>
                            <div class="marquee-child-item">
                                <a href="#" class="brand-item">
                                    <img src="{{ asset('image/brand/brand-5.png') }}" alt="">
                                </a>
                            </div>
                            <div class="marquee-child-item">
                                <a href="#" class="brand-item">
                                    <img src="{{ asset('image/brand/brand-6.png') }}" alt="">
                                </a>
                            </div>
                            <!-- 4 -->
                            <div class="marquee-child-item">
                                <a href="#" class="brand-item">
                                    <img src="{{ asset('image/brand/brand-1.png') }}" alt="">
                                </a>
                            </div>
                            <div class="marquee-child-item">
                                <a href="#" class="brand-item">
                                    <img src="{{ asset('image/brand/brand-2.png') }}" alt="">
                                </a>
                            </div>
                            <div class="marquee-child-item">
                                <a href="#" class="brand-item">
                                    <img src="{{ asset('image/brand/brand-3.png') }}" alt="">
                                </a>
                            </div>
                            <div class="marquee-child-item">
                                <a href="#" class="brand-item">
                                    <img src="{{ asset('image/brand/brand-4.png') }}" alt="">
                                </a>
                            </div>
                            <div class="marquee-child-item">
                                <a href="#" class="brand-item">
                                    <img src="{{ asset('image/brand/brand-5.png') }}" alt="">
                                </a>
                            </div>
                            <div class="marquee-child-item">
                                <a href="#" class="brand-item">
                                    <img src="{{ asset('image/brand/brand-6.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section class="section-blog h-2 tf-spacing-1">
                <div class="tf-container">
                    <div class="heading-section flex align-items-end justify-content-between mb-70 flex-wrap rg-10">
                        <div class="left">
                            <h6 class="sub-title mb-10 color-paragraph text-anime">
                                Blog & News
                            </h6>
                            <h2 class="title text-anime">
                                Read Medical Care Tips
                            </h2>
                        </div>
                        <div class="wow fadeInUp" data-delay=".4s">
                            <a href="#" class="tf-btn style-border style-border-2 hover-bg-black-2">
                                <span>View All Blog</span>
                                <i class="icon-arrow-right"></i>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="tf-container">
                    <div class="row rg-30">
                        <div class="col-lg-6">
                            <div class="tf-post-grid style-2 hover-img">
                                <a href="{{ route('blog.details') }}" class="image">
                                    <img src="{{ asset('image/blog/tf-port-grid-5.jpg') }}" data-src="{{ asset('image/blog/tf-port-grid-5.jpg') }}" alt="">
                                </a>
                                <div class="tf-grid-post-content">
                                    <ul class="post-metas style-2 color-paragraph">
                                        <li class="metas-item"><a href="#" class="color-black-2 fw5">Medical Care</a></li>
                                        <li class="metas-item"><a href="#">10 February 2025</a></li>
                                        <li class="metas-item"><a href="#">Comments (5)</a></li>
                                    </ul>
                                    <a href="{{ route('blog.details') }}" class="title-post fs-30 lh-40">How to Choose the Right Healthcare Provider for Your Needs a Medical Crisis</a>

                                    <a href="{{ route('blog.details') }}" class="tf-btn style-small small-2 style-border style-border-2 hover-bg-black-2">
                                        <span>Read more</span>
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="tf-post-grid style-2 hover-img">
                                <a href="{{ route('blog.details') }}" class="image">
                                    <img src="{{ asset('image/blog/tf-port-grid-6.jpg') }}" data-src="{{ asset('image/blog/tf-port-grid-6.jpg') }}" alt="">
                                </a>
                                <div class="tf-grid-post-content">
                                    <ul class="post-metas style-2 color-paragraph">
                                        <li class="metas-item"><a href="#" class="color-black-2 fw5">Medical Care</a></li>
                                        <li class="metas-item"><a href="#">10 February 2025</a></li>
                                        <li class="metas-item"><a href="#">Comments (5)</a></li>
                                    </ul>
                                    <a href="{{ route('blog.details') }}" class="title-post fs-30 lh-40">Boost Your Immune System Naturally Doctor Approved Tips for Healthier Lifestyle</a>

                                    <a href="{{ route('blog.details') }}" class="tf-btn style-small small-2 style-border style-border-2 hover-bg-black-2">
                                        <span>Read more</span>
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
@endsection
