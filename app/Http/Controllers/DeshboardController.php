<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;
use App\Role;
use App\User;
use DB;
use File;
use Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;


class DeshboardController extends Controller
{
    public function index(){
        return view('index');
    }
    public function jobs(){
        return view('jobs');
    }
    public function jobDetails(){
        return view('job-details');
    }
    public function dashboard(){
        return view('dashboard');
    }
    public function loginJobSeeker(){
        return view('login');
    }
    public function companyLogin(){
        return view('company-login');
    }
    public function companyReg(){
        return view('company-register');
    }
    public function jobSeekerRegister(){
        return view('register');
    }

    public function saveRegisterInfo(Request $request){
        // return $request;
        $this->validate($request, [
            'fname' => 'required|max:30|min:2',
            'lname' => 'required|max:30|min:2',
            'email' => 'email|unique:users,email|required',
            'phone_no' => 'required',
            'user_type' => 'required',
            'password' => ['required', 'min:6' ],
            
        ]);

            $user = new User();
            $user->fname = $request->fname;
            $user->lname = $request->lname;
            $user->email = $request->email; 
            $user->phone_no = $request->phone_no;
            $user->password = Hash::make($request->password);
            $user->save();
            if($request->user_type=='Job Seeker'){
                $user->attachRole(Role::where('name', 'Job Seeker')->first());
                Auth::login($user);
                return redirect('job-seeker-dashboard');
            }elseif($request->user_type=='Employer Seeker'){
                $user->attachRole(Role::where('name', 'Employer Seeker')->first());
                Auth::login($user); 
                return redirect('company-dashboard');
            }
            
            

             

            // return redirect()->route('user-login');
    }
}
