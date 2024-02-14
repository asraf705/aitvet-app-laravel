<!DOCTYPE html>
<html lang="en">


<!-- {{ route('admin.home') }}  21 Nov 2019 03:44:50 GMT -->

<head>


    @include('admin.includes.meta')

    <title>AITVET | ADMIN | @yield('titel') </title>


    @include('admin.includes.style')


</head>

<body>

    <div class="loader"></div>
    <div id="app">

        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>

            @include('admin.includes.header')


            @include('admin.includes.left-sidebar')
            <div class="main-content">
                @yield('body')


                @include('admin.includes.right-sidebar')

            </div>

            @include('admin.includes.footer')

        </div>
    </div>


    @include('admin.includes.script')

</body>


<!--   21 Nov 2019 03:47:04 GMT -->

</html>
