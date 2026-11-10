@extends('layouts.app')

@section('title', 'Eye Care Clinic - Clineva')

@section('content')
<div class="page-title-home h-5 mt-30 mx-30">
            <div class="page-title-inner">
                <div class="page-title-content">
                    <div class="img-item">
                        <img src="{{ asset('image/page-title/bg-page-title-home-5.png') }}" data-src="{{ asset('image/page-title/bg-page-title-home-5.png') }}" alt="" class="lazyload">
                    </div>
                    <div class="title position-relative color-black-5">
                        <span class="text-flip text-color fw4">
                            <span class="text-face text-front">Advanced Eye</span>
                            <span class="text-face text-back">Innovative Eye</span>
                        </span>
                        Treatments for Clearer, <img src="{{ asset('image/page-title/img-item-title-h-5.jpg') }}" data-src="{{ asset('image/page-title/img-item-title-h-5.jpg') }}" alt="" class="lazyload"> <span class="fw4">Healthier Vision</span>
                    </div>
                    <div class="bottom position-relative">
                        <p class="desc">Regular eye check-ups, proper nutrition, and advanced treatments help prevent vision problems and detect eye diseases early.</p>
                        <div class="list-btn flex align-items-center flex-wrap position-relative z-5">
                            <a href="{{ route('services') }}" class="tf-btn style-purple">
                                <span>Explore Department</span>
                                <i class="icon-arrow-right"></i>
                            </a>
                            <a href="{{ route('doctors') }}" class="tf-btn style-border border-color-border-5 hover-bg-purple">
                                <span>Meet Our Doctors</span>
                                <i class="icon-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box-funfact">
                    <div class="rating position-relative">
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
                                <span class="color-primary">+</span>
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

        <div class="main-content">
            <div class="features-list mt-30 mb-30">
                <div class="mx-30">
                    <div class="swiper tf-swiper sw-features" data-swiper='{
                        "slidesPerView": 1,
                        "spaceBetween": 30,
                        "pagination": { "el": ".sw-pagination-features", "clickable": true },
                        "breakpoints": {
                            "767": { "slidesPerView": 2, "slidesPerGroup": 1},
                            "1150": { "slidesPerView": 3, "slidesPerGroup": 1}
                            }
                        }'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="features-item style-3 style-3-2 style-bg-gray-6 px-mobile-lg">
                                    <div class="item-content mb-40">
                                        <div class="top-item flex align-items-center g-30">
                                            <div class="icon">
                                                <i class="icon-schedule-hours"></i>
                                            </div>
                                            <h3 class="title"><a href="#">Schedule Hours</a></h3>
                                        </div>
                                        <ul>
                                            <li>
                                                <span class="body-2 fw6">Monday – Friday</span>
                                                <span class="body-2 fw6">08am - 09pm</span>
                                            </li>
                                            <li>
                                                <span class="body-2 fw6">Saturday</span>
                                                <span class="body-2 fw6">09am - 10pm</span>
                                            </li>
                                            <li>
                                                <span class="body-2 fw6">Sunday</span>
                                                <span class="body-2 fw6">07am - 08pm</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="bottom-btn">
                                        <a href="#" class="tf-btn style-small style-black-5 hover-boder-black-5">
                                            <span>24/7 hours emergency services</span>
                                            <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="features-item style-3 style-3-2 style-bg-gray-5 px-mobile-lg">
                                    <div class="item-content mb-40">
                                        <div class="top-item flex align-items-center g-30">
                                            <div class="icon">
                                                <i class="icon-our-location"></i>
                                            </div>
                                            <h3 class="title"><a href="#">Our Location</a></h3>
                                        </div>
                                        <h6 class="mb-15 color-black-5">Main Location</h6>
                                        <div class="text body-2 lh-30 fw5 color-black-5">70 Washington Square South, New York, NY 10012, United States</div>
                                    </div>
                                    <div class="bottom-btn">
                                        <a href="#" class="tf-btn style-small style-blue-4 hover-boder-blue-4">
                                            <span>Explore All Healthcare Facilities</span>
                                            <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="features-item style-3 style-3-2 style-bg-4 px-mobile-lg">
                                    <div class="item-content">
                                        <div class="top-item flex align-items-center g-30">
                                            <div class="icon">
                                                <i class="icon-schedule"></i>
                                            </div>
                                            <h3 class="title"><a href="#">Make Appointment</a></h3>
                                        </div>
                                        <div class="text mb-20 body-2 lh-30">You can easily book your appointment online, call our office.</div>
                                        <div class="number-phone">
                                            <div class="number-phone-icon">
                                                <i class="icon-phone"></i>
                                            </div>
                                            <span>Call Us Today : <a href="tel:+00012345688" class="fw7">+1 (234) 568 0000</a></span>
                                        </div>
                                    </div>
                                    <div class="bottom-btn">
                                        <a href="#" class="tf-btn style-small style-purple hover-boder-purple">
                                            <span>Request For Appointment</span>
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

            <section class="section-about h-5 mb-30">
                <div class="mx-30">
                    <div class="section-about-inner flex">
                        <div class="image tf-animate-1">
                            <img src="{{ asset('image/section/img-section-about-h5.jpg') }}" data-src="{{ asset('image/section/img-section-about-h5.jpg') }}" alt="" class="lazyload">
                        </div>
                        <div class="section-about-content">
                            <div class="section-content">
                                <div class="heading-section mb-50">
                                    <h6 class="sub-title mb-10 color-blue-4 text-anime">
                                        About micare
                                    </h6>
                                    <h2 class="title color-black-5 text-anime">
                                        We Committed to providing high-quality, patient-centered
                                        eyecare <span class="fst-italic fw4">designed to meet.</span>
                                    </h2>
                                </div>
                                <div class="wow fadeInUp" data-wow-delay=".2s">
                                    <p class="desc mb-35 color-paragraph">
                                        We offer a wide range of services, including preventive care, diagnostic services, specialized treatments, emergency care, and chronic disease management. Whether
                                        you need routine check-ups, urgent medical attention, or long-term health.
                                    </p>
                                </div>
                                <div class="wow fadeInUp" data-wow-delay=".2s">
                                    <p class="desc style-line-left mb-40 color-paragraph">
                                        Eyes are essential to your daily life, and taking care of them is crucial maintaining clear vision and overall well-being our comprehensive eye care services
                                    </p>
                                </div>
                                <div class="list-item mb-43">
                                    <div class="about-item style-2">
                                        <div class="icon wow fadeInUp" data-wow-delay=".2s">
                                            <i class="icon-compassionate-healthcare"></i>
                                        </div>
                                        <h6 class="item-content lh-30 lsp-0 wow fadeInUp" data-wow-delay=".3s">
                                            Compassionate
                                            <br>Healthcare
                                        </h6>
                                    </div>
                                    <div class="about-item style-2">
                                        <div class="icon wow fadeInUp" data-wow-delay=".4s">
                                            <i class="icon-advanced-medical-technology"></i>
                                        </div>
                                        <h6 class="item-content lh-30 lsp-0 wow fadeInUp" data-wow-delay=".5s">
                                            Advanced Medical
                                            <br>Technology
                                        </h6>
                                    </div>
                                    <div class="about-item style-2">
                                        <div class="icon wow fadeInUp" data-wow-delay=".2s">
                                            <i class="icon-vision-correction"></i>
                                        </div>
                                        <h6 class="item-content lh-30 lsp-0 wow fadeInUp" data-wow-delay=".3s">
                                            Vision Correction &
                                            <br>Treatment
                                        </h6>
                                    </div>
                                    <div class="about-item style-2">
                                        <div class="icon wow fadeInUp" data-wow-delay=".4s">
                                            <i class="icon-cutting-edge"></i>
                                        </div>
                                        <h6 class="item-content lh-30 lsp-0 wow fadeInUp" data-wow-delay=".5s">
                                            Cutting-Edge Technology
                                            <br>& Expert Care
                                        </h6>
                                    </div>
                                </div>

                                <div class="bottom-btn wow fadeInUp" data-wow-delay=".2s">
                                    <a href="{{ route('about') }}" class="tf-btn style-blue-4 hover-boder-blue-4">
                                        <span>Learn more us</span>
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-services h-5 tf-spacing-2">
                <div class="heading-section style-3 mb-70 style-white">
                    <div class="tf-container">
                        <div class="row align-items-center rg-10">
                            <div class="col-lg-6">
                                <h6 class="sub-title mb-10 text-anime">
                                    Eye Care Treatments
                                </h6>
                                <h2 class="title text-anime">
                                    Advanced Eye Wellness
                                    <br><span class="fst-italic fw4">& Rejuvenation</span>
                                </h2>
                            </div>
                            <div class="col-lg-6">
                                <div class="right flex align-items-center justify-content-between g-30">
                                    <div class="text wow fadeInUp" data-wow-delay=".2s">
                                        Eye treatments are essential for maintaining clear vision, preventing diseases, and enhancing overall eye health. From routine eye exams and prescription.
                                    </div>
                                    <div class="list-btn flex g-10">
                                        <div class="wow fadeInUp" data-wow-delay=".4s">
                                            <a class="arrow-btn style-border style-border-3 hover-bg-purple arrow-next services-prev">
                                                <i class="icon-arrow-left"></i>
                                            </a>
                                        </div>
                                        <div class="wow fadeInUp" data-wow-delay=".6s">
                                            <a class="arrow-btn style-border style-border-3 hover-bg-purple arrow-prev services-next">
                                                <i class="icon-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tf-container">
                    <div class="swiper tf-swiper sw-services" data-swiper='{
                        "slidesPerView": 1,
                        "spaceBetween": 15,
                        "speed" : 800,
                        "navigation": {
                           "clickable": true,
                           "nextEl": ".services-next",
                           "prevEl": ".services-prev"
                        },  
                        "pagination": { "el": ".sw-pagination-services", "clickable": true },
                        "breakpoints": {
                            "575": { "slidesPerView": 2, "slidesPerGroup": 1, "spaceBetween": 15},
                             "767": { "slidesPerView": 3, "slidesPerGroup": 1,"spaceBetween": 15},
                            "1150": { "slidesPerView": 4, "slidesPerGroup": 1, "spaceBetween": 30}
                            }
                        }'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="services-item style-3 hover-img">
                                    <div class="item-content">
                                        <div class="sub-title caption-1">
                                            Surgery
                                        </div>
                                        <h6 class="title"><a href="{{ route('services.details') }}">LASIK & PRK Surgery</a></h6>
                                        <div class="icon">
                                            <i class="icon-LASIK"></i>
                                        </div>
                                        <div class="desc">
                                            LASIK (Laser-Assisted in Situ Keratomileusis) and PRK
                                        </div>
                                    </div>
                                    <a href="{{ route('services.details') }}" class="image">
                                        <img src="{{ asset('image/services-item/services-item-5.jpg') }}" data-src="{{ asset('image/services-item/services-item-5.jpg') }}" alt="" class="lazyload">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="services-item style-3 hover-img style-bg-green-3">
                                    <div class="item-content">
                                        <div class="sub-title caption-1">
                                            Aesthetic & Rejuvenation
                                        </div>
                                        <h6 class="title"><a href="{{ route('services.details') }}">Under-Eye Rejuvenation</a></h6>
                                        <div class="icon">
                                            <i class="icon-under-eye"></i>
                                        </div>
                                        <div class="desc">
                                            Treatments for dark circles, puffiness, and wrinkles.
                                        </div>
                                    </div>
                                    <a href="{{ route('services.details') }}" class="image">
                                        <img src="{{ asset('image/services-item/services-item-6.jpg') }}" data-src="{{ asset('image/services-item/services-item-6.jpg') }}" alt="" class="lazyload">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="services-item style-3 hover-img style-bg-blue-4">
                                    <div class="item-content">
                                        <div class="sub-title caption-1">
                                            Surgery
                                        </div>
                                        <h6 class="title"><a href="{{ route('services.details') }}">Blepharoplasty Surgery</a></h6>
                                        <div class="icon">
                                            <i class="icon-blepharoplasty"></i>
                                        </div>
                                        <div class="desc">
                                            Blepharoplasty, also known as eyelid specialized surgery
                                        </div>
                                    </div>
                                    <a href="{{ route('services.details') }}" class="image">
                                        <img src="{{ asset('image/services-item/services-item-7.jpg') }}" data-src="{{ asset('image/services-item/services-item-7.jpg') }}" alt="" class="lazyload">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="services-item style-3 hover-img style-bg-green-2">
                                    <div class="item-content">
                                        <div class="sub-title caption-1">
                                            Medical Eye Treatments
                                        </div>
                                        <h6 class="title"><a href="{{ route('services.details') }}">Orthokeratology (Ortho-K)</a></h6>
                                        <div class="icon">
                                            <i class="icon-orthokeratology"></i>
                                        </div>
                                        <div class="desc">
                                            Overnight reshaping lenses temporary vision correction.
                                        </div>
                                    </div>
                                    <a href="{{ route('services.details') }}" class="image">
                                        <img src="{{ asset('image/services-item/services-item-8.jpg') }}" data-src="{{ asset('image/services-item/services-item-8.jpg') }}" alt="" class="lazyload">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="services-item style-3 hover-img">
                                    <div class="item-content">
                                        <div class="sub-title caption-1">
                                            Surgery
                                        </div>
                                        <h6 class="title"><a href="{{ route('services.details') }}">LASIK & PRK Surgery</a></h6>
                                        <div class="icon">
                                            <i class="icon-LASIK"></i>
                                        </div>
                                        <div class="desc">
                                            LASIK (Laser-Assisted in Situ Keratomileusis) and PRK
                                        </div>
                                    </div>
                                    <a href="{{ route('services.details') }}" class="image">
                                        <img src="{{ asset('image/services-item/services-item-5.jpg') }}" data-src="{{ asset('image/services-item/services-item-5.jpg') }}" alt="" class="lazyload">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="services-item style-3 hover-img style-bg-green-3">
                                    <div class="item-content">
                                        <div class="sub-title caption-1">
                                            Aesthetic & Rejuvenation
                                        </div>
                                        <h6 class="title"><a href="{{ route('services.details') }}">Under-Eye Rejuvenation</a></h6>
                                        <div class="icon">
                                            <i class="icon-under-eye"></i>
                                        </div>
                                        <div class="desc">
                                            Treatments for dark circles, puffiness, and wrinkles.
                                        </div>
                                    </div>
                                    <a href="{{ route('services.details') }}" class="image">
                                        <img src="{{ asset('image/services-item/services-item-6.jpg') }}" data-src="{{ asset('image/services-item/services-item-6.jpg') }}" alt="" class="lazyload">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="services-item style-3 hover-img style-bg-blue-4">
                                    <div class="item-content">
                                        <div class="sub-title caption-1">
                                            Surgery
                                        </div>
                                        <h6 class="title"><a href="{{ route('services.details') }}">Blepharoplasty Surgery</a></h6>
                                        <div class="icon">
                                            <i class="icon-blepharoplasty"></i>
                                        </div>
                                        <div class="desc">
                                            Blepharoplasty, also known as eyelid specialized surgery
                                        </div>
                                    </div>
                                    <a href="{{ route('services.details') }}" class="image">
                                        <img src="{{ asset('image/services-item/services-item-7.jpg') }}" data-src="{{ asset('image/services-item/services-item-7.jpg') }}" alt="" class="lazyload">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="services-item style-3 hover-img style-bg-green-2">
                                    <div class="item-content">
                                        <div class="sub-title caption-1">
                                            Medical Eye Treatments
                                        </div>
                                        <h6 class="title"><a href="{{ route('services.details') }}">Orthokeratology (Ortho-K)</a></h6>
                                        <div class="icon">
                                            <i class="icon-orthokeratology"></i>
                                        </div>
                                        <div class="desc">
                                            Overnight reshaping lenses temporary vision correction.
                                        </div>
                                    </div>
                                    <a href="{{ route('services.details') }}" class="image">
                                        <img src="{{ asset('image/services-item/services-item-8.jpg') }}" data-src="{{ asset('image/services-item/services-item-8.jpg') }}" alt="" class="lazyload">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sw-pagination-services sw-pagination mt-15 justify-content-center style-white"></div>
                </div>
            </section>

            <section class="section-video h-5 tf-spacing-2">
                <div class="tf-container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="heading-section mb-50">
                                <h6 class="sub-title mb-10 color-blue-4 text-anime">
                                    Advanced Eye Treatments
                                </h6>
                                <h2 class="title mb-30 color-black-5 wow fadeInUp" data-wow-delay=".2s">
                                    Eye treatments play a vital role eye preserving vision, preventing diseases
                                    & enhancing the <span class="fst-italic fw4">overall eye health</span>
                                </h2>
                                <div class="text wow fadeInUp" data-wow-delay=".2s">
                                    Regular eye exams help detect issues early, while specialized therapies
                                    like diabetic retinopathy treatment and macular degeneration management
                                    protect long-term eyesight. Additionally, cosmetic procedures like
                                    blepharoplasty and under-eye rejuvenation improve both aesthetics and
                                    functionality.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tf-container">
                    <div class="section-video-inner position-relative">
                        <div class="wg-video style-3">
                            <a href="https://www.youtube.com/watch?v=XHOmBV4js_E" class="popup-youtube">
                                <div class="icon">
                                    <i class="icon-play"></i>
                                </div>
                                <div class="wave"></div>
                                <div class="wave"></div>
                                <div class="wave"></div>
                            </a>
                        </div>
                        <div class="content-video flex justify-content-between align-items-center g-20">
                            <div class="left text-anime">
                                <a href="#" class="title fs-40 lh-55 fw7">
                                    Empowering Healthier Lives Every Day, Your Path to <span class="fw4 fst-italic">Better Health Begins.</span>
                                </a>
                            </div>
                            <div class="right wow fadeInUp" data-wow-delay=".5s">
                                <a href="{{ route('about') }}" class="tf-btn style-blue-4 hover-boder-blue-4">
                                    <span>Learn more us</span>
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-features section-features-2-h5 h-5 mb-30">
                <div class="mx-30">
                    <div class="section-features-inner">
                        <div class="tf-container">
                            <div class="heading-section text-center mb-50 position-relative">
                                <div class="img-item">
                                    <img src="{{ asset('image/section/item-section-features2-h5.png') }}" data-src="{{ asset('image/section/item-section-features2-h5.png') }}" alt="" class="lazyload">
                                </div>
                                <h2 class="title mb-20 position-relative text-anime">
                                    Special Eye Care Treatments <span class="fst-italic fw4">for patients</span>
                                </h2>
                                <div class="text color-paragraph position-relative wow fadeInUp" data-wow-delay=".2s">
                                    Eye treatments play a vital role in preserving vision, preventing diseases, and enhancing overall
                                    <br>eye health corrective procedures like LASIK and PRK for sharper vision to medical
                                </div>
                            </div>
                        </div>
                        <div class="list-features">
                            <div class="swiper tf-swiper sw-features2" data-swiper='{
                                    "slidesPerView": 1,
                                    "spaceBetween": 15,
                                    "speed" : 800,
                                    "pagination": { "el": ".sw-pagination-features2", "clickable": true },
                                    "breakpoints": {
                                        "400": { "slidesPerView": 2, "slidesPerGroup": 2, "spaceBetween": 15},
                                        "767": { "slidesPerView": 3, "slidesPerGroup": 3, "spaceBetween": 30},
                                        "1150": { "slidesPerView": 6, "slidesPerGroup": 1, "spaceBetween": 30}
                                        }
                                    }'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="features-item style-5">
                                            <div class="icon">
                                                <i class="icon-laser-vision"></i>
                                            </div>
                                            <h6 class="title fw6 lh-30"><a href="#">Laser Vision
                                                    <br>Correction</a></h6>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="features-item style-5">
                                            <div class="icon">
                                                <i class="icon-low-vision"></i>
                                            </div>

                                            <h6 class="title fw6 lh-30"><a href="#">Low Vision
                                                    <br>Rehabilitation</a></h6>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="features-item style-5">
                                            <div class="icon">
                                                <i class="icon-laser-and-surgery"></i>
                                            </div>
                                            <h6 class="title fw6 lh-30"><a href="#">Laser And
                                                    <br>Surgery</a></h6>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="features-item style-5">
                                            <div class="icon">
                                                <i class="icon-comprehensive"></i>
                                            </div>
                                            <h6 class="title fw6 lh-30"><a href="#">Comprehensive
                                                    <br>Eye Exams</a></h6>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="features-item style-5">
                                            <div class="icon">
                                                <i class="icon-sports-vision"></i>
                                            </div>
                                            <h6 class="title fw6 lh-30"><a href="#">Sports Vision
                                                    <br>Training</a></h6>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="features-item style-5">
                                            <div class="icon">
                                                <i class="icon-vision-therapy"></i>
                                            </div>
                                            <h6 class="title fw6 lh-30"><a href="#">Vision Therapy
                                                    <br>Services</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sw-pagination-features2 sw-pagination d-xl-none mt-15 justify-content-center"></div>

                        </div>
                    </div>
                </div>
            </section>

            <section class="section-why h-5 mb-30">
                <div class="mx-30">
                    <div class="section-why-inner flex flex-wrap g-30">
                        <div class="section-why-content tf-spacing-2">
                            <div class="section-content">
                                <div class="img-item">
                                    <img src="{{ asset('image/section/item-section-why-h5.png') }}" data-src="{{ asset('image/section/item-section-why-h5.png') }}" alt="" class="lazyload">
                                </div>
                                <div class="heading-section mb-50 style-white position-relative">
                                    <h6 class="sub-title mb-10 text-anime">
                                        Why Choose Us
                                    </h6>
                                    <h2 class="title mb-30 text-anime">
                                        Leading the Way in Eye Health
                                        Vision Care Precision, Expertise
                                        & Compassion <span class="fw4 fst-italic">in Eye Care</span>
                                    </h2>
                                </div>
                                <div class="list-why-item position-relative">
                                    <div class="why-item px-mobile-sm">
                                        <div class="icon wow fadeInUp" data-wow-delay=".4s">
                                            <i class="icon-personalized-patient-care"></i>
                                        </div>
                                        <div class="item-content">
                                            <h4 class="title wow fadeInUp" data-wow-delay=".5s"><a href="#">Personalized Patient Care</a></h4>
                                            <div class="desc wow fadeInUp" data-wow-delay=".5s">
                                                We take a compassionate, patient-centered approach, ensuring you feel comfortable and well-informed
                                            </div>
                                        </div>
                                    </div>
                                    <div class="why-item px-mobile-sm">
                                        <div class="icon wow fadeInUp" data-wow-delay=".4s">
                                            <i class="icon-affordable"></i>
                                        </div>
                                        <div class="item-content">
                                            <h4 class="title wow fadeInUp" data-wow-delay=".5s"><a href="#">Affordable & Transparent Pricing</a></h4>
                                            <div class="desc wow fadeInUp" data-wow-delay=".5s">
                                                Our commitment to clear, upfront pricing means you’ll always know the cost of your treatment before
                                            </div>
                                        </div>
                                    </div>
                                    <div class="why-item px-mobile-sm">
                                        <div class="icon wow fadeInUp" data-wow-delay=".4s">
                                            <i class="icon-safety"></i>
                                        </div>
                                        <div class="item-content">
                                            <h4 class="title wow fadeInUp" data-wow-delay=".5s"><a href="#">Safety & Hygiene Standards</a></h4>
                                            <div class="desc wow fadeInUp" data-wow-delay=".5s">
                                                At our eye care center, we prioritize the safety and well
                                                being of every patient by adhering to standards.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="image tf-animate-2">
                            <img src="{{ asset('image/section/img-section-why-h5.jpg') }}" data-src="{{ asset('image/section/img-section-why-h5.jpg') }}" alt="" class="lazyload">
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-testimonials h-5">
                <div class="mx-30">

                    <div class="swiper sw-testimonials tf-sw-slideshow slider-effect-fade" data-effect="fade" data-preview="1" data-tablet="1" data-mobile="1" data-auto-play="false" data-centered="false" data-space="30" data-space-mb="0" data-loop="true" data-speed="800">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonials-item style-5 flex justify-content-between">
                                    <div class="heading-section style-white position-relative">
                                        <h6 class="sub-title mb-10 tf-fade-top fade-item-1">
                                            Patients Testimonials
                                        </h6>
                                        <h2 class="title tf-fade-top fade-item-2 mb-0">
                                            Your Vision, Our Mission Hear from
                                            Our Patients, Trusted by Patients,
                                            <span class="fst-italic fw4">Recommended for Vision</span>
                                        </h2>
                                    </div>
                                    <div class="box-funfact style-bg-2 tf-fade-left fade-item-3">
                                        <div class="rating position-relative flex">
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                        </div>

                                        <div class="counter-item position-relative">
                                            <div class="counter">
                                                <div class="number-counter flex align-items-center">
                                                    <span class="number odometer color-primary" data-to="5000" data-inviewport="yes"> 0 </span>
                                                    <span class="color-primary">+</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="text body-2 lh-30">
                                            Satisfied our eye care
                                            <br>patients in our services
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
                                    <div class="testimonials-content px-mobile-sm tf-fade-right fade-item-4">
                                        <div class="img-item">
                                            <img src="{{ asset('image/section/item-section-why-h5.png') }}" data-src="{{ asset('image/section/item-section-why-h5.png') }}" alt="" class="lazyload">
                                        </div>
                                        <div class="rating position-relative flex">
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                        </div>
                                        <h3 class="title position-relative">
                                            <a href="#">"Exceptional Care & Compassion"</a>
                                        </h3>
                                        <p class="desc fs-40 lh-52 fw7 position-relative color-black-5">
                                            “The doctors and nurses at provided me with outstanding
                                            care. From the moment walk care expertise & kindness."
                                        </p>
                                        <div class="icon position-relative">
                                            <i class="icon-groud-chat"></i>
                                        </div>
                                        <div class="user-testimonials flex align-items-end position-relative">
                                            <h4 class="name-user"><a href="#" class="color-black-5">Nicolas M. Baldwin,</a></h4>
                                            <a href="#" class="position">Businessman</a>
                                        </div>
                                        <a href="#" class="img-avartar">
                                            <img src="{{ asset('image/avatar/avartar-3.jpg') }}" data-src="{{ asset('image/avatar/avartar-3.jpg') }}" alt="" class="lazyload">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonials-item style-5 flex justify-content-between">
                                    <div class="heading-section style-white position-relative">
                                        <h6 class="sub-title mb-10 tf-fade-top fade-item-1">
                                            Patients Testimonials
                                        </h6>
                                        <h2 class="title tf-fade-top fade-item-2 mb-0">
                                            Your Vision, Our Mission Hear from
                                            Our Patients, Trusted by Patients,
                                            <span class="fst-italic fw4">Recommended for Vision</span>
                                        </h2>
                                    </div>
                                    <div class="box-funfact style-bg-2 tf-fade-left fade-item-3">
                                        <div class="rating position-relative flex">
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                        </div>

                                        <div class="counter-item position-relative">
                                            <div class="counter">
                                                <div class="number-counter flex align-items-center">
                                                    <span class="number odometer color-primary" data-to="5000" data-inviewport="yes"> 0 </span>
                                                    <span class="color-primary">+</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="text body-2 lh-30">
                                            Satisfied our eye care
                                            <br>patients in our services
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
                                    <div class="testimonials-content px-mobile-sm tf-fade-right fade-item-4">
                                        <div class="rating position-relative flex">
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                        </div>
                                        <h3 class="title position-relative">
                                            <a href="#">"Exceptional Care & Compassion"</a>
                                        </h3>
                                        <p class="desc fs-40 lh-52 fw7 position-relative color-black-5">
                                            “The doctors and nurses at provided me with outstanding
                                            care. From the moment walk care expertise & kindness."
                                        </p>
                                        <div class="icon position-relative">
                                            <i class="icon-groud-chat"></i>
                                        </div>
                                        <div class="user-testimonials flex align-items-end position-relative">
                                            <h4 class="name-user"><a href="#" class="color-black-5">Nicolas M. Baldwin,</a></h4>
                                            <a href="#" class="position">Businessman</a>
                                        </div>
                                        <a href="#" class="img-avartar">
                                            <img src="{{ asset('image/avatar/avartar-3.jpg') }}" data-src="{{ asset('image/avatar/avartar-3.jpg') }}" alt="" class="lazyload">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-btn flex g-10">
                            <a class="arrow-btn style-border style-border-3 hover-bg-white-arrow-blue-4 arrow-next navigation-next-slider">
                                <i class="icon-arrow-left"></i>
                            </a>
                            <a class="arrow-btn style-border style-border-3 hover-bg-white-arrow-blue-4 arrow-prev navigation-prev-slider">
                                <i class="icon-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </section>

            <section class="section-blog h-5 tf-spacing-2">
                <div class="tf-container">
                    <div class="heading-section flex align-items-center justify-content-between mb-50 flex-wrap rg-10">
                        <div class="left">
                            <h6 class="sub-title mb-10 color-blue-4 text-anime">
                                Blog & News
                            </h6>
                            <h2 class="title color-black-5 text-anime">
                                Read Latest Articles & News
                            </h2>
                        </div>
                        <div class="wow fadeInUp" data-wow-delay=".4s">
                            <a href="#" class="tf-btn style-border style-border-2 hover-bg-black-2">
                                <span>View All Blog</span>
                                <i class="icon-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tf-container w-1760">
                    <div class="swiper tf-swiper sw-blog" data-swiper='{
                        "slidesPerView": 1,
                        "spaceBetween": 30,
                        "pagination": { "el": ".sw-pagination-blog", "clickable": true },
                        "breakpoints": {
                            "575": { "slidesPerView": 2, "slidesPerGroup": 1},
                            "767": { "slidesPerView": 3, "slidesPerGroup": 1},
                            "1150": { "slidesPerView": 4, "slidesPerGroup": 1}
                            }
                        }'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="tf-post-grid style-4 hover-img">
                                    <a href="{{ route('blog.details') }}" class="image">
                                        <img src="{{ asset('image/blog/tf-port-grid-12.jpg') }}" data-src="{{ asset('image/blog/tf-port-grid-12.jpg') }}" alt="">
                                    </a>
                                    <ul class="post-metas style-3 no-bg color-paragraph flex-wrap rg-10">
                                        <li class="metas-item"><a href="#">10 February 2025</a></li>
                                        <li class="metas-item"><a href="#">Comments (5)</a></li>
                                    </ul>

                                    <div class="tf-grid-post-content">
                                        <h4 class="mb-26"><a href="{{ route('blog.details') }}" class="color-black-5">Healthy Sleep Habits How Much Rest Does Your Child Need?</a></h4>
                                        <a href="{{ route('blog.details') }}" class="tf-btn style-border border-color-border-9 hover-bg-purple style-small small-2">
                                            <span>Read more</span>
                                            <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="tf-post-grid style-4 hover-img">
                                    <a href="{{ route('blog.details') }}" class="image">
                                        <img src="{{ asset('image/blog/tf-port-grid-13.jpg') }}" data-src="{{ asset('image/blog/tf-port-grid-13.jpg') }}" alt="">
                                    </a>
                                    <ul class="post-metas style-3 no-bg color-paragraph flex-wrap rg-10">
                                        <li class="metas-item"><a href="#">10 February 2025</a></li>
                                        <li class="metas-item"><a href="#">Comments (5)</a></li>
                                    </ul>

                                    <div class="tf-grid-post-content">
                                        <h4 class="mb-26"><a href="{{ route('blog.details') }}" class="color-black-5">Vaccinations Why They Matter for Your Child’s Health</a></h4>
                                        <a href="{{ route('blog.details') }}" class="tf-btn style-border border-color-border-9 hover-bg-purple style-small small-2">
                                            <span>Read more</span>
                                            <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="tf-post-grid style-4 hover-img">
                                    <a href="{{ route('blog.details') }}" class="image">
                                        <img src="{{ asset('image/blog/tf-port-grid-14.jpg') }}" data-src="{{ asset('image/blog/tf-port-grid-14.jpg') }}" alt="">
                                    </a>
                                    <ul class="post-metas style-3 no-bg color-paragraph flex-wrap rg-10">
                                        <li class="metas-item"><a href="#">10 February 2025</a></li>
                                        <li class="metas-item"><a href="#">Comments (5)</a></li>
                                    </ul>

                                    <div class="tf-grid-post-content">
                                        <h4 class="mb-26"><a href="{{ route('blog.details') }}" class="color-black-5">Vaccinations Why They Matter for Your Child’s Health</a></h4>
                                        <a href="{{ route('blog.details') }}" class="tf-btn style-border border-color-border-9 hover-bg-purple style-small small-2">
                                            <span>Read more</span>
                                            <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="tf-post-grid style-4 hover-img">
                                    <a href="{{ route('blog.details') }}" class="image">
                                        <img src="{{ asset('image/blog/tf-port-grid-15.jpg') }}" data-src="{{ asset('image/blog/tf-port-grid-15.jpg') }}" alt="">
                                    </a>
                                    <ul class="post-metas style-3 no-bg color-paragraph flex-wrap rg-10">
                                        <li class="metas-item"><a href="#">10 February 2025</a></li>
                                        <li class="metas-item"><a href="#">Comments (5)</a></li>
                                    </ul>

                                    <div class="tf-grid-post-content">
                                        <h4 class="mb-26"><a href="{{ route('blog.details') }}" class="color-black-5">Vaccinations Why They Matter for Your Child’s Health</a></h4>
                                        <a href="{{ route('blog.details') }}" class="tf-btn style-border border-color-border-9 hover-bg-purple style-small small-2">
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
            </section>

            <div class="wg-brand style-bg-gray-5 mx-30 mb-30">
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
