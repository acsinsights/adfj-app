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







    <div class="container" style="padding-top:20px;">
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-body">
                        <a href="{{ route('admin.graphics') }}" class="btn btn-success btn-sm" title="Add New Post">Add New Category</a>
                        <br/><br/>
                        <div class="table-responsive">
                        <h2>Graphics Category</h2>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>link</th>
                                    <th>Type</th>
                                    <th>Cover</th>
                                    <th>Update</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($graphicscats as $ms)
                                    <tr>
                                        <th style="vertical-align: middle;" scope="row">{{ $ms->id }}</th>

                                        <td>{{ $ms->link }}</td>
                                        <td>{{ $ms->type }}</td>

                                        <td><img src="/categories-img/video/{{ $ms->graphicscover }}"
                                                class="img-responsive" style="max-height:100px; max-width:100px"
                                                alt="" srcset=""></td>
                                        <td><a href="/editcat/{{ $ms->id }}"
                                                class="btn btn-outline-primary">Edit</a></td>
                                        <td>
                                            <form action="/deletecover/{{ $ms->id }}" method="post">
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










@endsection

@section('customJs')
@endsection
