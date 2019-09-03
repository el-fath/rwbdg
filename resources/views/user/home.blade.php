@extends('user/template')
@include('user/include/slider')
@include('user/include/search')

@section('content')
<!-- News Start -->
<section id="news-section-1" class="property-details padding_top">
    <div class="container property-details">
       <div class="row">
          <div class="col-md-8">
             <div class="row">
                @foreach ($data['news_latest'] as $item)
                  @include('user/items/thumb_news_home')
                @endforeach
             </div>
             <div class="row margin_bottom">
                <div class="col-md-12">
                   <ul class="pager">
                      <li><a href="#.">1</a></li>
                      <li class="active"><a href="#.">2</a></li>
                      <li><a href="#.">3</a></li>
                   </ul>
                </div>
             </div>
          </div>
          <aside class="col-md-4 col-xs-12">
             <div class="row">
                <div class="col-md-12">
                   <form class="form-search bottom40" method="get" id="news-search" action="/">
                      <div class="input-append">
                         <input type="text" class="input-medium search-query" placeholder="Search Here" value="">
                         <button type="submit" class="add-on"><i class="icon-icons185"></i></button>
                      </div>
                   </form>
                </div>
                <div class="col-md-12">
                   <h3 class="bottom20">Categories</h3>
                   <ul class="pro-list bottom20">
                      <li>
                         Air Conditioning
                      </li>
                      <li>
                         Barbeque
                      </li>
                      <li>
                         Dryer
                      </li>
                      <li>
                         Laundry
                      </li>
                      <li>
                         Refrigerator
                      </li>
                      <li>
                         Swimming Pool
                      </li>
                   </ul>
                </div>
             </div>
             <div class="row">
                <div class="col-md-12">
                   <h3 class="bottom40 margin40">Featured Properties</h3>
                </div>
             </div>
             @foreach ($data['property_latest'] as $item)
                @include('user/items/thumb_property_side')
             @endforeach
             <div class="row">
                <div class="col-md-12">
                   <h3 class="margin40 bottom20">Featured Properties</h3>
                </div>
                <div class="col-md-12 padding-t-30">
                   <div id="agent-2-slider" class="owl-carousel">
                      @foreach ($data['property_latest'] as $item)
                          @include('user/items/thumb_property_side_slide')
                      @endforeach
                   </div>
                </div>
             </div>
          </aside>
       </div>
    </div>
 </section>
 <!-- News End -->

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
@endsection