@extends('frontend.layouts.app')
@section('title', 'Pricing Plans')
@section('page')

<section class="about__heading about__heading-overlay about__spacing include-bg jarallax"
data-background="{{ asset('user-assets/img/about/about-breadcrumb.jpg') }}">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-8 col-lg-10">
            <div class="about__heading-content text-center p-relative z-index-1">
                <span class="about__heading-subtitle">Pricing</span>
                <h3 class="about__heading-title">Affordable Pricing Plans </h3>
            </div>
        </div>
    </div>
</div>
</section>

<div style="margin-top: 50px" class="container">
    <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-8">
            <div class="tp-section-wrapper-2 text-center">
                <h3 style="font-size: 3rem" class="tp-section-title-2 font-30">Design Magic Unleashed: Pricing Options</h3>
            </div>
        </div>
    </div>
</div>
<div style="margin-top: 50px" class="plan-spacing">
<script async src="https://js.stripe.com/v3/pricing-table.js"></script>
<stripe-pricing-table pricing-table-id="prctbl_1NZJq1SCz6pJIP37rjTTmqYw"
publishable-key="pk_live_51NZIfkSCz6pJIP37VMRKhhKvMQNfEtlBIhMxrLjftxVFWB000xVxdrttpL3WwU2Ie8Z9staCEnWe6zvD0xhpfek600QwW3JQTh">
</stripe-pricing-table>




<div style="margin-top: 50px; margin-bottom: 50px; " class="container">
    <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-8">
            <div class="tp-section-wrapper-2 text-center">
                <h3 style="font-size: 3rem " class="tp-section-title-2 font-70">Tune Your Dreams: Music Production Pricing</h3>
            </div>
        </div>
    </div>
</div>
<script async src="https://js.stripe.com/v3/pricing-table.js"></script>
<stripe-pricing-table pricing-table-id="prctbl_1NZJUASCz6pJIP37CIdUFegK"
publishable-key="pk_live_51NZIfkSCz6pJIP37VMRKhhKvMQNfEtlBIhMxrLjftxVFWB000xVxdrttpL3WwU2Ie8Z9staCEnWe6zvD0xhpfek600QwW3JQTh">
</stripe-pricing-table>
</div>
@endsection
