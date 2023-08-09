@extends('admin.includes.app')

@section('content')
    <div class="page order-2 flex-grow-1">
        <!--[ Start:: page header link ]-->
        @include('admin.includes.header')
        <!--[ Start:: page body area ]-->
        <main class="page-body">
            <div class="container-fluid">
                <!--[ Start:: My Dashboard ]-->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h2>Add New Post</h2>
                            </div>
                            <div class="card-body">
                                <form action="/add-service-type" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input type="text" name="type" class="form-control m-2"
                                        placeholder="Enter Type Name">

                                    <input type="text" name="slug" id="slug" class="form-control m-2 slug"
                                        placeholder="Slug">

                                    <button type="submit" class="btn btn-success mt-3">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container" style="padding-top:20px;">

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h2>All Service Types</h2>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-custom mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Type Name</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>


                                            <tbody>

                                                @foreach ($stypes as $type)
                                                    <tr>

                                                        <td>{{ $type->stype_name }}</td>
                                                        <td>Edit</td>
                                                        <td>Delete</td>
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
