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
                <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Home</span> - Dashboard
                </h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{route('admin.dashboard')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                    <span class="breadcrumb-item active">Dashboard</span>
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
            <div class="col-xl-8">
                <!-- Quick stats boxes -->
                <div class="row">
                    <div class="col-lg-4">

                        <!-- Members online -->
                        <div class="card bg-teal-400">
                            <div class="card-body">
                                <div class="d-flex">
                                    <h1 class="font-weight-semibold mb-0">{{$data['countMarketing']}}</h1>
                                </div>

                                <div>
                                    <h4>Marketing Executive</h4>
                                </div>
                            </div>
                        </div>
                        <!-- /members online -->

                    </div>

                    <div class="col-lg-4">

                        <!-- Current server load -->
                        <div class="card bg-pink-400">
                            <div class="card-body">
                                <div class="d-flex">
                                    <h1 class="font-weight-semibold mb-0">{{$data['countSecondaryProperty']}}</h1>
                                   
                                </div>

                                <div>
                                    <h4>Secondary Property</h4>
                                </div>
                            </div>
                        </div>
                        <!-- /current server load -->

                    </div>

                    <div class="col-lg-4">

                        <!-- Today's revenue -->
                        <div class="card bg-blue-400">
                            <div class="card-body">
                                <div class="d-flex">
                                    <h1 class="font-weight-semibold mb-0">{{$data['countPrimaryProperty']}}</h1>
                                </div>

                                <div>
                                    <h4>Primary Property</h4>
                                </div>
                            </div>
                        </div>
                        <!-- /today's revenue -->

                    </div>
                </div>
                <!-- /quick stats boxes -->
            </div>

            <div class="col-xl-4">
                <!-- My messages -->
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h6 class="card-title">Messages</h6>
                        <div class="header-elements">
                            {{-- <span><i class="icon-history text-warning mr-2"></i> Jul 7, 10:30</span>
                            <span class="badge bg-success align-self-start ml-3">Online</span> --}}
                        </div>
                    </div>
                    


                    <!-- Tabs content -->
                    <div class="tab-content card-body">
                        <div class="tab-pane active fade show" id="messages-tue">
                            <ul class="media-list">
                                @foreach ($data['messages'] as $item)
                                <li class="media">
                                    <div class="media-body">
                                        <div class="d-flex justify-content-between">
                                        <a href="{{ route('admin.contact-message.show', $item->id) }}">{{$item->name}} - {{$item->email}}</a>
                                            <span class="font-size-sm text-muted">{{$item->created_at}}</span>
                                        </div>
                                        
                                        The constitutionally inventoried precariously...
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    <!-- /tabs content -->
                    </div>

                    <!-- Tabs -->
                    <ul
                        class="nav nav-tabs nav-tabs-solid nav-justified bg-indigo-400 border-x-0 border-bottom-0 border-top-indigo-300 mb-0">
                        <li class="nav-item">
                            <a href="{{ route('admin.contact-message.index') }}" class="nav-link font-size-sm text-uppercase active"
                                data-toggle="tab">
                                More
                            </a>
                        </li>
                    </ul>
                    <!-- /tabs -->
                </div>     
            </div>
        </div>
        <!-- /dashboard content -->

    </div>
    <!-- /content area -->

</div>
@endsection
