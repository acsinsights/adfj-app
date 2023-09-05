@extends('admin.includes.app')
@section('title', 'Add Our Clientlele')
@section('content')
    <!--Page header-->
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0 text-primary">Add Offer</h4>
        </div>
    </div>
    <!--End Page header-->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="card">

                <div class="card-body">
                    <div class="row">
                        <form action="/admin/addoffer" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <label class="m-2">Offer Name</label>
                        <input type="text" name="offername" class="form-control m-2"
                            placeholder="Customer Name Goes Here">



{{--
                        <label class="m-2">Date</label>
                        <input type="date" name="date" class="form-control m-2"> --}}

                        <label class="m-2">Offer Image <span class="text-danger">(44 ×
                                44px)</span></label>
                        <input type="file" id="input-file-now-custom-3" class="form-control m-2"
                            name="offerimage" required>



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
