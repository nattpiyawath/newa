<?php require(base_path().'/themes/giant/header.php'); ?>

<style type="text/css">

.body-news-detial p {
    margin-top: 30px;
    line-height: 30px;
}
.body-news-detial h1 {
    font-size: 20px;
    line-height: 30px;
}
.row.body-news-detial {
    padding-top: 3em;
    padding-bottom: 0em;
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
    .body-news-detial {
        display: grid!important;
        padding: 0 4%;
    }
    .blog-content .post-heading {
        display: flex;
    }
    .blog-content .post-heading li i {
        background: #ed1a28;
        padding: 10px;
        font-size: 22px;
        color: #fff;
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


<?php } ?>  

<?php require(base_path().'/themes/giant/footer.php'); ?>