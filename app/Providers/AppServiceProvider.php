<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        $this->app->singleton('settings', function () {
            return Cache::rememberForever('settings', function () {
                return Setting::all()->pluck('value', 'key')->toArray();
            });
        });
    }
}
