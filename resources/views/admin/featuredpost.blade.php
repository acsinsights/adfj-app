@extends('admin.includes.app')
@section('title', 'All Featured Posts')
@section('content')
    <!--Page header-->
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0 text-primary">All Featured Posts</h4>
        </div>
    </div>
    <!--End Page header-->

    <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        All Featured Posts
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
                                    <th>Media</th>
                                    <th>Project Title</th>
                                    <th>Services Category</th>
                                    <th>Sub-Service Category</th>
                                    <th>Date</th>
                                    <th>Location</th>
                                    <th>Status</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($posts as $post)
                                    @if ($post->featured_post == 1)
                                        <tr style="vertical-align: middle;">
                                            <td><img src="/posts/{{ $post->media }}" class="img-responsive"
                                                    style="max-height:100px; max-width:100px" alt="" srcset="">
                                            </td>
                                            <td>{{ $post->title }}</td>
                                            <td>{{ $post->pservices->service_name }}</td>
                                            <td>{{ $post->stypes->slug }}</td>
                                            <td>{{ $post->date }}</td>
                                            <td>{{ $post->location }}</td>
                                            <td class="text-center vertical-center">
                                                @if ($post->fstatus == 1)
                                                    <p class="text-success">Added</p>
                                                @else
                                                    <p class="text-danger">Removed</p>
                                                @endif
                                                <form action="/admin/fstatus/{{ $post->id }}" method="POST">
                                                    @csrf
                                                    @method('put')
                                                    <input type="hidden" name="featured_post"
                                                        value="{{ $post->featured }}">
                                                    <select name="fstatus" id="status" class="form-control">
                                                        <option value="1">Add</option>
                                                        <option value="0">Remove</option>
                                                    </select>
                                                    <button class="btn btn-sm btn-outline-secondary mt-2"
                                                        type="submit">Submit</button>
                                                </form>
                                            </td>
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
@endsection
