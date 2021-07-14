<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\MessageSent;
use App\FriendRequest;
use App\Message;
use Pusher\Pusher;
use App\User;
use Auth;
use DB;


class ChatsController extends Controller
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
    /*$users = User::where('id', '!=', Auth::id())->get();*/

    
    $users = DB::select("select users.id, users.name, users.avatar, users.email, count(is_read) as unread 
      from users LEFT  JOIN  messages ON users.id = messages.from and is_read = 0 and messages.to = " . Auth::id() . "
      where users.id != " . Auth::id() . " 
      group by users.id, users.name, users.avatar, users.email");
    
      if(Auth::user()->usertype==2)
      {
        return view('tutor.chat.chat_user',compact('users'));
      }
      elseif(Auth::user()->usertype==3)
      {
        return view('student.chat.chat_user', compact('users',));
      }
      
  }

    public function getMessage($user_id)
    {
        $my_id = Auth::id();

      
        // Make read all unread message
        Message::where(['from' => $user_id, 'to' => $my_id])->update(['is_read' => 1]);

        // Get all message from selected user
        $messages = Message::where(function ($query) use ($user_id, $my_id) {
            $query->where('from', $user_id)->where('to', $my_id);
        })->oRwhere(function ($query) use ($user_id, $my_id) {
            $query->where('from', $my_id)->where('to', $user_id);
        })->get();

      if(Auth::user()->usertype==2)
      {
        return view('tutor.chat.chat_box', ['messages' => $messages]);
      }
      elseif(Auth::user()->usertype==3)
      {

        return view('student.chat.chat_box', ['messages' => $messages]);
      }
    }

    public function sendMessage(Request $request)
    {

    if(Auth::user()->usertype==2)
      {
      $from = Auth::id();
      $to = $request->receiver_id;
      $message = $request->message;

      $data = new Message();
      $data->from = $from;
      $data->to = $to;
      $data->message = $message;
      $data->is_read = 0; //message will be unread when sending message
      $data->save();

        // pusher
        $options = array(
            'cluster' => 'ap2',
            'useTLS' => true,
        );
        $pusher = new Pusher(
            env('PUSHER_APP_KEY'),
            env('PUSHER_APP_SECRET'),
            env('PUSHER_APP_ID'),
            $options
        );


        $data = ['from' => $from, 'to' => $to]; // sending from and to user id when pressed enter
        $pusher->trigger('my-channel', 'my-event', $data);

      }

      elseif(Auth::user()->usertype==3)
      {
        $from = Auth::id();
        $to = $request->receiver_id;
        $message = $request->message;

        $data = new Message();
        $data->from = $from;
        $data->to = $to;
        $data->message = $message;
        $data->is_read = 0; //message will be unread when sending message
        $data->save();

        // pusher
        $options = array(
            'cluster' => 'ap2',
            'useTLS' => true,
        );
        $pusher = new Pusher(
            env('PUSHER_APP_KEY'),
            env('PUSHER_APP_SECRET'),
            env('PUSHER_APP_ID'),
            $options
        );


        $data = ['from' => $from, 'to' => $to]; // sending from and to user id when pressed enter
        $pusher->trigger('my-channel', 'my-event', $data);
      }

      
    }

}


