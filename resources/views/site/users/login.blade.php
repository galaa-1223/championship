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
						<h1 class="page-heading__title">Login and <span class="highlight">Register</span></h1>
						<ol class="page-heading__breadcrumb breadcrumb">
							<li class="breadcrumb-item"><a href="index.html">Home</a></li>
							<li class="breadcrumb-item"><a href="shop-grid.html">Shop</a></li>
							<li class="breadcrumb-item active" aria-current="page">Login and Register</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
		<!-- Page Heading / End -->

@endsection

@section('content')

<div class="col-md-3"></div>
<div class="col-md-6">
	<!-- Login -->
	<div class="card">
		<div class="card__header">
			<h4>Login to your Account</h4>
		</div>
		<div class="card__content">

			<!-- Login Form -->
			<form action="#">
				<div class="form-group">
					<label for="login-name">Имэйл хаяг</label>
					<input type="email" name="login-name" id="login-name" class="form-control" placeholder="Имэйл хаягаа оруулна уу...">
				</div>
				<div class="form-group">
					<label for="login-password">Нууц үг</label>
					<input type="password" name="login-password" id="login-password" class="form-control" placeholder="Нууц үгээ оруулна уу...">
				</div>
				<div class="form-group form-group--password-forgot">
					<label class="checkbox checkbox-inline">
						<input type="checkbox" id="inlineCheckbox1" value="option1" checked> Намайг сана
						<span class="checkbox-indicator"></span>
					</label>
					<span class="password-reminder"><a href="#">Нууц үгээ сана?</a></span>
				</div>
				<div class="form-group form-group--sm">
					<a href="shop-account.html" class="btn btn-primary-inverse btn-lg btn-block">Sign in to your account</a>
				</div>
			</form>
			<!-- Login Form / End -->
		</div>
	</div>
	<!-- Login / End -->
</div>
<div class="col-md-3"></div>

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
