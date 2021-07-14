<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ContactsController extends Controller
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
    
    public function get()

    {
        $contacts = User::all();

        return response()->json($contacts);
    }
}
