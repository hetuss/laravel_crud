@extends('layouts.backend.main')
@section('content')
<div id="layoutSidenav_content" style="background-color:#e6e6e6;">
    <main> 
          <div class="container mt-4">
              <div class="card">
  
                  <div class="card-header" style="background-color: #404040; color: white;">Edit Product
                     <font  style="float:right;"><a href="" style="text-decoration: none; color:white;">BACK</a></font>
                  </div>
                   <form class="form-horizontal style" method="POST" enctype="multipart/form-data" action="{{route('update.member')}}">
  
                    @csrf
                    <input type="hidden" name="id" value="{{$team->id}}">
                      <div class="card-body">                         
                           <div class="form-row">
                              <div class="form-group col-md-12">
                                <label for="customerDetailsCustomerFullName">Member Name</label>
                                <input type="text" class="form-control"name="name" placeholder="Enter Product Name" value="{{$team->name}}">                               
                              </div>
                            </div>
                        
                            <div class="form-row">
                              <div class="form-group col-md-12">
                                <label for="customerDetailsCustomerFullName">Member Position
                                </label>
                                <input type="text" class="form-control"name="position" placeholder="Enter Product Name" value="{{$team->position}}">                               
                              </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                  <label for="customerDetailsCustomerFullName">Member Mail
                                  </label>
                                  <input type="email" class="form-control"name="mail" placeholder="Enter Product Description" value="{{$team->mail}}" >
                                </div>
                              </div>
  
                                 <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label>Member Mail</label>
                              <span class="border border-dark p-3"><img src="{{asset('uploads/'.$team->image)}}" style="width:200px; height:200px"></span>
                            </div>
                              <div class="form-row">
                              <div class="form-group col-md-6">
  
                                <label for="customerDetailsCustomerFullName">Product Image</label>
                               <input type="file" name="image">
                              </div>
                            </div>
                        <input type="submit" name="submit" value="SAVE" class="btn btn-success">
                        <input type="reset" name="reset" value="CLEAR" class="btn btn-danger">
                      </div> 
                  </form>
                  </div>
              </div>
          </main>
  
@endsection