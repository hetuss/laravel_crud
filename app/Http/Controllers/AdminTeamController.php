<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\team;
class AdminTeamController extends Controller
{
    public function admin_team()
    {
        $team = team::get();
        return view('AdminTeam',compact('team'));
    }
    public function add_team(Request $request)
    {
        return view('addTeamMember');
    }
    public function store_member(Request $request){
      
        // data insert
         $team = new team();
         $team->name =$request->input('name');      
         $team->position =$request->input('position');
         $team->mail =$request->input('mail');
         if($request->hasfile('image'))
         {
             $file = $request->file('image');
             $imageName = time().'.'.$request->image->getClientOriginalExtension();
             $request->image->move(public_path('/uploads'), $imageName);
             $team->image = $imageName;
         }
         else
         {
             return $request;
             $team->image = '';
         }
         $team->save();
         $request->session()->flash('message','Data Uploded Successfully.');
         return redirect()->route('admin.team')->with('success', 'team Inserted Successfully!');
     }
     public function edit_member(Request $request,$id)
     {
        $team = team::first();
        return view('editMember',compact('team'));
     }
     public function update_teams(Request $request)
        {
            $team =team::find($request->id);
            $team->name =$request->input('name');
            $team->position =$request->input('position');
            $team->mail= $request->input('mail');
            
        
            if($request->hasfile('image'))
            {
                $file = $request->file('image');
                $imageName = time().'.'.$request->image->getClientOriginalExtension();
                $request->image->move(public_path('/uploads'), $imageName);
                $team->image = $imageName;
            }
            else
            {
                $id = $request->id;
                $update = [  
                'name'=>$request->name,
               'position'=>$request->position,
               'mail'=>$request->mail,
               
         ];
         $file   = $request->file("image");
            if ($request->hasfile("image")) {
            $file->move("/upload", $file->getClientOriginalName());
            $update['image'] = $file->getClientOriginalName();
            }
        
            team::where('id', $id)->update($update);
            return redirect()->route('admin.teams')->with('success', 'team Updated Successfully!');
        
        
                return $request;
                $team->image = '';
            }
            $team->save();
            return redirect()->route('admin.teams')->with('success', 'team Updated Successfully!');
           
     }
    public function delete_member($id)
     {
        team::where('id',$id)->delete();
        return redirect()->route('admin.team')->with('warning','team Deleted successfully!');
       
     }
}
