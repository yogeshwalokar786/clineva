<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        return view('pages.about');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function serviceDetails()
    {
        return view('pages.services-details');
    }

    public function doctors()
    {
        return view('pages.doctors');
    }

    public function doctorDetails()
    {
        return view('pages.doctor-details');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function careers()
    {
        return view('pages.careers');
    }

    public function appointment()
    {
        return view('pages.appointment');
    }

    public function pricing()
    {
        return view('pages.pricing');
    }

    public function faq()
    {
        return view('pages.faq');
    }

    public function history()
    {
        return view('pages.history');
    }

    public function events()
    {
        return view('pages.events-calendar');
    }

    public function portfolio()
    {
        return view('pages.portfolio');
    }

    public function portfolioDetails()
    {
        return view('pages.portfolio-details');
    }

    public function blog()
    {
        return view('pages.blog-standard');
    }

    public function blogDetails()
    {
        return view('pages.blog-details');
    }

    public function shop()
    {
        return view('pages.shop');
    }

    public function shopDetails()
    {
        return view('pages.shop-details');
    }

    public function cart()
    {
        return view('pages.cart');
    }

    public function checkout()
    {
        return view('pages.checkout');
    }

    public function login()
    {
        return view('pages.login');
    }

    public function signup()
    {
        return view('pages.sign-up');
    }

    public function healthCare()
    {
        return view('pages.health-care');
    }

    public function dentalClinic()
    {
        return view('pages.dental-clinic');
    }

    public function childCare()
    {
        return view('pages.child-care');
    }

    public function eyeCare()
    {
        return view('pages.eye-care');
    }
}
