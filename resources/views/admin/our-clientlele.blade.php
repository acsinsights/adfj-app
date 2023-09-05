@extends('admin.includes.app')
@section('title', 'All Clientlele')
@section('content')
    <!--Page header-->
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0 text-primary">All Clientlele</h4>
        </div>
        <div style="margin-right: 57px;" class="card-options">
            <a href="{{ route('admin.add-clientlele') }}" class="btn btn-sm btn-primary">Add Clientlele</a>
        </div>
        <div class="col-md-5 alert-message">
            @include('admin.message')
        </div>
    </div>
    <!--End Page header-->

    <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">

            <div class="card">

                <div class="card-header">
                    {{-- <h3 class="card-title">
                        All Posts
                    </h3> --}}
                    {{-- <form action="" method="get" class="ms-5">
                        <div class="card-tools d-flex">
                            <div class="card-title mt-1 p-1">
                                <a href="{{ route('admin.allposts') }}" class="btn btn-sm btn-outline-primary">X</a>
                            </div>
                            <div class="input-group input-group" style="width: 100%; height:15px">
                                <input type="text" name="keyword" class="form-control float-right" placeholder="Search"
                                    value="{{ Request::get('keyword') }}">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="card-options">
                        <a href="{{ route('admin.addposts') }}" class="btn btn-sm btn-primary">Update</a>
                    </div> --}}

                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover card-table table-vcenter text-nowrap">
                            <thead>
                                <tr>
                                    {{-- <th>SR. No</th> --}}
                                    <th>Customer Image</th>
                                    {{-- <th>Logo</th> --}}
                                    <th>Client Name</th>
                                    {{-- <th>Date</th> --}}
                                    {{-- <th>Edit</th> --}}
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
{{--
                                        <td><a href="/admin/editclientlele/{{ $client->id }}"
                                                class="btn btn-outline-primary">Edit</a>
                                        </td> --}}
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
@endsection
