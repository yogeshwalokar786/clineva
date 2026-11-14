<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Show the general settings management form.
     */
    public function index()
    {
        $settings = Setting::getAll();
        return view('admin.settings.index', compact('settings'));
    }

    /**
     * Update the website general settings.
     */
    public function update(Request $request)
    {
        $validated = $request->validate([
            'site_name' => ['required', 'string', 'max:255'],
            'contact_email' => ['required', 'email', 'max:255'],
            'contact_phone' => ['required', 'string', 'max:50'],
            'contact_address' => ['nullable', 'string', 'max:500'],
            'working_hours' => ['nullable', 'string', 'max:255'],
            'footer_description' => ['nullable', 'string', 'max:1000'],
            'copyright_text' => ['nullable', 'string', 'max:255'],
            'social_facebook' => ['nullable', 'url', 'max:500'],
            'social_twitter' => ['nullable', 'url', 'max:500'],
            'social_linkedin' => ['nullable', 'url', 'max:500'],
            'social_instagram' => ['nullable', 'url', 'max:500'],
            'social_youtube' => ['nullable', 'url', 'max:500'],
        ]);

        foreach ($validated as $key => $value) {
            Setting::set($key, $value);
        }

        Setting::clearCache();

        return redirect()->route('admin.settings.index')
            ->with('success', 'Website general settings have been successfully updated.');
    }
}
