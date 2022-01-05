@extends('layouts.backend.main')
@section('content')

 <div id="right-panel" class="right-panel">

        <!-- Header-->
        
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Table</a></li>
                            <li class="active">product table</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
 
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header" style="background-color: black;">
                               <strong class="card-title" style="color: white;" >Product Table</strong>
                               <p align="Right">
                               <button type="submit" name="submit"><a href="{{route('addproduct')}}"><i class="fa fa-plus" aria-hidden="true"></i>Add product</a></button>
                               </p>
                           </div>

                            <div class="card-body"> 
                                <!-- don't give action in mainbladefile -->
                              <form  method="POST" enctype="multipart/form-data" >
                              	 @csrf

                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>name</th>
                                            <th>description</th>
                                            <th>price</th>
                                            <th>image</th>
                                            <th>cname</th>
                                           
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	 @foreach($product as $products)
                                         <tr>
                                         	
                                         	<td>{!!$products->name!!}</td>
                                            <td>{!!$products->description!!}</td>
                                            <td>{!!$products->price!!}</td>
                                           <td> <img src="{{asset('uploads/'.
                                          $products->image)}}"
                                          style="width:100px;
                                          height:100px"></td>
                                            <td>{!!$products->cname!!}</td>
                                               
                                                
                                                 <td> <a href="{{route('edit.product',$products->id)}}" ><i class="fa fa-edit fa-lg"  aria-hidden="true" style="color:green;"></i></a>&nbsp;&nbsp;

                                                   <a href="{{route('delete.product',$products->id)}}" class="button delete-confirm"><i class="fa fa-trash fa-lg"  aria-hidden="true" style="color:red;"></i></a>&nbsp;&nbsp; </td>  
                                           

                                         </tr>
                                         @endforeach
                                    </tbody>
                                </table>
                              </div>
                            </div>
                        </form>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


 

    

 @endsection