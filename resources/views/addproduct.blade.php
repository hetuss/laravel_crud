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
                            <div class="card-header">
                                <strong class="card-title">Product Table</strong>
                            </div>

                            <div class="card-body">
                               <form method="POST" enctype="multipart/form-data" action="{{route('store.product')}}">
                                @csrf
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                   
                                    <tbody>
                             
                          <tr><td>name</td></tr>
                         <tr><td><textarea name="name" class="editor form-control" ></textarea></td></tr>

                         <tr><td>description</td></tr>
                         <tr><td><input type="text" name="description"></td></tr>

                         <tr><td>price</td></tr>
                        <tr><td><input type="text" name="price"></td></tr>

                         <tr><td>image</td></tr>
                        <tr><td><input type="file" name="image"></td></tr>

                            <tr><td>cname</td></tr>
                         <tr><td><select name="cname">
                            @foreach($categorys as $categoryss)
                             <option value="{{$categoryss->id}}">{{$categoryss->cname}}
                                 
                             </option>
                            @endforeach
                         </select></td></tr>
                        

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