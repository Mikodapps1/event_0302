<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class First_timeController extends Controller
{
    public function index () 
    {
        return view('first_time/first_time');
    }
}
