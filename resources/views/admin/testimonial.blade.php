@extends('admin.includes.app')
@section('title', 'All Testimonials')
@section('content')
    <!--Page header-->
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0 text-primary">All Testimonials</h4>
        </div>
        <div class="col-md-5 alert-message">
            @include('admin.message')
        </div>
    </div>
    <!--End Page header-->

    <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">

            <div class="card">
                <div class="card-header">
                    <div class="card-options">
                        <a href="{{ route('admin.addtestimonial') }}" class="btn btn-sm btn-primary">Add Testimonial</a>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover card-table table-vcenter text-nowrap">
                            <thead>
                                <tr>
                                    <th>#No</th>
                                    <th>Customer Image</th>
                                    <th>Customer Name</th>
                                    <th>Customer Review</th>
                                    <th>Customer Rating</th>
                                    <th>Date</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($testimonials as $tsti)
                                    <tr style="vertical-align: middle;">
                                        <th scope="row">
                                            {{ $tsti->id }}</th>
                                        <td><img src="/testiimages/{{ $tsti->custimg }}" class="img-responsive"
                                                style="max-height:80px; max-width:50px" alt="" srcset=""></td>
                                        <td>{{ $tsti->custname }}</td>
                                        <td>
                                            <textarea cols="auto" rows="3" style="padding: 10px; text-align:left" readonly class="testi-text">
                                                {{ $tsti->custreview }}
                                            </textarea>
                                            {{-- <textarea class="form-control" cols="auto" rows="3" style="padding: 10px; text-align:left !important" readonly>
                                                 {{ $tsti->custreview }}
                                            </textarea> --}}
                                        </td>
                                        <td>
                                            <div class="testimonial__item-6 transition-3 mb-75 swiper-slide">
                                                <div class="testimonial__rating testimonial__rating-6">
                                                    @if ($tsti->custstar == 1)
                                                        <a href="#">
                                                            <i class="fa-solid fa-star"></i>
                                                        </a>
                                                    @elseif ($tsti->custstar == 2)
                                                        <a href="#">
                                                            <i class="fa-solid fa-star"></i>
                                                        </a>
                                                        <a href="#">
                                                            <i class="fa-solid fa-star"></i>
                                                        </a>
                                                    @elseif ($tsti->custstar == 3)
                                                        <a href="#">
                                                            <i class="fa-solid fa-star"></i>
                                                        </a>
                                                        <a href="#">
                                                            <i class="fa-solid fa-star"></i>
                                                        </a>
                                                        <a href="#">
                                                            <i class="fa-solid fa-star"></i>
                                                        </a>
                                                    @elseif ($tsti->custstar == 4)
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
                                                    @elseif ($tsti->custstar == 5)
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
                                                    @endif
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{ $tsti->date }}</td>

                                        <td><a href="/admin/edittestimonial/{{ $tsti->id }}"
                                                class="btn btn-outline-primary">Edit</a>
                                        </td>
                                        <td>
                                            <form action="/admin/deletetestimonial/{{ $tsti->id }}" method="post">
                                                <button class="btn btn-outline-danger"
                                                    onclick="return confirm('Are you sure?');"
                                                    type="submit">Delete</button>
                                                @csrf
                                                @method('delete')
                                            </form>
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
@endsection
