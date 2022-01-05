
<footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3  mb-lg-0">

            <div class="block-7">
              <h3 class="footer-heading mb-4">About Us</h3>
                @foreach($data as $about)
              <p>{{$about->description}}</p>
                 @endforeach
            </div>

          </div>
          <div class="col-lg-3 mx-auto  mb-lg-0">
            <h3 class="footer-heading ">Quick Links</h3>
            <ul class="list-unstyled">
              
              <li><a href="{{route('welcome')}}">Home</a></li>
              <li><a href="{{route('shop')}}">Store</a></li>
              <li><a href="{{route('about')}}">About</a></li>
              <li><a href="{{route('contat.us')}}">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-3 mx-auto  mb-lg-0">
          	<h3 class="footer-heading ">Social Media</h3>
            <div class="social-icons">
            	 @foreach($ssdata as $socialmedia)
						<ul>
						<li><a href="{{$socialmedia->twitter}}"><i class="icon-twitter"></i></a></li>
						<li><a href="{{$socialmedia->facebook}}"><i class="icon-facebook"></i></a></li>
						
						<li><a href="{{$socialmedia->instragram}}"><i class="icon-instagram"></i></a></li>
						</ul>
					</div>
					   @endforeach
          </div>


          <div class="col-md-6 col-lg-3">
            <div class="block-5 ">
              <h3 class="footer-heading ">Contact Info</h3>
              
              <ul class="list-unstyled">
              	 @foreach($contactdata as $contact)
                <li >{{$contact->address}}</li>
                <li><a href="phone:9999999999">{{$contact->phone}}</a></li>
                <li ><a href="mailto:hetusapariya@gmail.com">{{$contact->email}}</a></li>
                 @endforeach
              </ul>
             
            </div>

</div>
          </div>
        </div>
      
        <!-- hitwebcounter Code START -->
        <div class="row  text-center">
          <div class="col-md-12">
            <p style="color:black;"><b>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;
             <strong> <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made
              with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank"
                class="text-primary">Hetu Sapariya</a></b></strong>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
   
      </div>
    </footer>
 

 

</body>

</html>
