<!DOCTYPE html>
<html lang="en">
<head>

  <!-- ** Basic Page Needs ** -->
  <meta charset="utf-8">
  <title>Atmax Technologies</title> 

  <!-- ** Mobile Specific Metas ** -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="AtmaxTech is a software company that offers software services all over the world. Farhan Javed is the founder.">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Syed Nazir Hussain">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="{{ asset('MegaKit/plugins/bootstrap/bootstrap.min.css') }}">
  <!-- Icon Font Css -->
  <link rel="stylesheet" href="{{ asset('MegaKit/plugins/themify/css/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('MegaKit/plugins/fontawesome/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('MegaKit/plugins/magnific-popup/magnific-popup.css') }}">
  <!-- Owl Carousel CSS -->
  <link rel="stylesheet" href="{{ asset('MegaKit/plugins/slick/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('MegaKit/plugins/slick/slick-theme.css') }}">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="{{ asset('MegaKit/css/style.css') }}">
  
  <!--Favicon-->
  <link rel="icon" href="{{ asset('MegaKit/images/favicon.png') }}" type="image/x-icon">

  <style type="text/css">
    
/*    nav a.navbar-brand {
      font-size: 30px;
    }*/


    #navbar {
        background: #010101 !important;
        max-height: 110px;
    }


  </style>


  @yield('css')

</head>

<body>

<!-- Header Start -->
<header class="navigation">
  <div class="header-top ">
    <div class="container">
      <!--
      <div class="row justify-content-between align-items-center">
        <div class="col-lg-2 col-md-4">
          <div class="header-top-socials text-center text-lg-left text-md-left">
            <a href="javascript:void(0);" aria-label="facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="javascript:void(0);" aria-label="twitter"><i class="fab fa-twitter"></i></a>
            <a href="javascript:void(0);" aria-label="github"><i class="fab fa-github"></i></a>
          </div>
        </div>
        <div class="col-lg-10 col-md-8 text-center text-lg-right text-md-right">
          <div class="header-top-info mb-2 mb-md-0">
            <a href="tel:+954-562-9109">
              Call Us : <span>@if(isset($general_information->phone)) {{ $general_information->phone }} @endif</span>
            </a>
            @if(isset($general_information->email))
              <a href="mailto:{{ $general_information->email }}">
                <i class="fas fa-envelope mr-2"></i>
                <span>{{ $general_information->email }}</span>
              </a>
            @endif
          </div>
        </div>
      </div>
      -->
    </div>
  </div>

  <div id="navbar">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <nav class="navbar navbar-expand-lg px-0 py-4">
            
            <!--
            <a class="navbar-brand" href="{{ url('/') }}">
              Atmax<span>Tech</span>
            </a>
            -->
            <a class="navbar-brand" href="{{ url('/') }}">
              <img src="{{ asset('assets/images/logo.jpeg') }}" height="70px">
            </a>

            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample09"
              aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
              <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse text-center" id="navbarsExample09">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ Request::is('/') ? 'active' : '' }}"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                <li class="nav-item {{ Request::is('about') ? 'active' : '' }}"><a class="nav-link" href="{{ url('about') }}">About Us</a></li>
                
                <!--
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="javascript:void(0);" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    About <i class="fas fa-chevron-down small"></i>
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="dropdown03">
                    <li><a class="dropdown-item {{ Request::is('about') ? 'active' : '' }}" href="{{ route('about') }}">Our company</a></li>
                    <li><a class="dropdown-item {{ Request::is('pricing') ? 'active' : '' }}" href="{{ route('pricing') }}">Pricing</a></li>
                  </ul>
                </li>
                -->

                <li class="nav-item {{ Request::is('service') ? 'active' : '' }}"><a class="nav-link" href="{{ route('service') }}">Services</a></li>
                <li class="nav-item {{ Request::is('project') ? 'active' : '' }}"><a class="nav-link" href="{{ route('project') }}">Industries</a></li>
                <li class="nav-item {{ Request::is('contact') ? 'active' : '' }}"><a class="nav-link" href="{{ route('contact') }}">Contact US</a></li>
                <!--
                <li class="nav-item dropdown @@blog">
                  <a class="nav-link dropdown-toggle" href="javascript:void(0);" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Blog <i class="fas fa-chevron-down small"></i>
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="dropdown05">
                    <li><a class="dropdown-item @@blogGrid" href="blog-grid.html">Blog Grid</a></li>
                    <li><a class="dropdown-item @@blogSidebar" href="blog-sidebar.html">Blog with Sidebar</a></li>
                    <li><a class="dropdown-item @@blogSingle" href="blog-single.html">Blog Single</a></li>
                    <li class="dropdown dropdown-submenu dropleft">
                      <a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0501" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sub Menu</a>
                      <ul class="dropdown-menu" aria-labelledby="dropdown0501">
                        <li><a class="dropdown-item" href="index.html">Submenu 01</a></li>
                        <li><a class="dropdown-item" href="index.html">Submenu 02</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                -->
              </ul>

              <!--
              <div class="my-2 my-md-0 ml-lg-4 text-center">
                <a href="{{ route('contact') }}" class="btn btn-solid-border btn-round-full">Get a Quote</a>
              </div>
              -->

            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- Header Close -->


@yield('content')


<footer class="footer section">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="widget">
          <h4 class="text-capitalize mb-4">Company</h4>

          <ul class="list-unstyled footer-menu lh-35">
            <li><a href="javascript:void(0);">Terms & Conditions</a></li>
            <li><a href="javascript:void(0);">Privacy Policy</a></li>
            <li><a href="javascript:void(0);">Support</a></li>
            <li><a href="javascript:void(0);">FAQ</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-2 col-md-6 col-sm-6">
        <div class="widget">
          <h4 class="text-capitalize mb-4">Quick Links</h4>

          <ul class="list-unstyled footer-menu lh-35">
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('service') }}">Services</a></li>
            <li><a href="javascript:void(0);">Blogs</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 mx-auto">
        <div class="widget">
          <h4 class="text-capitalize mb-4">Subscribe Us</h4>
          <p>Subscribe to get latest news article and resources </p>

          <form action="#" class="sub-form">
            <input type="text" class="form-control mb-3" placeholder="Subscribe Now ...">
            <a href="javascript:void(0);" class="btn btn-main btn-small">subscribe</a>
          </form>
        </div>
      </div>

      <div class="col-lg-3 col-sm-6">
        <div class="widget">
          <div class="logo mb-4">
            {{-- <h3>Atmax<span>Tech</span></h3> --}}
            <h3><a href="{{ url('/') }}">AtmaxTechnologies</a></h3>
          </div>
          @if(isset($general_information->email))
            <h6>
              <a href="mailto:{{ $general_information->email }}">
                <i class="fa fa-envelope"></i>&nbsp;&nbsp;{{ $general_information->email }}
              </a>
            </h6>
          @endif
          @if(isset($general_information->phone))
            <h6>
              <a href="tel:{{ $general_information->phone }}">
                <i class="fa fa-phone"></i>&nbsp;&nbsp;{{ $general_information->phone }}
              </a>
            </h6>
          @endif
          {{-- 
            @if(isset($general_information->phone))
              <a href="tel:{{ $general_information->phone }}">
                <span class="text-color h4">
                  {{ $general_information->phone }}
                </span>
              </a>
            @endif
           --}}

        </div>
      </div>
    </div>

    <div class="footer-btm pt-4">
      <div class="row">
        <div class="col-lg-6">
          <div class="copyright">
            Copyright &copy; {{ date('Y') }}
            <!--
            , Designed &amp; Developed by 
            <a href="https://my.linkedin.com/in/syed-nazir-hussain-bb4162b8" target="_blank">
              Syed Nazir Hussain
            </a>
            -->
          </div>
        </div>
        <div class="col-lg-6 text-left text-lg-right">
          <ul class="list-inline footer-socials">
            <li class="list-inline-item"><a href="javascript:void(0);"><i class="fab fa-facebook-f mr-2"></i>Facebook</a></li>
            <li class="list-inline-item"><a href="javascript:void(0);"><i class="fab fa-twitter mr-2"></i>Twitter</a></li>
            {{-- <li class="list-inline-item"><a href="javascript:void(0);"><i class="fab fa-pinterest-p mr-2 "></i>Pinterest</a></li> --}}
            <li class="list-inline-item"><a href="javascript:void(0);"><i class="fab fa-linkedin-in mr-2"></i>LinkedIn</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>

<div id="scroll-to-top" class="scroll-to-top">
  <span class="icon fa fa-angle-up"></span>
</div>

<script src="{{ asset('MegaKit/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4.3.1 -->
<script src="{{ asset('MegaKit/plugins/bootstrap/bootstrap.min.js') }}"></script>
<!--  Magnific Popup-->
<script src="{{ asset('MegaKit/plugins/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
<!-- Slick Slider -->
<script src="{{ asset('MegaKit/plugins/slick/slick.min.js') }}"></script>
<!-- Counterup -->
<script src="{{ asset('MegaKit/plugins/counterup/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('MegaKit/plugins/counterup/jquery.counterup.min.js') }}"></script>

<!-- Google Map -->
{{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script> --}}
{{-- <script src="{{ asset('MegaKit/plugins/google-map/map.js') }}" defer></script> --}}
<script src="{{ asset('MegaKit/js/script.js') }}"></script>

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