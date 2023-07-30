@extends('frontend.layouts.app')
@section('title','Subscription')
@section('page')

<section class="about__heading about__heading-overlay about__spacing include-bg jarallax"
data-background="{{ asset('user-assets/img/about/about-breadcrumb.jpg') }}">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-8 col-lg-10">
            <div class="about__heading-content text-center p-relative z-index-1">
                {{-- <span class="about__heading-subtitle">News Letter</span> --}}
                <h3 class="about__heading-title">News Letter</h3>
            </div>
        </div>
    </div>
</div>
</section>


<div class="newsletter-spacing">


    <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
    <script>
      hbspt.forms.create({
        region: "na1",
        portalId: "40057864",
        formId: "039558fa-5dde-4942-bd7c-4503d0199368"
      });
      </script>
<div class="cover-hubspot1"></div>
</div>



@endsection
