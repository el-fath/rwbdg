<div class="cbp-item latest {{$item->type_transaction}}">
    <div class="property_item">
        <div class="image">
        <a href="{{route('property.id', $item->slug)}}"><img src="{{$item->ImagePathSmall}}" alt="{{$item->title}}" class="img-responsive" style="height: 210px;"></a>
        <div class="price clearfix"> 
            @if ($item->type_transaction == "sale")
                <span class="tag pull-right">Rp {{ number_format($item->sale_price,0,",",".") }}</span>
            @else
                <span class="tag pull-right">Rp {{ number_format($item->rent_price,0,",",".") }}</span>
            @endif
        </div>
        <span class="tag_t">For {{ucfirst($item->type_transaction)}}</span> 
        
        @if ($item->is_featured)
            <span class="tag_l">Featured</span>
        @endif
        
        </div>
        <div class="proerty_content">
        <div class="proerty_text">
            <h3 class="captlize"><a href="property_detail1.html">{{$item->title}}</a></h3>
            <p>{{$item->address}}</p> {{$item->location}}
        </div>
        <div class="property_meta transparent"> 
            <span><i class="icon-select-an-objecto-tool"></i>{{$item->land_area}} m<sup>2</sup> @lang('property.thumb.land_label')</span> 
            <span><i class="icon-select-an-objecto-tool"></i>{{$item->building_area}} m<sup>2</sup> @lang('property.thumb.building_label')</span> 
            {{-- <span></span>    --}}
        </div>
        <div class="property_meta transparent bottom30"> 
            <span><i class="icon-bed"></i>{{$item->bedroom}}+{{$item->extra_bedroom}} @lang('property.thumb.bedroom_label')</span> 
            <span><i class="icon-safety-shower"></i>{{$item->bathroom}}+{{$item->extra_bathroom}} @lang('property.thumb.bathroom_label')</span>   
            {{-- <span></span>  --}}
        </div>
        <div class="favroute clearfix">
            <p><i class="icon-calendar2"></i> {{$item->created_at->diffForHumans() }} </p>
            <ul class="pull-right">
            {{-- <li><a href="javascript:void(0)"><i class="icon-like"></i></a></li> --}}
            <li><a href="#marketplace" class="share_expender" data-toggle="collapse"><i class="icon-globe"></i></a></li>
            </ul>
        </div>
        <div class="toggle_share collapse" id="marketplace">
            <ul>
                @foreach ($item->marketplaces as $val)
                    <li><a target="_blank" href="{{$val->url}}" class="facebook"><i class="icon-home"></i> {{$val->marketplace->title}}</a></li>
                @endforeach
            </ul>
        </div>
        </div>
    </div>
    </div>