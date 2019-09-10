@extends('user/template')
@section('content')
<!-- News Start -->
<section id="news-section-1" class="property-details padding_top">
    <div class="container property-details">
        <h1>News</h1>
        <br>
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                @foreach ($data['news'] as $item)
                    @include('user/items/thumb_news')
                @endforeach
                {{ $data['news']->links() }}
                </div>
                <div class="row margin_bottom">
                <div class="col-md-12">
                    <ul class="pager">
                        <li><a href="#.">1</a></li>
                        <li class="active"><a href="#.">2</a></li>
                        <li><a href="#.">3</a></li>
                    </ul>
                </div>
                </div>
            </div>
            <aside class="col-md-4 col-xs-12">
                <div class="row">
                <div class="col-md-12">
                    <form class="form-search bottom40" method="get" id="news-search" action="{{route("news")}}">
                        <div class="input-append">
                            <input type="text" class="input-medium search-query" name="search" placeholder="Search Here" value="">
                            <button type="submit" class="add-on"><i class="icon-icons185"></i></button>
                        </div>
                    </form>
                </div>
                <div class="col-md-12">
                    <h3 class="bottom20">Categories</h3>
                    <ul class="pro-list bottom20">
                        <li>
                            Air Conditioning
                        </li>
                        <li>
                            Barbeque
                        </li>
                        <li>
                            Dryer
                        </li>
                        <li>
                            Laundry
                        </li>
                        <li>
                            Refrigerator
                        </li>
                        <li>
                            Swimming Pool
                        </li>
                    </ul>
                </div>
                </div>
            </aside>
        </div>
    </div>
</section>
<!-- News End -->
@endsection