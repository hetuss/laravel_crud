@extends('layouts.header')
@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
<style type="text/css">
   .photo-gallery {
 color:#313437;
 background-color:#fff;
}

.photo-gallery p {
 color:#7d8285;
}

.photo-gallery h2 {
 font-weight:bold;
 margin-bottom:40px;
 padding-top:40px;
 color:inherit;
}

@media (max-width:767px) {
 .photo-gallery h2 {
   margin-bottom:25px;
   padding-top:25px;
   font-size:24px;
 }
}

.photo-gallery .intro {
 font-size:16px;
 max-width:500px;
 margin:0 auto 40px;
}

.photo-gallery .intro p {
 margin-bottom:0;
}

.photo-gallery .photos {
 padding-bottom:20px;
}

.photo-gallery .item {
 padding-bottom:30px;
}

.column{
cursor:pointer;
width: 33.33%;
}
.fadein img{
opacity:0.5;
transition: 1s ease;
}
 
.fadein img:hover{
opacity:1;
transition: 1s ease;
}
</style>
<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
  padding: 20px;
  font-family: Arial;
}

/* Center website */
.main {
  max-width: 1000px;
  margin: auto;
}

h1 {
  font-size: 50px;
  word-break: break-all;
}

.row {
  margin: 10px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
  padding: 8px;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  display: none; /* Hide all elements by default */
}

/* Clear floats after rows */ 
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Content */
.content {
  background-color: white;
  padding: 10px;
}

/* The "show" class is added to the filtered elements */
.show {
  display: block;
}

/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: white;
  cursor: pointer;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}
</style>

<!-- MAIN (Center website) -->
<div class="main">

<div id="myBtnContainer">
  <button class="btn active" onclick="filterSelection('all')"> Show all</button>
  <button class="btn" onclick="filterSelection('syrup')"> Syrup</button>
  <button class="btn" onclick="filterSelection('medicine')"> Medicine</button>
</div>

<!-- Portfolio Gallery Grid -->
<div class="row"  style="display: table-row;height:100%;width:100%;">
@foreach($shop as $sp)
  <div class="column syrup">
   
    <div class="content">
          
      <img src="{{asset('uploads/'.$sp->image)}}" style="max-width: 100%;max-width: 100%;">
     <h4>syrup</h4>
    
    </div>
  </div> 
    @endforeach
  </div>
  <div class="row" style="display: table-row;height:100%;width:100%;">
      @foreach($shops as $sp)
  <div class="column medicine">
  
    <div class="content">
      <img src="{{asset('uploads/'.$sp->image)}}" style="max-width: 100%;max-width: 100%;">
      <h4>medicine</h4>
    
    </div>
   
  </div>
   @endforeach
</div>

<!-- END MAIN -->
</div>
<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>




 
@endsection