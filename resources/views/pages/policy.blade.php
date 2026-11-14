@extends('layouts.app')

@section('title', $page->meta_title ?: ($page->title . ' - Clineva Research Laboratories'))

@section('seo')
    <meta name="description" content="{{ $page->meta_description ?: 'Read our dynamic policies, clinical compliance standards, and regulatory notices at Clineva Research Laboratories.' }}">
    <link rel="canonical" href="{{ route('policy.show', ['slug' => $page->slug]) }}">
    <meta property="og:title" content="{{ $page->meta_title ?: ($page->title . ' - Clineva') }}">
    <meta property="og:description" content="{{ $page->meta_description }}">
    <meta property="og:type" content="article">
@endsection

@section('content')
<style>
    .policy-wrapper {
        padding: 50px 0 90px;
        background: #F8FAFC;
    }
    .policy-content-card {
        background: #FFFFFF;
        border-radius: 18px;
        border: 1px solid #E2E8F0;
        padding: 40px 48px;
        box-shadow: 0 4px 20px rgba(10, 28, 50, 0.04);
    }
    @media (max-width: 768px) {
        .policy-content-card {
            padding: 24px 20px;
        }
    }
    .policy-rich-body {
        font-size: 16px;
        line-height: 1.85;
        color: #334155;
    }
    .policy-rich-body h1,
    .policy-rich-body h2 {
        font-size: 23px;
        font-weight: 800;
        color: #0F172A;
        margin: 36px 0 16px;
        padding-bottom: 8px;
        border-bottom: 1.5px solid #F1F5F9;
    }
    .policy-rich-body h3 {
        font-size: 19px;
        font-weight: 700;
        color: #0F172A;
        margin: 26px 0 12px;
    }
    .policy-rich-body h4 {
        font-size: 16.5px;
        font-weight: 700;
        color: #0F172A;
        margin: 20px 0 10px;
    }
    .policy-rich-body p {
        margin-bottom: 20px;
    }
    .policy-rich-body ul,
    .policy-rich-body ol {
        margin: 16px 0 24px 24px;
        padding-left: 0;
    }
    .policy-rich-body li {
        margin-bottom: 10px;
        line-height: 1.7;
    }
    .policy-rich-body strong {
        color: #0F172A;
    }
    .policy-rich-body a {
        color: var(--primary, #0077C8);
        text-decoration: underline;
        font-weight: 600;
    }
    .policy-sidebar-card {
        background: #FFFFFF;
        border-radius: 16px;
        border: 1px solid #E2E8F0;
        padding: 26px;
        margin-bottom: 24px;
        box-shadow: 0 4px 14px rgba(10, 28, 50, 0.03);
    }
    .policy-nav-link {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 12px 16px;
        border-radius: 10px;
        font-size: 14px;
        font-weight: 600;
        color: #475569;
        text-decoration: none;
        transition: all 0.2s;
        margin-bottom: 6px;
        background: #F8FAFC;
        border: 1px solid transparent;
    }
    .policy-nav-link:hover {
        background: #F0F6FB;
        color: #0077C8;
        border-color: #DCECF7;
    }
    .policy-nav-link.active {
        background: #0077C8;
        color: #FFFFFF;
        box-shadow: 0 4px 12px rgba(0, 119, 200, 0.3);
    }
</style>

<!-- Theme Breadcrumbs Header -->
<div class="page-title page-details mt-30">
    <div class="mx-30">
        <div class="page-title-content paralax-bg">
            <div class="breadkcum text-anime">
                <h3><a href="{{ route('home') }}" class="link-breadkcum">Home</a></h3>
                <span class="dot bg-white mx-27"></span>
                <h3><span class="link-breadkcum">Compliance & Legal</span></h3>
                <span class="dot bg-white mx-27"></span>
                <h3 class="page-breadkcum pl-0">{{ $page->title }}</h3>
            </div>
            <h1 class="title text-anime">
                {{ $page->title }}
            </h1>
            <div class="post-metas position-relative">
                <div class="post-author metas-item">
                    <div class="icon"><i class="icon-tag"></i></div>
                    <span class="color-white fw7">Official Policy Document</span>
                </div>
                <div class="post-author metas-item">
                    <div class="icon"><i class="icon-calendar"></i></div>
                    <span class="color-white fw7">Effective / Last Updated: {{ (!empty($page->updated_at) && is_object($page->updated_at)) ? $page->updated_at->format('d M Y') : date('d M Y') }}</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Main Policy Body Content -->
<div class="policy-wrapper">
    <div class="tf-container">
        <div class="row">
            
            <!-- Left: Document Content -->
            <div class="col-lg-8">
                <div class="policy-content-card">
                    <div style="display: flex; align-items: center; justify-content: space-between; border-bottom: 1px solid #E2E8F0; padding-bottom: 18px; margin-bottom: 28px; flex-wrap: wrap; gap: 10px;">
                        <div>
                            <span style="font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px; color: #0077C8; background: #F0F6FB; padding: 4px 10px; border-radius: 999px;">
                                Clineva Governance
                            </span>
                        </div>
                        <div style="font-size: 13px; color: #64748B;">
                            Last Revision: <strong>{{ (!empty($page->updated_at) && is_object($page->updated_at)) ? $page->updated_at->format('F d, Y') : date('F d, Y') }}</strong>
                        </div>
                    </div>

                    <div class="policy-rich-body">
                        {!! $page->content !!}
                    </div>

                    <div style="margin-top: 40px; padding-top: 24px; border-top: 1px solid #E2E8F0; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 14px;">
                        <div style="font-size: 13.5px; color: #64748B;">
                            Questions regarding this document? Contact <a href="mailto:{{ $siteSettings['contact_email'] ?? 'priti.gotpagar@clineva.in' }}" style="color: #0077C8; font-weight: 700;">{{ $siteSettings['contact_email'] ?? 'priti.gotpagar@clineva.in' }}</a>
                        </div>
                        <button type="button" onclick="window.print()" class="btn-read-lead" style="display: inline-flex; padding: 8px 18px; font-size: 13px;">
                            Print Document
                        </button>
                    </div>
                </div>
            </div>

            <!-- Right Sidebar: Quick Navigation & Support Card -->
            <div class="col-lg-4">
                
                <!-- Quick Navigation Box -->
                <div class="policy-sidebar-card">
                    <h4 style="font-size: 17px; font-weight: 800; color: #0F172A; margin-bottom: 16px;">
                        Compliance & Legal Center
                    </h4>
                    <div>
                        @foreach($allPolicies as $item)
                            <a href="{{ route('policy.show', ['slug' => $item->slug]) }}"
                               class="policy-nav-link {{ $page->slug === $item->slug ? 'active' : '' }}">
                                <span>{{ $item->title }}</span>
                                <i class="icon-arrow-right" style="font-size: 12px;"></i>
                            </a>
                        @endforeach
                    </div>
                </div>

                <!-- Support & Inquiries Box -->
                <div class="policy-sidebar-card" style="background: linear-gradient(135deg, #0A1C32 0%, #102B4D 100%); color: #FFFFFF; border: none;">
                    <div style="font-size: 12px; font-weight: 700; text-transform: uppercase; color: #38BDF8; letter-spacing: 0.5px; margin-bottom: 8px;">
                        Quality Assurance & GCP
                    </div>
                    <h4 style="font-size: 18px; font-weight: 800; color: #FFFFFF; margin-bottom: 10px;">
                        Need Regulatory Assistance?
                    </h4>
                    <p style="font-size: 13.5px; color: #CBD5E1; line-height: 1.6; margin-bottom: 18px;">
                        Our compliance officers and QA managers are available to address confidentiality, study protocol agreements, and data privacy inquiries.
                    </p>
                    <div style="display: flex; flex-direction: column; gap: 8px; font-size: 13px; color: #E2E8F0; margin-bottom: 18px;">
                        <div>Email: <a href="mailto:{{ $siteSettings['contact_email'] ?? 'priti.gotpagar@clineva.in' }}" style="color: #38BDF8; font-weight: 700;">{{ $siteSettings['contact_email'] ?? 'priti.gotpagar@clineva.in' }}</a></div>
                        <div>Phone: <a href="tel:{{ $siteSettings['contact_phone'] ?? '+919870484499' }}" style="color: #FFFFFF; font-weight: 700;">{{ $siteSettings['contact_phone'] ?? '+91 9870484499' }}</a></div>
                    </div>
                    <a href="{{ route('contact') }}" class="btn-read-lead" style="display: block; text-align: center; background: #0077C8; color: #FFFFFF; border: none; padding: 10px 16px;">
                        Contact Compliance Team
                    </a>
                </div>

            </div>

        </div>
    </div>
</div>

@endsection
