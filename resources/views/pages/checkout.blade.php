@extends('layouts.app')

@section('title', 'Checkout - Clineva')

@section('content')
<div class="page-title mt-30">
            <div class="mx-30">
                <div class="page-title-content paralax-bg">
                    <h1 class="title">
                        Shopping Cart
                    </h1>
                    <div class="breadkcum">
                        <h3><a href="{{ route('home') }}" class="link-breadkcum">Home</a></h3>
                        <span class="dot bg-white"></span>
                        <h3 class="page-breadkcum">Shop Cart</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-content tf-spacing-1">
            <div class="tf-container">
                <div class="row">
                    <div class="col-lg-7">
                        <form action="#" class="wg-form-information">
                            <div class="heading-form mb-30">
                                <div class="title">
                                    Billing Address
                                </div>
                                <p class="text color-paragraph">
                                    Enter the billing address that matches your payments method
                                </p>
                            </div>
                            <div class="cols g-20 mb-32">
                                <fieldset class="item">
                                    <label for="first-name">First Name *</label>
                                    <input type="text" id="first-name" required>
                                </fieldset>
                                <fieldset class="item">
                                    <label for="last-name">Last Name *</label>
                                    <input type="text" id="last-name" required>
                                </fieldset>
                            </div>
                            <fieldset class="mb-40">
                                <label for="company-name">Company Name</label>
                                <input type="text" id="company-name" required>
                            </fieldset>
                            <fieldset class="mb-40">
                                <label>Country / Region *</label>
                                <div class="nice-select border">
                                    <span class="current">United States (US)</span>
                                    <ul class="list">
                                        <li class="option option-all">United States (US)</li>
                                        <li class="option">Viet Nam</li>
                                        <li class="option">Indonesia</li>
                                        <li class="option">Japan</li>
                                        <li class="option">Laos</li>
                                    </ul>
                                </div>
                            </fieldset>

                            <fieldset class="mb-32">
                                <label>Street address *</label>
                                <input type="text" placeholder="House number and street name" class="mb-20" required>
                                <input type="text" placeholder="Apartment, suite, unit, etc (optional)" required>
                            </fieldset>

                            <fieldset class="mb-40">
                                <label for="city">Town / City *</label>
                                <input type="text" id="city">
                            </fieldset>

                            <fieldset class="mb-40">
                                <label>State *</label>
                                <div class="nice-select border">
                                    <span class="current">California</span>
                                    <ul class="list">
                                        <li class="option option-all">California</li>
                                        <li class="option">Viet Nam</li>
                                        <li class="option">Indonesia</li>
                                        <li class="option">Japan</li>
                                        <li class="option">Laos</li>
                                    </ul>
                                </div>
                            </fieldset>

                            <fieldset class="mb-37">
                                <label for="ZIP-code">ZIP Code *</label>
                                <input type="text" id="ZIP-code" required>
                            </fieldset>

                            <div class="cols g-20 mb-26">
                                <fieldset class="item">
                                    <label for="phone">Phone *</label>
                                    <input type="text" id="phone" required>
                                </fieldset>
                                <fieldset class="item">
                                    <label for="email">Email Address *</label>
                                    <input type="text" id="email" required>
                                </fieldset>
                            </div>

                            <fieldset class="check-box g-8">
                                <input type="checkbox" name="ship" id="ship" checked="">
                                <label class="mb-0 color-paragraph" for="ship">Ship to a different address?</label>
                            </fieldset>
                        </form>
                    </div>
                    <div class="col-lg-5">
                        <div class="tf-page-cart-sidebar">
                            <div class="box-oder-summary">
                                <h3 class="title fw6">
                                    Order Summary
                                </h3>
                                <div class="product-list-item">
                                    <div class="flex align-items-center g-35">
                                        <a href="#" class="image"><img src="{{ asset('image/shop-item/item-tb-product-1.jpg') }}" data-src="{{ asset('image/shop-item/item-tb-product-1.jpg') }}" alt="" class="lazyload"></a>
                                        <a href="#" class="name-item body-2 fw5">Hand Sanitizer</a>
                                    </div>
                                    <div class="price body-2 fw5">$88</div>
                                </div>
                                <div class="subtotal body-2 flex justify-content-between align-items-center">
                                    <span>Subtotal</span>
                                    <span class="total">$88</span>
                                </div>
                                <div class="shipping body-2 flex justify-content-between align-items-center">
                                    <span>Shipping</span>
                                    <span class="total">$10</span>
                                </div>
                                <h4 class="total-order d-flex justify-content-between align-items-center">
                                    <span>Total</span>
                                    <span class="total">$98</span>
                                </h4>
                            </div>
                            <div class="box-payment">
                                <h3 class="title fw6">
                                    Payment Information
                                </h3>
                                <form action="#" class="form-payment">
                                    <div class="payment-box" id="payment-box">

                                        <div class="payment-item payment-choose-card active">
                                            <label for="direct-bank" class="payment-header" data-bs-toggle="collapse" data-bs-target="#direct-payment">
                                                <input type="radio" name="payment-method" class="tf-check-rounded" id="direct-bank" checked>
                                                <span class="text-btn">Direct Bank transfer</span>
                                            </label>
                                            <div id="direct-payment" class="collapse box-content show" data-bs-parent="#payment-box">
                                                <p>
                                                    Trendy fashion pieces innovative gadgets, we've got
                                                    everything you need to elevate your shopping
                                                </p>
                                            </div>
                                        </div>
                                        <div class="payment-item payment-choose-card">
                                            <label for="check-Payment" class="payment-header" data-bs-toggle="collapse" data-bs-target="#check-payment">
                                                <input type="radio" name="payment-method" class="tf-check-rounded" id="check-Payment">
                                                <span class="text-btn"> Check payment</span>
                                            </label>
                                            <div id="check-payment" class="collapse box-content" data-bs-parent="#payment-box">
                                                <p>
                                                    Trendy fashion pieces innovative gadgets, we've got
                                                    everything you need to elevate your shopping
                                                </p>
                                            </div>
                                        </div>
                                        <div class="payment-item payment-choose-card">
                                            <label for="delivery-Payment" class="payment-header" data-bs-toggle="collapse" data-bs-target="#delivery-payment">
                                                <input type="radio" name="payment-method" class="tf-check-rounded" id="delivery-Payment">
                                                <span class="text-btn"> Cash on delivery</span>
                                            </label>
                                            <div id="delivery-payment" class="collapse box-content" data-bs-parent="#payment-box">
                                                <p>
                                                    Trendy fashion pieces innovative gadgets, we've got
                                                    everything you need to elevate your shopping
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text lh-28">
                                        Whether sleek and structured, slouchy and casual, or embellished with intricate details, each handbag tells a unique story the <a href="#" class="fw6">Privacy Policy</a>
                                    </div>
                                    <div class="check-out-btn">
                                        <button type="submit" class="tf-btn w-full justify-content-center">
                                            <span>Place order</span>
                                            <i class="icon-arrow-right"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
