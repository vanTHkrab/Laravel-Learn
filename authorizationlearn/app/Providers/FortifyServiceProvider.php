<?php

namespace App\Providers;

use App\Actions\Fortify\CreateNewUser;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use App\Actions\Fortify\UpdateUserProfileInformation;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use Laravel\Fortify\Fortify;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // You can register any application services here
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Fortify::createUsersUsing(CreateNewUser::class);
        Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);
        Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);
        Fortify::resetUserPasswordsUsing(ResetUserPassword::class);

        Fortify::loginView(function () {
            if (request()->is('admin/*')) {
                return view('auth.admin-login'); // ใช้หน้า login ของ admin
            }
            return view('auth.login');
        });

        Fortify::authenticateUsing(function (Request $request) {
            $admin = Admin::where('email', $request->email)->first();

            if ($admin && Hash::check($request->password, $admin->password)) {
                Auth::guard('admin')->login($admin); // ใช้ guard 'admin'
                return redirect()->intended('/admin/home'); // เปลี่ยน redirect เส้นทาง
            }

            return false;
        });
    }
}
