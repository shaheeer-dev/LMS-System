<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Collection;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use App\TutorRegisterCourse;
use App\StudentRegisterCourse;
use App\AvailableTimeSlot;
use App\FriendRequest;
use App\TutorProfile;
use App\AddCourse;
use App\Meeting;
use Auth;
use DB;
use App\User;

class SearchController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
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
        $meeting = Meeting::where('tutor_id', $id)->get();
        return view('student.profile.Tutor_Profile', compact('view', 'type', 'user', 'course', 'meeting'));
    }

     public function student_profile($id)

    {
        $view = User::where('id', $id)->first();
        $course= StudentRegisterCourse::where('user_id' ,'=', $id)->get();
        $meeting = Meeting::where('student_id', $id)->get();
        
        return view('tutor.profile.Student_Profile', compact('view', 'course', 'meeting'));
    }

  
}
