@php 
$current_url = Request::segment(2);

if(isset($_GET['type'])){
    $type = $_GET['type'];
} else{
    $type = '';
}
@endphp


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
      @hasSection('title')
      @yield('title')
      @else
          Welcome to Giantfocus 
      @endif
  </title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">                   
	
<!-- Custom CSS -->
<link href="{{ URL('resources/views/admin/theme') }}/dist/css/style.css" rel="stylesheet"/>
<link href="{{ URL('resources/views/admin/theme') }}/dist/css/jquery.toast.min.css" rel="stylesheet"/>
<link href="{{ URL('resources/views/admin/theme') }}/dist/css/bootstrap-select.min.css" rel="stylesheet"/>
<link href="{{ URL('resources/views/admin/theme') }}/dist/css/sweetalert.css" rel="stylesheet"/>

<style type="text/css">

button.close-filemana {
	    float: right;
	    position: absolute;
	    z-index: 999999;
	    right: 284px;
	    border-radius: 50%;
	    width: 34px;
	    height: 34px;
	    margin-top: -22px;
	}

.elfinder-ltr .elfinder-cwd-view-icons .elfinder-cwd-file:hover {
    border: none;
}
.elfinder-cwd-file-wrapper.ui-corner-all:hover, .elfinder-cwd-filename:hover {
    background: none!important;
}
	.navbar.navbar-inverse.navbar-fixed-top .nav-header .logo-wrap {width: 194px;padding-top: 16px;}
	.alert.alert-danger {display: none!important;}
	.fixed-sidebar-left .side-nav li a .pull-left > i {font-size: 16px;}
	.wrapper.theme-1-active .fixed-sidebar-left .side-nav {background: #202830;}
	.side-nav li.active{border-left: solid 3px #4795ba;}
	.fixed-sidebar-left .side-nav > li{transition: all 0.2s ease;}
	.fixed-sidebar-left .side-nav > li:hover{border-left: solid 3px #4795ba;}
	.fixed-sidebar-left .side-nav > li > a {color: #B8C8D0!important;padding: 12px 15px;}
	.fixed-sidebar-left .side-nav > li > ul > li a {color: #afbec7;border-left: solid 3px #202830;}
	.fixed-sidebar-left .side-nav li.active ul li a {margin-bottom: 0!important;}
	.fixed-sidebar-left .side-nav > li > a:hover, .fixed-sidebar-left .side-nav > li.active > a{color:#fff!important;}
	.fixed-sidebar-left .side-nav > li ul.collapse li a.active, .fixed-sidebar-left .side-nav > li ul.collapse li a:hover {color: #ffffff;}
	a.btn.btn-primary {background: #eee;color: #688093;border: solid 1px #8e9fa8;border-radius: 2px;padding: 4px 10px;font-weight: 600;font-size: 13px!important;}
	a.btn.btn-primary:hover {background: #f4f4f4;color: #013662;border: solid 1px #415e6c;}
	.mr-20 {margin-right: 8px !important;}
	.heading-bg h5 {padding-top: 0;padding-right: 10px;}
	.admin-head-title{display: flex;}
	.page-wrapper {padding: 70px 4px;}
	.heading-bg {height: 48px;}
	.collapse.in li a {background: #2b333b;}
	.collapse.in li a:hover {background:#313941!important;}
	.float-right{float:right; margin-left:10px;}
	.btn-default {background-color: #fff!important;}
	@media screen and (min-width:1024px){
		.left-12{margin-left: -12px;}		
	}
	.table > thead > tr > th, .jsgrid-table > thead > tr > th, .table > tfoot > tr > th, .jsgrid-table > tfoot > tr > th {font-size: 14px;}
	.btn.btn-circle.btn-sm{padding: 9px !important;}
	a.page-title{color: #0474ab;}
	.center{text-align: center;}
	.modal{background: #171717c4;padding: 108px 300px;}
	nav{text-align: right;}
	.navbar.navbar-inverse.navbar-fixed-top .top-nav-search .input-group input {background: #ffffff;}
	img#thum-image {max-width: 222px;height: auto;}
	img#cover-image {max-width: 810px;height: auto;}
	.dropdown-menu ul li a {background: #ffffff!important; color: #000!important}
	.collapse.in li a:hover{background: #d4d4d4!important;}
	a.nav-link img {filter: grayscale(1);}
	a.nav-link.active-language img {filter: none;}
	a.nav-link.active-language:after {
	    content: "\f0d8";
	    font-family: 'FontAwesome';
	    color: #ff1b1b;
	    display: block;
	    height: 2px;
	    line-height: 2px;
	    margin-top: -22px;
	    font-size: 18px;
	    padding-right: 6px;
	}
	
	footer {
        position: unset;
	}
</style>

<!-- elFinder CSS (REQUIRED) -->
<link rel="stylesheet" type="text/css" href="{{URL('/')}}/public/packages/barryvdh/elfinder/css/elfinder.min.css">
<link rel="stylesheet" type="text/css" href="{{URL('/')}}/public/packages/barryvdh/elfinder/css/theme.css">
<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css" />

<!-- jQuery -->
<script src="{{ URL('resources/views/admin/theme') }}/vendors/bower_components/jquery/dist/jquery.min.js"></script>

<!-- jQuery and jQuery UI (REQUIRED) -->
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<!-- elFinder JS (REQUIRED) -->
<script src="{{URL('/')}}/public/packages/barryvdh/elfinder/js/elfinder.min.js"></script>

</head>

<body>
      <!--Preloader-->
	<!--<div class="preloader-it">-->
	<!--	<div class="la-anim-1"></div>-->
	<!--</div>-->
	<!--/Preloader-->
    <div class="wrapper  theme-1-active pimary-color-blue">
		
		<!-- Top Menu Items -->
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="mobile-only-brand pull-left">
				<div class="nav-header pull-left">
					<div class="logo-wrap">
						<a target="_blank" href="{{URL::to('/')}}">
							<img class="brand-img" src="{{ URL('resources/views/admin/theme') }}/dist/img/logo.png" alt="brand"/>
						</a>
					</div>
				</div>	
				<a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block ml-20 pull-left" href="javascript:void(0);"><i class="zmdi zmdi-menu"></i></a>
				<a id="toggle_mobile_search" data-toggle="collapse" data-target="#search_form" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-search"></i></a>
				<a id="toggle_mobile_nav" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-more"></i></a>
				<form id="search_form" role="search" action="{{url()->current()}}" method="get" class="top-nav-search collapse pull-left">
					<div class="input-group">
						<input type="text" name="keyword" class="form-control" placeholder="Search">
						<input type="hidden" name="lang" value="{{$lang}}">
						<span class="input-group-btn">
						<button type="button" class="btn  btn-default"  data-target="#search_form" data-toggle="collapse" aria-label="Close" aria-expanded="true"><i class="zmdi zmdi-search"></i></button>
						</span>
					</div>
				</form>
			</div>
			<div id="mobile_only_nav" class="mobile-only-nav pull-right">
				<ul class="nav navbar-right top-nav pull-right">

					<?php
                    
                    
                    $langList = Helper::langList();
                    $path = Helper::currentPath();

                    foreach ($langList as $lg):
                    	$language_code = $lg->lang_code;
                    ?>
                       <li>
                            <a href="{{$path}}?lang=<?=$lg->lang_code.'&type='.$type;?>" title="{{$lg->lang_name}}" class="nav-link <?= $lg->lang_code==$lang?'active-language':''?>">
                            	<img width="26" src="<?=$lg->lang_icon?>">
                            </a>
                       </li>
                    <?php endforeach;?>

					<li>
						<a id="open_right_sidebar" href="#"><i class="zmdi zmdi-settings top-nav-icon"></i></a>
					</li>
					<li class="dropdown app-drp">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="zmdi zmdi-apps top-nav-icon"></i></a>
						<ul class="dropdown-menu app-dropdown" data-dropdown-in="slideInRight" data-dropdown-out="flipOutX">
							<li>
								<div class="app-nicescroll-bar">
									<ul class="app-icon-wrap pa-10">
										<li>
											<a href="weather.html" class="connection-item">
											<i class="zmdi zmdi-cloud-outline txt-info"></i>
											<span class="block">weather</span>
											</a>
										</li>
									</ul>
								</div>	
							</li>
							<li>
								<div class="app-box-bottom-wrap">
									<hr class="light-grey-hr ma-0"/>
									<a class="block text-center read-all" href="javascript:void(0)"> more </a>
								</div>
							</li>
						</ul>
					</li>
					<li class="dropdown auth-drp">
						<a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown"><img src="{{ URL('resources/views/admin/theme') }}/dist/img/user1.png" alt="user_auth" class="user-auth-img img-circle"/><span class="user-online-status"></span></a>
						<ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
							<li>
								<a href="profile.html"><i class="zmdi zmdi-account"></i><span>@php $user = auth()->user(); @endphp {{$user->name}}</span></a>
							</li>
							<li>
								<a href="#"><i class="zmdi zmdi-card"></i><span>my balance</span></a>
							</li>
							<li>
								<a href="inbox.html"><i class="zmdi zmdi-email"></i><span>Inbox</span></a>
							</li>
							<li>
								<a href="#"><i class="zmdi zmdi-settings"></i><span>Settings</span></a>
							</li>
							<li class="divider"></li>
							<li class="sub-menu show-on-hover">
								<a href="#" class="dropdown-toggle pr-0 level-2-drp"><i class="zmdi zmdi-check text-success"></i> available</a>
								<ul class="dropdown-menu open-left-side">
									<li>
										<a href="#"><i class="zmdi zmdi-check text-success"></i><span>available</span></a>
									</li>
									<li>
										<a href="#"><i class="zmdi zmdi-circle-o text-warning"></i><span>busy</span></a>
									</li>
									<li>
										<a href="#"><i class="zmdi zmdi-minus-circle-outline text-danger"></i><span>offline</span></a>
									</li>
								</ul>	
							</li>
							<li class="divider"></li>
							<li>
								<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="zmdi zmdi-power"></i><span>Log Out</span></a>
							</li>
						</ul>
					</li>
				</ul>
				
				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					@csrf
				</form>
			</div>	
		</nav>
		<!-- /Top Menu Items -->
		
		<!-- Left Sidebar Menu -->
		<div class="fixed-sidebar-left">
			<ul class="nav navbar-nav side-nav nicescroll-bar">

				<!-- Dashboard -->
				<li>
					<a id="dashboard" href="{{URL::to('admin/dashboard')}}"><div class="pull-left">
						<i class="fa fa-tachometer mr-20" aria-hidden="true"></i><span class="right-nav-text">Dashboard</span></div>
						<div class="clearfix"></div></a>
				</li>

				<!-- Post -->
				<li>
					<a id="pages" href="javascript:void(0);" data-toggle="collapse"  data-target="#app_dr">
						<div class="pull-left"><i class="fa fa-th-list mr-20"></i><span class="right-nav-text">Post Type</span></div>
						<div class="clearfix"></div></a>
						<ul id="app_dr" class="collapse-level-1 collapse">
							<li><a href="{{URL::to('admin/pages?type=page&lang='.$lang)}}">Pages</a></li>
							<li><a href="{{URL::to('admin/pages?type=product&lang='.$lang)}}">Products</a></li>
							<li><a href="{{URL::to('admin/pages?type=news&lang='.$lang)}}">News</a></li>
							<li><a href="{{URL::to('admin/pages?type=events&lang='.$lang)}}">Events</a></li>
						</ul>
				</li>

		        

				<!-- Career -->
		        <li>
		         <a id="careers" href="{{URL::to('admin/careers?lang='.$lang)}}" data-toggle="collapse"  data-target="#career_dr">
		           <div class="pull-left"><i class="fa fa-briefcase mr-20"></i><span class="right-nav-text">Careers </span></div>
		           <div class="clearfix"></div></a>
		        </li>
		        
		        <!-- Award -->
		        <!--<li>-->
		        <!--  <a id="awards" href="javascript:void(0);" data-toggle="collapse"  data-target="#award_dr">-->
		        <!--    <div class="pull-left"><i class="fa fa-trophy mr-20"></i><span class="right-nav-text">Awards & Reports </span></div>-->
		        <!--    <div class="clearfix"></div></a>-->
		        <!--    <ul id="award_dr" class="collapse collapse-level-1">-->
		        <!--      <li><a href="{{URL::to('admin/awards?lang='.$lang)}}" >All Awards / Reports</a></li>-->
		        <!--      <li><a href="{{URL::to('admin/awards/create?lang='.$lang)}}">Add Award / Reports</a></li>  -->
          <!--            <li><a href="{{URL::to('admin/years?lang='.$lang)}}">Years</a></li>-->
		        <!--    </ul>-->
		        <!--</li>-->

		        <!-- Spare Parts -->
		        
		        
		        <!-- Feature -->
				<li>
					<a id="gallery" href="{{URL::to('admin/gallery?lang='.$lang)}}" data-target="#menu_dr">
						<div class="pull-left"><i class="fa fa-sliders mr-20" aria-hidden="true"></i><span class="right-nav-text">Slider</span></div>
						<div class="clearfix"></div></a>
				</li>
				
				 <!-- Branchs -->
		        
		        
		        <!-- Branchs -->
		        
				
				<!-- File Manager -->
				<li>
					<a id="filemanager" href="{{url('admin/filemanager')}}" data-toggle="collapse"  data-target="#file_dr">
						<div class="pull-left"><i class="fa fa-folder-open mr-20"></i><span class="right-nav-text">File Manager </span></div>
						<div class="clearfix"></div></a>
				</li>

				<!-- Menu -->
				<li>
					<a id="menu" href="{{url('admin/menu?lang='.$lang)}}" data-toggle="collapse"  data-target="#menu_dr">
						<div class="pull-left"><i class="fa fa-th mr-20"></i><span class="right-nav-text">Menu </span></div>
						<div class="clearfix"></div></a>
				</li>
					
				<!-- Users -->
				<li>
					<a id="users" href="javascript:void(0);" data-toggle="collapse"  data-target="#user_dr">
						<div class="pull-left"><i class="fa fa-user mr-20"></i><span class="right-nav-text">Users </span></div>
						<div class="clearfix"></div></a>
						<ul id="user_dr" class="collapse collapse-level-1">
							<li><a href="{{url('admin/users?lang='.$lang)}}" >All Users</a></li>
							<li><a href="{{url('admin/users/create')}}">Add New</a></li>
							<li><a href="{{url('admin/users/roles')}}" id="users">Roles & Permission</a></li>				
						</ul>
				</li>

				<!-- Languages -->
				<li>
					<a id="locale" href="{{url('admin/locale?lang='.$lang)}}" data-toggle="collapse"  data-target="#lang_dr">
						<div class="pull-left"><i class="fa fa-language mr-20"></i><span class="right-nav-text">Languages </span></div>
						<div class="clearfix"></div></a>
				</li>


				<!-- Setting -->
				<li>
					<a id="setting" href="{{url('admin/setting?lang='.$lang)}}" data-toggle="collapse"  data-target="#setting_dr">
						<div class="pull-left"><i class="fa fa-cogs mr-20"></i><span class="right-nav-text">Settings </span></div>
						<div class="clearfix"></div></a>
				</li>
			</ul>
		</div>
		<!-- /Left Sidebar Menu -->
		
		
			
		<!-- Main Content -->
		<div class="page-wrapper">
			<div class="container-fluid">				
				<!-- Row -->
				@yield('content')
				<!-- /Row -->

			</div>
			
			<!-- Footer -->
			<footer class="footer container-fluid pl-30 pr-30">
				<div class="row">
					<div class="col-sm-12">
						<p> <?php echo date('Y') ?>  &copy; by GIANTFOCUS</p>
					</div>
				</div>
			</footer>
			<!-- /Footer -->
			
		</div>
		<!-- /Main Content -->

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ URL('resources/views/admin/theme') }}/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="{{ URL('resources/views/admin/theme') }}/dist/js/bootstrap-select.min.js"></script>
    <script src="{{ URL('resources/views/admin/theme') }}/dist/js/sweetalert.min.js"></script>

	
	<!-- Slimscroll JavaScript -->
	<script src="{{ URL('resources/views/admin/theme') }}/dist/js/jquery.slimscroll.js"></script>
	<script src="{{ URL('resources/views/admin/theme') }}/dist/js/jquery.toast.min.js"></script>

	@if (Session::has('message'))
		<script>
			$.toast({
				heading: 'Success!',
				text: '{{ Session::get( 'message' ) }}',
				position: 'top-right',
				loaderBg:'#fec107',
				icon: 'success',
				hideAfter: 3000, 
				stack: 6
			});
		</script>
	@endif

	@if (Session::has('warning'))
		<script>
			$.toast({
				heading: 'Warning!',
				text: '{{ Session::get( 'warning' ) }}',
				position: 'top-right',
				loaderBg:'#fec107',
				icon: 'warning',
				hideAfter: 4500, 
				stack: 6
			});
		</script>
	@endif

	@if ($errors->any())
		@foreach($errors->all() as $error)		
			<script>
				$.toast({
					heading: 'Warning!',
					text: '{{$error}}',
					position: 'top-right',
					loaderBg:'#fec107',
					icon: 'warning',
					hideAfter: 4500,
					stack: 6
				});
			</script>
		@endforeach
	@endif


	<!-- Init JavaScript -->
	<script src="{{ URL('resources/views/admin/theme') }}/dist/js/init.js"></script>

	<script>
		    //Close filemanager
	    $('.close-filemana').on('click', function(e) {
	        $('.modal').hide();
	    });
		//Add Active to admin menu
		$('#{{$current_url}}').attr('aria-expanded','true');
		$('#{{$current_url}}').parent().addClass('active');
		$('#{{$current_url}}').next().addClass('in');	

		//Confirm box before delete
		$('.btn-delete').on('click',function(e){
			var dataId = $(this).attr('data-id');
			var dataType = $(this).attr('data-type');
			var dataName = $(this).attr('data-name');
			var lang = '{{$lang}}';
			swal({   
					title: "Are you sure?",   
					text: "You want to delete "+' "'+dataName+'" ?',
					type: "warning",   
					showCancelButton: true,   
					confirmButtonColor: "#f8b32d",   
					confirmButtonText: "Delete",   
					closeOnConfirm: false 
				}, function(){   
					//swal("Deleted!", "Your imaginary file has been deleted.", "success");
					window.location.href = "{{url('/admin')}}/"+dataType+'/destroy/'+dataId+'?lang='+lang;
			});
				return false;
		});
	</script>
      
    </body>
</html>