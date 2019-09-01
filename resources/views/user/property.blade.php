@extends('user/template')
@section('content')
<!-- Listing Start -->
<section id="listing1" class="listing1 padding_top">
    <div class="container">
        <div class="row">
        <div class="col-md-8 col-sm-12 col-xs-12">
            <div class="row">
            <div class="col-md-9">
                <h2 class="uppercase">@lang('property.property_listing_label')</h2>
                <p class="heading_space">@lang('property.property_listing_desc_label')</p>
            </div>
            <div class="col-md-3">
            <form class="callus">
                <div class="single-query">
                <div class="intro">
                    <select>
                        <option class="active">@lang('property.sort_label')</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                    </select>
                </div>
                </div>
                </form>
            </div>
            </div>
            <div class="row">
            @foreach ($data['property_latest'] as $item)
                <div class="col-sm-6">
                    {{-- <div class="property_item heading_space"> --}}
                        @include('user/items/thumb_property')
                    {{-- </div> --}}
                </div>
            @endforeach
            </div>
            
            <div class="padding_bottom text-center">
            <ul class="pager">
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
            </ul>
            </div>
        </div>
        @include('user/include/property_search')
        </div>
    </div>
</section>
<!-- Listing end -->
@endsection