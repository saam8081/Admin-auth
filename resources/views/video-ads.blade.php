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
<body>
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
		<div class="video-page">
			<div class="page-name">
            <h4>Video Ads</h4>
    		</div>
		</div>
@extends('layouts.footer')
@section('content')
@endsection
</body>
</html>