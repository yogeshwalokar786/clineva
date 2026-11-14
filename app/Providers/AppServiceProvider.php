<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Setting;

// Ensure helper is loaded
if (file_exists(app_path('helpers.php'))) {
    require_once app_path('helpers.php');
}

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Force HTTPS in production, on reverse proxy (Hostinger/Cloudflare), or when request is secure
        if (config('app.env') === 'production' || request()->isSecure() || request()->header('X-Forwarded-Proto') === 'https' || (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')) {
            \Illuminate\Support\Facades\URL::forceScheme('https');
        }

        // Share site settings globally with all views
        try {
            $settings = Setting::getAll();
            View::share('settings', $settings);
            View::share('siteSettings', $settings);
        } catch (\Throwable $e) {
            $defaults = Setting::defaults();
            View::share('settings', $defaults);
            View::share('siteSettings', $defaults);
        }
    }
}
