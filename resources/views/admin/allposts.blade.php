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
                            <h2 class="content-header-title float-left mb-0">All Posts</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active">All Posts
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

                            <a href="{{ route('admin.addposts') }}" class="btn btn-sm btn-primary">Add Post</a>
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
                                            <th>#No</th>
                                            <th>Media</th>
                                            <th>Title</th>
                                            <th>Service</th>
                                            <th>Sub-Service</th>
                                            <th>Date</th>
                                            <th>Location</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                            <th>Featured Post </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($posts->isNotEmpty())
                                            @foreach ($posts as $key=> $post)
                                                <tr style="vertical-align: middle;">
                                                    <th scope="row">
                                                        {{ $key+1 }}</th>
                                                    <td><img src="/posts/{{ $post->media }}" class="img-responsive"
                                                            style="max-height:100px; max-width:100px" alt="" srcset="">
                                                    </td>
                                                    <td>{{ $post->title }}</td>
                                                    <td>{{ $post->pservices->service_name }}</td>
                                                    <td>{{ $post->stypes->stype_name }}</td>
                                                    <td>{{ $post->date }}</td>
                                                    <td>{{ $post->location }}</td>
                                                    <td><a href="/admin/edit/{{ $post->id }}"
                                                            class="btn btn-outline-primary">Edit</a>
                                                    </td>
                                                    <td>

                                                        <a class="btn btn-outline-danger" onclick="return confirm('Are you sure?');"
                                                            href="/admin/delete/{{ $post->id }}">Delete</a>

                                                    </td>
                                                    {{-- @if ($post->featured_post == 1)
                                                        <td class="text-center vertical-center">
                                                            @if ($post->fstatus == 1)
                                                                <p class="text-success">Added</p>
                                                            @else
                                                                <p class="text-danger">Removed</p>
                                                            @endif
                                                            <form action="/admin/fstatus/{{ $post->id }}" method="POST">
                                                                @csrf
                                                                @method('put')
                                                                <select name="fstatus" id="status" class="form-control">
                                                                    <option value="1">Add</option>
                                                                    <option value="0">Remove</option>
                                                                </select>
                                                                <button class="btn btn-sm btn-outline-secondary mt-2"
                                                                    type="submit">Submit</button>
                                                            </form>
                                                        </td>
                                                    @endif --}}
                                                    <td>


                                                        {{-- <div class="custom-control custom-switch custom-switch-primary">
                                                            <form action="/admin/status/{{ $post->id }}"
                                                                method="post">
                                                            <input type="checkbox" class="custom-control-input" value="{{ $post->id }}" id="customSwitch10" checked="">
                                                            <label class="custom-control-label" for="customSwitch10">


                                                                    <input type="hidden" value="{{ $post->id }}"
                                                                        id="id">
                                                                    <label class="switch">
                                                                        <input type="checkbox" class="custom-control-input"
                                                                            {{ $post->featured_post == 1 ? 'checked' : '' }}>
                                                                        <span class="slider round"></span>
                                                                    </label>
                                                                </form>



                                                                <span class="switch-icon-left"><i data-feather="check"></i></span>

                                                                <span class="switch-icon-right"><i data-feather="x"></i></span>
                                                            </label>
                                                        </div> --}}



                                                        <div class="toggle-button-cover" id="margin-zero">
                                                            <div class="button-cover" id="button-cover">
                                                                <div class="button r" id="button-3">
                                                                    <form action="/admin/status/{{ $post->id }}"
                                                                        method="post">
                                                                        <input type="hidden" value="{{ $post->id }}"
                                                                            id="id">
                                                                        <label class="switch">
                                                                            <input type="checkbox"
                                                                                {{ $post->featured_post == 1 ? 'checked' : '' }}>
                                                                            <span class="slider round"></span>
                                                                        </label>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        {{-- <div class="toggle-button-cover" id="margin-zero">
                                                            <div class="button-cover" id="button-cover">
                                                                <div class="button r" id="button-3">
                                                                    <form action="/admin/status/{{ $post->id }}"
                                                                        method="post">
                                                                        <input type="hidden" value="{{ $post->id }}"
                                                                            id="id">
                                                                        <label class="switch">
                                                                            <input type="checkbox"
                                                                                {{ $post->featured_post == 1 ? 'checked' : '' }}>
                                                                            <span class="slider round"></span>
                                                                        </label>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div> --}}
                                                        {{-- <label class="m-2">Play Button</label> --}}

                                                        {{-- <div class="toggle-button-cover" id="margin-zero">
                                                            <div class="button-cover" id="button-cover">
                                                                <div class="button r" id="button-3">
                                                                    <label class="switch">
                                                                        <input type="checkbox" name="featured" id="featured" value="1">
                                                                        <span class="slider round"></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div> --}}
                                                    </td>
                                                    </form>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="10" class="text-center">No records found!</td>
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
