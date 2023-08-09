@extends('admin.includes.app')

@section('content')
    <div class="container" style="padding-top:20px;">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Add New Video category</h2>
                    </div>
                    <div class="card-body">
                        <form action="/add-video" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="url" name="link" class="form-control m-2" placeholder="link">
                            <select name="type" id="type" class="form-control m-2" value="">
                                <option value=""><-- Select Type --></option>
                                <option value="music-song"> Music Videos </option>
                                <option value="original-song">Animation Videos </option>
                                <option value="rap-song">Ad Films </option>
                                <option value="rap-song">Films Vlogs</option>
                            </select>
                            <label class="m-2">Cover Image</label>
                            <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="cover">
                            {{--
                            <div class="video-card">
                                <label for="video" class="m-2">Play Button</label>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" class="checkme m-2" value="1">
                                    </label>
                                </div>
                                <div class="video-box">
                                    <input type="text" name="videolink" id="videolink"
                                        class="form-control m-2 videolink">
                                </div>
                            </div> --}}

                            <button type="submit" class="btn btn-success mt-3">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
