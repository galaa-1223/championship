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
			<h4>{{ __("site.tp_personal_info") }}</h4>
		</div>
		<div class="card__content">
			<form class="df-personal-info" action="{{ route('users.personalSave') }}" method="post" novalidate>
				@csrf
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="lastname">{{ __("site.lastname") }}:</label>
							<input type="text" class="form-control" value="{{ is_null($user->lastname) ? '' : $user->lastname }}" name="lastname" id="lastname" placeholder="{{ __("site.your_lastname") }}" {{ is_null($user->lastname) ? '' : "readonly" }}>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="firstname">{{ __("site.firstname") }}:</label>
							<input type="text" class="form-control" value="{{ is_null($user->firstname) ? '' : $user->firstname }}" name="firstname" id="firstname" placeholder="{{ __("site.your_firstname") }}" {{ is_null($user->firstname) ? '' : "readonly" }}>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label for="register">Ажил эрхлэлт:</label>
							<input type="text" class="form-control" value="{{ is_null($user->job) ? '' : $user->job }}" name="job" id="job" placeholder="Шинжээч" {{ is_null($user->job) ? '' : "readonly" }}>
						</div>
					</div>
					<div class="col-md-6">
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="account-city">Банк</label>
							<select name="account-city" id="account-city" class="form-control">
								<option value="0">Банкаа сонгоно уу...</option>
								@if($banks)
								@foreach($banks as $bank)
								<option value="{{ $bank->id }}">{{ $bank->name }}</option>
								@endforeach
								@endif
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="register">Дансны дугаар:</label>
							<input type="text" class="form-control" value="{{ is_null($user->bank_account) ? '' : $user->bank_account }}" name="bank_account" id="bank_account" placeholder="XXXX-XXXX-XXXX-XXXX" {{ is_null($user->bank_account) ? '' : "readonly" }}>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="phone">{{ __("site.phone") }}:</label>
							<input type="text" class="form-control" value="{{ Auth::user()->phone }}" name="phone" id="phone3" placeholder="{{ __("site.your_phone") }}" readonly>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="email">{{ __("site.email") }}:</label>
							<input type="text" class="form-control" value="{{ Auth::user()->email }}" name="email" id="email3" placeholder="account@example.com" readonly>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="nickname">{{ __("site.nickname") }}:</label>
							<input type="text" class="form-control" value="{{ is_null($user->nickname) ? '' : $user->nickname }}" name="nickname" id="nickname" placeholder="King" {{ is_null($user->nickname) ? '' : "readonly" }}>
							<small id="nickname_response" class="form-text text-alert"></small>
						</div>
					</div>
					<div class="col-md-6">
						<label for="email">Аватар сонгох:</label>
						<figure class="comments-list__avatar2">
							<a href="javascript:;"><img src="{{ asset('uploads/avatars/001.png') }}" alt=""></a>
						</figure>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-12">
						<label class="checkbox checkbox-inline">
							<input type="checkbox" name="is_internal" id="is_internal" value="yes" {{ ($user->is_internal == "yes") ? 'checked' : '' }}{{ is_null($user->nickname) ? '' : ' disabled' }}> {{ __('site.tp_account_check') }}
							<span class="checkbox-indicator"></span>
						</label>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<label class="checkbox checkbox-inline">
							<input type="checkbox" name="is_foreign" id="is_foreign" value="yes" {{ ($user->is_foreign == "yes") ? 'checked' : '' }}{{ is_null($user->nickname) ? '' : ' disabled' }}> {{ __('site.tp_account_foreign_check') }}
							<span class="checkbox-indicator"></span>
						</label>
					</div>
				</div>
				@if(is_null($user->nickname))
				<div class="form-group--submit mt-3">
					<button type="submit" class="btn btn-default btn-lg btn-block">Хадгалах</button>
				</div>
				@endif
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
@endsection
