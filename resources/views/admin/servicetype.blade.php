@extends('admin.includes.app')
@section('title', 'Add Service Type')
@section('content')
    <!--Page header-->
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0 text-primary">Add New Sub-Service</h4>
        </div>
    </div>
    <!--End Page header-->
    <div class="row">
        <div class="col-12">
            <div class="col-md-5 alert-message">
                @include('admin.message')
            </div>
            <div class="card">
                {{-- <div class="card-header">
                    <h2>Add New Sub-Service</h2>
                </div> --}}
                <div class="card-body">
                    <form action="/admin/add-service-type" name="categoryForm" id="categoryForm" method="post"
                        enctype="multipart/form-data">
                        @csrf

                        <select name="service" id="service" value="" class="form-control m-2" required>
                            <option value=""><- Select Main Service -></option>
                            @foreach ($pservices as $item)
                                <option value="{{ $item->id }}">
                                    {{ $item->service_name }}
                                </option>
                            @endforeach
                        </select>

                        <input type="text" name="type" id="name" class="form-control m-2"
                            placeholder="Enter New Sub-Service" required>

                        <button type="submit" class="btn btn-success mt-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="" style="padding-top:20px;">

        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-header">
                        <select name="typeid" id="typeid" value="" class="form-control">
                            <option class="form-control">All Service Types</option>
                            @foreach ($pservices as $ps)
                                <option value="{{ $ps->id }}">{{ $ps->service_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-custom mb-0" id="record_table">
                                <thead>
                                    <tr>
                                        <th>Main Service</th>
                                        <th>Sub Service</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>

                                <tbody>


                                    @foreach ($stypes as $type)
                                        <tr style="vertical-align: center;">
                                            <td>{{ $type->stype_name }}</td>
                                            <td>{{ $type->pservices->service_name }}</td>
                                            <td>
                                                <a href="/admin/typeedit/{{ $type->id }}"
                                                    class="btn btn-sm btn-outline-primary">
                                                    Edit
                                                </a>
                                            </td>
                                            <td>
                                                <a href="/admin/delete-service/{{ $type->id }}"
                                                    class="btn btn-sm btn-outline-danger">
                                                    Delete
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection

{{--
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
@endsection --}}
