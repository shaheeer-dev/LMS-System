<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AvailableTimeSlot;
use App\TutorProfile;
use Auth;
use Image;

class TutorProfileController extends Controller
{
    

	/*Functions for Tutor Avatar*/
    public function profile()
    {
       
            
            return view('tutor.profile.TutorProfile');
      
    	
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

    	return redirect('tutor-profile');

    }


    /*Function for View Time slots*/

    public function view_slots()
	{
    $id = Auth::user()->id;
    $view = AvailableTimeSlot::all()->where('user_id' ,'=', $id);
	return view('tutor.profile.TutorProfile', compact('view',));
	}
}
