@extends('layouts.app')

@section('title', 'Make An Appointment - Clineva')

@section('content')
<div class="page-title mt-30 style-2 mb-30">
            <div class="mx-30">
                <div class="page-title-content paralax-bg">
                    <h1 class="title">
                        Make An
                        <br>Appointment
                    </h1>
                    <div class="breadkcum">
                        <h3><a href="{{ route('home') }}" class="link-breadkcum">Home</a></h3>
                        <span class="dot bg-white"></span>
                        <h3 class="page-breadkcum">Make An Appointment</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-content">
            <section class="section-appointment p-make tf-spacing-11 mb-30">
                <div class="image">
                    <img src="{{ asset('image/section/img-section-appointment.jpg') }}" data-src="{{ asset('image/section/img-section-appointment.jpg') }}" alt="" class="lazyload parallax-img ">
                </div>
                <div class="text-overlay">make an appointment</div>
                <div class="tf-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="heading-section text-center mb-70">
                                <h6 class="sub-title mb-10 text-anime">
                                    Make an Appointment
                                </h6>
                                <h2 class="title text-anime">
                                    Fast & Easy Scheduling Today!
                                </h2>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="bottom-section">
                                <form id="contactform" class="form-contact-us no-bg-2" method="POST" action="javascript:void(0)">
                                    
                                    <div class="heading-form mb-30">
                                        <div class="title">
                                            Please enter your info
                                        </div>
                                        <div class="desc">Strong communication and teamwork skills enable effective collaboration</div>
                                    </div>
                                    <div class="cols mb-20 g-20">
                                        <fieldset class="item">
                                            <i class="icon-user"></i>
                                            <input type="text" name="name" id="name" placeholder="Name" required>
                                        </fieldset>

                                        <fieldset class="item">
                                            <i class="icon-envelope"></i>
                                            <input type="email" name="mail" id="mail" placeholder="Email Address" required>
                                        </fieldset>

                                        <fieldset class="item">
                                            <i class="icon-phone-volume-2"></i>
                                            <input type="number" name="phone" id="phone" placeholder="Phone no" required>
                                        </fieldset>

                                        <fieldset class="item">
                                            <i class="icon-calendar-day"></i>
                                            <input type="text" name="date" id="datepicker" class="date-input" placeholder="Date & Time" required>
                                        </fieldset>

                                        <fieldset class="item">
                                            <div class="nice-select">
                                                <i class="icon-stethoscope"></i>
                                                <span class="current caption-1">Choose Department</span>
                                                <ul class="list">
                                                    <li class="option option-all">
                                                        Choose Department
                                                    </li>
                                                    <li class="option">
                                                        Department 1
                                                    </li>
                                                    <li class="option">
                                                        Department 2
                                                    </li>
                                                </ul>
                                            </div>
                                        </fieldset>

                                        <fieldset class="item">
                                            <div class="nice-select">
                                                <i class="icon-user-doctor"></i>
                                                <span class="current caption-1">Doctors</span>
                                                <ul class="list">
                                                    <li class="option option-all">
                                                        Doctors
                                                    </li>
                                                    <li class="option">
                                                        Doctors 1
                                                    </li>
                                                    <li class="option">
                                                        Doctors 2
                                                    </li>
                                                </ul>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <fieldset class="item-textarea mb-20">
                                        <i class="icon-envelope-2"></i>
                                        <textarea name="message" id="message" placeholder="Write message..." required></textarea>
                                    </fieldset>

                                    <button type="submit" class="tf-btn">
                                        <span>Submit now</span>
                                        <i class="icon-arrow-right"></i>
                                    </button>
                                </form>
                                <div class="image-2">
                                    <img src="{{ asset('image/section/img-section-appointment-p-make-2.jpg') }}" data-src="{{ asset('image/section/img-section-appointment-p-make-2.jpg') }}" alt="" class="lazyload">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
@endsection
