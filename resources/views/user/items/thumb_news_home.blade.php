<div class="item">
    <div class="news_hovered">
    <p class="top10 bottom15"><strong>{{$item->title}}</strong></p>
    <p class="bottom30">{!! $item->description !!}</p>
    <span><i class="icon-clock4"></i>{{$item->created_at->format('M d,Y') }}</span>
    </div>
</div>