@extends('layouts.app')

@section('title', 'About Us - Clineva')

@section('content')
<div class="page-title mt-30">
            <div class="mx-30">
                <div class="page-title-content paralax-bg">
                    <h1 class="title text-anime">
                        About Us
                    </h1>
                    <div class="breadkcum text-anime">
                        <h3><a href="{{ route('home') }}" class="link-breadkcum">Home</a></h3>
                        <span class="dot bg-white mx-27"></span>
                        <h3 class="page-breadkcum pl-0">About Us</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-content">

            <section class="section-about p-about tf-spacing-1">
                <div class="tf-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="heading-section mb-50">
                                <h6 class="sub-title mb-10 text-anime">
                                    About micare
                                </h6>
                                <h2 class="title mb-40 wow fadeInUp" data-wow-delay=".2s">
                                    We focus on patient-centered care, cutting-edge
                                    medical solutions, and a compassionate approach to healing with a dedication safety, excellence
                                </h2>
                                <p class="text fs-20 lh-32 fw4 lsp-0 wow fadeInUp" data-wow-delay=".2s">
                                    Medical healthcare plays a vital role in ensuring overall well-being by providing preventive, diagnostic, and treatment services for individuals of all ages. From routine check-ups and vaccinations to advanced treatments and emergency care, healthcare services are designed to keep people healthy and improve their quality of life. With the help of modern medical technology
                                </p>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="bottom-section flex g-10">
                                <div class="image tf-animate-1">
                                    <img src="{{ asset('image/section/img-section-about-p-about.jpg') }}" data-src="{{ asset('image/section/img-section-about-p-about.jpg') }}" alt="">
                                </div>
                                <div class="list-item px-mobile-sm">
                                    <div class="about-item style-list">
                                        <div class="top-item flex g-30 align-items-center">
                                            <div class="wow fadeInUp" data-wow-delay=".2s">
                                                <h6 class="number-item">1</h6>
                                            </div>
                                            <div class="wow fadeInUp" data-wow-delay=".3s">
                                                <h6 class="title lh-30">
                                                    Modern Technology
                                                </h6>
                                            </div>
                                        </div>
                                        <div class="desc wow fadeInUp" data-wow-delay=".4s">Modern technology has revolutionized the way we live, work, and communicate, making everyday</div>
                                    </div>
                                    <div class="about-item style-list">
                                        <div class="top-item flex g-30 align-items-center">
                                            <div class="wow fadeInUp" data-wow-delay=".2s">
                                                <h6 class="number-item">2</h6>
                                            </div>
                                            <div class="wow fadeInUp" data-wow-delay=".3s">
                                                <h6 class="title lh-30">
                                                    Certified Doctors
                                                </h6>
                                            </div>
                                        </div>
                                        <div class="desc wow fadeInUp" data-wow-delay=".4s">
                                            Our team of certified doctors is committed to modern providing high-quality, patient-centered care.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="features-list">
                <div class="tf-container">
                    <div class="swiper tf-swiper sw-features" data-swiper='{
                        "slidesPerView": 1,
                        "spaceBetween": 30,
                        "pagination": { "el": ".sw-pagination-features", "clickable": true },
                        "breakpoints": {
                            "575": { "slidesPerView": 2, "slidesPerGroup": 1},
                            "1150": { "slidesPerView": 3, "slidesPerGroup": 1}
                            }
                        }'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="features-item style-6 px-mobile-sm bg-gray-1">
                                    <svg class="number-features">
                                        <defs>
                                            <linearGradient id="textGradient" x1="0%" y1="0%" x2="0%" y2="100%">
                                                <stop offset="0%" stop-color="rgba(12, 23, 26, 0.05)" />
                                                <stop offset="100%" stop-color="rgba(12, 23, 26, 0)" />
                                            </linearGradient>
                                        </defs>

                                        <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" fill="none" stroke="url(#textGradient)" stroke-width="2">
                                            01
                                        </text>
                                    </svg>
                                    <div class="icon">
                                        <i class="icon-looking"></i>
                                    </div>
                                    <h4 class="title lsp-0"><a href="#">Looking For Medical Care ?</a></h4>
                                    <div class="desc">Your Health is your greatest asset, and
                                        finding trusted medical care services.</div>
                                    <a href="{{ route('services') }}" class="tf-btn style-small style-border border-color-title hover-bg-white">
                                        <span>Find Services</span>
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="features-item style-6 px-mobile-sm bg-gray-2">
                                    <svg class="number-features">
                                        <defs>
                                            <linearGradient id="textGradient2" x1="0%" y1="0%" x2="0%" y2="100%">
                                                <stop offset="0%" stop-color="rgba(12, 23, 26, 0.05)" />
                                                <stop offset="100%" stop-color="rgba(12, 23, 26, 0)" />
                                            </linearGradient>
                                        </defs>

                                        <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" fill="none" stroke="url(#textGradient2)" stroke-width="2">
                                            02
                                        </text>
                                    </svg>
                                    <div class="icon">
                                        <i class="icon-find-professional"></i>
                                    </div>
                                    <h4 class="title lsp-0"><a href="#">Find Quality Doctors</a></h4>
                                    <div class="desc">Finding professional, highly qualified, and experienced doctors is essential</div>
                                    <a href="{{ route('doctors') }}" class="tf-btn style-small style-border border-color-title hover-bg-white">
                                        <span>Find Doctors</span>
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="features-item style-6 px-mobile-sm bg-gray-3">
                                    <svg class="number-features">
                                        <defs>
                                            <linearGradient id="textGradient3" x1="0%" y1="0%" x2="0%" y2="100%">
                                                <stop offset="0%" stop-color="rgba(12, 23, 26, 0.05)" />
                                                <stop offset="100%" stop-color="rgba(12, 23, 26, 0)" />
                                            </linearGradient>
                                        </defs>

                                        <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" fill="none" stroke="url(#textGradient3)" stroke-width="2">
                                            03
                                        </text>
                                    </svg>
                                    <div class="icon">
                                        <i class="icon-need-emergency"></i>
                                    </div>
                                    <h4 class="title lsp-0"><a href="#">Need a Ambulance ?</a></h4>
                                    <div class="desc">In a medical emergency, every second counts. If you need a fast, reliable</div>
                                    <a href="#" class="tf-btn style-small style-border border-color-title hover-bg-white">
                                        <span>Find Ambulance</span>
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="sw-pagination-features sw-pagination d-xl-none mt-15 justify-content-center"></div>
                    </div>
                </div>
            </div>

            <section class="section-team p-about tf-spacing-1 mx-30">

                <div class="section-team-inner">
                    <div class="image-section">
                        <img src="{{ asset('image/section/img-section-team-p-about.jpg') }}" data-src="{{ asset('image/section/img-section-team-p-about.jpg') }}" alt="" class="lazyload parallax-img ">
                    </div>
                    <div class="list-box flex justify-content-between align-items-center g-30 rg-50">
                        <div class="box-icon">
                            <div class="icon-box wow fadeInUp">
                                <i class="icon-specialized"></i>
                            </div>
                            <h5 class="title wow fadeInUp"><a href="#">Specialized Healthcare</a></h5>
                            <div class="desc wow fadeInUp">
                                Medical care services offer a wide range
                                <br>of treatments, from routine check-ups and
                                <br>specialized care in cardiology
                            </div>
                        </div>
                        <div class="box-icon">
                            <div class="icon-box wow fadeInUp" data-wow-delay=".1s">
                                <i class="icon-emergency1"></i>
                            </div>
                            <h5 class="title wow fadeInUp" data-wow-delay=".1s"><a href="#">24/7 Emergency & Critical Care</a></h5>
                            <div class="desc wow fadeInUp" data-wow-delay=".1s">
                                Timely medical attention can save lives, which
                                <br>is why top-tier medical care services provide
                                <br>round-the-clock emergency care
                            </div>
                        </div>
                        <div class="box-icon">
                            <div class="icon-box wow fadeInUp" data-wow-delay=".2s">
                                <i class="icon-patient-centered"></i>
                            </div>
                            <h5 class="title wow fadeInUp" data-wow-delay=".2s"><a href="#">Patient-Centered Services</a></h5>
                            <div class="desc wow fadeInUp" data-wow-delay=".2s">
                                Healthcare today is more accessible ever
                                <br>easy appointment scheduling, telemedicine
                                <br>consultations, and home care services.
                            </div>
                        </div>
                    </div>
                    <div class="bottom-section tf-spacing-12">
                        <div class="img-item item-1">
                            <img src="{{ asset('image/section/item-section-lap-h1-2.png') }}" data-src="{{ asset('image/section/item-section-lap-h1-2.png') }}" alt="" class="lazyload">
                        </div>
                        <div class="img-item item-2">
                            <img src="{{ asset('image/section/item-section-lap-h1-2.png') }}" data-src="{{ asset('image/section/item-section-lap-h1-2.png') }}" alt="" class="lazyload">
                        </div>
                        <div class="tf-container">
                            <div class="heading-section style-white flex align-items-end justify-content-between flex-wrap g-30 rg-10 mb-70">
                                <div class="left">
                                    <h6 class="sub-title mb-10 text-anime">
                                        Meet Our Doctors
                                    </h6>
                                    <h2 class="title text-anime">
                                        Leading Medical Professionals
                                        <br>at Your Service
                                    </h2>
                                </div>
                                <div class="list-btn flex align-items-center g-20">
                                    <div class="wow fadeInUp" data-wow-delay=".4s">
                                        <a class="arrow-btn style-border arrow-prev team-prev">
                                            <i class="icon-arrow-left"></i>
                                        </a>
                                    </div>
                                    <div class="wow fadeInUp" data-wow-delay=".6s">
                                        <a class="arrow-btn style-border arrow-next team-next">
                                            <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper tf-swiper sw-team2" data-swiper='{
                                "slidesPerView": 1,
                                "spaceBetween": 30,
                                "navigation": {
                                    "clickable": true,
                                    "nextEl": ".team-next",
                                    "prevEl": ".team-prev"
                                },  
                                "pagination": { "el": ".sw-pagination-team", "clickable": true },
                                "breakpoints": {
                                    "575": { "slidesPerView": 2, "slidesPerGroup": 1},
                                    "767": { "slidesPerView": 3, "slidesPerGroup": 1},
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
                                                <a href="{{ route('doctors.details') }}" class="tf-btn-plus style-color-title hover-bg-color-title">+</a>
                                                <a href="{{ route('doctors.details') }}" class="tf-btn style-small">
                                                    <span>Make Appointment</span>
                                                    <i class="icon-arrow-right"></i>
                                                </a>
                                            </div>
                                            <div class="item-content">
                                                <h4 class="name-team">
                                                    <a href="{{ route('doctors.details') }}" class="color-white">Rafael D. Bratcher</a>
                                                </h4>
                                                <a href="#" class="position color-text-3">
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
                                                <a href="{{ route('doctors.details') }}" class="tf-btn-plus style-color-title hover-bg-color-title">+</a>
                                                <a href="{{ route('doctors.details') }}" class="tf-btn style-small">
                                                    <span>Make Appointment</span>
                                                    <i class="icon-arrow-right"></i>
                                                </a>
                                            </div>
                                            <div class="item-content">
                                                <h4 class="name-team">
                                                    <a href="{{ route('doctors.details') }}" class="color-white">Santiago K. Wilson</a>
                                                </h4>
                                                <a href="#" class="position color-text-3">
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
                                                <a href="{{ route('doctors.details') }}" class="tf-btn-plus style-color-title hover-bg-color-title">+</a>
                                                <a href="{{ route('doctors.details') }}" class="tf-btn style-small">
                                                    <span>Make Appointment</span>
                                                    <i class="icon-arrow-right"></i>
                                                </a>
                                            </div>
                                            <div class="item-content">
                                                <h4 class="name-team">
                                                    <a href="{{ route('doctors.details') }}" class="color-white">Micheal C. Simmons</a>
                                                </h4>
                                                <a href="#" class="position color-text-3">
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
                                                <a href="{{ route('doctors.details') }}" class="tf-btn-plus style-color-title hover-bg-color-title">+</a>
                                                <a href="{{ route('doctors.details') }}" class="tf-btn style-small">
                                                    <span>Make Appointment</span>
                                                    <i class="icon-arrow-right"></i>
                                                </a>
                                            </div>
                                            <div class="item-content">
                                                <h4 class="name-team">
                                                    <a href="{{ route('doctors.details') }}" class="color-white">Columbus A. Davis</a>
                                                </h4>
                                                <a href="#" class="position color-text-3">
                                                    Neuro Surgeon
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="team-item hover-img style-2">
                                            <div class="top-item">
                                                <a href="{{ route('doctors.details') }}" class="image">
                                                    <img src="{{ asset('image/team-item/team-item-5.jpg') }}" data-src="{{ asset('image/team-item/team-item-5.jpg') }}" alt="" class=" lazyloaded">
                                                </a>
                                                <a href="{{ route('doctors.details') }}" class="tf-btn-plus style-color-title hover-bg-color-title">+</a>
                                                <a href="{{ route('doctors.details') }}" class="tf-btn style-small">
                                                    <span>Make Appointment</span>
                                                    <i class="icon-arrow-right"></i>
                                                </a>
                                            </div>
                                            <div class="item-content">
                                                <h4 class="name-team">
                                                    <a href="{{ route('doctors.details') }}" class="color-white">Rafael D. Bratcher</a>
                                                </h4>
                                                <a href="#" class="position color-text-3">
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
                                                <a href="{{ route('doctors.details') }}" class="tf-btn-plus style-color-title hover-bg-color-title">+</a>
                                                <a href="{{ route('doctors.details') }}" class="tf-btn style-small">
                                                    <span>Make Appointment</span>
                                                    <i class="icon-arrow-right"></i>
                                                </a>
                                            </div>
                                            <div class="item-content">
                                                <h4 class="name-team">
                                                    <a href="{{ route('doctors.details') }}" class="color-white">Santiago K. Wilson</a>
                                                </h4>
                                                <a href="#" class="position color-text-3">
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
                                                <a href="{{ route('doctors.details') }}" class="tf-btn-plus style-color-title hover-bg-color-title">+</a>
                                                <a href="{{ route('doctors.details') }}" class="tf-btn style-small">
                                                    <span>Make Appointment</span>
                                                    <i class="icon-arrow-right"></i>
                                                </a>
                                            </div>
                                            <div class="item-content">
                                                <h4 class="name-team">
                                                    <a href="{{ route('doctors.details') }}" class="color-white">Micheal C. Simmons</a>
                                                </h4>
                                                <a href="#" class="position color-text-3">
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
                                                <a href="{{ route('doctors.details') }}" class="tf-btn-plus style-color-title hover-bg-color-title">+</a>
                                                <a href="{{ route('doctors.details') }}" class="tf-btn style-small">
                                                    <span>Make Appointment</span>
                                                    <i class="icon-arrow-right"></i>
                                                </a>
                                            </div>
                                            <div class="item-content">
                                                <h4 class="name-team">
                                                    <a href="{{ route('doctors.details') }}" class="color-white">Columbus A. Davis</a>
                                                </h4>
                                                <a href="#" class="position color-text-3">
                                                    Neuro Surgeon
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-why p-about tf-spacing-11">
                <div class="tf-container">
                    <div class="heading-section text-center mb-70">
                        <h6 class="sub-title mb-10 color-paragraph text-anime">
                            Why Choose Us
                        </h6>
                        <h2 class="title mb-40 text-anime">
                            Leading the Way in Healthcare
                            <br>Vision Care Precision, Expertise
                        </h2>
                    </div>
                </div>
                <div class="tf-container">
                    <div class="row rg-30">
                        <div class="col-lg-6">
                            <div class="list-why-item position-relative">
                                <div class="why-item style-border px-mobile-sm wow fadeInUp">
                                    <div class="icon wow fadeInUp">
                                        <i class="icon-personalized-patient-care color-red"></i>
                                    </div>
                                    <div class="item-content">
                                        <h4 class="title wow fadeInUp" data-wow-delay=".2s"><a href="#">Personalized Patient Care</a></h4>
                                        <div class="desc wow fadeInUp" data-wow-delay=".2s">
                                            We take a compassionate, patient-centered approach, ensuring you feel comfortable and well-informed
                                        </div>
                                    </div>
                                </div>
                                <div class="why-item style-border px-mobile-sm wow fadeInUp">
                                    <div class="icon wow fadeInUp">
                                        <i class="icon-affordable color-red"></i>
                                    </div>
                                    <div class="item-content">
                                        <h4 class="title wow fadeInUp" data-wow-delay=".2s"><a href="#">Affordable & Transparent Pricing</a></h4>
                                        <div class="desc wow fadeInUp" data-wow-delay=".2s">
                                            Our commitment to clear, upfront pricing means you’ll always know the cost of your treatment before
                                        </div>
                                    </div>
                                </div>
                                <div class="why-item style-border px-mobile-sm wow fadeInUp">
                                    <div class="icon wow fadeInUp">
                                        <i class="icon-safety color-red"></i>
                                    </div>
                                    <div class="item-content">
                                        <h4 class="title wow fadeInUp" data-wow-delay=".2s"><a href="#">Safety & Hygiene Standards</a></h4>
                                        <div class="desc wow fadeInUp" data-wow-delay=".2s">
                                            At our eye care center, we prioritize the safety and well
                                            being of every patient by adhering to standards.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right">
                                <div class="image-section tf-animate-4">
                                    <img src="{{ asset('image/section/img-section-why-p-about.jpg') }}" data-src="{{ asset('image/section/img-section-why-p-about.jpg') }}" alt="" class="lazyload">
                                </div>
                                <div class="box-funfact style-bg-3 px-mobile-sm">
                                    <div class="rating flex">
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                    </div>

                                    <div class="counter-item position-relative">
                                        <div class="counter">
                                            <div class="number-counter flex align-items-center">
                                                <span class="number odometer color-primary" data-to="2000" data-inviewport="yes"> 0 </span>
                                                <span>+</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text body-2 lh-30">
                                        Experienced doctors
                                        <br>at your service
                                    </div>

                                    <div class="box-agent style-2 position-relative">
                                        <ul class="list-img flex">
                                            <li class="image"><img src="{{ asset('image/avatar/box-agent-4.jpg') }}" data-src="{{ asset('image/avatar/box-agent-4.jpg') }}" alt="" class="lazyload"></li>
                                            <li class="image"><img src="{{ asset('image/avatar/box-agent-5.jpg') }}" data-src="{{ asset('image/avatar/box-agent-5.jpg') }}" alt="" class="lazyload"></li>
                                            <li class="image"><img src="{{ asset('image/avatar/box-agent-6.jpg') }}" data-src="{{ asset('image/avatar/box-agent-6.jpg') }}" alt="" class="lazyload"></li>
                                            <li class="image"><img src="{{ asset('image/avatar/box-agent-7.jpg') }}" data-src="{{ asset('image/avatar/box-agent-7.jpg') }}" alt="" class="lazyload"></li>
                                            <li class="image plus">+</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-testimonials p-about flat-thumbs-tes mb-30">
                <div class="mx-30 flex g-30 list-testimonials flex-wrap">
                    <div class="left">
                        <div class="heading-section text-center mb-50">
                            <h6 class="sub-title mb-10 color-paragraph text-anime">
                                Our Testimonials
                            </h6>
                            <h2 class="title mb-40 text-anime">
                                Your Health, Our Commitment
                                <br>Hear from Our Patients
                            </h2>
                        </div>
                        <div class="sw-main-tes">
                            <div class="swiper tf-tes-main" data-space="1" data-space-lg="30">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="testimonials-item style-6 px-mobile-md">
                                            <div class="img-item">
                                                <img src="{{ asset('image/testimonials-item/item-tes-style-6.png') }}" data-src="{{ asset('image/testimonials-item/item-tes-style-6.png') }}" alt="" class="lazyload">
                                            </div>
                                            <div class="rating flex">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                            </div>
                                            <h4 class="title">
                                                <a href="#">"Exceptional Care and Compassion"</a>
                                            </h4>
                                            <div class="desc fs-30 lh-40 fw7 lsp-0">
                                                “The doctors and nurses at provided me with outstanding care. From the moment walked care
                                                expertise and kindness."
                                            </div>
                                            <div class="flex g-20 align-items-center">
                                                <div class="icon">
                                                    <i class="icon-groud-chat"></i>
                                                </div>
                                                <div class="user-testimonials flex align-items-end">
                                                    <h5 class="name-user"><a href="#">Nicolas M. Baldwin,</a></h5>
                                                    <a href="#" class="position">Businessman</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonials-item style-6 px-mobile-md">
                                            <div class="img-item">
                                                <img src="{{ asset('image/testimonials-item/item-tes-style-6.png') }}" data-src="{{ asset('image/testimonials-item/item-tes-style-6.png') }}" alt="" class="lazyload">
                                            </div>
                                            <div class="rating flex">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                            </div>
                                            <h4 class="title">
                                                <a href="#">"Exceptional Care and Compassion"</a>
                                            </h4>
                                            <div class="desc fs-30 lh-40 fw7 lsp-0">
                                                “The doctors and nurses at provided me with outstanding care. From the moment walked care
                                                expertise and kindness."
                                            </div>
                                            <div class="flex g-20 align-items-center">
                                                <div class="icon">
                                                    <i class="icon-groud-chat"></i>
                                                </div>
                                                <div class="user-testimonials flex align-items-end">
                                                    <h5 class="name-user"><a href="#">Nicolas M. Baldwin,</a></h5>
                                                    <a href="#" class="position">Businessman</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonials-item style-6 px-mobile-md">
                                            <div class="img-item">
                                                <img src="{{ asset('image/testimonials-item/item-tes-style-6.png') }}" data-src="{{ asset('image/testimonials-item/item-tes-style-6.png') }}" alt="" class="lazyload">
                                            </div>
                                            <div class="rating flex">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                            </div>
                                            <h4 class="title">
                                                <a href="#">"Exceptional Care and Compassion"</a>
                                            </h4>
                                            <div class="desc fs-30 lh-40 fw7 lsp-0">
                                                “The doctors and nurses at provided me with outstanding care. From the moment walked care
                                                expertise and kindness."
                                            </div>
                                            <div class="flex g-20 align-items-center">
                                                <div class="icon">
                                                    <i class="icon-groud-chat"></i>
                                                </div>
                                                <div class="user-testimonials flex align-items-end">
                                                    <h5 class="name-user"><a href="#">Nicolas M. Baldwin,</a></h5>
                                                    <a href="#" class="position">Businessman</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonials-item style-6 px-mobile-md">
                                            <div class="img-item">
                                                <img src="{{ asset('image/testimonials-item/item-tes-style-6.png') }}" data-src="{{ asset('image/testimonials-item/item-tes-style-6.png') }}" alt="" class="lazyload">
                                            </div>
                                            <div class="rating flex">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                            </div>
                                            <h4 class="title">
                                                <a href="#">"Exceptional Care and Compassion"</a>
                                            </h4>
                                            <div class="desc fs-30 lh-40 fw7 lsp-0">
                                                “The doctors and nurses at provided me with outstanding care. From the moment walked care
                                                expertise and kindness."
                                            </div>
                                            <div class="flex g-20 align-items-center">
                                                <div class="icon">
                                                    <i class="icon-groud-chat"></i>
                                                </div>
                                                <div class="user-testimonials flex align-items-end">
                                                    <h5 class="name-user"><a href="#">Nicolas M. Baldwin,</a></h5>
                                                    <a href="#" class="position">Businessman</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sw-pagination-tes sw-pagination justify-content-center style-color-red"></div>
                        </div>
                    </div>
                    <div class="swiper sw-thumb-tes tf-thumb-tes" data-space="1" data-space-lg="30">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="image">
                                    <img src="{{ asset('image/testimonials-item/tes-style-6-1.jpg') }}" data-src="{{ asset('image/testimonials-item/tes-style-6-1.jpg') }}" alt="" class="lazyload">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="image">
                                    <img src="{{ asset('image/testimonials-item/tes-style-6-1.jpg') }}" data-src="{{ asset('image/testimonials-item/tes-style-6-1.jpg') }}" alt="" class="lazyload">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="image">
                                    <img src="{{ asset('image/testimonials-item/tes-style-6-1.jpg') }}" data-src="{{ asset('image/testimonials-item/tes-style-6-1.jpg') }}" alt="" class="lazyload">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="image">
                                    <img src="{{ asset('image/testimonials-item/tes-style-6-1.jpg') }}" data-src="{{ asset('image/testimonials-item/tes-style-6-1.jpg') }}" alt="" class="lazyload">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-banner h-1 p-about mb-30 mx-30">
                <div class="wg-banner">
                    <div class="tf-container">
                        <div class="banner-inner tf-spacing-2">
                            <div class="banner-content">
                                <h6 class="sub-title mb-10 text-anime">
                                    Make an Appointment
                                </h6>
                                <h2 class="title mb-30 text-anime">
                                    Looking for professionals &
                                    <br>trusted medical healthcare?
                                    <br>you're in the right place.
                                </h2>
                                <div class="benefit-list flex flex-wrap rg-30 g-50 mb-40">
                                    <div class="benefit-items body-2 wow fadeInUp" data-wow-delay=".6s">
                                        <i class="icon-check"></i>
                                        <span class="body-2">Advanced Medical Technology</span>
                                    </div>
                                    <div class="benefit-items body-2 wow fadeInUp" data-wow-delay=".8s">
                                        <i class="icon-check"></i>
                                        <span class="body-2">Specialized Treatments & Services</span>
                                    </div>
                                </div>
                                <div class=" wow fadeInUp" data-wow-delay="0.8s">
                                    <a href="{{ route('appointment') }}" class="tf-btn hover-bg-white">
                                        <span>Make Appointment</span>
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="image img-item tf-animate-3">
                                <img src="{{ asset('image/section/banner-item.png') }}" data-src="{{ asset('image/section/banner-item.png') }}" alt="" class="lazyload">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="wg-brand mb-30 mx-30">
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

        </div>
@endsection
