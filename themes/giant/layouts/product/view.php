<?php require(base_path().'/themes/giant/header.php'); ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.0.1/jquery-migrate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<style>
   .slide {
     display:flex;
      overflow: hidden;
      margin: 0 15px;
      background: #f1f1f1;
        box-shadow: 1px 4px 10px #00000029;
    }
    .slick-track{left:-150px !important;}
    .slide img {
      max-width: 90%;
      position: relative;
      transition: all 1s ease-out;
      float:right;
    }
    .slick-slide img, .slick-slide.slick-cloned img {
       float: left;
        left: -43%;
        padding:70px;
    }
    
    .slick-slide.slick-current.slick-active.slick-center img {
        width: 100% !important;
        float: right;
        left: 30px;
        padding:0;
    }
    .slide.slick-center img {
      transition: all 1s ease-out;
      opacity: 1;
    }
    
    .slick-prev,
    .slick-next {
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
    
    .slick-next {
      right: calc(50% - 650px);
      text-indent: 1px
    }
    
    .slick-prev {
      left: calc(50% - 650px);
      text-indent: -2px
    }
    
    .slick-arrow {
      background: none;
      border: none;
      position: absolute;
      bottom: 33px;
      color: #fff;
      font-size: 1.5rem;
      padding: 0;
      width: 33px;
      height: 33px;
      line-height: 34px;
      text-align: center;
      cursor: pointer;
      z-index: 20;
      -webkit-transition: background-color .2s ease 0s;
      transition: background-color .2s ease 0s
    }
    
    .slick-arrow:hover {
      background-color: rgba(255, 255, 255, .2)
    }
    .model_at  {
        background: #f1f1f1 !important;
        padding: 1% 0 5% 0;
    }
    .model_at .slide {
        display: flex;
        overflow: hidden;
        margin: 0 15px;
        background: #ffffff;
        box-shadow: 1px 4px 10px #00000029;
    }
    .slick-dots {
      position: absolute;
      bottom: 0;
      right: calc(0% - 432px);
      padding: 0;
      margin: 0;
      list-style: none
    }
    
    .slick-dots li {
      float: left;
      display: block;
      margin: 1rem .2rem;
      font-size: 0
    }
    
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
    
    .slider .slick-dots .slick-active button {
      background: rgba(255, 255, 255, .8)
    }
    
    .text {
      position: absolute;
      top: 30%;
      left: 0;
      color: #fff;
      z-index: 5;
      -webkit-transition: all .2s ease 0s;
      transition: all .2s ease 0s;
      text-align:center;
      padding-right:15%;
    }
    
    .prev .text {
        text-align: right;
        float: right;
        
    }
    .slick-prev, .slick-next {
        display: none!important;
    }
    .model_at .slick-prev, .model_at .slick-next {
        display: block !important;
        background: #3a3a3a;
        border-radius: 0;
        transform: rotate(45deg);
    }
    .model_cub .slick-prev, .model_cub .slick-next {
        display: block !important;
        background: #3a3a3a;
        border-radius: 0;
        transform: rotate(45deg);
    }
    .model_cub .slick-prev i, .model_cub .slick-next i {
    transform: rotate(-45deg);
    }
    .slick-slide{height:auto;}
    .slick-next:before {
        content: "";
    }
    .slick-prev:before {
        content: "";
    }
    .model_at .slick-prev i, .model_at .slick-next i {
        transform: rotate(-45deg);
    }
    .slick-next:focus, .slick-next:hover, .slick-prev:focus, .slick-prev:hover {
        color: white;
        background: #ec1b30;
    }
    .title {
      font-size: 30px;
      line-height: 1.15em;
      margin: .4rem 0 0;
      -webkit-transition: all .6s ease 0s;
      transition: all .6s ease 0s;
      color: #3e3e3e;
      font-weight:900;
    }
    
    .slick-active .title {
        margin-top: .8rem;
        -webkit-transition: all .4s ease .2s;
        transition: all .4s ease .2s;
        font-size: 30px;
        font-weight:900;
    }
    
    .summary {
      -webkit-transition: all .4s ease .2s;
        transition: all .4s ease .2s;
        color: #3e3e3e;
        font-size: 15px;
        margin: 25px 0;
    }
    a.btn_learn_more {
        color: #3a3a3a;
        font-weight: 600;
        font-size: 15px;
        border: 2px solid #3a3a3a;
        padding: 10px;
        display: inline-block;
        margin-top: 25px;
    }
    a.btn_learn_more svg {
        vertical-align: middle;
        margin-left: 10px;
    }
    .slick-active .summary {
        -webkit-transition: all .4s ease .2s;
        transition: all .4s ease .2s;
        color: #3e3e3e;
        font-size: 15px;
        margin: 25px 0;
    }
    
    .slide:before {
      content: "";
      display: block;
    }
    
    
    
    .slide figure:before {
      top: 0;
      background: transparent;
      z-index: 1;
      -webkit-transition: background-color .4s ease 0s;
      transition: background-color .4s ease 0s
    }
    
    .slide:hover figure:before,
    .slide:focus figure:before {
      background: rgba(39, 37, 30, .6)
    }
    .slick-list.draggable{padding:0;}
        .slick-slide.slick-current.slick-active img {left: 0;float: right;}

    
  @media screen and (min-width: 320px) and (max-width: 699px){
        .slick-track{left:0 !important;}
        .text {position: unset;top: 0;padding-right:0;}
        a.btn_learn_more {margin: 25px;font-size: 13px; padding: 8px;border: 1px solid #3a3a3a;}
        .slick-active .title{font-size:22px;}
        .slick-active .summary{font-size:13px;}
        .slick-prev, .slick-next {display: block!important;background: #3a3a3a;border-radius: 50px;}
    
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

<br> 
<div class="model_cub"> 
<h1 data-raw-content="true" id="cub" class="head-titel-page"><?php echo $cub_model; ?></h1>
<div class="slider container" style="padding:0 !important;">
    
    <?php 
        $lang_code = app()->getLocale();
        $model = 'cub';
        $motors = getProduct_Model($model);
        foreach($motors as $val){
            //echo $val->title;
    ?>

    <div class="row">
            <div class="slide">
                <div class="col-sm-7">
                    <figure>
                        <img src="<?=myUpload().$val->thumbnail;?>" alt="<?= $val->title?>" />
                    </figure>
                </div>
                <div class="col-sm-5">
                    <div class="text">
                        <h1 class="title fadein"><?= $val->title?></h1>
                        <p class="summary fadein"><?= $val->meta_description?></p>
                        <a href="<?=URL('').'/'.$lang_code.'/'.$val->slug;?>" class="btn_learn_more fadein">
                            Learn More
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="14.063" viewBox="0 0 56.793 14.063">
                                <g id="Group_285" data-name="Group 285" transform="translate(-268.5 -1447.969)">
                                    <line id="Line_25" data-name="Line 25" x2="50" transform="translate(268.5 1455.5)" fill="none" stroke="#000" stroke-width="2"></line>
                                    <path
                                        id="FontAwsome_caret-right_"
                                        data-name="FontAwsome (caret-right)"
                                        d="M0,120.413V108.246a.946.946,0,0,1,1.614-.669L7.7,113.661A.946.946,0,0,1,7.7,115l-6.084,6.084A.946.946,0,0,1,0,120.413Z"
                                        transform="translate(317.318 1340.671)"
                                    ></path>
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
<?php }?>
</div>
</div>
   
   
<br><br><br><br>
<div class="model_at">
<h1 data-raw-content="true" id="at" class="head-titel-page"><?php echo $at_model; ?></h1>
<div class="slider container fadein"  style="padding:0 !important;">
        <?php 
        $model = 'at';
        $motors = getProduct_Model($model);
        foreach($motors as $val){
            //echo $val->title;
        ?>
    
        <div class="row">
                <div class="slide">
                    <div class="col-sm-7">
                        <figure>
                            <img src="<?=myUpload().$val->thumbnail;?>" alt="<?= $val->title?>" />
                        </figure>
                    </div>
                    <div class="col-sm-5">
                        <div class="text">
                            <h1 class="title fadein"><?= $val->title?></h1>
                            <p class="summary fadein"><?= $val->meta_description?></p>
                            <a href="<?=URL('').'/'.$lang_code.'/'.$val->slug;?>" class="btn_learn_more fadein">
                                Learn More
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="14.063" viewBox="0 0 56.793 14.063">
                                    <g id="Group_285" data-name="Group 285" transform="translate(-268.5 -1447.969)">
                                        <line id="Line_25" data-name="Line 25" x2="50" transform="translate(268.5 1455.5)" fill="none" stroke="#000" stroke-width="2"></line>
                                        <path
                                            id="FontAwsome_caret-right_"
                                            data-name="FontAwsome (caret-right)"
                                            d="M0,120.413V108.246a.946.946,0,0,1,1.614-.669L7.7,113.661A.946.946,0,0,1,7.7,115l-6.084,6.084A.946.946,0,0,1,0,120.413Z"
                                            transform="translate(317.318 1340.671)"
                                        ></path>
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
    <?php }?>
</div>
</div>

<br>
<div class="model_cub"> 
<h1 data-raw-content="true" id="sport" class="head-titel-page"><?php echo $sport_model; ?></h1>
<div class="slider container fadein"  style="padding:0 !important;">
        <?php 
        $model = 'sport';
        $motors = getProduct_Model($model);
        foreach($motors as $val){
            //echo $val->title;
        ?>
    
        <div class="row">
                <div class="slide">
                    <div class="col-sm-7">
                        <figure>
                            <img src="<?=myUpload().$val->thumbnail;?>" alt="<?= $val->title?>" />
                        </figure>
                    </div>
                    <div class="col-sm-5">
                        <div class="text">
                            <h1 class="title fadein"><?= $val->title?></h1>
                            <p class="summary fadein"><?= $val->meta_description?></p>
                            <a href="<?=URL('').'/'.$lang_code.'/'.$val->slug;?>" class="btn_learn_more fadein">
                                Learn More
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="14.063" viewBox="0 0 56.793 14.063">
                                    <g id="Group_285" data-name="Group 285" transform="translate(-268.5 -1447.969)">
                                        <line id="Line_25" data-name="Line 25" x2="50" transform="translate(268.5 1455.5)" fill="none" stroke="#000" stroke-width="2"></line>
                                        <path
                                            id="FontAwsome_caret-right_"
                                            data-name="FontAwsome (caret-right)"
                                            d="M0,120.413V108.246a.946.946,0,0,1,1.614-.669L7.7,113.661A.946.946,0,0,1,7.7,115l-6.084,6.084A.946.946,0,0,1,0,120.413Z"
                                            transform="translate(317.318 1340.671)"
                                        ></path>
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
    <?php }?>
</div>
</div>
<br><br><br>

    <!-- Initialize Swiper -->
<script>
    $(function(){	
    	initSlider();
    });


    function initSlider() {
    		
    	var slider = $(".slider");
    		
    	slider.on("init", function(slick) {
    		checkSlides(this, 0);
    	});
    	
    	slider.on("beforeChange", function(event, slick, currentSlide, nextSlide) {
    		$(this).addClass("changing");
    	});
    	
    	slider.on("afterChange", function(event, slick, currentSlide) {
    		$(this).removeClass("changing");
    		checkSlides(this, currentSlide);
    	});
    	
    	
    	slider.slick({
    		prevArrow: "<button type='button' class='slick-prev'><i class=' bx bxs-chevron-left'></i></button>",
    		nextArrow: "<button type='button' class='slick-next'><i class=' bx bxs-chevron-right'></i></button>",
            slidesToShow: 1,
            slidesToScroll: 1,
            speed: 500,
            autoplay: false,
            dots: false,
            centerpadding: '10',
            
            focusOnSelect: true,
            slidesPerRow: 1,
            responsive: [
                {
      breakpoint: 0,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
         centerMode: false,
         centerpadding: '0'
      }
    },
   
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
         centerMode: false,
         centerpadding: '0'
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
         centerMode: false,
         centerpadding: '0'
      }
    }
   
  ]
  
    	});
    	
    }
    
    function checkSlides(slider, currentSlide) {
    	var slides = $(".slide", $(slider));
    	slides.removeClass("prev");
    	slides.filter(function(index) {
    		return $(this).attr("data-slick-index") < currentSlide;
    	}).addClass("prev");;
    }
    
    if ($(window).width() < 700){
        $( ".fadein" ).removeClass('fadein');
}

</script>

<?php }?>

<?php require(base_path().'/themes/giant/footer.php'); ?>