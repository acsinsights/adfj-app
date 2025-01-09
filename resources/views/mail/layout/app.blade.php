<!DOCTYPE html>
<html lang="en" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">

<head>
    <meta charset="utf-8">
    <meta name="x-apple-disable-message-reformatting">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no, date=no, address=no, email=no">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');

        .mail,
        body {
            font-family: 'Poppins', sans-serif;
            font-size: 16px;
            font-weight: 500;
            line-height: 1.5;
            color: #333;
            margin: 0;
            padding: 0;
            max-width: 600px;
            margin: 0 auto;
        }

        .w-100 {
            width: 100%;
        }

        .bg-gray {
            background-color: #353C49;
        }

        .bg-blue {
            background-color: #1C57D7;
            color: #fff;
        }

        .bg-blue a {
            color: #fff;
        }

        .color-white {
            color: #fff;
        }

        .color-gray {
            color: #353C49;
        }

        .color-blue {
            color: #1C57D7;
        }

        .text-center {
            text-align: center;
        }

        a,
        .link {
            color: #1C57D7;
            text-decoration: underline;
        }

        b,
        .bold {
            font-weight: 600;
        }

        p {
            margin: 5px 0;
            padding: 3px 0;
        }

        .main {
            padding: 0px 15px;
        }

        .header {
            background-color: #ef428a;
            color: #fff;
            padding: 20px;
            text-align: center;
            border-radius: 0px 0px 40px 40px;
            margin-bottom: 20px;
        }

        .subject {
            color: #353C49;
            font-size: 20px;
            font-weight: 600;
            text-align: center;
            margin-bottom: 20px;
        }

        .footer {
            color: #fff;
            padding: 20px;
            margin-top: 20px;
            text-align: center;
            background: #353C49;
            border-radius: 40px 40px 0px 0px;
        }

        .btn {
            padding: 5px 10px;
            border-radius: 5px;
            margin: 5px 0;
            display: inline-block;
            text-decoration: none;
        }


        .btn-sm {
            padding: 3px 6px;
            border-radius: 3px;
            margin: 3px 0;
            display: inline-block;
            font-size: 12px;
        }

        .btn-primary {
            background-color: #1C57D7;
            color: #fff;
        }

        .btn-danger {
            background-color: #E63737;
            color: #fff;
        }

        .my-0 {
            margin: 0px auto;
        }

        .btn-info {
            background-color: #0096EA;
            color: #fff;
        }

        .btn-warning {
            background-color: #DF7E25;
            color: #fff;
        }

        .btn-success {
            background-color: #00C840;
            color: #fff;
        }

        .mb-0 {
            margin-bottom: 0px;
        }

        .license {
            color: #353C49;
            padding: 3px 10px;
            border-radius: 5px;
            margin: 5px 0;
            display: inline-block;
            border: 2px solid #353C49;
            font-family: monospace;
            text-decoration: none;
            text-transform: uppercase;
        }

        .domain {
            color: #7B0700;
            padding: 3px 10px;
            border-radius: 5px;
            margin: 5px 0;
            font-weight: 600;
            display: inline-block;
            border: 2px solid #7B0700;
            text-decoration: none;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            text-align: left;
            color: #353C49;
        }

        th,
        td {
            border: 1px solid #B4B4B4;
            padding: 3px 5px;
        }

        thead {
            background-color: #E4E4E4;

        }

        .license-create-data tr td {
            border: 1px solid #000;
            padding: 8px;
        }

        .color-green {
            color: #2ecc71;
        }

        .color-red {
            color: #c51910
        }
    </style>
</head>

<body>
    <div class="mail">
        <div class="header">
            <img src="{{ asset('user-assets/img/logo/adfj_light.png.png') }}" class="logo" width="250"
                alt="AdFJ Studios">
        </div>
        <div class="main">

            @yield('content')

        </div>
        <div class="footer" style="font-size:11px;color:#bababa;">
            <img src="{{ asset('user-assets/img/logo/adfj_light.png') }}" class="logo" width="150"
                alt="AdFJ Studios">
            <p>
                © {{ date('Y') }}
                <a style="color:#bababa;" href="https://adfjstudios.com/">
                    ADFJ Studios
                </a>.
                All Rights Reserved.
                <br>
                <span>

                    <a style="color:#bababa;" href="https://adfj-app.test/privacy">Privacy Policy</a> |
                    <a style="color:#bababa;" href="https://adfj-app.test/terms">Terms & Conditions</a>
                </span>
            </p>
        </div>
    </div>
</body>

</html>
