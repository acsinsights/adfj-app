@extends('admin.includes.app')
@section('title', 'Service Type Edit')
@section('content')
    <div class="page order-2 flex-grow-1">
        <!--[ Start:: page header link ]-->
        @include('admin.includes.header')
        <!--[ Start:: page body area ]-->
        <main class="page-body">
            <div class="container-fluid">
                <!--[ Start:: My Dashboard ]-->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h2>Add Service Type</h2>
                            </div>
                            <div class="card-body">
                                <form action="/admin/update/{{ $stypes->id }}" name="categoryForm" id="categoryForm"
                                    method="get" enctype="multipart/form-data">
                                    @csrf
                                    <input type="text" name="type" id="name" class="form-control m-2"
                                        placeholder="Enter Type Name" value="{{ $stypes->stype_name }}" required>

                                    <input type="text" name="slug" id="slug" class="form-control m-2 slug"
                                        placeholder="Slug" value="{{ $stypes->slug }}" readonly>

                                    <input type="text" name="slug" id="slug" class="form-control m-2 slug"
                                        placeholder="Slug" value="{{ $stypes->pservices->service_name }}" readonly>

                                    <button type="submit" class="btn btn-success mt-3">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </main>
        <!--[ Start:: page footer link copywrite ]-->
        @include('admin.includes.footer')
    </div>
@endsection

@section('customJs')
    <script>
        $(function() {
            $(".checkme").click(function() {
                var video = $(this).is(":checked");
                if (video == true) {
                    $(this).parents(".video-card").find(".video-box").show();
                } else {
                    $(this).parents(".video-card").find(".video-box").hide();
                }
            });
        });

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
