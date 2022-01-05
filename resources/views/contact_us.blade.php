 @extends('layouts.header')
@section('content')

 <div class="col-md-12">
    
            <form action="{{route('clientqueryss')}}" method="post" >
              @csrf
    
              <div class="p-3 p-lg-5 border">
                <div class="form-group row">
                  <div class="col-md-6">
                    @foreach($query as $query)
                    <label class="text-black">First Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_fname" name="firstname">
                  </div>
                  <div class="col-md-6">
                    <label  class="text-black">Last Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_lname" name="lastname">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label  class="text-black">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="c_email" name="email" placeholder="">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label  class="text-black">Subject </label>
                    <input type="text" class="form-control" id="c_subject" name="subject">
                  </div>
                </div>
    
                <div class="form-group row">
                  <div class="col-md-12">
                    <label  class="text-black">Message </label>
                    <textarea name="message" id="c_message" cols="30" rows="7" class="form-control"></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-lg-12">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Send Message">
                  </div>
                </div>
              </div>
            </form>
            @endforeach
          </div>

              @foreach($mapss as $mapss)
          <div class="col-md-6">
            <div id="map" class="colorlib-map"><iframe src="{{$mapss->map}}" style="width: 1400px; height: 400px;"></iframe></div>    
          </div>
          @endforeach


@endsection