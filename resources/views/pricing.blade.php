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
                  <a class="dropdown-item" href="#">View Ads</a>
                  <a class="dropdown-item" href="#">Video Ads</a>
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
		 <div class="pricing-head">
		 	<h2>Upgrade your account</h2>
		 </div>
			<div id="ads_list">
            <script type="text/javascript" src="./fixed_ads.php?adv=js"></script>
<div class="shopcart">
    <div class="shoptitle"><div class="carticon">Fixed PTC Advertisements</div></div>
    <div class="shopcontent">
    <form method="get" action="./fixed_ads.php">
    <input type="hidden" name="view" value="advertise">
    <select name="item" id="fixedadlistformlist">
    <optgroup label="1 day(s)"></optgroup><option value="3">10 seconds - $0.75</option><option value="4">5 seconds - $0.50</option><optgroup label="7 day(s)"></optgroup><option value="6">10 seconds - $5.00</option><option value="7">5 seconds - $3.50</option><optgroup label="14 day(s)"></optgroup><option value="9">10 seconds - $10.00</option><option value="10">5 seconds - $7.00</option><optgroup label="30 day(s)"></optgroup><option value="14">10 seconds - $21.00</option><option value="13">5 seconds - $13.00</option></select>
    <input type="submit" name="send" value="Buy Now!">
    </form>
    </div>
</div>
                                                                                                     <div class="shopcart">
    <div class="shoptitle"><div class="carticon">Paid To Click Ads</div></div>
    <div class="shopcontent">
        <form method="post" id="ptcform" onsubmit="return prepare_payment('ptcform');" class="formclass">
            <input type="hidden" id="ptcformproduct" name="ptcformproduct" value="Paid To Click Ads">
            <input type="hidden" name="buy" value="ptc_credits">
            <select name="item" id="ptcformlist">
                                    <option value="3">500 Credits - $0.75</option>
                                    <option value="4">1000 Credits - $1.50</option>
                                    <option value="5">2000 Credits - $3.00</option>
                                    <option value="6">5000 Credits - $6.00</option>
                                    <option value="7">10000 Credits - $11.00</option>
                                    <option value="8">20000 Credits - $21.00</option>
                                    <option value="9">50000 Credits - $45.00</option>
                                    <option value="10">100000 Credits - $80.00</option>
                            </select>
            <input type="submit" name="send" value="Buy Now!">
        </form>
    </div>
</div>                                                                                                                                    <div class="shopcart">
    <div class="shoptitle"><div class="carticon">Login Ads</div></div>
    <div class="shopcontent">
        <form method="post" id="loginadform" onsubmit="return prepare_payment('loginadform');">
            <input type="hidden" id="loginadformproduct" name="loginadformproduct" value="Login Ads">
            <input type="hidden" name="buy" value="loginads_credits">
            <select name="item" id="loginadformlist">
                                    <option value="1">30 day(s) - $10.00</option>
                            </select>
            <input type="submit" name="send" value="Buy Now!">
        </form>
    </div>
</div>                                                                                                                                    <div class="shopcart">
    <div class="shoptitle"><div class="carticon">Text Ads</div></div>
    <div class="shopcontent">
        <form method="post" id="feadform" onsubmit="return prepare_payment('feadform');" class="formclass">
            <input type="hidden" id="feadformproduct" name="feadformproduct" value="Text Ads">
            <input type="hidden" name="buy" value="fad_credits">
            <select name="item" id="feadformlist">
                                    <option value="1">100000 Credits - $1.00</option>
                                    <option value="2">200000 Credits - $2.00</option>
                                    <option value="3">300000 Credits - $3.00</option>
                                    <option value="5">500000 Credits - $5.00</option>
                                    <option value="6">1000000 Credits - $8.00</option>
                            </select>
            <input type="submit" name="send" value="Buy Now!">
        </form>
    </div>
</div>                                                                                                                                    <div class="shopcart">
    <div class="shoptitle"><div class="carticon">Link Ads</div></div>
    <div class="shopcontent">
        <form method="post" id="flinkform" onsubmit="return prepare_payment('flinkform');" class="formclass">
            <input type="hidden" id="flinkformproduct" name="flinkformproduct" value="Link Ads">
            <input type="hidden" name="buy" value="flink_credits">
            <select name="item" id="flinkformlist">
                                    <option value="3">1 Month(s) - $3.00</option>
                                    <option value="4">2 Month(s) - $6.00</option>
                                    <option value="5">3 Month(s) - $9.00</option>
                                    <option value="6">4 Month(s) - $12.00</option>
                                    <option value="7">5 Month(s) - $15.00</option>
                                    <option value="8">6 Month(s) - $18.00</option>
                                    <option value="9">7 Month(s) - $21.00</option>
                                    <option value="10">8 Month(s) - $24.00</option>
                                    <option value="11">9 Month(s) - $27.00</option>
                                    <option value="12">10 Month(s) - $30.00</option>
                                    <option value="13">11 Month(s) - $33.00</option>
                                    <option value="14">12 Month(s) - $36.00</option>
                                    <option value="15">24 Month(s) - $60.00</option>
                            </select>
            <input type="submit" name="send" value="Buy Now!">
        </form>
    </div>
</div>                                                                                                                                    <div class="shopcart">
    <div class="shoptitle"><div class="carticon">Banner Ad</div></div>
    <div class="shopcontent">
        <form method="post" id="bannerform" onsubmit="return prepare_payment('bannerform');" class="formclass">
            <input type="hidden" id="bannerformproduct" name="bannerformproduct" value="Banner Ad">
            <input type="hidden" name="buy" value="bannerad_credits">
            <select name="item" id="bannerformlist">
                                    <option value="6">1000 Credits - $0.02</option>
                                    <option value="7">10000 Credits - $0.20</option>
                                    <option value="3">100000 Credits - $2.00</option>
                                    <option value="4">500000 Credits - $10.00</option>
                                    <option value="5">1500000 Credits - $15.00</option>
                            </select>
            <input type="submit" name="send" value="Buy Now!">
        </form>
    </div>
</div>                                                                                                                                                                                                                                        
            <div class="clear"></div>
                    </div>
<!-- End Body-content -->
      	</body>

@extends('layouts.footer')
@section('content')
@endsection
</html>
