<?php

namespace App\Infrastructure\Persistence\Eloquent\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class SiteSetting extends Model
{
    protected $primaryKey = 'key';

    protected $keyType = 'string';

    public $incrementing = false;

    protected $fillable = ['key', 'value', 'group', 'type', 'is_public'];

    protected $casts = [
        'is_public' => 'boolean',
    ];

    protected static function booted()
    {
        static::saved(function ($setting) {
            Cache::forget("site_setting:{$setting->key}");
            Cache::forget("site_settings_group:{$setting->group}");
        });

        static::deleted(function ($setting) {
            Cache::forget("site_setting:{$setting->key}");
            Cache::forget("site_settings_group:{$setting->group}");
        });
    }

    /**
     * Get a setting value with optional default.
     */
    public static function get(string $key, mixed $default = null): mixed
    {
        return Cache::remember("site_setting:{$key}", 300, function () use ($key, $default) {
            $setting = static::find($key);

            return $setting?->value ?? $default;
        });
    }

    /**
     * Set a setting value and clear cache.
     */
    public static function set(string $key, mixed $value): void
    {
        static::updateOrCreate(['key' => $key], ['value' => $value]);
        Cache::forget("site_setting:{$key}");
    }

    /**
     * Get all settings for a group as key-value array.
     */
    public static function getGroup(string $group): array
    {
        return Cache::remember("site_settings_group:{$group}", 300, function () use ($group) {
            return static::where('group', $group)
                ->pluck('value', 'key')
                ->toArray();
        });
    }
}
