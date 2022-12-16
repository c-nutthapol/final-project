<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\SocialMedia;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function callback(Request $request)
    {
        try {
            $provider = $request->provider;
            $social = Socialite::driver($provider)->user();

            if ($provider == 'google') {
                $user = SocialMedia::updateOrCreate([
                    'provider_id' => $social->id,
                ], [
                    'email' => $social->email,
                    'provider' => $provider,
                    'provider_id' => $social->id,
                ]);
                Auth::login($user);
                return redirect()->route('client.home');
            } else {
                return redirect()->route('client.home');
            }
        } catch (\Exception $e) {
            return redirect()->route('client.home');
        }
    }

    public function login(Request $request)
    {
        $redirect = $request->redirect;
        return view('client.auth.login', compact('redirect'));
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('client.home');
    }

    public function register()
    {
        return view('client.auth.register');
    }

    public function account()
    {
        return view('client.auth.account');
    }
}
