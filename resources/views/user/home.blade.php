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
                     @foreach ($data['property_categories'] as $item)
                        
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
<!--Agents-->
<section id="layouts" class="padding_top">
   
  <div class="container">
    <div class="row">
      <h2>@lang('home.markerplace_title_label')</h2> 
      <hr>
      @foreach ($data['marketplaces'] as $item)
      <div class="col-sm-4 margin_bottom">
      <div class="media news_media">
            <div class="media-left">
               <img class="media-object border_radius" style="width: 100px;" src="{{$item->ImagePathSmall}}" alt="{{$item->title}}">
            </div>
            <div class="media-body" style="vertical-align: middle;">
                  <h2 class="uppercase">{{$item->title}}</h2>
            </div>
      </div>
     
        <p class="heading_space"></p>
        @foreach ($item->properties as $prop)
         <div class="media news_media">
            <div class="media-left">
              <a target="_blank" href="{{$prop->url}}">
              <img class="media-object border_radius" style="width: 120px;height: 80px;" src="{{$prop->property->ImagePathSmall}}" alt="Latest news">
              </a>
            </div>
            <div class="media-body" style="vertical-align: middle;">
              <h3><a target="_blank" href="{{$prop->url}}">{{$prop->property->title}}</a></h3>

              @if ($prop->property->type_transaction == 'sale')
                  <span class=""><i class="icon-dollar"></i>Rp. {{ number_format($prop->property->sale_price,0,",",".") }}</span>
              @else
                  <span class=""><i class="icon-dollar"></i>Rp. {{ number_format($prop->property->rent_price,0,",",".") }}</span>
              @endif
              <p class="">{!!$prop->property->address!!}, {!!$prop->property->Location!!}
              </p>
            </div>
         </div>
        @endforeach
      </div>
      @endforeach
    </div>
    <div style="border-bottom:1px solid #d3d8dd;"></div>
  </div>
</section>
<!--Agents Ends-->

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