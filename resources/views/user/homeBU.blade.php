@extends('user/template')
@extends('user/template')
@include('user/include/slider')
@include('user/include/search')

@section('content')
<!--Three Cols-->
<section id="three_feature" class="padding_half" style="background-color: rgb(244, 244, 244);">
  <h3 class="hidden">hiddden</h3>
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <div class="box margin40">
          <div class="image">
            <img src="{{ url('public/assets/user') }}/images/listing8.jpg" alt="box">
          </div>
          <a class="panel_bottom" href="#.">Buying Your Home</a>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="box margin40">
          <div class="image">
            <img src="{{ url('public/assets/user') }}/images/listing8.jpg" alt="box">
          </div>
          <a class="panel_bottom" href="#.">Buying Your Home</a>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="box margin40">
          <div class="image">
            <img src="{{ url('public/assets/user') }}/images/listing8.jpg" alt="box">
          </div>
          <a class="panel_bottom" href="#.">Buying Your Home</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Three Cols Ends-->

<!--Parallax-->
<section id="parallax_four" class="padding">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 bottom30">
        <h2>We Don’t Just Find <br> <span class="t_yellow">Great Deals</span> We Create Them</h2>
        <h4 class="top20">We are proud to present to you some of the best homes, apartments, offices e.g.
        across Australia for affordable prices.</h4>
        <a href="" class="text-uppercase btn-white top20">view all listings</a>
      </div>
    </div>
  </div>
</section>
<!--About Owner ends-->


<section id="property" class="padding bg_gallery">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <h2 class="uppercase">@lang('global.latest_property_label')</h2>
        <p class="heading_space">@lang('global.latest_property_desc')</p>
      </div>
    </div>
    <div class="clearfix">
      <div id="filters-property" class="cbp-l-filters-button text-center">
        <div data-filter=".latest" class="cbp-filter-item-active cbp-filter-item">@lang('global.latest_label')</div>
        <div data-filter=".sale" class="cbp-filter-item">@lang('global.sell_label')</div>        
        <div data-filter=".rent" class="cbp-filter-item">@lang('global.rent_label')</div>
      </div>
    </div>
    <div id="property-gallery" class="cbp listing1">
      @foreach ($data['property_latest'] as $item)
         @include('user/items/thumb_property')
      @endforeach
    </div>
    <div class="col-sm-12 text-center top20">
       <a href="{{route("property")}}" class="btn-dark border_radius uppercase margin40">@lang("global.more_listing_btn")</a>
    </div>
  </div>
</section>

<!--Types-->
<section id="types" class="padding">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <h2 class="uppercase">@lang('global.property_category_label')</h2>
        <p class="heading_space">@lang('global.property_category_desc')</p>
      </div>
    </div>
    <div id="" class="padding row">
        @foreach ($data['property_categories'] as $item)
          <div class="col-lg-4">
            @include('user/items/thumb_category_property_home')
          </div>
        @endforeach
    </div>
  </div>
</section>
  <!--Types Ends-->

<!--News-->
<section id="news" class="padding bg_light">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h2 class="uppercase">@lang("global.latest_news_label")</h2>
        </div>
      </div>
      <div class="row">
      <div id="news_slider" class="owl-carousel">
          @foreach ($data['news_latest'] as $item)
            @include('user/items/thumb_news_home')
          @endforeach
        </div>
      </div>
    </div>
  </section>
  <!--News ends-->
@endsection