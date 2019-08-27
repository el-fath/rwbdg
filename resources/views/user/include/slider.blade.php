@section('slider')
<!--Slider-->
  <div class="rev_slider_wrapper">
    <div id="rev_overlaped" class="rev_slider"  data-version="5.0">
      <ul>
        <!-- SLIDE -->
        @foreach ($data['slide'] as $item)
          <li data-transition="fade">
            <img src="{{$item->ImagePath}}" alt="" data-bgposition="center center" data-bgfit="cover" class="rev-slidebg">		
            <div class="tp-caption tp-static-layer" 
              id="slide-37-layer-2" 
              data-x="['left','left','left','left']" data-hoffset="['50','50','50','50']" 
              data-y="['bottom','bottom','bottom','bottom']" data-voffset="['230','180','150','100']"  
              data-whitespace="nowrap"
              data-visibility="['on','on','on','on']"
              data-fontsize="['48','48','28','28']"
              data-start="500" 
              data-responsive_offset="on"
              data-basealign="slide" 
              data-startslide="0" 
              data-endslide="5" 
              style="z-index: 5;">
              @php
                  // dd($item);
              @endphp
          <h1><span class="t_white">{{ $item->title }}</span></h1>
            </div>
            <div class="tp-caption tp-static-layer" 
              id="slide-37-layer-2" 
              data-x="['left','left','left','left']" data-hoffset="['50','50','50','50']" 
              data-y="['bottom','bottom','bottom','bottom']" data-voffset="['150','100','120','120']" 
              data-whitespace="nowrap"
              data-visibility="['on','on','on','on']"
              data-start="500" 
              data-basealign="slide" 
              data-startslide="0" 
              data-endslide="5" 
              style="z-index: 5;">
              <p class="t_white">{!! $item->description !!}
              </p>
            </div>					
          </li>
        @endforeach
        
        
        {{-- <div class="tp-static-layers">
          <div class="tp-caption tp-static-layer" 
            id="slide-37-layer-2" 
            data-x="['left','left','left','left']" data-hoffset="['50','50','50','50']" 
            data-y="['bottom','bottom','bottom','bottom']" data-voffset="['60','60','60','60']" 
            data-whitespace="nowrap"
            data-visibility="['on','on','on','on']"
            data-start="500" 
            data-basealign="slide" 
            data-startslide="0" 
            data-endslide="5" 
            style="z-index: 5;"><a href="listing1.html" class="btn-white border_radius uppercase">view Properties</a>
          </div>
        </div> --}}
      </ul>
    </div>
  </div>
<!--Slider ends-->
@endsection