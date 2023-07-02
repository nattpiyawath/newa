<?php require(base_path().'/themes/giant/header.php'); 

$lang = app()->getLocale();

if($lang == 'en'){
    $contact = 'Customer Relationship';
    $contact_desc = 'Call for advice on product and services';
    $frm_title = 'Get in Touch';
    $subject = 'Subject';
    $write = 'Write to Us';
    $name = 'Your Name';
    $email = 'Email';
    $phone = 'Phone Number';
    $smg = 'Your Message';
    $send = 'Send Message';
} else{
    $contact = 'ផ្នែកទំនាក់ទំនងអតិថិជន';
    $contact_desc = 'សាកសួរអំពីព័ត៌មានផ្សេងៗ';
    $frm_title = 'ទាក់ទងមកពួកយើង';
    $subject = 'សំណួរអំពី';
    $write = 'ផ្ញើរសារមកកាន់យើងខ្ញុំ';
    $name = 'ឈ្មោះរបស់អ្នក';
    $email = 'អុីម៉ែល';
    $phone = 'លេខទូរស័ព្ទ';
    $smg = 'សាររបស់អ្នក';
    $send = 'ផ្ញើសារ';
}


?>

<style type="text/css">
	
    .contact-form label {
        color: #000;
        margin-bottom: 5px;
        font-size: 14px;
    }
    .each-row {
        margin: 0px 0 20px;
    }
    a.btn-submit {
        border: 2px solid;
        padding: 10px 25px;
        color: #525252 !important;
        font-weight: 600;
        letter-spacing: 1px;
    }
    .fomr-contactus {
        margin-bottom: 50px;
        padding-right: 0 !important;
    }
    .under-contact .social li.ico {
        display: inline-block;
        border: 1px solid #008348;
        border-radius: 35px;
        padding: 10px;
        margin-top: -5px;
        margin-bottom: 15px;
    }
    .under-contact li i.bx {
        color: #008348;
        font-size: 15px;
    }
    .left-of-contact {
        border: 1px solid #ffffff87;
        height: max-content;
        top: 55px;
        margin-bottom: 110px;
        padding: 25px !important;
        background:#F2F2F2;
    }
    .col-sm-10.detail-con {
        padding: unset;
    }
	.cover-page.cover-iagme-about-page {
        background-repeat: no-repeat !important;
        background-size: cover !important;
        height: auto;
        background-position: center center !important;
    }
    
    h1.head-title-contant {
        font-size: 22px;
        color: #3a3a3a;
        margin-top: 60px;
        margin-bottom: 15px;
        padding:10px 0;
    }
    .form-control {
        background: #f9f9f9;
        border: unset;
        border-radius: 0;
        filter: drop-shadow(2px 2px 4px #00000020);
    }
    .text-left {
        margin-top: 32px !important;
        margin: 15px;
    }
    h1.mroe-detail-title {
        font-size: 22px;
        color: rgb(58 58 58);
        margin-bottom: 15px!important;
        margin-top: 20px;
    }
    .left-of-contact svg {
        width: 15px !important;
        margin-right: 10px;
        vertical-align: middle;
        fill: #3a3a3a !important;
    }
    .info-address-contact {
        margin-top: 5%;
    }
    .info-address-contact h1 {
        font-size: 22px;
        color: #595959;
        padding-top: 25px;
        padding-left: 20px;
    }
    .info-address-contact svg {
        width: 15px;
        margin-right: 10px;
        height: 30px;
    }
    .info-address-contact p {
        display: flex;
        line-height: 30px;
        padding: 0 20px;
        font-size: 15px;
    text-align: left;
    }
    .info-address-contact .content {
        box-shadow: 0 3px 10px #eaeaea;
    }
    #textarea {
        height: 150px;
    }
    h1.head-title-contant:before {
        content: "";
        display: block;
        background: #ec1a30;
        height: 3px;
        width: 7%;
        margin-bottom: 10px;
    }
    .col-md-4.fomr-contactus svg {
        width: 15px;
        margin-right: 10px;
    }
    .col-md-4.fomr-contactus svg {
        width: 15px;
        margin-right: 5px;
        height: 15px;
    }
    iframe {
    height: 60vh!important;
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
</div></div></div>
<?php endif; ?>


<div class="row"><div class="col-md-12 "><?= $body ?></div></div>
        
<div class="container">
<div class="row">
     <div class="col-md-4 fomr-contactus" phpb-blocks-container>
           <h1 class="head-title-contant"><?=$contact?></h1>
            <p><?=$contact_desc?>:</p><br>
            
            <p data-raw-content="true" class="IDKODTLBJL2SJX218 IDKODY9CGSXMXCK3"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22">
        <path id="FontAwsome_headset_" data-name="FontAwsome (headset)" d="M8.25,8.938A1.375,1.375,0,0,0,6.875,7.563H6.188a2.75,2.75,0,0,0-2.75,2.75v2.063a2.75,2.75,0,0,0,2.75,2.75h.688A1.375,1.375,0,0,0,8.25,13.75Zm7.563,6.188a2.75,2.75,0,0,0,2.75-2.75V10.313a2.75,2.75,0,0,0-2.75-2.75h-.687A1.375,1.375,0,0,0,13.75,8.938V13.75a1.375,1.375,0,0,0,1.375,1.375ZM11,0A11.209,11.209,0,0,0,0,11v.688a.687.687,0,0,0,.688.688h.688a.687.687,0,0,0,.688-.687V11a8.938,8.938,0,0,1,17.875,0h-.005c0,.1.005,7.121.005,7.121a1.817,1.817,0,0,1-1.817,1.817H13.75a2.062,2.062,0,0,0-2.062-2.062H10.313a2.063,2.063,0,0,0,0,4.125h7.808A3.879,3.879,0,0,0,22,18.121V11A11.209,11.209,0,0,0,11,0Z" fill="#ed1b2f">&ZeroWidthSpace;&ZeroWidthSpace;&ZeroWidthSpace;&ZeroWidthSpace;&ZeroWidthSpace;&ZeroWidthSpace;&ZeroWidthSpace;</path>
    </svg> 010 922 922</p>
    <p data-raw-content="true" class="IDKODTLBJL2SJX218 IDKODYN6IARFV984"><svg xmlns="http://www.w3.org/2000/svg" width="29.25" height="20.25" viewBox="0 0 29.25 20.25">
        <g id="Icon_ionic-ios-mail" data-name="Icon ionic-ios-mail" transform="translate(-3.375 -7.875)">
            <path id="Path_25" data-name="Path 25" d="M32.386,10.357,24.82,18.063a.136.136,0,0,0,0,.2L30.115,23.9a.912.912,0,0,1,0,1.294.917.917,0,0,1-1.294,0l-5.273-5.618a.144.144,0,0,0-.2,0l-1.287,1.308a5.661,5.661,0,0,1-4.036,1.7,5.775,5.775,0,0,1-4.12-1.751l-1.238-1.259a.144.144,0,0,0-.2,0L7.186,25.193a.917.917,0,0,1-1.294,0,.912.912,0,0,1,0-1.294l5.295-5.639a.15.15,0,0,0,0-.2L3.614,10.357a.139.139,0,0,0-.239.1v15.42a2.257,2.257,0,0,0,2.25,2.25h24.75a2.257,2.257,0,0,0,2.25-2.25V10.455A.141.141,0,0,0,32.386,10.357Z" fill="#ed1b2f">&ZeroWidthSpace;&ZeroWidthSpace;&ZeroWidthSpace;&ZeroWidthSpace;&ZeroWidthSpace;&ZeroWidthSpace;&ZeroWidthSpace;</path>
            <path id="Path_26" data-name="Path 26" d="M18,20.749A3.823,3.823,0,0,0,20.749,19.6L31.781,8.367a2.21,2.21,0,0,0-1.392-.492H5.618a2.2,2.2,0,0,0-1.392.492L15.258,19.6A3.823,3.823,0,0,0,18,20.749Z" fill="#ed1b2f"></path>
        </g>
    </svg> cr@ncxhonda.com</p>
       </div>
        <!--Grid column-->
        <div class="col-md-8 fomr-contactus">
            
            <h1 class="head-title-contant" style="padding:15px;"><?=$frm_title?></h1>
            
            <form id="contact-form" name="contact" action="<?= route('send.contact');?>" method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6 each-row">
                        <div class="contact-form">
                            
                            <input type="text" id="name" name="name" class="form-control" placeholder='<?=$name?>'>
                            
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6 each-row">
                        <div class="contact-form">
                            <input type="email" id="email" name="email" class="form-control" placeholder="<?=$email?>">
                            
                        </div>
                    </div>
                    <!--Grid column-->
                    <div class="col-md-6 each-row">
                        <div class="contact-form">
                            
                            <input type="tel" id="phone" name="number" class="form-control" placeholder='<?=$phone?>'>
                            
                        </div>
                    </div>
                      <div class="col-md-6 each-row">
                        <div class="contact-form">
                            
                            <input type="tel" id="subject" name="subject" class="form-control" placeholder='<?=$subject?>'>
                            
                        </div>
                    </div>
                     <div class="col-md-12 each-row">
                        <div class="contact-form">
                            
                            <textarea id="msg" name="msg" class="form-control" placeholder='<?=$smg?>'></textarea>

                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <div class="row">
                <div class="col-md-12 each-row">
                    <script src='https://www.google.com/recaptcha/api.js' async defer></script>
                    <div class="g-recaptcha" data-sitekey="6LfyjasdAAAAAKnBMwz3Ie7vF8YmSUGHgIZ8KXxg"></div>
                </div></div>         
                
                <div class="text-left">
                    <a class="btn-submit" onclick="document.getElementById('contact-form').submit();"><?=$send?></a>
                </div>
            
            </form>

          
            
        </div>
      
        <!--Grid column-->

    </div>

</div>   

<script>
$(".dropdown-menu li a").click(function(){

  $(".btn:first-child").html($(this).text()+' <span class="caret"></span>');

});
</script>

<?php require(base_path().'/themes/giant/footer.php'); ?>