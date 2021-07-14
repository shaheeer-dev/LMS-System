<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TutorRegisterCourse;
use App\AddCourse;
use Auth;

class TutorCourseController extends Controller
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
    
       /*Tutor Courses Function*/

      public function view_add_course()
    {
        $user_id = Auth::id();
        $view = AddCourse::all();
        $tutor_course= TutorRegisterCourse::where('user_id' ,'=', $user_id)->get();
        return view('tutor.course.TutorAddCourse', compact('view', 'tutor_course'));
    }

    public function register_course(Request $request , $id)

    {
        $validator = $request->validate([

            'course_name' => 'required',
            'class' => 'required',

        ]);
       
        $user = new TutorRegisterCourse;
        $user->course_name = $request->input('course_name');
        $user->class = $request->input('class');
        $user->user_id = Auth::id();
        $user->course_id = $id;
        $user->save();
        return redirect('register-course')->with('success', 'Course Registered');
    }

    public function view_course()

    {
        $user_id = Auth::id();
        $view= TutorRegisterCourse::where('user_id' ,'=', $user_id)->get();
        return view('tutor.course.RegisteredCourse', compact('view'));

    }

    public function delete_course($id)

    {
        $course = TutorRegisterCourse::findOrfail($id);
        $course->delete();
        return redirect()->back();
    }

}
