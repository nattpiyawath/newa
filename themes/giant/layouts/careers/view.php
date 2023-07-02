<?php require(base_path().'/themes/giant/header.php'); ?>



<div class="page-title-area title-bg-one">
   <div class="title-shape">
      <img src="<?= myUpload().getImageheader($lang);?>" alt="Shape">
   </div>
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


<?= $body ?>

<?php require(base_path().'/themes/giant/footer.php'); ?>