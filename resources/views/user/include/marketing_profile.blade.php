<h2 class="text-uppercase bottom20">@lang('property.contact_agent')</h2>
<div class="row">
    <div class="col-sm-6 bottom40">
        <div class="agent_wrap">
            <div class="image">
                <img src="{{$marketing->ImagePathSmall}}" alt="{{$marketing->name}}">
            </div>
        </div>
    </div>
    <div class="col-sm-6 bottom40">
        <div class="agent_wrap">
            <h3>{{$marketing->name}}</h3>
            <p class="bottom30">{!!$marketing->description!!}</p>
            <table class="agent_contact table">
                <tbody>
                    <tr class="bottom10">
                        <td><strong>@lang('property.phone_agent_label'):</strong></td>
                        <td class="text-right"><a href="tel:{{$marketing->phone}}"></a></td>
                    </tr>
                    <tr>
                        <td><strong>@lang('property.email_agent_label'):</strong></td>
                        <td class="text-right"><a href="mailto:{{$marketing->email}}"></a></td>
                    </tr>
                </tbody>
            </table>
            <div style="border-bottom:1px solid #d3d8dd;" class="bottom15"></div>
            <ul class="social_share">
                <li><a href="{{$marketing->facebook}}" class="facebook"><i class="icon-facebook-1"></i></a></li>
                <li><a href="{{$marketing->instagram}}" class="instagram"><i class="icon-twitter-1"></i></a></li>
            </ul>
        </div>
    </div>

</div>
