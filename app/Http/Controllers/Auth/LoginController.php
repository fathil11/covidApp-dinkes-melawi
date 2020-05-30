<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('public.login');
    }

    public function redirectTo()
    {
        $email = Auth::user()->email;
        switch ($email) {
            case 'admin1@dinkesmelawi.com':
                return '/admin';

            case 'admin2@dinkesmelawi.com':
                return '/admin';

            case 'admin3@dinkesmelawi.com':
                return '/admin';

            case 'post@dinkesmelawi.com':
                return '/admin/content';
                break;

            default:
                    return '/admin-puskesmas';
                break;
        }
    }
}
