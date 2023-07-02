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
         User Login
      @endif
  </title>        
	
<!-- Custom CSS -->
<link href="{{ URL('resources/views/admin/theme') }}/dist/css/style.css" rel="stylesheet" type="text/css">
<style>
	.auth-form {
    width: 431px;
    /* border: solid 1px #f8f8f8; */
    /* border-radius: 21px; */
    padding: 35px 23px;
    box-shadow: 0px 0px 20px #d9d9d9;
}
</style>
</head>
	<body>
		<!--Preloader-->
		<div class="preloader-it">
			<div class="la-anim-1"></div>
		</div>
		<!--/Preloader-->
		
		<div class="wrapper pa-0">
			{{-- <header class="sp-header">
				<div class="sp-logo-wrap pull-left">

				</div>
				<div class="form-group mb-0 pull-right">
					<span class="inline-block pr-10">Don't have an account?</span>
					<a class="inline-block btn btn-primary  btn-rounded btn-outline" href="signup.html">Sign Up</a>
				</div>
				<div class="clearfix"></div>
			</header> --}}
			
			@yield('content')
		
		</div>
		<!-- /#wrapper -->
		
		<!-- JavaScript -->

		    <!-- jQuery -->
			<script src="{{ URL('resources/views/admin/theme') }}/vendors/bower_components/jquery/dist/jquery.min.js"></script>

			<!-- Bootstrap Core JavaScript -->
			<script src="{{ URL('resources/views/admin/theme') }}/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	
	<!-- Slimscroll JavaScript -->
	<script src="{{ URL('resources/views/admin/theme') }}/dist/js/jquery.slimscroll.js"></script>
	
	<!-- Init JavaScript -->
	<script src="{{ URL('resources/views/admin/theme') }}/dist/js/init.js"></script>
		
	</body>
</html>
