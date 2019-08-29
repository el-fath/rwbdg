@extends('user/template')
@section('content')
<!--About Us -->
<section id="about" class="padding_bottom">
    
  <section class="page-banner padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1 class="text-uppercase">About Us</h1>
          <p>Ray White Indonesia</p>
          <ol class="breadcrumb text-center">
            <li><a href="#">Home</a></li>
            <li><a href="#">Pages</a></li>
            <li class="active">FAQ's</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <section id="faqs" class="padding_half bottom40">
    <div class="container">
      <div class="row">
        <div align="justify" class="col-sm-12">
          <p>
            @foreach ($data['profile']['translations'] as $val)
              {{ Request::segment(1) == 'en' && $val->locale == 'en' ? $val->locale : '' }}
            @endforeach
          </p>
        </div>
      </div>
    </div>
  </section>
  
</section>
  
@endsection  