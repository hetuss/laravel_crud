<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimonial;

class TestimonialController extends Controller
{
    public function testimonial()
    {
        $test=Testimonial::get();
        return view('admintestimonial',compact('test'));
    }
    public function edit_testimonial(Request $request,$id)
     {
        $test = Testimonial::first();
        return view('edittestimonial',compact('test'));
     }
     public function update_test(Request $request)
        {
            $test =Testimonial::find($request->id);
            $test->name =$request->input('name');
            $test->description =$request->input('description');
           
            
        
            if($request->hasfile('image'))
            {
                $file = $request->file('image');
                $imageName = time().'.'.$request->image->getClientOriginalExtension();
                $request->image->move(public_path('/uploads'), $imageName);
                $test->image = $imageName;
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
        
            test::where('id', $id)->update($update);
            return redirect()->route('testimonial')->with('success', 'team Updated Successfully!');
        
        
                return $request;
                $test->image = '';
            }
            $test->save();
            return redirect()->route('testimonial')->with('success', 'team Updated Successfully!');
           
     }
}
