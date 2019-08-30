@extends('user/template')
@section('content')
<!--About Us -->
<section id="about" class="padding_bottom">
    
  @foreach ($data['profile'] as $val)
  <section class="page-banner padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1 class="text-uppercase">@lang('about.about_us')</h1>
          {{-- <p>Ray White Indonesia</p> --}}
          <p>
            {{ $val->tag_line }}
          </p>
          <ol class="breadcrumb text-center">
            <li><a href="#">Home</a></li>
            <li><a href="#">@lang('about.page')</a></li>
            <li class="active">@lang('about.about')</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <section id="faqs" class="padding_half bottom40">
  <img src="{{ $config->LogoPath }}" style="max-height: 150px; width: 150px; margin:auto; display:block" class="logo" alt="">
  <div class="container">
      <div class="row">
        <div align="justify" class="col-sm-12">
          <p>
            {{ $val->name }}
          </p>
          <p>
            {{ $val->description }}
          </p>
        </div>
      </div>
    </div>
  </section>
  @endforeach
  
</section>
  
@endsection  