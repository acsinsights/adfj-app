@extends('frontend.layouts.app')
@section('title','Subscription')
@section('page')

<section class="about__heading about__heading-overlay about__spacing include-bg jarallax"
data-background="{{ asset('user-assets/img/about/about-breadcrumb.jpg') }}">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-8 col-lg-10">
            <div class="about__heading-content text-center p-relative z-index-1">
                <span class="about__heading-subtitle">Subscription</span>
                <h3 class="about__heading-title">Unlock Exclusive Benefits</h3>
            </div>
        </div>
    </div>
</div>
</section>


<div class="plan-spacing">


<script async src="https://js.stripe.com/v3/pricing-table.js"></script>
<stripe-pricing-table pricing-table-id="prctbl_1NZUjySCz6pJIP37DKL3QVj5"
publishable-key="pk_live_51NZIfkSCz6pJIP37VMRKhhKvMQNfEtlBIhMxrLjftxVFWB000xVxdrttpL3WwU2Ie8Z9staCEnWe6zvD0xhpfek600QwW3JQTh">
</stripe-pricing-table>
</div>



@endsection
