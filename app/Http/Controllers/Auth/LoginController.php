<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
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
    protected function authenticated(Request $request, $user)
    {
        if($user->hasRole('Job Seeker')) { 
          return redirect('job-seeker-dashboard'); 
        
        } else if ($user->hasRole('Employer Seeker')){

            return redirect('company-dashboard'); 
        } else if ($user->hasRole('Admin')){

            return redirect('company-dashboard');
        }else{
            $request->session()->invalidate();
            return redirect()->back();
        }
    }



    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

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
