<?php

if(isset($_GET['page'])){
    echo '<h1>Event Gallery Module</h1>';
} else{
    $lang_code = app()->getLocale();
    $id = pageID();
    //echo $id;
    $gall = getEventGallery($id);
    //print_r($gall);
    
    if(!empty($gall)){ ?>
    
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
        
        <div class="gallery-slide">
            <div class="container">
              <div class="slider slider-for">
                <?php 
                $galleries = collect(json_decode($gall))->sortByDesc('image_order')->reverse()->toArray();
                foreach($galleries as $index => $val){ ?>  
               
                     <div class="row flex-detai-gallery">
                      
                        <img src="<?php echo myUpload().$val->image_url_desktop; ?>">
                      
                      
                    </div>
    
                <?php } ?>
                
              </div>
            </div>  
        </div>
    
        <div class="container">
          <div class="slider slider-nav">
              
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
              arrows: true,
              fade: true,
              asNavFor: '.slider-nav' });
        
            $('.slider-nav').slick({
              slidesToShow: 4,
              slidesToScroll: 1,
              asNavFor: '.slider-for',
              dots: false,
              focusOnSelect: true });
        
            $('a[data-slide]').click(function (e) {
              e.preventDefault();
              var slideno = $(this).data('slide');
              $('.slider-nav').slick('slickGoTo', slideno - 1);
            });
        
        </script>
    
    <?php } 
    
    }