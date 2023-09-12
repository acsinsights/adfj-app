<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
  	   <!-- Title -->
	<title>ADFJ Studios</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="DexignZone">
	<meta name="robots" content="">

	

	<meta property="og:title" content="Griya - Real Estate Admin & Dashboard Bootstrap 5 Template">
	<meta property="og:description" content="Griya is a premier real estate development that offers a range of high-quality residential properties designed to meet the diverse needs and preferences of buyers. With its commitment to excellence and attention to detail, Griya has established itself as a trusted brand in the real estate industry.">
	<meta property="og:image" content="https://griya.dexignzone.com/xhtml/social-image.png">
	<meta name="format-detection" content="telephone=no">

	<!-- Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicon icon -->
	<link rel="icon" type="image/png" href="images/favicon.png">

    <link rel="shortcut icon" href="{{ asset('user-assets/img/logo/favicon.ico') }}" type="image/x-icon">

    <link href="{{ asset('login-assets/vendor/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('login-assets/css/style.css') }}" rel="stylesheet">


</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
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
                                    <h4 class="text-center mb-4">Forgot Password</h4>
                                    @if (Session::has('message'))
                                    <div class="alert alert-success" role="alert">
                                       {{ Session::get('message') }}
                                   </div>
                                    @endif
                                    <form action="{{ route('forget.password.post') }}">
                                        <div class="mb-3">
                                            <label><strong>Email</strong></label>
                                            <input type="email" class="form-control" placeholder="hello@example.com">
                                            @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email')}}</span>
                                        @endif
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Send Password Reset Link</button>
                                        </div>
                                    </form>
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

	<script src="vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>


    <script src="{{ asset('login-assets/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('login-assets/js/custom.min.js') }}"></script>

    <script src="{{ asset('login-assets/js/deznav-init.js') }}"></script>
    <script src="{{ asset('login-assets/js/demo.js') }}"></script>
    <script src="{{ asset('login-assets/js/styleSwitcher.js') }}"></script>
</body>
</html>
