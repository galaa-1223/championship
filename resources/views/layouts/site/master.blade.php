<!DOCTYPE html>
<html lang="zxx">
<head>
	<title><?=config('app.name')?> - @yield('title')</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="Galaa.TS">
	<meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0">
  <link rel="shortcut icon" href="{{ asset('assets/images/esports/favicons/favicon.ico') }}">
	<link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/images/esports/favicons/favicon-120.png') }}">
	<link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/images/esports/favicons/favicon-152.png') }}">
  @include('layouts.site.css')
  @yield('style')
</head>
<body data-template="template-basketball">

	<div class="site-wrapper clearfix">
		<div class="site-overlay"></div>
    <!-- Header
		================================================== -->
    @include('layouts.site.header')
    <!-- Header / End -->
    @yield('hero')
    <!-- Content
		================================================== -->
		<div class="site-content">
			<div class="container">
				<div class="row">
          @yield('content')
        </div>
      </div>
      <!-- Content / End -->
      <!-- Footer
      ================================================== -->
      @include('layouts.site.footer')
    <!-- Footer / End -->
    </div>
    <!-- Мобйл -->
    @yield('modal')
    <!-- Login/Register Modal -->
    <div class="modal fade" id="modal-login-register" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg modal--login" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">

            <div class="modal-account-holder">
              <div class="modal-account__item">

                <!-- Register Form -->
                <form class="modal-form" action="{{ route('register.perform') }}" method="post" novalidate>
                  @csrf
                  <h5>Бүртгүүлэх</h5>
                  <div class="form-group">
                    <input type="text" name="phone" id="phone2" class="form-control" placeholder="Утасны дугаараа оруулна уу...">
                  </div>
                  <div class="form-group">
                    <input type="email" name="email" id="email2" class="form-control" placeholder="Имэйл хаяг оруулах">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" id="password2" class="form-control" placeholder="Нууц үгээ оруулах">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password_repeat" id="password_repeat2" class="form-control" placeholder="Нууц үгээ давтах">
                  </div>
                  <div class="form-group form-group--submit">
                    <button type="submit" class="btn btn-primary-inverse btn-block">Бүртгүүлэх</button>
                  </div>
                </form>
                <!-- Register Form / End -->

              </div>
              <div class="modal-account__item">

                <!-- Login Form -->
                <form class="modal-form" action="{{ route('login.check') }}" method="post" id="handleAjax" novalidate>
                  @csrf
                  <h5>Нэвтрэх</h5>
                  <div id="errors-list" class="mb-3"></div>
                  <div class="form-group">
                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Имэйл эсвэл утасны дугаар...">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Нууц үг...">
                  </div>
                  <div class="form-group form-group--pass-reminder">
                    <label class="checkbox checkbox-inline">
                      <input type="checkbox" id="remember_me" value="1"> Намайг сана
                      <span class="checkbox-indicator"></span>
                    </label>
                    <a href="#">Нууц үгээ мартсан уу?</a>
                  </div>
                  <div class="form-group form-group--submit">
                    <button type="submit" class="btn btn-primary-inverse btn-block">Нэвтрэх</button>
                  </div>
                </form>
                <!-- Login Form / End -->

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Login/Register Modal / End -->
    <!-- Core JS -->
    <script>
      const baseUrl = "{{ config('app.url') }}";
    </script>
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery/jquery-migrate.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/core.js') }}"></script>
    @yield('script') 
    @include('layouts.site.script') 
  </body>
</html>