@extends('layouts.site.master')

@section('title', 'Хянах самбар')

@section('css')
@endsection

@section('style')
<!-- REVOLUTION STYLE SHEETS -->
<link rel="stylesheet" type="text/css" href="assets/vendor/revolution/css/settings.css">
<!-- REVOLUTION LAYERS STYLES -->
<link rel="stylesheet" type="text/css" href="assets/vendor/revolution/css/layers.css">
<!-- REVOLUTION NAVIGATION STYLES -->
<link rel="stylesheet" type="text/css" href="assets/vendor/revolution/css/navigation.css">
<!-- REVEAL ADD-ON FILES -->
<link rel='stylesheet' href='assets/vendor/revolution-addons/reveal/css/revolution.addon.revealer.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' href='assets/vendor/revolution-addons/reveal/css/revolution.addon.revealer.preloaders.css?ver=1.0.0' type='text/css' media='all' />
<!-- TYPEWRITER ADD-ON FILES -->
<link rel='stylesheet' href='assets/vendor/revolution-addons/typewriter/css/typewriter.css' type='text/css' media='all' />
@endsection

@section('hero')

<!-- Page Heading
		================================================== -->
		<div class="page-heading">
			<div class="container">
				<div class="row">
					<div class="col-md-10 offset-md-1">
						<h1 class="page-heading__title">{{ __('site.register_title') }}</h1>
						<ol class="page-heading__breadcrumb breadcrumb">
							<li class="breadcrumb-item"><a href="index.html">{{ __('site.home') }}</a></li>
							<li class="breadcrumb-item active" aria-current="page">{{ __('site.register') }}</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
		<!-- Page Heading / End -->

		<!-- Team Pages Filter -->
		@include('site.users.partials.section')
		<!-- Team Pages Filter / End -->

@endsection

@section('content')
<div class="col-lg-2">
</div>

<div class="col-lg-8">

	<!-- Personal Information -->
	<div class="card card--lg">
		<div class="card__header">
			<h4>{{ __("site.tp_registred") }}</h4>
		</div>
		<div class="card__content">
			<form action="#" class="df-personal-info">

				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="account-password">Нууц үг оруулах</label>
							<input type="password" class="form-control" value="" name="account-password" id="account-password" placeholder="**********">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="account-password-repeat">Нууц үгээ давтах</label>
							<input type="password" class="form-control" value="" name="account-password-repeat" id="account-password-repeat" placeholder="**********">
						</div>
					</div>
				</div>

				

				<div class="form-group--submit">
					<button type="submit" class="btn btn-default btn-lg btn-block">Бүртгүүлэх</button>
				</div>

			</form>
		</div>
	</div>
	<!-- Personal Information / End -->
</div>

<div class="col-lg-2">
</div>

@endsection

@section('modal')
@endsection

@section('script')
<!-- REVEAL ADD-ON FILES -->
<script type='text/javascript' src='assets/vendor/revolution-addons/reveal/js/revolution.addon.revealer.min.js?ver=1.0.0'></script>
	
<!-- TYPEWRITER ADD-ON FILES -->
<script type='text/javascript' src='assets/vendor/revolution-addons/typewriter/js/revolution.addon.typewriter.min.js'></script>

<!-- REVOLUTION JS FILES -->
<script type="text/javascript" src="assets/vendor/revolution/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="assets/vendor/revolution/js/jquery.themepunch.revolution.min.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="assets/vendor/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="assets/vendor/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="assets/vendor/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="assets/vendor/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
@endsection
