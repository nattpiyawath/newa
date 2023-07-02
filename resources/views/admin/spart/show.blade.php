<?php require(base_path().'/themes/giant/header.php'); ?>

<style type="text/css">

@media screen and (max-width:414px){
    .cover-page.cover-iagme-about-page {
        height: 180px!important;
    }
}
h1.stitle {
    font-size: 26px;
    font-weight: 600;
}
p.s-price {
    text-align: right;
}
.row.section-vdo .col-sm-12 {
    padding: unset;
}

@media screen and (min-width: 320px) and (max-width: 699px){
    
    .row.section-vdo p {
        height: 40vh !important;
    }
    .row.section-desc-spart .col-sm-4 {
        width: 25%;
    }
    .row.section-desc-spart .col-sm-8 {
        width: 75%;
    }   
    .section-desc-spart {
        padding: 70px 0px 0px !important;
    }
    
}
</style>

    <!-- Spare Pare Detail -->

<div class="container content-single-career">
    
        <div class="row section-desc-spart">
            
            <div class="col-sm-8">
                <h1 class="stitle">{!! $sparts->title !!}</h1>
            </div>
            <div class="col-sm-4">
                <p class="s-price">{!! $sparts->sprice !!}</p>
            </div>
            
            <div class="col-sm-12">
                <div class="career-content">
                    <img class="cover-image" id="cover-image" height="100%" src="{{$myStorage.$sparts->header_img}}"/> 
                </div>
            </div>
    
        </div>

    <!--    <div class="row section-vdo">-->
            
    <!--        <h1 class="head-titel-page1"> Video </h1>-->

    <!--        <div class="col-sm-12">-->
    
    <!--            {!! $sparts->details !!}-->
    
    <!--        </div>-->

    <!--</div>-->

         <br>
    
        <div class="row relate-spare-part">

    
<style>


.row.section-vdo p {
    height: 100vh;
} 

    .container.sparts .owl-dots {
    display: none;
}
.container-fluid.container.sparts {
    padding-bottom: 60px;
    padding-right:0;
    padding-left:0;
}
.carousel-showmanymoveone
{
  .carousel-control
  { 
    width: 4%;
    background-image:none;

    &.left 
    {
      margin-left:15px;
    }

    &.right 
    {
      margin-right:15px;
    }
  }

  .cloneditem-1, 
  .cloneditem-2, 
  .cloneditem-3
  {
    display: none;
  }

  .carousel-inner
  {
    @media all and (min-width: 768px)
    {
      @media (transform-3d), (-webkit-transform-3d)
      {
        > .item.active.right,
        > .item.next
        { 
          transform: translate3d(50%, 0, 0);  
          left: 0;
        }

        > .item.active.left,
        > .item.prev
        { 
          transform: translate3d(-50%, 0, 0);
          left: 0;
        }

        > .item.left,
        > .item.prev.right,
        > .item.active
        {
          transform: translate3d(0, 0, 0);
          left: 0;
        }    
      } 

      > .active.left,
      > .prev
      {
        left: -50%;
      }

      > .active.right,
      > .next
      {
        left:  50%;
      }

      > .left,
      > .prev.right,
      > .active
      {
        left: 0;
      }

      .cloneditem-1 
      {
        display: block;
      }
    }

    @media all and (min-width: 992px)
    {    
      @media (transform-3d), (-webkit-transform-3d)
      {
        > .item.active.right,
        > .item.next
        { 
          transform: translate3d(25%, 0, 0);  
          left: 0;
        }    

        > .item.active.left,
        > .item.prev
        { 
          transform: translate3d(-25%, 0, 0);
          left: 0;
        }

        > .item.left,
        > .item.prev.right,
        > .item.active
        {
          transform: translate3d(0, 0, 0);
          left: 0;
        }
      }

      > .active.left,
      > .prev
      {
        left: -25%;
      }

      > .active.right,
      > .next
      {
        left:  25%;
      }

      > .left,
      > .prev.right,
      > .active
      {
        left: 0;
      }

      .cloneditem-2, 
      .cloneditem-3
      {
        display: block;
      }
    }    
  }
}


.owl-theme .owl-dots .owl-dot span {
    position: relative;
    -webkit-box-flex: 0;
    -ms-flex: 0 1 auto;
    flex: 0 1 auto;
    width: 30px;
    height: 3px;
    margin-right: 3px;
    margin-left: 3px;
    text-indent: -999px;
    background-color: rgb(255 203 5);
}

h4.blog-title.spare-type {
    font-size: 18px;
    font-weight: 600;
    color: #545454;
    margin-bottom: 0px;
}
.card-body.content-promotion > a svg {
    vertical-align: middle;
    margin-left: 10px;
}
p.card-text.spare-title {
    font-weight: 500;
    color: #ec1b30;
}
.section-desc-spart .career-content img {
    height: auto;
    width: 100%;
}

.caption.content-blog.box-spare a.url-class {
    color: rgb(76, 76, 76);
    font-weight: 600;
    transition-duration: 0.4s;
    transition-timing-function: cubic-bezier(0.4, 0, 1, 1);
    transition-delay: 0s;
    transition-property: all;
    background-image: initial;
    background-position-x: initial;
    background-position-y: initial;
    background-size: initial;
    background-repeat-x: initial;
    background-repeat-y: initial;
    background-attachment: initial;
    background-origin: initial;
    background-clip: initial;
    background-color: rgba(0, 0, 0, 0.08);
    padding-top: 8px;
    padding-right: 20px;
    padding-bottom: 8px;
    padding-left: 20px;
    border-top-left-radius: 50px;
    border-top-right-radius: 50px;
    border-bottom-right-radius: 50px;
    border-bottom-left-radius: 50px;
    box-shadow: rgb(0 0 0 / 10%) 0px 0px 3px;
}

.caption.content-blog.box-spare a.url-class:hover {
    color: rgb(255, 255, 255);
    margin-left: 8px;
    transition-duration: 0.4s;
    transition-timing-function: cubic-bezier(0.4, 0, 1, 1);
    transition-delay: 0s;
    transition-property: all;
    background-image: initial;
    background-position-x: initial;
    background-position-y: initial;
    background-size: initial;
    background-repeat-x: initial;
    background-repeat-y: initial;
    background-attachment: initial;
    background-origin: initial;
    background-clip: initial;
    background-color: rgb(236, 25, 47);
}
.caption.content-blog.box-spare a.url-class:hover {
    color: #ffffff;
    margin-left: 8px;
    transition: all 0.4s cubic-bezier(0.4, 0, 1, 1);
    background: #ec192f;
}

.card .box-spare {
    border-radius: unset;
    filter: drop-shadow(2px 3px 4px #00000020);
    height: 100%;
    justify-content: center;
}
.caption.content-blog {
    text-align: left;
    color: #3a3a3a;
    border: 1px solid rgba(0,0,0,.125);
}

</style>


<?php 
$currentLocale = app()->getLocale();

if (isset($_GET['page'])){
   echo '';
} 

else{ 
    $lang_code = app()->getLocale();
    $title_relate = 'RELATED SPARE PARTS';
    $read_more = 'Read More';

    if ($lang_code == 'kh'){
        $title_relate = ' គ្រឿងបន្លាស់ដែលទាក់ទង ';
        $read_more = ' អានបន្ត';

    } else{echo '';}

?>





<?php

        $lang = app()->getLocale();
        $url = myUpload(); 
        $slug = request()->segment(2);
        if($slug != 'spare-part'){
            $slug = 'spare-part';
        }
        
        $cat = 0;
        $dist = 0;

        if (isset($_GET['sparts_cate'])){
            $dist = $_GET['sparts_cate'];
        }
        
        if (isset($_GET['cat']) && $_GET['cat'] > 0){
            $cat = $_GET['cat'];
            $mers = getFilterSpartCat($cat);
        } else {
            $mers = getSpartCat();
        }
?>

<section>
	<div class="container-fluid container sparts">
	    
	    <h1 class="head-titel-page1"><?php echo $title_relate ;?></h1>
	    
		<div id="owl-demo-2" class="owl-carousel owl-theme">

<?php
        
        $url = myUpload(); 
        
        foreach ($mers as $val) {
            $cat = $val->id;
            
                        $mers_filter = getAll_Spart_Fitlers($cat);
                        foreach ($mers_filter as $value2){
                    ?>
    

        <div class="caption content-blog card box-spare">
           
                <div class="card-body content-promotion">
                    <p class="card-text spare-title"><?=$val->sparts_cate?></p>
                    <h4 class="blog-title spare-type"><?php echo $value2->title; ?></h4>
                     <div class="blog-post-list-thumb"><img style=" padding:30px;" src="<?php echo myUpload().$value2->thumbnail ;?>"></div>
                     
<a class="url-class" href="<?php echo URL($lang.'/spart').'/'.$value2->slug;?>"><?php echo $read_more ;?></a>
                </div>
                
                 
        </div>
  
 <?php }  } ?>

		
		

		</div><!-- #owl-demo-2 -->
	</div><!-- .container -->
</section>

<script>
jQuery(document).ready(function ($) {
	var owl = $("#owl-demo-2");
	owl.owlCarousel({
		autoplay: true,
		autoplayTimeout: 7000,
		autoplayHoverPause: true,
		items: 8,
		loop: true,
		center: true,
		rewind: false,
		mouseDrag: true,
		touchDrag: true,
		pullDrag: true,
		freeDrag: false,
		margin: 10,
		stagePadding: 10,
		merge: false,
		mergeFit: true,
		autoWidth: false,
		startPosition: 0,
		rtl: false,
		smartSpeed: 250,
		fluidSpeed: false,
		dragEndSpeed: false,
		responsive: {
			0: {
				items: 1,
				//== nav: true
				dots: false,

			},
			480: {
				items: 2,
				nav: true
			},
			768: {
				items: 3,
				// nav: true,
				loop: true
			},
			992: {
				items: 4,
				// nav: true,
				loop: true
			}
		},
		responsiveRefreshRate: 200,
		responsiveBaseElement: window,
		fallbackEasing: "swing",
		info: false,
		nestedItemSelector: false,
		itemElement: "div",
		stageElement: "div",
		refreshClass: "owl-refresh",
		loadedClass: "owl-loaded",
		loadingClass: "owl-loading",
		rtlClass: "owl-rtl",
		responsiveClass: "owl-responsive",
		dragClass: "owl-drag",
		itemClass: "owl-item",
		stageClass: "owl-stage",
		stageOuterClass: "owl-stage-outer",
		grabClass: "owl-grab",
		autoHeight: false,
		lazyLoad: false
	});

	$(".next").click(function () {
		owl.trigger("owl.next");
	});
	$(".prev").click(function () {
		owl.trigger("owl.prev");
	});
});

</script>
    

</div>

</div>

<?php require(base_path().'/themes/giant/footer.php'); ?>
<?php } ?>    

</body>
</html>