<?php require(base_path().'/themes/giant/header.php'); ?>

<style type="text/css">

    .product-nav-bar li {
        font-size: 14px !important;
    }
    .smart-feature { background: unset !important; padding: unset !important; }
    .slick-slide .container{max-width:100%!important;}

    /*#smart-feature {*/
    /*    background-image: none!important;*/
    /*}*/

    .tab-content {
        display: block!important;
    }


    .big-cover-slide {
        background: radial-gradient(circle at center, rgba(0, 0, 0, 0.65) 0%, #222222a6 100%) !important;
    }
    @media screen and (min-width: 1800px){
      .page-title-area {height: 400px;}
    }
    .wrapper {text-align: center;color: #444;}
      #threesixty {margin: 0 auto;-webkit-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;}
      .g-hub {color: #444;font-size: 0.9em;}
      .buttons-wrapper {max-width: 200px;width: 100%;margin: 0 auto;display: flex;justify-content: space-between;}
      .button {
        position: relative;
        -webkit-appearance: none;
          -moz-appearance: none;
                appearance: none;
        border: none;
        padding: 40px 7px 5px;
        cursor: pointer;
      }
      .button::before, .button::after {
        content: "";
        position: absolute;
        top: 10px;
        left: 50%;
        border-left: 3px solid #000;
        border-top: 3px solid #000;
        width: 20px;
        height: 20px;
        transform: translate(-45%) rotate(-45deg);
      }
      .button::after {transform: translate(5%) rotate(-45deg);}
      #next::before {transform: translate(-90%) rotate(135deg);}
      #next::after {transform: translate(-50%) rotate(135deg);}
      .image-360:hover{cursor: pointer;}
      .select-color input[type="button"] {border: none;width: 45px;height: 45px;transform: rotate(45deg);margin-right: 30px;}
      .main {font-family:Arial;width:600px;display:block;margin:0 auto;}
      .action{display:block;margin:100px auto;width:100%;text-align:center;}
      .action a {display:inline-block;padding:5px 10px; background:#f30;color:#fff;text-decoration:none;}
      .action a:hover{background:#000;}
      .slick-slide{height: auto!important;}
      .slider-nav .slick-current > div img {border-top: 3px solid #e21428;}
      .content-img-360{max-width:25%;}
      .product-menu h1 {font-size: 22px;font-weight: 600;position: relative;margin-bottom: 0px !important;padding: 13px 15px 13px;}
      .product-menu.main-nav ul li a {position: relative !important;color: #22262a;}
      .product-menu.main-nav ul li a:hover{color: #22262a !important;}
      .product-menu.main-nav.menu-shrink {position: fixed;top: 60px;transition: auto !important;text-align: left!important;}
      .row.flex-detai-gallery {display: inline-flex!important;align-items: center;}
      .slick-slide img{width: 100%;max-width: 100% !important;}
      .slick-current > div {border: none!important;}
      .big-cover-slide {background: #efefef;}
      .slider.slider-nav.slick-slider {margin-top: 15px;}
      .slider.slider-nav.slick-slider img {width: 95%;}
      .slick-next:before{
          content: "\ec8f"!important;
          font-family: 'boxicons'!important;
          color: #ffffff !important;
          background: #ec1b30;
          padding: 10px;
      }
        .slick-prev:before {
          content: "\ec8c" !important;
          font-family: 'boxicons' !important;
          color: #ffffff !important;
          background: #ec1b30;
          padding: 10px;
      }
      .slick-prev{left: -60px!important;}
      table.table-speci th {
          font-weight: 600;
          line-height: 32px;
      }
      table.table-speci tr:last-child {
          border-bottom: unset !important;
      }
      table.table-speci tr {
          border-bottom: 1px solid #ccccccc7;
          position: relative;
          height: 50px;
      }
      .product-menu.main-nav.menu-shrink .navbar-light {
          transition: 0.4s;
      }
      .product-menu.main-nav.menu-shrink h1 {
          font-size: 18px;
          padding: 17px 5px !important;
      }
      .feature-product {
          height: 100vh;
          align-items: center;
          text-align: center;
      }
      .product-nav-bar {
          justify-content:unset!important;
          display:flex;
      }
      
  h5.model-no {
      color: #4d4d4d;
      font-size: 18px;
      margin-top:20px;
  }
  .product-nav-bar li:hover a, .product-nav-bar li a:hover{color:#fff!important;}
  
    #overview, .row.desktop, .product-feature {height: 100vh;}
    
    .specification {display: block;padding-bottom:1em;}
    .specification .nav.nav-tabs {display: flex;border-bottom: solid 1px #ee183085;}
    
    .specification .nav-link.active{
        height: 38px;
        border: none;
        border-bottom: solid 3px #e82c2a;
    }
    
    .specification .nav-link {color: #3d3b3b;}

  @media screen and (min-width: 320px) and (max-width: 699px){
      .main-nav nav .navbar-nav .nav-item{padding: 6px 8px!important;}
      .all-lang-2.newClass {position: absolute;}
      .product-menu.main-nav ul li a{top:0;width: max-content;float: left;overflow: hidden;}
      .slide-caption{position:unset;}
      .slide-caption p {font-size: 15px;margin-top: 0;line-height: 20px;padding: 10px;}
      .flex-detai-gallery .slide-caption h1 {font-size: 20px;line-height:25px;}
      h1.honda-school-title {
        font-size: 20px;
        color: inherit;
        margin: unset;
        line-height: 28px;
        text-align: center;
    }
    p.honda-school-des {
        font-size: 15px;
        color: inherit;
        text-align: justify;
        line-height: 28px;
        margin: 1rem 0 3rem !important;
    }
    .mySwiper .swiper-slide.nslide {
        width: 100% !important;
        background: unset !important;
        padding: 15px !important;
    }
    .mySwiper .swiper-slide.nslide.swiper-slide-active h1 {
        font-size: 20px;
        margin: 15px 0;
        color: rgb(226, 20, 40);
        letter-spacing: 1px;
    }
    .mySwiper .swiper-slide.nslide.swiper-slide-active span {
        font-size: 15px;
        line-height: 28px;
        padding: 15px 0;
    }
    .mySwiper .swiper-button-prev, .mySwiper .swiper-button-next {
        background-image: none;
        width: 30px;
        height: 30px;
    }
    .mySwiper .swiper-button-prev i, .mySwiper .swiper-button-next i {
        transform: rotate(-45deg);
        color: rgb(255, 255, 255);
        font-size: 20px !important;
    }
    .mySwiper .swiper-button-next {
        right: 25px;
    }
    .mySwiper .swiper-button-prev {
        left: 25px;
    }
      
  }
  
  @media screen and (min-width: 769px){
      body{overflow-x: hidden;}
    .main-feature2.feature-product h1, .main-feature2.feature-product h1 span, .overview-text h1 {
        font-size: 65px !important;
        color: #fff;
        filter: drop-shadow(2px 2px 2px #00000060);
        font-family: 'ncxfontbold' !important;
        letter-spacing: 1px;
        margin: 0;
        line-height: 60px;
        text-align: center;
    }
    .overview-text p{text-align:center;}
    .overview-text h1 span{font-family: 'ncxfontbold' !important;}
    .flex-detai-gallery .slide-caption h1 {
            font-size: 65px !important;
            color: #fff;
            filter: drop-shadow(2px 2px 2px #00000060);
            font-family: 'ncxfontbold' !important;
            letter-spacing: 1px;
            margin: 0;
            line-height: 60px;
            text-align: center;
    }
    .model-spec h1.head-titel-page {padding-bottom: 0.4em;}
    .product-menu.main-nav.menu-shrink .navbar-light {float: right;}
    #overview, #product-feature{margin-bottom:0!important;}
    #overview .desktop, #product-feature .desktop{background-size: cover!important;text-align: right;}
    #overview .overview-text, #product-feature .overview-text{margin-top: 23%;}
    img.overview-banner.mobile, .model-cover-mobile, div#overview .mobile, .main-feature2 .mobile, .product-menu .bxs-down-arrow{display: none!important;}
    .model-cover-desktop {
        height: 700px;
        background-size: cover!important;
        background-repeat: no-repeat!important;
        max-width: 1980px;
        margin: 0 auto!important;
    }
    .only-mobile, .navbar-mobile{display: none;}
    .only-desktop{display:flex;}
    
    .product-nav-bar li {
        padding: 0!important;
    }
    
    .product-menu.main-nav ul li a {
        padding: 18px 15px;
        display: block;
    }
    
  }
  
  @media screen and (max-width: 768px){
    .row.smart-featuremo.only-mobile {
        padding: 0 15px;
        margin: 4rem 0 6rem;
        height: auto;
    }  
      
    .product-nav-bar-mobile.open li.active {
        border-bottom: solid 1px #cdcdcd!important;
    }
    li.nav-item.show{display:block;}
    .navbar-mobile .bx.bxs-down-arrow {margin-top: 14px;}
    .navbar-mobile li {border-bottom: solid 1px #ddd;display:none;}
    .navbar-mobile li:last-child{border:none;}
    .navbar-mobile a {padding: 10px 8px;font-size: 1.3rem;}
    .product-nav-bar li:hover a, .product-nav-bar li a:hover{color:red !important;}
    .show-child.active {border-bottom: solid 1px #dcdcdc!important;}
    .navbar-mobile{display: none;}
    .menu-shrink .hide-child li{display: none!important;}
    .show-child, .product-nav-bar.stick li.active, .navbar-mobile li.active{display:block!important;}
    .product-menu.main-nav.menu-shrink .nav-item.active {display: block!important;border: 0;}
    .product-menu.main-nav.menu-shrink .nav-item.active a{color: #ed1b30 !important;}
    .product-menu.main-nav.menu-shrink {
        position: fixed!important;
        top: 3em!important;
        margin: 0;
        width: 100%;
        max-width: 100%;
        box-shadow: 3px 3px 7px #cccccc91;
        border-radius: inherit;
        padding: 4px 2px;
    }
    .product-menu.main-nav {position: inherit!important;}
    .main-menu-rigt a svg {padding: 2px 16px 8px 3px!important;}
    .row.bottom-footer .col-sm-2 {padding-bottom: 3rem;}
    .product-menu .bxs-down-arrow {
            float: right;
            position: absolute;
            margin: 4px -14px;
            font-size: 10px;
            color: #ed1a2e;
        }
    .product-menu.main-nav ul li a::after{content:""!important;}
    #overview {height: 55vh !important;}
    #overview .slick-dots li{margin:0;}
    #overview .slick-dots li button:before{opacity:1;font-size: 14px;line-height: 22px;}
    #overview .slick-dots .slick-active button {background-color: #ed1b30;}
    #overview .slick-dots li.slick-active button:before {color: #0000!important;}
    .col-md-6.model-color-left {margin-top: -5rem;}
    h1.head-titel-page{color:#000!important;}
    h1.head-titel-page:before{width:0!important;}
    .mobile-main-feature h1, .slick-slider h1{font-size: 2rem;font-weight: 400;}
    h1.head-titel-page, h1.head-titel-page span{font-size:2.4rem;}
    h1.head-titel-page span{line-height:18px;}
    h1.head-titel-page p {font-size: 14px;}
    .color-chat-sub {
        width: 100%;
        text-align: center;
        display: inline-block;
    }
    .specification{overflow-x:hidden;}
    .specification .nav-link {padding: 0;margin-right: 10px;font-size: 14px;height: 30px!important;}
    .specification .nav.nav-tabs {width:500px;}
    .specification .head-titel-page:before {text-align: center!important;margin: 18px auto!important; }
    .specification .tab-content, #specification .container{padding:0!important;}
    .model-spec h1.head-titel-page:before{text-align:center;}
    .model-spec h1.head-titel-page {margin: 0 auto;text-align: center;padding-bottom:16px;}
    .other-key-feature .slick-dots li {width: 8px;}
    .other-key-feature .slick-dots li button:before {font-size: 12px;width: 4px;height: 20px;opacity: 1;color: #fff;}
    .other-key-feature .slick-dots .slick-active button{height:2rem!important;}
    .other-key-feature .slick-dots .slick-active button{background-color: #1e212300;}
    .other-key-feature .slick-dots li.slick-active button:before {opacity: 1;color: #e82c2a;}
    .other-key-feature .slick-dots {position: absolute;top: 12em;height: 40px;}
    .other-key-feature .flex-detai-gallery .slide-caption h1, .other-key-feature .slide-caption p {color: #303030;}
    .flex-detai-gallery .slide-caption h1{padding-top:1em;}
    .big-cover-slide {background: #fff!important;}
    .main-feature2{background: #fff!important;}
    .main-feature2 .mobile, ,.only-mobile{display:block;}
    img.overview-banner.desktop, #overview .desktop, .only-desktop, #product-feature .desktop, .other-key-feature .slider-nav{display: none;}
    #overview .slick-dots {margin-top: -10.5em;}
    #overview .mobile .overview-text {
        margin-top: 21em;
    }
    #overview .mobile {
        height: 30em;
        background-size: contain!important;
        background-repeat: no-repeat!important;
        text-align:center;
    }
    .product-menu.main-nav {
        background: #fff;
        padding: 20px 2px 18px 2px;
        border-radius: 10px;
        box-shadow: 2px 2px 12px #a9a9a9;
        margin: 19px 16px;
        max-width: 92%;
        margin-top: -2em;
        display: inline-table;
    }
    
    .product-nav-bar li {
        padding: 10px 0px !important;
    }
    .product-nav-bar li:hover {background: #ffffff;}
    
    .product-menu.main-nav ul li a {
        width: 100%!important;
    }
    .product-menu.main-nav ul li a:after {
        content: "\e9ac";
        float: right;
    }
    .product-menu .nav-item.active a {
        color: red!important;
    }
    .product-menu .nav-item.active {
        background: #ffffff!important;
    }
    .product-menu.main-nav.menu-shrink.expend_nav li.active {
        border-bottom: solid 1px #dadada;
    }
    .product-menu.main-nav.expend_nav.menu-shrink .nav-item {
        display: block!important;
    }
    
  }

</style>

<?php if(isset($_GET['page'])){?>
    <link rel="stylesheet" href="<?=URL::to('/themes/giant/andro_files')?>/css/only-mobile.css?v=<?php echo rand(10,10000000); ?>">
<?php }?>

<!-- Navbar Product View -->

<?php 
    $currentLocale = app()->getLocale();
    
    $id = pageID();
    $info = \App\Pages::where('id', $id)->first();
    $lang_code = app()->getLocale();
  
    if ($lang_code == 'kh'){
        
    }else{echo '';}

?>

    <div class="row model-cover-desktop" style="background:url('<?=url('').'/storage/app/uploads/'.$info->header_img?>');"></div>
    <div class="row model-cover-mobile"><img src="<?=url('').'/storage/app/uploads/'.$info->thumbnail?>"/></div>

    <!-- Navbar Product-->

            <div class="product-menu main-nav">
                <div class="container">
                    <?php 
        
                        $lang_code = app()->getLocale();
                        
                        if($lang_code == 'en'){
                    ?>
                    
                    <div class="row">
                        <div class="col-sm-2">
                            <h1 class="model-detail-title"><?=pageTitle();?></h1>
                        </div>
                        <div class="col-sm-10">
                            <nav class="navbar navbar-expand-md navbar-light navbar-desktop">
                                <ul class="product-nav-bar">
                                    <li class="nav-item nav1"><a>ROAD SAFETY</a><i class='bx bxs-down-arrow'></i></li>
                                    <li class="nav-item nav2"><a>DRIVING SCHOOL</a><i class='bx bxs-down-arrow'></i></li>
                                    <li class="nav-item nav3"><a>TRAINING</a><i class='bx bxs-down-arrow'></i></li>
                                    <li class="nav-item nav4"><a>QUALIFICATION</a><i class='bx bxs-down-arrow'></i></li>
                                    <li class="nav-item nav5"><a>DOWNLOADS</a><i class='bx bxs-down-arrow'></i></li>
                                    <li class="nav-item nav6"><a>VIDEOS</a><i class='bx bxs-down-arrow'></i></li>
                                    <li class="nav-item nav7"><a>LASTEST NEWS</a><i class='bx bxs-down-arrow'></i></li>
                                </ul>
                            </nav>
                            
                            <nav class="navbar navbar-mobile">
                                <ul class="product-nav-bar-mobile">
                                    <li class="nav-item nav1-mobile"><a>ROAD SAFETY</a><i class='bx bxs-down-arrow'></i></li>
                                    <li class="nav-item nav2-mobile"><a>DRIVING SCHOOL</a><i class='bx bxs-down-arrow'></i></li>
                                    <li class="nav-item nav3-mobile"><a>TRAINING</a><i class='bx bxs-down-arrow'></i></li>
                                    <li class="nav-item nav4-mobile"><a>QUALIFICATION</a><i class='bx bxs-down-arrow'></i></li>
                                    <li class="nav-item nav5-mobile"><a>DOWNLOADS</a><i class='bx bxs-down-arrow'></i></li>
                                    <li class="nav-item nav6-mobile"><a>VIDEOS</a><i class='bx bxs-down-arrow'></i></li>
                                    <li class="nav-item nav7-mobile"><a>LASTEST NEWS</a><i class='bx bxs-down-arrow'></i></li>
                                </ul>
                            </nav>
                            
                        </div>
                    </div> 
                 <?php } else {?>  
                
                    <div class="row">
                        <div class="col-sm-2">
                            <h1 class="model-detail-title"><?=pageTitle();?></h1>
                        </div>
                        <div class="col-sm-10">
                            <nav class="navbar navbar-expand-md navbar-light navbar-desktop">
                                <ul class="product-nav-bar">
                                    
                                    <li class="nav-item nav1"><a> សុវត្ថិភាពចរាចរណ៍ផ្លូវគោក </a><i class='bx bxs-down-arrow'></i></li>
                                    <li class="nav-item nav2"><a> សាលាបង្រៀនបើកបរ </a><i class='bx bxs-down-arrow'></i></li>
                                    <li class="nav-item nav3"><a> វគ្គបណ្តុះបណ្តាល </a><i class='bx bxs-down-arrow'></i></li>
                                    <li class="nav-item nav4"><a> លក្ខខណ្ឌសិក្សា </a><i class='bx bxs-down-arrow'></i></li>
                                    <li class="nav-item nav5"><a> ឯកសារ </a><i class='bx bxs-down-arrow'></i></li>
                                    <li class="nav-item nav6"><a> វីដេអូឃ្លីប </a><i class='bx bxs-down-arrow'></i></li>
                                    <li class="nav-item nav7"><a> ព័ត៌មានថ្មីៗ </a><i class='bx bxs-down-arrow'></i></li>
                                    
                                </ul>
                            </nav>
                            
                            <nav class="navbar navbar-mobile">
                                <ul class="product-nav-bar-mobile">
                                    <li class="nav-item nav1-mobile"><a> សុវត្ថិភាពចរាចរណ៍ផ្លូវគោក </a><i class='bx bxs-down-arrow'></i></li>
                                    <li class="nav-item nav2-mobile"><a> សាលាបង្រៀនបើកបរ </a><i class='bx bxs-down-arrow'></i></li>
                                    <li class="nav-item nav3-mobile"><a> វគ្គបណ្តុះបណ្តាល </a><i class='bx bxs-down-arrow'></i></li>
                                    <li class="nav-item nav4-mobile"><a> លក្ខខណ្ឌសិក្សា </a><i class='bx bxs-down-arrow'></i></li>
                                    <li class="nav-item nav5-mobile"><a> ឯកសារ </a><i class='bx bxs-down-arrow'></i></li>
                                    <li class="nav-item nav6-mobile"><a> វីដេអូឃ្លីប </a><i class='bx bxs-down-arrow'></i></li>
                                    <li class="nav-item nav7-mobile"><a> ព័ត៌មានថ្មីៗ </a><i class='bx bxs-down-arrow'></i></li>
                                </ul>
                            </nav>
                            
                        </div>
                    </div> 
                
                <?php } ?>  
                    
                    
                </div>
            </div>

    <!-- End Navbar Product-->
    

<?= $body ?>


<script>
            
            $('.product-nav-bar-mobile').click(function() {
                if ($(this).hasClass("open")) {
                    $(this).removeClass("open");
                } else{
                    $(this).addClass("open");
                }
            });
            
            $('.nav1').click(function() {
                 
                 if ($(this).hasClass("active")) {
                    $(this).removeClass("active");
                    $(this).addClass('show');
                    $(this).siblings().addClass('show');
                    if(window.outerWidth < 768) {
                         $('html, body').animate({
                            scrollTop: $('.model-overview').offset().top - 390
                        }, 500);
                     } else {
                         $('html, body').animate({
                            scrollTop: $('.model-overview').offset().top - 230
                        }, 700);
                     }
                } else{
                    $(this).addClass("active");
                    $(this).siblings().removeClass('show');
                    $(this).siblings().removeClass('active');
                    $(this).removeClass('show');
                    if(window.outerWidth < 768) {
                         $('html, body').animate({
                            scrollTop: $('.model-overview').offset().top - 390
                        }, 500);
                     } else {
                         $('html, body').animate({
                            scrollTop: $('.model-overview').offset().top - 230
                        }, 700);
                     }
                }
                
            });
            
            $('.nav2').click(function() {
                if ($(this).hasClass("active")) {
                    $(this).removeClass("active");
                    $(this).addClass('show');
                    $(this).siblings().addClass('show');
                    if(window.outerWidth < 768) {
                         $('html, body').animate({
                            scrollTop: $('.smart-feature').offset().top - 70
                        }, 500);
                     } else {
                         $('html, body').animate({
                            scrollTop: $('.smart-feature').offset().top - 130
                        }, 700);
                     }
                } else{
                    $(this).addClass("active");
                    $(this).siblings().removeClass('show');
                    $(this).siblings().removeClass('active');
                    $(this).removeClass('show');
                    if(window.outerWidth < 768) {
                         $('html, body').animate({
                            scrollTop: $('.smart-feature').offset().top - 390
                        }, 500);
                     } else {
                         $('html, body').animate({
                            scrollTop: $('.smart-feature').offset().top - 230
                        }, 700);
                     }
                }
            });
            
            $('.nav3').click(function() {
                if ($(this).hasClass("active")) {
                    $(this).removeClass("active");
                    $(this).addClass('show');
                    $(this).siblings().addClass('show');
                    if(window.outerWidth < 768) {
                         $('html, body').animate({
                            scrollTop: $('.main-features').offset().top - 70
                        }, 500);
                     } else {
                         $('html, body').animate({
                            scrollTop: $('.main-features').offset().top - 130
                        }, 700);
                     }
                } else{
                    $(this).addClass("active");
                    $(this).siblings().removeClass('show');
                    $(this).siblings().removeClass('active');
                    $(this).removeClass('show');
                    if(window.outerWidth < 768) {
                     $('html, body').animate({
                        scrollTop: $('.main-features').offset().top - 350
                        }, 500);
                     } else {
                         $('html, body').animate({
                            scrollTop: $('.main-features').offset().top - 150
                        }, 700);
                     }
                }
            });
            
            $('.nav4').click(function() {
                if ($(this).hasClass("active")) {
                    $(this).removeClass("active");
                    $(this).addClass('show');
                    $(this).siblings().addClass('show');
                    if(window.outerWidth < 768) {
                         $('html, body').animate({
                            scrollTop: $('.section360').offset().top - 70
                        }, 500);
                     } else {
                         $('html, body').animate({
                            scrollTop: $('.section360').offset().top - 130
                        }, 700);
                     }
                } else{
                    $(this).addClass("active");
                    $(this).siblings().removeClass('show');
                    $(this).removeClass('show');
                    if(window.outerWidth < 768) {
                     $('html, body').animate({
                        scrollTop: $('.section360').offset().top - 410
                    }, 500);
                 } else {
                     $('html, body').animate({
                        scrollTop: $('.section360').offset().top - 150
                    }, 700);
                 }
                }
            });
            
            $('.nav5').click(function() {
                if ($(this).hasClass("active")) {
                    $(this).removeClass("active");
                    $(this).addClass('show');
                    $(this).siblings().addClass('show');
                    if(window.outerWidth < 768) {
                         $('html, body').animate({
                            scrollTop: $('.other-key-feature').offset().top - 70
                        }, 500);
                     } else {
                         $('html, body').animate({
                            scrollTop: $('.other-key-feature').offset().top - 130
                        }, 700);
                     }
                } else{
                    $(this).addClass("active");
                    $(this).siblings().removeClass('show');
                    $(this).removeClass('show');
                    if(window.outerWidth < 768) {
                     $('html, body').animate({
                        scrollTop: $('.other-key-feature').offset().top - 360
                        }, 500);
                     } else {
                         $('html, body').animate({
                            scrollTop: $('.other-key-feature').offset().top - 150
                        }, 700);
                     }
                }
            });
       
            $('.nav6').click(function() {
                if ($(this).hasClass("active")) {
                    $(this).removeClass("active");
                    $(this).addClass('show');
                    $(this).siblings().addClass('show');
                    if(window.outerWidth < 768) {
                         $('html, body').animate({
                            scrollTop: $('.specification').offset().top - 70
                        }, 500);
                     } else {
                         $('html, body').animate({
                            scrollTop: $('.specification').offset().top - 130
                        }, 700);
                     }
                } else{
                    $(this).addClass("active");
                    $(this).siblings().removeClass('show');
                    $(this).removeClass('show');
                     if(window.outerWidth < 768) {
                         $('html, body').animate({
                            scrollTop: $('.specification').offset().top - 400
                        }, 500);
                     } else {
                         $('html, body').animate({
                            scrollTop: $('.specification').offset().top - 150
                        }, 700);
                     }
                }
            });
            
            $('.nav7').click(function() {
                if ($(this).hasClass("active")) {
                    $(this).removeClass("active");
                    $(this).addClass('show');
                    $(this).siblings().addClass('show');
                    if(window.outerWidth < 768) {
                         $('html, body').animate({
                            scrollTop: $('.videoreview').offset().top - 70
                        }, 500);
                     } else {
                         $('html, body').animate({
                            scrollTop: $('.videoreview').offset().top - 130
                        }, 700);
                     }
                } else{
                    $(this).addClass("active");
                    $(this).siblings().removeClass('show');
                    $(this).removeClass('show');
                    if(window.outerWidth < 768) {
                         $('html, body').animate({
                            scrollTop: $('.videoreview').offset().top - 410
                        }, 500);
                     } else {
                         $('html, body').animate({
                            scrollTop: $('.videoreview').offset().top - 150
                        }, 700);
                     }
                }
            });
            
        
            $('.nav1-mobile').click(function() {
                $(this).siblings().slideToggle('500');
                $('html, body').animate({
                    scrollTop: $('.model-overviewmo').offset().top - 90
                }, 700);
            });
            
            $('.nav2-mobile').click(function() {
                $(this).siblings().slideToggle('500');
                $('html, body').animate({
                        scrollTop: $('.smart-featuremo').offset().top - 90
                }, 700);
            });
            
            $('.nav3-mobile').click(function() {
                $(this).siblings().slideToggle('500');
                $('html, body').animate({
                        scrollTop: $('.main-features').offset().top - 90
                }, 500);
            });
            
            $('.nav4-mobile').click(function() {
                $(this).siblings().slideToggle('500');
                $('html, body').animate({
                        scrollTop: $('.section360').offset().top - 90
                }, 500);
            });
            
            $('.nav5-mobile').click(function() {
                $(this).siblings().slideToggle('500');
                $('html, body').animate({
                        scrollTop: $('.other-key-feature').offset().top - 90
                }, 500);
            });
            
            $('.nav6-mobile').click(function() {
                $(this).siblings().slideToggle('500');
                $('html, body').animate({
                        scrollTop: $('.specification').offset().top - 90
                }, 500);
            });
            
            $('.nav7-mobile').click(function() {
                $(this).siblings().slideToggle('500');
                $('html, body').animate({
                        scrollTop: $('.videoreview').offset().top - 90
                }, 500);
            });
            
            
        $(document).ready(function() {

          $(window).scroll(function() {
            //get current sroll position
            var scrollPosition = $(window).scrollTop();
            //get the position of the containers
            var main = $(".main-features").offset().top - 115,
                smart = $(".smart-feature").offset().top - 115,
                full = $(".section360").offset().top - 115,
                other = $(".other-key-feature").offset().top - 115,
                spec = $(".specification").offset().top - 115,
                videoreview = $(".videoreview").offset().top - 115,
                overview = $(".model-overview").offset().top - 115,
                check_top = $(".model-cover-mobile").offset().top + 230;
            var nav2 = $(".nav2"),
                nav3 = $(".nav3"),
                nav4 = $(".nav4"),
                nav5 = $(".nav5"),
                nav6 = $(".nav6"),
                nav7 = $(".nav7"),
                nav1 = $(".nav1");
                
            var nav1_mobile = $(".nav1-mobile"),
                nav2_mobile = $(".nav2-mobile"),
                nav3_mobile = $(".nav3-mobile"),
                nav4_mobile = $(".nav4-mobile"),
                nav5_mobile = $(".nav5-mobile"),
                nav6_mobile = $(".nav6-mobile"),
                nav7_mobile = $(".nav7-mobile");
                
            var overview_mobile = $(".model-overviewmo").offset().top - 115,
                smart_mobile = $(".smart-featuremo").offset().top - 115,
                main_mobile = $(".main-features").offset().top - 115,
                full_mobile = $(".section360").offset().top - 115,
                other_mobile = $(".other-key-feature").offset().top - 115,
                spec_mobile = $(".specification").offset().top - 115,
                video_mobile = $(".videoreview").offset().top - 115;
            
            if (scrollPosition >= overview_mobile) {
              nav1_mobile.siblings().removeClass("active");
              nav1_mobile.addClass("active");
            }
            
            if (scrollPosition >= smart_mobile) {
              nav2_mobile.siblings().removeClass("active");
              nav2_mobile.addClass("active");
            }
            
            if (scrollPosition >= main_mobile) {
              nav3_mobile.siblings().removeClass("active");
              nav3_mobile.addClass("active");
            }
            
            if (scrollPosition >= full_mobile) {
              nav4_mobile.siblings().removeClass("active");
              nav4_mobile.addClass("active");
            }
            
            if (scrollPosition >= other_mobile) {
              nav5_mobile.siblings().removeClass("active");
              nav5_mobile.addClass("active");
            }
            
            if (scrollPosition >= spec_mobile) {
              nav6_mobile.siblings().removeClass("active");
              nav6_mobile.addClass("active");
            }
            
            if (scrollPosition >= video_mobile) {
              nav7_mobile.siblings().removeClass("active");
              nav7_mobile.addClass("active");
            }

            if (scrollPosition >= overview) {
              nav1.siblings().removeClass("active");
              nav1.addClass("active");
            }
            if (scrollPosition >= smart) {
              nav2.siblings().removeClass("active");
              nav2.addClass("active");
            }
            if (scrollPosition >= main) {
              nav3.siblings().removeClass("active");
              nav3.addClass("active");
            }
            if (scrollPosition >= full) {
              nav4.siblings().removeClass("active");
              nav4.addClass("active");
            }
            if (scrollPosition >= other) {
              nav5.siblings().removeClass("active");
              nav5.addClass("active");
            }
            if (scrollPosition >= spec) {
              nav6.siblings().removeClass("active");
              nav6.addClass("active");
            }
            if (scrollPosition >= videoreview) {
              nav7.siblings().removeClass("active");
              nav7.addClass("active");
            }
            
            if (scrollPosition >= check_top) {
                if(window.outerWidth < 768) {
                    $('.navbar-desktop').fadeOut();
                    $('.navbar-mobile').fadeIn();
                }
            } else{
                if(window.outerWidth < 768) {
                    $('.navbar-mobile').fadeOut();
                    $('.navbar-desktop').fadeIn();
                }
            }
            
          });
        });
        
</script>

<?php require(base_path().'/themes/giant/footer.php'); ?>