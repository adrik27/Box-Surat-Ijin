<?php

namespace App\Providers;

use App\Models\User;
use App\Rules\RecaptchaRule;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

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
        Validator::extend('recaptcha', RecaptchaRule::class);
        Gate::define('admin', function (User $User) {
            return $User->Role_id == 1;
        });
        Gate::define('kabag', function (User $User) {
            return $User->Role_id == 2;
        });
        Gate::define('hrd', function (User $User) {
            return $User->Role_id == 3;
        });
        Gate::define('pegawai', function (User $User) {
            return $User->Role_id == 4;
        });
    }
}
