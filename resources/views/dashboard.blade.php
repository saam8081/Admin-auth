
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
    
    <div class="account-page">
        <div class="page-name">
            <h4>Account Page</h4>
        </div>
    <div class="container">
    <div class="main-body">
    
          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb" style="background: #ced8e2">
              <li>Welcome {{Auth::user()->name}} </li>
            </ol>
          </nav>
          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4>{{Auth::user()->name}}</h4>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mt-3">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>
                    <span class="text-secondary">http://usamamazhar.info</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github mr-2 icon-inline"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>Github</h6>
                    <span class="text-secondary">bootdey</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6>
                    <span class="text-secondary">@bootdey</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
                    <span class="text-secondary">bootdey</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
                    <span class="text-secondary">bootdey</span>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-6">
                      <h6 class="mb-0">Full Name:</h6>
                    </div>
                    <div class="col-sm-6 text-secondary">
                      {{Auth::user()->name}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-4">
                      <h6 class="mb-0">Email:</h6>
                    </div>
                    <div class="col-sm-8 text-secondary">
                      {{Auth::user()->email}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-6">
                      <h6 class="mb-0">Account Balance:</h6>
                    </div>
                    <div class="col-sm-6 text-secondary">
                      {{Auth::user()->balance}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-6">
                      <h6 class="mb-0">Purchase Balance:</h6>
                    </div>
                    <div class="col-sm-6 text-secondary">
                      {{Auth::user()->phone}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-6">
                      <h6 class="mb-0">Ads Available:</h6>
                    </div>
                    <div class="col-sm-6 text-secondary">
                      {{Auth::user()->address}}
                    </div>
                  </div>
                </div>
              </div>
            </div>
              <div class="col-md-4">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-5">
                      <h6 class="mb-0">Member Since:</h6>
                    </div>
                    <div class="col-sm-7 text-secondary">
                      {{Auth::user()->created_at}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-5">
                      <h6 class="mb-0">Total clicks:</h6>
                    </div>
                    <div class="col-sm-7 text-secondary">
                      {{Auth::user()->clicks}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-6">
                      <h6 class="mb-0">Total Withdraw:</h6>
                    </div>
                    <div class="col-sm-6 text-secondary">
                      {{Auth::user()->balance}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-7">
                      <h6 class="mb-0">Pending Withdraws:</h6>
                    </div>
                    <div class="col-sm-5 text-secondary">
                      {{Auth::user()->phone}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-6">
                      <h6 class="mb-0">Total earn:</h6>
                    </div>
                    <div class="col-sm-6 text-secondary">
                      {{Auth::user()->address}}
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>

@extends('layouts.footer')
@section('content')
@endsection

        
</body>
</html>
