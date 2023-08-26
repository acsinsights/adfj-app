@extends('admin.includes.app')
@section('title', 'All Posts')
@section('content')
    <!--Page header-->
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0 text-primary">All Posts</h4>
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
                    <h3 class="card-title">
                        All Posts
                    </h3>
                    <div class="card-options">
                        <a href="{{ route('admin.addposts') }}" class="btn btn-sm btn-primary">Add Post</a>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover card-table table-vcenter text-nowrap">
                            <thead>
                                <tr>
                                    <th>#No</th>
                                    <th>Media</th>
                                    <th>Project Title</th>
                                    <th>Service Category</th>
                                    <th>Sub-Service Category</th>
                                    <th>Date</th>
                                    <th>Location</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                    <th class="text-center">Featured Post </th>
                                </tr>
                            </thead>


                            <tbody>
                                @if ($posts->isNotEmpty())
                                    @foreach ($posts as $post)
                                        <tr style="vertical-align: middle;">
                                            <th scope="row">
                                                {{ $post->id }}</th>
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
                                                <form action="/admin/delete/{{ $post->id }}" method="post">
                                                    <button class="btn btn-outline-danger"
                                                        onclick="return confirm('Are you sure?');"
                                                        type="submit">Delete</button>
                                                    @csrf
                                                    @method('delete')
                                                </form>
                                            </td>
                                            {{-- @if ($post->featured_post == 1)
                                                            <td class="text-center vertical-center">
                                                                @if ($post->fstatus == 1)
                                                                    <p class="text-success">Added</p>
                                                                @else
                                                                    <p class="text-danger">Removed</p>
                                                                @endif
                                                                <form action="/admin/fstatus/{{ $post->id }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('put')
                                                                    <select name="fstatus" id="status"
                                                                        class="form-control">
                                                                        <option value="1">Add</option>
                                                                        <option value="0">Remove</option>
                                                                    </select>
                                                                    <button class="btn btn-sm btn-outline-secondary mt-2"
                                                                        type="submit">Submit</button>
                                                                </form>
                                                            </td>
                                                        @endif --}}
                                            <td>
                                                <div class="toggle-button-cover">
                                                    <div class="button-cover">
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
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="10" class="text-center">No records found!</td>
                                    </tr>
                                @endif
                            </tbody>

                        </table>
                        {{ $posts->links() }}
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
