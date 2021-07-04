<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AvailableTimeSlot;
use App\TutorProfile;
use App\TutorRegisterCourse;
use App\Meeting;
use Auth;
use Image;
use App\User;
class TutorProfileController extends Controller
{
    

	/*Functions for Tutor Avatar*/
 
    public function profile()
    {
       
        return view('tutor.profile.TutorProfile');   
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


    /*Function for View Time slots*/

    public function view_slots()
	{
    $id = Auth::user()->id;
    $view = AvailableTimeSlot::all()->where('user_id' ,'=', $id);
	return view('tutor.profile.TutorProfile', compact('view',));
	}
}
