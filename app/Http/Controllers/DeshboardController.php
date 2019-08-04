<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CompanyProfile;
use App\JobPost;
use Carbon\Carbon;
use App\Role;
use App\User;
use DB;
use File;
use Image;
use Illuminate\Support\Facades\Auth;
use App\JobApplication;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;


class DeshboardController extends Controller
{
    public function index(){
        return view('index');
    }
    public function jobs(){

        $obj_jobs=JobPost::join('company_profile','company_profile.user_id','=','job_posts.user_id')
        ->orderBy('id','DESC')
        ->select('job_posts.*','company_profile.logo')
        ->paginate(10);
        // return $obj_jobs;
        return view('jobs',[
            'obj_jobs'=>$obj_jobs,
            ]);
    }
    public function jobDetails($id){
        if(Auth::check()){
            $obj_job_app=JobApplication::where('user_id',Auth::user()->id)
            ->where('job_post_id',$id)->first();
        }else{
            $obj_job_app=null;
        }
        $obj_jobs=JobPost::join('company_profile','company_profile.user_id','=','job_posts.user_id')
        ->where('job_posts.id',$id)
        ->select('job_posts.*','company_profile.logo','company_profile.company_name','company_profile.website','company_profile.address')
        ->first();
        // return $obj_jobs;
        return view('job-details',[
            'obj_job_app'=>$obj_job_app,
            'obj_jobs'=>$obj_jobs
        ]);
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
            

    }

    public function jobSearch(Request $request){
  
        if($request->location=='Anywhere of Bangladesh'){
            
        $obj_jobs=JobPost::join('company_profile','company_profile.user_id','=','job_posts.user_id')
        
        ->where('job_posts.category',$request->category)
        ->where('job_posts.job_type',$request->job_type)
        ->orderBy('id','DESC')
        ->select('job_posts.*','company_profile.logo')
        ->paginate(10);
    }else{
        $obj_jobs=JobPost::join('company_profile','company_profile.user_id','=','job_posts.user_id')
        
        ->where('job_posts.category',$request->category)
        ->where('job_posts.location',$request->location)
        ->where('job_posts.job_type',$request->job_type)
        ->orderBy('id','DESC')
        ->select('job_posts.*','company_profile.logo')
        ->paginate(10);
    }
 
        return view('jobs',[
            'obj_jobs'=>$obj_jobs,
            ]);
    }
}
