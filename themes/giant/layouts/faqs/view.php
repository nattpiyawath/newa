<?php require(base_path().'/themes/giant/header.php'); ?>

<style type="text/css">
	@media screen and (min-width: 1800px){
		.page-title-area {height: 400px;}
	}
</style>

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

<div class="row align-items-center container">
   <div class="col-lg-12">
      <div class="founder-content">
         <div class="section-title">
            <h1>Frequently Asked Questions</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
         </div>
         
         <ul class="nav nav-pills" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
               <a class="nav-link" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Loans</a>
            </li>
            <li class="nav-item" role="presentation">
               <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Saving Account</a>
            </li>
            <li class="nav-item" role="presentation">
               <a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Transactions</a>
            </li>
         </ul>
      </div>
   </div>
</div>

<?= $body ?>

<?php require(base_path().'/themes/giant/footer.php'); ?>