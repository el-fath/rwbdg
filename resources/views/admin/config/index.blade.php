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
                            <h6 class="card-title">{{$title}}</h6>
                                <div class="header-elements">
                                    <div class="list-icons">
                                        <a class="list-icons-item" data-action="collapse"></a>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <form action="{{ ($typeForm =="create") ? "" : route('admin.config.update',$dataModel->id) }}" id="formInput" enctype="multipart/form-data" action="post">
                                    <fieldset class="mb-3">
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-2">Website Name {{$typeForm}}</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" placeholder="Website Name" name="name" value="{{ ($typeForm =="create") ? : $dataModel->name }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-2">Website Description</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" placeholder="Website Description" name="description" value="{{ ($typeForm =="create") ? : $dataModel->description }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-2">Logo</label>
                                            <div class="col-lg-10">
                                                @if($typeForm != "create")
                                                    <img src="{{$dataModel->LogoPath}}" style="width: 200px;" alt="">
                                                    <br>
                                                    <br>
                                                @endif
                                                <input type="file" class="file-input-noupload" id="inputlogo" data-url="{{$dataModel->LogoPath}}"  data-fouc name="imglogo">
                                                <span class="form-text text-muted">Recomendation size <code>512px x 512px</code>.</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-2">Favicon</label>
                                            <div class="col-lg-10">
                                                @if($typeForm != "create")
                                                    <img src="{{$dataModel->FaviconPath}}" style="width: 200px;" alt="">
                                                    <br>
                                                    <br>
                                                @endif
                                                <input type="file" class="file-input-noupload" data-url="{{$dataModel->FaviconPath}}" data-fouc name="imgfavicon">
                                                <span class="form-text text-muted">Recomendation size <code>512px x 512px</code>.</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-2">Meta Description</label>
                                            <div class="col-lg-10">
                                                <textarea rows="3" cols="3" class="form-control" name="meta_desc" placeholder="Default textarea">{{ ($typeForm =="create") ? : $dataModel->meta_description }}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-2">Meta Keyword</label>
                                            <div class="col-lg-10">
                                                <textarea rows="3" cols="3" class="form-control" name="meta_keyword" placeholder="Default textarea">{{ ($typeForm =="create") ? : $dataModel->meta_keyword }}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-2">Head Script</label>
                                            <div class="col-lg-10">
                                                <textarea rows="3" cols="3" class="form-control" name="head_script" placeholder="Head Script">{{ ($typeForm =="create") ? : $dataModel->head_script }}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-2">Body Script</label>
                                            <div class="col-lg-10">
                                                <textarea rows="3" cols="3" class="form-control" name="body_script" placeholder="Body Script">{{ ($typeForm =="create") ? : $dataModel->body_script }}</textarea>
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
                </div>
                <!-- /basic tabs -->
            </div>
        </div>
        <!-- /dashboard content -->
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

            @if($typeForm != "create")
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