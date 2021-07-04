<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StudentRegisterCourse;
use App\AddCourse;
use Auth;


class StudentCourseController extends Controller
{
    
    public function offer_course()
    {
        $view = AddCourse::all();
        $user_id = Auth::id();
        $std= StudentRegisterCourse::where('user_id' ,'=', $user_id )->get();
        return view('student.course.OfferCourses', compact('view', 'std'));
    }



    public function enroll_course(Request $request , $id)

    {
        $validator = $request->validate([

            'course_name' => 'required',
            'class' => 'required',

        ]);
       
        $user = new StudentRegisterCourse;
        $user->course_name = $request->input('course_name');
        $user->class = $request->input('class');
        $user->user_id = Auth::id();
        $user->course_id = $id;
        $user->save();
        return redirect('offer-course')->with('success', 'Course Registered');
    }

    public function view_enrolled_course()

    {
        $user_id = Auth::id();
        $view= StudentRegisterCourse::all()->where('user_id' ,'=', $user_id);
        return view('student.course.EnrolledCourses', compact('view'));

    }

      public function delete_course($id)

    {
        $course = StudentRegisterCourse::findOrfail($id);
        $course->delete();
        return redirect('enrolled-courses');
    }

}
