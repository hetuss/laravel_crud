<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class AdmincategoryController extends Controller
{
     public function show()
    {
        $categorys= Category::get();
        return view('admincategory',compact('categorys'));
    }
    public function insertts(Request $request)
   {

            return view('addcategory');
   }
    public function storecategory(Request  $request)
    {
        $categorys = new Category();
         $categorys->cname =$request->input('cname');
          $categorys->save();
            return redirect()->route('admin.category');

}
  
public function editcategory(Request $request ,$id)
    {
        
        $categoryss=Category::where('id',$id)->first();
        return view('editcategory',compact('categorys'));
    }
    public function updatecategory(Request $request)
    {
         $categorys =Category::find($request->id);
         $categorys->cname =$request->input('cname');
      
        $categorys->save();
        return redirect()->route('admin.category');
    }
     public function delete_category($id)
    {
        Category::where('id',$id)->delete();
        return redirect()->route('admin.category');
    }

}
