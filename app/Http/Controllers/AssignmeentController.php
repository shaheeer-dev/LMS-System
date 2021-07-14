<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Assignment;
use App\AddCourse;
use Session;
use DB;
use App\User;
use App\FriendRequest;
use Auth;
use Image;

class AssignmeentController extends Controller
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
    
    public function ViewAssignment($id)

    {
        $user = User::find($id);
        return view('tutor.assignments.AddAssignment', compact('user'));
    }
    
  public function SaveAssignment(Request $request)

  {
        // Validating all data that is comming from request
        $validator = $request->validate([

        'student_id' => 'required',    
        'title' => 'required', 
         'guidelines' => 'required|max:100000',  
         'starts_at' => 'required|date',
         'cover_img' => 'mimes:pdf|required',

        ]);

        if ($files = $request->file('cover_img')) 
        {

        
           $destinationPath = public_path('images/assignment_images/');
           $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
           $files->move($destinationPath, $profileImage);
           $insert['images'] = "$profileImage";

           $create =  new Assignment($validator);
           $create->cover_img= "$profileImage";
           $create->tutor_id = Auth::id();
           $create->save();
            return redirect()->back()->with('success', 'Assignment is successfully saved');
        }

        if (!$assignmentModel->save())
        {
            Session::flash('alert-error', 'Internal Server Error');
            return redirect()
                ->back();
        }  
    }

        public function allAssignment($id)
    {
        //getting all assignments that matches to student id

        $assignment = Assignment::where('tutor_id', '=', $id)->get();
        
        /*$data = (array)$this->data; */
        return view('tutor.assignments.AllAssignments',compact('assignment'));
    }


    public function edit_assignment($id)

    {
        $edit =Assignment::findOrfail($id)->first();
        $user = User::find($id);
        return view('tutor.assignments.UpdateAssignment',compact('edit', 'user'));
    }

     public function UpdateAssignment(Request $request, $id)

  {
        // Validating all data that is comming from request
        $validator = $request->validate([

        'student_id' => 'required',    
        'title' => 'required', 
         'guidelines' => 'required|max:100000',  
         'starts_at' => 'required|date',  
         'cover_img' => 'mimes:pdf|required',

        ]);

        if ($files = $request->file('cover_img')) 
        {
        
           $destinationPath = public_path('images/assignment_images/');
           $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
           $files->move($destinationPath, $profileImage);
           $insert['images'] = "$profileImage";
        }

        Assignment::whereId($id)->update($validator);
        return redirect()->back()->with('success', 'Assignment is successfully Updated');

        if (!$create->save())
        {
            Session::flash('alert-error', 'Internal Server Error');
            return redirect()
                ->back();
        }  
    }


     public function deleteAssignment($id)
    {

        /*$eventId = $id;

        $event = event::where('model_name','app/assignment')->where('model_id', $eventId)->first();
        $event->delete();*/

        $assignment = Assignment::findOrfail($id);
        $assignment->delete();
        
        Session::flash('alert-success', 'Assignment deleted Successfully');
        return redirect()->back();
    }


    /* Student Panel Assignment Section */
        public function Student_Assignment($id)
    {
        //getting all assignments that matches to student id

        $assignment = Assignment::where('student_id', '=', $id)->get();
        
        /*$data = (array)$this->data; */
        return view('student.assignments.Student_Assignments',compact('assignment'));
    }


    public function student_assignment_details($id)

    {
        $assignment = Assignment::all()->where('id', '=', $id);
        return view('student.assignments.Assignment_Details', compact('assignment'));
    }
}
