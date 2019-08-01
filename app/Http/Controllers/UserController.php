<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\User;
use DB;
use File;
use Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{

    public function resetPassword(Request $request)
    {
        $this->validate($request, [
            'password' => ['required',
                'min:6',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{5,}$/',
                'confirmed'],
            'password_confirmation' => 'required_with:password|same:password',

        ]);
        $password = $request->password;

        $user = User::where('email', $request->email)->first();
        if (!$user) return redirect()->to('login'); //or wherever you want

        $user->password = Hash::make($password);
        $user->update(); //or $user->save();

        //do we log the user directly or let them login and try their password for the first time ? if yes
        Auth::login($user);

        // If the user shouldn't reuse the token later, delete the token
        DB::table('password_resets')->where('email', $user->email)->delete();

        if ($user->hasRole('Admin')) {
            return redirect('/admin/dashboard');
        } else if ($user->hasRole('Super Admin')) {

            return redirect('/admin/dashboard');
        } else if ($user->hasRole('Manager')) {
            return redirect('/admin/dashboard');
      
        } else {
            $request->session()->invalidate();
            return redirect('/');
        }
    }

}
