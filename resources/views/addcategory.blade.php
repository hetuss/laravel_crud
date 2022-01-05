@extends('layouts.backend.main')
@section('content')

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  
</head>
<body>
  <div class="col-md-12">
                        <div class="card">
                            <div class="card-header" style="background-color:black;">
                                <strong class="card-title" style="color:white;" >Category Table</strong>
                            </div>

                            <div class="card-body">
                               <form method="POST" enctype="multipart/form-data" action="{{route('store.category')}}">
                                @csrf
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                   
                                    <tbody>
                                       
                              
                          <tr><td>name</td></tr>
                         <tr><td><textarea name="cname" class="editor form-control" ></textarea></td></tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
   
  </table>
   <button type="submit" name="submit">save</button>
 </form>
 
</body>
</html>
 @endsection