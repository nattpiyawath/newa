<?php if(isset($_GET['page'])){
    echo '<h1 style="text-align:center;">Model Option Module</h1>';
} else{ ?>


<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<style>
    #cub-model .slick-track {transform: translate3d(0px, 0px, 0px) !important;}
    .slick-list.draggable{padding:0 !important;}
    .slide {display:flex;overflow: hidden;margin-right: 10px;background: #fff;box-shadow: 1px 4px 10px #00000029;}
    .slick-track {width: 100% !important;display: flex !important;}
    .Model-A-T .slick-track {left: -25% !important;position: relative;}
    .slick-slide.slick-current.slick-active.slick-center img {min-width: 100% !important;float: right;left: 30px;padding:0;}
    .slide.slick-center img {transition: all 1s ease-out;opacity: 1;}
    .row.slick-slide.slick-active {
    width: -webkit-fill-available !important;}
    .slick-prev, .slick-next {
        width: 60px;
        height: 60px;
        border: none;
        border-radius: 50%;
        margin: auto;
        position: absolute;
        z-index: 3000;
        top: 0;
        bottom: 0;
        cursor: pointer;
        outline: none;
    }
    .slick-next i, .slick-prev i{color:#fff;}
    .slick-next {right: calc(1% - 0px);display: block !important;background: #ec1b30bd!important;border-radius: 0;}
    .slick-prev {left: calc(1% - 0px);display: block !important;background: #ec1b30bd!important;border-radius: 0;}
    .slick-arrow {
        background: none;
        border: none;
        position: absolute;
        bottom: 33px;
        color: #000;
        font-size: 1.5rem;
        padding: 0;
        width: 25px;
        height: 50px;
        line-height: 34px;
        text-align: center;
        cursor: pointer;
        z-index: 20;
        -webkit-transition: background-color .2s ease 0s;
        transition: background-color .2s ease 0s;
    }
    .slick-arrow:hover {background-color: rgba(255, 255, 255, .2)}
    .model_at {background: #f1f1f1 !important;padding: 1% 0 5% 0;}
    .model_at .slide {display: flex;overflow: hidden;margin: 0 15px;background: #ffffff;box-shadow: 1px 4px 10px #00000029;}
    .slick-dots {position: absolute;bottom: 0;right: calc(0% - 432px);padding: 0;margin: 0;list-style: none}
    .slick-dots li {float: left;display: block;margin: 1rem .2rem;font-size: 0}
    .slick-dots button {
        border: 0;
        overflow: hidden;
        background: rgba(255, 255, 255, .4);
        width: .8rem;
        height: .8rem;
        border-radius: 50%;
        text-indent: 9999px;
        padding: 0
    }
    .slider .slick-dots .slick-active button {background: rgba(255, 255, 255, .8)}
    .text {position: absolute;top: 30%;left: 0;color: #fff;z-index: 5;-webkit-transition: all .2s ease 0s;transition: all .2s ease 0s;text-align:right;padding-right:15%;}
    .prev .text {text-align: right;float: right;}
    .model_at .slick-prev, .model_at .slick-next {display: block !important;background: #3a3a3a;border-radius: 0;transform: rotate(45deg);}
    .slick-slide{height:auto;width: 100% !important;min-width: 50% !important;max-width: 100% !important;}
    .slick-next:before {content: "";}
    .slick-prev:before {content: "";}
    .model_at .slick-prev i, .model_at .slick-next i {transform: rotate(-45deg);}
    .slick-next:focus, .slick-next:hover, .slick-prev:hover {color: white;background: #ec1b30;}
     .title {
        font-size: 22px !important;
        margin-bottom: 20px !important;
        padding: 0 30px;
        font-weight: 600;
        letter-spacing: 1px;
        margin-top: 0 !important;
        color:#4c4c4c;
        text-transform:unset;
    }
    .slick-active .title {margin-top: .8rem;-webkit-transition: all .4s ease .2s;transition: all .4s ease .2s;font-size: 20px;}
    .summary {-webkit-transition: all .4s ease .2s;transition: all .4s ease .2s;color: #3e3e3e;font-size: 15px;margin: 25px 0;}
    .slick-active .summary {
        -webkit-transition: all .4s ease .2s;
        transition: all .4s ease .2s;
        color: #3e3e3e;
        font-size: 15px;
        margin: 25px 0;
    }
    .slide:before {content: "";display: block;}
    .slide figure:before {top: 0;background: transparent;z-index: 1;-webkit-transition: background-color .4s ease 0s;transition: background-color .4s ease 0s}
    .slide:hover figure:before, .slide:focus figure:before {background: rgba(39, 37, 30, .6)}
    .slick-list.draggable{padding:0;}
    .tabs-left, .tabs-right {border-bottom: none;padding-top: 2px;}
    .tabs-left {border-right: 1px solid #ddd;}
    .tabs-right {border-left: 1px solid #ddd;}
    .tabs-left>li, .tabs-right>li {float: none;margin-bottom: 2px;}
    .tabs-left>li {margin-right: 0;background: #ec1b30;text-align: center;}
    .tabs-right>li {margin-left: -1px;}
    .tabs-left>li.active>a,
    .tabs-left>li.active>a:hover,
    .tabs-left>li.active>a:focus {border-bottom-color: #ddd;border-right-color: transparent;}
    .tabs-right>li.active>a,
    .tabs-right>li.active>a:hover,
    .tabs-right>li.active>a:focus {border-bottom: 1px solid #ddd;border-left-color: transparent;}
    .tabs-left>li>a {
      border-radius: 4px 0 0 4px;
      margin-right: 0;
      display:block;
      color:#fff;
    }
    .tabs-right>li>a {border-radius: 0 4px 4px 0;margin-right: 0;}
    .vertical-text {border: none;position: relative;}
    .vertical-text>li>a {
        text-align: center;
        font-size: 28px;
        font-weight: 600;
        padding: 13.6% 0;
        font-family: 'ncxhondacambodia', 'Bayon'!important;
    }
    .my_text{margin-top:0;color:#333; text-align:justify; font-size:14px; line-height:24px; margin:10px auto;}
    .vertical-text>li.active>a,
    .vertical-text>li.active>a:hover,
    .vertical-text>li.active>a:focus {border-bottom-color: transparent;border-right-color: #ddd;border-left-color: #ddd;}
    .vertical-text.tabs-left {display: flow-root;}
    .vertical-text.tabs-right {right: -50px;}
    .tab-content {display: block !important;padding:0 !important;}
    .tab-content li.tab-pane {display: none;}
    .tab-content li.tab-pane.content1.active {display: block;}
    .tab-content li.tab-pane.content2.active {display: block;}
    .tab-content li.tab-pane.content3.active {display: block;}
    .block-option {
        background: #e2e2e2;
        padding-top: 0;
    }
    button:focus{outline:none;}
    .vertical-text.tabs-left a.active {
        background: #ec1b30;
    }
    .vertical-text>li>a {
        background: #3a3a3a;
        background-image: linear-gradient(to left, transparent, transparent 50%, #3a3a3a 50%, #3a3a3a);
        background-position: 100% 0;
        background-size: 200% 100%;
        transition: all 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94)
    }
    .vertical-text>li>a:hover {
        background-position: 0 0;
        color: #fff;
        border-color: #ffcb09;
        background-image: linear-gradient(to left, transparent, transparent 50%, #ec1b30 50%, #ec1b30);
    }
    .all-model-options {
        padding-bottom: 6%;
    }
    #id6kqi {
        display: flex;
    }
    .footer-area .footer-item h3 {
        margin-top: 0;
    }
  
@media screen and (min-width: 320px) and (max-width: 699px){
    
    .Model-A-T .slick-track {left:0!important;}
    #cub-model .slick-track {transform: unset !important;}
    .title {font-size: 15px !important;padding: 0 15px;}

}

</style>

<?php 
$currentLocale = app()->getLocale();

if (isset($_GET['page'])){
   echo '';
} 

else{ 
    $lang_code = app()->getLocale();
    $cub_model = 'CUB MODEL';
    $at_model = 'A.T. MODEL';
    $sport_model = 'SPORT MODEL';
  
    if ($lang_code == 'kh'){
        $cub_model = ' ម៉ូតូចង្កឹះលេខ  ';
        $at_model = ' ម៉ូតូអូតូ ';
        $sport_model = ' ម៉ូតូអាំប្រាយ៉ា';
  
    } else{echo '';}

?>

  <div class="">
    <div class="row block-option">
        <div class="col-sm-8" style="padding-right:0;">
            <!-- Tab panes -->
            <div class="tab-content">
                <ul>
                    <!--Model CUB-->
                    
                    <li class="tab-pane content1 active" id="cub-model">
                       <div class="slider container"  style="padding:0 !important;">
                        
                        <?php 
                            $lang_code = app()->getLocale();
                            $model = 'cub';
                            $motors = getProduct_Model($model);
                            foreach($motors as $val){
                                //echo $val->title;
                        ?>
                    
                        <div class="row">
                            
                                <div class="slide">
                                     <a href="<?=URL('').'/'.$lang_code.'/'.$val->slug;?>" class="btn_learn_more">
                                            <img src="<?=myUpload().$val->thumbnail;?>" alt="" />
                                    
                                            <h1 class="title"><?= $val->title?></h1>
  
                                     </a>
                                </div>
                            </div>
                    <?php }?>
                    </div>
   
                </li>
                
                <!--Model A.T-->
                <li class="tab-pane content2 Model-A-T" id="at-model">
                <div class="slider container"  style="padding:0 !important;">
                    <?php 
                    $model = 'at';
                    $motors = getProduct_Model($model);
                    foreach($motors as $val){
                        //echo $val->title;
                    ?>
                
                    <div class="row">
                         
                            <div class="slide">
                                    <a href="<?=URL('').'/'.$lang_code.'/'.$val->slug;?>" class="btn_learn_more">
                                        <img src="<?=myUpload().$val->thumbnail;?>" alt="" />
                                        <h1 class="title"><?= $val->title?></h1>
                                    </a>
                            </div>
                        </div>
                <?php }?>
            </div>
            
                </li>
                
                <!--Model Sport-->
                
                <li class="tab-pane content3 Model-A-T" id="sport-model">
                
            <div class="slider container"  style="padding:0 !important;">
                    <?php 
                    $model = 'sport';
                    $motors = getProduct_Model($model);
                    foreach($motors as $val){
                        //echo $val->title;
                    ?>
                
                    <div class="row">
                       
                            <div class="slide">
                                <a href="<?=URL('').'/'.$lang_code.'/'.$val->slug;?>" class="btn_learn_more">
                                 <img src="<?=myUpload().$val->thumbnail;?>" alt="" />
                                    <h1 class="title"><?= $val->title?></h1>
                                 </a>
                            </div>
                        </div>
                <?php }?>
            </div>
                </li>
              </ul>  
            </div>
        </div>     
           <div class="col-sm-4">
            <ul class="nav nav-tabs tabs-left vertical-text">
                <li class="cub-model "><a href="#cub-model" data-toggle="tab" class="active show"><?php echo $cub_model ;?></a></li>
                <li class="at-model"><a href="#at-model" data-toggle="tab"><?php echo $at_model ;?></a></li>
                <li class="sport-model"><a href="#sport-model" data-toggle="tab"><?php echo $sport_model ;?></a></li>
            </ul>
        </div>
    </div>
 </div>  


<?php } ?>

<script>
//   $(function(){	
//     	initSlider();
//     });

    // function initSlider() {
    		
    // 	var slider = $(".slider");
    		
   
    // 	slider.on("beforeChange", function(event, slick, currentSlide, nextSlide) {
    // 		$(this).addClass("changing");
    // 	});
    	
    $('.slider').slick({
    		prevArrow: "<button type='button' class='slick-prev'><i class=' bx bxs-chevron-left'></i></button>",
    		nextArrow: "<button type='button' class='slick-next'><i class=' bx bxs-chevron-right'></i></button>",
            slidesToShow: 2,
            slidesToScroll: 1,
            infinite: true,
            autoplay: true,
            dots: false,
            loop: true,
            autoplaySpeed: 3000,
            centerMode: false,
            variableWidth: true,
            varibleHeight:false,
            responsive: [
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        centerMode: true,
        variableWidth: true
      }
    }
  ]
    	});
    	
    	
    // }
    
    // function checkSlides(slider, currentSlide) {
    // 	var slides = $(".slider", $(slider));
    
    // 	slides.filter(function(index) {
    // 		return $(this).attr("data-slick-index");
    // 	}).addClass("prev");;
    // }


    $( ".tabs-left li.cub-model" ).click(function() {
      $('.content1').addClass( "appear active", 1000, "easeInQuad" );
      $('.content2').removeClass( "active");
      $('.content3').removeClass( "active");
    });
    
    $( ".tabs-left li.at-model" ).click(function() {
      $('.content2').addClass( "appear active", 1000, "easeInQuad" );
      $('.content1').removeClass( "active");
      $('.content3').removeClass( "active");
    });
    
    $( ".tabs-left li.sport-model" ).click(function() {
      $('.content3').addClass( "appear active", 1000, "easeInQuad" );
      $('.content1').removeClass( "active");
      $('.content2').removeClass( "active");
    });

</script>

<?php }?>
