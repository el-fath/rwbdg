@extends('user/template')
@section('content')
<!--About Us -->
<section id="about" class="padding_bottom">
    
  <section class="page-banner padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1 class="text-uppercase">@lang('about.about_us')</h1>
          {{-- <p>Ray White Indonesia</p> --}}
          <p>
            {{ $profile->tag_line }}
          </p>
          <ol class="breadcrumb text-center">
            <li><a href="#">Home</a></li>
            <li><a href="#">@lang('about.page')</a></li>
            <li class="active">@lang('about.about')</li>
          </ol> --}}
        </div>
      </div>
    </div>
  </section>
  <section id="faqs" class="padding_half bottom40">
  <img src="{{ $config->LogoPath }}" style="width: 250px; margin:auto; display:block" class="logo" alt=""><br>
  <div class="container" align="center">
    <ul class="social_share bottom20">
      <li><a href="https://www.facebook.com/{{ $profile->social_facebook }}" target="_blank"
        title="https://www.facebook.com/{{ $profile->social_facebook }}" class="facebook">
        <i class="icon-facebook-1"></i></a>
      </li>
      <li><a href="https://www.twitter.com/{{ $profile->social_twitter }}" target="_blank"
        title="https://www.twitter.com/{{ $profile->social_twitter }}" class="twitter">
        <i class="icon-twitter-1"></i></a>
      </li>
      <li><a href="https://www.instagram.com/{{ $profile->social_twitter }}" target="_blank"
        title="https://www.instagram.com/{{ $profile->social_twitter }}" class="google">
        <i class="icon-instagram"></i></a>
      </li>
    </ul>
  </div>
  <br>
  <div class="container">
      <div class="row">
        <div align="justify" class="col-sm-12">
          <h1>
            {{ $profile->name }}
          </h1>
          <br>
          <p>
            {!! $profile->description !!}
          </p>
        </div>
      </div>
    </div>
  </section>
  
</section>
  
@endsection  