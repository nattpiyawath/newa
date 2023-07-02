<?php if(isset($_GET['page'])){
    echo '<h1 style="text-align:center;">Slideshow Module</h1>';
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
    .owl-carousel .owl-nav button.owl-prev {
        background-color: #ff3547;
        position: absolute;
        left: 0;
        top: 50%;
        color: #fff;
        font-size: 30px;
        margin: -40px 0 0;
        border-radius: 0;
        height: 50px;
        width: 50px;
    }
    .owl-carousel .owl-nav button.owl-next {
        background-color: #ff3547;
        position: absolute;
        right: 0;
        top: 50%;
        color: #fff;
        font-size: 30px;
        margin: -40px 0 0;
        border-radius: 0;
        height: 50px;
        width: 50px;
    }
    .owl-theme .owl-nav {margin-top: 0;}
    .owl-dots {
        position: absolute;
        left: 0;
        right: 0;
        bottom: 20px;
    }
        
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
        	font-weight: 400 !important;
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
            .banner-content h1{text-align:center;padding-top: 1em;}
            
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
</style>

<div id="home" class="hero-slider owl-carousel owl-theme">

<?php
    $lang_code = app()->getLocale();
    $id = pageID();
    //echo $id;
    $gall = getSlideshow($id);
    //print_r($gall);
    
    if(!empty($gall)){
        $galleries = collect(json_decode($gall))->sortByDesc('image_order')->reverse()->toArray();
        foreach ($galleries as $value):?>
            <div class="myfade">
              <?php if(!empty($value->slide_link)){?>
                <a class="mobile" href="<?=$value->slide_link;?>"><img src="<?= myupload().$value->image_url_mobile;?>" style="width:100%"></a>
                <a class="desktop" href="<?=$value->slide_link;?>"><img src="<?= myupload().$value->image_url_desktop;?>" style="width:100%"></a>
              <?php } ?>
              <?php if(empty($value->slide_link)){?>
                  <a class="mobile" href="<?=$value->image_link;?>"><img class="mobile-slide" src="<?= myupload().$value->image_url_mobile;?>" style="width:100%"/></a>
                  <a class="mobile" href="<?=$value->image_link;?>"><img class="desktop-slide" src="<?= myupload().$value->image_url_desktop;?>" style="width:100%"/></a>
              <?php } ?>
              <div class="text-2">
              <div class="container row">
                  <div class="col-sm-12">
                   <div class="banner-content">
                        <?php if(!empty($value->image_title)){echo '<h1>'.$value->image_title.'</h1>';}?>
                        <?php if(!empty($value->image_caption)){echo '<p>'.$value->image_caption.'</p>';}?>
                        <?php if(!empty($value->slide_link)){?>
                          <a class="common-btn" href="<?=$value->slide_link;?>"><?= $value->slide_btn;?><span></span></a>
                        <?php }?>
                   </div>
                  </div>
              </div>
              </div>
        </div>
    <?php endforeach;

    }?>

</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
    $('.hero-slider').owlCarousel({
    items:1,
    loop:true,
    autoplay: false,
	autoplaySpeed: 1000,
    nav:false,
    dots: true,
    })
</script>

<?php } ?>