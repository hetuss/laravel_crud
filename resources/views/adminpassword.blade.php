
@extends('layouts.backend.main')
@section('content')
<div id="layoutSidenav_content" style="background-color:#e6e6e6;">
                <main> 
        <div class="container mt-4">
            <div class="card">
                <div class="card-header" style="background-color: #404040; color: white;">Edit User Detail
                </div>
                 <form class="form-horizontal style" method="POST" enctype="multipart/form-data" action="{{route('update.password')}}">
                   @csrf
               <input type="hidden" name="id">
                    <div class="card-body">
                            @foreach($password as $pass)
                         <input type="hidden" value ="{{$pass->id}}" name="id">
                            
                           
                        <div class="row">
                            <div class="form-group col-md-12">
                              <label for="customerDetailsCustomerFullName">Edit EmailId</label>
                               <input type="text" class="form-control"name="email" placeholder="Enter Courses Name" value="{{$pass->email}}">
                                @error('email')
                              <label class="text-danger">
                                {{$message}}
                              </label>
                              @enderror
                            </div>
                        </div>
                         
                        <div class="row">
                            <div class="form-group col-md-12">
                              <label for="customerDetailsCustomerFullName">Edit password</label>
                               <input type="password" class="form-control" name="password" placeholder="Enter Courses Name" value="{{$pass->password}}">
                                @error('password')
                              <label class="text-danger">
                                {{$message}}
                              </label>
                              @enderror
                            </div>
                        </div>
                         @endforeach
                      <input type="submit" name="submit" value="SAVE" class="btn btn-success">
                     
                    </div> 
                </form>
                </div>
            </div>
        </main>
@endsection
