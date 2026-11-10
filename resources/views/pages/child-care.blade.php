@extends('layouts.app')

@section('title', 'Child Care Clinic - Clineva')

@section('content')
<div class="page-title-home h-4">
            <div class="page-title-inner flex g-10">
                <div class="item-page-title item-1">
                    <div class="circle-line"></div>
                    <div class="img img-1">
                        <img src="{{ asset('image/page-title/page-title-h4-1.jpg') }}" data-src="{{ asset('image/page-title/page-title-h4-1.jpg') }}" alt="" class="lazyload">
                    </div>
                </div>
                <div class="item-page-title item-2">
                    <div class="circle-line"></div>
                    <div class="img img-2">
                        <img src="{{ asset('image/page-title/page-title-h4-2.jpg') }}" data-src="{{ asset('image/page-title/page-title-h4-2.jpg') }}" alt="" class="lazyload">
                    </div>
                </div>

                <div class="tf-container">
                    <div class="page-title-content position-relative text-center z-5">
                        <h4 class="sub-title lsp-0">We’re Professional & Experience Childcare Center</h4>
                        <div class="title position-relative">
                            Nurturing Little Minds,
                            <br>Shaping Bright Futures
                        </div>
                        <div class="list-btn flex align-items-center flex-wrap justify-content-center position-relative z-5 g-10">
                            <a href="{{ route('pricing') }}" class="tf-btn bg-yellow-3 hover-boder-white">
                                <span>Schedule Now</span>
                                <i class="icon-arrow-right"></i>
                            </a>
                            <a href="{{ route('about') }}" class="tf-btn style-border border-color-white hover-bg-yellow-3">
                                <span>Learn more us</span>
                                <i class="icon-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tf-container">
                <div class="wg-video">
                    <a href="https://www.youtube.com/watch?v=XHOmBV4js_E" class="popup-youtube">
                        <div class="icon">
                            <i class="icon-play"></i>
                        </div>
                        <div class="wave"></div>
                        <div class="wave"></div>
                        <div class="wave"></div>
                    </a>
                </div>
            </div>
        </div>

        <div class="main-content">
            <section class="section-features section-features-1-h-4 h-4 tf-spacing-1">
                <div class="tf-container">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="section-content">
                                <div class="heading-section flex align-items-end justify-content-between g-10">
                                    <div class="left">
                                        <h6 class="sub-title mb-10 color-paragraph text-anime">
                                            Bright Beginnings
                                        </h6>
                                        <h2 class="title color-black-4 text-anime">
                                            Growing with Love
                                            Nurturing the Future, One Child at a Time!
                                        </h2>
                                    </div>
                                    <div class="list-btn flex flex-column g-10">
                                        <div class="text-anime-wave" data-delay=".1s">
                                            <a class="arrow-btn style-2 style-border border-color-border-9 arrow-prev features-prev">
                                                <i class="icon-arrow-left"></i>
                                            </a>
                                        </div>
                                        <div class="text-anime-wave" data-delay=".2s">
                                            <a class="arrow-btn style-2 style-border border-color-border-9 arrow-next features-next">
                                                <i class="icon-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="swiper tf-swiper sw-features-3" data-swiper='{
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
                                            "767": { "slidesPerView": 2, "slidesPerGroup": 2}
                                        }
                                    }'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="features-item style-4">
                                            <div class="icon">
                                                <i class="icon-primary-care"></i>
                                            </div>
                                            <h4 class="title-box"><a href="{{ route('services.details') }}">Primary Care</a></h4>
                                            <div class="desc">We provide compassionate and primary care support.</div>
                                            <a href="#" class="tf-btn no-bg">
                                                <span>Read more</span>
                                                <i class="icon-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="features-item style-4">
                                            <div class="icon">
                                                <i class="icon-special-care"></i>
                                            </div>
                                            <h4 class="title-box"><a href="{{ route('services.details') }}">Special Care</a></h4>
                                            <div class="desc">We understand that some individuals require extra.</div>
                                            <a href="#" class="tf-btn no-bg">
                                                <span>Read more</span>
                                                <i class="icon-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="features-item style-4">
                                            <div class="icon">
                                                <i class="icon-primary-care"></i>
                                            </div>
                                            <h4 class="title-box"><a href="{{ route('services.details') }}">Primary Care</a></h4>
                                            <div class="desc">We provide compassionate and primary care support.</div>
                                            <a href="#" class="tf-btn no-bg">
                                                <span>Read more</span>
                                                <i class="icon-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="features-item style-4">
                                            <div class="icon">
                                                <i class="icon-special-care"></i>
                                            </div>
                                            <h4 class="title-box"><a href="{{ route('services.details') }}">Special Care</a></h4>
                                            <div class="desc">We understand that some individuals require extra.</div>
                                            <a href="#" class="tf-btn no-bg">
                                                <span>Read more</span>
                                                <i class="icon-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sw-pagination-features sw-pagination d-xl-none mt-15 justify-content-center"></div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="line-h4"></div>

            <section class="section-features section-features-2-h-4 h-4 tf-spacing-1">
                <div class="image img-item tf-animate-1">
                    <img src="{{ asset('image/section/img-features-2-h4.jpg') }}" data-src="{{ asset('image/section/img-features-2-h4.jpg') }}" alt="" class="lazyload">
                </div>
                <div class="tf-container">
                    <div class="row justify-content-end">
                        <div class="col-lg-6">
                            <div class="section-content">

                                <div class="heading-section mb-40">
                                    <h2 class="title mb-30 text-anime">
                                        Dedicated to Your Child’s Health, Growth, & Happiness
                                    </h2>
                                    <div class="text wow fadeInUp" data-wow-delay=".2s">
                                        Early learning programs to fun and engaging playtime, we focus on fostering creativity, social development, and emotional well-being. With a commitment to safety and a warm, welcoming atmosphere,
                                    </div>
                                </div>

                                <div class="features-list-item item-1">
                                    <h6 class="number-item wow fadeInUp" data-wow-delay=".2s">
                                        1
                                    </h6>
                                    <div class="item-content">
                                        <h5 class="title wow fadeInUp" data-wow-delay=".3s"><a href="#">Medical Facilities & Equipment</a></h5>
                                        <div class=" wow fadeInUp" data-wow-delay=".3s">
                                            <p class="desc">Modern technology and diagnostic tools for accurate and effective treatments.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="features-list-item item-1">
                                    <h6 class="number-item bg-yellow-3 wow fadeInUp" data-wow-delay=".2s">
                                        2
                                    </h6>
                                    <div class="item-content">
                                        <h5 class="title wow fadeInUp" data-wow-delay=".3s"><a href="#">Nutritional Guidance & Support</a></h5>
                                        <div class=" wow fadeInUp" data-wow-delay=".3s">
                                            <p class="desc">Expert advice on diet and nutrition for proper growth and a strong immune system.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="features-list-item item-1">
                                    <h6 class="number-item bg-blue-3 wow fadeInUp" data-wow-delay=".2s">
                                        3
                                    </h6>
                                    <div class="item-content">
                                        <h5 class="title wow fadeInUp" data-wow-delay=".3s"><a href="#">Mental Health & Behavioral Support</a></h5>
                                        <div class=" wow fadeInUp" data-wow-delay=".3s">
                                            <p class="desc">Counseling and early intervention emotional well-being and developmental disorders.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-services h-4 tf-spacing-1">
                <div class="tf-container">
                    <div class="heading-section text-center mb-70">
                        <h6 class="sub-title mb-10 color-paragraph text-anime">
                            Services We Provide
                        </h6>
                        <h2 class="title text-anime">
                            Tailored Health Care Solutions for
                            <br>Growing Children
                        </h2>
                    </div>
                </div>
                <div class="tf-container w-1760">
                    <div class="swiper tf-swiper sw-services" data-swiper='{
                                "slidesPerView": 1,
                                "spaceBetween": 30,
                                "speed": 800,
                                "pagination": { "el": ".sw-pagination-services", "clickable": true },
                                "breakpoints": {
                                    "575": { "slidesPerView": 2, "slidesPerGroup": 2},
                                    "991": { "slidesPerView": 3, "slidesPerGroup": 3},
                                    "1150": { "slidesPerView": 4, "slidesPerGroup": 1}
                                    }
                                }'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="services-item style-2">
                                    <div class="icon">
                                        <i class="icon-pediatric-check"></i>
                                    </div>
                                    <h4>
                                        <a href="{{ route('services.details') }}" class="title">Pediatric Check-Ups</a>
                                    </h4>
                                    <a href="{{ route('services.details') }}" class="image">
                                        <img src="{{ asset('image/services-item/services-item-1.png') }}" data-src="{{ asset('image/services-item/services-item-1.png') }}" alt="" class="lazyload">
                                    </a>
                                    <div class="desc">
                                        Regular health assessments to monitor
                                        growth and development.
                                    </div>
                                    <div class="bottom-btn">
                                        <a href="{{ route('services.details') }}" class="tf-btn style-notext style-border border-color-border-9">
                                            <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="services-item style-2">
                                    <div class="icon">
                                        <i class="icon-nutrition-dietary"></i>
                                    </div>
                                    <h4>
                                        <a href="{{ route('services.details') }}" class="title">Nutrition & Dietary Guidance</a>
                                    </h4>
                                    <a href="{{ route('services.details') }}" class="image">
                                        <img src="{{ asset('image/services-item/services-item-2.png') }}" data-src="{{ asset('image/services-item/services-item-2.png') }}" alt="" class="lazyload">
                                    </a>
                                    <div class="desc">
                                        We provide expert nutrition and dietary
                                        guidance ensure children receive.
                                    </div>
                                    <div class="bottom-btn">
                                        <a href="{{ route('services.details') }}" class="tf-btn style-notext style-border border-color-border-9">
                                            <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>

                            </div>
                            <div class="swiper-slide">
                                <div class="services-item style-2">
                                    <div class="icon">
                                        <i class="icon-pediatric-physical"></i>
                                    </div>
                                    <h4>
                                        <a href="{{ route('services.details') }}" class="title">Pediatric Physical Therapy</a>
                                    </h4>
                                    <a href="{{ route('services.details') }}" class="image">
                                        <img src="{{ asset('image/services-item/services-item-3.png') }}" data-src="{{ asset('image/services-item/services-item-3.png') }}" alt="" class="lazyload">
                                    </a>
                                    <div class="desc">
                                        Pediatric Physical Therapy services are
                                        designed to help children develop.
                                    </div>
                                    <div class="bottom-btn">
                                        <a href="{{ route('services.details') }}" class="tf-btn style-notext style-border border-color-border-9">
                                            <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>

                            </div>
                            <div class="swiper-slide">
                                <div class="services-item style-2">
                                    <div class="icon">
                                        <i class="icon-inpatient-care"></i>
                                    </div>
                                    <h4>
                                        <a href="{{ route('services.details') }}" class="title">Inpatient Care Unit</a>
                                    </h4>
                                    <a href="{{ route('services.details') }}" class="image">
                                        <img src="{{ asset('image/services-item/services-item-4.png') }}" data-src="{{ asset('image/services-item/services-item-4.png') }}" alt="" class="lazyload">
                                    </a>
                                    <div class="desc">
                                        Our Inpatient Care Unit provides 24/7
                                        medical attention, advanced.
                                    </div>
                                    <div class="bottom-btn">
                                        <a href="{{ route('services.details') }}" class="tf-btn style-notext style-border border-color-border-9">
                                            <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="sw-pagination-services sw-pagination d-xl-none mt-15 justify-content-center"></div>

                </div>
            </section>

            <section class="section-team h-4 tf-spacing-1">
                <div class="heading-section mb-64">
                    <div class="tf-container">
                        <div class="row align-items-center rg-30">
                            <div class="col-lg-6">
                                <h6 class="sub-title mb-10 color-paragraph text-anime">
                                    Meet Our Doctors
                                </h6>
                                <h2 class="title text-anime">
                                    Meet Child Health Experts
                                </h2>
                            </div>
                            <div class="col-lg-6">
                                <div class="right flex align-items-center justify-content-between g-30">
                                    <div class="text wow fadeInUp" data-wow-delay=".2s">
                                        We offer personalized treatment plans
                                        advanced diagnostic tools such as MRI and
                                        EEG, and cutting-edge therapies.
                                    </div>
                                    <div class=" wow fadeInUp" data-wow-delay=".4s">
                                        <a href="{{ route('doctors') }}" class="tf-btn hover-bg-yellow-3 style-black-4 w-max-content">
                                            <span>Schedule Now</span>
                                            <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tf-container">
                    <div class="row rg-30">
                        <div class="col-xl-6">
                            <div class="team-item-list hover-img style-2">
                                <div class="left">
                                    <a href="{{ route('doctors.details') }}" class="image">
                                        <img src="{{ asset('image/team-item/team-item-list-1.jpg') }}" data-src="{{ asset('image/team-item/team-item-list-1.jpg') }}" alt="" class=" lazyloaded">
                                    </a>
                                    <a href="#" class="tf-btn-plus hover-bg-yellow-3 style-color-title boder-radius-50">+</a>

                                    <ul class="post-social style-border flex-column">
                                        <li><a href="#" class="icon-social"><i class="icon-facebook"></i></a></li>
                                        <li><a href="#" class="icon-social"><i class="icon-twitter"></i></a></li>
                                        <li><a href="#" class="icon-social"><i class="icon-linkedin2"></i></a></li>
                                        <li><a href="#" class="icon-social"><i class="icon-instagram"></i></a></li>
                                    </ul>
                                </div>
                                <div class="item-content">

                                    <div class="top">
                                        <h4 class="name-team">
                                            <a href="{{ route('doctors.details') }}">Rafael D. Bratcher</a>
                                        </h4>

                                        <a href="#" class="position">
                                            Neurologist
                                        </a>
                                        <div class="desc">
                                            Highly skilled neuro specialize
                                            in diagnosing and treating.
                                        </div>
                                    </div>

                                    <a href="{{ route('doctors.details') }}" class="tf-btn style-border border-color-border-9 hover-bg-yellow-3 style-small ">
                                        <span>Schedule Now</span>
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="team-item-list hover-img style-2">
                                <div class="left">
                                    <a href="{{ route('doctors.details') }}" class="image">
                                        <img src="{{ asset('image/team-item/team-item-list-2.jpg') }}" data-src="{{ asset('image/team-item/team-item-list-2.jpg') }}" alt="" class=" lazyloaded">
                                    </a>
                                    <a href="#" class="tf-btn-plus hover-bg-yellow-3 style-color-title boder-radius-50">+</a>

                                    <ul class="post-social style-border flex-column">
                                        <li><a href="#" class="icon-social"><i class="icon-facebook"></i></a></li>
                                        <li><a href="#" class="icon-social"><i class="icon-twitter"></i></a></li>
                                        <li><a href="#" class="icon-social"><i class="icon-linkedin2"></i></a></li>
                                        <li><a href="#" class="icon-social"><i class="icon-instagram"></i></a></li>
                                    </ul>
                                </div>
                                <div class="item-content">

                                    <div class="top">
                                        <h4 class="name-team">
                                            <a href="{{ route('doctors.details') }}">Timothy G. Bayless</a>
                                        </h4>

                                        <a href="#" class="position">
                                            Medicine Specialist
                                        </a>
                                        <div class="desc">
                                            Highly skilled neuro specialize
                                            in diagnosing and treating.
                                        </div>
                                    </div>

                                    <a href="{{ route('doctors.details') }}" class="tf-btn style-border border-color-border-9 hover-bg-yellow-3 style-small ">
                                        <span>Schedule Now</span>
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="team-item-list hover-img style-2">
                                <div class="left">
                                    <a href="{{ route('doctors.details') }}" class="image">
                                        <img src="{{ asset('image/team-item/team-item-list-3.jpg') }}" data-src="{{ asset('image/team-item/team-item-list-3.jpg') }}" alt="" class=" lazyloaded">
                                    </a>
                                    <a href="#" class="tf-btn-plus hover-bg-yellow-3 style-color-title boder-radius-50">+</a>

                                    <ul class="post-social style-border flex-column">
                                        <li><a href="#" class="icon-social"><i class="icon-facebook"></i></a></li>
                                        <li><a href="#" class="icon-social"><i class="icon-twitter"></i></a></li>
                                        <li><a href="#" class="icon-social"><i class="icon-linkedin2"></i></a></li>
                                        <li><a href="#" class="icon-social"><i class="icon-instagram"></i></a></li>
                                    </ul>
                                </div>
                                <div class="item-content">

                                    <div class="top">
                                        <h4 class="name-team">
                                            <a href="{{ route('doctors.details') }}">Bernard M. Briggs</a>
                                        </h4>

                                        <a href="#" class="position">
                                            Dental Specialist
                                        </a>
                                        <div class="desc">
                                            Highly skilled neuro specialize
                                            in diagnosing and treating.
                                        </div>
                                    </div>

                                    <a href="{{ route('doctors.details') }}" class="tf-btn style-border border-color-border-9 hover-bg-yellow-3 style-small ">
                                        <span>Schedule Now</span>
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="team-item-list hover-img style-2">
                                <div class="left">
                                    <a href="{{ route('doctors.details') }}" class="image">
                                        <img src="{{ asset('image/team-item/team-item-list-4.jpg') }}" data-src="{{ asset('image/team-item/team-item-list-4.jpg') }}" alt="" class=" lazyloaded">
                                    </a>
                                    <a href="#" class="tf-btn-plus hover-bg-yellow-3 style-color-title boder-radius-50">+</a>

                                    <ul class="post-social style-border flex-column">
                                        <li><a href="#" class="icon-social"><i class="icon-facebook"></i></a></li>
                                        <li><a href="#" class="icon-social"><i class="icon-twitter"></i></a></li>
                                        <li><a href="#" class="icon-social"><i class="icon-linkedin2"></i></a></li>
                                        <li><a href="#" class="icon-social"><i class="icon-instagram"></i></a></li>
                                    </ul>
                                </div>
                                <div class="item-content">

                                    <div class="top">
                                        <h4 class="name-team">
                                            <a href="{{ route('doctors.details') }}">Edwardo H. White</a>
                                        </h4>

                                        <a href="#" class="position">
                                            Neurologist
                                        </a>
                                        <div class="desc">
                                            Highly skilled neuro specialize
                                            in diagnosing and treating.
                                        </div>
                                    </div>

                                    <a href="{{ route('doctors.details') }}" class="tf-btn style-border border-color-border-9 hover-bg-yellow-3 style-small ">
                                        <span>Schedule Now</span>
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="bg-about-h4">
                <section class="section-about h-4">
                    <div class="section-about-inner flex">
                        <div class="left">
                            <div class="section-content">
                                <div class="heading-section mb-28">
                                    <h2 class="title mb-30 text-anime">
                                        Innovative Child Care
                                        Solutions for Lifetime
                                        of Smiles Caring
                                    </h2>
                                    <div class="text wow fadeInUp" data-wow-delay=".2s">
                                        We offer a wide range of services, including preventive care, diagnostic services, specialized treatments, emergency care
                                        and chronic disease management need routine.
                                    </div>
                                </div>
                                <div class="benefit-list mb-35">
                                    <div class="benefit-items wow fadeInUp" data-wow-delay=".2s">
                                        <i class="icon-check color-red-2"></i>
                                        <span class="color-title fw6">Preventive & Routine Services</span>
                                    </div>
                                    <div class="benefit-items wow fadeInUp" data-wow-delay=".2s">
                                        <i class="icon-check color-red-2"></i>
                                        <span class="color-title fw6">Pain-Free & Comfortable Treatments</span>
                                    </div>
                                    <div class="benefit-items wow fadeInUp" data-wow-delay=".2s">
                                        <i class="icon-check color-red-2"></i>
                                        <span class="color-title fw6">Personalized Treatment Plans</span>
                                    </div>
                                </div>
                                <div class="bottom-btn wow fadeInUp" data-wow-delay=".2s">
                                    <a href="{{ route('about') }}" class="tf-btn bg-yellow-3 hover-bg-black-4">
                                        <span>Learn more us</span>
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="image img-item right tf-animate-4">
                            <img src="{{ asset('image/section/img-section-about-h4.jpg') }}" data-src="{{ asset('image/section/img-section-about-h4.jpg') }}" alt="" class="lazyload">
                        </div>
                    </div>
                </section>

                <section class="section-fun-fact h-4 tf-spacing-1">
                    <div class="tf-container">
                        <div class="row rg-30">
                            <div class="col-lg-3 col-sm-6">
                                <div class="fun-fact-item bg-red-2 mb-30 tf-animate-1">
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
                                <div class="fun-fact-item bg-black-4 tf-animate-1">
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
                            <div class="col-lg-6 order-lg1">
                                <div class="image tf-animate-2">
                                    <img src="{{ asset('image/section/img-section-fun-fact-h4.jpg') }}" data-src="{{ asset('image/section/img-section-fun-fact-h4.jpg') }}" alt="" class="lazyload">
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="fun-fact-item bg-green-2 mb-30 tf-animate-4">
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
                                <div class="fun-fact-item bg-yellow-3 tf-animate-4">
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
            </div>

            <section class="section-donate h-4">
                <div class="tf-container">
                    <div class="row rg-30">
                        <div class="col-xxl-3 col-md-5">
                            <div class="heading-section mb-28">
                                <h2 class="title mb-30 text-anime">
                                    Every Child Deserve Care
                                    anywhere
                                </h2>
                                <div class="text wow fadeInUp" data-wow-delay=".2s">
                                    We take pride in having a team of
                                    highly skilled an experienced doctors
                                    dedicated to providing exceptional
                                </div>
                            </div>
                            <div class="wow fadeInUp" data-wow-delay=".2s">
                                <a href="#" class="tf-btn style-border border-color-border-9 hover-bg-yellow-3">
                                    <span>Get Started</span>
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-xxl-9 col-md-7">
                            <div class="swiper tf-swiper sw-donate-3" data-swiper='{
                                "slidesPerView": 1.5,
                                "spaceBetween": 15,
                                "speed": 800,
                                "navigation": {
                                    "clickable": true,
                                    "nextEl": ".donate-next",
                                    "prevEl": ".donate-prev"
                                },
                                "pagination": { "el": ".sw-pagination-donate", "clickable": true },
                                "breakpoints": {
                                    "550": { "slidesPerView": 2, "slidesPerGroup": 1},
                                    "1150": { "slidesPerView": 3, "slidesPerGroup": 1}
                                }
                            }'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="donate-item hover-img">
                                            <a href="#" class="image">
                                                <img src="{{ asset('image/donate-item/donate-item-1.jpg') }}" data-src="{{ asset('image/donate-item/donate-item-1.jpg') }}" alt="">
                                            </a>
                                            <div class="item-content">
                                                <h5 class="title"><a href="#">Become a Volunteer?</a></h5>
                                                <a href="#" class="tf-btn style-small small-2 style-gray-4 hover-bg-yellow-3">
                                                    <span>Volunteer</span>
                                                    <i class="icon-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="donate-item hover-img">
                                            <a href="#" class="image">
                                                <img src="{{ asset('image/donate-item/donate-item-2.jpg') }}" data-src="{{ asset('image/donate-item/donate-item-2.jpg') }}" alt="">
                                            </a>
                                            <div class="item-content">
                                                <h5 class="title"><a href="#">Give Money Donate</a></h5>
                                                <a href="#" class="tf-btn style-small small-2 style-gray-4 hover-bg-yellow-3">
                                                    <span>Donate</span>
                                                    <i class="icon-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="donate-item hover-img">
                                            <a href="#" class="image">
                                                <img src="{{ asset('image/donate-item/donate-item-3.jpg') }}" data-src="{{ asset('image/donate-item/donate-item-3.jpg') }}" alt="">
                                            </a>
                                            <div class="item-content">
                                                <h5 class="title"><a href="#">Give Blood & Medicine</a></h5>
                                                <a href="#" class="tf-btn style-small small-2 style-gray-4 hover-bg-yellow-3">
                                                    <span>Donate</span>
                                                    <i class="icon-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sw-pagination-donate sw-pagination d-xl-none mt-15 justify-content-center"></div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-testimonials h-4 tf-spacing-1">
                <div class="tf-container">
                    <div class="heading-section text-center mb-70">
                        <h2 class="title text-anime">
                            Your Health, Our Commitment
                            <br>Hear from Our Patients
                        </h2>
                    </div>
                </div>
                <div class="list-testimonials">
                    <div class="swiper tf-swiper sw-testimonials-3" data-swiper='{
                        "slidesPerView": 1,
                        "spaceBetween": 30,
                        "speed": 800,
                        "loop": true,
                        "navigation": {
                            "clickable": true,
                            "nextEl": ".testimonials-next",
                            "prevEl": ".testimonials-prev"
                        },
                        "pagination": { "el": ".sw-pagination-testimonials", "clickable": true },
                        "breakpoints": {
                            "767": { "slidesPerView": 2, "slidesPerGroup": 1},
                            "1150": { "slidesPerView": 2.85, "slidesPerGroup": 1}
                        }
                    }'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonials-item style-4 px-mobile-lg">
                                    <div class="img-item item-1">
                                        <img src="{{ asset('image/testimonials-item/bg-tes-item-4.png') }}" data-src="{{ asset('image/testimonials-item/bg-tes-item-4.png') }}" alt="" class="lazyload">
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
                                    <h4 class="desc fw5 position-relative lh-35">
                                        “The doctors and nurses at provided me with outstanding care. From the moment walked
                                        care expertise and kindness."
                                    </h4>

                                    <div class="bottom-item flex align-items-center justify-content-between g-20 position-relative">
                                        <div class="user-testimonials flex align-items-center g-20">
                                            <div class="left">
                                                <a href="#" class="img-avartar">
                                                    <img src="{{ asset('image/avatar/box-agent-4.jpg') }}" data-src="{{ asset('image/avatar/box-agent-4.jpg') }}" alt="" class=" ls-is-cached lazyloaded">
                                                </a>
                                            </div>
                                            <div class="right">
                                                <h6 class="name-user"><a href="#">Nicolas M. Baldwin,</a></h6>
                                                <a href="#" class="position">Businessman</a>
                                            </div>
                                        </div>
                                        <div class="icon">
                                            <i class="icon-groud-chat"></i>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonials-item style-4 px-mobile-lg">
                                    <div class="img-item item-1">
                                        <img src="{{ asset('image/testimonials-item/bg-tes-item-4.png') }}" data-src="{{ asset('image/testimonials-item/bg-tes-item-4.png') }}" alt="" class="lazyload">
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
                                    <h4 class="desc fw5 position-relative lh-35">
                                        “The doctors and nurses at provided me with outstanding care. From the moment walked
                                        care expertise and kindness."
                                    </h4>

                                    <div class="bottom-item flex align-items-center justify-content-between g-20 position-relative">
                                        <div class="user-testimonials flex align-items-center g-20">
                                            <div class="left">
                                                <a href="#" class="img-avartar">
                                                    <img src="{{ asset('image/avatar/box-agent-5.jpg') }}" data-src="{{ asset('image/avatar/box-agent-5.jpg') }}" alt="" class=" ls-is-cached lazyloaded">
                                                </a>
                                            </div>
                                            <div class="right">
                                                <h6 class="name-user"><a href="#">Johnny S. Rodriguez</a></h6>
                                                <a href="#" class="position">Motion Designer</a>
                                            </div>
                                        </div>
                                        <div class="icon">
                                            <i class="icon-groud-chat"></i>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonials-item style-4 px-mobile-lg">
                                    <div class="img-item item-1">
                                        <img src="{{ asset('image/testimonials-item/bg-tes-item-4.png') }}" data-src="{{ asset('image/testimonials-item/bg-tes-item-4.png') }}" alt="" class="lazyload">
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
                                    <h4 class="desc fw5 position-relative lh-35">
                                        “The doctors and nurses at provided me with outstanding care. From the moment walked
                                        care expertise and kindness."
                                    </h4>

                                    <div class="bottom-item flex align-items-center justify-content-between g-20 position-relative">
                                        <div class="user-testimonials flex align-items-center g-20">
                                            <div class="left">
                                                <a href="#" class="img-avartar">
                                                    <img src="{{ asset('image/avatar/box-agent-6.jpg') }}" data-src="{{ asset('image/avatar/box-agent-6.jpg') }}" alt="" class=" ls-is-cached lazyloaded">
                                                </a>
                                            </div>
                                            <div class="right">
                                                <h6 class="name-user"><a href="#">Walter M. Morgan</a></h6>
                                                <a href="#" class="position">Web Developer</a>
                                            </div>
                                        </div>
                                        <div class="icon">
                                            <i class="icon-groud-chat"></i>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonials-item style-4 px-mobile-lg">
                                    <div class="img-item item-1">
                                        <img src="{{ asset('image/testimonials-item/bg-tes-item-4.png') }}" data-src="{{ asset('image/testimonials-item/bg-tes-item-4.png') }}" alt="" class="lazyload">
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
                                    <h4 class="desc fw5 position-relative lh-35">
                                        “The doctors and nurses at provided me with outstanding care. From the moment walked
                                        care expertise and kindness."
                                    </h4>

                                    <div class="bottom-item flex align-items-center justify-content-between g-20 position-relative">
                                        <div class="user-testimonials flex align-items-center g-20">
                                            <div class="left">
                                                <a href="#" class="img-avartar">
                                                    <img src="{{ asset('image/avatar/box-agent-4.jpg') }}" data-src="{{ asset('image/avatar/box-agent-4.jpg') }}" alt="" class=" ls-is-cached lazyloaded">
                                                </a>
                                            </div>
                                            <div class="right">
                                                <h6 class="name-user"><a href="#">Nicolas M. Baldwin,</a></h6>
                                                <a href="#" class="position">Businessman</a>
                                            </div>
                                        </div>
                                        <div class="icon">
                                            <i class="icon-groud-chat"></i>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="sw-pagination-testimonials sw-pagination d-xl-none mt-15 justify-content-center"></div>
            </section>

            <section class="section-blog h-4 tf-spacing-11">
                <div class="tf-container">
                    <div class="row rg-30">
                        <div class="col-lg-4">
                            <div class="heading-section mb-50">
                                <h6 class="sub-title mb-10 color-paragraph text-anime">
                                    Blog & News
                                </h6>
                                <h2 class="title text-anime">
                                    Nutrition for Kids
                                    Building Healthy Eating Habits
                                </h2>
                            </div>
                            <div class="wow fadeInUp" data-wow-delay=".2s">
                                <a href="{{ route('blog') }}" class="tf-btn style-border border-color-border-9 hover-bg-yellow-3 ">
                                    <span>View All Blog</span>
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="tf-post-grid style-4 hover-img">
                                <a href="{{ route('blog.details') }}" class="image">
                                    <img src="{{ asset('image/blog/tf-port-grid-10.jpg') }}" data-src="{{ asset('image/blog/tf-port-grid-10.jpg') }}" alt="">
                                </a>
                                <ul class="post-metas style-3 no-bg color-paragraph">
                                    <li class="metas-item"><a href="#">10 February 2025</a></li>
                                    <li class="metas-item"><a href="#">Comments (5)</a></li>
                                </ul>

                                <div class="tf-grid-post-content">
                                    <h4><a href="{{ route('blog.details') }}">Healthy Sleep Habits How Much Rest Does Your Child Need?</a></h4>
                                    <p class="sub-title color-paragraph">
                                        With years of expertise across various specialties
                                        our doctors ensure that every patient receives.
                                    </p>
                                    <a href="{{ route('blog.details') }}" class="tf-btn style-border border-color-border-9 hover-bg-yellow-3 style-small small-2">
                                        <span>Read more</span>
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="tf-post-grid style-4 hover-img">
                                <a href="{{ route('blog.details') }}" class="image">
                                    <img src="{{ asset('image/blog/tf-port-grid-11.jpg') }}" data-src="{{ asset('image/blog/tf-port-grid-11.jpg') }}" alt="">
                                </a>
                                <ul class="post-metas style-3 no-bg color-paragraph">
                                    <li class="metas-item"><a href="#">10 February 2025</a></li>
                                    <li class="metas-item"><a href="#">Comments (5)</a></li>
                                </ul>

                                <div class="tf-grid-post-content">
                                    <h4><a href="{{ route('blog.details') }}">Vaccinations Why They Matter for Your Child’s Health</a></h4>
                                    <p class="sub-title color-paragraph">
                                        With years of expertise across various specialties
                                        our doctors ensure that every patient receives.
                                    </p>
                                    <a href="{{ route('blog.details') }}" class="tf-btn style-border border-color-border-9 hover-bg-yellow-3 style-small small-2">
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
