@extends('layouts.app')

@section('title', 'Our Doctors - Clineva')

@section('content')
<div class="page-title mt-30">
            <div class="mx-30">
                <div class="page-title-content paralax-bg">
                    <h1 class="title">
                        Meet Our Doctors
                    </h1>
                    <div class="breadkcum">
                        <h3><a href="{{ route('home') }}" class="link-breadkcum">Home</a></h3>
                        <span class="dot bg-white"></span>
                        <h3 class="page-breadkcum">Doctors</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-content">

            <section class="section-team tf-spacing-1">
                <div class="tf-container">
                    <div class="heading-section mb-70 text-center">
                        <h6 class="sub-title mb-10 text-anime">
                            Meet Our Doctors
                        </h6>
                        <h2 class="title text-anime">
                            Leading Medical Professionals
                            <br>at Your Service
                        </h2>
                    </div>
                </div>
                <div class="tf-container">
                    <div class="row rg-30">
                        <div class="col-lg-3 col-md-6">
                            <div class="team-item hover-img style-border wow fadeInUp">
                                <div class="top-item">
                                    <h4 class="name-team wow fadeInUp">
                                        <a href="{{ route('doctors.details') }}">Rafael D. Bratcher</a>
                                    </h4>
                                    <a href="#" class="position wow fadeInUp">
                                        Neurologist
                                    </a>
                                </div>
                                <div class="wow fadeInUp">
                                    <a href="{{ route('doctors.details') }}" class="image">
                                        <img src="{{ asset('image/team-item/team-item-1.jpg') }}" data-src="{{ asset('image/team-item/team-item-1.jpg') }}" alt="" class="lazyload">
                                    </a>
                                </div>
                                <div class="bottom-btn wow fadeInUp">
                                    <a href="{{ route('doctors.details') }}" class="tf-btn style-small style-border hover-bg-red">
                                        <span class="color-title">Make Appointment</span>
                                        <i class="icon-arrow-right color-title"></i>
                                    </a>
                                </div>
                                <ul class="post-social style-border">
                                    <li class="wow fadeInUp"><a href="#" class="icon-social"><i class="icon-facebook"></i></a></li>
                                    <li class="wow fadeInUp" data-wow-delay=".1s"><a href="#" class="icon-social"><i class="icon-twitter"></i></a></li>
                                    <li class="wow fadeInUp" data-wow-delay=".2s"><a href="#" class="icon-social"><i class="icon-linkedin2"></i></a></li>
                                    <li class="wow fadeInUp" data-wow-delay=".3s"><a href="#" class="icon-social"><i class="icon-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="team-item hover-img style-border wow fadeInUp" data-wow-delay=".1s">
                                <div class="top-item">
                                    <h4 class="name-team wow fadeInUp" data-wow-delay=".1s">
                                        <a href="{{ route('doctors.details') }}">Santiago K. Wilson</a>
                                    </h4>
                                    <a href="#" class="position wow fadeInUp" data-wow-delay=".1s">
                                        Senior Dentist
                                    </a>
                                </div>
                                <div class="wow fadeInUp" data-wow-delay=".1s">
                                    <a href="{{ route('doctors.details') }}" class="image">
                                        <img src="{{ asset('image/team-item/team-item-2.jpg') }}" data-src="{{ asset('image/team-item/team-item-2.jpg') }}" alt="" class="lazyload">
                                    </a>
                                </div>
                                <div class="bottom-btn wow fadeInUp" data-wow-delay=".1s">
                                    <a href="{{ route('doctors.details') }}" class="tf-btn style-small style-border hover-bg-red">
                                        <span class="color-title">Make Appointment</span>
                                        <i class="icon-arrow-right color-title"></i>
                                    </a>
                                </div>
                                <ul class="post-social style-border">
                                    <li class="wow fadeInUp" data-wow-delay=".1s"><a href="#" class="icon-social"><i class="icon-facebook"></i></a></li>
                                    <li class="wow fadeInUp" data-wow-delay=".2s"><a href="#" class="icon-social"><i class="icon-twitter"></i></a></li>
                                    <li class="wow fadeInUp" data-wow-delay=".3s"><a href="#" class="icon-social"><i class="icon-linkedin2"></i></a></li>
                                    <li class="wow fadeInUp" data-wow-delay=".4s"><a href="#" class="icon-social"><i class="icon-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="team-item hover-img style-border wow fadeInUp" data-wow-delay=".2s">
                                <div class="top-item">
                                    <h4 class="name-team wow fadeInUp" data-wow-delay=".2s">
                                        <a href="{{ route('doctors.details') }}">Micheal C. Simmons</a>
                                    </h4>
                                    <a href="#" class="position wow fadeInUp" data-wow-delay=".2s">
                                        Medicine Specialist
                                    </a>
                                </div>
                                <div class="wow fadeInUp" data-wow-delay=".2s">
                                    <a href="{{ route('doctors.details') }}" class="image">
                                        <img src="{{ asset('image/team-item/team-item-3.jpg') }}" data-src="{{ asset('image/team-item/team-item-3.jpg') }}" alt="" class="lazyload">
                                    </a>
                                </div>
                                <div class="bottom-btn wow fadeInUp" data-wow-delay=".2s">
                                    <a href="{{ route('doctors.details') }}" class="tf-btn style-small style-border hover-bg-red">
                                        <span class="color-title">Make Appointment</span>
                                        <i class="icon-arrow-right color-title"></i>
                                    </a>
                                </div>
                                <ul class="post-social style-border">
                                    <li class="wow fadeInUp" data-wow-delay=".2s"><a href="#" class="icon-social"><i class="icon-facebook"></i></a></li>
                                    <li class="wow fadeInUp" data-wow-delay=".3s"><a href="#" class="icon-social"><i class="icon-twitter"></i></a></li>
                                    <li class="wow fadeInUp" data-wow-delay=".4s"><a href="#" class="icon-social"><i class="icon-linkedin2"></i></a></li>
                                    <li class="wow fadeInUp" data-wow-delay=".5s"><a href="#" class="icon-social"><i class="icon-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="team-item hover-img style-border wow fadeInUp" data-wow-delay=".3s">
                                <div class="top-item">
                                    <h4 class="name-team wow fadeInUp" data-wow-delay=".3s">
                                        <a href="{{ route('doctors.details') }}">Columbus A. Davis</a>
                                    </h4>
                                    <a href="#" class="position wow fadeInUp" data-wow-delay=".3s">
                                        Neuro Surgeon
                                    </a>
                                </div>
                                <div class="wow fadeInUp" data-wow-delay=".3s">
                                    <a href="{{ route('doctors.details') }}" class="image">
                                        <img src="{{ asset('image/team-item/team-item-4.jpg') }}" data-src="{{ asset('image/team-item/team-item-4.jpg') }}" alt="" class="lazyload">
                                    </a>
                                </div>
                                <div class="bottom-btn wow fadeInUp" data-wow-delay=".3s">
                                    <a href="{{ route('doctors.details') }}" class="tf-btn style-small style-border hover-bg-red">
                                        <span class="color-title">Make Appointment</span>
                                        <i class="icon-arrow-right color-title"></i>
                                    </a>
                                </div>
                                <ul class="post-social style-border">
                                    <li class="wow fadeInUp" data-wow-delay=".3s"><a href="#" class="icon-social"><i class="icon-facebook"></i></a></li>
                                    <li class="wow fadeInUp" data-wow-delay=".4s"><a href="#" class="icon-social"><i class="icon-twitter"></i></a></li>
                                    <li class="wow fadeInUp" data-wow-delay=".5s"><a href="#" class="icon-social"><i class="icon-linkedin2"></i></a></li>
                                    <li class="wow fadeInUp" data-wow-delay=".6s"><a href="#" class="icon-social"><i class="icon-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="team-item hover-img style-border wow fadeInUp">
                                <div class="top-item">
                                    <h4 class="name-team wow fadeInUp">
                                        <a href="{{ route('doctors.details') }}">John R. Schneider</a>
                                    </h4>
                                    <a href="#" class="position wow fadeInUp">
                                        Neurologist
                                    </a>
                                </div>
                                <div class="wow fadeInUp">
                                    <a href="{{ route('doctors.details') }}" class="image">
                                        <img src="{{ asset('image/team-item/team-item-9.jpg') }}" data-src="{{ asset('image/team-item/team-item-9.jpg') }}" alt="" class="lazyload">
                                    </a>
                                </div>
                                <div class="bottom-btn wow fadeInUp">
                                    <a href="{{ route('doctors.details') }}" class="tf-btn style-small style-border hover-bg-red">
                                        <span class="color-title">Make Appointment</span>
                                        <i class="icon-arrow-right color-title"></i>
                                    </a>
                                </div>
                                <ul class="post-social style-border">
                                    <li class="wow fadeInUp"><a href="#" class="icon-social"><i class="icon-facebook"></i></a></li>
                                    <li class="wow fadeInUp" data-wow-delay=".1s"><a href="#" class="icon-social"><i class="icon-twitter"></i></a></li>
                                    <li class="wow fadeInUp" data-wow-delay=".2s"><a href="#" class="icon-social"><i class="icon-linkedin2"></i></a></li>
                                    <li class="wow fadeInUp" data-wow-delay=".3s"><a href="#" class="icon-social"><i class="icon-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="team-item hover-img style-border wow fadeInUp" data-wow-delay=".1s">
                                <div class="top-item">
                                    <h4 class="name-team wow fadeInUp" data-wow-delay=".1s">
                                        <a href="{{ route('doctors.details') }}">Darrin C. Heyward</a>
                                    </h4>
                                    <a href="#" class="position wow fadeInUp" data-wow-delay=".1s">
                                        Senior Dentist
                                    </a>
                                </div>
                                <div class="wow fadeInUp" data-wow-delay=".1s">
                                    <a href="{{ route('doctors.details') }}" class="image">
                                        <img src="{{ asset('image/team-item/team-item-10.jpg') }}" data-src="{{ asset('image/team-item/team-item-10.jpg') }}" alt="" class="lazyload">
                                    </a>
                                </div>
                                <div class="bottom-btn wow fadeInUp" data-wow-delay=".1s">
                                    <a href="{{ route('doctors.details') }}" class="tf-btn style-small style-border hover-bg-red">
                                        <span class="color-title">Make Appointment</span>
                                        <i class="icon-arrow-right color-title"></i>
                                    </a>
                                </div>
                                <ul class="post-social style-border">
                                    <li class="wow fadeInUp" data-wow-delay=".1s"><a href="#" class="icon-social"><i class="icon-facebook"></i></a></li>
                                    <li class="wow fadeInUp" data-wow-delay=".2s"><a href="#" class="icon-social"><i class="icon-twitter"></i></a></li>
                                    <li class="wow fadeInUp" data-wow-delay=".3s"><a href="#" class="icon-social"><i class="icon-linkedin2"></i></a></li>
                                    <li class="wow fadeInUp" data-wow-delay=".4s"><a href="#" class="icon-social"><i class="icon-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="team-item hover-img style-border wow fadeInUp" data-wow-delay=".2s">
                                <div class="top-item">
                                    <h4 class="name-team wow fadeInUp" data-wow-delay=".2s">
                                        <a href="{{ route('doctors.details') }}">Benjamin S. Gould</a>
                                    </h4>
                                    <a href="#" class="position wow fadeInUp" data-wow-delay=".2s">
                                        Medicine Specialist
                                    </a>
                                </div>
                                <div class="wow fadeInUp" data-wow-delay=".2s">
                                    <a href="{{ route('doctors.details') }}" class="image">
                                        <img src="{{ asset('image/team-item/team-item-11.jpg') }}" data-src="{{ asset('image/team-item/team-item-11.jpg') }}" alt="" class="lazyload">
                                    </a>
                                </div>
                                <div class="bottom-btn wow fadeInUp" data-wow-delay=".2s">
                                    <a href="{{ route('doctors.details') }}" class="tf-btn style-small style-border hover-bg-red">
                                        <span class="color-title">Make Appointment</span>
                                        <i class="icon-arrow-right color-title"></i>
                                    </a>
                                </div>
                                <ul class="post-social style-border">
                                    <li class="wow fadeInUp" data-wow-delay=".2s"><a href="#" class="icon-social"><i class="icon-facebook"></i></a></li>
                                    <li class="wow fadeInUp" data-wow-delay=".3s"><a href="#" class="icon-social"><i class="icon-twitter"></i></a></li>
                                    <li class="wow fadeInUp" data-wow-delay=".4s"><a href="#" class="icon-social"><i class="icon-linkedin2"></i></a></li>
                                    <li class="wow fadeInUp" data-wow-delay=".5s"><a href="#" class="icon-social"><i class="icon-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="team-item hover-img style-border wow fadeInUp" data-wow-delay=".3s">
                                <div class="top-item">
                                    <h4 class="name-team wow fadeInUp" data-wow-delay=".3s">
                                        <a href="{{ route('doctors.details') }}">Michael E. Simmons</a>
                                    </h4>
                                    <a href="#" class="position wow fadeInUp" data-wow-delay=".3s">
                                        Neuro Surgeon
                                    </a>
                                </div>
                                <div class="wow fadeInUp" data-wow-delay=".3s">
                                    <a href="{{ route('doctors.details') }}" class="image">
                                        <img src="{{ asset('image/team-item/team-item-12.jpg') }}" data-src="{{ asset('image/team-item/team-item-12.jpg') }}" alt="" class="lazyload">
                                    </a>
                                </div>
                                <div class="bottom-btn wow fadeInUp" data-wow-delay=".3s">
                                    <a href="{{ route('doctors.details') }}" class="tf-btn style-small style-border hover-bg-red">
                                        <span class="color-title">Make Appointment</span>
                                        <i class="icon-arrow-right color-title"></i>
                                    </a>
                                </div>
                                <ul class="post-social style-border">
                                    <li class="wow fadeInUp" data-wow-delay=".3s"><a href="#" class="icon-social"><i class="icon-facebook"></i></a></li>
                                    <li class="wow fadeInUp" data-wow-delay=".4s"><a href="#" class="icon-social"><i class="icon-twitter"></i></a></li>
                                    <li class="wow fadeInUp" data-wow-delay=".5s"><a href="#" class="icon-social"><i class="icon-linkedin2"></i></a></li>
                                    <li class="wow fadeInUp" data-wow-delay=".6s"><a href="#" class="icon-social"><i class="icon-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-why h-1 tf-spacing-11">
                <div class="tf-container">
                    <div class="row rg-19">
                        <div class="col-xl-6">
                            <div class="heading-section style-2 px-mobile-sm tf-animate-1">
                                <div class="img-item item-1">
                                    <img src="{{ asset('image/section/bg-section-why-h1.png') }}" data-src="{{ asset('image/section/bg-section-why-h1.png') }}" alt="" class="lazyload">
                                </div>
                                <div class="img-item item-2">
                                    <img src="{{ asset('image/section/item-section-why-h1.png') }}" data-src="{{ asset('image/section/item-section-why-h1.png') }}" alt="" class="lazyload">
                                </div>
                                <h6 class="sub-title mb-10">
                                    Why Choose Us
                                </h6>
                                <h2 class="title">
                                    Advanced Medical Care
                                    with a Human Touch
                                </h2>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="about-item style-desc px-mobile-sm tf-animate-1" data-delay=".3s">
                                <span class="number-item">1</span>
                                <div class="item-content">
                                    <h5 class="title"><a href="#">Experienced and Compassionate Care</a></h5>
                                    <div class="desc">Team highly trained doctors, nurses healthcare patient.</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="about-item style-desc px-mobile-sm tf-animate-1" data-delay=".6s">
                                <span class="number-item">2</span>
                                <div class="item-content">
                                    <h5 class="title"><a href="#">Advanced Medical Technology</a></h5>
                                    <div class="desc">Team highly trained doctors, nurses healthcare patient.</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="about-item style-desc px-mobile-sm tf-animate-4" data-delay=".6s">
                                <span class="number-item">3</span>
                                <div class="item-content">
                                    <h5 class="title"><a href="#">Emergency and Support Services</a></h5>
                                    <div class="desc">Team highly trained doctors, nurses healthcare patient.</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="about-item style-desc px-mobile-sm tf-animate-4" data-delay=".3s">
                                <span class="number-item">4</span>
                                <div class="item-content">
                                    <h5 class="title"><a href="#">Patient-Centered Approach</a></h5>
                                    <div class="desc">Team highly trained doctors, nurses healthcare patient.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="image tf-animate-4">
                                <img src="{{ asset('image/section/img-section-why-h1.jpg') }}" data-src="{{ asset('image/section/img-section-why-h1.jpg') }}" alt="" class="lazyload">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
@endsection
