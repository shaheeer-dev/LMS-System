<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Meeting;
use DB;
use App\Assignment;

class TutorDashboardController extends Controller
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
    
    public function view()
    {
        $user_id = Auth::id();
        $meeting = Meeting::orderBy('id', 'DESC')->where('tutor_id', '=', $user_id )->get();

        $data =\DB::table('users')
        ->join('tutor_register_courses', function ($join) {
            $join->on('users.id', '=', 'tutor_register_courses.user_id');
        })
        ->join('add_courses', function($join) {
            $join->on('tutor_register_courses.course_id', '=', 'add_courses.id');
        })
        ->select('add_courses.Thumnail', 'add_courses.Description', 'tutor_register_courses.course_name', 'tutor_register_courses.class')->where('tutor_register_courses.user_id', '=', $user_id)->get();

        $assignment = Assignment::where('tutor_id', $user_id)->get();
        return view('tutor.TutorDashboard', compact('meeting', 'data', 'assignment'));
    }
}
