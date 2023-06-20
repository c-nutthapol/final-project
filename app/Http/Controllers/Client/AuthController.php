<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Episode;
use App\Models\Quiz;
use App\Models\SocialMedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Laravel\Socialite\Facades\Socialite;
use Vinkla\Hashids\Facades\Hashids;

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

    public function authCoursesItem()
    {
        return view('client.auth.mycourses.index');
    }

    public function authCoursesView($id)
    {
        $did = Hashids::decodeHex($id);

        if (!auth()->user()->check_course($did)) {
            return redirect()->route('client.courses.detail', $id);
        }
        return view('client.auth.mycourses.view', compact('id'));
    }

    public function authCoursesLecture($id, ?Request $request)
    {
        $did = Hashids::decode($id);
        if ($did) {
            $tid = $did[0];
            $cid = $did[1];
            $sid = $did[2];
            $eqid = $did[3];
        } else {
            return redirect()->route('client.home');
        }


        $tidHash = Hashids::encodeHex("{$tid}");
        $cidHash = Hashids::encodeHex("{$cid}");
        $sidHash = Hashids::encodeHex("{$sid}");
        $eqidHash = Hashids::encodeHex("{$eqid}");

        if (!auth()->user()->check_course($cid)) {
            return redirect()->route('client.courses.detail', $cidHash);
        }
        $course = Course::find($cid);
        $ep = false;
        $quz = false;
        if ($tid == 100) {
            $ep = Episode::find($eqid);
        } elseif ($tid == 200) {
            $quz = Quiz::find($eqid);
        } else {
            return redirect()->route('client.home');
        }
        $second = 0;
        if ($request->s) {
            $second = $request->s;
        }

        return view('client.courses.lecture.index', compact(
            'tid',
            'cid',
            'tidHash',
            'cidHash',
            'sidHash',
            'eqidHash',
            'course',
            'ep',
            'quz',
            'second'
        ));
    }

    public function DownloadFile(Request $request)
    {
        try {
            $path = Storage::disk('public')->exists($request->path) ? Storage::disk('public')->path($request->path) : false;
            return response()->download($path, $request->name);
        } catch (\Exception $e) {
            return abort(500);
        }
    }
}
