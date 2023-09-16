@extends('frontend.layouts.app')
@section('title', 'Graphic')
@section('page')


    <main>
        <!-- about top area start -->


        <section class="breadcrumb__area breadcrumb__style-4 breadcrumb__spacing include-bg grey-bg-4"
            data-background="{{ asset('user-assets/img/portfolio/breadcrumb/graphics-portfolio-banner.jpg') }}"
            style="background-image: url(&quot;assets/img/portfolio/breadcrumb/graphics-portfolio-banner.jpg&quot;);">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-xl-7 col-lg-9">
                        <div class="breadcrumb__content p-relative z-index-1">
                            {{-- <div class="breadcrumb__video mb-30">
                            <a href="https://www.youtube.com/watch?v=LA4hnu1OM7k"
                                class="breadcrumb__video-btn popup-video">
                                <svg width="14" height="18" viewBox="0 0 18 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18 11L0 21.3923V0.607696L18 11Z" fill="currentColor"></path>
                                </svg>
                            </a>
                        </div> --}}

                            <h3 style="font-size: 4.5rem;color:#fff;" class="breadcrumb__title">
                                Artistic Mastery
                            </h3>
                            {{-- <span style="color: black" class="about__heading-subtitle">Artistic Mastery</span> --}}

                        </div>
                    </div>
                </div>
            </div>
        </section>

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
                            <p>  Discover pricing plans meticulously crafted to empower creators and artists, fostering content consistency, addressing financial hurdles, and providing a holistic creative solution at AdFJ Studios.</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        {{-- <section class="about__heading about__heading-overlay about__spacing include-bg jarallax"
            data-background="{{ asset('user-assets/img/about/about-breadcrumb.jpg') }}"
            style="background-image: url(http://127.0.0.1:8000/user-assets/img/about/about-breadcrumb.jpg);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-10">
                        <div class="about__heading-content text-center p-relative z-index-1">
                            <span class="about__heading-subtitle">Graphics</span>
                            <h3 class="about__heading-title">Discover Our Story</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- about top area end -->

        <section class="portfolio__area pb-75 p-relative fix tp-el-section">
            <div class="portfolio__shape">
                <img decoding="async" class="portfolio__shape-20"

                    src="{{ asset('user-assets/img/portfolio/masonary/shape/circle-1.png') }}"
                    alt="adfj-studios">
                <img decoding="async" class="portfolio__shape-21"
                src="{{ asset('user-assets/img/portfolio/masonary/shape/polygon-green.png') }}"
                    alt="adfj-studios">
                <img decoding="async" class="portfolio__shape-22"
                src="{{ asset('user-assets/img/portfolio/masonary/shape/polygon-pink.png') }}"
                    alt="adfj-studios">
                <img decoding="async" class="portfolio__shape-23"
                src="{{ asset('user-assets/img/portfolio/masonary/shape/polygon-yellow.png') }}"
                    alt="adfj-studios">
            </div>
            <div class=" mt-50  container-fluid tp-gx-20">


                <!-- filter button -->
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="portfolio__masonary-btn text-center mb-40">
                            <div class="masonary-menu filter-button-group tp-el-mas-btn">

                                <button data-filter="*" class="active tp-el-mas-btn">
                                    All Project
                                </button>
                                @foreach ($stypes as $st)
                                    @if ($st->pservices_id == 3)
                                        <button data-filter=".{{ $st->slug }}">
                                            {{ $st->stype_name }}
                                        </button>
                                    @endif
                                @endforeach
                                {{-- <button data-filter=".music-artwork">
                                    Music Artwork
                                </button>

                                <button data-filter=".movie-poster">
                                    Movie Poster
                                </button>

                                <button data-filter=".u-tube-thumbnail">
                                    Youtube Thumbnail
                                </button> --}}

                                {{-- <button data-filter=".illustration">
                                    Illustration
                                </button> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row galley-space tp-gx-20 grid" style="position: relative; height: 1799.76px;">
                    @foreach ($posts as $pt)
                        @if ($pt->serviceid == 3)
                            <div class="col-xl-4 col-lg-6 col-md-6 col-12 tp-portfolio grid-item {{ $pt->stypes->slug }}"
                                style="position: absolute; left: 0%; top: 537px;">
                                <div class="portfolio__grid-item mb-20 tp-el-box">
                                    <div class="portfolio__grid-thumb tp-protfolio-masonary w-img fix tp-img-reveal tp-img-reveal-item"
                                        data-fx="24" data-meta-tag="{{ $pt->author }}" data-title="{{ $pt->title }}">
                                        <a href="{{ $pt->hypelinks }}">
                                            <img width="455" height="500" src="posts/{{ $pt->media }}"
                                                class="attachment-full size-full" alt="" decoding="async"
                                                loading="lazy">
                                        </a>

                                        <div class="tp-img-reveal-wrapper">
                                            <div class="tp-img-reveal-wrapper__inner" style="overflow: hidden;">
                                                <div class="tp-img-reveal-wrapper__img" style="background-image:url()">
                                                    <div class="portfolio__hover-wrapper tp-el-box">
                                                        <h4 class="portfolio__hover-title tp-el-box-title">
                                                            {{ $pt->title }}
                                                        </h4>
                                                        <div class="portfolio__hover-category tp-el-box-tag">
                                                            <span>
                                                                <a href="#">{{ $pt->author }}</a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        <!-- cta area start -->
        <section class="cta__area cta__style-3 p-relative z-index-1 p-spacing pt-85 pb-60 grey-bg-7">
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
                            <a href="{{ asset('pricing-plan') }}" class=" tp-cta-btn-yellow mr-20 mb-20">
                               See Pricing <br> Plans
                               <i class="fa-light fa-arrow-up-right"></i></a>
                            <a href="{{ asset('get-started') }}" class="tp-cta-btn mb-20">Get Project <br /> Started Now
                              <i class="fa-light fa-arrow-up-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- cta area end -->

        <section class="faq__area faq__style-3 p-relative z-index-1 pt-80 pb-40 tp-el-section">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-5 col-xl-5 col-lg-6">
                        <div class="faq__wrapper">
                            <div class="section__title-wrapper-7 mb-60 tp-el-content">
                                <span class="section__title-pre-7 tp-el-subtitle">Common Questions
                                </span>

                                <h2 class="section__title-7 tp-el-title">
                                    Frequently <br />
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
                                                                                        How does AdFJ Studios cater to the
                                                                                        unique needs of the media production
                                                                                        industry?
                                                                                    </button>
                                                                                </h2>
                                                                                <div id="collapseOne-0"
                                                                                    class="accordion-collapse collapse"
                                                                                    aria-labelledby="headingOne-0"
                                                                                    data-bs-parent="#general_accordion-a8b120e">
                                                                                    <div class="accordion-body">
                                                                                        <p class="tp-el-box-desc">
                                                                                            AdFJ Studios understands the
                                                                                            specific requirements of the media
                                                                                            production industry and offers
                                                                                            tailor-made solutions to meet those
                                                                                            needs. We have in-depth knowledge of
                                                                                            industry standards and trends and
                                                                                            ensure our services fit the
                                                                                            ever-changing landscape. Our team of
                                                                                            skilled professionals combine their
                                                                                            expertise with state-of-the-art
                                                                                            technology to deliver exceptional
                                                                                            media productions. Whether music,
                                                                                            audio or video, AdFJ Studios is
                                                                                            committed to providing top quality
                                                                                            services tailored to the unique
                                                                                            demands of the media production
                                                                                            industry. (Original) AdFJ Studios
                                                                                            understands the specific
                                                                                            requirements of the media production
                                                                                            industry and offers customized
                                                                                            solutions to meet those needs. We
                                                                                            have a deep understanding of the
                                                                                            industry' s standards and trends,
                                                                                            ensuring that our services align
                                                                                            with the ever-changing landscape.
                                                                                            Our team of skilled professionals
                                                                                            combines their expertise with
                                                                                            state-of-the-art technology to
                                                                                            deliver exceptional media
                                                                                            productions. Whether it's music,
                                                                                            audio, or video, AdFJ Studios is
                                                                                            dedicated to providing top-quality
                                                                                            services tailored to the unique
                                                                                            demands of the media production
                                                                                            industry.


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
                                                                                        Can AdFJ Studios handle video production
                                                                                        for the entertainment industry?
                                                                                    </button>
                                                                                </h2>
                                                                                <div id="collapseOne-1"
                                                                                    class="accordion-collapse collapse"
                                                                                    aria-labelledby="headingOne-1"
                                                                                    data-bs-parent="#general_accordion-a8b120e">
                                                                                    <div class="accordion-body">
                                                                                        <p class="tp-el-box-desc">
                                                                                            Absolutely! AdFJ Studios specializes
                                                                                            in video visuals production for the
                                                                                            entertainment industry. We provide
                                                                                            end-to-end video production
                                                                                            services, including concept
                                                                                            development, scriptwriting, filming,
                                                                                            editing, visual effects, and
                                                                                            post-production. Whether it's a
                                                                                            music video, promotional content, or
                                                                                            a short film, our team of experts
                                                                                            will bring your vision to life.


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
                                                                                        What types of music and audio production
                                                                                        services does AdFJ Studios offer?
                                                                                    </button>
                                                                                </h2>
                                                                                <div id="collapseOne-2"
                                                                                    class="accordion-collapse collapse"
                                                                                    aria-labelledby="headingOne-2"
                                                                                    data-bs-parent="#general_accordion-a8b120e">
                                                                                    <div class="accordion-body">
                                                                                        <p class="tp-el-box-desc">
                                                                                            AdFJ Studios offers a wide range of
                                                                                            music and audio production services,
                                                                                            including recording, mixing,
                                                                                            mastering, sound design, voice-over
                                                                                            production, and music composition.
                                                                                            Whether you need a professional
                                                                                            studio for your band's album or
                                                                                            require high-quality audio
                                                                                            production for your podcast or
                                                                                            commercial, we've got you covered.


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



        </section>


    @endsection
