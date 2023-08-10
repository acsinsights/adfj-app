<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Responsive Bootstrap 5 admin dashboard template & web App ui kit." />
    <meta name="keyword" content="QBoat, Bootstrap 5, Admin Dashboard, Admin Theme" />
    <link rel="shortcut icon" href="{{ asset('user-assets/img/logo/favicon.ico') }}" type="image/x-icon">
    <!--[ Favicon]-->
    <title>Adfj Studios</title>
    <!--[ plugin css file  ]-->
    <link rel="stylesheet" href="{{ asset('admin-assets/bundles/bootstrapdatepicker.min.css') }}" />
    <!--[ project css file  ]-->
    <link rel="stylesheet" href="{{ asset('admin-assets/css/style.css') }}" />

    <!--[ Jquery Core Js ]-->
    <script src="{{ asset('admin-assets/js/plugins.js') }}"></script>
</head>

<body class="qboat admin" data-qboat="theme-DodgerBlue">
    <!--[ Start:: main sidebar menu link ]-->
    @include('admin.includes.sidebar')
    @yield('content')
    <!--[ Start modal:: Full screen grid menu ]-->
    <div class="modal fade" tabindex="-1" id="full_screen_menu">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content bg-primary-gradient p-lg-5">
                <div class="modal-header border-0">
                    <h3 class="modal-title text-white">Adfj</h3>
                    <div class="modal-menu d-flex align-items-center">
                        <ul class="nav me-3">
                            <li class="nav-item">
                                <a class="nav-link text-uppercase active" href="#">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-uppercase" href="#">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-uppercase" href="#">Support us</a>
                            </li>
                        </ul>
                        <button type="button" class="btn bg-white text-dark px-3">
                            Download
                        </button>
                    </div>
                </div>
                <div class="modal-body d-flex justify-content-center">
                    <div class="row g-3 justify-content-center align-items-center">
                        <div class="col-xxl-3 col-xl-3 col-lg-5 col-md-12 text-lg-start text-center text-white">
                            <h2>Amazing Features</h2>
                            <ul class="list-unstyled mt-4">
                                <li class="mb-4">
                                    <span class="d-block mb-2 fs-4 fw-light">Handcrafted UI</span>
                                    <span>Each component has been carefully handcrafted and
                                        natively supports dark mode.</span>
                                </li>
                                <li>
                                    <span class="d-block mb-2 fs-4 fw-light">Fast Development</span>
                                    <span>QBoat handles HTML compilation while Gulp recompiles your
                                        SCSS and Javascript code</span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-1 col-md-12"></div>
                        <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-12">
                            <ul class="grid-menu row g-1">
                                <li class="col-sm-4 col-6">
                                    <a href="#" class="rounded-4">
                                        <i class="icon-tag"></i>
                                        <span>Influencer</span>
                                    </a>
                                </li>
                                <li class="col-sm-4 col-6">
                                    <a href="#" class="rounded-4">
                                        <i class="icon-star"></i>
                                        <span>Hobbies</span>
                                    </a>
                                </li>
                                <li class="col-sm-4 col-6">
                                    <a href="#" class="rounded-4">
                                        <i class="icon-briefcase"></i>
                                        <span>Business</span>
                                    </a>
                                </li>
                                <li class="col-sm-4 col-6">
                                    <a href="#" class="rounded-4">
                                        <i class="icon-pie-chart"></i>
                                        <span>Finance</span>
                                    </a>
                                </li>
                                <li class="col-sm-4 col-6">
                                    <a href="#" class="rounded-4">
                                        <i class="icon-flag"></i>
                                        <span>Food Delivery</span>
                                    </a>
                                </li>
                                <li class="col-sm-4 col-6">
                                    <a href="#" class="rounded-4">
                                        <i class="icon-layers"></i>
                                        <span>Stocks Dashboard</span>
                                    </a>
                                </li>
                                <li class="col-sm-4 col-6">
                                    <a href="#" class="rounded-4">
                                        <i class="icon-wallet"></i>
                                        <span>Sales Dashboard</span>
                                    </a>
                                </li>
                                <li class="col-sm-4 col-6">
                                    <a href="#" class="rounded-4">
                                        <i class="icon-puzzle"></i>
                                        <span>UI Widgets</span>
                                    </a>
                                </li>
                                <li class="col-sm-4 col-6">
                                    <a href="#" class="rounded-4">
                                        <i class="icon-handbag"></i>
                                        <span>Ecommerce</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn px-4 py-2 text-uppercase bg-secondary text-primary"
                        data-bs-dismiss="modal">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!--[ Start offcanvas:: Need a Help ]-->
    <div class="offcanvas xl offcanvas-start" tabindex="-1" id="need_help">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">Need a Help?</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body custom_scroll">
            <ul class="list-group list-group-custom mb-4">
                <li class="list-group-item d-flex align-items-center justify-content-between">
                    <div class="me-3">
                        <a href="#" class="gray-8 fw-bold" title="Regular License">Regular License</a>
                        <p class="mb-0 gray-5">
                            For single end product used by you or one client
                        </p>
                    </div>
                    <div class="avatar lg rounded no-thumbnail">$18</div>
                </li>
                <li class="list-group-item d-flex align-items-center justify-content-between">
                    <div class="me-3">
                        <a href="#" class="gray-8 fw-bold" title="Extended License">Extended License</a>
                        <p class="mb-0 gray-5">For single SaaS app with paying users</p>
                    </div>
                    <div class="avatar lg rounded no-thumbnail">$499</div>
                </li>
            </ul>
            <div class="card bg-body mb-4">
                <div class="card-body">
                    <h4>Support at <a href="#">pixelwibes@gmail.com</a></h4>
                    <span>Join our developers community to find answer to your question and
                        help others.</span>
                </div>
            </div>
            <strong class="d-block h6 my-2 pb-2 border-bottom">Helpful Links</strong>
            <ul class="lh-lg">
                <li>
                    <a href="#Documentation">Sidebar Layouts</a>
                    <ul>
                        <li><a href="index.html">Main version</a></li>
                        <li><a href="index-sidebar-v1.html">Min Sidebar v1</a></li>
                        <li><a href="index-sidebar-v3.html">Sidebar v3</a></li>
                        <li><a href="index-sidebar-v4.html">Sidebar v4 with Tab</a></li>
                    </ul>
                </li>
                <li><a href="changelog.html">Change log</a></li>
                <li>
                    <a href="#Documentation">Documentation</a>
                    <ul>
                        <li><a href="docs/index.html">Documentation</a></li>
                        <li><a href="docs/widget.html">Widget's Card</a></li>
                        <li><a href="docs/charts.html">Chart's</a></li>
                        <li><a href="docs/form.html">Advanced Form Elements</a></li>
                        <li><a href="docs/fonticon.html">Font icon</a></li>
                        <li><a href="docs/plugins.html">Vendor library</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!--[ Start offcanvas:: quick access ]-->
    <div class="offcanvas xl offcanvas-end" tabindex="-1" id="rightbar">
        <ul class="nav nav-pills align-items-center offcanvas-header" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#pills_tasks" type="button"
                    role="tab">
                    Tasks
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills_wallet" type="button"
                    role="tab">
                    Wallet
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills_activity" type="button"
                    role="tab">
                    Activity
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills_emails" type="button"
                    role="tab">
                    Emails
                </button>
            </li>
            <li class="nav-item ms-auto d-flex">
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </li>
        </ul>
        <div class="offcanvas-body custom_scroll">
            <div class="tab-content mt-lg-3">
                <!--[ Start:: Tasks ]-->
                <div class="tab-pane fade show active" id="pills_tasks" role="tabpanel">
                    <ul class="row g-2 list-unstyled li_animate">
                        <li class="col-12 text-uppercase text-muted">
                            <div class="d-flex justify-content-between small">
                                <span>Assigned Tasks</span>
                                <a href="#">View All</a>
                            </div>
                        </li>
                        <li class="col-6">
                            <div class="card border dashed">
                                <div class="card-body">
                                    <div class="fs-3">158</div>
                                    <span class="text-muted"><span class="pie">1/5</span> Pending</span>
                                </div>
                            </div>
                        </li>
                        <li class="col-6">
                            <div class="card border dashed">
                                <div class="card-body">
                                    <div class="fs-3">17</div>
                                    <span class="text-muted"><span class="pie">3/5</span> Completed</span>
                                </div>
                            </div>
                        </li>
                        <li class="col-6">
                            <div class="card border dashed">
                                <div class="card-body">
                                    <div class="fs-3">43</div>
                                    <span class="text-muted"><span class="pie">4/5</span> On Hold</span>
                                </div>
                            </div>
                        </li>
                        <li class="col-6">
                            <div class="card border dashed">
                                <div class="card-body">
                                    <div class="fs-3">27</div>
                                    <span class="text-muted"><span class="pie">2/5</span> In Progress</span>
                                </div>
                            </div>
                        </li>
                        <li class="col-12 text-uppercase text-muted mt-4 small">
                            Latest Tasks
                        </li>
                        <li class="col-12">
                            <ol class="list-group list-group-custom list-group-numbered">
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div>HR Dashboard</div>
                                        <small class="text-muted">Tempor fames sapien tristique bibendum per quisque
                                            senectus.</small>
                                        <div class="members mt-2">
                                            <label class="me-2">Team:</label>
                                            <a href="#"><img class="avatar xs rounded-circle"
                                                    src="assets/img/xs/avatar3.jpg" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="avatar" alt="friend" /></a>
                                            <a href="#"><img class="avatar xs rounded-circle"
                                                    src="assets/img/xs/avatar1.jpg" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="avatar" alt="friend" /></a>
                                        </div>
                                    </div>
                                    <span class="badge bg-light text-muted rounded-pill">Feedback</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div>Logo Design</div>
                                        <small class="text-muted">Create new logo in Figma file</small>
                                        <div class="members mt-2">
                                            <label class="me-2">Team:</label>
                                            <a href="#"><img class="avatar xs rounded-circle"
                                                    src="assets/img/xs/avatar2.jpg" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="avatar" alt="friend" /></a>
                                            <a href="#"><img class="avatar xs rounded-circle"
                                                    src="assets/img/xs/avatar4.jpg" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="avatar" alt="friend" /></a>
                                            <a href="#"><img class="avatar xs rounded-circle"
                                                    src="assets/img/xs/avatar5.jpg" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="avatar" alt="friend" /></a>
                                        </div>
                                    </div>
                                    <span class="badge bg-primary rounded-pill">New</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div>Hospital App</div>
                                        <small class="text-muted">the logo of the company you are applying to and an
                                            image.</small>
                                    </div>
                                    <span class="badge bg-light text-muted rounded-pill">Feedback</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div>CRM Project</div>
                                        <small class="text-muted">Convallis mollis porttitor nisi dis
                                            adipiscing.</small>
                                    </div>
                                    <span class="badge bg-light text-muted rounded-pill">Changes</span>
                                </li>
                            </ol>
                        </li>
                    </ul>
                </div>
                <!--[ Start:: Wallet ]-->
                <div class="tab-pane fade" id="pills_wallet" role="tabpanel">
                    <ul class="row g-2 list-unstyled li_animate">
                        <li class="col-12">
                            <div class="card border dashed">
                                <div class="card-header">
                                    <h6>Total Balance</h6>
                                </div>
                                <div class="card-body">
                                    <h2 class="text-accent">$2,854.00</h2>
                                    <p class="text-muted">Wallet ID: Q0001214777</p>
                                    <button class="btn btn-sm px-3 bg-dark text-muted">
                                        Deposit
                                    </button>
                                    <button class="btn btn-sm px-3 btn-primary">
                                        Withdraw
                                    </button>
                                </div>
                                <div class="card-footer py-3">
                                    <span class="text-success">1.75%</span>
                                    <span class="text-muted">March 31,2022</span>
                                </div>
                            </div>
                        </li>
                        <li class="col-12 text-uppercase text-muted mt-4 mt-xl-5">
                            <div class="d-flex justify-content-between small">
                                <span>Pay & Transfer</span>
                                <a href="#">View All</a>
                            </div>
                        </li>
                        <li class="col-4">
                            <a href="#"
                                class="card border dashed text-center small gray-5 text-decoration-none">
                                <div class="card-body px-2">
                                    <svg class="mb-2" xmlns="http://www.w3.org/2000/svg" width="28"
                                        fill="currentColor" viewbox="0 0 16 16">
                                        <path
                                            d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z">
                                        </path>
                                        <path
                                            d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z">
                                        </path>
                                    </svg>
                                    <p class="mb-0">Cards</p>
                                </div>
                            </a>
                        </li>
                        <li class="col-4">
                            <a href="#"
                                class="card border dashed text-center small gray-5 text-decoration-none">
                                <div class="card-body px-2">
                                    <svg class="mb-2" xmlns="http://www.w3.org/2000/svg" width="28"
                                        fill="currentColor" viewbox="0 0 16 16">
                                        <path
                                            d="M9.302 1.256a1.5 1.5 0 0 0-2.604 0l-1.704 2.98a.5.5 0 0 0 .869.497l1.703-2.981a.5.5 0 0 1 .868 0l2.54 4.444-1.256-.337a.5.5 0 1 0-.26.966l2.415.647a.5.5 0 0 0 .613-.353l.647-2.415a.5.5 0 1 0-.966-.259l-.333 1.242-2.532-4.431zM2.973 7.773l-1.255.337a.5.5 0 1 1-.26-.966l2.416-.647a.5.5 0 0 1 .612.353l.647 2.415a.5.5 0 0 1-.966.259l-.333-1.242-2.545 4.454a.5.5 0 0 0 .434.748H5a.5.5 0 0 1 0 1H1.723A1.5 1.5 0 0 1 .421 12.24l2.552-4.467zm10.89 1.463a.5.5 0 1 0-.868.496l1.716 3.004a.5.5 0 0 1-.434.748h-5.57l.647-.646a.5.5 0 1 0-.708-.707l-1.5 1.5a.498.498 0 0 0 0 .707l1.5 1.5a.5.5 0 1 0 .708-.707l-.647-.647h5.57a1.5 1.5 0 0 0 1.302-2.244l-1.716-3.004z">
                                        </path>
                                    </svg>
                                    <p class="mb-0">Transfer</p>
                                </div>
                            </a>
                        </li>
                        <li class="col-4">
                            <a href="#"
                                class="card border dashed text-center small gray-5 text-decoration-none">
                                <div class="card-body px-2">
                                    <svg class="mb-2" xmlns="http://www.w3.org/2000/svg" width="28"
                                        fill="currentColor" viewbox="0 0 16 16">
                                        <path
                                            d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z">
                                        </path>
                                        <path
                                            d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z">
                                        </path>
                                    </svg>
                                    <p class="mb-0">Withdraw</p>
                                </div>
                            </a>
                        </li>
                        <li class="col-4">
                            <a href="#"
                                class="card border dashed text-center small gray-5 text-decoration-none">
                                <div class="card-body px-2">
                                    <svg class="mb-2" xmlns="http://www.w3.org/2000/svg" width="28"
                                        fill="currentColor" viewbox="0 0 16 16">
                                        <path
                                            d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z">
                                        </path>
                                        <path
                                            d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z">
                                        </path>
                                    </svg>
                                    <p class="mb-0">Bill payments</p>
                                </div>
                            </a>
                        </li>
                        <li class="col-4">
                            <a href="#"
                                class="card border dashed text-center small gray-5 text-decoration-none">
                                <div class="card-body px-2">
                                    <svg class="mb-2" xmlns="http://www.w3.org/2000/svg" width="28"
                                        fill="currentColor" viewbox="0 0 16 16">
                                        <path
                                            d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z">
                                        </path>
                                        <path fill-rule="evenodd"
                                            d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z">
                                        </path>
                                    </svg>
                                    <p class="mb-0">Add Payee</p>
                                </div>
                            </a>
                        </li>
                        <li class="col-4">
                            <a href="#"
                                class="card border dashed text-center small gray-5 text-decoration-none">
                                <div class="card-body px-2">
                                    <svg class="mb-2" xmlns="http://www.w3.org/2000/svg" width="28"
                                        fill="currentColor" viewbox="0 0 16 16">
                                        <path
                                            d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5zM3 4.5a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-7zm3 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7z">
                                        </path>
                                    </svg>
                                    <p class="mb-0">Scan & Pay</p>
                                </div>
                            </a>
                        </li>
                        <li class="col-12">
                            <div class="card border dashed bg-body">
                                <div class="card-body">
                                    <p class="lead">
                                        Transact safely with Lender’s Fund Account (QBoat)
                                    </p>
                                    <p class="text-muted mb-4">Apply now, quick registration</p>
                                    <button class="btn bg-accent text-white">Start Now</button>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!--[ Start:: Activity ]-->
                <div class="tab-pane fade" id="pills_activity" role="tabpanel">
                    <ol class="activity-feed p-0 ms-3 mb-0">
                        <li class="feed-item mb-3 pl-lg-4 ps-3" data-content="" data-time="5 hours ago"
                            data-color="yellow">
                            <div class="card border dashed mb-5">
                                <div class="card-body p-3">
                                    <input type="checkbox" id="expand_1" name="expand_1" />
                                    <label for="expand_1" class="mb-0">
                                        <b>Request</b> code merge in git
                                    </label>
                                    <div class="feed-content">
                                        <span><b>comments</b> Lorem Ipsum is simply dummy text of the
                                            printing and typesetting industry.</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="feed-item mb-3 pl-lg-4 ps-3" data-content="" data-time="7 hours ago"
                            data-color="green">
                            <div class="card border dashed mb-5">
                                <div class="card-body p-3">
                                    <input type="checkbox" id="expand_2" name="expand_2" />
                                    <label for="expand_2" class="mb-0">
                                        <b>Update</b> React app login page code
                                    </label>
                                    <div class="feed-content">
                                        <span><b>comments</b> Lorem Ipsum is simply dummy text of the
                                            printing and typesetting industry.</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="feed-item mb-3 pl-lg-4 ps-3" data-content="" data-time="December 2022"
                            data-color="green">
                            <div class="card border dashed mb-5">
                                <div class="card-body p-3">
                                    <input type="checkbox" id="expand_3" name="expand_3" />
                                    <label for="expand_3" class="mb-0">
                                        2 contributions in private repositories
                                    </label>
                                    <div class="feed-content">
                                        <span><a href="#">isscaler/aromio-v0.1</a> 12 commits</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="feed-item mb-3 pl-lg-4 ps-3" data-content="" data-time="December 2022"
                            data-color="dark">
                            <div class="card border dashed mb-5">
                                <div class="card-body p-3">
                                    <input type="checkbox" id="expand_4" name="expand_4" />
                                    <label for="expand_4" class="mb-0">
                                        <b>QBoat</b> Create a new project
                                    </label>
                                    <div class="feed-content">
                                        <h2>BOOM!</h2>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ol>
                </div>
                <!--[ Start:: Emails ]-->
                <div class="tab-pane fade" id="pills_emails" role="tabpanel">
                    <ul class="row g-2 list-unstyled li_animate">
                        <li class="col-12 text-uppercase text-muted">
                            <div class="d-flex justify-content-between small">
                                <span>Outgoing Emails</span>
                                <a href="#">View All</a>
                            </div>
                        </li>
                        <li class="col-6">
                            <div class="card border dashed">
                                <div class="card-body">
                                    <div class="fs-3">158</div>
                                    <span class="text-muted"><span class="pie">1/5</span> Sending</span>
                                </div>
                            </div>
                        </li>
                        <li class="col-6">
                            <div class="card border dashed">
                                <div class="card-body">
                                    <div class="fs-3">752</div>
                                    <span class="text-muted"><span class="pie">1/5</span> Sent</span>
                                </div>
                            </div>
                        </li>
                        <li class="col-6">
                            <div class="card border dashed">
                                <div class="card-body">
                                    <div class="fs-3">125</div>
                                    <span class="text-muted"><span class="pie">1/5</span> Delivered</span>
                                </div>
                            </div>
                        </li>
                        <li class="col-6">
                            <div class="card border dashed">
                                <div class="card-body">
                                    <div class="fs-3">42</div>
                                    <span class="text-muted"><span class="pie">1/5</span> Failed</span>
                                </div>
                            </div>
                        </li>
                        <li class="col-12 text-uppercase text-muted mt-5">
                            <div class="d-flex justify-content-between small">
                                <span>Latest message</span>
                                <a href="#">View All</a>
                            </div>
                        </li>
                        <li class="col-12">
                            <ul class="list-group list-group-custom list-group-flush">
                                <li class="list-group-item d-flex align-items-start bg-body mb-1 border-0">
                                    <img class="rounded-circle avatar sm" src="assets/img/xs/avatar1.jpg"
                                        data-bs-toggle="tooltip" title="Avatar Name" alt="Avatar" />
                                    <div class="ms-2">
                                        <a href="#" title="">Github</a>
                                        <small class="text-muted">8 minutes ago</small>
                                        <p class="mb-0 small text-muted">
                                            Where are we in terms of design?
                                        </p>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex align-items-start bg-body mb-1 border-0">
                                    <img class="rounded-circle avatar sm" src="assets/img/xs/avatar2.jpg"
                                        data-bs-toggle="tooltip" title="Avatar Name" alt="Avatar" />
                                    <div class="ms-2">
                                        <a href="#" title="">Themeforest</a>
                                        <small class="text-muted">12 minutes ago</small>
                                        <p class="mb-0 small text-muted">
                                            Where are we in terms of design?
                                        </p>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex align-items-start bg-body mb-1 border-0">
                                    <img class="rounded-circle avatar sm" src="assets/img/xs/avatar3.jpg"
                                        data-bs-toggle="tooltip" title="Avatar Name" alt="Avatar" />
                                    <div class="ms-2">
                                        <a href="#" title="">Paybee inc.</a>
                                        <small class="text-muted">22 minutes ago</small>
                                        <p class="mb-0 small text-muted">
                                            Where are we in terms of design?
                                        </p>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex align-items-start bg-body mb-1 border-0">
                                    <img class="rounded-circle avatar sm" src="assets/img/xs/avatar4.jpg"
                                        data-bs-toggle="tooltip" title="Avatar Name" alt="Avatar" />
                                    <div class="ms-2">
                                        <a href="#" title="">Github</a>
                                        <small class="text-muted">28 minutes ago</small>
                                        <p class="mb-0 small text-muted">
                                            Where are we in terms of design?
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('admin-assets/vendor/peity/jquery.peity.min.js') }}"></script>
    <script>
        $("span.pie").peity("pie", {
            fill: ["var(--primary-color)", "var(--border-color)"],
        });
    </script>
    <!--[ Start offcanvas:: Template site map url ]-->
    <div class="offcanvas offcanvas-start sm" tabindex="-1" id="site_map">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">Template Site map url</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body custom_scroll">
            <ul class="lh-lg list-style list-unstyled">
                <li>
                    <a href="#"><span class="bullet theme-color1 me-3"></span>Dashboard</a>
                    <div class="lh-normal mb-3 ms-4 d-flex flex-wrap">
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="index.html">My Dashboard</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="my-wallet.html">My Wallet</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="my-iot.html">My Smart Home</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="my-task.html">My Tasks</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="my-analytics.html">My Analytics</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="my-project.html">My Project</a>
                    </div>
                </li>
                <li>
                    <a href="account.html"><span class="bullet theme-color1 me-3"></span>Accounts</a>
                </li>
                <li>
                    <a href="#"><span class="bullet theme-color2 me-3"></span>App</a>
                    <div class="lh-normal mb-3 ms-4 d-flex flex-wrap">
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="app-calendar.html">Calendar</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="app-inbox.html">Inbox</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="app-chat.html">Chat</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="app-contacts.html">Contact list</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="app-filemanager.html">File Manager</a>
                    </div>
                </li>
                <li>
                    <a href="#"><span class="bullet theme-color3 me-3"></span>Crafted Page</a>
                    <div class="lh-normal mb-3 ms-4 d-flex flex-wrap">
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="crafted-profile.html">My Profile</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="crafted-activity.html">User Activity</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="crafted-gallery.html">Imgae gallery</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="crafted-ticket.html">Support Ticket</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="crafted-pricing.html">Pricing table</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="crafted-search.html">Search page</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="crafted-map.html">World Map</a>
                    </div>
                </li>
                <li>
                    <a href="#"><span class="bullet theme-color3 me-3"></span>Authentication
                        Page</a>
                    <div class="lh-normal mb-3 ms-4 d-flex flex-wrap">
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="auth-signin.html">Sign in</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="auth-signup.html">Sign up</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="auth-password-reset.html">Reset Password</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="auth-two-step.html">2-step Verification</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="auth-lockscreen.html">Page Locked</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="auth-maintenance.html">Under Construction!</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="auth-404.html">404</a>
                    </div>
                </li>
                <li class="mt-5">QBoat Documentation</li>
                <li>
                    <a href="docs/index.html"><span class="bullet theme-color1 me-3"></span>Documentation</a>
                </li>
                <li>
                    <a href="docs/widget.html"><span class="bullet theme-color2 me-3"></span>Widget's</a>
                </li>
                <li>
                    <a href="#"><span class="bullet theme-color3 me-3"></span>Charts</a>
                    <div class="lh-normal mb-3 ms-4 d-flex flex-wrap">
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/chart-apex.html">Apex chart</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/chart-sparkline.html">Sparkline</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/chart-chartjs.html">Chartjs</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/chart-knob.html">knob chart</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/chart-peity.html">Peity chart</a>
                    </div>
                </li>
                <li>
                    <a href="#"><span class="bullet theme-color4 me-3"></span>Form Elements</a>
                    <div class="lh-normal mb-3 ms-4 d-flex flex-wrap">
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/form-clipboard.html">Clipboard</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/form-datepicker.html">Datepicker</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/form-daterange.html">Date Range Picker</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/form-flatpickr.html">Flatpickr</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/form-inputmask.html">Inputmask</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/form-maxlength.html">Bootstrap Maxlength</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/form-nouislider.html">nouislider</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/form-passwordmeter.html">Password Meter</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/form-rangeslider.html">Range Slider</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/form-select2.html">Select 2</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/form-sweetalert2.html">Sweetalert 2</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/form-tagsinput.html">Tags input</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/form-wizard.html">jQuery Steps Wizard</a>
                    </div>
                </li>
                <li>
                    <a href="#"><span class="bullet theme-color5 me-3"></span>Font icon</a>
                    <div class="lh-normal mb-3 ms-4 d-flex flex-wrap">
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/icon-fontawesome.html">Font awesome</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/icon-bootstrap.html">Bootstrap Icon</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/icon-flag.html">Country Flag icon</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/icon-linear.html">Simple line icon</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/icon-feather.html">Feather icon</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/icon-weather.html">Weather icon</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/icon-icons8.html">Icons8 icon</a>
                    </div>
                </li>
                <li>
                    <a href="#"><span class="bullet theme-color6 me-3"></span>Vendor Plugin</a>
                    <div class="lh-normal mb-3 ms-4 d-flex flex-wrap">
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/plugin-datatable.html">DataTables</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/plugin-owlcarousel.html">owl Carousel</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/plugin-summernote.html">Summernote</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/plugin-fancybox.html">Fancybox</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/plugin-fullcalendar.html">Full calendar</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/plugin-tuicalendar.html">tui Calendar</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/plugin-dropify.html">Dropify</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/plugin-jkanban.html">jKanban Board</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/plugin-jsgrid.html">jsgrid</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/plugin-masonrygallery.html">Masonry Gallery</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/plugin-nestable.html">nestable</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/plugin-countup.html">Count Up</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/plugin-tabledragger.html">Table Dragger</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/plugin-swiper.html">Swiper</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/plugin-jspreadsheet.html">jspreadsheet</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/plugin-rating.html">Rating Review</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/plugin-br-tabs.html">Responsive Tabs</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/plugin-bootstrap-select.html">Bootstrap Select</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/plugin-bs5-toast.html">Bootstrap 5 toast</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/plugin-bootstrap-touchspin.html">Bootstrap TouchSpin</a>
                    </div>
                </li>
                <li>
                    <a href="#"><span class="bullet theme-color3 me-3"></span>Bootstrap
                        Component</a>
                    <div class="lh-normal mb-3 ms-4 d-flex flex-wrap">
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/ui-accordion.html">Profile</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/ui-accordion.html">Accordion</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/ui-alerts.html">Alerts</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/ui-avatar.html">User Avatar</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/ui-badges.html">Badges</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/ui-breadcrumb.html">Breadcrumb</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/ui-buttons.html">Buttons</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/ui-cards.html">Cards</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/ui-carousel.html">Carousel</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/ui-collapse.html">Collapse</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/ui-dropdowns.html">Dropdowns</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/ui-listgroup.html">List group</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/ui-modal.html">Modal</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/ui-navstabs.html">Navs and tabs</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/ui-navbar.html">Navbar</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/ui-offcanvas.html">Offcanvas</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/ui-pagination.html">Pagination</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/ui-placeholders.html">Placeholders</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/ui-popovers.html">Popovers</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/ui-progress.html">Progress</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/ui-spinners.html">Spinners</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/ui-toasts.html">Toasts</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!--[ Start:: main body background and img ]-->
    <div class="body-bg">
        <svg class="img-fluid top-0" viewbox="0 0 1920 1080" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_121_2)">
                <g opacity="0.14" filter="url(#filter0_f_121_2)">
                    <circle cx="1840.5" cy="600.5" r="225.5" fill="var(--accent-color)"></circle>
                </g>
                <g opacity="0.1" filter="url(#filter1_f_121_2)">
                    <circle cx="222.5" cy="118.5" r="327.5" fill="var(--primary-color)"></circle>
                </g>
            </g>
            <defs>
                <filter id="filter0_f_121_2" x="1265" y="25" width="1151" height="1151"
                    filterunits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feflood flood-opacity="0" result="BackgroundImageFix"></feflood>
                    <feblend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape">
                    </feblend>
                    <fegaussianblur stddeviation="175" result="effect1_foregroundBlur_121_2"></fegaussianblur>
                </filter>
                <filter id="filter1_f_121_2" x="-455" y="-559" width="1355" height="1355"
                    filterunits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feflood flood-opacity="0" result="BackgroundImageFix"></feflood>
                    <feblend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape">
                    </feblend>
                    <fegaussianblur stddeviation="175" result="effect1_foregroundBlur_121_2"></fegaussianblur>
                </filter>
                <clippath id="clip0_121_2">
                    <rect width="1920" height="1080" fill="white"></rect>
                </clippath>
            </defs>
        </svg>
        <svg width="260" height="350" viewbox="0 0 260 350" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path opacity="0.3" fill="var(--theme-color5)"
                d="M129.099 290.457H162.14H162.171L145.635 311.735L129.099 290.457Z"></path>
            <path opacity="0.5" fill="var(--theme-color6)"
                d="M288.197 279.48L260.585 314.994L233.004 279.48H288.197Z"></path>
            <path opacity="0.7" fill="var(--theme-color6)"
                d="M233.004 350.478H177.812L205.393 314.994L233.004 350.478Z"></path>
            <path opacity="0.4" fill="var(--theme-color5)"
                d="M233.004 350.478L260.585 314.994L288.197 350.478H233.004Z"></path>
            <path opacity="1" fill="var(--accent-color)"
                d="M260.585 172.998L233.004 137.484H288.197L260.585 172.998Z"></path>
            <path opacity=".8" fill="var(--primary-color)"
                d="M197.68 305.062L205.393 314.994H150.201L177.781 279.48L197.68 305.062Z"></path>
            <path opacity="1" fill="var(--theme-color5)"
                d="M225.479 269.583L233.192 279.514H178L205.581 244L225.479 269.583Z"></path>
            <path opacity="1" fill="var(--accent-color)"
                d="M233.004 279.48L205.393 243.996H260.585L233.004 279.48Z"></path>
            <path opacity="1" fill="var(--primary-color)" d="M232.611 350.484L205 315H260.192L232.611 350.484Z">
            </path>
            <path opacity="0.5" fill="var(--theme-color5)"
                d="M202.524 203.07L212.087 190.74L221.682 203.07H202.524Z"></path>
            <path opacity="1" fill="var(--primary-color)"
                d="M218.412 129.551L233.467 110.179L248.522 129.551H218.412Z"></path>
            <path opacity="0.3" fill="var(--theme-color6)"
                d="M233.004 208.482H288.197L260.585 243.996L233.004 208.482Z"></path>
            <path opacity="1" fill="var(--primary-color)"
                d="M260.616 172.998L288.197 208.482H233.004L260.616 172.998Z"></path>
            <path opacity="0.6" fill="var(--accent-color)"
                d="M185.494 289.411L177.781 279.48H232.974L205.393 314.994L185.494 289.411Z"></path>
            <path opacity="1" fill="var(--accent-color)"
                d="M224.489 204.577L241.056 225.885H207.923L224.489 204.577Z"></path>
        </svg>
    </div>
    @yield('customJs')
    <!--[ Jquery Page Js ]-->
    <script src="{{ asset('admin-assets/js/theme.js') }}"></script>
    <!--[ Chart plugin url ]-->
    <script src="{{ asset('admin-assets//bundles/apexcharts.bundle.js') }}"></script>
    <!--[ Forms url ]-->
    <script src="{{ asset('admin-assets//bundles/bootstrapdatepicker.bundle.js') }}"></script>
    <!--[ plugin url ]-->
    <!--[ Jquery Page Js ]-->
    <script>
        var options1 = {
            chart: {
                type: "bar",
                width: 100,
                height: 40,
                sparkline: {
                    enabled: true,
                },
            },
            stroke: {
                width: 2,
            },
            plotOptions: {
                bar: {
                    columnWidth: "80%",
                },
            },
            colors: ["var(--theme-color2)"],
            series: [{
                data: [47, 45, 74, 14, 56, 74, 14, 11, 7, 39, 82],
            }, ],
            labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11],
            xaxis: {
                crosshairs: {
                    width: 1,
                },
            },
            tooltip: {
                fixed: {
                    enabled: false,
                },
                x: {
                    show: false,
                },
                y: {
                    title: {
                        formatter: function(seriesName) {
                            return "";
                        },
                    },
                },
                marker: {
                    show: false,
                },
            },
        };
        new ApexCharts(
            document.querySelector("#apexspark_bar_1"),
            options1
        ).render();
        var options2 = {
            chart: {
                type: "bar",
                width: 100,
                height: 40,
                sparkline: {
                    enabled: true,
                },
            },
            stroke: {
                width: 2,
            },
            plotOptions: {
                bar: {
                    columnWidth: "80%",
                },
            },
            colors: ["var(--theme-color1)"],
            series: [{
                data: [47, 45, 74, 14, 56, 74, 14, 11, 7, 39, 82],
            }, ],
            labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11],
            xaxis: {
                crosshairs: {
                    width: 1,
                },
            },
            tooltip: {
                fixed: {
                    enabled: false,
                },
                x: {
                    show: false,
                },
                y: {
                    title: {
                        formatter: function(seriesName) {
                            return "";
                        },
                    },
                },
                marker: {
                    show: false,
                },
            },
        };
        new ApexCharts(
            document.querySelector("#apexspark_bar_2"),
            options2
        ).render();
        var options3 = {
            chart: {
                type: "bar",
                width: 100,
                height: 40,
                sparkline: {
                    enabled: true,
                },
            },
            stroke: {
                width: 2,
            },
            plotOptions: {
                bar: {
                    columnWidth: "80%",
                },
            },
            colors: ["var(--theme-color3)"],
            series: [{
                data: [47, 45, 74, 14, 56, 74, 14, 11, 7, 39, 82],
            }, ],
            labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11],
            xaxis: {
                crosshairs: {
                    width: 1,
                },
            },
            tooltip: {
                fixed: {
                    enabled: false,
                },
                x: {
                    show: false,
                },
                y: {
                    title: {
                        formatter: function(seriesName) {
                            return "";
                        },
                    },
                },
                marker: {
                    show: false,
                },
            },
        };
        new ApexCharts(
            document.querySelector("#apexspark_bar_3"),
            options3
        ).render();
        var options4 = {
            chart: {
                type: "bar",
                width: 100,
                height: 40,
                sparkline: {
                    enabled: true,
                },
            },
            stroke: {
                width: 2,
            },
            plotOptions: {
                bar: {
                    columnWidth: "80%",
                },
            },
            colors: ["var(--theme-color4)"],
            series: [{
                data: [47, 45, 74, 14, 56, 74, 14, 11, 7, 39, 82],
            }, ],
            labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11],
            xaxis: {
                crosshairs: {
                    width: 1,
                },
            },
            tooltip: {
                fixed: {
                    enabled: false,
                },
                x: {
                    show: false,
                },
                y: {
                    title: {
                        formatter: function(seriesName) {
                            return "";
                        },
                    },
                },
                marker: {
                    show: false,
                },
            },
        };
        new ApexCharts(
            document.querySelector("#apexspark_bar_4"),
            options4
        ).render();
        var options4 = {
            chart: {
                type: "bar",
                //width: 100,
                height: 140,
                sparkline: {
                    enabled: true,
                },
            },
            stroke: {
                width: 2,
            },
            plotOptions: {
                bar: {
                    columnWidth: "40%",
                },
            },
            colors: ["var(--theme-color5)"],
            series: [{
                data: [47, 45, 74, 14, 56, 74, 14, 11, 7, 39, 82],
            }, ],
            labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11],
            xaxis: {
                crosshairs: {
                    width: 1,
                },
            },
            tooltip: {
                fixed: {
                    enabled: false,
                },
                x: {
                    show: false,
                },
                y: {
                    title: {
                        formatter: function(seriesName) {
                            return "";
                        },
                    },
                },
                marker: {
                    show: false,
                },
            },
        };
        new ApexCharts(
            document.querySelector("#apexspark_bar_5"),
            options4
        ).render();
        var options = {
            chart: {
                type: "area",
                height: 260,
                stacked: true,
                dropShadow: {
                    enabled: true,
                    enabledSeries: [0],
                    top: -2,
                    left: 2,
                    blur: 5,
                    opacity: 0.06,
                },
                toolbar: {
                    show: false,
                },
            },
            colors: ["var(--primary-color)", "var(--accent-color)"],
            stroke: {
                curve: "smooth",
                width: 3,
            },
            dataLabels: {
                enabled: false,
            },
            series: [{
                    name: "Online",
                    data: generateDayWiseTimeSeries(0, 18),
                },
                {
                    name: "Offline",
                    data: generateDayWiseTimeSeries(1, 18),
                },
            ],
            markers: {
                size: 0,
                strokeColor: "#fff",
                strokeWidth: 3,
                strokeOpacity: 1,
                fillOpacity: 1,
                hover: {
                    size: 6,
                },
            },
            xaxis: {
                type: "datetime",
                axisBorder: {
                    show: false,
                },
                axisTicks: {
                    show: false,
                },
            },
            yaxis: {
                labels: {
                    offsetX: 14,
                    offsetY: -5,
                },
                tooltip: {
                    enabled: true,
                },
            },
            grid: {
                padding: {
                    left: -5,
                    right: 5,
                },
            },
            tooltip: {
                x: {
                    format: "dd MMM yyyy",
                },
            },
            legend: {
                position: "bottom",
                horizontalAlign: "center",
            },
            fill: {
                type: "solid",
                fillOpacity: 0.4,
            },
        };
        var chart = new ApexCharts(
            document.querySelector("#timeline-chart"),
            options
        );
        chart.render();

        function generateDayWiseTimeSeries(s, count) {
            var values = [
                [4, 3, 10, 9, 29, 19, 25, 9, 12, 7, 19, 5, 13, 9, 17, 2, 7, 5],
                [2, 3, 8, 7, 22, 16, 23, 7, 11, 5, 12, 5, 10, 4, 15, 2, 6, 2],
            ];
            var i = 0;
            var series = [];
            var x = new Date("11 Nov 2012").getTime();
            while (i < count) {
                series.push([x, values[s][i]]);
                x += 86400000;
                i++;
            }
            return series;
        }
        // Order status
        $(document).ready(function() {
            var options = {
                chart: {
                    height: 220,
                    type: "donut",
                },
                dataLabels: {
                    enabled: false,
                },
                legend: {
                    position: "top",
                    horizontalAlign: "center",
                    show: true,
                },
                colors: ["var(--theme-color3)", "var(--theme-color5)"],
                series: [40, 60],
                responsive: [{
                    breakpoint: 480,
                    options: {
                        chart: {
                            width: 200,
                        },
                        legend: {
                            position: "bottom",
                        },
                    },
                }, ],
            };
            var chart = new ApexCharts(
                document.querySelector("#apex-simple-donut"),
                options
            );
            chart.render();
        });
        $(document).ready(function() {
            var randomizeArray = function(arg) {
                var array = arg.slice();
                var currentIndex = array.length,
                    temporaryValue,
                    randomIndex;
                while (0 !== currentIndex) {
                    randomIndex = Math.floor(Math.random() * currentIndex);
                    currentIndex -= 1;
                    temporaryValue = array[currentIndex];
                    array[currentIndex] = array[randomIndex];
                    array[randomIndex] = temporaryValue;
                }
                return array;
            };
            // data for the sparklines that appear below header area
            var sparklineData = [
                47, 45, 54, 38, 56, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93,
                53, 61, 27, 54, 43, 19, 46,
            ];
            // topb big chart
            var spark1 = {
                chart: {
                    type: "area",
                    height: 100,
                    sparkline: {
                        enabled: true,
                    },
                },
                stroke: {
                    width: 2,
                },
                series: [{
                    data: randomizeArray(sparklineData),
                }, ],
                colors: ["var(--primary-color)"],
                fill: {
                    type: "gradient",
                    gradient: {
                        //shade: 'dark',
                        type: "vertical",
                        shadeIntensity: 0.1,
                        gradientToColors: [
                            "var(--accent-color)"
                        ], // optional, if not defined - uses the shades of same color in series
                        inverseColors: true,
                        opacityFrom: 1,
                        opacityTo: 1,
                        stops: [0, 100],
                        colorStops: [],
                    },
                },
            };
            var spark1 = new ApexCharts(
                document.querySelector("#apexspark1"),
                spark1
            );
            spark1.render();
        });
        var options = {
            series: [67],
            chart: {
                height: 260,
                type: "radialBar",
                offsetY: -10,
            },
            plotOptions: {
                radialBar: {
                    dataLabels: {
                        name: {
                            offsetY: 20,
                            color: "var(--primary-color)",
                            formatter: function() {
                                return ["Posts", "(30 days)"];
                            },
                        },
                        value: {
                            color: "#111",
                            offsetY: -30,
                            fontSize: "18px",
                        },
                    },
                },
            },
            labels: ["Median Ratio"],
        };
        var chart = new ApexCharts(
            document.querySelector("#apex_sales_revenue"),
            options
        );
        chart.render();
        $(document).ready(function() {
            var options = {
                chart: {
                    height: 350,
                    type: "bar",
                },
                colors: [
                    "var(--theme-color1)",
                    "var(--theme-color2)",
                    "var(--theme-color4)",
                ],
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: "55%",
                        endingShape: "rounded",
                    },
                },
                dataLabels: {
                    enabled: false,
                },
                stroke: {
                    show: true,
                    width: 2,
                    colors: ["transparent"],
                },
                series: [{
                        name: "Net Profit",
                        data: [44, 55, 57, 56, 61, 58, 63, 60, 66],
                    },
                    {
                        name: "Revenue",
                        data: [76, 85, 101, 98, 87, 105, 91, 114, 94],
                    },
                    {
                        name: "Free Cash Flow",
                        data: [35, 41, 36, 26, 45, 48, 52, 53, 41],
                    },
                ],
                xaxis: {
                    categories: [
                        "Feb",
                        "Mar",
                        "Apr",
                        "May",
                        "Jun",
                        "Jul",
                        "Aug",
                        "Sep",
                        "Oct",
                    ],
                },
                yaxis: {
                    title: {
                        text: "$ (thousands)",
                    },
                },
                fill: {
                    opacity: 1,
                },
                tooltip: {
                    y: {
                        formatter: function(val) {
                            return "$ " + val + " thousands";
                        },
                    },
                },
            };
            var chart = new ApexCharts(
                document.querySelector("#apex-basic-column"),
                options
            );
            chart.render();
        });
    </script>


</body>

</html>
