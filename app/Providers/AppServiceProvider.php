<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Cache;
use App\Models\Setting;

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
        $this->app->singleton('settings', function () {
            $defaults = [
                'theme' => 'light',
            ];

            return array_merge($defaults, Cache::rememberForever('settings', function () {
                return Setting::all()->pluck('value', 'key')->toArray();
            }));
        });
    }
}
