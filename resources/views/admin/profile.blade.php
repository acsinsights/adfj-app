@extends('admin.includes.app')
@section('title', 'Profile')
@section('content')
    <div class="page order-2 flex-grow-1">
        <!--[ Start:: page header link ]-->
        @include('admin.includes.header')
        <!--[ Start:: page body area ]-->
        <main class="page-body">
            <div class="container-fluid">
                <div class="row g-xl-4 g-lg-3 g-2 justify-content-between">
                    <div class="col-xxl-12 col-xl-12 col-lg-12 order-1 order-xxl-0">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-md-start align-items-center flex-column flex-md-row">
                                    <img src="/profile/{{ Auth::guard('admin')->user()->profile_img }}" alt="profile_img"
                                        class="rounded-4" height="160px" width="160px">
                                    <div class="media-body ms-md-5 m-0 mt-4 mt-md-0 text-md-start text-left">
                                        <h4 style="margin-left: 10px;" class="mb-1">{{ Auth::guard('admin')->user()->name }}</h4>
                                        <p  style="margin-left: 10px;">{{ Auth::guard('admin')->user()->email }}</p>
                                        {{-- <span class="text-muted">It is a long established fact that a reader will be
                                            distracted by the readable content of a page when looking at its layout.</span>
                                        <div class="my-3">
                                            <button class="btn btn-primary">Follow</button>
                                            <button class="btn btn-dark">Message</button>
                                        </div> --}}

                                        <div class="d-flex flex-row flex-wrap align-items-center justify-content-left justify-content-md-start">
                                            <div class="py-2 px-3 me-1 mt-1">
                                                <small class="text-muted">City</small>
                                                <div class="fs-5">Mumbai</div>
                                            </div>
                                            <div class="py-2 px-3 me-1 mt-1">
                                                <small class="text-muted">Awards</small>
                                                <div class="fs-5">13</div>
                                            </div>
                                            <div class="py-2 px-3 me-1 mt-1">
                                                <small class="text-muted">Experience</small>
                                                <div class="fs-5">5+</div>
                                            </div>
                                            {{-- <div class="bg-body py-2 px-3 me-1 mt-1">
                                                <small class="text-muted">Total Earnings</small>
                                                <div class="fs-5">$8,705</div>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-3">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Edit Profile</h4>
                            </div>
                            <form action="/admin/update-profile/{{ Auth::guard('admin')->user()->id }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="card-body">
                                    <div class="row g-3">
                                        <div class="col-md-5">
                                            <label class="form-label small text-muted">Company</label>
                                            <input type="text" class="form-control" disabled="" placeholder="Company"
                                                value="AdFj Studios">
                                        </div>
                                        <div class="col-sm-6 col-md-3">
                                            <label class="form-label small text-muted">Full Name</label>
                                            <input type="text" name="name" class="form-control" placeholder="Username"
                                                value="{{ Auth::guard('admin')->user()->name }}">
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <label class="form-label small text-muted">Email address</label>
                                            <input type="email" name="email" class="form-control" placeholder="Email"
                                                value="{{ Auth::guard('admin')->user()->email }}">
                                        </div>

                                        <div class="col-md-12">
                                            <label class="form-label small text-muted">Profile Image <span
                                                    class="text-danger">(160 x 160)</span></label>
                                            <input type="file" name="cover" class="form-control">
                                        </div>
                                        {{-- <div class="col-sm-6 col-md-4">
                                            <label class="form-label small text-muted">Current Password</label>
                                            <input type="text" name="password" class="form-control"
                                                placeholder="Password" value="{{ Auth::guard('admin')->user()->password }}">
                                        </div> --}}


                                    @include('admin.message')
                                        @if (session('message'))
                                        <h5 class="alert alert-success mb-2">{{ session('message') }}</h5>
                                    @endif

                                    @if ($errors->any())
                                    <ul style="color: rgb(255, 255, 255)!important" class="alert alert-danger">
                                        @foreach ($errors->all() as $error)
                                        <li style="color: rgb(255, 255, 255)!important" class=" alert-danger">{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                    @endif

                                        <div class="col-sm-6 col-md-4">
                                            <label class="form-label small text-muted">Current Password</label>
                                            <input type="text" name="current_password" class="form-control"
                                                placeholder="current Password">

                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <label class="form-label small text-muted">New Password</label>
                                            <input type="text" name="password" class="form-control"
                                                placeholder="Password">

                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <label class="form-label small text-muted">Confirm Password</label>

                                            <input type="text" name="password_confirmation" class="form-control"  placeholder="Confirm Password">
                                        </div>






                                        {{-- <div class="col-sm-6 col-md-3">
                                            <label class="form-label small text-muted">Postal Code</label>
                                            <input type="number" class="form-control" placeholder="ZIP Code">
                                        </div>
                                        <div class="col-md-5">
                                            <label class="form-label small text-muted">Country</label>
                                            <select class="form-control custom-select">
                                                <option value="">India</option>
                                            </select>
                                        </div> --}}
                                    </div>

                                </div>
                                <div class="card-footer text-end">
                                    <button type="submit" class="btn btn-primary">Update Profile</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div> <!--[ .row end ]-->
            </div>
        </main>
    </div>
@endsection

@section('customJs')
@endsection
