@extends('frontend.layouts.app')
@section('title', 'Start Project')
@section('page')

    <main>
        <!-- about top area start -->
        {{-- <section class="about__heading about__heading-overlay about__spacing include-bg jarallax"
            data-background="{{ asset('user-assets/img/about/about-breadcrumb.jpg') }}">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-10">
                        <div class="about__heading-content text-center p-relative z-index-1">
                            <span class="about__heading-subtitle">Start Project</span>
                            <h3 class="about__heading-title">Discover Our Story</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

        <section class="contact__area pt-50 p-relative z-index-1">
            <div class="contact__shape">
                <span class="contact__shape-1"></span>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-6">
                        <div class="contact__wrapper-9">
                            <div class="section__title-wrapper-9 mb-85">
                                <h3 class="section__title-9">Start projects?</h3>
                            </div>
                            <div class="contact__list-9 mr-100">
                                <div class="contact__list-item-9 flex-wrap d-flex align-items-start">
                                    <div class="contact__list-icon-9">
                                        <span>
                                            <svg width="24" height="24" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M18.973 15.697C18.973 16.021 18.901 16.354 18.748 16.678C18.595 17.002 18.397 17.308 18.136 17.596C17.695 18.082 17.209 18.433 16.66 18.658C16.12 18.883 15.535 19 14.905 19C13.987 19 13.006 18.784 11.971 18.343C10.936 17.902 9.901 17.308 8.875 16.561C7.84 15.805 6.859 14.968 5.923 14.041C4.996 13.105 4.159 12.124 3.412 11.098C2.674 10.072 2.08 9.046 1.648 8.029C1.216 7.003 1 6.022 1 5.086C1 4.474 1.108 3.889 1.324 3.349C1.54 2.8 1.882 2.296 2.359 1.846C2.935 1.279 3.565 1 4.231 1C4.483 1 4.735 1.054 4.96 1.162C5.194 1.27 5.401 1.432 5.563 1.666L7.651 4.609C7.813 4.834 7.93 5.041 8.011 5.239C8.092 5.428 8.137 5.617 8.137 5.788C8.137 6.004 8.074 6.22 7.948 6.427C7.831 6.634 7.66 6.85 7.444 7.066L6.76 7.777C6.661 7.876 6.616 7.993 6.616 8.137C6.616 8.209 6.625 8.272 6.643 8.344C6.67 8.416 6.697 8.47 6.715 8.524C6.877 8.821 7.156 9.208 7.552 9.676C7.957 10.144 8.389 10.621 8.857 11.098C9.343 11.575 9.811 12.016 10.288 12.421C10.756 12.817 11.143 13.087 11.449 13.249C11.494 13.267 11.548 13.294 11.611 13.321C11.683 13.348 11.755 13.357 11.836 13.357C11.989 13.357 12.106 13.303 12.205 13.204L12.889 12.529C13.114 12.304 13.33 12.133 13.537 12.025C13.744 11.899 13.951 11.836 14.176 11.836C14.347 11.836 14.527 11.872 14.725 11.953C14.923 12.034 15.13 12.151 15.355 12.304L18.334 14.419C18.568 14.581 18.73 14.77 18.829 14.995C18.919 15.22 18.973 15.445 18.973 15.697Z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"></path>
                                                <path opacity="0.4"
                                                    d="M15.8492 7.30039C15.8492 6.76039 15.4262 5.93239 14.7962 5.25739C14.2202 4.63639 13.4552 4.15039 12.6992 4.15039"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path opacity="0.4" d="M18.9992 7.3C18.9992 3.817 16.1822 1 12.6992 1"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg>
                                            <img class="contact-icon-shape" src="assets/img/contact/contact-icon-shape.png"
                                                alt="">
                                        </span>
                                    </div>
                                    <div class="contact__list-content-9">
                                        <h5>Phone Number</h5>
                                        <p><a href="tel:+918390194975">+91 8390194975</a></p>
                                    </div>
                                </div>
                                <div class="contact__list-item-9 flex-wrap d-flex align-items-start">
                                    <div class="contact__list-icon-9">
                                        <span>
                                            <svg width="24" height="20" viewBox="0 0 16 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.5 12.9H4.5C2.4 12.9 1 11.85 1 9.4V4.5C1 2.05 2.4 1 4.5 1H11.5C13.6 1 15 2.05 15 4.5V9.4C15 11.85 13.6 12.9 11.5 12.9Z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"
                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path opacity="0.4"
                                                    d="M11.5 4.85059L9.309 6.60059C8.588 7.17459 7.405 7.17459 6.684 6.60059L4.5 4.85059"
                                                    stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"
                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                            <img class="contact-icon-shape" src="assets/img/contact/contact-icon-shape.png"
                                                alt="">
                                        </span>
                                    </div>
                                    <div class="contact__list-content-9">
                                        <h5>Email</h5>
                                        <p>
                                            <a href="mailto:hello@contact.com" class="fs-5">hello@adfjstudios.com</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-6 mb-50">
                        <div class="contact__form-9 pt-20 pl-70">
                            <h4 class="contact__form-9-title">
                                Get In Touch Today
                            </h4>
                            <div class="contact__form-9-inner">
                                @session('success')
                                    <div class="alert-message">
                                        <div class="alert alert-success d-flex align-items-center gap-3" role="alert">
                                            <i class="fa-solid fa-circle-check fa-xl"></i>
                                            <div>
                                                {{ Session::get('success') }}
                                            </div>
                                        </div>
                                    </div>
                                @endsession
                                <form action="{{ route('consultation.store') }}" method="post">
                                    @csrf
                                    <div class="row ">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="name">
                                                    Name<span class="text-danger">*</span>
                                                </label>
                                                <input type="text" id="name" name="name"
                                                    class="form-control form-input" placeholder="Your Name"
                                                    value="{{ old('name') }}" required>
                                                @error('name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="company_name">
                                                    Company Name
                                                </label>
                                                <input type="text" id="company_name" name="company_name"
                                                    class="form-control form-input" placeholder="Your company name"
                                                    value="{{ old('company_name') }}">
                                                @error('company_name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mt-2">
                                            <div class="form-group">
                                                <label for="email">
                                                    Email<span class="text-danger">*</span>
                                                </label>
                                                <input type="email" id="email" name="email"
                                                    class="form-control form-input" placeholder="Your email"
                                                    value="{{ old('email') }}" required>
                                                @error('email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mt-2">
                                            <div class="form-group">
                                                <label for="phone">
                                                    Mobile Number<span class="text-danger">*</span>
                                                </label>
                                                <input type="text" id="phone" name="phone"
                                                    class="form-control form-input" placeholder="Your phone"
                                                    value="{{ old('phone') }}" required>
                                                @error('phone')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mt-2">
                                            <div class="form-group">
                                                <label for="city">
                                                    City<span class="text-danger">*</span>
                                                </label>
                                                <input type="text" id="city" name="city"
                                                    class="form-control form-input" placeholder="Your city"
                                                    value="{{ old('city') }}" required>
                                                @error('city')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mt-2">
                                            <div class="">
                                                <label for="phone">
                                                    Choose Service<span class="text-danger">*</span>
                                                </label>

                                                <select name="service" id="service" class="form-control w-100">
                                                    <option selected disabled>Please Select</option>
                                                    <opp0tion value="Audio Engineering">Audio Engineering</opp0tion>
                                                    <option value="Graphic Design">Graphic Design</option>
                                                    <option value="Music Production">Music Production</option>
                                                    <option value="Video Production">Video Production</option>
                                                </select>
                                                @error('phone')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mt-2">
                                            <div class="form-group">
                                                <label for="reference">
                                                    Project Reference<span class="text-danger">*</span>
                                                </label>

                                                <input type="text" name="reference" id="reference"
                                                    class="form-control form-input" value="{{ old('reference') }}"
                                                    placeholder="Put Reference Link Here...">
                                                @error('reference')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mt-2">
                                            <div class="form-group">
                                                <label for="attach-file">
                                                    Attch File
                                                </label>

                                                <input type="file" name="attach-file" id="attach-file"
                                                    class="form-control">
                                                @error('attach-file')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mt-2">
                                            <div class="form-group align-items-center">
                                                <label for="consultation">
                                                    Need Consultation?
                                                </label>

                                                <input type="checkbox" name="consultation" id="consultation"
                                                    class="form-checkbox" value="1">

                                                @error('consultation')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12 mt-3">
                                            <div class="book-btn header__hamburger">
                                                <button type="submit">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                {{-- <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
                                <script data-hubspot-rendered="true">
                                    hbspt.forms.create({
                                        region: "na1",
                                        portalId: "40057864",
                                        formId: "d6e00c8b-caac-4f4e-87db-14d3d0db672a"
                                    });
                                </script>

                                <p class="ajax-response"></p> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- <div class="slider__btn-9 mb-85 text-center">
        <a href="index.html" class="tp-btn-5 tp-link-btn-3">
          Back To Home
          <span>
            <i class="fa-regular fa-arrow-right"></i>
          </span>
        </a>
      </div> --}}
    @endsection
