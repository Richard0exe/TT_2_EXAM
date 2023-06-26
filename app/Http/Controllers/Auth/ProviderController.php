<?php
namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class ProviderController extends Controller
{
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider)
{
    try {
        $socialUser = Socialite::driver($provider)->user();
        $user = User::where('email', $socialUser->getEmail())->first();

        if ($user) {
            // User exists, associate the Google account with the existing user
            $user->provider = $provider;
            $user->provider_id = $socialUser->getId();
            $user->provider_token = $socialUser->token;
            $user->save();

            Auth::login($user);
            return redirect('/dashboard');
        } else {
            // User doesn't exist, create a new user record
            $newUser = User::create([
                'name' => $socialUser->getName(),
                'email' => $socialUser->getEmail(),
                'username' => User::generateUserName($socialUser->getNickName()),
                'provider' => $provider,
                'provider_id' => $socialUser->getId(),
                'provider_token' => $socialUser->token,
                'email_verified_at' => now()
            ]);

            Auth::login($newUser);
            return redirect('/dashboard');
        }
    } catch (\Exception $e) {
        return redirect('/login');
    }
}
}