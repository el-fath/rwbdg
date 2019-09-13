@extends('user/template')
@section('content')
<section id="contact-us">
  <div class="contact">
    <div id="map"></div>
    <div class="container">
      <div class="row">
        
          <div class="col-md-4 hidden-xs">
          </div> 
           
          <div class="col-md-4 hidden-xs">
          </div> 
           
          <div class="col-md-4 col-sm-4 col-xs-12  contact-text">
           
            	<div class="agent-p-contact">
                	<div class="our-agent-box bottom30">
                      <h2>@lang('global.contact_us_1')</h2>
                  </div>
                  <div class="agetn-contact-2 bottom30">
                        <p><i class="icon-telephone114"></i>{{$data['profile']['phone']}}</p>
                        <p><i class=" icon-icons142"></i>{{$data['profile']['email']}}</p>
                        
                        <p><i class="icon-browser2"></i>www.rwbdg.com</p>
                        <p><i class="icon-icons74"></i>{{$data['profile']['address']}}</p>
                    </div>
                  <ul class="social_share bottom20">
                    <li><a href="https://www.facebook.com/{{ $profile->social_facebook }}" target="_blank"
                        title="https://www.facebook.com/{{ $profile->social_facebook }}" class="facebook">
                        <i class="icon-facebook"></i></a>
                    </li>
                    <li><a href="https://www.twitter.com/{{ $profile->social_twitter }}" target="_blank"
                        title="https://www.twitter.com/{{ $profile->social_twitter }}" class="twitter">
                        <i class="icon-twitter"></i></a>
                    </li>
                    <li><a href="https://www.instagram.com/{{ $profile->social_instagram }}" target="_blank"
                        title="https://www.instagram.com/{{ $profile->social_instagram }}" class="google">
                        <i class="icon-instagram"></i></a>
                    </li>
                  </ul>
              </div>
            
            	<div class="agent-p-form">
                	<div class="our-agent-box bottom30">
                        <h2>@lang('global.contact_us_2')</h2><span id="msg"></span>
                    </div>
                    
                    <div class="row">
                      <form class="callus" action="{{ route('contact_us.store') }}" id="formInput" method="post">
                        @csrf
                        <div class="col-md-12">
                          <div class="single-query form-group">
                            <input type="text" class="form-control" placeholder="@lang('global.contact_us_3')" name="name" id="name" required>
                          </div>
                          <div class="single-query form-group">
                            <input type="tel" class="form-control" placeholder="@lang('global.contact_us_4')" name="phone" id="phone" required>
                          </div>
                          <div class="single-query form-group">
                            <input type="email" class="form-control" placeholder="Email" name="email" id="email" required>
                          </div>
                          <div class="single-query form-group">
                            <textarea class="form-control" placeholder="@lang('global.contact_us_5')" name="message" id="message" required></textarea>
                          </div>
                          @if(config('services.recaptcha.key'))
                            <div class="g-recaptcha"
                                data-sitekey="{{config('services.recaptcha.key')}}">
                            </div>
                          @endif
                          <br>
                          <input type="submit" value="@lang('global.contact_us_6')" class="btn-blue">
                        </div>
                      </form>
                      
                    </div>
                	
                </div>
              
            </div>
            
        </div>
    </div>
  </div>
</section>
</section>
<script>

  function initMap() {
    var myLatLng = {lat: {{ $profile->latitude }}, lng: {{ $profile->longitude }} };

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 13,
      center: myLatLng
    });

    var marker = new google.maps.Marker({
      position: myLatLng,
      map: map,
      title: '{{ $config->name }}'
    });
  }
</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCghcnyi7IpQ7qRTE9BsfBn9gCloZ5T3pA&callback=initMap">
</script>
<script>
    $(document).ready(function(){
        
        $("#formInput").submit(function(e){
            e.preventDefault();
            var formData = new FormData(this);
            
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            formData.append('_method', 'POST');

            $.ajax({
                url: $("#formInput").attr('action'),
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                dataType : 'json',
                encode : true,
                beforeSend: function(){
                  blockMessage($('#formInput'),'Sending, please wait...!','#fff');
                }
            })
            .done(function(data){
                $('#formInput').unblock();
                if(data.Code == 200){
                    showNotif("success","Success",data.Message);
                    $('#name').val('');
                    $('#phone').val('');
                    $('#email').val('');
                    $('#message').val('');
                    $('#msg').html('Succes, message sent').css('color', 'blue');
                    grecaptcha.reset();
                }else{
                    showNotif("error","Error",data.Message);
                    alert('something else');
                }
            })
            .fail(function(e) {
                $('#formInput').unblock();
                showNotif("error","Error",e.responseText);
                alert('something went wrong');
            })   
        }) 
    })
</script>
  
@endsection  