<div class="media bottom30">
    <div class="media-body">
    <a href="{{route('news', $item->slug)}}">{{$item->title}}</a>
        <span><i class="icon-clock5"></i>{{$item->created_at->format('M d,Y') }}</span>
    </div>
</div>