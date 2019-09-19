@extends('user/template')
@section('content')
@php
$news = $data['news'];
@endphp
<!-- News Details Start -->
<section id="news-section-1" class="news-section-details property-details padding_top">
    <div class="container">

        <div class="row heading_space">
            <div class="row">
                <div class="news-1-box clearfix">
                    <div class="col-md-12 col-sm-12 col-xs-12 top30">
                        <h1>{{$news->title}}</h1>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row">

                    <div class="news-1-box clearfix">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <img src="{{$news->ImagePath}}" alt="{{$news->title}}" class="img-responsive" />
                        </div>

                        <div class="col-md-12 col-sm-12 col-xs-12 top30">

                            <div class="news-details bottom10">
                                <span><i class="icon-icons228"></i> {{$news->created_at->format('M d,Y')}}</span>
                            </div>

                            {!! $news->description !!}

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
                <!-- Property Detail Start -->
                @if ($news->property)
                <div class="row clearfix">
                    <div class="col-md-12 listing1 property-details">
                        <h2>Related Property</h2>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 listing1 property-details">
                        <h2 class="text-uppercase">{{$news->property->title}}</h2>
                        <p class="bottom30">{{$news->property->address}},{{$news->property->Location}}</p>
                        <div>
                            <img src="{{$news->property->ImagePathMedium}}" alt="{{$news->property->title}}"
                                class="img-responsive" />
                        </div>
                        <div class="property_meta bg-black bottom40">
                            <span><i class="icon-select-an-objecto-tool"></i>{{$news->property->land_area}}
                                m<sup>2</sup></span>
                            <span><i class="icon-old-television"></i>{{$news->property->building_area}}
                                m<sup>2</sup></span>
                            <span><i
                                    class=" icon-microphone"></i>{{$news->property->bedroom}}+{{$news->property->extra_bedroom}}
                                Office Rooms</span>
                            <span><i
                                    class="icon-safety-shower"></i>{{$news->property->bathroom}}+{{$news->property->extra_bedroom}}
                                Bathroom</span>
                        </div>
                        <h2 class="text-uppercase">@lang('property.property_description_label')</h2>
                        <p class="bottom30">{!!$news->property->description!!}</p>
                        <h2 class="text-uppercase bottom20">@lang('property.quick_summary_label')</h2>
                        <div class="row property-d-table bottom40">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <table class="table table-striped table-responsive">
                                    <tbody>
                                        <tr>
                                            <td><b>@lang('property.summary.property_id')</b></td>
                                            <td class="text-right">{{$news->property->id}}</td>
                                        </tr>
                                        <tr>
                                            <td><b>@lang('property.summary.price')</b></td>
                                            @if ($news->property->type_transaction == 'sale')
                                            <td class="text-right">Rp.
                                                {{ number_format($news->property->sale_price,0,",",".") }}</td>
                                            @else
                                            <td class="text-right">Rp.
                                                {{ number_format($news->property->rent_price,0,",",".") }}</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            <td><b>@lang('property.summary.land_area')</b></td>
                                            <td class="text-right">{{$news->property->land_area}} m<sup>2</sup></td>
                                        </tr>
                                        <tr>
                                            <td><b>@lang('property.summary.building_area')</b></td>
                                            <td class="text-right">{{$news->property->building_area}} m<sup>2</sup></td>
                                        </tr>
                                        <tr>
                                            <td><b>@lang('property.summary.bedrooms')</b></td>
                                            <td class="text-right">{{$news->property->bedroom}} +
                                                {{$news->property->extra_bedroom}}</td>
                                        </tr>
                                        <tr>
                                            <td><b>@lang('property.summary.bathrooms')</b></td>
                                            <td class="text-right">{{$news->property->bathroom}} +
                                                {{$news->property->extra_bathroom}}</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <table class="table table-striped table-responsive">
                                    <tbody>
                                        <tr>
                                            <td><b>@lang('property.summary.type')</b></td>
                                            <td class="text-right">{{$news->property->type_transaction}}</td>
                                        </tr>
                                        <tr>
                                            <td><b>@lang('property.summary.available_from')</b></td>
                                            <td class="text-right">{{$news->property->created_at->format('M d,Y')}}</td>
                                        </tr>
                                        <tr>
                                            <td><b>@lang('property.summary.certificate')</b></td>
                                            <td class="text-right">{{$news->property->certificate}}</td>
                                        </tr>
                                        <tr>
                                            <td><b>@lang('property.summary.category')</b></td>
                                            <td class="text-right">{{$news->property->category->title}}</td>
                                        </tr>
                                        <tr>
                                            <td><b>@lang('property.summary.floors')</b></td>
                                            <td class="text-right">{{$news->property->floor}}</td>
                                        </tr>
                                        <tr>
                                            <td><b>@lang('property.summary.electricity')</b></td>
                                            <td class="text-right">{{$news->property->electricity}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <h2 class="text-uppercase bottom20">Marketplace</h2>
                        <div class="row property-d-table bottom40">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                @foreach ($news->property->marketplaces as $item)
                                    <div class="media">
                                        <div class="media-left">
                                          <a href="#">
                                            <img class="media-object" style="width: 64px;height: 64px;object-fit: cover;" src="{{$item->marketplace->ImagePathSmall}}" alt="{{$item->marketplace->title}}">
                                          </a>
                                        </div>
                                        <div class="media-body" style="vertical-align: middle;">
                                        <h4 class="media-heading">{{$item->marketplace->title}}</h4>
                                        <a href="{{$item->url}}" target="_blank">{{$item->url}}</a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        @if ($news->property->marketing)
                        @php
                        $marketing = $news->property->marketing;
                        @endphp
                        @include('user/include/marketing_profile')
                        @endif
                        <div class="row">
                            <div class="col-sm-10">
                                <h2 class="text-uppercase top20">@lang('property.similar_properties_label')</h2>
                                <br>
                            </div>
                            <div class="col-sm-10">
                                <div id="two-col-slider" class="owl-carousel">
                                    @foreach ($news->SimilarProperties as $item)
                                    @include('user/items/thumb_property')
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Property Detail End -->
                @endif
            </div>
            <aside class="col-md-4 col-xs-12">
                <form class="form-search" method="get" id="news-search" action="{{route("news")}}">
                    <div class="input-append">
                        <input type="text" class="input-medium search-query" placeholder="Search Here" name="search" value="">
                        <button type="submit" class="add-on"><i class="icon-icons185"></i></button>
                    </div>
                </form>
                <hr>
                <h3>@lang('home.categories_label')</h3>
                <ul class="pro-list padding-t-20">
                    @foreach ($data['property_categories'] as $item)
                        <li>
                            <a href="{{route('news', ['category'=>$item->id])}}">  {{$item->title}}</a>
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


@endsection
