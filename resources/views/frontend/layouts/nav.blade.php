    <!-- back to top start -->
    <div class="back-to-top-wrapper">
        <button id="back_to_top" type="button" class="back-to-top-btn">
            <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </button>
    </div>
    <!-- back to top end -->

    <!-- header area start -->
    <header>
        <div class="header__area">
            <div class="header__bottom-9 header__sticky" id="header-sticky">
                <div class="container">
                    <div class="mega-menu-wrapper p-relative">
                        <div class="row align-items-center">
                            <div class="col-xxl-1 col-xl-2 col-lg-2 col-md-4 col-sm-5 col-8">
                                <div class="logo">
                                    <a href="{{ url('/') }}">
                                        <img src="{{ asset('user-assets/img/logo/adfj.svg') }}" alt="logo"
                                            height="50px" width="120px" />
                                    </a>
                                </div>
                            </div>
                            <div style="padding-left: 74px;" class="col-xxl-9 col-xl-8 col-lg-8 d-none d-lg-block">
                                <div class="main-menu main-menu-9 main-menu-ff-space">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li class="">
                                                <a href="{{ url('/') }}">Home</a>

                                            </li>
                                            <li class="">
                                                <a href="{{ url('service') }}">Services</a>
                                            </li>


                                            <li class="has-dropdown">
                                                <a class="mean-clicked" href="{{ url('#') }}">Portfolio</a>
                                                <ul class="submenu">
                                                    <li style="margin-left:10px;margin-top:10px"><a
                                                            href="{{ url('music') }}">Music Production</a></li>
                                                    <li style="margin-left:10px;margin-top:10px">
                                                        <a href="{{ url('video') }}">Video Production</a>
                                                    </li>
                                                    <li style="margin-left:10px;margin-top:10px">
                                                        <a href="{{ url('graphic') }}">Graphics Production</a>
                                                    </li>

                                                </ul>
                                            </li>



                                            <li class="">
                                                <a href="{{ url('pricing-plan') }}">Pricing Plans</a>

                                            <li class="">
                                                <a href="{{ url('subscription') }}">Subscription</a>

                                            </li>


                                            <li class="">
                                                <a href="{{ url('about') }}">About Us</a>

                                            <li class="">
                                                <a href="{{ url('contact') }}">Contact Us</a>

                                            </li>
                                            <li class="">
                                                <a href="{{ url('blog') }}">Blogs</a>


                                            </li>

                                        </ul>
                                    </nav>
                                    <!-- for wp -->
                                    <div class="header__hamburger ml-50 d-none">
                                        <button type="button" class="hamburger-btn offcanvas-open-btn">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="getstarted-btn col-xxl-2 col-xl-2 col-lg-2 col-md-8 col-sm-7 col-4">
                                <div class="header__bottom-right-8 d-flex justify-content-end align-items-center">
                                    <div class="book-btn header__hamburger ml-20">
                                        <a href="{{ url('get-started') }}">
                                            <button type="button">Start Project</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-btn col-xxl-2 col-xl-2 col-lg-2 col-md-8 col-sm-7 col-4">
                                <div class="header__bottom-right-8 d-flex justify-content-end align-items-center">
                                    <div class="header__hamburger ml-50">
                                        <button type="button"
                                            class="hamburger-btn-8 hamburger-btn-8-black offcanvas-open-btn">Menu</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header area end -->

    <!-- offcanvas area start -->
    <div class="mobile-canvasmenu offcanvas__area offcanvas__area-4">
        <div class="offcanvas__wrapper">
            <div class="offcanvas__close">
                <button class="offcanvas__close-btn offcanvas__close-btn-4 offcanvas-close-btn">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M17 1L1 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M1 1L17 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
            <div class="offcanvas__content">
                <div class="offcanvas__top mb-10 d-flex justify-content-between align-items-center">
                    <div class="offcanvas__logo logo">
                        <a href="home-main.html">
                            <img src="{{ asset('user-assets/img/logo/adfjlight.svg') }}" alt="logo" height="75px"
                                width="150px" />
                        </a>
                    </div>
                </div>
                <div class="offcanvas__inner d-none ">
                    <h4>We help to create visual strategies.</h4>
                    <p>We want to hear from you. Let us know how we can help.</p>
                    <img src="assets/img/shape/offcanvas-img-1.png" alt="" />
                </div>
                <div class="mobile-menu fix mb-40"></div>

                <div class="offcanvas__inner-btn mb-80">
                    <a href="{{ url('get-started') }}"class="tp-btn-offcanvas-white w-100">Get Started</a>
                </div>

                <div class="offcanvas__contact mb-40">
                    <p class="offcanvas__contact-call">
                        <a href="tel:+918390194975">+91 8390194975</a>
                    </p>
                    <p class="offcanvas__contact-mail">
                        <a href="mailto:hello@adfjstudios.com">hello@adfjstudios.com</a>
                    </p>
                </div>

                <div class="offcanvas__social-4">
                    <a href="https://www.facebook.com/adfjstudios"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="https://twitter.com/adfjstudios?lang=en"><i class="fa-brands fa-twitter"></i></a>
                    <a href="https://www.instagram.com/adfjstudios/"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://www.youtube.com/@AdFJStudios"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="body-overlay"></div>
    <!-- offcanvas area end -->
