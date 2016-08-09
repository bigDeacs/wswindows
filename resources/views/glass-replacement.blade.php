@extends('app')

@section('meta')
	<title>Glass Replacement</title>
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
	        <h1 class="pull-left">Glass Replacement</h1>
	        <ul class="pull-right breadcrumb hidden-xs">
	            <li><a href="/">Home</a></li>
	            <li class="active">Glass Replacement</li>
	        </ul>
	    </div><!--/container-->
	</div><!--/breadcrumbs-->
	<!--=== End Breadcrumbs ===-->
	<!--=== Content Part ===-->
<div class="container">
    <div class="margin-bottom-50">
        <img class="img-responsive" src="{{ asset('/img/glass_replacement_banner.jpg') }}" alt="">
    </div>

    <div class="tag-box tag-box-v2">
        <h2>At Wood Street Windows, we provide a 24 hour glass replacement service to Bairnsdale and surrounds.</h2>
        <p>Wood Street Windows offer glass replacement services for all types of glazing and Perspex jobs. Servicing East Gippsland for the past 25 years our service is fast, efficient and competitively priced.</p>
        <h4>Emergency Glazing Service</h4>
        <p>Our 24 hour emergency glazing service offers response times that are second to none and are effectively managed through our job tracking system.</p>
        <h4>Machinery Tractors and Horse Floats</h4>
        <p>Our services also include re glazing machinery and floats on site with wither glass or Persplex.</p>
        <p><strong>Our workmanship including all our products are fully guaranteed and conform to the stringent Australian standards.</strong></p>
    </div>

    <div class="margin-bottom-20 clearfix"></div>

    <div class="row">

    </div>

    <div class="margin-bottom-50"></div>
</div><!--/container-->
<!--=== End Content Part ===-->

@endsection

@section('scripts')
@endsection
