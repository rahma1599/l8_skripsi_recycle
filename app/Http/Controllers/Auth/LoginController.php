<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
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
    // protected $redirectTo = RouteServiceProvider::HOME;
    // protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function username()
    {
        return 'nik';
    }

    public function showLoginForm()
    {
        $page = "login";
        return view('auth.login',compact('page'));
    }

    public function postLogin(){
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'nik' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('nik', 'password');
        if (Auth::attempt($credentials)){
            if (Auth::user()->level == 'admin'){
                return redirect('admin/dashboard');
            }elseif(Auth::user()->level == 'supervisor'){
                return redirect('supervisor/index');
            }
        }

        return redirect("login");
    }
}
