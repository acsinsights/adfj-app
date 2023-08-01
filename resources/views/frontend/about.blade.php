@extends('frontend.layouts.app')
@section('title', 'About')
@section('page')



    <main>
        <!-- about top area start -->
        <section class="about__heading about__heading-overlay about__spacing include-bg jarallax"
            data-background="{{ asset('user-assets/img/about/about-breadcrumb.jpg') }}">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-10">
                        <div class="about__heading-content text-center p-relative z-index-1">
                            <span class="about__heading-subtitle">About us</span>
                            <h3 class="about__heading-title">Discover Our Story</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about top area end -->

        <!-- about text area start -->
        <section class="about__text pt-115 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4">
                        <div class="about__text-wrapper wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                            <h3 class="about__text-title">
                                Powerful Beginning, <br />
                                Impressive Journey.
                            </h3>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8">
                        <div class="about__text wow fadeInUp" data-wow-delay=".6s" data-wow-duration="1s">
                            <p>
                                Welcome to AdFJ Studios, the ultimate destination for all your
                                media production needs! Founded by the visionary Adarsh Jadhav
                                in 2017, our studio has rapidly evolved from a humble home
                                setup to a state-of-the-art production house. With a diverse
                                range of services, including music and audio production as
                                well as captivating video visuals, we specialize in serving
                                the dynamic and ever-evolving entertainment industry.
                            </p>

                            <p>
                                Join us on a journey of creativity and excellence, where your
                                vision is transformed into stunning reality.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about text area end -->


        <!-- award area start -->
        <section class="award__area pt-30 pb-120 white-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="section__title-wrapper mb-55 text-center">
                            <h3 class="section__title">Our Awards.</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="award__item-wrapper-9 award__style-2">
                            <div class="award__item-9 p-relative wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                                <div class="row align-items-center">
                                    <div class="col-xl-3 col-lg-3 col-md-3">
                                        <div class="award__topic">
                                            <p>MCAI Awards 2018</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-7 col-lg-7 col-md-7">
                                        <div class="award__content-9">
                                            <h3 class="award__title-9">
                                                <a href="javascript:void(0)" class="tp-img-reveal tp-img-reveal-item"
                                                    data-img="{{ asset('user-assets/img/award/9/award-1.jpg') }}"
                                                    data-fx="1">Award for Best Music Composer & TV Shows Background Score</a>
                                            </h3>
                                            <p>Associated with AdFJ Studios</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-lg-2 col-md-2">
                                        <div class="award__btn-9 text-md-end">
                                            <a href="javascript:void(0)" class="career-link-btn">
                                                <svg width="22" height="18" viewBox="0 0 22 18" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12.7334 1L21 9.00007L12.7334 17" stroke="currentColor"
                                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M0.999999 8.99756H21" stroke="currentColor" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="award__item-9 p-relative wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1s">
                                <div class="row align-items-center">
                                    <div class="col-xl-3 col-lg-3 col-md-3">
                                        <div class="award__topic">
                                            <p>
                                                CIFA FilmFare 2017 Awards</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-7 col-lg-7 col-md-7">
                                        <div class="award__content-9">
                                            <h3 class="award__title-9">
                                                <a href="javascript:void(0)" class="tp-img-reveal tp-img-reveal-item"
                                                    data-img="{{ asset('user-assets/img/award/9/award-2.jpg') }}"
                                                    data-fx="1">Achieved Filmfare Award For My Own Composed Song.</a>
                                            </h3>
                                            <p>Associated with AdFJ Studios</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-lg-2 col-md-2">
                                        <div class="award__btn-9 text-md-end">
                                            <a href="javascript:void(0)" class="career-link-btn">
                                                <svg width="22" height="18" viewBox="0 0 22 18" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12.7334 1L21 9.00007L12.7334 17" stroke="currentColor"
                                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M0.999999 8.99756H21" stroke="currentColor" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="award__item-9 p-relative wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                                <div class="row align-items-center">
                                    <div class="col-xl-3 col-lg-3 col-md-3">
                                        <div class="award__topic">
                                            <p>Art direction 2021</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-7 col-lg-7 col-md-7">
                                        <div class="award__content-9">
                                            <h3 class="award__title-9">
                                                <a href="javascript:void(0)" class="tp-img-reveal tp-img-reveal-item"
                                                    data-img="{{ asset('user-assets/img/award/9/award-3.jpg') }}"
                                                    data-fx="1">Webby's, Site of the Year</a>
                                            </h3>
                                            <p>Runner Up - “ Decor of the week “</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-lg-2 col-md-2">
                                        <div class="award__btn-9 text-md-end">
                                            <a href="javascript:void(0)" class="career-link-btn">
                                                <svg width="22" height="18" viewBox="0 0 22 18" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12.7334 1L21 9.00007L12.7334 17" stroke="currentColor"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M0.999999 8.99756H21" stroke="currentColor"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="award__item-9 p-relative wow fadeInUp" data-wow-delay=".9s"
                                data-wow-duration="1s">
                                <div class="row align-items-center">
                                    <div class="col-xl-3 col-lg-3 col-md-3">
                                        <div class="award__topic">
                                            <p>CSS Design 2018</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-7 col-lg-7 col-md-7">
                                        <div class="award__content-9">
                                            <h3 class="award__title-9">
                                                <a href="javascript:void(0)" class="tp-img-reveal tp-img-reveal-item"
                                                    data-img="assets/img/award/9/award-4.jpg" data-fx="1">Awwwards site
                                                    of the day</a>
                                            </h3>
                                            <p>Runner Up - “ Decor of the week “</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-lg-2 col-md-2">
                                        <div class="award__btn-9 text-md-end">
                                            <a href="javascript:void(0)" class="career-link-btn">
                                                <svg width="22" height="18" viewBox="0 0 22 18" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12.7334 1L21 9.00007L12.7334 17" stroke="currentColor"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M0.999999 8.99756H21" stroke="currentColor"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- award area end -->

        <!-- faq area start -->
        <section class="faq__area p-relative">
            <div class="faq__video" data-background="{{ asset('user-assets/img/faq/faq-img.jpg') }}">
                <div class="faq__video-btn">
                    <a href="https://www.youtube.com/watch?v=3dXzH-quoTE" class="tp-pulse-border popup-video">
                        <svg width="18" height="22" viewBox="0 0 18 22" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M18 11L0 21.3923V0.607696L18 11Z" fill="currentColor" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row justify-content-end">
                    <div class="col-xxl-7 col-xl-7 col-lg-7">
                        <div class="faq__wrapper-2 faq__gradient-border faq__style-2 tp-accordion pl-160">
                            <div class="faq__title-wrapper">
                                <span class="faq__title-pre">Experience the Power of Media Production</span>
                                <h3 class="faq__title">
                                    Explore our Smart and Flexible Services.
                                </h3>
                            </div>
                            <div class="accordion" id="faqaccordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            How does AdFJ Studios cater to the unique needs of the
                                            media production industry?
                                            <span class="accordion-btn"></span>
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse"
                                        aria-labelledby="headingOne" data-bs-parent="#faqaccordion">
                                        <div class="accordion-body">
                                            <p>
                                                AdFJ Studios understands the specific requirements of
                                                the media production industry and offers tailor-made
                                                solutions to meet those needs. We have in-depth
                                                knowledge of industry standards and trends and ensure
                                                our services fit the ever-changing landscape. Our team
                                                of skilled professionals combine their expertise with
                                                state-of-the-art technology to deliver exceptional
                                                media productions. Whether music, audio or video, AdFJ
                                                Studios is committed to providing top quality services
                                                tailored to the unique demands of the media production
                                                industry. (Original) AdFJ Studios understands the
                                                specific requirements of the media production industry
                                                and offers customized solutions to meet those needs.
                                                We have a deep understanding of the industry' s
                                                standards and trends, ensuring that our services align
                                                with the ever-changing landscape. Our team of skilled
                                                professionals combines their expertise with
                                                state-of-the-art technology to deliver exceptional
                                                media productions. Whether it's music, audio, or
                                                video, AdFJ Studios is dedicated to providing
                                                top-quality services tailored to the unique demands of
                                                the media production industry.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            Can AdFJ Studios handle video production for the
                                            entertainment industry?
                                            <span class="accordion-btn"></span>
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#faqaccordion">
                                        <div class="accordion-body">
                                            <p>
                                                Absolutely! AdFJ Studios specializes in video visuals
                                                production for the entertainment industry. We provide
                                                end-to-end video production services, including
                                                concept development, scriptwriting, filming, editing,
                                                visual effects, and post-production. Whether it's a
                                                music video, promotional content, or a short film, our
                                                team of experts will bring your vision to life.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            What types of music and audio production services does
                                            AdFJ Studios offer?
                                            <span class="accordion-btn"></span>
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#faqaccordion">
                                        <div class="accordion-body">
                                            <p>
                                                AdFJ Studios offers a wide range of music and audio
                                                production services, including recording, mixing,
                                                mastering, sound design, voice-over production, and
                                                music composition. Whether you need a professional
                                                studio for your band's album or require high-quality
                                                audio production for your podcast or commercial, we've
                                                got you covered.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- faq area end -->



    @endsection
