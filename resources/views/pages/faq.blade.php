@extends('layouts.app')

@section('title', 'FAQs - Clineva')

@section('content')
<div class="page-title mt-30">
             <div class="mx-30">
                <div class="page-title-content paralax-bg">
                    <h1 class="title">
                        FAQs
                    </h1>
                    <div class="breadkcum">
                        <h3><a href="{{ route('home') }}" class="link-breadkcum">Home</a></h3>
                        <span class="dot bg-white mx-25"></span>
                        <h3 class="page-breadkcum pl-0">FAQs</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-content">

            <section class="section-faqs p-about tf-spacing-1">
                <div class="tf-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="heading-section text-center mb-50">
                                <div class="text-anime">
                                    <h6 class="sub-title mb-10">
                                        FAQs
                                    </h6>
                                </div>
                                <h2 class="title text-anime">
                                    Common Questions & Answers
                                </h2>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="wg-tab mb-50">
                                <ul class="tab-product" role="tablist">
                                    <li class="nav-tab-item" role="presentation">
                                        <a href="#tab1" data-bs-toggle="tab" role="tab" class="active" aria-selected="true">Generall</a>
                                    </li>
                                    <li class="nav-tab-item" role="presentation">
                                        <a href="#tab2" data-bs-toggle="tab" role="tab" class="" aria-selected="false" tabindex="-1">Setting & Privacy</a>
                                    </li>
                                    <li class="nav-tab-item" role="presentation">
                                        <a href="#tab3" data-bs-toggle="tab" role="tab" class="" aria-selected="false" tabindex="-1">Pricing Plan</a>
                                    </li>
                                    <li class="nav-tab-item" role="presentation">
                                        <a href="#tab4" data-bs-toggle="tab" role="tab" class="" aria-selected="false" tabindex="-1">Doctors</a>
                                    </li>
                                    <li class="nav-tab-item" role="presentation">
                                        <a href="#tab5" data-bs-toggle="tab" role="tab" class="" aria-selected="false" tabindex="-1">Services</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flat-animate-tab">
                    <div class="tab-content">
                        <div class="tab-pane active show" id="tab1" role="tabpanel">
                            <div class="wg-according mb-49" id="According1">
                                <div class="tf-container">
                                    <div class="row rg-10">
                                        <div class="col-lg-6">
                                            <div class="according-item mb-10 according-active ">
                                                <a href="#according1" data-bs-toggle="collapse" class="title-according collapsed">
                                                    <p class="body-2 fw7 ">1. How do I book an appointment?</p><span></span>
                                                </a>
                                                <div id="according1" class="collapse" data-bs-parent="#According1">
                                                    <div class="according-content">
                                                        <p class="text">
                                                            We provide a wide range of medical services, including general check-ups, diagnostics, preventive care, specialist consultations, and emergency treatments.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="according-item mb-10 according-active active">
                                                <a href="#according2" data-bs-toggle="collapse" class="title-according">
                                                    <p class="body-2 fw7 ">2. What services do you offer?</p><span></span>
                                                </a>
                                                <div id="according2" class="collapse show" data-bs-parent="#According1">
                                                    <div class="according-content">
                                                        <p class="text">
                                                            We provide a wide range of medical services, including general check-ups, diagnostics, preventive care, specialist consultations, and emergency treatments.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="according-item mb-10 according-active ">
                                                <a href="#according3" data-bs-toggle="collapse" class="title-according collapsed">
                                                    <p class="body-2 fw7 ">3. Do you accept insurance?</p><span></span>
                                                </a>
                                                <div id="according3" class="collapse" data-bs-parent="#According1">
                                                    <div class="according-content">
                                                        <p class="text">
                                                            We provide a wide range of medical services, including general check-ups, diagnostics, preventive care, specialist consultations, and emergency treatments.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="according-item according-active ">
                                                <a href="#according4" data-bs-toggle="collapse" class="title-according collapsed">
                                                    <p class="body-2 fw7 ">4. What should I bring to my appointment?</p><span></span>
                                                </a>
                                                <div id="according4" class="collapse" data-bs-parent="#According1">
                                                    <div class="according-content">
                                                        <p class="text">
                                                            We provide a wide range of medical services, including general check-ups, diagnostics, preventive care, specialist consultations, and emergency treatments.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="according-item mb-10 according-active ">
                                                <a href="#according5" data-bs-toggle="collapse" class="title-according collapsed">
                                                    <p class="body-2 fw7 ">5. Do you offer same-day appointments?</p><span></span>
                                                </a>
                                                <div id="according5" class="collapse" data-bs-parent="#According1">
                                                    <div class="according-content">
                                                        <p class="text">
                                                            We provide a wide range of medical services, including general check-ups, diagnostics, preventive care, specialist consultations, and emergency treatments.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="according-item mb-10 according-active ">
                                                <a href="#according6" data-bs-toggle="collapse" class="title-according collapsed">
                                                    <p class="body-2 fw7 ">6. How do I get my test results?</p><span></span>
                                                </a>
                                                <div id="according6" class="collapse" data-bs-parent="#According1">
                                                    <div class="according-content">
                                                        <p class="text">
                                                            We provide a wide range of medical services, including general check-ups, diagnostics, preventive care, specialist consultations, and emergency treatments.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="according-item mb-10 according-active ">
                                                <a href="#according7" data-bs-toggle="collapse" class="title-according collapsed">
                                                    <p class="body-2 fw7 ">7. What safety measures do you follow?</p><span></span>
                                                </a>
                                                <div id="according7" class="collapse" data-bs-parent="#According1">
                                                    <div class="according-content">
                                                        <p class="text">
                                                            We provide a wide range of medical services, including general check-ups, diagnostics, preventive care, specialist consultations, and emergency treatments.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="according-item mb-10 according-active ">
                                                <a href="#according8" data-bs-toggle="collapse" class="title-according collapsed">
                                                    <p class="body-2 fw7 ">8. Do you provide telemedicine services?</p><span></span>
                                                </a>
                                                <div id="according8" class="collapse" data-bs-parent="#According1">
                                                    <div class="according-content">
                                                        <p class="text">
                                                            We provide a wide range of medical services, including general check-ups, diagnostics, preventive care, specialist consultations, and emergency treatments.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="according-item mb-10 according-active ">
                                                <a href="#according9" data-bs-toggle="collapse" class="title-according collapsed">
                                                    <p class="body-2 fw7 ">9. What should I do in a medical emergency?</p><span></span>
                                                </a>
                                                <div id="according9" class="collapse" data-bs-parent="#According1">
                                                    <div class="according-content">
                                                        <p class="text">
                                                            We provide a wide range of medical services, including general check-ups, diagnostics, preventive care, specialist consultations, and emergency treatments.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="according-item according-active ">
                                                <a href="#according10" data-bs-toggle="collapse" class="title-according collapsed">
                                                    <p class="body-2 fw7 ">10. How can I reschedule or cancel my appointment?</p><span></span>
                                                </a>
                                                <div id="according10" class="collapse" data-bs-parent="#According1">
                                                    <div class="according-content">
                                                        <p class="text">
                                                            We provide a wide range of medical services, including general check-ups, diagnostics, preventive care, specialist consultations, and emergency treatments.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab2" role="tabpanel">
                            <div class="wg-according mb-49" id="According2">
                                <div class="tf-container">
                                    <div class="row rg-10">
                                        <div class="col-lg-6">
                                            <div class="according-item mb-10 according-active ">
                                                <a href="#according11" data-bs-toggle="collapse" class="title-according collapsed">
                                                    <p class="body-2 fw7 ">1. How do I book an appointment?</p><span></span>
                                                </a>
                                                <div id="according11" class="collapse" data-bs-parent="#According2">
                                                    <div class="according-content">
                                                        <p class="text">
                                                            We provide a wide range of medical services, including general check-ups, diagnostics, preventive care, specialist consultations, and emergency treatments.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="according-item mb-10 according-active active">
                                                <a href="#according12" data-bs-toggle="collapse" class="title-according">
                                                    <p class="body-2 fw7 ">2. What services do you offer?</p><span></span>
                                                </a>
                                                <div id="according12" class="collapse show" data-bs-parent="#According2">
                                                    <div class="according-content">
                                                        <p class="text">
                                                            We provide a wide range of medical services, including general check-ups, diagnostics, preventive care, specialist consultations, and emergency treatments.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="according-item mb-10 according-active ">
                                                <a href="#according13" data-bs-toggle="collapse" class="title-according collapsed">
                                                    <p class="body-2 fw7 ">3. Do you accept insurance?</p><span></span>
                                                </a>
                                                <div id="according13" class="collapse" data-bs-parent="#According2">
                                                    <div class="according-content">
                                                        <p class="text">
                                                            We provide a wide range of medical services, including general check-ups, diagnostics, preventive care, specialist consultations, and emergency treatments.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="according-item according-active ">
                                                <a href="#according14" data-bs-toggle="collapse" class="title-according collapsed">
                                                    <p class="body-2 fw7 ">4. What should I bring to my appointment?</p><span></span>
                                                </a>
                                                <div id="according14" class="collapse" data-bs-parent="#According2">
                                                    <div class="according-content">
                                                        <p class="text">
                                                            We provide a wide range of medical services, including general check-ups, diagnostics, preventive care, specialist consultations, and emergency treatments.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="according-item mb-10 according-active ">
                                                <a href="#according15" data-bs-toggle="collapse" class="title-according collapsed">
                                                    <p class="body-2 fw7 ">5. Do you offer same-day appointments?</p><span></span>
                                                </a>
                                                <div id="according15" class="collapse" data-bs-parent="#According2">
                                                    <div class="according-content">
                                                        <p class="text">
                                                            We provide a wide range of medical services, including general check-ups, diagnostics, preventive care, specialist consultations, and emergency treatments.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="according-item mb-10 according-active ">
                                                <a href="#according16" data-bs-toggle="collapse" class="title-according collapsed">
                                                    <p class="body-2 fw7 ">6. How do I get my test results?</p><span></span>
                                                </a>
                                                <div id="according16" class="collapse" data-bs-parent="#According2">
                                                    <div class="according-content">
                                                        <p class="text">
                                                            We provide a wide range of medical services, including general check-ups, diagnostics, preventive care, specialist consultations, and emergency treatments.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="according-item mb-10 according-active ">
                                                <a href="#according17" data-bs-toggle="collapse" class="title-according collapsed">
                                                    <p class="body-2 fw7 ">7. What safety measures do you follow?</p><span></span>
                                                </a>
                                                <div id="according17" class="collapse" data-bs-parent="#According2">
                                                    <div class="according-content">
                                                        <p class="text">
                                                            We provide a wide range of medical services, including general check-ups, diagnostics, preventive care, specialist consultations, and emergency treatments.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="according-item mb-10 according-active ">
                                                <a href="#according18" data-bs-toggle="collapse" class="title-according collapsed">
                                                    <p class="body-2 fw7 ">8. Do you provide telemedicine services?</p><span></span>
                                                </a>
                                                <div id="according18" class="collapse" data-bs-parent="#According2">
                                                    <div class="according-content">
                                                        <p class="text">
                                                            We provide a wide range of medical services, including general check-ups, diagnostics, preventive care, specialist consultations, and emergency treatments.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="according-item mb-10 according-active ">
                                                <a href="#according19" data-bs-toggle="collapse" class="title-according collapsed">
                                                    <p class="body-2 fw7 ">9. What should I do in a medical emergency?</p><span></span>
                                                </a>
                                                <div id="according19" class="collapse" data-bs-parent="#According2">
                                                    <div class="according-content">
                                                        <p class="text">
                                                            We provide a wide range of medical services, including general check-ups, diagnostics, preventive care, specialist consultations, and emergency treatments.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="according-item according-active ">
                                                <a href="#according20" data-bs-toggle="collapse" class="title-according collapsed">
                                                    <p class="body-2 fw7 ">10. How can I reschedule or cancel my appointment?</p><span></span>
                                                </a>
                                                <div id="according20" class="collapse" data-bs-parent="#According2">
                                                    <div class="according-content">
                                                        <p class="text">
                                                            We provide a wide range of medical services, including general check-ups, diagnostics, preventive care, specialist consultations, and emergency treatments.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab3" role="tabpanel">
                            <div class="wg-according mb-49" id="According3">
                                <div class="tf-container">
                                    <div class="row rg-10">
                                        <div class="col-lg-6">
                                            <div class="according-item mb-10 according-active ">
                                                <a href="#according21" data-bs-toggle="collapse" class="title-according collapsed">
                                                    <p class="body-2 fw7 ">1. How do I book an appointment?</p><span></span>
                                                </a>
                                                <div id="according21" class="collapse" data-bs-parent="#According3">
                                                    <div class="according-content">
                                                        <p class="text">
                                                            We provide a wide range of medical services, including general check-ups, diagnostics, preventive care, specialist consultations, and emergency treatments.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="according-item mb-10 according-active active">
                                                <a href="#according22" data-bs-toggle="collapse" class="title-according">
                                                    <p class="body-2 fw7 ">2. What services do you offer?</p><span></span>
                                                </a>
                                                <div id="according22" class="collapse show" data-bs-parent="#According3">
                                                    <div class="according-content">
                                                        <p class="text">
                                                            We provide a wide range of medical services, including general check-ups, diagnostics, preventive care, specialist consultations, and emergency treatments.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="according-item mb-10 according-active ">
                                                <a href="#according23" data-bs-toggle="collapse" class="title-according collapsed">
                                                    <p class="body-2 fw7 ">3. Do you accept insurance?</p><span></span>
                                                </a>
                                                <div id="according23" class="collapse" data-bs-parent="#According3">
                                                    <div class="according-content">
                                                        <p class="text">
                                                            We provide a wide range of medical services, including general check-ups, diagnostics, preventive care, specialist consultations, and emergency treatments.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="according-item according-active ">
                                                <a href="#according24" data-bs-toggle="collapse" class="title-according collapsed">
                                                    <p class="body-2 fw7 ">4. What should I bring to my appointment?</p><span></span>
                                                </a>
                                                <div id="according24" class="collapse" data-bs-parent="#According3">
                                                    <div class="according-content">
                                                        <p class="text">
                                                            We provide a wide range of medical services, including general check-ups, diagnostics, preventive care, specialist consultations, and emergency treatments.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="according-item mb-10 according-active ">
                                                <a href="#according25" data-bs-toggle="collapse" class="title-according collapsed">
                                                    <p class="body-2 fw7 ">5. Do you offer same-day appointments?</p><span></span>
                                                </a>
                                                <div id="according25" class="collapse" data-bs-parent="#According3">
                                                    <div class="according-content">
                                                        <p class="text">
                                                            We provide a wide range of medical services, including general check-ups, diagnostics, preventive care, specialist consultations, and emergency treatments.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="according-item mb-10 according-active ">
                                                <a href="#according26" data-bs-toggle="collapse" class="title-according collapsed">
                                                    <p class="body-2 fw7 ">6. How do I get my test results?</p><span></span>
                                                </a>
                                                <div id="according26" class="collapse" data-bs-parent="#According3">
                                                    <div class="according-content">
                                                        <p class="text">
                                                            We provide a wide range of medical services, including general check-ups, diagnostics, preventive care, specialist consultations, and emergency treatments.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="according-item mb-10 according-active ">
                                                <a href="#according27" data-bs-toggle="collapse" class="title-according collapsed">
                                                    <p class="body-2 fw7 ">7. What safety measures do you follow?</p><span></span>
                                                </a>
                                                <div id="according27" class="collapse" data-bs-parent="#According3">
                                                    <div class="according-content">
                                                        <p class="text">
                                                            We provide a wide range of medical services, including general check-ups, diagnostics, preventive care, specialist consultations, and emergency treatments.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="according-item mb-10 according-active ">
                                                <a href="#according28" data-bs-toggle="collapse" class="title-according collapsed">
                                                    <p class="body-2 fw7 ">8. Do you provide telemedicine services?</p><span></span>
                                                </a>
                                                <div id="according28" class="collapse" data-bs-parent="#According3">
                                                    <div class="according-content">
                                                        <p class="text">
                                                            We provide a wide range of medical services, including general check-ups, diagnostics, preventive care, specialist consultations, and emergency treatments.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="according-item mb-10 according-active ">
                                                <a href="#according29" data-bs-toggle="collapse" class="title-according collapsed">
                                                    <p class="body-2 fw7 ">9. What should I do in a medical emergency?</p><span></span>
                                                </a>
                                                <div id="according29" class="collapse" data-bs-parent="#According3">
                                                    <div class="according-content">
                                                        <p class="text">
                                                            We provide a wide range of medical services, including general check-ups, diagnostics, preventive care, specialist consultations, and emergency treatments.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="according-item according-active ">
                                                <a href="#according30" data-bs-toggle="collapse" class="title-according collapsed">
                                                    <p class="body-2 fw7 ">10. How can I reschedule or cancel my appointment?</p><span></span>
                                                </a>
                                                <div id="according30" class="collapse" data-bs-parent="#According3">
                                                    <div class="according-content">
                                                        <p class="text">
                                                            We provide a wide range of medical services, including general check-ups, diagnostics, preventive care, specialist consultations, and emergency treatments.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab4" role="tabpanel">
                            <div class="wg-according mb-49" id="According4">
                                <div class="tf-container">
                                    <div class="row rg-10">
                                        <div class="col-lg-6">
                                            <div class="according-item mb-10 according-active ">
                                                <a href="#according31" data-bs-toggle="collapse" class="title-according collapsed">
                                                    <p class="body-2 fw7 ">1. How do I book an appointment?</p><span></span>
                                                </a>
                                                <div id="according31" class="collapse" data-bs-parent="#According4">
                                                    <div class="according-content">
                                                        <p class="text">
                                                            We provide a wide range of medical services, including general check-ups, diagnostics, preventive care, specialist consultations, and emergency treatments.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="according-item mb-10 according-active active">
                                                <a href="#according32" data-bs-toggle="collapse" class="title-according">
                                                    <p class="body-2 fw7 ">2. What services do you offer?</p><span></span>
                                                </a>
                                                <div id="according32" class="collapse show" data-bs-parent="#According4">
                                                    <div class="according-content">
                                                        <p class="text">
                                                            We provide a wide range of medical services, including general check-ups, diagnostics, preventive care, specialist consultations, and emergency treatments.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="according-item mb-10 according-active ">
                                                <a href="#according33" data-bs-toggle="collapse" class="title-according collapsed">
                                                    <p class="body-2 fw7 ">3. Do you accept insurance?</p><span></span>
                                                </a>
                                                <div id="according33" class="collapse" data-bs-parent="#According4">
                                                    <div class="according-content">
                                                        <p class="text">
                                                            We provide a wide range of medical services, including general check-ups, diagnostics, preventive care, specialist consultations, and emergency treatments.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="according-item according-active ">
                                                <a href="#according34" data-bs-toggle="collapse" class="title-according collapsed">
                                                    <p class="body-2 fw7 ">4. What should I bring to my appointment?</p><span></span>
                                                </a>
                                                <div id="according34" class="collapse" data-bs-parent="#According4">
                                                    <div class="according-content">
                                                        <p class="text">
                                                            We provide a wide range of medical services, including general check-ups, diagnostics, preventive care, specialist consultations, and emergency treatments.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="according-item mb-10 according-active ">
                                                <a href="#according35" data-bs-toggle="collapse" class="title-according collapsed">
                                                    <p class="body-2 fw7 ">5. Do you offer same-day appointments?</p><span></span>
                                                </a>
                                                <div id="according35" class="collapse" data-bs-parent="#According4">
                                                    <div class="according-content">
                                                        <p class="text">
                                                            We provide a wide range of medical services, including general check-ups, diagnostics, preventive care, specialist consultations, and emergency treatments.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="according-item mb-10 according-active ">
                                                <a href="#according36" data-bs-toggle="collapse" class="title-according collapsed">
                                                    <p class="body-2 fw7 ">6. How do I get my test results?</p><span></span>
                                                </a>
                                                <div id="according36" class="collapse" data-bs-parent="#According4">
                                                    <div class="according-content">
                                                        <p class="text">
                                                            We provide a wide range of medical services, including general check-ups, diagnostics, preventive care, specialist consultations, and emergency treatments.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="according-item mb-10 according-active ">
                                                <a href="#according37" data-bs-toggle="collapse" class="title-according collapsed">
                                                    <p class="body-2 fw7 ">7. What safety measures do you follow?</p><span></span>
                                                </a>
                                                <div id="according37" class="collapse" data-bs-parent="#According4">
                                                    <div class="according-content">
                                                        <p class="text">
                                                            We provide a wide range of medical services, including general check-ups, diagnostics, preventive care, specialist consultations, and emergency treatments.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="according-item mb-10 according-active ">
                                                <a href="#according38" data-bs-toggle="collapse" class="title-according collapsed">
                                                    <p class="body-2 fw7 ">8. Do you provide telemedicine services?</p><span></span>
                                                </a>
                                                <div id="according38" class="collapse" data-bs-parent="#According4">
                                                    <div class="according-content">
                                                        <p class="text">
                                                            We provide a wide range of medical services, including general check-ups, diagnostics, preventive care, specialist consultations, and emergency treatments.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="according-item mb-10 according-active ">
                                                <a href="#according39" data-bs-toggle="collapse" class="title-according collapsed">
                                                    <p class="body-2 fw7 ">9. What should I do in a medical emergency?</p><span></span>
                                                </a>
                                                <div id="according39" class="collapse" data-bs-parent="#According4">
                                                    <div class="according-content">
                                                        <p class="text">
                                                            We provide a wide range of medical services, including general check-ups, diagnostics, preventive care, specialist consultations, and emergency treatments.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="according-item according-active ">
                                                <a href="#according40" data-bs-toggle="collapse" class="title-according collapsed">
                                                    <p class="body-2 fw7 ">10. How can I reschedule or cancel my appointment?</p><span></span>
                                                </a>
                                                <div id="according40" class="collapse" data-bs-parent="#According4">
                                                    <div class="according-content">
                                                        <p class="text">
                                                            We provide a wide range of medical services, including general check-ups, diagnostics, preventive care, specialist consultations, and emergency treatments.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab5" role="tabpanel">
                            <div class="wg-according mb-49" id="According5">
                                <div class="tf-container">
                                    <div class="row rg-10">
                                        <div class="col-lg-6">
                                            <div class="according-item mb-10 according-active ">
                                                <a href="#according41" data-bs-toggle="collapse" class="title-according collapsed">
                                                    <p class="body-2 fw7 ">1. How do I book an appointment?</p><span></span>
                                                </a>
                                                <div id="according41" class="collapse" data-bs-parent="#According5">
                                                    <div class="according-content">
                                                        <p class="text">
                                                            We provide a wide range of medical services, including general check-ups, diagnostics, preventive care, specialist consultations, and emergency treatments.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="according-item mb-10 according-active active">
                                                <a href="#according42" data-bs-toggle="collapse" class="title-according">
                                                    <p class="body-2 fw7 ">2. What services do you offer?</p><span></span>
                                                </a>
                                                <div id="according42" class="collapse show" data-bs-parent="#According5">
                                                    <div class="according-content">
                                                        <p class="text">
                                                            We provide a wide range of medical services, including general check-ups, diagnostics, preventive care, specialist consultations, and emergency treatments.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="according-item mb-10 according-active ">
                                                <a href="#according43" data-bs-toggle="collapse" class="title-according collapsed">
                                                    <p class="body-2 fw7 ">3. Do you accept insurance?</p><span></span>
                                                </a>
                                                <div id="according43" class="collapse" data-bs-parent="#According5">
                                                    <div class="according-content">
                                                        <p class="text">
                                                            We provide a wide range of medical services, including general check-ups, diagnostics, preventive care, specialist consultations, and emergency treatments.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="according-item according-active ">
                                                <a href="#according44" data-bs-toggle="collapse" class="title-according collapsed">
                                                    <p class="body-2 fw7 ">4. What should I bring to my appointment?</p><span></span>
                                                </a>
                                                <div id="according44" class="collapse" data-bs-parent="#According5">
                                                    <div class="according-content">
                                                        <p class="text">
                                                            We provide a wide range of medical services, including general check-ups, diagnostics, preventive care, specialist consultations, and emergency treatments.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="according-item mb-10 according-active ">
                                                <a href="#according45" data-bs-toggle="collapse" class="title-according collapsed">
                                                    <p class="body-2 fw7 ">5. Do you offer same-day appointments?</p><span></span>
                                                </a>
                                                <div id="according45" class="collapse" data-bs-parent="#According5">
                                                    <div class="according-content">
                                                        <p class="text">
                                                            We provide a wide range of medical services, including general check-ups, diagnostics, preventive care, specialist consultations, and emergency treatments.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="according-item mb-10 according-active ">
                                                <a href="#according46" data-bs-toggle="collapse" class="title-according collapsed">
                                                    <p class="body-2 fw7 ">6. How do I get my test results?</p><span></span>
                                                </a>
                                                <div id="according46" class="collapse" data-bs-parent="#According5">
                                                    <div class="according-content">
                                                        <p class="text">
                                                            We provide a wide range of medical services, including general check-ups, diagnostics, preventive care, specialist consultations, and emergency treatments.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="according-item mb-10 according-active ">
                                                <a href="#according47" data-bs-toggle="collapse" class="title-according collapsed">
                                                    <p class="body-2 fw7 ">7. What safety measures do you follow?</p><span></span>
                                                </a>
                                                <div id="according47" class="collapse" data-bs-parent="#According5">
                                                    <div class="according-content">
                                                        <p class="text">
                                                            We provide a wide range of medical services, including general check-ups, diagnostics, preventive care, specialist consultations, and emergency treatments.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="according-item mb-10 according-active ">
                                                <a href="#according48" data-bs-toggle="collapse" class="title-according collapsed">
                                                    <p class="body-2 fw7 ">8. Do you provide telemedicine services?</p><span></span>
                                                </a>
                                                <div id="according48" class="collapse" data-bs-parent="#According5">
                                                    <div class="according-content">
                                                        <p class="text">
                                                            We provide a wide range of medical services, including general check-ups, diagnostics, preventive care, specialist consultations, and emergency treatments.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="according-item mb-10 according-active ">
                                                <a href="#according49" data-bs-toggle="collapse" class="title-according collapsed">
                                                    <p class="body-2 fw7 ">9. What should I do in a medical emergency?</p><span></span>
                                                </a>
                                                <div id="according49" class="collapse" data-bs-parent="#According5">
                                                    <div class="according-content">
                                                        <p class="text">
                                                            We provide a wide range of medical services, including general check-ups, diagnostics, preventive care, specialist consultations, and emergency treatments.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="according-item according-active ">
                                                <a href="#according50" data-bs-toggle="collapse" class="title-according collapsed">
                                                    <p class="body-2 fw7 ">10. How can I reschedule or cancel my appointment?</p><span></span>
                                                </a>
                                                <div id="according50" class="collapse" data-bs-parent="#According5">
                                                    <div class="according-content">
                                                        <p class="text">
                                                            We provide a wide range of medical services, including general check-ups, diagnostics, preventive care, specialist consultations, and emergency treatments.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-banner h-1 mx-30">
                <div class="wg-banner">
                    <div class="tf-container">
                        <div class="banner-inner tf-spacing-2">
                            <div class="banner-content">
                                <h6 class="sub-title mb-10 text-anime">
                                    Make an Appointment
                                </h6>
                                <h2 class="title mb-30 text-anime">
                                    Looking for professionals &amp;
                                    <br>trusted medical healthcare?
                                    <br>you're in the right place.
                                </h2>
                                <div class="benefit-list flex flex-wrap rg-30 g-50 mb-40">
                                    <div class="benefit-items body-2 wow fadeInUp" data-wow-delay=".4s">
                                        <i class="icon-check"></i>
                                        <span class="body-2">Advanced Medical Technology</span>
                                    </div>
                                    <div class="benefit-items body-2 wow fadeInUp" data-wow-delay=".6s">
                                        <i class="icon-check"></i>
                                        <span class="body-2">Specialized Treatments &amp; Services</span>
                                    </div>
                                </div>
                                <div class="wow fadeInUp" data-wow-delay=".4s">
                                    <a href="{{ route('appointment') }}" class="tf-btn hover-bg-white">
                                        <span>Make Appointment</span>
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="image img-item tf-animate-3">
                                <img src="{{ asset('image/section/banner-item.png') }}" data-src="{{ asset('image/section/banner-item.png') }}" alt="" class=" ls-is-cached lazyloaded">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="tf-container tf-spacing-1">
                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <div class="gallery-list">
                            <div class="column column-1">
                                <div class="image img-1">
                                    <img src="{{ asset('image/gallery-item/gallery-item-5.jpg') }}" data-src="{{ asset('image/gallery-item/gallery-item-5.jpg') }}" alt="" class="lazyload">
                                </div>
                                <div class="image img-2">
                                    <img src="{{ asset('image/gallery-item/gallery-item-6.jpg') }}" data-src="{{ asset('image/gallery-item/gallery-item-6.jpg') }}" alt="" class="lazyload">
                                </div>
                            </div>
                            <div class="column column-2">
                                <div class="row-1">
                                    <div class="image img-3">
                                        <img src="{{ asset('image/gallery-item/gallery-item-7.jpg') }}" data-src="{{ asset('image/gallery-item/gallery-item-7.jpg') }}" alt="" class="lazyload">
                                    </div>
                                    <div class="image img-4">
                                        <img src="{{ asset('image/gallery-item/gallery-item-9.jpg') }}" data-src="{{ asset('image/gallery-item/gallery-item-9.jpg') }}" alt="" class="lazyload">
                                    </div>
                                </div>
                                <div class="image img-5">
                                    <img src="{{ asset('image/gallery-item/gallery-item-8.jpg') }}" data-src="{{ asset('image/gallery-item/gallery-item-8.jpg') }}" alt="" class="lazyload">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
