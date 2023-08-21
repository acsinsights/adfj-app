@extends('frontend.layouts.app')
@section('title', 'Service Page')
@section('page')


    <section class="about__heading about__heading-overlay about__spacing include-bg jarallax"
        data-background="{{ asset('user-assets/img/about/about-breadcrumb.jpg') }}"
        style="background-image: url(http://127.0.0.1:8000/user-assets/img/about/about-breadcrumb.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10">
                    <div class="about__heading-content text-center p-relative z-index-1">
                        <span class="about__heading-subtitle">Services</span>
                        <h3 class="about__heading-title">Discover Our Story</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="services__area pt-70 pb-40 grey-bg-15 tp-el-section">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="tp-section-wrapper-3 mb-50 text-center tp-el-content">
                        <span class="tp-section-subtitle-3 tp-el-subtitle">Our Services</span>

                        <h2 class="tp-section-title-3 tp-el-title">
                            Our featured services
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                    <div class="services__item-15 d-sm-flex align-items-start transition-3 mb-30 wow fadeInUp tp-el-box"
                        data-wow-delay=".3s" data-wow-duration="1s"
                        style="
                  visibility: visible;
                  animation-duration: 1s;
                  animation-delay: 0.3s;
                  animation-name: fadeInUp;
                ">
                        <div class="services__icon-15 mr-45 tp-el-box-icon">
                            <div class="features__icon">
                                <span>
                                    <video autoplay="" loop="" muted="" plays-inline="">
                                        <source src="{{ asset('user-assets/img/features/music-production.mp4') }}"
                                            type="video/mp4" />
                                    </video>
                                </span>
                            </div>
                        </div>
                        <div class="services__content-15">
                            <h3 class="services__title-15 tp-el-box-title">
                                <a href="https://weblearnbd.net/wp/harry/services/pixel-perfect/">Music Production</a>
                            </h3>

                            <p class="tp-el-box-desc">
                                Creating original music tracks, recording, mixing, and mastering.
                            </p>

                            <div class="services__btn-15">
                                <a class="tp-el-box-btn" target="" rel="" href="{{ url('music') }}">
                                    View Portfolio
                                    <span>
                                        <svg width="32" height="10" viewBox="0 0 32 10" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M26.8667 1L31 5.00003L26.8667 9" stroke="currentColor"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M1 4.99878H31" stroke="currentColor" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                    <div class="services__item-15 d-sm-flex align-items-start transition-3 mb-30 wow fadeInUp tp-el-box"
                        data-wow-delay=".3s" data-wow-duration="1s"
                        style="
                  visibility: visible;
                  animation-duration: 1s;
                  animation-delay: 0.3s;
                  animation-name: fadeInUp;
                ">
                        <div class="services__icon-15 mr-45 tp-el-box-icon">
                            <div class="features__icon">
                                <span>
                                    <video autoplay="" loop="" muted="" plays-inline="">
                                        <source src="{{ asset('user-assets/img/features/video-production.mp4') }}"
                                            type="video/mp4" />
                                    </video>
                                </span>
                            </div>
                        </div>
                        <div class="services__content-15">
                            <h3 class="services__title-15 tp-el-box-title">
                                <a href="https://weblearnbd.net/wp/harry/services/pixel-perfect/">Video Production</a>
                            </h3>

                            <p class="tp-el-box-desc">
                                High-quality video visuals, filming, editing, and post-production.
                            </p>

                            <div class="services__btn-15">
                                <a class="tp-el-box-btn" target="" rel="" href="{{ url('video') }}">
                                    View Portfolio
                                    <span>
                                        <svg width="32" height="10" viewBox="0 0 32 10" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M26.8667 1L31 5.00003L26.8667 9" stroke="currentColor"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M1 4.99878H31" stroke="currentColor" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                    <div class="services__item-15 d-sm-flex align-items-start transition-3 mb-30 wow fadeInUp tp-el-box"
                        data-wow-delay=".3s" data-wow-duration="1s"
                        style="
                    visibility: visible;
                    animation-duration: 1s;
                    animation-delay: 0.3s;
                    animation-name: fadeInUp;
                  ">
                        <div class="services__icon-15 mr-45 tp-el-box-icon">
                            <div class="features__icon">
                                <span>
                                    <video autoplay="" loop="" muted="" plays-inline="">
                                        <source src="{{ asset('user-assets/img/features/audio-production.mp4') }}"
                                            type="video/mp4" />
                                    </video>
                                </span>
                            </div>
                        </div>
                        <div class="services__content-15">
                            <h3 class="services__title-15 tp-el-box-title">
                                <a href="https://weblearnbd.net/wp/harry/services/pixel-perfect/">Audio Engineering</a>
                            </h3>

                            <p class="tp-el-box-desc">
                                Professional sound design, editing, and post-production <br> services.
                            </p>

                            <div class="services__btn-15">
                                <a class="tp-el-box-btn" target="" rel="" href="{{ url('music') }}">
                                    View Portfolio
                                    <span>
                                        <svg width="32" height="10" viewBox="0 0 32 10" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M26.8667 1L31 5.00003L26.8667 9" stroke="currentColor"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M1 4.99878H31" stroke="currentColor" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                    <div class="services__item-15 d-sm-flex align-items-start transition-3 mb-30 wow fadeInUp tp-el-box"
                        data-wow-delay=".3s" data-wow-duration="1s"
                        style="
                  visibility: visible;
                  animation-duration: 1s;
                  animation-delay: 0.3s;
                  animation-name: fadeInUp;
                ">
                        <div class="services__icon-15 mr-45 tp-el-box-icon">

                            <div class="features__icon">
                                <span>
                                    <video autoplay="" loop="" muted="" plays-inline="">
                                        <source src="{{ asset('user-assets/img/features/graphic-production.mp4') }}"
                                            type="video/mp4" />
                                    </video>
                                </span>
                            </div>

                        </div>
                        <div class="services__content-15">
                            <h3 class="services__title-15 tp-el-box-title">
                                <a href="https://weblearnbd.net/wp/harry/services/pixel-perfect/">Graphic Design</a>
                            </h3>

                            <p class="tp-el-box-desc">
                                Eye-catching visuals, logo design, album covers, and promotional materials.
                            </p>

                            <div class="services__btn-15">
                                <a class="tp-el-box-btn" target="" rel="" href="{{ url('graphics') }}">
                                    View Portfolio
                                    <span>
                                        <svg width="32" height="10" viewBox="0 0 32 10" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M26.8667 1L31 5.00003L26.8667 9" stroke="currentColor"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M1 4.99878H31" stroke="currentColor" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- portfolio area start -->
    <section class="portfolio__area p-relative portfolio__overlay pt-50 pb-90 fix">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="tp-section-wrapper-3 mb-60 text-center">
                        <span class="tp-section-subtitle-3">Have A Look </span>
                        <h3 class="tp-section-title-3">Curated Media Showcase.</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xxl-12">
                    <div class="portfolio__slider">
                        <div class="portfolio__slider-active">
                            @foreach ($posts as $post)
                                @if ($post->featured_post == 1)
                                    <div class="portfolio__item-3 transition-3 wow fadeInUp" data-wow-delay=".3s"
                                        data-wow-duration="1s">
                                        <a href="{{ $post->status == 1 ? "$post->hypelinks" : 'javascript: void(0);' }}">
                                            <div class="portfolio__thumb-3 w-img"
                                                data-background="{{ $post->cover ? asset('cover/' . $post->cover) : '' }}">
                                            </div>

                                            <div class="portfolio__content-3 transition-3">
                                                <div class="portfolio__tag-3">
                                                    <a
                                                        href="{{ $post->status == 1 ? "$post->hypelinks" : 'javascript: void(0);' }}">{{ $post->title }}</a>
                                                </div>
                                                <h3 class="portfolio__title-3">
                                                    <a
                                                        href="{{ $post->status == 1 ? "$post->hypelinks" : 'javascript: void(0);' }}">{{ $post->author }}</a>
                                                </h3>
                                                <div class="portfolio__meta-3 transition-3">

                                                    <span>
                                                        <svg width="12" height="15" viewBox="0 0 12 15"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M10.4286 6.40909C10.4286 10.2273 5.71429 13.5 5.71429 13.5C5.71429 13.5 1 10.2273 1 6.40909C1 5.10712 1.49668 3.85847 2.38078 2.93784C3.26488 2.01721 4.46398 1.5 5.71429 1.5C6.96459 1.5 8.16369 2.01721 9.04779 2.93784C9.93189 3.85847 10.4286 5.10712 10.4286 6.40909Z"
                                                                stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                            <path
                                                                d="M5.71401 8.04568C6.58188 8.04568 7.28544 7.31305 7.28544 6.40931C7.28544 5.50557 6.58188 4.77295 5.71401 4.77295C4.84613 4.77295 4.14258 5.50557 4.14258 6.40931C4.14258 7.31305 4.84613 8.04568 5.71401 8.04568Z"
                                                                stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </svg>
                                                        {{ $post->location }}
                                                    </span>
                                                    <span>
                                                        <svg width="13" height="15" viewBox="0 0 13 15"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M4 1.5V3.3" stroke="white" stroke-width="1.5"
                                                                stroke-miterlimit="10" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                            <path d="M8.80029 1.5V3.3" stroke="white" stroke-width="1.5"
                                                                stroke-miterlimit="10" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                            <path d="M1.30029 5.75415H11.5003" stroke="white"
                                                                stroke-width="1.5" stroke-miterlimit="10"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                            <path
                                                                d="M11.8 5.40015V10.5001C11.8 12.3001 10.9 13.5001 8.8 13.5001H4C1.9 13.5001 1 12.3001 1 10.5001V5.40015C1 3.60015 1.9 2.40015 4 2.40015H8.8C10.9 2.40015 11.8 3.60015 11.8 5.40015Z"
                                                                stroke="white" stroke-width="1.2" stroke-miterlimit="10"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M8.61702 8.51997H8.62241" stroke="white"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                            <path d="M8.61653 10.32H8.62192" stroke="white"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                            <path d="M6.39729 8.51997H6.40268" stroke="white"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                            <path d="M6.39729 10.32H6.40268" stroke="white"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                            <path d="M4.17659 8.51997H4.18198" stroke="white"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                            <path d="M4.17659 10.32H4.18198" stroke="white"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </svg>
                                                        {{ $post->date }}
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


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
                        <a href="{{ asset('get-started') }}" class=" tp-cta-btn-yellow mr-20 mb-20">
                            Get Project <br />
                            Started Now <i class="fa-light fa-arrow-up-right"></i></a>
                        <a href="tel:+918390194975 " class="tp-cta-btn mb-20">Talk to Our <br />
                            Support Team <i class="fa-light fa-arrow-up-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cta area end -->



    <!-- Start of HubSpot Embed Code -->
    <script type="text/javascript" id="hs-script-loader" async defer src="//js-na1.hs-scripts.com/40057864.js"></script>
    <!-- End of HubSpot Embed Code -->
    </main>
@endsection
