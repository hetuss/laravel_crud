<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Query;
use App\Contact;
use App\Map;

class ContactController extends Controller
{
     public function queryshow()
    {
        $query= Contact::get();
        $mapss=Map::get();
        return view('contact_us',compact('query','mapss'));
                 
    }
    public function queryyyshow(Request $request)
    {
    $query = new Query();
    $query->firstname =$request->input('firstname');      
    $query->lastname =$request->input('lastname');
    $query->email =$request->input('email');      
    $query->subject =$request->input('subject');
    $query->message =$request->input('message');      
       
       $query->save();
       return redirect()->route('contat.us')->with('success', 'Product Inserted Successfully!');
    }
  

}
