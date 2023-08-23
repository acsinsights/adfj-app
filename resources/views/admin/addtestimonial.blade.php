@extends('admin.includes.app')
@section('title', 'Add Post')
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
                                            <h2>Add New Testimonial</h2>
                                        </div>
                                        <div class="card-body">
                                            <form action="/admin/add-post" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <label class="m-2">Customer Name</label>
                                                <input type="text" name="author" class="form-control m-2"
                                                    placeholder="write your project title here">


                                                <label class="m-2">Customer Review</label>
                                                <input type="text" name="author" class="form-control m-2"
                                                placeholder="write your testimonial review">


                                                <label class="m-2">Date</label>
                                                <input type="date" name="date" class="form-control m-2">

                                                <label class="m-2">Customer Image <span class="text-danger">(570 × 600
                                                        px)</span></label>
                                                        <input type="file" id="input-file-now-custom-3" class="form-control m-2"
                                                        name="cover" required>
                                                        <label class="m-2">Customer Rating</label>
                                                        <input type="text" name="author" class="form-control m-2"
                                                            placeholder="write your project title here">
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
        @include('admin.includes.footer')
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
