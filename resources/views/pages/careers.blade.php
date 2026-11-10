@extends('layouts.app')

@section('title', "Career's - Clineva Research Laboratories")

@section('content')
<div class="page-title mt-30">
    <div class="mx-30">
        <div class="page-title-content paralax-bg">
            <h1 class="title">
                Career's
            </h1>
            <div class="breadkcum">
                <h3><a href="{{ route('home') }}" class="link-breadkcum">Home</a></h3>
                <span class="dot bg-white"></span>
                <h3 class="page-breadkcum">Career's</h3>
            </div>
        </div>
    </div>
</div>

<div class="main-content">
    <section class="section-careers tf-spacing-1">
        <div class="tf-container">
            <div class="heading-section mb-70 text-center">
                <h6 class="sub-title mb-10 text-anime">
                    Join Our Research Team
                </h6>
                <h2 class="title text-anime">
                    Build Your Career in Clinical Research &<br>Laboratory Innovation
                </h2>
                <p class="text mt-20" style="max-width: 720px; margin: 20px auto 0;">
                    At Clineva Research Laboratories, we foster innovation, scientific excellence, and continuous professional growth. Join our passionate team of clinical research professionals, scientists, medical writers, and regulatory specialists.
                </p>
            </div>

            <!-- Open Positions -->
            <div class="row rg-30 mb-70">
                <div class="col-lg-4 col-md-6">
                    <div class="box-icon style-2 hover-img" style="background: var(--white); padding: 35px 30px; border-radius: 15px; border: 1px solid var(--border); height: 100%;">
                        <div class="icon mb-25" style="width: 60px; height: 60px; border-radius: 50%; background: var(--gray-1); display: flex; align-items: center; justify-content: center; color: var(--red); font-size: 26px;">
                            <i class="icon-stethoscope"></i>
                        </div>
                        <h5 class="title mb-15">Clinical Operations Specialist</h5>
                        <p class="text mb-20">Drive trial execution, site coordination, and protocol compliance across global clinical phases.</p>
                        <span class="badge" style="background: var(--gray-1); color: var(--red); padding: 6px 14px; border-radius: 999px; font-weight: 600; font-size: 13px;">Full-Time &bull; On-Site</span>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="box-icon style-2 hover-img" style="background: var(--white); padding: 35px 30px; border-radius: 15px; border: 1px solid var(--border); height: 100%;">
                        <div class="icon mb-25" style="width: 60px; height: 60px; border-radius: 50%; background: var(--gray-1); display: flex; align-items: center; justify-content: center; color: var(--red); font-size: 26px;">
                            <i class="icon-microscope"></i>
                        </div>
                        <h5 class="title mb-15">Senior Medical Writer</h5>
                        <p class="text mb-20">Author regulatory submissions, study protocols, investigator brochures, and clinical study reports (CSRs).</p>
                        <span class="badge" style="background: var(--gray-1); color: var(--red); padding: 6px 14px; border-radius: 999px; font-weight: 600; font-size: 13px;">Full-Time &bull; Hybrid</span>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="box-icon style-2 hover-img" style="background: var(--white); padding: 35px 30px; border-radius: 15px; border: 1px solid var(--border); height: 100%;">
                        <div class="icon mb-25" style="width: 60px; height: 60px; border-radius: 50%; background: var(--gray-1); display: flex; align-items: center; justify-content: center; color: var(--red); font-size: 26px;">
                            <i class="icon-shield-check"></i>
                        </div>
                        <h5 class="title mb-15">Quality Assurance & GLP Auditor</h5>
                        <p class="text mb-20">Lead audits, ensure strict adherence to ICH-GCP/GLP standards, and maintain regulatory inspection readiness.</p>
                        <span class="badge" style="background: var(--gray-1); color: var(--red); padding: 6px 14px; border-radius: 999px; font-weight: 600; font-size: 13px;">Full-Time &bull; On-Site</span>
                    </div>
                </div>
            </div>

            <!-- Application Form Banner -->
            <div class="contact-form-wrap" style="background: var(--black-2); padding: 50px; border-radius: 20px; color: var(--white);">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-30 mb-lg-0">
                        <h3 class="title mb-20" style="color: var(--white);">Interested in Joining Clineva?</h3>
                        <p class="text mb-30" style="color: rgba(255, 255, 255, 0.8);">
                            We are always looking for driven, dedicated talent to advance medicine and scientific discovery. Send us your resume and tell us about your expertise.
                        </p>
                        <div class="d-flex align-items-center gap-20">
                            <i class="icon-envelope" style="font-size: 24px; color: var(--blue);"></i>
                            <div>
                                <span style="font-size: 13px; color: rgba(255, 255, 255, 0.7);">Direct Applications:</span>
                                <h6 style="color: var(--white); margin: 0;">careers@clineva.com</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <form action="#" method="POST" class="form-contact-careers" style="display: flex; flex-direction: column; gap: 15px;">
                            <input type="text" placeholder="Your Full Name" required style="padding: 14px 20px; border-radius: 10px; border: 1px solid rgba(255, 255, 255, 0.2); background: rgba(255, 255, 255, 0.08); color: #fff;">
                            <input type="email" placeholder="Email Address" required style="padding: 14px 20px; border-radius: 10px; border: 1px solid rgba(255, 255, 255, 0.2); background: rgba(255, 255, 255, 0.08); color: #fff;">
                            <select style="padding: 14px 20px; border-radius: 10px; border: 1px solid rgba(255, 255, 255, 0.2); background: #0A1C32; color: #fff;">
                                <option value="" selected disabled>Select Department / Specialty</option>
                                <option value="clinical-operations">Clinical Operations</option>
                                <option value="project-management">Project Management</option>
                                <option value="medical-monitoring">Medical Monitoring</option>
                                <option value="medical-writing">Medical Writing</option>
                                <option value="babe-services">BA/BE Services</option>
                                <option value="regulatory-affairs">Regulatory Affairs</option>
                                <option value="qa-audit">Quality Assurance & Audit</option>
                                <option value="other">Other Inquiry</option>
                            </select>
                            <button type="submit" class="tf-btn" style="margin-top: 10px; justify-content: center;">
                                <span>Submit Your Application</span>
                                <i class="icon-arrow-right"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
