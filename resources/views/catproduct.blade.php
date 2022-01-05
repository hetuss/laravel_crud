@extends('layouts.header')
@section('content')

 <div class="row">
           @foreach($catpro as $catpro)
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <span class="tag">Sale</span>
            <a href="{{route('categoryproducts',$catpro->id)}}"><img src="{{asset('uploads/'. $catpro->image)}}"style="width:100px;
height:100px"></a>
            <h3 class="text-dark">{!!$catpro->name!!}</h3>
            <p class="price">{!!$catpro->price!!}</p>
          </div>
          @endforeach
        </div>
@endsection