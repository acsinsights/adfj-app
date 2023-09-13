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
                                      <th>Customer Logo</th>
                                      {{-- <th>Logo</th> --}}
                                      <th>Customer Name</th>
                                      {{-- <th>Date</th> --}}
                                      <th>Edit</th>
                                      <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($clientleles as $client)
                                            <tr style="vertical-align: middle;">
                                                       {{--  <th scope="row">
                                            {{ $tsti->id }}</th> --}}
                                                <td><img src="/clientleleimg/{{ $client->clientimg }}" class="img-responsive"
                                                        style="max-height:120px; max-width:120px" alt="" srcset="">
                                                    </td>
                                                    {{-- <td><img src="/testilogos/{{ $tsti->custlogo }}" class="img-responsive"
                                                        style="max-height:80px; max-width:50px" alt="" srcset=""></td> --}}
                                                       <td>{{ $client->clientname }}</td>



                                                {{-- <td>{{ $client->date }}</td> --}}

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



            </div>
        </div>
    </div>
    <!-- END: Content-->

@endsection
