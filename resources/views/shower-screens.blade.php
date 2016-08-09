@extends('app')

@section('meta')
	<title>Shower Screens</title>
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
	        <h1 class="pull-left">Shower Screens</h1>
	        <ul class="pull-right breadcrumb hidden-xs">
	            <li><a href="/">Home</a></li>
	            <li class="active">Shower Screens</li>
	        </ul>
	    </div><!--/container-->
	</div><!--/breadcrumbs-->
	<!--=== End Breadcrumbs ===-->
	<!--=== Content Part ===-->
<div class="container">
    <div class="margin-bottom-50">
        <img class="img-responsive" src="{{ asset('/img/shower_screens_banner.jpg') }}" alt="">
    </div>

    <div class="tag-box tag-box-v2">
        <h2>At Wood Street Windows, we specialize in various shower screen options for your project.</h2>
        <p>We know that details are important in good design and at Wood Street Windows, we ensure that you don’t have to sacrifice style for practicality. Out shower screens are designed to ensure the profile will virtually eliminate dirt and soap trails, making your cleaning job easy!</p>
        <p>Available in a large range of colours to suit your decor, our screens can be fitted to all new and most existing bathrooms. Expert installation and optimum performance is guaranteed.</p>
        <h4>Frameless Glass Shower Screeens</h4>
        <p>Decorating with large panels of easy to clean frameless glass panels reflects a modern inspired choice. Glass type is optional with many choices available including glass, tints and obscure patterns. Handles, hinges and fittings are also user choice with many options available.</p>
        <h4>Semi Frameless Shower Screens</h4>
        <p>Offer a modern look to any new bathroom or renovation. The easy clean design offers the choice of optional handles and glass types. The sill at the bottom can be removed for the convenience of wheelchair access or purely to achieve a sleek look.</p>
        <h4>Sliding Door Shower Screens</h4>
        <p>Offer the ability to make efficient use of small spaces in bathrooms and en-suites. Sliding is smooth and free with modern systems now in place. A range of colours and glass types are available for selection.</p>
        <h4>Fixed Framed/Frameless Panes</h4>
        <p>The most modern of all screens on offer at the moment, installed with experienced, efficient and well-trained staff. These screens will be the highlight of your bathroom.</p>
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
