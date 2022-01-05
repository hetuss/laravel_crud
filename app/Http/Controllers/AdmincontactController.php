<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class AdmincontactController extends Controller
{
    public function showcontact()
    {
        $contact= Contact::get();
        return view('admincontact',compact('contact'));
                  // filename
    }
    public function editcontact(Request $request ,$id)
    {
        
        $contacts=Contact::where('id',$id)->first();
        return view('editcontact',compact('contacts'));
    }

    public function updatecontact(Request $request)
    {
         $contact =Contact::find($request->id);
         $contact->name =$request->input('name');
         $contact->description =$request->input('description');
        

            $id = $request->id;
            $update = [  
            'address'=>$request->address,
           'phone'=>$request->phone,
           'email'=>$request->email,
           
     ];
    
       Contact::where('id', $id)->update($update);
        return redirect()->route('admin.contact')->with('success','contact update succesfully');


        $contacts->save();
        return redirect()->route('admin.contact')->with('success','contact update succesfully');
    }
}
