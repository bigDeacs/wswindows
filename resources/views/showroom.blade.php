@extends('app')

@section('meta')
	<title>Showroom</title>
	<meta name="description" content="Manufactured right here on Australia&#039;s Gold Coast, our windows and doors are as lovely to look at as they are to look through. You will find genuine quality in every inch of C-View windows and doors.">
	<meta name="keywords" content="c-view, windows, doors, Gold Coast, Brisbane, Queensland, Australia, aluminium, sea view, residential, prestige, commercial, screens">
@endsection

@section('head')
	<link href="{{ asset('/css/pages/portfolio-v2.css') }}" rel="stylesheet" media="screen">
@endsection

@section('content')
	<!--=== Breadcrumbs ===-->
	<div class="breadcrumbs margin-bottom-20">
	    <div class="container">
	        <h1 class="pull-left">Showroom</h1>
	        <ul class="pull-right breadcrumb hidden-xs">
	            <li><a href="/">Home</a></li>
	            <li class="active">Showroom</li>
	        </ul>
	    </div><!--/container-->
	</div><!--/breadcrumbs-->
	<!--=== End Breadcrumbs ===-->
	<!--=== Content Part ===-->
<div class="container">
    <div class="margin-bottom-50">
        <div id="map"></div>
    </div>

    <div class="tag-box tag-box-v2">
        <h2>Come Visit Our Showroom</h2>
        <p>At Wood Street Windows, we have a newly renovated showroom which showcases our large range of aluminium windows and doors. Our showroom includes glass and hardware displays, to ensure you receive a complete solution to your windows and doors.</p>
				<p>With our dedicated and qualified team there to assist, we can be sure to solve any window and door complication your project is facing.</p>
				<p>Come and visit us at our brand new showroom at 1 Wood Street, Bairnsdale for all your aluminium window and door needs.</p>
    </div>

    <div class="margin-bottom-50 clearfix"></div>
</div><!--/container-->
<!--=== End Content Part ===-->

@endsection

@section('scripts')
	<script>
		var map;
			function initMap() {
				var myLatLng = { lat: -37.824652, lng: 147.634528 };
				map = new google.maps.Map(document.getElementById('map'), {
						center: myLatLng,
						zoom: 16
					});

					var marker = new google.maps.Marker({
						position: myLatLng,
						map: map,
						title: 'Wood Street Windows'
					});
			}
			</script>
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC52ck_jrm_AsqBe5CDNXIh7xrW6tmMyMQ&callback=initMap"></script>
@endsection
