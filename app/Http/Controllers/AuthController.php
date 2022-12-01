<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function callback(Request $request)
    {
        $provider = $request->provider;
        $social = Socialite::driver($provider)->user();
        try {
            if ($provider == 'google') {
                $user = User::updateOrCreate([
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
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
