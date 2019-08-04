<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jobSeekerProfile;
use App\Role;
use App\User;
use DB;
use File;
use Image;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\JobApplication;
use App\Message;

class JobSeekerController extends Controller
{
    public function jobSeekerDashboard(){
        $user_id=Auth::user()->id;
        $seeker_profile=jobSeekerProfile::where('user_id',$user_id)->first();

        return view('job-seeker-dashboard',['seeker_profile'=>$seeker_profile]);
    }
    public function jobSeekerProfile(){
        $user_id=Auth::user()->id;
        $seeker_profile=jobSeekerProfile::where('user_id',$user_id)->first();

        return view('job-seeker-profile',['seeker_profile'=>$seeker_profile]);
    }
    public function saveJobSeekerProfileInfo(Request $request){
        // return$request;
        $this->validate($request, [
            'father_name' => 'required',
            'nationality' => 'required',
            'contact_no' => 'required',
            'permanent_district' => 'required',
            'present_district' => 'required',
            'marital_status' => 'required',

        ]);
        $user_id=Auth::user()->id;
        $seeker_profile=jobSeekerProfile::where('user_id',$user_id)->first();

        if(empty($seeker_profile)){
        $obj_seeker_profile=new jobSeekerProfile();
        $obj_seeker_profile->user_id=Auth::user()->id;
        $obj_seeker_profile->fname=Auth::user()->fname;
        $obj_seeker_profile->lname=Auth::user()->lname;
        $obj_seeker_profile->father_name=$request->father_name;
        $obj_seeker_profile->mother_name=$request->mother_name;
        $obj_seeker_profile->contact_no=$request->contact_no;
        $obj_seeker_profile->nid=$request->nid;
        $obj_seeker_profile->passport_no=$request->passport_no;
        $obj_seeker_profile->birth_certificate=$request->birth_certificate;
        $obj_seeker_profile->nationality=$request->nationality;
        $obj_seeker_profile->permanent_district=$request->permanent_district;
        $obj_seeker_profile->permanent_poster_code=$request->permanent_poster_code;
        $obj_seeker_profile->permanent_address=$request->permanent_address;
        $obj_seeker_profile->linkedin_profile=$request->linkedin_profile;
        $obj_seeker_profile->present_district=$request->present_district;
        $obj_seeker_profile->present_poster_code=$request->present_poster_code;
        $obj_seeker_profile->present_address=$request->present_address;
        $obj_seeker_profile->git_profile=$request->git_profile;
        $obj_seeker_profile->gender=$request->gender;
        $obj_seeker_profile->marital_status=$request->marital_status;
        $obj_seeker_profile->DOB=$request->DOB;
        $obj_seeker_profile->career_objective=$request->career_objective;

        if ($request->file('image')) {
            $this->validate($request, [
                'image' => 'required|mimes:jpg,JPG,JPEG,jpeg,png|max:2048',
            ]);
           
            $profilelogo = $request->file('image');
            $fileType = $profilelogo->getClientOriginalExtension();
            $imageName = date('YmdHis') . "image" . rand(1, 100) . '.' . $fileType;
            $directory = 'images/';
            $imageUrl = $directory . $imageName;
            Image::make($profilelogo)->save($imageUrl);
            $obj_seeker_profile->image = $imageUrl;
        }
     
        $obj_seeker_profile->save();
        }else{
            $seeker_profile->user_id=Auth::user()->id;
            $seeker_profile->father_name=$request->father_name;
            $seeker_profile->mother_name=$request->mother_name;
            $seeker_profile->contact_no=$request->contact_no;
            $seeker_profile->nid=$request->nid;
            $seeker_profile->passport_no=$request->passport_no;
            $seeker_profile->birth_certificate=$request->birth_certificate;
            $seeker_profile->nationality=$request->nationality;
            $seeker_profile->permanent_district=$request->permanent_district;
            $seeker_profile->permanent_poster_code=$request->permanent_poster_code;
            $seeker_profile->permanent_address=$request->permanent_address;
            $seeker_profile->linkedin_profile=$request->linkedin_profile;
            $seeker_profile->present_district=$request->present_district;
            $seeker_profile->present_poster_code=$request->present_poster_code;
            $seeker_profile->present_address=$request->present_address;
            $seeker_profile->git_profile=$request->git_profile;
            $seeker_profile->gender=$request->gender;
            $seeker_profile->marital_status=$request->marital_status;
            $seeker_profile->DOB=$request->DOB;
            $seeker_profile->career_objective=$request->career_objective;

            if ($request->file('image')) {
                $this->validate($request, [
                    'image' => 'required|mimes:jpg,JPG,JPEG,jpeg,png|max:2048',
                ]);
                if (File::exists($seeker_profile->image)) {
                    unlink($seeker_profile->image);
                }
                $profilelogo = $request->file('image');
                $fileType = $profilelogo->getClientOriginalExtension();
                $imageName = date('YmdHis') . "image" . rand(1, 100) . '.' . $fileType;
                $directory = 'images/';
                $imageUrl = $directory . $imageName;
                Image::make($profilelogo)->save($imageUrl);
                $seeker_profile->image = $imageUrl;
            }
         
            $seeker_profile->save();
        }
        return Redirect()->back()->with('message','Save successfully');
    }
    public function appllyNow($id){
        if(Auth::check()){
            // return $id;
            $obj_job_app=new JobApplication();
            $obj_job_app->user_id=Auth::user()->id;
            $obj_job_app->job_post_id=$id;
            $obj_job_app->save();
            return redirect()->back()->with('message','Applyed Succefully.');

        }else{
            return redirect()->back()->with('error_m','Please Login For Apply.');
        }
        
    }
    public function viewMessage(){
        $obj_msg=Message::where('receiver_id',Auth::user()->id)->get();
        // return $obj_msg;
        return view('view-message',['obj_msg'=>$obj_msg]);
    }
}
