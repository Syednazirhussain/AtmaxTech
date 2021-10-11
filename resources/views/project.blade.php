@extends('default')

@section('css')
  
  <style type="text/css">
    
    .page-title {
        padding: 200px 0 !important;
    }

  </style>

@endsection

@section('content')

  <section class="page-title bg-1">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="block text-center">
{{--             <span class="text-white">Latest works</span>
            <h1 class="text-capitalize mb-4 text-lg">Portfolio</h1>
            <ul class="list-inline">
              <li class="list-inline-item"><a href="{{ url('/') }}" class="text-white">Home</a></li>
              <li class="list-inline-item"><span class="text-white">/</span></li>
              <li class="list-inline-item text-white-50">Latest works</li>
            </ul> --}}
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section blog-wrap bg-gray">
    <div class="container">

      <div class="row justify-content-center">
        <div class="col-lg-7 text-center">
          <div class="section-title">
            <span class="h3 text-color">Industries</span>
            {{-- <h2 class="mt-3 content-title ">We provide a wide range of creative services </h2> --}}
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6 col-md-6 mb-5">
          <div class="blog-item">
            <img loading="lazy" src="{{ asset('assets/images/stock-images/technology.jpg') }}" alt="blog" class="img-fluid rounded">
            <div class="blog-item-content bg-white p-3">
              <h3 class="mt-3 mb-3">
                <a href="javascript:void(0);">
                  Technology
                </a>
              </h3>
              <p class="mb-4" style="text-align: justify;">
                Everything is changing in the business world with time digital platforms have turned out to play an important role in this regard. Atmax services and digital platforms enable to build products to meet the customers demand. Customer’s continuous demand and Atmax services continuous
                supply plays an important role in the overall growth of the company. Atmax services respond to market changes and derive predictable growth and revenue in real time.
              </p>
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-md-6 mb-5">
          <div class="blog-item">
            <img loading="lazy" src="{{ asset('assets/images/stock-images/travel.jpg') }}" alt="blog" class="img-fluid rounded">
            <div class="blog-item-content bg-white p-3">
              <h3 class="mt-3 mb-3">
                <a href="javascript:void(0);">Travel and Hospitality</a>
              </h3>
              <p class="mb-4" style="text-align: justify;">
                Travelling whether it’s for business purpose, vacations or getaways is not possible without seamless Omni channel experience to get every detail right. Digital strategies, platform and services at Atmax makes everything possible by streamlining the apps and migrating work to clouds which help the customers to sort out their workload and provide a rock solid foundation to which they always desire.
              </p>
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-md-6 mb-5">
          <div class="blog-item">
            <img loading="lazy" src="{{ asset('assets/images/stock-images/retail.jpg') }}" alt="blog" class="img-fluid rounded">
            <div class="blog-item-content bg-white p-3">
              <h3 class="mt-3 mb-3">
                <a href="javascript:void(0);">Retail</a>
              </h3>
              <p class="mb-4" style="text-align: justify;">
                At present, population in retail demand understanding of their desires and expect super shopping experiences. Atmax solutions assure to become everyone&#39;s favorite by its services, experiences and platforms. Atmax services eases the store operations and merchandise which enables customers to buy goods easily.
              </p>
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-md-6 mb-5">
          <div class="blog-item">
            <img loading="lazy" src="{{ asset('assets/images/stock-images/health-care-2.jpg') }}" alt="blog" class="img-fluid rounded">
            <div class="blog-item-content bg-white p-3">
              <h3 class="mt-3 mb-3">
                <a href="javascript:void(0);">Health Care</a>
              </h3>
              <p class="mb-4" style="text-align: justify;">
                Atmax provides the best digital experience, strategy, platforms and insights that create better in-patient experience and patient outcomes. Health care solution at Atmax lets you improve overall patient health by providing intelligent solutions through new services and devices. Atmax helps you to integrate existing technologies so they provide better health solutions which are in compliance with the rules and regulations.
              </p>
            </div>
          </div>
        </div>


        <div class="col-lg-6 col-md-6 mb-5">
          <div class="blog-item">
            <img loading="lazy" src="{{ asset('assets/images/stock-images/insurance-2.jpg') }}" alt="blog" class="img-fluid rounded">
            <div class="blog-item-content bg-white p-3">
              <h3 class="mt-3 mb-3">
                <a href="javascript:void(0);">Insurance</a>
              </h3>
              <p class="mb-4" style="text-align: justify;">
                Atmax high performance, platforms and services provide exceptional results. Clients are able to upsell and cross sell products extensively on different digital platforms. We help our clients by offering better experience by providing services such as hyper automation, machine learning and AI. Our cloud migration and modernization service provide a high level experience for customers.
              </p>
            </div>
          </div>
        </div>


      </div>
    </div>
  </section>

@endsection

@section('js')

  <script type="text/javascript">
    


  </script>


@endsection