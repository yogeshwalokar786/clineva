@extends('layouts.app')

@section('title', 'Cart - Clineva')

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
                    <div class="col-lg-8">
                        <form class="overflow-auto">
                            <table class="tf-table-page-cart">
                                <thead>
                                    <tr>
                                        <th>
                                            Product
                                        </th>
                                        <th>
                                            Quantity
                                        </th>
                                        <th>
                                            Total
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="tf-cart-item file-delete">
                                        <td class="tf-cart-item_product">
                                            <a href="{{ route('shop.details') }}" class="image">
                                                <img src="{{ asset('image/shop-item/item-tb-product-1.jpg') }}" data-src="{{ asset('image/shop-item/item-tb-product-1.jpg') }}" alt="product" class="lazyload">
                                            </a>
                                            <div class="cart-info">
                                                <a href="{{ route('shop.details') }}" class="cart-title body-2">Hand Sanitizer</a>
                                            </div>
                                        </td>
                                        <td data-cart-title="Quantity" class="tf-cart-item_quantity">
                                            <div class="flex align-items-center g-10">
                                                <div class="wg-quantity">
                                                    <span class="btn-quantity btn-decrease"><i class="icon-chevron-left"></i></span>
                                                    <input class="quantity-product" type="text" name="number" value="1">
                                                    <span class="btn-quantity btn-increase"><i class="icon-chevron-right"></i></span>
                                                </div>
                                                <div class="remove-cart remove-btn remove">
                                                    <i class="icon-trash"></i>
                                                </div>
                                            </div>
                                        </td>
                                        <td data-cart-title="Total" class="tf-cart-item_total">
                                            <h4 class="total-price color-red">$80</h4>
                                        </td>
                                    </tr>
                                    <tr class="tf-cart-item file-delete">
                                        <td class="tf-cart-item_product">
                                            <a href="{{ route('shop.details') }}" class="image">
                                                <img src="{{ asset('image/shop-item/item-tb-product-2.jpg') }}" data-src="{{ asset('image/shop-item/item-tb-product-2.jpg') }}" alt="product" class="lazyload">
                                            </a>
                                            <div class="cart-info">
                                                <a href="{{ route('shop.details') }}" class="cart-title body-2">Covid-19 mask</a>
                                            </div>
                                        </td>
                                        <td data-cart-title="Quantity" class="tf-cart-item_quantity">
                                            <div class="flex align-items-center g-10">
                                                <div class="wg-quantity">
                                                    <span class="btn-quantity btn-decrease"><i class="icon-chevron-left"></i></span>
                                                    <input class="quantity-product" type="text" name="number" value="1">
                                                    <span class="btn-quantity btn-increase"><i class="icon-chevron-right"></i></span>
                                                </div>
                                                <div class="remove-cart remove-btn remove">
                                                    <i class="icon-trash"></i>
                                                </div>
                                            </div>
                                        </td>
                                        <td data-cart-title="Total" class="tf-cart-item_total">
                                            <h4 class="total-price color-red">$15</h4>
                                        </td>
                                    </tr>
                                    <tr class="tf-cart-item file-delete">
                                        <td class="tf-cart-item_product">
                                            <a href="{{ route('shop.details') }}" class="image">
                                                <img src="{{ asset('image/shop-item/item-tb-product-3.jpg') }}" data-src="{{ asset('image/shop-item/item-tb-product-3.jpg') }}" alt="product" class="lazyload">
                                            </a>
                                            <div class="cart-info">
                                                <a href="{{ route('shop.details') }}" class="cart-title body-2">Thermometer</a>
                                            </div>
                                        </td>
                                        <td data-cart-title="Quantity" class="tf-cart-item_quantity">
                                            <div class="flex align-items-center g-10">
                                                <div class="wg-quantity">
                                                    <span class="btn-quantity btn-decrease"><i class="icon-chevron-left"></i></span>
                                                    <input class="quantity-product" type="text" name="number" value="1">
                                                    <span class="btn-quantity btn-increase"><i class="icon-chevron-right"></i></span>
                                                </div>
                                                <div class="remove-cart remove-btn remove">
                                                    <i class="icon-trash"></i>
                                                </div>
                                            </div>
                                        <td data-cart-title="Total" class="tf-cart-item_total">
                                            <h4 class="total-price color-red">$45</h4>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                    <div class="col-lg-4">
                        <div class="fl-sidebar-cart">
                            <div class="box-order">
                                <h3 class="title-box">Order Summary</h3>
                                <div class="subtotal body-2 flex justify-content-between align-items-center">
                                    <span>Subtotal</span>
                                    <span class="total">$140</span>
                                </div>
                                <div class="discount body-2 flex justify-content-between align-items-center">
                                    <span>Shipping</span>
                                    <span class="total">$10</span>
                                </div>
                                <h4 class="total-order d-flex justify-content-between align-items-center">
                                    <span>Total</span>
                                    <span class="total">$186,99</span>
                                </h4>
                                <div class="box-progress-checkout">
                                    <a href="{{ route('checkout') }}" class="tf-btn w-full justify-content-center mb-30">
                                        <span>Checkout</span>
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                    <a href="{{ route('shop') }}" class="tf-btn w-full justify-content-center no-bg">
                                        <span>Continue Shopping</span>
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
