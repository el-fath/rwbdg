@extends('user/template')
@section('content')
<!--About Us -->
<section id="about" class="padding_bottom">
    
    {{-- <section class="page-banner page-banner-bg padding">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h1 class="p-white text-uppercase">Contact Us</h1>
              <p class="p-white">Select one of the frequently asked questions below to learn more about buying, selling, and renting real estate.</p>
            </div>
          </div>
        </div>
      </section>
      <!-- Page Banner End --> 
       --}}
      <!--Contact-->
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
                        <h2>get in touch</h2>
                    </div>
                    <div class="agetn-contact-2 bottom30">
                      	 <p><i class="icon-telephone114"></i> (+01) 34 56 7890</p>
                         <p><i class=" icon-icons142"></i> info@castle.com</p>
                         
                         <p><i class="icon-browser2"></i>www.castle.com</p>
                         <p><i class="icon-icons74"></i> Advisor Melbourne, Merrick Way, FL 12345 Australia</p>
                      </div>
                    <ul class="social_share bottom20">
            <li><a href="javascript:void(0)" class="facebook"><i class="icon-facebook-1"></i></a></li>
            <li><a href="javascript:void(0)" class="twitter"><i class="icon-twitter-1"></i></a></li>
            <li><a href="javascript:void(0)" class="google"><i class="icon-google4"></i></a></li>
            <li><a href="javascript:void(0)" class="linkden"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="javascript:void(0)" class="vimo"><i class="icon-vimeo3"></i></a></li>
          </ul>
                </div>
            
            	<div class="agent-p-form">
                	<div class="our-agent-box bottom30">
                        <h2>Send us a message</h2><span id="msg"></span>
                    </div>
                    
                    <div class="row">
                      <form class="callus" action="{{ url('contact-us') }}" id="formInput" method="post">
                        @csrf
                        <div class="col-md-12">
                          <div class="single-query form-group">
                            <input type="text" class="form-control" placeholder="Name" name="name" id="name" required>
                          </div>
                          <div class="single-query form-group">
                            <input type="tel" class="form-control" placeholder="Phone Number" name="phone" id="phone" required>
                          </div>
                          <div class="single-query form-group">
                            <input type="email" class="form-control" placeholder="Email" name="email" id="email" required>
                          </div>
                          <div class="single-query form-group">
                            <textarea class="form-control" placeholder="Message" name="message" id="message" required></textarea>
                          </div>
                          @if(config('services.recaptcha.key'))
                            <div class="g-recaptcha"
                                data-sitekey="{{config('services.recaptcha.key')}}">
                            </div>
                          @endif
                          <br>
                          <input type="submit" value="submit now" class="btn-blue">
                        </div>
                      </form>
                      
                    </div>
                	
                </div>
                
            </div>
            
        </div>
    </div>
  </div>
</section>
<!-- Contact End -->


      <!-- testimonials End -->
      
      
      <!--Partners-->
      {{-- <section id="logos">
        <div class="container partners padding_top">
          <div class="row">
            <div class="col-sm-12 text-center">
              <h2 class="uppercase">Our Partners</h2>
              <p class="heading_space">Aliquam nec viverra erat. Aenean elit tellus mattis quis maximus.</p>
            </div>
          </div>
          <div class="row">
            <div id="partner-slider" class="owl-carousel">
              <div class="item">
                <img src="images/logo1.png" alt="Featured Partner">
              </div>
              <div class="item">
                <img src="images/logo2.png" alt="Featured Partner">
              </div>
              <div class="item">
                <img src="images/logo3.png" alt="Featured Partner">
              </div>
              <div class="item">
                <img src="images/logo4.png" alt="Featured Partner">
              </div>
              <div class="item">
                <img src="images/logo5.png" alt="Featured Partner">
              </div>
              <div class="item">
                <img src="images/logo1.png" alt="Featured Partner">
              </div>
              <div class="item">
                <img src="images/logo2.png" alt="Featured Partner">
              </div>
              <div class="item">
                <img src="images/logo3.png" alt="Featured Partner">
              </div>
              <div class="item">
                <img src="images/logo4.png" alt="Featured Partner">
              </div>
              <div class="item">
                <img src="images/logo5.png" alt="Featured Partner">
              </div>
            </div>
          </div>
        </div>
      </section> --}}
      <!--Partners Ends-->      
  
</section>
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