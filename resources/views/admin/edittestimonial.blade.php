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
                                <form action="/admin/updatetestimonial/{{ $testimonials->id }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <label for="" class="title">Customer Name</label>
                                    <input type="text" name="name" class="form-control m-2"
                                        placeholder="Service Category" value="{{ $testimonials->custname }}">

                                    <label class="textarea">Customer Review</label>
                                    <input type="text" name="review" class="form-control m-2"
                                        placeholder="Title of post" value="{{ $testimonials->custreview }}">


                                    <label>Customer Rating</label>
                                    <section class="section">
                                        <div style="display: flex;
                                                            flex-direction: row;"
                                            class="star-rating-bx p-1">

                                            <div class="star-widget">
                                                <input type="radio" name="custstar"
                                                    {{ $testimonials->custstar == 5 ? 'checked' : '' }} name="star"
                                                    id="rate-5" value="5">
                                                <label for="rate-5" class="fa-solid fa-star"></label>
                                                <input type="radio" name="custstar"
                                                    {{ $testimonials->custstar == 4 ? 'checked' : '' }} name="star"
                                                    id="rate-4" value="4">
                                                <label for="rate-4" class="fa-solid fa-star"></label>
                                                <input type="radio" name="custstar"
                                                    {{ $testimonials->custstar == 3 ? 'checked' : '' }} name="star"
                                                    id="rate-3" value="3">
                                                <label for="rate-3" class="fa-solid fa-star"></label>
                                                <input type="radio" name="custstar"
                                                    {{ $testimonials->custstar == 2 ? 'checked' : '' }} name="star"
                                                    id="rate-2" value="2">
                                                <label for="rate-2" class="fa-solid fa-star"></label>
                                                <input type="radio" name="custstar"
                                                    {{ $testimonials->custstar == 1 ? 'checked' : '' }} name="star"
                                                    id="rate-1" value="1">
                                                <label for="rate-1" class="fa-solid fa-star"></label>
                                                <p id="error-rating"></p>
                                                <p class="rating-desc"></p>


                                                <div class="modal fade" id="simpleModal" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h3 class="modal-title" id="exampleModalLabel">
                                                                    Thank you</h3>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"
                                                                    onClick="reload"></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </section>

                                    <input type="date" name="date" class=" form-control m-2"
                                        value="{{ $testimonials->date }}">

                                    <input type="hidden" name="cover" class=" form-control m-2"
                                        value="{{ $testimonials->custimg }}">

                                    <label class="m-2">Customer Image (44 ×
                                        44px)</label> <br>
                                    <button type="submit" class="btn btn-success mt-3 ">Submit</button>
                                </form><br>
                                <form action="/delete-testimonial-image/{{ $testimonials->id }}" method="post">
                                    <button class="btn text-danger">X</button>
                                    @csrf
                                    @method('delete')
                                </form>
                                <img src="/testiimages/{{ $testimonials->custimg }}" name="custimg" class="img-responsive"
                                    style="max-height: 100px; max-width: 100px;" alt="" srcset="">
                                <br>
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
