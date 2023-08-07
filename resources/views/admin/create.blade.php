@extends('admin.includes.app')

@section('content')
    <div class="container" style="padding-top:20px;">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Add New Post</h2>
                    </div>
                    <div class="card-body">
                        <form action="/post" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="text" name="title" class="form-control m-2" placeholder="Service Category">
                            <input type="text" name="author" class="form-control m-2" placeholder="Title of post">
                            <input type="text" name="location" class="form-control m-2" placeholder="location">
                            <input type="date" name="date" class="form-control m-2">
                            <input type="url" name="link" class="form-control m-2" placeholder="link">
                            <label class="m-2">Cover Image</label>
                            <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="cover">

                            <div class="video-card">
                                <label for="video" class="m-2">Play Button</label>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" class="checkme m-2" value="1">
                                    </label>
                                </div>
                                <div class="video-box">
                                    <input type="text" name="videolink" id="videolink"
                                        class="form-control m-2 videolink">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success mt-3">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('customJs')
@endsection
