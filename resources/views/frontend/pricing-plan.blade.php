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

    {{-- <div style="margin-top: 50px" class="container">
    <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-8">
            <div class="tp-section-wrapper-2 text-center">
                <h3 style="font-size: 3rem" class="tp-section-title-2 font-30">Design Magic Unleashed: Pricing Options</h3>
            </div>
        </div>
    </div>
</div> --}}
    <section class="p-spacing servivces__area pt-110">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                    <div class="section__title-wrapper-4 mb-60">
                        <span class="section__title-pre-4">Explore AdFJ Studios Pricing Plans</span>
                        <h3 class="section__title-4"> Empowering Creators and Artists</h3>
                    </div>
                </div>
                <div class="col-xxl-5 offset-xxl-1 col-xl-6 col-lg-6 col-md-6">
                    <div class="services__more-4 mb-65">
                        <p> Discover pricing plans meticulously crafted to empower creators and artists, fostering content
                            consistency, addressing financial hurdles, and providing a holistic creative solution at AdFJ
                            Studios.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>





    <section class="services__area pt-115 pb-105 black-bg-12">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="section__title-wrapper-8 text-center mb-60">
                        <h3 class="section__title-8">
                            <span class="section__title-highlight-8"> Benefits
                                <svg width="206" height="24" viewBox="0 0 206 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path class="wow" d="M3 20.7505C47.375 13.8755 135.812 -15.4995 203 20.7505"
                                        stroke="#FF5A1B" stroke-width="6" stroke-linecap="round"></path>
                                </svg>
                            </span>
                        </h3>
                        <span style="color: #fff;" class="section__title-pre-8">Of Subscription Plan </span>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="services__item-8  animate-border-2 d-lg-flex align-items-start transition-3 mb-30 wow fadeInDown"
                        data-wow-delay=".3s" data-wow-duration="1s">
                        <span class="services-border-2"></span>
                        <div class="services__shape">
                            <img class="services__shape-11" src="assets/img/services/8/dedicated-pm.png" alt="">
                        </div>
                        <div class="services__icon-8 mt-40 mr-30">
                            <span>
                                <img style="height: 70px; width:70px;"
                                    src="{{ asset('user-assets/img/icon/services/8/dedicated-pm.png') }}" alt="">
                            </span>
                        </div>
                        <div class="services__content-8">
                            <h3 class="services__title-8">
                                <a href="javascript:void(0)">Content Consistency</a>
                            </h3>
                            <p>Achieve a steady stream of captivating content through our plans tailored to your needs,
                                ensuring your creative journey remains uninterrupted.</p>


                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="services__item9 animate-border3 services__item-8  animate-border-2 d-lg-flex align-items-start transition-3 mb-30 wow fadeInDown"
                        data-wow-delay=".3s" data-wow-duration="1s">
                        <span class="services-border-2"></span>
                        <div class="services__shape">
                            <img class="services__shape-11" src="" alt="">
                        </div>
                        <div class="services__icon-8 mr-30 mt-40">
                            <span>
                                <img style="height: 70px; width:70px;"
                                    src="{{ asset('user-assets/img/icon/services/8/financial-ease.png') }}" alt="">
                            </span>
                        </div>
                        <div class="services__content-8">
                            <h3 class="services__title-8">
                                <a href="javascript:void(0)">Financial Ease</a>
                            </h3>
                            <p>Overcome financial challenges with cost-effective pricing options, enabling you to invest in
                                your creativity while benefiting from top-notch media production services.</p>


                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="services__item9 services__item-8 animate-border3 animate-border-2 d-lg-flex align-items-start transition-3 mb-30 wow fadeInDown"
                        data-wow-delay=".7s" data-wow-duration="1s">
                        <span class="services-border-2"></span>
                        <div class="services__shape">
                            <img class="services__shape-11" src="" alt="">
                        </div>
                        <div class="services__icon-8 mr-30 mt-40">
                            <span>
                                <img style="height: 70px; width:70px;"
                                    src="{{ asset('user-assets/img/icon/services/8/content-consistency.png') }}"
                                    alt="">
                            </span>
                        </div>
                        <div class="services__content-8">
                            <h3 class="services__title-8">
                                <a href="javascript:void(0)">Dedicated Project Management</a>
                            </h3>
                            <p> Enjoy the luxury of a dedicated project manager who ensures seamless communication,
                                efficient workflow, and timely delivery of your projects.</p>


                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class=" services__item-8 animate-border-2 d-lg-flex align-items-start transition-3 mb-30 wow fadeInDown"
                        data-wow-delay=".7s" data-wow-duration="1s">
                        <span class="services-border-2"></span>
                        <div class="services__shape">
                            <img class="services__shape-11" src="" alt="">
                        </div>
                        <div class="services__icon-8 mr-30 mt-40">
                            <span>
                                <img style="height: 70px; width:70px;"
                                    src="{{ asset('user-assets/img/icon/services/8/comprehensive-solution.png') }}"
                                    alt="">
                            </span>
                        </div>
                        <div class="services__content-8">
                            <h3 class="services__title-8">
                                <a href="javascript:void(0)">Comprehensive Solutions</a>
                            </h3>
                            <p>Access a range of additional benefits such as workshops, resources, and expert insights,
                                maximizing the value of your partnership with AdFJ Studios.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>






{{-- active tab section --}}

    {{-- <section class="portfolio__area pt-110 pb-75 p-relative fix tp-el-section">
        <div class="portfolio__shape">

            <img decoding="async" class="portfolio__shape-14"
                src="https://weblearnbd.net/wp/harry/wp-content/themes/harry/assets/img/portfolio/grid/shape/circle-2.png"
                alt="AdFJ Studios">
            <img decoding="async" class="portfolio__shape-15"
                src="https://weblearnbd.net/wp/harry/wp-content/themes/harry/assets/img/portfolio/grid/shape/circle-sm.png"
                alt="AdFJ Studios">
            <img decoding="async" class="portfolio__shape-16"
                src="https://weblearnbd.net/wp/harry/wp-content/themes/harry/assets/img/portfolio/grid/shape/polygon-yellow.png"
                alt="AdFJ Studios">
            <img decoding="async" class="portfolio__shape-17"
                src="https://weblearnbd.net/wp/harry/wp-content/themes/harry/assets/img/portfolio/grid/shape/polygon-pink.png"
                alt="AdFJ Studios">
            <img decoding="async" class="portfolio__shape-18"
                src="https://weblearnbd.net/wp/harry/wp-content/themes/harry/assets/img/portfolio/grid/shape/polygon-green.png"
                alt="AdFJ Studios">
            <img decoding="async" class="portfolio__shape-19"
                src="https://weblearnbd.net/wp/harry/wp-content/themes/harry/assets/img/portfolio/grid/shape/polygon-green-2.png"
                alt="AdFJ Studios">
        </div>


        <!-- section title -->
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="portfolio__section-title-wrapper text-center mb-90 tp-el-content">
                        <span class="portfolio__section-title-pre tp-el-subtitle"> CHECK OUT OUR LATEST WORK </span>


                        <h2 class="portfolio__section-title tp-el-title">Portfolio Classic</h2>
                    </div>
                </div>
            </div>
            <!-- filter button -->
            <div class="row">
                <div class="col-xxl-12">
                    <div class="portfolio__masonary-btn text-center mb-40">
                        <div class="masonary-menu filter-button-group tp-el-mas-btn">
                            <button data-filter="*" class="active">
                                All
                            </button>
                            <button data-filter=".music" class="">
                                Music
                            </button>

                            <button data-filter=".graphics">
                                Graphics
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- filter item start -->
            <div class="row tp-gx-4 grid" style="position: relative; height: auto;">
                <div class="col-xl-12 col-lg-12 col-md-12 col-12 tp-portfolio prisingitem grid-item music">
                    <script async src="https://js.stripe.com/v3/pricing-table.js"></script>
                    <stripe-pricing-table pricing-table-id="prctbl_1NZJq1SCz6pJIP37rjTTmqYw"
                        publishable-key="pk_live_51NZIfkSCz6pJIP37VMRKhhKvMQNfEtlBIhMxrLjftxVFWB000xVxdrttpL3WwU2Ie8Z9staCEnWe6zvD0xhpfek600QwW3JQTh">
                    </stripe-pricing-table>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-12 tp-portfolio prisingitem2 grid-item graphics ">
                    <script async src="https://js.stripe.com/v3/pricing-table.js"></script>
                    <stripe-pricing-table pricing-table-id="prctbl_1NZJUASCz6pJIP37CIdUFegK"
                        publishable-key="pk_live_51NZIfkSCz6pJIP37VMRKhhKvMQNfEtlBIhMxrLjftxVFWB000xVxdrttpL3WwU2Ie8Z9staCEnWe6zvD0xhpfek600QwW3JQTh">
                    </stripe-pricing-table>
                </div>
            </div>
        </div>
    </section> --}}
















    <div class="p-spacing row pt-100">
        <div class="col-xl-12">
            <div class="portfolio__section-title-wrapper text-center p-spacing tp-el-content">
                <span class="portfolio__section-title-pre tp-el-subtitle"> Design Magic Unleashed</span>


                <h2 class="portfolio__section-title tp-el-title">Design Pricing Options</h2>
            </div>
        </div>
    </div>
    <div style="margin-top: 50px" class="p-spacing">
        <script async src="https://js.stripe.com/v3/pricing-table.js"></script>
        <stripe-pricing-table pricing-table-id="prctbl_1NZJq1SCz6pJIP37rjTTmqYw"
            publishable-key="pk_live_51NZIfkSCz6pJIP37VMRKhhKvMQNfEtlBIhMxrLjftxVFWB000xVxdrttpL3WwU2Ie8Z9staCEnWe6zvD0xhpfek600QwW3JQTh">
        </stripe-pricing-table>


        <div class="row mt-100">
            <div class="col-xl-12">
                <div class="portfolio__section-title-wrapper p-spacing text-center tp-el-content">
                    <span class="portfolio__section-title-pre tp-el-subtitle">Tune Your Dreams</span>


                    <h2 class="portfolio__section-title tp-el-title pb-50">Music Production Pricing</h2>
                </div>
            </div>
        </div>

        <script async src="https://js.stripe.com/v3/pricing-table.js"></script>
        <stripe-pricing-table pricing-table-id="prctbl_1NZJUASCz6pJIP37CIdUFegK"
            publishable-key="pk_live_51NZIfkSCz6pJIP37VMRKhhKvMQNfEtlBIhMxrLjftxVFWB000xVxdrttpL3WwU2Ie8Z9staCEnWe6zvD0xhpfek600QwW3JQTh">
        </stripe-pricing-table>
    </div>

















    <section class="mt-80 our-services section-margin">
        <div class="container">
            <div class="one-title dsn-active wow fadeInUp"data-wow-delay=".7s" data-wow-duration="1s">
                {{-- <div class="title-sub-container">
                <p class="title-sub">OUR SERVCIES</p>
            </div> --}}
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="section__title-wrapper-8 text-center ">
                            <h3 style="color: #000000;" class="section__title-8">
                                <span class="section__title-highlight-8">Onboarding
                                    <svg width="206" height="24" viewBox="0 0 206 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path class="wow" d="M3 20.7505C47.375 13.8755 135.812 -15.4995 203 20.7505"
                                            stroke="#FF5A1B" stroke-width="6" stroke-linecap="round"></path>
                                    </svg>
                                </span>
                            </h3>
                            <span style="color: #000000;" class="section__title-pre-8"> with Team AdFJ Studios</span>

                        </div>
                    </div>
                </div>
            </div>
            <section class=" design-section">
                <div class="timeline">
                    <div class="timeline-empty">
                    </div>
                    <div class="timeline-middle wow fadeInUp">
                        <div class="timeline-circle " data-wow-delay=".7s" data-wow-duration="1s"></div>
                    </div>
                    <div class="timeline-component wow fadeInUp timeline-content" data-wow-delay=".7s"
                        data-wow-duration="1s">
                        <div class="img-brand">
                            <img style="border-radius: 100%;" src="assets/img/avatar/2.jpg" alt="">
                        </div>
                        <h2 class="mb-30">Step 1</h2>
                        <h3>Choose a Plan</h3>
                        <br>
                        <!-- <h6>Hello we are, <br> Acs Team. </h6> -->
                        <p> Browse through our range of pricing plans and select the one that aligns with your creative
                            goals and budget.
                        </p>
                    </div>
                    <div class="timeline-component wow fadeInUp timeline-content" data-wow-delay=".7s"
                        data-wow-duration="1s">
                        <div class="d-flex">
                            <img style="border-radius: 100%; margin-bottom: 20px;" src="assets/img/avatar/1.jpg"
                                alt="">
                        </div>
                        <h2 class="mb-30">Step 2</h2>
                        <h3> Pay Securely</h3>
                        <br>
                        <p>Complete the payment process securely through our trusted payment gateway, setting the foundation
                            for your collaboration.
                        </p>
                    </div>
                    <div class="timeline-middle wow fadeInUp">
                        <div class="timeline-circle" data-wow-delay=".7s" data-wow-duration="1s"></div>
                    </div>
                    <div class="timeline-empty">
                    </div>

                    <div class="timeline-empty">
                    </div>

                    <div class="timeline-middle wow fadeInUp">
                        <div class="timeline-circle" data-wow-delay=".7s" data-wow-duration="1s"></div>
                    </div>
                    <div class=" timeline-component timeline-content wow fadeInUp" data-wow-delay=".7s"
                        data-wow-duration="1s">
                        <div class="img-brand">
                            <img style="border-radius: 100%;" src="assets/img/avatar/2.jpg" alt="">
                        </div>
                        <h2 class="mb-30">Step 3</h2>
                        <h3>Get Dedicated Project Manager</h3>
                        <br>
                        <p>Upon payment confirmation, you'll be assigned a dedicated project manager who will guide you
                            through the entire production journey, ensuring your vision comes to life.</p>
                    </div>
                    <div class="timeline-component wow fadeInUp timeline-content" data-wow-delay=".7s"
                        data-wow-duration="1s">
                        <div class="d-flex">
                            <img style="border-radius: 100%; margin-bottom: 20px;" src="assets/img/avatar/1.jpg"
                                alt="">
                        </div>
                        <h2 class="mb-30">Step 4</h2>
                        <h3>Get Your Project Delivered</h3>
                        <br>
                        <p>Watch your creative vision materialize as our team of experts collaborates to deliver your
                            project efficiently and to your utmost satisfaction.
                        </p>
                    </div>
                    <div class="timeline-middle wow fadeInUp">
                        <div class="timeline-circle" data-wow-delay=".7s" data-wow-duration="1s"></div>
                    </div>
                    <div class="timeline-empty">
                    </div>

                    <div class="timeline-empty">
                    </div>
                </div>

            </section>

        </div>
    </section>


    <section class="about__gallery-area fix p-spacing pt-120 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="tp-section-wrapper-3 mb-60 text-center">
                        <span class="tp-section-subtitle-3">Ongoing Offers</span>
                        <h3 class="tp-section-title-3">Exciting Offers</h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-10">
                    <div class="about__gallery-slider pl-50 pr-50 p-relative">
                        <div class="about__gallery-slider-active">

                            @foreach ($offers as $offe)
                                <div class="about__gallery-item">
                                    <div class="about__gallery-thumb m-img">
                                        <a href="{{ $offe->offerlink }}">
                                            <img src="/offerimg/{{ $offe->offerimage }}"alt="" />
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                            {{-- <div class="about__gallery-item">
                            <div class="about__gallery-thumb m-img">
                                <img src="{{ asset('user-assets/img/portfolio/details/slider/portfolio-details-slider-3.jpg') }}"
                                    alt="" />
                            </div>
                        </div>
                        <div class="about__gallery-item">
                            <div class="about__gallery-thumb m-img">
                                <img src="{{ asset('user-assets/img/portfolio/details/slider/portfolio-details-slider-3.jpg') }}"
                                    alt="" />
                            </div>
                        </div>
                        <div class="about__gallery-item">
                            <div class="about__gallery-thumb m-img">
                                <img src="{{ asset('user-assets/img/portfolio/details/slider/portfolio-details-slider-3.jpg') }}"
                                    alt="" />
                            </div>
                        </div>
                        <div class="about__gallery-item">
                            <div class="about__gallery-thumb m-img">
                                <img src="{{ asset('user-assets/img/portfolio/details/slider/portfolio-details-slider-3.jpg') }}"
                                    alt="" />
                            </div>
                        </div>
                        <div class="about__gallery-item">
                            <div class="about__gallery-thumb m-img">
                                <img src="{{ asset('user-assets/img/portfolio/details/slider/portfolio-details-slider-3.jpg') }}"
                                    alt="" />
                            </div>
                        </div> --}}
                        </div>

                        <div class="about__gallery-arrow d-none d-sm-block"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="faq__area faq__style-3 p-relative z-index-1 p-spacing pt-80 pb-40 tp-el-section">
        <div class="container">
            <div class="row">
                <div class="txt-align col-xxl-5 col-xl-5 col-lg-6">
                    <div class="faq__wrapper">
                        <div class="section__title-wrapper-7 mb-60 tp-el-content">
                            <span class="section__title-pre-7 tp-el-subtitle">Common Questions
                            </span>

                            <h2 class="section__title-7 tp-el-title">
                                Frequently <br>
                                asked
                                <span class="section__title-7-highlight">
                                    questions

                                </span>
                            </h2>
                        </div>

                    </div>
                </div>
                <div class="col-xxl-7 col-xl-7 col-lg-6">
                    <div class="faq__tab-content tp-accordion">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-general-0" role="tabpanel"
                                aria-labelledby="nav-general-tab-0">
                                <style></style>
                                <div data-elementor-type="landing-page" data-elementor-id="1793"
                                    class="elementor elementor-1793">
                                    <section
                                        class="elementor-section elementor-top-section elementor-element elementor-element-de6fcf0 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                                        data-id="de6fcf0" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-no">
                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-804665f"
                                                data-id="804665f" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-a8b120e elementor-widget elementor-widget-tp-faq"
                                                        data-id="a8b120e" data-element_type="widget"
                                                        data-widget_type="tp-faq.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="tp-accordion-style tp-el-section">
                                                                <div class="faq__tab-content tp-accordion">
                                                                    <div class="accordion" id="general_accordion-a8b120e">
                                                                        <div class="accordion-item tp-el-box">
                                                                            <h2 class="accordion-header"
                                                                                id="headingOne-0">
                                                                                <button
                                                                                    class="accordion-button tp-el-box-title"
                                                                                    type="button"
                                                                                    data-bs-toggle="collapse"
                                                                                    data-bs-target="#collapseOne-0"
                                                                                    aria-expanded="true"
                                                                                    aria-controls="collapseOne-0">
                                                                                    Can I upgrade my pricing plan later?
                                                                                </button>
                                                                            </h2>
                                                                            <div id="collapseOne-0"
                                                                                class="accordion-collapse collapse "
                                                                                aria-labelledby="headingOne-0"
                                                                                data-bs-parent="#general_accordion-a8b120e">
                                                                                <div class="accordion-body">
                                                                                    <p class="tp-el-box-desc">
                                                                                        Yes, you can upgrade your plan at
                                                                                        any time to accommodate your
                                                                                        evolving needs and creative
                                                                                        ambitions.

                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="accordion-item tp-el-box">
                                                                            <h2 class="accordion-header"
                                                                                id="headingOne-1">
                                                                                <button
                                                                                    class="accordion-button tp-el-box-title collapsed"
                                                                                    type="button"
                                                                                    data-bs-toggle="collapse"
                                                                                    data-bs-target="#collapseOne-1"
                                                                                    aria-expanded="false"
                                                                                    aria-controls="collapseOne-1">
                                                                                    What if I have specific requirements for
                                                                                    my project?
                                                                                </button>
                                                                            </h2>
                                                                            <div id="collapseOne-1"
                                                                                class="accordion-collapse collapse"
                                                                                aria-labelledby="headingOne-1"
                                                                                data-bs-parent="#general_accordion-a8b120e">
                                                                                <div class="accordion-body">
                                                                                    <p class="tp-el-box-desc">
                                                                                        Our dedicated project manager will
                                                                                        work closely with you to understand
                                                                                        your unique requirements and ensure
                                                                                        they are integrated into the
                                                                                        production process.


                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="accordion-item tp-el-box">
                                                                            <h2 class="accordion-header"
                                                                                id="headingOne-2">
                                                                                <button
                                                                                    class="accordion-button tp-el-box-title collapsed"
                                                                                    type="button"
                                                                                    data-bs-toggle="collapse"
                                                                                    data-bs-target="#collapseOne-2"
                                                                                    aria-expanded="false"
                                                                                    aria-controls="collapseOne-2">
                                                                                    Do you offer a satisfaction guarantee?
                                                                                </button>
                                                                            </h2>
                                                                            <div id="collapseOne-2"
                                                                                class="accordion-collapse collapse"
                                                                                aria-labelledby="headingOne-2"
                                                                                data-bs-parent="#general_accordion-a8b120e">
                                                                                <div class="accordion-body">
                                                                                    <p class="tp-el-box-desc">
                                                                                        Absolutely, your satisfaction is our
                                                                                        priority. We strive to exceed your
                                                                                        expectations, and if you're not
                                                                                        satisfied, we'll work with you to
                                                                                        make it right.


                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-general-1" role="tabpanel"
                                aria-labelledby="nav-general-tab-1">
                                <style></style>
                                <div data-elementor-type="landing-page" data-elementor-id="1805"
                                    class="elementor elementor-1805">
                                    <section
                                        class="elementor-section elementor-top-section elementor-element elementor-element-0233931 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                                        data-id="0233931" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-no">
                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b0d7ee1"
                                                data-id="b0d7ee1" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-d4c66cf elementor-widget elementor-widget-tp-faq"
                                                        data-id="d4c66cf" data-element_type="widget"
                                                        data-widget_type="tp-faq.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="tp-accordion-style tp-el-section">
                                                                <div class="faq__tab-content tp-accordion">
                                                                    <div class="accordion" id="general_accordion-d4c66cf">
                                                                        <div class="accordion-item tp-el-box">
                                                                            <h2 class="accordion-header"
                                                                                id="ac-id-head-2-0">
                                                                                <button
                                                                                    class="accordion-button tp-el-box-title"
                                                                                    type="button"
                                                                                    data-bs-toggle="collapse"
                                                                                    data-bs-target="#ac-id-2-0"
                                                                                    aria-expanded="true"
                                                                                    aria-controls="ac-id-2-0">
                                                                                    What kind of marketing efforts do
                                                                                    you specialize in?
                                                                                </button>
                                                                            </h2>
                                                                            <div id="ac-id-2-0"
                                                                                class="accordion-collapse collapse show"
                                                                                aria-labelledby="ac-id-head-2-0"
                                                                                data-bs-parent="#general_accordion-d4c66cf">
                                                                                <div class="accordion-body">
                                                                                    <p class="tp-el-box-desc">
                                                                                        A startup or start-up is started
                                                                                        by individual founders or
                                                                                        entrepreneurs to search for a
                                                                                        repeatable and scalable business
                                                                                        model. A startup or start-up is
                                                                                        started by individual
                                                                                        founders...
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="accordion-item tp-el-box">
                                                                            <h2 class="accordion-header"
                                                                                id="ac-id-head-2-1">
                                                                                <button
                                                                                    class="accordion-button tp-el-box-title collapsed"
                                                                                    type="button"
                                                                                    data-bs-toggle="collapse"
                                                                                    data-bs-target="#ac-id-2-1"
                                                                                    aria-expanded="false"
                                                                                    aria-controls="ac-id-2-1">
                                                                                    What is video marketing and why do
                                                                                    I need it?
                                                                                </button>
                                                                            </h2>
                                                                            <div id="ac-id-2-1"
                                                                                class="accordion-collapse collapse"
                                                                                aria-labelledby="ac-id-head-2-1"
                                                                                data-bs-parent="#general_accordion-d4c66cf">
                                                                                <div class="accordion-body">
                                                                                    <p class="tp-el-box-desc">
                                                                                        A startup or start-up is started
                                                                                        by individual founders or
                                                                                        entrepreneurs to search for a
                                                                                        repeatable and scalable business
                                                                                        model. A startup or start-up is
                                                                                        started by individual
                                                                                        founders...
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="accordion-item tp-el-box">
                                                                            <h2 class="accordion-header"
                                                                                id="ac-id-head-2-2">
                                                                                <button
                                                                                    class="accordion-button tp-el-box-title collapsed"
                                                                                    type="button"
                                                                                    data-bs-toggle="collapse"
                                                                                    data-bs-target="#ac-id-2-2"
                                                                                    aria-expanded="false"
                                                                                    aria-controls="ac-id-2-2">
                                                                                    Does my business really need
                                                                                    digital marketing?
                                                                                </button>
                                                                            </h2>
                                                                            <div id="ac-id-2-2"
                                                                                class="accordion-collapse collapse"
                                                                                aria-labelledby="ac-id-head-2-2"
                                                                                data-bs-parent="#general_accordion-d4c66cf">
                                                                                <div class="accordion-body">
                                                                                    <p class="tp-el-box-desc">
                                                                                        A startup or start-up is started
                                                                                        by individual founders or
                                                                                        entrepreneurs to search for a
                                                                                        repeatable and scalable business
                                                                                        model. A startup or start-up is
                                                                                        started by individual
                                                                                        founders...
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="accordion-item tp-el-box">
                                                                            <h2 class="accordion-header"
                                                                                id="ac-id-head-2-3">
                                                                                <button
                                                                                    class="accordion-button tp-el-box-title collapsed"
                                                                                    type="button"
                                                                                    data-bs-toggle="collapse"
                                                                                    data-bs-target="#ac-id-2-3"
                                                                                    aria-expanded="false"
                                                                                    aria-controls="ac-id-2-3">
                                                                                    Do you offer startup packages?
                                                                                </button>
                                                                            </h2>
                                                                            <div id="ac-id-2-3"
                                                                                class="accordion-collapse collapse"
                                                                                aria-labelledby="ac-id-head-2-3"
                                                                                data-bs-parent="#general_accordion-d4c66cf">
                                                                                <div class="accordion-body">
                                                                                    <p class="tp-el-box-desc">
                                                                                        A startup or start-up is started
                                                                                        by individual founders or
                                                                                        entrepreneurs to search for a
                                                                                        repeatable and scalable business
                                                                                        model. A startup or start-up is
                                                                                        started by individual
                                                                                        founders...
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-general-2" role="tabpanel"
                                aria-labelledby="nav-general-tab-2">
                                <style></style>
                                <div data-elementor-type="landing-page" data-elementor-id="1814"
                                    class="elementor elementor-1814">
                                    <section
                                        class="elementor-section elementor-top-section elementor-element elementor-element-fb5b2cc elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                                        data-id="fb5b2cc" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-no">
                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-624bcd2"
                                                data-id="624bcd2" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-9c31428 elementor-widget elementor-widget-tp-faq"
                                                        data-id="9c31428" data-element_type="widget"
                                                        data-widget_type="tp-faq.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="tp-accordion-style tp-el-section">
                                                                <div class="faq__tab-content tp-accordion">
                                                                    <div class="accordion" id="general_accordion-9c31428">
                                                                        <div class="accordion-item tp-el-box">
                                                                            <h2 class="accordion-header"
                                                                                id="ac-id-head-3-0">
                                                                                <button
                                                                                    class="accordion-button tp-el-box-title"
                                                                                    type="button"
                                                                                    data-bs-toggle="collapse"
                                                                                    data-bs-target="#ac-id-3-0"
                                                                                    aria-expanded="true"
                                                                                    aria-controls="ac-id-3-0">
                                                                                    Who is the typical Curious client?
                                                                                </button>
                                                                            </h2>
                                                                            <div id="ac-id-3-0"
                                                                                class="accordion-collapse collapse show"
                                                                                aria-labelledby="ac-id-head-3-0"
                                                                                data-bs-parent="#general_accordion-9c31428">
                                                                                <div class="accordion-body">
                                                                                    <p class="tp-el-box-desc">
                                                                                        A startup or start-up is started
                                                                                        by individual founders or
                                                                                        entrepreneurs to search for a
                                                                                        repeatable and scalable business
                                                                                        model. A startup or start-up is
                                                                                        started by individual
                                                                                        founders...
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="accordion-item tp-el-box">
                                                                            <h2 class="accordion-header"
                                                                                id="ac-id-head-3-1">
                                                                                <button
                                                                                    class="accordion-button tp-el-box-title collapsed"
                                                                                    type="button"
                                                                                    data-bs-toggle="collapse"
                                                                                    data-bs-target="#ac-id-3-1"
                                                                                    aria-expanded="false"
                                                                                    aria-controls="ac-id-3-1">
                                                                                    What are your typical timelines?
                                                                                </button>
                                                                            </h2>
                                                                            <div id="ac-id-3-1"
                                                                                class="accordion-collapse collapse"
                                                                                aria-labelledby="ac-id-head-3-1"
                                                                                data-bs-parent="#general_accordion-9c31428">
                                                                                <div class="accordion-body">
                                                                                    <p class="tp-el-box-desc">
                                                                                        A startup or start-up is started
                                                                                        by individual founders or
                                                                                        entrepreneurs to search for a
                                                                                        repeatable and scalable business
                                                                                        model. A startup or start-up is
                                                                                        started by individual
                                                                                        founders...
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="accordion-item tp-el-box">
                                                                            <h2 class="accordion-header"
                                                                                id="ac-id-head-3-2">
                                                                                <button
                                                                                    class="accordion-button tp-el-box-title collapsed"
                                                                                    type="button"
                                                                                    data-bs-toggle="collapse"
                                                                                    data-bs-target="#ac-id-3-2"
                                                                                    aria-expanded="false"
                                                                                    aria-controls="ac-id-3-2">
                                                                                    Do you offer flexible payment
                                                                                    terms?
                                                                                </button>
                                                                            </h2>
                                                                            <div id="ac-id-3-2"
                                                                                class="accordion-collapse collapse"
                                                                                aria-labelledby="ac-id-head-3-2"
                                                                                data-bs-parent="#general_accordion-9c31428">
                                                                                <div class="accordion-body">
                                                                                    <p class="tp-el-box-desc">
                                                                                        A startup or start-up is started
                                                                                        by individual founders or
                                                                                        entrepreneurs to search for a
                                                                                        repeatable and scalable business
                                                                                        model. A startup or start-up is
                                                                                        started by individual
                                                                                        founders...
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="accordion-item tp-el-box">
                                                                            <h2 class="accordion-header"
                                                                                id="ac-id-head-3-3">
                                                                                <button
                                                                                    class="accordion-button tp-el-box-title collapsed"
                                                                                    type="button"
                                                                                    data-bs-toggle="collapse"
                                                                                    data-bs-target="#ac-id-3-3"
                                                                                    aria-expanded="false"
                                                                                    aria-controls="ac-id-3-3">
                                                                                    Do you trade services for equity?
                                                                                </button>
                                                                            </h2>
                                                                            <div id="ac-id-3-3"
                                                                                class="accordion-collapse collapse"
                                                                                aria-labelledby="ac-id-head-3-3"
                                                                                data-bs-parent="#general_accordion-9c31428">
                                                                                <div class="accordion-body">
                                                                                    <p class="tp-el-box-desc">
                                                                                        A startup or start-up is started
                                                                                        by individual founders or
                                                                                        entrepreneurs to search for a
                                                                                        repeatable and scalable business
                                                                                        model. A startup or start-up is
                                                                                        started by individual
                                                                                        founders...
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="cta__area cta__style-3 p-relative z-index-1 pt-85 pb-60 grey-bg-7">
        <div class="cta__shape">
            <img class="cta__shape-17" src="assets/img/cta/7/cta-shape-1.png" alt="" />
            <img class="cta__shape-18" src="assets/img/cta/7/cta-shape-2.png" alt="" />
            <img class="cta__shape-19" src="assets/img/cta/7/cta-shape-3.png" alt="" />
            <img class="cta__shape-20" src="assets/img/cta/7/cta-shape-4.png" alt="" />
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-6 col-lg-6">
                    <div class="cta__wrapper-7">
                        <div class="section__title-wrapper-7 mb-60">
                            <span class="section__title-pre-7">Start Project Today</span>
                            <h3 class="section__title-7">
                                Take your vision to the next level.
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-lg-6">
                    <div class="cta__btn-wrapper-7 d-xl-flex align-items-center mb-40">
                        <a href="{{ asset('get-started') }}" class=" tp-cta-btn-yellow mr-20 mb-20">
                            Get Project <br />
                            Started Now <i class="fa-light fa-arrow-up-right"></i></a>
                        <a href="tel:+918390194975 " class="tp-cta-btn mb-20">Talk to Our<br />
                            Support Team <i class="fa-light fa-arrow-up-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>









@endsection
