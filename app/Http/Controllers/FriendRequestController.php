<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\FriendRequest;
use Auth;

class FriendRequestController extends Controller
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
    
   public function SendRequest(Request $request, $id) {
        $friend = new FriendRequest;
        $friend->sender = Auth::user()->id;
        $friend->recipient = $request->id;
        $friend->save();

        return redirect()->back();
    }

     public function ShowTutors($id) {
        $user = User::find($id);
        return view('student.tutor.EnrolledTutors', compact('user'));
    }

     public function ShowStudent($id) {
        $user = User::find($id);
        return view('tutor.student.AllStudents', compact('user'));
    }

    public function AcceptRequest(Request $request, $id) {
        $user = FriendRequest::all()->where('recipient', '=', Auth::user()->id)->where('sender', '=', $request->id)->first();
        if ($request->id) {
            $user->approved = true;
            $user->save();
            return redirect()->back();
        }
    }

     public function DeleteRequest(Request $request, $id) 
     {
        $user = FriendRequest::all()->where('recipient', '=', Auth::user()->id)->where('sender', '=', $request->id)->first();
            $user->delete();
            return redirect()->back();
       

    }
}
