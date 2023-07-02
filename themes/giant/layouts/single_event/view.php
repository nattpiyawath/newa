<?php require(base_path().'/themes/giant/header.php'); ?>

<style type="text/css">

	.blogShort {
        display: flex;
    }
    .side-blog {
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
        border-bottom-right-radius: 5px;
        border-bottom-left-radius: 5px;
        margin-top: 5px;
        margin-right: 5px;
        margin-bottom: 5px;
        margin-left: 5px;
        min-width: 110px !important;
        height: 80px !important;
        background-size: cover !important;
    }
    .blogShort h4 a {
        font-size: 15px;
        line-height: 20px;
        color:#fff;
    }
    .side-item p.flex-text.date-time {
        color: #e0e0e0;
    }
    .side-item {
        background: #018142;
        padding: 0 10px;
        border-radius: 5px;
        padding-bottom:35px;
        margin-top:45px;
    }
    .col-sm-4 h1.amret-home-heading{color:#fff;}
    h1.amret-home-heading {
        padding-bottom: 10px;
    }
    .blog-content-detail {
        margin-top: 20px;
    }
    .container.post-single {
        padding: 15px 0;
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
    .blog-content .date-time i {
        margin-right: 5px;
        color: #018142;
    }
    

h1.detail-post-title {
    color: #525252;
    font-size: 22px;
    font-weight: 600;
    padding-bottom: 15px;
}
.carousel {
	position: relative;
}
.carousel-item img {
	object-fit: cover;
	max-height: 660px;
}

#carousel-thumbs {
	background: #f0f0f0;
	padding: 0 50px;
}
#carousel-thumbs img:hover {
	opacity: 100%;
}

#carousel-thumbs img {
	opacity: 80%;
	border: 3px solid transparent;
	cursor: pointer;
}
#carousel-thumbs .selected img {
	opacity: 100%;
}

.carousel-control-prev,
.carousel-control-next {
	width: 50px;
}

.carousel-fullscreen-icon {
	position: absolute;
	top: 1rem;
	left: 1rem;
	width: 1.75rem;
	height: 1.75rem;
	z-index: 4;
	background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='rgba(255,255,255,.80)'  viewBox='0 0 16 16'%3E%3Cpath d='M1.5 1a.5.5 0 0 0-.5.5v4a.5.5 0 0 1-1 0v-4A1.5 1.5 0 0 1 1.5 0h4a.5.5 0 0 1 0 1h-4zM10 .5a.5.5 0 0 1 .5-.5h4A1.5 1.5 0 0 1 16 1.5v4a.5.5 0 0 1-1 0v-4a.5.5 0 0 0-.5-.5h-4a.5.5 0 0 1-.5-.5zM.5 10a.5.5 0 0 1 .5.5v4a.5.5 0 0 0 .5.5h4a.5.5 0 0 1 0 1h-4A1.5 1.5 0 0 1 0 14.5v-4a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v4a1.5 1.5 0 0 1-1.5 1.5h-4a.5.5 0 0 1 0-1h4a.5.5 0 0 0 .5-.5v-4a.5.5 0 0 1 .5-.5z' /%3E%3C/svg%3E");
}

.carousel-fullscreen-icon:hover {
	background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='rgb(255,255,255)' viewBox='0 0 16 16'%3E%3Cpath d='M1.5 1a.5.5 0 0 0-.5.5v4a.5.5 0 0 1-1 0v-4A1.5 1.5 0 0 1 1.5 0h4a.5.5 0 0 1 0 1h-4zM10 .5a.5.5 0 0 1 .5-.5h4A1.5 1.5 0 0 1 16 1.5v4a.5.5 0 0 1-1 0v-4a.5.5 0 0 0-.5-.5h-4a.5.5 0 0 1-.5-.5zM.5 10a.5.5 0 0 1 .5.5v4a.5.5 0 0 0 .5.5h4a.5.5 0 0 1 0 1h-4A1.5 1.5 0 0 1 0 14.5v-4a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v4a1.5 1.5 0 0 1-1.5 1.5h-4a.5.5 0 0 1 0-1h4a.5.5 0 0 0 .5-.5v-4a.5.5 0 0 1 .5-.5z' /%3E%3C/svg%3E");
}

.pause .carousel-pause-icon {
	position: absolute;
	top: 3.75rem;
	left: 1rem;
	width: 1.75rem;
	height: 1.75rem;
	z-index: 4;
	background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='rgba(255,255,255,.80)'  viewBox='0 0 16 16'%3E%3Cpath d='M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.25 5C5.56 5 5 5.56 5 6.25v3.5a1.25 1.25 0 1 0 2.5 0v-3.5C7.5 5.56 6.94 5 6.25 5zm3.5 0c-.69 0-1.25.56-1.25 1.25v3.5a1.25 1.25 0 1 0 2.5 0v-3.5C11 5.56 10.44 5 9.75 5z' /%3E%3C/svg%3E");
}
.pause .carousel-pause-icon:hover {
	background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='rgb(255,255,255)'  viewBox='0 0 16 16'%3E%3Cpath d='M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.25 5C5.56 5 5 5.56 5 6.25v3.5a1.25 1.25 0 1 0 2.5 0v-3.5C7.5 5.56 6.94 5 6.25 5zm3.5 0c-.69 0-1.25.56-1.25 1.25v3.5a1.25 1.25 0 1 0 2.5 0v-3.5C11 5.56 10.44 5 9.75 5z' /%3E%3C/svg%3E");
}

.play .carousel-pause-icon {
	position: absolute;
	top: 3.75rem;
	left: 1rem;
	width: 1.75rem;
	height: 1.75rem;
	z-index: 4;
	background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='rgba(255,255,255,.80)'  viewBox='0 0 16 16'%3E%3Cpath d='M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.79 5.093A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l3.5-2.5a.5.5 0 0 0 0-.814l-3.5-2.5z' /%3E%3C/svg%3E");
}

.play .carousel-pause-icon:hover {
	background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='rgb(255,255,255)'  viewBox='0 0 16 16'%3E%3Cpath d='M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.79 5.093A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l3.5-2.5a.5.5 0 0 0 0-.814l-3.5-2.5z' /%3E%3C/svg%3E");
}

#carousel-thumbs .carousel-control-prev-icon {
	background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='rgba(0,0,0,.60)' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E") !important;
}

#carousel-thumbs .carousel-control-next-icon {
	background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%60000' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E") !important;
}

.modal-content {
	border-radius: 0;
	background-color: transparent;
	border: none;
}
#lightbox-container-image img {
	width: auto;
	max-height: 520px;
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
    max-width: 87%;
}
.section-event-home .col-sm-2 {
    max-width: 13%;
}
.card {
  font-family: 'Heebo';
  --bg-filter-opacity: 0.3;
  background-image: linear-gradient(333deg, rgba(255,255,255,0) 0%, rgba(255,255,255,0) 31%, rgba(0,0,0,1) 100%), var(--bg-img);
  height: 22em;
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
    background-color: rgb(0 0 0 / 25%) !IMPORTANT;
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
    color: #fff;
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
span.type-page {
    text-transform: uppercase;
    font-weight: 600;
    color: #ec1b30;
    margin-left: 20px;
}
.slick-slide {
    display: none;
    float: left;
    height: unset !important; 
    min-height: 1px;
}
.gallery-slide {
    margin-top: 50px;
}
.slider.slider-nav.slick-slider img {
    width: 95%;
}

</style>

<div class="page-title-area title-bg-one">
   <div class="title-shape">
      <div class="cover-page cover-iagme-about-page" style="background:url(<?= myUpload().getImageheader($lang);?>);background-position: center;background-size: contain;">
   <div class="d-table">
      <div class="d-table-cell">
         <div class="container">
            <div class="title-content">
               <h2><?php echo pageTitle();?></h2>
              
            </div>
         </div>
      </div>
   </div>
</div></div></div>

<br><br><br>
<div class="container">
   <div class="row">
   <div class="post post-single">
        <h1 class="detail-post-title"><?php echo pageTitle();?></h1>
        <div class="date-type">
            <span class="post-single-date"><i class='bx bx-calendar'></i> <?php echo pageDate();?></span>
            <span class="type-page"><?php echo pageType();?></span>
        </div>    
</div>
</div>
<br><br>
<div class="row">
    <?= $body ?>
</div>
</div>

  
   <br><div class="container post-single">
      <div class="row">
        <div class="col-lg-12 blog-content">
                    <div class="post-heading">
                        <h1 class="share-socail">Share on Socail</h1>
                        <ul data-raw-content="true" class="social-prod">
                            <li class="ico"><a href="#" target="_blank"><i class="bx bxl-facebook"></i></a></li>
                          
                        </ul>
                    </div>
        </div>
          </div>
</div>


<h1 class="head-titel-page ">OTHER RELATED EVENTS</h1>
<div class="story owl-carousel owl-theme container">

    <?php

    $event = getEvents();
    $lang_code = app()->getLocale();
    foreach ($event as $value) {?>
     <div class="row list-items customCard">
    <div class="">
        <div class="event-postype">
    
  <div class="card-grid-space">
    <a class="card" href="<?=URL('').'/'.$lang_code.'/'.$value->slug;?>" style="--bg-img: url('<?php echo myupload().$value->thumbnail ;?>')">
    
        <p class="postype">Event</p>
        <h1 class="title-event"><?php echo $value->title; ?></h1>
        <p class="description-text fadein"><?php echo $value->meta_description; ?></p>
     
    </a>
  </div>
  
                    </div>
                </div>
            </div>
  
   <?php } ?>    
  

  
</div><br><br><br>

<script>
 $(document).ready(function(){
  $('.story').owlCarousel({
    center: false,
    items:4,
    dots:false,
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
            items:3,
         
        },
        1280:{
            items:4,
         
        }
    }
   
});
});


</script>
<script>
/*--------------*/
$("[id^=carousel-thumbs]").carousel({
	interval: false
});

/** Pause/Play Button **/
$(".carousel-pause").click(function () {
	var id = $(this).attr("href");
	if ($(this).hasClass("pause")) {
		$(this).removeClass("pause").toggleClass("play");
		$(this).children(".sr-only").text("Play");
		$(id).carousel("pause");
	} else {
		$(this).removeClass("play").toggleClass("pause");
		$(this).children(".sr-only").text("Pause");
		$(id).carousel("cycle");
	}
	$(id).carousel;
});

/** Fullscreen Buttun **/
$(".carousel-fullscreen").click(function () {
	var id = $(this).attr("href");
	$(id).find(".active").ekkoLightbox({
		type: "image"
	});
});

if ($("[id^=carousel-thumbs] .carousel-item").length < 2) {
	$("#carousel-thumbs [class^=carousel-control-]").remove();
	$("#carousel-thumbs").css("padding", "0 5px");
}

$("#carousel").on("slide.bs.carousel", function (e) {
	var id = parseInt($(e.relatedTarget).attr("data-slide-number"));
	var thumbNum = parseInt(
		$("[id=carousel-selector-" + id + "]")
			.parent()
			.parent()
			.attr("data-slide-number")
	);
	$("[id^=carousel-selector-]").removeClass("selected");
	$("[id=carousel-selector-" + id + "]").addClass("selected");
	$("#carousel-thumbs").carousel(thumbNum);
});



</script>

<?php require(base_path().'/themes/giant/footer.php'); ?>