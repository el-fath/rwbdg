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
                <h5 class="card-title">Master {{$data['title']}}</h5>
                
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="collapse"></a>
                        {{-- <a class="list-icons-item" data-action="remove"></a> --}}
                    </div>
                </div>
            </div>
            <div class="card-body">
                <a href="{{ url('admin/news-category/create') }}"><button type="button" class="btn bg-teal-400 btn-labeled btn-labeled-left"><b><i class="icon-plus-circle2"></i></b> Add {{$data['title']}}</button></a>
            </div>
            <table class="table datatable-basic-3-column" id="tableData">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Desc</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp
                    @foreach ($data['data'] as $val)

                    
                    <tr>
                        <td>{{$no}}</td>
                        <td>{{ $val->{'title:id'} }}</td>
                        <td>{{  $val->{'description:id'} }}</td>
                        <td class="text-center">
                            <div class="list-icons">
                                <div class="dropdown">
                                    <a href="#" class="list-icons-item" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="{{ route('admin.news-category.show', $val->id) }}" class="dropdown-item">
                                            <i class="icon-pencil7"></i> Edit
                                        </a>
                                        <a href="{{ route('admin.news-category.destroy', $val->id) }}" data-id="{{ $val->id }}" class="dropdown-item btnDelete">
                                            <i class="icon-trash"></i> Delete
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @php $no++; @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /basic datatable -->
        </div>
    </div>
</div>
<script>
$(document).ready( function () {
    $('#table').DataTable();
    $('.datatable-basic-3-column').DataTable({
        pageLength: 10,
        paging: true,
        searching: true,
        order: [[0, "asc"]],
        columnDefs: [{
            targets: [ 3 ]
            }]
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
                        redirect('{{route('admin.news-category.index')}}');
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