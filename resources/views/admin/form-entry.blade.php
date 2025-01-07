@extends('admin.includes.app')
@section('title', 'Form Entry')
@section('content')
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Form Entry #{{ $form->id }}</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                                    </li>

                                    <li class="breadcrumb-item active">
                                        Form Entry #{{ $form->id }}
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
                <div class="row" id="basic-table">
                    <div class="col-12">
                        @if ($form->form_type == 'contact')
                            <div class="card">
                                <div class="card-header">
                                    <h4>{{ $form->name }} | {{ $form->email }}</h4>
                                    <p>{{ $form->created_at->format('d, M Y h:i A') }}</p>
                                </div>
                                <div class="card-body">
                                    <p>Phone: {{ $form->phone }}</p>
                                    <h6>{{ $form->message }}</h6>
                                </div>
                                <div class="card-footer">
                                    <a class="btn btn-flat-danger border" onclick="return confirm('Are you sure?');"
                                        href="/admin/form/delete/{{ $form->id }}">
                                        Delete
                                    </a>
                                </div>
                            </div>
                        @elseif ($form->form_type == 'consultation')
                            <div class="card">
                                <div class="card-header">
                                    <h4>{{ $form->name }} | {{ $form->email }}</h4>
                                    <p>{{ $form->created_at->format('d, M Y h:i A') }}</p>
                                </div>
                                <div class="card-body">
                                    <p>Phone: {{ $form->phone }}</p>
                                    @isset($form->company_name)
                                        <p>Company Name: {{ $form->company_name }}</p>
                                    @endisset
                                    <p>City: {{ $form->city }}</p>
                                    <p>Service Nedded: {{ $form->service }}</p>
                                    <p>Reference Link: {{ $form->reference }}</p>
                                    <p>
                                        Need Consultation:
                                        <span class="text-{{ $form->consultation ? 'success' : 'danger' }}">
                                            {{ $form->consultation ? 'Yes' : 'No' }}
                                        </span>
                                    </p>
                                    @isset($form->attach_file)
                                        <div>
                                            Attach File: <a href="{{ $form->attach_file }}" download>Download</a>
                                        </div>
                                    @endisset
                                </div>

                                <div class="card-footer">
                                    <a class="btn btn-flat-danger border" onclick="return confirm('Are you sure?');"
                                        href="/admin/form/delete/{{ $form->id }}">
                                        Delete
                                    </a>
                                </div>
                            </div>
                        @else
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="text-center">Not Found!</h6>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
