@extends('admin.includes.app')
@section('title', 'Form Entries')
@section('content')

    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">All Form Entries</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active">
                                        All Form Entries
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
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#No</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th style="text-align: center;">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = $entries->perPage() * ($entries->currentPage() - 1);
                                        @endphp
                                        @forelse ($entries as $key => $entry)
                                            <tr style="vertical-align: middle;">
                                                <td>
                                                    {{ $entry->id }}
                                                </td>
                                                <td>{{ $entry->name }}</td>
                                                <td>{{ $entry->phone }}</td>
                                                <td>{{ $entry->email }}</td>
                                                <td style="text-align: center;">
                                                    <a class="btn btn-flat-primary border"
                                                        href="/admin/form/{{ $entry->id }}">
                                                        View
                                                    </a>

                                                    <a class="btn btn-flat-danger border"
                                                        onclick="return confirm('Are you sure?');"
                                                        href="/admin/form/delete/{{ $entry->id }}/{{ $entry->form_type }}">
                                                        Delete
                                                    </a>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="10" class="text-center">No records found!</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        {{ $entries->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
