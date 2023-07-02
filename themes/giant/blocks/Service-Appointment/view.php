<?php if(isset($_GET['page'])){
    echo '<h1 style="text-align:center;">Service Appointment</h1>';
} else{ ?>

<?php

$lang_code = app()->getLocale();
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
}

else{$home = 'ទំព័រដើម';
    $alertmsg = 'សូមអរគុណចំពោះការផ្តល់ព័ត៌មាន យើងខ្ញុំនឹងធ្វើការទាក់ទងទៅកាន់លោកអ្នកវិញ!';

    $cus_info = ' ព័ត៌មានអតិថិជន ';
    $cus_name = 'ឈ្មោះ';
    $cus_phone = ' លេខទូរស័ព្ទ ';
    $cus_model = ' ជ្រើសរើសម៉ូឌែល ';
    $select_model = ' សូមជ្រើសរើសម៉ូឌែល ';
    $cus_mile = ' ចំងាយ (គីឡូម៉ែត្រ) ';

}
?>

<style>
    
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
    
</style>

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
    		    <label  for="tycomplaint" class="col-form-label"><?=$cus_model?>  <span class="warning">*</span></label>
                <select class="form-control" name="tycomplaint" id="tycomplaint">
                    <option value=""><?=$select_model?></option>
                    <option value="Honda CITY RS" >Honda CITY RS</option>
                    <option value="Honda CIVIC" >Honda CIVIC</option>
                    <option value="Honda CR-V" >Honda CR-V</option>
                    <option value="Honda HR-V" >Honda HR-V</option>
                </select>
    		</div>
    		
    		<div class="col-sm-6">
    		    <label  for="com_phone" class="col-form-label"><?=$cus_mile?> <span class="warning">*</span></label>
    			<input type="text" name="cus_email" id="cus_email" class="form-control" required>
    		</div>     		
    		
    	</div>

    	<h2 class="form-heading-line second-line">Appointment Information</h2>
    	
        <div class="form-group row">
            
            <div class="col-sm-6">
                
                <label  for="com_phone" class="col-form-label">Repair Type<span class="warning">*</span></label>
                <div class="row inner-frm">
                    
                    <div class="col-sm-2">
                        <input id="checkbox_0" type="checkbox" name="check_dis" class="form-control chk" value="Check distance" > 
                    </div>
                    <label for="checkbox_0" class="col-sm-10 col-form-label">Check Distance</label>
                    
                </div>

                <div class="row inner-frm">
                    
                    <div class="col-sm-2">
                        <input id="checkbox_0" type="checkbox" name="check_dis" class="form-control chk" value="General Repairs" >
                    </div>
                    <label for="checkbox_0" class="col-sm-10 col-form-label">General Repairs</label>
                    
                </div>

                <div class="row inner-frm">
                    
                    <div class="col-sm-2">
                        <input id="checkbox_0" type="checkbox" name="check_dis" class="form-control chk" value="Paint and Body Repair" > 
                    </div>
                    <label for="checkbox_0" class="col-sm-10 col-form-label">Paint and Body Repair</label> 
                    
                </div>
                  
                <div class="row inner-frm">
                    
                    <div class="col-sm-2">
                        <input id="checkbox_0" type="checkbox" name="check_dis" class="form-control chk" value="Check Distance Urgently" >
                    </div>
                    <label for="checkbox_0" class="col-sm-10 col-form-label">Check Distance Urgently</label>
                    
                </div>

            </div> 
            
            <div class="col-sm-6">

                <label  for="date" class="col-form-label">Appointment Date<span class="warning">*</span></label>
    			<input type="date" name="appoint_date" id="date" class="form-control">
    			
    			<label  for="date" class="col-form-label label-time">Appointment Time <span class="warning">*</span></label>
    			
    			<div class="row inner-frm">
    			    <div class="col-sm-2">
    			        <input name="appoint_time" id="time" type="radio" class="form-control time" value="08:30 - 10:30"> 
    			    </div>
                    <label for="time" class="col-sm-10 col-form-label radi">08:30 - 10:30</label>
                </div>
                
                <div class="row inner-frm">
                    <div class="col-sm-2">
    			        <input name="appoint_time" id="time" type="radio" class="form-control time" value="10:30 - 12:30"> 
    			    </div>
                    <label for="time" class="col-sm-10 col-form-label radi">10:30 - 12:30</label>
                </div>
                
                <div class="row inner-frm">
                    <div class="col-sm-2">
    			        <input name="appoint_time" id="time" type="radio" class="form-control time" value="01:30 - 03:30"> 
    			    </div>
                    <label for="time" class="col-sm-10 col-form-label radi">01:30 - 03:30</label>    
                </div>
                
                <div class="row inner-frm">
                    <div class="col-sm-2">
    			        <input name="appoint_time" id="time" type="radio" class="form-control time" value="03:30 - 05:30"> 
    			    </div>
                    <label for="time" class="col-sm-10 col-form-label radi">03:30 - 05:30</label>       
                </div>
                
            </div>
            
            <div class="col-sm-12">
                
        		<label  for="complaint_des" class="col-form-label">Remark</label>
                <textarea type="text" id="remark_des" name="remark" rows="5" class="form-control md-textarea"></textarea>
            
            </div>
        </div>
        

        
    	<div class="form-group row">
    		<div class="col-sm-12 btn-sub">
    			<button type="submit" class="btn btn-default btn-reg" name="submit">SUBMIT</button>
    		</div>
    	</div>
    
    </form>
    
    </div>


<?php }?>
