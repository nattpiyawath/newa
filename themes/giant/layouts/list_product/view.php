<?php require(base_path().'/themes/giant/header.php'); ?>

<style>

.in-mode:hover img {
    transform: scale(1.1);
}
.in-mode img {
    transition: transform .5s ease;
}
/*.in-mode {*/
/*    height: auto;*/
/*    overflow: hidden;*/
/*}*/
.col-sm-3.md-prod {
    padding: 20px;
}
h1#cub {
    margin-top: 0px;
}
/*div#cub, div#at, div#sport {*/
/*    margin: 2.5rem 0;*/
/*}*/
div#suv .col-sm-3 {
    margin-top: 15px;
}
h1.head-titel-page3 {
    font-size: 30px;
    font-weight: 600;
    color: #ec1a30;
    letter-spacing: 1px;
    margin: 10px 0 0px;
}
.title {
    font-size: 20px !important;
    font-weight: 600;
    letter-spacing: 1px;
    margin-top: 0 !important;
    color: #4c4c4c;
    text-transform: unset;
    text-align: left;
}

#cub .col-sm-3 img, #suv .col-sm-3 img, #sport .col-sm-3 img {
    width: 100%;
    margin-top: 25px;
    margin-bottom: 25px;
}
#cub .col-sm-3, #suv.col-sm-3, #sport .col-sm-3 {
    text-align: center;
}  
#cub.row, #suv.row {
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
    margin-right: 5px;
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
/*@media screen and (min-width: 320px) and (max-width: 699px){*/
    
/*    .in-mode img {*/
/*        height: auto;*/
/*        width: 100%;*/
/*    }*/
/*    #cub.row, #sport.row {*/
/*        justify-content: normal;*/
/*    }*/
/*    #cub.row .col-sm-3, #at.row .col-sm-3, #sport.row .col-sm-3 {*/
/*        position: relative;*/
/*        width: 50%;*/
/*        padding: 0px 10px;*/
/*    }*/
/*    button.title-name {*/
/*        clip-path: polygon(15% 0, 100% 0, 100% 60%, 85% 100%, 0 100%, 0% 40%);*/
/*        background: #ed1a29;*/
/*        border: unset;*/
/*        padding: 5px 20px;*/
/*        color: #fff;*/
/*        font-family: 'ncxhondacambodia', 'Bayon' !important;*/
/*        line-height: initial;*/
/*    }*/
    
/*}*/

@media screen and (min-width: 320px) and (max-width: 699px){
    
    h1.head-titel-page3 {
        font-size: 24px;
        font-weight: 600;
        letter-spacing: 0 !important;
    }
    h1#cub {
        margin-top: 85px;
    }
    .Model-A-T .slick-track {left:0!important;}
    #cub-model .slick-track {transform: unset !important;}
    .title {font-size: 18px !important;padding: 0 0px; letter-spacing: 0 !important;}
    li.all-model1 i {
        vertical-align: text-top;
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
        padding: 30px 0;
    }
    .in-mode.fr-cls.only-desktop {display: none;}
    h1.title.only-mobile {display: block !important;}
    .btn-newsm {
        text-align: left;
        font-size: 12px;
        color: #fff;
        background: #ec1b2f;
        padding: 0px 8px;
        clip-path: polygon(0% 0, 100% 0, 100% 0%, 70% 100%, 0 100%, 0% 25%);
        width: 35% !important;
        margin-bottom: 0.8em;
        position: relative !important;
    }
    #cub .col-sm-3 img, #suv .col-sm-3 img, #sport .col-sm-3 img {
        width: 100%;
        margin-top: 30px;
        margin-bottom: 30px;
    }
    .col-sm-3.md-prod {
        padding: 0px;
    }

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
    $modeltxt = 'MODEL';
  
    if ($lang_code == 'kh'){
        $cub_model = ' SEDAN';
        $at_model = ' SUV';

    } else{echo '';}

?>

<br> 


<div class="container">
   
    <h1 data-raw-content="true" id="cub" class="head-titel-page3"><?php echo $cub_model; ?></h1>
    
    <div id="cub" class="row"> 
    <?php 
        $lang_code = app()->getLocale();
        $model = 'sedan';
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
                                                </div>                                                  
                                                
                                     </a>
                                </div>
                            </div>
    <?php }?>
    </div>
    
    
    <h1 data-raw-content="true" id="suv" class="head-titel-page3"><?php echo $at_model; ?></h1>
    
    <div id="suv" class="row "> 
    <?php 
        $lang_code = app()->getLocale();
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
                                                </div>                                                  
                                                
                                     </a>
                                </div>
                        </div>
    <?php }?>
    </div>  

    
</div>

<?php }?>

<?php require(base_path().'/themes/giant/footer.php'); ?>