<?php

if(isset($_GET['page'])){
    echo '<h1>Product Feature Module</h1>';
} else{
    $lang_code = app()->getLocale();
    $id = pageID();
    //echo $id;
    $gall = getProductFeature($id);
    //print_r($gall);
    
    if(!empty($gall)){ ?>
        <div class="big-cover-slide" id="other-feature">
            <div class="container">
              <div class="slider slider-for fadein">
                <?php 
                $galleries = collect(json_decode($gall))->sortByDesc('image_order')->reverse()->toArray();
                foreach($galleries as $index => $val){ ?>  
            
                     <div class="row flex-detai-gallery">
                      <div class="col-sm-7">
                        <img src="<?php echo myUpload().$val->image_url_desktop; ?>">
                      </div>
                      
                      <div class="col-sm-5">
                        <div class="slide-caption ProfeatuetextIN ProfeatuetextOUT">
                            <h1><?php echo $val->image_title; ?></h1>
                            <p><?php echo $val->image_caption; ?></p>
                        </div>
                      </div>
                    </div>
    
                <?php } ?>
                
              </div>
             </div>  
        </div>
    
        <div class="container">
          <div class="slider slider-nav fadein">
            <?php foreach(json_decode($gall) as $index => $val){ ?>  
                <div><img src="<?php echo myUpload().$val->image_url_desktop; ?>"></div>
            <?php } ?>
            
          </div>
        </div>
        
        <script>
            //Feature Gallery    
            $('.slider-for').slick({
              slidesToShow: 1,
              slidesToScroll: 1,
              speed: 800,
              arrows: true,
              fade: true,
              asNavFor: '.slider-nav',
                responsive: [
                    {
                      breakpoint: 768,
                      settings: {
                        arrows: true,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 1
                      }
                    },
                    {
                      breakpoint: 480,
                      settings: {
                        arrows: true,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 1,
                        dots: false,
                        arrow: true,
                      }
                    }
                  ]
            });
        
            $('.slider-nav').slick({
              slidesToShow: 4,
              slidesToScroll: 1,
              asNavFor: '.slider-for',
              dots: false,
              focusOnSelect: true,
                responsive: [
                    {
                      breakpoint: 768,
                      settings: {
                        arrows: true,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 1
                      }
                    },
                    {
                      breakpoint: 480,
                      settings: "null"
                    }
                  ]
            });
        
            $('a[data-slide]').click(function (e) {
              e.preventDefault();
              var slideno = $(this).data('slide');
              $('.slider-nav').slick('slickGoTo', slideno - 1);
            });
        
        </script>
    
    <?php } 
    
    }?>