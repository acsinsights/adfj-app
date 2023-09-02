@extends('frontend.layouts.app')
@section('title', 'Music ')
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

                            <h3 style="font-size: 5rem" class="breadcrumb__title">
                                Melody Showcase
                            </h3>

                            {{-- <span style="color: black" class="about__heading-subtitle">Melody Showcase</span> --}}

                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- <section class="about__heading about__heading-overlay about__spacing include-bg jarallax"
            data-background="{{ asset('user-assets/img/about/about-breadcrumb.jpg') }}">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-10">
                        <div class="about__heading-content text-center p-relative z-index-1">
                            <h3 class="about__heading-title">Music Production Portfolio</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- about top area end -->


        {{-- <div class="audio-row">


            <div class="audio-container">
                <iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay"
                    src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/1557216982&color=%23eb1971&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
                <div
                    style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;">
                    <a href="https://soundcloud.com/the-dream-chimney" title="Dream Chimney" target="_blank"
                        style="color: #cccccc; text-decoration: none;">Dream Chimney</a> · <a
                        href="https://soundcloud.com/the-dream-chimney/dc-promo-tracks-1198-give-me-your-love"
                        title="DC Promo Tracks: Luke Delite &amp; Michelle Weeks &quot;Give Me Your Love&quot;"
                        target="_blank" style="color: #cccccc; text-decoration: none;">DC Promo Tracks: Luke Delite &amp;
                        Michelle Weeks &quot;Give Me Your Love&quot;</a>
                </div>

            </div>
            <div class="audio-container">
                <iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay"
                    src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/1557216982&color=%23eb1971&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
                <div
                    style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;">
                    <a href="https://soundcloud.com/the-dream-chimney" title="Dream Chimney" target="_blank"
                        style="color: #cccccc; text-decoration: none;">Dream Chimney</a> · <a
                        href="https://soundcloud.com/the-dream-chimney/dc-promo-tracks-1198-give-me-your-love"
                        title="DC Promo Tracks: Luke Delite &amp; Michelle Weeks &quot;Give Me Your Love&quot;"
                        target="_blank" style="color: #cccccc; text-decoration: none;">DC Promo Tracks: Luke Delite &amp;
                        Michelle Weeks &quot;Give Me Your Love&quot;</a>
                </div>

            </div>

            <div class="audio-container">
                <iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay"
                    src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/1557216982&color=%23eb1971&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
                <div
                    style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;">
                    <a href="https://soundcloud.com/the-dream-chimney" title="Dream Chimney" target="_blank"
                        style="color: #cccccc; text-decoration: none;">Dream Chimney</a> · <a
                        href="https://soundcloud.com/the-dream-chimney/dc-promo-tracks-1198-give-me-your-love"
                        title="DC Promo Tracks: Luke Delite &amp; Michelle Weeks &quot;Give Me Your Love&quot;"
                        target="_blank" style="color: #cccccc; text-decoration: none;">DC Promo Tracks: Luke Delite &amp;
                        Michelle Weeks &quot;Give Me Your Love&quot;</a>
                </div>

            </div>

        </div> --}}







        <section class="portfolio__area pb-75  p-relative fix tp-el-section">
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
            <div class="mt-50 container-fluid tp-gx-20">
                {{-- <div class="row">
                    <div class="col-xl-12">
                        <div class="portfolio__section-title-wrapper text-center mb-90 tp-el-content">


                            <h2 class="portfolio__section-title tp-el-title"> Melody Showcase</h2>
                        </div>
                    </div>
                </div> --}}

                <!-- filter button -->
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="portfolio__masonary-btn text-center mb-40">
                            <div class="masonary-menu filter-button-group tp-el-mas-btn">

                                <button data-filter="*" class="active tp-el-mas-btn">
                                    All Project
                                </button>
                                @foreach ($stypes as $st)
                                    @if ($st->pservices_id == 1)
                                        <button data-filter=".{{ $st->slug }}">
                                            {{ $st->stype_name }}
                                        </button>
                                    @endif
                                @endforeach
                                {{-- <button data-filter=".original-song">
                                    Original Song
                                </button>
                                <button data-filter=".rap-song">
                                    Rap Song
                                </button> --}}

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row galley-space tp-gx-20 grid " style="position: relative; height: 1799.76px;">
                    @foreach ($posts as $ms)
                        @if ($ms->serviceid == 1)
                            <div class="col-xl-4 {{ $ms->stypes->slug }} col-lg-6 col-md-6 col-12 tp-portfolio grid-item u-tube-thumbnail"
                                style="position: absolute; left: 0%; top: 537px;">
                                <div class="portfolio__grid-item mb-20 tp-el-box">
                                    <div class="portfolio__grid-thumb tp-protfolio-masonary w-img fix tp-img-reveal tp-img-reveal-item myBox"
                                        data-fx="24" data-meta-tag="Gul Marg Vlog Video" data-title="Gul Marg"
                                        style="overflow: hidden;">
                                        @if ($ms->status == 1)
                                            <div class="portfolio__grid-music portfolio__grid-video"><a
                                                    href="{{ $ms->hypelinks }}" tabindex="0">
                                                </a><a href="{{ $ms->hypelinks }}"
                                                    class="portfolio-play-btn popup-video tp-el-video-btn" tabindex="0">
                                                    <svg width="18" height="22" viewBox="0 0 18 22" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M18 11L0 21.3923V0.607696L18 11Z" fill="currentColor">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </div>
                                        @endif
                                        <div class=" portfolio__grid-video ">
                                            <a href="https://www.instagram.com/p/Ccos67BIgoK/" tabindex="0">
                                            </a>
                                        </div>
                                        <a href="{{ $ms->hypelinks }}">
                                            <img width="455" height="500" src="/posts/{{ $ms->media }}"
                                                class="attachment-full size-full image-size image-size" alt=""
                                                decoding="async" loading="lazy">
                                        </a>
                                        <div class="tp-img-reveal-wrapper">
                                            <div class="tp-img-reveal-wrapper__inner" style="overflow: hidden;">
                                                <div class="tp-img-reveal-wrapper__img" style="background-image:url()">
                                                    <div class="portfolio__hover-wrapper tp-el-box">
                                                        <h4 class="portfolio__hover-title tp-el-box-title">Gul Marg </h4>
                                                        <div class="portfolio__hover-category tp-el-box-tag">
                                                            <span>
                                                                <a href="{{ $ms->hypelinks }}">Gul Marg Vlog
                                                                    Video</a>
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
                    {{-- <div class="col-xl-4 cover-song col-lg-6 col-md-6 col-12 tp-portfolio grid-item u-tube-thumbnail"
                        style="position: absolute; left: 0%; top: 537px;">
                        <div class="portfolio__grid-item mb-20 tp-el-box">
                            <div class="portfolio__grid-thumb tp-protfolio-masonary w-img fix tp-img-reveal tp-img-reveal-item myBox"
                                data-fx="24" data-meta-tag="Gul Marg Vlog Video" data-title="Gul Marg"
                                style="overflow: hidden;">
                                <div class="portfolio__grid-music portfolio__grid-video"><a href="javascript:void(0)"
                                        tabindex="0">
                                    </a><a href="https://www.youtube.com/watch?v=HGN8mufDavg"
                                        class="portfolio-play-btn popup-video tp-el-video-btn" tabindex="0">
                                        <svg width="18" height="22" viewBox="0 0 18 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18 11L0 21.3923V0.607696L18 11Z" fill="currentColor"></path>
                                        </svg>
                                    </a>
                                </div>
                                <div class=" portfolio__grid-video "><a href="https://www.instagram.com/p/Ccos67BIgoK/"
                                        tabindex="0">
                                    </a>
                                </div>
                                <a href="javascript:void(0)">
                                    <img width="455" height="500"
                                        src="{{ asset('user-assets/img/graphic-portfolio/majha-pillu-artwork.jpg') }}"
                                        class="attachment-full size-full image-size image-size" alt=""
                                        decoding="async" loading="lazy">
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
                    </div> --}}
                </div>


            </div>
        </section>
    @endsection
