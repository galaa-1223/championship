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
          @guest
          <li class="nav-account__item"><a href="#" data-toggle="modal" data-target="#modal-login-register">Нэвтрэх</a></li>
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
        <li class="info-block__item info-block__item--contact-secondary">
          <svg role="img" class="df-icon df-icon--basketball">
            <use xlink:href="{{ asset('assets/images/icons-basket.svg#basketball') }}"/>
          </svg>
          <h6 class="info-block__heading">Холбоо барих</h6>
          <a class="info-block__link" href="mailto:info@alchemists.com">info@alchemists.com</a>
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
            <li class="active"><a href="index.html">Home</a>
              <ul class="main-nav__sub">
                <li class="active"><a href="index.html">Home - version 1</a></li>
                <li class=""><a href="index-2.html">Home - version 2</a></li>
                <li class=""><a href="index-3.html">Home - version 3</a></li>
              </ul>
            </li>
            <li class=""><a href="#">The Team</a>
              <ul class="main-nav__sub">
                <li><a href="team-overview.html">Team</a>
                  <ul class="main-nav__sub-2">
                    <li><a href="team-overview.html">Overview</a></li>
                    <li><a href="team-roster-2.html">Roster</a>
                      <ul class="main-nav__sub-2">
                        <li><a href="team-roster-1.html">Roster - 1</a></li>
                        <li><a href="team-roster-2.html">Roster - 2</a></li>
                        <li><a href="team-roster-3.html">Roster - 3</a></li>
                      </ul>
                    </li>
                    <li><a href="team-standings.html">Standings</a></li>
                    <li><a href="team-last-results.html">Latest Results</a></li>
                    <li><a href="team-schedule.html">Schedule</a></li>
                    <li><a href="team-gallery.html">Gallery</a>
                      <ul class="main-nav__sub-3">
                        <li><a href="team-gallery-album.html">Single Album</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href="player-overview.html">Player</a>
                  <ul class="main-nav__sub-2">
                    <li><a href="player-overview.html">Overview</a></li>
                    <li><a href="player-stats.html">Full Statistics</a></li>
                    <li><a href="player-bio.html">Biography</a></li>
                    <li><a href="player-news.html">Related News</a></li>
                    <li><a href="player-gallery.html">Gallery</a></li>
                  </ul>
                </li>
                <li><a href="staff-single.html">Staff Member</a></li>
                <li><a href="event-overview.html">Event</a>
                  <ul class="main-nav__sub-2">
                    <li class=""><a href="event-overview.html">Overview</a></li>
                    <li class=""><a href="event-box-score.html">Box Score</a></li>
                    <li class=""><a href="event-play-by-play.html">Play-by-Play</a></li>
                    <li class=""><a href="event-team-stats.html">Team Stats</a></li>
                    <li class=""><a href="event-news-recap.html">News Recap</a></li>
                    <li class=""><a href="event-videos.html">Videos</a></li>
                  </ul>
                </li>
                <li><a href="event-tournament.html">Tournament</a></li>
              </ul>
            </li>

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
							<a href="#" class="pushy-panel__toggle">
								<span class="pushy-panel__line"></span>
							</a>
							<!-- Pushy Panel Toggle / Eng -->
						</nav>
						<!-- Main Navigation / End -->
					</div>
				</div>
			</div>
			<!-- Header Primary / End -->
		
		</header>
		<!-- Header / End -->