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
                            <h2 class="content-header-title float-left mb-0">Music Portfolio</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active">Music Portfolio
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

                                            <th>Media Preview</th>
                                    <th>Title</th>
                                    {{-- <th>Post Type</th> --}}
                                    <th>Sub-Service</th>
                                    <th>Date</th>
                                    <th>Location</th>
                                    <th  style="text-align: center;">Edit</th>
                                    <th  style="text-align: center;">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($posts as $post)


                                            @if ($post ->serviceid == 1)

                                                <tr style="vertical-align: middle;">
                                                    <td><img src="/posts/{{ $post->media }}" class="img-responsive"
                                                            style="max-height:100px; max-width:100px" alt="" srcset="">
                                                    </td>
                                                    <td>{{ $post->title }}</td>
                                                    <td>{{ $post->stypes->stype_name }}</td>
                                                    {{-- <td>{{ $post->stypes->slug }}</td> --}}
                                                    <td>{{ $post->date }}</td>
                                                    <td>{{ $post->location }}</td>
                                                    <td  style="text-align: center;"><a href="/admin/edit/{{ $post->id }}"
                                                            class="btn btn-flat-primary border">Edit</a>
                                                    </td>
                                                    <td  style="text-align: center;">
                                                        <a class="btn btn-flat-danger border" onclick="return confirm('Are you sure?');"
                                                        href="/admin/delete/{{ $post->id }}">Delete</a>
                                                    </td>
                                                    {{-- <td>
                                                        <form action="/admin/delete/{{ $post->id }}" method="post">
                                                            <button class="btn btn-outline-danger"
                                                                onclick="return confirm('Are you sure?');"
                                                                type="submit">Delete</button>
                                                            @csrf
                                                            @method('delete')
                                                        </form>
                                                    </td> --}}
                                                </tr>
                                            @endif
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
