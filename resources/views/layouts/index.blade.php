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

<!-- Start Slider -->
        <div class="slider">
          <div class="container">
            <div class="row">
              <div class="col-lg-6" style="margin-top: 122px;">
              <h1>Better Solutions For Your Business</h1>
              <h2>We bring the most exciting opportunities straight to our members</h2>
              
               @if (Route::has('login'))
                @Auth
              <a href="{{route('dashboard')}}">My account</a>
                <a href="{{route('logout')}}">Logout</a>
                @else
                <a href="{{route('register')}}">Get Started</a>
                <a href="{{route('login')}}">Login now</a>
                @endauth
              @endif
            </div>
            <div class="col-lg-6"> 
              <img src="/img/hero-img.png" style="height: 490px; margin-top: 34px;">
            </div>
            </div>            
          </div>
        </div>
<!-- End Slider -->

<!-- About us Start -->
    <section style="padding-top: 60px; overflow: hidden;padding-bottom: 50px;">
      <div class="container">
        <div class="section-title">
          <h2>About Us</h2>
        </div>
        <div class="row content">
          <div class="col-lg-6">
            <p>
              Work with us is simply dummy text of the printing and typesetting industry Payment instanat almost and added in seconds.
            </p>
            <ul>
              <li><i class="fa fa-check-square-o"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
              <li><i class="fa fa-check-square-o"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
              <li><i class="fa fa-check-square-o"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
            </ul>
          </div>
          <div class="col-lg-6 ">
            <p>
              It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
            </p>
            <a href="#" class="btn-learn-more">Learn More</a>
          </div>
        </div>
      </div>
    </section>
<!-- About us End -->

<!-- Services Start -->
        <section id="services" class="services section-bg" style="padding-top: 30px;
              background: #f3f5fa;padding-bottom: 50px;">
            <div class="container aos-init aos-animate" data-aos="fade-up">
              <div class="section-title">
                <h2>Services</h2>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here.</p>
              </div>
              <div class="row">
                <div class="col-xl-3 col-md-6 d-flex align-items-stretch aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
                  <div class="icon-box">
                    <div class="icon"><i class="bx bxl-dribbble"></i></div>
                    <h4><a href="">Buy Advertise</a></h4>
                    <p>Chose your advertise plane with cheap prices and get more benefits with less money</p>
                  </div>
                </div>
                <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="200">
                  <div class="icon-box">
                    <div class="icon"><i class="bx bx-file"></i></div>
                    <h4><a href="">View Ads</a></h4>
                    <p>Sign up your account start earning without investment and start ads watching</p>
                  </div>
                </div>
                <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="300">
                  <div class="icon-box">
                    <div class="icon"><i class="bx bx-tachometer"></i></div>
                    <h4><a href="">Video Ads</a></h4>
                    <p>Go to the earning dropdown menue and chose video ads catagory for watching videos</p>
                  </div>
                </div>
                <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="400">
                  <div class="icon-box">
                    <div class="icon"><i class="bx bx-layer"></i></div>
                    <h4><a href="">Simple Offerwalls</a></h4>
                    <p>Earn money complete high paying surveys and complete easy task with in few minuts</p>
                  </div>
                </div>
              </div>
            </div>
        </section>
<!-- Services End -->

  @yield('content')
<!-- Start Footer -->
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>YoAds</h3>
            <p>
              Aziz Colony Stree no 1 <br>
              Hafizabad,PU 67001 <br>
              Pakistan <br><br>
              <strong>Phone:</strong> +92 304 7439 904<br>
              <strong>Email:</strong> usama8081@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="fa fa-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="fa fa-chevron-right"></i> <a href="{{route('contact')}}">Contact</a></li>
              <li><i class="fa fa-chevron-right"></i> <a href="#">About Us</a></li>
              <li><i class="fa fa-chevron-right"></i> <a href="#">Privacy policy</a></li>
              <li><i class="fa fa-chevron-right"></i> <a href="#">Terms of service</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="fa fa-chevron-right"></i> <a href="#">View Ads</a></li>
              <li><i class="fa fa-chevron-right"></i> <a href="#">Video Ads</a></li>
              <li><i class="fa fa-chevron-right"></i> <a href="#">Play Games</a></li>
              <li><i class="fa fa-chevron-right"></i> <a href="#">Advertisement</a></li>
              <li><i class="fa fa-chevron-right"></i> <a href="#">Revenue Shares</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Fell free to contact with us at any time, we are available 24/7 send your messages now.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-skype"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="footer-bottom clearfix" style="background: #37517e">
      <div class="container">
        <div class="copyright">
          © Copyright <strong><span>YoAds</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          Designed by <a href="">Usama Mazhar</a>
        </div>
      </div>
    </div>
<!-- End footer -->
</body>
</html>