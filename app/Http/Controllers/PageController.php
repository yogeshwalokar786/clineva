<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data\ServicesCatalog;

class PageController extends Controller
{
    public function about()
    {
        return view('pages.about');
    }

    public function services()
    {
        $categories = ServicesCatalog::categories();
        $clinicalServices = ServicesCatalog::getByCategory('clinical-trials');
        $babeServices = ServicesCatalog::getByCategory('babe-services');
        $medicoMarketingServices = ServicesCatalog::getByCategory('medico-marketing');

        return view('pages.services', compact(
            'categories',
            'clinicalServices',
            'babeServices',
            'medicoMarketingServices'
        ));
    }

    public function serviceDetails(Request $request, ?string $service = null)
    {
        $slug = $service ?: $request->query('service', 'clinical-operations');
        $all = ServicesCatalog::all();
        $currentService = ServicesCatalog::find($slug);

        $keys = array_keys($all);
        $idx = array_search($currentService['slug'], $keys, true);
        $prevService = ($idx !== false && $idx > 0) ? $all[$keys[$idx - 1]] : null;
        $nextService = ($idx !== false && $idx < count($keys) - 1) ? $all[$keys[$idx + 1]] : null;

        $clinicalServices = ServicesCatalog::getByCategory('clinical-trials');
        $babeServices = ServicesCatalog::getByCategory('babe-services');
        $medicoMarketingServices = ServicesCatalog::getByCategory('medico-marketing');

        return view('pages.services-details', compact(
            'currentService',
            'prevService',
            'nextService',
            'clinicalServices',
            'babeServices',
            'medicoMarketingServices'
        ));
    }

    public function careers()
    {
        return view('pages.careers');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function blog()
    {
        return view('pages.blog-standard');
    }

    public function blogDetails()
    {
        return view('pages.blog-details');
    }
}
