@extends('admin.includes.app')
@section('title', 'Edit Post')
@section('content')
    <!--Page header-->
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0 text-primary">Edit Clientlele</h4>
        </div>
    </div>
    <!--End Page header-->

    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Clientlele Here</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">

                                <div class="card-body">
                                    <form action="/admin/updateclientlele/{{ $clientleles->id }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('put')
                                        <label for="" class="title">Client Name</label>
                                        <input type="text" name="clientelename" class="form-control m-2"
                                            placeholder="Service Category" value="{{ $clientleles->clientname }}">








                                        {{-- <input type="date" name="date" class=" form-control m-2"
                                            value="{{ $clientleles->date }}"> --}}

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





                                       <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="cover">
                                        <button type="submit" class="btn btn-success mt-3 ">Submit</button>
                                    </form><br>
                                    {{-- <form action="/delete-clientlele-image/{{ $clientleles->id }}" method="post">
                                        <button class="btn text-danger">X</button>
                                        @csrf
                                        @method('delete')
                                    </form> --}}
                                    <img src="/clientleleimg/{{ $clientleles->clientimg }}" name="clientimg" class="img-responsive"
                                        style="max-height: 100px; max-width: 100px;" alt="" srcset="">
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

@endsection
