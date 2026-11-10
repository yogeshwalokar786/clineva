<?php

if (!function_exists('setting')) {
    /**
     * Retrieve a setting value or fallback.
     *
     * @param string $key
     * @param mixed $default
     * @return mixed
     */
    function setting(string $key, $default = null)
    {
        if (class_exists(\App\Models\Setting::class)) {
            try {
                return \App\Models\Setting::get($key, $default);
            } catch (\Throwable $e) {
                return $default;
            }
        }
        return $default;
    }
}
