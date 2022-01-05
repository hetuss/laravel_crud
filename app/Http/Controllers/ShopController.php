<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;


class ShopController extends Controller
{
    public function proshow()
    {
         $posts=Product::paginate(3);
        return view('shop',compact('posts'));
    }
}
 