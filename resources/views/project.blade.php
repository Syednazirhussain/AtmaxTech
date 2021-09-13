@extends('default')


@section('content')

  <section class="page-title bg-1">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="block text-center">
            <span class="text-white">Latest works</span>
            <h1 class="text-capitalize mb-4 text-lg">Portfolio</h1>
            <ul class="list-inline">
              <li class="list-inline-item"><a href="{{ url('/') }}" class="text-white">Home</a></li>
              <li class="list-inline-item"><span class="text-white">/</span></li>
              <li class="list-inline-item text-white-50">Latest works</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- section portfolio start -->
  <section class="section portfolio pb-0">
  	<div class="container">
  		<div class="row justify-content-center">
  			<div class="col-lg-7 text-center">
  				<div class="section-title">
  					<span class="h6 text-color">Our works</span>
  					<h2 class="mt-3 content-title">We have done lots of works, lets check some</h2>
  				</div>
  			</div>
  		</div>
  	</div>

  	<div class="container-fluid">
  		<div class="row portfolio-gallery">
  			<div class="col-lg-4 col-md-6">
  				<div class="portflio-item position-relative mb-4">
  					<a href="{{ asset('MegaKit/images/portfolio/1.jpg') }}" class="popup-gallery">
  						<img src="{{ asset('MegaKit/images/portfolio/1.jpg') }}" alt="portfolio" class="img-fluid w-100">
  						<i class="ti-plus overlay-item"></i>
  						<div class="portfolio-item-content">
  							<h3 class="mb-0 text-white">Technology</h3>
  							<p class="text-white-50"></p>
  						</div>
  					</a>
  				</div>
  			</div>

  			<div class="col-lg-4 col-md-6">
  				<div class="portflio-item position-relative mb-4">
  					<a href="{{ asset('MegaKit/images/portfolio/2.jpg') }}" class="popup-gallery">
  						<img src="{{ asset('MegaKit/images/portfolio/2.jpg') }}" alt="portfolio" class="img-fluid w-100">

  						<i class="ti-plus overlay-item"></i>
  						<div class="portfolio-item-content">
  							<h3 class="mb-0 text-white">Travel and Hospitality</h3>
  							<p class="text-white-50"></p>
  						</div>
  					</a>
  				</div>
  			</div>

  			<div class="col-lg-4 col-md-6">
  				<div class="portflio-item position-relative mb-4">
  					<a href="{{ asset('MegaKit/images/portfolio/3.jpg') }}" class="popup-gallery">
  						<img src="{{ asset('MegaKit/images/portfolio/3.jpg') }}" alt="portfolio" class="img-fluid w-100">
  						<i class="ti-plus overlay-item"></i>
  						<div class="portfolio-item-content">
  							<h3 class="mb-0 text-white">Retail</h3>
  							<p class="text-white-50"></p>
  						</div>
  					</a>
  				</div>
  			</div>

  			<div class="col-lg-4 col-md-6">
  				<div class="portflio-item position-relative mb-4">
  					<a href="{{ asset('MegaKit/images/portfolio/4.jpg') }}" class="popup-gallery">
  						<img src="{{ asset('MegaKit/images/portfolio/4.jpg') }}" alt="portfolio" class="img-fluid w-100">

  						<i class="ti-plus overlay-item"></i>
  						<div class="portfolio-item-content">
  							<h3 class="mb-0 text-white">Health Care</h3>
  							<p class="text-white-50"></p>
  						</div>
  					</a>
  				</div>
  			</div>

  			<div class="col-lg-4 col-md-6">
  				<div class="portflio-item position-relative  mb-4">
  					<a href="{{ asset('MegaKit/images/portfolio/5.jpg') }}" class="popup-gallery">
  						<img src="{{ asset('MegaKit/images/portfolio/5.jpg') }}" alt="portfolio" class="img-fluid w-100">

  						<i class="ti-plus overlay-item"></i>
  						<div class="portfolio-item-content">
  							<h3 class="mb-0 text-white">Insurance</h3>
  							<p class="text-white-50"></p>
  						</div>
  					</a>
  				</div>
  			</div>

  			<div class="col-lg-4 col-md-6">
  				<div class="portflio-item position-relative mb-4">
  					<a href="{{ asset('MegaKit/images/portfolio/6.jpg') }}" class="popup-gallery">
  						<img src="{{ asset('MegaKit/images/portfolio/6.jpg') }}" alt="portfolio" class="img-fluid w-100">

  						<i class="ti-plus overlay-item"></i>
  						<div class="portfolio-item-content">
  							<h3 class="mb-0 text-white">Portfolio Design</h3>
  							<p class="text-white-50"></p>
  						</div>
  					</a>
  				</div>
  			</div>
  		</div>
  	</div>
  </section>
  <!-- section portfolio END -->

@endsection

@section('js')

  <script type="text/javascript">
    


  </script>


@endsection