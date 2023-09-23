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
                            <h2 class="content-header-title float-left mb-0">All Offer</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active">All Offer
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

                            <a href="{{ route('admin.add-offer') }}" class="btn btn-primary mr-1">Add Offer</a>
                    </div>


                </div>
            </div>
            <div class="content-body">
                <!-- Basic Tables start -->
                <div class="row" id="basic-table">
                    <div class="col-12">
                        <div class="card">
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
                                         {{-- <th>SR. No</th> --}}
                                         <th>Offer Image</th>
                                         {{-- <th>Logo</th> --}}
                                         <th>Offer Name</th>
                                         <th>Offer Link</th>
                                         {{-- <th>Date</th> --}}
                                         <th style="text-align: center;">Edit</th>
                                         <th style="text-align: center;">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($offers as $offer)
                                            <tr style="vertical-align: middle;height: 100px;!important">
                                                       {{--  <th scope="row">
                                            {{ $tsti->id }}</th> --}}
                                                <td><img src="/offerimg/{{ $offer->offerimage }}" class="img-responsive"
                                                        style="max-height:100px; max-width:100px" alt="" srcset="">
                                                    </td>
                                                    {{-- <td><img src="/testilogos/{{ $tsti->custlogo }}" class="img-responsive"
                                                        style="max-height:80px; max-width:50px" alt="" srcset=""></td> --}}
                                                       <td>{{ $offer->offername }}</td>
                                                       <td>{{ $offer->offerlink }}</td>



                                                {{-- <td>{{ $client->date }}</td> --}}

                                                <td style="text-align: center;"><a href="/admin/editoffer/{{ $offer->id }}"
                                                        class="btn btn-flat-primary border">Edit</a>
                                                </td>
                                                <td style="text-align: center;">
                                                    <form action="/admin/deleteoffer/{{ $offer->id }}" method="post">
                                                        <button class="btn btn-flat-danger border"
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



            </div>
        </div>
    </div>
    <!-- END: Content-->

@endsection
