@extends('frontend.layouts.app')
@section('title', 'Video')
@section('page')



    <main>
        <section class="breadcrumb__area breadcrumb__style-4 breadcrumb__spacing include-bg grey-bg-4"
            data-background="{{ asset('user-assets/img/portfolio/breadcrumb/video-portfolio-banner.jpg') }}"
            style="background-image: url(&quot;assets/img/portfolio/breadcrumb/video-portfolio-banner.jpg&quot;);">
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
                            <h3 style="font-size: 5rem;color:#fff;" class="breadcrumb__title">
                                Visual Brilliance
                            </h3>
                            {{-- <span style="color: black" class="about__heading-subtitle">Visual Brilliance</span> --}}

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
                            <span class="section__title-pre-4">Unlock Your Visual Potential with AdFJ Studios</span>
                            <h3 class="section__title-4">Video Production Services</h3>
                        </div>
                    </div>
                    <div class="col-xxl-5 offset-xxl-1 col-xl-6 col-lg-6 col-md-6">
                        <div class="services__more-4 mb-65">
                            <p>Explore our comprehensive video production services that bring your creative vision to life.
                                From concept to final edit, we are your partners in storytelling, offering top-tier quality
                                and innovation to showcase your unique talent and vision. Explore our diverse portfolio and
                                let's create magic together.</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        {{--
        <div class="mt-60  text-center section__title-wrapper-9 mb-55">

            <h3 class="section__title-6">
                Our
                <span class="section__title-6-highlight about_title2">
                    Video
                    <svg width="201" height="11" viewBox="0 0 201 11" fill="none">
                        <path class="wow" fill-rule="evenodd" clip-rule="evenodd"
                            d="M9.05453 10.8839C6.20147 10.8982 3.21601 10.7537 1.01886 10.0285C0.864228 9.97744 0.711775 9.9189 0.581885 9.84837C0.517069 9.81318 0.434369 9.76251 0.354554 9.69171C0.281315 9.62675 0.155306 9.49652 0.0910472 9.29127C0.0147649 9.04755 0.05678 8.79832 0.178701 8.60172C0.281012 8.43673 0.415963 8.34474 0.491835 8.3C0.643502 8.21055 0.809844 8.16646 0.918957 8.14164C1.37074 8.03891 2.1664 7.9951 3.00131 7.96916C3.73866 7.94626 4.54731 7.93629 5.32252 7.92673C6.41386 7.91328 7.43888 7.90064 8.10528 7.85387C9.91746 7.72669 11.7311 7.59642 13.5455 7.4661C16.5831 7.24792 19.6228 7.02959 22.6612 6.82535C43.405 5.4309 64.1476 4.25838 84.9012 3.40104C73.7378 3.38875 62.5747 3.32145 51.4104 3.17052C51.416 3.1706 45.4792 3.12884 41.6005 3.07089C40.6265 3.05633 39.7745 3.04068 39.1697 3.02425C38.8685 3.01607 38.6225 3.00754 38.4517 2.99856C38.3692 2.99422 38.2904 2.98909 38.2282 2.98236C38.2053 2.97988 38.1474 2.97354 38.0855 2.95857L38.0844 2.95832C38.0711 2.95532 37.9518 2.92851 37.83 2.84812C37.7811 2.81585 37.5529 2.66179 37.4919 2.34084C37.4176 1.94937 37.6477 1.69174 37.7462 1.60578C37.8448 1.51977 37.941 1.48022 37.9717 1.46789C38.0145 1.4507 38.0506 1.44057 38.0712 1.43521C38.1129 1.42438 38.1486 1.41857 38.1675 1.41571C38.2082 1.40953 38.2494 1.40565 38.2822 1.40297C38.3513 1.39733 38.4421 1.39245 38.5506 1.38795C38.7702 1.37884 39.0963 1.36992 39.5405 1.36112C40.4307 1.34349 41.8145 1.32598 43.8129 1.30893C95.6756 0.866429 147.552 0.567935 199.42 0.727011C199.851 0.728333 200.199 1.07875 200.198 1.50969C200.197 1.94063 199.846 2.28891 199.415 2.28758C194.258 2.27177 189.1 2.26047 183.942 2.2534L183.92 3.66106L182.192 3.63353C181.25 3.61854 180.309 3.60364 179.368 3.58906C174.167 3.51003 168.967 3.45223 163.767 3.41078C163.222 3.408 162.677 3.4057 162.132 3.40394C115.603 3.25364 69.1944 5.26138 22.7659 8.38241C19.7301 8.58648 16.6978 8.80429 13.6633 9.02224C12.2771 9.12181 10.8905 9.22141 9.50289 9.31974C10.7075 9.30671 11.9031 9.26775 13.0333 9.23091L13.1891 9.22583C14.4995 9.18319 15.7267 9.14481 16.7461 9.15881C58.3184 9.72964 100.063 9.23542 141.577 7.09843C146.003 6.8706 150.426 6.56528 154.842 6.18681C156.349 6.05767 157.848 5.91563 159.336 5.72905C159.15 5.72103 158.962 5.71357 158.773 5.70663C157.597 5.66334 156.414 5.64093 155.518 5.62906C154.984 5.62199 154.531 5.61862 154.252 5.61655C154.079 5.61526 153.973 5.61447 153.956 5.6136C153.526 5.5908 153.196 5.22345 153.219 4.79311C153.241 4.36277 153.609 4.03241 154.039 4.05521C154.027 4.05456 154.147 4.05519 154.44 4.05734C154.709 4.05932 155.087 4.06264 155.539 4.06862C156.441 4.08058 157.638 4.10319 158.831 4.14711C160.019 4.19086 161.222 4.25633 162.13 4.35581C162.578 4.4049 162.987 4.46567 163.296 4.5455C163.442 4.58343 163.621 4.63898 163.777 4.72855C163.868 4.78076 164.318 5.05276 164.259 5.6086C164.218 5.99372 164.011 6.2781 163.764 6.46085C163.541 6.62524 163.29 6.70676 163.099 6.75371C162.9 6.80253 162.695 6.82981 162.53 6.84953C162.478 6.85577 162.431 6.86117 162.388 6.86611C162.279 6.87869 162.195 6.88834 162.117 6.9014C159.742 7.29996 157.348 7.53838 154.976 7.74169C150.542 8.12163 146.102 8.42818 141.657 8.65695C100.102 10.796 58.3231 11.2904 16.7247 10.7192C15.7485 10.7058 14.5597 10.7426 13.2399 10.7856L13.0778 10.7909C11.8097 10.8322 10.4348 10.877 9.05453 10.8839Z"
                            fill="currentColor" style="visibility: visible; animation-name: section-highlight;"></path>
                    </svg>
                </span>

            </h3>

        </div> --}}






        <section class="portfolio__area pb-75 p-relative fix tp-el-section">
            <div class="portfolio__shape">
                <img decoding="async" class="portfolio__shape-20"
                    src="{{ asset('user-assets/img/portfolio/masonary/shape/circle-1.png') }}" alt="adfj-studios">
                <img decoding="async" class="portfolio__shape-21"
                    src="{{ asset('user-assets/img/portfolio/masonary/shape/polygon-green.png') }}" alt="adfj-studios">
                <img decoding="async" class="portfolio__shape-22"
                    src="{{ asset('user-assets/img/portfolio/masonary/shape/polygon-pink.png') }}" alt="adfj-studios">
                <img decoding="async" class="portfolio__shape-23"
                    src="{{ asset('user-assets/img/portfolio/masonary/shape/polygon-yellow.png') }}" alt="adfj-studios">
            </div>
            <div class="container-fluid tp-gx-20">
                <div class="row">
                    <div class="col-xl-12">

                    </div>
                </div>

                <!-- filter button -->
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="portfolio__masonary-btn text-center mb-40">
                            <div class="masonary-menu filter-button-group tp-el-mas-btn">

                                <button data-filter="*" class="active tp-el-mas-btn">
                                    All Videos
                                </button>

                                @foreach ($stypes as $st)
                                    @if ($st->pservices_id == 2)
                                        <button data-filter=".{{ $st->slug }}">
                                            {{ $st->stype_name }}
                                        </button>
                                    @endif
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row galley-space tp-gx-20 grid" style="position: relative; height: 1799.76px;">
                    @foreach ($posts as $pt)
                        @if ($pt->serviceid == 2)
                            <div class="col-xl-4 col-lg-6 col-md-6 col-12 tp-portfolio grid-item {{ $pt->stypes->slug }}"
                                style="position: absolute; left: 0%; top: 537px;">
                                <div class="portfolio__grid-item mb-20 tp-el-box">
                                    <div class="portfolio__grid-thumb tp-protfolio-masonary w-img fix tp-img-reveal tp-img-reveal-item"
                                        data-fx="24" data-meta-tag="{{ $pt->author }}" data-title="{{ $pt->title }}">
                                        <div class="portfolio__grid-video">
                                            <a href="{{ $pt->hypelinks }}" tabindex="0">
                                            </a>
                                            <a href="{{ $pt->hypelinks }}"
                                                class="portfolio-play-btn popup-video tp-el-video-btn" tabindex="0">
                                                <svg width="18" height="22" viewBox="0 0 18 22" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M18 11L0 21.3923V0.607696L18 11Z" fill="currentColor"></path>
                                                </svg>
                                            </a>
                                        </div>
                                        <a href="{{ $pt->hypelinks }}">
                                            <img width="455" height="500" src="posts/{{ $pt->media }}"
                                                class="attachment-full size-full" alt="" decoding="async"
                                                loading="lazy">
                                        </a>

                                        <div class="tp-img-reveal-wrapper">
                                            <div class="tp-img-reveal-wrapper__inner" style="overflow: hidden;">
                                                <div class="tp-img-reveal-wrapper__img" style="background-image:url()">
                                                    <div class="portfolio__hover-wrapper tp-el-box">
                                                        <h4 class="portfolio__hover-title tp-el-box-title">Gul Marg </h4>
                                                        <div class="portfolio__hover-category tp-el-box-tag">
                                                            <span>
                                                                <a href="#">Gul Marg Vlog Video</a>
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



                    {{-- <div class="col-xl-4 col-lg-6 col-md-6 col-12 tp-portfolio grid-item vlogs"
                        style="position: absolute; left: 0%; top: 537px;">
                        <div class="portfolio__grid-item mb-20 tp-el-box">
                            <div class="portfolio__grid-thumb tp-protfolio-masonary w-img fix tp-img-reveal tp-img-reveal-item"
                                data-fx="24" data-meta-tag="Gul Marg Vlog Video" data-title="Gul Marg">
                                <div class="portfolio__grid-video"><a href="https://www.instagram.com/p/Ccos67BIgoK/"
                                        tabindex="0">
                                    </a><a href="https://www.youtube.com/watch?v=GpjvrCpYYlk"
                                        class="portfolio-play-btn popup-video tp-el-video-btn" tabindex="0">
                                        <svg width="18" height="22" viewBox="0 0 18 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18 11L0 21.3923V0.607696L18 11Z" fill="currentColor"></path>
                                        </svg>
                                    </a>
                                </div>
                                <a href="https://weblearnbd.net/wp/adfj-studios/portfolio/portfolio-details/">
                                    <img width="455" height="500"
                                        src="{{ asset('user-assets/img/graphic-portfolio/gul-marg.jpg') }}"
                                        class="attachment-full size-full" alt="" decoding="async"
                                        loading="lazy"> </a>

                                <div class="tp-img-reveal-wrapper">
                                    <div class="tp-img-reveal-wrapper__inner" style="overflow: hidden;">
                                        <div class="tp-img-reveal-wrapper__img" style="background-image:url()">
                                            <div class="portfolio__hover-wrapper tp-el-box">
                                                <h4 class="portfolio__hover-title tp-el-box-title">Gul Marg </h4>
                                                <div class="portfolio__hover-category tp-el-box-tag">
                                                    <span>
                                                        <a href="#">Gul Marg Vlog Video</a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}



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
                        <div class="cta__btn-wrapper-7 d-xl-flex align-items-center justify-content-end mb-40">
                            {{-- <a href="{{ asset('pricing-plan') }}" class=" tp-cta-btn-yellow mr-20 mb-20">
                               See Pricing <br> Plans
                               <i class="fa-light fa-arrow-up-right"></i></a> --}}
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
                                                                        <div class="accordion"
                                                                            id="general_accordion-a8b120e">
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
                                                                                            specific requirements of the
                                                                                            media
                                                                                            production industry and offers
                                                                                            tailor-made solutions to meet
                                                                                            those
                                                                                            needs. We have in-depth
                                                                                            knowledge of
                                                                                            industry standards and trends
                                                                                            and
                                                                                            ensure our services fit the
                                                                                            ever-changing landscape. Our
                                                                                            team of
                                                                                            skilled professionals combine
                                                                                            their
                                                                                            expertise with state-of-the-art
                                                                                            technology to deliver
                                                                                            exceptional
                                                                                            media productions. Whether
                                                                                            music,
                                                                                            audio or video, AdFJ Studios is
                                                                                            committed to providing top
                                                                                            quality
                                                                                            services tailored to the unique
                                                                                            demands of the media production
                                                                                            industry. (Original) AdFJ
                                                                                            Studios
                                                                                            understands the specific
                                                                                            requirements of the media
                                                                                            production
                                                                                            industry and offers customized
                                                                                            solutions to meet those needs.
                                                                                            We
                                                                                            have a deep understanding of the
                                                                                            industry' s standards and
                                                                                            trends,
                                                                                            ensuring that our services align
                                                                                            with the ever-changing
                                                                                            landscape.
                                                                                            Our team of skilled
                                                                                            professionals
                                                                                            combines their expertise with
                                                                                            state-of-the-art technology to
                                                                                            deliver exceptional media
                                                                                            productions. Whether it's music,
                                                                                            audio, or video, AdFJ Studios is
                                                                                            dedicated to providing
                                                                                            top-quality
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
                                                                                        Can AdFJ Studios handle video
                                                                                        production
                                                                                        for the entertainment industry?
                                                                                    </button>
                                                                                </h2>
                                                                                <div id="collapseOne-1"
                                                                                    class="accordion-collapse collapse"
                                                                                    aria-labelledby="headingOne-1"
                                                                                    data-bs-parent="#general_accordion-a8b120e">
                                                                                    <div class="accordion-body">
                                                                                        <p class="tp-el-box-desc">
                                                                                            Absolutely! AdFJ Studios
                                                                                            specializes
                                                                                            in video visuals production for
                                                                                            the
                                                                                            entertainment industry. We
                                                                                            provide
                                                                                            end-to-end video production
                                                                                            services, including concept
                                                                                            development, scriptwriting,
                                                                                            filming,
                                                                                            editing, visual effects, and
                                                                                            post-production. Whether it's a
                                                                                            music video, promotional
                                                                                            content, or
                                                                                            a short film, our team of
                                                                                            experts
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
                                                                                        What types of music and audio
                                                                                        production
                                                                                        services does AdFJ Studios offer?
                                                                                    </button>
                                                                                </h2>
                                                                                <div id="collapseOne-2"
                                                                                    class="accordion-collapse collapse"
                                                                                    aria-labelledby="headingOne-2"
                                                                                    data-bs-parent="#general_accordion-a8b120e">
                                                                                    <div class="accordion-body">
                                                                                        <p class="tp-el-box-desc">
                                                                                            AdFJ Studios offers a wide range
                                                                                            of
                                                                                            music and audio production
                                                                                            services,
                                                                                            including recording, mixing,
                                                                                            mastering, sound design,
                                                                                            voice-over
                                                                                            production, and music
                                                                                            composition.
                                                                                            Whether you need a professional
                                                                                            studio for your band's album or
                                                                                            require high-quality audio
                                                                                            production for your podcast or
                                                                                            commercial, we've got you
                                                                                            covered.


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
                                                                        <div class="accordion"
                                                                            id="general_accordion-d4c66cf">
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
                                                                        <div class="accordion"
                                                                            id="general_accordion-9c31428">
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








    </main>
@endsection
