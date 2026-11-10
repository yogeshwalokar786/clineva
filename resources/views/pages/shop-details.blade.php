@extends('layouts.app')

@section('title', 'Shop Details - Clineva')

@section('content')
<div class="page-title mt-30">
             <div class="mx-30">
                <div class="page-title-content paralax-bg">
                    <h1 class="title">
                        Shop Details
                    </h1>
                    <div class="breadkcum">
                        <h3><a href="{{ route('home') }}" class="link-breadkcum">Home</a></h3>
                        <span class="dot bg-white"></span>
                        <h3 class="page-breadkcum">Shop Details</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-content tf-spacing-1">
            <div class="tf-container tf-spacing-3">
                <div class="wg-shop-details flex justify-content-between">
                    <div class="left ">
                        <div class="tf-product-media-wrap">
                            <div class="thumbs-slider flex g-20">
                                <div dir="ltr" class="swiper tf-product-media-main">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <a href="{{ asset('image/shop-item/tf-product-media-main-1.jpg') }}" target="_blank" data-pswp-height="800px" class="image-main item">
                                                <img src="{{ asset('image/shop-item/tf-product-media-main-1.jpg') }}" data-src="{{ asset('image/shop-item/tf-product-media-main-1.jpg') }}" data-zoom="image/shop-item/tf-product-media-main-1.jpg" alt="" class="lazyload tf-image-zoom">
                                            </a>
                                        </div>
                                        <div class="swiper-slide">
                                            <a href="{{ asset('image/shop-item/tf-product-media-main-2.jpg') }}" target="_blank" data-pswp-height="800px" class="image-main item">
                                                <img src="{{ asset('image/shop-item/tf-product-media-main-2.jpg') }}" data-src="{{ asset('image/shop-item/tf-product-media-main-2.jpg') }}" data-zoom="image/shop-item/tf-product-media-main-2.jpg" alt="" class="lazyload tf-image-zoom">
                                            </a>
                                        </div>
                                        <div class="swiper-slide">
                                            <a href="{{ asset('image/shop-item/tf-product-media-main-3.jpg') }}" target="_blank" data-pswp-height="800px" class="image-main item">
                                                <img src="{{ asset('image/shop-item/tf-product-media-main-3.jpg') }}" data-src="{{ asset('image/shop-item/tf-product-media-main-3.jpg') }}" data-zoom="image/shop-item/tf-product-media-main-3.jpg" alt="" class="lazyload tf-image-zoom">
                                            </a>
                                        </div>
                                        <div class="swiper-slide">
                                            <a href="{{ asset('image/shop-item/tf-product-media-main-4.jpg') }}" target="_blank" data-pswp-height="800px" class="image-main item">
                                                <img src="{{ asset('image/shop-item/tf-product-media-main-4.jpg') }}" data-src="{{ asset('image/shop-item/tf-product-media-main-4.jpg') }}" data-zoom="image/shop-item/tf-product-media-main-4.jpg" alt="" class="lazyload tf-image-zoom">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper tf-product-media-thumbs other-image-zoom" data-direction="vertical">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="item image-thumb">
                                                <img class="lazyload" data-src="{{ asset('image/shop-item/tf-product-media-thumbs-1.jpg') }}" src="{{ asset('image/shop-item/tf-product-media-thumbs-1.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="item image-thumb">
                                                <img class="lazyload" data-src="{{ asset('image/shop-item/tf-product-media-thumbs-2.jpg') }}" src="{{ asset('image/shop-item/tf-product-media-thumbs-2.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="item image-thumb">
                                                <img class="lazyload" data-src="{{ asset('image/shop-item/tf-product-media-thumbs-3.jpg') }}" src="{{ asset('image/shop-item/tf-product-media-thumbs-3.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="item image-thumb">
                                                <img class="lazyload" data-src="{{ asset('image/shop-item/tf-product-media-thumbs-4.jpg') }}" src="{{ asset('image/shop-item/tf-product-media-thumbs-4.jpg') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right">
                        <div class="tf-product-info-wrap position-relative">
                            <div class="tf-zoom-main"></div>
                            <div class="tf-product-info-heading tf-product-info-content">
                                <h2 class="name-product lsp-0">
                                    Hand-sanitizer
                                </h2>
                                <div class="price-rating flex flex-wrap rg-10">
                                    <div class="tf-product-info-price flex g-10">
                                        <h6 class="price-old">$230</h6>
                                        <h6 class="price-on-sale body-3 fw5 color-primary cart-price">$198</h6>
                                    </div>

                                    <div class="rating flex">
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                    </div>
                                </div>
                                <div class="text">A slim perfume with a spray is the perfect blend of convenience and elegance, designed</div>
                            </div>
                            <div class="tf-product-info-liveview">
                                <div class="liveview-count body-2 fw7">25</div>
                                <p class="fw-6">People are viewing this right now</p>
                            </div>
                            <div class="tf-product-info-countdown">
                                <div class="countdown-wrap">
                                    <div class="countdown-title">
                                        <i class="icon-clock tf-ani-tada"></i>
                                        <p>HURRY UP! SALE ENDS IN:</p>
                                    </div>
                                    <div class="tf-countdown style-1">
                                        <div class="js-countdown" data-timer="1007500" data-labels="Days ,Hours ,Mins ,Secs"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tf-product-info-variant-picker mb-50">
                                <div class="variant-picker-item mb-30 values-color ">
                                    <h6 class="variant-picker-label">
                                        Color:
                                    </h6>
                                    <div class="variant-picker-values">
                                        <input id="values-cayent" type="radio" name="color1" checked>
                                        <label class="hover-tooltip tooltip-top color-btn" for="values-cayent" data-color="cayent" data-value="Cayent">
                                            <span class="btn-checkbox bg-cayent"></span>
                                            <span class="tooltip caption-1">cayent</span>
                                        </label>
                                        <input id="values-green" type="radio" name="color1">
                                        <label class=" hover-tooltip tooltip-top color-btn" for="values-green" data-color="green" data-value="Green">
                                            <span class="btn-checkbox bg-green"></span>
                                            <span class="tooltip caption-1">green</span>
                                        </label>
                                        <input id="values-pink" type="radio" name="color1">
                                        <label class="hover-tooltip tooltip-top color-btn" for="values-pink" data-color="pink" data-value="Pink">
                                            <span class="btn-checkbox bg-pink"></span>
                                            <span class="tooltip caption-1">pink</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="variant-picker-item justify-content-between flex-wrap rg-10">
                                    <div class="d-flex justify-content-between align-items-center g-30">
                                        <h6 class="variant-picker-label">
                                            Size:
                                        </h6>
                                        <div class="variant-picker-values">
                                            <input type="radio" name="size1" id="values-s" checked>
                                            <label class="style-text size-btn" for="values-s" data-value="S">
                                                S
                                            </label>
                                            <input type="radio" name="size1" id="values-m">
                                            <label class="style-text size-btn" data-price="9" for="values-m" data-value="M">
                                                M
                                            </label>
                                            <input type="radio" name="size1" id="values-l">
                                            <label class="style-text size-btn" data-price="10" for="values-l" data-value="L">
                                                L
                                            </label>
                                            <input type="radio" name="size1" id="values-xl">
                                            <label class="style-text size-btn" data-price="12" for="values-xl" data-value="XL">
                                                XL
                                            </label>
                                        </div>
                                    </div>
                                    <a href="#find_size" data-bs-toggle="modal" class="find-size fw5 caption-1">Find your size</a>

                                </div>
                            </div>
                            <div class="tf-product-info-quanlity tf-product-info-content flex align-items-center g-30">
                                <h6 class="title">Quantity:</h6>
                                <div class="flex align-items-center gap-10 mb-23">
                                    <div class="wg-quantity">
                                        <span class="btn-quantity btn-decrease"><i class="icon-chevron-left"></i></span>
                                        <input class="quantity-product" type="text" name="number" value="1">
                                        <span class="btn-quantity btn-increase"><i class="icon-chevron-right"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="tf-product-info-buy-button">
                                <form class="flex flex-wrap">
                                    <div class="top flex flex-wrap flex-grow-1">
                                        <a href="javascript:void(0);" class="tf-btn btn-fill justify-content-center btn-add-to-cart flex-grow-1"><span>Add to cart</span></a>
                                        <a href="javascript:void(0);" class="tf-product-btn-wishlist hover-tooltip box-icon bg_white wishlist btn-icon-action ">
                                            <i class="icon-heart"></i>
                                            <span class="tooltip caption-1">Add to Wishlist</span>
                                        </a>
                                        <a href="#" class="tf-product-btn-wishlist hover-tooltip compare btn-icon-action">
                                            <i class="icon-right-left"></i>
                                            <span class="tooltip caption-1">Add to Compare</span>
                                        </a>
                                    </div>
                                    <a href="javascript:void(0);" class="tf-btn btn-fill bg-yellow-3 justify-content-center btn-add-to-cart w-full hover-boder-color-title"><span>Buy with <img src="{{ asset('image/payments/paypal.png') }}" alt=""></span></a>
                                </form>
                            </div>

                            <a href="#" class="payment-more-option mb-26">More payment options</a>

                            <div class="tf-payment flex g-10 flex-wrap">
                                <img src="{{ asset('image/payments/img-1.jpg') }}" alt="">
                                <img src="{{ asset('image/payments/img-2.jpg') }}" alt="">
                                <img src="{{ asset('image/payments/img-3.jpg') }}" alt="">
                                <img src="{{ asset('image/payments/img-4.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tf-container tf-spacing-11">
                <div class="flat-animate-tab style-boder">
                    <div class="wg-tab style-boder-bottom">
                        <ul class="tab-product justify-content-start" role="tablist">
                            <li class="nav-tab-item" role="presentation">
                                <h4 class="fw4">
                                    <a href="#tab1" data-bs-toggle="tab" role="tab" class="active">Description</a>
                                </h4>
                            </li>
                            <li class="nav-tab-item" role="presentation">
                                <h4 class="fw4">
                                    <a href="#tab2" data-bs-toggle="tab" role="tab" class="">Additional information</a>
                                </h4>
                            </li>
                            <li class="nav-tab-item" role="presentation">
                                <h4 class="fw4">
                                    <a href="#tab3" data-bs-toggle="tab" role="tab" class="">Reviews <span class="circle-number">2</span></a>
                                </h4>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content style-border">
                        <div class="tab-pane active show" id="tab1" role="tabpanel">
                            <div class="description-box px-mobile-sm">
                                <p class="text mb-40">
                                    Hand sanitizers have become an essential tool in promoting hand hygiene,
                                    offering a convenient method to reduce the presence of many germs when soap and water are unavailable.
                                    To ensure effectiveness, it's crucial to use sanitizers containing at least 60% alcohol, as recommended by health authorities.
                                    However, it's important to note that while hand sanitizers can quickly decrease the number of germs, they may not eliminate all types,
                                    especially when hands are visibly dirty or greasy. Therefore, whenever possible, washing hands with soap and water remains the preferred
                                </p>
                                <p class="text mb-50">
                                    Body spray is a versatile and refreshing way to stay confident and fragrant all day long.
                                    Designed to offer a subtle yet long-lasting scent, it’s perfect for daily use or special occasions.
                                    Lightweight and easy to carry, body sprays are ideal for quick touch-ups, keeping you fresh on the go.
                                </p>

                                <div class="benefit-list">
                                    <div class="benefit-items style-dot dot-red">
                                        <span class="color-paragraph">Lightweight and Non-Greasy</span>
                                    </div>
                                    <div class="benefit-items style-dot dot-red">
                                        <span class="color-paragraph">Cruelty-Free and Vegan</span>
                                    </div>
                                    <div class="benefit-items style-dot dot-red">
                                        <span class="color-paragraph">Compact and Travel-Friendly Packaging</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane" id="tab2" role="tabpanel">
                            <table class="tb-info-product px-mobile-sm">
                                <tbody>
                                    <tr class="tb-attr-item">
                                        <th class="tb-attr-label px-mobile-lg">
                                            Weight
                                        </th>
                                        <td class="tb-attr-value px-mobile-lg">
                                            2 kg
                                        </td>
                                    </tr>
                                    <tr class="tb-attr-item">
                                        <th class="tb-attr-label px-mobile-lg">
                                            Dimensions
                                        </th>
                                        <td class="tb-attr-value px-mobile-lg">
                                            30 × 50 × 70 cm
                                        </td>
                                    </tr>
                                    <tr class="tb-attr-item">
                                        <th class="tb-attr-label px-mobile-lg">
                                            Color
                                        </th>
                                        <td class="tb-attr-value px-mobile-lg">
                                            White, Pink, Black
                                        </td>
                                    </tr>
                                    <tr class="tb-attr-item">
                                        <th class="tb-attr-label px-mobile-lg">
                                            Size
                                        </th>
                                        <td class="tb-attr-value px-mobile-lg">
                                            S, M, L, XL
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane" id="tab3" role="tabpanel">

                            <div class="box-comment px-mobile-sm">
                                <div class="text mb-28">1 review for Hand Senitizer</div>

                                <div class="comment-item style-border mb-50 px-mobile-md">
                                    <div class="left">
                                        <div class="image-avatar">
                                            <img src="{{ asset('image/avatar/box-agent-6.jpg') }}" data-src="{{ asset('image/avatar/box-agent-6.jpg') }}" alt="" class=" ls-is-cached lazyloaded">
                                        </div>
                                    </div>
                                    <div class="comment-content">
                                        <div class="user-comment flex g-10 flex-wrap">
                                            <a href="#" class="name fw7">Russell N. Bennett</a>
                                            <p class="time-date">25 March 2025</p>
                                        </div>
                                        <div class="text-comment">
                                            This sanitizer features a sleek, rectangular design and comes in various appealing scents. Its trendy appearance and spill-free mist application have made it particularly popular among teens
                                        </div>

                                        <div class="bottom-comment flex g-20 align-items-center flex-wrap">
                                            <span>Review Rating</span>
                                            <div class="rating flex">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <form action="#" class="write-review form-comment no-bg">

                                    <div class="heading-form mb-30">
                                        <h6 class="title">
                                            Add a review
                                        </h6>
                                        <p class="text">Your email address will not be published. Required fields are marked *</p>
                                    </div>

                                    <div class="cols mb-50">
                                        <fieldset class="item">
                                            <label for="full-name">Your Name*</label>
                                            <input type="text" id="full-name" placeholder="Name here*" required>
                                        </fieldset>
                                        <fieldset class="item">
                                            <label for="email">Your Email*</label>
                                            <input type="email" id="email" placeholder="Email address*" required>
                                        </fieldset>
                                    </div>
                                    <fieldset class="mb-50">
                                        <label for="email">Write Message*</label>
                                        <textarea placeholder="Write Message*" required></textarea>
                                    </fieldset>

                                    <div class="box-rating flex rg-10 g-30 flex-wrap">
                                        <h5>Your Rating*</h5>
                                        <div class="list-rating-check">
                                            <input type="radio" id="star5" name="rate" value="5">
                                            <label for="star5" title="text"></label>
                                            <input type="radio" id="star4" name="rate" value="4">
                                            <label for="star4" title="text"></label>
                                            <input type="radio" id="star3" name="rate" value="3">
                                            <label for="star3" title="text"></label>
                                            <input type="radio" id="star2" name="rate" value="2">
                                            <label for="star2" title="text"></label>
                                            <input type="radio" id="star1" name="rate" value="1">
                                            <label for="star1" title="text"></label>
                                        </div>
                                    </div>

                                    <div class="bottom-btn">
                                        <button type="submit" class="tf-btn">
                                            <span>Submit your reviews</span>
                                            <i class="icon-arrow-right"></i>
                                        </button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tf-container">
                <div class="row">
                    <div class="col-12">
                        <div class="heading-section text-center mb-50">
                            <h2 class="title">
                                Related Products
                            </h2>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="swiper tf-swiper sw-product" data-swiper='{
                            "slidesPerView": 1,
                            "spaceBetween": 30,
                            "pagination": { "el": ".sw-pagination-product", "clickable": true },
                            "breakpoints": {
                                "575": { "slidesPerView": 2, "slidesPerGroup": 1},
                                "1150": { "slidesPerView": 4, "slidesPerGroup": 1}
                                }
                            }'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
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

                                <div class="swiper-slide">
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

                                <div class="swiper-slide">
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

                                <div class="swiper-slide">
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
                            </div>

                            <div class="sw-pagination-product sw-pagination d-xl-none mt-15 justify-content-center"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
