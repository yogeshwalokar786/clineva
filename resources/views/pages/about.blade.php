@extends('layouts.app')

@php
    $pageSeo = \App\Models\Setting::getPageSeo('about');
@endphp

@section('title', $pageSeo['title'])

@section('seo')
    <meta name="description" content="{{ $pageSeo['description'] }}">
    <meta name="keywords" content="{{ $pageSeo['keywords'] }}">
    <link rel="canonical" href="{{ $pageSeo['canonical'] }}">
    <meta name="robots" content="{{ $pageSeo['robots'] }}">
    <meta property="og:title" content="{{ $pageSeo['og_title'] }}">
    <meta property="og:description" content="{{ $pageSeo['og_description'] }}">
    <meta property="og:url" content="{{ $pageSeo['canonical'] }}">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ asset($pageSeo['og_image']) }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $pageSeo['og_title'] }}">
    <meta name="twitter:description" content="{{ $pageSeo['og_description'] }}">
@endsection

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

    <!-- About Us Overview -->
    <section class="section-about p-about tf-spacing-1">
        <div class="tf-container">
            <div class="row">
                <div class="col-12">
                    <div class="heading-section mb-50">
                        <h6 class="sub-title mb-10 text-anime">
                            About Us
                        </h6>
                        <h2 class="title mb-30 wow fadeInUp" data-wow-delay=".2s">
                            Clineva Research Laboratories
                        </h2>
                        <div class="about-lead-paragraphs wow fadeInUp" data-wow-delay=".25s">
                            <p>
                                Clineva is established by a team of highly-qualified clinical research industry professionals with diverse experience in pharmaceutical industry. Our motto is to provide quality and cost-effective clinical, regulatory and medical monitoring &amp; medico-marketing services to clients from Pharmaceutical, Biotechnology and Medical device space across the globe.
                            </p>
                            <p>
                                Clineva is a perfect blend of technology, innovation, and expertise, which enables us to provide reliable, cost-effective and technology-driven services and solutions to our clients across the globe. Our commitment to quality and customer-focused approach bundled with outstanding expertise distinguishes us from others.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="bottom-section flex g-10">
                        <div class="image tf-animate-1">
                            <img src="{{ asset('image/section/img-section-about-p-about.jpg') }}" data-src="{{ asset('image/section/img-section-about-p-about.jpg') }}" alt="Clineva Research Laboratories">
                        </div>
                        <div class="list-item px-mobile-sm">
                            <div class="about-item style-list">
                                <div class="top-item flex g-30 align-items-center">
                                    <div class="wow fadeInUp" data-wow-delay=".2s">
                                        <h6 class="number-item">1</h6>
                                    </div>
                                    <div class="wow fadeInUp" data-wow-delay=".3s">
                                        <h6 class="title lh-30">
                                            Experienced Workforce
                                        </h6>
                                    </div>
                                </div>
                                <div class="desc wow fadeInUp" data-wow-delay=".4s">
                                    Our world-class team of highly qualified and experienced workforce enables us to meet the client expectations and deliver projects within the timeframe.
                                </div>
                            </div>
                            <div class="about-item style-list">
                                <div class="top-item flex g-30 align-items-center">
                                    <div class="wow fadeInUp" data-wow-delay=".2s">
                                        <h6 class="number-item">2</h6>
                                    </div>
                                    <div class="wow fadeInUp" data-wow-delay=".3s">
                                        <h6 class="title lh-30">
                                            Integrated Clinical Data Solutions
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

    <!-- Our Mission & Our Vision -->
    <section class="clineva-mv-section">
        <div class="tf-container">
            <div class="row rg-30">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".1s">
                    <div class="clineva-mv-card card-mission">
                        <div class="mv-icon">
                            <i class="icon-rocket-launch"></i>
                        </div>
                        <h3 class="mv-title">Our Mission</h3>
                        <p class="mv-desc">
                            Our mission is to be preferred and trusted service provider for pharmaceutical, biotech and health care industry and to create benchmark by ensuring quality, reliability, integrity and ethical values.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="clineva-mv-card card-vision">
                        <div class="mv-icon">
                            <i class="icon-eye"></i>
                        </div>
                        <h3 class="mv-title">Our Vision</h3>
                        <p class="mv-desc">
                            To be recognized as one of the best service providers for Pharmaceuticals, Medical Device and Health Care Industry across the globe.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Values -->
    <section class="clineva-values-section">
        <div class="tf-container">
            <div class="heading-section text-center mb-50">
                <h2 class="title text-anime">
                    Our Values
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
                            We here at Clineva aim to ensure that all transactions, events, and business activities presented in the financial statements are reliable. We thrive to provide the best and safest practices with respect to adhering to the standards of the pharmaceutical and healthcare industry.
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

    <!-- Dynamic Sponsor Consultation CTA with Location & Map Widget -->
    @include('components.cta-section')

</div>
@endsection
