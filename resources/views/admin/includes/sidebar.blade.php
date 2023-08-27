<!--aside open-->
<aside class="app-sidebar">
    <div class="app-sidebar__logo">
        <a class="header-brand" href="{{ route('admin.dashboard') }}">
            <img src="{{ asset('user-assets/img/logo/adfjlight.svg') }}" class="header-brand-img dark-logo"
                alt="AdFj Studios" style="margin: 0 0;">
            <img src="{{ asset('user-assets/img/logo/adfj.svg') }}" class="header-brand-img desktop-lgo"
                alt="AdFj Studios" style="margin-right: 70px;">
            <img src="{{ asset('user-assets/images/logos/favicon.png') }}" class="header-brand-img darkmobile-logo"
                alt="AdFj Studios">
        </a>
    </div>
    <ul class="side-menu app-sidebar3">
        <li class="side-item side-item-category">Main</li>
        <li class="slide">
            <a class="side-menu__item" href="{{ route('admin.dashboard') }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" width="24" height="24"
                    viewbox="0 0 24 24">
                    <path
                        d="M3 13h1v7c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-7h1a1 1 0 0 0 .707-1.707l-9-9a.999.999 0 0 0-1.414 0l-9 9A1 1 0 0 0 3 13zm7 7v-5h4v5h-4zm2-15.586 6 6V15l.001 5H16v-5c0-1.103-.897-2-2-2h-4c-1.103 0-2 .897-2 2v5H6v-9.586l6-6z">
                    </path>
                </svg>
                <span class="side-menu__label">Dashboard</span></a>
        </li>
        <li class="side-item side-item-category">Posts</li>

        <li class="slide">
            <a class="side-menu__item" data-bs-toggle="slide" href="{{ route('admin.allposts') }}">
                <svg class="svg-icon side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24"
                    viewBox="0 0 24 24" width="24">
                    <path d="M0 0h24v24H0z" fill="none"></path>
                    <path
                        d="M18 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM6 4h5v8l-2.5-1.5L6 12V4z">
                    </path>
                </svg>
                <span class="side-menu__label">All posts</span>
            </a>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-bs-toggle="slide" href="{{ route('admin.featuredposts') }}">
                <svg class="svg-icon side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24"
                    viewBox="0 0 24 24" width="24">
                    <path d="M0 0h24v24H0V0z" fill="none"></path>
                    <path d="M11.17 8l-.58-.59L9.17 6H4v12h16V8h-8z" opacity=".3"></path>
                    <path
                        d="M20 6h-8l-2-2H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2zm0 12H4V6h5.17l1.41 1.41.59.59H20v10z">
                    </path>
                </svg>
                <span class="side-menu__label">Featured posts</span>
            </a>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-bs-toggle="slide" href="{{ route('admin.addposts') }}">
                <svg class="svg-icon side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24"
                    viewBox="0 0 24 24" width="24" style="transform: rotate(45deg) !important;">
                    <path d="M0 0h24v24H0V0z" fill="none"></path>
                    <path
                        d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z">
                    </path>
                </svg>
                <span class="side-menu__label">Add Post</span>
            </a>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-bs-toggle="slide" href="{{ route('admin.type') }}">
                <svg class="svg-icon side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24"
                    viewBox="0 0 24 24" width="24" style="transform: rotate(45deg) !important;">
                    <path d="M0 0h24v24H0V0z" fill="none"></path>
                    <path
                        d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z">
                    </path>
                </svg>
                <span class="side-menu__label">Add Services Type</span>
            </a>
        </li>
        <li class="side-item side-item-category">Portfolio</li>
        <li class="slide">
            <a class="side-menu__item" data-bs-toggle="slide" href="{{ route('admin.music') }}">
                <svg class="svg-icon side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="48"
                    viewBox="0 -960 960 960" width="48">
                    <path
                        d="M393-120q-63 0-106.5-43.5T243-270q0-63 43.5-106.5T393-420q28 0 50.5 8t39.5 22v-450h234v135H543v435q0 63-43.5 106.5T393-120Z" />
                </svg>
                <span class="side-menu__label">Music</span>
            </a>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-bs-toggle="slide" href="{{ route('admin.video') }}">
                <svg class="svg-icon side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="28"
                    viewBox="0 -960 960 960" width="28">
                    <path
                        d="m383-310 267-170-267-170v340Zm97 230q-82 0-155-31.5t-127.5-86Q143-252 111.5-325T80-480q0-83 31.5-156t86-127Q252-817 325-848.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 82-31.5 155T763-197.5q-54 54.5-127 86T480-80Zm0-60q142 0 241-99.5T820-480q0-142-99-241t-241-99q-141 0-240.5 99T140-480q0 141 99.5 240.5T480-140Zm0-340Z" />
                </svg>

                <span class="side-menu__label">Video</span>
            </a>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-bs-toggle="slide" href="{{ route('admin.graphics') }}">

                <?xml version="1.0" encoding="iso-8859-1"?>
                <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                <svg fill="#000000" class="svg-icon side-menu__icon" version="1.1" id="Capa_1"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 60 60"
                    xml:space="preserve">
                    <g>
                        <g>
                            <path
                                d="M59,0H1C0.4,0,0,0.4,0,1v46c0,0.6,0.4,1,1,1h22v10h-3v2h4h12h4v-2h-3V48h22c0.6,0,1-0.4,1-1V1C60,0.4,59.6,0,59,0z M35,58
			H25V48h10V58z M58,46H36H24H2v-8h3h22h6h22h3V46z M33.8,16.3l-2.9-7.6c-0.1-0.3-0.5-0.6-0.9-0.6s-0.8,0.2-0.9,0.6l-2.9,7.6
			C26.1,16.5,26,16.7,26,17v19H6V6h48v30H34V17C34,16.7,33.9,16.5,33.8,16.3z M28.4,16l1.5-4.2l1.6,4.2H28.4z M29,18v18h-1V18H29z
			 M31,18h1v18h-1V18z M58,36h-2V5c0-0.6-0.4-1-1-1H5C4.4,4,4,4.4,4,5v31H2V2h56V36z" />
                            <path
                                d="M51,25v-8c0-0.6-0.4-1-1-1H38v1v1v3h2v-3h4v3h2v-3h3v6H38v2h12C50.6,26,51,25.6,51,25z" />
                            <path
                                d="M9,17v8c0,0.6,0.4,1,1,1h12v-2H11v-6h3v3h2v-3h4v3h2v-3v-1v-1H10C9.4,16,9,16.4,9,17z" />
                            <rect x="12" y="28" width="2" height="2" />
                            <rect x="16" y="28" width="2" height="2" />
                            <rect x="20" y="28" width="2" height="2" />
                            <rect x="38" y="28" width="2" height="2" />
                            <rect x="42" y="28" width="2" height="2" />
                            <rect x="46" y="28" width="2" height="2" />
                            <rect x="38" y="12" width="2" height="2" />
                            <rect x="42" y="12" width="2" height="2" />
                            <rect x="46" y="12" width="2" height="2" />
                            <rect x="12" y="12" width="2" height="2" />
                            <rect x="16" y="12" width="2" height="2" />
                            <rect x="20" y="12" width="2" height="2" />
                        </g>
                    </g>
                </svg>
                <span class="side-menu__label">Graphic</span>
            </a>
        </li>
        <li class="side-item side-item-category">Testiminials</li>
        <li class="slide">
            <a class="side-menu__item" data-bs-toggle="slide" href="{{ route('admin.testimonial') }}">
                {{-- <svg class="svg-icon side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24"
                    viewBox="0 0 24 24" width="24">
                    <path d="M0 0h24v24H0V0z" fill="none"></path>
                    <path d="M20 4H4v13.17L5.17 16H20V4zm-6 10H6v-2h8v2zm4-3H6V9h12v2zm0-3H6V6h12v2z" opacity=".3">
                    </path>
                    <path
                        d="M20 18c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2H4c-1.1 0-1.99.9-1.99 2L2 22l4-4h14zm-16-.83V4h16v12H5.17L4 17.17zM6 12h8v2H6zm0-3h12v2H6zm0-3h12v2H6z">
                    </path>
                </svg> --}}
                <svg class="svg-icon side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24"
                    viewBox="0 -960 960 960" width="24">
                    <path
                        d="m354-247 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-80l65-281L80-550l288-25 112-265 112 265 288 25-218 189 65 281-247-149L233-80Zm247-350Z" />
                </svg>
                <span class="side-menu__label">All Testimonials</span>
            </a>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-bs-toggle="slide" href="{{ route('admin.addtestimonial') }}">
                <svg class="svg-icon side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24"
                    viewBox="0 0 24 24" width="24" style="transform: rotate(45deg) !important;">
                    <path d="M0 0h24v24H0V0z" fill="none"></path>
                    <path
                        d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z">
                    </path>
                </svg>
                <span class="side-menu__label">Add Testimonial</span>
            </a>
        </li>



        {{-- <li class="side-item side-item-category">Messages</li>
         <li class="slide">
            <a class="side-menu__item" data-bs-toggle="slide" href="{{ route('form') }}">
                <svg class="svg-icon side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24"
                    viewBox="0 0 24 24" width="24">
                    <path d="M0 0h24v24H0V0z" fill="none"></path>
                    <path d="M20 8l-8 5-8-5v10h16zm0-2H4l8 4.99z" opacity=".3"></path>
                    <path
                        d="M4 20h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2zM20 6l-8 4.99L4 6h16zM4 8l8 5 8-5v10H4V8z">
                    </path>
                </svg>
                <span class="side-menu__label">Messages</span>
            </a>
        </li> --}}
    </ul>
</aside>
<!--aside closed-->
