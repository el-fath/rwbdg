@extends('user/template')
@section('content')
<!-- News Details Start -->
<section id="news-section-1" class="news-section-details property-details padding_top">
    <div class="container">

        <div class="row heading_space">
            <div class="row">
                <div class="news-1-box clearfix">
                    <div class="col-md-12 col-sm-12 col-xs-12 top30">
                        <h1>Easy your wat to the Global sotck</h1>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row">

                    <div class="news-1-box clearfix">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <img src="images/news-d-1.jpg" alt="image" class="img-responsive" />
                        </div>

                        <div class="col-md-12 col-sm-12 col-xs-12 top30">

                            <div class="news-details bottom10">
                                <span><i class="icon-icons230"></i> by Martin Moore</span>
                                <span><i class="icon-icons228"></i> August 22, 2017</span>
                            </div>

                            <h3>Easy your wat to the Global sotck</h3>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Duis mollis et sem sed sollicitudin. Donec non odio neque. Aliquam hendrerit
                                sollicitudin purus, quis rutrum mi accumsan nec.
                                Quisque bibendum orci ac nibh facilisis, at malesuada orci congue.</p>

                            <p class=" top30">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Duis mollis et sem sed sollicitudin. Donec non odio neque. Aliquam hendrerit
                                sollicitudin purus, quis rutrum mi accumsan nec.
                                <b>Quisque bibendum orci ac nibh facilisis</b>, at malesuada orci congue. Nullam tempus
                                sollicitudin cursus. Ut et adipiscing erat.
                                Curabitur this is a text link libero tempus congue.</p>

                            <p class=" top30 bottom30">Duis mattis laoreet neque, et ornare neque sollicitudin at.
                                Proin sagittis dolor sed mi elementum pretium.
                                Donec et justo ante. Vivamus egestas sodales est, eu rhoncus urna semper eu.
                                Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                Integer tristique elit lobortis purus bibendum, quis dictum metus mattis.
                                Phasellus posuere felis sed eros porttitor mattis. Curabitur massa magna, tempor in
                                blandit id, porta in ligula.
                                Aliquam laoreet nisl massa, at interdum mauris sollicitudin et.</p>

                            <h3>Get the best property in Town</h3>
                            <p class="bottom20">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Duis mollis et sem sed sollicitudin. Donec non odio neque. Aliquam hendrerit
                                sollicitudin purus, quis rutrum mi accumsan nec.
                                Quisque bibendum orci ac nibh facilisis, at malesuada orci congue.</p>

                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="news-1-box clearfix">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <img src="images/news-d-2.jpg" alt="image" class="img-responsive bottom15" />
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12 padding-left-25">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Duis mollis et sem sed sollicitudin. Donec non odio neque. Aliquam hendrerit
                                sollicitudin purus, quis rutrum mi accumsan nec.
                                Quisque bibendum orci ac nibh facilisis, at malesuada orci congue.</p>

                            <p class="bottom30">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Duis mollis et sem sed sollicitudin. Donec non odio neque. Aliquam hendrerit
                                sollicitudin purus, quis rutrum mi accumsan nec.
                                <b>Quisque bibendum orci ac nibh facilisis</b>, at malesuada orci congue.</p>
                        </div>

                        <div class="col-md-12">
                            <p class="top10">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Duis mollis et sem sed sollicitudin. Donec non odio neque. Aliquam hendrerit
                                sollicitudin purus, quis rutrum mi accumsan nec.
                                Quisque bibendum orci ac nibh facilisis, at malesuada orci congue.</p>
                        </div>

                    </div>

                </div>

                <div class="row heading_space">

                    <div class="news-2-tag">
                        <div class="col-md-12 col-sm-12 col-xs-12 text-left">
                            <div class="social-icons">
                                <h4>Share:</h4>
                                <ul class="social_share">
                                    <li><a href="#." class="facebook"><i class="icon-facebook-1"></i></a></li>
                                    <li><a href="#." class="twitter"><i class="icon-twitter-1"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <aside class="col-md-4 col-xs-12">
                <form class="form-search" method="get" id="news-search" action="/">
                    <div class="input-append">
                        <input type="text" class="input-medium search-query" placeholder="Search Here" value="">
                        <button type="submit" class="add-on"><i class="icon-icons185"></i></button>
                    </div>
                </form>
                <hr>
                <h3>@lang('home.categories_label')</h3>
                <ul class="pro-list padding-t-20">
                    @foreach ($data['news_category'] as $item)
                    <li>
                        {{$item->title}}
                    </li>
                    @endforeach
                </ul>
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
                    <div class="col-md-12">
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
<!-- News Details End -->

<!-- Property Detail Start -->
<section id="property" class="padding_top padding_bottom_half">
    <div class="container">
        <div class="row clearfix">
            <div class="col-md-12 listing1 property-details">
                <h2>Related Property</h2>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12 listing1 property-details">
                <h2 class="text-uppercase">987 Cantebury Drive</h2>
                <p class="bottom30">45 Regent Street, London, UK</p>

                <div class="property_meta bg-black bottom40">
                    <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span>
                    <span><i class=" icon-microphone"></i>2 Office Rooms</span>
                    <span><i class="icon-safety-shower"></i>1 Bathroom</span>
                    <span><i class="icon-old-television"></i>TV Lounge</span>
                    <span><i class="icon-garage"></i>1 Garage</span>
                </div>
                <h2 class="text-uppercase">Property Description</h2>
                <p class="bottom30">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et dui vestibulum,
                    bibendum purus sit amet, vulputate mauris. Ut adipiscing gravida tincidunt. Duis euismod placerat
                    rhoncus. Phasellus mollis imperdiet placerat. Sed ac turpis nisl. Mauris at ante mauris. Aliquam
                    posuere fermentum lorem, a aliquam mauris rutrum a. Curabitur sit amet pretium lectus, nec consequat
                    orci.</p>
                <p class="bottom30">Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos
                    himenaeos. Duis et metus in libero sollicitudin venenatis eu sed enim. Nam felis lorem, suscipit ac
                    nisl ac, iaculis dapibus tellus. Cras ante justo, aliquet quis placerat nec, molestie id turpis.
                </p>
                <div class="text-it-p bottom40">
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam power nonummy nibh tempor cum
                        soluta nobis eleifend option congue nihil imperdiet doming Lorem ipsum dolor sit amet.
                        consectetuer elit sed diam power nonummy</p>
                </div>
                <h2 class="text-uppercase bottom20">Quick Summary</h2>
                <div class="row property-d-table bottom40">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <table class="table table-striped table-responsive">
                            <tbody>
                                <tr>
                                    <td><b>Property Id</b></td>
                                    <td class="text-right">5456</td>
                                </tr>
                                <tr>
                                    <td><b>Price</b></td>
                                    <td class="text-right">$8,600 / month</td>
                                </tr>
                                <tr>
                                    <td><b>Property Size</b></td>
                                    <td class="text-right">5,500 ft2</td>
                                </tr>
                                <tr>
                                    <td><b>Bedrooms</b></td>
                                    <td class="text-right">5</td>
                                </tr>
                                <tr>
                                    <td><b>Bathrooms</b></td>
                                    <td class="text-right">3</td>
                                </tr>
                                <tr>
                                    <td><b>Available From</b></td>
                                    <td class="text-right">22-04-2017</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <table class="table table-striped table-responsive">
                            <tbody>
                                <tr>
                                    <td><b>Status</b></td>
                                    <td class="text-right">Rent</td>
                                </tr>
                                <tr>
                                    <td><b>Year Built</b></td>
                                    <td class="text-right">1991</td>
                                </tr>
                                <tr>
                                    <td><b>Garages</b></td>
                                    <td class="text-right">1</td>
                                </tr>
                                <tr>
                                    <td><b>Cross Streets</b></td>
                                    <td class="text-right">Nordoff</td>
                                </tr>
                                <tr>
                                    <td><b>Floors</b></td>
                                    <td class="text-right">Carpet - Ceramic Tile</td>
                                </tr>
                                <tr>
                                    <td><b>Plumbing</b></td>
                                    <td class="text-right">Full Copper Plumbing</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <h2 class="text-uppercase bottom20">Contact Agent</h2>
                <div class="row">
                    <div class="col-sm-6 bottom40">
                        <div class="agent_wrap">
                            <div class="image">
                                <img src="images/agent-one.jpg" alt="Agents">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 bottom40">
                        <div class="agent_wrap">
                            <h3>Bohdan Kononets</h3>
                            <p class="bottom30">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                nonummy nibh tempor cum soluta nobis consectetuer adipiscing eleifend option congue
                                nihil imperdiet doming…</p>
                            <table class="agent_contact table">
                                <tbody>
                                    <tr class="bottom10">
                                        <td><strong>Phone:</strong></td>
                                        <td class="text-right">(+01) 34 56 7890</td>
                                    </tr>
                                    <tr class="bottom10">
                                        <td><strong>Mobile:</strong></td>
                                        <td class="text-right">(+033) 34 56 7890</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Email Adress:</strong></td>
                                        <td class="text-right"><a href="#.">bohdan@castle.com</a></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Skype:</strong></td>
                                        <td class="text-right"><a href="#.">bohdan.kononets</a></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div style="border-bottom:1px solid #d3d8dd;" class="bottom15"></div>
                            <ul class="social_share">
                                <li><a href="#." class="facebook"><i class="icon-facebook-1"></i></a></li>
                                <li><a href="#." class="twitter"><i class="icon-twitter-1"></i></a></li>
                                <li><a href="#." class="google"><i class="icon-google4"></i></a></li>
                                <li><a href="#." class="linkden"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#." class="vimo"><i class="icon-vimeo3"></i></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-10">
                        <h2 class="text-uppercase top20">Similar Properties</h2>
                        <p class="bottom30">We have Properties in these Areas View a list of Featured Properties.</p>
                    </div>
                    <div class="col-sm-12">
                        <div id="two-col-slider" class="owl-carousel">
                            <div class="item">
                                <div class="property_item heading_space">
                                    <div class="image">
                                        <a href="#."><img src="images/listing1.jpg" alt="latest property"
                                                class="img-responsive"></a>
                                        <div class="price clearfix">
                                            <span class="tag pull-right">$8,600 Per Month</span>
                                        </div>
                                        <span class="tag_t">For Sale</span>
                                        <span class="tag_l">Featured</span>
                                    </div>
                                    <div class="proerty_content">
                                        <div class="proerty_text">
                                            <h3 class="captlize"><a href="#.">Historic Town House</a></h3>
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
                                            <p class="pull-md-left"><i class="icon-calendar2"></i>&nbsp;5 Days ago </p>
                                            <ul class="pull-right">
                                                <li><a href="#."><i class="icon-like"></i></a></li>
                                                <li><a href="#five" class="share_expender" data-toggle="collapse"><i
                                                            class="icon-share3"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="toggle_share collapse" id="five">
                                            <ul>
                                                <li><a href="#." class="facebook"><i class="icon-facebook-1"></i>
                                                        Facebook</a></li>
                                                <li><a href="#." class="twitter"><i class="icon-twitter-1"></i>
                                                        Twitter</a></li>
                                                <li><a href="#." class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="property_item heading_space">
                                    <div class="image">
                                        <a href="#."><img src="images/listing1.jpg" alt="latest property"
                                                class="img-responsive"></a>
                                        <div class="price clearfix">
                                            <span class="tag pull-right">$8,600 Per Month</span>
                                        </div>
                                        <span class="tag_t">For Sale</span>
                                        <span class="tag_l">Featured</span>
                                    </div>
                                    <div class="proerty_content">
                                        <div class="proerty_text">
                                            <h3 class="captlize"><a href="#.">Historic Town House</a></h3>
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
                                            <p class="pull-md-left"><i class="icon-calendar2"></i>&nbsp;5 Days ago </p>
                                            <ul class="pull-right">
                                                <li><a href="#."><i class="icon-like"></i></a></li>
                                                <li><a href="#four" class="share_expender" data-toggle="collapse"><i
                                                            class="icon-share3"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="toggle_share collapse" id="four">
                                            <ul>
                                                <li><a href="#." class="facebook"><i class="icon-facebook-1"></i>
                                                        Facebook</a></li>
                                                <li><a href="#." class="twitter"><i class="icon-twitter-1"></i>
                                                        Twitter</a></li>
                                                <li><a href="#." class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="property_item heading_space">
                                    <div class="image">
                                        <a href="#."><img src="images/listing1.jpg" alt="latest property"
                                                class="img-responsive"></a>
                                        <div class="price clearfix">
                                            <span class="tag pull-right">$8,600 Per Month</span>
                                        </div>
                                        <span class="tag_t">For Sale</span>
                                        <span class="tag_l">Featured</span>
                                    </div>
                                    <div class="proerty_content">
                                        <div class="proerty_text">
                                            <h3 class="captlize"><a href="#.">Historic Town House</a></h3>
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
                                            <p class="pull-md-left"><i class="icon-calendar2"></i>&nbsp;5 Days ago </p>
                                            <ul class="pull-right">
                                                <li><a href="#."><i class="icon-like"></i></a></li>
                                                <li><a href="#six" class="share_expender" data-toggle="collapse"><i
                                                            class="icon-share3"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="toggle_share collapse" id="six">
                                            <ul>
                                                <li><a href="#." class="facebook"><i class="icon-facebook-1"></i>
                                                        Facebook</a></li>
                                                <li><a href="#." class="twitter"><i class="icon-twitter-1"></i>
                                                        Twitter</a></li>
                                                <li><a href="#." class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="property_item heading_space">
                                    <div class="image">
                                        <a href="#."><img src="images/listing1.jpg" alt="latest property"
                                                class="img-responsive"></a>
                                        <div class="price clearfix">
                                            <span class="tag pull-right">$8,600 Per Month</span>
                                        </div>
                                        <span class="tag_t">For Sale</span>
                                        <span class="tag_l">Featured</span>
                                    </div>
                                    <div class="proerty_content">
                                        <div class="proerty_text">
                                            <h3 class="captlize"><a href="#.">Historic Town House</a></h3>
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
                                            <p class="pull-md-left"><i class="icon-calendar2"></i>&nbsp;5 Days ago </p>
                                            <ul class="pull-right">
                                                <li><a href="#."><i class="icon-like"></i></a></li>
                                                <li><a href="#three" class="share_expender" data-toggle="collapse"><i
                                                            class="icon-share3"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="toggle_share collapse" id="three">
                                            <ul>
                                                <li><a href="#." class="facebook"><i class="icon-facebook-1"></i>
                                                        Facebook</a></li>
                                                <li><a href="#." class="twitter"><i class="icon-twitter-1"></i>
                                                        Twitter</a></li>
                                                <li><a href="#." class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Property Detail End -->

@endsection
