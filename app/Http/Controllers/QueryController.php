<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Query;

class QueryController extends Controller
{
    public function query()
    {
        $query= Query::get();
       
        return view('clientquery',compact('query'));
    }
}
