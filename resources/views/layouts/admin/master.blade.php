<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title><?=config('app.name')?> - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="{{asset('favicon.ico')}}" />
    <meta name="description" content="Gandhi 1.0">
    <meta name="keywords" content="Gandhi 1.0">
    <meta name="author" content="Galaa.TS">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    @include('layouts.default.css')
    @yield('style')
  </head>
  <body class="has-navbar-vertical-aside navbar-vertical-aside-show-xl footer-offset">
    <script src="{{asset('assets/js/hs.theme-appearance.js')}}"></script>
    <script src="{{asset('assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside-mini-cache.js')}}"></script>
    <!-- ========== HEADER ========== -->
    @include('layouts.default.header')
    <!-- ========== END HEADER ========== -->
    <!-- ========== MAIN CONTENT ========== -->
    <!-- Navbar Vertical -->
    @include('layouts.default.sidebar')
    <!-- End Navbar Vertical -->
    <main id="content" role="main" class="main">
      <!-- Content -->
      @yield('content')
      <!-- End Content -->
      <!-- Footer -->
      @include('layouts.default.footer') 
      <!-- End Footer -->
    </main>
    <!-- ========== END MAIN CONTENT ========== -->
    <!-- ========== MODALS ========== -->
    @yield('modal')
    <!-- ========== END MODALS ========== -->
    <script>
      const baseUrl = "{{ config('app.url') }}";
    </script>
    @include('layouts.default.script') 
    @yield('script') 
  </body>
</html>