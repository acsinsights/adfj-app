    @extends('admin.includes.app')

    @section('content')
        <div class="container" style="padding-top:20px;">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h2>Add New music category</h2>
                        </div>
                        <div class="card-body">
                            <form action="/add-music" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="url" name="link" class="form-control m-2" placeholder="link">
                                <select name="type" id="type" class="form-control m-2" value="">
                                    <option><-- Select Type --></option>
                                    <option value="cover-song">Cover song</option>
                                    <option value="original-song">Original song</option>
                                    <option value="rap-song">Rap song</option>
                                </select>
                                <label class="m-2">Cover Image</label>
                                <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="cover">
                                <button type="submit" class="btn btn-success mt-3">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
