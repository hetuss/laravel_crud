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
                                <strong class="card-title" style="color:white">Contact  Table</strong>
                            </div>
                            <div class="card-body"> 
                                <!-- don't give action in mainbladefile -->
                              <form  method="" enctype="multipart/form-data" >
                                 @csrf

                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>name</th>
                                            <th>phone</th>
                                            <th>email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                          @foreach($contact as $contacts)
                                         <tr>
                                            
                                            <td>{!!$contacts->address!!}</td>
                                            <td>{!!$contacts->phone!!}</td>
                                            <td>{!!$contacts->email!!}</td>

                                            
                                                
                                                 <td><a href="{{route('edit.contact',$contacts->id)}}" ><i class="fa fa-edit fa-lg"  aria-hidden="true" style="color:green;"></i></a>&nbsp;&nbsp;</td>  
                                           

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