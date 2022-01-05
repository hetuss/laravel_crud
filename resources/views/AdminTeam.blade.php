@extends('layouts.backend.main')
@section('content')
<div class="content mt-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12 bg-light text-right">
                <a href="{{route('admin.add.member')}}"><button type="button" class="btn btn-primary" name="add_team" >Add Member</button></a>
                
            </div>
        </div>
    </div>
<div class="animated fadeIn">
    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Our Team</strong>
                </div>
                <div class="card-body">
                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                        <thead>
                        
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Mail</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($team as $team)
                            <tr class="text-center">
                                <td>{{$team->name}}</td>
                                <td>{{$team->position}}</td>
                                <td>{{$team->mail}}</td>
                                <td><img src="{{asset('uploads/'. $team->image)}}" style="width:70px; height:70px"></td>
                                <td>
                                    <a href="{{route('edit.member',$team->id)}}" class="btn btn-primary">Edit</a>
                                    <a href="{{route('delete.member',$team->id)}}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </thead>
                        <tbody>
                                       
                        </tbody>
                    
                    </table>
                </div>
            </div>
        </div>


    </div>
</div><!-- .animated -->
</div><!-- .content -->
@endsection