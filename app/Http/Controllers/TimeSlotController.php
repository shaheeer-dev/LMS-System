<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\AvailableTimeSlot;
use Auth;
class TimeSlotController extends Controller
{
/*public function view($id)
{
    $add = AvailableTimeSlot::findOrfail($id);
    return view('tutor.meetings.AddSlots', compact('add'));
}
*/
public function add_time_slots(Request $request)
{
    $validateData = $request->validate([
        'day' => 'required',
        'time' => 'required',
    ]);
/*$user_id = $request->user()->id;
    /*$authUser = auth()->user();*/
    /*$create = AvailableTimeSlot::create($validateData)->where('user_id', $user_id);
    return redirect('/slots-page')->with('success', 'You time slot added');*/
$user = new AvailableTimeSlot;
$user->day = $request->input('day');
$user->time = $request->input('time');
$user->user_id = Auth::id();
$user->save();
return redirect('slots-page')->with('success', 'Time is successfully saved');
}
public function view_slots()
{
    $id = Auth::user()->id;
    $view = AvailableTimeSlot::all()->where('user_id' ,'=', $id);
return view('tutor.meetings.AddSlots', compact('view',));
}
public function delete_slots($id)
{
    $deleteSlots = AvailableTimeSlot::findOrfail($id);
    $deleteSlots->delete();
    return redirect('slots-page')->with('success', 'Slot is successfully saved');
}
}