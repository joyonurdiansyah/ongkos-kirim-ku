<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

class SocialController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->stateless()->redirect();
    }

    public function googleCallback(Request $request)
    {
        try {
            $googleUser = Socialite::driver('google')->stateless()->user();
            $avatar = $googleUser->getAvatar();
            $user = \App\Models\User::where('email', $googleUser->email)->first();
    
            if ($user) {
                $user->avatar = $avatar;
                $user->login_expiry = Carbon::now()->addDay();
                $user->save();
    
                Auth::login($user);
                Session::put('avatar', $avatar);
    
                return view('pages.home', [
                    'user' => $user,
                    'avatar' => $avatar,
                ]);
            } else {
                return view('not-found.user-not-found', [
                    'user' => null
                ]);
            }
        } catch (\Exception $e) {
            return redirect('/')->with('error', 'Authentication failed, please try again.');
        }
    }
}
