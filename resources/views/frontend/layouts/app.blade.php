<!doctype html>
<html lang="en">

<head>
    <title> MedService | @yield('title') </title>

    @include('frontend.layouts.header')

</head>

<body class="@yield('body-class')">


    @include('frontend.layouts.nav')

    @yield('page')

    @include('frontend.layouts.footer')


</body>

</html>
