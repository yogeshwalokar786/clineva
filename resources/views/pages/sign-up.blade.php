@extends('layouts.app')

@section('title', 'Sign Up - Clineva')

@section('content')
<div class="page-title mt-30">
            <div class="mx-30">
                <div class="page-title-content paralax-bg">
                    <h1 class="title">
                        Sign up
                    </h1>
                    <div class="breadkcum">
                        <h3><a href="{{ route('home') }}" class="link-breadkcum">Home</a></h3>
                        <span class="dot bg-white"></span>
                        <h3 class="page-breadkcum">Sign up</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-content">
            <div class="tf-container tf-spacing-1">
                <form action="#" class="form-login-sign-up form-has-password form-sign-up">
                    <div class="left">
                        <h3 class="title-form fw6">Create an Account</h3>
                        <div class="text">
                            Medical care refers to the services provided by licensed professionals to diagnose, treat, and prevent
                        </div>

                        <fieldset class="mb-20 item">
                            <div class="input-icon">
                                <i class="icon-user"></i>
                            </div>
                            <input type="text" placeholder="Your Name" name="name" tabindex="2" value="" aria-required="true" required="">
                        </fieldset>

                        <fieldset class="mb-20 item">
                            <div class="input-icon mail-icon">
                                <i class="icon-envelope"></i>
                            </div>
                            <input type="email" placeholder="Email Address" name="email" tabindex="2" value="" aria-required="true" required="">
                        </fieldset>

                        <fieldset class="item password-item">
                            <div class="pass-icon input-icon">
                                <i class="icon-lock"></i>
                            </div>
                            <input class="input-password" type="password" placeholder="Password" name="password" tabindex="2" value="" aria-required="true" required="">
                            <span class="toggle-password btn-toggle-password unshow">
                                <i class="icon-eye"></i>
                            </span>
                        </fieldset>

                        <fieldset class="radio-box mb-30">
                            <input type="checkbox" id="radio-box-1" checked>
                            <label class="mb-0 color-paragraph" for="radio-box-1">Remember me</label>
                        </fieldset>

                        <button type="submit" class="tf-btn w-full justify-content-center mb-30">
                            <span>Create an Account</span>
                            <i class="icon-arrow-right"></i>
                        </button>

                        <h6 class="fw4 mb-30 text-center">or</h6>

                        <a href="#" class="tf-btn btn-google-singin style-border g-10 w-full align-items-center justify-content-center"><img src="{{ asset('image/icon/logo-gg.png') }}" alt=""><span>Continue with Google</span></a>

                        <p class="text-center color-paragraph">Already have an account? <a href="{{ route('login') }}" class="fw6">Sign in</a></p>

                    </div>
                    <div class="image">
                        <img src="{{ asset('image/section/img-login.jpg') }}" data-src="{{ asset('image/section/img-login.jpg') }}" alt="" class="lazyload">
                    </div>
                </form>
            </div>
        </div>
@endsection
