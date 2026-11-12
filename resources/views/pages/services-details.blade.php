@extends('layouts.app')

@section('title', $currentService['title'] . ' - Clineva Research Laboratories')

@section('content')
<div class="page-title mt-30">
    <div class="mx-30">
        <div class="page-title-content paralax-bg">
            <h1 class="title">
                {{ $currentService['title'] }}
            </h1>
            <div class="breadkcum">
                <h3><a href="{{ route('home') }}" class="link-breadkcum">Home</a></h3>
                <span class="dot bg-white mx-25"></span>
                <h3><a href="{{ route('services') }}" class="link-breadkcum">Services</a></h3>
                <span class="dot bg-white mx-25"></span>
                <h3 class="page-breadkcum pl-0">{{ $currentService['title'] }}</h3>
            </div>
        </div>
    </div>
</div>

<div class="main-content">
    <div class="wg-services-details tf-spacing-1">
        <div class="tf-container">
            <div class="row rg-30">
                <!-- Left Sidebar Navigation -->
                <div class="col-lg-4">
                    <div class="tf-sidebar">

                        <div class="sidebar-item sidebar-style-2 sidebar-content sidebar-categories px-mobile-sm">
                            <h4 class="title-content">
                                Our Services
                            </h4>

                            <div class="sidebar-group-title">Clinical Trials</div>
                            <ul class="list mb-15">
                                @foreach($clinicalServices as $item)
                                <li class="item {{ $currentService['slug'] === $item['slug'] ? 'active' : '' }}">
                                    <a href="{{ route('services.details', ['service' => $item['slug']]) }}">{{ $item['title'] }}</a>
                                    <i class="icon-arrow-right"></i>
                                </li>
                                @endforeach
                            </ul>

                            <div class="sidebar-group-title">BA/BE Services</div>
                            <ul class="list mb-15">
                                @foreach($babeServices as $item)
                                <li class="item {{ $currentService['slug'] === $item['slug'] ? 'active' : '' }}">
                                    <a href="{{ route('services.details', ['service' => $item['slug']]) }}">{{ $item['title'] }}</a>
                                    <i class="icon-arrow-right"></i>
                                </li>
                                @endforeach
                            </ul>

                            <div class="sidebar-group-title">Medical Affairs</div>
                            <ul class="list">
                                @foreach($medicoMarketingServices as $item)
                                <li class="item {{ $currentService['slug'] === $item['slug'] ? 'active' : '' }}">
                                    <a href="{{ route('services.details', ['service' => $item['slug']]) }}">{{ $item['title'] }}</a>
                                    <i class="icon-arrow-right"></i>
                                </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="sidebar-item sidebar-banner">
                            <h6 class="sub-title lsp-0">
                                Partner With Clineva
                            </h6>
                            <div class="title">
                                Need Clinical Research Expertise?
                            </div>
                            <div class="benefit-list">
                                <div class="benefit-items body-2">
                                    <i class="icon-check"></i>
                                    <span class="body-2">GCP &amp; GLP Compliant Execution</span>
                                </div>
                                <div class="benefit-items body-2">
                                    <i class="icon-check"></i>
                                    <span class="body-2">Global Regulatory Alignment</span>
                                </div>
                            </div>

                            <a href="{{ route('contact') }}" class="tf-btn">
                                <span>Request Consultation</span>
                                <i class="icon-arrow-right"></i>
                            </a>
                            <h5 class="number-phone">
                                <i class="icon-phone"></i>
                                <a href="tel:+919870484499">+91 9870484499</a>
                            </h5>
                        </div>

                    </div>
                </div>

                <!-- Right Main Service Content -->
                <div class="col-lg-8">
                    <div class="details-content services-details-content">

                        <div class="service-detail-header">
                            <span class="services-cat-badge">
                                <i class="{{ $currentService['icon'] }}"></i>
                                <span>{{ $currentService['category_name'] }}</span>
                            </span>
                            <h2 class="title-content mb-0">
                                {{ $currentService['title'] }}
                            </h2>
                            <div class="service-subtitle">
                                {{ $currentService['subtitle'] }}
                            </div>
                        </div>

                        <div class="service-detail-paragraphs">
                            @foreach($currentService['paragraphs'] as $paragraph)
                                <p>{{ $paragraph }}</p>
                            @endforeach
                        </div>

                        <div class="service-hero-banner">
                            <img src="{{ asset($currentService['image']) }}" alt="{{ $currentService['title'] }}">
                        </div>

                        @if(!empty($currentService['deliverables']))
                        <div>
                            <h3 class="service-deliverables-title">
                                {{ $currentService['deliverables_title'] }}
                            </h3>
                            <div class="service-deliverables-grid">
                                @foreach($currentService['deliverables'] as $deliverable)
                                <div class="deliverable-card">
                                    <div class="check-badge">
                                        <i class="icon-check"></i>
                                    </div>
                                    <div class="deliverable-text">
                                        {{ $deliverable }}
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @endif

                        @if(!empty($currentService['subsections']))
                        <div class="service-subsections-list">
                            @foreach($currentService['subsections'] as $index => $subsec)
                            <div class="subsection-card">
                                <div class="subsec-head">
                                    <span class="subsec-num">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                                    <h4>{{ $subsec['title'] }}</h4>
                                </div>
                                <p>{{ $subsec['desc'] }}</p>
                            </div>
                            @endforeach
                        </div>
                        @endif

                        @if(!empty($currentService['highlights']))
                        <div class="service-highlights-grid">
                            @foreach($currentService['highlights'] as $highlight)
                            <div class="service-highlight-box">
                                <h6>{{ $highlight['title'] }}</h6>
                                <p>{{ $highlight['desc'] }}</p>
                            </div>
                            @endforeach
                        </div>
                        @endif

                        <div class="service-cta-strip">
                            <div>
                                <h4>Ready to Discuss {{ $currentService['title'] }}?</h4>
                                <p>Connect with our clinical &amp; regulatory specialists for tailored study support.</p>
                            </div>
                            <a href="{{ route('contact') }}" class="tf-btn hover-bg-white">
                                <span>Contact Us</span>
                                <i class="icon-arrow-right"></i>
                            </a>
                        </div>

                        <div class="service-pager">
                            @if($prevService)
                                <a href="{{ route('services.details', ['service' => $prevService['slug']]) }}" class="pager-link">
                                    <i class="icon-arrow-left"></i>
                                    <div>
                                        <span class="pager-label">Previous Service</span>
                                        <span class="pager-title">{{ $prevService['title'] }}</span>
                                    </div>
                                </a>
                            @else
                                <div></div>
                            @endif

                            @if($nextService)
                                <a href="{{ route('services.details', ['service' => $nextService['slug']]) }}" class="pager-link text-end">
                                    <div>
                                        <span class="pager-label">Next Service</span>
                                        <span class="pager-title">{{ $nextService['title'] }}</span>
                                    </div>
                                    <i class="icon-arrow-right"></i>
                                </a>
                            @endif
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
