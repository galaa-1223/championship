<aside class="js-navbar-vertical-aside navbar navbar-vertical-aside navbar-vertical navbar-vertical-fixed navbar-expand-xl navbar-bordered bg-white  ">
  <div class="navbar-vertical-container">
    <div class="navbar-vertical-footer-offset">
      <!-- Logo -->
      <a class="navbar-brand" href="{{ route('home.index') }}" aria-label="Front">
        <img class="navbar-brand-logo" src="{{ asset('assets/logos/logo.png')}}" alt="Logo" data-hs-theme-appearance="default">
      </a>
      <!-- End Logo -->
      <!-- Navbar Vertical Toggle -->
      <button type="button" class="js-navbar-vertical-aside-toggle-invoker navbar-aside-toggler">
        <i class="bi-arrow-bar-left navbar-toggler-short-align" data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' data-bs-toggle="tooltip" data-bs-placement="right" title="Хураах"></i>
        <i class="bi-arrow-bar-right navbar-toggler-full-align" data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' data-bs-toggle="tooltip" data-bs-placement="right" title="Дэлгэх"></i>
      </button>
      <!-- End Navbar Vertical Toggle -->
      <!-- Content -->
      <div class="navbar-vertical-content">
        <div id="navbarVerticalMenu" class="nav nav-pills nav-vertical card-navbar-nav">
          @if(Auth::user()->can('home.index'))
          <!-- Collapse -->
          <div class="nav-item">
            <a class="nav-link{{ Route::currentRouteName() == 'home.index' ? ' active ' : '' }}" href="{{ route('home.index') }}">
              <i class="bi-house-door nav-icon"></i>
              <span class="nav-link-title">Хянах самбар</span>
            </a>
          </div>
          <!-- End Collapse -->
          @endif
          <span class="dropdown-header mt-4">Жижүүр</span>
          <small class="bi-three-dots nav-subtitle-replacer"></small>

          @if(Auth::user()->can('calendar.index'))
          <div class="nav-item">
            <a class="nav-link{{ Route::currentRouteName() == 'calendar.index' ? ' active' : '' }}" href="{{ route('calendar.index') }}" data-placement="left">
              <i class="bi-kanban nav-icon"></i>
              <span class="nav-link-title">Хуваарь</span>
            </a>
          </div>
          @endif

          @if(Auth::user()->can('report.index'))
          <div class="nav-item">
            <a class="nav-link{{ Route::currentRouteName() == 'report.index' ? ' active' : '' }}" href="{{ route('report.index') }}" data-placement="left">
              <i class="bi-kanban nav-icon"></i>
              <span class="nav-link-title">Рапорт</span>
            </a>
          </div>
          @endif

          @if(Auth::user()->can('report.me'))
          <div class="nav-item">
            <a class="nav-link{{ Route::currentRouteName() == 'report.me' ? ' active' : '' }}" href="{{ route('report.me') }}" data-placement="left">
              <i class="bi-kanban nav-icon"></i>
              <span class="nav-link-title">Миний Рапорт</span>
            </a>
          </div>
          @endif

          <span class="dropdown-header mt-4">Тохиргоо</span>
          <small class="bi-three-dots nav-subtitle-replacer"></small>

          @if(Auth::user()->can('users.index'))
          <div class="nav-item">
            <a class="nav-link{{ Route::currentRouteName() == 'users.index' ? ' active' : '' }}" href="{{ route('users.index') }}" data-placement="left">
              <i class="bi-kanban nav-icon"></i>
              <span class="nav-link-title">Хэрэглэгч</span>
            </a>
          </div>
          @endif

          @if(Auth::user()->can('settings.index'))
          <div class="nav-item">
            <a class="nav-link{{ Route::currentRouteName() == 'settings.index' ? ' active' : '' }}" href="{{ route('settings.index') }}" data-placement="left">
              <i class="bi-kanban nav-icon"></i>
              <span class="nav-link-title">Тохиргоо</span>
            </a>
          </div>
          @endif

          @if(Auth::user()->can('permissions.index'))
          <div class="nav-item">
            <a class="nav-link{{ Route::currentRouteName() == 'permissions.index' ? ' active' : '' }}" href="{{ route('permissions.index') }}" data-placement="left">
              <i class="bi-kanban nav-icon"></i>
              <span class="nav-link-title">Зөвшөөрөл</span>
            </a>
          </div>
          @endif

          @if(Auth::user()->can('roles.index'))
          <div class="nav-item">
            <a class="nav-link{{ Route::currentRouteName() == 'roles.index' ? ' active' : '' }}" href="{{ route('roles.index') }}" data-placement="left">
              <i class="bi-kanban nav-icon"></i>
              <span class="nav-link-title">Хандах эрх</span>
            </a>
          </div>
          @endif

        </div>

      </div>
      <!-- End Content -->
      <!-- Footer -->
      <div class="navbar-vertical-footer">
        <ul class="navbar-vertical-footer-list">
          <li class="navbar-vertical-footer-list-item">
            <!-- Style Switcher -->
            <div class="dropdown dropup">
              <button type="button" class="btn btn-ghost-secondary btn-icon rounded-circle" id="selectThemeDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-dropdown-animation></button>
              <div class="dropdown-menu navbar-dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="selectThemeDropdown">
                <a class="dropdown-item" href="#" data-icon="bi-brightness-high" data-value="default">
                  <i class="bi-brightness-high me-2"></i>
                  <span class="text-truncate" title="Default (light mode)">Гэгээтэй горим</span>
                </a>
                <a class="dropdown-item active" href="#" data-icon="bi-moon" data-value="dark">
                  <i class="bi-moon me-2"></i>
                  <span class="text-truncate" title="Dark">Харанхуй горим</span>
                </a>
              </div>
            </div>
            <!-- End Style Switcher -->
          </li>
        </ul>
      </div>
      <!-- End Footer -->
    </div>
  </div>
</aside>