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
                                <strong class="card-title">socialmedia Table</strong>
                            </div>
                            <div class="card-body">
                              <form  method="POST" enctype="multipart/form-data" action="{{route('update.socialmedia')}}">

                              	 @csrf
                                 <input type="hidden" name="id" value="{{$medias->id}}">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <tr>
                                <td height="20" width="20">instragram</td>
                                <td><input type="text" name="instragram" value="{{$medias->instragram}}">
                                    <i style="color:#fb3958;" class="fa fa-instagram" aria-hidden="true"></i><a href="https://www.instagram.com/accounts/login/" target="_blank"></td></tr>
                            <tr>
                                 <tr>
                                <td height="20" width="20">facebook</td>
                                <td><input type="text" name="facebook" value="{{$medias->facebook}}">
                                <i style="color:#4267B2;" class="fa fa-facebook-official" aria-hidden="true"></i><a href="https://www.facebook.com/add.a.link/" target="_blank"></td></tr>
                            <tr>
                                 <tr>
                                <td height="20" width="20">twitter</td>
                                <td><input type="text" name="twitter" value="{{$medias->twitter}}">
                                <i style="color:#178bbd;" class="fa fa-twitter-square" aria-hidden="true"></i><a href="https://twitter.com/link?lang=en" target="_blank"></td></tr>
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