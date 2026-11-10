@extends('layouts.app')

@section('title', 'Dental Clinic - Clineva')

@section('content')
<div class="page-title-home h-3">
            <div class="page-title-inner flex g-10">
                <div class="page-title-content">
                    <div class="text-color-transparent">
                        Dentalcare
                    </div>
                    <div class="content">
                        <div class="top-content position-relative">
                            <div class="img-sub-title">
                                <img src="{{ asset('image/icon/img-item-title-h3.png') }}" data-src="{{ asset('image/icon/img-item-title-h3.png') }}" alt="" class="lazyload">
                            </div>
                            <h3 class="sub-title">Medical & Health Center</h3>
                        </div>
                        <div class="title position-relative">
                            <h1 class="text-img">
                                <span class="fw4"> Bright <img src="{{ asset('image/page-title/img-item-title-h-3.jpg') }}" alt=""> Smiles,</span> Healthy Lives with
                            </h1>
                            <h1 class="text-clip">Our Dental Care</h1>
                        </div>
                        <p class="desc body-2 fw5 lh-30 position-relative">
                            We are dedicated to providing high-quality, patient
                            focused dental care to help you achieve and maintain
                            a healthy, beautiful smile.
                        </p>
                        <div class="position-relative">
                            <a href="{{ route('appointment') }}" class="tf-btn style-yellow-2">
                                <span>Make Appointment</span>
                                <i class="icon-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="image">
                    <img src="{{ asset('image/page-title/page-title-1-h3.jpg') }}" alt="" class="lazyload">
                </div>
            </div>
        </div>

        <div class="main-content">
            <section class="section-features h-3">
                <div class="image">
                    <img src="{{ asset('image/section/img-features-h3.jpg') }}" data-src="{{ asset('image/section/img-features-h3.jpg') }}" alt="" class="lazyload parallax-img">
                </div>
                <div class="section-features-inner">
                    <div class="tf-container z-5">
                        <div class="heading-section text-center style-white mb-60">
                            <div class="title mb-35 text-anime">
                                <h1 class="fw4">Personalized Dental Services for</h1>
                                <h1>Lifetime of Healthy Teeth</h1>
                            </div>
                            <h6 class="desc fw4 lsp-0 lh-30 wow fadeInUp" data-wow-delay=".2s">
                                We are committed to providing exceptional dental care that ensures your smile stays healthy, bright, and beautiful. Our team of experienced dentists and hygienists offers a full range of services, including preventive
                                care, cosmetic dentistry, restorative treatments, orthodontics, and emergency dental care.
                            </h6>
                        </div>
                    </div>
                    <div class="tf-container z-5">
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
                                    <div class="features-item style-3 style-bg-blue-2 wow fadeInUp">
                                        <div class="item-content">
                                            <div class="icon wow fadeInUp">
                                                <i class="icon-schedule-hours"></i>
                                            </div>
                                            <h3 class="title wow fadeInUp"><a href="#">Schedule Hours</a></h3>
                                            <ul class="mb-30">
                                                <li>
                                                    <span class="body-2 fw6 wow fadeInUp">Mon – Fri</span>
                                                    <span class="body-2 fw6 wow fadeInUp" data-wow-delay=".1s">08am - 09pm</span>
                                                </li>
                                                <li>
                                                    <span class="body-2 fw6 wow fadeInUp">Sat</span>
                                                    <span class="body-2 fw6 wow fadeInUp" data-wow-delay=".1s">09am - 10pm</span>
                                                </li>
                                                <li>
                                                    <span class="body-2 fw6 wow fadeInUp">Sun</span>
                                                    <span class="body-2 fw6 wow fadeInUp" data-wow-delay=".1s">07am - 08pm</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="bottom-btn wow fadeInUp">
                                            <a href="{{ route('services') }}" class="tf-btn style-small style-yellow-2 hover-boder-white">
                                                <span>24/7 hours emergency services</span>
                                                <i class="icon-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="features-item style-3 style-bg-yellow-2 wow fadeInUp" data-wow-delay=".1s">
                                        <div class="item-content">
                                            <div class="icon wow fadeInUp" data-wow-delay=".1s">
                                                <i class="icon-our-location"></i>
                                            </div>
                                            <h3 class="title wow fadeInUp" data-wow-delay=".1s"><a href="#">Our Location</a></h3>
                                            <h6 class="mb-10 wow fadeInUp" data-wow-delay=".1s">Main Location</h6>
                                            <div class="text body-2 lh-30 wow fadeInUp" data-wow-delay=".1s">70 Washington Square South, New York, NY 10012, United States</div>
                                        </div>
                                        <div class="bottom-btn wow fadeInUp" data-wow-delay=".1s">
                                            <a href="{{ route('contact') }}" class="tf-btn style-small style-color-title hover-boder-color-title">
                                                <span>Explore All Healthcare Facilities</span>
                                                <i class="icon-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="features-item style-3 style-bg-3 wow fadeInUp" data-wow-delay=".2s">
                                        <div class="item-content">
                                            <div class="icon wow fadeInUp" data-wow-delay=".2s">
                                                <i class="icon-schedule"></i>
                                            </div>
                                            <h3 class="title wow fadeInUp" data-wow-delay=".2s"><a href="#">Make Appointment</a></h3>
                                            <div class="text mb-30 wow fadeInUp" data-wow-delay=".2s">You can easily book your appointment online, call our office.</div>
                                            <div class="number-phone">
                                                <div class="number-phone-icon wow fadeInUp" data-wow-delay=".2s">
                                                    <i class="icon-phone"></i>
                                                </div>
                                                <span class=" wow fadeInUp" data-wow-delay=".3s">Call Us Today : <a href="tel:+00012345688" class="fw7">+1 (234) 568 0000</a></span>
                                            </div>
                                        </div>
                                        <div class="bottom-btn wow fadeInUp" data-wow-delay=".2s">
                                            <a href="{{ route('appointment') }}" class="tf-btn style-small style-white hover-boder-white">
                                                <span>Request For Appointment</span>
                                                <i class="icon-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sw-pagination-features sw-pagination d-xl-none mt-15 justify-content-center style-white"></div>
                    </div>
                </div>
            </section>

            <section class="section-about h-3 tf-spacing-8">
                <div class="tf-container">
                    <div class="row rg-30">
                        <div class="col-lg-5">
                            <div class="section-content">
                                <div class="heading-section mb-28">
                                    <div class="title mb-30 text-anime">
                                        <h2 class="fw4">
                                            Innovative Dental
                                        </h2>
                                        <h2>
                                            Solutions for Lifetime
                                            <br>of Smiles Caring
                                        </h2>
                                    </div>
                                    <p class="desc fw4 color-paragraph wow fadeInUp" data-wow-delay=".2s">
                                        We offer a wide range of services, including preventive care, diagnostic services, specialized treatments, emergency care
                                        and chronic disease management need routine.
                                    </p>
                                </div>
                                <div class="benefit-list">
                                    <div class="benefit-items style-color-title mb-10 wow fadeInUp" data-wow-delay=".2s">
                                        <i class="icon-check"></i>
                                        <span>Preventive & Routine Services</span>
                                    </div>
                                    <div class="benefit-items style-color-title mb-10 wow fadeInUp" data-wow-delay=".2s">
                                        <i class="icon-check"></i>
                                        <span>Pain-Free & Comfortable Treatments</span>
                                    </div>
                                    <div class="benefit-items style-color-title wow fadeInUp" data-wow-delay=".2s">
                                        <i class="icon-check"></i>
                                        <span>Personalized Treatment Plans</span>
                                    </div>
                                </div>
                                <div class="wow fadeInUp" data-wow-delay=".2s">
                                    <a href="{{ route('about') }}" class="tf-btn style-yellow-2">
                                        <span>Learn more us</span>
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="list-img flex g-30 align-items-center">
                                <div class="image img-1 tf-animate-2">
                                    <img src="{{ asset('image/section/img-section-about-h3-1.jpg') }}" data-src="{{ asset('image/section/img-section-about-h3-1.jpg') }}" alt="" class="lazyload">
                                </div>
                                <div class="image img-2 tf-animate-3" data-delay=".1s">
                                    <img src="{{ asset('image/section/img-section-about-h3-2.jpg') }}" data-src="{{ asset('image/section/img-section-about-h3-2.jpg') }}" alt="" class="lazyload">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="line-h-3"></div>

            <section class="section-services h-3 tf-spacing-8">
                <div class="tf-container">
                    <div class="heading-section text-center mb-70">
                        <div class="title mb-30 text-anime">
                            <h2 class="fw4">Exceptional Dental Treatments</h2>
                            <h2>for Every Stage of Life</h2>
                        </div>
                        <h6 class="desc fw4 color-paragraph lsp-0 lh-30 wow fadeInUp" data-wow-delay=".2s">
                            We are committed to providing comprehensive dental care that helps
                            <br>you maintain a healthy and beautiful smile for life.
                        </h6>
                    </div>
                </div>

                <div class="tf-container">
                    <div class="swiper tf-swiper sw-services sw-grid sw-grid-3" data-swiper='{
                            "slidesPerView": 1,
                            "spaceBetween": 30,
                            "observer": true,
                            "observeParents": true,
                             "navigation": {
                                "clickable": true,
                                "nextEl": ".services-next",
                                "prevEl": ".services-prev"
                            },
                            "pagination": { "el": ".sw-pagination-services", "clickable": true },
                            "breakpoints": {
                                "767": { "slidesPerView": 2, "slidesPerGroup": 2, "spaceBetween": 30, "allowTouchMove": true},
                                "1150": { 
                                    "slidesPerView": 3, "slidesPerGroup": 1, "allowTouchMove": false, "spaceBetween": 0}
                                }
                            }'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="services-item style-bg-black-3 px-mobile-sm wow fadeInUp">
                                    <div class="icon wow fadeInUp">
                                        <i class="icon-teeth-whitening"></i>
                                    </div>
                                    <h4 class="wow fadeInUp">
                                        <a href="{{ route('services.details') }}" class="title">Teeth Whitening</a>
                                    </h4>
                                    <div class="desc wow fadeInUp">
                                        A cosmetic procedure to brighten and remove stains from your teeth, giving you whiter, more radiant smile.
                                    </div>
                                    <div class="bottom-btn wow fadeInUp">
                                        <a href="{{ route('services.details') }}" class="tf-btn style-small style-yellow-2 hover-boder-white">
                                            <span>Read more</span>
                                            <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="services-item style-bg-gray-2 px-mobile-sm wow fadeInUp" data-wow-delay=".1s">
                                    <div class="icon wow fadeInUp" data-wow-delay=".1s">
                                        <i class="icon-dental-lmplants"></i>
                                    </div>
                                    <h4 class="wow fadeInUp" data-wow-delay=".1s">
                                        <a href="{{ route('services.details') }}" class="title">Dental Implants</a>
                                    </h4>
                                    <div class="desc wow fadeInUp" data-wow-delay=".1s">
                                        Permanent solutions replace missing
                                        teeth offering natural look feel in strong
                                        durable titanium posts placed.
                                    </div>
                                    <div class="bottom-btn wow fadeInUp" data-wow-delay=".1s">
                                        <a href="{{ route('services.details') }}" class="tf-btn style-small style-white hover-boder-color-title">
                                            <span>Read more</span>
                                            <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="services-item style-bg-border-3 px-mobile-sm wow fadeInUp" data-wow-delay=".2s">
                                    <div class="icon wow fadeInUp" data-wow-delay=".2s">
                                        <i class="icon-root-canal"></i>
                                    </div>
                                    <h4 class=" wow fadeInUp" data-wow-delay=".2s">
                                        <a href="{{ route('services.details') }}" class="title">Root Canal Treatment</a>
                                    </h4>
                                    <div class="desc wow fadeInUp" data-wow-delay=".2s">
                                        A root canal treatment is a safe and effective procedure designed to remove infection from the inside of a tooth.
                                    </div>
                                    <div class="bottom-btn wow fadeInUp" data-wow-delay=".2s">
                                        <a href="{{ route('services.details') }}" class="tf-btn style-small style-white hover-boder-color-title">
                                            <span>Read more</span>
                                            <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="services-item style-bg-gray-3 px-mobile-sm wow fadeInUp">
                                    <div class="icon text-anime-wavwow fadeInUp">
                                        <i class="icon-periodontal-care"></i>
                                    </div>
                                    <h4 class="text-anime-wavwow fadeInUp">
                                        <a href="{{ route('services.details') }}" class="title">Periodontal Care</a>
                                    </h4>
                                    <div class="desc text-anime-wavwow fadeInUp">
                                        Periodontal care focuses on preventing, diagnosing, and treating gum disease (periodontitis and gingivitis).
                                    </div>
                                    <div class="bottom-btn text-anime-wavwow fadeInUp">
                                        <a href="{{ route('services.details') }}" class="tf-btn style-small style-white hover-boder-color-title">
                                            <span>Read more</span>
                                            <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide colum-2">
                                <div class="services-item style-bg-img wow fadeInUp" data-wow-delay=".1s">
                                    <div class="item-content px-mobile-sm">
                                        <div class="icon position-relative wow fadeInUp" data-wow-delay=".1s">
                                            <i class="icon-dental-crowns"></i>
                                        </div>
                                        <h4 class="position-relative wow fadeInUp" data-wow-delay=".1s">
                                            <a href="#" class="title">Dental Crowns & Bridges</a>
                                        </h4>
                                        <div class="desc position-relative wow fadeInUp" data-wow-delay=".1s">
                                            Restorative treatments that cover to protect damaged teeth with crowns or replace missing teeth with bridges for enhanced function.
                                        </div>
                                        <div class="bottom-btn wow fadeInUp" data-wow-delay=".1s">
                                            <a href="{{ route('services.details') }}" class="tf-btn style-small style-white hover-boder-color-title">
                                                <span>Read more</span>
                                                <i class="icon-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sw-pagination-services sw-pagination d-xl-none mt-15 justify-content-center"></div>
            </section>

            <section class="section-appointment h-3">
                <div class="image image-1">
                    <img src="{{ asset('image/section/img-section-appointment-2.jpg') }}" data-src="{{ asset('image/section/img-section-appointment-2.jpg') }}" alt="" class="lazyload parallax-img">
                </div>
                <div class="img-item img-1">
                    <img src="{{ asset('image/section/item-section-appointment-1.png') }}" data-src="{{ asset('image/section/item-section-appointment-1.png') }}" alt="" class="lazyload">
                </div>
                <div class="list-text z-5">
                    <div class="tf-marquee">
                        <div class="marquee-wrapper">
                            <div class="initial-child-container">
                                <div class="marquee-child-item">
                                    <div class="text-overlay">make an appointment</div>
                                </div>
                                <div class="marquee-child-item">
                                    <div class="text-overlay">make an appointment</div>
                                </div>
                                <div class="marquee-child-item">
                                    <div class="text-overlay">make an appointment</div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="section-appointment-inner">
                    <div class="tf-container z-5">
                        <div class="row rg-30">
                            <div class="col-lg-7">
                                <div class="heading-section style-white mt-70">
                                    <h2 class="title mb-15 text-anime">10% Discount for Appointment!</h2>
                                    <h6 class="text fw5 lsp-0 text-anime">Take care of your health and that of your family today</h6>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="box-why px-mobile-sm wow fadeInUp" data-wow-delay=".1s">
                                    <h4 class="title wow fadeInUp" data-wow-delay=".1s">
                                        Why Booking a Dental Appointment is Essential for Your Oral Health"
                                    </h4>
                                    <div class="benefit-list">
                                        <div class="benefit-items style-color-title wow fadeInUp" data-wow-delay=".1s">
                                            <i class="icon-check"></i>
                                            <span class="fw5">Immediate Access to Expert Care</span>
                                        </div>
                                        <div class="benefit-items style-color-title wow fadeInUp" data-wow-delay=".1s">
                                            <i class="icon-check"></i>
                                            <span class="fw5">Early Diagnosis & Prevention</span>
                                        </div>
                                        <div class="benefit-items style-color-title wow fadeInUp" data-wow-delay=".1s">
                                            <i class="icon-check"></i>
                                            <span class="fw5">Personalized Treatment Plans</span>
                                        </div>
                                        <div class="benefit-items style-color-title wow fadeInUp" data-wow-delay=".1s">
                                            <i class="icon-check"></i>
                                            <span class="fw5">Convenient & Hassle-Free Scheduling</span>
                                        </div>
                                        <div class="benefit-items style-color-title wow fadeInUp" data-wow-delay=".1s">
                                            <i class="icon-check"></i>
                                            <span class="fw5">Priority & Emergency Care</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <form id="contactform" class="form-contact-us style-2 px-mobile-sm" method="post" action="https://micarehtml.vercel.app/contact/contact-process.php">
                                    <div class="heading-section position-relative mb-30">
                                        <div class="title">
                                            <h2 class="fw4">
                                                Make an Appointment Today
                                            </h2>
                                            <h2>for a free dental checkup.</h2>
                                        </div>
                                    </div>

                                    <div class="cols mb-20 g-20 rg-20 position-relative">
                                        <fieldset class="item">
                                            <i class="icon-user"></i>
                                            <input type="text" name="name" id="name" placeholder="Name" required>
                                        </fieldset>

                                        <fieldset class="item">
                                            <i class="icon-envelope"></i>
                                            <input type="email" name="mail" id="mail" placeholder="Email Address" required>
                                        </fieldset>

                                        <fieldset class="item">

                                            <div class="nice-select">
                                                <i class="icon-tooth"></i>

                                                <span class="current caption-1">Services</span>
                                                <ul class="list">
                                                    <li class="option option-all">
                                                        Services
                                                    </li>
                                                    <li class="option">
                                                        Services 1
                                                    </li>
                                                    <li class="option">
                                                        Services 2
                                                    </li>
                                                </ul>
                                            </div>
                                        </fieldset>

                                        <fieldset class="item">
                                            <i class="icon-calendar-day"></i>
                                            <input type="text" name="date" id="datepicker" class="date-input" placeholder="Date & Time" required>
                                        </fieldset>
                                    </div>

                                    <div class="position-relative">
                                        <button type="submit" class="tf-btn style-yellow-2">
                                            <span>Make Appointment</span>
                                            <i class="icon-arrow-right"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-5">
                                <div class="image image-2">
                                    <img src="{{ asset('image/section/img-section-appointment-1.jpg') }}" data-src="{{ asset('image/section/img-section-appointment-1.jpg') }}" alt="" class="lazyload parallax-img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-before-after h-3 tf-spacing-8">
                <div class="tf-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="heading-section text-center mb-50">
                                <div class="title mb-30 text-anime">
                                    <h2 class="fw4 text">Real Patients, Real Results</h2>
                                    <h2>Before & After Smiles</h2>
                                </div>

                                <h6 class="desc fw4 color-paragraph lsp-0 lh-30 wow fadeInUp" data-wow-delay=".2s">
                                    We take pride in delivering stunning smile transformations that
                                    <br>restore confidence and improve oral health.
                                </h6>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="img-viewer-compare-wrap">
                                <div id="image-compare" class="image-compare">
                                    <img src="{{ asset('image/section/img-before.jpg') }}" data-src="{{ asset('image/section/img-before.jpg') }}" alt="" class="lazyload">
                                    <img src="{{ asset('image/section/img-after.jpg') }}" data-src="{{ asset('image/section/img-after.jpg') }}" alt="" class="lazyload">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-team h-3 tf-spacing-9">
                <div class="tf-container">
                    <div class="row rg-30">
                        <div class="col-xl-3">
                            <div class="heading-section mb-30">
                                <div class="title mb-30 text-anime">
                                    <h2 class="fw4">Dental Care</h2>
                                    <h2>Starts with Exceptional Doctors</h2>
                                </div>
                                <p class="desc color-paragraph wow fadeInUp" data-wow-delay=".2s">
                                    We are committed to providing high-quality dental care tailored to your unique needs.
                                </p>
                            </div>
                            <div class="list-btn flex align-items-center g-10">
                                <a class="arrow-btn style-border style-border-2 arrow-prev team-prev">
                                    <i class="icon-arrow-left"></i>
                                </a>
                                <a class="arrow-btn style-border style-border-2 arrow-next team-next">
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-9">
                            <div class="swiper tf-swiper sw-team-3" data-swiper='{
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
                                    "991": { "slidesPerView": 3, "slidesPerGroup": 1}
                                }
                                }'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="team-item hover-img style-2">
                                            <div class="top-item">
                                                <a href="{{ route('doctors.details') }}" class="image">
                                                    <img src="{{ asset('image/team-item/team-item-5.jpg') }}" data-src="{{ asset('image/team-item/team-item-5.jpg') }}" alt="" class=" lazyloaded">
                                                </a>
                                                <a href="{{ route('doctors.details') }}" class="tf-btn-plus hover-bg-yellow-2 style-color-title">+</a>
                                                <a href="{{ route('doctors.details') }}" class="tf-btn style-yellow-2 style-small">
                                                    <span>Make Appointment</span>
                                                    <i class="icon-arrow-right"></i>
                                                </a>
                                            </div>
                                            <div class="item-content">
                                                <h5 class="name-team">
                                                    <a href="{{ route('doctors.details') }}">Rafael D. Bratcher</a>
                                                </h5>
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
                                                <a href="{{ route('doctors.details') }}" class="tf-btn-plus hover-bg-yellow-2 style-color-title">+</a>
                                                <a href="{{ route('doctors.details') }}" class="tf-btn style-yellow-2 style-small">
                                                    <span>Make Appointment</span>
                                                    <i class="icon-arrow-right"></i>
                                                </a>
                                            </div>
                                            <div class="item-content">
                                                <h5 class="name-team">
                                                    <a href="{{ route('doctors.details') }}">Santiago K. Wilson</a>
                                                </h5>
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
                                                <a href="{{ route('doctors.details') }}" class="tf-btn-plus hover-bg-yellow-2 style-color-title">+</a>
                                                <a href="{{ route('doctors.details') }}" class="tf-btn style-yellow-2 style-small">
                                                    <span>Make Appointment</span>
                                                    <i class="icon-arrow-right"></i>
                                                </a>
                                            </div>
                                            <div class="item-content">
                                                <h5 class="name-team">
                                                    <a href="{{ route('doctors.details') }}">Micheal C. Simmons</a>
                                                </h5>
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
                                                <a href="{{ route('doctors.details') }}" class="tf-btn-plus hover-bg-yellow-2 style-color-title">+</a>
                                                <a href="{{ route('doctors.details') }}" class="tf-btn style-yellow-2 style-small">
                                                    <span>Make Appointment</span>
                                                    <i class="icon-arrow-right"></i>
                                                </a>
                                            </div>
                                            <div class="item-content">
                                                <h5 class="name-team">
                                                    <a href="{{ route('doctors.details') }}">Columbus A. Davis</a>
                                                </h5>
                                                <a href="#" class="position">
                                                    Neuro Surgeon
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sw-pagination-team sw-pagination d-xl-none mt-15 justify-content-center"></div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-testimonials h-3 tf-spacing-10">
                 <div class="list-text">
                    <div class="tf-marquee">
                        <div class="marquee-wrapper">
                            <div class="initial-child-container">
                                <div class="marquee-child-item">
                                     <div class="text-overlay text-2">patients testimonials</div>
                                </div>
                                <div class="marquee-child-item">
                                     <div class="text-overlay text-2">patients testimonials</div>
                                </div>
                                <div class="marquee-child-item">
                                     <div class="text-overlay text-2">patients testimonials</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tf-container">
                    <div class="heading-section mb-70 text-center">
                        <h2 class="title text-anime">Hear from Our Happy Patients</h2>
                    </div>
                </div>
                <div class="tf-container">
                    <div class="swiper tf-swiper sw-testimonials sw-grid sw-grid-3" data-swiper='{
                            "slidesPerView": 1,
                            "spaceBetween": 30,
                            "observer": true,
                            "observeParents": true,
                             "navigation": {
                                "clickable": true,
                                "nextEl": ".testimonials-next",
                                "prevEl": ".testimonials-prev"
                            },
                            "pagination": { "el": ".sw-pagination-testimonials", "clickable": true },
                            "breakpoints": {
                                "767": { "slidesPerView": 2, "slidesPerGroup": 2, "spaceBetween": 30, "allowTouchMove": true},
                                "1150": { 
                                    "slidesPerView": 3, "slidesPerGroup": 1, "allowTouchMove": false, "spaceBetween": 0}
                                }
                            }'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonials-item style-3 px-mobile-sm">
                                    <div class="rating flex">
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                    </div>
                                    <div class="user-testimonials flex position-relative g-20">
                                        <div class="left">
                                            <div class="img-avartar">
                                                <img src="{{ asset('image/avatar/box-agent-4.jpg') }}" data-src="{{ asset('image/avatar/box-agent-4.jpg') }}" alt="" class="lazyload">
                                            </div>
                                        </div>
                                        <div class="right">
                                            <h6 class="name-user"><a href="#">Nicolas M. Baldwin,</a></h6>
                                            <a href="#" class="position">Businessman</a>
                                        </div>
                                    </div>

                                    <h6 class="desc fw5 position-relative lh-32">
                                        “The doctors and nurses at provided me with outstanding care. From the moment walked
                                        care expertise and kindness."
                                    </h6>

                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="testimonials-item style-3 px-mobile-sm">
                                    <div class="rating flex">
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                    </div>
                                    <div class="user-testimonials flex position-relative g-20">
                                        <div class="left">
                                            <div class="img-avartar">
                                                <img src="{{ asset('image/avatar/avatar-comment.jpg') }}" data-src="{{ asset('image/avatar/avatar-comment.jpg') }}" alt="" class="lazyload">
                                            </div>
                                        </div>
                                        <div class="right">
                                            <h6 class="name-user"><a href="#">Fred T. Armstrong</a></h6>
                                            <a href="#" class="position">Businessman</a>
                                        </div>
                                    </div>

                                    <h6 class="desc fw5 position-relative lh-32">
                                        "I was always afraid of visiting
                                        the dentist, but the team Dental Clinic made me feel completely
                                        at ease staff is friendly!"
                                    </h6>

                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="testimonials-item style-3 px-mobile-sm">
                                    <div class="rating flex">
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                    </div>
                                    <div class="user-testimonials flex position-relative g-20">
                                        <div class="left">
                                            <div class="img-avartar">
                                                <img src="{{ asset('image/avatar/avartar-3.jpg') }}" data-src="{{ asset('image/avatar/avartar-3.jpg') }}" alt="" class="lazyload">
                                            </div>
                                        </div>
                                        <div class="right">
                                            <h6 class="name-user"><a href="#">Robert W. Hayward</a></h6>
                                            <a href="#" class="position">UX/UI Designer</a>
                                        </div>
                                    </div>

                                    <h6 class="desc fw5 position-relative lh-32">
                                        "I got veneers done here, and the results are beyond expectations!
                                        my smile is now bright smile!"
                                    </h6>

                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="testimonials-item style-3 px-mobile-sm">
                                    <div class="rating flex">
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                    </div>
                                    <div class="user-testimonials flex position-relative g-20">
                                        <div class="left">
                                            <div class="img-avartar">
                                                <img src="{{ asset('image/avatar/avartar-2.jpg') }}" data-src="{{ asset('image/avatar/avartar-2.jpg') }}" alt="" class="lazyload">
                                            </div>
                                        </div>
                                        <div class="right">
                                            <h6 class="name-user"><a href="#">Robert W. Hayward</a></h6>
                                            <a href="#" class="position">UX/UI Designer</a>
                                        </div>
                                    </div>

                                    <h6 class="desc fw5 position-relative lh-32">
                                        "I got veneers done here, and the results are beyond expectations!
                                        my smile is now bright smile!"
                                    </h6>

                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="testimonials-item style-3 px-mobile-sm">
                                    <div class="rating flex">
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                    </div>
                                    <div class="user-testimonials flex position-relative g-20">
                                        <div class="left">
                                            <div class="img-avartar">
                                                <img src="{{ asset('image/avatar/box-agent-5.jpg') }}" data-src="{{ asset('image/avatar/box-agent-5.jpg') }}" alt="" class="lazyload">
                                            </div>
                                        </div>
                                        <div class="right">
                                            <h6 class="name-user"><a href="#">Fred T. Armstrong</a></h6>
                                            <a href="#" class="position">Businessman</a>
                                        </div>
                                    </div>

                                    <h6 class="desc fw5 position-relative lh-32">
                                        "I was always afraid of visiting
                                        the dentist, but the team Dental Clinic made me feel completely
                                        at ease staff is friendly!"
                                    </h6>

                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="testimonials-item style-3 px-mobile-sm">
                                    <div class="rating flex">
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                    </div>
                                    <div class="user-testimonials flex position-relative g-20">
                                        <div class="left">
                                            <div class="img-avartar">
                                                <img src="{{ asset('image/avatar/avata.jpg') }}" data-src="{{ asset('image/avatar/avata.jpg') }}" alt="" class="lazyload">
                                            </div>
                                        </div>
                                        <div class="right">
                                            <h6 class="name-user"><a href="#">Nicolas M. Baldwin</a></h6>
                                            <a href="#" class="position">Businessman</a>
                                        </div>
                                    </div>

                                    <h6 class="desc fw5 position-relative lh-32">
                                        “The doctors and nurses at provided me with outstanding care. From the moment walked
                                        care expertise and kindness."
                                    </h6>

                                </div>
                            </div>
                        </div>
                        <div class="sw-pagination-testimonials sw-pagination d-xl-none mt-15 justify-content-center"></div>
                    </div>
                </div>
            </section>

            <section class="section-blog h-3 tf-spacing-8">
                <div class="tf-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="heading-section flex align-items-center justify-content-between mb-50 flex-wrap rg-10">
                                <div class="left">
                                    <div class="title text-anime">
                                        <h2 class="fw5">Ultimate Guide to Preventing</h2>
                                        <h2>Cavities and Gum Disease</h2>
                                    </div>
                                </div>
                                <div class="wow fadeInUp" data-wow-delay=".2s">
                                    <a href="#" class="tf-btn style-border style-border-2 hover-bg-black-2">
                                        <span>View All Blog</span>
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="swiper tf-swiper sw-blog" data-swiper='{
                                "slidesPerView": 1,
                                "spaceBetween": 30,
                                "pagination": { "el": ".sw-pagination-blog", "clickable": true },
                                "breakpoints": {
                                    "575": { "slidesPerView": 2, "slidesPerGroup": 2},
                                    "1150": { "slidesPerView": 3, "slidesPerGroup": 1}
                                    }
                                }'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="tf-post-grid style-3 hover-img">
                                            <ul class="post-metas style-3 color-paragraph flex-wrap rg-10">
                                                <li class="metas-item"><a href="#">10 February 2025</a></li>
                                                <li class="metas-item"><a href="#">Comments (5)</a></li>
                                            </ul>

                                            <a href="{{ route('blog.details') }}" class="image">
                                                <img src="{{ asset('image/blog/tf-port-grid-7.jpg') }}" data-src="{{ asset('image/blog/tf-port-grid-7.jpg') }}" alt="">
                                            </a>
                                            <div class="tf-grid-post-content">
                                                <h5><a href="{{ route('blog.details') }}">Benefits of Regular Dental Check Ups Shouldn’t Skip Them!</a></h5>
                                                <p class="sub-title color-paragraph">
                                                    We are committed providing high-quality dental care tailored to your unique needs.
                                                </p>
                                                <a href="{{ route('blog.details') }}" class="tf-btn style-small style-bg-border-3 hover-bg-yellow-2">
                                                    <span>Read more</span>
                                                    <i class="icon-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tf-post-grid style-3 hover-img">
                                            <ul class="post-metas style-3 color-paragraph flex-wrap rg-10">
                                                <li class="metas-item"><a href="#">10 February 2025</a></li>
                                                <li class="metas-item"><a href="#">Comments (5)</a></li>
                                            </ul>

                                            <a href="{{ route('blog.details') }}" class="image">
                                                <img src="{{ asset('image/blog/tf-port-grid-8.jpg') }}" data-src="{{ asset('image/blog/tf-port-grid-8.jpg') }}" alt="">
                                            </a>
                                            <div class="tf-grid-post-content">
                                                <h5><a href="{{ route('blog.details') }}">Benefits of Regular Dental Check Ups Shouldn’t Skip Them!</a></h5>
                                                <p class="sub-title color-paragraph">
                                                    We are committed providing high-quality dental care tailored to your unique needs.
                                                </p>
                                                <a href="{{ route('blog.details') }}" class="tf-btn style-small style-bg-border-3 hover-bg-yellow-2">
                                                    <span>Read more</span>
                                                    <i class="icon-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tf-post-grid style-3 hover-img">
                                            <ul class="post-metas style-3 color-paragraph flex-wrap rg-10">
                                                <li class="metas-item"><a href="#">10 February 2025</a></li>
                                                <li class="metas-item"><a href="#">Comments (5)</a></li>
                                            </ul>

                                            <a href="{{ route('blog.details') }}" class="image">
                                                <img src="{{ asset('image/blog/tf-port-grid-9.jpg') }}" data-src="{{ asset('image/blog/tf-port-grid-9.jpg') }}" alt="">
                                            </a>
                                            <div class="tf-grid-post-content">
                                                <h5><a href="{{ route('blog.details') }}">Benefits of Regular Dental Check Ups Shouldn’t Skip Them!</a></h5>
                                                <p class="sub-title color-paragraph">
                                                    We are committed providing high-quality dental care tailored to your unique needs.
                                                </p>
                                                <a href="{{ route('blog.details') }}" class="tf-btn style-small style-bg-border-3 hover-bg-yellow-2">
                                                    <span>Read more</span>
                                                    <i class="icon-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sw-pagination-blog sw-pagination d-xl-none mt-15 justify-content-center"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
@endsection
