<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class maincontrol extends Controller
{
    function home(){
        $title = 'home';
        return view('home');//, compact('title'));
    }

    function about(){
        $title = 'about';
        return view('about');//, compact('title'));
    }

}
