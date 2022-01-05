<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallary;

class AdminGalleryController extends Controller
{
    public function showgallary()
    {
         $gallary= Gallary::get();
        return view('admingallary',compact('gallary'));
    
    }
    public function insertgallary(Request $request)
   {
        $gallary= Gallary::get();
        return view('addgallary',compact('gallary'));
           
   }
    public function storegallary(Request  $request)
    {
        $gallary = new Gallary();
       
         if($request->hasfile('image'))
       {
           $file = $request->file('image');
           $imageName = time().'.'.$request->image->getClientOriginalExtension();
           $request->image->move(public_path('/uploads'), $imageName);
           $gallary->image = $imageName;
       }
       else
       {
           return $request;
           $gallary->image = '';
       }
       
          $gallary->save();
            return redirect()->route('admin.gallary');



}
    public function editgallary(Request $request ,$id)
    {
         $gallary= Gallary::get();
       
        $gallary=gallary::where('id',$id)->first();
        return view('editgallary',compact('gallary','gallary'));


    }

    public function updategallary(Request $request)
    {
         $gallary =gallary::find($request->id);
         

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('/uploads'), $imageName);
            $gallary->image = $imageName;
        }
        else
        {
            $id = $request->id;
            $update = [  
           
           
     ];
     $file   = $request->file("image");
        if ($request->hasfile("image")) {
        $file->move("/upload", $file->getClientOriginalName());
        $update['image'] = $file->getClientOriginalName();
        }

       gallary::where('id', $id)->update($update);
        return redirect()->route('admin.gallary');


            return $request;
            $gallary->image = '';
        }
        $gallary->save();
        return redirect()->route('admin.gallary');
    }
    public function delete_gallary($id)
    {
        gallary::where('id',$id)->delete();
        return redirect()->route('admin.gallary');
    }
}
