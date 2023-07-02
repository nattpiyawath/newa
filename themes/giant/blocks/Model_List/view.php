<?php if(isset($_GET['page'])){
    echo '<h1 style="text-align:center;">Model Option Module</h1>';
} else{ ?>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<style>
    .container.section-list {
        padding: 0;
    }
    .nav-tabs { border-bottom: unset !important; }
    .row.block-option .col-sm-12 { padding: 15px 15px; }
    
.in-mode:hover img {
    transform: scale(1.1);
}
.in-mode img {
    transition: transform .5s ease;
}
/*.in-mode {*/
/*    height: auto;*/
/*    overflow: hidden;*/
/*}    */
#cub-model .row .col-sm-3 img, #at-model .row .col-sm-3 img, #sport-model .row .col-sm-3 img {
    width: 85%;
    margin: 25px 0 10px;
}
#cub-model .row .col-sm-3, #at-model .row .col-sm-3, #sport-model .row .col-sm-3 {
    text-align: center;
}  
#cub-model .row, #at-model .row {
    justify-content: center;
}
li a.active.show::after {
    content: "";
    display: block;
    background: #ec1a30;
    height: 2px;
    width: 100%;
    margin: auto;
    margin-bottom: 15px;
}
li.all-model1 i {
    vertical-align: text-top;
    margin-right: 2.5px !important;
}
li.all-model1 {
    float: right;
    text-align: right;
    right: 25px;
    position: absolute;
}
.inner-model .in-mode.col-md-6 {
    max-width: 100%;
    flex: 0 0 100%;
}
p.des-prod {
    display: none;
}
.col-sm-3.md-prod {
    padding: 10px 0;
}
    
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
        font-weight: 600;
        /*letter-spacing: 1px;*/
        margin-top: 0 !important;
        color:#4c4c4c;
        text-transform:unset;
        text-align: left;
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

    .tabs-right {border-left: 1px solid #ddd;}

    .tabs-left>li {margin-right: 20px; text-align: left;}
    .tabs-right>li {margin-left: -1px;}
    .tabs-left>li.active>a,
    .tabs-left>li.active>a:hover,
    .tabs-left>li.active>a:focus {border-bottom-color: #ddd;border-right-color: transparent;}
    .tabs-right>li.active>a,
    .tabs-right>li.active>a:hover,
    .tabs-right>li.active>a:focus {border-bottom: 1px solid #ddd;border-left-color: transparent;}
    .tabs-left>li>a { color:#000; }
    .tabs-right>li>a {border-radius: 0 4px 4px 0;margin-right: 0;}
    .vertical-text {border: none;position: relative;}
    .vertical-text>li>a {
        text-align: center;
        font-size: 28px;
        font-weight: 600;
        padding: 13.6% 0;
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
    .tab-content li.tab-pane.content4.active {display: block;}
    .block-option {
        background: #fff;
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
    .title {font-size: 18px !important;padding: 0 0px; letter-spacing: 0 !important;}
    li.all-model1 i {
        vertical-align: middle;
        margin-right: 5px;
    }
    li.all-model1 {
        float: right;
        text-align: right;
        right: 0px;
        position: absolute;
    }
    .row.block-option .col-sm-12 { padding: 15px 0px; }
    .inner-model .in-mode {
        width: 50%;
        float: left;
        display: inline-block;
    }
    p.des-prod {
        display: block;
        text-align: left;
        line-height: 22px;
        color: #4c4c4c;
        padding: 0 0px;
        font-size: 16px !important;
        font-weight: 500 !important;
    }
    .col-sm-3 .inner-model .in-mode.fr-cls {
        padding: 0px 0;
    }
    .btn-newsm {
        text-align: left;
        font-size: 12px;
        color: #fff;
        background: #ec1b2f;
        padding: 0px 8px;
        clip-path: polygon(0% 0, 100% 0, 100% 0%, 70% 100%, 0 100%, 0% 25%);
        width: 35% !important;
        margin-bottom: 0.5em;
        position: relative !important;
    }
    .in-mode.fr-cls.only-desktop {display: none;}
    h1.title.only-mobile {display: block !important;}

}

    .btn-newsm {
        text-align: left;
        font-size: 12px;
        color: #fff;
        background: #ec1b2f;
        padding: 0px 8px;
        clip-path: polygon(0% 0, 100% 0, 100% 0%, 70% 100%, 0 100%, 0% 25%);
        width: 20%;
        margin-bottom: 0.5em;
        position: absolute;
    }
    h1.title.only-mobile {display: none;}
    .only-desktop p.des-prod {
        font-size: 16px;
        color: #4c4c4c;
        text-align: left;
        display: block;
    }
    
</style>


<?php 
$currentLocale = app()->getLocale();

if (isset($_GET['page'])){
   echo '';
} 

else{ 
    $lang_code = app()->getLocale();
    $cub_model = 'SEDAN';
    $at_model = 'SUV';
    $all_model = 'ALL MODEL';
    
  
    if ($lang_code == 'kh'){
        $cub_model = ' SEDAN ';
        $at_model = 'SUV';
        $all_model = 'ម៉ូឌែលទាំងអស់';
  
    } else{echo '';}

?>
      
    <div class="row block-option">
        
        <div class="col-sm-12">
            <ul class="nav nav-tabs tabs-left">
                <li class="cub-model "><a href="#cub-model" data-toggle="tab" class="active show"><?php echo $cub_model ;?></a></li>
                <li class="at-model"><a href="#at-model" data-toggle="tab"><?php echo $at_model ;?></a></li>
                <li class="all-model1"><i class='bx bx-grid-alt'></i><a href="<?=URL('').'/'.$lang_code.'/products'?>"><?php echo $all_model ;?></a></li>
            </ul>
        </div>
        
    </div>

 <div class="container section-list">
    
    <div class="row">
        
        <div class="col-sm-12" style="padding-right:0;">
            <!-- Tab panes -->
            <div class="tab-content">
                <ul>
                    <!--Model CUB-->
                    
                <li class="tab-pane content1 active" id="cub-model">
                       <div class="row"  style="padding:0 !important;">
                        
                        <?php 
                            $lang_code = app()->getLocale();
                            $model = 'sedan';
                            $motors = getProduct_Model($model);
                            foreach($motors as $val){
                        ?>
                    
                        <div class="col-sm-3 md-prod">
                            
                                <div class="inner-model">
                                     <a href="<?=URL('').'/'.$lang_code.'/'.$val->slug;?>" class="btn_learn_more">

                                                <div class="in-mode fr-cls ">
                                                    
                                                    <?php
                                                    if ($val->newmodel == 1)
                                                      echo '<div class="btn-newsm">NEW</div>';
                                                    ?>                                                    
                                                    
                                                    <h1 class="title only-mobile"><?= $val->title?></h1>
                                                    <p class="des-prod"><?=Str::of($val->meta_description)->limit(30)?></p>
                                                </div>                                            
                                                <div class="in-mode">
                                                    <img src="<?=myUpload().$val->thumbnail;?>" alt="" />
                                                </div>
                                                
                                                <div class="in-mode fr-cls only-desktop">
                                                    <h1 class="title"><?= $val->title?></h1>
                                                    <p class="des-prod"><?=Str::of($val->meta_description)->limit(30)?></p>
                                                </div>                                                  
                                                
                                     </a>
                                </div>
                            </div>
                    <?php }?>
                    </div>
   
                </li>
                
                <!--Model A.T-->
                <li class="tab-pane content2 Model-A-T" id="at-model">
                <div class="row"  style="padding:0 !important;">
                    <?php 
                    $model = 'suv';
                    $motors = getProduct_Model($model);
                    foreach($motors as $val){
                        //echo $val->title;
                    ?>
                
                    <div class="col-sm-3 md-prod">
                                <div class="inner-model">
                                     <a href="<?=URL('').'/'.$lang_code.'/'.$val->slug;?>" class="btn_learn_more">

                                                <div class="in-mode fr-cls ">
                                                    
                                                    <?php
                                                    if ($val->newmodel == 1)
                                                      echo '<div class="btn-newsm">NEW</div>';
                                                    ?>                                                    
                                                    
                                                    <h1 class="title only-mobile"><?= $val->title?></h1>
                                                    <p class="des-prod"><?=Str::of($val->meta_description)->limit(30)?></p>
                                                </div>                                            
                                                <div class="in-mode">
                                                    <img src="<?=myUpload().$val->thumbnail;?>" alt="" />
                                                </div>
                                                
                                                <div class="in-mode fr-cls only-desktop">
                                                    <h1 class="title"><?= $val->title?></h1>
                                                    <p class="des-prod"><?=Str::of($val->meta_description)->limit(30)?></p>
                                                </div>                                                  
                                                
                                     </a>
                                </div>
                        </div>
                <?php }?>
            </div>
            
                </li>
                
                <!--All Model-->
                
              </ul>  
            </div>
        </div>
        
    </div>
    
 </div>  


<?php } ?>

<script>
    	
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
      $('.content4').removeClass( "active");
    });
    
    $( ".tabs-left li.at-model" ).click(function() {
      $('.content2').addClass( "appear active", 1000, "easeInQuad" );
      $('.content1').removeClass( "active");
      $('.content3').removeClass( "active");
      $('.content4').removeClass( "active");
    });
    
    $( ".tabs-left li.sport-model" ).click(function() {
      $('.content3').addClass( "appear active", 1000, "easeInQuad" );
      $('.content4').removeClass( "active");
      $('.content1').removeClass( "active");
      $('.content2').removeClass( "active");
    });
    
    $( ".tabs-left li.all-model" ).click(function() {
      $('.content4').addClass( "appear active", 1000, "easeInQuad" );
      $('.content1').removeClass( "active");
      $('.content2').removeClass( "active");
      $('.content3').removeClass( "active");
    });    

</script>

<?php }?>
