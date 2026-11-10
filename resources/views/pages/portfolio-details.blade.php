@extends('layouts.app')

@section('title', 'Portfolio Details - Clineva')

@section('content')
<div class="page-title mt-30">
             <div class="mx-30">
                <div class="page-title-content paralax-bg">
                    <h1 class="title">
                        Laser Eye Treatments
                    </h1>
                    <div class="breadkcum flex-wrap">
                        <h3><a href="{{ route('home') }}" class="link-breadkcum">Home</a></h3>
                        <span class="dot bg-white mx-25"></span>
                        <h3 class="page-breadkcum pl-0">Portfolio</h3>
                        <span class="dot bg-white mx-25"></span>
                        <h3 class="page-breadkcum pl-0"> Portfolios Details</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-content">
            <div class="wg-portfolio-details">
                <div class="tf-container tf-spacing-1">
                    <div class="row">
                        <div class="col-12">
                            <div class="image img-details-1 mb-70">
                                <img src="{{ asset('image/section/img-portfolios-details-1.jpg') }}" data-src="{{ asset('image/section/img-portfolios-details-1.jpg') }}" alt="" class="lazyload">
                            </div>
                        </div>
                    </div>
                    <div class="row rg-30 mb-70">
                        <div class="col-lg-7">
                            <div class="heading-section">
                                <h2 class="title mb-40">
                                    Laser Eye Treatment Portfolio showcases expertise in advanced vision correction
                                </h2>
                                <div class="text">
                                    Our Laser Eye Treatment Portfolio showcases our expertise in advanced vision correction
                                    and eye care solutions. With state-of-the-art technology and experienced ophthalmologists, we provide customized treatments that enhance vision, correct refractive errors, and manage
                                    various eye conditions effectively.
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="box-project-info px-mobile-sm">

                                <h3 class="title-box">
                                    Project Info
                                </h3>

                                <div class="info-item">
                                    <div>
                                        <h6 class="fw4">Clients</h6>
                                        <h5>:</h5>
                                    </div>
                                    <h5>Raymond D. Davis</h5>
                                </div>

                                <div class="info-item">
                                    <div>
                                        <h6 class="fw4">Tags</h6>
                                        <h5>:</h5>
                                    </div>
                                    <h5>Eye Care</h5>
                                </div>

                                <div class="info-item">
                                    <div>
                                        <h6 class="fw4">Category</h6>
                                        <h5>:</h5>
                                    </div>
                                    <h5>Eye Treatments</h5>
                                </div>

                                <div class="info-item">
                                    <div>
                                        <h6 class="fw4">Date</h6>
                                        <h5>:</h5>
                                    </div>
                                    <h5>25 March 2025</h5>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row rg-30 mb-62">
                        <div class="col-lg-6">
                            <div class="portfolio-details-item">
                                <div class="image img-details-2 mb-50">
                                    <img src="{{ asset('image/section/img-portfolios-details-2.jpg') }}" data-src="{{ asset('image/section/img-portfolios-details-2.jpg') }}" alt="" class="lazyload">
                                </div>
                                <div class="title fs-35 lh-45 fw7">
                                    How You Can Benefit from Our Eye Care Treatments
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="portfolio-details-item">
                                <div class="image img-details-2 mb-50">
                                    <img src="{{ asset('image/section/img-portfolios-details-3.jpg') }}" data-src="{{ asset('image/section/img-portfolios-details-3.jpg') }}" alt="" class="lazyload">
                                </div>
                                <div class="desc-details">
                                    Our eye care treatments are designed to enhance vision, prevent eye diseases, and improve overall eye health. Whether you need routine check-ups, corrective procedures, or specialized treatment, we provide expert care to help you maintain clear and healthy eyesight.
                                </div>
                                <div class="list-services-details-item">
                                    <div class="item-services-details">
                                        <div class="icon">
                                            <i class="icon-check"></i>
                                        </div>
                                        <div class="item-content">
                                            <h6 class="title-item">
                                                Improved Vision
                                            </h6>
                                            <div class="desc">
                                                Correct refractive errors such as nearsightedness, farsightedness, and astigmatism, reducing reliance on glasses or contacts.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-services-details">
                                        <div class="icon">
                                            <i class="icon-check"></i>
                                        </div>
                                        <div class="item-content">
                                            <h6 class="title-item">
                                                Early Detection & Prevention
                                            </h6>
                                            <div class="desc">
                                                Regular eye exams help detect conditions like glaucoma, cataracts, and diabetic retinopathy before they become serious.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-services-details">
                                        <div class="icon">
                                            <i class="icon-check"></i>
                                        </div>
                                        <div class="item-content">
                                            <h6 class="title-item">
                                                Minimally Invasive Procedures
                                            </h6>
                                            <div class="desc">
                                                Advanced laser treatments, such as LASIK and PRK, offer quick recovery times with minimal discomfort.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row rg-30">
                        <div class="col-lg-6">
                            <div class="portfolio-details-item">
                                <div class="image img-details-2 mb-50">
                                    <img src="{{ asset('image/section/img-portfolios-details-4.jpg') }}" data-src="{{ asset('image/section/img-portfolios-details-4.jpg') }}" alt="" class="lazyload">
                                </div>
                                <div class="title fs-35 lh-45 fw7">
                                    Project Summery
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="portfolio-details-item">
                                <div class="image img-details-2 mb-50">
                                    <img src="{{ asset('image/section/img-portfolios-details-5.jpg') }}" data-src="{{ asset('image/section/img-portfolios-details-5.jpg') }}" alt="" class="lazyload">
                                </div>
                                <div class="desc-details">
                                    Our Eye Care Treatments Project focuses on providing advanced, high-quality vision care solutions to improve eye health and enhance patients' quality of life. Utilizing cutting-edge technology, expert ophthalmologists, and personalized treatment plans, we offer comprehensive services ranging from routine eye exams to complex surgical procedures. Our project encompasses laser vision correction (LASIK, PRK, SMILE), cataract and glaucoma treatments, retinal therapies, and dry eye management, ensuring optimal care for diverse patient needs.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list-btn flex justify-content-between align-items-center rg-30">
                        <a href="#" class="btn-arrow-details previous-details ">
                            <span class="icon">
                                <i class="icon-chevron-left"></i>
                            </span>
                            <h6 class="text lh-30">
                                Future Healthcare Innovations
                                in Medical Treatment
                            </h6>
                        </a>
                        <a href="{{ route('portfolio') }}" class="btn-grid">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                        <a href="#" class="btn-arrow-details next-details">
                            <span class="icon">
                                <i class="icon-chevron-right"></i>
                            </span>
                            <h6 class="text lh-30">
                                Future Healthcare Innovations
                                in Medical Treatment
                            </h6>
                        </a>
                    </div>
                </div>
            </div>
        </div>
@endsection
