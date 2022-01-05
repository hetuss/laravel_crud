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
                            <div class="card-header">
                                <strong class="card-title">Gallary Table</strong>
                            </div>
                            <div class="card-body">
                              <form  method="POST" enctype="multipart/form-data" action="{{route('update.gallary')}}">
                              	 @csrf
                                 <input type="text" name="id" value="{{$gallary->id}}">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                           
                            <tr>
                                  <td height="50">photo</td>
                                 <td><input type="file" name="image"><img src="{{asset('uploads/'. $gallary->image)}}" style="width:200px; height:200px"></td>
                               </tr>
                            <tr>
                                 <td colspan="2">
                         <input type="submit" name="submit" value="SAVE" class="btn btn-success">
                         
                                </td>
                            </tr>
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