@extends('admin.includes.app')
@section('title', 'Edit Service Type')
@section('content')
    <!--Page header-->
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0 text-primary">Edit Service Type</h4>
        </div>
    </div>
    <!--End Page header-->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2>Edit Service Type</h2>
                </div>
                <div class="card-body">
                    <form action="/admin/update/{{ $stypes->id }}" name="categoryForm" id="categoryForm" method="get"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="pservices" id="pservices" class="form-control m-2" placeholder="Service"
                            value="{{ $stypes->pservices->service_name }}" readonly>

                        <input type="text" name="type" id="name" class="form-control m-2"
                            placeholder="Enter Type Name" value="{{ $stypes->stype_name }}" required>

                        <input type="text" name="slug" id="slug" class="form-control m-2 slug" placeholder="Slug"
                            value="{{ $stypes->slug }}" readonly>

                        <button type="submit" class="btn btn-success mt-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('customJs')
    <script>
        $('#name').change(function() {
            element = $(this);
            $.ajax({
                url: '{{ route('getSlug') }}',
                type: 'get',
                data: {
                    title: element.val()
                },
                dataType: 'json',
                success: function(response) {
                    if (response["status"] == true) {
                        $("#slug").val(response["slug"]);
                    }
                }
            })
        });
    </script>
@endsection
