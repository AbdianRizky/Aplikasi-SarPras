<?php

namespace App\Providers;

use Laravel\Fortify\Fortify;
use App\Actions\Fortify\CreateNewUser;
use Illuminate\Support\ServiceProvider;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use App\Actions\Fortify\UpdateUserProfileInformation;

class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Fortify::createUsersUsing(CreateNewUser::class);
        Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);
        Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);
        Fortify::resetUserPasswordsUsing(ResetUserPassword::class);

        // ! Login Route
        Fortify::loginView(function () {
            return view('pages.auth.login');
        });

        // ! Register Route
        Fortify::registerView(function () {
            return view('pages.auth.register');
        });

        // ! Password reset Route
        Fortify::requestPasswordResetLinkView(function () {
            return view('pages.auth.forgot-password');
        });

        // ! Resetting The Password link
        Fortify::resetPasswordView(function ($request) {
            return view('pages.auth.reset-password', ['request' => $request]);
        });
    }
}
