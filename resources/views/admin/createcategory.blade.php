@extends('admin.includes.app')

@section('content')
    <div class="container" style="padding-top:20px;">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Add New Category</h2>
                    </div>
                    <div class="card-body">
                        <form action="/post" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="text" name="title" class="form-control m-2" placeholder="Category Name">

                            <button type="submit" class="btn btn-success mt-3">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
