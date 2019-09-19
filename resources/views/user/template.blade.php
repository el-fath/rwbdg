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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css">



{{-- <link rel="stylesheet" type="text/css" href="{{ url('public/assets/user') }}/css/style.css"> --}}
<link rel="stylesheet" type="text/css" href="{{ url('public/assets/user') }}/css/style2.css">


<link rel="icon" href="{{ $config->FaviconPath }}">
<script src="{{ url('public/assets/user') }}/js/jquery-2.1.4.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>
<script src="{{ url('public/assets/admin') }}/assets/js/plugins/loaders/blockui.min.js"></script>
<script src="{{ url('public/assets/admin') }}/assets/js/plugins/notifications/jgrowl.min.js"></script>
<script src="{{ url('public/assets/admin') }}/assets/js/demo_pages/extra_jgrowl_noty.js"></script>
<script src="{{ url('public') }}/js/cakcode.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>

<style>
  .navbar-nav {
    margin-top: 9px;
  }
  /* Always set the map height explicitly to define the size of the div
  * element that contains the map. */
  #map {
    height: 100%;
  }
  /* Optional: Makes the sample page fill the window. */
  html, body {
    height: 100%;
    margin: 0;
    padding: 0;
  }
</style>

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
          {{-- <div class="attr-nav">
            <div class="upper-column info-box first">
              <div class="icons"><i class="icon-telephone114"></i></div>
              <ul>
                <li><strong>Phone Number</strong></li>
                <li>+1 900 234 567 - 68</li>
              </ul>
            </div>
          </div> --}}
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
            <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href=""><img src="{{ $config->LogoPath }}" style="max-height: 70px;max-width: 200px;" class="logo" alt=""></a>
          </div>
          <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav navbar-left" data-in="fadeIn" data-out="fadeOut" style="margin-left: 15px;">
              <li class="{{($data['menu'] == "home") ? "active" : ""}}"><a href="{{route("index")}}">@lang("global.menu.home_label")</a></li>
              {{-- <li class="{{($data['menu'] == "about") ? "active" : ""}}"><a href="{{url("about")}}">@lang("global.menu.about_us_label")</a></li> --}}
              <li class="{{($data['menu'] == "about") ? "active" : ""}} dropdown">
                <a href="#." class="dropdown-toggle" data-toggle="dropdown">@lang("global.menu.about_us_label") </a>
                <ul class="dropdown-menu">
                  <li><a href="{{url("about")}}">@lang("global.menu.about_us_label")</a></li>
                  <li class="dropdown">
                    <a href="#." class="dropdown-toggle" data-toggle="dropdown">Domain</a>
                    <ul class="dropdown-menu">
                      @if (isset($domains))
                          
                      @foreach ($domains as $item)
                      <li><a target="_blank" href="{{$item->title}}">{{$item->title}}</a></li>
                      @endforeach
                      @endif
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="{{($data['menu'] == "specialist") ? "active" : ""}}"><a href="{{route("specialist")}}">@lang("global.menu.specialist_label")</a></li>
              <li class="{{($data['menu'] == $careerPage->slug) ? "active" : ""}}"><a href="{{route("pages",$careerPage->slug)}}">@lang("global.menu.career_label")</a></li>
              <li class="dropdown {{($data['menu'] == "news" || $data['menu'] == "gallery") ? "active" : ""}}">
                  <a href="#." class="dropdown-toggle" data-toggle="dropdown">@lang("global.menu.what_up_label")</a>
                  <ul class="dropdown-menu">
                    <li class="dropdown">
                      <a href="{{route("news")}}">@lang("global.menu.news_label")</a>
                      <a href="{{route("gallery")}}">@lang("global.menu.gallery_label")</a>
                    </li>
                  </ul>
              </li>
              <li class="{{($data['menu'] == "contact") ? "active" : ""}}"><a href="{{route("contact_us")}}">@lang("global.menu.contact_us")</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle language-header" data-toggle="dropdown" href="" aria-expanded="false">{{(app()->getLocale() == 'id') ? "ID" : "EN"}}
                    <ul class="dropdown-menu">
                      <li><a class="current" href="{{\Route::currentUrl('id')}}">ID</a></li>
                      <li><a class="" href="{{\Route::currentUrl('en')}}">EN</a></li>
                    </ul>
                </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </nav>
</header>
<!--Header Ends-->


@yield('content')

<!--Footer-->
<footer class="footer_third">
  <div class="container contacts">
    <div class="row">
      <div class="col-sm-4 text-center">
        <div class="info-box first">
          <div class="icons"><i class="icon-telephone114"></i></div>
          <ul class="text-center">
            <li><strong>@lang("global.phone_label")</strong></li>
            <li>{{$profile->phone}}</li>
          </ul>
        </div>
      </div>
      <div class="col-sm-4 text-center">
        <div class="info-box">
          <div class="icons"><i class="icon-icons74"></i></div>
          <ul class="text-center">
            <li><strong>Address</strong></li>
            <li>{{$profile->address}}</li>
          </ul>
        </div>
      </div>
      <div class="col-sm-4 text-center">
        <div class="info-box">
          <div class="icons"><i class="icon-icons142"></i></div>
          <ul class="text-center">
            <li><strong>@lang("global.email_label")</strong></li>
            <li><a href="#.">{{$profile->email}}</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="container padding_top">
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <div class="footer_panel bottom30">
        <a href="{{route('home')}}" class="logo bottom30"><img src="{{$config->LogoPath}}" alt="logo" style="height: 80px;"></a>
          <p class="bottom15">{{$profile->tag_line}}
          </p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="footer_panel bottom30">
          <h4 class="bottom30 heading">Menu</h4>
          <table style="width:100%;">
            <tbody>
              <tr>
                <td>
                  <ul class="links">
                    <li><a href="{{route('home')}}"><i></i>@lang('global.menu.home_label')</a></li>
                    <li><a href="{{route('about')}}"><i></i>@lang('global.menu.about_us_label')</a></li>
                    <li><a href="{{route('news')}}"><i></i>@lang('global.menu.news_label')</a></li>
                   
                  </ul>
                </td>
                <td class="text-right">
                  <ul class="links text-left">
                      <li><a href="{{route('gallery')}}"><i></i>@lang('global.menu.gallery_label')</a></li>
                      <li><a href="{{route('specialist')}}"><i></i>@lang('global.menu.specialist_label')</a></li>
                      <li><a href="{{route('contact_us')}}"><i></i>@lang('global.menu.contact_us')</a></li>
                  </ul>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="footer_panel bottom30">
          <h4 class="bottom30 heading">@lang("global.latest_news_label")</h4>
          
          @foreach ($newsFooter as $item)
              @include('user/items/thumb_news_footer')
          @endforeach

        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="footer_panel bottom30">
          {{-- <h4 class="bottom30 heading">Subscribe</h4>
          <p>Sign up with your email to get latest updates and offers</p>
          <form class="top30">
            <input class="search" placeholder="Enter your Email" type="search">
            <a class="button_s" href="#">
            <i class="icon-mail-envelope-open"></i>
            </a>
          </form> --}}
        </div>
      </div>
    </div>
    <!--CopyRight-->
    <div class="copyright_simple">
      <div class="row">
        <div class="col-md-6 col-sm-5 top20 bottom20">
          <p>Copyright &copy; 2019 <span>{{$config->name}}</span>. All rights reserved.</p>
        </div>
        <div class="col-md-6 col-sm-7 text-right top15 bottom10">
          <ul class="social_share">
            <li><a href="{{$profile->facebook}}" class="facebook"><i class="icon-facebook-1"></i></a></li>
            <li><a href="{{$profile->instagram}}" class="instagram"><i class="icon-instagram"></i></a></li>
            <li><a href="mailto:{{$profile->email}}" class="google"><i class="icon-google4"></i></a></li>
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
<script src="{{ url('public/assets/user') }}/js/contact.js"></script>

{{-- <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true"></script> 
<script src="{{ url('public/assets/user') }}/js/gmaps.js.js"></script>

<script src="{{ url('public/assets/user') }}/js/google-map.js"></script>  --}}

</body>
</html>

