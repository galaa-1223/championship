<!-- Header
================================================== -->
<!-- Header Mobile -->
<div class="header-mobile clearfix" id="header-mobile">
  <div class="header-mobile__logo">
    <a href="/"><img src="{{ asset('assets/images/logo.png') }}" srcset="{{ asset('assets/images/logo@2x.png 2x') }}" alt="Alchemists" class="header-mobile__logo-img"></a>
  </div>
  <div class="header-mobile__inner">
    <a id="header-mobile__toggle" class="burger-menu-icon"><span class="burger-menu-icon__line"></span></a>
    <span class="header-mobile__search-icon" id="header-mobile__search-icon"></span>
  </div>
</div>

<!-- Header Desktop -->
<header class="header header--layout-1">

  <!-- Header Top Bar -->
  <div class="header__top-bar clearfix">
    <div class="container">
      <div class="header__top-bar-inner">

        <!-- Account Navigation -->
        <ul class="nav-account">
          <li class="nav-account__item nav-account__item--wishlist gc-udirdamj"><a href="#">Удирдамж</a></li>
          @guest
          <li class="nav-account__item"><a href="#" data-toggle="modal" data-target="#modal-login-register">Бүртгүүлэх | Нэвтрэх</a></li>
          @endguest
          @auth
          <li class="nav-account__item nav-account__item--logout">Тавтай морилно уу! {{auth()->user()->phone}} | <a href="{{ route('logout.perform') }}">Гарах</a></li>
          @endauth
        </ul>
        <!-- Account Navigation / End -->

      </div>
    </div>
  </div>
  <!-- Header Top Bar / End -->

  <!-- Header Secondary -->
  <div class="header__secondary">
    <div class="container">

      <ul class="info-block info-block--header">
        <li class="info-block__item info-block__item--contact-primary">
          <img src="{{ asset('assets/images/phone.png') }}" class="df-icon df-icon--basketball"/>
          <h6 class="info-block__heading">Холбоо барих</h6>
          <a class="info-block__link" href="tel:9767012-1530">7012-1530</a>
        </li>
        <li class="info-block__item info-block__item--contact-secondary">
          <img src="{{ asset('assets/images/mail.png') }}" class="df-icon df-icon--basketball"/>
          <h6 class="info-block__heading">Имэйл хаяг</h6>
          <a class="info-block__link" href="mailto:championship@golomtcapital.com">championship@golomtcapital.com</a>
        </li>
        
      </ul>
    </div>
  </div>
  <!-- Header Secondary / End -->

  <!-- Header Primary -->
  <div class="header__primary">
    <div class="container">
      <div class="header__primary-inner">
        <!-- Header Logo -->
        <div class="header-logo">
          <a href="/"><img src="{{ asset('assets/images/logo.png') }}" alt="Alchemists" srcset="{{ asset('assets/images/logo@2x.png 2x') }}" class="header-logo__img"></a>
        </div>
        <!-- Header Logo / End -->

        <!-- Main Navigation -->
        <nav class="main-nav clearfix">
          <ul class="main-nav__list">
            <li class="active"><a href="{{ route('home.index') }}">Эхлэл</a></li>
            <li><a href="{{ route('home.index') }}">Мэдээ мэдээлэл</a></li>
            <li><a href="{{ route('home.index') }}">Заавар</a></li>
            <li><a href="{{ route('home.index') }}">Зөвлөгөө</a></li>
            <li><a href="{{ route('home.index') }}">Холбоо барих</a></li>
          </ul>
		
							<!-- Social Links -->
							<ul class="social-links social-links--inline social-links--main-nav">
		
								<li class="social-links__item">
									<a href="#" class="social-links__link" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fab fa-facebook"></i></a>
								</li>
								<li class="social-links__item">
									<a href="#" class="social-links__link" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fab fa-twitter"></i></a>
								</li>
								<li class="social-links__item">
									<a href="#" class="social-links__link" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fab fa-instagram"></i></a>
								</li>
		
							</ul>
							<!-- Social Links / End -->
		
							<!-- Pushy Panel Toggle -->
							{{-- <a href="#" class="pushy-panel__toggle">
								<span class="pushy-panel__line"></span>
							</a> --}}
							<!-- Pushy Panel Toggle / Eng -->
						</nav>
						<!-- Main Navigation / End -->
					</div>
				</div>
			</div>
			<!-- Header Primary / End -->
		
		</header>
		<!-- Header / End -->