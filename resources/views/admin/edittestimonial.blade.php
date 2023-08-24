@extends('admin.includes.app')
@section('title', 'Edit Testimonials')
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
                                <h2>Edit Testimonial</h2>
                            </div>
                            <div class="card-body">
                                <form action="/admin/updatetestimonial/{{ $testimonials->id }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <label for="" class="title">Customer Name</label>
                                    <input type="text" name="name" class="form-control m-2"
                                        placeholder="Service Category" value="{{ $testimonials->custname }}">

                                    <label class="textarea">Customer Review</label>
                                    <input type="text" name="review" class="form-control m-2"
                                        placeholder="Title of post" value="{{ $testimonials->custreview }}">


                                    <label>Customer Rating</label>
                                    <input type="text" name="star" class="form-control m-2"
                                        placeholder="Title of post" value="{{ $testimonials->custstar }}">

                                    <input type="date" name="date" class=" form-control m-2"
                                        value="{{ $testimonials->created_at }}">

                                        <img src="/posts/{{ $testimonials->custimg }}" class="img-responsive"
                                        style="max-height: 100px; max-width: 100px;" alt="" srcset="">
                                    <br>
                                    <button type="submit" class="btn btn-success mt-3 ">Submit</button>
                                </form>

                                <label class="m-2">Customer Image (44 ×
                                    44px)</label>
                                <form action="/deletecover/{{ $testimonials->id }}" method="post">
                                    <button class="btn text-danger">X</button>
                                    @csrf
                                    @method('delete')
                                </form>

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
