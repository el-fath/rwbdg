@extends('admin/template')
@section('title')
{{$data['title']}}
@endsection
@section('content')
<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Home</span> - {{$data['title']}}
                </h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{route('admin.dashboard')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                    <span class="breadcrumb-item active">{{$data['title']}}</span>
                </div>

                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>
        </div>
    </div>
    <!-- /page header -->


    

    <!-- Content area -->
    <div class="content">

        <!-- Rounded basic tabs -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h6 class="card-title">{{($data['typeForm'] != "created") ? "Create" : "Edit"}} {{$data['title']}} </h6>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <form id="formInput" action="{{ ($data['typeForm'] =="create") ? route('admin.property.store') : route('admin.property.update',$data['dataModel']->id) }}" method="POST" enctype="multipart/form-data">
                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a href="#formid" class="nav-link rounded-top active" data-toggle="tab">id</a></li>
                                <li class="nav-item"><a href="#formen" class="nav-link rounded-top" data-toggle="tab">en</a></li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="formid">
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-2">Title</label>
                                            <div class="col-lg-10">
                                                <input type="text" required class="form-control" value="{{ ($data['typeForm'] =="create") ? "" : $data['dataModel']->{'title:id'} }}" placeholder="Title Property" name="id[title]">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-2">Description</label>
                                            <div class="col-lg-10">
                                                <textarea id="editorId" rows="3" cols="3" class="form-control" name="id[description]" placeholder="Description">{{ ($data['typeForm'] =="create") ? "" : $data['dataModel']->{'description:id'} }}</textarea>
                                            </div>
                                        </div>
                                </div>

                                <div class="tab-pane fade" id="formen">
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-2">Title</label>
                                            <div class="col-lg-10">
                                                <input type="text" required class="form-control" value="{{ ($data['typeForm'] =="create") ? "" : $data['dataModel']->{'title:en'} }}" placeholder="Title Property" name="en[title]">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-2">Description</label>
                                            <div class="col-lg-10">
                                                <textarea id="editorEn" rows="3" cols="3" class="form-control" name="en[description]" placeholder="Description">{{ ($data['typeForm'] =="create") ? "" : $data['dataModel']->{'description:en'} }}</textarea>
                                            </div>
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Marketing</label>
                                    <div class="col-lg-10">
                                        <select class="form-control select-search" name="marketing_id" data-fouc>
                                                <option value="">Choose Marketing</option>
                                                @if(isset($data['marketings']))
                                                    @foreach ($data['marketings'] as $item)
                                                        @if($data['typeForm'] != "create")
                                                            <option {{($data['dataModel']->marketing_id == $item->id) ? "selected" : ""}} value="{{$item->id}}">{{$item->name}}</option>
                                                        @else
                                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                                        @endif
                                                    @endforeach
                                                @endif
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                        <label class="col-form-label col-lg-2">Category</label>
                                        <div class="col-lg-10">
                                            <select class="form-control select-search" name="category_id" data-fouc>
                                                    <option value="">Choose Category</option>
                                                    @if(isset($data['categories']))
                                                        @foreach ($data['categories'] as $item)
                                                            @if($data['typeForm'] != "create")
                                                                <option {{($data['dataModel']->category_id == $item->id) ? "selected" : ""}} value="{{$item->id}}">{{$item->title}}</option>
                                                            @else
                                                            <option value="{{$item->id}}">{{$item->title}}</option>
                                                            @endif
                                                        @endforeach
                                                    @endif
                                            </select>
                                        </div>
                                    </div>
                                <div class="form-group row">
                                        <label class="col-form-label col-lg-2">Options</label>
                                        <div class="col-lg-4">
                                                <div class="form-check form-check-switchery">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input-switchery" name="is_publised"  {{(isset($data['dataModel']) && $data['dataModel']->is_publised == 1) ? "checked" : ""}} data-fouc>
                                                        Publised
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-switchery">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input-switchery" name="status" {{(isset($data['dataModel']) && $data['dataModel']->status == 1) ? "checked" : ""}} data-fouc>
                                                        Status
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-switchery">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input-switchery" name="is_popular" {{(isset($data['dataModel']) && $data['dataModel']->is_popular == 1) ? "checked" : ""}} data-fouc>
                                                        Popular
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-switchery">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input-switchery" name="is_featured" {{(isset($data['dataModel']) && $data['dataModel']->is_featured == 1) ? "checked" : ""}} data-fouc>
                                                        Featured
                                                    </label>
                                                </div>
                                        </div>
                                </div>
                                <div class="form-group row">
                                        <label class="col-form-label col-lg-2">Type Transaction</label>
                                        <div class="col-lg-4">
                                                <select class="form-control select-search" name="type_transaction" data-fouc>
                                                        <option value="">Choose Type Transaction</option>
                                                        @foreach ($data['type_transaction'] as $key => $item)
                                                            @if($data['typeForm'] != "create")
                                                                <option {{($data['dataModel']->type_transaction == $key) ? "selected" : ""}} value="{{$key}}">{{$item}}</option>
                                                            @else
                                                            <option value="{{$key}}">{{$item}}</option>
                                                            @endif
                                                        @endforeach
                                                </select>
                                        </div>
                                </div>
                                <div class="form-group row">
                                        <label class="col-form-label col-lg-2">Type Property</label>
                                        <div class="col-lg-4">
                                                <select class="form-control select-search" name="type_property" data-fouc>
                                                        <option value="">Choose Type Property</option>
                                                        @foreach ($data['type_property'] as $key => $item)
                                                            @if($data['typeForm'] != "create")
                                                                <option {{($data['dataModel']->type_property == $key) ? "selected" : ""}} value="{{$key}}">{{$item}}</option>
                                                            @else
                                                            <option value="{{$key}}">{{$item}}</option>
                                                            @endif
                                                        @endforeach
                                                </select>
                                        </div>
                                </div>
                                <hr>
                                <div class="form-group row">
                                        <label class="col-form-label col-lg-2">Price</label>
                                        <div class="col-lg-10">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label class="col-form-label col-lg-2">Sale</label>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control CurrencyFormat" name="sale_price" placeholder="Sale Price" value="{{ ($data['typeForm'] =="create") ? "" : $data['dataModel']->sale_price }}">
                                                            <span class="form-text text-muted">no need to use currency like Rp or $ only number </span>
                                                        </div>
                                                    </div>
                    
                                                    <div class="col-md-6">
                                                        <label class="col-form-label col-lg-2">Rent</label>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control CurrencyFormat" name="rent_price" placeholder="Rent Price" value="{{ ($data['typeForm'] =="create") ? "" : $data['dataModel']->rent_price }}">
                                                            <span class="form-text text-muted">no need to use currency like Rp or $ only number </span>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                </div>
                                <hr>
                                <div class="form-group row">
                                        <label class="col-form-label col-lg-2">Number & Code Listing</label>
                                        <div class="col-lg-10">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label class="col-form-label col-lg-2">Number</label>
                                                        <div class="form-group">
                                                            <input type="number" class="form-control" placeholder="Number of listing" name="listing_number" value="{{ ($data['typeForm'] =="create") ? "" : $data['dataModel']->listing_number }}">
                                                        </div>
                                                    </div>
                    
                                                    <div class="col-md-6">
                                                        <label class="col-form-label col-lg-2">Code</label>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Code of listing" name="listing_code" value="{{ ($data['typeForm'] =="create") ? "" : $data['dataModel']->listing_code }}">
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                </div>
                                <div class="form-group row location-column">
                                        <label class="col-form-label col-lg-2">Location</label>
                                        <div class="col-lg-10">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label class="col-form-label col-lg-12">Province</label>
                                                        <div class="form-group">
                                                                <select class="form-control select-search" name="province_id" id="province_select" data-fouc>
                                                                        <option value="">Choose Province</option>
                                                                        @foreach ($data['province'] as $item)
                                                                            @if($data['typeForm'] != "create")
                                                                                <option {{($data['dataModel']->province_id == $item->id) ? "selected" : ""}} value="{{$item->id}}">{{$item->title}}</option>
                                                                            @else
                                                                            <option value="{{$item->id}}">{{$item->title}}</option>
                                                                            @endif
                                                                        @endforeach
                                                                </select>
                                                        </div>
                                                    </div>
                    
                                                    <div class="col-md-4">
                                                        <label class="col-form-label col-lg-12">City</label>
                                                        <div class="form-group">
                                                                <select class="form-control select-search" name="city_id" id="city_select" data-fouc>
                                                                        <option value="">Choose City</option>
                                                                        @if(isset($data['city']))
                                                                            @foreach ($data['city'] as $item)
                                                                                @if($data['typeForm'] != "create")
                                                                                    <option {{($data['dataModel']->city_id == $item->id) ? "selected" : ""}} value="{{$item->id}}">{{$item->title}}</option>
                                                                                @else
                                                                                <option value="{{$item->id}}">{{$item->title}}</option>
                                                                                @endif
                                                                            @endforeach
                                                                        @endif
                                                                </select>
                                                        </div>
                                                    </div>
    
                                                    <div class="col-md-4">
                                                        <label class="col-form-label col-lg-12">District</label>
                                                        <div class="form-group">
                                                                <select class="form-control select-search" name="district_id" id="district_select" data-fouc>
                                                                        <option value="">Choose District</option>
                                                                        @if(isset($data['district']))
                                                                            @foreach ($data['district'] as $item)
                                                                                @if($data['typeForm'] != "create")
                                                                                    <option {{($data['dataModel']->district_id == $item->id) ? "selected" : ""}} value="{{$item->id}}">{{$item->title}}</option>
                                                                                @else
                                                                                <option value="{{$item->id}}">{{$item->title}}</option>
                                                                                @endif
                                                                            @endforeach
                                                                        @endif
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Address</label>
                                    <div class="col-lg-10">
                                        <textarea rows="3" cols="3" class="form-control" name="address" placeholder="Address">{{ ($data['typeForm'] =="create") ? "" : $data['dataModel']->address}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Region</label>
                                    <div class="col-lg-10">
                                        <input type="text" required class="form-control" value="{{ ($data['typeForm'] =="create") ? "" : $data['dataModel']->region }}" placeholder="Region" name="region">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Certificate</label>
                                    <div class="col-lg-10">
                                        <select class="form-control select-search" name="certificate" data-fouc>
                                                <option value="">Choose Certificate</option>
                                                @if(isset($data['certificate']))
                                                    @foreach ($data['certificate'] as $key => $item)
                                                        @if($data['typeForm'] != "create")
                                                            <option {{($data['dataModel']->certificate == $key) ? "selected" : ""}} value="{{$key}}">{{$item}}</option>
                                                        @else
                                                        <option value="{{$key}}">{{$item}}</option>
                                                        @endif
                                                    @endforeach
                                                @endif
                                        </select>
                                        {{-- <textarea rows="3" cols="3" class="form-control" name="en[description]" placeholder="Description">{{ ($data['typeForm'] =="create") ? "" : $data['dataModel']->{'description:en'} }}</textarea> --}}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Dimension</label>
                                    <div class="col-lg-10">
                                        <input type="text" required class="form-control" value="{{ ($data['typeForm'] =="create") ? "" : $data['dataModel']->dimension }}" placeholder="Dimension" name="dimension">
                                        <span class="form-text text-muted">Example <code>120x120</code>. no need to use m<sup>2</sup> </span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Land Area</label>
                                    <div class="col-lg-10">
                                        <input type="number" required class="form-control" value="{{ ($data['typeForm'] =="create") ? "" : $data['dataModel']->land_area }}" placeholder="Land Area" name="land_area">
                                        <span class="form-text text-muted">Example <code>120</code>. no need to use m<sup>2</sup> </span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Building Area (m<sup>2</sup> )</label>
                                    <div class="col-lg-10">
                                        <input type="number" required class="form-control" value="{{ ($data['typeForm'] =="create") ? "" : $data['dataModel']->building_area }}" placeholder="Building Area" name="building_area">
                                        <span class="form-text text-muted">Example <code>120</code>. no need to use m<sup>2</sup> </span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Floor</label>
                                    <div class="col-lg-10">
                                        <input type="number" required class="form-control" value="{{ ($data['typeForm'] =="create") ? "" : $data['dataModel']->floor }}" placeholder="Floor" name="floor">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Electricity</label>
                                    <div class="col-lg-10">
                                        <input type="number" required class="form-control" value="{{ ($data['typeForm'] =="create") ? "" : $data['dataModel']->electricity }}" placeholder="Electricity" name="electricity">
                                        <span class="form-text text-muted">Example <code>900</code>. no need to use KWH</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Bedroom</label>
                                    <div class="col-lg-10">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="col-form-label col-lg-2">Main</label>
                                                    <div class="form-group">
                                                        <input type="number" class="form-control" name="bedroom" placeholder="Bedroom"  value="{{ ($data['typeForm'] =="create") ? "" : $data['dataModel']->bedroom }}">
                                                    </div>
                                                </div>
                
                                                <div class="col-md-6">
                                                    <label class="col-form-label col-lg-2">Extra</label>
                                                    <div class="form-group">
                                                        <input type="number" class="form-control" name="extra_bedroom" placeholder="Extra Bedroom"  value="{{ ($data['typeForm'] =="create") ? "" : $data['dataModel']->extra_bedroom }}">
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Bathroom</label>
                                    <div class="col-lg-10">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="col-form-label col-lg-2">Main</label>
                                                    <div class="form-group">
                                                        <input type="number" class="form-control" name="bathroom" placeholder="Bathroom" value="{{ ($data['typeForm'] =="create") ? "" : $data['dataModel']->bathroom }}">
                                                    </div>
                                                </div>
                
                                                <div class="col-md-6">
                                                    <label class="col-form-label col-lg-2">Extra</label>
                                                    <div class="form-group">
                                                        <input type="number" class="form-control" name="extra_bathroom" placeholder="Extra Bathroom" value="{{ ($data['typeForm'] =="create") ? "" : $data['dataModel']->extra_bathroom }}">
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Image</label>
                                    <div class="col-lg-10">
                                        @if($data['typeForm'] != "create")
                                            <img src="{{$data['dataModel']->ImagePath}}" style="width: 200px;" alt="">
                                            <br>
                                            <br>
                                        @endif
                                        <input type="file" class="file-input-noupload" name="image">
                                        <span class="form-text text-muted">Recomendation for size is <code>1900x920</code>.</span>
                                    </div>
                                </div>
                                <hr>
                                <h2>Marketplaces</h2>
                                @if(isset($data['marketplaces']))
                                    @foreach ($data['marketplaces'] as $item)
                                        <div class="form-group row">
                                        <label class="col-form-label col-lg-2">{{$item->title}}</label>
                                            <div class="col-lg-10">
                                            <input type="text" required class="form-control" value="{{ ($data['typeForm'] =="create") ? "" : $item->url }}" placeholder="URL {{$item->title}}" name="marketplace[{{$item->id}}]">
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /rounded basic tabs -->    
    </div>
    <!-- /content area -->
    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script>
    $(document).ready(function(){
        

        var options = {
            filebrowserImageBrowseUrl: '/rwbdg/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/rwbdg/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/rwbdg/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/rwbdg/laravel-filemanager/upload?type=Files&_token='
        };

        CKEDITOR.replace('editorId', options);
        CKEDITOR.replace('editorEn', options);


        $("#province_select").on('change', function(){    
            var id = $($(this).find(':selected')[0]).val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            
            $.ajax({
                url: "{{ route('admin.city.getcity') }}",
                method: 'post',
                dataType : 'json',
                data: {
                    id: id,
                },
                beforeSend: function(){
                    blockMessage($('.location-column'),'Please Wait','#fff');
                },
                success: function(result){
                    $('.location-column').unblock();
                    console.log("asd",result.data);
                    var newOptions = [];
                    var $el = $("#city_select");
                    $('#city_select option:gt(0)').remove();
                    for (let index = 0; index < result.data.length; index++) {
                        var data = result.data[index];
                        console.log(data);
                        $el.append($("<option></option>")
                            .attr("value", data.id).text(data.title));
                    }
                },
                fail: function(xhr, textStatus, errorThrown){
                    $('.location-column').unblock();
                    alert('request failed');
                }
            });
        });
        
        $("#city_select").on('change', function(){    
            var id = $($(this).find(':selected')[0]).val();
            // alert(id);
            console.log(id);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{ route('admin.getdistrict.getdistrict') }}",
                method: 'post',
                dataType : 'json',
                data: {
                    id: id,
                },
                beforeSend: function(){
                    blockMessage($('.location-column'),'Please Wait','#fff');
                },
                success: function(result){
                    $('.location-column').unblock();
                    console.log("asd",result.data);
                    var newOptions = [];
                    var $el = $("#district_select");
                    $('#district_select option:gt(0)').remove();
                    for (let index = 0; index < result.data.length; index++) {
                        var data = result.data[index];
                        console.log(data);
                        $el.append($("<option></option>")
                            .attr("value", data.id).text(data.title));
                    }
                },
                fail: function(xhr, textStatus, errorThrown){
                    $('.location-column').unblock();
                    alert('request failed');
                }
            });
        });


        $("#formInput").submit(function(e){
            e.preventDefault();
            
            for (var i in CKEDITOR.instances) {
                CKEDITOR.instances[i].updateElement();
            };

            var formData = new FormData(this);
            
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            @if($data['typeForm'] != "create")
                formData.append('_method', 'PUT');
            @endif

            $.ajax({
                url: 		$("#formInput").attr('action'),
                method: 	'POST',
                data:  		formData,
                processData: false,
                contentType: false,
                dataType : 'json',
                encode  : true,
                beforeSend: function(){
                    blockMessage($('#formInput'),'Please Wait , {{ ($data['typeForm'] =="create") ? "Processing to add data" : "Processing to update data" }}','#fff');
                }
            })
            .done(function(data){
                $('#formInput').unblock();
                if(data.Code == 200){
                    showNotif("success","Success",data.Message);
                    setTimeout(function(){ 
                        redirect('{{route('admin.property.index')}}');
                    }, 2000);
                }else{
                    showNotif("error","Error",data.Message);
                }
            })
            .fail(function(e) {
                $('#formInput').unblock();
                showNotif("error","Error",e.responseText);
            })   
        }) 
    })
</script>
        
</div>
@endsection