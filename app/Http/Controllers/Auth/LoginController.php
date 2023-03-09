<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;
     public function showAdminLoginForm()
{
    return view('auth.loginAdmin');
}



public function authenticated(Request $request)
{
    $user_email = $request->email;

    $user = User::where('email', $user_email)->first();

    dd($user->role);

    // if ($user) {
    //     if ($user->hasRole('admin')) {
    //         return redirect('/admin/index');
    //     } else {
    //         return redirect('/user/index');
    //     }
    // }
}



    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
