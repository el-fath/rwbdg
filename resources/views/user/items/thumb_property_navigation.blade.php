<div class="item">
    <div class="image bottom15"> 
    <img src="{{$item->ImagePathSmall}}" alt="Featured Property" style="height: 150px;"> 
        <span class="nav_tag yellow text-uppercase">for {{$item->type_transaction}}</span>
    </div>
    <h4><a href="{{route('property.id', $item->slug)}}">{{$item->title}}</a></h4>
    <p>{{$item->address}} {{$item->Location}}</p>
</div>