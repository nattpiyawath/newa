<?php if(isset($_GET['page'])){
    echo '<h1 style="text-align:center;">News Safety</h1>';
    echo '<style>.full-height{height:100%!important;}</style>';
} else{ echo '<style>.full-height{height:100%!important;}';
?>



<style>

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
</style>


<section>
	<div class="container-fluid container blog" style="padding:0;">
		<div id="owl-demo-2" class="owl-carousel owl-theme">
		   
		<?php
                                                                    
        $event = getEvents();
        $lang_code = app()->getLocale();
        
        $read_more = 'Read More';
        if($lang_code == 'kh'){
            $read_more = 'អានបន្ថែម';  
        }
    
        foreach ($event as $value) {?>
        <article class="thumbnail item customCard ">
             <a href="<?php echo URL('en/').'/'.$value->slug?>" class="url-class" >
                <div class="blog-post-list-thumb">
                    <img src="<?php echo myupload().$value->thumbnail ;?>">
                </div>
                 </a>
                <div class="caption content-blog">
                    <p class="flex-text date-time"><?=$value->created_at->format('M d, Y')?></p>
                    
                    <h4 class="blog-title"><?=$value->title?></h4>
                    <p class="descript"><?=$value->meta_description?></p>
                    <a href="<?php echo URL('en/').'/'.$value->slug?>" class="url-class" ><?=$read_more?><svg xmlns="http://www.w3.org/2000/svg" width="40" height="14.063" viewBox="0 0 56.793 14.063">
  <g id="Group_285" data-name="Group 285" transform="translate(-268.5 -1447.969)">
    <line id="Line_25" data-name="Line 25" x2="50" transform="translate(268.5 1455.5)" fill="none" stroke="#000" stroke-width="2"/>
    <path id="FontAwsome_caret-right_" data-name="FontAwsome (caret-right)" d="M0,120.413V108.246a.946.946,0,0,1,1.614-.669L7.7,113.661A.946.946,0,0,1,7.7,115l-6.084,6.084A.946.946,0,0,1,0,120.413Z" transform="translate(317.318 1340.671)"/>
  </g>
</svg>
</a>
                </div>
           
        </article>
        <?php }?>
		</div><!-- #owl-demo-2 -->
	</div><!-- .container -->
</section><br><br>

<script>
jQuery(document).ready(function ($) {
	var owl = $("#owl-demo-2");
	owl.owlCarousel({
		autoplay: false,
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
				items: 1,
				nav: true
			},
			768: {
				items: 1,
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