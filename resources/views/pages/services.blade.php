@extends('layouts.app')

@section('title', 'Our Services - Clineva')

@section('content')
<div class="page-title mt-30">
            <div class="mx-30">
                <div class="page-title-content paralax-bg">
                    <h1 class="title">
                        Our Services
                    </h1>
                    <div class="breadkcum">
                        <h3><a href="{{ route('home') }}" class="link-breadkcum">Home</a></h3>
                        <span class="dot bg-white mx-25"></span>
                        <h3 class="page-breadkcum pl-0">Our services</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-content">

            <section class="section-services p-services tf-spacing-1">
                <div class="tf-container">
                    <div class="heading-section text-center mb-70">
                        <h6 class="sub-title mb-10 text-anime">
                            Explore Medical Department
                        </h6>
                        <h2 class="title mb-40 text-anime">
                            Complete Health Solutions – Because
                            <br>You Deserve the Best
                        </h2>
                    </div>
                </div>

                <div class="tf-container">
                    <div class="row rg-30">

                        <div class="col-lg-4 col-md-6">
                            <div class="department-item style-2 hover-img style-border">
                                <div class="top-item">
                                    <a href="{{ route('services.details') }}" class="image">
                                        <img src="{{ asset('image/department-item/department-item-1.jpg') }}" data-src="{{ asset('image/department-item/department-item-1.jpg') }}" alt="" class=" ls-is-cached lazyloaded">
                                    </a>
                                    <div class="item-icon bg-white">
                                        <i class="icon-mental-health"></i>
                                    </div>
                                </div>
                                <div class="item-content px-mobile-sm">

                                    <h4 class="title">
                                        <a href="{{ route('services.details') }}">
                                            Mental Health &amp; Wellness
                                        </a>
                                    </h4>

                                    <div class="desc">
                                        Counseling, therapy, and psychiatric
                                        care for mental well-being.
                                    </div>

                                    <a href="{{ route('services.details') }}" class="tf-btn style-small style-gray-light">
                                        <span class="fw6 lsp-0">Read more</span>
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="department-item style-2 hover-img style-border">
                                <div class="top-item">
                                    <a href="{{ route('services.details') }}" class="image">
                                        <img src="{{ asset('image/department-item/department-item-2.jpg') }}" data-src="{{ asset('image/department-item/department-item-2.jpg') }}" alt="" class=" ls-is-cached lazyloaded">
                                    </a>
                                    <div class="item-icon bg-white">
                                        <i class="icon-emergency"></i>
                                    </div>
                                </div>
                                <div class="item-content px-mobile-sm">

                                    <h4 class="title">
                                        <a href="{{ route('services.details') }}">
                                            Emergency & Urgent Care
                                        </a>
                                    </h4>

                                    <div class="desc">
                                        24/7 medical assistance for accidents, and critical health conditions.
                                    </div>

                                    <a href="{{ route('services.details') }}" class="tf-btn style-small style-gray-light">
                                        <span class="fw6 lsp-0">Read more</span>
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="department-item style-2 hover-img style-border">
                                <div class="top-item">
                                    <a href="{{ route('services.details') }}" class="image">
                                        <img src="{{ asset('image/department-item/department-item-3.jpg') }}" data-src="{{ asset('image/department-item/department-item-3.jpg') }}" alt="" class=" ls-is-cached lazyloaded">
                                    </a>
                                    <div class="item-icon bg-white">
                                        <i class="icon-diagnostic"></i>
                                    </div>
                                </div>
                                <div class="item-content px-mobile-sm">

                                    <h4 class="title">
                                        <a href="{{ route('services.details') }}">
                                            Diagnostic & Laboratory
                                        </a>
                                    </h4>

                                    <div class="desc">
                                        Blood tests, imaging (X-rays, MRIs, CT
                                        scans), and screenings diagnosis.
                                    </div>

                                    <a href="{{ route('services.details') }}" class="tf-btn style-small style-gray-light">
                                        <span class="fw6 lsp-0">Read more</span>
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="department-item style-2 hover-img style-border">
                                <div class="top-item">
                                    <a href="{{ route('services.details') }}" class="image">
                                        <img src="{{ asset('image/department-item/department-item-4.jpg') }}" data-src="{{ asset('image/department-item/department-item-4.jpg') }}" alt="" class=" ls-is-cached lazyloaded">
                                    </a>
                                    <div class="item-icon bg-white">
                                        <i class="icon-maternity"></i>
                                    </div>
                                </div>
                                <div class="item-content px-mobile-sm">

                                    <h4 class="title">
                                        <a href="{{ route('services.details') }}">
                                            Maternity & Pediatric Care
                                        </a>
                                    </h4>

                                    <div class="desc">
                                        Comprehensive care for expecting
                                        mothers, newborns, children’s health.
                                    </div>

                                    <a href="{{ route('services.details') }}" class="tf-btn style-small style-gray-light">
                                        <span class="fw6 lsp-0">Read more</span>
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="department-item style-2 hover-img style-border">
                                <div class="top-item">
                                    <a href="{{ route('services.details') }}" class="image">
                                        <img src="{{ asset('image/department-item/department-item-5.jpg') }}" data-src="{{ asset('image/department-item/department-item-5.jpg') }}" alt="" class=" ls-is-cached lazyloaded">
                                    </a>
                                    <div class="item-icon bg-white">
                                        <i class="icon-dental-care-services"></i>
                                    </div>
                                </div>
                                <div class="item-content px-mobile-sm">

                                    <h4 class="title">
                                        <a href="{{ route('services.details') }}">
                                            Dental Care Services
                                        </a>
                                    </h4>

                                    <div class="desc">
                                        Our Dental Care Services are designed
                                        to provide comprehensive
                                    </div>

                                    <a href="{{ route('services.details') }}" class="tf-btn style-small style-gray-light">
                                        <span class="fw6 lsp-0">Read more</span>
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="department-item style-2 hover-img style-border">
                                <div class="top-item">
                                    <a href="{{ route('services.details') }}" class="image">
                                        <img src="{{ asset('image/department-item/department-item-6.jpg') }}" data-src="{{ asset('image/department-item/department-item-6.jpg') }}" alt="" class=" ls-is-cached lazyloaded">
                                    </a>
                                    <div class="item-icon bg-white">
                                        <i class="icon-surgery-care"></i>
                                    </div>
                                </div>
                                <div class="item-content px-mobile-sm">

                                    <h4 class="title">
                                        <a href="{{ route('services.details') }}">
                                            Surgery Care
                                        </a>
                                    </h4>

                                    <div class="desc">
                                        Our Surgery Care services provide
                                        expert, compassionate
                                    </div>

                                    <a href="{{ route('services.details') }}" class="tf-btn style-small style-gray-light">
                                        <span class="fw6 lsp-0">Read more</span>
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="section-lab p-services tf-spacing-1 mx-30">
                <div class="img-item item-1 tf-animate-1">
                    <img src="{{ asset('image/section/bg-section-lab-1.png') }}" data-src="{{ asset('image/section/bg-section-lab-1.png') }}" alt="" class="lazyload">
                </div>
                <div class="img-item item-2 tf-animate-4">
                    <img src="{{ asset('image/section/bg-section-lab-1.png') }}" data-src="{{ asset('image/section/bg-section-lab-1.png') }}" alt="" class="lazyload">
                </div>
                <div class="tf-container">
                    <div class="section-lab-inner">
                        <div class="heading-section flex align-items-end justify-content-between flex-wrap g-30 rg-10 mb-70">
                            <div class="left">
                                <h6 class="sub-title mb-10 text-anime">
                                    Lab Testing & Facilitises
                                </h6>
                                <h2 class="title text-anime">
                                    We Have Modern Lab & Machine,
                                    <br>Booking For Quality Test
                                </h2>
                            </div>

                            <div class="list-btn flex align-items-center g-20">
                                <div class="wow fadeInUp" data-wow-delay=".4s">
                                    <a class="arrow-btn style-border bg-white arrow-prev lab-prev">
                                        <i class="icon-arrow-left"></i>
                                    </a>
                                </div>
                                <div class="wow fadeInUp" data-wow-delay=".6s">
                                    <a class="arrow-btn style-border bg-white arrow-next lab-next">
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper tf-swiper sw-lab" data-swiper='{
                                "slidesPerView": 1,
                                "spaceBetween": 30,
                                 "navigation": {
                                    "clickable": true,
                                    "nextEl": ".lab-next",
                                    "prevEl": ".lab-prev"
                                },  
                                "pagination": { "el": ".sw-pagination-lab", "clickable": true },
                                "breakpoints": {
                                    "575": { "slidesPerView": 2, "slidesPerGroup": 1},
                                    "1150": { "slidesPerView": 4, "slidesPerGroup": 1}
                                    }
                                }'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="lab-item discount px-mobile-sm">
                                        <span class="discount-number caption-1">40% OFF</span>

                                        <div class="icon">
                                            <img src="{{ asset('image/icon/mri.svg') }}" data-src="{{ asset('image/icon/mri.svg') }}" alt="" class="lazyload">
                                        </div>

                                        <h5 class="name-lab lh-30">
                                            <a href="#">MRI (Magnetic Resonance Imaging)</a>
                                        </h5>

                                        <div class="desc">
                                            Uses strong magnets & radio
                                            waves create detailed images.
                                        </div>

                                        <div class="line"></div>

                                        <div class="price">
                                            <span class="fw5">Regular Price :</span>
                                            <h5> $150</h5>
                                        </div>

                                        <a href="#" class="tf-btn style-small style-gray-light">
                                            <span>Booking For A Test</span>
                                            <i class="icon-arrow-right"></i>
                                        </a>

                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="lab-item discount px-mobile-sm">
                                        <span class="discount-number caption-1">40% OFF</span>

                                        <div class="icon">
                                            <img src="{{ asset('image/icon/x-rays.svg') }}" data-src="{{ asset('image/icon/x-rays.svg') }}" alt="" class="lazyload">
                                        </div>

                                        <h5 class="name-lab lh-30">
                                            <a href="#">
                                                X-rays, CT Scan
                                                (Tomography)
                                            </a>
                                        </h5>

                                        <div class="desc">
                                            Used to view bones and detect fractures, infections.
                                        </div>

                                        <div class="line"></div>

                                        <div class="price">
                                            <span class="fw5">Regular Price :</span>
                                            <h5> $320</h5>
                                        </div>

                                        <a href="#" class="tf-btn style-small style-gray-light">
                                            <span>Booking For A Test</span>
                                            <i class="icon-arrow-right"></i>
                                        </a>

                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="lab-item discount px-mobile-sm">
                                        <span class="discount-number caption-1">40% OFF</span>

                                        <div class="icon">
                                            <img src="{{ asset('image/icon/ecg.svg') }}" data-src="{{ asset('image/icon/ecg.svg') }}" alt="" class="lazyload">
                                        </div>

                                        <h5 class="name-lab lh-30">
                                            <a href="#">
                                                (ECG)
                                                Electrocardiogram
                                            </a>
                                        </h5>

                                        <div class="desc">
                                            Measures electrical activity
                                            of heart and can detect.
                                        </div>

                                        <div class="line"></div>

                                        <div class="price">
                                            <span class="fw5">Regular Price :</span>
                                            <h5> $430</h5>
                                        </div>

                                        <a href="#" class="tf-btn style-small style-gray-light">
                                            <span>Booking For A Test</span>
                                            <i class="icon-arrow-right"></i>
                                        </a>

                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="lab-item discount px-mobile-sm">
                                        <span class="discount-number caption-1">40% OFF</span>

                                        <div class="icon">
                                            <img src="{{ asset('image/icon/cbc.svg') }}" data-src="{{ asset('image/icon/cbc.svg') }}" alt="" class="lazyload">
                                        </div>

                                        <h5 class="name-lab lh-30">
                                            <a href="#">(CBC) Complete Blood Count</a>
                                        </h5>

                                        <div class="desc">
                                            Measures overall health and detects various disorders.
                                        </div>

                                        <div class="line"></div>

                                        <div class="price">
                                            <span class="fw5">Regular Price :</span>
                                            <h5> $130</h5>
                                        </div>

                                        <a href="#" class="tf-btn style-small style-gray-light">
                                            <span>Booking For A Test</span>
                                            <i class="icon-arrow-right"></i>
                                        </a>

                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="lab-item discount px-mobile-sm">
                                        <span class="discount-number caption-1">40% OFF</span>

                                        <div class="icon">
                                            <img src="{{ asset('image/icon/mri.svg') }}" data-src="{{ asset('image/icon/mri.svg') }}" alt="" class="lazyload">
                                        </div>

                                        <h5 class="name-lab lh-30">
                                            <a href="#">MRI (Magnetic Resonance Imaging)</a>
                                        </h5>

                                        <div class="desc">
                                            Uses strong magnets & radio
                                            waves create detailed images.
                                        </div>

                                        <div class="line"></div>

                                        <div class="price">
                                            <span class="fw5">Regular Price :</span>
                                            <h5> $150</h5>
                                        </div>

                                        <a href="#" class="tf-btn style-small style-gray-light">
                                            <span>Booking For A Test</span>
                                            <i class="icon-arrow-right"></i>
                                        </a>

                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="lab-item discount px-mobile-sm">
                                        <span class="discount-number caption-1">40% OFF</span>

                                        <div class="icon">
                                            <img src="{{ asset('image/icon/x-rays.svg') }}" data-src="{{ asset('image/icon/x-rays.svg') }}" alt="" class="lazyload">
                                        </div>

                                        <h5 class="name-lab lh-30">
                                            <a href="#">
                                                X-rays, CT Scan
                                                ( Tomography)
                                            </a>
                                        </h5>

                                        <div class="desc">
                                            Used to view bones and detect fractures, infections.
                                        </div>

                                        <div class="line"></div>

                                        <div class="price">
                                            <span class="fw5">Regular Price :</span>
                                            <h5> $320</h5>
                                        </div>

                                        <a href="#" class="tf-btn style-small style-gray-light">
                                            <span>Booking For A Test</span>
                                            <i class="icon-arrow-right"></i>
                                        </a>

                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="lab-item discount px-mobile-sm">
                                        <span class="discount-number caption-1">40% OFF</span>

                                        <div class="icon">
                                            <img src="{{ asset('image/icon/ecg.svg') }}" data-src="{{ asset('image/icon/ecg.svg') }}" alt="" class="lazyload">
                                        </div>

                                        <h5 class="name-lab lh-30">
                                            <a href="#">
                                                (ECG)
                                                Electrocardiogram
                                            </a>
                                        </h5>

                                        <div class="desc">
                                            Measures electrical activity
                                            of heart and can detect.
                                        </div>

                                        <div class="line"></div>

                                        <div class="price">
                                            <span class="fw5">Regular Price :</span>
                                            <h5> $430</h5>
                                        </div>

                                        <a href="#" class="tf-btn style-small style-gray-light">
                                            <span>Booking For A Test</span>
                                            <i class="icon-arrow-right"></i>
                                        </a>

                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="lab-item discount px-mobile-sm">
                                        <span class="discount-number caption-1">40% OFF</span>

                                        <div class="icon">
                                            <img src="{{ asset('image/icon/cbc.svg') }}" data-src="{{ asset('image/icon/cbc.svg') }}" alt="" class="lazyload">
                                        </div>

                                        <h5 class="name-lab lh-30">
                                            <a href="#">(CBC) Complete Blood Count</a>
                                        </h5>

                                        <div class="desc">
                                            Measures overall health and detects various disorders.
                                        </div>

                                        <div class="line"></div>

                                        <div class="price">
                                            <span class="fw5">Regular Price :</span>
                                            <h5> $130</h5>
                                        </div>

                                        <a href="#" class="tf-btn style-small style-gray-light">
                                            <span>Booking For A Test</span>
                                            <i class="icon-arrow-right"></i>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-why p-about tf-spacing-1">
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
                                <div class="why-item style-border px-mobile-sm">
                                    <div class="icon wow fadeInUp">
                                        <i class="icon-personalized-patient-care color-red"></i>
                                    </div>
                                    <div class="item-content">
                                        <h4 class="title wow fadeInUp" data-wow-delay=".1s"><a href="#">Personalized Patient Care</a></h4>
                                        <div class="desc wow fadeInUp" data-wow-delay=".1s">
                                            We take a compassionate, patient-centered approach, ensuring you feel comfortable and well-informed
                                        </div>
                                    </div>
                                </div>
                                <div class="why-item style-border px-mobile-sm">
                                    <div class="icon wow fadeInUp">
                                        <i class="icon-affordable color-red"></i>
                                    </div>
                                    <div class="item-content">
                                        <h4 class="title wow fadeInUp" data-wow-delay=".1s"><a href="#">Affordable &amp; Transparent Pricing</a></h4>
                                        <div class="desc wow fadeInUp" data-wow-delay=".1s">
                                            Our commitment to clear, upfront pricing means you’ll always know the cost of your treatment before
                                        </div>
                                    </div>
                                </div>
                                <div class="why-item style-border px-mobile-sm">
                                    <div class="icon wow fadeInUp">
                                        <i class="icon-safety color-red"></i>
                                    </div>
                                    <div class="item-content">
                                        <h4 class="title wow fadeInUp" data-wow-delay=".1s"><a href="#">Safety &amp; Hygiene Standards</a></h4>
                                        <div class="desc wow fadeInUp" data-wow-delay=".1s">
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
                                    <img src="{{ asset('image/section/img-section-why-p-about.jpg') }}" data-src="{{ asset('image/section/img-section-why-p-about.jpg') }}" alt="" class=" lazyloaded">
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
                                                <span class="number color-primary odometer odometer-auto-theme" data-to="2000" data-inviewport="yes"></span>
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
                                            <li class="image"><img src="{{ asset('image/avatar/box-agent-4.jpg') }}" data-src="{{ asset('image/avatar/box-agent-4.jpg') }}" alt="" class=" lazyloaded"></li>
                                            <li class="image"><img src="{{ asset('image/avatar/box-agent-5.jpg') }}" data-src="{{ asset('image/avatar/box-agent-5.jpg') }}" alt="" class=" lazyloaded"></li>
                                            <li class="image"><img src="{{ asset('image/avatar/box-agent-6.jpg') }}" data-src="{{ asset('image/avatar/box-agent-6.jpg') }}" alt="" class=" lazyloaded"></li>
                                            <li class="image"><img src="{{ asset('image/avatar/box-agent-7.jpg') }}" data-src="{{ asset('image/avatar/box-agent-7.jpg') }}" alt="" class=" lazyloaded"></li>
                                            <li class="image plus">+</li>
                                        </ul>
                                    </div>
                                </div>
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
