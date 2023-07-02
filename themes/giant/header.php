<?php

$cur_route_name = Route::current()->getName();
//echo $cur_route_name;
$lang_code = app()->getLocale();

//Check for pagebuilder live edit
if(isset($_GET['lang'])){
    $lang_code = $_GET['lang'];
}
    
?>

<html lang="<?= $lang_code?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?=getMeta_Desciption();?>"/>
    <meta name="keywords" content="<?=getMeta_Keyword();?>"/>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?= csrf_token();?>">
    <meta property="og:image" content="https://www.ncxhonda.com/motorcycles/storage/app/uploads/logo/thumb-fb.png"/>
    <meta property="og:image:secure_url" content="https://www.ncxhonda.com/motorcycles/storage/app/uploads/logo/thumb-fb.png" />

    <title> <?php
            $seg = Request::segment(2);
            if($cur_route_name == 'viewpage'){
                echo pageTitle().' | Honda Automobiles';
                $seg = $seg;
            } elseif ($cur_route_name == 'Viewblog'){
                echo blogTitle();
                $seg = 'blog/'.Request::segment(3);
            } elseif ($cur_route_name == 'Viewsparts'){
                echo sparespartTitle();
                $seg = 'spart/'.Request::segment(3);
            }else{
                echo 'Automobiles | N.C.X. Co., Ltd';
            }
        ?></title>

    <!-- Favicon -->
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kantumruy:wght@300;700&display=swap" rel="stylesheet">

    <link rel="shortcut icon" type="image/icon" href="<?=URL::to('/storage/app/uploads')?>/logo/Logo-CAR.png"/>
                
    <!-- Box Icons CSS -->
    <link rel="stylesheet" href="<?=URL::to('/themes/giant/andro_files')?>/css/amret.css?v=<?php echo rand(10,5000000); ?>">
      
    <link rel="stylesheet" href="<?=URL::to('/themes/giant/andro_files')?>/css/main.min.css">      
         
    <link rel="stylesheet" href="<?=URL::to('/themes/giant/andro_files')?>/css/boxicons.min.css">
    <!-- Mean Menu CSS -->
    <link rel="stylesheet" href="<?=URL::to('/themes/giant/andro_files')?>/css/meanmenu.css?v=<?php echo rand(10,10000000); ?>">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="<?=URL::to('/themes/giant/andro_files')?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=URL::to('/themes/giant/andro_files')?>/css/owl.theme.default.min.css">

    <!-- Style CSS -->
    <link rel="stylesheet" href="<?=URL::to('/themes/giant/andro_files')?>/css/giant-style.css?v=<?php echo rand(10,3000000); ?>">
    
    <?php if(!isset($_GET['page'])){?>
        <link rel="stylesheet" href="<?=URL::to('/themes/giant/andro_files')?>/css/animations.css?v=<?php echo rand(10,7000000); ?>">    
    <?php } else{?>
        <link rel="stylesheet" href="<?=URL::to('/themes/giant/andro_files')?>/css/css-admin.css?v=<?php echo rand(10,78000000); ?>">
    <?php }?>    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?=URL::to('/themes/giant/andro_files')?>/css/responsive.css?v=<?php echo rand(10,80000000); ?>">
    <link rel="stylesheet" href="<?=URL::to('/themes/giant/andro_files')?>/css/custom2.css?v=<?php echo rand(10,90000000); ?>">

    <!--GET Custome CSS-->
    <?php if($cur_route_name == 'viewpage'){echo getCustomCSS();}?>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
    
    <link rel="stylesheet" href="<?=URL::to('/themes/giant/andro_files')?>/css/myhonda.css?v=<?php echo rand(10,9000000000); ?>">
    <link rel="stylesheet" href="<?=URL::to('/themes/giant/andro_files')?>/css/main-motor.css?v=<?php echo rand(10,90000000); ?>">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-102318119-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-102318119-1');
    </script>
    

</head>

<body>

<!-- Navbar -->
<?php
if ($lang_code == 'kh'){?>
<style>
    @media only screen and (min-width: 1024px) { 

        .main-nav nav .navbar-nav .nav-item a {
            text-transform: unset;
            padding-left: 15px!important;
            padding-right: 15px!important;
            font-size: 14px !important;
        }
    }
</style>
<?php   
    } 
else{
?>
<style>
@media only screen and (min-width: 1024px) { 

    .main-nav nav .navbar-nav .nav-item a {
        text-transform: unset;
        padding-left: 15px!important;
        padding-right: 15px!important;
        font-size: 12px !important;
    }
    
    .product-nav-bar li {font-size: 1.3rem;}
    
    

}

   .main-nav nav .navbar-nav .nav-item a {font-size: 13px;font-weight: 600 !important;}
   .navbar-light .navbar-nav .nav-link {font-size: 13px;font-weight: 600 !important;}
</style>
<?php   
    }
?>



    <!-- Menu For Desktop Device -->
    <div class="main-nav three">
      
      <div class="rows">
        
            <nav class="navbar navbar-expand-sm   navbar-light">
            <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
            <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <?php
                            $menu_setting = 'menu';
                            $menu_setting = Helper::getSetting($menu_setting);
                            $t_id = Helper::getMenu_ID($menu_setting);
                            $menu_by_lang_and_id = Helper::getMenu_Translated($lang_code, $t_id);
                            $navigation = Helper::getParentMenu($menu_by_lang_and_id);
                            $menu_title = Helper::getMenuNamebyId($menu_by_lang_and_id);
                        ?>

                       
                            <ul>
                            <?php foreach($navigation as $itemP):?>
                                <li>
                                    <a href="<?php echo $itemP->link;?>"><?php echo $itemP->label;?></a>
                                </li>

                            <?php endforeach; ?>
                            </ul>
</div>




<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
                 <div class="menu-center-newa">
                      <a class="navbar-brand main-hongda-logo" href="<?=url($lang_code.'/home')?>">
                          <img src="<?=url('storage/app/uploads/')?>/logo/logo-newa.webp" alt="Logo">
                      </a>
                    </div>
            <div class="all-lang-2 " style="display:none;">
                      <ul>
                    <?php

                    $lang = Helper::langList();
                    $current_lang = $lang_code;
                    
                    foreach ($lang as $lg):
                    $language_code = $lg->lang_code;?>
                   
                       <li class="language gf-lang <?php if ($current_lang == $language_code){ echo 'active-language-2';}?>">
                                <a href="<?=URL('').'/'.$lg->lang_code.'/'.Request::segment(2)?>" class="nav-link"><?=$lg->lang_name?></a>
                       </li>
                      
                    <?php endforeach;?>
                    </ul>
                 </div> 
                 <div class="all-lang-3 " style="display:block;">
                      <ul>
                    <?php

                    $lang = Helper::langList();
                    $current_lang = $lang_code;
                    
                    foreach ($lang as $lg):
                    $language_code = $lg->lang_code;?>
                   
                       <li class="language gf-lang <?php if ($current_lang == $language_code){ echo 'active-language-2';}?>">
                                <a href="<?=URL('').'/'.$lg->lang_code.'/'.Request::segment(2)?>" class="nav-link"><?=$lg->lang_name?></a>
                       </li>
                      
                    <?php endforeach;?>
                    </ul>
                 </div> 
                 
           <div class="nav-item search side-nav">
                          <div class="nav-search">
                              <i id="search-btn" class="bx bx-search-alt"></i>
                              <div id="search-overlay" class="block">
                                  <div class="centered">
                                      <div id="search-box">
                                          <i id="close-btn" class="bx bx-x"></i>
                                          <form>
                                              <input type="text" class="form-control" placeholder="Search..."/>
                                              <button type="submit" class="btn">Search</button>
                                          </form>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
          <button class="navbar-toggler mobile" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo04" aria-controls="navbarTogglerDemo04" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
    </nav>
       
      </div>
                    </div>
        
           

      
        
      
  </div>
