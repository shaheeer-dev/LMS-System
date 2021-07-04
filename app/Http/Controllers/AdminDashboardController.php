<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\AddCourse;
use App\User;
use DB;

class AdminDashboardController extends Controller
{
    public function view_dashboard()
    {
        $course = AddCourse::all();
        $users = User::orderBy('id', 'DESC')->get();
        return view('admin.AdminDashboard', compact('course', 'users'));
    }

    public function student_details()
    {
        $student = User::where('usertype', '3')->get();

        return view('admin.student.ViewAllStudents', compact('student'));
    }

        public function tutor_details()
    {
        $tutor = User::where('usertype', '2')->get();

        return view('admin.tutor.ActionsOnTutor', compact('tutor'));
    }
}
