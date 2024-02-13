<!DOCTYPE html>
<html lang="en">

<head>

    @include('website.includes.meta')

    <title>AITVET |@yield('titel')</title>
    @include('website.includes.style')

</head>

<body>

 @include('website.includes.header')

 @yield('body')


@include('website.includes.footer')


    @include('website.includes.js')

</body>

</html>
