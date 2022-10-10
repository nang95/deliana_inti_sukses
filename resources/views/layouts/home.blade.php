<!DOCTYPE html>
<html lang="en">
<head>
	<title>Deliana Inti Sukses</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	
	<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900" rel="stylesheet">

	<link rel="stylesheet" href="{{ asset('front_assets/css/open-iconic-bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('front_assets/css/animate.css') }}">
	
	<link rel="stylesheet" href="{{ asset('front_assets/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('front_assets/css/owl.theme.default.min.css') }}">
	<link rel="stylesheet" href="{{ asset('front_assets/css/magnific-popup.css') }}">

	<link rel="stylesheet" href="{{ asset('front_assets/css/aos.css') }}">

	<link rel="stylesheet" href="{{ asset('front_assets/css/ionicons.min.css') }}">
	
	<link rel="stylesheet" href="{{ asset('front_assets/css/flaticon.css') }}">
	<link rel="stylesheet" href="{{ asset('front_assets/css/icomoon.css') }}">
	<link rel="stylesheet" href="{{ asset('front_assets/css/style.css') }}">
	<link rel="icon" href="{{ asset('images/full_logo_colored.png') }}">
</head>
<body> 
	@yield('content')
	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

	<script src="{{ asset('front_assets/js/jquery.min.js') }}"></script>
	<script src="{{ asset('front_assets/js/jquery-migrate-3.0.1.min.js') }}"></script>
	<script src="{{ asset('front_assets/js/popper.min.js') }}"></script>
	<script src="{{ asset('front_assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('front_assets/js/jquery.easing.1.3.js') }}"></script>
	<script src="{{ asset('front_assets/js/jquery.waypoints.min.js') }}"></script>
	<script src="{{ asset('front_assets/js/jquery.stellar.min.js') }}"></script>
	<script src="{{ asset('front_assets/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('front_assets/js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('front_assets/js/aos.js') }}"></script>
	<script src="{{ asset('front_assets/js/jquery.animateNumber.min.js') }}"></script>
	<script src="{{ asset('front_assets/js/scrollax.min.js') }}"></script>
	<script src="{{ asset('front_assets/https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false') }}"></script>
	<script src="{{ asset('front_assets/js/google-map.js') }}"></script>
	<script src="{{ asset('front_assets/js/main.js') }}"></script>
</body>
</html>