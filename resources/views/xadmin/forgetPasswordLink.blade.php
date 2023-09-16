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
    <main class="login-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Reset Password</div>
                        <div class="card-body">

                            <form action="{{ route('reset.password.post') }}" method="POST">
                                @csrf
                                <input type="hidden" name="token" value="{{ $token }}">

                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                    <div class="col-md-6">
                                        <input type="text" id="email_address" class="form-control" name="email" required autofocus>
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                    <div class="col-md-6">
                                        <input type="password" id="password" class="form-control" name="password" required autofocus>
                                        @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>
                                    <div class="col-md-6">
                                        <input type="password" id="password-confirm" class="form-control" name="password_confirmation" required autofocus>
                                        @if ($errors->has('password_confirmation'))
                                            <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Reset Password
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
      </main>

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
