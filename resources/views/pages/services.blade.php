@extends('layouts.app')

@section('title', 'Services - Clineva Research Laboratories')

@section('content')
<div class="page-title mt-30">
    <div class="mx-30">
        <div class="page-title-content paralax-bg">
            <h1 class="title text-anime">
                Our Services
            </h1>
            <div class="breadkcum text-anime">
                <h3><a href="{{ route('home') }}" class="link-breadkcum">Home</a></h3>
                <span class="dot bg-white mx-27"></span>
                <h3 class="page-breadkcum pl-0">Services</h3>
            </div>
        </div>
    </div>
</div>

<div class="main-content">

    <!-- Clinical Trials Section -->
    <section class="services-hub-section">
        <div class="tf-container">
            <div class="heading-section text-center mb-50">
                <div class="services-cat-badge">
                    <i class="icon-stethoscope"></i>
                    <span>Division 01</span>
                </div>
                <h2 class="title mb-15 text-anime">
                    {{ $categories['clinical-trials']['name'] }}
                </h2>
                <p class="desc mx-auto" style="max-width: 720px; font-size: 16.5px; color: var(--color-paragraph);">
                    {{ $categories['clinical-trials']['description'] }}
                </p>
            </div>

            <div class="row rg-30">
                @foreach($clinicalServices as $service)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".1s">
                    <div class="clineva-service-card">
                        <div class="card-top">
                            <div class="service-icon-box">
                                <i class="{{ $service['icon'] }}"></i>
                            </div>
                        </div>
                        <h4 class="service-title">
                            <a href="{{ route('services.details', ['service' => $service['slug']]) }}">{{ $service['title'] }}</a>
                        </h4>
                        <p class="service-desc">
                            {{ $service['short_desc'] }}
                        </p>
                        <a href="{{ route('services.details', ['service' => $service['slug']]) }}" class="service-link-btn">
                            <span>Explore Service</span>
                            <i class="icon-arrow-right"></i>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- BA/BE Services Section -->
    <section class="services-hub-section bg-soft">
        <div class="tf-container">
            <div class="heading-section text-center mb-50">
                <div class="services-cat-badge">
                    <i class="icon-atom-simple"></i>
                    <span>Division 02</span>
                </div>
                <h2 class="title mb-15 text-anime">
                    {{ $categories['babe-services']['name'] }}
                </h2>
                <p class="desc mx-auto" style="max-width: 720px; font-size: 16.5px; color: var(--color-paragraph);">
                    {{ $categories['babe-services']['description'] }}
                </p>
            </div>

            <div class="row rg-30 justify-content-center">
                @foreach($babeServices as $service)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".1s">
                    <div class="clineva-service-card">
                        <div class="card-top">
                            <div class="service-icon-box">
                                <i class="{{ $service['icon'] }}"></i>
                            </div>
                        </div>
                        <h4 class="service-title">
                            <a href="{{ route('services.details', ['service' => $service['slug']]) }}">{{ $service['title'] }}</a>
                        </h4>
                        <p class="service-desc">
                            {{ $service['short_desc'] }}
                        </p>
                        <a href="{{ route('services.details', ['service' => $service['slug']]) }}" class="service-link-btn">
                            <span>Explore Service</span>
                            <i class="icon-arrow-right"></i>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Medical Affairs & Medico-Marketing Spotlight -->
    @foreach($medicoMarketingServices as $medicoService)
    <section class="services-hub-section">
        <div class="tf-container">
            <div class="medico-spotlight-card wow fadeInUp" data-wow-delay=".15s">
                <div class="row align-items-center rg-30">
                    <div class="col-lg-8">
                        <span class="services-cat-badge" style="background: rgba(255,255,255,0.14); color: #38bdf8; border: 1px solid rgba(255,255,255,0.2);">
                            <i class="{{ $medicoService['icon'] }}"></i>
                            <span>Division 03</span>
                        </span>
                        <h2 style="color: #ffffff; font-size: 32px; font-weight: 700; margin-bottom: 14px;">
                            {{ $medicoService['title'] }}
                        </h2>
                        <p style="color: rgba(255,255,255,0.88); font-size: 16px; line-height: 1.7; margin-bottom: 0;">
                            {{ $medicoService['paragraphs'][0] }}
                        </p>
                        <div class="spotlight-pills">
                            @foreach($medicoService['deliverables'] as $item)
                                <span class="spotlight-pill">{{ $item }}</span>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a href="{{ route('services.details', ['service' => $medicoService['slug']]) }}" class="tf-btn hover-bg-white">
                            <span>View Full Details</span>
                            <i class="icon-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endforeach

</div>
@endsection
