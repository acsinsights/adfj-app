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
                        <a href="{{ url('/admin/create') }}" class="btn btn-success btn-sm" title="Add New Post">Add New Category</a>
                        <br/><br/>
                        <div class="table-responsive">
                        <h2>Music Category</h2>
                        <table class="table">
                            <thead>
                                <tr>
                                  <th>ID</th>

                                  <th>Cover</th>
                                  <th>Update</th>
                                  <th>Delete</th>
                                </tr>
                            </thead>

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
