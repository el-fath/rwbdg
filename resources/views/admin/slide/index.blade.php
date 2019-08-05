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

        @if (session('alert'))
        <!-- alert -->
        <div class="alert alert-success alert-styled-left alert-arrow-left alert-dismissible">
            <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
            <span class="font-weight-semibold">Well done! </span>{{ session('alert') }}
        </div>
        <!-- alert -->
        @endif
    
        <!-- Basic datatable -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Master {{$data['title']}} / <a href="{{ url('admin/slide/create') }}">Add</a></h5>
                
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="collapse"></a>
                        {{-- <a class="list-icons-item" data-action="remove"></a> --}}
                    </div>
                </div>
            </div>

            <table class="table" id="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Slug</th>
                        <th>Desc</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp
                    @foreach ($data['data'] as $val)
                    <tr>
                        <td>{{$no}}</td>
                        <td>
                            <img src="{{url('public/image/admin/slide')."/".$val->image}}" alt="" style="width:120px;">
                        </td>
                        <td><a href="#">{{$val->title}}</a></td>
                        <td>{{$val->slug}}</td>
                        <td>{{$val->desc}}</td>
                        <td class="text-center">
                            <div class="list-icons">
                                <div class="dropdown">
                                    <a href="#" class="list-icons-item" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="{{ route('admin.slide.show', $val->id) }}" class="dropdown-item">
                                            <i class="icon-file-pdf"></i> Edit
                                        </a>
                                        <form action="{{ route('admin.slide.destroy', $val->id) }}" id="delete{{ $val->id }}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="button" class="dropdown-item" id="{{ $val->id }}" onClick="hapus(this.id)">
                                            <i class="icon-file-excel"></i> Delete
                                        </button>
                                        </form>
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
<script>
$(document).ready( function () {
    $('#table').DataTable();
});
function hapus(id){
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
            swal({
                title: "Okey",
                text: "Data will be deleted",
                type: "success",
            }).then(function(){
                // console.log('asssem');
                document.getElementById("delete"+id).submit();
            });
        }
        else if(result.dismiss === swal.DismissReason.cancel) {
            swal(
                'Cancelled',
                'Your imaginary file is safe :)',
                'error'
            );
        }
    });
}
</script>
@endsection