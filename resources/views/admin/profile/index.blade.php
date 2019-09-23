@extends('admin/template')
@section('title')
{{$title}}
@endsection
@section('content')
<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Home</span> - {{$title}}
                </h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{route('admin.dashboard')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                    <span class="breadcrumb-item active">{{$title}}</span>
                </div>

                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>
        </div>
    </div>
    <!-- /page header -->


    <!-- Content area -->
    <div class="content">
         <!-- Dashboard content -->
        <div class="row">
            <div class="col-xl-12">
                <!-- Basic tabs -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header header-elements-inline">
                            <h6 class="card-title">Company {{$title}}</h6>
                                <div class="header-elements">
                                    <div class="list-icons">
                                        <a class="list-icons-item" data-action="collapse"></a>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <form action="{{ ($typeForm =="create") ? "" : route('admin.profile.update',$dataModel->id) }}" id="formInput" enctype="multipart/form-data" action="post">
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item"><a href="#formid" class="nav-link rounded-top active" data-toggle="tab">id</a></li>
                                        <li class="nav-item"><a href="#formen" class="nav-link rounded-top" data-toggle="tab">en</a></li>
                                    </ul>
        
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="formid">
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-2">Title</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" required class="form-control" value="{{ ($typeForm =="create") ? "" : $dataModel->{'name:id'} }}" placeholder="Title id" name="id[name]">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-2">Description</label>
                                                    <div class="col-lg-10">
                                                        <textarea id="editorId" rows="3" cols="3" class="form-control" name="id[description]" placeholder="Description id">{{ ($typeForm =="create") ? "" : $dataModel->{'description:id'} }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-2">Tag Line</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" required class="form-control" value="{{ ($typeForm =="create") ? "" : $dataModel->{'tag_line:id'} }}" placeholder="Tag line id" name="id[tag_line]">
                                                    </div>
                                                </div>
                                        </div>
        
                                        <div class="tab-pane fade" id="formen">
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-2">Title</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" required class="form-control" value="{{ ($typeForm =="create") ? "" : $dataModel->{'name:en'} }}" placeholder="Title en" name="en[name]">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-2">Description</label>
                                                    <div class="col-lg-10">
                                                        <textarea id="editorEn" rows="3" cols="3" class="form-control" name="en[description]" placeholder="Description en">{{ ($typeForm =="create") ? "" : $dataModel->{'description:en'} }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-2">Tag Line</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" required class="form-control" value="{{ ($typeForm =="create") ? "" : $dataModel->{'tag_line:en'} }}" placeholder="Tag line en" name="en[tag_line]">
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                    <fieldset class="mb-3">
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-2">Email</label>
                                            <div class="col-lg-10">
                                                <input type="email" class="form-control" placeholder="email@mail.com" name="email" value="{{ ($typeForm =="create") ? : $dataModel->email }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-2">Phone</label>
                                            <div class="col-lg-10">
                                                <input type="tel" class="form-control" placeholder="phone" name="phone" value="{{ ($typeForm =="create") ? : $dataModel->phone }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-2">Address</label>
                                            <div class="col-lg-10">
                                                <textarea rows="3" cols="3" class="form-control" name="address" placeholder="Default textarea">{{ ($typeForm =="create") ? : $dataModel->address }}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-2">Facebook</label>
                                            <div class="col-lg-10">
                                                <input type="tel" class="form-control" placeholder="Facebook" name="social_facebook" value="{{ ($typeForm =="create") ? : $dataModel->social_facebook }}">
                                            </div>
                                        </div><div class="form-group row">
                                            <label class="col-form-label col-lg-2">Twitter</label>
                                            <div class="col-lg-10">
                                                <input type="tel" class="form-control" placeholder="Twitter" name="social_twitter" value="{{ ($typeForm =="create") ? : $dataModel->social_twitter }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-2">Instagram</label>
                                            <div class="col-lg-10">
                                                <input type="tel" class="form-control" placeholder="Instagram" name="social_instagram" value="{{ ($typeForm =="create") ? : $dataModel->social_instagram }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-2">Location</label>
                                            <div class="col-lg-10" style="height:10cm">
                                                <div id="map"></div>
                                                <input type="hidden" id="inp_loc" value="" name="location">
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!-- /basic tabs -->
            </div>
        </div>
        <!-- /dashboard content -->
    </div>
    <!-- /content area -->
<script>
      var map;
      var markers = [];

      function initMap() {
        var myLatLng = {lat: {{ $profile->latitude }}, lng: {{ $profile->longitude }} };

        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 12,
          center: myLatLng,
          mapTypeId: 'terrain'
        });

        // This event listener will call addMarker() when the map is clicked.
        map.addListener('click', function(event) {
            deleteMarkers();
            addMarker(event.latLng);
        });

        // Adds a marker at the center of the map.
        addMarker(myLatLng);
      }

      // Adds a marker to the map and push to the array.
      function addMarker(location) {
        $('#inp_loc').val(location);
        var marker = new google.maps.Marker({
          position: location,
          map: map
        });
        markers.push(marker);
      }

      // Sets the map on all markers in the array.
      function setMapOnAll(map) {
        for (var i = 0; i < markers.length; i++) {
          markers[i].setMap(map);
        }
      }

      // Removes the markers from the map, but keeps them in the array.
      function clearMarkers() {
        setMapOnAll(null);
      }

      // Shows any markers currently in the array.
      function showMarkers() {
        setMapOnAll(map);
      }

      // Deletes all markers in the array by removing references to them.
      function deleteMarkers() {
        clearMarkers();
        markers = [];
      }
</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCghcnyi7IpQ7qRTE9BsfBn9gCloZ5T3pA&callback=initMap">
</script>
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

            @if($typeForm != "create")
                formData.append('_method', 'PUT');
            @endif

            $.ajax({
                url: $("#formInput").attr('action'),
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                dataType : 'json',
                encode : true,
                beforeSend: function(){
                    blockMessage($('#formInput'),'Please Wait , {{ ($typeForm =="create") ? "Processing to add data" : "Processing to update data" }}','#fff');
                }
            })
            .done(function(data){
                $('#formInput').unblock();
                if(data.Code == 200){
                    showNotif("success","Success",data.Message);
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