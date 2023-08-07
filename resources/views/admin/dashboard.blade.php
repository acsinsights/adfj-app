@extends('admin.includes.app')

@section('content')
    <div class="mb-sm-4 d-flex flex-wrap align-items-center text-head">
        <h2 class="mb-3 me-auto">Dashboard</h2>
        {{-- <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Dashboard</a></li>
            </ol>
        </div> --}}
    </div>
    <div class="row">
        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <div class="card-data me-2">
                        <h5>Properties for Sale</h5>
                        <h2 class="fs-40 font-w600">684</h2>
                    </div>
                    <div><span class="donut1" data-peity='{ "fill": ["var(--primary)", "rgba(242, 246, 252)"]}'>5/6</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <div class="card-data me-2">
                        <h5>Properties for Rent</h5>
                        <h2 class="fs-40 font-w600">546</h2>
                    </div>
                    <div><span class="donut1"
                            data-peity='{ "fill": ["rgb(56, 226, 93,1)", "rgba(242, 246, 252)"]}'>2/8</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <div class="card-data me-2">
                        <h5>Total Customer</h5>
                        <h2 class="fs-40 font-w600">3,672</h2>
                    </div>
                    <div><span class="donut1"
                            data-peity='{ "fill": ["rgb(255, 135, 35,1)", "rgba(242, 246, 252)"]}'>5/8</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <div class="card-data me-2">
                        <h5>Total City</h5>
                        <h2 class="fs-40 font-w600">75</h2>
                    </div>
                    <div><span class="donut1"
                            data-peity='{ "fill": ["rgb(51, 62, 75,1)", "rgba(242, 246, 252)"]}'>3/8</span>
                    </div>
                </div>
            </div>
        </div>
    </div>






    <div class="container" style="padding-top:20px;">
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-body">
                        <a href="{{ url('/admin/create') }}" class="btn btn-success btn-sm" title="Add New Post">Add New Post</a>
                        <br/><br/>
                        <div class="table-responsive">
                        <h2>Blog Post List</h2>
                        <table class="table">
                            <thead>
                                <tr>
                                  <th>ID</th>
                                  <th>Title</th>
                                  <th>Author</th>
                                  <th>Location</th>
                                  <th>Date</th>
                                  <th>Cover</th>
                                  <th>Update</th>
                                  <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody >
                                @foreach ($posts as $post)
                                  <tr>
                                      <th style="vertical-align: middle;" scope="row">{{ $post->id }}</th>
                                      <td>{{ $post->title }}</td>
                                      <td>{{ $post->author }}</td>
                                      <td>{{ $post->location }}</td>
                                      <td>{{ $post->date }}</td>
                                      <td><img src="/cover/{{ $post->cover }}" class="img-responsive" style="max-height:100px; max-width:100px" alt="" srcset=""></td>
                                      <td><a href="/edit/{{ $post->id }}" class="btn btn-outline-primary">Edit</a></td>
                                      <td>
                                          <form action="/delete/{{ $post->id }}" method="post">
                                            <button class="btn btn-outline-danger" onclick="return confirm('Are you sure?');" type="submit">Delete</button>
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










@endsection

@section('customJs')
@endsection
