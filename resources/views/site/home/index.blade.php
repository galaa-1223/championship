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
<!-- Hero Unit
================================================== -->
<div class="hero-unit">
  <div class="container hero-unit__container">
    <div class="hero-unit__content hero-unit__content--left-center">
      <span class="hero-unit__decor">
        <i class="fas fa-star"></i>
      </span>
      <h5 class="hero-unit__subtitle">Golomt capital</h5>
      <h1 class="hero-unit__title">CHAMPIONSHIP</h1>
      <div class="hero-unit__desc">
				<h6 class="text-white m-0"><span style="color: #FFDC11">Бүртгэлийн хугацаа: </span> 2023.03.13-2023.06.16</h6>
				<h6 class="text-white"><span class="text-primary">Үргэлжлэх хугацаа: </span> 2023.03.13-2023.12.15</h6>
			</div>
      <a href="#" data-toggle="modal" data-target="#modal-login-register" class="btn btn-inverse btn-sm btn-outline btn-icon-right btn-condensed hero-unit__btn">Уралдаанд бүртгүүлэх <i class="fas fa-plus text-primary"></i></a>
    </div>
		<figure class="hero-unit__img">
			<img src="{{ asset('assets/images/bilguun-pro.png') }}" alt="Hero Unit Image">
		</figure>
  </div>
</div>


@endsection

@section('content')

<!-- Content
		================================================== -->
		<div class="site-content">
			<div class="container">
		
				<div class="row">
					<!-- Content -->
					<div class="content col-lg-8">
						<!-- Main News Banner -->

						<!-- Lates News -->
						<div class="card card--clean">
							<header class="card__header card__header--has-btn">
								<h4>Мэдээ мэдээлэл</h4>
								<a href="#" class="btn btn-default btn-outline btn-xs card-header__button">Бүгдийг үзэх</a>
							</header>
							<div class="card__content">
								<!-- Posts List -->
								<div class="posts posts--cards posts--cards-thumb-left post-list">
		
									<div class="post-list__item">
										<div class="posts__item posts__item--card posts__item--category-1 card card--block">
											<figure class="posts__thumb">
												<a href="#"><img src="assets/images/post-img9-m.jpg" alt=""></a>
											</figure>
											<div class="posts__inner">
												<div class="card__content">
													<div class="posts__cat">
														<span class="label posts__cat-label">Мэдээ мэдээлэл</span>
													</div>
													<h6 class="posts__title"><a href="#">Silicon Valley Bank-ны хувьцаа 60 хувь унав</a></h6>
													<time datetime="2016-08-17" class="posts__date">2023.03.13</time>
													<div class="posts__excerpt">
													Пүрэв гарагийн арилжаагаар индексүүд уналттай хаагдлаа. Dow Jones индекс 1.7 хувь буюу 543 нэгжээр, Nasdaq Composite 2 хувь, S&P 500 1.8 хувиар тус тус уналаа. 
													</div>
												</div>
												<footer class="posts__footer card__footer">
													<div class="post-author">
														<figure class="post-author__avatar">
														</figure>
													</div>
													<ul class="post__meta meta">
														<li class="meta__item meta__item--views">0</li>
														<li class="meta__item meta__item--likes"><a href="#"><i class="meta-like icon-heart"></i> 0</a></li>
													</ul>
												</footer>
											</div>
										</div>
									</div>
									
									
								</div>
								<!-- Posts List / End -->
							</div>
						</div>
						<!-- Lates News / End -->
		
		
					</div>
					<!-- Content / End -->
		
					<!-- Sidebar -->
					<div id="sidebar" class="sidebar col-lg-4">

						<aside class="widget widget--sidebar widget-social widget-social--condensed">
							<a href="#" class="btn-social-counter btn-social-counter--facebook" target="_blank">
								<div class="btn-social-counter__icon">
									<i class="fab fa-facebook"></i>
								</div>
								<h6 class="btn-social-counter__title">Facebook</h6>
								<span class="btn-social-counter__count"><span class="btn-social-counter__count-num"></span> Likes</span>
								<span class="btn-social-counter__add-icon"></span>
							</a>
							<a href="#" class="btn-social-counter btn-social-counter--twitter" target="_blank">
								<div class="btn-social-counter__icon">
									<i class="fab fa-twitter"></i>
								</div>
								<h6 class="btn-social-counter__title">Twitter</h6>
								<span class="btn-social-counter__count"><span class="btn-social-counter__count-num"></span> Followers</span>
								<span class="btn-social-counter__add-icon"></span>
							</a>
							<a href="#" class="btn-social-counter btn-social-counter--instagram" target="_blank">
								<div class="btn-social-counter__icon">
									<i class="fab fa-instagram"></i>
								</div>
								<h6 class="btn-social-counter__title">Instagram</h6>
								<span class="btn-social-counter__count"><span class="btn-social-counter__count-num"></span> Followers</span>
								<span class="btn-social-counter__add-icon"></span>
							</a>
						</aside>
		
						<!-- Widget: Match Announcement -->
						<aside class="widget widget--sidebar card widget-preview">
							<div class="widget__title card__header">
								<h4>Хамтрагч байгууллагууд</h4>
							</div>
							<div class="widget__content card__content">
						
								<!-- Match Preview -->
								<div class="match-preview">
									<section class="match-preview__body">
										<div class="match-preview__content">
						
											<!-- 1st Team -->
											<div class="match-preview__team match-preview__team--first">
												<figure class="match-preview__team-logo">
													<img src="{{ asset('assets/images/lemonpress.png') }}" alt="Lemonpress">
												</figure>
												<h5 class="match-preview__team-name">Lemon Press</h5>
												<div class="match-preview__team-info">Мэдээллийн ивээн тэтгэгч</div>
											</div>
											<!-- 1st Team / End -->
						
											
											<!-- 2nd Team -->
											<div class="match-preview__team match-preview__team--second">
												<figure class="match-preview__team-logo">
													<img src="{{ asset('assets/images/nexia.png') }}" alt="Nexia">
												</figure>
												<h5 class="match-preview__team-name">Nexia Mongolia</h5>
												<div class="match-preview__team-info">Хөндлөнгийн аудит</div>
											</div>
											<!-- 2nd Team / End -->
						
										</div>
									</section>
									<section class="match-preview__countdown countdown">
										<h4 class="countdown__title">Бүртгэл дуусахад - 2023.06.16</h4>
										<div class="countdown__content">
											<div class="countdown-counter" data-date="June 16, 2023 23:59:59"></div>
										</div>
									</section>
								</div>
								<!-- Match Preview / End -->
						
							</div>
						</aside>
						<!-- Widget: Match Announcement / End -->
		
						
		
						
		
						
		
						
					</div>
					<!-- Sidebar / End -->
				</div>

				<!-- Video Slideshow -->
				<div class="card card--clean">
					<header class="card__header card__header--has-filter">
						<h4>Видео</h4>
						<ul class="category-filter category-filter--carousel category-filter--extra-space">
							<li class="category-filter__item"><a href="#" class="category-filter__link category-filter__link--reset category-filter__link--active">Бүгд</a></li>
						</ul>
					</header>
					<div class="card__content">
		
						<!-- Carousel -->
						<div class="slick posts posts--carousel video-carousel">
		
							<div class="posts__item posts__item--category-1">
								<a href="https://www.youtube.com/watch?v=ecNCdxcMSyE" class="posts__link-wrapper mp_iframe">
									<figure class="posts__thumb">
										<img src="assets/images/video-slide1.jpg" alt="">
									</figure>
									<div class="posts__inner">
										<h3 class="posts__title">Golomt capital championship 2023</h3>
										<time datetime="2023.03.13" class="posts__date">2023.03.13</time>
									</div>
								</a>
							</div>

							<div class="posts__item posts__item--category-1">
								<a href="https://www.youtube.com/watch?v=ecNCdxcMSyE" class="posts__link-wrapper mp_iframe">
									<figure class="posts__thumb">
										<img src="assets/images/video-slide1.jpg" alt="">
									</figure>
									<div class="posts__inner">
										<h3 class="posts__title">Golomt capital championship 2023</h3>
										<time datetime="2023.03.13" class="posts__date">2023.03.13</time>
									</div>
								</a>
							</div>

							<div class="posts__item posts__item--category-1">
								<a href="https://www.youtube.com/watch?v=ecNCdxcMSyE" class="posts__link-wrapper mp_iframe">
									<figure class="posts__thumb">
										<img src="assets/images/video-slide1.jpg" alt="">
									</figure>
									<div class="posts__inner">
										<h3 class="posts__title">Golomt capital championship 2023</h3>
										<time datetime="2023.03.13" class="posts__date">2023.03.13</time>
									</div>
								</a>
							</div>

							<div class="posts__item posts__item--category-1">
								<a href="https://www.youtube.com/watch?v=ecNCdxcMSyE" class="posts__link-wrapper mp_iframe">
									<figure class="posts__thumb">
										<img src="assets/images/video-slide1.jpg" alt="">
									</figure>
									<div class="posts__inner">
										<h3 class="posts__title">Golomt capital championship 2023</h3>
										<time datetime="2023.03.13" class="posts__date">2023.03.13</time>
									</div>
								</a>
							</div>
							
							
		
						</div>
						<!-- Carousel / End -->
		
					</div>
				</div>
				<!-- Video Slideshow / End -->
		
			</div>
		</div>
		
		<!-- Content / End -->

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
