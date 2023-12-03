<!DOCTYPE html>

<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
       @include('partials.base.header')
    </head>
    <!-- END: Head -->
    <body class="main">
        <!-- BEGIN: Mobile Menu -->
        {{-- @include('partials.base.mobile_menu') --}}
        <!-- END: Mobile Menu -->
        <!-- BEGIN: Top Bar -->
        @include('partials.base.topbar_menu')
        <!-- END: Top Bar -->
        <div class="wrapper">
            <div class="wrapper-box">
                <!-- BEGIN: Side Menu -->
                {{-- @include('partials.base.sidebar_menu') --}}
                <!-- END: Side Menu -->
                <!-- BEGIN: Content -->
                <div class="content">
                   @yield('content')
                </div>
                <!-- END: Content -->
            </div>
        </div>

        @include('partials.base.footer')
    </body>
</html>
