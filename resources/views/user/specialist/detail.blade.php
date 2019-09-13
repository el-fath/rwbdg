@extends('user/template')
@section('content')
<!--About Us -->
<section id="about" class="padding_bottom">
    
  <section class="page-banner padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1 class="text-uppercase">@lang('specialist.find_special')</h1>
          <ol class="breadcrumb text-center">
            <li><a href="#">Home</a></li>
            <li><a href="#">@lang('specialist.page')</a></li>
            <li><a href="#">@lang('specialist.agent')</a></li>
            <li class="active">@lang('specialist.agent_profile')</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  

  <section id="agents" class="padding_bottom_half padding_top">
    <div class="container">
      <div class="row">
        <div class="col-md-8 listing1">
          <div class="row">
            <div class="col-sm-6 bottom40">
              <div class="agent_wrap">
                <div class="image">
                <img src="{{ $data['Marketing']->ImagePath }}" style="width: 364px; height:388px;object-fit: contain;" alt="Agents">
                </div>
              </div>
            </div>
            <div class="col-sm-6 bottom40">
              <div class="agent_wrap">
                <h3>{{ $data['Marketing']->name }}</h3>
                <p class="bottom30">{{ $data['Marketing']->description }}</p>
                <table class="agent_contact table">
                  <tbody>
                    <tr class="bottom10">
                      <td><strong>@lang('specialist.phone'):</strong></td>
                      <td class="text-right">{{ $data['Marketing']->phone }}</td>
                    </tr>
                    <tr>
                      <td><strong>@lang('specialist.email'):</strong></td>
                      <td class="text-right"><a href="#">{{ $data['Marketing']->email }}</a></td>
                    </tr>
                    <tr>
                        <td><strong>Facebook:</strong></td>
                        <td class="text-right"><a href="#">{{ $data['Marketing']->facebook }}</a></td>
                    </tr>
                    <tr>
                        <td><strong>Instagram:</strong></td>
                        <td class="text-right"><a href="#">{{ $data['Marketing']->instagram }}</a></td>
                    </tr>
                  </tbody>
                </table>
                <div style="border-bottom:1px solid #d3d8dd;" class="bottom15"></div>
                <ul class="social_share">
                    {{-- <li><a href="javascript:void(0)" class="google"><i class="icon-google4"></i></a></li> --}}
                    <li><a href="https://www.facebook.com/{{ $data['Marketing']->facebook }}" target="_blank"
                        title="https://www.facebook.com/{{ $data['Marketing']->facebook }}" class="facebook">
                        <i class="icon-facebook-1"></i></a>
                    </li>
                    <li><a href="https://www.instagram.com/{{ $data['Marketing']->instagram }}" target="_blank"
                        title="https://www.instagram.com/{{ $data['Marketing']->instagram }}" class="google">
                        <i class="icon-instagram"></i></a>
                    </li>
                </ul>
              </div>
             </div>
            </div>
        </aside>
      </div>
    </div>
  </section>
  <!-- Agent Profile End -->
  
  
</section>
  
@endsection  