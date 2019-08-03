<?php

namespace App\Http\Controllers;
use App\CompanyProfile;
use App\JobPost;
use App\Role;
use App\User;
use DB;
use File;
use Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\JobApplication;
use App\jobSeekerProfile;

class CompanyController extends Controller
{
    public function companyDashboard(){
        return view('company-dashboard');
    }
    public function companyProfile(){
        $user_id=Auth::user()->id;
        $obj_company=CompanyProfile::where('user_id',$user_id)->first();
        return view('company-profile',['obj_company'=>$obj_company]);
    }
    public function saveCompanyProfileInfo(Request $request){
        $this->validate($request, [
            'company_name' => 'required',
            'display_name' => 'required',
            'company_type' => 'required',
            'address' => 'required',

        ]);
        $user_id=Auth::user()->id;
        $obj_company_v=CompanyProfile::where('user_id',$user_id)->first();
        // return $request;
        if(empty($obj_company_v)){
            $obj_company=new CompanyProfile;
            $obj_company->company_name=$request->company_name;
            $obj_company->user_id=Auth::user()->id;
            $obj_company->display_name=$request->display_name;
            $obj_company->company_type=$request->company_type;
            $obj_company->organization_type=$request->organization_type;
            $obj_company->industry_type=$request->industry_type;
            $obj_company->address=$request->address;
            $obj_company->districts=$request->districts;
            $obj_company->post_code=$request->post_code;
            $obj_company->billing_address=$request->billing_address;
            $obj_company->employeer_type=$request->employeer_type;
            $obj_company->website=$request->website;
            if ($request->file('logo')) {
                $this->validate($request, [
                    'logo' => 'required|mimes:jpg,JPG,JPEG,jpeg,png|max:2048',
                ]);
                
                $profilelogo = $request->file('logo');
                $fileType = $profilelogo->getClientOriginalExtension();
                $imageName = date('YmdHis') . "logo" . rand(1, 100) . '.' . $fileType;
                $directory = 'images/';
                $imageUrl = $directory . $imageName;
                Image::make($profilelogo)->save($imageUrl);
                $obj_company->logo = $imageUrl;
            }
    
            $obj_company->save();
        }else{
            
            $obj_company_v->company_name=$request->company_name; 
            $obj_company_v->display_name=$request->display_name;
            $obj_company_v->company_type=$request->company_type;
            $obj_company_v->organization_type=$request->organization_type;
            $obj_company_v->industry_type=$request->industry_type;
            $obj_company_v->address=$request->address;
            $obj_company_v->districts=$request->districts;
            $obj_company_v->post_code=$request->post_code;
            $obj_company_v->billing_address=$request->billing_address;
            $obj_company_v->employeer_type=$request->employeer_type;
            $obj_company_v->website=$request->website;
            if ($request->file('logo')) {
                $this->validate($request, [
                    'logo' => 'required|mimes:jpg,JPG,JPEG,jpeg,png|max:2048',
                ]);
                if (File::exists($obj_company_v->logo)) {
                    unlink($obj_company_v->logo);
                }
                $profilelogo = $request->file('logo');
                $fileType = $profilelogo->getClientOriginalExtension();
                $imageName = date('YmdHis') . "logo" . rand(1, 100) . '.' . $fileType;
                $directory = 'images/';
                $imageUrl = $directory . $imageName;
                Image::make($profilelogo)->save($imageUrl);
                $obj_company_v->logo = $imageUrl;
            }
    
            $obj_company_v->save();
        }
        
        
        return redirect()->back()->with('message','Succssfully Saved.');
    }
    public function postJob(){
        return view('employee-and-admin-post-job');
    }
    public function postNewJob(Request $request){
        $this->validate($request, [
            'job_title' => 'required',
            'job_type' => 'required',
            'description' => 'required',
            'gender' => 'required',

        ]);
        $user_id=Auth::user()->id;
  
        $obj_jobPost=new JobPost();
        $obj_jobPost->job_title=$request->job_title;
        $obj_jobPost->job_type=$request->job_type;
        $obj_jobPost->description=$request->description;
        $obj_jobPost->exp=$request->exp;
        $obj_jobPost->gender=$request->gender;
        $obj_jobPost->extra_facilites=$request->extra_facilites;
        $obj_jobPost->last_date=$request->last_date;
        $obj_jobPost->no_of_vacancies=$request->no_of_vacancies;
        $obj_jobPost->location=$request->location;
        $obj_jobPost->salary=$request->salary;
        $obj_jobPost->additional_requirements=$request->additional_requirements;
        $obj_jobPost->edu_req=$request->edu_req;
        $obj_jobPost->user_id=$user_id;
        $obj_jobPost->save();

        return redirect()->back()->with('message','Save successfuly');
    }

    public function manageJobList($id){
        $obj_jobPost=JobPost::where('user_id',$id)
        ->get();

        return view('manage-job-list',['obj_jobPost'=>$obj_jobPost]);

    }
    public function candidatesList($id){
        $obj_jobPost=JobApplication::where('job_post_id',$id)
        ->join('job_seeker_profile','job_seeker_profile.user_id','=','job_applications.user_id')
        ->select('job_seeker_profile.*')
        ->get();

        // return $obj_jobPost;

        return view('candidates-list',['obj_jobPost'=>$obj_jobPost]);

    }
    public function candidateProfile($id){
 
        $seeker_profile=jobSeekerProfile::where('job_seeker_profile.id', $id)
        ->join('users','users.id','=','job_seeker_profile.user_id')
        ->select('job_seeker_profile.*','users.email')->first();

        return view('candidate-profile',['seeker_profile'=>$seeker_profile]);
        
    }
}
