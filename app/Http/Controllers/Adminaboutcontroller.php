<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;

class AdminaboutController extends Controller
{
  
   public function abouts()
    {
        $about= About::get();
        return view('adminabout',compact('about'));
                  // filename
    }
    public function edit_abouts(Request $request ,$id)
    {
        
        $abouts=About::where('id',$id)->first();
        return view('editabout',compact('abouts'));
    }

    public function update_abouts(Request $request)
    {
         $product =About::find($request->id);
         $product->name =$request->input('name');
         $product->description =$request->input('description');
        

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('/uploads'), $imageName);
            $product->image = $imageName;
        }
        else
        {
            $id = $request->id;
            $update = [  
            'name'=>$request->name,
           'description'=>$request->description,
           
     ];
     $file   = $request->file("image");
        if ($request->hasfile("image")) {
        $file->move("/upload", $file->getClientOriginalName());
        $update['image'] = $file->getClientOriginalName();
        }

       About::where('id', $id)->update($update);
        return redirect()->route('admin.about');


            return $request;
            $product->image = '';
        }
        $product->save();
        return redirect()->route('admin.about');
    }
}


 