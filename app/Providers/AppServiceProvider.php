<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
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
        if (Schema::hasTable('settings')) {
            $settings = DB::table('settings')->pluck('value', 'key')->toArray();
            View::share('siteSettings', $settings);
        }

        if (Schema::hasTable('client_logos')) {
            $clientLogos = DB::table('client_logos')
                ->where('active_flag', 1)
                ->orderBy('order_no')
                ->orderByDesc('created_at')
                ->get();
            View::share('clientLogos', $clientLogos);
        }

        if (Schema::hasTable('testimonials')) {
            $testimonials = DB::table('testimonials')
                ->where('active_flag', 1)
                ->orderBy('order_no')
                ->orderByDesc('created_at')
                ->get();
            View::share('testimonials', $testimonials);
        }

        if (Schema::hasTable('team_members')) {
            $teamMembers = DB::table('team_members')
                ->where('active_flag', 1)
                ->orderBy('order_no')
                ->orderByDesc('created_at')
                ->get();
            View::share('teamMembers', $teamMembers);
        }
    }
}
