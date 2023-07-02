<?php require(base_path().'/themes/giant/header.php'); ?>

<style type="text/css">
.event-postype{overflow: hidden;}
.event-postype:hover .card {
    transform: scale(1.05);
}

:root {
  --color: #3c3163;
  --transition-time: 0.5s;
}

.cards-wrapper {
  display: grid;
  justify-content: center;
  align-items: center;
  grid-template-columns: 33.3333333% 33.333333% 33.333333%;
  padding: 0 10px;
  margin: 0 auto;
  width: 100%;
}

.card {
  font-family: 'Heebo';
  --bg-filter-opacity: 0.3;
  background-image: linear-gradient(333deg, rgba(255,255,255,0) 0%, rgba(255,255,255,0) 31%, rgb(0 0 0 / 69%) 100%), var(--bg-img);
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
    background-color: rgb(0 0 0 / 24%) !IMPORTANT;
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
  transition: all 0.8s ease-out;
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
    .card-body.content-promotion > a svg {
        vertical-align: middle;
        margin-left: 10px;
    }
    .text-center.pagination {justify-content: center;padding: 35px 0;}
    a.btn-outline.active {background: #ee1a29 !important;color: #fff;}
    a.btn-outline {transform: rotate(45deg);color:#fff;background: #3a3a3a !important;border-radius: 0 !important;display: inline-flex;align-items: center;justify-content: center;padding: 4px;margin: 15px;width: 30px;}
    a.btn-outline.active:focus{display:none;}
    a.btn-outline span {transform: rotate( -45deg);}
    
    .card:hover p.description-text {
        visibility: visible;
        transition: 0.3s;
        font-weight: 500;
        transform: translateX(0px);
    }
    .card p.description-text {
        font-size: 15px;
        margin-top: 0.5em;
        visibility: hidden;
        transform: translateX(50px);
    }


</style>

<?php if(isset($_GET['page'])): ?>

<div class="page-title-area title-bg-one">
   <div class="title-shape">
      <div class="cover-page cover-iagme-about-page" style="background:url(<?= myUpload().getImageheader($lang);?>);">
   <div class="d-table">
      <div class="d-table-cell">
         <div class="container">
            <div class="title-content">
               <h2><?php echo pageTitle();?></h2>
               
            </div>
         </div>
      </div>
   </div>
</div>
</div>
</div>
<?php else: ?>

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
<?php endif; ?>

<div class="row">
    <div class="col-sm-12">
    
    
    <div id="products" ><br><br><br>
        
    <div class="container my-2 t1">    

          
<section class="cards-wrapper">
    
    <?php

    $event = getEvents();
    $lang_code = app()->getLocale();
    foreach ($event as $value) {?>
     <div class="row list-items">
    <div class="col-sm-12" style="padding:10px;">
        <div class="event-postype customCard">
    
  <div class="card-grid-space">
    <a class="card" href="<?=URL('').'/'.$lang_code.'/'.$value->slug;?>" style="--bg-img: url('<?php echo myupload().$value->thumbnail ;?>')">
    
        <p class="postype">Event</p>
        <h1 class="title-event"><?php echo $value->title; ?></h1>
        <p class="description-text"><?php echo $value->meta_description; ?></p>
     
    </a>
  </div>
  
                    </div>
                </div>
            </div>
  
   <?php } ?>    
  
</section>
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
  var rowsShown = 8;
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