<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tartifly</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="{{ url('css/animate.css') }}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{ url('css/icomoon.css') }}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{ url('css/bootstrap.css') }}">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{ url('css/magnific-popup.css') }}">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{ url('css/flexslider.css') }}">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="{{ url('css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ url('css/owl.theme.default.min.css') }}">

	<!-- Date Picker -->
	<link rel="stylesheet" href="{{ url('css/bootstrap-datepicker.css') }}">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="{{ url('fonts/flaticon/font/flaticon.css') }}">

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{ url('css/style.css') }}">

	<!-- Modernizr JS -->
	<script src="{{ url('js/modernizr-2.6.2.min.js') }}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>

	<div class="colorlib-loader"></div>

	<div id="page">
        @include('layouts.nav')
		@yield('content')
        @include('layouts.footer')
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>

	<!-- jQuery -->
	<script src="{{ url('js/jquery.min.js') }}"></script>
	<!-- jQuery Easing -->
	<script src="{{ url('js/jquery.easing.1.3.js') }}"></script>
	<!-- Bootstrap -->
	<script src="{{ url('js/bootstrap.min.js') }}"></script>
	<!-- Waypoints -->
	<script src="{{ url('js/jquery.waypoints.min.js') }}"></script>
	<!-- Flexslider -->
	<script src="{{ url('js/jquery.flexslider-min.js') }}"></script>
	<!-- Owl carousel -->
	<script src="{{ url('js/owl.carousel.min.js') }}"></script>
	<!-- Magnific Popup -->
	<script src="{{ url('js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ url('js/magnific-popup-options.js') }}"></script>
	<!-- Date Picker -->
	<script src="{{ url('js/bootstrap-datepicker.js') }}"></script>
	<!-- Stellar Parallax -->
	<script src="{{ url('js/jquery.stellar.min.js') }}"></script>
	<!-- Main -->
	<script src="{{ url('js/main.js') }}"></script>

	</body>
</html>

