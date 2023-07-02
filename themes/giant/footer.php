<!-- Footer -->

<?php 
$currentLocale = app()->getLocale();

if (isset($_GET['page'])){
   echo '';
} 
else{ 
    $lang_code = app()->getLocale();
    $policy = 'I have read and agree to the';
    $call_us = 'CALL US';
    $subscribe = 'Subscribe';
    $enter_email = 'Your email address';
    $copyright = '© Copyright N. C. X. CO., LTD. 2022';
    $reserved = 'All Right Reserved.';
    
  
    if ($lang_code == 'kh'){
        $policy = 'ខ្ញុំបានអាននិងយល់ព្រមលើគោលការណ៍ឯកជនភាព';
        $call_us = 'ទំនាក់ទំនង';
        $subscribe = 'ជាវ';
        $enter_email = ' អុីម៉ែល ';
        $copyright = 'រក្សាសិទ្ធដោយក្រុមហ៊ុន អិន ស៊ី អិច ខូអិលធីឌី ២០២២';
        $reserved = 'រក្សាសិទ្ធគ្រប់យ៉ាង';
  
    } else{echo '';}

?>

<div class="go-to-top"><i class='bx bxs-up-arrow'></i></div>

<footer class="footer-area two three">
    <div class="container footer-top">
            <div class="row goup-footer-logo">
                <div class="col-sm-6 logo-honda-footer">
                    <img src="<?=url('storage/app/uploads/')?>/logo/logo-footer.png" alt="Logo">
                    
                </div>
            
            </div>
            
            
                   
   

            


            

            
        </div>
        
    </div>


    <div>
        <div class="container footer-copyright-top">
            <div class="row">
                <div class="col-sm-12">
                    <p class="foot-copy-right"><?php echo $copyright ;?> <?php echo $reserved ;?></p>
                </div>
                <!--<div class="col-sm-6 Reserved">-->
                <!--    <p></p>-->
                <!--</div>-->
            </div>    
        </div>
         <!--<a id="scroll-top"><i class='bx bxs-up-arrow-alt' ></i></a>-->

    </div>

</footer>


<!-- Mean Menu JS -->
<script src="<?=URL::to('/themes/giant/andro_files')?>/js/jquery.meanmenu.js"></script>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="<?=URL::to('/themes/giant/andro_files')?>/js/bootstrap.min.js"></script>
        
<script type="text/javascript">

    $(document).ready(function() {
        $('#nav-mobile, .meanmenu-reveal').click(function(){
            $('.sidebar-item').toggleClass('active');
            $(this).toggleClass('active');
        });
       
    })

    //Navbar Mobile
    
    $('#nav-mobile, #close-x, .meanmenu-reveal').click(function(event) {
    value = $('.sidebar-mobile').css('margin-top') === '-1111px' ? '0' : '-1111px';
      $('.sidebar-mobile').animate({'margin-top': value});
    });
    
    
    $('ul.sub-menu').hide();
    $('.bx.bx-chevron-down').click(function(){
        $('ul.sub-menu').slideToggle();
    });

    $(document).ready(function() {
        $('.navbar-toggler').click(function(){
            $('.nav-item').toggleClass('actived');
            $(this).toggleClass('actived');
        });
       
    });
    
    $(".navbar-toggler").click(function(){
      $(".nav-item").removeClass("feadeProfadeout")
    })    

    $(window).on('scroll', function() {
		if ($(this).scrollTop() >= 220) {
			$('.main-nav').addClass('menu-shrink');
		} else {
			$('.main-nav').removeClass('menu-shrink');
		}
		
		if($(this).scrollTop() >= 450){
		    $('.go-to-top').fadeIn('slow');
		} else{
		    $('.go-to-top').fadeOut('slow');
		}
    });	

    // Mean Menu JS
	jQuery('.mean-menu').meanmenu({
	    meanScreenWidth: '991'
	});

    // Search JS
    $('#close-btn').on('click', function() {
        $('#search-overlay').fadeOut();
        $('#search-btn').show();
    });
    $('#search-btn').on('click', function() {
        $('#search-overlay').fadeIn();
    });

    $('.go-to-top').on('click', function() {
        //console.log('top');
        //$('html, body').animate({scrollTop:0}, '300');
        window.scrollTo({ top: 0, left: 0, behavior: 'smooth' });
    });

    $('.four-col-main-services .col-sm-3').click(function () {
        var data_url = $(this).find("a").attr('href');
        console.log(data_url);
        window.location.href = data_url;
    });
    
    $('.home-dealer-click .col-sm-12').click(function () {
        var data_url = $(this).find("a").attr('href');
        console.log(data_url);
        window.location.href = data_url;
    });   
    
    $('.section-mobile-only .col-sm-3').click(function () {
        var data_url = $(this).find("a").attr('href');
        console.log(data_url);
        window.location.href = data_url;
    });     

  $('.tab-content').hide();
    
    $('.tab').click(function(e){
        e.preventDefault();
        $('.tab').removeClass('tab-active');
        $(this).addClass('tab-active');
        var tab_id = $(this).attr('href');
        $('.tab-content').hide();
        $(tab_id).show();
    });

    // accordion
    $(".accordion").click(function(e) {
        var $this = $(this);
        e.preventDefault();
        if ($this.hasClass("clicked")) {
            $this.removeClass("clicked");
            $this.next().slideUp();
        }
        else {
            $this.addClass("clicked");
            $this.next().slideDown();
        }
    });
    
    $('.accordion').click(function(e){
        e.preventDefault();
        $(this).next().toggleClass('accordion-active');
    });

   $('.footer-link').click( function(){
        if ( $(this).hasClass('current') ) {
            $(this).removeClass('current');
        } else {
            $('.footer-link').removeClass('current');
            $(this).addClass('current');    
        }
    });

    $('#nav-mobile, #close-x').click(function(event) {
    value = $('.sidebar-mobile').css('margin-right') === '-300px' ? '0' : '-300px';
      $('.sidebar-mobile').animate({'margin-right': value});
    }); 
    
    $('.click-pop').on('click', function(){
        $('.popup-form').toggle();
    });
    
    $('#close-form').on('click', function(){
       $('#show_popup_form').css('display', 'none');
    });
    
    $('.close-form-box').on('click', function(){
       $('.popup-form').fadeOut();
    });

    $('.mkdf-video-button-holder').on('click', function(){
        $(this).hide();  
    });  
    
    $('#fotter-1 a[href*=\\#]').on('click',function(e) {
    
        var target = this.hash;
        var $target = $(target);
        console.log(targetname);
        var targetname = target.slice(1, target.length);
    
        if(document.getElementById(targetname) != null) {
             e.preventDefault();
        }
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top-150 //or the height of your fixed navigation 
    
        }, 900, 'swing', function () {
            window.location.hash = target;
      });
    });
    
        $('.btn-outline').click(function(){
            $('html, body').animate({scrollTop : 500},500);
            return false;
        });
    
        $('.navbar-expand-sm .navbar-toggler').click(function(e){
            $('.navbar-collapse.collapse').toggle('active');
            
            var $this = $(this);
            e.preventDefault();
            if ($this.hasClass("show-mobile")) {
                $this.removeClass("show-mobile");
            }
            else {
                $this.addClass("show-mobile");
            }
            
        });

        $(window).scroll(function() {
            $( ".fadein" ).each(function(index) {
                var hieghtThreshold = $(this).offset().top-750;
                var scroll = $(window).scrollTop();
                if (scroll >= hieghtThreshold ) {
                    $(this).addClass('fadeout');
                } else {
                    $(this).removeClass('fadeout');
                }
            });
            
             $( ".fadeinTextup" ).each(function(index) {
                var hieghtThreshold = $(this).offset().top-750;
                var scroll = $(window).scrollTop();
                if (scroll >= hieghtThreshold ) {
                    $(this).addClass('fadeinOutup');
                } else {
                    $(this).removeClass('fadeinOutup');
                }
            });
            
            $( ".ProfeatuetextIN" ).each(function(index) {
                var hieghtThreshold = $(this).offset().top-750;
                var scroll = $(window).scrollTop();
                if (scroll >= hieghtThreshold ) {
                    $(this).addClass('ProfeatuetextOUT');
                } else {
                    $(this).removeClass('ProfeatuetextOUT');
                }
            });
            
            
            // $( ".textfadein" ).each(function(index) {
            //     var hieghtThreshold = $(this).offset().top-750;
            //     var scroll = $(window).scrollTop();
            //     if (scroll >= hieghtThreshold ) {
            //         $(this).addClass('textfadeout');
            //     } else {
            //         $(this).removeClass('textfadeout');
            //     }
            // });
            
            $( ".feadeProfadein" ).each(function(index) {
                var hieghtThreshold = $(this).offset().top-750;
                var scroll = $(window).scrollTop();
                if (scroll >= hieghtThreshold ) {
                    $(this).addClass('feadeProfadeout');
                } else {
                    $(this).removeClass('feadeProfadeout');
                }
            });
        
        });
        
</script>

<?php if(!isset($_GET['page'])){?> 

<link rel="stylesheet" type="text/css" href="<?=URL::to('/themes/giant/andro_files')?>/css/newcss.css">

<?php } ?>   
<!--GET Custome JS-->
<?php if($cur_route_name == 'viewpage'){echo getCustomJS();}?>
<?php } ?>

</body>

</html>

