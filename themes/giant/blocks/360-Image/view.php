<?php if (isset($_GET['page'])){ echo '<h1>360° Image Module</h1>'; }else{
  $lang_code = app()->getLocale();
    $see = 'Move Around';    
    $view = 'VIEW';        
    if($lang_code == 'kh'){
      $view = 'រូប ';
      $see = 'មើលរាងជុំវិញ'; 
    }
  
  ?>

<style>
    .wrapper {
        min-height: auto;
        padding-top: 0;
    }
    h1#view-full-degree {
        margin: 0 auto;
    }
    .load-360{display:none;position: absolute;
        margin: 0 auto;
        left: 0;
        right: 0;
    }
    #canvas{width:1000px!important;}
      
    .mobile-main-feature>div {
        box-shadow: 0px 12px 5px #adadad4a;
        margin-bottom: 1.5em;
        border-radius: 10px;
        padding-bottom: 10px;
    }
    
    .mobile-main-feature h1, .mobile-main-feature p {padding: 0 8px;}
    .mobile-main-feature img {padding-bottom: 10px;}

    @media screen and (min-width: 1280px){
      .load-360{height:900px;}
      .load-360 img{padding-top: 340px;}
      .h1-360{
        position: absolute;
        left: 0;
        right: 0;
      }
    }
    
    @media screen and (min-width: 769px){
        .section360 img {
            max-width: 100px!important;
            margin: 0 auto;
            left: 0;
            right: 0;
            top: 90rem;
            padding-right: 0;
            margin-top: -4px!important;
            padding-bottom: 16px;
        }
        img.drag-rotate {
            max-width: 200px!important;
            position: absolute;
            top: 30em;
        }
    }
    
    @media screen and (max-width:768px){
        
        img.three-img {
            max-width: 100px!important;
            margin-left: 0!important;
        }
        .section360 img{
            max-width: 280px;
            margin-left: -14rem;
        }
        img.drag-rotate {
            margin-left: 0;
            max-width: 100px;
            position: absolute;
            top: 21em;
            left: 9em;
        }
        canvas#canvas {
            width: 115%!important;
            height: auto !important;
            margin-left: -3rem;
        }
        p.image-360 svg {max-width: 30px;}
        .load-360{height:200px;}
        .load-360 img{padding-top: 120px;}
    }
</style>

<div class="row container">
    <h1 class="head-titel-page view-full-degree h1-360" id="view-full-degree" ><span><img class="three-img" src="<?=url('')?>/storage/app/uploads/360.jpeg"/></span><p><?=$see;?></p></h1>
    <div class="wrapper">
        <div class="load-360"><img src="https://www.ncxhonda.com/motorcycles/storage/app/uploads/loading/loadingmoto.gif"/></div>
        <canvas id='canvas' width="1200" height="1200"></canvas>
        <img class="drag-rotate" style="display:none;" src="<?=url('')?>/storage/app/uploads/rotate.png"/>
    </div>
</div>

<?php }?>