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
                    <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
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
                            <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Options</label>
                                    <div class="col-lg-4">
                                            <div class="form-check form-check-switchery">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input-switchery" checked data-fouc>
                                                    Publised
                                                </label>
                                            </div>
                                            <div class="form-check form-check-switchery">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input-switchery" checked data-fouc>
                                                    Status
                                                </label>
                                            </div>
                                            <div class="form-check form-check-switchery">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input-switchery" checked data-fouc>
                                                    Popular
                                                </label>
                                            </div>
                                            <div class="form-check form-check-switchery">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input-switchery" checked data-fouc>
                                                    Featured
                                                </label>
                                            </div>
                                    </div>
                            </div>
                            <hr>
                            
                            <hr>
                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a href="#formid" class="nav-link rounded-top active" data-toggle="tab">id</a></li>
                                <li class="nav-item"><a href="#formen" class="nav-link rounded-top" data-toggle="tab">en</a></li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="formid">
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-2">Title</label>
                                            <div class="col-lg-10">
                                                <input type="text" required class="form-control" value="{{ ($data['typeForm'] =="create") ? "" : $data['dataModel']->{'title:id'} }}" placeholder="Title banner" name="id[title]">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-2">Description</label>
                                            <div class="col-lg-10">
                                                <textarea rows="3" cols="3" class="form-control" name="id[description]" placeholder="Description">{{ ($data['typeForm'] =="create") ? "" : $data['dataModel']->{'description:id'} }}</textarea>
                                            </div>
                                        </div>
                                </div>

                                <div class="tab-pane fade" id="formen">
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-2">Title</label>
                                            <div class="col-lg-10">
                                                <input type="text" required class="form-control" value="{{ ($data['typeForm'] =="create") ? "" : $data['dataModel']->{'title:en'} }}" placeholder="Title Slide" name="en[title]">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-2">Description</label>
                                            <div class="col-lg-10">
                                                <textarea rows="3" cols="3" class="form-control" name="en[description]" placeholder="Description">{{ ($data['typeForm'] =="create") ? "" : $data['dataModel']->{'description:en'} }}</textarea>
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
                                                            <input type="text" class="form-control" placeholder="Second row, first input">
                                                        </div>
                                                    </div>
                    
                                                    <div class="col-md-6">
                                                        <label class="col-form-label col-lg-2">Code</label>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Second row, second input">
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Address</label>
                                    <div class="col-lg-10">
                                        <textarea rows="3" cols="3" class="form-control" name="en[description]" placeholder="Description">{{ ($data['typeForm'] =="create") ? "" : $data['dataModel']->{'description:en'} }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Region</label>
                                    <div class="col-lg-10">
                                        <input type="text" required class="form-control" value="{{ ($data['typeForm'] =="create") ? "" : $data['dataModel']->{'title:en'} }}" placeholder="Title Slide" name="en[title]">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Certificate</label>
                                    <div class="col-lg-10">
                                        <select class="form-control select-search" name="category_id" data-fouc>
                                                {{-- @foreach ($data['category'] as $item)
                                                    @if($data['typeForm'] != "create")
                                                        <option {{($data['dataModel']->category_id == $item->id) ? "selected" : ""}} value="{{$item->id}}">{{$item->title}}</option>
                                                    @else
                                                    <option value="{{$item->id}}">{{$item->title}}</option>
                                                    @endif
                                                @endforeach --}}
                                        </select>
                                        {{-- <textarea rows="3" cols="3" class="form-control" name="en[description]" placeholder="Description">{{ ($data['typeForm'] =="create") ? "" : $data['dataModel']->{'description:en'} }}</textarea> --}}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Dimension</label>
                                    <div class="col-lg-10">
                                        <input type="text" required class="form-control" value="{{ ($data['typeForm'] =="create") ? "" : $data['dataModel']->{'title:en'} }}" placeholder="Title Slide" name="en[title]">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Land Area</label>
                                    <div class="col-lg-10">
                                        <input type="text" required class="form-control" value="{{ ($data['typeForm'] =="create") ? "" : $data['dataModel']->{'title:en'} }}" placeholder="Title Slide" name="en[title]">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Building Area</label>
                                    <div class="col-lg-10">
                                        <input type="text" required class="form-control" value="{{ ($data['typeForm'] =="create") ? "" : $data['dataModel']->{'title:en'} }}" placeholder="Title Slide" name="en[title]">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Floor</label>
                                    <div class="col-lg-10">
                                        <input type="text" required class="form-control" value="{{ ($data['typeForm'] =="create") ? "" : $data['dataModel']->{'title:en'} }}" placeholder="Title Slide" name="en[title]">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Electricity</label>
                                    <div class="col-lg-10">
                                        <input type="text" required class="form-control" value="{{ ($data['typeForm'] =="create") ? "" : $data['dataModel']->{'title:en'} }}" placeholder="Title Slide" name="en[title]">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Bedroom</label>
                                    <div class="col-lg-10">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="col-form-label col-lg-2">Main</label>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Second row, first input">
                                                    </div>
                                                </div>
                
                                                <div class="col-md-6">
                                                    <label class="col-form-label col-lg-2">Extra</label>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Second row, second input">
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
                                                        <input type="text" class="form-control" placeholder="Second row, first input">
                                                    </div>
                                                </div>
                
                                                <div class="col-md-6">
                                                    <label class="col-form-label col-lg-2">Extra</label>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Second row, second input">
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Floor</label>
                                    <div class="col-lg-10">
                                        <input type="text" required class="form-control" value="{{ ($data['typeForm'] =="create") ? "" : $data['dataModel']->{'title:en'} }}" placeholder="Title Slide" name="en[title]">
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
                                        <input type="file" class="file-input" name="image">
                                        <span class="form-text text-muted">Recomendation for size is <code>1900x920</code>.</span>
                                    </div>
                                </div>
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