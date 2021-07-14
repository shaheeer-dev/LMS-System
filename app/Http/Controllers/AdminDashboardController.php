<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\AddCourse;
use App\User;
use DB;
use Hash;
class AdminDashboardController extends Controller
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

    public function student_delete($id)
    {
        $student = User::findOrfail($id);
        $student->delete();
        return redirect()->back()->with('success', 'Course is successfully delete');
    }

    public function tutor_delete($id)
    {
        $tutor = User::findOrfail($id);
        $tutor->delete();
        return redirect()->back()->with('success', 'Course is successfully delete');
    }

    public function add_user(Request $request)
    {
         $validator = $request->validate([
           'name' => ['required', 'alpha', 'max:255'],
            'email' => ['required', 'string', 'email',  'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed',],
            'usertype' => ['required','string'],

        ]);

        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make ($request->input('password'));
        $user->usertype = $request->input('usertype');
        $user->save();
        return redirect()->back()->with('sucess', 'User added successfully');

    }



}
