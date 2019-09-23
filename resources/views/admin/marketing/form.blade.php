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
                        <form id="formInput" action="{{ ($data['typeForm'] =="create") ? route('admin.marketing.store') : route('admin.marketing.update',$data['dataModel']->id) }}" method="POST" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Name</label>
                                    <div class="col-lg-10">
                                        <input type="text" required class="form-control" value="{{ ($data['typeForm'] =="create") ? "" : $data['dataModel']->name }}" placeholder="Name" name="name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Level</label>
                                    <div class="col-lg-10">
                                        <select class="form-control select-search" name="level_id" data-fouc>
                                                @foreach ($data['level'] as $item)
                                                    @if($data['typeForm'] != "create")
                                                        <option {{($data['dataModel']->level_id == $item->id) ? "selected" : ""}} value="{{$item->id}}">{{$item->title}}</option>
                                                    @else
                                                    <option value="{{$item->id}}">{{$item->title}}</option>
                                                    @endif
                                                @endforeach
                                        </select>
                                        {{-- <textarea rows="3" cols="3" class="form-control" name="en[description]" placeholder="Description">{{ ($data['typeForm'] =="create") ? "" : $data['dataModel']->{'description:en'} }}</textarea> --}}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Phone</label>
                                    <div class="col-lg-10">
                                        <input type="text" required class="form-control" value="{{ ($data['typeForm'] =="create") ? "" : $data['dataModel']->phone }}" placeholder="Phone" name="phone">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Email</label>
                                    <div class="col-lg-10">
                                        <input type="email" required class="form-control" value="{{ ($data['typeForm'] =="create") ? "" : $data['dataModel']->email }}" placeholder="Name" name="email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Address</label>
                                    <div class="col-lg-10">
                                        <input type="text" required class="form-control" value="{{ ($data['typeForm'] =="create") ? "" : $data['dataModel']->address }}" placeholder="Address" name="address">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Facebook</label>
                                    <div class="col-lg-10">
                                        <input type="text" required class="form-control" value="{{ ($data['typeForm'] =="create") ? "" : $data['dataModel']->facebook }}" placeholder="Facebook" name="facebook">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Instagram</label>
                                    <div class="col-lg-10">
                                        <input type="text" required class="form-control" value="{{ ($data['typeForm'] =="create") ? "" : $data['dataModel']->instagram }}" placeholder="Instagram" name="instagram">
                                    </div>
                                </div>
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
                                <div class="card-body">
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item"><a href="#formid" class="nav-link rounded-top active" data-toggle="tab">id</a></li>
                                        <li class="nav-item"><a href="#formen" class="nav-link rounded-top" data-toggle="tab">en</a></li>
                                    </ul>
        
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="formid">
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-2">Description</label>
                                                    <div class="col-lg-10">
                                                        <textarea id="editorId" rows="3" cols="3" class="form-control" name="id[description]" placeholder="Description">{{ ($data['typeForm'] =="create") ? "" : $data['dataModel']->{'description:id'} }}</textarea>
                                                    </div>
                                                </div>
                                        </div>
        
                                        <div class="tab-pane fade" id="formen">
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-2">Description</label>
                                                    <div class="col-lg-10">
                                                        <textarea id="editorEn" rows="3" cols="3" class="form-control" name="en[description]" placeholder="Description">{{ ($data['typeForm'] =="create") ? "" : $data['dataModel']->{'description:en'} }}</textarea>
                                                    </div>
                                                </div>
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
                        redirect('{{route('admin.marketing.index')}}');
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