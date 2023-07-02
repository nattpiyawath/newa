<?php if(isset($_GET['page'])){
    echo '<h1 style="text-align:center;">4JOYS Module</h1>';
    echo '<style>.full-height{height:100%!important;}</style>';
} else{ echo '<style>.full-height{height:100%!important;}';
?>

<style>

    .d-table {width: 100%;height: 100%;display: table;}
    .d-tablecell {display: table-cell;vertical-align: middle;}
    .custom-btn1 {background-color: #ff3547;color: #fff;border: 1px solid #ff3547;display: inline-block;padding: 12px 30px;text-transform: uppercase;border-radius: 30px;text-decoration: none;}
    .custom-btn1:hover {background-color: transparent;text-decoration: none;color: #fff;}
    .hero-slider {position: relative;}
    .single-hs-item {height: 700px;background-size: cover;background-position: center center;position: relative;}
    .single-hs-item:before {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        left: 0;
        top: 0;
        background-color: #000;
        opacity: .6;
    }
    .hero-slider .owl-item.active h1 {-animation: 1s .3s fadeInUp both;}
    .hero-slider .owl-item.active p {-webkit-animation: 1s .3s fadeInUp both;animation: 1s .3s fadeInUp both;}
    .hero-slider .owl-item.active .slider-btn {-webkit-animation: 1s .3s fadeInUp both;animation: 1s .3s fadeInUp both;}

        
        @media only screen and (max-width: 600px) {
        	.single-hs-item {height: 550px;}
        	.hero-text h1 {font-size: 30px;}
        	.hero-text p {font-size: 15px;margin-bottom: 25px;}
        	.owl-carousel .owl-nav button.owl-next {top: auto;margin: 0;bottom: 0px;}
        	.owl-carousel .owl-nav button.owl-prev {top: auto;margin: 0;bottom: 0px;}
        	.owl-dots {bottom: 10px;left: 50px;right: 50px;}
        }
        .banner-content p {
        	font-size: 18px;
        	margin-bottom: 30px;
        	font-weight: 500;
        	max-width: 740px;
        	color: #565656;
        }
        
        .mySlides {
        	display: none
        }
        
        .mySlides img {
        	vertical-align: middle;
        }
        
    .banner-content {    text-align: left;
        margin-top: 0px;
        transform: translate(60%, 60%);}
    .slideshow-container {max-width: 1920px !important;position: relative;margin: auto;}
    .prev, .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        padding: 16px;
        margin-top: -22px;
        color: white;
        font-weight: bold;
        font-size: 18px;
        transition: 0.6s ease;
        border-radius: 0 3px 3px 0;
        user-select: none;
    }
        
    .mySlides .text {
        color: #f2f2f2;
        font-size: 15px;
        padding: 8px 12px;
        position: absolute;
        bottom: 8px;
        width: 100%;
        text-align: center;
    }
        
    .mySlides .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
    }
    .myfade {-webkit-animation-name: myfade;-webkit-animation-duration: 1.5s;animation-name: myfade;animation-duration: 1.5s;}
        
        @-webkit-keyframes myfade {
        	from {
        		opacity: .4
        	}
        	to {
        		opacity: 1
        	}
        }
        
        @keyframes myfade {
        	from {
        		opacity: .4
        	}
        	to {
        		opacity: 1
        	}
        }
        
        
        @media screen and (min-width: 768px){
            .text-2 {height: 13em;}
            .banner-content {max-width:1280px;display: contents;}
            .banner-content p{max-width:1382px;text-align:center;}
        }
        
        /* On smaller screens, decrease text size */
        
        @media only screen and (max-width: 300px) {
        	.prev,
        	.next,
        	.mySlides .text {
        		font-size: 11px
        	}
        }
        #home {
            overflow: auto !important;
        }
        
        .hero-slider1 button.owl-prev:after {
            content: "\ec8c";
            font-family: 'boxicons';
            display: block;
            transform: rotate(-45deg);
            font-size: 22px;
        }
        .hero-slider1 button.owl-prev span {
            display: none;
        }
        .hero-slider1 .owl-nav button.owl-prev {
            width: 35px;
            height: 35px;
            padding: 5px;
            top: 35%;
            margin-top: 0;
            background: #ec1b30;
            border-radius: 0;
            transform: rotate( 45deg);
            left: 10px !important;
        }
        .hero-slider1 .owl-nav button.owl-next {
            width: 35px;
            height: 35px;
            padding: 5px;
            top: 35%;
            margin-top: 0;
            background: #ec1b30;
            border-radius: 0;
            transform: rotate( 45deg);
            right: 10px !important;
        } 
        .hero-slider1 button.owl-next:after {
            content: "\ec8f";
            font-family: 'boxicons';
            display: block;
            transform: rotate(-45deg);
            font-size: 22px;
        }
        .hero-slider1 button.owl-next span {
            display: none;
        }    
        .owl-theme .owl-nav [class*=owl-]:hover {background: #ec1b30 !important; }
        
        .hero-slider1 .owl-item, .hero-slider1 .owl-item.active, .hero-slider1 .owl-item.cloned { opacity: 0.3; }
        .hero-slider1 .owl-item.active.center { opacity: 1; }
        
</style>

<?php 
$currentLocale = app()->getLocale();

if (isset($_GET['page'])){
   echo '';
} 

else{ 
    $lang_code = app()->getLocale();
    $finemore = 'FIND MORE';

    
  
    if ($lang_code == 'kh'){
        $finemore = ' ស្វែងរកបន្ថែម  ';

  
    } else{echo '';}

?>

<div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
        
        <div class="hero-slider1 owl-carousel owl-theme">

    <?php

    $lang_code = app()->getLocale();
    $id = pageID();
    $gall = getFourjoys($id);
    
    if(!empty($gall)){
        $galleries = collect(json_decode($gall))->sortByDesc('image_order')->reverse()->toArray();
        foreach ($galleries as $value):?>
        
            <div class="item-slide-4joys">
                
                <img src="<?= myupload().$value->image_url_desktop;?>" style="width:100%">

                        <div class="col-sm-12">
                           <div class="banner-content-4joys">
                               
                                <?php if(!empty($value->image_title)){echo '<h1>'.$value->image_title.'</h1>';}?>
                                <?php if(!empty($value->image_caption)){echo '<p>'.$value->image_caption.'</p>';}?>
                                
                                <a class="link-4joys" href="<?=$value->image_link;?>"> <?=$finemore?> </a>
                               
                           </div>
                        </div>
              
            </div>
            
    <?php endforeach;

    }?>

</div>
        
    </div>
    <div class="col-sm-1"></div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
    $('.hero-slider1').owlCarousel({
    center: true,
    items:4,
    loop:true,
    margin:20,
    nav: true,
    responsive:{
        600:{
            items:2,
        }
    }
    })
</script>

<?php } } ?>