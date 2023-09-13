@extends('admin.includes.app')
@section('title', 'Dashboard')
@section('content')

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Edit Testimonial Here</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Edit Testimonial Here</a>
                                    </li>

                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrumb-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="app-todo.html"><i class="mr-1" data-feather="check-square"></i><span class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><i class="mr-1" data-feather="message-square"></i><span class="align-middle">Chat</span></a><a class="dropdown-item" href="app-email.html"><i class="mr-1" data-feather="mail"></i><span class="align-middle">Email</span></a><a class="dropdown-item" href="app-calendar.html"><i class="mr-1" data-feather="calendar"></i><span class="align-middle">Calendar</span></a></div>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="content-body">
                <!-- Basic multiple Column Form section start -->
                <section id="multiple-column-form">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                {{-- <div class="card-header">
                                    <h4 class="card-title">Multiple Column</h4>
                                </div> --}}

                                <div class="card-body">
                                    <form class="form" action="/admin/updatetestimonial/{{ $testimonials->id }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('put')
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="first-name-column">Customer Name</label>
                                                    <input type="text"  id="first-name-column" class="form-control" value="{{ $testimonials->custname }}" placeholder="name" name="name" >
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="first-name-column">Customer Designation</label>
                                                    <input type="text"  id="first-name-column" class="form-control" value="{{ $testimonials->custdesignation }}" placeholder="Customer Designation" name="custdesignation" >
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-12">
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
                                          <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="first-name-column">Date</label>
                                                <input type="date"  id="first-name-column" class="form-control" value="{{ $testimonials->date }}" placeholder="Customer Designation" name="date" >
                                            </div>
                                        </div>
                                          <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="first-name-column">Customer Review</label>
                                                <textarea class="form-control" name="review" maxlength="300" id="" cols="30" rows="3">{{ $testimonials->custreview }}</textarea>
                                                <div class="text-right" id="count">
                                                    <span id="current_count">0</span>
                                                    <span id="maximum_count">/ 300</span>
                                                </div>
                                            </div>
                                        </div>





                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary mr-1">Submit</button>
                                                {{-- <button type="reset" class="btn btn-outline-secondary">Reset</button> --}}
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Basic Floating Label Form section end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->
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
