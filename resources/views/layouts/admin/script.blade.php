<!-- JS Global Compulsory  -->
<script src="{{asset('assets/vendor/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('assets/vendor/jquery-migrate/dist/jquery-migrate.min.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>

<!-- JS Implementing Plugins -->
<script src="{{asset('assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside.min.js')}}"></script>
<script src="{{asset('assets/vendor/hs-form-search/dist/hs-form-search.min.js')}}"></script>
<script src="{{asset('assets/vendor/hs-file-attach/dist/hs-file-attach.min.js')}}"></script>
<script src="{{asset('assets/vendor/hs-sticky-block/dist/hs-sticky-block.min.js')}}"></script>
<script src="{{asset('assets/vendor/hs-scrollspy/dist/hs-scrollspy.min.js')}}"></script>
<script src="{{asset('assets/vendor/imask/dist/imask.min.js')}}"></script>

<!-- JS Front -->
<script src="{{asset('assets/js/theme.min.js')}}"></script>
<script src="{{asset('assets/js/hs.theme-appearance-charts.js')}}"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="//code.jquery.com/jquery.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/lodash.js/2.4.1/lodash.min.js"></script>
<script src="//cdn.rawgit.com/hilios/jQuery.countdown/2.2.0/dist/jquery.countdown.min.js"></script>
<script type="text/javascript">
  $('[data-countdown]').each(function() {
    var $this = $(this), finalDate = $(this).data('countdown');
    $this.countdown(finalDate, function(event) {
      $this.html(event.strftime('%D өдөр %H:%M:%S'));
    });
  });
</script>