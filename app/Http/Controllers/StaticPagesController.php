<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    //
    public function myspace(){
    	return view('myspace', ['version' => '2.1.33']);
    }

    //
    public function news(){
    	return view('news');
    }
}
