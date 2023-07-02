<?php if(isset($_GET['page'])){
    echo '<h1 style="text-align:center;">Compare Module</h1>';
} else{ 
$lang_code = app()->getLocale();
?>

<style>
    i.bx.bx-x {
        font-size: 24px!important;
        color: #ed0000;
    }
    i.bx.bx-check {
        font-size: 30px!important;
        color: #2f8400;
    }
    h2.product-compare-title {
        font-size: 16px;
        font-weight: bold;
    }
    .product .default-img {width:100px;}
    .col-code_no td{text-align:center;}
    .suspensiontire, .engine, .dimensions, .sparepart{
        text-align: center;
        background: #f5f5f5;
        font-weight: bolder;
        height: 46px;
    }
    tr.modelcode.col-code_no {
        background: #e6e6e6ed;
        color: red;
        font-weight: bolder;
        height: 48px;
    }
    .compare-main {
        max-width: 1111px;
        margin: 0 auto;
        display: block;
        padding-top:60px;
    }
    .col-img{
        border-top: 1px solid #cccccc69;
    }
    h1.entry-title.main_title {
        padding-bottom: 40px;
        text-transform: uppercase;
        font-weight: bolder;
        text-align: center;
    }
    .table-compare tr {
        border-bottom: 1px solid #cccccc69;
        border-left: solid 1px #cccccc69;
    }
    .table-compare td{
        border-right: solid 1px #cccccc69;
        line-height: 2.2;
        padding-left: 6px;
    }
    .table-compare .first-compare {
        width: 28%;
        font-size: 22px;
        font-weight: bolder;
    }
    .table-compare  td img {
        max-width: 148px;
        padding: 16px 0;
    }
    a.choose_product {
        background: #ed1b2f;
        width: 170px;
        text-align: center;
        color: #fff;
        margin: auto;
        font-size: 15px;
    }
    a.choose_product:hover {
        background: #000;
    }
    td.product {
        text-align: center;
        vertical-align: text-top;
    }
    tr.checkbox td {
        text-align: center;
    }
    .add_product {
        padding-bottom: 12px;
    }
    a.select-item.seleted{text-align:center;}
    .add_product img{height:auto;max-width: 50%!important;}
    .popup-model {
        background: #000000d6;
        position: fixed;
        z-index: 999;
        width: 100%;
        top: 0;
        height: 100vh;
        display:none;
        text-align: center;
    }
        /* line 4860, sass/style.scss */
    .compare-product .table-compare tr.col-code_no .fa-angle-down {
      font-weight: 800;
      padding-left: 5px;
    }
    /* line 4868, sass/style.scss */
    .compare-product .choose_product {
      background-color: #ed1b2f;
      color: #ffffff;
      text-align: center;
      font-weight: 500;
      padding: 5px;
      font-size: 12px;
      width: 70%;
      margin: 0 auto;
      display: block;
    }
    /* line 4879, sass/style.scss */
    .compare-product .choose_product:hover {
      background-color: #222222;
    }
    /* line 4884, sass/style.scss */
    .compare-product .remove_product {
      margin: auto;
      display: block;
      text-align: center;
      font-weight: 500;
      padding: 5px;
      font-size: 12px;
      width: 70%;
      margin: 0 auto;
      border: 1px solid #ed1b2f;
      color: #ed1b2f;
    }
    /* line 4896, sass/style.scss */
    .compare-product .remove_product:hover {
      border-color: #222222;
      color: #222222;
    }
    /* line 4902, sass/style.scss */
    .compare-product .product {
      text-align: center;
    }
    /* line 4906, sass/style.scss */
    .compare-product .blocker {
      background-color: rgba(0, 0, 0, 0.5);
    }
    /* line 4909, sass/style.scss */
    .compare-product .content-slide-menu {
      float: left;
      width: 220px;
      padding: 0 10px;
    }
    /* line 4914, sass/style.scss */
    .compare-product .content-slide-menu li {
      list-style-type: none;
    }
    /* line 4918, sass/style.scss */
    .compare-product .content-slide-menu a {
      text-decoration: none;
      color: #2b2b2b;
      font-size: 135%;
    }
    /* line 4923, sass/style.scss */
    .compare-product .content-slide-menu a:hover {
      color: #3ca3c5;
    }
    /* line 4929, sass/style.scss */
    .compare-product .content-slide {
      float: left;
      width: 440px;
    }
    /* line 4933, sass/style.scss */
    .compare-product .content-slide .content {
      display: none;
    }
    /* line 4938, sass/style.scss */
    .compare-product .active {
      color: #3ca3c5 !important;
    }
    
    /* line 4944, sass/style.scss */
    #product_modal.modal {
      max-width: 910px;
      height: 600px;
      border-radius: 0;
      top: 15%;
    }
    /* line 4951, sass/style.scss */
    #product_modal .close-modal {
      display: none !important;
    }
    /* line 4955, sass/style.scss */
    #product_modal .menu_container {
      display: flex;
      justify-content: center;
    }
    /* line 4959, sass/style.scss */
    #product_modal .menu_container .image-category {
      width: 33%;
      text-align: center;
      position: relative;
    }
    /* line 4965, sass/style.scss */
    #product_modal .menu_container .image-category.active a {
      color: #ed1b2f;
    }
    /* line 4968, sass/style.scss */
    #product_modal .menu_container .image-category.active a img {
      filter: none;
    }
    /* line 4974, sass/style.scss */
    #product_modal .menu_container .image-category a {
      color: #929292;
    }
    /* line 4977, sass/style.scss */
    #product_modal .menu_container .image-category a:after {
      border-right: 1px solid #929292;
      content: '';
      height: 50%;
      position: absolute;
      right: 0;
      top: 15%;
    }
    /* line 4986, sass/style.scss */
    #product_modal .menu_container .image-category a:hover {
      color: #ed1b2f;
    }
    /* line 4989, sass/style.scss */
    #product_modal .menu_container .image-category a:hover img {
      filter: none;
    }
    /* line 4994, sass/style.scss */
    #product_modal .menu_container .image-category a img {
      filter: grayscale(100%);
    }
    /* line 5001, sass/style.scss */
    #product_modal .menu_container .image-category:last-child a:after {
      border-right: medium none;
    }
    /* line 5009, sass/style.scss */
    #product_modal .category_container {
      padding: 5% 0 15%;
    }
    /* line 5012, sass/style.scss */
    #product_modal .category_container .product_container {
      display: flex;
      flex-flow: row wrap;
      overflow-y: auto;
    }
    a.select-item.seleted span {
      background: #d4d4d4;
      padding: 4px 4px 2px 4px;
      font-size: 12px;
      color: #383838;
    }
    /* line 5018, sass/style.scss */
    #product_modal .category_container .product_container a {
      width: 25%;
      color: #929292;
    }
    /* line 5023, sass/style.scss */
    #product_modal .category_container .product_container a:hover {
      color: #ed1b2f;
    }
    /* line 5027, sass/style.scss */
    #product_modal .category_container .product_container a .add_product {
      cursor: pointer;
      text-align: center;
      display: inline-grid;
    }
    /* line 5032, sass/style.scss */
    #product_modal .category_container .product_container a .add_product img {
      max-width: 70%;
      margin: auto;
    }
    /* line 5040, sass/style.scss */
    #product_modal .category_container a.view_all {
      position: absolute;
      text-align: center;
      width: 230px;
      padding: 10px;
      background: #ed1b2f;
      -webkit-clip-path: polygon(100% 0, 100% 18%, 60% 24%, 49% 22%, 39% 24%, 0 18%, 0 0);
      clip-path: polygon(100% 0, 100% 18%, 60% 24%, 49% 22%, 39% 24%, 0 18%, 0 0);
      min-height: 200px;
      display: inline-block;
      left: 0;
      right: 0;
      margin: 30px auto;
      color: #ffffff;
      cursor: pointer;
    }
    
    /* line 5059, sass/style.scss */
    span#et-info-email {
      display: none;
    }
    i.bx.bx-check, i.bx.bx-x  {
    font-size: 20px;
    font-weight: 800;
    }

    /* line 5063, sass/style.scss */
    .et_pb_video_box {
      padding-bottom: 56.25%;
      padding-top: 30px;
      height: 0;
      overflow: hidden;
    }
    /* line 5069, sass/style.scss */
    .et_pb_video_box iframe {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
    }
    
    /* line 5077, sass/style.scss */
    .full {
      width: 100%;
      text-align: center;
      color: #ed1b2f !important;
      border-color: #ed1b2f;
    }
    /* line 5082, sass/style.scss */
    .full:hover {
      background-color: #ed1b2f !important;
      color: #ffffff !important;
    }
    
    /* line 5088, sass/style.scss */
    ul.et_pb_tabs_controls {
      display: table;
      width: 100%;
      border: 1px solid #EAEAEA;
    }
    /* line 5092, sass/style.scss */
    ul.et_pb_tabs_controls li {
      float: none;
      display: table-cell;
      text-align: center;
    }
    @media (max-width: 768px) {
      /* line 5092, sass/style.scss */
      ul.et_pb_tabs_controls li {
        display: block;
        border-bottom: 1px solid #EAEAEA;
      }
    }
    /* line 5100, sass/style.scss */
    ul.et_pb_tabs_controls li a {
      display: block;
      padding: 8px 5px;
    }
    /* line 5104, sass/style.scss */
    ul.et_pb_tabs_controls li.et_pb_tab_active {
      background-color: #ed1b2f;
    }
    /* line 5106, sass/style.scss */
    ul.et_pb_tabs_controls li.et_pb_tab_active a {
      color: #ffffff !important;
    }
    
    /* line 5112, sass/style.scss */
    .et_pb_tabs {
      border: none;
    }
    /* line 5114, sass/style.scss */
    .et_pb_tabs .et_pb_tab {
      padding: 0;
    }
    
    /* line 5118, sass/style.scss */
    blockquote {
      border-color: transparent;
    }
    
    /* line 5122, sass/style.scss */
    ol {
      counter-reset: myOrderedListItemsCounter;
    }
    
    /* line 5125, sass/style.scss */
    ol li {
      list-style-type: none;
      position: relative;
      padding-left: 50px;
      margin: 20px 0;
    }
    /* line 5130, sass/style.scss */
    ol li:before {
      counter-increment: myOrderedListItemsCounter;
      content: counter(myOrderedListItemsCounter);
      width: 35px;
      height: 35px;
      display: inline-block;
      text-align: center;
      color: #fff;
      background-color: #38B54A;
      position: absolute;
      left: 0;
      margin: -3px 10px 10px 0;
      font-size: 16px;
      font-weight: 400;
      line-height: 30px;
    }
    
    /* line 5150, sass/style.scss */
    .et_pb_tabs .et_pb_slider .et_pb_slide {
      min-height: 350px;
    }
    @media (max-width: 600px) {
      /* line 5150, sass/style.scss */
      .et_pb_tabs .et_pb_slider .et_pb_slide {
        min-height: 200px;
      }
    }
    
    /* line 5159, sass/style.scss */
    .new_model {
      position: fixed;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      z-index: 999999;
      padding: 20px;
      box-sizing: border-box;
      background-color: #000;
      background-color: rgba(0, 0, 0, 0.75);
      text-align: center;
    }
    /* line 5175, sass/style.scss */
    .new_model:before {
      content: "";
      display: inline-block;
      height: 100%;
      vertical-align: middle;
      margin-right: -0.05em;
    }
    
    /* line 5183, sass/style.scss */
    .modal {
      vertical-align: middle;
      position: relative;
      z-index: 2;
      max-width: 500px;
      box-sizing: border-box;
      width: 90%;
      background: #fff;
      padding: 15px 30px;
      -webkit-border-radius: 8px;
      -moz-border-radius: 8px;
      -o-border-radius: 8px;
      -ms-border-radius: 8px;
      border-radius: 8px;
      -webkit-box-shadow: 0 0 10px #000;
      -moz-box-shadow: 0 0 10px #000;
      -o-box-shadow: 0 0 10px #000;
      -ms-box-shadow: 0 0 10px #000;
      box-shadow: 0 0 10px #000;
      text-align: left;
    }
    /* line 5203, sass/style.scss */
    .modal a.close-modal {
      position: initial !important;
      background: none !important;
    }
    /* line 5206, sass/style.scss */
    .modal a.close-modal:before {
      text-indent: 0 !important;
      content: "x";
      color: white;
      position: absolute;
      right: -12.5px;
      top: -12.5px;
      width: 30px;
      height: 30px;
      border-radius: 50%;
      background: red;
      text-align: center;
      line-height: 29px;
      font-weight: bold;
    }
    
    /* line 5224, sass/style.scss */
    .click-popup {
      cursor: pointer;
    }
    
    /* line 5228, sass/style.scss */
    .service_modal {
      max-width: 1200px;
      display: inline-block;
    }
    /* line 5231, sass/style.scss */
    .service_modal .service-popup {
      display: flex;
    }
    @media (max-width: 600px) {
      /* line 5231, sass/style.scss */
      .service_modal .service-popup {
        display: block;
      }
    }
    /* line 5236, sass/style.scss */
    .service_modal .service-popup .img-popup {
      margin-right: 30px;
    }
    @media (max-width: 600px) {
      /* line 5236, sass/style.scss */
      .service_modal .service-popup .img-popup {
        margin-right: 0;
      }
    }
    /* line 5243, sass/style.scss */
    .service_modal .service-popup .box-popup a {
      display: block;
      color: #222222;
      white-space: nowrap;
    }
    /* line 5247, sass/style.scss */
    .service_modal .service-popup .box-popup a:hover {
      color: #ed1b2f;
    }
    /* line 5251, sass/style.scss */
    .service_modal .service-popup .box-popup a i {
      color: #ed1b2f;
      margin-right: 5px;
    }
    /* line 5256, sass/style.scss */
    .service_modal .service-popup .box-popup .title-popup {
      font-size: 17px;
      font-weight: bold;
      text-align: center;
      margin-bottom: 10px;
    }
    /* line 5264, sass/style.scss */
    .service_modal .close_new_model {
      position: absolute;
      right: -10px;
      top: -10px;
      width: 30px;
      height: 30px;
      border-radius: 50%;
      background: red;
      text-align: center;
      line-height: 27px;
      color: white;
      font-weight: bold;
      cursor: pointer;
      -webkit-box-shadow: 0px 0px 4px 0px rgba(0, 0, 0, 0.5);
      -moz-box-shadow: 0px 0px 4px 0px rgba(0, 0, 0, 0.5);
      box-shadow: 0px 0px 4px 0px rgba(0, 0, 0, 0.5);
    }
    
    /* line 5282, sass/style.scss */
    .img-bg {
      background-size: contain;
      background-repeat: no-repeat;
      width: 100%;
      height: 100%;
    }
    

    /* line 5329, sass/style.scss */
    .inner {
      padding-left: 25px;
    }
</style>

<?php 
$currentLocale = app()->getLocale();

if (isset($_GET['page'])){
   echo '';
} 

else{ 
    $lang_code = app()->getLocale();
    $compare_list = 'Compare List';
    $mode_code = 'MODEL CODE';
    $engine_system = 'Engine System';
    $bore_stroke = 'Bore and Stroke';
    $displacement = 'Displacement';
    $fuel_system = 'Fuel System';
    $fuel_type = 'Fuel Type';
    $ignition_system ='Ignition System';
    $final_Drive_Type ='Final Drive Type';			
    $Clutch_System ='Clutch System';			
    $Starter_System	= 'Starter System';		
    $Compression_Ratio ='Compression Ratio';			
    $Engine_oil_capacity ='Engine oil capacity';		
    $Transmission ='Transmission';	
    $Oil_replacement ='Oil replacement';			
    $Gearshift_pattern ='Gearshift pattern';	
    $primary_reduction='(primary reduction/final reduction)';			
    $Gear_ratio ='Gear ratio : 1st';			
    $Gear_radio1='Gear radio : 2nd';			
    $Gear_radio3= 'Gear radio : 3rd';			
    $Gear_radio4 ='Gear radio : 4th';
    $choose= 'Choose +';
    $engin= 'ENGINE';
    $demension = 'DIMENSIONS';
    $suspension='SUSPENSION & TIRE';
    $wlh ='[W x L x H]';
    $Wheelbase ='Wheelbase';
    $Weight='Weight';
    $Ground_Clearance='Ground Clearance';
    $Seat_High ='Seat High';
    $Fuel_Tank ='Fuel Tank';
    $Caster_Angle_Trail='Caster Angle/Trail';
    $Frame_Type ='Frame Type';
    $Battery='Battery';
    $Tire_Size_Front ='Tire Size Front';
    $Tire_Size_Rear ='Tire Size Rear';
    $Front_brake ='Front brake';
    $Rear_brake ='Rear brake';
    $Tire_Type ='Tire Type';
    $Suspension_Front ='Suspension Front';
    $Suspension_Rear='Suspension Rear';
    $spare_part='Spare Part';
    

    if ($lang_code == 'kh'){
        $compare_list = ' ប្រៀបធៀប ';
        $mode_code = 'ម៉ូឌែលកូដ';
        $engine_system = 'ប្រភេទម៉ាស៊ីន';
        $bore_stroke = 'អង្កត់ផ្ចិត និងចំងាយចរពិស្តុង';
        $displacement = 'ទំហំមាឌស៊ីឡាំង	';
        $fuel_system = 'ប្រព័ន្ធប្រេង';
        $fuel_type = 'ប្រភេទប្រេងឥន្ធនៈ';
        $ignition_system ='ប្រព័ន្ធចំហេះ';
        $final_Drive_Type ='ប្រព័ន្ទបញ្ចូលចលនាចុងក្រោយ';			
        $Clutch_System ='ប្រព័ន្ធលេខ';			
        $Starter_System	= 'ប្រព័ន្ធបញ្ឆេះម៉ាសុីន';		
        $Compression_Ratio ='កម្រិតបង្ហាប់';			
        $Engine_oil_capacity ='ចំណុះប្រេងម៉ាស៊ីន';		
        $Transmission ='ប្រព័ន្ធលេខ';	
        $Oil_replacement ='រយៈពេលដែលត្រូវប្តូរប្រេងម៉ាស៊ីន';			
        $Gearshift_pattern ='ប្រព័ន្ធបញ្ចូលចលនា (ចង្កឹះលេខ)	';	
        $primary_reduction='ផលធៀបពីញ៉ុងងឺ/ផលធៀបច្រវាក់ពីញ៉ុង';			
        $Gear_ratio ='ផលធៀបពីញ៉ុងលេខ : លេខ 1';			
        $Gear_radio1='ផលធៀបពីញ៉ុងលេខ : លេខ 2';			
        $Gear_radio3= 'ផលធៀបពីញ៉ុងលេខ : លេខ 3';			
        $Gear_radio4 ='ផលធៀបពីញ៉ុងលេខ : លេខ 4';
        $choose ='ជ្រើសរើស';
        $engin ='ម៉ាស៊ីន';
        $demension='វិមាត្រ';
        $suspension='ប្រព័ន្ធបូម និងសំបកកង់';
        $wlh ='បណ្តោយ x ទទឹង x កំពស់';
        $Wheelbase ='ប្រវែងពីកង់មុខទៅកង់ក្រោយ	';
        $Weight='ទម្ងន់';
        $Ground_Clearance='គំលាតពីដី';
        $Seat_High ='កម្ពស់កែប';
        $Fuel_Tank ='ចំណុះធុងសាំង';
        $Caster_Angle_Trail='មុំទម្រេតជំពាស់មុខ';
        $Frame_Type ='តួម៉ូតូ';
        $Battery='អាគុយ';
        $Tire_Size_Front ='ទំហំសំបកកង់ (មុខ)';
        $Tire_Size_Rear ='ទំហំសំបកកង់ (ក្រោយ)	';
        $Front_brake ='ប្រព័ន្ធហ្វ្រាំង (មុខ)';
        $Rear_brake ='ប្រព័ន្ធហ្រ្វាំង (ក្រោយ)';
        $Tire_Type ='ប្រព័ន្ធកង់';
        $Suspension_Front ='ប្រព័ន្ធបូមមុខ	';
        $Suspension_Rear='ប្រព័ន្ធបូមក្រោយ	';
        $spare_part='ផ្នែកគ្រឿងបន្លាស់';


    } else{echo '';}

?>


<article class="compare-main">
   <h1 class="entry-title main_title">Compare</h1>
   <div class="entry-content">
      <div class="et_pb_section">
         <div class="et_pb_row">
            <div class="et_pb_column et_pb_column_4_4">
               <table class="table-compare">
                  <tbody>
                     <tr class="col-img">
                        <td class="first-compare"><span><?php echo $compare_list ;?></span></td>
                        <td class="product compare-item-1" >
                           <a href="#product_modal" rel="modal:open" class="choose_product" data-index="0" style="display: block"><?php echo $choose ;?></a>
                           <a href="#" class="remove_product" data-index="0" style="display: none">Delete -</a>
                           <img class="default-img" src="https://ncxhonda.com.kh/wp-content/themes/Codingate-child/images/auto.png" data-spai="1" alt="" data-spai-upd="126">
                           <h2 class="product-compare-title"></h2>
                        </td>
                        <td class="product compare-item-2">
                           <a href="#product_modal" rel="modal:open" class="choose_product" data-index="1" style="display: block"><?php echo $choose ;?></a>
                           <a href="#" class="remove_product" data-index="1" style="display: none">Delete -</a>
                           <img class="default-img" src="https://ncxhonda.com.kh/wp-content/themes/Codingate-child/images/auto.png" data-spai="1" alt="" data-spai-upd="126">
                           <h2 class="product-compare-title"></h2>
                        </td>
                        <td class="product compare-item-3">
                           <a href="#product_modal" rel="modal:open" class="choose_product" data-index="2" style="display: block"><?php echo $choose ;?></a>
                           <a href="#" class="remove_product" data-index="2" style="display: none">Delete -</a>
                           <img class="default-img" src="https://ncxhonda.com.kh/wp-content/themes/Codingate-child/images/auto.png">
                           <h2 class="product-compare-title"></h2>
                        </td>
                     </tr>
                     <tr class="modelcode col-code_no">
                        <td><?php echo $mode_code ;?></td>
                        <td class="compare-item-code-1"></td>
                        <td class="compare-item-code-2"></td>
                        <td class="compare-item-code-3"></td>
                     </tr>
                     <tr class="engine header">
                        <td colspan="4"><?php echo $engin ;?></td>
                     </tr>
                     <tr class="enginesystem">
                        <td><?php echo $engine_system ;?></td>
                        <td class="compare-item-code-1 sub-field"></td>
                        <td class="compare-item-code-2 sub-field"></td>
                        <td class="compare-item-code-3 sub-field"></td>
                     </tr>
                     <tr class="boreandstroke">
                        <td><?php echo $bore_stroke ;?></td>
                        <td class="compare-item-code-1 sub-field"></td>
                        <td class="compare-item-code-2 sub-field"></td>
                        <td class="compare-item-code-3 sub-field"></td>
                     </tr>
                     <tr class="displacement">
                        <td><?php echo $displacement ;?></td>
                        <td class="compare-item-code-1 sub-field"></td>
                        <td class="compare-item-code-2 sub-field"></td>
                        <td class="compare-item-code-3 sub-field"></td>
                     </tr>
                     <tr class="fuelsystem">
                        <td><?php echo $fuel_system ;?></td>
                        <td class="compare-item-code-1 sub-field"></td>
                        <td class="compare-item-code-2 sub-field"></td>
                        <td class="compare-item-code-3 sub-field"></td>
                     </tr>
                     <tr class="fueltype">
                        <td><?php echo $fuel_type ;?></td>
                        <td class="compare-item-code-1 sub-field"></td>
                        <td class="compare-item-code-2 sub-field"></td>
                        <td class="compare-item-code-3 sub-field"></td>
                     </tr>
                     <tr class="ignitionsystem">
                        <td><?php echo $ignition_system ;?></td>
                        <td class="compare-item-code-1 sub-field"></td>
                        <td class="compare-item-code-2 sub-field"></td>
                        <td class="compare-item-code-3 sub-field"></td>
                     </tr>
                     <tr class="finaldrivetype">
                        <td><?php echo $final_Drive_Type ;?></td>
                        <td class="compare-item-code-1 sub-field"></td>
                        <td class="compare-item-code-2 sub-field"></td>
                        <td class="compare-item-code-3 sub-field"></td>
                     </tr>
                     <tr class="clutchsystem">
                        <td><?php echo $Clutch_System ;?></td>
                        <td class="compare-item-code-1 sub-field"></td>
                        <td class="compare-item-code-2 sub-field"></td>
                        <td class="compare-item-code-3 sub-field"></td>
                     </tr>
                     <tr class="startersystem">
                        <td><?php echo $Starter_System ;?></td>
                        <td class="compare-item-code-1 sub-field"></td>
                        <td class="compare-item-code-2 sub-field"></td>
                        <td class="compare-item-code-3 sub-field"></td>
                     </tr>
                     <tr class="compressionratio">
                        <td><?php echo $Compression_Ratio ;?></td>
                        <td class="compare-item-code-1 sub-field"></td>
                        <td class="compare-item-code-2 sub-field"></td>
                        <td class="compare-item-code-3 sub-field"></td>
                     </tr>
                     <tr class="engineoilcapacity">
                        <td><?php echo $Engine_oil_capacity ;?></td>
                        <td class="compare-item-code-1 sub-field"></td>
                        <td class="compare-item-code-2 sub-field"></td>
                        <td class="compare-item-code-3 sub-field"></td>
                     </tr>
                     <tr class="transmission">
                        <td><?php echo $Transmission ;?></td>
                        <td class="compare-item-code-1 sub-field"></td>
                        <td class="compare-item-code-2 sub-field"></td>
                        <td class="compare-item-code-3 sub-field"></td>
                     </tr>
                     <tr class="oilreplacement">
                        <td><?php echo $Oil_replacement ;?></td>
                        <td class="compare-item-code-1 sub-field"></td>
                        <td class="compare-item-code-2 sub-field"></td>
                        <td class="compare-item-code-3 sub-field"></td>
                     </tr>
                     <tr class="gearshiftpattern">
                        <td><?php echo $Gearshift_pattern ;?></td>
                        <td class="compare-item-code-1 sub-field"></td>
                        <td class="compare-item-code-2 sub-field"></td>
                        <td class="compare-item-code-3 sub-field"></td>
                     </tr>
                     <tr class="primaryreductionfinalreduction">
                        <td><?php echo $primary_reduction ;?></td>
                        <td class="compare-item-code-1 sub-field"></td>
                        <td class="compare-item-code-2 sub-field"></td>
                        <td class="compare-item-code-3 sub-field"></td>
                     </tr>
                     <tr class="gearratio1st">
                        <td><?php echo $Gear_ratio ;?></td>
                        <td class="compare-item-code-1 sub-field"></td>
                        <td class="compare-item-code-2 sub-field"></td>
                        <td class="compare-item-code-3 sub-field"></td>
                     </tr>
                     <tr class="gearradio2nd">
                        <td><?php echo $Gear_radio1 ;?></td>
                        <td class="compare-item-code-1 sub-field"></td>
                        <td class="compare-item-code-2 sub-field"></td>
                        <td class="compare-item-code-3 sub-field"></td>
                     </tr>
                     <tr class="gearradio3rd">
                        <td><?php echo $Gear_radio3 ;?></td>
                        <td class="compare-item-code-1 sub-field"></td>
                        <td class="compare-item-code-2 sub-field"></td>
                        <td class="compare-item-code-3 sub-field"></td>
                     </tr>
                     <tr class="gearradio4th">
                        <td><?php echo $Gear_radio3 ;?></td>
                        <td class="compare-item-code-1 sub-field"></td>
                        <td class="compare-item-code-2 sub-field"></td>
                        <td class="compare-item-code-3 sub-field"></td>
                     </tr>
                     <tr class="dimensions header">
                        <td colspan="4"><?php echo $demension ;?></td>
                     </tr>
                     <tr class="wxlxh">
                        <td><?php echo $wlh ;?></td>
                        <td class="compare-item-code-1 sub-field"></td>
                        <td class="compare-item-code-2 sub-field"></td>
                        <td class="compare-item-code-3 sub-field"></td>
                     </tr>
                     <tr class="wheelbase">
                        <td><?php echo $Wheelbase ;?></td>
                        <td class="compare-item-code-1 sub-field"></td>
                        <td class="compare-item-code-2 sub-field"></td>
                        <td class="compare-item-code-3 sub-field"></td>
                     </tr>
                     <tr class="weight">
                        <td><?php echo $Weight ;?></td>
                        <td class="compare-item-code-1 sub-field"></td>
                        <td class="compare-item-code-2 sub-field"></td>
                        <td class="compare-item-code-3 sub-field"></td>
                     </tr>
                     <tr class="groundclearance">
                        <td><?php echo $Ground_Clearance ;?></td>
                        <td class="compare-item-code-1 sub-field"></td>
                        <td class="compare-item-code-2 sub-field"></td>
                        <td class="compare-item-code-3 sub-field"></td>
                     </tr>
                     <tr class="seathigh">
                        <td><?php echo $Seat_High ;?></td>
                        <td class="compare-item-code-1 sub-field"></td>
                        <td class="compare-item-code-2 sub-field"></td>
                        <td class="compare-item-code-3 sub-field"></td>
                     </tr>
                     <tr class="fueltank">
                        <td><?php echo $Fuel_Tank ;?></td>
                        <td class="compare-item-code-1 sub-field"></td>
                        <td class="compare-item-code-2 sub-field"></td>
                        <td class="compare-item-code-3 sub-field"></td>
                     </tr>
                     <tr class="casterangletrail">
                        <td><?php echo $Caster_Angle_Trail;?></td>
                        <td class="compare-item-code-1 sub-field"></td>
                        <td class="compare-item-code-2 sub-field"></td>
                        <td class="compare-item-code-3 sub-field"></td>
                     </tr>
                     <tr class="frametype">
                        <td><?php echo $Frame_Type ;?></td>
                        <td class="compare-item-code-1 sub-field"></td>
                        <td class="compare-item-code-2 sub-field"></td>
                        <td class="compare-item-code-3 sub-field"></td>
                     </tr>
                     <tr class="battery">
                        <td><?php echo $Battery ;?></td>
                        <td class="compare-item-code-1 sub-field"></td>
                        <td class="compare-item-code-2 sub-field"></td>
                        <td class="compare-item-code-3 sub-field"></td>
                     </tr>
                     <tr class="suspensiontire header">
                        <td colspan="4"><?php echo $suspension ;?></td>
                     </tr>
                     <tr class="tiresizefront">
                        <td><?php echo $Tire_Size_Front ;?></td>
                        <td class="compare-item-code-1 sub-field"></td>
                        <td class="compare-item-code-2 sub-field"></td>
                        <td class="compare-item-code-3 sub-field"></td>
                     </tr>
                     <tr class="tiresizerear">
                        <td><?php echo $Tire_Size_Rear ;?></td>
                        <td class="compare-item-code-1 sub-field"></td>
                        <td class="compare-item-code-2 sub-field"></td>
                        <td class="compare-item-code-3 sub-field"></td>
                     </tr>
                     <tr class="frontbrake">
                        <td><?php echo $Front_brake ;?></td>
                        <td class="compare-item-code-1 sub-field"></td>
                        <td class="compare-item-code-2 sub-field"></td>
                        <td class="compare-item-code-3 sub-field"></td>
                     </tr>
                     <tr class="rearbrake">
                        <td><?php echo $Rear_brake;?></td>
                        <td class="compare-item-code-1 sub-field"></td>
                        <td class="compare-item-code-2 sub-field"></td>
                        <td class="compare-item-code-3 sub-field"></td>
                     </tr>
                     <tr class="tiretype">
                        <td><?php echo $Tire_Type;?></td>
                        <td class="compare-item-code-1 sub-field"></td>
                        <td class="compare-item-code-2 sub-field"></td>
                        <td class="compare-item-code-3 sub-field"></td>
                     </tr>
                     <tr class="suspensionfront">
                        <td><?php echo $Suspension_Front ;?></td>
                        <td class="compare-item-code-1 sub-field"></td>
                        <td class="compare-item-code-2 sub-field"></td>
                        <td class="compare-item-code-3 sub-field"></td>
                     </tr>
                     <tr class="suspensionrear">
                        <td><?php echo $Suspension_Rear ;?></td>
                        <td class="compare-item-code-1 sub-field"></td>
                        <td class="compare-item-code-2 sub-field"></td>
                        <td class="compare-item-code-3 sub-field"></td>
                     </tr>
                     <tr class="sparepart header">
                        <td colspan="4"><?php echo $spare_part ;?></td>
                     </tr>
                     <tr class="hondasmart checkbox">
                        <td><img src="https://ncxhonda.com.kh/wp-content/themes/Codingate-child/images/honda_smart.png" data-spai="1" alt="honda_smart" data-spai-upd="127"></td>
                        <td class="compare-item-code-1"></td>
                        <td class="compare-item-code-2"></td>
                        <td class="compare-item-code-3"></td>
                     </tr>
                     <tr class="pgmfi checkbox">
                        <td><img src="https://ncxhonda.com.kh/wp-content/themes/Codingate-child/images/pgm_fi.png" data-spai="1" alt="pgm_fi" srcset="https://cdn.shortpixel.ai/spai/w_254+q_lossless+ret_img+to_webp/https://ncxhonda.com.kh/wp-content/themes/Codingate-child/images/pgm_fi.png 127w, https://ncxhonda.com.kh/wp-content/themes/Codingate-child/images/pgm_fi.png 206w" sizes="62vw, 100vw" data-spai-upd="127"></td>
                        <td class="compare-item-code-1"></td>
                        <td class="compare-item-code-2"></td>
                        <td class="compare-item-code-3"></td>
                     </tr>
                     <tr class="esp checkbox">
                        <td><img src="https://ncxhonda.com.kh/wp-content/themes/Codingate-child/images/esp.png" data-spai="1" alt="esp" srcset="https://cdn.shortpixel.ai/spai/w_254+q_lossless+ret_img+to_webp/https://ncxhonda.com.kh/wp-content/themes/Codingate-child/images/esp.png 127w, https://ncxhonda.com.kh/wp-content/themes/Codingate-child/images/esp.png 157w" sizes="81vw, 100vw" data-spai-upd="127"></td>
                        <td class="compare-item-code-1"></td>
                        <td class="compare-item-code-2"></td>
                        <td class="compare-item-code-3"></td>
                     </tr>
                     <tr class="esp_plus checkbox">
                        <td><img src="https://ncxhonda.com.kh/wp-content/themes/Codingate-child/images/esp_plus.png" data-spai="1" alt="esp_plus" srcset="https://cdn.shortpixel.ai/spai/w_254+q_lossless+ret_img+to_webp/https://ncxhonda.com.kh/wp-content/themes/Codingate-child/images/esp_plus.png 127w, https://ncxhonda.com.kh/wp-content/themes/Codingate-child/images/esp_plus.png 220w" sizes="58vw, 100vw" data-spai-upd="127"></td>
                        <td class="compare-item-code-1"></td>
                        <td class="compare-item-code-2"></td>
                        <td class="compare-item-code-3"></td>
                     </tr>
                     <tr class="idlingstop checkbox">
                        <td><img src="https://ncxhonda.com.kh/wp-content/themes/Codingate-child/images/idling_stop.png" data-spai="1" alt="idling_stop" data-spai-upd="127"></td>
                        <td class="compare-item-code-1"></td>
                        <td class="compare-item-code-2"></td>
                        <td class="compare-item-code-3"></td>
                     </tr>
                     <tr class="combibrake checkbox">
                        <td><img src="https://ncxhonda.com.kh/wp-content/themes/Codingate-child/images/combi_brake.png" data-spai="1" alt="combi_brake" srcset="https://cdn.shortpixel.ai/spai/w_254+q_lossless+ret_img+to_webp/https://ncxhonda.com.kh/wp-content/themes/Codingate-child/images/combi_brake.png 127w, https://ncxhonda.com.kh/wp-content/themes/Codingate-child/images/combi_brake.png 205w" sizes="62vw, 100vw" data-spai-upd="127"></td>
                        <td class="compare-item-code-1"></td>
                        <td class="compare-item-code-2"></td>
                        <td class="compare-item-code-3"></td>
                     </tr>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
   <!-- .entry-content -->
</article>
<br><br>
<div class="popup-model">
    <div id="product_modal" class="modal" index="0" style="display: inline-block;">
           <div class="menu_container">
              <div class="image-category active" cat_id="36">
                 <a class="all-cat" href="#">
                    <img src="https://ncxhonda.com.kh/wp-content/uploads/2018/03/icon5.png" data-spai="1" data-spai-upd="107">
                    <div class="title">
                       A.T.						
                    </div>
                 </a>
              </div>
              <div class="image-category" cat_id="26">
                 <a class="all-cat" href="#">
                    <img src="https://ncxhonda.com.kh/wp-content/uploads/2018/03/icon4.png" data-spai="1" data-spai-upd="107">
                    <div class="title">
                       CUB						
                    </div>
                 </a>
              </div>
              <div class="image-category" cat_id="765">
                 <a class="all-cat" href="#">
                    <img src="https://ncxhonda.com.kh/wp-content/uploads/2019/09/icon6.png" data-spai="1" data-spai-upd="107">
                    <div class="title">
                       SPORT						
                    </div>
                 </a>
              </div>
           </div>
           <div class="category_container" cat_id="36" style="">
              <div class="product_container">

                  <?php 
                    $model = 'at';
                    $motors = getProduct_Model($model);
                    foreach($motors as $val){
                    ?>
                    <a href="#" class="select-item" data-item="0" data-thumb="<?=myUpload().$val->thumbnail;?>" data-id="<?= $val->id?>" data-title="<?= $val->title?>" <?php 
                        $id = $val->id;
                        $spec = getSpecification($id);
                        foreach ($spec as $value) {
                            echo 'data-code="'.$value->code.'"';
                            echo 'data-engine="'.$value->engine.'"';
                            echo 'data-bore="'.$value->bore.'"';
                            echo 'data-displacement="'.$value->displacement.'"';
                            echo 'data-fuel="'.$value->fuel.'"';
                            echo 'data-feul_type="'.$value->feul_type.'"';
                            echo 'data-ignition="'.$value->ignition.'"';
                            echo 'data-final_drive="'.$value->final_drive.'"';
                            echo 'data-clutch="'.$value->clutch.'"';
                            echo 'data-starter="'.$value->starter.'"';
                            echo 'data-compression="'.$value->compression.'"';
                            echo 'data-oil_capacity="'.$value->oil_capacity.'"';
                            echo 'data-transmission="'.$value->transmission.'"';
                            echo 'data-oil_replace="'.$value->oil_replace.'"';
                            echo 'data-gearshift="'.$value->gearshift.'"';
                            echo 'data-reduction="'.$value->reduction.'"';
                            echo 'data-ratio="'.$value->ratio.'"';
                            echo 'data-ratio1="'.$value->ratio1.'"';
                            echo 'data-ratio2="'.$value->ratio2.'"';
                            echo 'data-ratio3="'.$value->ratio3.'"';
                            
                            
                            echo 'data-wlh="'.$value->wlh.'"';
                            echo 'data-wheelbase="'.$value->wheelbase.'"';
                            echo 'data-weight="'.$value->weight.'"';
                            echo 'data-ground="'.$value->ground.'"';
                            echo 'data-seat="'.$value->seat.'"';
                            echo 'data-fuel_tank="'.$value->fuel_tank.'"';
                            echo 'data-caster="'.$value->caster.'"';
                            echo 'data-frame="'.$value->frame.'"';
                            echo 'data-battery="'.$value->battery.'"';
                            
                            
                            echo 'data-tire_front="'.$value->tire_front.'"';
                            echo 'data-tire_rear="'.$value->tire_rear.'"';
                            echo 'data-front_brake="'.$value->front_brake.'"';
                            echo 'data-rear_brake="'.$value->rear_brake.'"';
                            echo 'data-tire_type="'.$value->tire_type.'"';
                            echo 'data-suspension="'.$value->suspension.'"';
                            echo 'data-suspension_rear="'.$value->suspension_rear.'"';
                            
                            
                            echo 'data-hondasmart="'.$value->hst.'"';
                            echo 'data-pgmfi="'.$value->pgm.'"';
                            echo 'data-esp="'.$value->esp.'"';
                            echo 'data-esp_plus="'.$value->esp_plus.'"';
                            echo 'data-idlingstop="'.$value->idling.'"';
                            echo 'data-combibrake="'.$value->combi.'"';
                            
                        }
                    ?> >
                        <span></span>
                        <div class="add_product">
                           <img src="<?=myUpload().$val->thumbnail;?>" class="attachment-200x200 size-200x200 wp-post-image" alt="<?= $val->title?>"><?= $val->title?>
                        </div>
                    </a>
                <?php }?>
              </div>
           </div>
           <div class="category_container" cat_id="26" style="display: none;">
                <div class="product_container">
                  <?php 
                    $model = 'cub';
                    $motors = getProduct_Model($model);
                    foreach($motors as $val){
                    ?>
                    <a href="#" class="select-item" data-item="0" data-thumb="<?=myUpload().$val->thumbnail;?>" data-id="<?= $val->id?>" data-title="<?= $val->title?>" <?php 
                        $id = $val->id;
                        $spec = getSpecification($id);
                        foreach ($spec as $value) {
                            echo 'data-code="'.$value->code.'"';
                            echo 'data-engine="'.$value->engine.'"';
                            echo 'data-bore="'.$value->bore.'"';
                            echo 'data-displacement="'.$value->displacement.'"';
                            echo 'data-fuel="'.$value->fuel.'"';
                            echo 'data-feul_type="'.$value->feul_type.'"';
                            echo 'data-ignition="'.$value->ignition.'"';
                            echo 'data-final_drive="'.$value->final_drive.'"';
                            echo 'data-clutch="'.$value->clutch.'"';
                            echo 'data-starter="'.$value->starter.'"';
                            echo 'data-compression="'.$value->compression.'"';
                            echo 'data-oil_capacity="'.$value->oil_capacity.'"';
                            echo 'data-transmission="'.$value->transmission.'"';
                            echo 'data-oil_replace="'.$value->oil_replace.'"';
                            echo 'data-gearshift="'.$value->gearshift.'"';
                            echo 'data-reduction="'.$value->reduction.'"';
                            echo 'data-ratio="'.$value->ratio.'"';
                            echo 'data-ratio1="'.$value->ratio1.'"';
                            echo 'data-ratio2="'.$value->ratio2.'"';
                            echo 'data-ratio3="'.$value->ratio3.'"';
                            
                            echo 'data-wlh="'.$value->wlh.'"';
                            echo 'data-wheelbase="'.$value->wheelbase.'"';
                            echo 'data-weight="'.$value->weight.'"';
                            echo 'data-ground="'.$value->ground.'"';
                            echo 'data-seat="'.$value->seat.'"';
                            echo 'data-fuel_tank="'.$value->fuel_tank.'"';
                            echo 'data-caster="'.$value->caster.'"';
                            echo 'data-frame="'.$value->frame.'"';
                            echo 'data-battery="'.$value->battery.'"';
                            
                            echo 'data-tire_front="'.$value->tire_front.'"';
                            echo 'data-tire_rear="'.$value->tire_rear.'"';
                            echo 'data-front_brake="'.$value->front_brake.'"';
                            echo 'data-rear_brake="'.$value->rear_brake.'"';
                            echo 'data-tire_type="'.$value->tire_type.'"';
                            echo 'data-suspension="'.$value->suspension.'"';
                            echo 'data-suspension_rear="'.$value->suspension_rear.'"';
                            
                            echo 'data-hondasmart="'.$value->hst.'"';
                            echo 'data-pgmfi="'.$value->pgm.'"';
                            echo 'data-esp="'.$value->esp.'"';
                            echo 'data-esp_plus="'.$value->esp_plus.'"';
                            echo 'data-idlingstop="'.$value->idling.'"';
                            echo 'data-combibrake="'.$value->combi.'"';
                        }
                    ?> >
                        <span></span>
                        <div class="add_product">
                           <img src="<?=myUpload().$val->thumbnail;?>" class="attachment-200x200 size-200x200 wp-post-image" alt="<?= $val->title?>"><?= $val->title?>
                        </div>
                    </a>
                <?php }?>
              </div>
           </div>
           <div class="category_container" cat_id="765" style="display: none;">
                <div class="product_container">
                  <?php 
                    
                    $model = 'sport';
                    $motors = getProduct_Model($model);
                    foreach($motors as $val){
                    ?>
                    <a href="#" class="select-item" data-item="0" data-thumb="<?=myUpload().$val->thumbnail;?>" data-id="<?= $val->id?>" data-title="<?= $val->title?>" <?php 
                        $id = $val->id;
                        $spec = getSpecification($id);
                        foreach ($spec as $value) {
                            echo 'data-code="'.$value->code.'"';
                            echo 'data-engine="'.$value->engine.'"';
                            echo 'data-bore="'.$value->bore.'"';
                            echo 'data-displacement="'.$value->displacement.'"';
                            echo 'data-fuel="'.$value->fuel.'"';
                            echo 'data-feul_type="'.$value->feul_type.'"';
                            echo 'data-ignition="'.$value->ignition.'"';
                            echo 'data-final_drive="'.$value->final_drive.'"';
                            echo 'data-clutch="'.$value->clutch.'"';
                            echo 'data-starter="'.$value->starter.'"';
                            echo 'data-compression="'.$value->compression.'"';
                            echo 'data-oil_capacity="'.$value->oil_capacity.'"';
                            echo 'data-transmission="'.$value->transmission.'"';
                            echo 'data-oil_replace="'.$value->oil_replace.'"';
                            echo 'data-gearshift="'.$value->gearshift.'"';
                            echo 'data-reduction="'.$value->reduction.'"';
                            echo 'data-ratio="'.$value->ratio.'"';
                            echo 'data-ratio1="'.$value->ratio1.'"';
                            echo 'data-ratio2="'.$value->ratio2.'"';
                            echo 'data-ratio3="'.$value->ratio3.'"';
                            
                            echo 'data-wlh="'.$value->wlh.'"';
                            echo 'data-wheelbase="'.$value->wheelbase.'"';
                            echo 'data-weight="'.$value->weight.'"';
                            echo 'data-ground="'.$value->ground.'"';
                            echo 'data-seat="'.$value->seat.'"';
                            echo 'data-fuel_tank="'.$value->fuel_tank.'"';
                            echo 'data-caster="'.$value->caster.'"';
                            echo 'data-frame="'.$value->frame.'"';
                            echo 'data-battery="'.$value->battery.'"';
                            
                            echo 'data-tire_front="'.$value->tire_front.'"';
                            echo 'data-tire_rear="'.$value->tire_rear.'"';
                            echo 'data-front_brake="'.$value->front_brake.'"';
                            echo 'data-rear_brake="'.$value->rear_brake.'"';
                            echo 'data-tire_type="'.$value->tire_type.'"';
                            echo 'data-suspension="'.$value->suspension.'"';
                            echo 'data-suspension_rear="'.$value->suspension_rear.'"';
                            
                            echo 'data-hondasmart="'.$value->hst.'"';
                            echo 'data-pgmfi="'.$value->pgm.'"';
                            echo 'data-esp="'.$value->esp.'"';
                            echo 'data-esp_plus="'.$value->esp_plus.'"';
                            echo 'data-idlingstop="'.$value->idling.'"';
                            echo 'data-combibrake="'.$value->combi.'"';
                        }
                    ?> >
                        <span></span>
                        <div class="add_product">
                           <img src="<?=myUpload().$val->thumbnail;?>" class="attachment-200x200 size-200x200 wp-post-image" alt="<?= $val->title?>"><?= $val->title?>
                        </div>
                    </a>
                <?php }?>
              </div>
           </div>
           <a href="#close-modal" rel="modal:close" class="close-modal ">Close</a>
    </div>
    
    <input type="hidden" value="0" class="id-in-item-0"/>
    <input type="hidden" value="0" class="id-in-item-1"/>
    <input type="hidden" value="0" class="id-in-item-2"/>
    
</div>

<?php } ?>  

<script>
 
    
    $('.select-item').on('click', function(){
        var item = $(this).attr('data-item');
        var get_id = $(this).attr('data-id');
        //console.log(data_id);
        
        var selected0 = getItem0();
        var selected1 = getItem1();
        var selected2 = getItem2();
        
        if(get_id == selected0 || get_id == selected1 || get_id == selected2){
            alert('You are already selected this model!');
            return false;
        } else {
            if(item == 0){
                $('.id-in-item-0').val(get_id);
            } else if (item == 1){
                $('.id-in-item-1').val(get_id);
            } else{
                $('.id-in-item-2').val(get_id);
            }
        }
        
        var engine = $(this).attr('data-engine');
        var bore = $(this).attr('data-bore');
        var displa = $(this).attr('data-displacement');
        var fuel = $(this).attr('data-fuel');
        var feul_type = $(this).attr('data-feul_type');
        var ignition = $(this).attr('data-ignition');
        var final_drive = $(this).attr('data-final_drive');
        var clutch = $(this).attr('data-clutch');
        var starter = $(this).attr('data-starter');
        var compression = $(this).attr('data-compression');
        var oil_capacity = $(this).attr('data-oil_capacity');
        var transmission = $(this).attr('data-transmission');
        var oil_replace = $(this).attr('data-oil_replace');
        var gearshift = $(this).attr('data-gearshift');
        var reduction = $(this).attr('data-reduction');
        var ratio = $(this).attr('data-ratio');
        var ratio1 = $(this).attr('data-ratio1');
        var ratio2 = $(this).attr('data-ratio2');
        var ratio3 = $(this).attr('data-ratio3');
        
        
        var wlh = $(this).attr('data-wlh');
        var wheelbase = $(this).attr('data-wheelbase');
        var weight = $(this).attr('data-weight');
        var ground = $(this).attr('data-ground');
        var seat = $(this).attr('data-seat');
        var fuel_tank = $(this).attr('data-fuel_tank');
        var caster = $(this).attr('data-caster');
        var frame = $(this).attr('data-frame');
        var battery = $(this).attr('data-battery');
        
        
        var tire_front= $(this).attr('data-tire_front');
        var tire_rear= $(this).attr('data-tire_rear');
        var front_brake= $(this).attr('data-front_brake');
        var rear_brake= $(this).attr('data-rear_brake');
        var tire_type= $(this).attr('data-tire_type');
        var suspension= $(this).attr('data-suspension');
        var suspension_rear= $(this).attr('data-suspension_rear');
        
        
        var hst= $(this).attr('data-hondasmart');
        var pgm= $(this).attr('data-pgmfi');
        var esp= $(this).attr('data-esp');
        var esp_plus= $(this).attr('data-esp_plus');
        var idling= $(this).attr('data-idlingstop');
        var combi= $(this).attr('data-combibrake');
        
        
        var code = $(this).attr('data-code');
       
        var thumb = $(this).attr('data-thumb');
        var title = $(this).attr('data-title');

        if (item == 0){
            $('.compare-item-1 .default-img').attr('src',thumb);
            $('.col-code_no .compare-item-code-1').html(code);
            $('.compare-item-1 .product-compare-title').html(title);
            
            $('.enginesystem .compare-item-code-1.sub-field').html(engine);
            $('.boreandstroke .compare-item-code-1.sub-field').html(bore);
            $('.displacement .compare-item-code-1.sub-field').html(displa);
            $('.fuelsystem .compare-item-code-1.sub-field').html(fuel);
            $('.fueltype .compare-item-code-1.sub-field').html(feul_type);
            $('.ignitionsystem .compare-item-code-1.sub-field').html(ignition);
            $('.finaldrivetype .compare-item-code-1.sub-field').html(final_drive);
            $('.clutchsystem .compare-item-code-1.sub-field').html(clutch);
            $('.startersystem .compare-item-code-1.sub-field').html(starter);
            $('.compressionratio .compare-item-code-1.sub-field').html(compression);
            $('.engineoilcapacity .compare-item-code-1.sub-field').html(oil_capacity);
            $('.transmission .compare-item-code-1.sub-field').html(transmission);
            $('.oilreplacement .compare-item-code-1.sub-field').html(oil_replace);
            $('.gearshiftpattern .compare-item-code-1.sub-field').html(gearshift);
            $('.primaryreductionfinalreduction .compare-item-code-1.sub-field').html(reduction);
            $('.gearratio1st .compare-item-code-1.sub-field').html(ratio);
            $('.gearradio2nd .compare-item-code-1.sub-field').html(ratio1);
            $('.gearradio3rd .compare-item-code-1.sub-field').html(ratio2);
            $('.gearradio4th .compare-item-code-1.sub-field').html(ratio3);
            
            
            $('.wxlxh .compare-item-code-1.sub-field').html(wlh);
            $('.wheelbase .compare-item-code-1.sub-field').html(wheelbase);
            $('.weight .compare-item-code-1.sub-field').html(weight);
            $('.groundclearance .compare-item-code-1.sub-field').html(ground);
            $('.seathigh .compare-item-code-1.sub-field').html(seat);
            $('.fueltank .compare-item-code-1.sub-field').html(fuel_tank);
            $('.casterangletrail .compare-item-code-1.sub-field').html(caster);
            $('.frametype .compare-item-code-1.sub-field').html(frame);
            $('.battery .compare-item-code-1.sub-field').html(battery);
            
            
            
            $('.tiresizefront .compare-item-code-1.sub-field').html(tire_front);
            $('.tiresizerear .compare-item-code-1.sub-field').html(tire_rear);
            $('.frontbrake .compare-item-code-1.sub-field').html(front_brake);
            $('.rearbrake .compare-item-code-1.sub-field').html(rear_brake);
            $('.tiretype .compare-item-code-1.sub-field').html(tire_type);
            $('.suspensionfront .compare-item-code-1.sub-field').html(suspension);
            $('.suspensionrear .compare-item-code-1.sub-field').html(suspension_rear);
        
            
            if(hst==1){
              $('.hondasmart .compare-item-code-1').html("<span class='check'><i class='bx bx-check'></i></span>");
            }else{
                $('.hondasmart .compare-item-code-1').html("<span class='check'><i class='bx bx-x' ></i></span>");
            }
            
            if(pgm){
                $('.pgmfi .compare-item-code-1').html("<span class='check'><i class='bx bx-check'></i></span>");
            }else{
                $('.pgmfi .compare-item-code-1').html("<span class='check'><i class='bx bx-x' ></i></span>");
            }
            
            if(esp==1){
              $('.esp .compare-item-code-1').html("<span class='check'><i class='bx bx-check'></i></span>");
            }else{
                $('.esp .compare-item-code-1').html("<span class='check'><i class='bx bx-x' ></i></span>");
            }
            
            if(esp_plus==1){
              $('.esp_plus .compare-item-code-1').html("<span class='check'><i class='bx bx-check'></i></span>");
            }else{
                $('.esp_plus .compare-item-code-1').html("<span class='check'><i class='bx bx-x' ></i></span>");
            }
            
            if(idling==1){
              $('.idlingstop .compare-item-code-1').html("<span class='check'><i class='bx bx-check'></i></span>");
            }else{
                $('.idlingstop .compare-item-code-1').html("<span class='check'><i class='bx bx-x' ></i></span>");
            }
            
            if(combi==1){
              $('.combibrake .compare-item-code-1').html("<span class='check'><i class='bx bx-check'></i></span>");
            }else{
                $('.combibrake .compare-item-code-1').html("<span class='check'><i class='bx bx-x' ></i></span>");
            }
            
            
        } else if(item == 1){
            $('.compare-item-2 .default-img').attr('src',thumb);
            $('.col-code_no .compare-item-code-2').html(code);
            $('.compare-item-2 .product-compare-title').html(title);
            
            
            $('.enginesystem .compare-item-code-2.sub-field').html(engine);
            $('.boreandstroke .compare-item-code-2.sub-field').html(bore);
            $('.displacement .compare-item-code-2.sub-field').html(displa);
            $('.fuelsystem .compare-item-code-2.sub-field').html(fuel);
            $('.fueltype .compare-item-code-2.sub-field').html(feul_type);
            $('.ignitionsystem .compare-item-code-2.sub-field').html(ignition);
            $('.finaldrivetype .compare-item-code-2.sub-field').html(final_drive);
            $('.clutchsystem .compare-item-code-2.sub-field').html(clutch);
            $('.startersystem .compare-item-code-2.sub-field').html(starter);
            $('.compressionratio .compare-item-code-2.sub-field').html(compression);
            $('.engineoilcapacity .compare-item-code-2.sub-field').html(oil_capacity);
            $('.transmission .compare-item-code-2.sub-field').html(transmission);
            $('.oilreplacement .compare-item-code-1.sub-field').html(oil_replace);
            $('.gearshiftpattern .compare-item-code-1.sub-field').html(gearshift);
            $('.primaryreductionfinalreduction .compare-item-code-2.sub-field').html(reduction);
            $('.gearratio1st .compare-item-code-2.sub-field').html(ratio);
            $('.gearradio2nd .compare-item-code-2.sub-field').html(ratio1);
            $('.gearradio3rd .compare-item-code-2.sub-field').html(ratio2);
            $('.gearradio4th .compare-item-code-2.sub-field').html(ratio3);
            
            
            $('.wxlxh .compare-item-code-2.sub-field').html(wlh);
            $('.wheelbase .compare-item-code-2.sub-field').html(wheelbase);
            $('.weight .compare-item-code-2.sub-field').html(weight);
            $('.groundclearance .compare-item-code-2.sub-field').html(ground);
            $('.seathigh .compare-item-code-2.sub-field').html(seat);
            $('.fueltank .compare-item-code-2.sub-field').html(fuel_tank);
            $('.casterangletrail .compare-item-code-2.sub-field').html(caster);
            $('.frametype .compare-item-code-2.sub-field').html(frame);
            $('.battery .compare-item-code-2.sub-field').html(battery);
            
            
            $('.tiresizefront .compare-item-code-2.sub-field').html(tire_front);
            $('.tiresizerear .compare-item-code-2.sub-field').html(tire_rear);
            $('.frontbrake .compare-item-code-2.sub-field').html(front_brake);
            $('.rearbrake .compare-item-code-2.sub-field').html(rear_brake);
            $('.tiretype .compare-item-code-2.sub-field').html(tire_type);
            $('.suspensionfront .compare-item-code-2.sub-field').html(suspension);
            $('.suspensionrear .compare-item-code-2.sub-field').html(suspension_rear);
            
            if(hst==1){
              $('.hondasmart .compare-item-code-2').html("<span class='check'><i class='bx bx-check'></i></span>");
            }else{
                $('.hondasmart .compare-item-code-2').html("<span class='check'><i class='bx bx-x' ></i></span>");
            }
            
            if(pgm){
                $('.pgmfi .compare-item-code-2').html("<span class='check'><i class='bx bx-check'></i></span>");
            }else{
                $('.pgmfi .compare-item-code-2').html("<span class='check'><i class='bx bx-x' ></i></span>");
            }
            
            if(esp==1){
              $('.esp .compare-item-code-2').html("<span class='check'><i class='bx bx-check'></i></span>");
            }else{
                $('.esp .compare-item-code-2').html("<span class='check'><i class='bx bx-x' ></i></span>");
            }
            
            if(esp_plus==1){
              $('.esp_plus .compare-item-code-2').html("<span class='check'><i class='bx bx-check'></i></span>");
            }else{
                $('.esp_plus .compare-item-code-2').html("<span class='check'><i class='bx bx-x' ></i></span>");
            }
            
            if(idling==1){
              $('.idlingstop .compare-item-code-2').html("<span class='check'><i class='bx bx-check'></i></span>");
            }else{
                $('.idlingstop .compare-item-code-2').html("<span class='check'><i class='bx bx-x' ></i></span>");
            }
            
            if(combi==1){
              $('.combibrake .compare-item-code-2').html("<span class='check'><i class='bx bx-check'></i></span>");
            }else{
                $('.combibrake .compare-item-code-2').html("<span class='check'><i class='bx bx-x' ></i></span>");
            }
            
        } else{
            $('.compare-item-3 .default-img').attr('src',thumb);
            $('.col-code_no .compare-item-code-3').html(code);
            $('.compare-item-3 .product-compare-title').html(title);
            
            
            $('.enginesystem .compare-item-code-3.sub-field').html(engine);
            $('.boreandstroke .compare-item-code-3.sub-field').html(bore);
            $('.displacement .compare-item-code-3.sub-field').html(displa);
            $('.fuelsystem .compare-item-code-3.sub-field').html(fuel);
            $('.fueltype .compare-item-code-3.sub-field').html(feul_type);
            $('.ignitionsystem .compare-item-code-.sub-field').html(ignition);
            $('.finaldrivetype .compare-item-code-3.sub-field').html(final_drive);
            $('.clutchsystem .compare-item-code-3.sub-field').html(clutch);
            $('.startersystem .compare-item-code-3.sub-field').html(starter);
            $('.compressionratio .compare-item-code-3.sub-field').html(compression);
            $('.engineoilcapacity .compare-item-code-3.sub-field').html(oil_capacity);
            $('.transmission .compare-item-code-3.sub-field').html(transmission);
            $('.oilreplacement .compare-item-code-3.sub-field').html(oil_replace);
            $('.gearshiftpattern .compare-item-code-3.sub-field').html(gearshift);
            $('.primaryreductionfinalreduction .compare-item-code-3.sub-field').html(reduction);
            $('.gearratio1st .compare-item-code-3.sub-field').html(ratio);
            $('.gearradio2nd .compare-item-code-3.sub-field').html(ratio1);
            $('.gearradio3rd .compare-item-code-3.sub-field').html(ratio2);
            $('.gearradio4th .compare-item-code-3.sub-field').html(ratio3);
            
            
            $('.wxlxh .compare-item-code-3.sub-field').html(wlh);
            $('.wheelbase .compare-item-code-3.sub-field').html(wheelbase);
            $('.weight .compare-item-code-3.sub-field').html(weight);
            $('.groundclearance .compare-item-code-1.sub-field').html(ground);
            $('.seathigh .compare-item-code-3.sub-field').html(seat);
            $('.fueltank .compare-item-code-3.sub-field').html(fuel_tank);
            $('.casterangletrail .compare-item-code-3.sub-field').html(caster);
            $('.frametype .compare-item-code-3.sub-field').html(frame);
            $('.battery .compare-item-code-3.sub-field').html(battery);
            
            
            $('.tiresizefront .compare-item-code-3.sub-field').html(tire_front);
            $('.tiresizerear .compare-item-code-3.sub-field').html(tire_rear);
            $('.frontbrake .compare-item-code-3.sub-field').html(front_brake);
            $('.rearbrake .compare-item-code-3.sub-field').html(rear_brake);
            $('.tiretype .compare-item-code-3.sub-field').html(tire_type);
            $('.suspensionfront .compare-item-code-3.sub-field').html(suspension);
            $('.suspensionrear .compare-item-code-3.sub-field').html(suspension_rear);
            
            
            if(hst==1){
              $('.hondasmart .compare-item-code-3').html("<span class='check'><i class='bx bx-check'></i></span>");
            }else{
                $('.hondasmart .compare-item-code-3').html("<span class='check'><i class='bx bx-x' ></i></span>");
            }
            
            if(pgm){
                $('.pgmfi .compare-item-code-3').html("<span class='check'><i class='bx bx-check'></i></span>");
            }else{
                $('.pgmfi .compare-item-code-3').html("<span class='check'><i class='bx bx-x' ></i></span>");
            }
            
            if(esp==1){
              $('.esp .compare-item-code-3').html("<span class='check'><i class='bx bx-check'></i></span>");
            }else{
                $('.esp .compare-item-code-3').html("<span class='check'><i class='bx bx-x' ></i></span>");
            }
            
            if(esp_plus==1){
              $('.esp_plus .compare-item-code-3').html("<span class='check'><i class='bx bx-check'></i></span>");
            }else{
                $('.esp_plus .compare-item-code-3').html("<span class='check'><i class='bx bx-x' ></i></span>");
            }
            
            if(idling==1){
              $('.idlingstop .compare-item-code-3').html("<span class='check'><i class='bx bx-check'></i></span>");
            }else{
                $('.idlingstop .compare-item-code-3').html("<span class='check'><i class='bx bx-x' ></i></span>");
            }
            
            if(combi==1){
              $('.combibrake .compare-item-code-3').html("<span class='check'><i class='bx bx-check'></i></span>");
            }else{
                $('.combibrake .compare-item-code-3').html("<span class='check'><i class='bx bx-x' ></i></span>");
            }
            
        }
    });
    
    $('.choose_product').on('click', function(e){
       var choose = $(this).data('index');
       $('.product_container a').attr('data-item', choose);
       $('.popup-model').show();
    });
    
    $('.select-item').on('click', function(){
       $('.popup-model').fadeOut(); 
    });
    
    $('.image-category').mouseover(function() {
        $('.image-category').removeClass('active');
        $(this).addClass('active');
        var cat_id = $(this).attr('cat_id');
        //console.log(cat_id);
        $('.category_container').css('display', 'none');
        $("div").find("[cat_id='" + cat_id + "']").css('display', 'block'); 
    });
    
    function getItem0(){
        var item0 = $('.id-in-item-0').attr('value');
        return item0;
    }
    function getItem1(){
        var item1 = $('.id-in-item-1').attr('value');
        return item1;
    }
    function getItem2(){
        var item2 = $('.id-in-item-2').attr('value');
        return item2;
    }
</script>
					
<?php } ?>