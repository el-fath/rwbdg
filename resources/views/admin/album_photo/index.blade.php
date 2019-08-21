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

        @if (session('alert'))
        <!-- alert -->
        <div class="alert alert-success alert-styled-left alert-arrow-left alert-dismissible">
            <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
            <span class="font-weight-semibold">Well done! </span>{{ session('alert') }}
        </div>
        <!-- alert -->
        @endif
    

        <div class="content">

            <!-- Basic datatable -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">{{$data['title']}}</h5>
                
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="collapse"></a>
                        {{-- <a class="list-icons-item" data-action="remove"></a> --}}
                    </div>
                </div>
            </div>
            <div class="card-body">
                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label font-weight-semibold">List:</label>
                        <div class="col-lg-10">
                            <input type="file" class="file-input-cakcode" multiple data-show-remove="true" data-fouc>
                            <span class="form-text text-muted"></span>
                        </div>
                    </div>
            </div>
        </div>
        <!-- /basic datatable -->
        </div>
    </div>
</div>
<script>
$(document).ready( function () {
    $('#table').DataTable();

    function get_files(){
        $.ajax({
                url: '{{ route('admin.album-photo.get_photo', $data['parent']->id) }}',
                async: false,
                dataType: 'json',
                success: function(data) {
                    var preview = [];

                    $.each(data, function(key, val) {
                        preview.push(val);
                    });
                    console.log("preview",preview);
                    return preview;
                }
        });
    }

    var initPrev = [];
    var initPrevConfig = [];
    @foreach($data['data'] as $row)
        initPrev.push('{{$row->ImagePath}}');
        initPrevConfig.push({caption: '{{$row->image}}', size: 1000, key: {{$row->id}}, url: '{{ route('admin.album-photo.delete_photo', $row->id) }}', showDrag: false});
    @endforeach
    console.log(initPrev);
    console.log(initPrevConfig);

    var modalTemplate = '<div class="modal-dialog modal-lg" role="document">\n' +
            '  <div class="modal-content">\n' +
            '    <div class="modal-header align-items-center">\n' +
            '      <h6 class="modal-title">{heading} <small><span class="kv-zoom-title"></span></small></h6>\n' +
            '      <div class="kv-zoom-actions btn-group">{toggleheader}{fullscreen}{borderless}{close}</div>\n' +
            '    </div>\n' +
            '    <div class="modal-body">\n' +
            '      <div class="floating-buttons btn-group"></div>\n' +
            '      <div class="kv-zoom-body file-zoom-content"></div>\n' + '{prev} {next}\n' +
            '    </div>\n' +
            '  </div>\n' +
            '</div>\n';

        // Buttons inside zoom modal
        var previewZoomButtonClasses = {
            toggleheader: 'btn btn-light btn-icon btn-header-toggle btn-sm',
            fullscreen: 'btn btn-light btn-icon btn-sm',
            borderless: 'btn btn-light btn-icon btn-sm',
            close: 'btn btn-light btn-icon btn-sm'
        };

        // Icons inside zoom modal classes
        var previewZoomButtonIcons = {
            prev: '<i class="icon-arrow-left32"></i>',
            next: '<i class="icon-arrow-right32"></i>',
            toggleheader: '<i class="icon-menu-open"></i>',
            fullscreen: '<i class="icon-screen-full"></i>',
            borderless: '<i class="icon-alignment-unalign"></i>',
            close: '<i class="icon-cross2 font-size-base"></i>'
        };

        // File actions
        var fileActionSettings = {
            uploadClass : '',
            uploadIcon: '<i class="icon-upload"></i>',
            zoomClass: '',
            zoomIcon: '<i class="icon-zoomin3"></i>',
            dragClass: 'p-2',
            dragIcon: '<i class="icon-three-bars"></i>',
            removeClass: '',
            removeErrorClass: 'text-danger',
            removeIcon: '<i class="icon-bin"></i>',
            indicatorNew: '<i class="icon-file-plus text-success"></i>',
            indicatorSuccess: '<i class="icon-checkmark3 file-icon-large text-success"></i>',
            indicatorError: '<i class="icon-cross2 text-danger"></i>',
            indicatorLoading: '<i class="icon-spinner2 spinner text-muted"></i>'
        };

    $(".file-input-cakcode").fileinput({
        browseLabel: 'Browse',
        uploadUrl: '{{ route('admin.album-photo.add_photo', $data['parent']->id) }}',
        deleteUrl: '{{ route('admin.album-photo.delete_photo', $data['parent']->id) }}',
        showUpload: true,
        deleteExtraData: {'_token':$('meta[name="csrf-token"]').attr('content')},
        uploadExtraData:{'_token':$('meta[name="csrf-token"]').attr('content')},
        browseIcon: '<i class="icon-file-plus mr-2"></i>',
        uploadIcon: '<i class="icon-file-upload2 mr-2"></i>',
        removeIcon: '<i class="icon-cross2 font-size-base mr-2"></i>',
        layoutTemplates: {
            icon: '<i class="icon-file-check"></i>',
            modal: modalTemplate
        },
        initialPreview: initPrev,
        initialPreviewConfig: initPrevConfig,
        initialPreviewAsData: true,
        overwriteInitial: false,
        maxFileSize: 1000,
        previewZoomButtonClasses: previewZoomButtonClasses,
        previewZoomButtonIcons: previewZoomButtonIcons,
        fileActionSettings: fileActionSettings
    }).on('fileuploaded', function(e, params) {
        console.log('file uploaded', e, params);
        showNotif("success","Success","Upload success");
    }).on('filebeforedelete', function() {
        
    }).on('filedeleted', function() {
        showNotif("success","Success",'File deletion was successful! ' + krajeeGetCount('file-5'));
    });


});

$(".btnDelete").click(function(e){
    e.preventDefault();
    var objBtn = $(this);
    swal({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'No, cancel!',
        confirmButtonClass: 'btn btn-success',
        cancelButtonClass: 'btn btn-danger',
        buttonsStyling: false
    }).then(function(result) {
        if(result.value) {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "POST",
                url: objBtn.attr("href"),
                data: {
                    id:objBtn.attr("data-id"),
                    _method: 'DELETE'
                },
                beforeSend: function(){
                    blockMessage($('#tableData'),'Please Wait , {{ "Processing to delete data" }}','#fff');
                }
                }).done(function(data){
                    $('#tableData').unblock();
                    if(data.Code == 200){
                        showNotif("success","Success",data.Message);
                    }else{
                        showNotif("error","Error",data.Message);
                    }
                    setTimeout(function(){ 
                        redirect('{{route('admin.property-category.index')}}');
                    }, 1500);
                })
                .fail(function(e) {
                    $('#tableData').unblock();
                    showNotif("error","Error",e.responseText);
                });
        }
        else if(result.dismiss === swal.DismissReason.cancel) {
            showNotif("default","Message","Delete Canceled");
        }
    });
});
</script>
@endsection