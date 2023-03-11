@extends('layouts.default.master')

@section('title', 'Хянах самбар')

@section('css')
@endsection

@section('style')
<link rel="stylesheet" href="{{ asset('assets/vendor/jsvectormap/dist/css/jsvectormap.min.css') }}">
@endsection

@section('breadcrumb-title')
<h3>Хянах самбар</h3>
@endsection

@section('breadcrumb-items')
@endsection

@section('content')

<div class="content container-fluid">
      <!-- Page Header -->
      <div class="page-header">
        <div class="row align-items-center">
          <div class="col">
            <h1 class="page-header-title">Хянах самбар</h1>
          </div>
          <!-- End Col -->

        </div>
        <!-- End Row -->
      </div>
      <!-- End Page Header -->

      <!-- Stats -->
      <div class="row">
        <!-- Connections -->
        <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-3">
          @if(!is_null($event))
          <div class="col mb-3 mb-lg-5">
            <!-- Card -->
            <div class="card h-100">
              <!-- Header -->
              <div class="card-header">
                <h4 class="card-header-title">Дараагийн жижүүр <span class="badge bg-soft-info text-info">{{ $event->start }}</span> @if($event->start > date("Y-m-d"))<span class="badge bg-soft-warning text-warning">Жижүүр хийсэн @endif</span></h4>
              </div>
              <!-- End Header -->

              <!-- Body -->
              <div class="card-body text-center">
                <!-- Avatar -->
                <div class="avatar avatar-xl avatar-circle avatar-centered mb-3">
                  <img class="avatar-img" src="{{ is_null($event->user->image) ? asset('assets/img/160x160/img1.jpg') : asset('uploads/profile/'.$event->user->image) }}" alt="{{ Str::substr($event->user->lastname, 0, 1) }}. {{ $event->user->firstname }}">
                  <span class="avatar-status avatar-sm-status avatar-status-success"></span>
                </div>
                <!-- End Avatar -->

                <h3 class="mb-1">
                  <a class="text-dark" href="#">{{ Str::substr($event->user->lastname, 0, 1) }}. {{ $event->user->firstname }}</a>
                </h3>

                <div class="mb-3">
                  <i class="bi-building me-1"></i>
                  <span>{{ $event->user->occupation->name }}</span>
                </div>

                <!-- Badges -->
                <ul class="list-inline mb-0">
                  <li class="list-inline-item"><a class="badge bg-soft-secondary text-secondary p-2" href="#">{{ $event->user->phone }}</a></li>
                </ul>
                <!-- End Badges -->
              </div>
              <!-- End Body -->
            </div>
            <!-- End Card -->
          </div>
          <!-- End Col -->
          @endif
          <div class="col-sm-6 mb-3 mb-sm-0">
            <!-- Card -->
            <div class="card h-100">
              <!-- Header -->
              <div class="card-header">
                <h4 class="card-header-title">Дараагийн жижүүрүүд</h4>
              </div>
              <!-- End Header -->

              <!-- Body -->
              <div class="card-body">
                <ul class="list-unstyled list-py-3 mb-0">

                  @if($events)
                  @foreach($events as $event)
                  <!-- Item -->
                  <li>
                    <div class="d-flex align-items-center">
                      <a class="d-flex align-items-center me-2" href="#">
                        <div class="flex-shrink-0">
                          <div class="avatar avatar-sm avatar-soft-primary avatar-circle">
                            <span class="avatar-initials">{{ Str::substr($event->user->firstname, 0, 1) }}</span>
                          </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <h5 class="text-hover-primary mb-0">{{ Str::substr($event->user->lastname, 0, 1) }}. {{ $event->user->firstname }}</h5>
                          <span class="fs-6 text-body">{{  Str::limit($event->user->occupation->name, 40) }}</span>
                        </div>
                      </a>
                      <div class="ms-auto">
                        <span class="badge bg-soft-info text-info">{{ $event->start }} / гараг</span>
                      </div>
                    </div>
                  </li>
                  <!-- End Item -->
                  @endforeach
                  @endif
                  
                </ul>
              </div>
              <!-- End Body -->

              <!-- Footer -->
              <a class="card-footer text-center" href="user-profile-connections.html">
                Дэлгэрэнгүй <i class="bi-chevron-right"></i>
              </a>
              <!-- End Footer -->
            </div>
            <!-- End Card -->
          </div>

          <div class="col-lg-4 mb-3 mb-lg-5">
            <!-- Card -->
            <div class="card h-100">
              <!-- Header -->
              <div class="card-header card-header-content-between">
                <h4 class="card-header-title">Өмнөх жижүүрийн үнэлгээ</h4>
  
                <!-- Dropdown -->
                <div class="dropdown">
                  <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm rounded-circle" id="reportsOverviewDropdown1" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi-three-dots-vertical"></i>
                  </button>
  
                  <div class="dropdown-menu dropdown-menu-end mt-1" aria-labelledby="reportsOverviewDropdown1">
    
  
                    <a class="dropdown-item" href="#">
                      <i class="bi-share-fill dropdown-item-icon"></i> Дэлгэрэнгүй
                    </a>
                  </div>
                </div>
                <!-- End Dropdown -->
              </div>
              <!-- End Header -->
  
              <!-- Body -->
              <div class="card-body text-center">
                <!-- Badge -->
                <div class="h3">
                  <span class="badge bg-soft-info text-info rounded-pill">
                    <i class="bi-check-circle-fill me-1"></i> <?=$me["message"]?>
                  </span>
                </div>
                <!-- End Badge -->
  
                <!-- Chart Half -->
                <div class="chartjs-doughnut-custom" style="height: 12rem;">
                  <canvas id="doughnutHalfChart" class="js-chartjs-doughnut-half" data-hs-chartjs-options='{
                          "type": "doughnut",
                          "data": {
                            "labels": ["Current status", "Goal"],
                            "datasets": [{
                              "data": [64, 35],
                              "backgroundColor": ["#377dff", "rgba(55,125,255,.35)"],
                              "borderWidth": 4,
                              "borderColor": "#fff",
                              "hoverBorderColor": "#ffffff"
                            }]
                          }
                        }'></canvas>
  
                  <div class="chartjs-doughnut-custom-stat">
                    <small class="text-cap">Үнэлгээ</small>
                    <span class="h1"><?=$me["percent"]?></span>
                  </div>
                </div>
                <!-- End Chart Half -->
  
                <hr>
  
                <div class="row col-divider">
                  <div class="col text-end">
                    <span class="d-block h4 mb-0"><?=$me["total"]?></span>
                    <span class="d-block">Оноо</span>
                  </div>
  
                  <div class="col text-start">
                    <span class="d-block h4 text-success mb-0">
                      <i class="bi-graph-up"></i> <?=$me["percent"]?>%
                    </span>
                    <span class="d-block">Хувь</span>
                  </div>
                </div>
                <!-- End Row -->
              </div>
              <!-- End Body -->
            </div>
            <!-- End Card -->
          </div>
        </div>
        <!-- End Connections -->
      </div>
      <!-- End Stats -->

    </div>

@endsection

@section('modal')
<!-- Modal -->
<div class="modal fade" id="duremModal" tabindex="-1" role="dialog" aria-labelledby="duremModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="duremModalTitle">{{ settings("durem_garchig") }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        {!! settings("durem") !!}
      </div>
    </div>
  </div>
</div>
@endsection

@section('script')
<script src="{{ asset('assets/js/hs.theme-appearance-charts.js') }} "></script>
<script>
  (function() {

    var myModal = new bootstrap.Modal(document.getElementById('duremModal'), {
      keyboard: false
    })

    window.onload = function () {

      myModal.show()

      // INITIALIZATION OF NAVBAR VERTICAL ASIDE
      // =======================================================
      new HSSideNav('.js-navbar-vertical-aside').init()


      // INITIALIZATION OF FORM SEARCH
      // =======================================================
      new HSFormSearch('.js-form-search')


      // INITIALIZATION OF INPUT MASK
      // =======================================================
      HSCore.components.HSMask.init('.js-input-mask')

      // INITIALIZATION OF FILE ATTACHMENT
      // =======================================================
      new HSFileAttach('.js-file-attach')

      // INITIALIZATION OF STICKY BLOCKS
      // =======================================================
      new HSStickyBlock('.js-sticky-block', {
        targetSelector: document.getElementById('header').classList.contains('navbar-fixed') ? '#header' : null
      })


      // SCROLLSPY
      // =======================================================
      new bootstrap.ScrollSpy(document.body, {
        target: '#navbarSettings',
        offset: 100
      })

      new HSScrollspy('#navbarVerticalNavMenu', {
        breakpoint: 'lg',
        scrollOffset: -20
      })

      // INITIALIZATION OF CHARTJS
      // =======================================================
      HSCore.components.HSChartJS.init(document.querySelector('.js-chartjs-doughnut-half'), {
        options: {
          plugins: {
            tooltip: {
              postfix: "%"
            }
          },
          cutout: '85%',
          rotation: '270',
          circumference: '180'
        }
      });
    }
  })()
</script>
@endsection
