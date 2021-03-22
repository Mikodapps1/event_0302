<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contact;

class ContactController extends Controller
{
    public function index(){

            return view('contact.input');
        }

    // public function show(Request $request)
    //     {
    //     //    $post = $request::all();
    //        return view('/contact/show',compact('post'));
    //     }

    public function add(Request $request) 
    {
        $post = new contact();

        $post->username = $request->username;
        $post->email = $request->email;
        $post->sex = $request->sex;
        $post->age = $request->age;
        $post->content = $request->content;
        $post->save();

        return view('/contact/show',compact('post'));
    }
}
