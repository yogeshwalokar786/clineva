@extends('layouts.app')

@php
    $pageSeo = \App\Models\Setting::getPageSeo('contact');
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
                Contact Us
            </h1>
            <div class="breadkcum text-anime">
                <h3><a href="{{ route('home') }}" class="link-breadkcum">Home</a></h3>
                <span class="dot bg-white mx-27"></span>
                <h3 class="page-breadkcum pl-0">Contact Us</h3>
            </div>
        </div>
    </div>
</div>

<div class="main-content">
    <section class="clineva-contact-section">
        <div class="tf-container">
            <div class="row rg-30 align-items-stretch">
                <!-- Left Column: Direct Contact Details Card -->
                <div class="col-lg-5 wow fadeInUp" data-wow-delay=".1s">
                    <div class="clineva-contact-info-card">
                        <h3 class="info-title">Get in Touch</h3>
                        <p class="info-subtitle">
                            Connect with Clineva's clinical operations, regulatory affairs, and medical affairs team for inquiries or study proposals.
                        </p>

                        <div class="clineva-contact-info-list">
                            <div class="clineva-contact-info-item">
                                <div class="info-icon">
                                    <i class="icon-address"></i>
                                </div>
                                <div>
                                    <span class="info-label">Facility Location</span>
                                    <span class="info-value">{{ $siteSettings['contact_address'] ?? 'D-318, Phase II, Turbhe MIDC, TTC Industrial Area, Navi Mumbai, Maharashtra 400705' }}</span>
                                </div>
                            </div>

                            <div class="clineva-contact-info-item">
                                <div class="info-icon">
                                    <i class="icon-contacts"></i>
                                </div>
                                <div>
                                    <span class="info-label">Direct Communication</span>
                                    <a href="mailto:{{ $siteSettings['contact_email'] ?? 'priti.gotpagar@clineva.in' }}">{{ $siteSettings['contact_email'] ?? 'priti.gotpagar@clineva.in' }}</a>
                                    <a href="tel:{{ preg_replace('/[^0-9+]/', '', $siteSettings['contact_phone'] ?? '+919870484499') }}">{{ $siteSettings['contact_phone'] ?? '+91 9870484499' }}</a>
                                </div>
                            </div>

                            <div class="clineva-contact-info-item">
                                <div class="info-icon">
                                    <i class="icon-working-hours"></i>
                                </div>
                                <div>
                                    <span class="info-label">Operating Schedule</span>
                                    <span class="info-value">{{ $siteSettings['working_hours'] ?? 'Mon – Sat: 09:00 AM – 06:00 PM' }}</span>
                                    <span class="info-value" style="font-size: 13px; color: rgba(255,255,255,0.65);">Sunday: Closed / Emergency On-Call</span>
                                </div>
                            </div>
                        </div>

                        <div class="clineva-contact-social">
                            @if(!empty($siteSettings['social_facebook']))
                                <a href="{{ $siteSettings['social_facebook'] }}" target="_blank" rel="noopener" title="Facebook" aria-label="Facebook"><i class="icon-facebook"></i></a>
                            @endif
                            @if(!empty($siteSettings['social_twitter']))
                                <a href="{{ $siteSettings['social_twitter'] }}" target="_blank" rel="noopener" title="Twitter" aria-label="Twitter"><i class="icon-twitter"></i></a>
                            @endif
                            @if(!empty($siteSettings['social_linkedin']))
                                <a href="{{ $siteSettings['social_linkedin'] }}" target="_blank" rel="noopener" title="LinkedIn" aria-label="LinkedIn"><i class="icon-linkedin2"></i></a>
                            @endif
                            @if(!empty($siteSettings['social_instagram']))
                                <a href="{{ $siteSettings['social_instagram'] }}" target="_blank" rel="noopener" title="Instagram" aria-label="Instagram"><i class="icon-instagram"></i></a>
                            @endif
                            @if(!empty($siteSettings['social_youtube']))
                                <a href="{{ $siteSettings['social_youtube'] }}" target="_blank" rel="noopener" title="YouTube" aria-label="YouTube" style="display: inline-flex; align-items: center; justify-content: center;">
                                    <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                                </a>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Right Column: Minimal Inquiry Form Card -->
                <div class="col-lg-7 wow fadeInUp" data-wow-delay=".2s">
                    <div class="clineva-contact-form-card">
                        <h3 class="form-title">Send Us a Message</h3>
                        <p class="form-subtitle">
                            Share your project details below and our specialists will get back to you promptly.
                        </p>

                        @if(session('contact_success'))
                            <div class="mb-4 p-3 rounded-3" style="background: rgba(16, 185, 129, 0.1); border: 1px solid #10B981; color: #065F46; font-size: 14.5px;">
                                <strong>✓ Message Sent!</strong> {{ session('contact_success') }}
                            </div>
                        @endif

                        <form id="clinevaContactForm" action="{{ route('contact.submit') }}" method="POST">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="clineva-field-label" for="contact_name">Full Name *</label>
                                    <input type="text" id="contact_name" name="name" class="clineva-minimal-input" placeholder="Your full name" required value="{{ old('name') }}">
                                    @error('name') <span class="text-danger small">{{ $message }}</span> @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="clineva-field-label" for="contact_email">Email Address *</label>
                                    <input type="email" id="contact_email" name="email" class="clineva-minimal-input" placeholder="you@company.com" required value="{{ old('email') }}">
                                    @error('email') <span class="text-danger small">{{ $message }}</span> @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="clineva-field-label" for="contact_phone">Phone Number *</label>
                                    <input type="tel" id="contact_phone" name="phone" class="clineva-minimal-input" placeholder="+91 98704 84499" required value="{{ old('phone') }}">
                                    @error('phone') <span class="text-danger small">{{ $message }}</span> @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="clineva-field-label" for="contact_company">Company / Organization</label>
                                    <input type="text" id="contact_company" name="company" class="clineva-minimal-input" placeholder="Pharmaceutical / Biotech / CRO" value="{{ old('company') }}">
                                </div>
                                <div class="col-12">
                                    <label class="clineva-field-label" for="contact_service">Service of Interest</label>
                                    <select id="contact_service" name="service" class="clineva-minimal-select">
                                        <option value="">Select a service (Optional)</option>
                                        <option value="Clinical Operations" {{ old('service') == 'Clinical Operations' ? 'selected' : '' }}>Clinical Trials — Clinical Operations</option>
                                        <option value="Project Management" {{ old('service') == 'Project Management' ? 'selected' : '' }}>Clinical Trials — Project Management</option>
                                        <option value="Clinical Trial Monitoring" {{ old('service') == 'Clinical Trial Monitoring' ? 'selected' : '' }}>Clinical Trials — Clinical Trial Monitoring</option>
                                        <option value="Medical Monitoring" {{ old('service') == 'Medical Monitoring' ? 'selected' : '' }}>Clinical Trials — Medical Monitoring</option>
                                        <option value="Quality Assurance" {{ old('service') == 'Quality Assurance' ? 'selected' : '' }}>Clinical Trials — Quality Assurance</option>
                                        <option value="Medical Writing" {{ old('service') == 'Medical Writing' ? 'selected' : '' }}>Clinical Trials — Medical Writing</option>
                                        <option value="eTMF Management" {{ old('service') == 'eTMF Management' ? 'selected' : '' }}>Clinical Trials — eTMF Management</option>
                                        <option value="Regulatory Affairs" {{ old('service') == 'Regulatory Affairs' ? 'selected' : '' }}>Clinical Trials — Regulatory Affairs</option>
                                        <option value="Statistical Services" {{ old('service') == 'Statistical Services' ? 'selected' : '' }}>Clinical Trials — Statistical Services</option>
                                        <option value="BA/BE Services" {{ old('service') == 'BA/BE Services' ? 'selected' : '' }}>BA/BE Services (CRO Selection / Monitoring / Audits)</option>
                                        <option value="Medico-Marketing" {{ old('service') == 'Medico-Marketing' ? 'selected' : '' }}>Medical Affairs &amp; Medico-Marketing</option>
                                        <option value="General Inquiry" {{ old('service') == 'General Inquiry' ? 'selected' : '' }}>General Inquiry</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="clineva-field-label" for="contact_message">Message *</label>
                                    <textarea id="contact_message" name="message" class="clineva-minimal-textarea" placeholder="Write your message or study inquiry..." required>{{ old('message') }}</textarea>
                                    @error('message') <span class="text-danger small">{{ $message }}</span> @enderror
                                </div>
                                <div class="col-12 mt-3">
                                    <button type="submit" id="contactSubmitBtn" class="tf-btn">
                                        <span>Send Message</span>
                                        <i class="icon-arrow-right"></i>
                                    </button>
                                </div>
                            </div>

                            <div id="contactSuccessAlert" class="mt-4 p-3 rounded-3 d-none" style="background: rgba(16, 185, 129, 0.1); border: 1px solid #10B981; color: #065F46; font-size: 14.5px;">
                                <i class="icon-check me-2" style="color: #10B981;"></i>
                                <span id="contactSuccessMsg">Thank you! Your message has been received. Our team will get back to you shortly.</span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Dynamic Interactive Location Map Widget -->
            <div class="row mt-5">
                <div class="col-12 wow fadeInUp" data-wow-delay=".3s">
                    <div style="background: #FFFFFF; border: 1px solid #E2E8F0; border-radius: 20px; padding: 28px; box-shadow: 0 10px 30px rgba(10, 28, 50, 0.05);">
                        <div style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 14px; margin-bottom: 20px;">
                            <div>
                                <span style="font-size: 11.5px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.8px; color: #0077C8; background: #F0F6FB; padding: 4px 12px; border-radius: 999px;">
                                    <i class="icon-location-dot"></i> {{ $siteSettings['cta_location_badge'] ?? 'Turbhe MIDC, Navi Mumbai, India' }}
                                </span>
                                <h3 style="font-size: 22px; font-weight: 800; color: #0F172A; margin: 8px 0 4px;">Visit Our Research Facilities</h3>
                                <p style="font-size: 14px; color: #64748B; margin: 0;">{{ $siteSettings['contact_address'] ?? 'D-318, Phase II, Turbhe MIDC, TTC Industrial Area, Navi Mumbai, Maharashtra 400705' }}</p>
                            </div>
                            <div>
                                <a href="{{ $siteSettings['google_map_directions_url'] ?? 'https://maps.google.com/?q=D-318,+Phase+II,+Turbhe+MIDC,+TTC+Industrial+Area,+Navi+Mumbai,+Maharashtra+400705' }}" target="_blank" rel="noopener" class="tf-btn" style="padding: 10px 22px; font-size: 13.5px;">
                                    <span>Open in Google Maps</span>
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </div>
                        </div>

                        <div style="border-radius: 14px; overflow: hidden; border: 1px solid #E2E8F0; line-height: 0;">
                            <iframe src="{{ $siteSettings['google_map_embed'] ?? 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.8385078502014!2d73.01893427599026!3d19.070798952136015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c146e29788d7%3A0x6b44766ecad7f202!2sTurbhe%20MIDC%2C%20Navi%20Mumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin' }}" 
                                    width="100%" 
                                    height="380" 
                                    style="border:0; width: 100%; display: block;" 
                                    allowfullscreen="" 
                                    loading="lazy" 
                                    referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('clinevaContactForm');
    const alertBox = document.getElementById('contactSuccessAlert');
    const submitBtn = document.getElementById('contactSubmitBtn');

    if (form && alertBox && submitBtn) {
        form.addEventListener('submit', function (e) {
            e.preventDefault();
            const originalBtnHtml = submitBtn.innerHTML;
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<span>Sending Message...</span>';

            const formData = new FormData(form);

            fetch(form.action, {
                method: 'POST',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'application/json'
                },
                body: formData
            })
            .then(response => {
                if (!response.ok) {
                    return response.json().then(err => { throw err; });
                }
                return response.json();
            })
            .then(data => {
                alertBox.classList.remove('d-none');
                if (data.message) {
                    document.getElementById('contactSuccessMsg').textContent = data.message;
                }
                form.reset();
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalBtnHtml;
                alertBox.scrollIntoView({ behavior: 'smooth' });
            })
            .catch(error => {
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalBtnHtml;
                if (error && error.errors) {
                    const firstErr = Object.values(error.errors)[0][0];
                    alert(firstErr);
                } else if (error && error.message) {
                    alert(error.message);
                } else {
                    form.submit();
                }
            });
        });
    }
});
</script>
@endsection
