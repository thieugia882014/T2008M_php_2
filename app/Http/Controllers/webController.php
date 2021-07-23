<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class webController extends Controller
{
    public function home(){
        return view("welcome");
    }
    public function aboutUs(){
        return view("aboutUs");
    }
}
