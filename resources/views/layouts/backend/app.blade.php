<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from coderthemes.com/ubold/layouts/light/dashboard-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Jan 2019 11:44:02 GMT -->

<head>
    <meta charset="utf-8" />
    <title> {{ config('app.name') }} || @yield('pageTitle') </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href=" {{ asset('assets/backend/images/favicon.ico') }} ">

    <!-- plugin css -->
    @include('layouts.backend.partial.css')
</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Topbar Start -->
        @include('layouts.backend.partial.topbar')
        <!-- end Topbar -->

        <!-- ========== Left Sidebar Start ========== -->
        @include('layouts.backend.partial.sidebar')
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <div class="content">

            @yield('content')

            </div>
            <!-- content -->

            <!-- Footer Start -->
            @include('layouts.backend.partial.footer')
            <!-- end Footer -->

        </div>
        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->
  

    </div>
    <!-- END wrapper -->

    <!-- Right Sidebar -->
    @include('layouts.backend.partial.rightbar')
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- Vendor js -->
    @include('layouts.backend.partial.js')

    @yield('pageModel')

</body>

<!-- Mirrored from coderthemes.com/ubold/layouts/light/dashboard-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Jan 2019 11:44:03 GMT -->

</html>