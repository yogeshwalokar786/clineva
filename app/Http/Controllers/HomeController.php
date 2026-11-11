<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data\ServicesCatalog;

class HomeController extends Controller
{
    /**
     * Show the Clineva Research Laboratories home page.
     */
    public function index()
    {
        $categories = ServicesCatalog::categories();
        $clinicalServices = ServicesCatalog::getByCategory('clinical-trials');
        $babeServices = ServicesCatalog::getByCategory('babe-services');
        $medicoMarketingServices = ServicesCatalog::getByCategory('medico-marketing');
        $allServices = ServicesCatalog::all();

        return view('home', compact(
            'categories',
            'clinicalServices',
            'babeServices',
            'medicoMarketingServices',
            'allServices'
        ));
    }
}
