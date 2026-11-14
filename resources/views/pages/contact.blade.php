@extends('layouts.app')

@section('title', 'Contact Us - Clineva Research Laboratories')

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
                                    <span class="info-label">Office Address</span>
                                    <span class="info-value">Shop No. 10, Patidar Complex,<br>Kannawmar Nagar 2,<br>Vikhroli (East), Mumbai 400083</span>
                                </div>
                            </div>

                            <div class="clineva-contact-info-item">
                                <div class="info-icon">
                                    <i class="icon-contacts"></i>
                                </div>
                                <div>
                                    <span class="info-label">Contact Details</span>
                                    <a href="mailto:priti.gotpagar@clineva.in">priti.gotpagar@clineva.in</a>
                                    <a href="tel:+919870484499">+91 9870484499</a>
                                </div>
                            </div>

                            <div class="clineva-contact-info-item">
                                <div class="info-icon">
                                    <i class="icon-working-hours"></i>
                                </div>
                                <div>
                                    <span class="info-label">Working Hours</span>
                                    <span class="info-value">Monday – Friday: 08:30 AM – 06:00 PM</span>
                                    <span class="info-value" style="font-size: 13.5px; color: rgba(255,255,255,0.65);">Saturday &amp; Sunday: Closed</span>
                                </div>
                            </div>
                        </div>

                        <div class="clineva-contact-social">
                            <a href="#" title="Facebook" aria-label="Facebook"><i class="icon-facebook"></i></a>
                            <a href="#" title="Twitter" aria-label="Twitter"><i class="icon-twitter"></i></a>
                            <a href="#" title="LinkedIn" aria-label="LinkedIn"><i class="icon-linkedin2"></i></a>
                            <a href="#" title="Instagram" aria-label="Instagram"><i class="icon-instagram"></i></a>
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
