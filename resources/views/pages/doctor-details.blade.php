@extends('layouts.app')

@section('title', 'Doctor Details - Clineva')

@section('content')
<div class="page-title img-2 mt-30">
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

            <div class="wg-doctor-details">
                <div class="tf-container tf-spacing-1">
                    <div class="row rg-70">
                        <div class="col-md-4">
                            <div class="info-doctor-details">
                                <a href="#" class="image">
                                    <img src="{{ asset('image/avatar/avartar-details.jpg') }}" data-src="{{ asset('image/avatar/avartar-details.jpg') }}" alt="" class="lazyload">
                                </a>
                                <div class="info-content text-center px-mobile-sm">
                                    <div class="img-item item-1">
                                        <img src="{{ asset('image/team-item/item-info-doctor-1.png') }}" data-src="{{ asset('image/team-item/item-info-doctor-1.png') }}" alt="" class="lazyload">
                                    </div>
                                    <div class="img-item item-2">
                                        <img src="{{ asset('image/team-item/item-info-doctor-2.png') }}" data-src="{{ asset('image/team-item/item-info-doctor-2.png') }}" alt="" class="lazyload">
                                    </div>
                                    <div class="top-content position-relative">
                                        <h3 class="name"><a href="#">Santiago K. Wilson</a></h3>
                                        <a href="#" class="position">Senior Dentist</a>
                                        <p class="desc">
                                            Senior Dentist provides top-tier dental care tailored to your needs. Specializing in
                                            advanced treatments procedures
                                        </p>
                                    </div>
                                    <div class="bottom-content position-relative">
                                        <p class="body-2 fw7">Follow Me</p>
                                        <ul class="post-social justify-content-center style-bg-white style-radius-50">
                                            <li><a href="#" class="icon-social"><i class="icon-facebook"></i></a></li>
                                            <li><a href="#" class="icon-social"><i class="icon-twitter"></i></a></li>
                                            <li><a href="#" class="icon-social"><i class="icon-linkedin2"></i></a></li>
                                            <li><a href="#" class="icon-social"><i class="icon-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="details-content doctor-details-content">
                                <h2 class="title-details">
                                    About me
                                </h2>
                                <p class="desc mb-30">
                                    With extensive experience and a dedication to exceptional dental care, our Senior Dentist is committed
                                    to providing the highest standard of oral health services. Specializing in preventive restorative, an cosmetic dentistry, they combine advanced techniques with a patient-centered approach to ensure
                                </p>
                                <p class="desc mb-50">
                                    Whether it’s a routine check-up, complex dental procedures, or a complete smile makeover, their expertise and precision guarantee the best possible care. With a passion for healthy smiles and overall well-being, our Senior Dentist strives to make every visit.
                                </p>

                                <div class="education-specia mb-50">
                                    <div class="top">
                                        <div class="image">
                                            <img src="{{ asset('image/section/img-education-content.jpg') }}" data-src="{{ asset('image/section/img-education-content.jpg') }}" alt="" class="lazyload">
                                        </div>
                                    </div>
                                    <div class="bottom flex justify-content-between g-30 px-mobile-md">
                                        <div class="specia-content">
                                            <div class="title-content fs-30 fw7">
                                                Specialist
                                            </div>
                                            <ul class="specia-list">
                                                <li class="specia-item"><i class="icon-star"></i>Medicine Care</li>
                                                <li class="specia-item"><i class="icon-star"></i>Healthcare Care</li>
                                                <li class="specia-item"><i class="icon-star"></i>Dental Care</li>
                                                <li class="specia-item"><i class="icon-star"></i>Surgeon Specialist</li>
                                            </ul>
                                        </div>
                                        <div class="education-content">
                                            <div class="title-content fs-30 fw7">
                                                Education
                                            </div>
                                            <ul class="education-list">
                                                <li class="education-item"><i class="icon-education"></i><span class="flex justify-content-between content flex-wrap"><span class="fw6">MBBS</span> <span class="fw6">:</span> <span> University of California</span></span></li>
                                                <li class="education-item"><i class="icon-education"></i><span class="flex justify-content-between content flex-wrap"><span class="fw6">Doctor of Medicine (MD)</span> <span class="fw6">:</span> <span> New York</span></span></li>
                                                <li class="education-item"><i class="icon-education"></i><span class="flex justify-content-between content flex-wrap"><span class="fw6">Doctor of Chiropractic (DC) :</span> <span> USA</span></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="box-skills box-details-item mb-50 px-mobile-sm">
                                    <div class="title-box fs-30 fw7">
                                        Professional Skills
                                    </div>
                                    <div class="text">
                                        Professional skills are essential for success in any field, combining technical expertise, interpersonal abilities, and critical thinking. Strong communication
                                    </div>

                                    <div class="list-skills flex">
                                        <div class="item-skill">
                                            <div class="progress-circle-svg" data-progress="93">
                                                <svg class="progress-ring" width="107" height="107">
                                                    <circle class="progress-ring-track" r="47" cx="50" cy="50" />
                                                    <circle class="progress-ring-bar" r="47" cx="50" cy="50" />
                                                </svg>
                                                <div class="text-number">
                                                    <span class="progress-text fs-35 fw7">0</span> <span class="body-2">%</span>
                                                </div>
                                            </div>
                                            <h6>Surgery</h6>
                                        </div>
                                        <div class="item-skill">
                                            <div class="progress-circle-svg" data-progress="80">
                                                <svg class="progress-ring" width="107" height="107">
                                                    <circle class="progress-ring-track" r="47" cx="50" cy="50" />
                                                    <circle class="progress-ring-bar" r="47" cx="50" cy="50" />
                                                </svg>
                                                <div class="text-number">
                                                    <span class="progress-text">0</span><span class="body-2">%</span>
                                                </div>
                                            </div>
                                            <h6>Medicine</h6>
                                        </div>
                                        <div class="item-skill">
                                            <div class="progress-circle-svg" data-progress="76">
                                                <svg class="progress-ring" width="107" height="107">
                                                    <circle class="progress-ring-track" r="47" cx="50" cy="50" />
                                                    <circle class="progress-ring-bar" r="47" cx="50" cy="50" />
                                                </svg>
                                                <div class="text-number">
                                                    <span class="progress-text fs-35 fw7">0</span> <span class="body-2">%</span>
                                                </div>
                                            </div>
                                            <h6>Healthcare</h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="box-mess box-details-item px-mobile-sm">
                                    <div class="title-box fs-30 fw7">
                                        Send Us Message
                                    </div>
                                    <form id="contactform" class="form-contact-us no-bg" method="post" action="https://micarehtml.vercel.app/contact/contact-process.php">

                                        <div class="cols g-30 mb-25">
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
                                                <input type="number" name="phone" id="phone" placeholder="Phone" required>
                                            </fieldset>

                                            <fieldset class="item">
                                                <i class="icon-envelope-3"></i>
                                                <input type="text" name="subject" id="subject" placeholder="Subject" required>
                                            </fieldset>
                                        </div>

                                        <fieldset class="item-textarea mb-30">
                                            <i class="icon-envelope-2"></i>
                                            <textarea name="message" id="message" placeholder="Write message..." required></textarea>
                                        </fieldset>

                                        <button type="submit" class="tf-btn">
                                            <span>Send Us Message</span>
                                            <i class="icon-arrow-right"></i>
                                        </button>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
