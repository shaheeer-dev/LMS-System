<?php

namespace App\Http\Controllers\Zoom;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\ZoomJWT;
use Illuminate\Support\Facades\Validator;
use App\Meeting;
use Auth;
use App\User;
use DB;
class MeetingController extends Controller
{
    

    public function view($id)
    {
        $user = User::find($id);
        return view('tutor.meetings.Meetings', compact('user'));
    }

    public function create(Request $request) 
    { 


        $validator = $request->validate([
            'student_id' => 'required',
            'subject' => 'required|string',
            'topic' => 'required|string',
            'start_time' => 'required|string',
            'end_time' => 'required|string',
            'date' => 'required|date',
            'link' => 'string',
            
        ]);

        $create =  new Meeting;
        $create->student_id = $request->input('student_id');
        $create->subject = $request->input('subject');
        $create->topic = $request->input('topic');
        $create->start_time = $request->input('start_time');
        $create->end_time = $request->input('end_time');
        $create->date = $request->input('date');
        $create->link = $request->input('link');
        $create->tutor_id = Auth::id();
        $create->save();
        return redirect()->back()->with('success', ' Data successfully saved');   
    }

    public function tutor_list($id) 
    { 
        $list = Meeting::where('tutor_id', $id)->get();

        return view ('tutor.meetings.AllMeetings', compact('list'));
         
    }

    public function student_list($id) 
    { 
         $list = Meeting::where('student_id', $id)->get();
         return view ('student.meeting.Meetings', compact('list'));
    }
    
    public function delete(Request $request, string $id)
    {
        $path = 'meetings/' . $id;
        $response = $this->zoomDelete($path);

        return [
            'success' => $response->status() === 204,
            'data' => json_decode($response->body(), true),
        ];
    }

}
