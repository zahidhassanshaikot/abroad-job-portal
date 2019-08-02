<?php

namespace App\Http\Controllers;
use App\CompanyProfile;
use App\Role;
use App\User;
use DB;
use File;
use Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
}
