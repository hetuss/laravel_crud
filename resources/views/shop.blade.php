@extends('layouts.header')
@section('content')
<<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <style type="text/css">
 
 
.pagination {

}

.pagination a {
  text-align: center;
 color: black;
 float: left;
 border-radius: 50px;

 padding: 8px 16px;
 text-decoration: none;
 transition: background-color .3s;
 border: 1px solid #ddd;
}

.pagination a.active {
 background-color: #4CAF50;
 color: white;
 border: 1px solid #4CAF50;
}

.pagination a:hover:not(.active) {background-color:#25eaf5;}



</style>
</head>
<body>

</body>
</html>

<div class="site-section">
      <div class="container">
        
        <div class="row">
          <ul>
            
          </ul>
        </div>
    
        <div class="row">
           @foreach($posts as $shop)
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <span class="tag">Sale</span>
            <a href="{{route('singlproduct',$shop->id)}}"><img src="{{asset('uploads/'. $shop->image)}}"style="width:100px;
height:100px"></a>
            <h3 class="text-dark">{!!$shop->name!!}</h3>
            <p class="price">{!!$shop->price!!}</p>
          </div>
          @endforeach
@if ($posts->lastPage() > 1)
        <nav aria-label="Page navigation">
            <ul class="pagination">
                @if($posts->currentPage() != 1 && $posts->lastPage() >= 5)
                <li>
                    <a href="{{ $posts->url($posts->url(1)) }}" aria-label="Previous">
                        <span aria-hidden="true">First</span>
                    </a>
                </li>
                @endif
                @if($posts->currentPage() != 1)
                <li>
                    <a href="{{ $posts->url($posts->currentPage()-1) }}" aria-label="Previous">
                        <span aria-hidden="true">&#x3C;</span>
                    </a>
                </li>
                @endif
                @for($i = max($posts->currentPage()-2, 1); $i <= min(max($posts->currentPage()-2, 1)+4,$posts->lastPage()); $i++)
                @if($posts->currentPage() == $i)
                <li class="active">
                @else
                <li>
                @endif
                    <a href="{{ $posts->url($i) }}">{{ $i }}</a>
                </li>
                @endfor
                @if ($posts->currentPage() != $posts->lastPage())
                <li>
                    <a href="{{ $posts->url($posts->currentPage()+1) }}" aria-label="Next">
                        <span aria-hidden="true">&#x3E;</span>
                    </a>
                </li>
                @endif
                @if ($posts->currentPage() != $posts->lastPage() && $posts->lastPage() >= 5)
                <li>
                    <a href="{{ $posts->url($posts->lastPage()) }}" aria-label="Next">
                        <span aria-hidden="true">Last</span>
                    </a>
                </li>
                @endif
            </ul>
        </nav>
        @endif
        </div>
      </div>
    </div>

    
    <div class="site-section bg-secondary bg-image" style="background-image: url('images/bg_2.jpg');">
      <div class="container">
        <div class="row align-items-stretch">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <a href="#" class="banner-1 h-100 d-flex" style="background-image: url('images/bg_1.jpg');">
              <div class="banner-1-inner align-self-center">
                <h2>Pharma Products</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae ex ad minus rem odio voluptatem.
                </p>
              </div>
            </a>
          </div>
          <div class="col-lg-6 mb-5 mb-lg-0">
            <a href="#" class="banner-1 h-100 d-flex" style="background-image: url('images/bg_2.jpg');">
              <div class="banner-1-inner ml-auto  align-self-center">
                <h2>Rated by Experts</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae ex ad minus rem odio voluptatem.
                </p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>

@endsection