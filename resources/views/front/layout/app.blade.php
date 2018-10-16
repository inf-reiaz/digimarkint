<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0" name="viewport">
	<title>DigiMark Interactive</title>
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

	<!-- Font -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato:400,700,900' rel='stylesheet' type='text/css'>
	
	<!-- Css -->
	<link rel="stylesheet" href="/public/front/css/core.min.css" />
	<link rel="stylesheet" href="/public/front/css/skin.css" />

	<!--[if lt IE 9]>
    	<script type="text/javascript" src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body class="home-page">

	<!-- Side Navigation Menu -->
	@include('front.navs.mobile_menu')
	<!-- Side Navigation Menu End -->

	<div class="wrapper">
		<div class="wrapper-inner">

			<!-- Header -->
	    @include('front.partials.header')
			<!-- Header End -->

			<!-- Content -->
			@yield('content')
			<!-- Content End -->

			<!-- Footer 1-->
	      @include('front.partials.footer')
			<!-- Footer 1 End -->

		</div>
	</div>

	<!-- Js -->
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maps.googleapis.com/maps/api/js?v=3"></script>
	<script src="/public/front/js/timber.master.min.js"></script>
</body>
</html>