<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
{!! SEO::generate() !!}
<title>Castle</title>

<link rel="stylesheet" type="text/css" href="{{ url('public/assets/user') }}/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="{{ url('public/assets/user') }}/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="{{ url('public/assets/user') }}/css/reality-icon.css">
<link rel="stylesheet" type="text/css" href="{{ url('public/assets/user') }}/css/bootsnav.css">
<link rel="stylesheet" type="text/css" href="{{ url('public/assets/user') }}/css/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="{{ url('public/assets/user') }}/css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="{{ url('public/assets/user') }}/css/owl.transitions.css">
<link rel="stylesheet" type="text/css" href="{{ url('public/assets/user') }}/css/cubeportfolio.min.css">
<link rel="stylesheet" type="text/css" href="{{ url('public/assets/user') }}/css/settings.css">
<link rel="stylesheet" type="text/css" href="{{ url('public/assets/user') }}/css/range-Slider.min.css">
<link rel="stylesheet" type="text/css" href="{{ url('public/assets/user') }}/css/search.css">
<link rel="stylesheet" type="text/css" href="{{ url('public/assets/user') }}/css/style.css">
<link rel="icon" href="{{ $config->FaviconPath }}">
<script src="{{ url('public/assets/user') }}/js/jquery-2.1.4.js"></script>
<script src="{{ url('public/assets/admin') }}/assets/js/plugins/loaders/blockui.min.js"></script>
<script src="{{ url('public/assets/admin') }}/assets/js/plugins/notifications/jgrowl.min.js"></script>
<script src="{{ url('public/assets/admin') }}/assets/js/demo_pages/extra_jgrowl_noty.js"></script>
<script src="{{ url('public') }}/js/cakcode.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>


<!--Loader-->
<div class="loader">
  <div class="span">
    <div class="location_indicator"></div>
  </div>
  <div class="span">
      <label class="label">Loading</label>
    </div>
</div>
 <!--Loader-->               

@yield('slider')

<!--Header-->
<div id="mainMenuBarAnchor"></div>
<header class="white_header">
  <nav class="navbar navbar-default bootsnav">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="attr-nav">
            <div class="upper-column info-box first">
              <div class="icons"><i class="icon-telephone114"></i></div>
              <ul>
                <li><strong>Phone Number</strong></li>
                <li>+1 900 234 567 - 68</li>
              </ul>
            </div>
          </div>
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
            <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href=""><img src="{{ $config->LogoPath }}" style="max-height: 70px;width: 70px;" class="logo" alt=""></a>
          </div>
          <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav navbar-right" data-in="fadeIn" data-out="fadeOut">
              <li><a href="{{url("landing-page")}}">Home</a></li>
              <li><a href="{{url("about")}}">About</a></li>
              <li class="dropdown megamenu-fw">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Buy</a>
                <ul class="dropdown-menu megamenu-content" role="menu">
                  <li>
                    <div class="row">
                      <div class="col-menu col-md-3">
                        <h5 class="title">PROPERTIES LIST</h5>
                        <div class="content">
                          <ul class="menu-col">
                            <li><a href="listing1.html">Secondary Property</a></li>
                            <li><a href="index7.html">New Property</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-menu col-md-9">
                        <h5 class="title bottom20">PROPERTIES LIST</h5>
                        <div class="row">
                          <div id="nav_slider" class="owl-carousel">
                            <div class="item">
                              <div class="image bottom15"> 
                                <img src="{{ url('public/assets/user') }}/images/nav-slider1.jpg" alt="Featured Property"> 
                                <span class="nav_tag yellow text-uppercase">for rent</span>
                              </div>
                              <h4><a href="property_detail1.html">Park Avenue Apartment</a></h4>
                              <p>Towson London, MR 21501</p>
                            </div>
                            <div class="item">
                              <div class="image bottom15"> 
                                <img src="{{ url('public/assets/user') }}/images/nav-slider2.jpg" alt="Featured Property"> 
                                <span class="nav_tag yellow text-uppercase">for rent</span>
                              </div>
                              <h4><a href="property_detail2.html">Park Avenue Apartment</a></h4>
                              <p>Towson London, MR 21501</p>
                            </div>
                            <div class="item">
                              <div class="image bottom15"> 
                                <img src="{{ url('public/assets/user') }}/images/nav-slider3.jpg" alt="Featured Property"> 
                                <span class="nav_tag yellow text-uppercase">for rent</span>
                              </div>
                              <h4><a href="property_detail3.html">Park Avenue Apartment</a></h4>
                              <p>Towson London, MR 21501</p>
                            </div>
                            <div class="item">
                              <div class="image bottom15"> 
                                <img src="{{ url('public/assets/user') }}/images/nav-slider1.jpg" alt="Featured Property"> 
                                <span class="nav_tag yellow text-uppercase">for rent</span>
                              </div>
                              <h4><a href="property_detail1.html">Park Avenue Apartment</a></h4>
                              <p>Towson London, MR 21501</p>
                            </div>
                            <div class="item">
                              <div class="image bottom15"> 
                                <img src="{{ url('public/assets/user') }}/images/nav-slider2.jpg" alt="Featured Property"> 
                                <span class="nav_tag yellow text-uppercase">for rent</span>
                              </div>
                              <h4><a href="property_detail2.html">Park Avenue Apartment</a></h4>
                              <p>Towson London, MR 21501</p>
                            </div>
                            <div class="item">
                              <div class="image bottom15"> 
                                <img src="{{ url('public/assets/user') }}/images/nav-slider3.jpg" alt="Featured Property"> 
                                <span class="nav_tag yellow text-uppercase">for rent</span>
                              </div>
                              <h4><a href="property_detail3.html">Park Avenue Apartment</a></h4>
                              <p>Towson London, MR 21501</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              <li class="dropdown megamenu-fw">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Rent</a>
                <ul class="dropdown-menu megamenu-content" role="menu">
                  <li>
                    <div class="row">
                      <div class="col-menu col-md-3">
                        <h5 class="title">PROPERTIES LIST</h5>
                        <div class="content">
                          <ul class="menu-col">
                            <li><a href="listing1.html">Secondary Property</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-menu col-md-9">
                        <h5 class="title bottom20">PROPERTIES LIST</h5>
                        <div class="row">
                          <div id="nav_slider" class="owl-carousel">
                            <div class="item">
                              <div class="image bottom15"> 
                                <img src="{{ url('public/assets/user') }}/images/nav-slider1.jpg" alt="Featured Property"> 
                                <span class="nav_tag yellow text-uppercase">for rent</span>
                              </div>
                              <h4><a href="property_detail1.html">Park Avenue Apartment</a></h4>
                              <p>Towson London, MR 21501</p>
                            </div>
                            <div class="item">
                              <div class="image bottom15"> 
                                <img src="{{ url('public/assets/user') }}/images/nav-slider2.jpg" alt="Featured Property"> 
                                <span class="nav_tag yellow text-uppercase">for rent</span>
                              </div>
                              <h4><a href="property_detail2.html">Park Avenue Apartment</a></h4>
                              <p>Towson London, MR 21501</p>
                            </div>
                            <div class="item">
                              <div class="image bottom15"> 
                                <img src="{{ url('public/assets/user') }}/images/nav-slider3.jpg" alt="Featured Property"> 
                                <span class="nav_tag yellow text-uppercase">for rent</span>
                              </div>
                              <h4><a href="property_detail3.html">Park Avenue Apartment</a></h4>
                              <p>Towson London, MR 21501</p>
                            </div>
                            <div class="item">
                              <div class="image bottom15"> 
                                <img src="{{ url('public/assets/user') }}/images/nav-slider1.jpg" alt="Featured Property"> 
                                <span class="nav_tag yellow text-uppercase">for rent</span>
                              </div>
                              <h4><a href="property_detail1.html">Park Avenue Apartment</a></h4>
                              <p>Towson London, MR 21501</p>
                            </div>
                            <div class="item">
                              <div class="image bottom15"> 
                                <img src="{{ url('public/assets/user') }}/images/nav-slider2.jpg" alt="Featured Property"> 
                                <span class="nav_tag yellow text-uppercase">for rent</span>
                              </div>
                              <h4><a href="property_detail2.html">Park Avenue Apartment</a></h4>
                              <p>Towson London, MR 21501</p>
                            </div>
                            <div class="item">
                              <div class="image bottom15"> 
                                <img src="{{ url('public/assets/user') }}/images/nav-slider3.jpg" alt="Featured Property"> 
                                <span class="nav_tag yellow text-uppercase">for rent</span>
                              </div>
                              <h4><a href="property_detail3.html">Park Avenue Apartment</a></h4>
                              <p>Towson London, MR 21501</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              <li><a href="{{url("about")}}">Find specialist</a></li>
              <li><a href="{{url("about")}}">Carrer with us</a></li>
              <li class="dropdown">
                  <a href="#." class="dropdown-toggle" data-toggle="dropdown">What's up today </a>
                  <ul class="dropdown-menu">
                    <li class="dropdown">
                      <a href="#.">News</a>
                      <a href="#.">Gallery</a>
                    </li>
                  </ul>
              </li>
              <li><a href="{{url("contact-us")}}">Contact Us</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </nav>
</header>
<!--Header Ends-->

@yield('search')

@yield('content')

<!--Footer-->
<footer class="footer_third">
  <div class="container contacts">
    <div class="row">
      <div class="col-sm-4 text-center">
        <div class="info-box first">
          <div class="icons"><i class="icon-telephone114"></i></div>
          <ul class="text-center">
            <li><strong>Phone Number</strong></li>
            <li>+1 900 234 567 - 68</li>
          </ul>
        </div>
      </div>
      <div class="col-sm-4 text-center">
        <div class="info-box">
          <div class="icons"><i class="icon-icons74"></i></div>
          <ul class="text-center">
            <li><strong>Manhattan Hall,</strong></li>
            <li>Castle Melbourne, australia</li>
          </ul>
        </div>
      </div>
      <div class="col-sm-4 text-center">
        <div class="info-box">
          <div class="icons"><i class="icon-icons142"></i></div>
          <ul class="text-center">
            <li><strong>Email Address</strong></li>
            <li><a href="#.">info@castle.com</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="container padding_top">
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <div class="footer_panel bottom30">
          <a href="#." class="logo bottom30"><img src="{{ url('public/assets/user') }}/images/logo-white.png" alt="logo"></a>
          <p class="bottom15">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh 
            tempor cum consectetuer 
            adipiscing.
          </p>
          <p class="bottom15">If you are interested in castle do not wait and <a href="#.">BUY IT NOW!</a></p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="footer_panel bottom30">
          <h4 class="bottom30 heading">Search by Area</h4>
          <table style="width:100%;">
            <tbody>
              <tr>
                <td>
                  <ul class="links">
                    <li><a href="#."><i></i>About</a></li>
                    <li class="active"><a href="#."><i></i>News</a></li>
                    <li><a href="#."> <i></i>Contacts</a></li>
                    <li><a href="#."><i></i>Testimonials</a></li>
                    <li><a href="#."><i></i>Typography</a></li>
                  </ul>
                </td>
                <td class="text-right">
                  <ul class="links text-left">
                    <li><a href="#."><i></i>Services</a></li>
                    <li class="active"><a href="#."><i></i>Careers</a></li>
                    <li><a href="#."><i></i>Our team</a></li>
                    <li><a href="#."><i></i>Shop</a></li>
                    <li><a href="#."><i></i>Our approach</a></li>
                  </ul>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="footer_panel bottom30">
          <h4 class="bottom30 heading">Latest News</h4>
          <div class="media bottom30">
            <div class="media-body">
              <a href="#.">Nearest mall in high tech Goes google map your villa</a>
              <span><i class="icon-clock5"></i>Feb 22, 2017</span>
            </div>
          </div>
          <div class="media">
            <div class="media-body">
              <a href="#.">Nearest mall in high tech Goes google map your villa</a>
              <span><i class="icon-clock5"></i>Feb 22, 2017</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="footer_panel bottom30">
          <h4 class="bottom30 heading">Subscribe</h4>
          <p>Sign up with your email to get latest updates and offers</p>
          <form class="top30">
            <input class="search" placeholder="Enter your Email" type="search">
            <a class="button_s" href="#">
            <i class="icon-mail-envelope-open"></i>
            </a>
          </form>
        </div>
      </div>
    </div>
    <!--CopyRight-->
    <div class="copyright_simple">
      <div class="row">
        <div class="col-md-6 col-sm-5 top20 bottom20">
          <p>Copyright &copy; 2017 <span>Castle</span>. All rights reserved.</p>
        </div>
        <div class="col-md-6 col-sm-7 text-right top15 bottom10">
          <ul class="social_share">
            <li><a href="#." class="facebook"><i class="icon-facebook-1"></i></a></li>
            <li><a href="#." class="twitter"><i class="icon-twitter-1"></i></a></li>
            <li><a href="#." class="google"><i class="icon-google4"></i></a></li>
            <li><a href="#." class="linkden"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#." class="vimo"><i class="icon-vimeo3"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>



<script src="{{ url('public/assets/user') }}/js/bootstrap.min.js"></script> 
<script src="{{ url('public/assets/user') }}/js/jquery.appear.js"></script>
<script src="{{ url('public/assets/user') }}/js/jquery-countTo.js"></script>
<script src="{{ url('public/assets/user') }}/js/bootsnav.js"></script>
<script src="{{ url('public/assets/user') }}/js/masonry.pkgd.min.js"></script>
<script src="{{ url('public/assets/user') }}/js/jquery.parallax-1.1.3.js"></script>
<script src="{{ url('public/assets/user') }}/js/jquery.cubeportfolio.min.js"></script>
<script src="{{ url('public/assets/user') }}/js/range-Slider.min.js"></script>
<script src="{{ url('public/assets/user') }}/js/owl.carousel.min.js"></script> 
<script src="{{ url('public/assets/user') }}/js/selectbox-0.2.min.js"></script>
<script src="{{ url('public/assets/user') }}/js/zelect.js"></script>
<script src="{{ url('public/assets/user') }}/js/jquery.fancybox.js"></script>
<script src="{{ url('public/assets/user') }}/js/jquery.themepunch.tools.min.js"></script>
<script src="{{ url('public/assets/user') }}/js/jquery.themepunch.revolution.min.js"></script>
<script src="{{ url('public/assets/user') }}/js/revolution.extension.actions.min.js"></script>
<script src="{{ url('public/assets/user') }}/js/revolution.extension.layeranimation.min.js"></script>
<script src="{{ url('public/assets/user') }}/js/revolution.extension.navigation.min.js"></script>
<script src="{{ url('public/assets/user') }}/js/revolution.extension.parallax.min.js"></script>
<script src="{{ url('public/assets/user') }}/js/revolution.extension.slideanims.min.js"></script>
<script src="{{ url('public/assets/user') }}/js/revolution.extension.video.min.js"></script>
<script src="{{ url('public/assets/user') }}/js/custom.js"></script>
<script src="{{ url('public/assets/user') }}/js/functions.js"></script>

<script src="{{ url('public/assets/user') }}/js/neary-by-place.js"></script> 
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script> 
<script src="{{ url('public/assets/user') }}/js/gmaps.js.js"></script>
<script src="{{ url('public/assets/user') }}/js/contact.js"></script>

<script src="{{ url('public/assets/user') }}/js/google-map.js"></script> 

</body>
</html>

