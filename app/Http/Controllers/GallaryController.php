<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallary;
use App\Categoryyy;


class GallaryController extends Controller
{
      public function glry()
    {
           $shop=Gallary::where(['category'=>1])->get();
           $shops=Gallary::where(['category'=>2])->get();
       return view('gallary',compact('shop','shops'));

    }
    
}
 