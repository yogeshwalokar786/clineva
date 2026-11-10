@extends('layouts.app')

@section('title', 'Blog Details - Clineva')

@section('content')
<!-- Page-title -->
        <div class="page-title page-details mt-30">
            <div class="mx-30">
                <div class="page-title-content paralax-bg">
                    <div class="breadkcum">
                        <h3><a href="{{ route('home') }}" class="link-breadkcum">Home</a></h3>
                        <span class="dot bg-white"></span>
                        <h3 class="page-breadkcum">Blog Details</h3>
                    </div>
                    <h2 class="title">
                        Navigating the Healthcare
                        <br>System A Patient’s Guide
                    </h2>
                    <div class="post-metas position-relative">
                        <div class="post-user metas-item">
                            <div class="image">
                                <a href="#" class="link-img">
                                    <img src="{{ asset('image/avatar/avata.jpg') }}" data-src="{{ asset('image/avatar/') }}" alt="">
                                </a>
                            </div>
                            <div class="content">
                                <a href="#" class="color-white fw7">Paul B. Andrews</a>
                            </div>
                        </div>

                        <div class="post-author metas-item">
                            <div class="icon"><i class="icon-tag"></i></div>
                            <span class="color-white fw7">Private Jets </span>
                        </div>

                        <a href="#" class="post-author metas-item">
                            <i class="icon-comments"></i><span class="color-white fw7">Comments (5)</span>
                        </a>

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
                        <div class="blog-details-content mr-50">
                            <div class="image-blog-details hover-img mb-40">
                                <div class="image">
                                    <img src="{{ asset('image/blog/image-blog-details.jpg') }}" data-src="{{ asset('image/blog/image-blog-details.jpg') }}" alt="" class="lazyload">
                                </div>
                                <a href="#" class="date">
                                    <span class="day">
                                        05
                                    </span>
                                    <span>January</span>
                                </a>
                            </div>
                            <div class="details-content mb-50">
                                <div class="title">
                                    Comprehensive Medical Health Services Your Path
                                    to Optimal Well-being
                                </div>
                                <div class="desc">
                                    When it comes to taking care of your health, having access to high-quality medical health services is essential. From preventive care to specialized treatments, medical services play a crucial role in ensuring that you live a long, healthy life. In this blog, we’ll explore the wide array of medical health services available, how they benefit your health, and how to make the most of them.
                                </div>
                            </div>
                            <div class="details-content-2 mb-40">
                                <h4 class="title">
                                    Key Areas of Medical Health Services
                                </h4>
                                <div class="desc">
                                    Our project encompasses laser vision correction (LASIK, PRK, SMILE), cataract and glaucoma treatments, retinal therapies, and dry eye management, ensuring optimal care for diverse patient needs.
                                </div>
                            </div>
                            <div class="details-content-3 mb-30">
                                <h5 class="title">
                                    Preventive Care
                                </h5>
                                <div class="desc">
                                    Preventive care is designed to help individuals maintain optimal health and prevent the onset of illnesses. Services include regular check-ups, health screenings, vaccinations, and lifestyle counseling
                                </div>
                            </div>
                            <div class="details-content-3 mb-40">
                                <h5 class="title">
                                    Diagnostic Services
                                </h5>
                                <div class="desc">
                                    Accurate diagnosis is crucial for effective treatment. With advanced diagnostic tools like blood tests, imaging (X-rays, MRI, CT scans), and genetic testing, healthcare professionals
                                </div>
                            </div>
                            <div class="wg-quote mb-40">
                                <h4 class="text">
                                    "Design is not just what it looks like and feels like Design is how it works
                                    brand is the story people tell about you when room."
                                </h4>
                                <a href="#" class="name-quote">Steve Jobs</a>
                            </div>
                            <div class="desc mb-50">
                                We redefine luxury travel with world-class private jet services designed for executives, entrepreneurs, and discerning travelers. Our commitment to excellence ensures a seamless, stress-free journey with personalized service, unmatched comfort, and the highest safety standards. Skip the crowds, bypass long security lines, and enjoy the convenience of flying on your schedule.
                            </div>

                            <div class="post-tags-share flex align-items-center justify-content-between flex-wrap g-30">
                                <div class="post-tags-wrap flex align-items-center g-10">
                                    <h6>Popular Tags</h6>
                                    <div class="tabs-list style-radius">
                                        <a href="#" class="tabs-item">Medical </a>
                                        <a href="#" class="tabs-item">Dental</a>
                                        <a href="#" class="tabs-item">Doctors</a>
                                    </div>
                                </div>
                                <div class="post-share-wrap flex align-items-center g-10">
                                    <h6>Share</h6>
                                    <ul class="post-social style-border">
                                        <li><a href="#" class="icon-social"><i class="icon-facebook"></i></a></li>
                                        <li><a href="#" class="icon-social"><i class="icon-twitter"></i></a></li>
                                        <li><a href="#" class="icon-social"><i class="icon-linkedin2"></i></a></li>
                                        <li><a href="#" class="icon-social"><i class="icon-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="comment-item mb-70">
                                <div class="left">
                                    <div class="image-avatar">
                                        <img src="{{ asset('image/avatar/avatar-comment.jpg') }}" data-src="{{ asset('image/avatar/avatar-comment.jpg') }}" alt="" class="lazyload">
                                    </div>
                                </div>
                                <div class="comment-content">
                                    <div class="user-comment">
                                        <h6><a href="#" class="name">Richard M. Fudge</a></h6>
                                        <p class="author">Author</p>
                                    </div>
                                    <div class="text-comment">
                                        By combining creativity with technical expertise, a web design agency crafts unique responsive, and user-friendly websites that reflect brand
                                    </div>
                                    <ul class="post-social">
                                        <li><a href="#" class="icon-social"><i class="icon-facebook"></i></a></li>
                                        <li><a href="#" class="icon-social"><i class="icon-twitter"></i></a></li>
                                        <li><a href="#" class="icon-social"><i class="icon-linkedin2"></i></a></li>
                                        <li><a href="#" class="icon-social"><i class="icon-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="list-btn flex justify-content-between align-items-center rg-30 mb-70">
                                <a href="#" class="btn-arrow-details previous-details ">
                                    <span class="icon">
                                        <i class="icon-chevron-left"></i>
                                    </span>
                                    <span class="text lh-24 fw7">
                                        Future Healthcare Innovations
                                        in Medical Treatment
                                    </span>
                                </a>
                                <a href="{{ route('blog') }}" class="btn-grid">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                                <a href="#" class="btn-arrow-details next-details">
                                    <span class="icon">
                                        <i class="icon-chevron-right"></i>
                                    </span>
                                    <span class="text lh-24 fw7">
                                        Future Healthcare Innovations
                                        in Medical Treatment
                                    </span>
                                </a>
                            </div>
                        </div>

                        <div class="wg-comment">
                            <h4 class="title">Leave a comments</h4>
                            <div class="desc mb-30">Your email address will not be published. Required fields are marked *</div>
                            <form action="#" class="write-review form-comment">
                                <div class="cols g-20 mb-20">
                                    <fieldset>
                                        <input type="text" placeholder="*Full name">
                                    </fieldset>
                                    <fieldset>
                                        <input type="email" placeholder="*Email address">
                                    </fieldset>
                                    <fieldset>
                                        <input type="text" placeholder="Website">
                                    </fieldset>
                                </div>
                                <fieldset class="mb-20">
                                    <textarea placeholder="Write comments"></textarea>
                                </fieldset>
                                <div class="bottom-btn">
                                    <button type="submit" class="tf-btn">
                                        <span>Send Comments</span>
                                        <i class="icon-arrow-right"></i>
                                    </button>
                                </div>
                            </form>
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
