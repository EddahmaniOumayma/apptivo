<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */

//      protected $redirectTo = RouteServiceProvider::HOME;

    private function redirectTo()

  
    {
        $user_email = \request()->email;

        $user = User::where('email', $user_email)->first();
      if ($user) {
        if ($user->hasRole('Admin')) {
           
            return redirect()->route('dashbord');
        } else {
            
            return redirect()->route('dashbordF');
        }
    }

  
    }
}
