@extends('layouts.app')

@php
    $pageSeo = \App\Models\Setting::getPageSeo('careers');
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
                Careers
            </h1>
            <div class="breadkcum text-anime">
                <h3><a href="{{ route('home') }}" class="link-breadkcum">Home</a></h3>
                <span class="dot bg-white mx-27"></span>
                <h3 class="page-breadkcum pl-0">Careers</h3>
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
                @forelse($jobPostings as $job)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".{{ ($loop->index % 3 + 1) * 1 }}s">
                        <div class="clineva-career-card h-100 d-flex flex-column justify-content-between">
                            <div>
                                <div class="career-top">
                                    <div class="career-icon">
                                        @if(stripos($job->category, 'writing') !== false)
                                            <i class="icon-file-word"></i>
                                        @elseif(stripos($job->category, 'quality') !== false || stripos($job->category, 'audit') !== false)
                                            <i class="icon-safety"></i>
                                        @elseif(stripos($job->category, 'babe') !== false)
                                            <i class="icon-atom-simple"></i>
                                        @else
                                            <i class="icon-stethoscope"></i>
                                        @endif
                                    </div>
                                    <span class="career-badge">{{ $job->job_type }} • {{ $job->category }}</span>
                                </div>
                                <h4 class="career-title">{{ $job->title }}</h4>
                                <div class="mb-2" style="font-size: 13px; color: #0077C8; font-weight: 600;">
                                    <span>{{ $job->location }}</span>
                                    @if($job->experience)
                                        &bull; <span>{{ $job->experience }}</span>
                                    @endif
                                </div>
                                <p class="career-desc">
                                    {{ Str::limit($job->description, 140) }}
                                </p>
                            </div>
                            <div class="mt-3">
                                <a href="#careerApplicationSection" class="career-apply-link" data-role="{{ $job->title }}" data-id="{{ $job->id }}">
                                    <span>Apply for this Role</span>
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center py-5">
                        <div style="background: #F8FAFC; border: 1px dashed #CBD5E1; padding: 40px; border-radius: 16px; max-width: 600px; margin: 0 auto;">
                            <i class="icon-safety mb-3" style="font-size: 36px; color: #0077C8;"></i>
                            <h4 style="font-size: 20px; font-weight: 700; color: #0A1C32; margin-bottom: 8px;">No Direct Openings Right Now</h4>
                            <p style="color: #64748B; font-size: 14px; margin-bottom: 16px;">We are always looking for passionate clinical researchers, medical writers, and auditors. Submit your general application below!</p>
                            <a href="#careerApplicationSection" class="tf-btn" style="display: inline-flex; padding: 10px 24px; font-size: 13px;">
                                <span>Submit General Application</span>
                            </a>
                        </div>
                    </div>
                @endforelse
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

                        @if(session('career_success'))
                            <div class="alert alert-success mb-4 p-3 rounded-3" style="background: #ECFDF5; border: 1px solid #A7F3D0; color: #065F46; font-size: 14.5px;">
                                <strong>✓ Application Submitted!</strong> {{ session('career_success') }}
                            </div>
                        @endif

                        <form id="clinevaCareerForm" action="{{ route('careers.apply') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="job_posting_id" id="job_posting_id" value="">

                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="clineva-field-label" for="career_name">Full Name *</label>
                                    <input type="text" id="career_name" name="name" class="clineva-minimal-input" placeholder="Your full name" required value="{{ old('name') }}">
                                    @error('name') <span class="text-danger small">{{ $message }}</span> @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="clineva-field-label" for="career_email">Email Address *</label>
                                    <input type="email" id="career_email" name="email" class="clineva-minimal-input" placeholder="you@email.com" required value="{{ old('email') }}">
                                    @error('email') <span class="text-danger small">{{ $message }}</span> @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="clineva-field-label" for="career_phone">Phone Number *</label>
                                    <input type="tel" id="career_phone" name="phone" class="clineva-minimal-input" placeholder="+91 9870484499" required value="{{ old('phone') }}">
                                    @error('phone') <span class="text-danger small">{{ $message }}</span> @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="clineva-field-label" for="career_experience">Total Experience</label>
                                    <select id="career_experience" name="experience" class="clineva-minimal-select">
                                        <option value="">Select experience</option>
                                        <option value="0-1 Years" {{ old('experience') == '0-1 Years' ? 'selected' : '' }}>0 – 1 Years (Fresher / Trainee)</option>
                                        <option value="1-3 Years" {{ old('experience') == '1-3 Years' ? 'selected' : '' }}>1 – 3 Years</option>
                                        <option value="3-5 Years" {{ old('experience') == '3-5 Years' ? 'selected' : '' }}>3 – 5 Years</option>
                                        <option value="5+ Years" {{ old('experience') == '5+ Years' ? 'selected' : '' }}>5+ Years</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="clineva-field-label" for="career_role">Position / Role *</label>
                                    <select id="career_role" name="role" class="clineva-minimal-select" required>
                                        <option value="">Select position</option>
                                        @foreach($jobPostings as $job)
                                            <option value="{{ $job->title }}" data-id="{{ $job->id }}" {{ old('role') == $job->title ? 'selected' : '' }}>
                                                {{ $job->title }} ({{ $job->job_type }})
                                            </option>
                                        @endforeach
                                        <option value="General Application" {{ old('role') == 'General Application' ? 'selected' : '' }}>
                                            General / Future Opportunities
                                        </option>
                                    </select>
                                    @error('role') <span class="text-danger small">{{ $message }}</span> @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="clineva-field-label" for="career_resume">Upload Resume / CV (PDF, DOC, DOCX - Max 5MB)</label>
                                    <input type="file" id="career_resume" name="resume" class="clineva-minimal-input" accept=".pdf,.doc,.docx" style="padding: 10px 14px;">
                                    @error('resume') <span class="text-danger small">{{ $message }}</span> @enderror
                                </div>
                                <div class="col-12">
                                    <label class="clineva-field-label" for="career_message">Cover Note / Summary</label>
                                    <textarea id="career_message" name="message" class="clineva-minimal-textarea" placeholder="Briefly describe your clinical research experience, current location, and availability...">{{ old('message') }}</textarea>
                                </div>
                                <div class="col-12 mt-3">
                                    <button type="submit" id="careerSubmitBtn" class="tf-btn">
                                        <span>Submit Application</span>
                                        <i class="icon-arrow-right"></i>
                                    </button>
                                </div>
                            </div>

                            <div id="careerSuccessAlert" class="mt-4 p-3 rounded-3 d-none" style="background: rgba(16, 185, 129, 0.1); border: 1px solid #10B981; color: #065F46; font-size: 14.5px;">
                                <i class="icon-check me-2" style="color: #10B981;"></i>
                                <span id="careerSuccessMsg">Thank you for applying! Our HR team has received your application and will review your profile shortly.</span>
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
    const jobIdInput = document.getElementById('job_posting_id');

    document.querySelectorAll('.career-apply-link').forEach(function (link) {
        link.addEventListener('click', function (e) {
            const role = this.getAttribute('data-role');
            const id = this.getAttribute('data-id');
            if (role && roleSelect) {
                // Check if role exists in options
                let optionFound = false;
                for (let i = 0; i < roleSelect.options.length; i++) {
                    if (roleSelect.options[i].value === role) {
                        roleSelect.selectedIndex = i;
                        optionFound = true;
                        break;
                    }
                }
                if (!optionFound) {
                    const newOpt = new Option(role, role, true, true);
                    roleSelect.add(newOpt);
                }
            }
            if (id && jobIdInput) {
                jobIdInput.value = id;
            }
            const formSection = document.getElementById('careerApplicationSection');
            if (formSection) {
                formSection.scrollIntoView({ behavior: 'smooth' });
            }
        });
    });

    if (roleSelect) {
        roleSelect.addEventListener('change', function () {
            const selected = this.options[this.selectedIndex];
            const dataId = selected.getAttribute('data-id');
            if (jobIdInput) {
                jobIdInput.value = dataId || '';
            }
        });
    }

    const form = document.getElementById('clinevaCareerForm');
    const alertBox = document.getElementById('careerSuccessAlert');
    const submitBtn = document.getElementById('careerSubmitBtn');

    if (form && alertBox && submitBtn) {
        form.addEventListener('submit', function (e) {
            // Use AJAX for smooth instant feedback
            e.preventDefault();
            const originalBtnHtml = submitBtn.innerHTML;
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<span>Uploading Application...</span>';

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
                    document.getElementById('careerSuccessMsg').textContent = data.message;
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
                    // Fallback to standard form submit
                    form.submit();
                }
            });
        });
    }
});
</script>
@endsection
