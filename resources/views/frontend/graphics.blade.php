@extends('frontend.layouts.app')
@section('title', 'Graphic')
@section('page')


    <main>
        <!-- about top area start -->


        <section class="breadcrumb__area breadcrumb__style-4 breadcrumb__spacing include-bg grey-bg-4"
            data-background="{{ asset('user-assets/img/portfolio/breadcrumb/portfolio-breadcrumb-2.jpg') }}"
            style="background-image: url(&quot;assets/img/portfolio/breadcrumb/portfolio-breadcrumb-2.jpg&quot;);">
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

                            <h3 style="font-size: 4.5rem" class="breadcrumb__title">
                                Artistic Mastery
                            </h3>
                            {{-- <span style="color: black" class="about__heading-subtitle">Artistic Mastery</span> --}}

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
                    src="https://weblearnbd.net/wp/harry/wp-content/themes/harry/assets/img/portfolio/masonary/shape/circle-1.png"
                    alt="Harry">
                <img decoding="async" class="portfolio__shape-21"
                    src="https://weblearnbd.net/wp/harry/wp-content/themes/harry/assets/img/portfolio/masonary/shape/polygon-green.png"
                    alt="Harry">
                <img decoding="async" class="portfolio__shape-22"
                    src="https://weblearnbd.net/wp/harry/wp-content/themes/harry/assets/img/portfolio/masonary/shape/polygon-pink.png"
                    alt="Harry">
                <img decoding="async" class="portfolio__shape-23"
                    src="https://weblearnbd.net/wp/harry/wp-content/themes/harry/assets/img/portfolio/masonary/shape/polygon-yellow.png"
                    alt="Harry">
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
                    <div class="col-xl-4 col-lg-6 col-md-6 col-12 tp-portfolio grid-item youtube-thumbnail"
                        style="position: absolute; left: 0%; top: 537px;">
                        <div class="portfolio__grid-item mb-20 tp-el-box">
                            <div class="portfolio__grid-thumb tp-protfolio-masonary w-img fix tp-img-reveal tp-img-reveal-item"
                                data-fx="24" data-meta-tag="Gul Marg Vlog Video" data-title="Gul Marg">
                                <a href="https://weblearnbd.net/wp/harry/portfolio/portfolio-details/">
                                    <img width="455" height="500"
                                        src="{{ asset('user-assets/img/graphic-portfolio/gul-marg.jpg') }}"
                                        class="attachment-full size-full" alt="" decoding="async" loading="lazy">
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
                    <div class="col-xl-4 col-lg-6 col-md-6 col-12 tp-portfolio grid-item movie-poster"
                        style="position: absolute; left: 0%; top: 537px;">
                        <div class="portfolio__grid-item mb-20 tp-el-box">
                            <div class="portfolio__grid-thumb tp-protfolio-masonary w-img fix tp-img-reveal tp-img-reveal-item"
                                data-fx="24" data-meta-tag="Short Film Poster  " data-title="Cappuccino">

                                <a href="https://weblearnbd.net/wp/harry/portfolio/portfolio-details/">
                                    <img width="455" height="500"
                                        src="{{ asset('user-assets/img/graphic-portfolio/cappuccino.jpg') }}"
                                        class="attachment-full size-full" alt="" decoding="async" loading="lazy">
                                </a>

                                <div class="tp-img-reveal-wrapper">
                                    <div class="tp-img-reveal-wrapper__inner" style="overflow: hidden;">
                                        <div class="tp-img-reveal-wrapper__img" style="background-image:url()">
                                            <div class="portfolio__hover-wrapper tp-el-box">
                                                <h4 class="portfolio__hover-title tp-el-box-title">Cappuccino</h4>
                                                <div class="portfolio__hover-category tp-el-box-tag">
                                                    <span>
                                                        <a href="#">Short Film Poster</a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="col-xl-4 col-lg-6 col-md-6 col-12 tp-portfolio grid-item music-artwork"
                        style="position: absolute; left: 0%; top: 537px;">
                        <div class="portfolio__grid-item mb-20 tp-el-box">
                            <div class="portfolio__grid-thumb tp-protfolio-masonary w-img fix tp-img-reveal tp-img-reveal-item"
                                data-fx="24" data-meta-tag="Music Artwork " data-title="Ude">

                                <a href="https://weblearnbd.net/wp/harry/portfolio/portfolio-details/">
                                    <img width="455" height="500"
                                        src="{{ asset('user-assets/img/graphic-portfolio/ude.jpg') }}"
                                        class="attachment-full size-full" alt="" decoding="async"
                                        loading="lazy">
                                </a>

                                <div class="tp-img-reveal-wrapper">
                                    <div class="tp-img-reveal-wrapper__inner" style="overflow: hidden;">
                                        <div class="tp-img-reveal-wrapper__img" style="background-image:url()">
                                            <div class="portfolio__hover-wrapper tp-el-box">
                                                <h4 class="portfolio__hover-title tp-el-box-title">Music ArtWork </h4>
                                                <div class="portfolio__hover-category tp-el-box-tag">
                                                    <span>
                                                        <a href="#">Ude</a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="col-xl-4 col-lg-6 col-md-6 col-12 tp-portfolio grid-item music-artwork"
                        style="position: absolute; left: 0%; top: 537px;">
                        <div class="portfolio__grid-item mb-20 tp-el-box">
                            <div class="portfolio__grid-thumb tp-protfolio-masonary w-img fix tp-img-reveal tp-img-reveal-item"
                                data-fx="24" data-meta-tag="Movie Poster" data-title="Lekhak">

                                <a href="https://weblearnbd.net/wp/harry/portfolio/portfolio-details/">
                                    <img width="455" height="500"
                                        src="{{ asset('user-assets/img/graphic-portfolio/lekhak.jpg') }}"
                                        class="attachment-full size-full" alt="" decoding="async"
                                        loading="lazy"> </a>

                                <div class="tp-img-reveal-wrapper">
                                    <div class="tp-img-reveal-wrapper__inner" style="overflow: hidden;">
                                        <div class="tp-img-reveal-wrapper__img" style="background-image:url()">
                                            <div class="portfolio__hover-wrapper tp-el-box">
                                                <h4 class="portfolio__hover-title tp-el-box-title">Lekhak</h4>
                                                <div class="portfolio__hover-category tp-el-box-tag">
                                                    <span>
                                                        <a href="#">Movie Poster</a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>







                    <div class="col-xl-4 col-lg-6 col-md-6 col-12 tp-portfolio grid-item music-artwork"
                        style="position: absolute; left: 33.3198%; top: 1261px;">
                        <div class="portfolio__grid-item mb-20 tp-el-box">
                            <div class="portfolio__grid-thumb tp-protfolio-masonary w-img fix tp-img-reveal tp-img-reveal-item"
                                data-fx="24" data-meta-tag="Music Art Work" data-title="Tum Yaad Aaye" style="">

                                <a href="https://weblearnbd.net/wp/harry/portfolio/portfolio-details/">
                                    <img width="455" height="500"
                                        src="{{ asset('user-assets/img/graphic-portfolio/tum-yaad-aaye.jpg') }}"
                                        class="attachment-full size-full" alt="" decoding="async"
                                        loading="lazy"> </a>

                                <div class="tp-img-reveal-wrapper" style="top: 395.4px; left: 780px; opacity: 0;">
                                    <div class="tp-img-reveal-wrapper__inner"
                                        style="overflow: hidden; transform: translate(100%, 0%) matrix(1, 0, 0, 1, 0, 0);">
                                        <div class="tp-img-reveal-wrapper__img"
                                            style="background-image: url(&quot;&quot;); transform: translate(-100%, 0%) matrix(1, 0, 0, 1, 0, 0);">
                                            <div class="portfolio__hover-wrapper tp-el-box">
                                                <h4 class="portfolio__hover-title tp-el-box-title"> Music Art Work</h4>
                                                <div class="portfolio__hover-category tp-el-box-tag">
                                                    <span>
                                                        <a href="#">Tum Yaad Aaye</a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-6 col-12 tp-portfolio grid-item movie-poster"
                        style="position: absolute; left: 0%; top: 537px;">
                        <div class="portfolio__grid-item mb-20 tp-el-box">
                            <div class="portfolio__grid-thumb tp-protfolio-masonary w-img fix tp-img-reveal tp-img-reveal-item"
                                data-fx="24" data-meta-tag="Movie Poster" data-title="Vimukti">
                                <a href="https://weblearnbd.net/wp/harry/portfolio/portfolio-details/">
                                    <img width="455" height="500"
                                        src="{{ asset('user-assets/img/graphic-portfolio/vimukti.jpg') }}"
                                        class="attachment-full size-full" alt="" decoding="async"
                                        loading="lazy"> </a>

                                <div class="tp-img-reveal-wrapper">
                                    <div class="tp-img-reveal-wrapper__inner" style="overflow: hidden;">
                                        <div class="tp-img-reveal-wrapper__img" style="background-image:url()">
                                            <div class="portfolio__hover-wrapper tp-el-box">
                                                <h4 class="portfolio__hover-title tp-el-box-title">Movie Poster</h4>
                                                <div class="portfolio__hover-category tp-el-box-tag">
                                                    <span>
                                                        <a href="#">Vimukti</a>
                                                    </span>
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


    @endsection
