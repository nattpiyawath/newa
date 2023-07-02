<?php require(base_path().'/themes/giant/header.php'); ?>

<style type="text/css">
.caption.content-blog svg {
    vertical-align: middle;
    margin-left: 10px;
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
a.new-home-link {
    color: #3a3a3a;
    text-decoration: none;
}
a.url-class {
    color: black;
    line-height: 35px;
}
	@media screen and (min-width: 1800px){
		.page-title-area {height: 400px;}
	}
	h1.share-socail {
        color: #525252;
        font-size: 19px;
        font-weight: 500;
        padding-bottom: 15px;
    }
    .blog-content ul.social-prod li {
        list-style: none;
        font-size: 22px;
        color: #fff;
        transform: rotate( 45deg);
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 10px;
        margin: -20px 25px;
        width: 40px;
    }
    .blog-content ul.social-prod i:before {
        transform: rotate( -45deg);
        display: block;
    }
    .blog-content .post-heading li i {
        background: #ed1a28;
        padding: 10px;
        font-size: 22px;
        color: #fff;
    }
    .blog-content .post-heading {
        display: flex;
    }
    .body-news-detial h1 {
        font-size: 20px;
        line-height: 30px;
    }
    .body-news-detial .col-sm-3 {
        padding: 2% 45px ;
    }
    .body-news-detial p {
        margin-top: 30px;
        line-height: 30px;
    }
    .body-news-detial {
        border-bottom: unset !important;
    }
    .blog:hover .blog-post-list-thumb:before {
    opacity: 1;
    transition: all 0.9s cubic-bezier(0.14, 0.82, 0.58, 0.64);
}
.blog .blog-post-list-thumb:before {
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
.blog .owl-item:hover .blog-post-list-thumb {
    transform: scale(1.05);
    transition: 0.3s;
    filter: drop-shadow(1px 2px 3px #00000030);
}
.blog .owl-item .blog-post-list-thumb {
    transition: 0.3s;
}
.thumbnail.item.customCard.is-showing {
    overflow: hidden;
}
.video-last {
    padding-top: 3%;
}
</style>

<?php if(isset($_GET['page'])): ?>


<?php else: ?>

<?php endif; ?>

<?= $body ?>


<?php 
$currentLocale = app()->getLocale();

if (isset($_GET['page'])){
   echo '';
} 

else{ 
    $lang_code = app()->getLocale();
    $title_relate = 'OTHER RELATED NEWS';
    $read_more = 'Read More';
    $share = 'Share on Socail';

    if ($lang_code == 'kh'){
        $title_relate = ' ព័ត៌មានពាក់ព័ន្ធផ្សេងទៀត ';
        $read_more = ' អានបន្ត';
        $share = 'ចែករំលែកនៅលើសង្គម';

    } else{echo '';}

?>


<div class="row body-news-detial post-single">
      <div class="row" style="padding:0;">
        <div class="col-lg-12 blog-content">
                    <div class="post-heading">
                        <h1 class="share-socail"><?php echo $share ;?></h1>
                        <ul data-raw-content="true" class="social-prod">
                            <li class="ico"><a href="#" target="_blank"><i class="bx bxl-facebook"></i></a></li>
                          
                        </ul>
                    </div>
        </div>
          </div>
</div>


<script>
jQuery(document).ready(function ($) {
	var owl = $("#owl-demo-2");
	owl.owlCarousel({
		autoplay: true,
		autoplayTimeout: 8000,
		autoplayHoverPause: true,
		dots:false,
		items: 8,
		loop: true,
		center: false,
		rewind: false,
		mouseDrag: true,
		touchDrag: true,
		pullDrag: true,
		freeDrag: false,
		margin: 0,
		stagePadding: 0,
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
				items: 3,
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


<?php } ?>    
<?php require(base_path().'/themes/giant/footer.php'); ?>