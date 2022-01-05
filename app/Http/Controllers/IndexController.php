<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Slider;
use App\Testimonial;
use App\Countpage;

class IndexController extends Controller
{
    public function view()
    {
        $product= Product::get()->take(3);
           $slider= Slider::get();
           $test=Testimonial::get();
          $viewspage=Countpage::latest()->paginate(5);
          Countpage::increment('views');
       
        return view('index',compact('product','slider','test','viewspage'));
    
    }

}
