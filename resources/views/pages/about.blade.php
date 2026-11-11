@extends('layouts.app')

@section('title', 'About Us - Clineva Research Laboratories')

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

    <!-- Company Overview Section -->
    <section class="section-about p-about tf-spacing-1">
        <div class="tf-container">
            <div class="row">
                <div class="col-12">
                    <div class="heading-section mb-50">
                        <h6 class="sub-title mb-10 text-anime">
                            About Clineva
                        </h6>
                        <h2 class="title mb-30 wow fadeInUp" data-wow-delay=".2s">
                            A Perfect Blend of Technology, Innovation, and Clinical Expertise
                        </h2>
                        <div class="about-lead-paragraphs wow fadeInUp" data-wow-delay=".25s">
                            <p>
                                Clineva is established by a team of highly-qualified clinical research industry professionals with diverse experience in the pharmaceutical industry. Our motto is to provide quality and cost-effective clinical, regulatory, and medical monitoring &amp; medico-marketing services to clients from the Pharmaceutical, Biotechnology, and Medical Device space across the globe.
                            </p>
                            <p>
                                Clineva is a perfect blend of technology, innovation, and expertise, which enables us to provide reliable, cost-effective, and technology-driven services and solutions to our clients across the globe. Our commitment to quality and customer-focused approach bundled with outstanding expertise distinguishes us from others.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="bottom-section flex g-10">
                        <div class="image tf-animate-1">
                            <img src="{{ asset('image/section/img-section-about-p-about.jpg') }}" data-src="{{ asset('image/section/img-section-about-p-about.jpg') }}" alt="Clineva Research Laboratories Team">
                        </div>
                        <div class="list-item px-mobile-sm">
                            <div class="about-item style-list">
                                <div class="top-item flex g-30 align-items-center">
                                    <div class="wow fadeInUp" data-wow-delay=".2s">
                                        <h6 class="number-item">1</h6>
                                    </div>
                                    <div class="wow fadeInUp" data-wow-delay=".3s">
                                        <h6 class="title lh-30">
                                            World-Class Experienced Workforce
                                        </h6>
                                    </div>
                                </div>
                                <div class="desc wow fadeInUp" data-wow-delay=".4s">
                                    Our world-class team of highly qualified and experienced workforce enables us to meet client expectations and deliver projects strictly within the timeframe.
                                </div>
                            </div>
                            <div class="about-item style-list">
                                <div class="top-item flex g-30 align-items-center">
                                    <div class="wow fadeInUp" data-wow-delay=".2s">
                                        <h6 class="number-item">2</h6>
                                    </div>
                                    <div class="wow fadeInUp" data-wow-delay=".3s">
                                        <h6 class="title lh-30">
                                            Inception-to-Completion Solutions
                                        </h6>
                                    </div>
                                </div>
                                <div class="desc wow fadeInUp" data-wow-delay=".4s">
                                    Our service portfolio enables us to provide an integrated solution for the management of clinical data right from its inception to completion.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Mission & Our Vision Section -->
    <section class="clineva-mv-section">
        <div class="tf-container">
            <div class="heading-section text-center mb-50">
                <h6 class="sub-title mb-10 text-anime">
                    Purpose &amp; Direction
                </h6>
                <h2 class="title text-anime">
                    Our Mission &amp; Our Vision
                </h2>
            </div>
            <div class="row rg-30">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".1s">
                    <div class="clineva-mv-card card-mission">
                        <div class="mv-icon">
                            <i class="icon-rocket-launch"></i>
                        </div>
                        <span class="mv-label">What Drives Us</span>
                        <h3 class="mv-title">Our Mission</h3>
                        <p class="mv-desc">
                            Our Mission is to be the preferred and trusted consulting partner for global pharmaceuticals and healthcare industry and to create benchmark by ensuring quality, reliability, integrity and ethical values.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="clineva-mv-card card-vision">
                        <div class="mv-icon">
                            <i class="icon-eye"></i>
                        </div>
                        <span class="mv-label">Where We Are Going</span>
                        <h3 class="mv-title">Our Vision</h3>
                        <p class="mv-desc">
                            To be recognized as one of the best service providers for Pharmaceuticals, Medical Device and Healthcare Industry across the globe.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Core Values Section -->
    <section class="clineva-values-section">
        <div class="tf-container">
            <div class="heading-section text-center mb-60">
                <h6 class="sub-title mb-10 text-anime">
                    Our Values
                </h6>
                <h2 class="title text-anime">
                    Built on Quality, Reliability &amp; Integrity
                </h2>
            </div>
            <div class="row rg-30">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".1s">
                    <div class="clineva-value-card">
                        <div class="value-top">
                            <div class="value-icon">
                                <i class="icon-safety"></i>
                            </div>
                            <span class="value-num">01</span>
                        </div>
                        <h4 class="value-title">Quality</h4>
                        <p class="value-desc">
                            Quality is the foundation of our success and remains the core of all our processes. The quality principles and practices are integrated into our activities right from generating reliable and accurate data to customer service. The aim of strengthening compliance and innovating solutions for our clients and partners is an ongoing priority for us always.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="clineva-value-card">
                        <div class="value-top">
                            <div class="value-icon">
                                <i class="icon-cutting-edge"></i>
                            </div>
                            <span class="value-num">02</span>
                        </div>
                        <h4 class="value-title">Reliability</h4>
                        <p class="value-desc">
                            We here at Clineva aim to ensure that all transactions, events, and business activities are dependable, transparent, and reliable. We strive to provide the best and safest practices with respect to adhering to the standards of the pharmaceutical and healthcare industry.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay=".3s">
                    <div class="clineva-value-card">
                        <div class="value-top">
                            <div class="value-icon">
                                <i class="icon-lock"></i>
                            </div>
                            <span class="value-num">03</span>
                        </div>
                        <h4 class="value-title">Integrity</h4>
                        <p class="value-desc">
                            Integrity is vital to our sustainability and we are committed to upholding the highest standards of integrity even in the face of challenges.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Capabilities & Industry Focus -->
    <section class="section-why p-about tf-spacing-11" style="background-color: #F8FAFC;">
        <div class="tf-container">
            <div class="heading-section text-center mb-70">
                <h6 class="sub-title mb-10 color-paragraph text-anime">
                    Why Choose Clineva
                </h6>
                <h2 class="title mb-20 text-anime">
                    Global Expertise Across Pharma,
                    <br>Biotech &amp; Medical Devices
                </h2>
            </div>
            <div class="row rg-30 align-items-center">
                <div class="col-lg-6">
                    <div class="list-why-item position-relative">
                        <div class="why-item style-border px-mobile-sm wow fadeInUp">
                            <div class="icon wow fadeInUp">
                                <i class="icon-stethoscope color-red"></i>
                            </div>
                            <div class="item-content">
                                <h4 class="title wow fadeInUp" data-wow-delay=".1s">
                                    <a href="{{ route('services.details', ['service' => 'clinical-operations']) }}">Clinical Trial Services</a>
                                </h4>
                                <div class="desc wow fadeInUp" data-wow-delay=".15s">
                                    End-to-end execution spanning Clinical Operations, Project Management, Clinical &amp; Medical Monitoring, Quality Assurance, Medical Writing, eTMF Management, Regulatory Affairs, and Statistical Services.
                                </div>
                            </div>
                        </div>
                        <div class="why-item style-border px-mobile-sm wow fadeInUp">
                            <div class="icon wow fadeInUp">
                                <i class="icon-atom-simple color-red"></i>
                            </div>
                            <div class="item-content">
                                <h4 class="title wow fadeInUp" data-wow-delay=".1s">
                                    <a href="{{ route('services.details', ['service' => 'cro-selection']) }}">BA/BE Study Services</a>
                                </h4>
                                <div class="desc wow fadeInUp" data-wow-delay=".15s">
                                    Comprehensive Bioavailability &amp; Bioequivalence support including CRO Selection, Medical Writing, Study Monitoring, Regulatory Affairs, and rigorous GCP &amp; GLP Audits.
                                </div>
                            </div>
                        </div>
                        <div class="why-item style-border px-mobile-sm wow fadeInUp">
                            <div class="icon wow fadeInUp">
                                <i class="icon-globe color-red"></i>
                            </div>
                            <div class="item-content">
                                <h4 class="title wow fadeInUp" data-wow-delay=".1s">
                                    <a href="{{ route('services.details', ['service' => 'medical-affairs-medico-marketing']) }}">Medical Affairs &amp; Medico-Marketing</a>
                                </h4>
                                <div class="desc wow fadeInUp" data-wow-delay=".15s">
                                    Scientific communication strategies, evidence-based medico-marketing solutions, and regulatory alignment tailored for global pharmaceutical and medical device sponsors.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right">
                        <div class="image-section tf-animate-4">
                            <img src="{{ asset('image/section/img-section-lab-h1.jpg') }}" data-src="{{ asset('image/section/img-section-lab-h1.jpg') }}" alt="Clineva Laboratory Research" class="lazyload">
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
                                        <span class="number odometer color-primary" data-to="100" data-inviewport="yes">0</span>
                                        <span>%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="text body-2 lh-30">
                                Commitment to Quality,
                                <br>Compliance &amp; Timely Delivery
                            </div>
                            <div class="mt-20">
                                <a href="{{ route('services') }}" class="tf-btn style-small">
                                    <span>Explore Services</span>
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Partner CTA Banner -->
    <section class="section-banner h-1 p-about mb-30 mx-30 mt-50">
        <div class="wg-banner">
            <div class="tf-container">
                <div class="banner-inner tf-spacing-2">
                    <div class="banner-content">
                        <h6 class="sub-title mb-10 text-anime">
                            Partner With Clineva
                        </h6>
                        <h2 class="title mb-30 text-anime">
                            Looking for Reliable Clinical,
                            <br>Regulatory &amp; Medico-Marketing
                            <br>Solutions Worldwide?
                        </h2>
                        <div class="benefit-list flex flex-wrap rg-30 g-50 mb-40">
                            <div class="benefit-items body-2 wow fadeInUp" data-wow-delay=".4s">
                                <i class="icon-check"></i>
                                <span class="body-2">Technology-Driven &amp; Cost-Effective</span>
                            </div>
                            <div class="benefit-items body-2 wow fadeInUp" data-wow-delay=".6s">
                                <i class="icon-check"></i>
                                <span class="body-2">Inception-to-Completion Data Management</span>
                            </div>
                        </div>
                        <div class="wow fadeInUp" data-wow-delay=".7s">
                            <a href="{{ route('contact') }}" class="tf-btn hover-bg-white">
                                <span>Contact Us</span>
                                <i class="icon-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="image img-item tf-animate-3">
                        <img src="{{ asset('image/section/banner-item.png') }}" data-src="{{ asset('image/section/banner-item.png') }}" alt="Clineva Research Laboratories" class="lazyload">
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection
