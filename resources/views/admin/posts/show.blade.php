<?php require(base_path().'/themes/giant/header.php'); ?>
<style type="text/css">
	@media screen and (min-width: 1800px){
		.page-title-area {height: 400px;}
	}
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
        padding: 35px 0;
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
</style>

<div class="page-title-area title-bg-one">
   <div class="title-shape">
      <img src="https://cms.closocambodia.com/storage/app/uploads/page/Career-page.jpg?_t=1615796351" alt="Shape">
   </div>
   <div class="d-table">
      <div class="d-table-cell">
         <div class="container">
            <div class="title-content">
               <h2>{{ $blog->title }}</h2>
              
            </div>
         </div>
      </div>
   </div>
</div>


    <!-- Post Content -->
    <div class="container post-single">
      <div class="row">
        <div class="col-lg-12 blog-content">
                    <div class="post-heading">
                        <h1 class="amret-home-heading">{{ $blog->title }}</h1>  
                    </div>
                    <div class="date-time">
                        <span class="flex-text date-time"><i class="bx bx-calendar"></i><?php echo $blog->created_at->format('M d, Y') ;?></span>
                    </div>
                    <div class="blog-content-detail">
                    {!! $blog->detail !!}
                    </div>
  
        </div>
    
    </div>
</div>

    <!-- Footer -->
    
<?php require(base_path().'/themes/giant/footer.php'); ?>


</body>
</html>