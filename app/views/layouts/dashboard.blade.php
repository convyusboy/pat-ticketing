<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Online Ticketing</title>

	<meta name="description" content="Dynamic tables and grids using jqGrid plugin" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- basic styles -->

	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />
	<link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="{{asset('assets/css/font-awesome-ie7.min.css')}}" />
		  <![endif]-->

		  <!-- page specific plugin styles -->

		  <link rel="stylesheet" href="{{asset('assets/css/jquery-ui-1.10.3.full.min.css')}}" />
		  <link rel="stylesheet" href="{{asset('assets/css/datepicker.css')}}" />
		  <link rel="stylesheet" href="{{asset('assets/css/ui.jqgrid.css')}}" />

		  <!-- fonts -->

		  <link rel="stylesheet" href="{{asset('assets/css/ace-fonts.css')}}" />

		  <!-- ace styles -->

		  <link rel="stylesheet" href="{{asset('assets/css/ace.min.css')}}" />
		  <link rel="stylesheet" href="{{asset('assets/css/ace-rtl.min.css')}}" />
		  <link rel="stylesheet" href="{{asset('assets/css/ace-skins.min.css')}}" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="{{asset('assets/css/ace-ie.min.css')}}" />
		  <![endif]-->

		  <!-- inline styles related to this page -->

		  <!-- ace settings handler -->

		  <script src="{{asset('assets/js/ace-extra.min.js')}}"></script>

		  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body>
		<!--********** HEADER **********-->
		<div class="navbar navbar-default" id="navbar">
			<script type="text/javascript">
			try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

			<div class="navbar-container" id="navbar-container">				
				<div class="navbar-header pull-left">
					<a href="#" class="navbar-brand">
						<small>
							Online Ticketing
						</small>
					</a><!-- /.brand -->
				</div><!-- /.navbar-header -->

			</div><!-- /.container -->
		</div>

		<!--********** BODY **********-->
		<div class="main-container" id="main-container">
			<script type="text/javascript">
			try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<div class="main-container-inner">
				<a class="menu-toggler" id="menu-toggler" href="#">
					<span class="menu-text"></span>
				</a>

				<!--********** SIDEBAR **********-->
				<div class="sidebar" id="sidebar">
					<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
					</script>

					<ul class="nav nav-list">
						<li>
							<a href="{{url('home')}}">
								<i class="icon-dashboard"></i>
								<span class="menu-text"> Flights </span>
							</a>
						</li>
					</ul><!-- /.nav-list -->

					<ul class="nav nav-list">
						<li>
							<a href="{{url('orders')}}">
								<i class="icon-dashboard"></i>
								<span class="menu-text"> Orders </span>
							</a>
						</li>
					</ul><!-- /.nav-list -->

					<div class="sidebar-collapse" id="sidebar-collapse">
						<i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
					</div>

					<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
					</script>
				</div>

				<!--********** CONTENTS **********-->
				<div class="main-content">

					<!--********** BREADCRUMBS **********-->
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
						try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="{{url('admin/dashboard')}}">Home</a>
							</li>
						</ul><!-- .breadcrumb -->

					</div>
					<!--********** END BREADCRUMBS **********-->
					
					@if(Session::has('message'))
					<div class="alert alert-block alert-success">
						<button type="button" class="close" data-dismiss="alert">
							<i class="icon-remove"></i>
						</button>

						{{Session::get('message')}}

					</div>
					@endif

					<!--********** PAGE CONTENTS **********-->
					@yield('content')
					<!--********** END PAGE CONTENTS **********-->

				</div><!-- /.main-content -->

				
			</div><!-- /.main-container-inner -->

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="icon-double-angle-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->

		<script type="text/javascript">
		window.jQuery || document.write("<script src='{{asset('assets/js/jquery-2.0.3.min.js')}}'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='{{asset('assets/js/jquery-1.10.2.min.js')}}>"+"<"+"/script>");
</script>
<![endif]-->

<script type="text/javascript">
if("ontouchend" in document) document.write("<script src='{{asset('assets/js/jquery.mobile.custom.min.js')}}'>"+"<"+"/script>");
</script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/typeahead-bs2.min.js')}}"></script>

<!-- ace scripts -->

<script src="{{asset('assets/js/ace-elements.min.js')}}"></script>
<script src="{{asset('assets/js/ace.min.js')}}"></script>

@yield('page_script')
</body>
</html>
