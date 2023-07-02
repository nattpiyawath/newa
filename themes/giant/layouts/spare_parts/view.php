<?php require(base_path().'/themes/giant/header.php'); ?>

<style type="text/css">
	@media screen and (min-width: 1800px){
		.page-title-area {height: 400px;}
	}
	
	
</style>

<div class="page-title-area title-bg-one">
   <div class="title-shape">

   <div class="d-table">
      <div class="d-table-cell">
         <div class="container">
            <div class="title-content">
               <h2><?php echo pageTitle();?></h2>
               <ul>
                  <li>
                     <a href="index.html">Home</a>
                  </li>
                  <li>
                     <i class="bx bx-chevron-right"></i>
                  </li>
                  <li>
                     <span><?php echo pageTitle();?></span>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
</div>

    <div class="details-item" phpb-blocks-container><?= $body ?></div>
<div class="container mt-5">
  <div class="row">


<?php

$lang = Helper::getSparts();
// // echo $lang;
// $url = myUpload(); 

foreach ($lang as $value) {?>
    <div class="col-sm-2 list-items" style="padding:0;">
        <div class="card p-3">

        <h4 class="blog-title"><?php echo $value->title; ?></h4>

            <div class="d-flex flex-row mb-3">
                <img src="<?php echo $value->thumbnail ;?>" alt="Shape">
            </div>
            
            
        </div>
        
        <div class="card-body content-promotion">
            
        </div>
        
    </div>

   <?php } ?> 

</div>

</div>


<?php require(base_path().'/themes/giant/footer.php'); ?>