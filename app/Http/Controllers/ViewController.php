<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    public function index(){
        return "View Controller says hello to shykot";
    }

    public function bitm(){
        return view('demo');
    }
}
