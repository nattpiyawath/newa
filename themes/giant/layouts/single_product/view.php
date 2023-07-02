<?php require(base_path().'/themes/giant/header.php'); ?>

<style type="text/css">
    .show{display:block!important;}
    .slick-slide .container{max-width:100%!important;}
    .slick-dots, .slick-next, .slick-prev { display: none !important;}
    div#overview .slick-track {
        margin-top: 2.5rem;
    }
    #smart-feature {
        background-image: none!important;
    }

    .tab-content {
        display: block!important;
        width: 100%;
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
      .product-menu.main-nav.menu-shrink {position: fixed;top: 88px;transition: auto !important;text-align: left!important;}
      .row.flex-detai-gallery {display: inline-flex!important;align-items: center;}
      .slick-slide img{width: 100%;max-width: 100% !important;}
      .slick-current > div {border: none!important;}
      .big-cover-slide {background: #efefef;}
      .slider.slider-nav.slick-slider {margin-top: 15px;}
      .slider.slider-nav.slick-slider img {width: 95%;}
      .slick-next:before{
            content: "\ec8f"!important;
            font-family: 'boxicons' !important;
            color: #000000 !important;
            padding: 0px;
      }
        .slick-prev:before {
            content: "\ec8c" !important;
            font-family: 'boxicons' !important;
            color: #000000 !important;
            padding: 0px;
      }
      .slick-prev{left: -60px!important;}
      table.table-speci th {
          font-weight: 500 !important;
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
          font-size: 22px;
          padding: 13px 5px !important;
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
      
      .smart-feature a.btn:hover {
      background-position: 0 0;
      color: #ffffff;
      border-color: #ffffff;
  }
  .smart-feature a.btn {
      background-image: linear-gradient(to left, transparent, transparent 50%, #d43131 50%, #1d0707);
      background-position: 100% 0;
      background-size: 200% 100%;
      transition: all .25s ease-in;
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
    
    h1.head-titel-page {
        display: none;
    }
    .row.section360 h1.head-titel-page {
        display: block !important;
    }
    #smart-feature h1.head-titel-page {
        display: block !important;
    } 
    .color-finding-love, .row.model-cover-desktop, #overview.row.desktop {
        margin-bottom: 4em !important;
    }
    

  @media screen and (min-width: 320px) and (max-width: 699px){
      
      img#my-image-preview {
            margin-bottom: 35px;
        }
      
      .main-nav nav .navbar-nav .nav-item{padding: 6px 8px!important;}
      .all-lang-2.newClass {position: absolute;}
      .product-menu.main-nav ul li a{top:0;width: max-content;float: left;overflow: hidden;}
      .slide-caption{position:unset;}
      .slide-caption p {font-size: 15px;margin-top: 0;line-height: 20px;padding: 10px;}
      .flex-detai-gallery .slide-caption h1 {font-size: 20px;line-height:25px; text-transform: uppercase;}

    .slick-arrow {
        display: block !important;
    } 
    .slick-prev {
        left: calc(0% - 0px)!important;
        z-index: 1;
    }
    .flex-detai-gallery .slide-caption h1{padding:1em 1em 0 !important;}
    .slick-next, .slick-prev {
        top: 85% !important;
    }  
    .slick-next {
        right: calc(0% - 0px)!important;
    }  
      
  }
  
  @media screen and (min-width: 390px) and (max-width: 390px){
      
    #overview .mobile .overview-text {
        margin-top: 21em;
    }
    div#overview {
        height: auto !important;
    }
      
  }
  
  @media screen and (min-width: 428px) and (max-width: 428px){
      
    #overview .mobile .overview-text {
        margin-top: 21em !important;
    }
    div#overview {
        height: auto !important;
    }
    .slick-next, .slick-prev {
        top: 90% !important;
    }
    

    
  }  
  
  @media screen and (min-width: 769px){
     
      
    table.table-speci tr th {
        width: 30%;
    } 
    table.table-speci tr td {
        width: 70%;
    } 
      body{overflow-x: hidden;}
    .main-feature2.feature-product h1, .main-feature2.feature-product h1 span, .overview-text h1 {
        font-size: 52px !important;
        color: #fff;
        filter: drop-shadow(2px 2px 2px #00000060);
        font-family: 'ncxhondacambodia', 'Kantumruy' !important;
        letter-spacing: 1px;
        margin: 0;
        line-height: 60px;
        text-align: center;
    }
    .overview-text p{text-align:center;}
    .overview-text h1 span{font-size: 36px;
    color: #565656;
    filter: drop-shadow(2px 2px 2px #00000060);
    font-family: 'ncxhondacambodia', 'Kantumruy' !important;
    letter-spacing: 1px;
    margin: 0;
    line-height: 60px;}
    .flex-detai-gallery .slide-caption h1 {
            font-size: 32px !important;
            color: #fff;
            filter: drop-shadow(2px 2px 2px #00000060);
            font-family: 'ncxhondacambodia', 'Kantumruy' !important;
            letter-spacing: 1px;
            margin: 0;
            line-height: 42px;
            text-align: center;
    }
    .model-spec h1.head-titel-page {padding-bottom: 0.4em;}
    .product-menu.main-nav.menu-shrink .navbar-light {float: right;}
    #overview, #product-feature{margin-bottom:0!important;}
    #overview .desktop, #product-feature .desktop{background-size: cover!important;text-align: right; background-position: center !important;}
    #overview .overview-text{margin-top: 0% !important;}
    #product-feature .overview-text{margin-top: 23% !important;}
    img.overview-banner.mobile, .model-cover-mobile, div#overview .mobile, .main-feature2 .mobile, .product-menu .bxs-down-arrow{display: none!important;}
    .model-cover-desktop {
        height: auto !important;
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
        padding: 18px 12px;
        display: block;
    }
    
  }

div#videoreview {
    display: none;
}
video.w-full.relative {
    width: 100%;
}
  
  @media screen and (max-width: 768px){

    .row.model-cover-mobile {
        margin-top: 7.5rem !important;
    }      
    .row.model-cover-mobile video {
        width: 100% !important;
        z-index: 0;
        position: relative;
    }
    .model-cover-mobile {
        display: block !important;
    }    
    .row.model-cover-desktop video {
        display: none;
    }
      
    .btn_play_video {
        color: #000000!important;
        border: solid 1px #53535354!important;
        font-weight: bold;
        background: #ffffff!important;
    }
    
    .mobile-main-feature img {
        padding-bottom: 10px;
    } 
    .mobile-main-feature h1, .mobile-main-feature p {
        padding: 0 8px;
    }  
    .mobile-main-feature>div {
        box-shadow: 0px 12px 5px #adadad4a;
        margin-bottom: 1.5em;
        border-radius: 10px;
        padding-bottom: 10px;
    }  
    table.table-speci th, .table-speci td{ text-align: left !important; }  
    table.table-speci th { width: 40%; }
    .table-speci td { width: 60%; padding-left: 5px;}
    
    div#overview {
        margin-top: 0em;
    }  
    h1.head-titel-page {
        display: none;
    }
    .row.section360 h1.head-titel-page {
        display: block !important;
    }
    #smart-feature h1.head-titel-page {
        display: block !important;
    }
    .main-features {
        margin-top: 2rem;
    }
    .color-finding-love, .section360, .other-key-feature {
        margin-bottom: 3rem;
    }
      
    .product-nav-bar-mobile.open li.active {
        border-bottom: solid 1px #cdcdcd!important;
    }
    li.nav-item.show{display:block;}
    .navbar-mobile .bx.bxs-down-arrow {margin-top: 14px;}
    .navbar-mobile li {border-bottom: solid 1px #ddd;display:none;}
    .navbar-mobile li:last-child{border:none;}
    .navbar-mobile a {padding: 10px 8px;font-size: 1.6rem;}
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
    .main-menu-rigt a svg {padding: 0px 16px 8px 3px!important;}
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
    .mobile-main-feature h1, .slick-slider h1{font-size: 18px !important;font-weight: 400;}
    h1.head-titel-page, h1.head-titel-page span{font-size:2.4rem;}
    h1.head-titel-page span{line-height:18px;}
    h1.head-titel-page p {font-size: 14px;}
    .smart-feature {
        padding: 0;
        margin: 2% 0;
        height: 36rem;
        padding-top: 4em;
    }
    .smart-feature p{color:#fff!important;padding-top:18px;}
    .smart-feature h1.head-titel-page:before {
        background: #ffffff;
        text-align: center;
        margin: 0 auto;
        width: 0;
    }
    .smart-feature h1.head-titel-page {text-align: center;}
    .smart-feature a.btn {
            display: inherit!important;
            font-size: 10px;
            max-width: 170px;
            border-radius: 8px;
            margin-right:0;
            margin: 0 4px;
    }
    .color-chat-sub {
        width: 100%;
        text-align: center;
        display: inline-block;
    }
    .specification{overflow-x:hidden;}
    .specification .nav-link {padding: 0;margin-right: 20px !important;font-size: 14px;height: 30px!important;}
    .specification .nav.nav-tabs {width:1305px !important;}
    .tap-title-main { overflow: scroll; }
    .specification .head-titel-page:before {text-align: center!important;margin: 18px auto!important; }
    .specification .tab-content, #specification .container{padding:0px!important; width: 100%; } 
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
        position: absolute;
        width: 100%;
        padding: 0 15px;
        bottom: 0px;
    }
    #overview .mobile {
        height: 100%;
        background-size: cover!important;
        background-repeat: no-repeat!important;
        text-align:center;
    }
    .product-menu.main-nav.prod-de {
        background: #fff;
        padding: 5px 1px 1px 1px;
        border-radius: 10px;
        box-shadow: 2px 2px 12px #a9a9a9;
        margin: 19px 16px;
        max-width: 92%;
        margin-top: -4.5em;
        display: inline-block !important;
        position: relative !important;
        z-index: 9 !important;
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
  
  .navbar-mobile li{display:none;}

</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

        
<?php if(isset($_GET['page'])){?>
    <link rel="stylesheet" href="<?=URL::to('/themes/giant/andro_files')?>/css/only-mobile.css?v=<?php echo rand(10,10000000); ?>">
<?php }?>

<!-- Navbar Product View -->

<?php 
    $currentLocale = app()->getLocale();
    
    $id = pageID();
    $info = \App\Pages::where('id', $id)->first();

    $lang_code = app()->getLocale();
    
        $sel_color = 'SELECT YOUR COLOR';
        $build_you = 'BUILD YOUR OWN';
        $color_love = 'COLOR YOU LOVE';
        $down = 'DOWNLOAD CATALOG';
  
    if ($lang_code == 'kh'){
        
        $sel_color = 'ជម្រើសពណ៌';
        $build_you = 'ជ្រើសរើស';
        $color_love = 'ពណ៌ដែលអ្នកស្រឡាញ់';
        $down = 'ទាយយកកាតាឡុក';
        
    }else{echo '';}

?>

    <?php if($info->header_img != 0){ ?>
    
        <div class="row model-cover-desktop" style="background:url('<?=url('').'/storage/app/uploads/'.$info->header_img?>');"></div>    
    
    <?php } ?>
    
    
    <?php if($info->mo_tvc != 0){ ?>
    
    <div class="row model-cover-mobile">
        
        <video playsinline autoplay muted loop class="w-full relative">
            <source src="<?=url('').'/storage/app/uploads/'.$info->mo_tvc?>" type="video/mp4"></source> 
        </video>        
        
    </div>
    
     <?php } ?>      

    <?php if($info->model_tvc != 0){ ?>
    
    <div class="row model-cover-desktop">
        
        <video playsinline autoplay muted loop class="w-full relative">
            <source src="<?=url('').'/storage/app/uploads/'.$info->model_tvc?>" type="video/mp4"></source> 
        </video>        
        
    </div>
    
     <?php } ?>
    
    <?php if($info->model_kv != 0){ ?> 
    
        <div class="row model-cover-mobile">
            <img src="<?=url('').'/storage/app/uploads/'.$info->model_kv?>"/>
        </div>
    
    <?php } ?>

    <!-- Navbar Product-->
    <?php 
        $page_type = getPageType();
        if($page_type == 'product'){?>
            <div class="product-menu main-nav prod-de">
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
                                    <li class="nav-item nav1"><a>OVERVIEW</a><i class='bx bxs-down-arrow'></i></li>
                                    <li class="nav-item nav2"><a>COLOR CHAT</a><i class='bx bxs-down-arrow'></i></li>
                                    <li class="nav-item nav3"><a>MAIN FEATURES</a><i class='bx bxs-down-arrow'></i></li>
                                    <li class="nav-item nav4"><a>360° VIEW</a><i class='bx bxs-down-arrow'></i></li>
                                    <li class="nav-item nav5"><a>OTHER FEATURES</a><i class='bx bxs-down-arrow'></i></li>
                                    <li class="nav-item nav6"><a>SPECIFICATIONS</a><i class='bx bxs-down-arrow'></i></li>
                                    <li class="nav-item nav7"><a>VIDEO REVIEW</a><i class='bx bxs-down-arrow'></i></li>
                                </ul>
                            </nav>
                            
                            <nav class="navbar navbar-mobile">
                                <ul class="product-nav-bar-mobile">
                                    <li class="nav-item nav1-mobile"><a>OVERVIEW</a><i class='bx bxs-down-arrow'></i></li>
                                    <li class="nav-item nav2-mobile"><a>COLOR CHAT</a><i class='bx bxs-down-arrow'></i></li>
                                    <li class="nav-item nav3-mobile"><a>MAIN FEATURES</a><i class='bx bxs-down-arrow'></i></li>
                                    <li class="nav-item nav4-mobile"><a>360° VIEW</a><i class='bx bxs-down-arrow'></i></li>
                                    <li class="nav-item nav5-mobile"><a>OTHER FEATURES</a><i class='bx bxs-down-arrow'></i></li>
                                    <li class="nav-item nav6-mobile"><a>SPECIFICATIONS</a><i class='bx bxs-down-arrow'></i></li>
                                    <li class="nav-item nav7-mobile"><a>VIDEO REVIEW</a><i class='bx bxs-down-arrow'></i></li>
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
                                    
                                    <li class="nav-item nav1"><a> ទិដ្ឋភាពទូទៅ </a><i class='bx bxs-down-arrow'></i></li>
                                    <li class="nav-item nav2"><a> ជម្រើសពណ៌ </a><i class='bx bxs-down-arrow'></i></li>
                                    <li class="nav-item nav3"><a> លក្ខណៈពិសេស </a><i class='bx bxs-down-arrow'></i></li>
                                    <li class="nav-item nav4"><a> រូប 360° </a><i class='bx bxs-down-arrow'></i></li>
                                    <li class="nav-item nav5"><a> លក្ខណៈពិសេសផ្សេងទៀត </a><i class='bx bxs-down-arrow'></i></li>
                                    <li class="nav-item nav6"><a> ព័ត៌មានបច្ចេកទេស </a><i class='bx bxs-down-arrow'></i></li>
                                    <li class="nav-item nav7"><a> វីដេអូ </a><i class='bx bxs-down-arrow'></i></li>
                                    
                                </ul>
                            </nav>
                            
                            <nav class="navbar navbar-mobile">
                                <ul class="product-nav-bar-mobile">
                                    <li class="nav-item nav1-mobile"><a> ទិដ្ឋភាពទូទៅ </a><i class='bx bxs-down-arrow'></i></li>
                                    <li class="nav-item nav2-mobile"><a> ជម្រើសពណ៌ </a><i class='bx bxs-down-arrow'></i></li>
                                    <li class="nav-item nav3-mobile"><a> លក្ខណៈពិសេស </a><i class='bx bxs-down-arrow'></i></li>
                                    <li class="nav-item nav4-mobile"><a> រូប 360° </a><i class='bx bxs-down-arrow'></i></li>
                                    <li class="nav-item nav5-mobile"><a> លក្ខណៈពិសេសផ្សេងទៀត </a><i class='bx bxs-down-arrow'></i></li>
                                    <li class="nav-item nav6-mobile"><a> ព័ត៌មានបច្ចេកទេស </a><i class='bx bxs-down-arrow'></i></li>
                                    <li class="nav-item nav7-mobile"><a> វីដេអូ </a><i class='bx bxs-down-arrow'></i></li>
                                </ul>
                            </nav>
                            
                        </div>
                    </div> 
                
                <?php } ?>  
                    
                    
                </div>
            </div>
        <?php }?>
    <!-- End Navbar Product-->
    
    <!-- Overview -->
    <?php if(!isset($_GET['page'])){?>
        <div id="model-overview" class="row model-overview" style="display: block;"><center><h1 class="head-titel-page">OVERVIEW</h1></center></div>
        <div id="overview" class="overview-slider">
    
            <?php
            $lang_code = app()->getLocale();
            
            $gall = getSlideshow2($id);
            
            if(!empty($gall)){
                $galleries = collect(json_decode($gall))->sortByDesc('image_order')->reverse()->toArray();
                foreach ($galleries as $value):?>
                <div class="row">
                    <div class="row desktop">
                        <div class="container">
                            <div class="row overview-text">
                                <img src="<?= myupload().$value->image_url_desktop;?>" style="width:100%">
                                <div class="col-sm-12">
                                    <h1 class="ProfeatuetextIN ProfeatuetextOUT"> <span style="color:#2c3e50;"><?= $value->image_title?> </span></h1>
                                    <p class="ProfeatuetextIN ProfeatuetextOUT"> <?= $value->image_caption?> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row mobile">
                        <img class="over-mo" src="<?= myupload().$value->image_url_mobile ;?>">
                        
                            <div class="row overview-text">
                                <div class="col-sm-12">
                                    <h1 class="ProfeatuetextIN ProfeatuetextOUT"> <span style="color:#2c3e50;"><?= $value->image_title?> </span></h1>
                                    <p class="ProfeatuetextIN ProfeatuetextOUT"> <?= $value->image_caption?> </p>
                                </div>
                            </div>
                        
                    </div>
                </div>
            <?php endforeach;
        
            }?>
        
        </div>
    <?php } ?>
    <!-- End Overview -->

    <!-- Model Colour -->
        <div class="row smart-feature">
            <div class="col-sm-12" id="smart-feature">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 feadeProfadein textfadeout">
                            <h1 data-raw-content="true" class="head-titel-page"><span><?=$build_you?></span><br><p><?=$color_love?></p></h1>
                            <div class="color-chat-sub">
                                
                                <a href="<?=pagecatalog();?>" role="button" target="_blank" class="btn btn-secondary"><?=$down?></a>
                                
                                <a href="/compare" role="button" class="btn btn-secondary">COMPARE NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
         <div class="color-finding-love">
            <div class="container">
                <div class="row select-model-color">
                    <div class="col-md-6 model-color-left" >
                        <br><br>
                        
                        <div class="select-color">
                            <h5><?php echo $sel_color?></h5><br>
                                <?php
                                    $lang_code = app()->getLocale();
                                    $getColor = getColor($id);
                                    if(!empty($getColor)){ 
                                        $colour = collect(json_decode($getColor))->sortByDesc('color_order')->reverse()->toArray();
                                        foreach($colour as $index => $val){ ?>  
                                        <input type="button" <?php if($val->color_order == 1){echo 'class="primary-color"';}?> data-url="<?=myUpload().$val->image_url;?>" 
                                        data-related-color="<?=$val->related_color;?>" data-color-code="<?=$val->color_code;?>" style="background:<?=$val->color_code;?>;"/>
                                    <?php }
                                    } else{echo 'No Color to Show!';}
                                ?>
                        </div>
                    </div>
                    <div class="col-md-6 model-color-right">
                        <div class="preview-color fadeinTextup">
                            <img id="my-image-preview" class="" src="#"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    <!-- End color -->

<?= $body ?>

<?php if(!isset($_GET['page'])){
    $id = pageID();
    $lang_code = app()->getLocale();
    
    $model_folder = Request::segment(2);
    $url = url('').'/';
    $all_files = glob("storage/app/uploads/360/".$model_folder."/*.*");
        if(count($all_files)){?>
            
            <script src="<?=URL::to('/themes/giant/andro_files')?>/js/easeljs-0.6.0.min.js"></script>
            
            <script>
                var stage;
            
                function init() {   
                	var canvas = document.getElementById("canvas");
                    if (!canvas || !canvas.getContext) return;
                		
                	stage = new createjs.Stage(canvas);  
                    stage.enableMouseOver(true);
                    stage.mouseMoveOutside = true; 
                    createjs.Touch.enable(stage);
                    
                     var imgList = [<?php 
                              for ($i=0; $i<count($all_files); $i++)
                                {
                                  $image_name = $all_files[$i];
                                  $supported_format = array('jpg','jpeg','png');
                                  $ext = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
                                  if (in_array($ext, $supported_format)){
                                        echo '"'.$url.$image_name.'",';
                                    } else {
                                          continue;
                                     }
                                }
                            ?>];  
                  
                    var images = [], loaded = 0, currentFrame = 0, totalFrames = imgList.length; 
                    var rotate360Interval, start_x;
                    
                    var bg = new createjs.Shape();
                    stage.addChild(bg);  
                    
                    var bmp = new createjs.Bitmap();	  
                    stage.addChild(bmp);
                    
                    var myTxt = new createjs.Text("360 Car", '24px Ubuntu', "#ffffff");
                    myTxt.x = myTxt.y =20;
                    myTxt.alpha = 0.08;
                    stage.addChild(myTxt);   
                    
                    
                    function load360Image() {
                        var img = new Image();
                        img.src = imgList[loaded];
                        img.onload = img360Loaded;
                        images[loaded] = img;   
                    }
                    
                    function img360Loaded(event) {
                        loaded++;        
                        bg.graphics.clear()
                        bg.graphics.beginFill("#fff").drawRect(0,0,stage.canvas.width * loaded/totalFrames, stage.canvas.height);
                        bg.graphics.endFill();
                        
                        if(loaded==totalFrames) start360();
                        else load360Image();
                    }
                
                    
                    function start360() {
                        $('.load-360').fadeOut();
                        document.body.style.cursor='none';
                        
                        // 360 icon
                        var iconImage = new Image();
                        iconImage.src = "";
                        iconImage.onload = iconLoaded;        
                       
                        // update-draw
                        update360(0);
                        
                        // first rotation
                        rotate360Interval = setInterval(function(){ if(currentFrame===totalFrames-1) { clearInterval(rotate360Interval); addNavigation(); } update360(1); }, 25);
                    }
                    
                    function iconLoaded(event) {
                        var iconBmp = new createjs.Bitmap();
                        iconBmp.image = event.target;
                        iconBmp.x = 20;
                        iconBmp.y = canvas.height - iconBmp.image.height - 20;
                        stage.addChild(iconBmp);
                    }
                    
                    function update360(dir) {
                        currentFrame+=dir;
                        if(currentFrame<0) currentFrame = totalFrames-1;
                        else if(currentFrame>totalFrames-1) currentFrame = 0;
                        bmp.image = images[currentFrame];
                    }
                
                
                    //------------------------------- 
                     function addNavigation() { 
                        stage.onMouseOver = mouseOver;
                        stage.onMouseDown = mousePressed;        
                        document.body.style.cursor='auto';
                    }
                    
                    function mouseOver(event) {
                        document.body.style.cursor='pointer';
                    }
                    
                    function mousePressed(event) {
                        start_x = event.rawX;
                        stage.onMouseMove = mouseMoved;
                        stage.onMouseUp = mouseUp;
                        
                        document.body.style.cursor='w-resize';        
                    }
                    
                	function mouseMoved(event) {
                        var dx = event.rawX - start_x;
                        var abs_dx = Math.abs(dx);
                        
                        if(abs_dx>5) {
                            update360(dx/abs_dx);
                            start_x = event.rawX;
                        }
                	}
                    
                    function mouseUp(event) {
                        stage.onMouseMove = null;
                        stage.onMouseUp = null;         
                        document.body.style.cursor='pointer';
                	}    
                    
                    function handleTick() {	
                         stage.update();
                    }    
                    
                    document.body.style.cursor='progress';
                    load360Image();
            
                     // TICKER
                    createjs.Ticker.addEventListener("tick", handleTick);
                    createjs.Ticker.setFPS(60);
                    createjs.Ticker.useRAF = true;
                }
                
                // Init
                window.addEventListener('load', init, false);
            
                $('.load-360').fadeIn();
            
            </script>
            
        <?php } ?>
    
<?php }?>

<script>
    $('.drag-rotate').on('click', function(){
       $(this).attr('style', 'display:none!important;'); 
    });
            $('.select-color input').on('click', function(){
               var img = $(this).attr('data-url');
               var color_code = $(this).attr('data-color-code');
               var related_color = $(this).attr('data-related-color');
               var background = 'linear-gradient(to right, '+related_color+' , '+color_code+')';
               $('.smart-feature').css('background-image', background);
               $('#my-image-preview').attr('src', img);
                
            });
            
            $(".select-color input").click(function()  {
                var clickedButton = $('#my-image-preview');
                var clickedButton1 = $('.preview-color');
                if (clickedButton.hasClass('active')) {
                    $('#my-image-preview').removeClass('active');
                    $('.preview-color').addClass('active1').load();
                    return false;
                }
                clickedButton.addClass('active').load();
                clickedButton1.removeClass('active1').load();
            });
    
            
            var primary = $('.primary-color').attr('data-color-code');
            var primary2 = $('.primary-color').attr('data-related-color');
            var background2 = 'linear-gradient(to right, '+primary2+' , '+primary+')';
            $('.smart-feature').css('background-image', background2);
            
            var image2 = $('.primary-color').attr('data-url');
            $('#my-image-preview').attr('src', image2);
            
            $('.product-nav-bar-mobile').click(function() {
                if ($(this).hasClass("open")) {
                    $(this).removeClass("open");
                } else{
                    $(this).addClass("open");
                }
            });
            
            $('.nav1').click(function() {
                 if(window.outerWidth < 768) {
                        $('html, body').animate({
                            scrollTop: $('.model-overview').offset().top - 390
                        }, 500);
                 } else {
                     $('html, body').animate({
                        scrollTop: $('.model-overview').offset().top - 230
                    }, 700);
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
                    scrollTop: $('.model-overview').offset().top - 90
                }, 700);
            });
            
            $('.nav2-mobile').click(function() {
                $(this).siblings().slideToggle('500');
                $('html, body').animate({
                        scrollTop: $('.smart-feature').offset().top - 90
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
        
            $('.overview-slider').slick({
                dots: true,
                infinite: true,
                speed: 500,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: false,
                autoplaySpeed: 2000,
                arrows: true,
                responsive: [{
                  breakpoint: 600,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                  }
                },
                {
                   breakpoint: 400,
                   settings: {
                      arrows: false,
                      slidesToShow: 1,
                      slidesToScroll: 1
                   }
                }]
            });
            
            
        $(document).ready(function() {

          $(window).scroll(function() {
              
            //$('.navbar-mobile li').fadeOut();
            //get current sroll position
            var scrollPosition = $(window).scrollTop();
            //get the position of the containers
            var smart = $(".smart-feature").offset().top - 115,
                main = $(".main-features").offset().top - 115,
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
                
            var overview_mobile = $(".model-overview").offset().top - 115,
                smart_mobile = $(".smart-feature").offset().top - 115,
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
                $('.drag-rotate').addClass('show');
                setTimeout(function() { $(".drag-rotate").removeClass('show'); }, 3000);
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
                    $('.navbar-desktop').slideUp('fast');
                    $('.navbar-mobile').fadeIn();
                }
            } else{
                if(window.outerWidth < 768) {
                    $('.navbar-mobile').slideUp('fast');
                    $('.navbar-desktop').fadeIn();
                }
            }
            
          });
        });
</script>
<?php require(base_path().'/themes/giant/footer.php'); ?>