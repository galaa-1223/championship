@extends('layouts.site.master')

@section('title', 'Хянах самбар')

@section('css')
@endsection

@section('style')
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
			<h4>{{ __("site.tp_idcard") }}</h4>
		</div>
		<div class="card__content">
			<form class="df-personal-info" action="{{ route('users.idcardSave') }}" method="post" enctype="multipart/form-data">
				@csrf
				<div class="row">
					<div class="col-md-12">
						<label for="account-first-name">Иргэний үнэмлэхийн нүүрэн тал:</label>
						<div class="col-sm-12">
							<div id="idcard_front" class="row"></div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<label for="account-first-name">Иргэний үнэмлэхийн ар тал /Ар/:</label>
						<div class="col-sm-12">
							<div id="idcard_back" class="row"></div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<label for="account-first-name">Гарын үсэг /зураг/:</label>
						<div class="col-sm-12">
							<div id="signiture" class="row"></div>
						</div>
					</div>
				</div>

				<div class="form-group--submit">
					<button type="submit" class="btn btn-default btn-lg btn-block"> Илгээх </button>
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
<script type='text/javascript' src='{{ asset('assets/js/gc-multi-image-picker.js') }}'></script>
<script type="text/javascript">
	$(function(){

		$("#idcard_front").GCMultiImagePicker({
			fieldName     : 'idcard_front',
		});

		$("#idcard_back").GCMultiImagePicker({
			fieldName     : 'idcard_back',
		});

		$("#signiture").GCMultiImagePicker({
			fieldName     : 'signiture',
		});

	});
</script>
@endsection
