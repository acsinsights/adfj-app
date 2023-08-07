<!doctype html>
<html lang="en">

<head>
    <title>   AdFJ Studios | @yield('title') </title>
    @include('newadmin.admin-layout.admin-header')

</head>

<body>

    @include('newadmin.admin-layout.admin-nav')

    @yield('admin-page')

    @include('newadmin.admin-layout.admin-footer')




</body>

</html>
