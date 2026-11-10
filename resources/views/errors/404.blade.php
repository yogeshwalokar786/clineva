@extends('layouts.app')

@section('title', 'Page Not Found - 404 - Clineva')

@section('content')
<div class="page-title style-default pt-60 pb-60">
    <div class="tf-container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <div class="error-content py-5">
                    <h1 class="color-primary fw-bold" style="font-size: 80px; line-height: 1; margin-bottom: 20px;">404</h1>
                    <h3 class="mb-3">Oops! Page Not Found</h3>
                    <p class="text-muted mb-4" style="max-width: 500px; margin: 0 auto 30px;">
                        The healthcare page or resource you are looking for may have been moved, updated, or is temporarily unavailable.
                    </p>
                    <div class="d-flex justify-content-center gap-3">
                        <a href="{{ route('home') }}" class="tf-btn">
                            <span>Back to Homepage</span>
                            <i class="icon-arrow-right"></i>
                        </a>
                        <a href="{{ route('contact') }}" class="tf-btn style-white">
                            <span>Contact Support</span>
                            <i class="icon-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

