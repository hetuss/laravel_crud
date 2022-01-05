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
                            <li class="active">Data table</li>
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
                            <div class="card-header" style="background-color:black;">
                                <strong class="card-title" style="color:white;">Gallary Table</strong>

                               <p align="Right">
                               <button type="submit" name="submit"><a href="{{route('addgallary')}}"><i class="fa fa-plus" aria-hidden="true"></i>Add gallary</a></button>
                               </p>
                           </div>
                            </div>
                            <div class="card-body"> 
                                <!-- don't give action in mainbladefile -->
                              <form  method="" enctype="multipart/form-data" >
                              	 @csrf

                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	  @foreach($gallary as $gallary)
                                         <tr>
                                           <td> <img src="{{asset('uploads/'.
                                          $gallary->image)}}"
                                          style="width:100px;
                                          height:100px"></td>
                                            
                                                
                                                 <td> <a href="{{route('edit.gallary',$gallary->id)}}" ><i class="fa fa-edit fa-lg"  aria-hidden="true" style="color:green;"></i></a>&nbsp;&nbsp;

                                                 <a href="{{route('delete.gallary',$gallary->id)}}" class="button delete-confirm"><i class="fa fa-trash fa-lg"  aria-hidden="true" style="color:red;"></i></a>&nbsp;&nbsp; </td>  
                                        </td>  
                                           

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