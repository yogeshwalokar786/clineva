<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SeoController extends Controller
{
    /**
     * Display the dynamic Page SEO management form.
     */
    public function index()
    {
        $settings = Setting::getAll();
        $pages = [
            'home' => [
                'name' => 'Home Page',
                'url' => route('home'),
                'icon' => 'icon-home',
                'desc' => 'Primary landing page of Clineva Research Laboratories.',
            ],
            'about' => [
                'name' => 'About Us',
                'url' => route('about'),
                'icon' => 'icon-user',
                'desc' => 'Corporate mission, leadership, and scientific credentials.',
            ],
            'services' => [
                'name' => 'Services Hub',
                'url' => route('services'),
                'icon' => 'icon-stethoscope',
                'desc' => 'Comprehensive directory of clinical trials, BA/BE & medical affairs.',
            ],
            'careers' => [
                'name' => 'Careers & Recruitment',
                'url' => route('careers'),
                'icon' => 'icon-briefcase',
                'desc' => 'Clinical openings, job application portal, and talent recruitment.',
            ],
            'blog' => [
                'name' => 'Blog & Publications',
                'url' => route('blog'),
                'icon' => 'icon-file-word',
                'desc' => 'Clinical research articles, GCP advisories, and scientific hub.',
            ],
            'contact' => [
                'name' => 'Contact & Consultation',
                'url' => route('contact'),
                'icon' => 'icon-phone',
                'desc' => 'Study feasibility consultation, direct contacts, and location map.',
            ],
        ];

        return view('admin.seo.index', compact('settings', 'pages'));
    }

    /**
     * Update the dynamic Page SEO settings.
     */
    public function update(Request $request)
    {
        $rules = [
            'seo_global_robots' => ['nullable', 'string', 'max:255'],
            'seo_global_og_image' => ['nullable', 'string', 'max:500'],
        ];

        foreach (['home', 'about', 'services', 'careers', 'blog', 'contact'] as $page) {
            $rules["seo_{$page}_title"] = ['nullable', 'string', 'max:255'];
            $rules["seo_{$page}_description"] = ['nullable', 'string', 'max:500'];
            $rules["seo_{$page}_keywords"] = ['nullable', 'string', 'max:500'];
            $rules["seo_{$page}_canonical"] = ['nullable', 'url', 'max:500'];
            $rules["seo_{$page}_og_title"] = ['nullable', 'string', 'max:255'];
            $rules["seo_{$page}_og_description"] = ['nullable', 'string', 'max:500'];
            $rules["seo_{$page}_og_image"] = ['nullable', 'string', 'max:500'];
        }

        $validated = $request->validate($rules);

        foreach ($validated as $key => $value) {
            Setting::set($key, $value, 'seo');
        }

        Setting::clearCache();

        return redirect()->route('admin.seo.index')
            ->with('success', 'Dynamic Page SEO configurations successfully updated across all website pages.');
    }
}
