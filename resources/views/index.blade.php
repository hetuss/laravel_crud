@extends('layouts.header')
@section('content')
    <div class="site-blocks-cover" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 mx-auto order-lg-2 align-self-center">
            <div class="site-block-cover-content text-center">
              <h2 class="sub-title">Effective Medicine, New Medicine Everyday</h2>
              <h1>Welcome To Pharma</h1>
              <h3> @foreach($viewspage as $viewspage)
   {{ $viewspage -> views }}
 @endforeach</h3>  
 <h3>Total Views</h3>
              <p>
                <a href="#" class="btn btn-primary px-5 py-3">Shop Now</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section">
      <div class="container">
        <div class="row align-items-stretch section-overlap">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="banner-wrap bg-primary h-100">
              <a href="#" class="h-100">
                <h5>Free <br> Shipping</h5>
                <p>
                  Amet sit amet dolor
                  <strong>Lorem, ipsum dolor sit amet consectetur adipisicing.</strong>
                </p>
              </a>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="banner-wrap h-100">
              <a href="#" class="h-100">
                <h5>Season <br> Sale 50% Off</h5>
                <p>
                  Amet sit amet dolor
                  <strong>Lorem, ipsum dolor sit amet consectetur adipisicing.</strong>
                </p>
              </a>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="banner-wrap bg-warning h-100">
              <a href="#" class="h-100">
                <h5>Buy <br> A Gift Card</h5>
                <p>
                  Amet sit amet dolor
                  <strong>Lorem, ipsum dolor sit amet consectetur adipisicing.</strong>
                </p>
              </a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="title-section text-center col-12">
            <h2 class="text-uppercase">Popular Products</h2>
          </div>
        </div>

        <div class="row">
           @foreach($product as $product)

          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <span class="tag">Sale</span>
           
            <a href="shop-single.html"><img src="{{asset('uploads/'.
                                          $product->image)}}"></a>
            <h3 class="text-dark"><a href="shop-single.html">{{$product->name}}</a></h3>
            <p class="price">{{$product->description}}</p>
           
          </div>
           @endforeach
        <div class="row mt-5">
          <div class="col-12 text-center">
            <a href="{{route('shop')}}" class="btn btn-primary px-4 py-3">View All Products</a>
          </div>
        </div>
      </div>
    </div>

    
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="title-section text-center col-12">
            <h2 class="text-uppercase">New Products</h2>
          </div>
        </div>

        <div class="row">

         
          <div class="col-md-12 block-3 products-wrap">


            <div class="nonloop-block-3 owl-carousel">
             @foreach($slider as $sliders)
              <div class="text-center item mb-4"> 

                <a href="shop-single.html"><img src="{{asset('uploads/'.
                                          $sliders->image)}}"></a>
                <h3 class="text-dark">{{$sliders->name}}</h3>
                <p class="price">{{$sliders->description}}</p>
            
              </div>

               @endforeach

            </div>
            
 
          </div>
        </div>

      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="title-section text-center col-12">
            <h2 class="text-uppercase">Testimonials</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 block-3 products-wrap">
            <div class="nonloop-block-3 no-direction owl-carousel">
        
              <div class="testimony">
                @foreach($test as $tests)
                <blockquote>
                  
                  <img src="{{asset('uploads/'.$tests->image)}}" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
                  <p>&ldquo;{{$tests->description}}&rdquo;</p>
                </blockquote>

                <p>&mdash;{{$tests->name}}</p>
                @endforeach
              </div>
        
            </div>
          </div>
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

    