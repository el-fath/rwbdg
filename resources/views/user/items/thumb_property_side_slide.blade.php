<div class="item">
    <div class="property_item heading_space">
        <div class="image">
            <a href="{{route('property.id', $item->slug)}}"><img src="{{$item->ImagePathSmall}}" alt="listin" class="img-responsive" style="height: 250px;"></a>
            <div class="feature"><span class="tag-2">For {{$item->type_transaction}}</span></div>
            <div class="price clearfix"><span class="tag pull-right">{{$item->title}}</small></span></div>
        </div>
    </div>
</div>