<div class="row padding-b-30 padding-t-30">
    <div class="col-md-4 col-sm-4 col-xs-12 p-image image bottom20">
        <img src="{{$item->ImagePathSmall}}" alt="image" style="width: 80px;height: 77px;"/>
    </div>
    <div class="col-md-8 col-sm-8 col-xs-12">
        <div class="feature-p-text">
            <h4><a href="{{route('property.id', $item->slug)}}">{{$item->title}}</a></h4>
            <span>{{$item->Location}}</span>
        </div>
    </div>
</div>