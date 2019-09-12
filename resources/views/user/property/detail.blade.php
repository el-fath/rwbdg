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
          <h2 class="text-uppercase">Property Description</h2>
          <p class="bottom30">
            {!!$data['data']->description!!}
          </p>
        </div>
        <div class="col-md-4">
            <h2 class="text-uppercase bottom20">Property Owner</h2>
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
                           <td><strong>Phone:</strong></td>
                           <td class="text-right">{{$data['data']->marketing['phone']}}</td>
                        </tr>
                        <tr>
                           <td><strong>Email Adress:</strong></td>
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