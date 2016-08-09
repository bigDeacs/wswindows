@extends('app')

@section('meta')
	<title>Garage Doors</title>
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
	        <h1 class="pull-left">Garage Doors</h1>
	        <ul class="pull-right breadcrumb hidden-xs">
	            <li><a href="/">Home</a></li>
	            <li class="active">Garage Doors</li>
	        </ul>
	    </div><!--/container-->
	</div><!--/breadcrumbs-->
	<!--=== End Breadcrumbs ===-->
	<!--=== Content Part ===-->
<div class="container">
    <div class="margin-bottom-50">
        <img class="img-responsive" src="{{ asset('/img/garage_doors_banner.jpg') }}" alt="">
    </div>

    <div class="tag-box tag-box-v2">
        <h2>We supply roller, industrial and panel lift doors, grilles and openers.</h2>
        <p>Bairnsdale Roller Doors will ensure you ease, security and improve the appearance of your house with the quiet smooth operation of a garage door and motor. We are approved dealers with Australia’s premium steel sectional garage doors manufacturers B&D Doors and Taurean Doors. We offer shop front service to help eliminate the risk of backyard operators, giving you security that your warranty is safe and sound. Our 24 hour service is second to none and our fully trained technicians are experienced and accredited to handle any garage door query.</p>
        <p>As garage door specialists, we offer a large range of products including new doors, motors and parts. We also service existing garage door installations.</p>
        <p><strong>Call us on (03) 5152 6331 for further information</strong></p>
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
