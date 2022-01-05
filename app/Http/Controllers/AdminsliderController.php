<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;

class AdminsliderController extends Controller
{
    public function showslider()
    {
        $slider= Slider::get();
        return view('adminslider',compact('slider'));
    }
     public function addslider(Request $request)
   {
        $slider= Slider::get();
        return view('addslider',compact('slider'));
           
   }
    public function storeslider(Request  $request)
    {
        $slider = new Slider();
        $slider->name=$request->input('name');
        $slider->description=$request->input('description');
     
         if($request->hasfile('image'))
       {
           $file = $request->file('image');
           $imageName = time().'.'.$request->image->getClientOriginalExtension();
           $request->image->move(public_path('/uploads'), $imageName);
           $slider->image = $imageName;
       }
       else
       {
           return $request;
           $slider->image = '';
       }
       
          $slider->save();
            return redirect()->route('admin.slider');



}
    public function editslider(Request $request ,$id)
    {
         $sliders= Slider::get();
       
        $sliders=Slider::where('id',$id)->first();
        return view('editslider',compact('sliders'));


    }

    public function updateslider(Request $request)
    {
         $slider =Slider::find($request->id);
         $slider->name =$request->input('name');
         $slider->description =$request->input('description');
        
        

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('/uploads'), $imageName);
            $slider->image = $imageName;
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

       Product::where('id', $id)->update($update);
        return redirect()->route('admin.slider');


            return $request;
            $slider->image = '';
        }
        $slider->save();
        return redirect()->route('admin.slider');
    }
    public function deleteslider($id)
    {
        Slider::where('id',$id)->delete();
        return redirect()->route('admin.slider');
    }
}
