<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StudentProfile;
use App\FriendRequest;
use App\StudentRegisterCourse;
use Auth;
use Image;
use App\User;

class StudentProfieController extends Controller
{
    
    /*Functions for Tutor Avatar*/
    public function profile()
    {
       $id = Auth::id();
       $course= StudentRegisterCourse::where('user_id' ,'=', $id)->get();
        return view('student.profile.StudentProfile', compact('course'));
        
    }

    public function updat_profile(Request $request){

        $validator = $request->validate([

            'education' => 'string',
            'location' => 'string',
            'description' => 'string',

        ]);
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save( public_path('/images/avatar/' . $filename ) );

            $user = Auth::user();
            $user->education = $request->input('education');
            $user->location = $request->input('location');
            $user->description = $request->input('description');
            $user->avatar = $filename;
            $user->save();
        }

        return redirect()->back();

    }

}
