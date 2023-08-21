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
                                            <h2>Add New Post</h2>
                                        </div>
                                        <div class="card-body">
                                            <form action="/admin/add-post" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <label class="m-2">Project Title</label>
                                                <input type="text" name="author" class="form-control m-2"
                                                    placeholder="write your project title here">

                                                    <label class="m-2">Service Category</label>
                                              <select name="service" id="" value=""
                                                 class="form-control m-2" required>
                                                <option value="service"><- Select Service -></option>
                                                @foreach ($pservices as $item)
                                                    <option value="{{ $item->id }}">{{ $item->service_name }}
                                                    </option>
                                                 @endforeach
                                                </select>
                                                <label class="m-2">Sub-Service Category</label>
                                                <select name="type" id="" value=""
                                                class="form-control m-2" required>
                                                <option value=""><- Select Service Type -></option>
                                                @foreach ($stypes as $item1)
                                                    <option value="{{ $item1->id }}">{{ $item1->stype_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                                    <label class="m-2">Location</label>
                                                <input type="text" name="location" class="form-control m-2"
                                                    placeholder="location">
                                                    <label class="m-2">Date</label>
                                                <input type="date" name="date" class="form-control m-2">



                                                <label class="m-2">Cover Image (570 × 600 px)</label>
                                                <input type="file" id="input-file-now-custom-3" class="form-control m-2"
                                                    name="cover" required>
                                                <label class="m-2">Hyperlink(optional)</label>
                                                <input type="url" name="videolink" id="videolink" placeholder="put hyperlink here"
                                                class="form-control m-2 videolink">


                                                <div class="video-card">
                                                    <label for="video" class="m-2">Play Button</label>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="playbtn" id="playbtn"
                                                                class="checkme m-2" value="1">
                                                        </label>
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
