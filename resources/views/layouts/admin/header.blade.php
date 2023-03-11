<header id="header" class="navbar navbar-expand-lg navbar-fixed navbar-height navbar-container navbar-bordered bg-white">
  <div class="navbar-nav-wrap">
    <!-- Logo -->
    <a class="navbar-brand" href="{{ route('home.index') }}" aria-label="Front">
      <img class="navbar-brand-logo" src="{{ asset('assets/logos/logo.png')}}" alt="Logo" data-hs-theme-appearance="default">
    </a>
    <!-- End Logo -->

    <div class="navbar-nav-wrap-content-start">
      <!-- Navbar Vertical Toggle -->
      <button type="button" class="js-navbar-vertical-aside-toggle-invoker navbar-aside-toggler">
        <i class="bi-arrow-bar-left navbar-toggler-short-align" data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' data-bs-toggle="tooltip" data-bs-placement="right" title="Collapse"></i>
        <i class="bi-arrow-bar-right navbar-toggler-full-align" data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' data-bs-toggle="tooltip" data-bs-placement="right" title="Expand"></i>
      </button>

      <!-- End Navbar Vertical Toggle -->
    </div>

    <div class="navbar-nav-wrap-content-end">
      <!-- Navbar -->
      <ul class="navbar-nav">
        <li class="nav-item d-none d-sm-inline-block">
          <!-- Notification -->
          <div class="dropdown">
            <button type="button" class="btn btn-ghost-secondary btn-icon rounded-circle" id="navbarNotificationsDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside" data-bs-dropdown-animation>
              <i class="bi-bell"></i>
              <span class="btn-status btn-sm-status btn-status-danger"></span>
            </button>

            <div class="dropdown-menu dropdown-menu-end dropdown-card navbar-dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="navbarNotificationsDropdown" style="width: 25rem;">
              <div class="card">
                <!-- Header -->
                <div class="card-header card-header-content-between">
                  <h4 class="card-title mb-0">Notifications</h4>
                </div>
                <!-- End Header -->

                <!-- Body -->
                <div class="card-body-height">
                  <!-- Tab Content -->
                  <div class="tab-content" id="notificationTabContent">
                    <div class="tab-pane fade show active" id="notificationNavOne" role="tabpanel" aria-labelledby="notificationNavOne-tab">
                      <!-- List Group -->
                      <ul class="list-group list-group-flush navbar-card-list-group">
                        <!-- Item -->
                        <li class="list-group-item form-check-select">
                          <div class="row">
                            <div class="col-auto">
                              <div class="d-flex align-items-center">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="notificationCheck1" checked>
                                  <label class="form-check-label" for="notificationCheck1"></label>
                                  <span class="form-check-stretched-bg"></span>
                                </div>
                                <img class="avatar avatar-sm avatar-circle" src="{{ asset('assets/img/160x160/img3.jpg')}}" alt="Image Description">
                              </div>
                            </div>
                            <!-- End Col -->

                            <div class="col ms-n2">
                              <h5 class="mb-1">Brian Warner</h5>
                              <p class="text-body fs-5">changed an issue from "In Progress" to <span class="badge bg-success">Review</span></p>
                            </div>
                            <!-- End Col -->

                            <small class="col-auto text-muted text-cap">2hr</small>
                            <!-- End Col -->
                          </div>
                          <!-- End Row -->

                          <a class="stretched-link" href="#"></a>
                        </li>
                        <!-- End Item -->
                      </ul>
                      <!-- End List Group -->
                    </div>

                    
                  </div>
                  <!-- End Tab Content -->
                </div>
                <!-- End Body -->

                <!-- Card Footer -->
                <a class="card-footer text-center" href="#">
                  View all notifications <i class="bi-chevron-right"></i>
                </a>
                <!-- End Card Footer -->
              </div>
            </div>
          </div>
          <!-- End Notification -->
        </li>

        <li class="nav-item">
          <!-- Account -->
          <div class="dropdown">
            <a class="navbar-dropdown-account-wrapper" href="javascript:;" id="accountNavbarDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside" data-bs-dropdown-animation>
              <div class="avatar avatar-sm avatar-circle">
                <img class="avatar-img" src="{{ is_null(auth()->user()->image) ? asset('assets/img/160x160/img1.jpg') : asset('uploads/profile/'.auth()->user()->image) }}" alt="{{ Str::substr(auth()->user()->lastname, 0, 1) }}. {{ auth()->user()->firstname }}">
                <span class="avatar-status avatar-sm-status avatar-status-success"></span>
              </div>
            </a>

            <div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless navbar-dropdown-account" aria-labelledby="accountNavbarDropdown" style="width: 16rem;">
              <div class="dropdown-item-text">
                <div class="d-flex align-items-center">
                  <div class="avatar avatar-sm avatar-circle">
                    <img class="avatar-img" src="{{ is_null(auth()->user()->image) ? asset('assets/img/160x160/img1.jpg') : asset('uploads/profile/'.auth()->user()->image) }}" alt="{{ Str::substr(auth()->user()->lastname, 0, 1) }}. {{ auth()->user()->firstname }}">
                  </div>
                  <div class="flex-grow-1 ms-3">
                    <h5 class="mb-0">{{ Str::substr(auth()->user()->lastname, 0, 1) }}. {{ auth()->user()->firstname }}</h5>
                    <p class="card-text text-body">{{ auth()->user()->phone }}</p>
                  </div>
                </div>
              </div>

              <div class="dropdown-divider"></div>

              <a class="dropdown-item" href="{{ route('profile.index') }}">Миний мэдээлэл</a>

              <div class="dropdown-divider"></div>

              <a class="dropdown-item" href="{{ route('logout') }}">Системээс гарах</a>
            </div>
          </div>
          <!-- End Account -->
        </li>
      </ul>
      <!-- End Navbar -->
    </div>
  </div>
</header>