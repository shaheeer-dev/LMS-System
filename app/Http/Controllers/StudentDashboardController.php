<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Meeting;
use App\StudentRegisterCourse;
use App\Assignment;
use DB;
class StudentDashboardController extends Controller
{
    
    public function view()
    {
        $user_id = Auth::id();
        $meeting = Meeting::orderBy('id', 'DESC')->where('student_id', '=', $user_id )->get();
 /*       $course = \DB::table('add_courses')
        ->join('student_register_courses', function ($join) {
            $join->on('add_courses.id', '=', 'student_register_courses.user_id');
        })
        ->select('add_courses.Thumnail', 'student_register_courses.course_name', 'student_register_courses.class');*/
        $assignment = Assignment::where('student_id', $user_id)->get();

        return view('student.StudentDashboard', compact('meeting', 'assignment'));
    }
}
