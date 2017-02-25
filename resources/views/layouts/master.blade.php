<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <title>BiShop</title>
    <meta name="description" content="Here goes description" />
    <meta name="author" content="author name" />
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />

    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <base href="{{ URL::asset('/') }}" />
    <!-- Style CSS + Google Fonts -->
    
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/nouislider.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/icomoon.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/animate.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/screen.css') }}" />

</head>
<body class="bg">
	@section('body')

	<!-- Page Wrapper -->
	<div class="page-wrapper">
		
		<!-- Main Content -->
		<div class="content-wrapper boxed">

			<!-- Header -->
			@include('layouts.partials.header')
			
			@include('layouts.partials.slidebar')

			<!-- Main Content -->
			<div class="main-content no-padding">

				@yield('content')

			</div>
			

			<!-- Footer -->
			@include('layouts.partials.footer')

		</div>

	</div>
	
	@show
	<!-- Scripts -->
	<script src="{{ URL::asset('js/jquery.js') }}"></script>
	<script src="{{ URL::asset('js/jquery-ui.js') }}"></script>
	<script src="{{ URL::asset('js/bootstrap.js') }}"></script>
	<script src="{{ URL::asset('js/masonry.js') }}"></script>
	<script src="{{ URL::asset('js/owl.carousel.js') }}"></script>
	<script src="{{ URL::asset('js/bxslider.js') }}"></script>
	<script src="{{ URL::asset('js/imagesloaded.js') }}"></</script>
	<script src="{{ URL::asset('js/flexslider.js') }}"></script>
	<script src="{{ URL::asset('js/wNumb.js') }}"></script>
	<script src="{{ URL::asset('js/nouislider.js') }}"></script>
	<script src="{{ URL::asset('js/countdown.js') }}"></script>
	<script src="{{ URL::asset('js/placeholder.js') }}"></script>
	<script src="{{ URL::asset('js/options.js') }}"></script>

	
	<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</body>
</html>
