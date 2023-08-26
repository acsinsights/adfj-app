@extends('admin.includes.app')
@section('title', 'Add Testimonial')
@section('content')
    <!--Page header-->
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0 text-primary">Add Testimonial</h4>
        </div>
    </div>
    <!--End Page header-->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="card">

                <div class="card-body">
                    <div class="row">
                        <form action="/admin/add-testimonial" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <label class="m-2">Customer Name</label>
                        <input type="text" name="name" class="form-control m-2"
                            placeholder="Customer Name Goes Here">

                        <label class="textarea m-2">Customer Review</label>

                        <textarea cols="5" rows="5" type="text" name="review" class="form-control m-2"
                            placeholder="write your testimonial review"> </textarea>


                        <label class="m-2">Date</label>
                        <input type="date" name="date" class="form-control m-2">

                        <label class="m-2">Customer Image <span class="text-danger">(44 ×
                                44px)</span></label>
                        <input type="file" id="input-file-now-custom-3" class="form-control m-2"
                            name="cover" required>
                        <label class="m-2">Customer Rating</label>

                        <section class="section">
                            <div style="display: flex;
                                    flex-direction: row;"
                                class="star-rating-bx p-1">

                                <div class="star-widget">
                                    <input type="radio" name="star" id="rate-5"
                                        value="5">
                                    <label for="rate-5" class="fa-solid fa-star"></label>
                                    <input type="radio" name="star" id="rate-4"
                                        value="4">
                                    <label for="rate-4" class="fa-solid fa-star"></label>
                                    <input type="radio" name="star" id="rate-3"
                                        value="3">
                                    <label for="rate-3" class="fa-solid fa-star"></label>
                                    <input type="radio" name="star" id="rate-2"
                                        value="2">
                                    <label for="rate-2" class="fa-solid fa-star"></label>
                                    <input type="radio" name="star" id="rate-1"
                                        value="1">
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
                        {{-- <div class="testimonial__rating testimonial__rating-6">
                                    <a href="#">
                                        <i class="fa-solid fa-star"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa-solid fa-star"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa-solid fa-star"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa-solid fa-star"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa-solid fa-star"></i>
                                    </a>
                                </div> --}}
                        <button type="submit" class="btn btn-success mt-3">Submit</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
