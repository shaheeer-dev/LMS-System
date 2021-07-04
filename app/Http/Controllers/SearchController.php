<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AddCourse;
use App\Meeting;
use App\TutorRegisterCourse;
use Auth;
use App;
use App\User;
use App\TutorProfile;
use App\AvailableTimeSlot;
use App\FriendRequest;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Collection;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
class SearchController extends Controller
{
    
     public function index()
    {
        $data = \DB::table('tutor_register_courses')->paginate(10);
        return view('student.search', compact('data'));
    }

    public function advance(Request $request)
    {
          
        $data =\DB::table('users')
        ->join('tutor_register_courses', function ($join) {
            $join->on('users.id', '=', 'tutor_register_courses.user_id');
        })
        ->select('users.id','users.name','users.usertype', 'users.avatar', 'tutor_register_courses.course_name', 'tutor_register_courses.class');


        if( $request->course_name && $request->class && $request->usertype){
            $data = $data->where('course_name', 'LIKE', "%" . $request->course_name . "%")->where('class', 'LIKE', "%" . $request->class . "%")->where('usertype', 'LIKE', "%" . $request->usertype . "%");
        }

       
       $type = User::where('usertype', '=', '2');
        $data = $data->paginate(10);
        return view('student.search', compact('data', 'type'));    

    }

   public function tutor_profile($id)

    {
        
        $view = User::where('id', $id)->first();
        $type = AvailableTimeSlot::where('user_id', $id)->get();
        $user = FriendRequest::where('approved', '=', true);
        $course= TutorRegisterCourse::where('user_id' ,'=', $id)->get();
        return view('student.profile.Tutor_Profile', compact('view', 'type', 'user', 'course'));
    }

     public function student_profile($id)

    {
        
        $view = User::where('id', $id)->first();
        return view('tutor.profile.Student_Profile', compact('view'));
    }

  
}
