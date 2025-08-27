<?php

use Galtsevt\AppConf\app\Models\Setting;
use Illuminate\Support\Facades\Cache;

function settings(string $key, $group = 'main', $default = null)
{
    if (!$settings = Cache::get('admin_settings' . $group, null)) {
        $settings = Setting::getByGroup($group);
        Cache::put('admin_settings' . $group, $settings);
    }

    return $settings[$key] ?? $default;
}
