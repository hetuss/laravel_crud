<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Socialmedia;

class SocialmediaController extends Controller
{
    public function showsocialmedia()
    {
         $media= Socialmedia::get();
        return view('adminsocialmedia',compact('media'));
    
    }
     public function storesocialmedia(Request  $request)
    {
              
          $media = new Socialmedia();
        $media->instragram=$request->input('instragram');
        $media->facebook=$request->input('facebook');
        $media->twitter=$request->input('twitter');
        $product->save();
        return redirect()->route('admin.socialmedia');

       }
    public function editsocialmedia(Request $request ,$id)
    {
        
        $medias=Socialmedia::where('id',$id)->first();
        return view('editsocialmedia',compact('medias'));
    }

    public function updatesocialmedia(Request $request)
    {
         $media =Socialmedia::find($request->id);
         $media->instragram=$request->input('instragram');
        $media->facebook=$request->input('facebook');
        $media->twitter=$request->input('twitter');
        $media->save();
        return redirect()->route('admin.socialmedia');
}
}