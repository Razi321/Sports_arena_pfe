<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
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
    // * @var string
     */
    //protected $redirectTo = RouteServiceProvider::HOME;
    protected function authenticated( $request, $user) {
        if ($user->role == 'Admin') {
            return redirect('/dashboardAdmin');
        } else if ($user->role == 'Manager') {
            return redirect('/dashboardManager');
        }else if ($user->role == 'Owner') {
            return redirect('/dashboardOwner');
        }
        else {
            return redirect('/home');
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
