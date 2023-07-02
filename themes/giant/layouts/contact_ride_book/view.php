<?php require(base_path().'/themes/giant/header.php'); ?>

<?php 
$currentLocale = app()->getLocale();

if (isset($_GET['page'])){
   echo '';
} 

else{ 
    $lang_code = app()->getLocale();
    $id = pageID();
    $info = \App\Pages::where('id', $id)->first();

    if ($lang_code == 'en'){
        
        $cus_model = 'Car Model';
        $select_model = 'Please Select Model';
        $cus_name = 'Name';
        $cus_phone = 'Phone Number';
        $cus_info = 'Customer Information';
        $Date = 'Date';
        $SelectTime = 'Select Time';
        $Location = 'Location';
        $SelectLocation = 'Select Location';
        $Showroom = 'Showroom (Pochentong)';
        $Showroom1 = 'Showroom (Monivong)';
        $Showroom2 = 'Outdoor';
        $SUBMIT = 'SUBMIT';
        
        
    } else{
        
        $cus_model = ' ជ្រើសរើសម៉ូឌែល ';
        $select_model = ' សូមជ្រើសរើសម៉ូឌែល ';
        $cus_name = 'ឈ្មោះ';
        $cus_phone = ' លេខទូរស័ព្ទ ';
        $cus_info = 'ពត័មានអតិថិជន';
        $Date = 'ថ្ងៃខែ';
        $SelectTime = ' ជ្រើសរើសម៉ោង ';
        $Location = 'ទីតាំង';
        $SelectLocation = 'ជ្រើសរើសទីតាំង';
        $Showroom = 'សាខា ពោចិនតុង';
        $Showroom1 = 'សាខា ព្រះមុនីវង្ស';
        $Showroom2 = 'ទីតាំងខាងក្រៅ';
        $SUBMIT = 'បញ្ជូន';
        
        
    }

?>

<style type="text/css">

    img.overview-banner.mobile, .model-cover-mobile, div#overview .mobile, .main-feature2 .mobile, .product-menu .bxs-down-arrow{display: none!important;}
    .model-cover-desktop {
        height: 500px;
        background-size: cover!important;
        background-repeat: no-repeat!important;
        max-width: 1980px;
        margin: 0 auto!important;
    }
        select#smodel, select#test_time, select#test_location {
        height: auto;
    }
    h1.head-title-contant {
        font-weight: 600;
        font-size: 18px;
        margin: 25px 15px 25px;
    }
    .col-sm-6.one {
        margin-bottom: 1rem;
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
        margin-top: 3rem
    }    
    .col-sm-12.test-drive {
        margin-top: 4em !important;
    }
        h1.head-title-contant.modl:after {
            content: '\e9ac';
            font-family: 'boxicons';
            position: absolute;
            right: 30px;
        }     
        
    @media screen and (max-device-width: 480px) and (orientation: portrait) {
        
        .row.model-cover-desktop {
            display: none;
        }
        .model-cover-mobile {
            display: block !important;
            margin-top: 80px;
        }
        h1.head-title-contant {
            font-weight: 600;
            font-size: 18px;
            margin: 20px 0px 15px;
        }
        .col-sm-6.two, .col-sm-6.four {
        margin-bottom: 1rem;
        }

    }

    @media screen and (max-device-width: 768px){
        
        .c2{
            min-width:95%;
        }
        iinput#date
        {
            display:block;
            text-align: right;
            -webkit-appearance: textfield;
            -moz-appearance: textfield;
            min-height: 1.2em; 
        }
        
        h1.head-title-contant.modl:after {
            content: '\e9ac';
            font-family: 'boxicons';
            position: absolute;
            right: 13px;
        }        
        #a img, .btn-select img{
          width: 45% !important;
          float: right;
          margin-right: 10px !important;
        }        
        .btn-select{
            width: 100%;
            max-width: 100%;
            height: 80px !important;;
            background-color: #fff;
            border: 1px solid #ccc;
        }
        .btn-select li {
            list-style: none;
            float: left;
            padding: 12px 0 0px !important;
        }
        #a li {
            list-style: none;
            padding-top: 5px;
            padding-bottom: 5px;
            height: 80px !important;
        }        

    }

.vodiapicker{
  display: none; 
}
#a{
  padding-left: 0px;
}
#a img, .btn-select img{
  width: 25%;
  float: right;
  margin-right: 30px !important;
}
#a li{
  list-style: none;
  padding-top: 5px;
  padding-bottom: 5px;
  height: 115px;
}
#a li:hover{
 background-color: #F4F3F3;
}
#a li img{
  margin: 5px;
}
#a li span, .btn-select li span{
  margin-left: 30px;
}

/* item list */

.b{
  display: none;
  width: 100%;
  max-width: 100%;
  box-shadow: 0 6px 12px rgba(0,0,0,.175);
  border: 1px solid rgba(0,0,0,.15);
  margin-top: 5px;
}

.open{
  display: show !important;
}

.btn-select{
    width: 100%;
    max-width: 100%;
    height: 115px;
    background-color: #fff;
    border: 1px solid #ccc;
}
.btn-select li{
    list-style: none;
    float: left;
    padding: 10px 0 15px;
}

.btn-select:hover li{
  margin-left: 0px;
}

.btn-select:hover{
  background-color: #F4F3F3;
  border: 1px solid transparent;
  box-shadow: inset 0 0px 0px 1px #ccc;
  
  
}

.btn-select:focus{
   outline:none;
}


</style>

<script>
        var time = 4000;
        setTimeout(function() {
             $('.msg-success, .msg-error').fadeOut('slow');

        },time);

</script>   
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <div class="row model-cover-desktop" style="background:url('<?=url('').'/storage/app/uploads/'.$info->header_img?>');"></div>
    <div class="row model-cover-mobile"><img src="<?=url('').'/storage/app/uploads/'.$info->thumbnail?>"/></div>


<div class="row">

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

        <div class="col-sm-12 test-drive">
            
            <h1 class="head-title-contant modl"><?=$cus_model?></h1>
            
            <form id="contact-form" name="test-drive" action="<?=route('send.test');?>" method="POST">

            <input type="hidden" name="_token" value="<?= csrf_token();?>">
            <input type="hidden" name="lang" value="<?=$currentLocale?>">
            
        	<div class="form-group row">
        		
        		<div class="col-sm-12">
        		    
                    <select class="vodiapicker" name="smodel" id="smodel">
                        
                        <label for="tycomplaint" class="col-form-label"><?=$cus_model?>  <span class="warning">*</span></label>
                        
                        <?php 
                            $lang_code = app()->getLocale();
                            $car_model = getProductall();
                            foreach($car_model as $val){
                        ?> 
                        
                        <option class="test" value="<?= $val->title?>" data-thumbnail="<?=myUpload().$val->thumbnail;?>"> <?= $val->title?> </option>                        
                        
                        <?php }?>
                        
                    </select>
                    
                    <div class="lang-select">
                    <div class="btn-select" value=""></div>
                    <div class="b">
                    <ul id="a"></ul>
                    </div>
                    </div>        		    
        		    
        		</div>
        		
        		
        	</div>            
            
            <h1 class="head-title-contant"><?=$cus_info?></h1>
            
        	<div class="form-group row">
        	    
        		<div class="col-sm-6 one">
        		    <label  for="customername" class="col-form-label"><?=$cus_name?> <span class="warning">*</span></label>
        			<input type="text" name="test_name" id="customername" class="form-control" required>
        		</div>
        		
        		<div class="col-sm-6 two">
        		    <label  for="com_phone" class="col-form-label"><?=$cus_phone?> <span class="warning">*</span></label>
        			<input type="text" name="test_phone" id="com_phone" class="form-control" required>
        		</div>    	
        		
                <div class="col-sm-6 three">
            
                    <label  for="date" class="col-form-label"><?=$Date?></label>
                	<input type="date" onfocus="(this.type='date')" name="test_date" id="date" class="form-control c2" />    		    
                		    
                </div>
                		
                <div class="col-sm-6 four">
                            
                	<label  for="tycomplaint" class="col-form-label"><?=$SelectTime?></label>
                    <select class="form-control" name="test_time" id="test_time">
                        <option value=""><?=$SelectTime?></option>
                        <option value="08:00 - 09:30" >8:00AM - 9:30AM</option>
                        <option value="10:00 - 11:30" >10:00AM - 11:30AM</option>
                        <option value="01:00 - 02:30" >1:00PM - 2:30PM</option>
                        <option value="03:00 - 04:30" >3:00PM - 5:00PM</option>
                    </select>
                    
                </div>          		
        		
                <div class="col-sm-12">
                            
                	<label  for="tycomplaint" class="col-form-label"><?=$Location?> </label>
                    <select class="form-control" name="test_location" id="test_location">
                        <option value=""><?=$SelectLocation?></option>
                        <option value="Showroom Pochentong" ><?=$Showroom?></option>
                        <option value="Showroom Monivong" ><?=$Showroom1?></option>
                        <option value="Outdoor" ><?=$Showroom2?></option>
                    </select>
            
                </div> 
        	</div>            
            
            <div class="form-group row">
                <div class="col-md-12 each-row">
                    <script src='https://www.google.com/recaptcha/api.js' async defer></script>
                    <div class="g-recaptcha" data-sitekey="6LfyjasdAAAAAKnBMwz3Ie7vF8YmSUGHgIZ8KXxg"></div>
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

</div>   

<?php }?>

<script>

var langArray = [];
$('.vodiapicker option').each(function(){
  var img = $(this).attr("data-thumbnail");
  var text = this.innerText;
  var value = $(this).val();
  var item = '<li><span>'+ text +'</span><img src="'+ img +'" alt="" value="'+value+'"/></li>';
  langArray.push(item);
})

$('#a').html(langArray);

//Set the button value to the first el of the array
$('.btn-select').html(langArray[0]);
//$('.btn-select').attr('value', 'en');

//change button stuff on click
$('#a li').click(function(){
   var img = $(this).find('img').attr("src");
   var value = $(this).find('img').attr('value');
   var text = this.innerText;
   var item = '<li><span>'+ text +'</span><img src="'+ img +'" alt="" /></li>';
  $('.btn-select').html(item);
  $('.btn-select').attr('value', value);
  $(".b").toggle();
  //console.log(value);
});

$(".btn-select").click(function(){
        $(".b").toggle();
    });

//check local storage for the lang
var sessionLang = localStorage.getItem('lang');
if (sessionLang){
  //find an item with value of sessionLang
  var langIndex = langArray.indexOf(sessionLang);
  $('.btn-select').html(langArray[langIndex]);
  $('.btn-select').attr('value', sessionLang);
} else {
   var langIndex = langArray.indexOf('ch');
  console.log(langIndex);
  $('.btn-select').html(langArray[langIndex]);
  //$('.btn-select').attr('value', 'en');
}    
    
</script>

<?php require(base_path().'/themes/giant/footer.php'); ?>