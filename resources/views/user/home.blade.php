@extends('user/template')
@include('user/include/slider')
@include('user/include/search')

@section('content')
<!--Three Cols-->
<section id="three_feature" class="padding_half" style="background-color: #edf3f8">
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
      <div class="cbp-item latest sale">
        <div class="property_item">
          <div class="image">
            <a href="property_detail1.html"><img src="{{ url('public/assets/user') }}/images/listing1.jpg" alt="latest property" class="img-responsive"></a>
            <div class="price clearfix"> 
              <span class="tag pull-right">$8,600 Per Month</span>
            </div>
            <span class="tag_t">For Sale</span> 
            <span class="tag_l">Featured</span>
          </div>
          <div class="proerty_content">
            <div class="proerty_text">
              <h3 class="captlize"><a href="property_detail1.html">Park avenue apartment</a></h3>
              <p>45 Regent Street, London, UK</p>
            </div>
            <div class="property_meta transparent"> 
              <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span> 
              <span><i class="icon-bed"></i>2 Office Rooms</span> 
              <span><i class="icon-safety-shower"></i>1 Bathroom</span>   
            </div>
            <div class="property_meta transparent bottom30">
              <span><i class="icon-old-television"></i>TV Lounge</span>
              <span><i class="icon-garage"></i>1 Garage</span>
              <span></span>
            </div>
            <div class="favroute clearfix">
              <p><i class="icon-calendar2"></i>&nbsp;5 Days ago </p>
              <ul class="pull-right">
                <li><a href="javascript:void(0)"><i class="icon-like"></i></a></li>
                <li><a href="#seventy" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
              </ul>
            </div>
            <div class="toggle_share collapse" id="seventy">
              <ul>
                <li><a href="javascript:void(0)" class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                <li><a href="javascript:void(0)" class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                <li><a href="javascript:void(0)" class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="cbp-item latest rent">
        <div class="property_item">
          <div class="image">
            <a href="property_detail2.html"><img src="{{ url('public/assets/user') }}/images/listing2.jpg" alt="latest property" class="img-responsive"></a>
            <div class="price clearfix"> 
              <span class="tag pull-right">$8,600 Per Month</span>
            </div>
            <span class="tag_t">For Rent</span> 
          </div>
          <div class="proerty_content">
            <div class="proerty_text">
              <h3 class="captlize"><a href="property_detail2.html">Park avenue apartment</a></h3>
              <p>45 Regent Street, London, UK</p>
            </div>
            <div class="property_meta transparent"> 
              <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span> 
              <span><i class="icon-bed"></i>2 Office Rooms</span> 
              <span><i class="icon-safety-shower"></i>1 Bathroom</span>   
            </div>
            <div class="property_meta transparent bottom30">
              <span><i class="icon-old-television"></i>TV Lounge</span>
              <span><i class="icon-garage"></i>1 Garage</span>
              <span></span>
            </div>
            <div class="favroute clearfix">
              <p><i class="icon-calendar2"></i>&nbsp;5 Days ago </p>
              <ul class="pull-right">
                <li><a href="javascript:void(0)"><i class="icon-like"></i></a></li>
                <li><a href="#six" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
              </ul>
            </div>
            <div class="toggle_share collapse" id="six">
              <ul>
                <li><a href="javascript:void(0)" class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                <li><a href="javascript:void(0)" class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                <li><a href="javascript:void(0)" class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="cbp-item latest sale">
        <div class="property_item">
          <div class="image">
            <a href="property_detail3.html"><img src="{{ url('public/assets/user') }}/images/listing3.jpg" alt="latest property" class="img-responsive"></a>
            <div class="price clearfix"> 
              <span class="tag pull-right">$8,600 Per Month</span>
            </div>
            <span class="tag_t">For Sale</span>
            <span class="tag_l">Featured</span> 
          </div>
          <div class="proerty_content">
            <div class="proerty_text">
              <h3 class="captlize"><a href="property_detail3.html">Park avenue apartment</a></h3>
              <p>45 Regent Street, London, UK</p>
            </div>
            <div class="property_meta transparent"> 
              <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span> 
              <span><i class="icon-bed"></i>2 Office Rooms</span> 
              <span><i class="icon-safety-shower"></i>1 Bathroom</span>   
            </div>
            <div class="property_meta transparent bottom30">
              <span><i class="icon-old-television"></i>TV Lounge</span>
              <span><i class="icon-garage"></i>1 Garage</span>
              <span></span>
            </div>
            <div class="favroute clearfix">
              <p><i class="icon-calendar2"></i>&nbsp;5 Days ago </p>
              <ul class="pull-right">
                <li><a href="javascript:void(0)"><i class="icon-like"></i></a></li>
                <li><a href="#three" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
              </ul>
            </div>
            <div class="toggle_share collapse" id="three">
              <ul>
                <li><a href="javascript:void(0)" class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                <li><a href="javascript:void(0)" class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                <li><a href="javascript:void(0)" class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="cbp-item latest rent">
        <div class="property_item">
          <div class="image">
            <a href="property_detail1.html"><img src="{{ url('public/assets/user') }}/images/listing4.jpg" alt="latest property" class="img-responsive"></a>
            <div class="price clearfix"> 
              <span class="tag pull-right">$8,600 Per Month</span>
            </div>
            <span class="tag_t">For Rent</span> 
          </div>
          <div class="proerty_content">
            <div class="proerty_text">
              <h3 class="captlize"><a href="property_detail1.html">Park avenue apartment</a></h3>
              <p>45 Regent Street, London, UK</p>
            </div>
            <div class="property_meta transparent"> 
              <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span> 
              <span><i class="icon-bed"></i>2 Office Rooms</span> 
              <span><i class="icon-safety-shower"></i>1 Bathroom</span>   
            </div>
            <div class="property_meta transparent bottom30">
              <span><i class="icon-old-television"></i>TV Lounge</span>
              <span><i class="icon-garage"></i>1 Garage</span>
              <span></span>
            </div>
            <div class="favroute clearfix">
              <p><i class="icon-calendar2"></i>&nbsp;5 Days ago </p>
              <ul class="pull-right">
                <li><a href="javascript:void(0)"><i class="icon-like"></i></a></li>
                <li><a href="#twe" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
              </ul>
            </div>
            <div class="toggle_share collapse" id="twe">
              <ul>
                <li><a href="javascript:void(0)" class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                <li><a href="javascript:void(0)" class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                <li><a href="javascript:void(0)" class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="cbp-item latest sale">
        <div class="property_item">
          <div class="image">
            <a href="property_detail2.html"><img src="{{ url('public/assets/user') }}/images/listing8.jpg" alt="latest property" class="img-responsive"></a>
            <div class="price clearfix"> 
              <span class="solid">Solid Out</span>
            </div>
            <span class="tag_t">For Sale</span> 
          </div>
          <div class="proerty_content">
            <div class="proerty_text">
              <h3 class="captlize"><a href="property_detail2.html">Park avenue apartment</a></h3>
              <p>45 Regent Street, London, UK</p>
            </div>
            <div class="property_meta transparent"> 
              <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span> 
              <span><i class="icon-bed"></i>2 Office Rooms</span> 
              <span><i class="icon-safety-shower"></i>1 Bathroom</span>   
            </div>
            <div class="property_meta transparent bottom30">
              <span><i class="icon-old-television"></i>TV Lounge</span>
              <span><i class="icon-garage"></i>1 Garage</span>
              <span></span>
            </div>
            <div class="favroute clearfix">
              <p><i class="icon-calendar2"></i>&nbsp;5 Days ago </p>
              <ul class="pull-right">
                <li><a href="javascript:void(0)"><i class="icon-like"></i></a></li>
                <li><a href="#twomore" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
              </ul>
            </div>
            <div class="toggle_share collapse" id="twomore">
              <ul>
                <li><a href="javascript:void(0)" class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                <li><a href="javascript:void(0)" class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                <li><a href="javascript:void(0)" class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="cbp-item latest sale">
        <div class="property_item">
          <div class="image">
            <a href="property_detail3.html"><img src="{{ url('public/assets/user') }}/images/listing6.jpg" alt="latest property" class="img-responsive"></a>
            <div class="price clearfix"> 
              <span class="tag pull-right">$8,600 Per Month</span>
            </div>
            <span class="tag_t">For Sale</span>
            <span class="tag_l">Featured</span> 
          </div>
          <div class="proerty_content">
            <div class="proerty_text">
              <h3 class="captlize"><a href="property_detail3.html">Park avenue apartment</a></h3>
              <p>45 Regent Street, London, UK</p>
            </div>
            <div class="property_meta transparent"> 
              <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span> 
              <span><i class="icon-bed"></i>2 Office Rooms</span> 
              <span><i class="icon-safety-shower"></i>1 Bathroom</span>   
            </div>
            <div class="property_meta transparent bottom30">
              <span><i class="icon-old-television"></i>TV Lounge</span>
              <span><i class="icon-garage"></i>1 Garage</span>
              <span></span>
            </div>
            <div class="favroute clearfix">
              <p><i class="icon-calendar2"></i>&nbsp;5 Days ago </p>
              <ul class="pull-right">
                <li><a href="javascript:void(0)"><i class="icon-like"></i></a></li>
                <li><a href="#one" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
              </ul>
            </div>
            <div class="toggle_share collapse" id="one">
              <ul>
                <li><a href="javascript:void(0)" class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                <li><a href="javascript:void(0)" class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                <li><a href="javascript:void(0)" class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="cbp-item latest rent">
        <div class="property_item">
          <div class="image">
            <a href="property_detail1.html"><img src="{{ url('public/assets/user') }}/images/listing7.jpg" alt="latest property" class="img-responsive"></a>
            <div class="price clearfix"> 
              <span class="tag pull-right">$8,600 Per Month</span>
            </div>
            <span class="tag_t">For Rent</span> 
            <span class="tag_l">Featured</span>
          </div>
          <div class="proerty_content">
            <div class="proerty_text">
              <h3 class="captlize"><a href="property_detail1.html">Park avenue apartment</a></h3>
              <p>45 Regent Street, London, UK</p>
            </div>
            <div class="property_meta transparent"> 
              <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span> 
              <span><i class="icon-bed"></i>2 Office Rooms</span> 
              <span><i class="icon-safety-shower"></i>1 Bathroom</span>   
            </div>
            <div class="property_meta transparent bottom30">
              <span><i class="icon-old-television"></i>TV Lounge</span>
              <span><i class="icon-garage"></i>1 Garage</span>
              <span></span>
            </div>
            <div class="favroute clearfix">
              <p><i class="icon-calendar2"></i>&nbsp;5 Days ago </p>
              <ul class="pull-right">
                <li><a href="javascript:void(0)"><i class="icon-like"></i></a></li>
                <li><a href="#seven" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
              </ul>
            </div>
            <div class="toggle_share collapse" id="seven">
              <ul>
                <li><a href="javascript:void(0)" class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                <li><a href="javascript:void(0)" class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                <li><a href="javascript:void(0)" class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="cbp-item latest sale">
        <div class="property_item">
          <div class="image">
            <a href="property_detail2.html"><img src="{{ url('public/assets/user') }}/images/listing5.jpg" alt="latest property" class="img-responsive"></a>
            <div class="price clearfix"> 
              <span class="tag pull-right">$8,600 Per Month</span>
            </div>
            <span class="tag_t">For Sale</span> 
            <span class="tag_l">Featured</span>
          </div>
          <div class="proerty_content">
            <div class="proerty_text">
              <h3 class="captlize"><a href="property_detail2.html">Park avenue apartment</a></h3>
              <p>45 Regent Street, London, UK</p>
            </div>
            <div class="property_meta transparent"> 
              <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span> 
              <span><i class="icon-bed"></i>2 Office Rooms</span> 
              <span><i class="icon-safety-shower"></i>1 Bathroom</span>   
            </div>
            <div class="property_meta transparent bottom30">
              <span><i class="icon-old-television"></i>TV Lounge</span>
              <span><i class="icon-garage"></i>1 Garage</span>
              <span></span>
            </div>
            <div class="favroute clearfix">
              <p><i class="icon-calendar2"></i>&nbsp;5 Days ago </p>
              <ul class="pull-right">
                <li><a href="javascript:void(0)"><i class="icon-like"></i></a></li>
                <li><a href="#onemore" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
              </ul>
            </div>
            <div class="toggle_share collapse" id="onemore">
              <ul>
                <li><a href="javascript:void(0)" class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                <li><a href="javascript:void(0)" class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                <li><a href="javascript:void(0)" class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="cbp-item latest sale">
        <div class="property_item">
          <div class="image">
            <a href="property_detail3.html"><img src="{{ url('public/assets/user') }}/images/listing9.jpg" alt="latest property" class="img-responsive"></a>
            <div class="price clearfix"> 
              <span class="tag pull-right">$8,600 Per Month</span>
            </div>
            <span class="tag_t">For Sale</span> 
            </div>
          <div class="proerty_content">
            <div class="proerty_text">
              <h3 class="captlize"><a href="property_detail3.html">Park avenue apartment</a></h3>
              <p>45 Regent Street, London, UK</p>
            </div>
            <div class="property_meta transparent"> 
              <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span> 
              <span><i class="icon-bed"></i>2 Office Rooms</span> 
              <span><i class="icon-safety-shower"></i>1 Bathroom</span>   
            </div>
            <div class="property_meta transparent bottom30">
              <span><i class="icon-old-television"></i>TV Lounge</span>
              <span><i class="icon-garage"></i>1 Garage</span>
              <span></span>
            </div>
            <div class="favroute clearfix">
              <p><i class="icon-calendar2"></i>&nbsp;5 Days ago </p>
              <ul class="pull-right">
                <li><a href="javascript:void(0)"><i class="icon-like"></i></a></li>
                <li><a href="#sixy" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
              </ul>
            </div>
            <div class="toggle_share collapse" id="sixy">
              <ul>
                <li><a href="javascript:void(0)" class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                <li><a href="javascript:void(0)" class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                <li><a href="javascript:void(0)" class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-12 text-center top20">
       <a href="listing1.html" class="btn-dark border_radius uppercase margin40">@lang("global.more_listing_btn")</a>
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
    <div id="type-grid" class="cbp cbp-l-grid-mosaic-flat">
      <div class="cbp-item">
        <a href="listing1.html">
          <img src="images/grid1.jpg" alt="">
          <div class="grid-caption">
            <h3>Apartments</h3>
            <span>51 Properties</span>
          </div>
        </a>
      </div>
      <div class="cbp-item">
        <a href="listing4.html">
          <img src="images/grid2.jpg" alt="">
          <div class="grid-caption">
            <h3>Single Family Home</h3>
            <span>30 Properties</span>
          </div>
        </a>
      </div>
      <div class="cbp-item">
        <a href="listing5.html">
          <img src="images/grid3.jpg" alt="">
          <div class="grid-caption">
            <h3>Villa</h3>
            <span>10 Properties</span>
          </div>
        </a>
      </div>
      <div class="cbp-item">
        <a href="listing3.html"> 
          <img src="images/grid4.jpg" alt="">
          <div class="grid-caption">
            <h3>Offices</h3>
            <span>23 Properties</span>
          </div>
        </a>
      </div>
      <div class="cbp-item">
        <a href="listing7.html">
          <img src="images/grid5.jpg" alt="">
          <div class="grid-caption">
            <h3> Condominium</h3>
            <span>102 Properties</span>
          </div>
        </a>
      </div>
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
          <div class="item">
            <div class="news_hovered">
            <p class="top10 bottom15"><strong>Nearest mall Strategic in high tech Goes your villa</strong></p>
            <p class="bottom30">Lorem ipsum dolor sit amet, adipiscing elit sed diam consectetuer elit sed diam consectetuer</p>
            <span><i class="icon-clock4"></i>Feb 22, 2017</span>
            </div>
          </div>
          <div class="item">
            <div class="news_hovered">
            <p class="top10 bottom15"><strong>Nearest mall Strategic in high tech Goes your villa</strong></p>
            <p class="bottom30">Lorem ipsum dolor sit amet, adipiscing elit sed diam consectetuer elit sed diam consectetuer</p>
            <span><i class="icon-clock4"></i>Feb 22, 2017</span>
            </div>
          </div>
          <div class="item">
            <div class="news_hovered">
            <p class="top10 bottom15"><strong>Nearest mall Strategic in high tech Goes your villa</strong></p>
            <p class="bottom30">Lorem ipsum dolor sit amet, adipiscing elit sed diam consectetuer elit sed diam consectetuer</p>
            <span><i class="icon-clock4"></i>Feb 22, 2017</span>
            </div>
          </div>
          <div class="item">
            <div class="news_hovered">
            <p class="top10 bottom15"><strong>Nearest mall Strategic in high tech Goes your villa</strong></p>
            <p class="bottom30">Lorem ipsum dolor sit amet, adipiscing elit sed diam consectetuer elit sed diam consectetuer</p>
            <span><i class="icon-clock4"></i>Feb 22, 2017</span>
            </div>
          </div>
          <div class="item">
            <div class="news_hovered">
            <p class="top10 bottom15"><strong>Nearest mall Strategic in high tech Goes your villa</strong></p>
            <p class="bottom30">Lorem ipsum dolor sit amet, adipiscing elit sed diam consectetuer elit sed diam consectetuer</p>
            <span><i class="icon-clock4"></i>Feb 22, 2017</span>
            </div>
          </div>
          <div class="item">
            <div class="news_hovered">
            <p class="top10 bottom15"><strong>Nearest mall Strategic in high tech Goes your villa</strong></p>
            <p class="bottom30">Lorem ipsum dolor sit amet, adipiscing elit sed diam consectetuer elit sed diam consectetuer</p>
            <span><i class="icon-clock4"></i>Feb 22, 2017</span>
            </div>
          </div>
          <div class="item">
            <div class="news_hovered">
            <p class="top10 bottom15"><strong>Nearest mall Strategic in high tech Goes your villa</strong></p>
            <p class="bottom30">Lorem ipsum dolor sit amet, adipiscing elit sed diam consectetuer elit sed diam consectetuer</p>
            <span><i class="icon-clock4"></i>Feb 22, 2017</span>
            </div>
          </div>
          <div class="item">
            <div class="news_hovered">
            <p class="top10 bottom15"><strong>Nearest mall Strategic in high tech Goes your villa</strong></p>
            <p class="bottom30">Lorem ipsum dolor sit amet, adipiscing elit sed diam consectetuer elit sed diam consectetuer</p>
            <span><i class="icon-clock4"></i>Feb 22, 2017</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--News ends-->
@endsection