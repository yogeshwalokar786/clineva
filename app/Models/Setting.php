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
