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
        Company Name : <span class="color-blue fw-bold">{{ $form->company_name }}</span>
    </p>

    <p>
        City : <span class="color-blue fw-bold">{{ $form->city }}</span>
    </p>

    <p>
        Service : <span class="color-blue fw-bold">{{ $form->service }}</span>
    </p>

    <p>
        Project Reference : <span class="color-blue fw-bold">{{ $form->reference }}</span>
    </p>

    <p>
        Need Consultation Call :
        <span class="{{ $form->consultation ? 'color-green' : 'color-red' }} fw-bold">
            {{ $form->consultation ? 'Yes' : 'No' }}
        </span>
    </p>
@endsection
