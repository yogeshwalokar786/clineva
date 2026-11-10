@extends('layouts.app')

@section('title', 'Shop - Clineva')

@section('content')
<div class="page-title mt-30">
            <div class="mx-30">
                <div class="page-title-content paralax-bg">
                    <h1 class="title">
                        Shop
                    </h1>
                    <div class="breadkcum">
                        <h3><a href="{{ route('home') }}" class="link-breadkcum">Home</a></h3>
                        <span class="dot bg-white"></span>
                        <h3 class="page-breadkcum">Shop</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-content">
            <div class="wg-shop-item tf-spacing-1">
                <div class="tf-container">
                    <div class="row">
                        <div class="col-xl-3">
                            <div class="sidebar-filter left">
                                <div class="header-fillter flex justify-content-between align-items-center d-xl-none mb-50">
                                    <h4 class="title">
                                        Fillter
                                    </h4>
                                    <span class="icon-close close-filter"></span>
                                </div>

                                <div class="sidebar-item sidebar-item-2 sidebar-search style-bg-gray-light">
                                    <h6 class="title-content">
                                        Search
                                    </h6>

                                    <form action="#" class="form-search-siderbar input-bg-white">
                                        <fieldset>
                                            <input type="text" placeholder="Keywords" required>
                                            <a href="#" class="tf-btn-search"><i class="icon-magnifying-glass"></i></a>
                                        </fieldset>
                                    </form>
                                </div>

                                <div class="sidebar-item sidebar-item-2 sidebar-content sidebar-categories style-2">
                                    <h6 class="title-content">
                                        Category
                                    </h6>
                                    <ul class="list">
                                        <li class="item">
                                            <a href="#">Medicine Care</a>
                                            <span>5</span>
                                        </li>
                                        <li class="item">
                                            <a href="#">Health Care</a>
                                            <span>8</span>
                                        </li>
                                        <li class="item">
                                            <a href="#">Child Care</a>
                                            <span>3</span>
                                        </li>
                                        <li class="item">
                                            <a href="#">Eye Care</a>
                                            <span>6</span>
                                        </li>
                                        <li class="item">
                                            <a href="#">Neurology Care</a>
                                            <span>4</span>
                                        </li>
                                        <li class="item">
                                            <a href="#">Dental Care</a>
                                            <span>2</span>
                                        </li>
                                    </ul>
                                </div>

                                <div class="sidebar-item sidebar-item-2 sidebar-price">
                                    <h6 class="title-content">
                                        Filter by Price
                                    </h6>
                                    <div class="range-slider">
                                        <div id="range-two-val" class="range-two-val"></div>
                                        <div class="value flex justify-content-between align-items-center">
                                            <h6 id="skip-value-lower"></h6>
                                            <h6 id="skip-value-upper"></h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-30">
                                    <div class="sidebar-banner-2 text-center sidebar-item sidebar-item-2 ">
                                        <span class="discount fw7">60% OFF</span>
                                        <h3 class="title">
                                            Medical Product
                                        </h3>
                                        <div class="benefit-list">
                                            <div class="benefit-items body-2">
                                                <i class="icon-check"></i>
                                                <span class="body-2">Doctor’s</span>
                                            </div>
                                            <div class="benefit-items body-2">
                                                <i class="icon-check"></i>
                                                <span class="body-2">Medicine Care</span>
                                            </div>
                                            <div class="benefit-items body-2">
                                                <i class="icon-check"></i>
                                                <span class="body-2">Lab Test</span>
                                            </div>
                                        </div>

                                        <a href="#" class="tf-btn">
                                            <span>Shop Now</span>
                                            <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>


                                <div class="sidebar-item sidebar-item-2 sidebar-tags">
                                    <h6 class="title-content">
                                        Popular Tags
                                    </h6>
                                    <div class="tabs-list">
                                        <a href="#" class="tabs-item caption-1">Product</a>
                                        <a href="#" class="tabs-item caption-1">Health care</a>
                                        <a href="#" class="tabs-item caption-1">Dental</a>
                                        <a href="#" class="tabs-item caption-1">Medicine</a>
                                        <a href="#" class="tabs-item caption-1">X-ray</a>
                                        <a href="#" class="tabs-item caption-1">Childcare</a>
                                        <a href="#" class="tabs-item caption-1">Shop</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9">
                            <div class="tf-sort mb-20">
                                <div class="tf-sort-left tf-sort-content">
                                    <div class="list-btn-layout box-filter-tab">
                                        <ul class="nav-tab-filter flex align-items-center g-15" role="tablist">

                                            <li class="nav-tab-item" role="presentation">
                                                <a href="#gridLayout" class="nav-link-item layout-btn active" data-bs-toggle="tab" aria-selected="true" role="tab">
                                                    <i class="icon-grid"></i>
                                                </a>
                                            </li>

                                            <li class="nav-tab-item" role="presentation">
                                                <a href="#listLayout" class="nav-link-item layout-btn" data-bs-toggle="tab" aria-selected="false" tabindex="-1" role="tab">
                                                    <i class="icon-list"></i>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                    <div class="text">
                                        Showing 1–9 of 12 results
                                    </div>
                                </div>
                                <div class="tf-sort-right tf-sort-content">
                                    <button id="filterShop" class="fillter-btn flex align-items-center gap-4 d-xl-none flex-grow-1">
                                        Show Filters
                                    </button>
                                    <div class="nice-select style-radius-50 flex-grow-1">
                                        <span class="current">Default Sorting</span>
                                        <ul class="list">
                                            <li class="option option-all">Default Sorting</li>
                                            <li class="option">Alphabetically, A-Z</li>
                                            <li class="option">Alphabetically, Z-A</li>
                                            <li class="option">Price, low to high</li>
                                            <li class="option">Price, high to low</li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <div class="flat-animate-tab">
                                <div class="tab-content">
                                    <div class="tab-pane active show" id="gridLayout" role="tabpanel">
                                        <div class="list-item grid-3">
                                            <div class="item">
                                                <div class="product-item style-grid hover-img discount">
                                                    <div class="top-item position-relative">
                                                        <a href="{{ route('shop.details') }}" class="image">
                                                            <img src="{{ asset('image/shop-item/shop-item-1.jpg') }}" data-src="{{ asset('image/shop-item/shop-item-1.jpg') }}" alt="" class="lazyload">
                                                        </a>
                                                        <div class="list-btn flex align-items-center justify-content-between">
                                                            <div>
                                                                <a href="#" class="btn-product add-to-card hover-tooltip tooltip-top">
                                                                    <i class="icon-cart-plus"></i>
                                                                    <span class="tooltip caption-1">Add to cart</span>
                                                                </a>
                                                            </div>
                                                            <div>
                                                                <a href="#" class="btn-product btn-whislist hover-tooltip tooltip-top">
                                                                    <i class="icon-heart"></i>
                                                                    <span class="tooltip caption-1">Wishlist</span>
                                                                </a>
                                                            </div>
                                                            <div>
                                                                <a href="#" class="btn-product btn-compare hover-tooltip tooltip-top">
                                                                    <i class="icon-right-left"></i>
                                                                    <span class="tooltip caption-1">Compare</span>
                                                                </a>
                                                            </div>
                                                            <div>
                                                                <a href="#" class="btn-product btn-quick-view hover-tooltip tooltip-top">
                                                                    <i class="icon-eye"></i>
                                                                    <span class="tooltip caption-1">Quick view</span>
                                                                </a>
                                                            </div>

                                                        </div>
                                                        <ul class="size-box">
                                                            <li class="size-item text-xs color-paragraph">S</li>
                                                            <li class="size-item text-xs color-paragraph">M</li>
                                                            <li class="size-item text-xs color-paragraph">L</li>
                                                            <li class="size-item text-xs color-paragraph">XL</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-item-content">
                                                        <a href="#" class="sub-name">Cleaning</a>
                                                        <a href="{{ route('shop.details') }}" class="name-product body-2 fw5">Hand-sanitizer-gel</a>
                                                        <div class="price fw5 body-3">
                                                            <span class="price-old">$230</span>
                                                            <span>$198</span>
                                                        </div>
                                                        <ul class="list-color-product">
                                                            <li class="list-color-item hover-tooltip tooltip-bot color-swatch active">
                                                                <span class="tooltip caption-1">Cayent</span>
                                                                <span class="swatch-value bg-cayent"></span>
                                                            </li>
                                                            <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                                                <span class="tooltip caption-1">Green</span>
                                                                <span class="swatch-value bg-green"></span>
                                                            </li>
                                                            <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                                                <span class="tooltip caption-1">Pink</span>
                                                                <span class="swatch-value bg-pink"></span>
                                                            </li>
                                                        </ul>
                                                        <div class="rating-product">
                                                            <i class="icon-star"></i><span class="body-2">(5)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="item">
                                                <div class="product-item style-grid hover-img">
                                                    <div class="top-item position-relative">
                                                        <a href="{{ route('shop.details') }}" class="image">
                                                            <img src="{{ asset('image/shop-item/shop-item-2.jpg') }}" data-src="{{ asset('image/shop-item/shop-item-2.jpg') }}" alt="" class="lazyload">
                                                        </a>
                                                        <div class="list-btn flex align-items-center justify-content-between">
                                                            <div>
                                                                <a href="#" class="btn-product add-to-card hover-tooltip tooltip-top">
                                                                    <i class="icon-cart-plus"></i>
                                                                    <span class="tooltip caption-1">Add to cart</span>
                                                                </a>
                                                            </div>
                                                            <div>
                                                                <a href="#" class="btn-product btn-whislist hover-tooltip tooltip-top">
                                                                    <i class="icon-heart"></i>
                                                                    <span class="tooltip caption-1">Wishlist</span>
                                                                </a>
                                                            </div>
                                                            <div>
                                                                <a href="#" class="btn-product btn-compare hover-tooltip tooltip-top">
                                                                    <i class="icon-right-left"></i>
                                                                    <span class="tooltip caption-1">Compare</span>
                                                                </a>
                                                            </div>
                                                            <div>
                                                                <a href="#" class="btn-product btn-quick-view hover-tooltip tooltip-top">
                                                                    <i class="icon-eye"></i>
                                                                    <span class="tooltip caption-1">Quick view</span>
                                                                </a>
                                                            </div>

                                                        </div>
                                                        <ul class="size-box">
                                                            <li class="size-item text-xs color-paragraph">S</li>
                                                            <li class="size-item text-xs color-paragraph">M</li>
                                                            <li class="size-item text-xs color-paragraph">L</li>
                                                            <li class="size-item text-xs color-paragraph">XL</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-item-content">
                                                        <a href="#" class="sub-name">Covid-19 mask</a>
                                                        <a href="{{ route('shop.details') }}" class="name-product body-2 fw5">Light-blue face-mask</a>
                                                        <div class="price fw5 body-3">
                                                            <span>
                                                                $20
                                                            </span>
                                                        </div>
                                                        <ul class="list-color-product">
                                                            <li class="list-color-item hover-tooltip tooltip-bot color-swatch active">
                                                                <span class="tooltip caption-1">Cayent</span>
                                                                <span class="swatch-value bg-cayent"></span>
                                                            </li>
                                                            <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                                                <span class="tooltip caption-1">Green</span>
                                                                <span class="swatch-value bg-green"></span>
                                                            </li>
                                                            <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                                                <span class="tooltip caption-1">Pink</span>
                                                                <span class="swatch-value bg-pink"></span>
                                                            </li>
                                                        </ul>
                                                        <div class="rating-product">
                                                            <i class="icon-star"></i><span class="body-2">(5)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="item">
                                                <div class="product-item style-grid hover-img">
                                                    <div class="top-item position-relative">
                                                        <a href="{{ route('shop.details') }}" class="image">
                                                            <img src="{{ asset('image/shop-item/shop-item-3.jpg') }}" data-src="{{ asset('image/shop-item/shop-item-3.jpg') }}" alt="" class="lazyload">
                                                        </a>
                                                        <div class="list-btn flex align-items-center justify-content-between">
                                                            <div>
                                                                <a href="#" class="btn-product add-to-card hover-tooltip tooltip-top">
                                                                    <i class="icon-cart-plus"></i>
                                                                    <span class="tooltip caption-1">Add to cart</span>
                                                                </a>
                                                            </div>
                                                            <div>
                                                                <a href="#" class="btn-product btn-whislist hover-tooltip tooltip-top">
                                                                    <i class="icon-heart"></i>
                                                                    <span class="tooltip caption-1">Wishlist</span>
                                                                </a>
                                                            </div>
                                                            <div>
                                                                <a href="#" class="btn-product btn-compare hover-tooltip tooltip-top">
                                                                    <i class="icon-right-left"></i>
                                                                    <span class="tooltip caption-1">Compare</span>
                                                                </a>
                                                            </div>
                                                            <div>
                                                                <a href="#" class="btn-product btn-quick-view hover-tooltip tooltip-top">
                                                                    <i class="icon-eye"></i>
                                                                    <span class="tooltip caption-1">Quick view</span>
                                                                </a>
                                                            </div>

                                                        </div>
                                                        <ul class="size-box">
                                                            <li class="size-item text-xs color-paragraph">S</li>
                                                            <li class="size-item text-xs color-paragraph">M</li>
                                                            <li class="size-item text-xs color-paragraph">L</li>
                                                            <li class="size-item text-xs color-paragraph">XL</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-item-content">
                                                        <a href="#" class="sub-name">Cleaning</a>
                                                        <a href="{{ route('shop.details') }}" class="name-product body-2 fw5">Stethoscope</a>
                                                        <div class="price fw5 body-3">
                                                            <span>
                                                                $198
                                                            </span>
                                                        </div>
                                                        <ul class="list-color-product">
                                                            <li class="list-color-item hover-tooltip tooltip-bot color-swatch active">
                                                                <span class="tooltip caption-1">Cayent</span>
                                                                <span class="swatch-value bg-cayent"></span>
                                                            </li>
                                                            <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                                                <span class="tooltip caption-1">Green</span>
                                                                <span class="swatch-value bg-green"></span>
                                                            </li>
                                                            <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                                                <span class="tooltip caption-1">Pink</span>
                                                                <span class="swatch-value bg-pink"></span>
                                                            </li>
                                                        </ul>
                                                        <div class="rating-product">
                                                            <i class="icon-star"></i><span class="body-2">(5)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="item">
                                                <div class="product-item style-grid hover-img">
                                                    <div class="top-item position-relative">
                                                        <a href="{{ route('shop.details') }}" class="image">
                                                            <img src="{{ asset('image/shop-item/shop-item-4.jpg') }}" data-src="{{ asset('image/shop-item/shop-item-4.jpg') }}" alt="" class="lazyload">
                                                        </a>
                                                        <div class="list-btn flex align-items-center justify-content-between">
                                                            <div>
                                                                <a href="#" class="btn-product add-to-card hover-tooltip tooltip-top">
                                                                    <i class="icon-cart-plus"></i>
                                                                    <span class="tooltip caption-1">Add to cart</span>
                                                                </a>
                                                            </div>
                                                            <div>
                                                                <a href="#" class="btn-product btn-whislist hover-tooltip tooltip-top">
                                                                    <i class="icon-heart"></i>
                                                                    <span class="tooltip caption-1">Wishlist</span>
                                                                </a>
                                                            </div>
                                                            <div>
                                                                <a href="#" class="btn-product btn-compare hover-tooltip tooltip-top">
                                                                    <i class="icon-right-left"></i>
                                                                    <span class="tooltip caption-1">Compare</span>
                                                                </a>
                                                            </div>
                                                            <div>
                                                                <a href="#" class="btn-product btn-quick-view hover-tooltip tooltip-top">
                                                                    <i class="icon-eye"></i>
                                                                    <span class="tooltip caption-1">Quick view</span>
                                                                </a>
                                                            </div>

                                                        </div>
                                                        <ul class="size-box">
                                                            <li class="size-item text-xs color-paragraph">S</li>
                                                            <li class="size-item text-xs color-paragraph">M</li>
                                                            <li class="size-item text-xs color-paragraph">L</li>
                                                            <li class="size-item text-xs color-paragraph">XL</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-item-content">
                                                        <a href="#" class="sub-name">Cleaning</a>
                                                        <a href="{{ route('shop.details') }}" class="name-product body-2 fw5">Digital-blood-pressure</a>
                                                        <div class="price fw5 body-3">
                                                            <span class="price-old">$230</span>
                                                            <span>$198</span>
                                                        </div>
                                                        <ul class="list-color-product">
                                                            <li class="list-color-item hover-tooltip tooltip-bot color-swatch active">
                                                                <span class="tooltip caption-1">Cayent</span>
                                                                <span class="swatch-value bg-cayent"></span>
                                                            </li>
                                                            <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                                                <span class="tooltip caption-1">Green</span>
                                                                <span class="swatch-value bg-green"></span>
                                                            </li>
                                                            <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                                                <span class="tooltip caption-1">Pink</span>
                                                                <span class="swatch-value bg-pink"></span>
                                                            </li>
                                                        </ul>
                                                        <div class="rating-product">
                                                            <i class="icon-star"></i><span class="body-2">(5)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="item">
                                                <div class="product-item style-grid hover-img">
                                                    <div class="top-item position-relative">
                                                        <a href="{{ route('shop.details') }}" class="image">
                                                            <img src="{{ asset('image/shop-item/shop-item-5.jpg') }}" data-src="{{ asset('image/shop-item/shop-item-5.jpg') }}" alt="" class="lazyload">
                                                        </a>
                                                        <div class="list-btn flex align-items-center justify-content-between">
                                                            <div>
                                                                <a href="#" class="btn-product add-to-card hover-tooltip tooltip-top">
                                                                    <i class="icon-cart-plus"></i>
                                                                    <span class="tooltip caption-1">Add to cart</span>
                                                                </a>
                                                            </div>
                                                            <div>
                                                                <a href="#" class="btn-product btn-whislist hover-tooltip tooltip-top">
                                                                    <i class="icon-heart"></i>
                                                                    <span class="tooltip caption-1">Wishlist</span>
                                                                </a>
                                                            </div>
                                                            <div>
                                                                <a href="#" class="btn-product btn-compare hover-tooltip tooltip-top">
                                                                    <i class="icon-right-left"></i>
                                                                    <span class="tooltip caption-1">Compare</span>
                                                                </a>
                                                            </div>
                                                            <div>
                                                                <a href="#" class="btn-product btn-quick-view hover-tooltip tooltip-top">
                                                                    <i class="icon-eye"></i>
                                                                    <span class="tooltip caption-1">Quick view</span>
                                                                </a>
                                                            </div>

                                                        </div>
                                                        <ul class="size-box">
                                                            <li class="size-item text-xs color-paragraph">S</li>
                                                            <li class="size-item text-xs color-paragraph">M</li>
                                                            <li class="size-item text-xs color-paragraph">L</li>
                                                            <li class="size-item text-xs color-paragraph">XL</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-item-content">
                                                        <a href="#" class="sub-name">Cleaning</a>
                                                        <a href="{{ route('shop.details') }}" class="name-product body-2 fw5">Medical-stethoscope</a>
                                                        <div class="price fw5 body-3">
                                                            <span>
                                                                $198
                                                            </span>
                                                        </div>
                                                        <ul class="list-color-product">
                                                            <li class="list-color-item hover-tooltip tooltip-bot color-swatch active">
                                                                <span class="tooltip caption-1">Cayent</span>
                                                                <span class="swatch-value bg-cayent"></span>
                                                            </li>
                                                            <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                                                <span class="tooltip caption-1">Green</span>
                                                                <span class="swatch-value bg-green"></span>
                                                            </li>
                                                            <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                                                <span class="tooltip caption-1">Pink</span>
                                                                <span class="swatch-value bg-pink"></span>
                                                            </li>
                                                        </ul>
                                                        <div class="rating-product">
                                                            <i class="icon-star"></i><span class="body-2">(5)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="item">
                                                <div class="product-item style-grid hover-img">
                                                    <div class="top-item position-relative">
                                                        <a href="{{ route('shop.details') }}" class="image">
                                                            <img src="{{ asset('image/shop-item/shop-item-6.jpg') }}" data-src="{{ asset('image/shop-item/shop-item-6.jpg') }}" alt="" class="lazyload">
                                                        </a>
                                                        <div class="list-btn flex align-items-center justify-content-between">
                                                            <div>
                                                                <a href="#" class="btn-product add-to-card hover-tooltip tooltip-top">
                                                                    <i class="icon-cart-plus"></i>
                                                                    <span class="tooltip caption-1">Add to cart</span>
                                                                </a>
                                                            </div>
                                                            <div>
                                                                <a href="#" class="btn-product btn-whislist hover-tooltip tooltip-top">
                                                                    <i class="icon-heart"></i>
                                                                    <span class="tooltip caption-1">Wishlist</span>
                                                                </a>
                                                            </div>
                                                            <div>
                                                                <a href="#" class="btn-product btn-compare hover-tooltip tooltip-top">
                                                                    <i class="icon-right-left"></i>
                                                                    <span class="tooltip caption-1">Compare</span>
                                                                </a>
                                                            </div>
                                                            <div>
                                                                <a href="#" class="btn-product btn-quick-view hover-tooltip tooltip-top">
                                                                    <i class="icon-eye"></i>
                                                                    <span class="tooltip caption-1">Quick view</span>
                                                                </a>
                                                            </div>

                                                        </div>
                                                        <ul class="size-box">
                                                            <li class="size-item text-xs color-paragraph">S</li>
                                                            <li class="size-item text-xs color-paragraph">M</li>
                                                            <li class="size-item text-xs color-paragraph">L</li>
                                                            <li class="size-item text-xs color-paragraph">XL</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-item-content">
                                                        <a href="#" class="sub-name">Cleaning</a>
                                                        <a href="{{ route('shop.details') }}" class="name-product body-2 fw5">Mouth-wash-plastic</a>
                                                        <div class="price fw5 body-3">
                                                            <span>
                                                                $80
                                                            </span>
                                                        </div>
                                                        <ul class="list-color-product">
                                                            <li class="list-color-item hover-tooltip tooltip-bot color-swatch active">
                                                                <span class="tooltip caption-1">Cayent</span>
                                                                <span class="swatch-value bg-cayent"></span>
                                                            </li>
                                                            <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                                                <span class="tooltip caption-1">Green</span>
                                                                <span class="swatch-value bg-green"></span>
                                                            </li>
                                                            <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                                                <span class="tooltip caption-1">Pink</span>
                                                                <span class="swatch-value bg-pink"></span>
                                                            </li>
                                                        </ul>
                                                        <div class="rating-product">
                                                            <i class="icon-star"></i><span class="body-2">(5)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="item">
                                                <div class="product-item style-grid hover-img">
                                                    <div class="top-item position-relative">
                                                        <a href="{{ route('shop.details') }}" class="image">
                                                            <img src="{{ asset('image/shop-item/shop-item-7.jpg') }}" data-src="{{ asset('image/shop-item/shop-item-7.jpg') }}" alt="" class="lazyload">
                                                        </a>
                                                        <div class="list-btn flex align-items-center justify-content-between">
                                                            <div>
                                                                <a href="#" class="btn-product add-to-card hover-tooltip tooltip-top">
                                                                    <i class="icon-cart-plus"></i>
                                                                    <span class="tooltip caption-1">Add to cart</span>
                                                                </a>
                                                            </div>
                                                            <div>
                                                                <a href="#" class="btn-product btn-whislist hover-tooltip tooltip-top">
                                                                    <i class="icon-heart"></i>
                                                                    <span class="tooltip caption-1">Wishlist</span>
                                                                </a>
                                                            </div>
                                                            <div>
                                                                <a href="#" class="btn-product btn-compare hover-tooltip tooltip-top">
                                                                    <i class="icon-right-left"></i>
                                                                    <span class="tooltip caption-1">Compare</span>
                                                                </a>
                                                            </div>
                                                            <div>
                                                                <a href="#" class="btn-product btn-quick-view hover-tooltip tooltip-top">
                                                                    <i class="icon-eye"></i>
                                                                    <span class="tooltip caption-1">Quick view</span>
                                                                </a>
                                                            </div>

                                                        </div>
                                                        <ul class="size-box">
                                                            <li class="size-item text-xs color-paragraph">S</li>
                                                            <li class="size-item text-xs color-paragraph">M</li>
                                                            <li class="size-item text-xs color-paragraph">L</li>
                                                            <li class="size-item text-xs color-paragraph">XL</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-item-content">
                                                        <a href="#" class="sub-name">Cleaning</a>
                                                        <a href="{{ route('shop.details') }}" class="name-product body-2 fw5">Thermometer</a>
                                                        <div class="price fw5 body-3">
                                                            <span class="price-old">$230</span>
                                                            <span>$198</span>
                                                        </div>
                                                        <ul class="list-color-product">
                                                            <li class="list-color-item hover-tooltip tooltip-bot color-swatch active">
                                                                <span class="tooltip caption-1">Cayent</span>
                                                                <span class="swatch-value bg-cayent"></span>
                                                            </li>
                                                            <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                                                <span class="tooltip caption-1">Green</span>
                                                                <span class="swatch-value bg-green"></span>
                                                            </li>
                                                            <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                                                <span class="tooltip caption-1">Pink</span>
                                                                <span class="swatch-value bg-pink"></span>
                                                            </li>
                                                        </ul>
                                                        <div class="rating-product">
                                                            <i class="icon-star"></i><span class="body-2">(5)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="item">
                                                <div class="product-item style-grid hover-img">
                                                    <div class="top-item position-relative">
                                                        <a href="{{ route('shop.details') }}" class="image">
                                                            <img src="{{ asset('image/shop-item/shop-item-8.jpg') }}" data-src="{{ asset('image/shop-item/shop-item-8.jpg') }}" alt="" class="lazyload">
                                                        </a>
                                                        <div class="list-btn flex align-items-center justify-content-between">
                                                            <div>
                                                                <a href="#" class="btn-product add-to-card hover-tooltip tooltip-top">
                                                                    <i class="icon-cart-plus"></i>
                                                                    <span class="tooltip caption-1">Add to cart</span>
                                                                </a>
                                                            </div>
                                                            <div>
                                                                <a href="#" class="btn-product btn-whislist hover-tooltip tooltip-top">
                                                                    <i class="icon-heart"></i>
                                                                    <span class="tooltip caption-1">Wishlist</span>
                                                                </a>
                                                            </div>
                                                            <div>
                                                                <a href="#" class="btn-product btn-compare hover-tooltip tooltip-top">
                                                                    <i class="icon-right-left"></i>
                                                                    <span class="tooltip caption-1">Compare</span>
                                                                </a>
                                                            </div>
                                                            <div>
                                                                <a href="#" class="btn-product btn-quick-view hover-tooltip tooltip-top">
                                                                    <i class="icon-eye"></i>
                                                                    <span class="tooltip caption-1">Quick view</span>
                                                                </a>
                                                            </div>

                                                        </div>
                                                        <ul class="size-box">
                                                            <li class="size-item text-xs color-paragraph">S</li>
                                                            <li class="size-item text-xs color-paragraph">M</li>
                                                            <li class="size-item text-xs color-paragraph">L</li>
                                                            <li class="size-item text-xs color-paragraph">XL</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-item-content">
                                                        <a href="#" class="sub-name">Cleaning</a>
                                                        <a href="{{ route('shop.details') }}" class="name-product body-2 fw5">Clothes-steamer</a>
                                                        <div class="price fw5 body-3">
                                                            <span>
                                                                $198
                                                            </span>
                                                        </div>
                                                        <ul class="list-color-product">
                                                            <li class="list-color-item hover-tooltip tooltip-bot color-swatch active">
                                                                <span class="tooltip caption-1">Cayent</span>
                                                                <span class="swatch-value bg-cayent"></span>
                                                            </li>
                                                            <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                                                <span class="tooltip caption-1">Green</span>
                                                                <span class="swatch-value bg-green"></span>
                                                            </li>
                                                            <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                                                <span class="tooltip caption-1">Pink</span>
                                                                <span class="swatch-value bg-pink"></span>
                                                            </li>
                                                        </ul>
                                                        <div class="rating-product">
                                                            <i class="icon-star"></i><span class="body-2">(5)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="item">
                                                <div class="product-item style-grid hover-img">
                                                    <div class="top-item position-relative">
                                                        <a href="{{ route('shop.details') }}" class="image">
                                                            <img src="{{ asset('image/shop-item/shop-item-9.jpg') }}" data-src="{{ asset('image/shop-item/shop-item-9.jpg') }}" alt="" class="lazyload">
                                                        </a>
                                                        <div class="list-btn flex align-items-center justify-content-between">
                                                            <div>
                                                                <a href="#" class="btn-product add-to-card hover-tooltip tooltip-top">
                                                                    <i class="icon-cart-plus"></i>
                                                                    <span class="tooltip caption-1">Add to cart</span>
                                                                </a>
                                                            </div>
                                                            <div>
                                                                <a href="#" class="btn-product btn-whislist hover-tooltip tooltip-top">
                                                                    <i class="icon-heart"></i>
                                                                    <span class="tooltip caption-1">Wishlist</span>
                                                                </a>
                                                            </div>
                                                            <div>
                                                                <a href="#" class="btn-product btn-compare hover-tooltip tooltip-top">
                                                                    <i class="icon-right-left"></i>
                                                                    <span class="tooltip caption-1">Compare</span>
                                                                </a>
                                                            </div>
                                                            <div>
                                                                <a href="#" class="btn-product btn-quick-view hover-tooltip tooltip-top">
                                                                    <i class="icon-eye"></i>
                                                                    <span class="tooltip caption-1">Quick view</span>
                                                                </a>
                                                            </div>

                                                        </div>
                                                        <ul class="size-box">
                                                            <li class="size-item text-xs color-paragraph">S</li>
                                                            <li class="size-item text-xs color-paragraph">M</li>
                                                            <li class="size-item text-xs color-paragraph">L</li>
                                                            <li class="size-item text-xs color-paragraph">XL</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-item-content">
                                                        <a href="#" class="sub-name">Cleaning</a>
                                                        <a href="{{ route('shop.details') }}" class="name-product body-2 fw5">Blood-oxygen-saturation</a>
                                                        <div class="price fw5 body-3">
                                                            <span>
                                                                $198
                                                            </span>
                                                        </div>
                                                        <ul class="list-color-product">
                                                            <li class="list-color-item hover-tooltip tooltip-bot color-swatch active">
                                                                <span class="tooltip caption-1">Cayent</span>
                                                                <span class="swatch-value bg-cayent"></span>
                                                            </li>
                                                            <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                                                <span class="tooltip caption-1">Green</span>
                                                                <span class="swatch-value bg-green"></span>
                                                            </li>
                                                            <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                                                <span class="tooltip caption-1">Pink</span>
                                                                <span class="swatch-value bg-pink"></span>
                                                            </li>
                                                        </ul>
                                                        <div class="rating-product">
                                                            <i class="icon-star"></i><span class="body-2">(5)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wg-pagination wg-pagination-2 mt-50">
                                            <ul class="flex">
                                                <li class="active wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;"><i class="icon-angles-left"></i></li>
                                                <li class="wow fadeInUp animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                                                    <h6>1</h6>
                                                </li>
                                                <li class="wow fadeInUp animated" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                                    <h6>2</h6>
                                                </li>
                                                <li class="wow fadeInUp animated" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                                    <h6>3</h6>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="listLayout" role="tabpanel">
                                        <div class="list-item">
                                            <div class="product-item style-list hover-img">
                                                <div class="top-item position-relative">
                                                    <a href="{{ route('shop.details') }}" class="image">
                                                        <img src="{{ asset('image/shop-item/shop-item-2.jpg') }}" data-src="{{ asset('image/shop-item/shop-item-2.jpg') }}" alt="" class="lazyload">
                                                    </a>
                                                    <div class="list-btn flex align-items-center justify-content-between">
                                                        <div>
                                                            <a href="#" class="btn-product add-to-card hover-tooltip tooltip-top">
                                                                <i class="icon-cart-plus"></i>
                                                                <span class="tooltip caption-1">Add to cart</span>
                                                            </a>
                                                        </div>
                                                        <div>
                                                            <a href="#" class="btn-product btn-whislist hover-tooltip tooltip-top">
                                                                <i class="icon-heart"></i>
                                                                <span class="tooltip caption-1">Wishlist</span>
                                                            </a>
                                                        </div>
                                                        <div>
                                                            <a href="#" class="btn-product btn-compare hover-tooltip tooltip-top">
                                                                <i class="icon-right-left"></i>
                                                                <span class="tooltip caption-1">Compare</span>
                                                            </a>
                                                        </div>
                                                        <div>
                                                            <a href="#" class="btn-product btn-quick-view hover-tooltip tooltip-top">
                                                                <i class="icon-eye"></i>
                                                                <span class="tooltip caption-1">Quick view</span>
                                                            </a>
                                                        </div>

                                                    </div>
                                                    <ul class="size-box">
                                                        <li class="size-item text-xs color-paragraph">S</li>
                                                        <li class="size-item text-xs color-paragraph">M</li>
                                                        <li class="size-item text-xs color-paragraph">L</li>
                                                        <li class="size-item text-xs color-paragraph">XL</li>
                                                    </ul>
                                                </div>
                                                <div class="product-item-content">
                                                    <a href="#" class="sub-name">Covid-19 mask</a>
                                                    <h5>
                                                        <a href="{{ route('shop.details') }}" class="name-product fw5">Light-blue face-mask</a>

                                                    </h5>
                                                    <div class="price fw5 body-3">
                                                        <span>
                                                            $20
                                                        </span>
                                                    </div>
                                                    <div class="desc">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa incidunt porro perspiciatis dolorum nemo in fugit eos officia veniam officiis iste, iure voluptatem debitis ullam culpa commodi magnam qui facere?
                                                    </div>
                                                    <ul class="list-color-product">
                                                        <li class="list-color-item hover-tooltip tooltip-bot color-swatch active">
                                                            <span class="tooltip caption-1">Cayent</span>
                                                            <span class="swatch-value bg-cayent"></span>
                                                        </li>
                                                        <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                                            <span class="tooltip caption-1">Green</span>
                                                            <span class="swatch-value bg-green"></span>
                                                        </li>
                                                        <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                                            <span class="tooltip caption-1">Pink</span>
                                                            <span class="swatch-value bg-pink"></span>
                                                        </li>
                                                    </ul>
                                                    <div class="rating-product">
                                                        <i class="icon-star"></i><span class="body-2">(5)</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product-item style-list hover-img">
                                                <div class="top-item position-relative">
                                                    <a href="{{ route('shop.details') }}" class="image">
                                                        <img src="{{ asset('image/shop-item/shop-item-3.jpg') }}" data-src="{{ asset('image/shop-item/shop-item-3.jpg') }}" alt="" class="lazyload">
                                                    </a>
                                                    <div class="list-btn flex align-items-center justify-content-between">
                                                        <div>
                                                            <a href="#" class="btn-product add-to-card hover-tooltip tooltip-top">
                                                                <i class="icon-cart-plus"></i>
                                                                <span class="tooltip caption-1">Add to cart</span>
                                                            </a>
                                                        </div>
                                                        <div>
                                                            <a href="#" class="btn-product btn-whislist hover-tooltip tooltip-top">
                                                                <i class="icon-heart"></i>
                                                                <span class="tooltip caption-1">Wishlist</span>
                                                            </a>
                                                        </div>
                                                        <div>
                                                            <a href="#" class="btn-product btn-compare hover-tooltip tooltip-top">
                                                                <i class="icon-right-left"></i>
                                                                <span class="tooltip caption-1">Compare</span>
                                                            </a>
                                                        </div>
                                                        <div>
                                                            <a href="#" class="btn-product btn-quick-view hover-tooltip tooltip-top">
                                                                <i class="icon-eye"></i>
                                                                <span class="tooltip caption-1">Quick view</span>
                                                            </a>
                                                        </div>

                                                    </div>
                                                    <ul class="size-box">
                                                        <li class="size-item text-xs color-paragraph">S</li>
                                                        <li class="size-item text-xs color-paragraph">M</li>
                                                        <li class="size-item text-xs color-paragraph">L</li>
                                                        <li class="size-item text-xs color-paragraph">XL</li>
                                                    </ul>
                                                </div>
                                                <div class="product-item-content">
                                                    <a href="#" class="sub-name">Cleaning</a>
                                                    <h5>
                                                        <a href="{{ route('shop.details') }}" class="name-product fw5">Stethoscope</a>
                                                    </h5>
                                                    <div class="price fw5 body-3">
                                                        <span>
                                                            $198
                                                        </span>
                                                    </div>
                                                    <div class="desc">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa incidunt porro perspiciatis dolorum nemo in fugit eos officia veniam officiis iste, iure voluptatem debitis ullam culpa commodi magnam qui facere?
                                                    </div>
                                                    <ul class="list-color-product">
                                                        <li class="list-color-item hover-tooltip tooltip-bot color-swatch active">
                                                            <span class="tooltip caption-1">Cayent</span>
                                                            <span class="swatch-value bg-cayent"></span>
                                                        </li>
                                                        <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                                            <span class="tooltip caption-1">Green</span>
                                                            <span class="swatch-value bg-green"></span>
                                                        </li>
                                                        <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                                            <span class="tooltip caption-1">Pink</span>
                                                            <span class="swatch-value bg-pink"></span>
                                                        </li>
                                                    </ul>
                                                    <div class="rating-product">
                                                        <i class="icon-star"></i><span class="body-2">(5)</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product-item style-list hover-img">
                                                <div class="top-item position-relative">
                                                    <a href="{{ route('shop.details') }}" class="image">
                                                        <img src="{{ asset('image/shop-item/shop-item-4.jpg') }}" data-src="{{ asset('image/shop-item/shop-item-4.jpg') }}" alt="" class="lazyload">
                                                    </a>
                                                    <div class="list-btn flex align-items-center justify-content-between">
                                                        <div>
                                                            <a href="#" class="btn-product add-to-card hover-tooltip tooltip-top">
                                                                <i class="icon-cart-plus"></i>
                                                                <span class="tooltip caption-1">Add to cart</span>
                                                            </a>
                                                        </div>
                                                        <div>
                                                            <a href="#" class="btn-product btn-whislist hover-tooltip tooltip-top">
                                                                <i class="icon-heart"></i>
                                                                <span class="tooltip caption-1">Wishlist</span>
                                                            </a>
                                                        </div>
                                                        <div>
                                                            <a href="#" class="btn-product btn-compare hover-tooltip tooltip-top">
                                                                <i class="icon-right-left"></i>
                                                                <span class="tooltip caption-1">Compare</span>
                                                            </a>
                                                        </div>
                                                        <div>
                                                            <a href="#" class="btn-product btn-quick-view hover-tooltip tooltip-top">
                                                                <i class="icon-eye"></i>
                                                                <span class="tooltip caption-1">Quick view</span>
                                                            </a>
                                                        </div>

                                                    </div>
                                                    <ul class="size-box">
                                                        <li class="size-item text-xs color-paragraph">S</li>
                                                        <li class="size-item text-xs color-paragraph">M</li>
                                                        <li class="size-item text-xs color-paragraph">L</li>
                                                        <li class="size-item text-xs color-paragraph">XL</li>
                                                    </ul>
                                                </div>
                                                <div class="product-item-content">
                                                    <a href="#" class="sub-name">Cleaning</a>
                                                    <h5>
                                                        <a href="{{ route('shop.details') }}" class="name-product fw5">Digital-blood-pressure</a>
                                                    </h5>
                                                    <div class="price fw5 body-3">
                                                        <span class="price-old">$230</span>
                                                        <span>$198</span>
                                                    </div>
                                                    <div class="desc">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa incidunt porro perspiciatis dolorum nemo in fugit eos officia veniam officiis iste, iure voluptatem debitis ullam culpa commodi magnam qui facere?
                                                    </div>
                                                    <ul class="list-color-product">
                                                        <li class="list-color-item hover-tooltip tooltip-bot color-swatch active">
                                                            <span class="tooltip caption-1">Cayent</span>
                                                            <span class="swatch-value bg-cayent"></span>
                                                        </li>
                                                        <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                                            <span class="tooltip caption-1">Green</span>
                                                            <span class="swatch-value bg-green"></span>
                                                        </li>
                                                        <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                                            <span class="tooltip caption-1">Pink</span>
                                                            <span class="swatch-value bg-pink"></span>
                                                        </li>
                                                    </ul>
                                                    <div class="rating-product">
                                                        <i class="icon-star"></i><span class="body-2">(5)</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product-item style-list hover-img">
                                                <div class="top-item position-relative">
                                                    <a href="{{ route('shop.details') }}" class="image">
                                                        <img src="{{ asset('image/shop-item/shop-item-8.jpg') }}" data-src="{{ asset('image/shop-item/shop-item-8.jpg') }}" alt="" class="lazyload">
                                                    </a>
                                                    <div class="list-btn flex align-items-center justify-content-between">
                                                        <div>
                                                            <a href="#" class="btn-product add-to-card hover-tooltip tooltip-top">
                                                                <i class="icon-cart-plus"></i>
                                                                <span class="tooltip caption-1">Add to cart</span>
                                                            </a>
                                                        </div>
                                                        <div>
                                                            <a href="#" class="btn-product btn-whislist hover-tooltip tooltip-top">
                                                                <i class="icon-heart"></i>
                                                                <span class="tooltip caption-1">Wishlist</span>
                                                            </a>
                                                        </div>
                                                        <div>
                                                            <a href="#" class="btn-product btn-compare hover-tooltip tooltip-top">
                                                                <i class="icon-right-left"></i>
                                                                <span class="tooltip caption-1">Compare</span>
                                                            </a>
                                                        </div>
                                                        <div>
                                                            <a href="#" class="btn-product btn-quick-view hover-tooltip tooltip-top">
                                                                <i class="icon-eye"></i>
                                                                <span class="tooltip caption-1">Quick view</span>
                                                            </a>
                                                        </div>

                                                    </div>
                                                    <ul class="size-box">
                                                        <li class="size-item text-xs color-paragraph">S</li>
                                                        <li class="size-item text-xs color-paragraph">M</li>
                                                        <li class="size-item text-xs color-paragraph">L</li>
                                                        <li class="size-item text-xs color-paragraph">XL</li>
                                                    </ul>
                                                </div>
                                                <div class="product-item-content">
                                                    <a href="#" class="sub-name">Cleaning</a>
                                                    <h5>
                                                        <a href="{{ route('shop.details') }}" class="name-product fw5">Clothes-steamer</a>
                                                    </h5>
                                                    <div class="price fw5 body-3">
                                                        <span>$198</span>
                                                    </div>
                                                    <div class="desc">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa incidunt porro perspiciatis dolorum nemo in fugit eos officia veniam officiis iste, iure voluptatem debitis ullam culpa commodi magnam qui facere?
                                                    </div>
                                                    <ul class="list-color-product">
                                                        <li class="list-color-item hover-tooltip tooltip-bot color-swatch active">
                                                            <span class="tooltip caption-1">Cayent</span>
                                                            <span class="swatch-value bg-cayent"></span>
                                                        </li>
                                                        <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                                            <span class="tooltip caption-1">Green</span>
                                                            <span class="swatch-value bg-green"></span>
                                                        </li>
                                                        <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                                            <span class="tooltip caption-1">Pink</span>
                                                            <span class="swatch-value bg-pink"></span>
                                                        </li>
                                                    </ul>
                                                    <div class="rating-product">
                                                        <i class="icon-star"></i><span class="body-2">(5)</span>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="wg-pagination wg-pagination-2 mt-50">
                                            <ul class="flex">
                                                <li class="active wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;"><i class="icon-angles-left"></i></li>
                                                <li class="wow fadeInUp animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                                                    <h6>1</h6>
                                                </li>
                                                <li class="wow fadeInUp animated" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                                    <h6>2</h6>
                                                </li>
                                                <li class="wow fadeInUp animated" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                                    <h6>3</h6>
                                                </li>
                                            </ul>
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
