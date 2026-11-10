@extends('layouts.app')

@section('title', 'Portfolio - Clineva')

@section('content')
<div class="page-title mt-30">
             <div class="mx-30">
                <div class="page-title-content paralax-bg">
                    <h1 class="title">
                        Portfolio
                    </h1>
                    <div class="breadkcum">
                        <h3><a href="{{ route('home') }}" class="link-breadkcum">Home</a></h3>
                        <span class="dot bg-white mx-27"></span>
                        <h3 class="page-breadkcum pl-0">Portfolio</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-content">

            <div class="tf-container tf-spacing-1">
                <div class="row rg-30 mb-70">
                    <div class="col-lg-4">
                        <div class="portfolio-item mb-30">

                            <a href="{{ route('portfolio.details') }}" class="image">
                                <img src="{{ asset('image/portfolio-item/portfolio-item-1.jpg') }}" data-src="{{ asset('image/portfolio-item/portfolio-item-1.jpg') }}" alt="" class="lazyload">
                            </a>

                            <div class="item-content px-mobile-sm">
                                <div class="sub-title">
                                    Eye Care
                                </div>
                                <h3 class="title"><a href="{{ route('portfolio.details') }}">Laser Eye Treatments</a></h3>
                            </div>

                            <a href="{{ route('portfolio.details') }}" class="btn-portfolio">
                                <i class="icon-arrow-right"></i>
                            </a>

                        </div>
                        <div class="portfolio-item mb-30">

                            <a href="{{ route('portfolio.details') }}" class="image">
                                <img src="{{ asset('image/portfolio-item/portfolio-item-2.jpg') }}" data-src="{{ asset('image/portfolio-item/portfolio-item-2.jpg') }}" alt="" class="lazyload">
                            </a>

                            <div class="item-content px-mobile-sm">
                                <div class="sub-title">
                                    Eye Care
                                </div>
                                <h3 class="title"><a href="{{ route('portfolio.details') }}">Laser Eye Treatments</a></h3>
                            </div>

                            <a href="{{ route('portfolio.details') }}" class="btn-portfolio">
                                <i class="icon-arrow-right"></i>
                            </a>

                        </div>
                        <div class="portfolio-item mb-30">

                            <a href="{{ route('portfolio.details') }}" class="image">
                                <img src="{{ asset('image/portfolio-item/portfolio-item-3.jpg') }}" data-src="{{ asset('image/portfolio-item/portfolio-item-3.jpg') }}" alt="" class="lazyload">
                            </a>

                            <div class="item-content px-mobile-sm">
                                <div class="sub-title">
                                    Eye Care
                                </div>
                                <h3 class="title"><a href="{{ route('portfolio.details') }}">Laser Eye Treatments</a></h3>
                            </div>

                            <a href="{{ route('portfolio.details') }}" class="btn-portfolio">
                                <i class="icon-arrow-right"></i>
                            </a>

                        </div>
                        <div class="portfolio-item">

                            <a href="{{ route('portfolio.details') }}" class="image">
                                <img src="{{ asset('image/portfolio-item/portfolio-item-4.jpg') }}" data-src="{{ asset('image/portfolio-item/portfolio-item-4.jpg') }}" alt="" class="lazyload">
                            </a>

                            <div class="item-content px-mobile-sm">
                                <div class="sub-title">
                                    Eye Care
                                </div>
                                <h3 class="title"><a href="{{ route('portfolio.details') }}">Laser Eye Treatments</a></h3>
                            </div>

                            <a href="{{ route('portfolio.details') }}" class="btn-portfolio">
                                <i class="icon-arrow-right"></i>
                            </a>

                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="portfolio-item mb-30">

                            <a href="{{ route('portfolio.details') }}" class="image">
                                <img src="{{ asset('image/portfolio-item/portfolio-item-5.jpg') }}" data-src="{{ asset('image/portfolio-item/portfolio-item-5.jpg') }}" alt="" class="lazyload">
                            </a>

                            <div class="item-content px-mobile-sm">
                                <div class="sub-title">
                                    Eye Care
                                </div>
                                <h3 class="title"><a href="{{ route('portfolio.details') }}">Laser Eye Treatments</a></h3>
                            </div>

                            <a href="{{ route('portfolio.details') }}" class="btn-portfolio">
                                <i class="icon-arrow-right"></i>
                            </a>

                        </div>
                        <div class="portfolio-item mb-30">

                            <a href="{{ route('portfolio.details') }}" class="image">
                                <img src="{{ asset('image/portfolio-item/portfolio-item-6.jpg') }}" data-src="{{ asset('image/portfolio-item/portfolio-item-6.jpg') }}" alt="" class="lazyload">
                            </a>

                            <div class="item-content px-mobile-sm">
                                <div class="sub-title">
                                    Eye Care
                                </div>
                                <h3 class="title"><a href="{{ route('portfolio.details') }}">Laser Eye Treatments</a></h3>
                            </div>

                            <a href="{{ route('portfolio.details') }}" class="btn-portfolio">
                                <i class="icon-arrow-right"></i>
                            </a>

                        </div>
                        <div class="portfolio-item mb-30">

                            <a href="{{ route('portfolio.details') }}" class="image">
                                <img src="{{ asset('image/portfolio-item/portfolio-item-7.jpg') }}" data-src="{{ asset('image/portfolio-item/portfolio-item-7.jpg') }}" alt="" class="lazyload">
                            </a>

                            <div class="item-content px-mobile-sm">
                                <div class="sub-title">
                                    Eye Care
                                </div>
                                <h3 class="title"><a href="{{ route('portfolio.details') }}">Laser Eye Treatments</a></h3>
                            </div>

                            <a href="{{ route('portfolio.details') }}" class="btn-portfolio">
                                <i class="icon-arrow-right"></i>
                            </a>

                        </div>
                        <div class="portfolio-item">

                            <a href="{{ route('portfolio.details') }}" class="image">
                                <img src="{{ asset('image/portfolio-item/portfolio-item-8.jpg') }}" data-src="{{ asset('image/portfolio-item/portfolio-item-8.jpg') }}" alt="" class="lazyload">
                            </a>

                            <div class="item-content px-mobile-sm">
                                <div class="sub-title">
                                    Eye Care
                                </div>
                                <h3 class="title"><a href="{{ route('portfolio.details') }}">Laser Eye Treatments</a></h3>
                            </div>

                            <a href="{{ route('portfolio.details') }}" class="btn-portfolio">
                                <i class="icon-arrow-right"></i>
                            </a>

                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="portfolio-item mb-30">

                            <a href="{{ route('portfolio.details') }}" class="image">
                                <img src="{{ asset('image/portfolio-item/portfolio-item-9.jpg') }}" data-src="{{ asset('image/portfolio-item/portfolio-item-9.jpg') }}" alt="" class="lazyload">
                            </a>

                            <div class="item-content px-mobile-sm">
                                <div class="sub-title">
                                    Eye Care
                                </div>
                                <h3 class="title"><a href="{{ route('portfolio.details') }}">Laser Eye Treatments</a></h3>
                            </div>

                            <a href="{{ route('portfolio.details') }}" class="btn-portfolio">
                                <i class="icon-arrow-right"></i>
                            </a>

                        </div>
                        <div class="portfolio-item mb-30">

                            <a href="{{ route('portfolio.details') }}" class="image">
                                <img src="{{ asset('image/portfolio-item/portfolio-item-10.jpg') }}" data-src="{{ asset('image/portfolio-item/portfolio-item-10.jpg') }}" alt="" class="lazyload">
                            </a>

                            <div class="item-content px-mobile-sm">
                                <div class="sub-title">
                                    Eye Care
                                </div>
                                <h3 class="title"><a href="{{ route('portfolio.details') }}">Laser Eye Treatments</a></h3>
                            </div>

                            <a href="{{ route('portfolio.details') }}" class="btn-portfolio">
                                <i class="icon-arrow-right"></i>
                            </a>

                        </div>
                        <div class="portfolio-item mb-30">

                            <a href="{{ route('portfolio.details') }}" class="image">
                                <img src="{{ asset('image/portfolio-item/portfolio-item-11.jpg') }}" data-src="{{ asset('image/portfolio-item/portfolio-item-11.jpg') }}" alt="" class="lazyload">
                            </a>

                            <div class="item-content px-mobile-sm">
                                <div class="sub-title">
                                    Eye Care
                                </div>
                                <h3 class="title"><a href="{{ route('portfolio.details') }}">Laser Eye Treatments</a></h3>
                            </div>

                            <a href="{{ route('portfolio.details') }}" class="btn-portfolio">
                                <i class="icon-arrow-right"></i>
                            </a>

                        </div>
                        <div class="portfolio-item">

                            <a href="{{ route('portfolio.details') }}" class="image">
                                <img src="{{ asset('image/portfolio-item/portfolio-item-12.jpg') }}" data-src="{{ asset('image/portfolio-item/portfolio-item-12.jpg') }}" alt="" class="lazyload">
                            </a>

                            <div class="item-content px-mobile-sm">
                                <div class="sub-title">
                                    Eye Care
                                </div>
                                <h3 class="title"><a href="{{ route('portfolio.details') }}">Laser Eye Treatments</a></h3>
                            </div>

                            <a href="{{ route('portfolio.details') }}" class="btn-portfolio">
                                <i class="icon-arrow-right"></i>
                            </a>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="wg-pagination">
                        <ul class="flex justify-content-center">
                            <li class="active wow fadeInUp"><i class="icon-angles-left"></i></li>
                            <li class="wow fadeInUp" data-wow-delay=".1s">1</li>
                            <li class="wow fadeInUp" data-wow-delay=".2s">2</li>
                            <li class="wow fadeInUp" data-wow-delay=".3s">3</li>
                            <li class="wow fadeInUp" data-wow-delay=".4s"><i class="icon-angles-right"></i></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
@endsection
