@extends('admin.includes.app')
@section('title', 'Dashboard')
@section('content')


    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Music Portfolio</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active">Music Portfolio
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-md-5 alert-message">
                        @include('admin.message')
                    </div> --}}
                </div>

            </div>
            <div class="content-body">
                <!-- Basic Tables start -->
                <div class="row" id="basic-table">
                    <div class="col-12">
                        <div class="card">
                            {{-- <div class="card-header">
                                <h4 class="card-title">Table Basic</h4>
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                    Using the most basic table Leanne Grahamup, here’s how <code>.table</code>-based tables look in Bootstrap. You
                                    can use any example of below table for your table and it can be use with any type of bootstrap tables.
                                </p>
                            </div> --}}
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            {{-- <th>SR. No</th> --}}
                                            <th>Client Logo</th>
                                            {{-- <th>Logo</th> --}}
                                            <th>Customer Name</th>
                                            <th>Customer Designation</th>
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
                                                {{--  <th scope="row">
                                            {{ $tsti->id }}</th> --}}
                                                <td><img src="/testiimages/{{ $tsti->custimg }}" class="img-responsive"
                                                        style="max-height:80px; max-width:50px" alt=""
                                                        srcset="">
                                                </td>
                                                {{-- <td><img src="/testilogos/{{ $tsti->custlogo }}" class="img-responsive"
                                                        style="max-height:80px; max-width:50px" alt="" srcset=""></td> --}}


                                                <td>{{ $tsti->custname }}</td>

                                                <td>{{ $tsti->custdesignation }}</td>
                                                <td>
                                                    </button>
                                                    {{-- <textarea cols="auto" rows="3" style="padding: 10px;color: white;
                                            background: #2a2e3f; text-align:left" readonly class="">
                                                        {{ $tsti->custreview }}
                                                    </textarea> --}}



                                                    <div class="form-group">
                                                        <label for="exampleFormControlTextarea1">Textarea</label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Textarea">{{ $tsti->custreview }}</textarea>
                                                    </div>

                                                    {{-- <textarea class="form-control" cols="auto" rows="3" style="padding: 10px; text-align:left !important" readonly>
                                                         {{ $tsti->custreview }}
                                                    </textarea> --}}
                                                </td>
                                                <td>
                                                    {{-- @php
                                                        $totalStar = intval($tsti->custstar);
                                                    @endphp
                                                    @for ($i = 0; $i < $totalStar; $i++)
                                                        <i class="ficon" data-feather="star">
                                                        </i>
                                                    @endfor --}}

                                                    <div class="testimonial__item-6 transition-3 mb-75 swiper-slide">
                                                        <div id="hover-c"
                                                            class="testimonial__rating testimonial__rating-6">
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
                                                    <form action="/admin/deletetestimonial/{{ $tsti->id }}"
                                                        method="post">
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
        </div>
    </div>
    <!-- END: Content-->

@endsection
