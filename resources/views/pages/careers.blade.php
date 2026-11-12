@extends('layouts.app')

@section('title', "Career's - Clineva Research Laboratories")

@section('content')
<div class="page-title mt-30">
    <div class="mx-30">
        <div class="page-title-content paralax-bg">
            <h1 class="title text-anime">
                Career's
            </h1>
            <div class="breadkcum text-anime">
                <h3><a href="{{ route('home') }}" class="link-breadkcum">Home</a></h3>
                <span class="dot bg-white mx-27"></span>
                <h3 class="page-breadkcum pl-0">Career's</h3>
            </div>
        </div>
    </div>
</div>

<div class="main-content">
    <section class="clineva-careers-section">
        <div class="tf-container">

            <div class="heading-section text-center mb-50">
                <div class="services-cat-badge">
                    <i class="icon-atom-simple"></i>
                    <span>Join Our Team</span>
                </div>
                <h2 class="title mb-15 text-anime">
                    Build Your Career in Clinical Research
                </h2>
                <p class="desc mx-auto" style="max-width: 680px; font-size: 16.5px; color: var(--color-paragraph);">
                    Join Clineva's team of clinical operations, regulatory affairs, medical writing, and quality assurance specialists driving pharmaceutical and medical device innovation globally.
                </p>
            </div>

            <!-- Current Open Positions -->
            <div class="row rg-30 mb-60">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".1s">
                    <div class="clineva-career-card">
                        <div class="career-top">
                            <div class="career-icon">
                                <i class="icon-stethoscope"></i>
                            </div>
                            <span class="career-badge">Full-Time • Clinical Ops</span>
                        </div>
                        <h4 class="career-title">Clinical Research Associate (CRA)</h4>
                        <p class="career-desc">
                            Manage site feasibility, initiation, routine monitoring, SDV, and protocol compliance across Phase I–IV and BA/BE trials.
                        </p>
                        <a href="#careerApplicationSection" class="career-apply-link" data-role="Clinical Research Associate (CRA)">
                            <span>Apply for this Role</span>
                            <i class="icon-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="clineva-career-card">
                        <div class="career-top">
                            <div class="career-icon">
                                <i class="icon-file-word"></i>
                            </div>
                            <span class="career-badge">Full-Time • Medical Writing</span>
                        </div>
                        <h4 class="career-title">Medical Writer</h4>
                        <p class="career-desc">
                            Author protocols, ICFs, CRFs, investigator brochures, eCTD clinical summaries, and BA/BE Clinical Study Reports (CSRs).
                        </p>
                        <a href="#careerApplicationSection" class="career-apply-link" data-role="Medical Writer">
                            <span>Apply for this Role</span>
                            <i class="icon-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay=".3s">
                    <div class="clineva-career-card">
                        <div class="career-top">
                            <div class="career-icon">
                                <i class="icon-safety"></i>
                            </div>
                            <span class="career-badge">Full-Time • Quality &amp; Audit</span>
                        </div>
                        <h4 class="career-title">Quality Assurance &amp; GCP/GLP Auditor</h4>
                        <p class="career-desc">
                            Conduct site, TMF, vendor, and BA/BE facility audits to maintain strict ICH-GCP/GLP compliance and inspection readiness.
                        </p>
                        <a href="#careerApplicationSection" class="career-apply-link" data-role="Quality Assurance & GCP/GLP Auditor">
                            <span>Apply for this Role</span>
                            <i class="icon-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- 2-Column Culture & Application Card -->
            <div id="careerApplicationSection" class="row rg-30 align-items-stretch">
                <!-- Left Column: Why Clineva & Direct HR Contact -->
                <div class="col-lg-5 wow fadeInUp" data-wow-delay=".1s">
                    <div class="clineva-contact-info-card">
                        <h3 class="info-title">Grow With Clineva</h3>
                        <p class="info-subtitle">
                            We bring together technology, innovation, and experienced talent to deliver quality clinical solutions worldwide.
                        </p>

                        <div class="clineva-contact-info-list">
                            <div class="clineva-contact-info-item">
                                <div class="info-icon">
                                    <i class="icon-globe"></i>
                                </div>
                                <div>
                                    <span class="info-label">Global Exposure</span>
                                    <span class="info-value">Work on DCGI, FDA, and EMA regulated Pharma, Biotech &amp; Medical Device programs.</span>
                                </div>
                            </div>

                            <div class="clineva-contact-info-item">
                                <div class="info-icon">
                                    <i class="icon-atom-simple"></i>
                                </div>
                                <div>
                                    <span class="info-label">Continuous Learning</span>
                                    <span class="info-value">Structured ICH-GCP, eTMF, and therapeutic domain training with experienced mentors.</span>
                                </div>
                            </div>

                            <div class="clineva-contact-info-item">
                                <div class="info-icon">
                                    <i class="icon-contacts"></i>
                                </div>
                                <div>
                                    <span class="info-label">Direct HR Contact</span>
                                    <a href="mailto:priti.gotpagar@clineva.in">priti.gotpagar@clineva.in</a>
                                    <a href="tel:+919870484499">+91 9870484499</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Minimal Application Form -->
                <div class="col-lg-7 wow fadeInUp" data-wow-delay=".2s">
                    <div class="clineva-contact-form-card">
                        <h3 class="form-title">Submit Your Application</h3>
                        <p class="form-subtitle">
                            Apply directly for an open position or submit your CV for upcoming clinical and regulatory opportunities.
                        </p>

                        <form id="clinevaCareerForm" action="javascript:void(0)" method="POST" enctype="multipart/form-data">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="clineva-field-label" for="career_name">Full Name *</label>
                                    <input type="text" id="career_name" name="name" class="clineva-minimal-input" placeholder="Your full name" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="clineva-field-label" for="career_email">Email Address *</label>
                                    <input type="email" id="career_email" name="email" class="clineva-minimal-input" placeholder="you@email.com" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="clineva-field-label" for="career_phone">Phone Number *</label>
                                    <input type="tel" id="career_phone" name="phone" class="clineva-minimal-input" placeholder="+1 (234) 567-8900" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="clineva-field-label" for="career_experience">Total Experience</label>
                                    <select id="career_experience" name="experience" class="clineva-minimal-select">
                                        <option value="">Select experience</option>
                                        <option value="0-1 Years">0 – 1 Years (Fresher / Trainee)</option>
                                        <option value="1-3 Years">1 – 3 Years</option>
                                        <option value="3-5 Years">3 – 5 Years</option>
                                        <option value="5+ Years">5+ Years</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="clineva-field-label" for="career_role">Position / Department *</label>
                                    <select id="career_role" name="role" class="clineva-minimal-select" required>
                                        <option value="">Select position or department</option>
                                        <option value="Clinical Research Associate (CRA)">Clinical Research Associate (CRA)</option>
                                        <option value="Medical Writer">Medical Writer</option>
                                        <option value="Quality Assurance & GCP/GLP Auditor">Quality Assurance &amp; GCP/GLP Auditor</option>
                                        <option value="Clinical Project Manager">Clinical Project Manager</option>
                                        <option value="Regulatory Affairs Specialist">Regulatory Affairs Specialist</option>
                                        <option value="eTMF Document Specialist">eTMF Document Specialist</option>
                                        <option value="Biostatistician">Biostatistician</option>
                                        <option value="Medical Affairs / Medico-Marketing">Medical Affairs &amp; Medico-Marketing</option>
                                        <option value="General Application">General / Future Opportunities</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="clineva-field-label" for="career_resume">Upload Resume / CV (PDF, DOC)</label>
                                    <input type="file" id="career_resume" name="resume" class="clineva-minimal-input" accept=".pdf,.doc,.docx" style="padding: 10px 14px;">
                                </div>
                                <div class="col-12">
                                    <label class="clineva-field-label" for="career_message">Cover Note / Summary</label>
                                    <textarea id="career_message" name="message" class="clineva-minimal-textarea" placeholder="Briefly describe your clinical research experience and availability..."></textarea>
                                </div>
                                <div class="col-12 mt-3">
                                    <button type="submit" class="tf-btn">
                                        <span>Submit Application</span>
                                        <i class="icon-arrow-right"></i>
                                    </button>
                                </div>
                            </div>

                            <div id="careerSuccessAlert" class="mt-4 p-3 rounded-3 d-none" style="background: rgba(0, 119, 200, 0.08); border: 1px solid rgba(0, 119, 200, 0.25); color: #0A1C32; font-size: 14.5px;">
                                <i class="icon-check me-2" style="color: #0077C8;"></i>
                                Thank you for applying! Our HR team has received your application and will review your profile shortly.
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
    const roleSelect = document.getElementById('career_role');
    document.querySelectorAll('.career-apply-link').forEach(function (link) {
        link.addEventListener('click', function () {
            const role = this.getAttribute('data-role');
            if (role && roleSelect) {
                roleSelect.value = role;
            }
        });
    });

    const form = document.getElementById('clinevaCareerForm');
    const alertBox = document.getElementById('careerSuccessAlert');
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
