@extends('layouts.app')

@section('title', 'Pricing Plans - Clineva')

@section('content')
<div class="page-title mt-30">
             <div class="mx-30">
                <div class="page-title-content paralax-bg">
                    <h1 class="title">
                        Pricing Table
                    </h1>
                    <div class="breadkcum">
                        <h3><a href="{{ route('home') }}" class="link-breadkcum">Home</a></h3>
                        <span class="dot bg-white mx-27"></span>
                        <h3 class="page-breadkcum pl-0">Pricing Table</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-content">

            <div class="tf-container tf-spacing-1">
                <div class="heading-section mb-70 text-center">
                    <div class="text-anime">
                        <h6 class="sub-title mb-10">
                            Pricing Plan
                        </h6>
                    </div>
                    <h2 class="title text-anime">
                        Medical Care Pricing Plans Quality
                        <br>Healthcare Within Your Budget
                    </h2>
                </div>

                <div class="pricing-item mb-30">
                    <div class="pricing-content px-mobile-sm wow fadeInUp">
                        <div class="title fs-30 fw7 wow fadeInUp" data-wow-delay=".4s">
                            Doctor’s Visit
                        </div>
                        <ul>
                            <li class="wow fadeInUp" data-wow-delay=".4s">
                                <h6 class="name-price fw5">Basic Consultation Plan</h6>
                                <h6 class="fw5">$50</h6>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay=".4s">
                                <h6 class="name-price fw5">Comprehensive Consultation Plan</h6>
                                <h6 class="fw5">$80</h6>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay=".4s">
                                <h6 class="name-price fw5">Specialist Consultation Plan</h6>
                                <h6 class="fw5">$120</h6>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay=".4s">
                                <h6 class="name-price fw5">Executive Health Check-Up Plan</h6>
                                <h6 class="fw5">$200</h6>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay=".4s">
                                <h6 class="name-price fw5">Telemedicine/Virtual Consultation Plan</h6>
                                <h6 class="fw5">$40</h6>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay=".4s">
                                <h6 class="name-price fw5">Emergency & Urgent Care</h6>
                                <h6 class="fw5">$230</h6>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="pricing-item img-2 style-right mb-30">
                    <div class="pricing-content px-mobile-sm wow fadeInUp">
                        <div class="title fs-30 fw7 wow fadeInUp" data-wow-delay=".4s">
                            Lab Test Pricing Plans
                        </div>
                        <ul>
                            <li class="wow fadeInUp" data-wow-delay=".4s">
                                <h6 class="name-price fw5">Basic Health Screening Package</h6>
                                <h6 class="fw5">$50</h6>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay=".4s">
                                <h6 class="name-price fw5">Comprehensive Health Check-Up</h6>
                                <h6 class="fw5">$80</h6>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay=".4s">
                                <h6 class="name-price fw5">Advanced Diagnostic Package</h6>
                                <h6 class="fw5">$120</h6>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay=".4s">
                                <h6 class="name-price fw5">Specialized Lab Test Packages</h6>
                                <h6 class="fw5">$200</h6>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay=".4s">
                                <h6 class="name-price fw5">Pregnancy & Women’s Health Package</h6>
                                <h6 class="fw5">$40</h6>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay=".4s">
                                <h6 class="name-price fw5">Thyroid Function Package</h6>
                                <h6 class="fw5">$230</h6>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="pricing-item img-3 mb-30">
                    <div class="pricing-content pb-50 px-mobile-sm wow fadeInUp">
                        <div class="title fs-30 fw7 wow fadeInUp" data-wow-delay=".4s">
                            Medications
                        </div>
                        <ul>
                            <li class="wow fadeInUp" data-wow-delay=".4s">
                                <h6 class="name-price fw5">Essential Medications Plan</h6>
                                <h6 class="fw5">$10</h6>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay=".4s">
                                <h6 class="name-price fw5">Chronic Disease Medication Plan</h6>
                                <h6 class="fw5">$30/m</h6>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay=".4s">
                                <h6 class="name-price fw5">Specialized Medications Plan</h6>
                                <h6 class="fw5">$50</h6>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay=".4s">
                                <h6 class="name-price fw5">Prescription Medication Plan</h6>
                                <h6 class="fw5">$200</h6>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay=".4s">
                                <h6 class="name-price fw5">Emergency & Critical Care Medications</h6>
                                <h6 class="fw5">$40</h6>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="pricing-item img-4 style-right mb-30">
                    <div class="pricing-content pb-50 px-mobile-sm wow fadeInUp">
                        <div class="title fs-30 fw7 wow fadeInUp" data-wow-delay=".4s">
                            Vaccinations Pricing Plan
                        </div>
                        <ul>
                            <li class="wow fadeInUp" data-wow-delay=".4s">
                                <h6 class="name-price fw5">Routine Vaccination Plan</h6>
                                <h6 class="fw5">$50</h6>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay=".4s">
                                <h6 class="name-price fw5">Childhood Immunization Plan</h6>
                                <h6 class="fw5">$80</h6>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay=".4s">
                                <h6 class="name-price fw5">Adult & Travel Vaccination Plan</h6>
                                <h6 class="fw5">$120</h6>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay=".4s">
                                <h6 class="name-price fw5">Senior Citizen Vaccination Plan</h6>
                                <h6 class="fw5">$200</h6>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay=".4s">
                                <h6 class="name-price fw5">COVID-19 & Booster Shots</h6>
                                <h6 class="fw5">$40</h6>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="pricing-item img-5">
                    <div class="pricing-content pb-50 px-mobile-sm wow fadeInUp">
                        <div class="title fs-30 fw7 wow fadeInUp" data-wow-delay=".4s">
                            Wound Care Pricing Plan
                        </div>
                        <ul>
                            <li class="wow fadeInUp" data-wow-delay=".4s">
                                <h6 class="name-price fw5">Basic Wound Care Package</h6>
                                <h6 class="fw5">$10</h6>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay=".4s">
                                <h6 class="name-price fw5">Advanced Wound Care Package</h6>
                                <h6 class="fw5">$30/m</h6>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay=".4s">
                                <h6 class="name-price fw5">Chronic & Complex Wound Care Plan</h6>
                                <h6 class="fw5">$50</h6>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay=".4s">
                                <h6 class="name-price fw5">Emergency Wound Treatment</h6>
                                <h6 class="fw5">$200</h6>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay=".4s">
                                <h6 class="name-price fw5">Home-Based Wound Care</h6>
                                <h6 class="fw5">$180</h6>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay=".4s">
                                <h6 class="name-price fw5">Follow-up & Dressing Changes</h6>
                                <h6 class="fw5">$200</h6>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay=".4s">
                                <h6 class="name-price fw5">Wound Infection Screening</h6>
                                <h6 class="fw5">$200</h6>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
@endsection
