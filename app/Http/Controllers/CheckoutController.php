<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Checkout;
use App\Meeting;
use DB;
use Config;
use Session;

class CheckoutController extends Controller
{
    
    public function index($id)
    {
        $view = Meeting::where('id', $id)->first();
        return view('student.checkout.checkout', compact('view'));
    }
    public function DoCheckout(Request $request)
    {
        $data = $request->input();
        print_r($data);
    }
}
