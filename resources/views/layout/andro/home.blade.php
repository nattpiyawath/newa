@extends('layout.andro.app')

@section('title', 'Welcome Home Page')

@section('content')
<!-- Start slider area -->

 <!-- Banner -->
 <div class="banner-area three">
    <div class="banner-slider-two owl-theme owl-carousel">

        <div class="banner-item">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container-fluid">
                        <div class="row align-items-center">

                            <div class="col-lg-7">
                                <div class="banner-content">
                                    <h1>Achieve Your Desired Success With Us</h1>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy when an unknown printer</p>
                                    <a class="common-btn three" href="#">
                                        Let's Start Now
                                        <span></span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-5">
                                <div class="banner-img">
                                    <img src="{{URL::to('/resources/views/layout/andro/andro_files')}}/img/banner-main2.jpg" alt="Banner">
                                    <img src="{{URL::to('/resources/views/layout/andro/andro_files')}}/img/banner-shape3.png" alt="Banner">
                                    <img src="{{URL::to('/resources/views/layout/andro/andro_files')}}/img/banner-shape2.png" alt="Shape">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <span class="banner-count">1</span>
            </div>
        </div>

        <div class="banner-item">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container-fluid">
                        <div class="row align-items-center">

                            <div class="col-lg-7">
                                <div class="banner-content">
                                    <h1>Invest Money To The Trusted Company</h1>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy when an unknown printer</p>
                                    <a class="common-btn three" href="#">
                                        Let's Start Now
                                        <span></span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-5">
                                <div class="banner-img">
                                    <img src="{{URL::to('/resources/views/layout/andro/andro_files')}}/img/banner-main3.jpg" alt="Banner">
                                    <img src="{{URL::to('/resources/views/layout/andro/andro_files')}}/img/banner-shape3.png" alt="Banner">
                                    <img src="{{URL::to('/resources/views/layout/andro/andro_files')}}/img/banner-shape2.png" alt="Shape">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <span class="banner-count">2</span>
            </div>
        </div>
        
        <div class="banner-item">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container-fluid">
                        <div class="row align-items-center">

                            <div class="col-lg-7">
                                <div class="banner-content">
                                    <h1>Get Engage In Profitable Business</h1>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy when an unknown printer</p>
                                    <a class="common-btn three" href="#">
                                        Let's Start Now
                                        <span></span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-5">
                                <div class="banner-img">
                                    <img src="{{URL::to('/resources/views/layout/andro/andro_files')}}/img/banner-main4.jpg" alt="Banner">
                                    <img src="{{URL::to('/resources/views/layout/andro/andro_files')}}/img/banner-shape3.png" alt="Banner">
                                    <img src="{{URL::to('/resources/views/layout/andro/andro_files')}}/img/banner-shape2.png" alt="Shape">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <span class="banner-count">3</span>
            </div>
        </div>

    </div>
    
    <div class="banner-shape">
        <img src="{{URL::to('/resources/views/layout/andro/andro_files')}}/img/banner-shape4.png" alt="Shape">
    </div>

</div>
<!-- End Banner -->

<!-- Feature -->
<section class="features-area pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-sm-6 col-lg-4">
                <div class="section-title three">
                    <h2>Our Dedicated Top <span>Features</span> For Your Satisfaction</h2>
                    <p>Lorem ipsum dolor sit amet, consetetur sadip ng elitr, sed diam nonumy eirmod tempor invi dunt ut labore</p>
                    <a class="common-btn three" href="services.html">
                        Explore All Features
                        <span></span>
                    </a>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="features-item">
                    <div class="top">
                        <img src="{{URL::to('/resources/views/layout/andro/andro_files')}}/img/features1.jpg" alt="Features">
                    </div>
                    <div class="bottom">
                        <h3>24/7 Support</h3>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="features-item">
                    <div class="top">
                        <img src="{{URL::to('/resources/views/layout/andro/andro_files')}}/img/features2.jpg" alt="Features">
                    </div>
                    <div class="bottom">
                        <h3>Lifetime Support</h3>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="features-inner">
                    <ul class="align-items-center">
                        <li>
                            <i class="flaticon-progress-report"></i>
                        </li>
                        <li>
                            <h3>35+ Years Experience</h3>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="features-inner">
                    <ul class="align-items-center">
                        <li>
                            <i class="flaticon-trusted"></i>
                        </li>
                        <li>
                            <h3>100% Trust Worthiness</h3>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="features-inner">
                    <ul class="align-items-center">
                        <li>
                            <i class="flaticon-customer-feedback"></i>
                        </li>
                        <li>
                            <h3>100% Client Satisfaction</h3>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Feature -->

<!-- About -->
<section class="about-area two three pt-100 pb-70">
    <div class="about-shape">
        <img src="{{URL::to('/resources/views/layout/andro/andro_files')}}/img/about/about-shape1.png" alt="Shape">
    </div>
    <div class="container-fluid">
        <div class="row align-items-center">

            <div class="col-lg-6">
                <div class="about-img">
                    <div class="row">
                        <div class="col-sm-6 col-lg-6">
                            <img class="about-long" src="{{URL::to('/resources/views/layout/andro/andro_files')}}/img/about/about4.jpg" alt="About">
                        </div>
                        <div class="col-sm-6 col-lg-6">
                            <img class="about-long-two" src="{{URL::to('/resources/views/layout/andro/andro_files')}}/img/about/about5.jpg" alt="About">
                        </div>
                    </div>
                    <div class="years">
                        <h3>25+ <br> <span>Years</span></h3>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="about-content">
                    <div class="section-title three">
                        <h2>We Are A Trusted Company With <span>25+</span> Years Of Experience</h2>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna.</p>
                    </div>
                    <p class="about-p">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
                    <div class="row">

                        <div class="col-sm-6 col-lg-6">
                            <ul>
                                <li>
                                    <i class="flaticon-medal-of-award"></i>
                                </li>
                                <li>
                                    <h3>25+ Years Experience</h3>
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit</p>
                                </li>
                            </ul>
                        </div>

                        <div class="col-sm-6 col-lg-6">
                            <ul>
                                <li>
                                    <i class="flaticon-star"></i>
                                </li>
                                <li>
                                    <h3>Growing Success</h3>
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit</p>
                                </li>
                            </ul>
                        </div>

                        <div class="col-sm-6 col-lg-6">
                            <ul>
                                <li>
                                    <i class="flaticon-insurance"></i>
                                </li>
                                <li>
                                    <h3>100% Trusted Company</h3>
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit</p>
                                </li>
                            </ul>
                        </div>

                        <div class="col-sm-6 col-lg-6">
                            <ul>
                                <li>
                                    <i class="flaticon-dollars-money-bag-with-a-clock"></i>
                                </li>
                                <li>
                                    <h3>Finance Management</h3>
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit</p>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <a class="common-btn three" href="#">
                        Explore About Us
                        <span></span>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End About -->

<!-- Services -->
<section class="services-area three pt-100 pb-70">
    <div class="container">
        <div class="section-title three">
            <h2>The <span>Services</span> That We Provide</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis libero facilis consequatur deleniti, ipsa provident? Culpa tenetur incidunt reprehenderit qui a voluptas</p>
        </div>
        <div class="row">

            <div class="col-sm-6 col-lg-4">
                <div class="services-item">
                    <i class="flaticon-marketing-strategy"></i>
                    <h3>
                        <a href="service-details.html">Business Strategy</a>
                    </h3>
                    <p>Lorem ipsum dolor sit amet, conse tetur sadipscing elitr, sed diam nonumy eirm od tempor invidunt ut labore et dolore magna</p>
                    <a class="services-btn" href="service-details.html">Read More</a>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="services-item two">
                    <i class="flaticon-dollars-money-bag-with-a-clock"></i>
                    <h3>
                        <a href="service-details.html">Investment Planning</a>
                    </h3>
                    <p>Lorem ipsum dolor sit amet, conse tetur sadipscing elitr, sed diam nonumy eirm od tempor invidunt ut labore et dolore magna</p>
                    <a class="services-btn" href="service-details.html">Read More</a>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="services-item three">
                    <i class="flaticon-strategy-in-a-labyrinth"></i>
                    <h3>
                        <a href="service-details.html">Project Management</a>
                    </h3>
                    <p>Lorem ipsum dolor sit amet, conse tetur sadipscing elitr, sed diam nonumy eirm od tempor invidunt ut labore et dolore magna</p>
                    <a class="services-btn" href="service-details.html">Read More</a>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="services-item four">
                    <i class="flaticon-trend"></i>
                    <h3>
                        <a href="service-details.html">Financial Analysis</a>
                    </h3>
                    <p>Lorem ipsum dolor sit amet, conse tetur sadipscing elitr, sed diam nonumy eirm od tempor invidunt ut labore et dolore magna</p>
                    <a class="services-btn" href="service-details.html">Read More</a>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="services-item five">
                    <i class="flaticon-evaluate"></i>
                    <h3>
                        <a href="service-details.html">Audit & Evaluation</a>
                    </h3>
                    <p>Lorem ipsum dolor sit amet, conse tetur sadipscing elitr, sed diam nonumy eirm od tempor invidunt ut labore et dolore magna</p>
                    <a class="services-btn" href="service-details.html">Read More</a>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="services-item six">
                    <i class="flaticon-insurance"></i>
                    <h3>
                        <a href="service-details.html">Support & Maintain</a>
                    </h3>
                    <p>Lorem ipsum dolor sit amet, conse tetur sadipscing elitr, sed diam nonumy eirm od tempor invidunt ut labore et dolore magna</p>
                    <a class="services-btn" href="service-details.html">Read More</a>
                </div>
            </div>

        </div>

    </div>
</section>
<!-- End Services -->

<!-- Team -->
<section class="team-area three ptb-100">
    <div class="container">
        <div class="section-title three">
            <h2>Meet Our Awesome <span>Team Members</span></h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis libero facilis consequatur deleniti, ipsa provident? Culpa tenetur incidunt reprehenderit qui a voluptas</p>
        </div>
        <div class="row">
            
            <div class="col-sm-6 col-lg-4">
                <div class="team-item">
                    <div class="top">
                        <img src="{{URL::to('/resources/views/layout/andro/andro_files')}}/img/team/team1.jpg" alt="Team">
                    </div>
                    <div class="bottom">
                        <ul>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-facebook'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-linkedin'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-twitter'></i>
                                </a>
                            </li>
                        </ul>
                        <h3>
                            <a href="team-details.html">David Seek</a>
                        </h3>
                        <span>Cheif Executive</span>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="team-item">
                    <div class="top">
                        <img src="{{URL::to('/resources/views/layout/andro/andro_files')}}/img/team/team2.jpg" alt="Team">
                    </div>
                    <div class="bottom">
                        <ul>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-facebook'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-linkedin'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-twitter'></i>
                                </a>
                            </li>
                        </ul>
                        <h3>
                            <a href="team-details.html">Angela Carter</a>
                        </h3>
                        <span>Cheif Marketing Researcher</span>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4">
                <div class="team-item">
                    <div class="top">
                        <img src="{{URL::to('/resources/views/layout/andro/andro_files')}}/img/team/team3.jpg" alt="Team">
                    </div>
                    <div class="bottom">
                        <ul>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-facebook'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-linkedin'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-twitter'></i>
                                </a>
                            </li>
                        </ul>
                        <h3>
                            <a href="team-details.html">Moris James</a>
                        </h3>
                        <span>Cheif Finance Consultant</span>
                    </div>
                </div>
            </div>

        </div>

        <div class="text-center">
            <a class="common-btn three" href="team.html">
                All Members
                <span></span>
            </a>
        </div>

    </div>
</section>
<!-- End Team -->

<!-- Subscribe -->
<section class="subscribe-area three ptb-100">
    <div class="subscribe-img">
        <img src="{{URL::to('/resources/views/layout/andro/andro_files')}}/img/subscribe-main2.png" alt="Subscribe">
    </div>
    <div class="container">
        <div class="subscribe-wrap">
            <div class="section-title two">
                <h2>Subscribe Our Newsletter</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis libero facilis consequatur deleniti, ipsa provident? Culpa tenetur incidunt</p>
            </div>
            <form class="newsletter-form" data-toggle="validator">
                <input type="email" class="form-control" placeholder="Enter Your Email" name="EMAIL" required autocomplete="off">

                <button class="btn common-btn three" type="submit">
                    Subscribe
                    <span></span>
                </button>
                <div id="validator-newsletter" class="form-result"></div>
            </form>
        </div>
    </div>
</section>
<!-- End Subscribe -->

<!-- End main content -->	
@endsection
