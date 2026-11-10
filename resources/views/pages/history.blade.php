@extends('layouts.app')

@section('title', 'Our History - Clineva')

@section('content')
<div class="page-title mt-30">
            <div class="mx-30">
                <div class="page-title-content paralax-bg">
                    <h1 class="title">
                        Our History
                    </h1>
                    <div class="breadkcum">
                        <h3><a href="{{ route('home') }}" class="link-breadkcum">Home</a></h3>
                        <span class="dot bg-white"></span>
                        <h3 class="page-breadkcum">Our History</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-content">

            <section class="section-features p-history tf-spacing-1">
                <div class="tf-container">
                    <div class="row rg-30">
                        <div class="col-lg-6">
                            <div class="section-content">
                                <div class="heading-section mb-28">
                                    <h2 class="title mb-30 text-anime">
                                        A Chronicle of Company
                                        Healthcare Innovations
                                    </h2>
                                    <div class="text wow fadeInUp" data-wow-delay=".4s">
                                        Medical healthcare encompasses a comprehensive array of services aimed
                                        at promoting, maintaining, and restoring health. The services include preventive
                                        measures, diagnosis, treatment, rehabilitation, and palliative care
                                    </div>
                                </div>

                                <div class="benefit-list mb-37">
                                    <div class="benefit-items style-dot wow fadeInUp" data-wow-delay=".4s">
                                        <span>We offer a full spectrum of services—from preventive care</span>
                                    </div>
                                    <div class="benefit-items style-dot wow fadeInUp" data-wow-delay=".4s">
                                        <span>Our care is tailored to individual preferences, needs, and values,</span>
                                    </div>
                                    <div class="benefit-items style-dot wow fadeInUp" data-wow-delay=".4s">
                                        <span>Adhere to the six domains of healthcare quality safety, effectiveness,</span>
                                    </div>
                                </div>
                                <div class="desc color-paragraph wow fadeInUp" data-wow-delay=".4s">
                                    An effective <a href="#">healthcare system requires</a> a well-trained workforce, adequate funding, reliable information, and well-maintained facilities
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right">
                                <div class="image tf-animate-4">
                                    <img src="{{ asset('image/section/img-section-features-p-his.jpg') }}" data-src="{{ asset('image/section/img-section-features-p-his.jpg') }}" alt="" class="lazyload">
                                </div>
                                <div class="wg-year-ex bg-white px-mobile-sm tf-animate-2">
                                    <div class="counter-item">
                                        <div class="counter">
                                            <div class="number-counter flex">
                                                <h1 class="number odometer color-primary" data-to="25" data-inviewport="yes"> 0 </h1>
                                                <h1>+</h1>
                                            </div>
                                            <h4 class="title-counter fw6 lsp-0">
                                                Years Of Experience
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="img-item">
                                        <img src="{{ asset('image/logo/logo-box-year-ex-red.svg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-history p-history tf-spacing-1 mb-40">
                <div class="tf-container">
                    <div class="heading-section mb-70 text-center">
                        <h6 class="sub-title mb-10 text-anime">
                            Company History
                        </h6>
                        <h2 class="title text-anime">
                            Building a Healthier Future – Our
                            <br>History in Medicine
                        </h2>
                    </div>
                </div>
                <div class="tf-container">
                    <div class="swiper tf-swiper sw-history" data-swiper='{
                        "slidesPerView": 1,
                        "spaceBetween": 30,
                        "speed": 800,
                        "navigation": {
                            "clickable": true,
                            "nextEl": ".history-next",
                            "prevEl": ".history-prev"
                        },  
                        "pagination": { "el": ".sw-pagination-history", "clickable": true },
                        "breakpoints": {
                            "1150": { "slidesPerView": 2, "slidesPerGroup": 1}
                            }
                        }'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="history-item">
                                    <div class="top-history">
                                        <span class="year-history">(1994)</span>
                                        <h5 class="title">
                                            <a href="#">We Start Our Medical Care</a>
                                        </h5>
                                    </div>
                                    <div class="middle-history">
                                        <div class="line"></div>

                                        <div class="icon">
                                            <i class="icon-check"></i>
                                        </div>
                                    </div>
                                    <div class="bottom-history">
                                        <div class="history-content px-mobile-md">
                                            <div class="text mb-20">
                                                Embarking on the journey of establishing a medical care facility in Dhaka is both a significant
                                            </div>
                                            <div class="benefit-list mb-30">
                                                <div class="benefit-items style-dot">
                                                    <span>Regulatory Compliance</span>
                                                </div>
                                                <div class="benefit-items style-dot">
                                                    <span>Infrastructure and Technology</span>
                                                </div>
                                                <div class="benefit-items style-dot">
                                                    <span>Skilled Workforce</span>
                                                </div>
                                            </div>
                                            <div class="text">
                                                Healthcare <a href="#">landscape</a> characterize public and private providers,
                                            </div>
                                        </div>
                                        <a href="#" class="image">
                                            <img src="{{ asset('image/section/history-item.jpg') }}" data-src="{{ asset('image/section/history-item.jpg') }}" alt="" class="lazyload">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="history-item">
                                    <div class="top-history">
                                        <span class="year-history">(1997)</span>
                                        <h5 class="title">
                                            <a href="#">Join 10+ Expert Doctors</a>
                                        </h5>
                                    </div>
                                    <div class="middle-history">
                                        <div class="line"></div>

                                        <div class="icon">
                                            <i class="icon-check"></i>
                                        </div>
                                    </div>

                                    <div class="bottom-history">
                                        <div class="history-content px-mobile-md">
                                            <div class="text mb-30">
                                                We are excited to expand our team
                                                and invite experienced medical professionals to join our esteemed
                                            </div>
                                            <div class="item-content">
                                                <div class="title-content fw7">
                                                    Collaborative Environment
                                                </div>
                                                <div class="desc">
                                                    Work alongside a multidisciplinary
                                                    team of professionals dedicated.
                                                </div>
                                            </div>
                                            <div class="item-content">
                                                <div class="title-content fw7">
                                                    State-of-the-Art Facilities
                                                </div>
                                                <div class="desc">
                                                    Utilize advanced medical enhance patient outcomes and support.
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#" class="image">
                                            <img src="{{ asset('image/section/history-item-2.jpg') }}" data-src="{{ asset('image/section/history-item-2.jpg') }}" alt="" class="lazyload">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="history-item">
                                    <div class="top-history">
                                        <span class="year-history">(2000)</span>
                                        <h5 class="title">
                                            <a href="#">We Start Our Medical Care</a>
                                        </h5>
                                    </div>
                                    <div class="middle-history">
                                        <div class="line"></div>

                                        <div class="icon">
                                            <i class="icon-check"></i>
                                        </div>
                                    </div>
                                    <div class="bottom-history">
                                        <div class="history-content px-mobile-md">
                                            <div class="text mb-20">
                                                Embarking on the journey of establishing a medical care facility in Dhaka is both a significant
                                            </div>
                                            <div class="benefit-list mb-30">
                                                <div class="benefit-items style-dot">
                                                    <span>Regulatory Compliance</span>
                                                </div>
                                                <div class="benefit-items style-dot">
                                                    <span>Infrastructure and Technology</span>
                                                </div>
                                                <div class="benefit-items style-dot">
                                                    <span>Skilled Workforce</span>
                                                </div>
                                            </div>
                                            <div class="text">
                                                Healthcare <a href="#">landscape</a> characterize public and private providers,
                                            </div>
                                        </div>
                                        <a href="#" class="image">
                                            <img src="{{ asset('image/section/history-item.jpg') }}" data-src="{{ asset('image/section/history-item.jpg') }}" alt="" class="lazyload">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="history-item">
                                    <div class="top-history">
                                        <span class="year-history">(2010)</span>
                                        <h5 class="title">
                                            <a href="#">Join 10+ Expert Doctors</a>
                                        </h5>
                                    </div>
                                    <div class="middle-history">
                                        <div class="line"></div>

                                        <div class="icon">
                                            <i class="icon-check"></i>
                                        </div>
                                    </div>

                                    <div class="bottom-history">
                                        <div class="history-content px-mobile-md">
                                            <div class="text mb-30">
                                                We are excited to expand our team
                                                and invite experienced medical professionals to join our esteemed
                                            </div>
                                            <div class="item-content">
                                                <div class="title-content fw7">
                                                    Collaborative Environment
                                                </div>
                                                <div class="desc">
                                                    Work alongside a multidisciplinary
                                                    team of professionals dedicated.
                                                </div>
                                            </div>
                                            <div class="item-content">
                                                <div class="title-content fw7">
                                                    State-of-the-Art Facilities
                                                </div>
                                                <div class="desc">
                                                    Utilize advanced medical enhance patient outcomes and support.
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#" class="image">
                                            <img src="{{ asset('image/section/history-item-2.jpg') }}" data-src="{{ asset('image/section/history-item-2.jpg') }}" alt="" class="lazyload">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="history-item">
                                    <div class="top-history">
                                        <span class="year-history">(2014)</span>
                                        <h5 class="title">
                                            <a href="#">We Start Our Medical Care</a>
                                        </h5>
                                    </div>
                                    <div class="middle-history">
                                        <div class="line"></div>

                                        <div class="icon">
                                            <i class="icon-check"></i>
                                        </div>
                                    </div>
                                    <div class="bottom-history">
                                        <div class="history-content px-mobile-md">
                                            <div class="text mb-20">
                                                Embarking on the journey of establishing a medical care facility in Dhaka is both a significant
                                            </div>
                                            <div class="benefit-list mb-30">
                                                <div class="benefit-items style-dot">
                                                    <span>Regulatory Compliance</span>
                                                </div>
                                                <div class="benefit-items style-dot">
                                                    <span>Infrastructure and Technology</span>
                                                </div>
                                                <div class="benefit-items style-dot">
                                                    <span>Skilled Workforce</span>
                                                </div>
                                            </div>
                                            <div class="text">
                                                Healthcare <a href="#">landscape</a> characterize public and private providers,
                                            </div>
                                        </div>
                                        <a href="#" class="image">
                                            <img src="{{ asset('image/section/history-item.jpg') }}" data-src="{{ asset('image/section/history-item.jpg') }}" alt="" class="lazyload">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="history-item">
                                    <div class="top-history">
                                        <span class="year-history">(2017)</span>
                                        <h5 class="title">
                                            <a href="#">Join 10+ Expert Doctors</a>
                                        </h5>
                                    </div>
                                    <div class="middle-history">
                                        <div class="line"></div>

                                        <div class="icon">
                                            <i class="icon-check"></i>
                                        </div>
                                    </div>

                                    <div class="bottom-history">
                                        <div class="history-content px-mobile-md">
                                            <div class="text mb-30">
                                                We are excited to expand our team
                                                and invite experienced medical professionals to join our esteemed
                                            </div>
                                            <div class="item-content">
                                                <div class="title-content fw7">
                                                    Collaborative Environment
                                                </div>
                                                <div class="desc">
                                                    Work alongside a multidisciplinary
                                                    team of professionals dedicated.
                                                </div>
                                            </div>
                                            <div class="item-content">
                                                <div class="title-content fw7">
                                                    State-of-the-Art Facilities
                                                </div>
                                                <div class="desc">
                                                    Utilize advanced medical enhance patient outcomes and support.
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#" class="image">
                                            <img src="{{ asset('image/section/history-item-2.jpg') }}" data-src="{{ asset('image/section/history-item-2.jpg') }}" alt="" class="lazyload">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sw-pagination-history sw-pagination mt-50 justify-content-center"></div>


                    <a class="arrow-btn arrow-next history-next">
                        <i class="icon-arrow-right"></i>
                    </a>

                    <a class="arrow-btn arrow-prev history-prev">
                        <i class="icon-arrow-left"></i>
                    </a>
                </div>
            </section>

        </div>
@endsection
