<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Schema;

class Setting extends Model
{
    use HasFactory;

    protected $table = 'settings';

    protected $fillable = [
        'key',
        'value',
        'group',
    ];

    const CACHE_KEY = 'site_settings_cache_v1';

    /**
     * Default settings dictionary when database is empty.
     */
    public static function defaults(): array
    {
        return [
            'site_name' => 'Clineva Research Laboratories',
            'contact_email' => 'priti.gotpagar@clineva.in',
            'contact_phone' => '+91 9870484499',
            'contact_address' => 'D-318, Phase II, Turbhe MIDC, TTC Industrial Area, Navi Mumbai, Maharashtra 400705',
            'working_hours' => 'Mon – Sat: 9:00 AM – 6:00 PM',
            'footer_description' => 'Clineva Research Laboratories is a premier global Clinical Research Organization (CRO) delivering Phase I–IV clinical operations, BA/BE studies, bioanalytical PK/PD investigations, and regulatory intelligence across global markets.',
            'copyright_text' => '© ' . date('Y') . ' Clineva Research Laboratories. All rights reserved.',
            'social_facebook' => 'https://facebook.com',
            'social_twitter' => 'https://twitter.com',
            'social_linkedin' => 'https://linkedin.com',
            'social_instagram' => 'https://instagram.com',
            'social_youtube' => 'https://youtube.com',

            // Dynamic Call to Action (CTA) with Location & Consultation
            'cta_title' => 'Accelerate Your Clinical Studies with Clineva',
            'cta_subtitle' => 'Partner with our GCP-compliant CRO network for Phase I–IV trials, bioanalytical studies, BA/BE testing, and CDSCO regulatory intelligence.',
            'cta_btn_text' => 'Schedule Sponsor Consultation',
            'cta_btn_url' => '/contact',
            'cta_secondary_btn_text' => 'Call Our Scientists',
            'cta_location_badge' => 'Turbhe MIDC, Navi Mumbai, India',
            'google_map_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.8385078502014!2d73.01893427599026!3d19.070798952136015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c146e29788d7%3A0x6b44766ecad7f202!2sTurbhe%20MIDC%2C%20Navi%20Mumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin',
            'google_map_directions_url' => 'https://maps.google.com/?q=D-318,+Phase+II,+Turbhe+MIDC,+TTC+Industrial+Area,+Navi+Mumbai,+Maharashtra+400705',

            // Dynamic Page SEO - Home
            'seo_home_title' => 'Clineva Research Laboratories - Leading Global CRO & BA/BE Services',
            'seo_home_description' => 'Clineva Research Laboratories is an ISO 9001 & GCP compliant Clinical Research Organization (CRO) delivering Phase I–IV clinical operations, BA/BE studies, and bioanalysis.',
            'seo_home_keywords' => 'clinical research organization, CRO India, BA/BE studies, clinical trials, Phase I-IV trials, CDSCO regulatory, bioanalytical LC-MS/MS, Clineva',

            // Dynamic Page SEO - About
            'seo_about_title' => 'About Us - Clineva Research Laboratories | Mission, Quality & Leadership',
            'seo_about_description' => 'Learn about Clineva Research Laboratories, our scientific leadership, global compliance standards (ICH-GCP, ISO 27001), and vision for clinical research excellence.',
            'seo_about_keywords' => 'about Clineva, clinical leadership, CRO company India, ethical clinical research, GCP compliance',

            // Dynamic Page SEO - Services
            'seo_services_title' => 'Clinical Research & BA/BE Services - Clineva Research Laboratories',
            'seo_services_description' => 'Explore comprehensive CRO services: Clinical Trial Operations, Project Management, BA/BE CRO Selection, Medical Writing, and Regulatory Affairs.',
            'seo_services_keywords' => 'clinical trial services, BA/BE study services, medical writing, regulatory submissions, bioanalytical PK/PD',

            // Dynamic Page SEO - Careers
            'seo_careers_title' => 'Careers in Clinical Research - Join Clineva Research Laboratories',
            'seo_careers_description' => 'Discover rewarding career opportunities in clinical trial operations, biostatistics, medical writing, and quality assurance at Clineva.',
            'seo_careers_keywords' => 'clinical research jobs, CRO careers India, clinical trial coordinator, medical writer vacancy, bioanalytical jobs',

            // Dynamic Page SEO - Blog
            'seo_blog_title' => 'Clinical Research Insights & Regulatory Articles - Clineva Knowledge Hub',
            'seo_blog_description' => 'Authoritative scientific whitepapers, regulatory updates, ICH-GCP advisories, and BA/BE clinical trial insights from Clineva researchers.',
            'seo_blog_keywords' => 'clinical research blog, CRO whitepapers, ICH-GCP updates, bioequivalence guidance, CDSCO regulatory news',

            // Dynamic Page SEO - Contact
            'seo_contact_title' => 'Contact Us - Clineva Research Laboratories | Navi Mumbai Facility',
            'seo_contact_description' => 'Get in touch with Clineva Research Laboratories for study inquiries, trial feasibility discussions, or regulatory consultations in Navi Mumbai, India.',
            'seo_contact_keywords' => 'contact Clineva, clinical trial inquiry, CRO contact Navi Mumbai, sponsor consultation',

            // Global SEO Defaults
            'seo_global_robots' => 'index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1',
            'seo_global_og_image' => '/image/logo/logo-main.png',
        ];
    }

    /**
     * Get dynamic SEO parameters for a specific page with fallbacks.
     */
    public static function getPageSeo(string $page): array
    {
        $all = self::getAll();
        $defaults = self::defaults();
        $prefix = 'seo_' . $page . '_';

        $title = $all[$prefix . 'title'] ?? ($defaults[$prefix . 'title'] ?? (self::get('site_name') . ' - ' . ucfirst($page)));
        $description = $all[$prefix . 'description'] ?? ($defaults[$prefix . 'description'] ?? self::get('footer_description'));
        $keywords = $all[$prefix . 'keywords'] ?? ($defaults[$prefix . 'keywords'] ?? 'clinical research, CRO, BA/BE studies, clinical trials, Clineva');
        $canonical = $all[$prefix . 'canonical'] ?? url()->current();
        $ogTitle = $all[$prefix . 'og_title'] ?? $title;
        $ogDescription = $all[$prefix . 'og_description'] ?? $description;
        $ogImage = $all[$prefix . 'og_image'] ?? ($all['seo_global_og_image'] ?? asset('image/logo/logo-main.png'));
        $robots = $all['seo_global_robots'] ?? 'index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1';

        return [
            'title' => $title,
            'description' => $description,
            'keywords' => $keywords,
            'canonical' => $canonical,
            'og_title' => $ogTitle,
            'og_description' => $ogDescription,
            'og_image' => $ogImage,
            'robots' => $robots,
        ];
    }

    /**
     * Get a setting by key with fallback.
     */
    public static function get(string $key, $default = null)
    {
        $all = self::getAll();
        return $all[$key] ?? ($default ?? (self::defaults()[$key] ?? null));
    }

    /**
     * Set a setting by key.
     */
    public static function set(string $key, $value, string $group = 'general')
    {
        try {
            self::updateOrCreate(
                ['key' => $key],
                ['value' => $value, 'group' => $group]
            );
            self::clearCache();
        } catch (\Throwable $e) {}
    }

    /**
     * Get all settings merged with defaults.
     */
    public static function getAll(): array
    {
        $defaults = self::defaults();

        try {
            return Cache::remember(self::CACHE_KEY, 86400, function () use ($defaults) {
                if (!Schema::hasTable('settings')) {
                    return $defaults;
                }

                $dbSettings = self::all()->pluck('value', 'key')->toArray();
                return array_merge($defaults, array_filter($dbSettings, fn($val) => !is_null($val)));
            });
        } catch (\Throwable $e) {
            return $defaults;
        }
    }

    /**
     * Clear cached settings.
     */
    public static function clearCache(): void
    {
        Cache::forget(self::CACHE_KEY);
    }
}
