@extends('user/template')
@section('content')

<!-- Property Detail Start -->
<section id="property" class="padding">
  <div class="container property-details">
    <div class="row">
        <div class="col-md-12">
           <h2 class="text-uppercase">{{$data['data']->title}}</h2>
           <p class="bottom30">{{$data['data']->address}}</p>
           <div id="property-d-1" class="owl-carousel single">
              <div class="item"><img src="{{$data['data']->ImagePath}}" alt="image"/></div>
           </div>
           {{-- <div id="property-d-1-2" class="owl-carousel single">
              <div class="item" ><img src="{{$data['data']->ImagePathMedium}}" alt="image"/></div>
           </div> --}}
           <div class="property_meta bg-black bottom40">
            <span><i class="icon-select-an-objecto-tool"></i>{{$data['data']->land_area}}
               m<sup>2</sup></span>
           <span><i class="icon-old-television"></i>{{$data['data']->building_area}}
               m<sup>2</sup></span>
           <span><i
                   class=" icon-microphone"></i>{{$data['data']->bedroom}}+{{$data['data']->extra_bedroom}}
               Office Rooms</span>
           <span><i
                   class="icon-safety-shower"></i>{{$data['data']->bathroom}}+{{$data['data']->extra_bedroom}}
               Bathroom</span>
           </div>
        </div>
        <div class="col-md-8">
          <h2 class="text-uppercase">@lang('property.prop_desc')</h2>
          <p class="bottom30">
            {!!$data['data']->description!!}
          </p>
          <hr>
          <br>
          <h2 class="text-uppercase bottom20">@lang('property.quick_summary_label')</h2>
            <div class="row property-d-table bottom40">
                  <div class="col-md-6 col-sm-6 col-xs-12">
                     <table class="table table-striped table-responsive">
                        <tbody>
                              <tr>
                                 <td><b>@lang('property.summary.property_id')</b></td>
                                 <td class="text-right">{{$data['data']->id}}</td>
                              </tr>
                              <tr>
                                 <td><b>@lang('property.summary.price')</b></td>
                                 @if ($data['data']->type_transaction == 'sale')
                                 <td class="text-right">Rp.
                                    {{ number_format($data['data']->sale_price,0,",",".") }}</td>
                                 @else
                                 <td class="text-right">Rp.
                                    {{ number_format($data['data']->rent_price,0,",",".") }}</td>
                                 @endif
                              </tr>
                              <tr>
                                 <td><b>@lang('property.summary.land_area')</b></td>
                                 <td class="text-right">{{$data['data']->land_area}} m<sup>2</sup></td>
                              </tr>
                              <tr>
                                 <td><b>@lang('property.summary.building_area')</b></td>
                                 <td class="text-right">{{$data['data']->building_area}} m<sup>2</sup></td>
                              </tr>
                              <tr>
                                 <td><b>@lang('property.summary.bedrooms')</b></td>
                                 <td class="text-right">{{$data['data']->bedroom}} +
                                    {{$data['data']->extra_bedroom}}</td>
                              </tr>
                              <tr>
                                 <td><b>@lang('property.summary.bathrooms')</b></td>
                                 <td class="text-right">{{$data['data']->bathroom}} +
                                    {{$data['data']->extra_bathroom}}</td>
                              </tr>

                        </tbody>
                     </table>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                     <table class="table table-striped table-responsive">
                        <tbody>
                              <tr>
                                 <td><b>@lang('property.summary.type')</b></td>
                                 <td class="text-right">{{$data['data']->type_transaction}}</td>
                              </tr>
                              <tr>
                                 <td><b>@lang('property.summary.available_from')</b></td>
                                 <td class="text-right">{{$data['data']->created_at->format('M d,Y')}}</td>
                              </tr>
                              <tr>
                                 <td><b>@lang('property.summary.certificate')</b></td>
                                 <td class="text-right">{{$data['data']->certificate}}</td>
                              </tr>
                              <tr>
                                 <td><b>@lang('property.summary.category')</b></td>
                                 <td class="text-right">{{$data['data']->category->title}}</td>
                              </tr>
                              <tr>
                                 <td><b>@lang('property.summary.floors')</b></td>
                                 <td class="text-right">{{$data['data']->floor}}</td>
                              </tr>
                              <tr>
                                 <td><b>@lang('property.summary.electricity')</b></td>
                                 <td class="text-right">{{$data['data']->electricity}}</td>
                              </tr>
                        </tbody>
                     </table>
                  </div>
            </div>
          <br>
          <hr>
          <h2 class="text-uppercase bottom20">Marketplace</h2>
            <div class="row property-d-table bottom40">
                  <div class="col-md-6 col-sm-6 col-xs-12">
                     @foreach ($data['data']->marketplaces as $item)
                        <div class="media">
                              <div class="media-left">
                              <a href="#">
                                    <img class="media-object" style="width: 64px;height: 64px;object-fit: cover;" src="{{$item->marketplace->ImagePathSmall}}" alt="{{$item->marketplace->title}}">
                              </a>
                              </div>
                              <div class="media-body" style="vertical-align: middle;">
                              <h4 class="media-heading">{{$item->marketplace->title}}</h4>
                              <a href="{{$item->url}}" target="_blank">{{$item->url}}</a>
                              </div>
                        </div>
                     @endforeach
                  </div>
            </div>
        </div>
        <div class="col-md-4">
            <h2 class="text-uppercase bottom20">@lang('property.prop_owner')</h2>
            <div class="row">
               <div class="col-sm-4 bottom40">
                  <div class="agent_wrap">
                     <div class="image">
                        <img src="{{$data['data']->marketing['ImagePathMedium']}}" alt="Agents">
                     </div>
                  </div>
               </div>
               <div class="col-sm-8 bottom40">
                  <div class="agent_wrap">
                     <h3>{{$data['data']->marketing['name']}}</h3>
                     <p class="bottom30">{{$data['data']->marketing['description']}}</p>
                  </div>
               </div>
               <div class="col-sm-12 agent_wrap bottom30">
                  <table class="agent_contact table">
                     <tbody>
                        <tr class="bottom10">
                           <td><strong>@lang('specialist.phone'):</strong></td>
                           <td class="text-right">{{$data['data']->marketing['phone']}}</td>
                        </tr>
                        <tr>
                           <td><strong>@lang('specialist.email'):</strong></td>
                           <td class="text-right">{{$data['data']->marketing['email']}}</td>
                        </tr>
                        <tr>
                           <td><strong>Instagram:</strong></td>
                           <td class="text-right">{{$data['data']->marketing['instagram']}}</td>
                        </tr>
                        <tr>
                          <td><strong>Facebook:</strong></td>
                          <td class="text-right">{{$data['data']->marketing['facebook']}}</td>
                       </tr>
                     </tbody>
                  </table>
                  {{-- <div style="border-bottom:1px solid #d3d8dd;" class="bottom15"></div> --}}
               </div>
               {{-- <div class="col-sm-12 bottom40">
                  <form class="callus">
                     <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name">
                     </div>
                     <div class="form-group">
                        <input type="tel" class="form-control" placeholder="Phone Number">
                     </div>
                     <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email">
                     </div>
                     <div class="form-group">
                        <textarea class="form-control" placeholder="Message"></textarea>
                     </div>
                     <input type="submit" class="btn-blue uppercase border_radius" value="submit now">
                  </form>
               </div> --}}
            </div>
            
        </div>
    </div>
  </div>
</section>
<!-- Property Detail End -->
  
@endsection  