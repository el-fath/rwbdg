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
                    <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
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
                                <form action="#">
                                    <fieldset class="mb-3">
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-2">Website Name</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" placeholder="Website Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-2">Website Description</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" placeholder="Website Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-2">Logo</label>
                                            <div class="col-lg-10">
                                                <input type="file" class="file-input" data-fouc>
                                                <span class="form-text text-muted">Automatically convert a file input to a bootstrap file input widget by setting its class as <code>file-input</code>.</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-2">Favicon</label>
                                            <div class="col-lg-10">
                                                <input type="file" class="file-input" data-fouc>
                                                <span class="form-text text-muted">Automatically convert a file input to a bootstrap file input widget by setting its class as <code>file-input</code>.</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-2">Meta Description</label>
                                            <div class="col-lg-10">
                                                <textarea rows="3" cols="3" class="form-control" placeholder="Default textarea"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-2">Meta Keyword</label>
                                            <div class="col-lg-10">
                                                <textarea rows="3" cols="3" class="form-control" placeholder="Default textarea"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-2">Head Script</label>
                                            <div class="col-lg-10">
                                                <textarea rows="3" cols="3" class="form-control" placeholder="Default textarea"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-2">Body Script</label>
                                            <div class="col-lg-10">
                                                <textarea rows="3" cols="3" class="form-control" placeholder="Default textarea"></textarea>
                                            </div>
                                        </div>
                                </form>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
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

</div>
@endsection