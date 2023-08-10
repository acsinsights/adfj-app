@extends('admin.includes.app')

@section('content')
    <div class="page order-2 flex-grow-1">
        <!--[ Start:: page header link ]-->
        @include('admin.includes.header')
        <!--[ Start:: page body area ]-->
        <main class="page-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h2>Edit Post</h2>
                            </div>
                            <div class="card-body">
                                <form action="/admin/update/{{ $posts->id }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <label for="" class="title">Title</label>
                                    <input type="text" name="title" class="form-control m-2"
                                        placeholder="Service Category" value="{{ $posts->title }}">

                                    <label for="" class="">Sub Title</label>
                                    <input type="text" name="author" class="form-control m-2"
                                        placeholder="Title of post" value="{{ $posts->author }}">

                                    <label for="" class="">Location</label>
                                    <input type="text" name="location" class="form-control m-2" placeholder="location"
                                        value="{{ $posts->location }}">

                                    <label for="" class="">Portfolio Service</label>

                                    <input type="text" class="form-control m-2" value="{{ $posts->serviceid }}" disabled>

                                    <select class="form-control custom-select m-2" id="inlineFormCustomSelect"
                                        name="service">
                                        <option selected>Choose Service...</option>
                                        @foreach ($pservices as $ps)
                                            <option value="{{ $ps->id }}">{{ $ps->service_name }}</option>
                                        @endforeach
                                    </select>

                                    <label for="" class="">Service Type</label>
                                    <input type="text" name="type" class="form-control m-2"
                                        value="{{ $posts->stypeid }}" disabled>

                                    <select class="form-control custom-select m-2" id="inlineFormCustomSelect">
                                        <option selected>Choose Type...</option>
                                        @foreach ($stypes as $st)
                                            <option value="{{ $st->id }}">{{ $st->stype_name }}</option>
                                        @endforeach
                                    </select>

                                    <input type="date" name="date" class=" form-control m-2"
                                        value="{{ $posts->date }}">

                                    <label class="m-2">Cover Image</label>

                                    <input type="file" id="input-file-now-custom-3" class="form-control m-2"
                                        name="cover">


                                    <button type="submit" class="btn btn-success mt-3 ">Submit</button>
                                </form>

                                <label class="m-2">Cover Image</label>
                                <form action="/deletecover/{{ $posts->id }}" method="post">
                                    <button class="btn text-danger">X</button>
                                    @csrf
                                    @method('delete')
                                </form>
                                <img src="/posts/{{ $posts->media }}" class="img-responsive"
                                    style="max-height: 100px; max-width: 100px;" alt="" srcset="">
                                <br>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection

@section('customJs')
@endsection
