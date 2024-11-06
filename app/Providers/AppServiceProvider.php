<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
Use Carbon\Carbon;

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
    // Mengatur lokal aplikasi
    config(['app.locale' => 'id']); // Perbaikan di sini
    Carbon::setLocale('id');
}
}
