@extends('user/template')
@section('content')

<!-- Gallery -->
<section id="types" class="padding">
    <div class="container">
        <div class="row">
        <div class="col-sm-12 text-center">
            <h2 class="uppercase">Photo Gallery</h2>
            <p style="display: none;" class="heading_space">We are proud to present to you some of the best homes, apartments, offices e.g. across Australia for affordable prices.</p>
        </div>
        <div class="row">
        <br>
        <br>
        <br>
        </div>
        </div>
        <div id="type-grid" class="cbp cbp-l-grid-mosaic-flat">
            @foreach ($data['albums'] as $item)
                <div class="cbp-item">
                    <img src="{{$item->ThumbPath->ImagePathSmall}}" alt="">
                    <div class="overlay">
                    <div class="grid-caption">
                        <br>
                        <br>
                        <br>
                        <h3>{{ $item->title }}</h3>
                    </div>
                    <a class="centered" href="{{route("gallery_photos",$item->id)}}"><i class="icon-focus"></i></a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Gallery Ends -->

@endsection