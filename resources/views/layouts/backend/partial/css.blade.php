@yield('upperCss')


<link href=" {{ asset('assets/backend/libs/jquery-vectormap/jquery-jvectormap-1.2.2.css') }} " rel="stylesheet"
type="text/css" />

<!-- App css -->
<link href=" {{ asset('assets/backend/css/bootstrap.min.css') }} " rel="stylesheet" type="text/css" />

<!-- App css -->
{{-- <link href="{{ asset('assets/backend/css/bootstrap-dark.min.css') }}" rel="stylesheet" type="text/css"
id="bs-dark-stylesheet" />
<link href="{{ asset('assets/backend/css/app-dark.min.css') }}" rel="stylesheet" type="text/css" id="app-dark-stylesheet" /> --}}


{{-- Icon Css --}}
<link href="{{ asset('assets/backend/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/backend/css/app.min.css') }}" rel="stylesheet" type="text/css" />


@yield('lowerCss')