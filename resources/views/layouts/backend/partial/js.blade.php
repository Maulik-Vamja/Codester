@yield('upperJS')

<script src=" {{ asset('assets/backend/js/vendor.min.js') }} "></script>

    <!-- Plugins js-->
    <script src=" {{ asset('assets/backend/libs/jquery-sparkline/jquery.sparkline.min.js') }} "></script>
    {{-- <script src=" {{ asset('assets/backend/libs/jquery-vectormap/jquery-jvectormap-1.2.2.min.js') }}"></script> --}}
    <script src=" {{ asset('assets/backend/libs/jquery-vectormap/jquery-jvectormap-world-mill-en.js') }} "></script>
    
    <!-- Dashboard 2 init -->
    <script src=" {{ asset('assets/backend/js/pages/dashboard-2.init.js') }} "></script>

    <!-- App js-->
    <script src=" {{ asset('assets/backend/js/app.min.js') }}"></script>

@yield('lowerJS')

