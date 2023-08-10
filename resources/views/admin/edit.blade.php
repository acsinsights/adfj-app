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
                                <form action="/update/{{ $posts->id }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <input type="text" name="title" class="form-control m-2" placeholder="title"
                                        value="{{ $posts->title }}">
                                    <input type="text" name="author" class="form-control m-2" placeholder="author"
                                        value="{{ $posts->author }}">
                                    <input type="text" name="location" class="form-control m-2" placeholder="location"
                                        value="{{ $posts->location }}">
                                    <input type="date" name="date" class="form-control m-2" placeholder="location"
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
                                <img src="/cover/{{ $posts->cover }}" class="img-responsive"
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
