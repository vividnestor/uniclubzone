<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Brackets\CraftablePro\Settings\GeneralSettings;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;


class GoogleLoginController extends Controller
{
    public function redirectToGoogle(): RedirectResponse
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback(): RedirectResponse
    {
        $googleUser = Socialite::driver('google')->user();

        if (!preg_match('/@paragon\.com$/', $googleUser->email)) {

            session()->flash('error', 'Only Gmail accounts are allowed.');

            $routeName = app(GeneralSettings::class)->default_route;

            $redirectUrl = url($routeName);

            return Inertia::location($redirectUrl);
        }

        $user = config('craftable-pro.craftable_pro_user_model')::whereEmail($googleUser->email)->first();

        if ($user) {

            $user->markEmailAsVerified();

            Auth::guard('craftable-pro')->login($user);
        } else {
            $data = [
                'first_name' => $googleUser->user['given_name'],
                'last_name' => $googleUser->user['family_name'],
                'email' => $googleUser->email,
                'password' => Hash::make(Str::random(16)),
            ];

            $user = config('craftable-pro.craftable_pro_user_model')::create($data);

            $user->assignRole(config('craftable-pro.self_registration.default_role'));

            $user->markEmailAsVerified();

            Auth::guard('craftable-pro')->login($user);
        }

        return redirect()->intended('/admin/dashboard');
    }
}
