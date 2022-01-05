<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;


class CategoryController extends Controller
{
    public function showcat()
    {
       $category=Category::get();
       return view('header',compact('category')); 
    }
    
}
