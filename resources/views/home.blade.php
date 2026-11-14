@extends('layouts.app')

@section('title', 'Clineva Research Laboratories - Clinical Research & Healthcare Solutions')

@section('content')
        <section class="clineva-hero-minimal mt-30 mx-30">
            <div class="tf-container">
                <div class="row align-items-center rg-30">
                    <div class="col-lg-7">
                        <span class="services-cat-badge" style="margin-bottom: 0;">Clineva Research Laboratories</span>
                        <h1 class="hero-title">
                            Clinical Research &amp;
                            <br>Healthcare Solutions
                        </h1>
                        <p class="hero-lead-desc">
                            We at Clineva believe in the power of providing the best solutions of Clinical, Regulatory, Quality assurance, Statistical, Data Management, Medical Writing, Medical Monitoring and Medico-marketing services to all of our clients within the pharmaceutical, healthcare and medical devices industry.
                        </p>
                        <div class="list-btn flex align-items-center flex-wrap">
                            <a href="{{ route('services') }}" class="tf-btn">
                                <span>Explore Services</span>
                                <i class="icon-arrow-right"></i>
                            </a>
                            <a href="{{ route('contact') }}" class="tf-btn hero-btn-outline">
                                <span>Contact Us</span>
                                <i class="icon-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="hero-industries-card">
                            <span class="card-eyebrow">Industries We Serve</span>
                            <div class="hero-industries-list">
                                <div class="hero-industries-item">
                                    <div class="item-icon">
                                        <i class="icon-atom-simple"></i>
                                    </div>
                                    <span class="item-label">Pharmaceutical &amp; Biotechnology</span>
                                </div>
                                <div class="hero-industries-item">
                                    <div class="item-icon">
                                        <i class="icon-stethoscope"></i>
                                    </div>
                                    <span class="item-label">Healthcare Providers &amp; Organizations</span>
                                </div>
                                <div class="hero-industries-item">
                                    <div class="item-icon">
                                        <i class="icon-cutting-edge"></i>
                                    </div>
                                    <span class="item-label">Medical Devices Industry</span>
                                </div>
                            </div>
                            <p class="hero-industries-footer mb-0">
                                Integrated Clinical, Regulatory, Quality Assurance, Statistical, Data Management, Medical Writing, Medical Monitoring &amp; Medico-Marketing solutions.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="main-content">

            <div class="features-list mt-30 mx-30">
                <div class="home-services-grid">
                    <div class="features-item h-100">
                        <svg class="number-features">
                            <defs>
                                <linearGradient id="textGradient1" x1="0%" y1="0%" x2="0%" y2="100%">
                                    <stop offset="0%" stop-color="rgba(12, 23, 26, 0.05)" />
                                    <stop offset="100%" stop-color="rgba(12, 23, 26, 0)" />
                                </linearGradient>
                            </defs>
                            <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" fill="none" stroke="url(#textGradient1)" stroke-width="2">
                                01
                            </text>
                        </svg>
                        <div class="icon">
                            <i class="icon-stethoscope"></i>
                        </div>
                        <h4 class="title">
                            <a href="{{ route('services.details', ['service' => 'clinical-operations']) }}">
                                Clinical Trials Management
                            </a>
                        </h4>
                        <div class="desc">End-to-end clinical operations, site monitoring, medical writing, eTMF management, and global regulatory support.</div>
                        <a href="{{ route('services') }}#clinical-trials" class="tf-btn no-bg">
                            <span>Explore Clinical Trials</span>
                            <i class="icon-arrow-right"></i>
                        </a>
                    </div>
                    <div class="features-item h-100">
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
                            <i class="icon-atom-simple"></i>
                        </div>
                        <h4 class="title">
                            <a href="{{ route('services.details', ['service' => 'cro-selection']) }}">
                                BA / BE Study Services
                            </a>
                        </h4>
                        <div class="desc">Independent CRO selection, medical writing, BA/BE study monitoring, regulatory guidance, and GCP/GLP audits.</div>
                        <a href="{{ route('services') }}#babe-services" class="tf-btn no-bg">
                            <span>Explore BA/BE Services</span>
                            <i class="icon-arrow-right"></i>
                        </a>
                    </div>
                    <div class="features-item h-100">
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
                            <i class="icon-globe"></i>
                        </div>
                        <h4 class="title">
                            <a href="{{ route('services.details', ['service' => 'medical-affairs-medico-marketing']) }}">
                                Medico-Marketing Services
                            </a>
                        </h4>
                        <div class="desc">Scientific communication, advisory boards, CME programs, KOL engagement, and strategic brand launch support.</div>
                        <a href="{{ route('services.details', ['service' => 'medical-affairs-medico-marketing']) }}" class="tf-btn no-bg">
                            <span>Explore Medico-Marketing</span>
                            <i class="icon-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <section class="clineva-commitments-section mx-30 mt-30" id="commitments">
                <div class="tf-container">
                    <div class="row align-items-center rg-30">
                        <div class="col-lg-5">
                            <span class="services-cat-badge" style="margin-bottom: 0;">Our Commitments</span>
                            <h2 class="commitments-title">
                                Committed to Healthcare Partners Through Responsibility, Trust &amp; Innovation
                            </h2>
                            <p class="commitments-desc">
                                We are fully committed to our partners in the healthcare industry and our commitment is revealed through our core values – Responsibility, Trust and Innovation. Our mission, is to provide efficient services of the highest quality, credibility, accessibility and modernized in solving your healthcare problems.
                            </p>
                            <a href="{{ route('about') }}" class="tf-btn">
                                <span>Learn More About Us</span>
                                <i class="icon-arrow-right"></i>
                            </a>
                        </div>
                        <div class="col-lg-7">
                            <div class="commitment-values-stack">
                                <div class="commitment-value-card">
                                    <div class="value-icon">
                                        <i class="icon-safety"></i>
                                    </div>
                                    <div>
                                        <div class="value-head">
                                            <span class="value-num">01</span>
                                            <h4 class="value-name">Responsibility</h4>
                                        </div>
                                        <p class="value-text">Accountable execution across clinical operations, patient safety, regulatory compliance, and quality deliverables.</p>
                                    </div>
                                </div>
                                <div class="commitment-value-card">
                                    <div class="value-icon">
                                        <i class="icon-lock"></i>
                                    </div>
                                    <div>
                                        <div class="value-head">
                                            <span class="value-num">02</span>
                                            <h4 class="value-name">Trust</h4>
                                        </div>
                                        <p class="value-text">Built through credibility, inspection-ready clinical data integrity, and transparent communication with sponsors worldwide.</p>
                                    </div>
                                </div>
                                <div class="commitment-value-card">
                                    <div class="value-icon">
                                        <i class="icon-cutting-edge"></i>
                                    </div>
                                    <div>
                                        <div class="value-head">
                                            <span class="value-num">03</span>
                                            <h4 class="value-name">Innovation</h4>
                                        </div>
                                        <p class="value-text">Modernized research workflows, digital eTMF management, and agile problem-solving tailored to healthcare challenges.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="commitment-pillars-row">
                                <div class="commitment-pillar-pill">
                                    <i class="icon-check"></i>
                                    <span>Highest Quality</span>
                                </div>
                                <div class="commitment-pillar-pill">
                                    <i class="icon-check"></i>
                                    <span>Credibility</span>
                                </div>
                                <div class="commitment-pillar-pill">
                                    <i class="icon-check"></i>
                                    <span>Accessibility</span>
                                </div>
                                <div class="commitment-pillar-pill">
                                    <i class="icon-check"></i>
                                    <span>Modernized</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-department h-1 tf-spacing-2 mx-30" id="home-services">
                <div class="section-department-inner tf-spacing-2">
                    <div class="tf-container">
                        <div class="heading-section mb-40 text-center">
                            <h6 class="sub-title mb-10 color-title text-anime">
                                Our Core Services
                            </h6>
                            <h2 class="title text-anime">
                                Comprehensive Clinical Research
                                <br>&amp; Healthcare Solutions
                            </h2>
                        </div>

                        <div class="home-services-tabs" role="tablist" aria-label="Service Categories">
                            <button type="button" class="home-service-tab-btn active" data-tab="tab-clinical" role="tab" aria-selected="true">
                                <i class="icon-stethoscope"></i>
                                <span>Clinical Trials</span>
                                <span class="tab-count">{{ count($clinicalServices) }}</span>
                            </button>
                            <button type="button" class="home-service-tab-btn" data-tab="tab-babe" role="tab" aria-selected="false">
                                <i class="icon-atom-simple"></i>
                                <span>BA / BE Services</span>
                                <span class="tab-count">{{ count($babeServices) }}</span>
                            </button>
                            <button type="button" class="home-service-tab-btn" data-tab="tab-medico" role="tab" aria-selected="false">
                                <i class="icon-globe"></i>
                                <span>Medical Affairs &amp; Medico-Marketing</span>
                                <span class="tab-count">{{ count($medicoMarketingServices) }}</span>
                            </button>
                        </div>

                        <div id="tab-clinical" class="home-service-pane active" role="tabpanel">
                            <div class="home-services-grid">
                                @foreach ($clinicalServices as $service)
                                    <div class="clineva-service-card">
                                        <div class="card-top">
                                            <div class="service-icon-box">
                                                <i class="{{ $service['icon'] }}"></i>
                                            </div>
                                            <span class="services-cat-badge" style="margin-bottom: 0;">{{ $service['category_name'] }}</span>
                                        </div>
                                        <h4 class="service-title">
                                            <a href="{{ route('services.details', ['service' => $service['slug']]) }}">
                                                {{ $service['title'] }}
                                            </a>
                                        </h4>
                                        <p class="service-desc">{{ \Illuminate\Support\Str::limit($service['short_desc'], 130) }}</p>
                                        <a href="{{ route('services.details', ['service' => $service['slug']]) }}" class="service-link-btn">
                                            <span>View Service Details</span>
                                            <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div id="tab-babe" class="home-service-pane" role="tabpanel">
                            <div class="home-services-grid">
                                @foreach ($babeServices as $service)
                                    <div class="clineva-service-card">
                                        <div class="card-top">
                                            <div class="service-icon-box">
                                                <i class="{{ $service['icon'] }}"></i>
                                            </div>
                                            <span class="services-cat-badge" style="margin-bottom: 0;">{{ $service['category_name'] }}</span>
                                        </div>
                                        <h4 class="service-title">
                                            <a href="{{ route('services.details', ['service' => $service['slug']]) }}">
                                                {{ $service['title'] }}
                                            </a>
                                        </h4>
                                        <p class="service-desc">{{ \Illuminate\Support\Str::limit($service['short_desc'], 130) }}</p>
                                        <a href="{{ route('services.details', ['service' => $service['slug']]) }}" class="service-link-btn">
                                            <span>View Service Details</span>
                                            <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                @endforeach

                                <div class="clineva-service-card" style="background: linear-gradient(145deg, #0A1C32 0%, #102B4D 100%); border-color: transparent; color: #ffffff;">
                                    <div class="card-top">
                                        <div class="service-icon-box" style="background: rgba(255, 255, 255, 0.14); color: #ffffff;">
                                            <i class="icon-suitcase"></i>
                                        </div>
                                        <span class="services-cat-badge" style="margin-bottom: 0; background: rgba(0, 163, 224, 0.22); color: #7DD3FC;">Sponsor Support</span>
                                    </div>
                                    <h4 class="service-title" style="color: #ffffff;">
                                        <a href="{{ route('contact') }}" style="color: #ffffff;">
                                            Planning a BA / BE Study?
                                        </a>
                                    </h4>
                                    <p class="service-desc" style="color: rgba(255, 255, 255, 0.82);">Partner with Clineva for independent CRO evaluation, protocol writing, regulatory strategy, and compliant study oversight.</p>
                                    <a href="{{ route('contact') }}" class="service-link-btn" style="color: #7DD3FC;">
                                        <span>Request Consultation</span>
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div id="tab-medico" class="home-service-pane" role="tabpanel">
                            @foreach ($medicoMarketingServices as $service)
                                <div class="medico-spotlight-card">
                                    <div class="row align-items-center rg-30">
                                        <div class="col-lg-8">
                                            <span class="services-cat-badge" style="background: rgba(0, 163, 224, 0.22); color: #7DD3FC;">
                                                {{ $service['category_name'] }}
                                            </span>
                                            <h3 class="mb-15 text-white">{{ $service['title'] }}</h3>
                                            <p class="mb-0" style="color: rgba(255, 255, 255, 0.86); font-size: 16px; line-height: 1.7;">
                                                {{ $service['short_desc'] }}
                                            </p>
                                            @if (!empty($service['deliverables']))
                                                <div class="spotlight-pills">
                                                    @foreach ($service['deliverables'] as $pill)
                                                        <span class="spotlight-pill">{{ $pill }}</span>
                                                    @endforeach
                                                </div>
                                            @endif
                                        </div>
                                        <div class="col-lg-4 text-lg-end">
                                            <a href="{{ route('services.details', ['service' => $service['slug']]) }}" class="tf-btn style-white">
                                                <span>Explore Medico-Marketing</span>
                                                <i class="icon-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="text-center mt-50">
                            <a href="{{ route('services') }}" class="tf-btn">
                                <span>View All Services</span>
                                <i class="icon-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <script>
                    (function () {
                        const buttons = document.querySelectorAll('.home-service-tab-btn');
                        const panes = document.querySelectorAll('.home-service-pane');
                        buttons.forEach(function (btn) {
                            btn.addEventListener('click', function () {
                                const targetId = btn.getAttribute('data-tab');
                                buttons.forEach(function (b) {
                                    b.classList.remove('active');
                                    b.setAttribute('aria-selected', 'false');
                                });
                                panes.forEach(function (p) {
                                    p.classList.remove('active');
                                });
                                btn.classList.add('active');
                                btn.setAttribute('aria-selected', 'true');
                                const targetPane = document.getElementById(targetId);
                                if (targetPane) {
                                    targetPane.classList.add('active');
                                }
                            });
                        });
                    })();
                </script>
            </section>

            <section class="section-appointmrent h-1 mx-30">
                <div class="heading-section">
                    <div class="tf-container tf-spacing-3">
                        <div class="row rg-30">
                            <div class="col-xl-6">
                                <h2 class="title mb-30 text-anime-wave text-anime">
                                    Excellence in Healthcare
                                    <br>Compassion in Service
                                </h2>
                                <div class="text wow fadeInUp">We specialize in advanced hematology care, diagnosing and treating
                                    wide range of blood disorders and diseases. Our expert hematologists
                                    provide personalized treatment plans for conditions.
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="list-counter flex justify-content-between">
                                    <div class="counter-item">
                                        <div class="counter">
                                            <div class="number-counter flex fs-65 fw7">
                                                <span class="number odometer color-primary" data-to="35" data-inviewport="yes"> 0 </span>
                                                <span class="color-primary">+</span>
                                            </div>
                                            <p class="title-counter body-2 lh-30">
                                                Experienced doctors
                                                <br>at your service
                                            </p>
                                        </div>
                                    </div>
                                    <div class="counter-item">
                                        <div class="counter">
                                            <div class="number-counter flex fs-65 fw7">
                                                <span class="number odometer color-primary" data-to="10" data-inviewport="yes"> 0 </span>
                                                <span class="color-primary">+</span>
                                            </div>
                                            <p class="title-counter body-2 lh-30">
                                                Years Of Experience
                                                <br>in Medical Services
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wg-video style-2">
                    <a href="https://www.youtube.com/watch?v=XHOmBV4js_E" class="popup-youtube">
                        <div class="icon">
                            <i class="icon-play icon-color-red"></i>
                        </div>
                        <div class="wave"></div>
                        <div class="wave"></div>
                        <div class="wave"></div>
                    </a>
                </div>
                <form id="contactform" class="form-contact-us" method="POST" action="javascript:void(0)">
                    
                    <div class="heading-form text-center mb-30">
                        <div class="title text-anime">
                            Make an Appointment
                        </div>
                        <div class="desc text-anime">Booking an appointment with our healthcare professionals</div>
                    </div>

                    <div class="cols mb-20 g-30 rg-20">
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
                            <div class="nice-select">
                                <i class="icon-stethoscope"></i>
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

                            <div class="nice-select">
                                <i class="icon-user-doctor"></i>
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
                    <div class="cols g-30 align-items-start">
                        <fieldset class="item-textarea">
                            <i class="icon-envelope-2"></i>
                            <textarea name="message" id="message" placeholder="Write message..." required></textarea>
                        </fieldset>

                        <button type="submit" class="tf-btn">
                            <span>Submit now</span>
                            <i class="icon-arrow-right"></i>
                        </button>
                    </div>

                </form>

            </section>

            <section class="section-team h-1 tf-spacing-2">
                <div class="tf-container">
                    <div class="heading-section mb-70 text-center">
                        <h6 class="sub-title mb-10 text-anime">
                            Meet Our Doctors
                        </h6>
                        <h2 class="title text-anime">
                            Leading Medical Professionals
                            <br>at Your Service
                        </h2>
                    </div>
                </div>
                <div class="tf-container">
                    <div class="swiper tf-swiper sw-team" data-swiper='{
                        "slidesPerView": 1,
                        "spaceBetween": 10,
                        "pagination": { "el": ".sw-pagination-team", "clickable": true },
                        "breakpoints": {
                            "575": { "slidesPerView": 2, "slidesPerGroup": 2, "spaceBetween": 0},
                            "991": { "slidesPerView": 3, "slidesPerGroup": 1, "spaceBetween": 0},
                            "1150": { "slidesPerView": 4, "slidesPerGroup": 1,"spaceBetween": 0}
                            }
                        }'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="team-item hover-img px-mobile-sm">
                                    <div class="top-item">
                                        <h5 class="name-team">
                                            <a href="#">Rafael D. Bratcher</a>
                                        </h5>
                                        <a href="#" class="position">
                                            Neurologist
                                        </a>
                                    </div>
                                    <a href="#" class="image">
                                        <img src="{{ asset('image/team-item/team-item-1.jpg') }}" data-src="{{ asset('image/team-item/team-item-1.jpg') }}" alt="" class="lazyload">
                                    </a>
                                    <div class="bottom-btn">
                                        <a href="#" class="tf-btn style-small style-border hover-bg-red">
                                            <span class="color-title">Make Appointment</span>
                                            <i class="icon-arrow-right color-title"></i>
                                        </a>
                                    </div>
                                    <ul class="post-social style-border">
                                        <li><a href="#" class="icon-social"><i class="icon-facebook"></i></a></li>
                                        <li><a href="#" class="icon-social"><i class="icon-twitter"></i></a></li>
                                        <li><a href="#" class="icon-social"><i class="icon-linkedin2"></i></a></li>
                                        <li><a href="#" class="icon-social"><i class="icon-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team-item hover-img px-mobile-sm">
                                    <div class="top-item">
                                        <h5 class="name-team">
                                            <a href="#">Santiago K. Wilson</a>
                                        </h5>
                                        <a href="#" class="position">
                                            Senior Dentist
                                        </a>
                                    </div>
                                    <a href="#" class="image">
                                        <img src="{{ asset('image/team-item/team-item-2.jpg') }}" data-src="{{ asset('image/team-item/team-item-2.jpg') }}" alt="" class="lazyload">
                                    </a>
                                    <div class="bottom-btn">
                                        <a href="#" class="tf-btn style-small style-border hover-bg-red">
                                            <span class="color-title">Make Appointment</span>
                                            <i class="icon-arrow-right color-title"></i>
                                        </a>
                                    </div>
                                    <ul class="post-social style-border">
                                        <li><a href="#" class="icon-social"><i class="icon-facebook"></i></a></li>
                                        <li><a href="#" class="icon-social"><i class="icon-twitter"></i></a></li>
                                        <li><a href="#" class="icon-social"><i class="icon-linkedin2"></i></a></li>
                                        <li><a href="#" class="icon-social"><i class="icon-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team-item hover-img px-mobile-sm">
                                    <div class="top-item">
                                        <h5 class="name-team">
                                            <a href="#">Micheal C. Simmons</a>
                                        </h5>
                                        <a href="#" class="position">
                                            Medicine Specialist
                                        </a>
                                    </div>
                                    <a href="#" class="image">
                                        <img src="{{ asset('image/team-item/team-item-3.jpg') }}" data-src="{{ asset('image/team-item/team-item-3.jpg') }}" alt="" class="lazyload">
                                    </a>
                                    <div class="bottom-btn">
                                        <a href="#" class="tf-btn style-small style-border hover-bg-red">
                                            <span class="color-title">Make Appointment</span>
                                            <i class="icon-arrow-right color-title"></i>
                                        </a>
                                    </div>
                                    <ul class="post-social style-border">
                                        <li><a href="#" class="icon-social"><i class="icon-facebook"></i></a></li>
                                        <li><a href="#" class="icon-social"><i class="icon-twitter"></i></a></li>
                                        <li><a href="#" class="icon-social"><i class="icon-linkedin2"></i></a></li>
                                        <li><a href="#" class="icon-social"><i class="icon-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team-item hover-img px-mobile-sm">
                                    <div class="top-item">
                                        <h5 class="name-team">
                                            <a href="#">Columbus A. Davis</a>
                                        </h5>
                                        <a href="#" class="position">
                                            Neuro Surgeon
                                        </a>
                                    </div>
                                    <a href="#" class="image">
                                        <img src="{{ asset('image/team-item/team-item-4.jpg') }}" data-src="{{ asset('image/team-item/team-item-4.jpg') }}" alt="" class="lazyload">
                                    </a>
                                    <div class="bottom-btn">
                                        <a href="#" class="tf-btn style-small style-border hover-bg-red">
                                            <span class="color-title">Make Appointment</span>
                                            <i class="icon-arrow-right color-title"></i>
                                        </a>
                                    </div>
                                    <ul class="post-social style-border">
                                        <li><a href="#" class="icon-social"><i class="icon-facebook"></i></a></li>
                                        <li><a href="#" class="icon-social"><i class="icon-twitter"></i></a></li>
                                        <li><a href="#" class="icon-social"><i class="icon-linkedin2"></i></a></li>
                                        <li><a href="#" class="icon-social"><i class="icon-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sw-pagination-team sw-pagination d-xl-none mt-15 justify-content-center"></div>
                </div>
            </section>

            <section class="section-why h-1">
                <div class="tf-container">
                    <div class="row rg-19">
                        <div class="col-xl-6">
                            <div class="heading-section style-2 px-mobile-sm tf-animate-1">
                                <div class="img-item item-1">
                                    <img src="{{ asset('image/section/bg-section-why-h1.png') }}" data-src="{{ asset('image/section/bg-section-why-h1.png') }}" alt="" class="lazyload">
                                </div>
                                <div class="img-item item-2">
                                    <img src="{{ asset('image/section/item-section-why-h1.png') }}" data-src="{{ asset('image/section/item-section-why-h1.png') }}" alt="" class="lazyload">
                                </div>
                                <h6 class="sub-title mb-10">
                                    Why Choose Us
                                </h6>
                                <h2 class="title">
                                    Advanced Medical Care
                                    with a Human Touch
                                </h2>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="about-item style-desc px-mobile-sm tf-animate-1" data-delay=".3s">
                                <span class="number-item">1</span>
                                <div class="item-content">
                                    <h5 class="title"><a href="#">Experienced and Compassionate Care</a></h5>
                                    <div class="desc">Team highly trained doctors, nurses healthcare patient.</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="about-item style-desc px-mobile-sm tf-animate-1" data-delay=".6s">
                                <span class="number-item">2</span>
                                <div class="item-content">
                                    <h5 class="title"><a href="#">Advanced Medical Technology</a></h5>
                                    <div class="desc">Team highly trained doctors, nurses healthcare patient.</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="about-item style-desc px-mobile-sm tf-animate-4" data-delay=".6s">
                                <span class="number-item">3</span>
                                <div class="item-content">
                                    <h5 class="title"><a href="#">Emergency and Support Services</a></h5>
                                    <div class="desc">Team highly trained doctors, nurses healthcare patient.</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="about-item style-desc px-mobile-sm tf-animate-4" data-delay=".3s">
                                <span class="number-item">4</span>
                                <div class="item-content">
                                    <h5 class="title"><a href="#">Patient-Centered Approach</a></h5>
                                    <div class="desc">Team highly trained doctors, nurses healthcare patient.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="image tf-animate-4">
                                <img src="{{ asset('image/section/img-section-why-h1.jpg') }}" data-src="{{ asset('image/section/img-section-why-h1.jpg') }}" alt="" class="lazyload">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-lab h-1 tf-spacing-2 mx-30">
                <div class="section-lab-inner">
                    <div class="image">
                        <img src="{{ asset('image/section/img-section-lab-h1.jpg') }}" data-src="{{ asset('image/section/img-section-lab-h1.jpg') }}" alt="" class="lazyload parallax-img">
                    </div>
                    <div class="top-section">
                        <div class="tf-container">
                            <div class="row justify-content-between rg-70">
                                <div class="col-lg-4">
                                    <div class="wg-year-ex px-mobile-sm z-5">
                                        <div class="counter-item">
                                            <div class="counter">
                                                <div class="number-counter flex">
                                                    <h1 class="number odometer color-primary" data-to="25" data-inviewport="yes"> 0 </h1>
                                                    <h1 class="color-primary">+</h1>
                                                </div>
                                                <h4 class="title-counter fw6">
                                                    Years Of Experience
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="img-item">
                                            <img src="{{ asset('image/logo/logo-box-year-ex.svg') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="box-features z-5">
                                        <div class="image-box">
                                            <img src="{{ asset('image/section/item-section-lap-h1-1.png') }}" data-src="{{ asset('image/section/item-section-lap-h1-1.png') }}" alt="" class="lazyload">
                                        </div>
                                        <div class="box-content px-mobile-sm">
                                            <div class="item">
                                                <h3 class="title wow fadeInUp" data-wow-delay=".2s">
                                                    Specialized Healthcare
                                                </h3>
                                                <div class="desc wow fadeInUp" data-wow-delay=".2s">
                                                    Medical care services offer a wide range of treatments, from routine check-ups to specialized care in cardiology
                                                </div>
                                            </div>

                                            <div class="item">
                                                <h3 class="title wow fadeInUp" data-wow-delay=".2s">
                                                    24/7 Emergency & Critical Care
                                                </h3>
                                                <div class="desc wow fadeInUp" data-wow-delay=".2s">
                                                    Timely medical attention can save lives, which is why top-tier medical care services provide round-the-clock emergency care
                                                </div>
                                            </div>

                                            <div class="item">
                                                <h3 class="title wow fadeInUp" data-wow-delay=".2s">
                                                    Patient-Centered Services
                                                </h3>
                                                <div class="desc wow fadeInUp" data-wow-delay=".2s">
                                                    Healthcare today is more accessible ever easy appointment scheduling, telemedicine consultations, and home care services.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bottom-section tf-spacing-5">
                        <div class="img-item item-1">
                            <img src="{{ asset('image/section/item-section-lap-1.png') }}" data-src="{{ asset('image/section/item-section-lap-1.png') }}" alt="" class="lazyload">
                        </div>
                        <div class="img-item item-2">
                            <img src="{{ asset('image/section/item-section-lap-1.png') }}" data-src="{{ asset('image/section/item-section-lap-1.png') }}" alt="" class="lazyload">
                        </div>
                        <div class="tf-container">
                            <div class="">
                                <div class="heading-section style-white flex align-items-end justify-content-between flex-wrap g-30 rg-10 mb-70">
                                    <div class="left">
                                        <h6 class="sub-title mb-10 text-anime">
                                            Specialized CRO Capabilities
                                        </h6>
                                        <h2 class="title text-anime">
                                            Inspection-Ready Systems,
                                            <br>Compliance &amp; Regulatory Excellence
                                        </h2>
                                    </div>
                                    <div class="list-btn flex align-items-center g-20">
                                        <a class="arrow-btn style-border arrow-prev lab-prev">
                                            <i class="icon-arrow-left"></i>
                                        </a>
                                        <a class="arrow-btn style-border arrow-next lab-next">
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
                                    "575": { "slidesPerView": 2, "slidesPerGroup": 2},
                                    "991": { "slidesPerView": 3, "slidesPerGroup": 3},
                                    "1150": { "slidesPerView": 4, "slidesPerGroup": 1}
                                    }
                                }'>
                                <div class="swiper-wrapper">
                                    @foreach (['etmf-management', 'regulatory-affairs', 'cro-selection', 'gcp-glp-audit', 'statistical-services'] as $featuredSlug)
                                        @if (isset($allServices[$featuredSlug]))
                                            @php($featured = $allServices[$featuredSlug])
                                            <div class="swiper-slide">
                                                <div class="lab-item px-mobile-sm">
                                                    <div class="icon">
                                                        <div style="width: 56px; height: 56px; border-radius: 14px; background: rgba(0, 119, 200, 0.1); color: #0077C8; display: inline-flex; align-items: center; justify-content: center; font-size: 24px;">
                                                            <i class="{{ $featured['icon'] }}"></i>
                                                        </div>
                                                    </div>

                                                    <h5 class="name-lab lh-30">
                                                        <a href="{{ route('services.details', ['service' => $featured['slug']]) }}">{{ $featured['title'] }}</a>
                                                    </h5>

                                                    <div class="desc">
                                                        {{ \Illuminate\Support\Str::limit($featured['short_desc'], 105) }}
                                                    </div>

                                                    <div class="line"></div>

                                                    <div class="price">
                                                        <span class="fw5">Division :</span>
                                                        <h6 style="margin: 0;">{{ $featured['category_name'] }}</h6>
                                                    </div>

                                                    <a href="{{ route('services.details', ['service' => $featured['slug']]) }}" class="tf-btn style-small style-gray-light">
                                                        <span>Explore Service</span>
                                                        <i class="icon-arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            <div class="sw-pagination-lab sw-pagination d-xl-none mt-15 justify-content-center style-white"></div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-testimonials h-1 tf-spacing-3">
                <div class="tf-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="heading-section mb-70 text-center">
                                <h6 class="sub-title mb-10 text-anime">
                                    Our Testimonials
                                </h6>
                                <h2 class="title text-anime">
                                    Your Health, Our Commitment
                                    <br>Hear from Our Patients
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tf-container">
                    <div class="row rg-30">
                        <div class="col-md-4 col-sm-6">
                            <div class="testimonials-item style-video">
                                <div class="image">
                                    <img src="{{ asset('image/testimonials-item/testimonial-video.jpg') }}" data-src="{{ asset('image/testimonials-item/testimonial-video.jpg') }}" alt="" class="lazyload">
                                </div>
                                <div class="testimonials-content px-mobile-md">
                                    <a href="https://www.youtube.com/watch?v=XHOmBV4js_E" class="popup-youtube">
                                        <div class="icon">
                                            <i class="icon-play color-red"></i>
                                        </div>
                                    </a>
                                    <div class="user-testimonials flex align-items-end">
                                        <h5 class="name-user"><a href="#">Bill M. Ramirez,</a></h5>
                                        <a href="#" class="position">Managing Director</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-6">
                            <div class="swiper tf-swiper sw-testimonials" data-swiper='{
                                "slidesPerView": 1,
                                "spaceBetween": 30,
                                "autoHeight": false,
                                "speed" : 800,
                                "navigation": {
                                    "clickable": true,
                                    "nextEl": ".testimonials-next",
                                    "prevEl": ".testimonials-prev"
                                },  
                                "pagination": { "el": ".sw-pagination-testimonials", "clickable": true },
                                "breakpoints": {
                                    "992": { "slidesPerView": 2, "slidesPerGroup": 1}
                                    }
                                }'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="testimonials-item px-mobile-md style-1">
                                            <div class="rating flex">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                            </div>
                                            <h4 class="title lh-35">
                                                <a href="#">"Exceptional Care and Compassion"</a>
                                            </h4>
                                            <h6 class="desc lh-32">
                                                “The doctors and nurses at provided me with outstanding care. From the moment walked
                                                care expertise and kindness."
                                            </h6>
                                            <div class="icon">
                                                <i class="icon-groud-chat"></i>
                                            </div>
                                            <div class="user-testimonials flex align-items-end">
                                                <h5 class="name-user"><a href="#">Nicolas M. Baldwin,</a></h5>
                                                <a href="#" class="position">Businessman</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="testimonials-item px-mobile-md style-1">
                                            <div class="rating flex">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                            </div>
                                            <h4 class="title lh-35">
                                                <a href="#">"Professional & Attentive Medical Staff"</a>
                                            </h4>
                                            <h6 class="desc lh-32">
                                                "I am incredibly grateful for
                                                the team at They listened my concerns, explained treatment plan clearly, and ensured!"
                                            </h6>
                                            <div class="icon">
                                                <i class="icon-groud-chat"></i>
                                            </div>
                                            <div class="user-testimonials flex align-items-end">
                                                <h5 class="name-user"><a href="#">Michael L. Russell,</a></h5>
                                                <a href="#" class="position">CEO & Founder</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="testimonials-item px-mobile-md style-1">
                                            <div class="rating flex">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                            </div>
                                            <h4 class="title lh-35">
                                                <a href="#">"Exceptional Care and Compassion"</a>
                                            </h4>
                                            <h6 class="desc lh-32">
                                                “The doctors and nurses at provided me with outstanding care. From the moment walked
                                                care expertise and kindness."
                                            </h6>
                                            <div class="icon">
                                                <i class="icon-groud-chat"></i>
                                            </div>
                                            <div class="user-testimonials flex align-items-end">
                                                <h5 class="name-user"><a href="#">Nicolas M. Baldwin,</a></h5>
                                                <a href="#" class="position">Businessman</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="testimonials-item px-mobile-md style-1">
                                            <div class="rating flex">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                            </div>
                                            <h4 class="title lh-35">
                                                <a href="#">"Exceptional Care and Compassion"</a>
                                            </h4>
                                            <h6 class="desc lh-32">
                                                “The doctors and nurses at provided me with outstanding care. From the moment walked
                                                care expertise and kindness."
                                            </h6>
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
                            <div class="sw-pagination-testimonials sw-pagination d-sm-none mt-15 justify-content-center"></div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-banner h-1 mx-30">
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
                                    <div class="benefit-items body-2 wow fadeInUp" data-wow-delay=".2s">
                                        <i class="icon-check"></i>
                                        <span class="body-2">Advanced Medical Technology</span>
                                    </div>
                                    <div class="benefit-items body-2 wow fadeInUp" data-wow-delay=".4s">
                                        <i class="icon-check"></i>
                                        <span class="body-2">Specialized Treatments & Services</span>
                                    </div>
                                </div>
                                <div class="text-anime-wave">
                                    <a href="{{ route('contact') }}" class="tf-btn hover-bg-white">
                                        <span>Contact Us</span>
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

            <section class="section-blog h-1 tf-spacing-2">
                <div class="tf-container">
                    <div class="heading-section mb-70 text-center">
                        <h6 class="sub-title mb-10 text-anime">
                            Blog & News
                        </h6>
                        <h2 class="title text-anime">
                            Stay Informed The Latest in
                            <br>Medical Care & Wellness
                        </h2>
                    </div>
                </div>
                <div class="tf-container">
                    <div class="row rg-30">
                        <div class="col-lg-6">
                            <div class="tf-post-grid style-absolute">
                                <a href="{{ route('blog.details') }}" class="image">
                                    <img src="{{ asset('image/blog/tf-post-absolute-1.jpg') }}" data-src="{{ asset('image/blog/tf-post-absolute-1.jpg') }}" alt="">
                                </a>
                                <div class="tf-grid-post-content px-mobile-sm">
                                    <a href="{{ route('blog.details') }}" class="title-post">Understanding Telemedicine The New Era of Virtual Care</a>
                                    <ul class="post-metas style-2 flex-wrap">
                                        <li class="metas-item"><a href="#">Medical Care</a></li>
                                        <li class="metas-item"><a href="#">10 February 2025</a></li>
                                        <li class="metas-item"><a href="#">Comments (5)</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="list-post">
                                <div class="tf-post-list style-small small-2 hover-img">
                                    <a href="{{ route('blog.details') }}" class="image">
                                        <img src="{{ asset('image/blog/tf-post-list-4.jpg') }}" data-src="{{ asset('image/blog/tf-post-list-4.jpg') }}" alt="" class="lazyload">
                                    </a>
                                    <div class="post-content px-mobile-sm">
                                        <h5>
                                            <a href="{{ route('blog.details') }}" class="name-post">
                                                The Future of Healthcare Innovations in Medical Care
                                            </a>
                                        </h5>
                                        <ul class="post-metas style-2">
                                            <li class="metas-item"><a href="#">05 Feb 2025</a></li>
                                            <li class="metas-item"><a href="#">Comments (5)</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="tf-post-list style-small small-2 hover-img">
                                    <a href="{{ route('blog.details') }}" class="image">
                                        <img src="{{ asset('image/blog/tf-post-list-6.jpg') }}" data-src="{{ asset('image/blog/tf-post-list-6.jpg') }}" alt="" class="lazyload">
                                    </a>
                                    <div class="post-content px-mobile-sm">
                                        <h5>
                                            <a href="{{ route('blog.details') }}" class="name-post">
                                                Emergency Car You Need to Know Before a Crisis
                                            </a>
                                        </h5>
                                        <ul class="post-metas style-2">
                                            <li class="metas-item"><a href="#">05 Feb 2025</a></li>
                                            <li class="metas-item"><a href="#">Comments (5)</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="tf-post-list style-small small-2 hover-img">
                                    <a href="{{ route('blog.details') }}" class="image">
                                        <img src="{{ asset('image/blog/tf-post-list-5.jpg') }}" data-src="{{ asset('image/blog/tf-post-list-5.jpg') }}" alt="" class="lazyload">
                                    </a>
                                    <div class="post-content px-mobile-sm">
                                        <h5>
                                            <a href="{{ route('blog.details') }}" class="name-post">
                                                Best Role of Mental Health in Overall Well-Being
                                            </a>
                                        </h5>
                                        <ul class="post-metas style-2">
                                            <li class="metas-item"><a href="#">05 Feb 2025</a></li>
                                            <li class="metas-item"><a href="#">Comments (5)</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="wg-brand tf-spacing-3 mx-30">
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
