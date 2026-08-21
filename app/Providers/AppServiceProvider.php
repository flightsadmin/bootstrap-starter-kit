<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\ServiceProvider;

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
