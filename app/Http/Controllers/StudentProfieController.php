<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StudentProfile;
use Auth;
use Image;
use App\User;

class StudentProfieController extends Controller
{
    
    /*Functions for Tutor Avatar*/
    public function profile()
    {
       
            
            return view('student.profile.StudentProfile');
      
        
    }

    public function update_avatar(Request $request){

        // Handle the user upload of avatar
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save( public_path('/images/avatar/' . $filename ) );

            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }

        return redirect('student-profile');

    }

}
