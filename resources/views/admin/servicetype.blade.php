@extends('admin.includes.app')
@section('title', 'Dashboard')
@section('content')


    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Add Sub-Service</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active">Add Sub-Service
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-md-5 alert-message">
                        @include('admin.message')
                    </div> --}}
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="card-options">
                        <form style="margin-right: 67px;" action="/admin/add-service-type" name="categoryForm" id="categoryForm" method="post"
                        enctype="multipart/form-data">
                            @csrf


                    </div>


                </div>
            </div>
            <div class="content-body">
                <!-- Basic Tables start -->
                <div class="row" id="basic-table">
                    <div class="col-12">
                        <div class="card">
                            <select style="width: 93%" name="service" id="service" value="" class="form-control m-1" required>
                                <option value=""><- Select Main Service -></option>
                                @foreach ($pservices as $item)
                                    <option value="{{ $item->id }}">
                                        {{ $item->service_name }}
                                    </option>
                                @endforeach
                            </select>
                            <input style="width: 93%" type="text" name="type" id="name" class="form-control m-1"
                            placeholder="Enter New Sub-Service" required>

                            <button style="    width: 100px;
                            " type="submit" class="btn btn-primary mr-1">Submit</button>
                            {{-- <select name="typeid" id="typeid" value="" class="form-control">
                                <option class="form-control">All Service Types</option>
                                @foreach ($pservices as $ps)
                                    <option value="{{ $ps->id }}">{{ $ps->service_name }}</option>
                                @endforeach
                            </select> --}}
                            {{-- <div class="card-header">
                                <h4 class="card-title">Table Basic</h4>
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                    Using the most basic table Leanne Grahamup, here’s how <code>.table</code>-based tables look in Bootstrap. You
                                    can use any example of below table for your table and it can be use with any type of bootstrap tables.
                                </p>
                            </div> --}}
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Main Service</th>
                                            <th>Sub Service</th>
                                            {{-- <th>Edit</th> --}}
                                            <th>Delete</th>
                                        </tr>
                                    </thead>

                                    <tbody>


                                        @foreach ($stypes as $type)
                                            <tr style="vertical-align: center;">
                                                <td>{{ $type->stype_name }}</td>
                                                <td>{{ $type->pservices->service_name }}</td>
                                                {{-- <td>
                                                    <a href="/admin/typeedit/{{ $type->id }}"
                                                        class="btn btn-sm btn-outline-primary">
                                                        Edit
                                                    </a>
                                                </td> --}}
                                                <td>
                                                    <a href="/admin/delete-service/{{ $type->id }}"
                                                        class="btn btn-flat-danger border">
                                                        Delete
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
    <!-- END: Content-->

@endsection
