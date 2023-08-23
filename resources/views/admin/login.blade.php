<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <!-- Title -->
    <title>AdFj Studios | Admin Login</title>

    <!-- Meta -->
    <meta charset="utf-8">

    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="{{ asset('user-assets/img/logo/favicon.ico') }}" type="image/x-icon">

    <link href="{{ asset('login-assets/vendor/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('login-assets/css/style.css') }}" rel="stylesheet">

</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    @include('admin.message')
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <div class="text-center mb-3">
                                        <a href="#"><img class="logo-light"
                                                src="{{ asset('user-assets/img/logo/adfj.svg') }}" alt="logo"
                                                height="50px" width="120px" alt=""></a>
                                        <a href="#"><img class="logo-dark"
                                                src="{{ asset('user-assets/img/logo/adfj.svg') }}" alt="logo"
                                                height="50px" width="120px" alt=""></a>
                                    </div>
                                    <h4 class="text-center mb-4">Sign in your account</h4>
                                    <form action="{{ route('admin.authenticate') }}" method="post">
                                        @csrf
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="email" name="email"
                                                class="form-control @error('email') is-invalid @enderror"
                                                value="{{ old('email') }}" placeholder="Username">

                                            @error('email')
                                                <p class="invalid-feedback">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="mb-3 position-relative">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" name="password" id="dz-password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                value="" placeholder="Password">
                                            <span class="show-pass eye">

                                                <i class="fa fa-eye-slash"></i>
                                                <i class="fa fa-eye"></i>

                                            </span>

                                            @error('password')
                                                <p class="invalid-feedback">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="row d-flex justify-content-between mt-4 mb-2">
                                            {{-- <div class="mb-3">
                                                <div class="form-check custom-checkbox ms-1">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="basic_checkbox_1">
                                                    <label class="form-check-label" for="basic_checkbox_1">Remember my
                                                        preference</label>
                                                </div>
                                            </div> --}}
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                                        </div>
                                    </form>
                                    {{-- <div class="new-account mt-3">
                                        <p>Don't have an account? <a class="text-primary" href="page-register.html">Sign
                                                up</a></p>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('login-assets/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('login-assets/js/custom.min.js') }}"></script>
    <script src="{{ asset('login-assets/vendor/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('login-assets/js/deznav-init.js') }}"></script>
    <script src="{{ asset('login-assets/js/demo.js') }}"></script>
    <script src="{{ asset('login-assets/js/styleSwitcher.js') }}"></script>
</body>

</html>
