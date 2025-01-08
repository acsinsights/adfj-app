@extends('mail.layout.app')

@section('content')
    <div class="subject">
        {{ $subject }}
    </div>
    <p>
        We are pleased to inform you that a new contact form been submitted.
    </p>

    <p>
        Name : <span class="color-blue fw-bold">{{ $form->name }}</span>
    </p>

    <p>
        Phone : <span class="color-blue fw-bold">{{ $form->phone }}</span>
    </p>

    <p>
        Email : <span class="color-blue fw-bold">{{ $form->email }}</span>
    </p>

    <p>
        Message : <span class="color-blue fw-bold">{{ $form->message }}</span>
    </p>
@endsection
