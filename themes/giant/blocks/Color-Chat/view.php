<?php 
  $lang_code = app()->getLocale();
    $sel_color = 'SELECT YOUR COLOR';
    if($lang_code == 'kh'){
        $sel_color = 'ជំរើសពណ៌';
    }
  
?>

<style>
    
    .buttons-wrapper {max-width: 200px;width: 100%;margin: 0 auto;display: flex;justify-content: space-between;}
    .button {
        position: relative;
        -webkit-appearance: none;
          -moz-appearance: none;
                appearance: none;
        border: none;
        padding: 40px 7px 5px;
        cursor: pointer;
    }
    .button::before, .button::after {
        content: "";
        position: absolute;
        top: 10px;
        left: 50%;
        border-left: 3px solid #000;
        border-top: 3px solid #000;
        width: 20px;
        height: 20px;
        transform: translate(-45%) rotate(-45deg);
    }
    .button::after {transform: translate(5%) rotate(-45deg);}    
    
</style>

<div class="color-finding-love">
        <div class="container">
            <div class="row select-model-color">
                <div class="col-md-6 model-color-left" >
                    <br><br>
                    
                    <div class="select-color">
                        <h5><?php echo $sel_color?></h5><br>
                            <?php
                                $lang_code = app()->getLocale();
                                $id = pageID();
                                //echo $id;
                                $getColor = getColor($id);
                                //print_r($gall);
                                
                                if(!empty($getColor)){ 
                                    $colour = collect(json_decode($getColor))->sortByDesc('color_order')->reverse()->toArray();
                                    foreach($colour as $index => $val){ ?>  
                                    <input type="button" <?php if($val->color_order == 1){echo 'class="primary-color"';}?> data-url="<?=myUpload().$val->image_url;?>" 
                                    data-related-color="<?=$val->related_color;?>" data-color-code="<?=$val->color_code;?>" style="background:<?=$val->color_code;?>;"/>
                                <?php }
                                } else{echo 'No Color to Show!';}
                            ?>
                    </div>
                </div>
                <div class="col-md-6 model-color-right">
                    <div class="preview-color fadeinTextup">
                        <img id="my-image-preview" class="" src="#"/>
                    </div>
                </div>
            </div>
        </div>
    </div>


<script>
        $('.select-color input').on('click', function(){
           var img = $(this).attr('data-url');
           var color_code = $(this).attr('data-color-code');
           var related_color = $(this).attr('data-related-color');
           var background = 'linear-gradient(to right, '+related_color+' , '+color_code+')';
           $('.smart-feature').css('background-image', background);
           $('#my-image-preview').attr('src', img);
            
        });
        
        $(".select-color input").click(function()  {
            var clickedButton = $('#my-image-preview');
            var clickedButton1 = $('.preview-color');
            if (clickedButton.hasClass('active')) {
                $('#my-image-preview').removeClass('active');
                $('.preview-color').addClass('active1').load();
                return false;
            }
            clickedButton.addClass('active').load();
            clickedButton1.removeClass('active1').load();
        });

        
        var primary = $('.primary-color').attr('data-color-code');
        var primary2 = $('.primary-color').attr('data-related-color');
        var background2 = 'linear-gradient(to right, '+primary2+' , '+primary+')';
        $('.smart-feature').css('background-image', background2);
        
        var image2 = $('.primary-color').attr('data-url');
        $('#my-image-preview').attr('src', image2);
		
    </script>