@extends('layouts.app')

@section('title', 'Services Details - Clineva')

@section('content')
<div class="page-title mt-30">
             <div class="mx-30">
                <div class="page-title-content paralax-bg">
                    <h1 class="title">
                        Health & Wellness
                    </h1>
                    <div class="breadkcum">
                        <h3><a href="{{ route('home') }}" class="link-breadkcum">Home</a></h3>
                        <span class="dot bg-white mx-25"></span>
                        <h3 class="page-breadkcum pl-0">Service Details</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-content">
            <div class="wg-services-details tf-spacing-1">
                <div class="tf-container">
                    <div class="row rg-30">
                        <div class="col-lg-4">
                            <div class="tf-sidebar">

                                <div class="sidebar-item sidebar-style-2 sidebar-content sidebar-categories px-mobile-sm">
                                    <h4 class="title-content">
                                        Popular Services
                                    </h4>
                                    <ul class="list">
                                        <li class="item">
                                            <a href="#">Medicine Care</a>
                                            <i class="icon-arrow-right"></i>
                                        </li>
                                        <li class="item">
                                            <a href="#">Dental Care</a>
                                            <i class="icon-arrow-right"></i>
                                        </li>
                                        <li class="item">
                                            <a href="#">Child Care</a>
                                            <i class="icon-arrow-right"></i>
                                        </li>
                                        <li class="item">
                                            <a href="#">Eye Care</a>
                                            <i class="icon-arrow-right"></i>
                                        </li>
                                        <li class="item">
                                            <a href="#">Neurology Care</a>
                                            <i class="icon-arrow-right"></i>
                                        </li>
                                        <li class="item">
                                            <a href="#">Mental Health Care</a>
                                            <i class="icon-arrow-right"></i>
                                        </li>
                                        <li class="item">
                                            <a href="#">Surgery Care</a>
                                            <i class="icon-arrow-right"></i>
                                        </li>
                                    </ul>
                                </div>

                                <div class="sidebar-item sidebar-banner">
                                    <h6 class="sub-title lsp-0">
                                        Find a Medical ?
                                    </h6>
                                    <div class="title">
                                        Looking for Expert
                                        medical healthcare?
                                    </div>
                                    <div class="benefit-list">
                                        <div class="benefit-items body-2">
                                            <i class="icon-check"></i>
                                            <span class="body-2">Advanced Medical Technology</span>
                                        </div>
                                        <div class="benefit-items body-2">
                                            <i class="icon-check"></i>
                                            <span class="body-2">Treatments &amp; Services</span>
                                        </div>
                                    </div>

                                    <a href="#" class="tf-btn">
                                        <span>Find Medical Care</span>
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                    <h5 class="number-phone">
                                        <i class="icon-phone"></i>
                                        <a href="#">+1 (234) 568 0000</a>
                                    </h5>

                                </div>

                                <div class="sidebar-item sidebar-style-2 sidebar-content sidebar-categories sidebar-company-profile px-mobile-sm">
                                    <h4 class="title-content">
                                        Company profile
                                    </h4>
                                    <ul class="list">
                                        <li class="item">
                                            <a href="#">Download pdf</a>
                                            <i class="icon-file-pdf"></i>
                                        </li>
                                        <li class="item">
                                            <a href="#">Download doc file</a>
                                            <i class="icon-file-word"></i>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="details-content services-details-content">

                                <h2 class="title-content mb-30">
                                    Mental health and wellness refer to a person’s emotional, psychological, and social well-being.
                                </h2>

                                <p class="desc mb-50">
                                    We provide comprehensive Mental Health & Wellness services designed to support emotional well-being, mental clarity, and overall life balance. Our expert team of psychologists, therapists, and counselors offers personalized care in a safe and confidential environment.
                                </p>

                                <div class="image-details mb-40">
                                    <img src="{{ asset('image/section/img-services-details-1.jpg') }}" data-src="{{ asset('image/section/img-services-details-1.jpg') }}" alt="" class="lazyload">
                                </div>

                                <div class="mb-44">
                                    <h3 class="title mb-20">
                                        Key Aspects of Mental Health & Wellness
                                    </h3>
                                    <div class="desc">
                                        Mental health and wellness refer to a person’s emotional, psychological, and social well-being. It affects how individuals think, feel, and behave in daily life, as well as how they handle stress, relate to others, and make decisions. Good mental health enables people to cope with challenges, maintain relationships, and function effectively in work and personal life.
                                    </div>
                                </div>

                                <div class="flex list-item mb-36">
                                    <div class="item-services-details">
                                        <div class="icon">
                                            <i class="icon-check"></i>
                                        </div>
                                        <div class="item-content">

                                            <h6 class="title-item">
                                                Emotional Well-being
                                            </h6>
                                            <div class="desc">
                                                The ability to manage emotions, such
                                                as stress, anxiety, sadness.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-services-details">
                                        <div class="icon">
                                            <i class="icon-check"></i>
                                        </div>
                                        <div class="item-content">

                                            <h6 class="title-item">
                                                Cognitive Health
                                            </h6>
                                            <div class="desc">
                                                Maintaining clarity in thinking, decision
                                                making, and problem-solving.
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex list-item mb-42">
                                    <div class="item-services-details">
                                        <div class="icon">
                                            <i class="icon-check"></i>
                                        </div>
                                        <div class="item-content">
                                            <h6 class="title-item">
                                                Social Wellness
                                            </h6>
                                            <div class="desc">
                                                Building and maintaining positive the
                                                relationships with family, friends
                                            </div>
                                        </div>

                                    </div>
                                    <div class="item-services-details">
                                        <div class="icon">
                                            <i class="icon-check"></i>
                                        </div>
                                        <div class="item-content">

                                            <h6 class="title-item">
                                                Resilience & Coping Skills
                                            </h6>
                                            <div class="desc">
                                                The ability to adapt to challenges, setbacks, and life changes.
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="list-img flex g-20 mb-50">
                                    <div class="image-details">
                                        <img src="{{ asset('image/section/img-services-details-2.jpg') }}" data-src="{{ asset('image/section/img-services-details-2.jpg') }}" alt="" class="lazyload">
                                    </div>
                                    <div class="image-details">
                                        <img src="{{ asset('image/section/img-services-details-3.jpg') }}" data-src="{{ asset('image/section/img-services-details-3.jpg') }}" alt="" class="lazyload">
                                    </div>
                                </div>

                                <div class="mb-40">
                                    <h3 class="title mb-20">
                                        Mental health is a vital aspect of overall well-being
                                    </h3>
                                    <div class="desc">
                                        We think, feel, and interact with the world around us. It encompasses emotional, psychological,
                                        and social wellness, helping individuals cope with stress, build relationships, a make decisions.
                                        Prioritizing mental health involves self-care, mindfulness, an seeking support when needed, whether
                                        through therapy, counseling, or lifestyle changes. Just like physical health, maintaining mental
                                        well-being is essential
                                    </div>
                                </div>

                                <div class="wg-according" id="According1">
                                    <div class="according-item mb-10 according-active ">
                                        <a href="#according1" data-bs-toggle="collapse" class="title-according collapsed">
                                            <p class="body-2 fw7 ">How do I know if I need mental health support?</p><span></span>
                                        </a>
                                        <div id="according1" class="collapse" data-bs-parent="#According1">
                                            <div class="according-content">
                                                <p class="text">
                                                    We provide counseling, therapy, stress management programs, psychiatric evaluations, medication management, mindfulness training, and wellness programs
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="according-item mb-10 according-active active">
                                        <a href="#according2" data-bs-toggle="collapse" class="title-according">
                                            <p class="body-2 fw7 ">What services do you offer for mental health and wellness?</p><span></span>
                                        </a>
                                        <div id="according2" class="collapse show" data-bs-parent="#According1">
                                            <div class="according-content">
                                                <p class="text">
                                                    We provide counseling, therapy, stress management programs, psychiatric evaluations, medication management, mindfulness training, and wellness programs
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="according-item mb-10 according-active ">
                                        <a href="#according3" data-bs-toggle="collapse" class="title-according collapsed">
                                            <p class="body-2 fw7 ">What are common mental health disorders?</p><span></span>
                                        </a>
                                        <div id="according3" class="collapse" data-bs-parent="#According1">
                                            <div class="according-content">
                                                <p class="text">
                                                    We provide counseling, therapy, stress management programs, psychiatric evaluations, medication management, mindfulness training, and wellness programs
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="according-item according-active ">
                                        <a href="#according4" data-bs-toggle="collapse" class="title-according collapsed">
                                            <p class="body-2 fw7 ">How can I manage stress and anxiety?</p><span></span>
                                        </a>
                                        <div id="according4" class="collapse" data-bs-parent="#According1">
                                            <div class="according-content">
                                                <p class="text">
                                                    We provide counseling, therapy, stress management programs, psychiatric evaluations, medication management, mindfulness training, and wellness programs
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
@endsection
