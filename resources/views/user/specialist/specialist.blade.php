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
            <li class="active">@lang('specialist.agent')</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <section id="agent-2" class="padding_top padding_bottom_half">
    <div class="container">
      <div class="row">

        @foreach ($data['Marketing'] as $val)
        <div class="col-sm-4 bottom40">
          <div class="agent_wrap">
            <div class="image">
              <img src="{{$val->ImagePath}}" style="width: 364px; height:388px;" alt="Agents">
              <div class="img-info" style="width: 364px; height:388px;">
                <h3>{{$val->name}}</h3>
                <span>{{$val->level['title']}}</span>
                <p class="top20 bottom30">{{$val->description}}</p>
                <table class="agent_contact table">
                  <tbody>
                    <tr class="bottom10">
                      <td><strong>Phone:</strong></td>
                      <td class="text-right">{{$val->phone}}</td>
                    </tr>
                    <tr>
                      <td><strong>Email Adress:</strong></td>
                      <td class="text-right"><a href="#.">{{$val->email}}</a></td>
                    </tr>
                  </tbody>
                </table>
                <hr>
                <a class="btn-more" href="javascript:void(0)">
                <i><img alt="arrow" src="{{ url('public/assets/user') }}/images/arrow-yellow.png"></i><span>Full Profile</span><i><img alt="arrow" src="{{ url('public/assets/user') }}/images/arrow-yellow.png"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
        @endforeach

      </div>
    </div>
  </section>
  <!-- Agent End -->
  
  
</section>
  
@endsection  