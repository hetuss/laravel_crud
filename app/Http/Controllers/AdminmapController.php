<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\map;

class AdminmapController extends Controller
{
    public function showmap()
    {
         $map=Map::get();
        return view('adminmap',compact('map'));
    
    } 

    public function editmap(Request $request ,$id)
    {
         $maps= Map::get();
       
        $maps=Map::where('id',$id)->first();
        return view('editmap',compact('maps'));


    }

    public function updatemap(Request $request)
    {
         $map =Map::find($request->id);
         $map->map =$request->input('map');
       
      {
            $id = $request->id;
            $update = [  
            'map'=>$request->map,
           
           
     ];
     
       Map::where('id', $id)->update($update);
        return redirect()->route('admin.map');


            return $request;
            $product->image = '';
        }
        $product->save();
        return redirect()->route('admin.map');
    }
}
