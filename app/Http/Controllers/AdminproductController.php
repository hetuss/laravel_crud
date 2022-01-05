<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class AdminproductController extends Controller
{
   public function show()
    {
        $product= Product::get();
        return view('adminproduct',compact('product'));
    }
     public function insertproduct(Request $request)
   {
        $categorys= Category::get();
        return view('addproduct',compact('categorys'));
           
   }
    public function storeproduct(Request  $request)
    {
        $product = new Product();
        $product->name=$request->input('name');
        $product->description=$request->input('description');
        $product->price=$request->input('price');
      
         $product->cname =$request->input('cname');

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
           $product->image = '';
       }
       
          $product->save();
            return redirect()->route('admin.product');



}
    public function editproducts(Request $request ,$id)
    {
         $categorys= Category::get();
       
        $products=Product::where('id',$id)->first();
        return view('editproduct',compact('products','categorys'));


    }

    public function updateproduct(Request $request)
    {
         $product =Product::find($request->id);
         $product->name =$request->input('name');
         $product->description =$request->input('description');
         $product->price=$request->input('price');
      
        $product->cname=$request->input('cname');
        

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
           'price'=>$request->price,
           'cname'=>$request->cname,
           
     ];
     $file   = $request->file("image");
        if ($request->hasfile("image")) {
        $file->move("/upload", $file->getClientOriginalName());
        $update['image'] = $file->getClientOriginalName();
        }

       Product::where('id', $id)->update($update);
        return redirect()->route('admin.product');


            return $request;
            $product->image = '';
        }
        $product->save();
        return redirect()->route('admin.product');
    }
    public function delete_product($id)
    {
        Product::where('id',$id)->delete();
        return redirect()->route('admin.product');
    }
    // toshowcategory name in dropdown
   
    //
}
