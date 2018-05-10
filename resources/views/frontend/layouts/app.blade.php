<!DOCTYPE html>
<html lang="en">
<head>
	<title>KEBABBQ</title>
	@include('frontend.partials.header')
</head>
<body>
	<!-- ====== Preloader ======  -->
	<div class="loading">
		<div class="load-circle">
		</div>
	</div>
	<!-- ======End Preloader ======  -->
	<!-- =========    HEADER START    ======== -->
	<section class="s-header" id="home" data-scroll-index="0">
		@include('frontend.partials.navigation')
	</section>
	@yield('content')
	@include('frontend.partials.footer')