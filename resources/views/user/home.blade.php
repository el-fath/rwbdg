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
                  <div class="col-sm-12 text-center top20">
                     <a href="{{route("news")}}" class="btn-dark border_radius uppercase margin40">@lang("global.more_news_btn")</a>
                  </div>
             </div>
          </div>
          <aside class="col-md-4 col-xs-12">
             <div class="row">
                <div class="col-md-12">
                   <form class="form-search bottom40" method="get" id="news-search" action="{{route("news")}}">
                      <div class="input-append">
                         <input type="text" class="input-medium search-query" placeholder="Search Here" name="search" value="">
                         <button type="submit" class="add-on"><i class="icon-icons185"></i></button>
                      </div>
                   </form>
                </div>
                <div class="col-md-12">
                   <h3 class="bottom20">@lang('home.categories_label')</h3>
                   <ul class="pro-list bottom20">
                     @foreach ($data['news_category'] as $item)
                        
                        <li>
                           <a href="{{route('news', ['category'=>$item->id])}}">  {{$item->title}}</a>
                        </li>
                        
                     @endforeach 
                   </ul>
                </div>
             </div>
             <div class="row">
                <div class="col-md-12">
                   <h3 class="bottom40 margin40">@lang('home.latest_property_label')</h3>
                </div>
             </div>
             @foreach ($data['property_latest'] as $item)
                @include('user/items/thumb_property_side')
             @endforeach
             <div class="row">
                <div class="col-md-12">
                   <h3 class="margin40 bottom20">@lang('home.featured_property_label')</h3>
                </div>
                <div class="col-md-12 padding-t-30">
                   <div id="agent-2-slider" class="owl-carousel">
                      @foreach ($data['property_featured'] as $item)
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
        <h2>@lang('home.home1_label')</h2>
        <h4 class="top20">@lang('home.home1_desc_label')</h4>
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