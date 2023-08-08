@extends('admin.includes.app')

@section('content')
<div class="container" style="padding-top:20px;">


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                  <h2>Edit Post</h2>
                </div>
                <div class="card-body">
                    <form action="/update/{{ $musiccats->id }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method("put")
                        <input type="text" name="title" class="form-control m-2" placeholder="title" value="{{ $musiccats->link }}">



                        <label class="m-2">music cover Image</label>
                        <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="cover">



                        <button type="submit" class="btn btn-success mt-3 ">Submit</button>
                    </form>

                        <label class="m-2">music Cover Image</label>
                        <form action="/deletecover/{{ $musiccats->id }}" method="post">
                        <button class="btn text-danger">X</button>
                        @csrf
                        @method('delete')
                        </form>
                        <img src="/cover/{{ $musiccats->musiccover }}" class="img-responsive" style="max-height: 100px; max-width: 100px;" alt="" srcset="">
                        <br>



                </div>
            </div>
        </div>
    </div>
@endsection
