<?php require(base_path().'/themes/giant/header.php'); ?>

<style type="text/css">

    .content-blog .card-body.content-promotion { padding: 0 10px 20px !important; }
    .content-blog .blog-post-list-thumb {height: auto !important;}
	.well.well-sm {padding: 30px 0;padding-right: 15px;}
	a.btn.btn-default.btn-sm {color: #018142;font-size: 28px;padding: 0 !important;}
    .glyphicon { margin-right:5px; }
    .thumbnail{margin-bottom: 20px;padding: 0px;-webkit-border-radius: 0px;-moz-border-radius: 0px;border-radius: 0px;}
    .list-group-item{float: none;width: 100%;background-color: #fff;margin-bottom: 10px;padding:0;border: none;}
    .item.list-group-item .list-group-image{margin-right: 10px;}
    .item.list-group-item .thumbnail{margin-bottom: 0px;}
    .item.list-group-item .caption{padding: 9px 9px 0px 9px;}
    .item.list-group-item:nth-of-type(odd){background: #eeeeee;}
    .item.list-group-item:before, .item.list-group-item:after{display: table;content: " ";}
    .item.list-group-item img{float: left;}
    .item.list-group-item:after{clear: both;}
    .list-group-item-text{margin: 0 0 11px;}
    .row.list-group.grid-group-item {flex-direction: inherit;}
    .list-group-item .thumbnail img {min-width: 50% !important;}
    .list-group-item .blog-post-list-thumb {height: unset !important;background-size: cover;min-width: 45%;}
    .list-group-item .item.col-xs-4.col-lg-4 {display: flex;max-width: 100%;}
    .list-group-item .item.col-xs-4.col-lg-4 .thumbnail {width: auto;}
    .list-group-item .container.my-2.t1 {grid-template-columns: auto!important;}
    .list-group-item .card {flex-direction: unset;margin-bottom:15px;}
    .text-center.pagination {justify-content: center;padding: 35px 0;}
    a.btn-outline.active {background: #ee1a29 !important;color: #fff;}
    a.btn-outline {transform: rotate(45deg);color:#fff;background: #3a3a3a !important;border-radius: 0 !important;display: inline-flex;align-items: center;justify-content: center;padding: 4px;margin: 15px;width: 30px;}
    a.btn-outline.active:focus{display:none;}
    a.btn-outline span {transform: rotate( -45deg);}
    .card.box-promotion i {color: #018142;font-size: 15px;margin-right: 5px;}
    .card.box-promotion {margin-right: 15px;margin-bottom:15px;overflow:hidden;}
    .card.box-promotion a {overflow:hidden;}
    .row.list-items{margin:0;opacity: 1;transform: matrix(1, 0, 0, 1, 0, 0);}
    .side-blog {min-width: 110px !important;height: 80px !important;background-size: cover !important;border-radius: 5px;margin: 0 8px !important;}
    .col-md-12.blogShort {display: flex;padding: 0;}
    .col-md-12.blogShort h4 a{font-size: 14px;line-height: 20px;color:#fff;}
    .side-item {background: #018142;padding: 10px;border-radius: 5px;margin-top: 50px; padding-bottom:35px !important;}
    .side-item h1.amret-home-heading {color: #ffffff;}
    .side-item p.flex-text.date-time {color: #e0e0e0;}
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
    .card h4.blog-title a{
        line-height: 25px!important;
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
        font-size:16px;
        color: #040404;
        margin: 0px 0px 10px !important;
    }
    .card-body.content-promotion > a svg {
        vertical-align: middle;
        margin-left: 10px;
    }
    .card.box-promotion:hover .blog-post-list-thumb {
        transform: rotate(2deg) scale(1.2);
        transition: 0.3s;
        filter: drop-shadow(1px 2px 3px #00000030);
    }
    .card.box-promotion .blog-post-list-thumb {
        transition: 0.3s;
    }
    .card.box-promotion:hover .blog-post-list-thumb:before {
        opacity: 1;
        transition: all 0.9s cubic-bezier(0.14, 0.82, 0.58, 0.64);
    }
    .card.box-promotion .blog-post-list-thumb:before {
        content: '';
        width: 120px;
        height: 120px;
        background: #ec1b30;
        border-radius: 50%;
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
        transform: translate(-50% , -50%);
        opacity: 0;
    }
</style>


<?= $body ?>

<div class="row">
    <div class="col-sm-12" style="padding:0;">
       
    
    <div id="products" >
        
    <div class="container my-2 t1" style=" display: grid; grid-template-columns:33.333333% 33.333333% 33.333333%; padding:0;">    
        
<?php

    $news = getNews();
    $lang_code = app()->getLocale();
    $read_more = 'Read More';
    if($lang_code == 'kh'){
        $read_more = 'អានបន្ថែម';  
    }
    $slug = request()->segment(2);
    if($slug != 'news'){
        $slug = 'news';
    }
    
    
    foreach ($news as $value) {?>
 <div class="row list-items">
    <div class="col-sm-12" style="padding:0;">
        <div class="caption content-blog card box-promotion customCard">
            <a href="<?=URL('').'/'.$lang_code.'/'.$value->slug;?>"><div class="blog-post-list-thumb">
                <img src="<?php echo myupload().$value->thumbnail ;?>">
            </div></a>
                <div class="card-body content-promotion">
                    <p class="flex-text date-time"><?php echo $value->created_at->format('M d, Y') ;?></p> <p class="card-text"><?php echo $value->tag; ?></p>
                    <h4 class="blog-title"><a href="<?=URL('').'/'.$lang_code.'/'.$value->slug;?>"><?php echo $value->title; ?></a></h4>
                    <p class="card-text"><?=Str::of($value->meta_description)->limit(90)?></p><br>
                    <a class="url-class" href="<?=URL('').'/'.$lang_code.'/'.$value->slug;?>"><?=$read_more?><svg xmlns="http://www.w3.org/2000/svg" width="40" height="14.063" viewBox="0 0 56.793 14.063">
  <g id="Group_285" data-name="Group 285" transform="translate(-268.5 -1447.969)">
    <line id="Line_25" data-name="Line 25" x2="50" transform="translate(268.5 1455.5)" fill="none" stroke="#000" stroke-width="2"/>
    <path id="FontAwsome_caret-right_" data-name="FontAwsome (caret-right)" d="M0,120.413V108.246a.946.946,0,0,1,1.614-.669L7.7,113.661A.946.946,0,0,1,7.7,115l-6.084,6.084A.946.946,0,0,1,0,120.413Z" transform="translate(317.318 1340.671)"/>
  </g>
</svg>
</a>
                </div>
        </div>
    </div>
</div>

   <?php } ?>    
</div>
    
    </div>

</div>

</div>

<script>

$(document).ready(function() {
    $('#list').click(function(event){event.preventDefault();$('#products').addClass('list-group-item');});
    $('#grid').click(function(event){event.preventDefault();$('#products').removeClass('list-group-item');$('#products').addClass('grid-group-item');});
});


$(document).ready(function() {
  $('.t1').after('<div id="nav" class="text-center pagination"></div>');
  var rowsShown = 9;
  var rowsTotal = $('.t1 .row').length;
  var numPages = rowsTotal / rowsShown;
  for (i = 0; i < numPages; i++) {
    var pageNum = i + 1;
    $('#nav').append('<a href="#" class="btn-outline" rel="' + i + '"><span>' + pageNum + '</span></a> ');
  }
  $('.t1 .row').hide();
  $('.t1 .row').slice(0, rowsShown).show();
  $('#nav a:first').addClass('active');
  $('#nav a').bind('click', function(e) {
  	e.preventDefault();
    $('#nav a').removeClass('active');
    $(this).addClass('active');
    var currPage = $(this).attr('rel');
    var startItem = currPage * rowsShown;
    var endItem = startItem + rowsShown;
    $('.t1 .row').css('opacity', '1').hide().slice(startItem, endItem).
    css('display', 'flex').animate({
      opacity: 1
    }, 300);
  });
});

</script>

<?php require(base_path().'/themes/giant/footer.php'); ?>