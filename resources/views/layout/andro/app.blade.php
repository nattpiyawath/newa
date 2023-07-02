<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/icon" href="assets/images/favicon.ico"/>

                <!-- Bootstrap CSS -->
                <link rel="stylesheet" href="{{URL::to('/resources/views/layout/andro/andro_files')}}/css/bootstrap.min.css">
                <!-- Box Icons CSS -->
                <link rel="stylesheet" href="{{URL::to('/resources/views/layout/andro/andro_files')}}/css/boxicons.min.css">
                <!-- Mean Menu CSS -->
                <link rel="stylesheet" href="{{URL::to('/resources/views/layout/andro/andro_files')}}/css/meanmenu.css">
                <!-- Animate CSS -->
                <link rel="stylesheet" href="{{URL::to('/resources/views/layout/andro/andro_files')}}/css/animate.min.css">
                <!-- Owl Carousel CSS -->
                <link rel="stylesheet" href="{{URL::to('/resources/views/layout/andro/andro_files')}}/css/owl.carousel.min.css">
                <link rel="stylesheet" href="{{URL::to('/resources/views/layout/andro/andro_files')}}/css/owl.theme.default.min.css">
                <!-- Flat Icon CSS -->
                <link rel="stylesheet" href="{{URL::to('/resources/views/layout/andro/andro_files')}}/css/flaticon.css">
                <!-- Modal Video CSS -->
                <link rel="stylesheet" href="{{URL::to('/resources/views/layout/andro/andro_files')}}/css/modal-video.min.css">
                <!-- Odometer CSS -->
                <link rel="stylesheet" href="{{URL::to('/resources/views/layout/andro/andro_files')}}/css/odometer.min.css">
                <!-- Style CSS -->
                <link rel="stylesheet" href="{{URL::to('/resources/views/layout/andro/andro_files')}}/css/style.css">
                <!-- Responsive CSS -->
                <link rel="stylesheet" href="{{URL::to('/resources/views/layout/andro/andro_files')}}/css/responsive.css">


        <style>
            .navbar-brand img { 
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
        
    @include('layout.andro.nav')

    @yield('content')

<!-- Footer -->
<footer class="footer-area two three pt-100">
    <div class="container">
        <div class="row">

            <div class="col-sm-6 col-lg-3">
                <div class="footer-item">
                    <div class="footer-logo">
                        <a class="footer-inva" href="index.html">
                            <img src="assets/img/logo-three.png" alt="Logo">
                        </a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur quaerat quo unde</p>
                        <ul>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-facebook'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-twitter'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-linkedin'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-instagram'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-youtube'></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="footer-item">
                    <div class="footer-link">
                        <h3>Important Links</h3>
                        <ul>
                            <li>
                                <i class='bx bx-chevron-right' ></i>
                                <a href="about.html">About</a>
                            </li>
                            <li>
                                <i class='bx bx-chevron-right' ></i>
                                <a href="services.html">Services</a>
                            </li>
                            <li>
                                <i class='bx bx-chevron-right' ></i>
                                <a href="projects.html">Projects</a>
                            </li>
                            <li>
                                <i class='bx bx-chevron-right' ></i>
                                <a href="blog.html">Blog</a>
                            </li>
                            <li>
                                <i class='bx bx-chevron-right' ></i>
                                <a href="faq.html">FAQ</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="footer-item">
                    <div class="footer-hours">
                        <h3>Open Hours</h3>
                        <ul>
                            <li>Monday <span>8:00 - 21:00</span></li>
                            <li>Tuesday <span>8:00 - 21:00</span></li>
                            <li>Wednesday <span>8:00 - 21:00</span></li>
                            <li>Thursday <span>8:00 - 21:00</span></li>
                            <li>Sunday <span>8:00 - 21:00</span></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="footer-item">
                    <div class="footer-contact">
                        <h3>Contact Info</h3>
                        <ul>
                            <li>
                                <i class='bx bxs-location-plus'></i>
                                <span>113 Inva, White House, New Jercy, USA</span>
                            </li>
                            <li>
                                <i class='bx bxs-phone-call'></i>
                                <a href="tel:+0015481592491">+001-548-159-2491</a>
                                <a href="tel:+0017581458652">+001-758-145-8652</a>
                            </li>
                            <li>
                                <i class='bx bxs-paper-plane'></i>
                                <a href="mailto:hello@inva.com">hello@inva.com</a>
                                <a href="mailto:info@inva.com">info@inva.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <p>Copyright @2020 Design & Developed by <a href="https://hibootstrap.com/" target="_blank">HiBootstrap</a></p>
        </div>
    </div>
    <div class="footer-shape">
        <img src="assets/img/footer-bg2.png" alt="Footer">
    </div>
</footer>
<!-- End Footer -->

<!-- Go Top -->
<div class="go-top">
    <i class="bx bxs-up-arrow-alt"></i>
    <i class="bx bxs-up-arrow-alt"></i>
</div>
<!-- End Go Top -->


<!-- Essential JS -->
<script src="{{URL::to('/resources/views/layout/andro/andro_files')}}/js/jquery.min.js"></script>
<script src="{{URL::to('/resources/views/layout/andro/andro_files')}}/js/popper.min.js"></script>
<script src="{{URL::to('/resources/views/layout/andro/andro_files')}}/js/bootstrap.min.js"></script>
<!-- Form Validator JS -->
{{-- <script src="{{ asset('/andro') }}/andro_files/js/form-validator.min.js"></script> --}}
<!-- Contact JS -->
{{-- <script src="{{ asset('/andro') }}/andro_files/js/contact-form-script.js"></script> --}}
<!-- Mean Menu JS -->
<script src="{{URL::to('/resources/views/layout/andro/andro_files')}}/js/jquery.meanmenu.js"></script>
<!-- Wow JS -->
<script src="{{URL::to('/resources/views/layout/andro/andro_files')}}/js/wow.min.js"></script>
<!-- Owl Carousel JS -->
<script src="{{URL::to('/resources/views/layout/andro/andro_files')}}/js/owl.carousel.min.js"></script>
<!-- Modal Video JS -->
<script src="{{URL::to('/resources/views/layout/andro/andro_files')}}/js/jquery-modal-video.min.js"></script>
<!-- Odometer JS -->
<script src="{{URL::to('/resources/views/layout/andro/andro_files')}}/js/odometer.min.js"></script>
<script src="{{URL::to('/resources/views/layout/andro/andro_files')}}/js/jquery.appear.min.js"></script>
<!-- Smooth Scroll JS -->
<script src="{{URL::to('/resources/views/layout/andro/andro_files')}}/js/smoothscroll.min.js"></script>
<!-- Custom JS -->
<script src="{{URL::to('/resources/views/layout/andro/andro_files')}}/js/custom.js"></script>
</body>
</html>