<style>
.event-postype{overflow: hidden;}
.event-postype:hover .card {
    transform: scale(1.05);
}

    .mkdf-owl-slider{visibility: unset !important;display:block!important;}
    :root {
      --color: #3c3163;
      --transition-time: 0.5s;
    }
    
    .cards-wrapper {
      display: grid;
      justify-content: center;
      align-items: center;
      grid-gap: 1rem;
      padding: 0 25px;
      margin: 0 auto;
      width: 100%;
    }
    .section-event-home .col-sm-10 {
        max-width: 88%;
        flex: auto;
    }
    .section-event-home .col-sm-2 {
        max-width: 12%;
    }
    .card {
      font-family: 'Heebo';
      --bg-filter-opacity: 0.3;
      background-image: linear-gradient(333deg, rgba(255,255,255,0) 0%, rgba(255,255,255,0) 31%, rgb(0 0 0 / 69%) 100%), var(--bg-img);
      height: 25em;
      font-size: 1.5em;
      color: white;
      border-radius: 0;
      padding: 15px;
      display: flex;
      background-size: cover;
      background-position: center;
      box-shadow: 0 0 10px #00000061;
      transition: all, var(--transition-time);
      position: relative;
      overflow: hidden;
      border:none;
      text-decoration: none;
    }
    .card::after, .card::before {
        background-color: rgb(0 0 0 / 30%) !IMPORTANT;
    }
    .card:hover {
      transform: rotate(0);
      
    }
    
    .card h1 {
      margin: 15px 0;
      font-size: 17px;
      line-height: 28px;
       color: white;
       overflow-x: hidden;
    overflow-y: hidden;
    display: -webkit-inline-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    text-transform: capitalize;
    }
    
    .card p.description-text {
      font-size: 15px;
      margin-top: 0.5em;
      visibility: hidden;
      transform: translateX(50px);
    }
    p.postype {
        font-size: 0.75em;
        font-weight: 500;
        letter-spacing: 1px;
    }
    .card .tags {
      display: flex;
    }
    .card:hover p.description-text {
        visibility: visible;
        transition: 0.3s;
        font-weight:500;
        transform: translateX(0px);
    }
    .card .tags .tag {
      font-size: 0.75em;
      background: rgba(255,255,255,0.5);
      border-radius: 0.3rem;
      padding: 0 0.5em;
      margin-right: 0.5em;
      line-height: 1.5em;
      transition: all, var(--transition-time);
    }
    
    .card:hover .tags .tag {
      background: var(--color);
      color: white;
    }
    
    .card .date {
      position: absolute;
      top: 0;
      right: 0;
      font-size: 0.75em;
      padding: 1em;
      line-height: 1em;
      opacity: .8;
    }
    
    .card:before, .card:after {
      content: '';
      transform: scale(0);
      transform-origin: top left;
      border-radius: 50%;
      position: absolute;
      left: -50%;
      top: -50%;
      z-index: -5;
      transition: all, var(--transition-time);
      transition-timing-function: ease-in-out;
    }
    
    .card:before {
      background: #ddd;
      width: 250%;
      height: 250%;
    }
    
    .card:after {
      background: white;
      width: 200%;
      height: 200%;
    }
    
    .card:hover {
        color: white;
    }
    .card:hover:before, .card:hover:after {
      transform: scale(1);
    }
    
    .card-grid-space .num {
      font-size: 3em;
      margin-bottom: 1.2rem;
      margin-left: 1rem;
    }
    
    .info {
      font-size: 1.2em;
      display: flex;
      padding: 1em 3em;
      height: 3em;
    }
    
    .info img {
      height: 3em;
      margin-right: 0.5em;
    }
    
    .info h1 {
      font-size: 1em;
      font-weight: normal;
    }
    
    
        ul.achive-new li {
            border-radius: 5px;
            padding: 8px 20px;
            list-style: none;
            color: #fff;
            border: 1px solid #e0e0e0;
            display: initial;
        }
        p.flex-text.date-time i {
            color: #fccb06;
            margin-right: 5px;
        }
        .card h4.blog-title {
            line-height: 25px!important;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
        }
    .owl-theme .owl-nav.disabled+.owl-dots {
        margin-top: 4%;
        display: none;
    }
    .mkdf-owl-slider .owl-dots:after {
        top: -3px !important;
        left: 30px !important;
        font-size: 16px !important;
    }
    .mkdf-owl-slider .owl-dots .owl-dot:before{left:40px !important;}
    .mkdf-owl-slider .owl-dots .owl-dot:after, .mkdf-owl-slider .owl-dots .owl-dot:before{font-size:20px!important;letter-spacing:unset!important;font-weight: 500!important;}
    .mkdf-owl-slider .owl-dots .owl-dot span{top:5px!important;}
    .mkdf-owl-slider .owl-dots:before{top:20px!important;background-color: #afafaf !important;}
    .mkdf-owl-slider .owl-dots{width: min-content !important;margin-left: 0 !important;}
    .owl-theme .owl-dots .owl-dot span{background: #ec1930!important;width: 80px;}
    .owl-carousel .owl-stage-outer {list-style: none;}
</style>

<?php 
  if(isset($_GET['page'])){
    echo '<h1>Event Module</h1>';
  }
?>
      
<link rel="stylesheet" href="https://grandprix.qodeinteractive.com/wp-content/cache/minify/340c2.css" media="all" />
     
     <?php 
$currentLocale = app()->getLocale();

if (isset($_GET['page'])){
   echo '<link rel="stylesheet" href="https://grandprix.qodeinteractive.com/wp-content/cache/minify/340c2.css" media="all" />';
} 

else{ 
    $lang_code = app()->getLocale();
    $tags = 'Event';

    if ($lang_code == 'kh'){
        $tags = ' ព្រឹត្តិការណ៍ ';

    } else{echo '';}

?>

<?php if(isset($_GET['page'])){?>
    <link rel="stylesheet" href="<?=URL::to('/themes/giant/andro_files')?>/css/drag-allowed.css?v=<?php echo rand(10,78000000); ?>">
<?php } ?> 
   

              
                        <div class="mkdf-grid-row">
                           <div class="mkdf-page-content-holder mkdf-grid-col-12">
          
                            
                            
                                                      <div class="mkdf-elements-holder   mkdf-one-column  mkdf-responsive-mode-768 ">
                                                         <div class="mkdf-eh-item    " data-item-class="mkdf-eh-custom-6482" data-1400-1600="0% 0px 0px 3%" data-1025-1399="0px 0px 0px 8.8%" data-769-1024="0px 0px 0px 11%" data-681-768="0px 0px 0px 8%" data-680="0px 0px 0px 7%">
                                                            <div class="mkdf-eh-item-inner">
                                                               <div class="mkdf-eh-item-content ">
                                                                  <div class="mkdf-blog-slider-holder mkdf-bs-carousel-custom ">
                                                                     <ul class="mkdf-blog-slider mkdf-owl-slider" data-number-of-items="3" data-slider-padding="yes" data-stage-padding="predefined" data-enable-navigation="no" data-enable-pagination="yes" data-enable-autoplay="no">
                                                                       
                                                                    <div class="story owl-carousel owl-theme">
                                                                                                                    
                                                                    <?php
                                                                    
                                                                    $event = getEvents();
                                                                    $lang_code = app()->getLocale();
                                                                    foreach ($event as $value) {?>
                                                                        <li class="mkdf-blog-slider-item">
                                                                            <div class="mkdf-blog-slider-item-inner customCard">
                                                                            <div class="row list-items">
                                                                    <div class="">
                                                                        <div class="event-postype">
                                                                    
                                                                  <div class="card-grid-space">
                                                                    <a class="card" href="<?=URL('').'/'.$lang_code.'/'.$value->slug;?>" style="--bg-img: url('<?php echo myupload().$value->thumbnail ;?>')">
                                                                    
                                                                        <p class="postype"><?php echo $tags ;?></p>
                                                                        <h1 class="title-event"><?php echo $value->title; ?></h1>
                                                                        <p class="description-text"><?=$value->meta_description?></p>
                                                                     
                                                                    </a>
                                                                  </div>
                                                                  
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                           </div>
                                                                        </li>
                                                                       
                                                                                 
  
                                                                    <?php } ?>    

                                                                     
                        </div>                                                 
                                                                     </ul>
                                                                     
                                                                      </div>
                                                                  </div>
                                                               </div>
                                                            </div>
                               
                              </div>
                              <?php } ?> 
                              <div class="mkdf-row-grid-section-wrapper mkdf-disabled-bg-image-bellow-1024">
                                 <div class="mkdf-row-grid-section">
                                    <div class="vc_row wpb_row vc_row-fluid vc_custom_1570695615009 vc_row-has-fill vc_row-o-content-middle vc_row-flex mkdf-row-animated-background-text mkdf-animated-background-text-horizontal-right mkdf-animated-background-text-middle">
                                       <div class="mkdf-vertical-lines"><span class="mkdf-vertical-line"></span><span class="mkdf-vertical-line"></span><span class="mkdf-vertical-line"></span></div>
                                   
                                       
                                    </div>
                                 </div>
                              </div>
                           </div>
  
                  </div>
    
            </div>
    
      <script>
 $(document).ready(function(){
  $('.story').owlCarousel({
    dots:true,
    center:true,
    items:5,
    autoplay:true,
    loop:true,
    margin:15,
    stagePadding: 0,
    responsive:{
        0:{
            items:1,
            nav:false
        },
        600:{
            items:2,
            nav:false
        },
        768:{
            items:2,
         
        },
        1280:{
            items:4,
         
        }
    }
   
});
});


</script>
   
    

