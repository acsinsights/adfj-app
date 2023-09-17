@extends('frontend.layouts.app')
@section('title', 'Subscription')
@section('page')

    <section class="about__heading about__heading-overlay about__spacing include-bg jarallax"
        data-background="{{ asset('user-assets/img/about/subscription-banner.jpg') }}">
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



    <section class="p-spacing servivces__area pt-110">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                    <div class="section__title-wrapper-4 mb-60">
                        <span class="section__title-pre-4">EXPLORE ADFJ STUDIOS SUBSCRIPTION PLANS</span>
                        <h3 style="font-size:40px;" class="section__title-4">Unlock Your Creative Potential with
                            Subscription Plans</h3>
                    </div>
                </div>
                <div class="col-xxl-5 offset-xxl-1 col-xl-6 col-lg-6 col-md-6">
                    <div class="services__more-4 sentense-space">
                        <p> Elevate your content creation journey with our tailored subscription plans, designed to provide
                            creators and artists with consistent support, financial stability, and a comprehensive suite of
                            media production services.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>





    <div class="">


        <script async src="https://js.stripe.com/v3/pricing-table.js"></script>
        <stripe-pricing-table pricing-table-id="prctbl_1NZUjySCz6pJIP37DKL3QVj5"
            publishable-key="pk_live_51NZIfkSCz6pJIP37VMRKhhKvMQNfEtlBIhMxrLjftxVFWB000xVxdrttpL3WwU2Ie8Z9staCEnWe6zvD0xhpfek600QwW3JQTh">
        </stripe-pricing-table>
    </div>


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
                            {{-- <img class="services__shape-11" src="assets/img/services/8/services-shape-1.png" alt=""> --}}
                        </div>
                        <div class="services__icon-8 mr-30 mt-40">
                            <span>
                                <img style="height: 70px; width:70px;" src="{{ asset('user-assets/img/icon/services/8/streamlined-cc.png') }}" alt="">
                            </span>
                        </div>
                        <div class="services__content-8">
                            <h3 class="services__title-8">
                                <a href="javascript:void(0)">Streamlined Content Creation</a>
                            </h3>
                            <p>Enjoy seamless access to a range of media production services, ensuring a steady <br> flow of
                                high-quality content.</p>


                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="services__item9 animate-border3 services__item-8  animate-border-2 d-lg-flex align-items-start transition-3 wow fadeInDown"
                        data-wow-delay=".3s" data-wow-duration="1s">
                        <span class="services-border-2"></span>
                        <div class="services__shape">
                            {{-- <img class="services__shape-11" src="{{ asset('user-assets/img/services/8/services-shape-1.png') }}" alt=""> --}}
                        </div>
                        <div class="services__icon-8 mr-30 mt-40">
                            <span>
                                <img style="height: 70px; width:70px;" src="{{ asset('user-assets/img/icon/services/8/financial-ease.png') }}" alt="">
                            </span>
                        </div>
                        <div class="services__content-8">
                            <h3 class="services__title-8">
                                <a href="javascript:void(0)">Financial Empowerment</a>
                            </h3>
                            <p> Overcome financial challenges with cost-effective subscription options, enabling you to
                                focus on your craft without worrying about budgets.</p>


                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="services__item9 services__item-8 animate-border3 animate-border-2 d-lg-flex align-items-start transition-3 wow fadeInDown"
                        data-wow-delay=".7s" data-wow-duration="1s">
                        <span class="services-border-2"></span>
                        <div class="services__shape">
                            {{-- <img class="services__shape-11" src="assets/img/services/8/services-shape-1.png" alt=""> --}}
                        </div>
                        <div class="services__icon-8 mr-30 mt-40">
                            <span>
                                <svg  style="filter: brightness(0) invert(1);border: none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="58" height="58" viewBox="0 0 58 58">
                                    <image id="Personalized_Guidance" data-name="Personalized Guidance" x="4" y="3" width="50" height="52" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAA0CAYAAADIZmusAAAFU0lEQVRogdWafWhWVRzHP2uWLVto2QsuS0sqy6X2KpWGZRSWSUVYCbVaYQSVGSUFlcFW2R+BUK6SRkUoVFCoy8K0YoZF6MyQ7EWyJb2ZpdNVrtwTR75n/Ljd13mf59m+cDnPvefc38s55/7ezlNB/jgHuAo4F6gFhovDz8AXwDqgBVhTBN654GrgI6CQ8nomT+YDcqDhVnURUK97J+RiYCXQBrQD3cDxwFjgMl2/5cA7NwwBPjcr0Agck5H4KUADcHa5lKgEvpEC3wNn9pLOo6LRnLN8qfGuBNgKHHkAdI4D7gJOLrH8+zFTSnRJkCgMAyYCFwMnlEPQOLgttVOK3BIx7kTg9RDr9U7CFpwPvA8MKoUit0qo9oj+0cAeI/x64LOAQpMi3vXf3H1FlL8HrWJ2R0jfwcAO9b8HnGH6TpJZLsgch31X0813V1QMMrN6bAije9T3ZYqJeDJiIrrUX1NMRcaKybaI/lXqnxFDY6LGbI7o/1j9V2YR7KAsg43liRJipNr1MTS+UntqBP/vArRSIasih6n9O6Lfhx3DYmj4b+MXzXwQXbofWExFOtRGmcdWtXNiaNyrdnWEIn6y9mSULRNGi/n2iJcGKFx3Yx4M6a9X327gqAgaPna7pJiKHAL8I0Zhe3i4/Iu3bBuAx4FHgLXm+U7lKkEcYcYMKaYiDivEaG7gea2+HW9+t4Z49u2BaPnCAA0f+rQVWwmUQPlZ9RhoHOHSgGCN8hl1QJWeN2vsv4EttkXPbyqFIg7fiuE83Tck+IYwrNE7r6jPhz5/KFkrCSab7XGRfIP7fUEG5iP1zp9ykp26n1kqJTyeD+z/T3pB48MAjWXFETUZK4wQi3vxvp0MV10pK5YaYZYA41MIcxrwgnmvNasnDyKvj8qZ4qfM/Vp57jY5SFSUqFUucqkZ6yzawznJkQtGAc8Cf6WsazVHOMU+g2rgJZMgfaoM0Zvs5cDQcgg7WE4tS+xze0i8VReTUEXhLPFOLFwkRb/T5CPcHn46gwB+xg83z6rVDs5AZ654b44pdOxHnCLzZZF85fDXDAL8HkK/Um1HyPgo+PzGhTYvA00KXP+HsNrvOH2I3oy2KO0cqgp7kqXrVkpMYKz/PUoV+6Td0G0q+csUQdwJXA7cJmcaiTnGqrSL6ekZKuzBq8kwmncAdCYruNwUqDP3wK+Iq4gsBK7V/WvALMVBrtj2gcZUxs2CmXk3m7uAN81zZ62mKNWtjMgOg3T2aZvu0DUGWADcrW9nglbJ1cO4RhFnQbnCjSmELTemmmqLS/RuRnbeL9f9/UAJjxlG7i1u+UbooGaKBjRp6faZl45WGpoWFaqGBMuqNbJASdvKo0Lb+8fA80YT1qxTLtODB4yGXytHQIp29vIjtQymmXw/y+Um5HzRGBeoIz8RNQPjA5ahTkcC/r4rxbXXjH/O0LZWa29GOtPlAvz9T7Jkicu50Ly0Te1qbYuk61BzCtVg6M7Ws0Up6VQpDS6o+mhTheqg0GEOsaATpJVyjL6YXKnINg12xYzpzEDHO9ERal2Y8mrYwDjv+paOArwv2J2SedLYzgx0/ISskjKhSpDieNr5l+u1R5NS0TE6mXUrekUIff97guy+m8SNCQXvx6TE2wm8c0VHiCVaYBg8FGGp0kQLiciFiOAq8Ofp9xL9C6LJRLA/aBU2mYDUnTO+keds5oWNmuW43GW2MaF9FjVmy9wQIuQk05+m2lJW1Bth7TlglaxQQRX6fgFfuLOWrkXPNvQXJdDs+/jsOnMAWkg4luuTmBpiamf1NyU8XjRKLO8bIvUeLg11ptYFk8UB8B+BH97RHLhsyAAAAABJRU5ErkJggg=="/>
                                  </svg>

                            </span>
                        </div>
                        <div class="services__content-8">
                            <h3 class="services__title-8">
                                <a href="javascript:void(0)">Personalized Guidance</a>
                            </h3>
                            <p>Receive expert guidance and tailored solutions from our team, empowering you to refine your
                                artistic vision and reach new heights</p>


                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class=" services__item-8 animate-border-2 d-lg-flex align-items-start transition-3 wow fadeInDown"
                        data-wow-delay=".7s" data-wow-duration="1s">
                        <span class="services-border-2"></span>
                        <div class="services__shape">
                            {{-- <img class="services__shape-11" src="{{ asset('user-assets/img/services/8/services-shape-1.png') }}" alt=""> --}}
                        </div>
                        <div class="services__icon-8 mr-30 mt-40">
                            <span>
                                <svg  style="filter: brightness(0) invert(1);" xmlns="http://www.w3.org/2000/svg"  xmlns:xlink="http://www.w3.org/1999/xlink" width="58" height="58" viewBox="0 0 58 58">
                                    <image id="Exclusive_Resources" data-name="Exclusive Resources" x="4" y="4" width="50" height="50" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAFGElEQVRoge2ae4jVRRTHP6tmuaU9KMqsoHeaBUIhPd00ypIebC/dLG0NK8OiTEooopTeZBgtWUb9kb2kEiEMDKKolKxMKyq0Mg3bsqTSLc3sxlm/g4fp/u7+7u/+9tcF+8KPuXPmzMw58zhz5sylAMwEfgNK0dcBPAQcBQwE9qpFlIYCFFkH9AeWK29K9AIGR3zfS6lNBciUCabI1jIVTeB2oE1KmIIH1asSVFDEBF+o388of0DWTnplly81/hJjH1ehUWlJ6S61dlKEIquBg4Hfy5T1AA4F9nP5TChCkUaN/DuOZkbmVOBs4GtHL7cEU6EIRQYA24DTI/pY4GQtuc3AZ8D6AuTJjLW1jHRaZF6TOyNKzjp1G4rYI3OAvXf22UyNnt3c/nHAg0AzsAH4tpv7yx1XAcNkUsMe+Qk4BRgfnfJ1iX7Am5G7fjNwRURbAeyfpwJ5b3ZbQk3Ai3JJVgEPq2wPYKh+jwNagXtz7j83HKkRf8Q1OAGY7PKTxTO8XpU4CVgkIaeI9qFbTsGnalZ+MXDGfyhvIhZKwDD645RvlpL2e7rKWpT/OK/O83RRgikPjl+wTD87WriH/Ki0iAO5agyXNbKRnqjKa9zS2ihlRyq/EjivHhUxHCsh2xztdmCGy98knpF5dpz31J6g1EZ+mjZ4UOIclQe/awjwes795wY75JZFh5+d8qMiml1/D6tXJQIskHCD1v9aJ/wW4FxZtX3qQ9T0OE139Xdlhv9HPeBuYFZ3y1Ep9ns48Bjbw5iNFfgqoeQ29Tc1yrpR95kJ1UZbriwTQa+H76xywlZyUTYrbdXMZf0eB+bV2IZ9lwIvy3RXhfEa/WurrVhvsDeN84FDapDLfK65wJ017LOAMcB83XkKxVPRfjInsXcNArSpnWHVVmypYWkNVt1XNILhVjg1Q1upYE7jMXry6tCorVFFc/iWAl+5hg4Ejgb6ypx+ktDJrkoXqc0OnSVZH3J2l5zovWV5OaZfoiVgz2G3RTyTJHhsfsv5TLa33nM8g4DPXdujqlDA2nouweTPiJlDB3bPfsExvqTyWY42X8sjeLj9y3S+RGULgNmaxalR22lmZohGP9zvQzxgjnNGV/h993d0UlrB0+5xJrz1+efjt0WPn8waRP8iQbg7VD6iCyX2Bf4Qb4tol0XB8Huckp1YmhAtXyd6uefiUoLL0UNlHyQIGG6HTV0o8qr4Llb+REUqjfYRO15/gyWzM4/rlbklauw+0Z+I6CE6Mp1/IyiSFB2ZpvL49cojPNWtEq2v8raXH9XvJY4/XNQ6l0O7C+WE6McIF85BQl4u2taEfyoERd5PEHJiCkXOdKFWtJ9C7Ngcxgv0uBqwzK+oI9yjfdgbi51Qb7myTS70maTIFhmJ0OFuwF0ymyU9giZhjHhGu/ImFxBfH5XNi7eG2f5bdTaUM3crZfL6VRDC8Iarc51oAx1tg86tJAwVX4gLN8phbNaeKUWCr07Y453orWk0hhs1omnR4PZRiG8NUn5uioEIlu9X5XtqhkvufHpeZXuGVZPkxv8pW234zrn0aWANfym+bUrDvx/a9U+hSijJtJrC96uNRt37LfT6gJaf4TWlUyo1eIkaba1CiYAQ/gmRxD4JFrASPlWdmeIZrTMPKRbeYZ7sqqGxYpyUQZGL3MwscAfos1W0YcKGAzmEXC39wdHMc+gSF2oZ2GtTtTjemfTw2TlwdYa2rtHs2HI3eWyZmhW1yOV2AP8AeeuqmVp7NcEAAAAASUVORK5CYII="/>
                                  </svg>

                            </span>
                        </div>
                        <div class="services__content-8">
                            <h3 class="services__title-8">
                                <a href="javascript:void(0)">Exclusive <br> Resources</a>
                            </h3>
                            <p>Access a treasure trove of exclusive resources, tools, and workshops to refine your skills
                                and stay ahead in the creative landscape.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- portfolio area start -->
    <section class="portfolio__area p-relative portfolio__overlay pt-spacing pt-50 pb-90 fix">
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
                                    @if ($post->fstatus == 1)
                                        <div class="portfolio__item-3 transition-3 wow fadeInUp" data-wow-delay=".3s"
                                            data-wow-duration="1s">

                                            <a
                                                href="{{ $post->status == 1 ? "$post->hypelinks" : 'javascript: void(0);' }}">
                                                <div class="portfolio__thumb-3 w-img"
                                                    data-background="{{ $post->media ? asset('posts/' . $post->media) : '' }}">
                                                </div>

                                                @if ($post->status == 1)
                                                    <div class="portfolio__grid-video">
                                                        <a href="{{ $post->status == 1 ? "$post->hypelinks" : 'javascript: void(0);' }}"
                                                            class="portfolio-play-btn popup-video tp-el-video-btn">
                                                            <svg width="18" height="22" viewBox="0 0 18 22"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M18 11L0 21.3923V0.607696L18 11Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                @endif

                                                <div class="portfolio__content-3 transition-3">
                                                    <div class="portfolio__tag-3">
                                                        <a
                                                            href="{{ $post->status == 1 ? "$post->hypelinks" : 'javascript: void(0);' }}">{{ $post->pservices->service_name }}</a>
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
                                                                    stroke="white" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                                <path
                                                                    d="M5.71401 8.04568C6.58188 8.04568 7.28544 7.31305 7.28544 6.40931C7.28544 5.50557 6.58188 4.77295 5.71401 4.77295C4.84613 4.77295 4.14258 5.50557 4.14258 6.40931C4.14258 7.31305 4.84613 8.04568 5.71401 8.04568Z"
                                                                    stroke="white" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                            {{ $post->location }}
                                                        </span>
                                                        <span>
                                                            <svg width="13" height="15" viewBox="0 0 13 15"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M4 1.5V3.3" stroke="white"
                                                                    stroke-width="1.5" stroke-miterlimit="10"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M8.80029 1.5V3.3" stroke="white"
                                                                    stroke-width="1.5" stroke-miterlimit="10"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M1.30029 5.75415H11.5003" stroke="white"
                                                                    stroke-width="1.5" stroke-miterlimit="10"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                                <path
                                                                    d="M11.8 5.40015V10.5001C11.8 12.3001 10.9 13.5001 8.8 13.5001H4C1.9 13.5001 1 12.3001 1 10.5001V5.40015C1 3.60015 1.9 2.40015 4 2.40015H8.8C10.9 2.40015 11.8 3.60015 11.8 5.40015Z"
                                                                    stroke="white" stroke-width="1.2"
                                                                    stroke-miterlimit="10" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
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
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>







    <section class="our-services section-margin">
        <div class="container">
            <div class="one-title dsn-active wow fadeInUp"data-wow-delay=".7s" data-wow-duration="1s">
                {{-- <div class="title-sub-container">
                    <p class="title-sub">OUR SERVCIES</p>
                </div> --}}
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="section__title-wrapper-8 text-center mb-60">
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
            <section class="design-section">
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
                        <h3> Apply and Connect</h3>
                        <br>
                        <!-- <h6>Hello we are, <br> Acs Team. </h6> -->
                        <p> Submit your application online, detailing your creative journey and aspirations. Our team will
                            review your submission and initiate a personalized conversation.
                        </p>
                    </div>
                    <div class="timeline-component wow fadeInUp timeline-content" data-wow-delay=".7s"
                        data-wow-duration="1s">
                        <div class="d-flex">
                            <img style="border-radius: 100%; margin-bottom: 20px;" src="assets/img/avatar/1.jpg"
                                alt="">
                        </div>
                        <h2 class="mb-30">Step 2</h2>
                        <h3>Tailored Plan Creation</h3>
                        <br>
                        <p>Collaborate with our experts to craft a subscription plan that suits your needs, addressing your
                            content goals and financial considerations.
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
                        <h3>Content Strategy Workshop</h3>
                        <br>
                        <p>Engage in an insightful workshop where we align your artistic vision with a comprehensive content
                            strategy, ensuring every creation resonates with your audience.</p>
                    </div>
                    <div class="timeline-component wow fadeInUp timeline-content" data-wow-delay=".7s"
                        data-wow-duration="1s">
                        <div class="d-flex">
                            <img style="border-radius: 100%; margin-bottom: 20px;" src="assets/img/avatar/1.jpg"
                                alt="">
                        </div>
                        <h2 class="mb-30">Step 4</h2>
                        <h3>Launch and Support</h3>
                        <br>
                        <p>With your subscription plan in place, embark on your content creation journey with confidence.
                            Our team stands by you, providing ongoing support, resources, and feedback to drive your
                            success.
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



    <section class="faq__area faq__style-3 p-relative z-index-1 pt-80 pb-40 tp-el-section">
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
                                                                                    How does AdFJ Studios cater to the
                                                                                    unique needs of the media production
                                                                                    industry?
                                                                                </button>
                                                                            </h2>
                                                                            <div id="collapseOne-0"
                                                                                class="accordion-collapse collapse "
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
                        <a href="tel:+918390194975 " class="tp-cta-btn mb-20">Talk to Our <br />
                            Support Team <i class="fa-light fa-arrow-up-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
