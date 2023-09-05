@extends('frontend.layouts.app')
@section('title', 'Contact PAge')
@section('page')




    <main>
        <!-- contact area start -->
        <section class="tp-section-area p-relative z-index-1 tp-section-spacing">
            <div class="tp-section-bg include-bg" data-background="{{ asset('user-assets/img/contact/contact-bg.png') }}">
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <div class="tp-section-wrapper-2 text-center">
                            <span class="tp-section-subtitle-2 subtitle-mb-9">GET TO KNOW US</span>
                            <h3 class="tp-section-title-2 font-70">
                                Have a project in mind? Let’s talk.
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact area end -->

        <div class="contact__item-area contact__translate-2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="contact__item text-center mb-30 transition-3 white-bg">
                            <div class="contact__icon">
                                <img src="{{ asset('user-assets/img/contact/icon/contact-icon-1.png') }}" alt="" />
                            </div>
                            <div class="contact__content">
                                <span class="contact-item-subtitle">Contact</span>
                                <p>
                                    <a href="mailto:hello@adfjstudios.com">hello@adfjstudios.com</a>
                                </p>
                                <p><a href="tel:+918390194975">+91 8390194975</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="contact__item text-center mb-30 transition-3 white-bg">
                            <div class="contact__icon">
                                <img src="{{ asset('user-assets/img/contact/icon/contact-icon-3.png') }}" alt="" />
                            </div>
                            <div class="contact__content">
                                <span class="contact-item-subtitle">Location</span>
                                <p>
                                    <a href="https://goo.gl/maps/HQLFWmBQ75PordVB9" target="_blank">Office No. 3,
                                        Indraprastha Complex, Boisar 401501,
                                        MH(IN)</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="contact__item text-center mb-30 transition-3 white-bg">
                            <div class="contact__icon">
                                <img src="{{ asset('user-assets/img/contact/icon/contact-icon-2.png') }}" alt="" />
                            </div>
                            <div class="contact__content">
                                <span class="contact-item-subtitle">Social Media</span>
                                <p>Follow on social media</p>
                                <div class="contact__social">
                                    <a href="https://www.facebook.com/adfjstudios"><i
                                            class="fa-brands fa-facebook-f"></i></a>
                                    <a href="https://twitter.com/adfjstudios?lang=en"><i
                                            class="fa-brands fa-twitter"></i></a>
                                    <a href="https://www.instagram.com/adfjstudios/"><i
                                            class="fa-brands fa-instagram"></i></a>
                                    <a href="https://www.youtube.com/@AdFJStudios"><i class="fa-brands fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- contact form area start -->
        <section class="contact__form-area pt-90 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="contact__form-2">
                            <h3 class="contact__form-2-title">Send a message</h3>
                            <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
                            <script>
                                hbspt.forms.create({
                                    region: "na1",
                                    portalId: "40057864",
                                    formId: "eaa9b7f4-ac93-4e4d-8630-dd2a84290c41",
                                });
                            </script>
                            <p class="ajax-response"></p>
                            <div class="hub-cover"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact form area end -->
    </main>

@endsection
