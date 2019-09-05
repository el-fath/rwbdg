<div class="news-1-box clearfix">
    <div class="col-md-5 col-sm-5 col-xs-12">
        <div class="image-2">
            <a href="{{route("news_detail",$item->slug)}}"><img src="{{$item->ImagePathSmall}}" alt="{{$item->title}}" class="img-responsive" style="height: 304px;object-fit: cover;"/></a>
        </div>
    </div>
    <div class="col-md-7 col-sm-7 col-xs-12 padding-left-25">
        <h3><a href="{{route("news_detail",$item->slug)}}">{{$item->title}}</a></h3>
        <div class="news-details padding-b-10 margin-t-5">
            {{-- <span><i class="icon-icons230"></i> by </span> --}}
            <span><i class="icon-icons228"></i> {{$item->created_at->format('M d,Y') }}</span>
        </div>
        <p class="p-font-15">{!! str_limit(strip_tags($item->description), 200) !!}...</p>
        <div class="pro-3-link padding-t-20">
            <a class="btn-more" href="{{route("news_detail",$item->slug)}}">
                    <div class="pro-3-link padding-t-20">
                        <a class="btn-dark border_radius" href="{{route("news_detail",$item->slug)}}">Read More</a>
                    </div>
            </a>
        </div>
    </div>
</div>