@extends('admin.includes.app')

@section('content')
    <div class="page order-2 flex-grow-1">
        <!--[ Start:: page header link ]-->
        @include('admin.includes.header')
        <!--[ Start:: page body area ]-->
        <main class="page-body">
            <div class="container-fluid">
                <!--[ Start:: My Dashboard ]-->
                <div class="row g-3 row-deck">

                    <div class="col-12">
                        <div class="container" style="padding-top:20px;">

                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h2>Add New Post</h2>
                                        </div>
                                        <div class="card-body">
                                            <form action="/add-post" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <input type="text" name="title" class="form-control m-2"
                                                    placeholder="Service Category">
                                                <input type="text" name="author" class="form-control m-2"
                                                    placeholder="Title of post">
                                                <input type="text" name="location" class="form-control m-2"
                                                    placeholder="location">
                                                <input type="date" name="date" class="form-control m-2">
                                                <input type="url" name="link" class="form-control m-2"
                                                    placeholder="link">
                                                <label class="m-2">Cover Image</label>
                                                <input type="file" id="input-file-now-custom-3" class="form-control m-2"
                                                    name="cover">

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
                    </div>
                </div>
            </div>
        </main>
        <!--[ Start:: page footer link copywrite ]-->
        <footer class="page-footer py-4 mt-4">
            <div class="container-fluid">
                <p class="col-md-4 mb-0 text-muted">
                    © 2022
                    <a href="https://pixelwibes.com/" target="_blank" title="Pixelwibes">Pixelwibes</a>, All
                    Rights Reserved.
                </p>
            </div>
        </footer>
    </div>
@endsection

@section('customJs')
    <script>
        $(function() {
            $(".checkme").click(function() {
                var video = $(this).is(":checked");
                if (video == true) {
                    $(this).parents(".video-card").find(".video-box").show();
                } else {
                    $(this).parents(".video-card").find(".video-box").hide();
                }
            });
        });
    </script>
@endsection
