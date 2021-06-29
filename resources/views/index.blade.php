@extends('layout')


@section('content')

    <!-- Wrapper-->
    <div class="wrapper">
        <!-- Hero-->
        <section class="module-cover-slides" id="home" data-module-cover-slides-options="{&quot;animation&quot;: &quot;fade&quot;, &quot;play&quot;: 5000}">
            <ul class="slides-container">
                <li class="parallax text-center" data-overlay="0.5"><img src="{{ asset('assets/images/module-4.jpg') }}" alt="">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="m-b-20"><strong>Build Innovative Web and Mobile Applications</strong></h1>
                                <!--
                                <p class="m-b-40">See how your users experience your website in realtime or view  <br> trends to see any changes in performance over time.</p>
                                <p><a class="btn btn-lg btn-circle btn-outline-new-white" href="javascript:void(0);">Learn More</a></p>
                                -->
                            </div>
                        </div>
                    </div>
                </li>
                <li class="parallax text-center" data-overlay="0.5"><img src="{{ asset('assets/images/module-21.jpg') }}" alt="">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="m-b-20"><strong>Custom Softwares and SaaS Products</strong></h1>
                                <!--
                                <p class="m-b-40">We combine people, platforms, and software</p>
                                <p><a class="btn btn-lg btn-circle btn-warning" href="javascript:void(0);">Get Started</a><a class="btn btn-lg btn-circle btn-outline-new-white" href="javascript:void(0);">Learn More</a></p>
                                -->
                            </div>
                        </div>
                    </div>
                </li>
                <!--
                <li class="parallax text-center" data-overlay="0.7" data-gradient="1"><img src="{{ asset('assets/images/module-25.jpg') }}" alt="">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="m-b-20"><strong>Your customers will love you <br> one minute from now.</strong></h1>
                                <p class="m-b-40">See how your users experience your website in realtime or view  <br> trends to see any changes in performance over time.</p>
                                <p><a class="btn btn-lg btn-circle btn-new-white" href="javascript:void(0);">Get Started</a><a class="btn btn-lg btn-circle btn-outline-new-white" href="javascript:void(0);">Learn More</a></p>
                            </div>
                        </div>
                    </div>
                </li>
                -->
            </ul>
            <div class="slides-navigation"><a class="prev" href="javascript:void(0);"><span class="ti-angle-left"></span></a><a class="next" href="javascript:void(0);"><span class="ti-angle-right"></span></a></div>
        </section>
        <!-- Hero end-->

        <!-- About-->
        <section class="module divider-bottom" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 m-auto text-center">
                        <h1>Your Site, Your Way.</h1>
                        <p class="lead">See how your users experience your website in realtime or view trends to see any changes in performance over time.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="space" data-MY="60px"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p><img src="{{ asset('assets/images/main/mega-mockup.png') }}" alt=""></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="space" data-mY="30px"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="icon-box text-center">
                            <div class="icon-box-icon"><span class="ti-layout"></span></div>
                            <div class="icon-box-title">
                                <h6>Visual Composer</h6>
                            </div>
                            <div class="icon-box-content">
                                <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit sed diam lorem ipsum amet.</p>
                            </div>
                            <div class="icon-box-link"><a href="javascript:void(0);">Read more</a></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="icon-box text-center">
                            <div class="icon-box-icon"><span class="ti-cup"></span></div>
                            <div class="icon-box-title">
                                <h6>Revolution Slider</h6>
                            </div>
                            <div class="icon-box-content">
                                <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit sed diam lorem ipsum amet.</p>
                            </div>
                            <div class="icon-box-link"><a href="javascript:void(0);">Read more</a></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="icon-box text-center">
                            <div class="icon-box-icon"><span class="ti-harddrives"></span></div>
                            <div class="icon-box-title">
                                <h6>User Experience</h6>
                            </div>
                            <div class="icon-box-content">
                                <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit sed diam lorem ipsum amet.</p>
                            </div>
                            <div class="icon-box-link"><a href="javascript:void(0);">Read more</a></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="icon-box text-center">
                            <div class="icon-box-icon"><span class="ti-desktop"></span></div>
                            <div class="icon-box-title">
                                <h6>Fully Responsive</h6>
                            </div>
                            <div class="icon-box-content">
                                <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit sed diam lorem ipsum amet.</p>
                            </div>
                            <div class="icon-box-link"><a href="javascript:void(0);">Read more</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About end-->

        <!-- Portfolio-->
        <section class="module p-b-0" id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 m-auto text-center">
                        <h1>Digital Design.</h1>
                        <p class="lead">See how your users experience your website in realtime or view trends to see any changes in performance over time.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="space" data-MY="40px"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <ul class="filters serif">
                            <li><a class="current" href="javascript:void(0);" data-filter="*">All</a></li>
                            <li><a href="javascript:void(0);" data-filter=".branding">Branding</a></li>
                            <li><a href="javascript:void(0);" data-filter=".digital">Digital</a></li>
                            <li><a href="javascript:void(0);" data-filter=".packaging">Packaging</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row row-portfolio" data-columns="3">
                    <div class="grid-sizer"></div>
                    <div class="portfolio-item branding">
                        <div class="portfolio-item-wrapper">
                            <div class="portfolio-item-img"><img src="{{ asset('assets/images/portfolio/1.jpg') }}" alt=""></div>
                            <div class="portfolio-item-caption">
                                <h6 class="portfolio-item-title">Solave Cleanser</h6>
                                <span class="portfolio-item-subtitle serif">
                                    A Forbes survey tells that 80% of all grownups own a smartphone. It adds that 75% of smartphone users are accessing mobile internet services. These statistics emphasize the fact that if your business isn’t ready for mobile device users, you’re missing out on a huge opportunity to reach your target audience and increase revenue. We at Atmax help make your business mobile-ready, starting from devising mobile strategy to development, testing, and deployment.
                                </span>
                            </div><a class="portfolio-item-link" href="portfolio-single-1.html"></a>
                        </div>
                    </div>
                    <div class="portfolio-item digital">
                        <div class="portfolio-item-wrapper">
                            <div class="portfolio-item-img"><img src="{{ asset('assets/images/portfolio/4.jpg') }}" alt=""></div>
                            <div class="portfolio-item-caption">
                                <h6 class="portfolio-item-title">Monochrome</h6><span class="portfolio-item-subtitle serif">Branding</span>
                            </div><a class="portfolio-item-link" href="portfolio-single-1.html"></a>
                        </div>
                    </div>
                    <div class="portfolio-item packaging">
                        <div class="portfolio-item-wrapper">
                            <div class="portfolio-item-img"><img src="{{ asset('assets/images/portfolio/3.jpg') }}" alt=""></div>
                            <div class="portfolio-item-caption">
                                <h6 class="portfolio-item-title">Ellie Cashman</h6><span class="portfolio-item-subtitle serif">Packaging</span>
                            </div><a class="portfolio-item-link" href="portfolio-single-1.html"></a>
                        </div>
                    </div>
                    <div class="portfolio-item branding">
                        <div class="portfolio-item-wrapper">
                            <div class="portfolio-item-img"><img src="{{ asset('assets/images/portfolio/6.jpg') }}" alt=""></div>
                            <div class="portfolio-item-caption">
                                <h6 class="portfolio-item-title">White Sleeve</h6><span class="portfolio-item-subtitle serif">Digital</span>
                            </div><a class="portfolio-item-link" href="portfolio-single-1.html"></a>
                        </div>
                    </div>
                    <div class="portfolio-item digital">
                        <div class="portfolio-item-wrapper">
                            <div class="portfolio-item-img"><img src="{{ asset('assets/images/portfolio/5.jpg') }}" alt=""></div>
                            <div class="portfolio-item-caption">
                                <h6 class="portfolio-item-title">Classic Socks</h6><span class="portfolio-item-subtitle serif">Branding</span>
                            </div><a class="portfolio-item-link" href="portfolio-single-1.html"></a>
                        </div>
                    </div>
                    <div class="portfolio-item packaging">
                        <div class="portfolio-item-wrapper">
                            <div class="portfolio-item-img"><img src="{{ asset('assets/images/portfolio/2.jpg') }}" alt=""></div>
                            <div class="portfolio-item-caption">
                                <h6 class="portfolio-item-title">Expirience</h6><span class="portfolio-item-subtitle serif">Packaging</span>
                            </div><a class="portfolio-item-link" href="portfolio-single-1.html"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio end-->

        <!-- Services-->
        <section class="module" id="services">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box">
                            <div class="icon-box-icon"><span class="ti-layout"></span></div>
                            <div class="icon-box-title">
                                <h6>Digital Workplace</h6>
                            </div>
                            <div class="icon-box-content">
                                <p>
                                    Atmax Tech develops and deploys solutions that let your people work from anywhere on any device. 
                                    They can also empower your teams as they secure your people, devices, and data; cut costs; and drive 
                                    efficiency.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box">
                            <div class="icon-box-icon"><span class="ti-image"></span></div>
                            <div class="icon-box-title">
                                <h6>Cloud Services</h6>
                            </div>
                            <div class="icon-box-content">
                                <p>
                                    Atmax Tech has extensive experience in providing infrastructure services to large enterprises, including Data Center Management and Infrastructure Automation.
                                    We partner with customers to provide Infrastructure Services such as
                                    Cloud Readiness Assessment, Enablement & implementation
                                    Maintaining and Optimization of Infrastructure
                                    Orchestration, Monitoring, Virtualization, Validation.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box">
                            <div class="icon-box-icon"><span class="ti-image"></span></div>
                            <div class="icon-box-title">
                                <h6>Enterprise Analytics</h6>
                            </div>
                            <div class="icon-box-content">
                                <p>
                                    Atmax has a dedicated data services team including a pool of certified big data specialists. 
                                    We are uniquely positioned in the area of Market Survey Analysis and Research. 
                                    We perform analytical processes on the data stored across our client’s organization, to extract 
                                    meaningful and useful data from raw repositories.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box">
                            <div class="icon-box-icon"><span class="ti-headphone-alt"></span></div>
                            <div class="icon-box-title">
                                <h6>Product Engineering</h6>
                            </div>
                            <div class="icon-box-content">
                                <p>
                                    Turning dreams into reality through coding requires a mix of art and science. 
                                    That’s why we believe that good code is written from the heart and not just the mind. 
                                    Every piece of code is important – imagine what would happen if bits in a string were shifted 
                                    by one instead of two.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box">
                            <div class="icon-box-icon"><span class="ti-desktop"></span></div>
                            <div class="icon-box-title">
                                <h6>Mobile Computing</h6>
                            </div>
                            <div class="icon-box-content">
                                <p>
                                    A Forbes survey tells that 80% of all grownups own a smartphone. It adds that 75% of 
                                    smartphone users are accessing mobile internet services. These statistics emphasize the 
                                    fact that if your business isn’t ready for mobile device users, you’re missing out on a 
                                    huge opportunity to reach your target audience and increase revenue. We at Atmax help make 
                                    your business mobile-ready, starting from devising mobile strategy to development, testing, 
                                    and deployment.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services end-->

        <!-- Alt Services-->
        <section class="module bg-gray">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6"><img src="{{ asset('assets/images/main/ipad.png') }}" alt=""></div>
                    <div class="col-lg-5 offset-lg-1">
                        <h2>Flexible & Lightweight.</h2>
                        <p class="lead">Map where your photos were taken and discover local points of interest. Map where your photos. Map where your photos were taken and discover.</p>
                        <div class="space" data-MY="50px"></div>
                        <div class="icon-box icon-box-left">
                            <div class="icon-box-icon"><span class="ti-layout"></span></div>
                            <div class="icon-box-title">
                                <h6>Visual Composer</h6>
                            </div>
                            <div class="icon-box-content">
                                <p>Map where your photos were taken and discover local points of interest. Map where your photos. Map where your photos were taken and discover.</p>
                            </div>
                        </div>
                        <div class="icon-box icon-box-left">
                            <div class="icon-box-icon"><span class="ti-cup"></span></div>
                            <div class="icon-box-title">
                                <h6>Revolution Slider</h6>
                            </div>
                            <div class="icon-box-content">
                                <p>Map where your photos were taken and discover local points of interest. Map where your photos. Map where your photos were taken and discover.</p>
                            </div>
                        </div>
                        <div class="icon-box icon-box-left">
                            <div class="icon-box-icon"><span class="ti-harddrives"></span></div>
                            <div class="icon-box-title">
                                <h6>User Experience</h6>
                            </div>
                            <div class="icon-box-content">
                                <p>Map where your photos were taken and discover local points of interest. Map where your photos. Map where your photos were taken and discover.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Alt Services end-->

        <!-- Team-->
        <!--
        <section class="module" id="team">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 m-auto text-center">
                        <h1>Creative People.</h1>
                        <p class="lead">See how your users experience your website in realtime or view trends to see any changes in performance over time.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="space" data-MY="60px"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="team-item">
                            <div class="team-image"><img src="{{ asset('assets/images/team/1.jpg') }}" alt="">
                                <div class="team-wrap">
                                    <div class="team-content">
                                        <h6 class="team-name">Emma Connor</h6>
                                        <div class="team-role">Designer</div>
                                    </div>
                                    <div class="team-content-social">
                                        <ul>
                                            <li><a href="javascript:void(0);"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="javascript:void(0);"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="javascript:void(0);"><i class="fab fa-pinterest-p"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="team-item">
                            <div class="team-image"><img src="{{ asset('assets/images/team/2.jpg') }}" alt="">
                                <div class="team-wrap">
                                    <div class="team-content">
                                        <h6 class="team-name">Richard Bauer</h6>
                                        <div class="team-role">Developer</div>
                                    </div>
                                    <div class="team-content-social">
                                        <ul>
                                            <li><a href="javascript:void(0);"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="javascript:void(0);"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="javascript:void(0);"><i class="fab fa-pinterest-p"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="team-item">
                            <div class="team-image"><img src="{{ asset('assets/images/team/3.jpg') }}" alt="">
                                <div class="team-wrap">
                                    <div class="team-content">
                                        <h6 class="team-name">John Pope</h6>
                                        <div class="team-role">Founder</div>
                                    </div>
                                    <div class="team-content-social">
                                        <ul>
                                            <li><a href="javascript:void(0);"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="javascript:void(0);"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="javascript:void(0);"><i class="fab fa-pinterest-p"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="team-item">
                            <div class="team-image"><img src="{{ asset('assets/images/team/4.jpg') }}" alt="">
                                <div class="team-wrap">
                                    <div class="team-content">
                                        <h6 class="team-name">Sara Smith</h6>
                                        <div class="team-role">Designer</div>
                                    </div>
                                    <div class="team-content-social">
                                        <ul>
                                            <li><a href="javascript:void(0);"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="javascript:void(0);"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="javascript:void(0);"><i class="fab fa-pinterest-p"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="team-item">
                            <div class="team-image"><img src="{{ asset('assets/images/team/5.jpg') }}" alt="">
                                <div class="team-wrap">
                                    <div class="team-content">
                                        <h6 class="team-name">Emma Connor</h6>
                                        <div class="team-role">Developer</div>
                                    </div>
                                    <div class="team-content-social">
                                        <ul>
                                            <li><a href="javascript:void(0);"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="javascript:void(0);"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="javascript:void(0);"><i class="fab fa-pinterest-p"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="team-item">
                            <div class="team-image"><img src="{{ asset('assets/images/team/6.jpg') }}" alt="">
                                <div class="team-wrap">
                                    <div class="team-content">
                                        <h6 class="team-name">Peter Chapman</h6>
                                        <div class="team-role">Founder</div>
                                    </div>
                                    <div class="team-content-social">
                                        <ul>
                                            <li><a href="javascript:void(0);"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="javascript:void(0);"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="javascript:void(0);"><i class="fab fa-pinterest-p"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="space" data-MY="30px"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-center"><a class="btn btn-circle btn-outline-brand" href="javascript:void(0);">About Us</a></p>
                    </div>
                </div>
            </div>
        </section>
        -->
        <!-- Team end-->

        <!-- Testimonials-->
        <section class="module parallax" data-background="{{ asset('assets/images/module-3.jpg') }}" data-overlay="0.5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="space" data-MY="50px"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="review-slides owl-carousel">
                            <div class="review">
                                <div class="review-icons"><img src="{{ asset('assets/images/avatar/1.jpg') }}" alt="">
                                </div>
                                <div class="review-content">
                                    <blockquote>
                                        <p>I don't work from drawings. I don't make sketches and drawings <br/> and color sketches into a final painting.</p>
                                        <footer class="blockquote-footer">Albert Einstein</footer>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="review">
                                <div class="review-icons"><img src="{{ asset('assets/images/avatar/1.jpg') }}" alt="">
                                </div>
                                <div class="review-content">
                                    <blockquote>
                                        <p>To be yourself in a world that is constantly trying to make you <br/> something else is the greatest accomplishment.</p>
                                        <footer class="blockquote-footer">Ralph Waldo Emerson</footer>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="review">
                                <div class="review-icons"><img src="{{ asset('assets/images/avatar/1.jpg') }}" alt="">
                                </div>
                                <div class="review-content">
                                    <blockquote>
                                        <p>Imperfection is beauty, madness is genius and it's better to be <br/> absolutely ridiculous than absolutely boring.</p>
                                        <footer class="blockquote-footer">Marilyn Monroe</footer>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="space" data-MY="50px"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonials end-->

        <!-- Clients-->
        <section class="module bg-gray p-t-0 p-b-40">
            <div class="container">
                <div class="space" data-MY="-60px"></div>
                <div class="row">
                    <div class="col-md-4 pricing-wrapper">
                        <div class="pricing-header">
                            <div class="pricing-icon"><i class="ti-slice"></i></div>
                            <div class="pricing-title">Starter</div>
                        </div>
                        <div class="pricing-price">Free
                        </div>
                        <div class="pricing-body">
                            <p>Map where your photos<br>were taken and discover local<br>points of interest.</p>
                        </div>
                        <div class="pricing-footer"><a class="btn btn-circle btn-brand" href="javascript:void(0);">Download</a></div>
                    </div>
                    <div class="col-md-4 pricing-wrapper pricing-popular">
                        <div class="pricing-header">
                            <div class="pricing-icon"><i class="ti-pin-alt"></i></div>
                            <div class="pricing-title">Standard</div>
                        </div>
                        <div class="pricing-price"><span>$</span>45
                        </div>
                        <div class="pricing-body">
                            <p>Map where your photos<br>were taken and discover local<br>points of interest.</p>
                        </div>
                        <div class="pricing-footer"><a class="btn btn-circle btn-brand" href="javascript:void(0);">Download</a></div>
                    </div>
                    <div class="col-md-4 pricing-wrapper pricing-popular">
                        <div class="pricing-header">
                            <div class="pricing-icon"><i class="ti-marker-alt"></i></div>
                            <div class="pricing-title">Professional</div>
                        </div>
                        <div class="pricing-price"><span>$</span>69
                        </div>
                        <div class="pricing-body">
                            <p>Map where your photos<br>were taken and discover local<br>points of interest.</p>
                        </div>
                        <div class="pricing-footer"><a class="btn btn-circle btn-brand" href="javascript:void(0);">Download</a></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 m-auto">
                        <div class="owl-carousel clients-carousel">
                            <div class="client"><img src="{{ asset('assets/images/clients/1.png') }}" alt=""></div>
                            <div class="client"><img src="{{ asset('assets/images/clients/2.png') }}" alt=""></div>
                            <div class="client"><img src="{{ asset('assets/images/clients/3.png') }}" alt=""></div>
                            <div class="client"><img src="{{ asset('assets/images/clients/4.png') }}" alt=""></div>
                            <div class="client"><img src="{{ asset('assets/images/clients/5.png') }}" alt=""></div>
                            <div class="client"><img src="{{ asset('assets/images/clients/6.png') }}" alt=""></div>
                            <div class="client"><img src="{{ asset('assets/images/clients/7.png') }}" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Clients end-->

        <!-- Posts-->
        <!--
        <section class="module" id="blog">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 m-auto text-center">
                        <h1>Latest articles.</h1>
                        <p class="lead">See how your users experience your website in realtime or view trends to see any changes in performance over time.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="space" data-MY="60px"></div>
                    </div>
                </div>
                <div class="row row-post-masonry">
                    <div class="col-md-4 post-item">
                        <article class="post">
                            <div class="post-preview"><a href="javascript:void(0);"><img src="{{ asset('assets/images/blog/1.jpg') }}" alt=""></a></div>
                            <div class="post-wrapper">
                                <div class="post-header">
                                    <h2 class="post-title"><a href="blog-single.html">Bluetooth Speaker</a></h2>
                                </div>
                                <div class="post-content">
                                    <p>See how your users experience your website in realtime or view trends to see any changes in performance over time.</p>
                                    <p><a href="javascript:void(0);">Read more</a></p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4 post-item">
                        <article class="post">
                            <div class="post-preview"><a href="javascript:void(0);"><img src="{{ asset('assets/images/blog/3.jpg') }}" alt=""></a></div>
                            <div class="post-wrapper">
                                <div class="post-header">
                                    <h2 class="post-title"><a href="blog-single.html">Minimalist Chandelier</a></h2>
                                </div>
                                <div class="post-content">
                                    <p>See how your users experience your website in realtime or view trends to see any changes in performance over time.</p>
                                    <p><a href="javascript:void(0);">Read more</a></p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4 post-item">
                        <article class="post">
                            <div class="post-preview"><a href="javascript:void(0);"><img src="{{ asset('assets/images/blog/5.jpg') }}" alt=""></a></div>
                            <div class="post-wrapper">
                                <div class="post-header">
                                    <h2 class="post-title"><a href="blog-single.html">Standard Shape</a></h2>
                                </div>
                                <div class="post-content">
                                    <p>See how your users experience your website in realtime or view trends to see any changes in performance over time.</p>
                                    <p><a href="javascript:void(0);">Read more</a></p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>
        -->
        <!-- Posts end-->

        <!-- Form-->
        <section class="module divider-top" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-9 m-auto text-center">
                        <h1>Let's talk.</h1>
                        <p class="lead">See how your users experience your website in realtime or view trends to see any changes in performance over time.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="space" data-MY="60px"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 m-auto">
                        <form id="contact_us" method="post" novalidate>
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="name" placeholder="Name" required="">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" type="email" name="email" placeholder="E-mail" required="">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="subject" placeholder="Subject" required="">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" name="message_text" placeholder="Message" rows="12" required=""></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <p>
                                        <input id="send_message" class="btn btn-block btn-brand" type="submit" value="Send Message">
                                    </p>
                                </div>
                            </div>
                        </form>
                        <!-- Ajax response-->
                        <div class="ajax-response text-center" id="contact-response"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Form end-->

        <!-- Counters-->
        <section class="module bg-gray p-b-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="counter">
                            <div class="counter-icon"><span class="icon-energy icons"></span></div>
                            <div class="counter-number">
                                <h6><strong class="counter-timer" data-from="0" data-to="1538">0</strong></h6>
                            </div>
                            <div class="counter-title">Happy Clients</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="counter">
                            <div class="counter-icon"><span class="icon-game-controller icons"></span></div>
                            <div class="counter-number">
                                <h6><strong class="counter-timer" data-from="0" data-to="2124">0</strong></h6>
                            </div>
                            <div class="counter-title">Total downloads</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="counter">
                            <div class="counter-icon"><span class="icon-fire icons"></span></div>
                            <div class="counter-number">
                                <h6><strong class="counter-timer" data-from="0" data-to="3128">0</strong></h6>
                            </div>
                            <div class="counter-title">Awards Won</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="counter">
                            <div class="counter-icon"><span class="icon-diamond icons"></span></div>
                            <div class="counter-number">
                                <h6><strong class="counter-timer" data-from="0" data-to="9534">0</strong></h6>
                            </div>
                            <div class="counter-title">Theme Users</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Counters end-->

        <!-- Image-->
        <section class="module no-gutters p-0">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12"><img src="{{ asset('assets/images/module-18.jpg') }}" alt=""></div>
                </div>
            </div>
        </section>
        <!-- Image end-->

        <!-- Footer-->
        <footer class="footer">
            <div class="footer-widgets">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <aside class="widget widget-text">
                                <div class="widget-title">
                                    <h6>About Us</h6>
                                </div>
                                <div class="textwidget">
                                    <p>
                                        We’re a human-centered digital platform and software engineering company. We’re based in Silicon Valley with design and build centers around the globe. We empower companies in the travel, retail, insurance, and tech verticals to use the cloud, AI, and emerging technologies to create extensible platforms that leverage data and delight users.
                                    </p>
                                    <p>
                                        Location: Florida, USA<br>
                                        E-mail: support@atmax.com<br>
                                        Phone: 754-207-4606<br>
                                    </p>
                                    <!--
                                    <ul class="social-icons">
                                        <li><a href="javascript:void(0);"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
                                    -->
                                </div>
                            </aside>
                        </div>
                        <!--
                        <div class="col-md-3">
                            <aside class="widget widget-recent-entries">
                                <div class="widget-title">
                                    <h6>Recent Posts</h6>
                                </div>
                                <ul>
                                    <li><a href="javascript:void(0);">Map where your photos were taken and discover local points.</a><span class="post-date">May 8, 2018</span></li>
                                    <li><a href="javascript:void(0);">Map where your photos were taken and discover local points.</a><span class="post-date">April 7, 2018</span></li>
                                    <li><a href="javascript:void(0);">Map where your photos were taken and discover local points.</a><span class="post-date">September 7, 2018</span></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-md-3">
                            <aside class="widget twitter-feed-widget">
                                <div class="widget-title">
                                    <h6>Twitter Feed</h6>
                                </div>
                                <div class="twitter-feed" data-twitter="double_theme" data-number="1"></div>
                            </aside>
                        </div>
                        <div class="col-md-3">
                            <aside class="widget widget-recent-works">
                                <div class="widget-title">
                                    <h6>Portfolio</h6>
                                </div>
                                <ul>
                                    <li><a href="javascript:void(0);"><img src="{{ asset('assets/images/widgets/1.jpg') }}" alt=""></a></li>
                                    <li><a href="javascript:void(0);"><img src="{{ asset('assets/images/widgets/2.jpg') }}" alt=""></a></li>
                                    <li><a href="javascript:void(0);"><img src="{{ asset('assets/images/widgets/3.jpg') }}" alt=""></a></li>
                                    <li><a href="javascript:void(0);"><img src="{{ asset('assets/images/widgets/7.jpg') }}" alt=""></a></li>
                                    <li><a href="javascript:void(0);"><img src="{{ asset('assets/images/widgets/8.jpg') }}" alt=""></a></li>
                                    <li><a href="javascript:void(0);"><img src="{{ asset('assets/images/widgets/6.jpg') }}" alt=""></a></li>
                                </ul>
                            </aside>
                        </div>
                        -->
                    </div>
                </div>
            </div>
            <div class="footer-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>© <?php echo date('Y'); ?> <a href="{{ url('/') }}">Atmax Technologies</a>, All Rights Reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer end-->
    </div>
    <!-- Wrapper end-->

@endsection

@section('js')

<script type="text/javascript">
    
    $(document).ready(function () {

        $("#contact_us").on('submit', function (e) {

            var data = $(this).serializeArray()
            
            // var jsObj = {}
            // $.each(data, function (index, object) {

            //     jsObj[object.name] = object.value
            // })

            $.ajax({
                url: "{{ route('contact') }}",
                type: 'POST',
                data: data,
                beforeSend: function () {

                    $("#send_message").prop('disabled', true)
                },  
                success: function (response) {

                    $("#send_message").prop('disabled', false)

                    if (response.code == 200) {

                        var html = '<div class="alert alert-success">'
                        html += '<span>'+response.message+'</span>'
                        html += '</div>'

                        $('#contact-response').html(html)

                        setTimeout(function () {

                            $('#contact-response').html('')                            
                        }, 2000)
                    }

                    console.log(response)
                },
                error: function (error) {

                    console.log(error.Message)
                }
            });

            e.preventDefault()
        })

    });


</script>


@endsection