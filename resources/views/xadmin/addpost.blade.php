@extends('admin.includes.app')
@section('title', 'Add Post')
@section('content')
    <!--Page header-->
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0 text-primary">Add Posts</h4>
        </div>
    </div>
    <!--End Page header-->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Add New Post</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <form action="/admin/add-post" method="post" enctype="multipart/form-data">
                            @csrf
                            <label class="m-2">Title</label>
                            <input type="text" name="author" class="form-control m-2"
                                placeholder="write your project title here">

                            <label class="m-2">Service</label>
                            <select name="service" id="" value="" class="form-control m-2" required>
                                <option value="service"><- Select Service -></option>
                                @foreach ($pservices as $item)
                                    <option value="{{ $item->id }}">{{ $item->service_name }}
                                    </option>
                                @endforeach
                            </select>
                            <label class="m-2">Sub-Service</label>
                            <select name="type" id="" value="" class="form-control m-2" required>
                                <option value=""><- Select Service Type -></option>
                                @foreach ($stypes as $item1)
                                    <option value="{{ $item1->id }}">{{ $item1->stype_name }}
                                    </option>
                                @endforeach
                            </select>
                            <label class="m-2">Location</label>
                            <input type="text" name="location" class="form-control m-2" placeholder="location">
                            <label class="m-2">Date</label>
                            <input type="date" name="date" class="form-control m-2">

                            <label class="m-2">Media (Cover Image) &nbsp;<span class="text-danger">(570 × 600
                                    px)</span></label>
                            <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="cover"
                                required>
                            <label class="m-2">Hyperlink(optional)</label>
                            <input type="url" name="videolink" id="videolink" placeholder="put hyperlink here"
                                class="form-control m-2 videolink">
                        <div class="twobtn">
                            <div class="video-card">
                                <label for="video" class="m-2">Play Button</label>
                                <div class="toggle-button-cover" id="margin-zero">
                                    <div class="button-cover" id="button-cover">
                                        <div class="button r" id="button-3">
                                            <label class="switch">
                                                <input type="checkbox" name="playbtn" id="playbtn" value="1">
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="video-card">
                            <label for="video" class="m-2">Featured Post</label>
                            <div class="toggle-button-cover" id="margin-zero">
                                <div class="button-cover" id="button-cover">
                                    <div class="button r" id="button-3">
                                        <label class="switch">
                                            <input type="checkbox" name="featured" id="featured" value="1">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
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
