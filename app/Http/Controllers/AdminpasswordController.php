<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Validator;
use Hash;


class AdminpasswordController extends Controller
{
     public function change_password()
  {
    $password=DB::table('users')->get();
    // dd($password);
    return view('adminpassword',compact('password'));
  }

  public function update_password(Request $request)
  { 
    $validator = Validator::make($request->all(),
         [
            
            'email'=>'required',
            'password'=>'required',
        ],
        [
            'email.required'=>"Email Id Required",
            'password.required'=>"Password Required",
        ]
    );

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

    $password=Hash::make($request->password);
    DB::table('users')->where('id',$request->id)->update(['email'=>$request->email,'password'=>$password]);
    return redirect()->route('update.password');
  }
}