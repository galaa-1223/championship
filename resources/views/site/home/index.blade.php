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
<!-- Pushy Panel -->
<aside class="pushy-panel ">
  <div class="pushy-panel__inner">
    <header class="pushy-panel__header">
      <div class="pushy-panel__logo">
        <a href="index.html"><img src="assets/images/logo.png" srcset="assets/images/logo@2x.png 2x" alt="Alchemists"></a>
      </div>
    </header>
    <div class="pushy-panel__content">

      <!-- Widget: Posts -->
      <aside class="widget widget--side-panel">
        <div class="widget__content">
          <ul class="posts posts--simple-list posts--simple-list--lg">
            <li class="posts__item posts__item--category-1">
              <div class="posts__inner">
                <div class="posts__cat">
                  <span class="label posts__cat-label">The Team</span>
                </div>
                <h6 class="posts__title"><a href="#">The new eco friendly stadium won a Leafy Award in 2016</a></h6>
                <time datetime="2017-08-23" class="posts__date">August 23rd, 2018</time>
                <div class="posts__excerpt">
                  Lorem ipsum dolor sit amet, consectetur adipisi nel elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini veniam, quis nostrud en derum sum laborem.
                </div>
              </div>
              <footer class="posts__footer card__footer">
                <div class="post-author">
                  <figure class="post-author__avatar">
                    <img src="assets/images/samples/avatar-1.jpg" alt="Post Author Avatar">
                  </figure>
                  <div class="post-author__info">
                    <h4 class="post-author__name">James Spiegel</h4>
                  </div>
                </div>
                <ul class="post__meta meta">
                  <li class="meta__item meta__item--likes"><a href="#"><i class="meta-like meta-like--active icon-heart"></i> 530</a></li>
                  <li class="meta__item meta__item--comments"><a href="#">18</a></li>
                </ul>
              </footer>
            </li>
            <li class="posts__item posts__item--category-2">
              <div class="posts__inner">
                <div class="posts__cat">
                  <span class="label posts__cat-label">Injuries</span>
                </div>
                <h6 class="posts__title"><a href="#">Mark Johnson has a Tibia Fracture and is gonna be out</a></h6>
                <time datetime="2017-08-23" class="posts__date">August 23rd, 2018</time>
                <div class="posts__excerpt">
                  Lorem ipsum dolor sit amet, consectetur adipisi nel elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini veniam, quis nostrud en derum sum laborem.
                </div>
              </div>
              <footer class="posts__footer card__footer">
                <div class="post-author">
                  <figure class="post-author__avatar">
                    <img src="assets/images/samples/avatar-2.jpg" alt="Post Author Avatar">
                  </figure>
                  <div class="post-author__info">
                    <h4 class="post-author__name">Jessica Hoops</h4>
                  </div>
                </div>
                <ul class="post__meta meta">
                  <li class="meta__item meta__item--likes"><a href="#"><i class="meta-like meta-like--active icon-heart"></i> 530</a></li>
                  <li class="meta__item meta__item--comments"><a href="#">18</a></li>
                </ul>
              </footer>
            </li>
          </ul>
        </div>
      </aside>
      <!-- Widget: Posts / End -->

      <!-- Widget: Tag Cloud -->
      <aside class="widget widget--side-panel widget-tagcloud">
        <div class="widget__title">
          <h4>Tag Cloud</h4>
        </div>
        <div class="widget__content">
          <div class="tagcloud">
            <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">PLAYOFFS</a>
            <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">ALCHEMISTS</a>
            <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">INJURIES</a>
            <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">TEAM</a>
            <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">INCORPORATIONS</a>
            <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">UNIFORMS</a>
            <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">CHAMPIONS</a>
            <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">PROFESSIONAL</a>
            <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">COACH</a>
            <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">STADIUM</a>
            <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">NEWS</a>
            <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">PLAYERS</a>
            <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">WOMEN DIVISION</a>
            <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">AWARDS</a>
          </div>
        </div>
      </aside>
      <!-- Widget: Tag Cloud / End -->

      <!-- Widget: Banner -->
      <aside class="widget widget--side-panel widget-banner">
        <div class="widget__content">
          <figure class="widget-banner__img">
            <a href="#"><img src="assets/images/samples/banner.jpg" alt="Banner"></a>
          </figure>
        </div>
      </aside>
      <!-- Widget: Banner / End -->

    </div>
    <a href="#" class="pushy-panel__back-btn"></a>
  </div>
</aside>
<!-- Pushy Panel / End -->

<!-- Hero Unit
================================================== -->
<div class="hero-unit">
  <div class="container hero-unit__container">
    <div class="hero-unit__content hero-unit__content--left-center">
      <span class="hero-unit__decor">
        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
      </span>
      <h5 class="hero-unit__subtitle">Elric Bros School</h5>
      <h1 class="hero-unit__title">The <span class="text-primary">Alchemists</span></h1>
      <div class="hero-unit__desc">Lorem ipsum dolor sit amet, consectetur adipisi nel elit, sed do eiusmod tempor incididunt ut labore et dolore .</div>
      <a href="#" class="btn btn-inverse btn-sm btn-outline btn-icon-right btn-condensed hero-unit__btn">Read More <i class="fas fa-plus text-primary"></i></a>
    </div>
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
						<div class="main-news-banner main-news-banner--img-left">
							<figure class="main-news-banner__img">
								<img src="assets/images/samples/main-news-banner__img.png" alt="">
							</figure>
							<div class="main-news-banner__inner">
								<div class="posts posts--simple-list posts--simple-list--xlg">
									<div class="posts__item posts__item--category-1">
										<div class="posts__inner">
											<div class="posts__cat">
												<span class="label posts__cat-label">The Team</span>
											</div>
											<h6 class="posts__title"><a href="#">Take a look at the brand <span class="text-primary">New Uniforms</span> for next season</a></h6>
											<time datetime="2017-08-23" class="posts__date">August 23rd, 2017</time>
											<div class="posts__excerpt">
												Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor.
											</div>
											<div class="posts__more">
												<a href="#" class="btn btn-inverse btn-sm btn-outline btn-icon-right btn-condensed">Read More <i class="fas fa-plus text-primary"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
		
						</div>
						<!-- Main News Banner / End -->
		
		
						
		
						<!-- Lates News -->
						<div class="card card--clean">
							<header class="card__header card__header--has-btn">
								<h4>Latest News</h4>
								<a href="#" class="btn btn-default btn-outline btn-xs card-header__button">See All Posts</a>
							</header>
							<div class="card__content">
								<!-- Posts List -->
								<div class="posts posts--cards posts--cards-thumb-left post-list">
		
									<div class="post-list__item">
										<div class="posts__item posts__item--card posts__item--category-1 card card--block">
											<figure class="posts__thumb">
												<a href="#"><img src="assets/images/samples/post-img9-m.jpg" alt=""></a>
												<a href="#" class="posts__cta"></a>
											</figure>
											<div class="posts__inner">
												<div class="card__content">
													<div class="posts__cat">
														<span class="label posts__cat-label">The Team</span>
													</div>
													<h6 class="posts__title"><a href="#">The team is taking a summer vacation on Woody Valley</a></h6>
													<time datetime="2016-08-17" class="posts__date">August 17th, 2018</time>
													<div class="posts__excerpt">
														Lorem ipsum dolor sit amet, consectetur adipisi nel elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
													</div>
												</div>
												<footer class="posts__footer card__footer">
													<div class="post-author">
														<figure class="post-author__avatar">
															<img src="assets/images/samples/avatar-2.jpg" alt="Post Author Avatar">
														</figure>
														<div class="post-author__info">
															<h4 class="post-author__name">Jessica Hoops</h4>
														</div>
													</div>
													<ul class="post__meta meta">
														<li class="meta__item meta__item--views">2369</li>
														<li class="meta__item meta__item--likes"><a href="#"><i class="meta-like icon-heart"></i> 530</a></li>
														<li class="meta__item meta__item--comments"><a href="#">18</a></li>
													</ul>
												</footer>
											</div>
										</div>
									</div>
									<div class="post-list__item">
										<div class="posts__item posts__item--card posts__item--category-1 card card--block">
											<figure class="posts__thumb">
												<a href="#"><img src="assets/images/samples/post-img10-m.jpg" alt=""></a>
												<a href="#" class="posts__cta"></a>
											</figure>
											<div class="posts__inner">
												<div class="card__content">
													<div class="posts__cat">
														<span class="label posts__cat-label">The Team</span>
													</div>
													<h6 class="posts__title"><a href="#">Jeremy Rittersen was called to be in the National Team</a></h6>
													<time datetime="2016-08-17" class="posts__date">August 12th, 2018</time>
													<div class="posts__excerpt">
														Lorem ipsum dolor sit amet, consectetur adipisi nel elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
													</div>
												</div>
												<footer class="posts__footer card__footer">
													<div class="post-author">
														<figure class="post-author__avatar">
															<img src="assets/images/samples/avatar-1.jpg" alt="Post Author Avatar">
														</figure>
														<div class="post-author__info">
															<h4 class="post-author__name">James Spiegel</h4>
														</div>
													</div>
													<ul class="post__meta meta">
														<li class="meta__item meta__item--views">2369</li>
														<li class="meta__item meta__item--likes"><a href="#"><i class="meta-like icon-heart"></i> 530</a></li>
														<li class="meta__item meta__item--comments"><a href="#">18</a></li>
													</ul>
												</footer>
											</div>
										</div>
									</div>
									<div class="post-list__item">
										<div class="posts__item posts__item--card posts__item--category-1 card card--block">
											<figure class="posts__thumb">
												<a href="#"><img src="assets/images/samples/post-img11-m.jpg" alt=""></a>
												<a href="#" class="posts__cta"></a>
											</figure>
											<div class="posts__inner">
												<div class="card__content">
													<div class="posts__cat">
														<span class="label posts__cat-label">The Team</span>
													</div>
													<h6 class="posts__title"><a href="#">Alchemists New Stadium is gonna be ready in September 2017</a></h6>
													<time datetime="2016-08-17" class="posts__date">July 14th, 2018</time>
													<div class="posts__excerpt">
														Lorem ipsum dolor sit amet, consectetur adipisi nel elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
													</div>
												</div>
												<footer class="posts__footer card__footer">
													<div class="post-author">
														<figure class="post-author__avatar">
															<img src="assets/images/samples/avatar-2.jpg" alt="Post Author Avatar">
														</figure>
														<div class="post-author__info">
															<h4 class="post-author__name">Jessica Hoops</h4>
														</div>
													</div>
													<ul class="post__meta meta">
														<li class="meta__item meta__item--views">2369</li>
														<li class="meta__item meta__item--likes"><a href="#"><i class="meta-like icon-heart"></i> 530</a></li>
														<li class="meta__item meta__item--comments"><a href="#">18</a></li>
													</ul>
												</footer>
											</div>
										</div>
									</div>
									<div class="post-list__item">
										<div class="posts__item posts__item--card posts__item--category-1 card card--block">
											<figure class="posts__thumb">
												<a href="#"><img src="assets/images/samples/post-img14-m.jpg" alt=""></a>
												<a href="#" class="posts__cta"></a>
											</figure>
											<div class="posts__inner">
												<div class="card__content">
													<div class="posts__cat">
														<span class="label posts__cat-label">The Team</span>
													</div>
													<h6 class="posts__title"><a href="#">The Championship Final will be be played in San Francisco</a></h6>
													<time datetime="2016-08-17" class="posts__date">June 2nd, 2018</time>
													<div class="posts__excerpt">
														Lorem ipsum dolor sit amet, consectetur adipisi nel elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
													</div>
												</div>
												<footer class="posts__footer card__footer">
													<div class="post-author">
														<figure class="post-author__avatar">
															<img src="assets/images/samples/avatar-2.jpg" alt="Post Author Avatar">
														</figure>
														<div class="post-author__info">
															<h4 class="post-author__name">Jessica Hoops</h4>
														</div>
													</div>
													<ul class="post__meta meta">
														<li class="meta__item meta__item--views">2369</li>
														<li class="meta__item meta__item--likes"><a href="#"><i class="meta-like icon-heart"></i> 530</a></li>
														<li class="meta__item meta__item--comments"><a href="#">18</a></li>
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
		
						<!-- Widget: Standings -->
						<aside class="widget card widget--sidebar widget-standings">
							<div class="widget__title card__header card__header--has-btn">
								<h4>Playoff Standings</h4>
								<a href="#" class="btn btn-default btn-outline btn-xs card-header__button">See All Stats</a>
							</div>
							<div class="widget__content card__content">
								<div class="table-responsive">
									<table class="table table-hover table-standings">
										<thead>
											<tr>
												<th>Team Positions</th>
												<th>W</th>
												<th>L</th>
												<th>GB</th>
											</tr>
										</thead>
										<tbody>
						
											<tr>
												<td>
													<div class="team-meta">
														<figure class="team-meta__logo">
															<img src="assets/images/samples/logos/pirates_shield.png" alt="L.A Pirates">
														</figure>
														<div class="team-meta__info">
															<h6 class="team-meta__name">L.A Pirates</h6>
															<span class="team-meta__place">Bebop Institute</span>
														</div>
													</div>
												</td>
												<td>45</td>
												<td>5</td>
												<td>0</td>
											</tr>
											<tr>
												<td>
													<div class="team-meta">
														<figure class="team-meta__logo">
															<img src="assets/images/samples/logos/sharks_shield.png" alt="Sharks">
														</figure>
														<div class="team-meta__info">
															<h6 class="team-meta__name">Sharks</h6>
															<span class="team-meta__place">Marine College</span>
														</div>
													</div>
												</td>
												<td>42</td>
												<td>8</td>
												<td>3</td>
											</tr>
											<tr>
												<td>
													<div class="team-meta">
														<figure class="team-meta__logo">
															<img src="assets/images/samples/logos/alchemists_b_shield.png" alt="The Alchemists">
														</figure>
														<div class="team-meta__info">
															<h6 class="team-meta__name">The Alchemists</h6>
															<span class="team-meta__place">Eric Bros School</span>
														</div>
													</div>
												</td>
												<td>40</td>
												<td>10</td>
												<td>5</td>
											</tr>
											<tr>
												<td>
													<div class="team-meta">
														<figure class="team-meta__logo">
															<img src="assets/images/samples/logos/ocean_kings_shield.png" alt="Ocean Kings">
														</figure>
														<div class="team-meta__info">
															<h6 class="team-meta__name">Ocean Kings</h6>
															<span class="team-meta__place">Bay College</span>
														</div>
													</div>
												</td>
												<td>38</td>
												<td>12</td>
												<td>7</td>
											</tr>
											<tr>
												<td>
													<div class="team-meta">
														<figure class="team-meta__logo">
															<img src="assets/images/samples/logos/red_wings_shield.png" alt="Red Wings">
														</figure>
														<div class="team-meta__info">
															<h6 class="team-meta__name">Red Wings</h6>
															<span class="team-meta__place">Icarus College</span>
														</div>
													</div>
												</td>
												<td>37</td>
												<td>13</td>
												<td>8</td>
											</tr>
											<tr>
												<td>
													<div class="team-meta">
														<figure class="team-meta__logo">
															<img src="assets/images/samples/logos/lucky_clovers_shield.png" alt="Lucky Clovers">
														</figure>
														<div class="team-meta__info">
															<h6 class="team-meta__name">Lucky Clovers</h6>
															<span class="team-meta__place">St. Patrick’s Institute</span>
														</div>
													</div>
												</td>
												<td>34</td>
												<td>16</td>
												<td>11</td>
											</tr>
											<tr>
												<td>
													<div class="team-meta">
														<figure class="team-meta__logo">
															<img src="assets/images/samples/logos/draconians_shield.png" alt="Draconians">
														</figure>
														<div class="team-meta__info">
															<h6 class="team-meta__name">Draconians</h6>
															<span class="team-meta__place">High Rock College</span>
														</div>
													</div>
												</td>
												<td>31</td>
												<td>19</td>
												<td>14</td>
											</tr>
											<tr>
												<td>
													<div class="team-meta">
														<figure class="team-meta__logo">
															<img src="assets/images/samples/logos/bloody_wave_shield.png" alt="Bloody Wave">
														</figure>
														<div class="team-meta__info">
															<h6 class="team-meta__name">Bloody Wave</h6>
															<span class="team-meta__place">Atlantic School</span>
														</div>
													</div>
												</td>
												<td>30</td>
												<td>20</td>
												<td>15</td>
											</tr>
						
										</tbody>
									</table>
								</div>
							</div>
						</aside>
						<!-- Widget: Standings / End -->
		
						<!-- Widget: Social Buttons -->
						<aside class="widget widget--sidebar widget-social">
							<a href="#" class="btn-social-counter btn-social-counter--facebook" target="_blank">
								<div class="btn-social-counter__icon">
									<i class="fab fa-facebook"></i>
								</div>
								<h6 class="btn-social-counter__title">Like Our Facebook Page</h6>
								<span class="btn-social-counter__count"><span class="btn-social-counter__count-num"></span> Likes</span>
								<span class="btn-social-counter__add-icon"></span>
							</a>
							<a href="#" class="btn-social-counter btn-social-counter--twitter" target="_blank">
								<div class="btn-social-counter__icon">
									<i class="fab fa-twitter"></i>
								</div>
								<h6 class="btn-social-counter__title">Follow Us on Twitter</h6>
								<span class="btn-social-counter__count"><span class="btn-social-counter__count-num"></span> Followers</span>
								<span class="btn-social-counter__add-icon"></span>
							</a>
							<a href="#" class="btn-social-counter btn-social-counter--rss" target="_blank">
								<div class="btn-social-counter__icon">
									<i class="fas fa-rss"></i>
								</div>
								<h6 class="btn-social-counter__title">Subscribe to Our RSS</h6>
								<span class="btn-social-counter__count"><span class="btn-social-counter__count-num">840</span> Subscribers</span>
								<span class="btn-social-counter__add-icon"></span>
							</a>
						</aside>
						<!-- Widget: Social Buttons / End -->
		
						<!-- Widget: Popular News -->
						<aside class="widget widget--sidebar card widget-popular-posts">
							<div class="widget__title card__header">
								<h4>Popular News</h4>
							</div>
							<div class="widget__content card__content">
								<ul class="posts posts--simple-list">
						
									<li class="posts__item posts__item--category-2">
										<figure class="posts__thumb">
											<a href="#"><img src="assets/images/samples/post-img1-xs.jpg" alt=""></a>
										</figure>
										<div class="posts__inner">
											<div class="posts__cat">
												<span class="label posts__cat-label">Injuries</span>
											</div>
											<h6 class="posts__title"><a href="#">Mark Johnson has a Tibia Fracture and is gonna be out</a></h6>
											<time datetime="2016-08-23" class="posts__date">August 23rd, 2018</time>
										</div>
									</li>
									<li class="posts__item posts__item--category-1">
										<figure class="posts__thumb">
											<a href="#"><img src="assets/images/samples/post-img2-xs.jpg" alt=""></a>
										</figure>
										<div class="posts__inner">
											<div class="posts__cat">
												<span class="label posts__cat-label">The Team</span>
											</div>
											<h6 class="posts__title"><a href="#">Jay Rorks is only 24 points away from breaking the record</a></h6>
											<time datetime="2016-08-23" class="posts__date">August 22nd, 2018</time>
										</div>
									</li>
									<li class="posts__item posts__item--category-1">
										<figure class="posts__thumb">
											<a href="#"><img src="assets/images/samples/post-img3-xs.jpg" alt=""></a>
										</figure>
										<div class="posts__inner">
											<div class="posts__cat">
												<span class="label posts__cat-label">The Team</span>
											</div>
											<h6 class="posts__title"><a href="#">The new eco friendly stadium won a Leafy Award in 2016</a></h6>
											<time datetime="2016-08-23" class="posts__date">June 8th, 2018</time>
										</div>
									</li>
									<li class="posts__item posts__item--category-1">
										<figure class="posts__thumb">
											<a href="#"><img src="assets/images/samples/post-img4-xs.jpg" alt=""></a>
										</figure>
										<div class="posts__inner">
											<div class="posts__cat">
												<span class="label posts__cat-label">The Team</span>
											</div>
											<h6 class="posts__title"><a href="#">The team is starting a new power breakfast regimen</a></h6>
											<time datetime="2016-08-23" class="posts__date">May 12th, 2018</time>
										</div>
									</li>
						
								</ul>
							</div>
						</aside>
						<!-- Widget: Popular News / End -->
		
						<!-- Widget: Featured Player -->
						<aside class="widget card widget--sidebar widget-player">
							<div class="widget__content card__content">
								<div class="widget-player__team-logo">
									<img src="assets/images/logo.png" alt="">
								</div>
								<figure class="widget-player__photo">
									<img src="assets/images/samples/widget-featured-player.png" alt="">
								</figure>
								<header class="widget-player__header clearfix">
									<div class="widget-player__number">38</div>
									<h4 class="widget-player__name">
										<span class="widget-player__first-name">James</span>
										<span class="widget-player__last-name">Girobili</span>
									</h4>
								</header>
								<div class="widget-player__content">
									<div class="widget-player__content-inner">
										<div class="widget-player__stat widget-player__assists">
											<h6 class="widget-player__stat-label">Assists</h6>
											<div class="widget-player__stat-number">16.9</div>
											<div class="widget-player__stat-legend">AVG</div>
										</div>
										<div class="widget-player__stat widget-player__steals">
											<h6 class="widget-player__stat-label">Steals</h6>
											<div class="widget-player__stat-number">7.2</div>
											<div class="widget-player__stat-legend">AVG</div>
										</div>
										<div class="widget-player__stat widget-player__blocks">
											<h6 class="widget-player__stat-label">Blocks</h6>
											<div class="widget-player__stat-number">12.4</div>
											<div class="widget-player__stat-legend">AVG</div>
										</div>
									</div>
								</div>
								<footer class="widget-player__footer">
									<span class="widget-player__footer-txt">
										<i class="fas fa-star"></i> Featured Player
									</span>
								</footer>
							</div>
						</aside>
						<!-- Widget: Featured Player / End -->
		
						
		
						<!-- Widget: Trending News -->
						<aside class="widget widget--sidebar card widget-tabbed">
							<div class="widget__title card__header">
								<h4>Top Trending News</h4>
							</div>
							<div class="widget__content card__content">
								<div class="widget-tabbed__tabs">
									<!-- Widget Tabs -->
									<ul class="nav nav-tabs nav-justified widget-tabbed__nav" role="tablist">
										<li class="nav-item"><a href="#widget-tabbed-newest" class="nav-link active" aria-controls="widget-tabbed-newest" role="tab" data-toggle="tab">Newest</a></li>
										<li class="nav-item"><a href="#widget-tabbed-commented" class="nav-link" aria-controls="widget-tabbed-commented" role="tab" data-toggle="tab">Most Commented</a></li>
										<li class="nav-item"><a href="#widget-tabbed-popular" class="nav-link" aria-controls="widget-tabbed-popular" role="tab" data-toggle="tab">Popular</a></li>
									</ul>
						
									<!-- Widget Tab panes -->
									<div class="tab-content widget-tabbed__tab-content">
										<!-- Newest -->
										<div role="tabpanel" class="tab-pane fade show active" id="widget-tabbed-newest">
											<ul class="posts posts--simple-list">
						
												<li class="posts__item posts__item--category-1">
													<div class="posts__inner">
														<div class="posts__cat">
															<span class="label posts__cat-label">The Team</span>
														</div>
														<h6 class="posts__title"><a href="#">Jake Dribbler Announced that he is retiring next month</a></h6>
														<time datetime="2016-08-23" class="posts__date">August 23rd, 2018</time>
														<div class="posts__excerpt">
															Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
														</div>
													</div>
												</li>
												<li class="posts__item posts__item--category-1">
													<div class="posts__inner">
														<div class="posts__cat">
															<span class="label posts__cat-label">The Team</span>
														</div>
														<h6 class="posts__title"><a href="#">The Alchemists news coach is bringin a new shooting guard</a></h6>
														<time datetime="2016-08-23" class="posts__date">August 23rd, 2018</time>
														<div class="posts__excerpt">
															Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
														</div>
													</div>
												</li>
												<li class="posts__item posts__item--category-1">
													<div class="posts__inner">
														<div class="posts__cat">
															<span class="label posts__cat-label">The Team</span>
														</div>
														<h6 class="posts__title"><a href="#">This Saturday starts the intensive training for the Final</a></h6>
														<time datetime="2016-08-23" class="posts__date">August 23rd, 2018</time>
														<div class="posts__excerpt">
															Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
														</div>
													</div>
												</li>
												<li class="posts__item posts__item--category-3">
													<div class="posts__inner">
														<div class="posts__cat">
															<span class="label posts__cat-label">Playoffs</span>
														</div>
														<h6 class="posts__title"><a href="#">New York Islanders are now flying to California for the big game</a></h6>
														<time datetime="2016-08-23" class="posts__date">August 23rd, 2018</time>
														<div class="posts__excerpt">
															Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
														</div>
													</div>
												</li>
												<li class="posts__item posts__item--category-1">
													<div class="posts__inner">
														<div class="posts__cat">
															<span class="label posts__cat-label">The Team</span>
														</div>
														<h6 class="posts__title"><a href="#">The Female Division is growing strong after their third game</a></h6>
														<time datetime="2016-08-23" class="posts__date">August 23rd, 2018</time>
														<div class="posts__excerpt">
															Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
														</div>
													</div>
												</li>
						
											</ul>
										</div>
										<!-- Commented -->
										<div role="tabpanel" class="tab-pane fade" id="widget-tabbed-commented">
											<ul class="posts posts--simple-list">
						
												<li class="posts__item posts__item--category-3">
													<div class="posts__inner">
														<div class="posts__cat">
															<span class="label posts__cat-label">Playoffs</span>
														</div>
														<h6 class="posts__title"><a href="#">New York Islanders are now flying to California for the big game</a></h6>
														<time datetime="2016-08-23" class="posts__date">August 23rd, 2018</time>
														<div class="posts__excerpt">
															Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
														</div>
													</div>
												</li>
												<li class="posts__item posts__item--category-1">
													<div class="posts__inner">
														<div class="posts__cat">
															<span class="label posts__cat-label">The Team</span>
														</div>
														<h6 class="posts__title"><a href="#">The Female Division is growing strong after their third game</a></h6>
														<time datetime="2016-08-23" class="posts__date">August 23rd, 2018</time>
														<div class="posts__excerpt">
															Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
														</div>
													</div>
												</li>
												<li class="posts__item posts__item--category-1">
													<div class="posts__inner">
														<div class="posts__cat">
															<span class="label posts__cat-label">The Team</span>
														</div>
														<h6 class="posts__title"><a href="#">The Alchemists news coach is bringin a new shooting guard</a></h6>
														<time datetime="2016-08-23" class="posts__date">August 23rd, 2018</time>
														<div class="posts__excerpt">
															Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
														</div>
													</div>
												</li>
												<li class="posts__item posts__item--category-1">
													<div class="posts__inner">
														<div class="posts__cat">
															<span class="label posts__cat-label">The Team</span>
														</div>
														<h6 class="posts__title"><a href="#">This Saturday starts the intensive training for the Final</a></h6>
														<time datetime="2016-08-23" class="posts__date">August 23rd, 2018</time>
														<div class="posts__excerpt">
															Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
														</div>
													</div>
												</li>
												<li class="posts__item posts__item--category-1">
													<div class="posts__inner">
														<div class="posts__cat">
															<span class="label posts__cat-label">The Team</span>
														</div>
														<h6 class="posts__title"><a href="#">Jake Dribbler Announced that he is retiring next month</a></h6>
														<time datetime="2016-08-23" class="posts__date">August 23rd, 2018</time>
														<div class="posts__excerpt">
															Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
														</div>
													</div>
												</li>
												<li class="posts__item posts__item--category-1">
													<div class="posts__inner">
														<div class="posts__cat">
															<span class="label posts__cat-label">The Team</span>
														</div>
														<h6 class="posts__title"><a href="#">Jake Dribbler Announced that he is retiring next month</a></h6>
														<time datetime="2016-08-23" class="posts__date">August 23rd, 2018</time>
														<div class="posts__excerpt">
															Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
														</div>
													</div>
												</li>
						
											</ul>
										</div>
										<!-- Popular -->
										<div role="tabpanel" class="tab-pane fade" id="widget-tabbed-popular">
											<ul class="posts posts--simple-list">
						
												<li class="posts__item posts__item--category-1">
													<div class="posts__inner">
														<div class="posts__cat">
															<span class="label posts__cat-label">The Team</span>
														</div>
														<h6 class="posts__title"><a href="#">The Alchemists news coach is bringin a new shooting guard</a></h6>
														<time datetime="2016-08-23" class="posts__date">August 23rd, 2018</time>
														<div class="posts__excerpt">
															Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
														</div>
													</div>
												</li>
												<li class="posts__item posts__item--category-1">
													<div class="posts__inner">
														<div class="posts__cat">
															<span class="label posts__cat-label">The Team</span>
														</div>
														<h6 class="posts__title"><a href="#">This Saturday starts the intensive training for the Final</a></h6>
														<time datetime="2016-08-23" class="posts__date">August 23rd, 2018</time>
														<div class="posts__excerpt">
															Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
														</div>
													</div>
												</li>
												<li class="posts__item posts__item--category-1">
													<div class="posts__inner">
														<div class="posts__cat">
															<span class="label posts__cat-label">The Team</span>
														</div>
														<h6 class="posts__title"><a href="#">Jake Dribbler Announced that he is retiring next month</a></h6>
														<time datetime="2016-08-23" class="posts__date">August 23rd, 2018</time>
														<div class="posts__excerpt">
															Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
														</div>
													</div>
												</li>
												<li class="posts__item posts__item--category-1">
													<div class="posts__inner">
														<div class="posts__cat">
															<span class="label posts__cat-label">The Team</span>
														</div>
														<h6 class="posts__title"><a href="#">The Female Division is growing strong after their third game</a></h6>
														<time datetime="2016-08-23" class="posts__date">August 23rd, 2018</time>
														<div class="posts__excerpt">
															Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
														</div>
													</div>
												</li>
												<li class="posts__item posts__item--category-3">
													<div class="posts__inner">
														<div class="posts__cat">
															<span class="label posts__cat-label">Playoffs</span>
														</div>
														<h6 class="posts__title"><a href="#">New York Islanders are now flying to California for the big game</a></h6>
														<time datetime="2016-08-23" class="posts__date">August 23rd, 2018</time>
														<div class="posts__excerpt">
															Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
														</div>
													</div>
												</li>
						
											</ul>
										</div>
									</div>
						
								</div>
							</div>
						</aside>
						<!-- Widget: Trending News / End -->
		
						<!-- Widget: Banner -->
						<aside class="widget card widget--sidebar widget-banner">
							<div class="widget__title card__header">
								<h4>Advertisement</h4>
							</div>
							<div class="widget__content card__content">
								<figure class="widget-banner__img">
									<a href="https://themeforest.net/item/the-alchemists-sports-news-html-template/19106722?ref=dan_fisher"><img src="assets/images/samples/banner.jpg" alt="Banner"></a>
								</figure>
							</div>
						</aside>
						<!-- Widget: Banner / End -->
		
						<!-- Widget: Newsletter -->
						<aside class="widget widget--sidebar card widget-newsletter">
							<div class="widget__title card__header">
								<h4>Our Newsletter</h4>
							</div>
							<div class="widget__content card__content">
								<h5 class="widget-newsletter__subtitle">Subscribe Now!</h5>
								<div class="widget-newsletter__desc">
									<p>Receive the latest news from the team: game reminders, new adquisitions and professional match results.</p>
								</div>
								<form action="#" id="newsletter" class="inline-form">
									<div class="input-group">
										<input type="email" class="form-control" placeholder="Your email address...">
										<span class="input-group-append">
											<button class="btn btn-lg btn-default" type="button">Send</button>
										</span>
									</div>
								</form>
							</div>
						</aside>
						<!-- Widget: Newsletter / End -->
		
						<!-- Widget: Match Announcement -->
						<aside class="widget widget--sidebar card widget-preview">
							<div class="widget__title card__header">
								<h4>Top Next Match</h4>
							</div>
							<div class="widget__content card__content">
								<!-- Match Preview -->
								<div class="match-preview">
									<section class="match-preview__countdown countdown">
										<h4 class="countdown__title">Game Countdown</h4>
										<div class="countdown__content">
											<div class="countdown-counter" data-date="June 18, 2022 21:00:00"></div>
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
