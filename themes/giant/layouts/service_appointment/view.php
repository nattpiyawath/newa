<?php require(base_path().'/themes/giant/header.php'); ?>

<?php 
$currentLocale = app()->getLocale();
$lang = app()->getLocale();
if($lang == 'en'){
    
    $home = 'Home';
    $alertmsg = 'Thank you for your information. We will contact you back shortly!';
    
    $cus_info = 'Customer Information';
    $cus_name = 'Name';
    $cus_phone = 'Phone Number';
    $cus_model = 'Select Model';
    $select_model = 'Please Select Model';
    $cus_mile = 'Mileage (kilometers)';
    
    $Appointmentinfor = 'Appointment Information';
    $RepairType = 'Repair Type';
    $Periodic = 'Periodic Maintenance (PM)';
    $General = 'General Repair (GR)';
    $Bodyand = 'Body and Paint (BP)';
    $Checkup = 'Check up';
    $AppointmentDate = 'Appointment Date';
    $AppointmentTime = 'Appointment Time';
    $Remark = 'Remark';
    $SUBMIT = 'SUBMIT';
}

else{$home = 'ទំព័រដើម';
    $alertmsg = 'សូមអរគុណចំពោះការផ្តល់ព័ត៌មាន យើងខ្ញុំនឹងធ្វើការទាក់ទងទៅកាន់លោកអ្នកវិញ!';

    $cus_info = ' ព័ត៌មានអតិថិជន ';
    $cus_name = 'ឈ្មោះ';
    $cus_phone = ' លេខទូរស័ព្ទ ';
    $cus_model = ' ជ្រើសរើសម៉ូឌែល ';
    $select_model = ' សូមជ្រើសរើសម៉ូឌែល ';
    $cus_mile = ' ចំងាយ (គីឡូម៉ែត្រ) ';
    
    $Appointmentinfor = ' ព័ត៌មានណាត់ជួប ';
    $RepairType = 'ប្រភេទជួសជុល';
    $Periodic = '  ថែទាំតាមកាលកំណត់ ';
    $General = 'ជួសជុលទូទៅ';
    $Bodyand = ' តោន និងបាញ់ថ្នាំ ';
    $Checkup = 'ត្រួតពិនិត្យ';
    $AppointmentDate = 'កាលបរិច្ឆេទណាត់ជួប';
    $AppointmentTime = 'ពេលវេលាណាត់ជួប';
    $Remark = 'ចំណាំ';
    $SUBMIT = 'បញ្ជូន';

}

if (isset($_GET['page'])){
   echo '';
} 

else{ 
    $lang_code = app()->getLocale();
    $id = pageID();
    $info = \App\Pages::where('id', $id)->first();

    if ($lang_code == 'kh'){

    } else{echo '';}

?>

<script>
        var time = 4000;
        setTimeout(function() {
             $('.msg-success, .msg-error').fadeOut('slow');

        },time);

</script> 

<style>
    select#ser_model {
        height: auto !important;
    }
    img.overview-banner.mobile, .model-cover-mobile, div#overview .mobile, .main-feature2 .mobile, .product-menu .bxs-down-arrow{display: none!important;}
    .model-cover-desktop {
        height: 500px;
        background-size: cover!important;
        background-repeat: no-repeat!important;
        max-width: 1980px;
        margin: 0 auto!important;
    }     
    
    h2.form-heading-line.second-line {
        font-weight: 600;
        font-size: 18px;
        margin: 25px 15px 25px;
    }
    .from-app-section .form-group .col-sm-6 {
        margin-bottom: 1.5rem;
    }
    .row.inner-frm .col-sm-2 {
        padding: 0px;
        max-width: 3%;
        margin-top: 10px;
    }
    button.btn.btn-default.btn-reg {
        border: 2px solid;
        padding: 15px 65px;
        color: #525252 !important;
        font-weight: 600;
        letter-spacing: 1px;
        background: unset;
        font-size: 16px;
    }
    .col-sm-12.btn-sub {
        text-align: center;
        margin-bottom: 3rem;
    }
    
    @media screen and (max-device-width: 480px) and (orientation: portrait) {
         
        h2.form-heading-line.second-line {
            font-weight: 600;
            font-size: 18px;
            margin: 20px 0px 15px;
        }
        .row.inner-frm .col-sm-2 {
            padding: 0px;
            max-width: 3%;
            margin-top: 5px;
            margin-right: 10px;
        }
        .row.inner-frm {
            display: -webkit-box;
        }
         
    }
    
    @media screen and (max-device-width: 480px) and (orientation: portrait) {
        
        .row.model-cover-desktop {
            display: none;
        }
        .model-cover-mobile {
            display: block !important;
        }

    }    
    
</style>

    <div class="row model-cover-desktop" style="background:url('<?=url('').'/storage/app/uploads/'.$info->header_img?>');"></div>
    <div class="row model-cover-mobile"><img src="<?=url('').'/storage/app/uploads/'.$info->thumbnail?>"/></div>
 
    <div class="container">
        
        <?php
            if(isset($_GET['msg'])){
                $msg = $_GET['msg'];
                if($msg == 'success'){
                    echo '<div class="msg-success">Your message has been sent successfully...</div>';
                } else{
                    echo '<div class="msg-error">Oop! Something went wrong, please try again!</div>';
                }
            }
        ?>
    </div>
    
    <div class="container">
       <div class= "from-app-section">

        <form name="appointment" action="<?=route('send.service');?>" method="post" >

        <input type="hidden" name="_token" value="<?= csrf_token();?>">
        <input type="hidden" name="lang" value="<?=$lang?>">

        <h2 class="form-heading-line second-line"><?=$cus_info?></h2>

    	<div class="form-group row">
    	    
    		<div class="col-sm-6">
    		    <label  for="customername" class="col-form-label"><?=$cus_name?> <span class="warning">*</span></label>
    			<input type="text" name="customername" id="customername" class="form-control" required>
    		</div>
    		
    		<div class="col-sm-6">
    		    <label  for="com_phone" class="col-form-label"><?=$cus_phone?> <span class="warning">*</span></label>
    			<input type="text" name="com_phone" id="com_phone" class="form-control" required>
    		</div>    	
    		
    		<div class="col-sm-6">
    		    <label  for="ser_model" class="col-form-label"><?=$cus_model?>  <span class="warning">*</span></label>
                <select class="form-control" name="ser_model" id="ser_model">
                    <option value=""><?=$select_model?></option>
                    <option value="Honda CITY RS" >Honda CITY RS</option>
                    <option value="Honda CIVIC-(MID)" >Honda CIVIC-(MID)</option>
                    <option value="Honda CIVIC-(RS)" >Honda CIVIC-(RS)</option>
                    <option value="Honda CR-V" >Honda CR-V</option>
                    <option value="Honda HR-V" >Honda HR-V</option>
                </select>
    		</div>
    		
    		<div class="col-sm-6">
    		    <label  for="com_phone" class="col-form-label"><?=$cus_mile?> <span class="warning">*</span></label>
    			<input type="text" name="cus_mile" id="cus_email" class="form-control" required>
    		</div>     		
    		
    	</div>

    	<h2 class="form-heading-line second-line"><?=$Appointmentinfor?></h2>
    	
        <div class="form-group row">
            
            <div class="col-sm-6">
                
                <label  for="com_phone" class="col-form-label"><?=$RepairType?><span class="warning">*</span></label>
                <div class="row inner-frm">
                    
                    <div class="col-sm-2">
                        <input id="checkbox_0" type="checkbox" name="check_dis" class="form-control chk" value="Periodic Maintenance" > 
                    </div>
                    <label for="checkbox_0" class="col-sm-10 col-form-label"><?=$Periodic?></label>
                    
                </div>

                <div class="row inner-frm">
                    
                    <div class="col-sm-2">
                        <input id="checkbox_0" type="checkbox" name="check_dis" class="form-control chk" value="General Repairs" >
                    </div>
                    <label for="checkbox_0" class="col-sm-10 col-form-label"><?=$General?></label>
                    
                </div>

                <div class="row inner-frm">
                    
                    <div class="col-sm-2">
                        <input id="checkbox_0" type="checkbox" name="check_dis" class="form-control chk" value="Body and Paint" > 
                    </div>
                    <label for="checkbox_0" class="col-sm-10 col-form-label"><?=$Bodyand?></label> 
                    
                </div>
                  
                <div class="row inner-frm">
                    
                    <div class="col-sm-2">
                        <input id="checkbox_0" type="checkbox" name="check_dis" class="form-control chk" value="Check up" >
                    </div>
                    <label for="checkbox_0" class="col-sm-10 col-form-label"><?=$Checkup?></label>
                    
                </div>

            </div> 
            
            <div class="col-sm-6">

                <label  for="date" class="col-form-label"><?=$AppointmentDate?><span class="warning">*</span></label>
    			<input type="date" name="appoint_date" id="date" class="form-control">
    			
    			<label  for="date" class="col-form-label label-time"><?=$AppointmentTime?><span class="warning">*</span></label>
    			
    			<div class="row inner-frm">
    			    <div class="col-sm-2">
    			        <input name="appoint_time" id="time" type="radio" class="form-control time" value="08:00 - 09:30"> 
    			    </div>
                    <label for="time" class="col-sm-10 col-form-label radi">08:00AM - 09:30AM</label>
                </div>
                
                <div class="row inner-frm">
                    <div class="col-sm-2">
    			        <input name="appoint_time" id="time" type="radio" class="form-control time" value="10:00 - 11:30"> 
    			    </div>
                    <label for="time" class="col-sm-10 col-form-label radi">10:00AM - 11:30AM</label>
                </div>
                
                <div class="row inner-frm">
                    <div class="col-sm-2">
    			        <input name="appoint_time" id="time" type="radio" class="form-control time" value="01:00 - 02:30"> 
    			    </div>
                    <label for="time" class="col-sm-10 col-form-label radi">01:00PM - 02:30PM</label>    
                </div>
                
                <div class="row inner-frm">
                    <div class="col-sm-2">
    			        <input name="appoint_time" id="time" type="radio" class="form-control time" value="03:00 - 05:00"> 
    			    </div>
                    <label for="time" class="col-sm-10 col-form-label radi">03:00PM - 05:00PM</label>       
                </div>
                
            </div>
            
            <div class="col-sm-12">
                
        		<label  for="complaint_des" class="col-form-label"><?=$Remark?></label>
                <textarea type="text" id="remark_des" name="remark" rows="5" class="form-control md-textarea"></textarea>
            
            </div>
        </div>
        

        
    	<div class="form-group row">
    		<div class="col-sm-12 btn-sub">
    			<button type="submit" class="btn btn-default btn-reg" name="submit"><?=$SUBMIT?></button>
    		</div>
    	</div>
    
    </form>
    
    </div>
    </div>
    
<?php }?>

<?php require(base_path().'/themes/giant/footer.php'); ?>