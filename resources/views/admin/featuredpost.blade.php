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
                            <h2 class="content-header-title float-left mb-0">Featured Posts</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active">Featured Posts
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="card-options">
                        <form style="margin-right: 67px;" action="" method="post">
                            @csrf
                            @method('put')

                            <a href="{{ route('admin.addposts') }}" class="btn btn-primary mr-1">Add Post</a>
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
                                            {{-- <th>#No</th> --}}
                                            <th>Media</th>
                                    <th>Title</th>
                                    <th>Service</th>
                                    <th>Sub-Service</th>
                                    <th>Date</th>
                                    <th>Location</th>
                                    {{-- <th>Status</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($posts->isNotEmpty())
                                            @foreach ($posts as $key=> $post)
                                                @if ($post->featured_post == 1)
                                                    <tr style="vertical-align: middle;">
                                                        {{-- <th scope="row">
                                                            {{ $key+1 }}</th> --}}
                                                        <td><img src="/posts/{{ $post->media }}" class="img-responsive" style="max-height:100px; max-width:100px" alt="" srcset="">
                                                        </td>
                                                        <td>{{ $post->title }}</td>
                                                        <td>{{ $post->pservices->service_name }}</td>
                                                        <td>{{ $post->stypes->slug }}</td>
                                                        <td>{{ $post->date }}</td>
                                                        <td>{{ $post->location }}</td>
                                                        {{-- <td class="text-left vertical-center">
                                                            @if ($post->fstatus == 1)
                                                                <p class="text-success">Added</p>
                                                            @else
                                                                <p class="text-danger">Removed</p>
                                                            @endif
                                                            <form action="" method="POST">
                                                                @csrf
                                                                @method('put')

                                                                <input type="hidden" name="postid" id="postid"
                                                                    value="{{ $post->id }}">
                                                                <input type="hidden" name="featured_post" id="featured_post"
                                                                    value="{{ $post->featured_post }}">
                                                                <select name="fstatus" id="fstatus" class="form-control">
                                                                    <option value="1">Add</option>
                                                                    <option value="0">Remove</option>
                                                                </select>
                                                                <button class="btn btn-sm btn-outline-secondary mt-2" type="submit"
                                                                    id="fsubmit">Submit</button>
                                                            </form>
                                                        </td> --}}
                                                    </tr>
                                                @endif
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="7" class="text-center">No records found!</td>
                                            </tr>
                                        @endif
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
