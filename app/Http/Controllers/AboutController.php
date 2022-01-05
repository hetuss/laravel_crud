<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\Team;

class AboutController extends Controller
{
     public function aboutshow()
    {
        $about= About::get();
        $team=Team::get();
        return view('about',compact('about','team'));
                 
    }
}
