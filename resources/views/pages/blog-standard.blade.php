@extends('layouts.app')

@section('title', 'Blog Standard - Clineva')

@section('content')
<!-- Page-title -->
        <div class="page-title mt-30">
            <div class="mx-30">
                <div class="page-title-content paralax-bg">
                    <h1 class="title text-anime">
                        Blog Standard
                    </h1>
                    <div class="breadkcum text-anime">
                        <h3><a href="{{ route('home') }}" class="link-breadkcum">Home</a></h3>
                        <span class="dot bg-white"></span>
                        <h3 class="page-breadkcum">Blog Standard</h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.page-title -->

        <!-- Main-content -->
        <div class="main-content">
            <div class="tf-container tf-spacing-1">
                <div class="row">
                    <div class="col-xl-8">
                        <button id="filterShop" class="fillter-btn style-fixed d-xl-none">
                            <i class="icon-sidebar"></i>
                        </button>
                        <div class="blog-content mr-50">
                            <div class="tf-post-grid hover-img mb-52">
                                <div class="top-post tf-animate-2">
                                    <a href="#" class="image">
                                        <img src="{{ asset('image/blog/tf-port-grid-1.jpg') }}" data-src="{{ asset('image/blog/tf-port-grid-1.jpg') }}" alt="" class="lazyload">
                                    </a>
                                    <a href="#" class="date">
                                        <span class="day">
                                            05
                                        </span>
                                        <span>January</span>
                                    </a>
                                </div>
                                <div class="tf-grid-post-content">
                                    <div class="post-metas">
                                        <div class="post-user metas-item wow fadeInUp">
                                            <div class="image">
                                                <a href="#" class="link-img">
                                                    <img src="{{ asset('image/avatar/avata.jpg') }}" data-src="{{ asset('image/avatar/') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="content">
                                                <a href="#">Paul B. Andrews</a>
                                            </div>
                                        </div>

                                        <div class="post-author metas-item wow fadeInUp" data-wow-delay=".1s">
                                            <div class="icon"><i class="icon-tag"></i></div>
                                            <span>Private Jets </span>
                                        </div>

                                        <div class="wow fadeInUp" data-wow-delay=".2s">
                                            <a href="#" class="post-author metas-item">
                                                <i class="icon-comments"></i><span>Comments (5)</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="wow fadeInUp">
                                        <a href="#" class="title-post">Navigating the Healthcare System A Patient’s Guide</a>
                                    </div>

                                    <div class="wow fadeInUp">
                                        <p class="sub-title">
                                            Treatments Project focuses on providing advanced, high-quality vision care solutions to improve eye health and enhance patients' quality of life. Utilizing cutting-edge technology, expert ophthalmologists
                                        </p>
                                    </div>

                                    <div class="bottom-post wow fadeInUp">
                                        <a href="#" class="tf-btn style-small style-border border-color-border">
                                            <span>Read more</span>
                                            <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="tf-post-grid hover-img mb-52">
                                <div class="top-post tf-animate-2">
                                    <a href="#" class="image">
                                        <img src="{{ asset('image/blog/tf-port-grid-2.jpg') }}" data-src="{{ asset('image/blog/tf-port-grid-2.jpg') }}" alt="" class="lazyload">
                                    </a>
                                    <a href="#" class="date">
                                        <span class="day">
                                            05
                                        </span>
                                        <span>January</span>
                                    </a>
                                </div>
                                <div class="tf-grid-post-content">
                                    <div class="post-metas">
                                        <div class="post-user metas-item  wow fadeInUp">
                                            <div class="image">
                                                <a href="#" class="link-img">
                                                    <img src="{{ asset('image/avatar/avata.jpg') }}" data-src="{{ asset('image/avatar/') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="content">
                                                <a href="#">Paul B. Andrews</a>
                                            </div>
                                        </div>

                                        <div class="post-author metas-item  wow fadeInUp" data-wow-delay=".1s">
                                            <div class="icon"><i class="icon-tag"></i></div>
                                            <span>Private Jets </span>
                                        </div>

                                        <div class=" wow fadeInUp" data-wow-delay=".2s">
                                            <a href="#" class="post-author metas-item">
                                                <i class="icon-comments"></i><span>Comments (5)</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class=" wow fadeInUp">
                                        <a href="#" class="title-post">How to Choose the Right Doctor for Your Needs</a>
                                    </div>
                                    <div class=" wow fadeInUp">

                                        <p class="sub-title">
                                            Treatments Project focuses on providing advanced, high-quality vision care solutions to improve eye health and enhance patients' quality of life. Utilizing cutting-edge technology, expert ophthalmologists
                                        </p>
                                    </div>

                                    <div class="bottom-post  wow fadeInUp">
                                        <a href="#" class="tf-btn style-small style-border border-color-border">
                                            <span>Read more</span>
                                            <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="tf-post-grid hover-img mb-52">
                                <div class="top-post tf-animate-2">
                                    <a href="#" class="image">
                                        <img src="{{ asset('image/blog/tf-port-grid-3.jpg') }}" data-src="{{ asset('image/blog/tf-port-grid-3.jpg') }}" alt="" class="lazyload">
                                    </a>
                                    <a href="#" class="date">
                                        <span class="day">
                                            05
                                        </span>
                                        <span>January</span>
                                    </a>
                                </div>
                                <div class="tf-grid-post-content">
                                    <div class="post-metas">
                                        <div class="post-user metas-item  wow fadeInUp">
                                            <div class="image">
                                                <a href="#" class="link-img">
                                                    <img src="{{ asset('image/avatar/avata.jpg') }}" data-src="{{ asset('image/avatar/') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="content">
                                                <a href="#">Paul B. Andrews</a>
                                            </div>
                                        </div>

                                        <div class="post-author metas-item  wow fadeInUp" data-wow-delay=".1s">
                                            <div class="icon"><i class="icon-tag"></i></div>
                                            <span>Private Jets </span>
                                        </div>
                                        <div class=" wow fadeInUp" data-wow-delay=".2s">
                                            <a href="#" class="post-author metas-item">
                                                <i class="icon-comments"></i><span>Comments (5)</span>
                                            </a>
                                        </div>

                                    </div>

                                    <div class=" wow fadeInUp">
                                        <a href="#" class="title-post">Diagnosis to Recovery Uderts Medical Treatments</a>
                                    </div>
                                    <div class=" wow fadeInUp">

                                        <p class="sub-title">
                                            Treatments Project focuses on providing advanced, high-quality vision care solutions to improve eye health and enhance patients' quality of life. Utilizing cutting-edge technology, expert ophthalmologists
                                        </p>
                                    </div>

                                    <div class="bottom-post  wow fadeInUp">
                                        <a href="#" class="tf-btn style-small style-border border-color-border">
                                            <span>Read more</span>
                                            <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="tf-post-grid hover-img mb-52">
                                <div class="top-post tf-animate-2">
                                    <a href="#" class="image">
                                        <img src="{{ asset('image/blog/tf-port-grid-4.jpg') }}" data-src="{{ asset('image/blog/tf-port-grid-4.jpg') }}" alt="" class="lazyload">
                                    </a>
                                    <a href="#" class="date">
                                        <span class="day">
                                            05
                                        </span>
                                        <span>January</span>
                                    </a>
                                </div>
                                <div class="tf-grid-post-content">
                                    <div class="post-metas">
                                        <div class="post-user metas-item  wow fadeInUp">
                                            <div class="image">
                                                <a href="#" class="link-img">
                                                    <img src="{{ asset('image/avatar/avata.jpg') }}" data-src="{{ asset('image/avatar/') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="content">
                                                <a href="#">Paul B. Andrews</a>
                                            </div>
                                        </div>

                                        <div class="post-author metas-item  wow fadeInUp" data-wow-delay=".1s">
                                            <div class="icon"><i class="icon-tag"></i></div>
                                            <span>Private Jets </span>
                                        </div>
                                        <div class=" wow fadeInUp" data-wow-delay=".2s">
                                            <a href="#" class="post-author metas-item">
                                                <i class="icon-comments"></i><span>Comments (5)</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class=" wow fadeInUp">
                                        <a href="#" class="title-post">Mental & Physical Health Connection Ignore</a>
                                    </div>
                                    <div class=" wow fadeInUp">

                                        <p class="sub-title">
                                            Treatments Project focuses on providing advanced, high-quality vision care solutions to improve eye health and enhance patients' quality of life. Utilizing cutting-edge technology, expert ophthalmologists
                                        </p>
                                    </div>

                                    <div class="bottom-post  wow fadeInUp">
                                        <a href="#" class="tf-btn style-small style-border border-color-border">
                                            <span>Read more</span>
                                            <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="wg-pagination">
                            <ul class="flex">
                                <li class="active wow fadeInUp"><i class="icon-angles-left"></i></li>
                                <li class="wow fadeInUp" data-wow-delay=".1s">1</li>
                                <li class="wow fadeInUp" data-wow-delay=".2s">2</li>
                                <li class="wow fadeInUp" data-wow-delay=".3s">3</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="tf-sidebar sidebar-filter right">

                            <div class="header-fillter flex justify-content-between align-items-center d-xl-none mb-30">
                                <h3 class="title">
                                    Fillter
                                </h3>
                                <span class="icon-close close-filter"></span>
                            </div>

                            <div class="sidebar-item sidebar-search">
                                <h5 class="title-content">
                                    Search
                                </h5>

                                <form action="#" class="form-search-siderbar">
                                    <fieldset>
                                        <input type="text" placeholder="Keywords" required>
                                        <a href="#" class="tf-btn-search"><i class="icon-magnifying-glass"></i></a>
                                    </fieldset>
                                </form>
                            </div>

                            <div class="sidebar-item sidebar-content sidebar-categories">
                                <h5 class="title-content">
                                    Category
                                </h5>
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
                                </ul>
                            </div>
                            <div class="sidebar-item sidebar-content sidebar-recent-posts">
                                <h5 class="title-content">
                                    Recent News
                                </h5>
                                <div class="tf-post-list style-small hover-img">
                                    <a href="{{ route('blog.details') }}" class="image">
                                        <img src="{{ asset('image/blog/tf-post-list-1.jpg') }}" data-src="{{ asset('image/blog/tf-post-list-1.jpg') }}" alt="" class="lazyload">
                                    </a>
                                    <div class="post-content">
                                        <div class="post-date caption-1">
                                            25 February 2025
                                        </div>
                                        <a href="{{ route('blog.details') }}" class="name-post fw7 lh-24">
                                            Future Healthcare Innovations
                                            in Medical Treatment
                                        </a>
                                    </div>
                                </div>
                                <div class="tf-post-list style-small hover-img">
                                    <a href="{{ route('blog.details') }}" class="image">
                                        <img src="{{ asset('image/blog/tf-post-list-2.jpg') }}" data-src="{{ asset('image/blog/tf-post-list-2.jpg') }}" alt="" class="lazyload">
                                    </a>
                                    <div class="post-content">
                                        <div class="post-date caption-1">
                                            25 February 2025
                                        </div>
                                        <a href="{{ route('blog.details') }}" class="name-post fw7 lh-24">
                                            Future Healthcare Innovations
                                            in Medical Treatment
                                        </a>
                                    </div>
                                </div>
                                <div class="tf-post-list style-small hover-img">
                                    <a href="{{ route('blog.details') }}" class="image">
                                        <img src="{{ asset('image/blog/tf-post-list-3.jpg') }}" data-src="{{ asset('image/blog/tf-post-list-3.jpg') }}" alt="" class="lazyload">
                                    </a>
                                    <div class="post-content">
                                        <div class="post-date caption-1">
                                            25 February 2025
                                        </div>
                                        <a href="{{ route('blog.details') }}" class="name-post fw7 lh-24">
                                            Future Healthcare Innovations
                                            in Medical Treatment
                                        </a>
                                    </div>
                                </div>

                            </div>

                            <div class="mb-30">
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
                                            <span class="body-2">Treatments & Services</span>
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
                            </div>

                            <div class="sidebar-item sidebar-tags">
                                <h5 class="title-content">
                                    Popular Tags
                                </h5>
                                <div class="tabs-list">
                                    <a href="#" class="tabs-item">Medical </a>
                                    <a href="#" class="tabs-item">Health care</a>
                                    <a href="#" class="tabs-item">Childcare</a>
                                    <a href="#" class="tabs-item">Dental</a>
                                    <a href="#" class="tabs-item">Medicine</a>
                                    <a href="#" class="tabs-item">Doctors</a>
                                    <a href="#" class="tabs-item">Treatments</a>
                                    <a href="#" class="tabs-item">Lab Test</a>
                                    <a href="#" class="tabs-item">X-ray</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.main-content -->
@endsection
