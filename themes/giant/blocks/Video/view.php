<?php
    $page_id = pageID();
    //$lang = session()->get('lang_code');
    
    if(isset($_GET['page'])){
        $page_id = $_GET['page'];
    }
    if(isset($_GET['lang'])){
        $lang = $_GET['lang'];
    }
    
    $check_video = \DB::table('block_setting')->where('page_id', $page_id)->where('block_name', 'Video')->first();
    
    if($check_video === null){
        $youtube_id = 'LXb3EKWsInQ';
        $layout = 'single';
        $cover = url('').'/assets/pagebuilder/images/sample-cover-video.jpg';
        $cover_mobile = url('').'/assets/pagebuilder/images/image-placeholder.png';
    } else{
        $youtube_id = $check_video->show_number;
        $layout = $check_video->order_by;
        $cover = $check_video->sort_by;
        $cover_mobile = $check_video->sort_by_mobile;
    }

    if(isset($_GET['page']) && Auth::check()):?>

    <style>
        .frm-setting-video{min-width: 480px;margin-top: -15%;}
        .frm-setting-video form{padding: 16px;}
        .frm-setting-video{padding: 0;border: solid 1px #CCC;position: absolute;z-index: 9999;background: #fff;margin: 0 auto;left: 0;right: 0;width: 50%;}
        .setting-title{background: #3b97e2;color: #fff;display: -webkit-box;padding: 8px 14px;}
        .setting-left{width: 98%;}
        .close-block-setting:hover{cursor:pointer;}
        .msg-setting {background: #54c01a;color: #fff;padding: 10px;width: 36%;border-radius: 2px;position: absolute;z-index: 9999;margin: 0 auto;left: 0;right: 0;text-align: center;margin-top: 10px;}
        .video-note{font-size: 12px;color: #5b5b5b;}
        .news-setting-frm img{max-width:300px;}
        
    </style>
    <di class="feature-setting-video" style="background: #3b97e2;color: #fff;padding: 2px 9px;"><i class="fa fa-play"></i> Video Setting</di>
    <div class="frm-setting-video" style="display:none;">
        <div class="setting-title"><div class="setting-left"><i class="fa fa-play"></i> Video Setting</div><div class="close-block-setting">x</div></div>
        <form action="#" class="news-setting-frm">
            <?=csrf_field();?>
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 col-form-label">YouTube ID</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control youtube_id" id="inputEmail3" name="show_number" value="<?=$youtube_id?>" placeholder="Ex: xEPjeHrBXzY">
                </div>
              </div>
              
              <div class="form-group row">
                <label for="inputPassword3" class="col-sm-3 col-form-label">Video Thumbnail Desktop</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control cover_url" name="sort_by" value="<?=$cover?>" placeholder="image url"/>
                </div>
              </div>
              
              <div class="form-group row">
                <label for="inputPassword3" class="col-sm-3 col-form-label">Preview</label>
                <div class="col-sm-9">
                    <img class="img_preview" src="<?=$cover?>"/>
                </div>
              </div>
              
              <div class="form-group row">
                <label for="inputPassword3" class="col-sm-3 col-form-label">Video Thumbnail Mobile</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control cover_url_mobile" name="sort_by_mobile" value="<?=$cover_mobile?>" placeholder="image url"/>
                </div>
              </div>
              
              <div class="form-group row">
                <label for="inputPassword3" class="col-sm-3 col-form-label">Preview</label>
                <div class="col-sm-9">
                    <img class="img_preview_mobile" src="<?=$cover_mobile?>"/>
                </div>
              </div>
              
              <div class="form-group row">
                <label for="inputPassword3" class="col-sm-3 col-form-label">Layout</label>
                <div class="col-sm-9">
                    <select class="form-select block-order-by" name="order_by">
                        <option value="single" <?php if($layout == 'single') echo 'selected';?> >Single</option>
                    </select>
                </div>
              </div>
              
              <div class="form-group row">
                <div class="col-sm-6">
                    <button type="button" class="btn btn-secondary btn-sm news-cancel" style="margin-right:6px">Cancel</button>
                    <button type="button" class="btn btn-primary btn-sm video-setting-save">Save</button>
                </div>
              </div>
        </form>
        <div class="msg-setting" style="display:none;">Video setting updated.</div>
    </div>
    
    
    <div class="row latest-news">
        <img class="img_preview" src="<?=$cover?>" alt="watch video">
    </div>
    
    <script type="text/javascript">
        $(document).ready(function(){
            $('.feature-setting-video').on('click', function(){
               $('.frm-setting-video').fadeIn();
            });
            $('.close-block-setting, .news-cancel').on('click', function(){
               $('.frm-setting-video').fadeOut();
            });

            $(".video-setting-save").on('click', function(e){
                e.preventDefault();
                
                var CSRF_TOKEN = $("input[name=_token]").val();
                var page_id = '<?=$_GET["page"];?>';
                var youtube_id = $(".youtube_id").val();
                var layout = $(".block-order-by").val();
                var cover = $(".cover_url").val();
                var cover_mobile = $(".cover_url_mobile").val();
                $.ajax({
                    url: "<?=route('save_video_setting')?>",
                    type: 'POST',
                    headers: {
                          'X-CSRF-TOKEN': '<?=csrf_token()?>'
                        },
                    data: {_token: CSRF_TOKEN, page_id:page_id, show_number:youtube_id, order_by:layout, sort_by:cover, sort_by_mobile:cover_mobile},
                    dataType: 'JSON',
                    success: function (data) { 
                       //console.log(data);
                       $('.msg-setting').fadeIn();
                       $('.img_preview').attr('src', cover);
                       $('.img_preview_mobile').attr('src', cover_mobile);
                        
                        setTimeout(function() {
                            $('.msg-setting').fadeOut();
                        }, 3000);
                    }
                }); 
            });
       });    
       
    </script>
    
<?php else:?>
<!--Video Front-end -->

    <style>
        .blackOut {
            position: fixed;
            width: 100%;
            height: 100%;
            background-color: #000;
            z-index: 999999;
            top: 0;
            bottom: 0;
            display: none;
            left: 0;
            text-align: center;
        }
        
        .blackOut .popupAlignCenter {
          width: 100%;
          height: 100%;
          display: flex;
          align-items: center;
          justify-content: center;
        }
        
        .blackOut .popupAlignCenter .popUpWrapper {
          width: 80%;
          max-width: 1280px;
          max-height: 640px;
          background-color: #fff;
          z-index: 100;
        }
        
        .blackOut .popupAlignCenter .popUpWrapper button.videoClose {
          color: #999999;
          font-weight: 600;
          font-size: 22px;
          padding: 4px 10px;
          float: right;
          background: none;
          border: 0;
          cursor: pointer;
        }
        button.videoClose {
            float: right;
            margin: 10px;
            border-radius: 18px;
            background: #f00;
            /*border: solid 1px #f00;*/
            padding: 4px 10px;
            color: #fff;
        }
        .blackOut iframe {
            margin-top: 10%;
        }
        
        a.btn_play_video {
            text-align: center;
            opacity:0.8;
        }
        
        .play-btn {
            position: absolute;
            left: 47%;
            top: 42%;
        }
        
        .play-btn:hover{
            cursor:pointer;
        }
        
        i.fa.fa-play {
            font-size: 180%;
            color: #fff;
            border: 2px solid #fff;
            padding: 20px 22px;
            border-radius: 50px;
            background: #db2827;
        }
        
        .videoPopup {
            background: url('<?=url('').$cover?>');
            text-align: center;
            padding: 16% 0;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .videoPopup h3{
            text-shadow: 2px 3px 2px #686767;
            font-size: 30px;
            font-weight: 600;
            color: #fff;
        }
        .btn_play_video {
            color: #fff;
            padding: 6px 18px;
            border: solid 1px #CCC;
            border-radius: 10px;
            margin-top: 2px;
            display: -webkit-inline-box;
            background: #fff;
        }
        .btn_play_video:hover{cursor:pointer;}
        @media screen and (max-width: 768px){
            .videoPopup{
                background:url('<?=url('').$cover_mobile?>');
                padding: 20% 0;
                background-repeat: no-repeat!important;
                background-size: cover!important;
                max-height: 35rem;
                margin-top: 3rem;
            }
            
            .videoPopup h3{margin-top: 7.5rem;font-size: 2.4rem;}
            .blackOut iframe{    
                max-width: 100% !important;
                margin: 0px !important;
                height: 100% !important;
            }
            .blackOut {padding: 50% 0px;}
            button.videoClose {
                float: right;
                margin: 0 4px;
                border-radius: 4px;
                background: #f00;
                border: solid 1px #f00;
                padding: 0px 7px;
                color: #fff;
            }
        }
    </style>

    <div class="blackOut">
      <div class="popupAlignCenter">
        <!-- popup content populates here -->
      </div>
    </div>
    
    <div class="videoPopup" id="videoreview">
        <h3>Video Review</h3>
         <a class="btn_play_video">Watch The Video</a>
    </div>


    <script>
            $('.btn_play_video').on('click', function(){
                var videoUrl= 'https://www.youtube.com/embed/<?=$youtube_id?>';
                var screenSize= $(window).width();
                var heightOfVideo= screenSize * .3;
                var videoPop = '<div class="popUpWrapper">'+'<button type="button" class="videoClose">X</button>'+
                                    '<div id="videoWrap"">'+
                                    '<iframe width="50%" height="'+heightOfVideo+'" src="'+videoUrl+'" frameborder="0" allowfullscreen></iframe></div>'+
                                  '</div>';
                $('.blackOut').fadeIn();
                $('.blackOut').html(videoPop);
            });
            
            $('.blackOut').on('click', function(){
                 $('.blackOut').fadeOut();
                 $('.blackOut').html('');
            });
    </script>

<!--End Video Front-end-->
<?php endif;?>