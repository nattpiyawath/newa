<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/css/swiper.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.3.4/vue.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/js/swiper.min.js"></script>

    <!-- Demo styles -->
<style>
    .swiper-container {
        width: 100%;
        height: 100%;
      }
.swiper-slide.nslide {
    width: 65% !important;
    background: unset !important;
    padding-right:0 !important;
}
.thumail-traning {
    height: 50vh;
    background-size: cover;
    background-position: center center;
}
.swiper-slide.nslide.swiper-slide-prev h1 {
    font-size: 22px !important;
    margin-bottom: -20px;
    margin-top: 30px;
}
.swiper-slide.nslide.swiper-slide-prev span {
    font-size: 15px;
    line-height: 28px;
    padding:35px 0;
}
.swiper-slide.nslide.swiper-slide-next h1 {
    font-size: 22px !important;
    margin-bottom: -20px;
    margin-top: 30px;
}
.swiper-slide.nslide.swiper-slide-active span {
    font-size: 15px;
    line-height: 28px;
    padding:35px 0;
}
.swiper-slide.nslide.swiper-slide-next span {
    font-size: 15px;
    line-height: 28px;
    padding:35px 0;
}
.swiper-slide.nslide.swiper-slide-active h1 {
    font-size: 22px;
    margin-bottom: -20px;
    color: #e21428;
    letter-spacing: 1px;
    margin-top: 30px;
}
.swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;
       

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
       
        display: inline-grid !important;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
      }

      .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
      }

     .section-traning .col-sm-2 {
    max-width: 12%;
}
 .section-traning .col-sm-10 {
    max-width: 88%;
}
.swiper-button-prev, .swiper-button-next {
    background-image: none;
    width: 35px;
    height: 35px;
    padding: 5px;
    top: 35%;
    margin-top: 0;
    display: block !important;
    background: #ec1b30;
    border-radius: 0;
    transform: rotate( 45deg);
}    
.swiper-button-prev i, .swiper-button-next i {
    transform: rotate(-45deg);
    color: #fff;
    font-size: 25px !important;
}
.swiper-button-next {
    right: 40px;
}
.swiper-button-prev {
    left: 40px;
}


</style>

    <!-- Swiper -->
    <div class="swiper-container mySwiper">
      <div class="swiper-wrapper">
      
      
      <?php
          $lang_code = app()->getLocale();
          $miles = Helper::milestone();
          // echo $lang;

          $slug = request()->segment(2);
                  if($slug != 'safety-riding'){
                      $slug = 'safety-riding';
        }

foreach ($miles as $value) {?>

<div class="swiper-slide nslide">
            
              <div class="safety">
                <div class="thumail-traning" style="background-image:url('<?php echo $value->thumbnail;?>')"></div>
              </div>
             <h1 class="milston-title"><?php echo $value->title ;?></h1>
              <span><?php echo $value->description ;?></span>
            
          </div>

<?php  } ?>

      </div>
        <div class="swiper-button-next"><i class=' bx bxs-chevron-right'></i></div>
      <div class="swiper-button-prev"><i class=' bx bxs-chevron-left'></i></div>
    </div>

    <!-- Swiper JS -->

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: "auto",
        centeredSlides: true,
        spaceBetween: 20,
        slideToClickedSlide:true,
        speed: 900,
        loop: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        
      });
    </script>
    
  