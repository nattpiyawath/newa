<?php if(isset($_GET['page'])){
    echo '<h1 style="text-align:center;">Calculator Module</h1>';
    echo '<style>.full-height{height:100%!important;}</style>';
} else{ echo '<style>.full-height{height:100%!important;}';
?>

<?php 

$currentLocale = app()->getLocale();

    $lang_code = app()->getLocale();
    
    $calculators = route('payment-calen');
    $sele_mdel = route('get-model-type');
    
    $reset_calculator = 'RESET CALCULATOR';    
    $_12months = '12 Months';
    $_24months = '24 Months';
    $_36months = '36 Months';
    $_48months = '48 Months';
    $_60months = '60 Months';
    $_72months = '72 Months';
    $_84months = '84 Months';
    $LoanPeriod = 'Loan Period';
    $DownPayment = 'Down Payment';
    $SelectModel = 'Select Model';
    $SelectType = 'Select Type';
    $Calculate = 'Calculate';
    if ($lang_code == 'kh'){
        $calculators = route('payment-cal');
        $sele_mdel = route('get-model-typekh');
      $reset_calculator = 'គណនាឡើងវិញ';    
      $_12months = 'រយៈពេល 12 ខែ';
      $_24months = 'រយៈពេល 24 ខែ';
      $_36months = 'រយៈពេល 36 ខែ';
      $_48months = 'រយៈពេល 48 ខែ';
      $_60months = 'រយៈពេល 60 ខែ';
    $_72months = 'រយៈពេល 72 ខែ';
    $_84months = 'រយៈពេល 84 ខែ';
    $LoanPeriod = ' រយៈពេលពេលកម្ចី ';
    $DownPayment = ' ចំនួនទឹកប្រាក់បង់មុន ';
    $SelectModel = ' ជ្រើសរើសម៉ូឌែលរថយន្ត ';
    $SelectType = ' ជ្រើសរើសប្រភេទរថយន្ត ';
    $Calculate = 'គណនា';
        
    } else{echo '';}
  
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
button.btn.btn-primary.btn-cal {
    margin-bottom: 1em
}
    form#frm-payment {
        max-width:100%;
        margin: 0 auto;
    }
    .custom-select {
        background-color: rgb(255 255 255);
        color: #1e1e1e;
        height: 60px;
        font-size: 18px;
    }
    button.btn.btn-primary.btn-cal {
        background: #ee1c25;
        border: solid 1px #ea0000;
        padding: 13px 40px;
        font-size: 18px;
    }
    .container.result-main {
        background: rgb(255 255 255);
        max-width: 768px;
        padding: 30px 26px;
    }
    .result-main strong {
        font-size: 18px;
        font-weight: 800;
        color: #000;
    }
    .result-main{display:none;}
    button.mdc-button.mdc-button--outlined {
        background: #f9f9f9;
        border: solid 1px #ee9c9c;
        padding: 10px 20px;
    }
    .btn-cover{text-align:center;}
    #frm-payment .form-group.row.btn {
        text-align: center;
        display: block;
    }
   
</style>
<div class="container"> 
    <form action="#" id="frm-payment">
      <div class="form-group row">
          
        <div class="col-6">
          <select id="select-type" name="type" class="custom-select">
            <option value=""><?=$SelectType?></option>
            <option value="sedan">SEDAN</option>
            <option value="suv">SUV</option>
          </select>
        </div>
        
        <div class="col-6">
          <select id="select-model" name="model" class="custom-select">
            <option value=""><?=$SelectModel?></option>
          </select>
        </div>
        
      </div>

      <div class="form-group row">
          
        <div class="col-6">
          <select id="down-payment" name="down_payment" class="custom-select">
            <option value=""><?=$DownPayment?></option>
            <option value="10%">10%</option>
            <option value="20%">20%</option>
            <option value="30%">30%</option>
            <option value="40%">40%</option>
            <option value="50%">50%</option>
          </select>
        </div>
        
        <div class="col-6">
          <select id="select-term" name="term" class="custom-select">
            <option value=""><?=$LoanPeriod?></option>
            <option value="12 Months"><?=$_12months?></option>
            <option value="24 Months"><?=$_24months?></option>
            <option value="36 Months"><?=$_36months?></option>
            <option value="48 Months"><?=$_48months?></option>
            <option value="60 Months"><?=$_60months?></option>
            <option value="72 Months"><?=$_72months?></option>
            <option value="84 Months"><?=$_84months?></option>
          </select>
        </div>
        
      </div>

      <div class="form-group row btn">
        
          <button name="submit" type="submit" class="btn btn-primary btn-cal"><?=$Calculate?></button>
          
        </div>
      </div>
    </form>
    
    <div class="container result-main">
        <div class="result result-estimate">
        </div>
        <div class="result-group btn-cover"><button class="mdc-button mdc-button--outlined"><span class="mdc-button__label"><?=$reset_calculator?></span></button></div>
    </div>
    
    <div id="name-error"></div>
</div>

<script type="text/javascript">

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#frm-payment').on('submit',function(e){
        e.preventDefault();
        let type = $('#select-type').val();
        let model = $('#select-model').val();
        let down = $('#down-payment').val();
        let term = $('#select-term').val();
        //console.log(model);
        if(type == '' || model == '' || down == '' || term == ''){
            alert('Please select all fields');
        } else{
            $.ajax({
              url: "<?=$calculators?>",
              type:"POST",
              data:{
                "_token": "<?=csrf_token()?>",
                model:model,
                down:down,
                term:term
              },
              success:function(response){
                //console.log(response);
                if (!$.trim(response)){   
                    alert("No result matched your selection!");
                }
                else{   
                    $('.result-main').fadeIn('slow');
                    $('.result-estimate').html(response);
                }
              },
              error: function(response) {
                $('#name-error').text(response.responseJSON.errors.name);
               }
             });
        }
    });
    
    $('#select-type').on('change',function(e){
        e.preventDefault();

        let model_type = $(this).val();
        //console.log(model);

        $.ajax({
          url: "<?=$sele_mdel?>",
          type:"POST",
          data:{
            "_token": "<?=csrf_token()?>",
            model_type:model_type
          },
          success:function(response){
            
            if (response) {
              $('#select-model').html(response);
            }
          },
          error: function(response) {
            $('#name-error').text(response.responseJSON.errors.name);
           }
         });
    });
    
    $('.mdc-button').on('click', function(){
       $("select").val($("select option:first").val());
       $('.result-main').fadeOut('slow');
    });
</script>

<?php } ?>