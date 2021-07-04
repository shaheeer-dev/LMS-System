<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\AddCourse;
use Validator;
use  Auth;
use App\User;
class AddCourseController extends Controller
{
    public function view_add_course()
    {
        return view('admin.tutor.course.AddCourse');
    }
    
    public function add_course(Request $request)

    {
    

        $validator = $request->validate([

      
            'Class' => 'required',
    		'Course_Name' =>'required',
    		'Book_Name' => 'required',
    		'Description' => 'required | max:100',
    		/*'Thumnail' => 'file|required|mimes:jpeg,png|max:1014' ,*/
        ]);
        if ($files = $request->file('Thumnail')) {

        
           $destinationPath = public_path('images/Course_Thumbnail/');
           $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
           $files->move($destinationPath, $profileImage);
           $insert['images'] = "$profileImage";

           $create =  new AddCourse($validator);
           $create->Thumnail= "$profileImage";
           $create->save();
           /* AddCourse::create($input);*/
            return redirect('/AddCourse')->with('success', 'Course is successfully saved');
        }
        else
        {
            $show = AddCourse::create($validator);
            return redirect('/AddCourse')->with('success', 'Course is successfully saved');
        }
    }

    public function view_all_course()
    {
    	$view = AddCourse::all();
    	return view('admin.tutor.course.ViewAllCourse', compact('view'));
    }

   

    public function edit_course($id)
    {
    	$edit = AddCourse::findOrfail($id);
   
    	return view('admin.tutor.course.UpdateCourse', compact('edit'));
    }

    public function update_course(Request $request, $id)

    {
    

        $validator = validator::make($request->all(), [

      
            'Class' => 'required',
    		'Course_Name' =>'required',
    		'Book_Name' => 'required',
    		'Description' => 'required | max:100',
    		'Thumnail' => 'file|required|mimes:jpeg,png|max:1014' ,
        ]);

        if ($validator->fails()) {
        	
        	return redirect('/UpdateCourse')->withErrors($validator);
        }
       
        if ($validator->passes()) {
            $input = request()->except(['_method', '_token']);
            if ($request->hasFile('Thumnail')) {
                $file = $request->file('Thumnail');
                $file_extension = $file->getClientOriginalName();
                $destination_path = public_path() . 'public/Course_Thumbnail';
                $filename = $file_extension;
                $request->file('Thumnail')->move($destination_path, $filename);
                $input['Thumnail'] = $filename;
            }
            
           	AddCourse::whereId($id)->update($input);

            return redirect('/ViewAllCourse')->with('success', 'Course is successfully Updated');
        }
    }

    public function delete_course($id)
    {
    	$view = AddCourse:: findOrfail($id);
    	$view->delete();

    	return redirect('ViewAllCourse')->with('success', 'Course is successfully saved');
    }

}
