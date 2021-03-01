<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Request;

class MainController extends Controller
{
    public function write1(Request $moji)
	{
	    $data1 = $moji::all();
	    return view('testform',compact('data1'));
	}
}
