<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Logo;

class AdminlogoController extends Controller
{
    public function showlogo()
    {
         $logo= Logo::get();
        return view('adminlogo',compact('logo'));
    
    }
    public function storelogo(Request  $request)
    {
        $logo = new Product();
      

         if($request->hasfile('image'))
       {
           $file = $request->file('image');
           $imageName = time().'.'.$request->image->getClientOriginalExtension();
           $request->image->move(public_path('/uploads'), $imageName);
           $product->image = $imageName;
       }
       else
       {
           return $request;
           $logo->image = '';
       }
           $product->save();
            return redirect()->route('admin.logo');

       }
    public function editlogo(Request $request ,$id)
    {
        
        $logos=Logo::where('id',$id)->first();
        return view('editlogo',compact('logos'));
    }

    public function updatelogo(Request $request)
    {
         $logo =Logo::find($request->id);
        
        

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('/uploads'), $imageName);
            $logo->image = $imageName;
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

       Logo::where('id', $id)->update($update);
        return redirect()->route('admin.logo');


            return $request;
            $product->image = '';
        }
        $logo->save();
        return redirect()->route('admin.logo');
}
}