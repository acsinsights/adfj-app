@extends('admin.includes.app')
@section('title', 'Music Portfolio')
@section('content')
    <!--Page header-->
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0 text-primary">Music Portfolio</h4>
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
                                    <th>Title</th>
                                    <th>Post Type</th>
                                    <th>Date</th>
                                    <th>Location</th>
                                    <th>Edit</th>
                                    {{-- <th>Delete</th> --}}
                                </tr>
                            </thead>


                            <tbody>

                                @foreach ($posts as $post)
                                    @if ($post->serviceid == 1)
                                        <tr style="vertical-align: middle;">
                                            <td><img src="/posts/{{ $post->media }}" class="img-responsive"
                                                    style="max-height:100px; max-width:100px" alt="" srcset="">
                                            </td>
                                            <td>{{ $post->title }}</td>
                                            <td>{{ $post->stypes->slug }}</td>
                                            <td>{{ $post->date }}</td>
                                            <td>{{ $post->location }}</td>
                                            <td><a href="/admin/edit/{{ $post->id }}"
                                                    class="btn btn-outline-primary">Edit</a>
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
@endsection
