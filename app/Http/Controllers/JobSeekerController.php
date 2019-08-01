<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobSeekerController extends Controller
{
    public function jobSeekerDashboard(){
        return view('job-seeker-dashboard');
    }
}
