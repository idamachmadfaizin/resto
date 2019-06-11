@extends('templates.user.user_default')

@section('content')

<div class="unit-5 overlay" style="background-image: url('{{ asset("assets/user/images/hero_bg_2.jpg") }}');">
    <div class="container text-center">
      <h2 class="mb-0">Contact</h2>
      <p class="mb-0 unit-6"><a href="index.html">Home</a> <span class="sep">></span> <span>Contact</span></p>
    </div>
  </div>

  
  

  <div class="site-section bg-light">
    <div class="container">
      <div class="row">
     
        <div class="col-md-12 col-lg-8 mb-5">
        
          
        
          <form action="#" class="p-5 bg-white">

            <div class="row form-group">
              <div class="col-md-12 mb-3 mb-md-0">
                <label class="font-weight-bold" for="fullname">Full Name</label>
                <input type="text" id="fullname" class="form-control" placeholder="Full Name">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-md-12">
                <label class="font-weight-bold" for="email">Email</label>
                <input type="email" id="email" class="form-control" placeholder="Email Address">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-md-12">
                <label class="font-weight-bold" for="email">Subject</label>
                <input type="text" id="subject" class="form-control" placeholder="Enter Subject">
              </div>
            </div>
            

            <div class="row form-group">
              <div class="col-md-12">
                <label class="font-weight-bold" for="message">Message</label> 
                <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Say hello to us"></textarea>
              </div>
            </div>

            <div class="row form-group">
              <div class="col-md-12">
                <input type="submit" value="Send" class="btn btn-primary  py-2 px-4">
              </div>
            </div>


          </form>
        </div>

        <div class="col-lg-4">
          <div class="p-4 mb-3 bg-white">
            <h3 class="h5 text-black mb-3">Contact Info</h3>
            <p class="mb-0 font-weight-bold">Address</p>
            <p class="mb-4">203 Fake St. Mountain View, San Francisco, California, USA</p>

            <p class="mb-0 font-weight-bold">Phone</p>
            <p class="mb-4"><a href="#">+1 232 3235 324</a></p>

            <p class="mb-0 font-weight-bold">Email Address</p>
            <p class="mb-0"><a href="#">youremail@domain.com</a></p>

          </div>
          
          <div class="p-4 mb-3 bg-white">
            <h3 class="h5 text-black mb-3">More Info</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa ad iure porro mollitia architecto hic consequuntur. Distinctio nisi perferendis dolore, ipsa consectetur</p>
            <p><a href="#" class="btn btn-primary  py-2 px-4 rounded-0">Learn More</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
    
@endsection