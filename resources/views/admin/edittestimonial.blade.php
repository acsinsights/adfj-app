@extends('admin.includes.app')
@section('title', 'Edit Post')
@section('content')


<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!--Page header-->
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0 text-primary">Edit Testimonial Here</h4>
        </div>
    </div>
    <!--End Page header-->

    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="card">

                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">

                                <div class="card-body">
                                    <form action="/admin/updatetestimonial/{{ $testimonials->id }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('put')
                                        <div class="formrow col-xl-10">
                                        <div class="formcol col-xl-3">
                                        <label for="" class="title">Customer Name</label>
                                        <input type="text" name="name" class="form-control m-2"
                                            placeholder="Service Category" value="{{ $testimonials->custname }}">
                                        </div>
                                        <div class="formcol col-xl-3">
                                        <label for="" class="title">Customer Designation</label>
                                        <input type="text" name="custdesignation" class="form-control m-2"
                                            placeholder="Customer Designation" value="{{ $testimonials->custdesignation }}">

                                      </div>
                                        <div class="formcol col-xl-3">
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

                                      </div>
                                      </div>




                                      <div class="formrow col-xl-10">



                                        <div class="formcol col-xl-3">
                                        <label class="textarea">Customer Review</label>
                                      {{-- <input type="text" name="review" class="form-control m-2"
                                            placeholder="Title of post" value="{{ $testimonials->custreview }}">  --}}
                                            <textarea class="form-control" name="review" maxlength="300" id="" cols="30" rows="3">{{ $testimonials->custreview }}



                                                </textarea>
                                                <div class="text-right" id="count">
                                                    <span id="current_count">0</span>
                                                    <span id="maximum_count">/ 300</span>
                                                </div>


{{--
                                                 <div class="col-xl-3 col-md-offset-2">
                                                    <textarea form-control name="textarea" id="textarea" maxlength="300" rows="5" style="width: 100%" placeholder="Eneter Text Here..." autofocus></textarea>
                                                    <div id="count">
                                                        <span id="current_count">0</span>
                                                        <span id="maximum_count">/ 300</span>
                                                    </div>
                                                </div> --}}






                                            </div>
                                            <div class="formcol col-xl-3">
                                                <label class="textarea">Customer Image</label>
                                         <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="cover">
                                        </div>

                                            <div class="formcol col-xl-3">
                                        <label class="textarea">Date</label>
                                        <input type="date" name="date" class=" form-control m-2"
                                            value="{{ $testimonials->date }}">
                                        </div>


                                    </div>
                                    {{-- <div class="row">
                                        <div class="col-md-6">
                                            <input type="hidden" name="cover" class=" form-control m-2"
                                            value="{{ $testimonials->custimg }}">
                                            <label class="m-2">Customer Image (44 ×
                                                44px)</label>
                                                <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="cover">


                                                <br>
                                                <img src="/testiimages/{{ $testimonials->custimg }}" name="custimg" class="img-responsive"
                                                    style="max-height: 100px; max-width: 100px;" alt="" srcset="">
                                            </div>


                                        <div class="col-md-6">
                                            <input type="hidden" name="cover" class=" form-control m-2"
                                            value="{{ $testimonials->custlogo }}">
                                            <label class="m-2">Customer Logo (44 ×
                                                44px)</label>
                                                <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="cover">
                                                <br>

                                                <img src="/testilogos/{{ $testimonials->custlogo }}" name="custimg" class="img-responsive"
                                                    style="max-height: 100px; max-width: 100px;" alt="" srcset="">
                                            </div>
                                        </div> --}}





                                       {{-- <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="cover"> --}}
                                        <button type="submit" class="btn btn-success mt-3 ">Submit</button>
                                    </form><br>

                                    <br>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $('textarea').keyup(function() {
            var characterCount = $(this).val().length,
                current_count = $('#current_count'),
                maximum_count = $('#maximum_count'),
                count = $('#count');
                current_count.text(characterCount);
        });
        </script>
@endsection
