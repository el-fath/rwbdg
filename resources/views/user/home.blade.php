@extends('user/template')
@section('slider')
<!--Slider-->
<div class="rev_slider_wrapper">
    <div id="rev_overlaped" class="rev_slider"  data-version="5.0">
      <ul>
        <!-- SLIDE -->
        <li data-transition="fade">
          <img src="{{ url('public/assets/user') }}/images/home1-banner1.jpg" alt="" data-bgposition="center center" data-bgfit="cover" class="rev-slidebg">							
        </li>
        <li data-transition="fade">
          <img src="{{ url('public/assets/user') }}/images/home1-banner2.jpg" alt="" data-bgposition="center center" data-bgfit="cover" class="rev-slidebg">							
        </li>
        <li data-transition="fade">
          <img src="{{ url('public/assets/user') }}/images/home1-banner3.jpg" alt="" data-bgposition="center center" data-bgfit="cover" class="rev-slidebg">							
        </li>
        <div class="tp-static-layers">
          <div class="tp-caption tp-static-layer" 
            id="slide-37-layer-2" 
            data-x="['left','left','left','left']" data-hoffset="['50','50','50','50']" 
            data-y="['bottom','bottom','bottom','bottom']" data-voffset="['230','180','150','100']"  
            data-whitespace="nowrap"
            data-visibility="['on','on','on','on']"
            data-fontsize="['48','48','28','28']"
            data-start="500" 
            data-responsive_offset="on"
            data-basealign="slide" 
            data-startslide="0" 
            data-endslide="5" 
            style="z-index: 5;">
            <h1><span class="t_white">We Can Find just Right <br>Property for You.</span></h1>
          </div>
          <div class="tp-caption tp-static-layer" 
            id="slide-37-layer-2" 
            data-x="['left','left','left','left']" data-hoffset="['50','50','50','50']" 
            data-y="['bottom','bottom','bottom','bottom']" data-voffset="['150','100','120','120']" 
            data-whitespace="nowrap"
            data-visibility="['on','on','on','on']"
            data-start="500" 
            data-basealign="slide" 
            data-startslide="0" 
            data-endslide="5" 
            style="z-index: 5;">
            <p class="t_white">We Deal with Different kinds of Properties No matter you need a House, 
              an Apartment or garage. <br> You’ll find a good option on our Theme.
            </p>
          </div>
          <div class="tp-caption tp-static-layer" 
            id="slide-37-layer-2" 
            data-x="['left','left','left','left']" data-hoffset="['50','50','50','50']" 
            data-y="['bottom','bottom','bottom','bottom']" data-voffset="['60','60','60','60']" 
            data-whitespace="nowrap"
            data-visibility="['on','on','on','on']"
            data-start="500" 
            data-basealign="slide" 
            data-startslide="0" 
            data-endslide="5" 
            style="z-index: 5;"><a href="listing1.html" class="btn-white border_radius uppercase">view Properties</a>
          </div>
        </div>
      </ul>
    </div>
  </div>
  <!--Slider ends-->
@endsection

@section('search')
<button type="button" class="form_opener"><i class="fa fa-bars"></i></button>
<div class="tp_overlay">
  <div class="topbar clearfix">
    <ul class="breadcrumb_top">
      <li><a href="favorite_properties.html"><i class="icon-icons43"></i>Favorites</a></li>
      <li><a href="submit_property.html"><i class="icon-icons215"></i>Submit Property</a></li>
      <li><a href="my_properties.html"><i class="icon-icons215"></i>My Property</a></li>
      <li><a href="profile.html"><i class="icon-icons230"></i>Profile</a></li>
      <li><a href="login.html"><i class="icon-icons179"></i>Login / Register</a></li>
      <li class="last-icon"><i class="icon-icons215"></i></li>
    </ul>
  </div>
  
  <form class="callus top30 clearfix centered">
  <h2 class="text-uppercase t_white bottom20 text-center">advanced search</h2>
    <div class="row">
      <div class="col-sm-6">
        <div class="single-query bottom15">
          <input type="text" class="keyword-input" placeholder="Keyword (e.g. 'office')">
        </div>
      </div>
      <div class="col-sm-6">
        <div class="single-query bottom15">
          <div class="intro">
            <select>
              <option selected="" value="any">Location</option>
              <option>All areas</option>
              <option>Bayonne </option>
              <option>Greenville</option>
              <option>Manhattan</option>
              <option>Queens</option>
              <option>The Heights</option>
            </select>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="single-query bottom15">
          <div class="intro">
            <select>
              <option class="active">Property Type</option>
              <option>All areas</option>
              <option>Bayonne </option>
              <option>Greenville</option>
              <option>Manhattan</option>
              <option>Queens</option>
              <option>The Heights</option>
            </select>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="single-query bottom15">
          <div class="intro">
            <select>
              <option class="active">Property Status</option>
              <option>All areas</option>
              <option>Bayonne </option>
              <option>Greenville</option>
              <option>Manhattan</option>
              <option>Queens</option>
              <option>The Heights</option>
            </select>
          </div>
        </div>
      </div>
      <div class="search-2">
        <div class="col-md-3 col-sm-6 col-xs-6">
          <div class="single-query bottom15">
            <div class="intro">
              <select>
                <option class="active">Min Beds</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6">
          <div class="single-query bottom15">
            <div class="intro">
              <select>
                <option class="active">Min Baths</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-6">
        <div class="single-query bottom15">
          <input type="text" class="keyword-input" placeholder="Min Area (sq ft)">
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-6">
        <div class="single-query bottom15">
          <input type="text" class="keyword-input" placeholder="Max Area (sq ft)">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8 col-sm-8 col-xs-8 bottom15">
        <div class="single-query-slider">
          <div class="clearfix top20">
            <label class="pull-left">Price Range:</label>
            <div class="price text-right">
              <span>$</span>
              <div class="leftLabel"></div>
              <span>to $</span>
              <div class="rightLabel"></div>
            </div>
          </div>
          <div data-range_min="0" data-range_max="1500000" data-cur_min="0" data-cur_max="1500000" class="nstSlider">
            <div class="bar"></div>
            <div class="leftGrip"></div>
            <div class="rightGrip"></div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-4 text-right form-group top30">
        <button type="submit" class="border_radius btn-yellow text-uppercase">Search</button>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <div class="group-button-search">
          <a data-toggle="collapse" href=".search-propertie-filters" class="more-filter">
            <i class="fa fa-plus text-1" aria-hidden="true"></i><i class="fa fa-minus text-2 hide" aria-hidden="true"></i>
            <div class="text-1">Show more search options</div>
            <div class="text-2 hide">less more search options</div>
          </a>
        </div>
        <div class="search-propertie-filters collapse">
          <div class="container-2">
            <div class="row">
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="search-form-group white bottom10">
                  <input type="checkbox" name="check-box" />
                  <span>Features</span>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="search-form-group white bottom10">
                  <input type="checkbox" name="check-box" />
                  <span>Balcony</span>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="search-form-group white bottom10">
                  <input type="checkbox" name="check-box" />
                  <span>Gas Heat</span>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="search-form-group white bottom10">
                  <input type="checkbox" name="check-box" />
                  <span>Washer, Dryer</span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="search-form-group white bottom10">
                  <input type="checkbox" name="check-box" />
                  <span>TV Cable</span>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="search-form-group white bottom10">
                  <input type="checkbox" name="check-box" />
                  <span>Swimming Pool</span>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="search-form-group white bottom10">
                  <input type="checkbox" name="check-box" />
                  <span>Home Theater</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>
@endsection

@section('content')
<section id="property" class="padding bg_gallery">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <h2 class="uppercase">real estate properties</h2>
        <p class="heading_space">We have Properties in these Areas View a list of Featured Properties.</p>
      </div>
    </div>
    <div class="clearfix">
      <div id="filters-property" class="cbp-l-filters-button text-center">
        <div data-filter=".latest" class="cbp-filter-item-active cbp-filter-item">LATEST</div>
        <div data-filter=".sale" class="cbp-filter-item">SALE</div>        
        <div data-filter=".rent" class="cbp-filter-item">RENT</div>
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
       <a href="listing1.html" class="btn-dark border_radius uppercase margin40">more listings</a>
    </div>
  </div>
</section>
@endsection