@extends('admin.includes.app')
@section('title', 'Dashboard')
@section('content')




<link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/vendors/css/vendors.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/vendors/css/extensions/dragula.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/css/core/menu/menu-types/vertical-menu.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/css/plugins/extensions/ext-component-drag-drop.css') }}">




<script src="{{ asset('admin-assets/js/scripts/extensions/ext-component-drag-drop.js')}}""></script>
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">All Clientlele</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active">All Clientlele
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
                        <form style="margin-right: 67px;" action="" method="post">
                            @csrf
                            @method('put')
                            <a href="{{ route('admin.add-clientlele') }}" class="btn btn-primary mr-1">Add Clientlele</a>
                    </div>
                </div>
            </div>
      {{-- <div class="content-body">

                <div class="row" id="basic-table">
                    <div class="col-12">
                        <div class="card">

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>

                                      <th>Customer Logo</th>

                                      <th>Customer Name</th>

                                      <th>Edit</th>
                                      <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                        @foreach ($clientleles as $client)

                                            <tr style="vertical-align: middle;">

                                                <td><img src="/clientleleimg/{{ $client->clientimg }}" class="img-responsive"
                                                        style="max-height:120px; max-width:120px" alt="" srcset="">
                                                    </td>

                                                       <td>{{ $client->clientname }}</td>




                                                <td><a href="/admin/editclientlele/{{ $client->id }}"
                                                        class="btn btn-outline-primary">Edit</a>
                                                </td>
                                                <td>
                                                    <form action="/admin/deleteclientlele/{{ $client->id }}" method="post">
                                                        <button class="btn btn-outline-danger"
                                                            onclick="return confirm('Are you sure?');"
                                                            type="submit">Delete</button>
                                                        @csrf
                                                        @method('delete')
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>



            </div> --}}






<section id="sortable-lists">
        <div class="row" id="basic-table">

            <div class="col-sm-12">
                <div class="card">

                    <div style="padding: 0.1px;background: #f7f7f7;" class="card-body">



                        <li style="border-top-left-radius:1rem;
                        border-top-right-radius:1rem;" class="col-lg-12 client-table list-group-item draggable">
                            <div class="col-lg-12 media">
                                <div class="col-lg-3">
                                    <th>Customer Logo</th>
                            </div>
                            <div class="col-lg-3">
                                <th>Customer Name</th>
                            </div>
                            <div class="col-lg-3">

                                <th>Edit</th>
                            </div>

                           <div class="col-lg-3">
                            <th>Delete</th>
                            </div>
                        </div>
                        </li>


                        <ul class="list-group" id="basic-list-group">

                            <tbody>
                            @foreach ($clientleles as $client)





               <li class="col-lg-12 list-group-item draggable">

                                <div style=" align-items: center;" class="col-lg-12 media">

                                    <div style="gap: 10px" class="col-lg-3">
                                        <svg style="left: -22px;fill: #625f6e;right: 0px;" height="20" viewBox="0 0 24 24" width="20" xmlns="http://www.w3.org/2000svg"><path d="m5 8h14a1 1 0 0 0 0-2h-14a1 1 0 0 0 0 2zm16 3h-18a1 1 0 0 0 0 2h18a1 1 0 0 0 0-2zm-2 5h-14a1 1 0 0 0 0 2h14a1 1 0 0 0 0-2z"/></svg>
                                    <img style="max-height: 120px;
                                    max-width: 120px;" src="/clientleleimg/{{ $client->clientimg }}" class=" mr-2" alt="img-placeholder" >
                                </div>
                                <div class="col-lg-3">
                                    <td>{{ $client->clientname }}</td>
                                </div>
                                <div class="col-lg-3">
                                    <td><a href="/admin/editclientlele/{{ $client->id }}"
                                        class="btn btn-outline-primary">Edit</a>
                                    </td>
                                </div>

                               <div class="col-lg-3">
                                    <td>
                                        <form action="/admin/deleteclientlele/{{ $client->id }}" method="post">
                                            <button class="btn btn-outline-danger"
                                                onclick="return confirm('Are you sure?');"
                                                type="submit">Delete</button>
                                            @csrf
                                            @method('delete')
                                        </form>
                                    </td>
                                </div>
                            </div>
                            </li>
                            @endforeach
                        </tbody>
                        </ul>
                    </div>
                </div>
            </div>



        </div>
    </section>




    </div>



    <!-- END: Page JS-->

    <script src="{{ asset('admin-assets/vendors/js/extensions/dragula.min.js')}}"></script>
    <script src="{{ asset('admin-assets/js/scripts/extensions/ext-component-drag-drop.js')}}"></script>
    <script src="{{ asset('admin-assets/js/core/app.js')}}"></script>
    <script src="{{ asset('admin-assets/js/core/app-menu.js')}}"></script>

    <!-- END: Content-->

@endsection
