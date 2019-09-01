<aside class="col-md-4 col-xs-12">
        <div class="property-query-area clearfix" style="background: #333333">
        <div class="col-md-12">
            <h3 class="text-uppercase bottom20 top15">@lang("home.advance_search.title")</h3>
        </div>
        <form class="callus">
            <div class="single-query form-group col-sm-12">
            <input type="text" class="keyword-input" placeholder="@lang("home.advance_search.keyword_field")">
            </div>
            <div class="single-query form-group col-sm-12">
            <div class="intro">
                <select>
                    <option selected="" value="any">@lang("home.advance_search.property_transaction")</option>
                    @foreach ($data['property_transaction'] as $key => $item)
                        <option value="{{$key}}">{{$item}}</option>
                    @endforeach
                </select>
            </div>
            </div>
            <div class="single-query form-group col-sm-12">
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
            <div class="single-query form-group col-sm-12">
            <div class="intro">
                <select>
                        <option class="active">@lang("home.advance_search.property_type_field")</option>
                        @foreach ($data['property_type'] as $key => $item)
                          <option value="{{$key}}">{{$item}}</option>
                        @endforeach
                </select>
            </div>
            </div>
            <div class="search-2 col-sm-12">
            <div class="row">
                <div class="col-sm-6">
                <div class="single-query form-group">
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
                <div class="col-sm-6">
                <div class="single-query form-group">
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
            </div>
            <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-6">
                <div class="single-query form-group">
                    <input type="text" class="keyword-input" placeholder="@lang("home.advance_search.min_landarea_field")">
                </div>
                </div>
                <div class="col-sm-6">
                <div class="single-query form-group">
                    <input type="text" class="keyword-input" placeholder="@lang("home.advance_search.min_buldingarea_field")">
                </div>
                </div>
            </div>
            </div>
            <div class="col-sm-12 bottom10">
            <div class="single-query-slider">
                <label class="pull-left">@lang("home.advance_search.price_range_field"):</label>
                <div class="price text-right">
                <span>$</span>
                <div class="leftLabel"></div>
                <span>to $</span>
                <div class="rightLabel"></div>
                </div>
                <div data-range_min="0" data-range_max="1000000000000" data-cur_min="0" data-cur_max="0" class="nstSlider">
                    <div class="bar"></div>
                    <div class="leftGrip"></div>
                    <div class="rightGrip"></div>
                </div>
            </div>
            </div>
            <div class="col-sm-12 form-group">
            <button type="submit" class="btn-blue border_radius">Search</button>
            </div>
        </form>
        </div>
        {{-- <div class="row">
        <div class="col-md-12">
            <h3 class="bottom40 margin40">Featured Properties</h3>
        </div>
        </div>
        <div class="row bottom20">
        <div class="col-md-4 col-sm-4 col-xs-6 p-image">
            <img src="images/f-p-1.png" alt="image"/>
        </div>
        <div class="col-md-8 col-sm-8 col-xs-6">
            <div class="feature-p-text">
            <h4>Historic Town House</h4>
            <p class="bottom15">45 Regent Street, London, UK</p>
            <a href="#.">$128,600</a>
            </div>
        </div>
        </div>
        <div class="row bottom20">
        <div class="col-md-4 col-sm-4 col-xs-6 p-image">
            <img src="images/f-p-1.png" alt="image"/>
        </div>
        <div class="col-md-8 col-sm-8 col-xs-6">
            <div class="feature-p-text">
            <h4>Historic Town House</h4>
            <p class="bottom15">45 Regent Street, London, UK</p>
            <a href="#.">$128,600</a>
            </div>
        </div>
        </div>
        <div class="row bottom20">
        <div class="col-md-4 col-sm-4 col-xs-6 p-image">
            <img src="images/f-p-1.png" alt="image"/>
        </div>
        <div class="col-md-8 col-sm-8 col-xs-6">
            <div class="feature-p-text">
            <h4>Historic Town House</h4>
            <p class="bottom15">45 Regent Street, London, UK</p>
            <a href="#.">$128,600</a>
            </div>
        </div>
        </div>
        <div class="row">
        <div class="col-md-12">
            <h3 class="margin40 bottom20">Featured Properties</h3>
        </div>
        <div class="col-md-12">
            <div id="agent-2-slider" class="owl-carousel">
            <div class="item">
                <div class="property_item heading_space">
                <div class="image">
                    <a href="#"><img src="images/slider-list2.jpg" alt="listin" class="img-responsive"></a>
                    <div class="feature"><span class="tag-2">For Rent</span></div>
                    <div class="price clearfix"><span class="tag pull-right">$8,600 Per Month - <small>Family Home</small></span></div>
                </div>
                </div>
            </div>
            <div class="item">
                <div class="property_item heading_space">
                <div class="image">
                    <a href="#"><img src="images/slider-list2.jpg" alt="listin" class="img-responsive"></a>
                    <div class="feature"><span class="tag-2">For Rent</span></div>
                    <div class="price clearfix"><span class="tag pull-right">$8,600 Per Month - <small>Family Home</small></span></div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div> --}}
    </aside>