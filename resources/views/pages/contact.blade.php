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
                                    <a href="https://www.clineva.in" target="_blank" rel="noopener">www.clineva.in</a>
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

                        <form id="clinevaContactForm" action="javascript:void(0)" method="POST">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="clineva-field-label" for="contact_name">Full Name *</label>
                                    <input type="text" id="contact_name" name="name" class="clineva-minimal-input" placeholder="Your full name" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="clineva-field-label" for="contact_email">Email Address *</label>
                                    <input type="email" id="contact_email" name="email" class="clineva-minimal-input" placeholder="you@company.com" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="clineva-field-label" for="contact_phone">Phone Number *</label>
                                    <input type="tel" id="contact_phone" name="phone" class="clineva-minimal-input" placeholder="+91 98704 84499" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="clineva-field-label" for="contact_company">Company / Organization</label>
                                    <input type="text" id="contact_company" name="company" class="clineva-minimal-input" placeholder="Pharmaceutical / Biotech / CRO">
                                </div>
                                <div class="col-12">
                                    <label class="clineva-field-label" for="contact_service">Service of Interest</label>
                                    <select id="contact_service" name="service" class="clineva-minimal-select">
                                        <option value="">Select a service (Optional)</option>
                                        <option value="Clinical Operations">Clinical Trials — Clinical Operations</option>
                                        <option value="Project Management">Clinical Trials — Project Management</option>
                                        <option value="Clinical Trial Monitoring">Clinical Trials — Clinical Trial Monitoring</option>
                                        <option value="Medical Monitoring">Clinical Trials — Medical Monitoring</option>
                                        <option value="Quality Assurance">Clinical Trials — Quality Assurance</option>
                                        <option value="Medical Writing">Clinical Trials — Medical Writing</option>
                                        <option value="eTMF Management">Clinical Trials — eTMF Management</option>
                                        <option value="Regulatory Affairs">Clinical Trials — Regulatory Affairs</option>
                                        <option value="Statistical Services">Clinical Trials — Statistical Services</option>
                                        <option value="BA/BE Services">BA/BE Services (CRO Selection / Monitoring / Audits)</option>
                                        <option value="Medico-Marketing">Medical Affairs &amp; Medico-Marketing</option>
                                        <option value="General Inquiry">General Inquiry</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="clineva-field-label" for="contact_message">Message *</label>
                                    <textarea id="contact_message" name="message" class="clineva-minimal-textarea" placeholder="Write your message or study inquiry..." required></textarea>
                                </div>
                                <div class="col-12 mt-3">
                                    <button type="submit" class="tf-btn">
                                        <span>Send Message</span>
                                        <i class="icon-arrow-right"></i>
                                    </button>
                                </div>
                            </div>

                            <div id="contactSuccessAlert" class="mt-4 p-3 rounded-3 d-none" style="background: rgba(0, 119, 200, 0.08); border: 1px solid rgba(0, 119, 200, 0.25); color: #0A1C32; font-size: 14.5px;">
                                <i class="icon-check me-2" style="color: #0077C8;"></i>
                                Thank you! Your message has been received. Our team will get back to you shortly.
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
    if (form && alertBox) {
        form.addEventListener('submit', function (e) {
            e.preventDefault();
            alertBox.classList.remove('d-none');
            form.reset();
        });
    }
});
</script>
@endsection
