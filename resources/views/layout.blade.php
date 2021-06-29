<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from offsetcode.com/themes/boomerang/1.3/op-index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Jun 2021 03:19:18 GMT -->
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Software Engineer at Golpik Inc">
        <meta name="author" content="Syed Nazir Hussain">
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
                <div class="inner-header"><a class="inner-brand" href="{{ url('/') }}">AtmaxTech</a></div>
                <!-- Navigation-->
                <div class="inner-navigation collapse">
                    <div class="inner-nav onepage-nav">
                        <ul>
                            <li><a href="#home"><span class="menu-item-span">Home</span></a></li>
                            <li><a href="#services"><span class="menu-item-span">Services</span></a></li>
                            <li><a href="#portfolio"><span class="menu-item-span">Portfolio</span></a></li>
                            <li><a href="#about"><span class="menu-item-span">About Us</span></a></li>
                            <li><a href="#contact"><span class="menu-item-span">Contact Us</span></a></li>
                            <!--
                            <li><a href="#blog"><span class="menu-item-span">Blog</span></a></li>
                            <li><a href="#team"><span class="menu-item-span">Team</span></a></li>
                            <li><a href="start.html"><span class="menu-item-span">Demos</span></a></li>
                            -->
                        </ul>
                    </div>
                </div>
                <div class="extra-nav">
                    <ul>
                        <li>
                            <a class="off-canvas-open" href="javascript:void(0);">
                                <span class="menu-item-span"><i class="ti-menu"></i></span>
                            </a>
                        </li>
                        <li class="nav-toggle">
                            <a href="javascript:void(0);" data-toggle="collapse" data-target=".inner-navigation">
                                <span class="menu-item-span"><i class="ti-menu"></i></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <!-- Header end-->

        @yield('content')

        <!-- Off canvas-->
        <div class="off-canvas-sidebar">
            <div class="off-canvas-sidebar-wrapper">
                <div class="off-canvas-header"><a class="off-canvas-close" href="javascript:void(0);"><span class="ti-close"></span></a></div>
                <div class="off-canvas-content">
                    <!-- Text widget-->
                    <aside class="widget widget-text">
                        <div class="textwidget">
                            <p class="text-center"><img src="{{ asset('assets/images/logo-light-2.png') }}" alt="" width="80px"></p>
                            <p class="text-center">See how users experience your website in realtime to see changes.</p>
                        </div>
                    </aside>
                    <!-- Recent portfolio widget-->
                    <aside class="widget widget-recent-works">
                        <ul>
                            <li><a href="javascript:void(0);"><img src="{{ asset('assets/images/widgets/1.jpg') }}" alt=""></a></li>
                            <li><a href="javascript:void(0);"><img src="{{ asset('assets/images/widgets/2.jpg') }}" alt=""></a></li>
                            <li><a href="javascript:void(0);"><img src="{{ asset('assets/images/widgets/3.jpg') }}" alt=""></a></li>
                            <li><a href="javascript:void(0);"><img src="{{ asset('assets/images/widgets/4.jpg') }}" alt=""></a></li>
                            <li><a href="javascript:void(0);"><img src="{{ asset('assets/images/widgets/5.jpg') }}" alt=""></a></li>
                            <li><a href="javascript:void(0);"><img src="{{ asset('assets/images/widgets/6.jpg') }}" alt=""></a></li>
                            <li><a href="javascript:void(0);"><img src="{{ asset('assets/images/widgets/7.jpg') }}" alt=""></a></li>
                            <li><a href="javascript:void(0);"><img src="{{ asset('assets/images/widgets/8.jpg') }}" alt=""></a></li>
                            <li><a href="javascript:void(0);"><img src="{{ asset('assets/images/widgets/9.jpg') }}" alt=""></a></li>
                        </ul>
                    </aside>
                    <!-- Social Icons-->
                    <ul class="social-icons text-center">
                        <li><a href="javascript:void(0);"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="javascript:void(0);"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="javascript:void(0);"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="javascript:void(0);"><i class="fab fa-pinterest-p"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Off canvas end-->

        <!-- To top button--><a class="scroll-top" href="#top"><i class="fas fa-angle-up"></i></a>

        <!-- Scripts-->
        <script src="{{ asset('assets/js/custom/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/custom/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap/bootstrap.min.js') }}"></script>
        {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA0rANX07hh6ASNKdBr4mZH0KZSqbHYc3Q"></script> --}}
        <script src="{{ asset('assets/js/custom/plugins.min.js') }}"></script>
        <script src="{{ asset('assets/js/custom/custom.min.js') }}"></script>

        @yield('js')
    </body>
</html>