@section('search')
<button type="button" class="form_opener"><i class="fa fa-bars"></i></button>
<div class="tp_overlay">
  {{-- <div class="topbar clearfix">
    <ul class="breadcrumb_top">
      <li><a href="favorite_properties.html"><i class="icon-icons43"></i>Favorites</a></li>
      <li><a href="submit_property.html"><i class="icon-icons215"></i>Submit Property</a></li>
      <li><a href="my_properties.html"><i class="icon-icons215"></i>My Property</a></li>
      <li><a href="profile.html"><i class="icon-icons230"></i>Profile</a></li>
      <li><a href="login.html"><i class="icon-icons179"></i>Login / Register</a></li>
      <li class="last-icon"><i class="icon-icons215"></i></li>
    </ul>
  </div> --}}
  
  <form class="callus top30 clearfix centered">
    <h2 class="text-uppercase t_white bottom20 text-center">@lang("home.advance_search.title")</h2>
    <div class="row">
      <div class="col-sm-6">
        <div class="single-query bottom15">
          <input type="text" class="keyword-input" placeholder="@lang("home.advance_search.keyword_field")">
        </div>
      </div>
      <div class="col-sm-6">
        <div class="single-query bottom15">
          <div class="intro">
            <select>
              <option selected="" value="any">@lang("home.advance_search.property_transaction")</option>
              @foreach ($data['property_transaction'] as $key => $item)
                <option value="{{$key}}">{{$item}}</option>
              @endforeach
            </select>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="single-query bottom15">
          <div class="intro">
            <select>
              <option class="active">@lang("home.advance_search.property_category_field")</option>
              {{-- <option value="">@lang("home.advance_search.category_option")</option> --}}
              @foreach ($data['property_categories'] as $item)
                <option value="{{$item->id}}">{{$item->title}}</option>
              @endforeach
            </select>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="single-query bottom15">
          <div class="intro">
            <select>
              <option class="active">@lang("home.advance_search.property_type_field")</option>
              @foreach ($data['property_type'] as $key => $item)
                <option value="{{$key}}">{{$item}}</option>
              @endforeach
            </select>
          </div>
        </div>
      </div>
      <div class="search-2">
        <div class="col-md-3 col-sm-6 col-xs-6">
          <div class="single-query bottom15">
            <div class="intro">
              <select>
                <option class="active">@lang("home.advance_search.min_bed_field")</option>
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
                <option class="active">@lang("home.advance_search.min_bath_field")</option>
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
          <input type="text" class="keyword-input" placeholder="@lang("home.advance_search.min_landarea_field")">
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-6">
        <div class="single-query bottom15">
          <input type="text" class="keyword-input" placeholder="@lang("home.advance_search.min_buldingarea_field")">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8 col-sm-8 col-xs-8 bottom15">
        <div class="single-query-slider">
          <div class="clearfix top20">
            <label class="pull-left">@lang("home.advance_search.price_range_field"):</label>
            <div class="price text-right">
              <span>Rp</span>
              <div class="leftLabel"></div>
              <span>to Rp</span>
              <div class="rightLabel"></div>
            </div>
          </div>
          <div data-range_min="0" data-range_max="1000000000000" data-cur_min="0" data-cur_max="0" class="nstSlider">
            <div class="bar"></div>
            <div class="leftGrip"></div>
            <div class="rightGrip"></div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-4 text-right form-group top30">
        <button type="submit" class="border_radius btn-yellow text-uppercase">@lang("home.advance_search.search_btn")</button>
      </div>
    </div>
    {{-- <div class="row">
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
    </div> --}}
  </form>
</div>
@endsection