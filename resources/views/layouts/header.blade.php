<!DOCTYPE html>
<html lang="en">

<head>
  <title>Pharma &mdash; Colorlib Template</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">


  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">
<script src= "http://translate.google.com/translate a/element.js?cb=loadGoogleTranslate" ></script>
<style>
 
</style>
</head>
 
<body>

  <div class="site-wrap">


    <div class="site-navbar py-2">

      <div class="search-wrap">
        <div class="container">
          <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
          <form action="#" method="post">
            <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
          </form>
        </div>
      </div>

      <div class="container">
       
        <div class="d-flex align-items-center justify-content-between">
          <div class="logo">
            <div class="site-logo">
               
              <a href="index.html" class="js-logo-clone">Pharma</a>
              
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                
                <li><a href="{{route('welcome')}}">Home</a></li>
                <li><a href="{{route('shop')}}">Store</a></li>

                <li class="has-children">
                  <a href="#">Category</a>
                  <ul class="dropdown">
                     @foreach ($data4 as $category)
                 
                       <li><a href="{{route('categoryproducts',$category->id)}}">{{$category->cname}}</a></li> 

                    @endforeach

                  </ul>
                </li>
                <li><a href="{{route('about')}}">About</a></li>
                <li><a href="{{route('contat.us')}}">Contact</a></li>
                 <li><a href="{{route('gallary')}}">Gallary</a></li>
                <div id="google_translate_element"></div>
              </ul>
 <div class="form-group">
      <input type="text" name="search" id="search" class="form-control" placeholder="Search Customer Data" />
     </div>
              
            </nav>
          </div>
          <div class="icons">
            <a href="#" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>
            <a href="{{url('cart')}}" class="icons-btn d-inline-block bag">
              <span class="icon-shopping-bag"></span>
              <span class="number">2</span>
            </a>
            <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span
                class="icon-menu"></span></a>
          </div>
        </div>
      </div>
    </div>
@include('flash-message')
@yield('content')



@include('layouts.footer')


 <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
<!-- //script for ggl language -->
 <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  
  <!-- script for live search -->
<script>
$(document).ready(function(){

 fetch_customer_data();

 function fetch_customer_data(query = '')
 {
  $.ajax({
   url:"{{ route('live_search.action') }}",
   method:'GET',
   data:{query:query},
   dataType:'json',
   success:function(data)
   {
    $('tbody').html(data.table_data);
    $('#total_records').text(data.total_data);
   }
  })
 }

 $(document).on('keyup', '#search', function(){
  var query = $(this).val();
  fetch_customer_data(query);
 });
});
</script>

