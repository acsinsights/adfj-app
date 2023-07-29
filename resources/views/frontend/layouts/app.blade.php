<!doctype html>
<html lang="en">

<head>
    <title>   AdFJ Studios | @yield('title') </title>
    @include('frontend.layouts.header')

</head>

<body>

    @include('frontend.layouts.nav')

    @yield('page')

    @include('frontend.layouts.footer')




</body>

</html>
