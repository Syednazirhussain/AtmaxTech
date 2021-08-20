<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Software Engineer at Golpik Inc">
        <meta name="author" content="Syed Nazir Hussain">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Atmax Technologies</title>
        <!-- Favicons-->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}">
        <link rel="apple-touch-icon" href="{{ asset('assets/images/apple-touch-icon.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/images/apple-touch-icon-72x72.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/images/apple-touch-icon-114x114.png') }}">
        <!-- Web Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600%7cPlayfair+Display:400i" rel="stylesheet">
        <link href="{{ asset('releases/v5.0.6/css/all.css') }}" rel="stylesheet">
        <!-- Plugins-->
        <link href="{{ asset('assets/css/plugins.min.css') }}" rel="stylesheet">
        <!-- Template core CSS-->
        <link href="{{ asset('assets/css/template.css') }}" rel="stylesheet">

        @yield('css')
    </head>
    <body>

        <!-- Preloader-->
        <div class="page-loader">
            <div class="page-loader-inner">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div>
        <!-- Preloader end-->

        <!-- Header-->
        <header class="header header-transparent">
            <div class="container-fluid">
                <!-- Brand-->
                <div class="inner-header"><a class="inner-brand" href="{{ url('/') }}">{{ $general_information->site_name }}</a></div>
                <!-- Navigation-->
                <div class="inner-navigation collapse">
                    <div class="inner-nav onepage-nav">
                        <ul>
                            <li><a href="#home"><span class="menu-item-span">Home</span></a></li>
                            <li><a href="#services"><span class="menu-item-span">Services</span></a></li>
                            <li><a href="#portfolio"><span class="menu-item-span">Portfolio</span></a></li>
                            {{-- <li><a href="#about"><span class="menu-item-span">About Us</span></a></li> --}}
                            <li><a href="#contact"><span class="menu-item-span">Contact Us</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header end-->

        @yield('content')

        <!-- Scripts-->
        <script src="{{ asset('assets/js/custom/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/custom/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/custom/plugins.min.js') }}"></script>
        <script src="{{ asset('assets/js/custom/custom.min.js') }}"></script>

        <script type="text/javascript">
            $.ajaxSetup({
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            });
        </script>

        @yield('js')
    </body>
</html>