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
            <h3>{{ $marketing->name }}</h3>
            <p class="bottom30">{{ $marketing->description }}</p>
            <table class="agent_contact table">
                <tbody>
                    <tr class="bottom10">
                        <td><strong>Phone:</strong></td>
                        <td class="text-right">{{ $marketing->phone }}</td>
                    </tr>
                    <tr>
                        <td><strong>Email Adress:</strong></td>
                        <td class="text-right"><a href="#">{{ $marketing->email }}</a></td>
                    </tr>
                    <tr>
                        <td><strong>Facebook:</strong></td>
                        <td class="text-right"><a href="#">{{ $marketing->facebook }}</a></td>
                    </tr>
                    <tr>
                        <td><strong>Instagram:</strong></td>
                        <td class="text-right"><a href="#">{{ $marketing->instagram }}</a></td>
                    </tr>
                </tbody>
            </table>
            <div style="border-bottom:1px solid #d3d8dd;" class="bottom15"></div>
            <ul class="social_share">
                <li><a href="javascript:void(0)" class="google"><i class="icon-google4"></i></a></li>
                <li><a href="https://www.facebook.com/{{ $marketing->facebook }}" target="_blank"
                        title="https://www.facebook.com/{{ $marketing->facebook }}" class="facebook">
                        <i class="icon-facebook-1"></i></a>
                </li>
                <li><a href="https://www.instagram.com/{{ $marketing->instagram }}" target="_blank"
                        title="https://www.instagram.com/{{ $marketing->instagram }}" class="google">
                        <i class="icon-instagram"></i></a>
                </li>
            </ul>
        </div>
    </div>
</div>
