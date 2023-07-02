<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/icon" href="assets/images/favicon.ico"/>
        <!-- Font Awesome -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
         <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <!-- Slick slider -->
        <link href="{{ asset('/hero/assets/css/slick.css') }}" rel="stylesheet">
        <!-- Gallery Lightbox -->
        <link href="{{ asset('/hero/assets/css/magnific-popup.css') }}" rel="stylesheet">
        <!-- Skills Circle CSS  -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/circle.css') }}">
        
        <!-- Main Style -->
        <link href="{{ asset('/hero/style.css') }}" rel="stylesheet">

        <!-- Google Fonts Raleway -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,400i,500,500i,600,700" rel="stylesheet">
        <!-- Google Fonts Open sans -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700,800" rel="stylesheet">
        <style>
            .mu-logo img { 
                max-width: 160px;
            }
        </style>
    
    <title>
        @hasSection('title')
        @yield('title')
        @else
            Welcome to Giantfocus
        @endif
    </title>
    
</head>
<body>

    <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
        <i class="fa fa-angle-up"></i>
      </a>
    <!-- END SCROLL TOP BUTTON -->
        
    @include('layout.hero.nav')

    @yield('content')

    <!-- Start footer -->
<footer id="mu-footer">
    <div class="mu-footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="mu-single-footer">
                        <img class="mu-footer-logo" src="{{ asset('/hero/assets/images/') }}/logo.png" alt="logo">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus. </p>
                        <div class="mu-social-media">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a class="mu-twitter" href="#"><i class="fa fa-twitter"></i></a>
                            <a class="mu-pinterest" href="#"><i class="fa fa-pinterest-p"></i></a>
                            <a class="mu-google-plus" href="#"><i class="fa fa-google-plus"></i></a>
                            <a class="mu-youtube" href="#"><i class="fa fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mu-single-footer">
                        <h3>Twitter feed</h3>
                        <ul class="list-unstyled">
                              <li class="media">
                               <span class="fa fa-twitter"></span>
                                <div class="media-body">
                                    <p><strong>@b_hero</strong> Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                                    <a href="#">2 hours ago</a>
                                </div>
                              </li>
                              <li class="media">
                                   <span class="fa fa-twitter"></span>
                                <div class="media-body">
                                    <p><strong>@b_hero</strong> Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                                    <a href="#">2 hours ago</a>
                                </div>
                              </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mu-single-footer">
                        <h3>Useful link</h3>
                        <ul class="mu-useful-links">
                            <li><a href="#">Help Center</a></li>
                            <li><a href="#">Download Center</a></li>
                            <li><a href="#">User Account</a></li>
                            <li><a href="#">Support Forum</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mu-single-footer">
                        <h3>Contact Information</h3>
                        <ul class="list-unstyled">
                          <li class="media">
                            <span class="fa fa-home"></span>
                            <div class="media-body">
                                <p>349 Main St, Deseronto, ON K0K 1X0, Canada</p>
                            </div>
                          </li>
                          <li class="media">
                            <span class="fa fa-phone"></span>
                            <div class="media-body">
                               <p>+00 123 456 789 00</p>
                                 <p>+ 00 254 632 548 00</p>
                            </div>
                          </li>
                          <li class="media">
                            <span class="fa fa-envelope"></span>
                            <div class="media-body">
                             <p>support@bhero.com</p>
                             <p>help.behero@gmail.com</p>
                            </div>
                          </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mu-footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-footer-bottom-area">
                        <p class="mu-copy-right">&copy; Copyright <a rel="nofollow" href="#">giantfocus</a>. All right reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>
<!-- End footer -->

<!-- JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<!-- Slick slider -->
<script type="text/javascript" src="{{ asset('/hero/assets/js/slick.min.js') }}"></script>
<!-- Progress Bar -->
<script src="{{ asset('css/circle.js') }}"></script>
<!-- Filterable Gallery js -->
<script type="text/javascript" src="{{ asset('/hero/assets/js/jquery.filterizr.min.js') }}"></script>
<!-- Gallery Lightbox -->
<script type="text/javascript" src="{{ asset('/hero/assets/js/jquery.magnific-popup.min.js') }}"></script>
<!-- Counter js -->
<script type="text/javascript" src="{{asset('/hero/assets/js/counter.js')}}"></script>
<!-- Ajax contact form  -->
<script type="text/javascript" src="{{asset('/hero/assets/js/app.js')}}"></script>

<!-- Custom js -->
<script type="text/javascript" src="{{asset('/hero/assets/js/custom.js')}}"></script>

<!-- About us Skills Circle progress  -->
<script>
    // First circle
    new Circlebar({
    element : "#circle-1",
    type : "progress",
      maxValue:  "90"
    });
    
    // Second circle
    new Circlebar({
    element : "#circle-2",
    type : "progress",
      maxValue:  "84"
    });

    // Third circle
    new Circlebar({
    element : "#circle-3",
    type : "progress",
      maxValue:  "60"
    });

    // Fourth circle
    new Circlebar({
    element : "#circle-4",
    type : "progress",
      maxValue:  "74"
    });

</script>

</body>
</html>