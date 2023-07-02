<?php require(base_path().'/themes/giant/header.php'); ?>
<style type="text/css">
	@media screen and (min-width: 1800px){
		.page-title-area {height: 400px;}
	}
</style>

<div class="page-title-area title-bg-one">
   <div class="title-shape">
      <img src="https://cms.closocambodia.com/storage/app/uploads/page/Career-page.jpg?_t=1615796351" alt="Shape">
   </div>
   <div class="d-table">
      <div class="d-table-cell">
         <div class="container">
            <div class="title-content">
               <h2>Careers</h2>
               <ul>
                  <li>
                     <a href="index.html">Home</a>
                  </li>
                  <li>
                     <i class="bx bx-chevron-right"></i>
                  </li>
                  <li>
                     <span>Careers</span>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>


    <!-- Post Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
                    <div class="post-heading">
                        <h1>{{ $career->title }}</h1>   
                    </div>

                    <div class="pull-left located"><i class="fa fa-map-marker mr-20"></i><span class="right-nav-text"> {{ $career->location }} </span></div>
                    <div class="pull-left located"><i class="fa fa-briefcase mr-20"></i><span class="right-nav-text"> {{ $career->position }} </span></div>
                    <div class="pull-left located"><span class="right-nav-text"> Department: {{ $career->department }} </span></div>
                    <div class="pull-left located"><span class="right-nav-text"> Application Deadline: {{ $career->deadline }} </span></div>

                    {!! $career->details !!}

                    <div class="user-form-item under-des-career">
                        <ul class="social">
                            <li class="ico"><a href="#" target="_blank"><i class="bx bxl-facebook"></i></a></li>
                            <li class="ico"><a href="#" target="_blank"><i class="bx bxl-twitter"></i></a></li>
                            <li class="ico"><a href="#" target="_blank"><i class="bx bxl-linkedin"></i></a></li>
                            <li class="ico"><a href="#" target="_blank"><i class="bx bxl-instagram"></i></a></li>
                        </ul>
                    </div>
        </div>

        <div class="col-lg-4 form-sub-app">
          <div class="row">

          <div class="col-lg-12">
                <h2>Apply For This Position</h1>
            </div>

            <div class="col-lg-6">
                <div class="form-group">
                    <label for="name">First Name<span class="warning">*</span></label>
                    <input type="text" name="your-name" value="" size="40" class=" form-control" id="contact-name" aria-required="true" aria-invalid="false">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form-group">
                    <label for="name">Last Name<span class="warning">*</span></label>
                    <input type="text" name="last-name" value="" size="40" class="form-control" id="contact-name" aria-required="true" aria-invalid="false">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form-group">
                    <label for="name">Email<span class="warning">*</span></label>
                    <input type="email" name="your-email" value="" size="40" class="form-control" id="contact-email" aria-required="true" aria-invalid="false">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form-group">
                    <label for="name">Phone Number<span class="warning">*</span></label>
                    <input type="text" name="your-phone" value="" size="40" class="form-control" id="contact-subject" aria-invalid="false">
                </div>
            </div>

            <div class="col-lg-12 message">
                <div class="form-group">
                    <label for="name">Why do you want to work with us?</label>
                    <textarea name="your-message" cols="20" rows="5" class="form-control" id="contact-message" aria-invalid="false"></textarea></span>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="form-group">
                    <label class="t-cv">Upload CV *</label><br>
                    <input type="file" name="UploadCV" size="40" class="wpcf7-form-control wpcf7-file wpcf7-validates-as-required" accept=".pdf" aria-required="true" aria-invalid="false"><br>
                </div>
            </div>

            <div class="col-lg-12">
            <input type="checkbox" id="term" name="term" value="term"> <label for="term">I agree to the Terms & Conditions</label>
            </div>

            <div class="col-lg-12 btn-submit">
                <div class="form-group">
                    <input type="submit" value="Submit Now" class="btn btn-default btn-reg"><span class="ajax-loader"></span>
                </div>
            </div>

          </div>
        </div>
    </div>
</div>

    <!-- Footer -->
    
<?php require(base_path().'/themes/giant/footer.php'); ?>


</body>
</html>