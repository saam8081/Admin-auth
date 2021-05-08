<!DOCTYPE html>
<html>
    <head>
      <title> Laravel Project</title>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <link rel="stylesheet" href="/custom_css/index.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      </head>
      	<body style="background: #f3f5fa">
<!-- Start Navbar -->
      <div class="header" style="border-bottom: 1px solid;" >
        <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
          <a class="navbar-brand" href="/" style="font-size: 25px;font-weight: 900;">YoAds</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarNavDropdown" >
            <ul class="navbar-nav ml-auto">
              @if (Route::has('login'))
                @Auth
                <li class="nav-item dropdown " style="margin-left: 6px;">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-weight: 700;">
                  Earn by
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="{{route('viewads')}}">View Ads</a>
                  <a class="dropdown-item" href="{{route('videoads')}}">Video Ads</a>
                  <a class="dropdown-item" href="#">Play Game</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link link-style" href="{{route('pricing')}}" style="font-weight: 700;">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('dashboard')}}" style="font-weight: 700;">My account</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('logout')}}" style="font-weight: 700;">Logout</a>
              </li>
                @else
                <li class="nav-item">
                <a class="nav-link" href="{{route('login')}}" style="font-weight: 700;">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('register')}}" style="font-weight: 700;">Register</a>
              </li>
                @endauth
              @endif
            </ul>
          </div>
        </nav>
        </div>
      </div>
<!-- End Navbar -->

<!-- Start Body-content -->

		<!-- Map -->

        <section class="contact-page">
          <div class="page-name">
            <h4>Contact Page</h4>
          </div>
        	<div class="container" style="margin-top: 20px">
            <h3 style="background: red; padding: 5px; font-style: oblique;background: #47b2e4;border-radius: 8px;margin-bottom: 40px; text-align: center;">Contact with us we are available 24 / 7</h3>
        		<div class="col-lg-6">
        			<iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d885.1807772761945!2d73.6685764725244!3d32.0603545531546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d32.0603131!2d73.6689588!4m5!1s0x391f4dbb6cdfe12d%3A0xcd79d05714af8b55!2sHafizabad%2C%20Punjab%2C%20Pakistan!3m2!1d32.0711858!2d73.68947179999999!5e1!3m2!1sen!2s!4v1618254972573!5m2!1sen!2s" width="400" height="300" style="border:0; margin-left: -14px;" allowfullscreen="" loading="lazy"></iframe>
        		</div>
        	</div>
        </section>
        <!-- End Map -->
        <!-- Forms and Details -->
        <section class="container" style="margin-top: 20px; margin-bottom: 20px">
          <div class="row">
            <div class="col-lg-4">
              <br>
              <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action active">
                   <i class="fa fa-handshake-o" aria-hidden="true"></i> Meet With us</a>
                <a href="#" class="list-group-item list-group-item-action"> <i class="fa fa-phone"></i> +92 304 7439904 </a>
                <a href="#" class="list-group-item list-group-item-action"><i class="fa fa-envelope"></i> Usama8081@gmail.com</a>
                <a href="#" class="list-group-item list-group-item-action"><i class="fa fa-map-marker" aria-hidden="true"></i> DHA Phase 5 Lahore</a>
              </div>
              <div class="list-group" style="margin-top: 70px;">
                <a href="#" class="list-group-item list-group-item-action active">
                   <i class="fa fa-handshake-o" aria-hidden="true"></i> Contact With Us</a>
                <a href="#" class="list-group-item list-group-item-action"> <i class="fa fa-facebook"></i> @malikusamamazhar</a>
                <a href="#" class="list-group-item list-group-item-action"><i class="fa fa-twitter"></i> Usama1122</a>
                <a href="#" class="list-group-item list-group-item-action"><i class="fa fa-linkedin" aria-hidden="true"></i> usamamazhar121</a>
              </div>
              <br>
              <label><i class="fa fa-clock-o"></i> <b>Working Hours</b> <br> 9:00AM - 2:00PM </label>
              <br>
            </div>
            <div class="col-lg-8">
              <form action="{{route('contact.create')}}" method="get">
              
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" placeholder="Write Name Here" class="form-control" name="name">
                </div>
                <div class="form-group">
                  <label>Subject</label>
                  <input type="text" placeholder="Write Subject Here" class="form-control" name="subject">
                </div>
                <div class="form-group">
                  <label>Department</label>
                  <select name="department" class="form-control">
                    <option>Select Department</option>
                    <option>Publisher</option>
                    <option>Advertiser</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Write Text Here</label>
                  <textarea class="form-control" name="message" rows="10" cols="10"></textarea>
                </div>
                <div class="form-group">
                  <button class="btn btn-danger float-right">Send Message</button> <br>
                </div>
            </form>
            </div>
          </div>
        </section>
        <!-- End Forms -->
<!-- End Body-content -->

@extends('layouts.footer')
@section('content')
@endsection
</html>
