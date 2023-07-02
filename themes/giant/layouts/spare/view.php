<?php require(base_path().'/themes/giant/header.php'); ?>

<style>
    .details-item {
        margin-bottom: 4rem;
    }
    .container.section-list .tab-content {
        display: block !important;
        padding: 0px 0px !important;
        overflow: visible !important;
    }
    ul.nav.nav-tabs.tabs-left li a {
        font-size: 16px;
        font-weight: 500;
        color: rgb(237, 26, 41);
        text-transform: uppercase;
        width: max-content;
    }
    ul.nav.nav-tabs.tabs-left li {
        padding-right: 15px!important;
    }
    ul.nav.nav-tabs.tabs-left {
        border-bottom: unset;
        padding-bottom: 10px;
    }   
    .tab-content li.tab-pane {display: none;}
    .tab-content li.tab-pane.content1.active {display: block;}
    .tab-content li.tab-pane.content2.active {display: block;}
    .tab-content li.tab-pane.content3.active {display: block;}
    .tab-content li.tab-pane.content4.active {display: block;}
    .tab-content li.tab-pane.content5.active {display: block;}
    .tab-content li.tab-pane.content6.active {display: block;}
    .tab-content li.tab-pane.content7.active {display: block;}    
    .col-sm-3.md-prod {
        box-shadow: rgb(211 211 211) 0px 3px 10px 1px !important;
        display: block;
        padding: 15px 15px 25px;
        margin: 15px 10px;
        max-width: 23%;
    }
    .blog-post-list-thumb {
        text-align: center;
        margin-bottom: 10px;
    }
    li.tab-pane.appear.active.show .row {
        justify-content: start;
    }
    h4.blog-title.spare-type {
        font-size: 16px;
        text-align: left;
        line-height: 25px;
        margin: 0;
        font-weight: 600;
        color: #3a3a3a;
    }
    .inner-model a.url-class {
        font-family: 'ncxhondacambodia', 'Kantumruy' !important;
        font-weight: 600 !important;
        color: #4c4c4c;
        transition: all 0.4s cubic-bezier(0.4, 0, 1, 1);
        background: #00000014;
        padding: 8px 20px;
        border-radius: 50px;
        box-shadow: 0 0 3px #0000001a;
        font-size: 14px;
    }    
    li.all-model1 {
        float: right;
        text-align: right;
        right: 0px;
        position: absolute;
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
    
@media screen and (min-width: 320px) and (max-width: 699px){
    
    ul.nav.nav-tabs.tabs-left li {
        padding-right: 2px!important;
    }
    .col-sm-12 .nav.nav-tabs {
        display: flex;
        width: max-content;
    }
    .row.block-option {
        overflow: scroll;
    }
    .col-sm-3.md-prod {
    box-shadow: rgb(211 211 211) 0px 3px 10px 1px !important;
        display: block;
        padding: 15px 15px 25px;
        margin: 0px 3px 15px;
        max-width: 48%;
    }
    li.all-model1 {
        position: relative;
    }
    .row.container.section-list {
        padding: 0 0px;
    }
    
}
    
</style>
    
<div class="row">
    <div class="col-sm-12" style="padding:0;">
        <div class="details-item">
            <?= $body ?>
        </div>
    </div>
</div>

    
<div class="row container">
    
    <div class="col-sm-12" style="padding:0;">
        
        <?php 
        
        $currentLocale = app()->getLocale();
        
        if (isset($_GET['page'])){
           echo '';
        } 
        
        else{ 
            $lang_code = app()->getLocale();
            $show_all = 'All SPARE PART';
            $read_more = 'Read More';
            $more_parts = 'More Parts Please Contact Us';
            
            $tires = 'MAINTENANCE PARTS';
            $spark = 'GENERAL PARTS';
            $batter = 'BODY PARTS';

        
            if ($lang_code == 'kh'){
                $show_all = ' បង្ហាញទាំងអស់ ';
                $read_more = ' អានបន្ត';
                $more_parts = 'គ្រឿងបន្លាស់បន្ថែមសូមទាក់ទងមកយើងខ្ញុំ';
                
                $tires = ' ផ្នែកថែទាំ ';
                $spark = ' ផ្នែកទូទៅ ';
                $batter = 'ផ្នែករាងកាយ';

                
            } else{echo '';}
        
        ?>
        
        <div class="row block-option">
        
            <div class="col-sm-12">
                
                <ul class="nav nav-tabs tabs-left">
                    <li class="cat1"><a href="#cat1" data-toggle="tab"><?php echo $tires ;?></a></li>
                    <li class="cat2"><a href="#cat2" data-toggle="tab"><?php echo $spark ;?></a></li>
                    <li class="cat3"><a href="#cat3" data-toggle="tab"><?php echo $batter ;?></a></li>
                    
                    <li class="all-model1"><a href="#cat7" data-toggle="tab" class="active show"><?php echo $show_all ;?></a></li>
                </ul>
                
            </div>
            
        </div>
        
        <div class="row container section-list">

                <div class="col-sm-12" style="padding:0;">
        
                    <div class="tab-content">
                        
                        <ul>
                            
                            <li class="tab-pane content1" id="cat1">
                               <div class="row"  style="padding:0 !important;">
                                
                                <?php 
                                    $lang_code = app()->getLocale();
                                    $motors = getSparttire();
                                    foreach($motors as $val){
                                ?>
                            
                                    <div class="col-sm-3 md-prod">
                                        
                                            <div class="inner-model">
                                                
                                                <h4 class="blog-title spare-type">
                                                    <?php echo $val->title; ?>
                                                </h4>
                                                <div class="blog-post-list-thumb"><img src="<?php echo myUpload().$val->thumbnail ;?>"></div>
                                                <a class="url-class" href="<?php echo URL($lang.'/spart').'/'.$val->slug;?>"><?php echo $read_more ;?> <i class='bx bx-chevron-right'></i> </a>
                                            
                                            </div>
                                        </div>
                                <?php }?>
                                </div>
           
                            </li>
                            <li class="tab-pane content2" id="cat2">
                               <div class="row"  style="padding:0 !important;">
                                
                                <?php 
                                    $lang_code = app()->getLocale();
                                    $motors = getSpartspark();
                                    foreach($motors as $val){
                                ?>
                            
                                    <div class="col-sm-3 md-prod">
                                        
                                            <div class="inner-model">
                                                
                                                <h4 class="blog-title spare-type">
                                                    <?php echo $val->title; ?>
                                                </h4>
                                                <div class="blog-post-list-thumb"><img src="<?php echo myUpload().$val->thumbnail ;?>"></div>
                                                <a class="url-class" href="<?php echo URL($lang.'/spart').'/'.$val->slug;?>"><?php echo $read_more ;?> <i class='bx bx-chevron-right'></i> </a>
                                            
                                            </div>
                                        </div>
                                <?php }?>
                                </div>
           
                            </li>
                            <li class="tab-pane content3" id="cat3">
                               <div class="row"  style="padding:0 !important;">
                                
                                <?php 
                                    $lang_code = app()->getLocale();
                                    $motors = getSpartbettery();
                                    foreach($motors as $val){
                                ?>
                            
                                    <div class="col-sm-3 md-prod">
                                        
                                            <div class="inner-model">
                                                
                                                <h4 class="blog-title spare-type">
                                                    <?php echo $val->title; ?>
                                                </h4>
                                                <div class="blog-post-list-thumb"><img src="<?php echo myUpload().$val->thumbnail ;?>"></div>
                                                <a class="url-class" href="<?php echo URL($lang.'/spart').'/'.$val->slug;?>"><?php echo $read_more ;?> <i class='bx bx-chevron-right'></i> </a>
                                            
                                            </div>
                                        </div>
                                <?php }?>
                                </div>
           
                            </li>
                            <li class="tab-pane content4 active" id="cat4">
                               <div class="row"  style="padding:0 !important;">
                                
                                <?php 
                                    $lang_code = app()->getLocale();
                                    $motors = getSpartall();
                                    foreach($motors as $val){
                                ?>
                            
                                    <div class="col-sm-3 md-prod">
                                        
                                            <div class="inner-model">
                                                
                                                <h4 class="blog-title spare-type">
                                                    <?php echo $val->title; ?>
                                                </h4>
                                                <div class="blog-post-list-thumb"><img src="<?php echo myUpload().$val->thumbnail ;?>"></div>
                                                <a class="url-class" href="<?php echo URL($lang.'/spart').'/'.$val->slug;?>"><?php echo $read_more ;?> <i class='bx bx-chevron-right'></i> </a>
                                            
                                            </div>
                                        </div>
                                <?php }?>
                                </div>
           
                            </li>
                        
                        </ul>  
                      
                    </div>
                    
                </div>

        </div>  

    </div>
        
</div>


<?php } ?>    

<script>

    $( ".tabs-left li.cat1" ).click(function() {
      $('.content1').addClass( "appear active", 1000, "easeInQuad" );
      $('.content2').removeClass( "active");
      $('.content3').removeClass( "active");
      $('.content4').removeClass( "active");
    });
    
    $( ".tabs-left li.cat2" ).click(function() {
      $('.content2').addClass( "appear active", 1000, "easeInQuad" );
      $('.content1').removeClass( "active");
      $('.content3').removeClass( "active");
      $('.content4').removeClass( "active");
    });
    
    $( ".tabs-left li.cat3" ).click(function() {
      $('.content3').addClass( "appear active", 1000, "easeInQuad" );
      $('.content4').removeClass( "active");
      $('.content1').removeClass( "active");
      $('.content2').removeClass( "active");
    });

    $( ".tabs-left li.all-model1" ).click(function() {
      $('.content4').addClass( "appear active", 1000, "easeInQuad" );
      $('.content3').removeClass( "active");
      $('.content2').removeClass( "active");
      $('.content1').removeClass( "active");
    });     

</script>

<?php require(base_path().'/themes/giant/footer.php'); ?>