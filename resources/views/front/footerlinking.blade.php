  <script src="{{url('front/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{url('front/vendor/jquery/jquery-migrate.min.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="{{url('front/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{url('front/vendor/easing/easing.min.js')}}"></script>
  <script src="{{url('front/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{url('front/vendor/sticky/sticky.js')}}"></script>
  <script src="{{url('front/vendor/aos/aos.js')}}"></script>
  <script src="{{url('front/vendor/owlcarousel/owl.carousel.min.js')}}"></script>


  <!-- Template Main JS File -->
  <script src="{{url('front/js/main.js')}}"></script>

  <script>
     $('.numbersOnly').keyup(function (e) { 
        code = e.keyCode || e.which;
        if(code == 8 || code == 46 || code == 37 || code == 39 || code == 36 || code == 35) { //Enter keycode
          return false;
        }
        this.value = this.value.replace(/[^0-9\.]/g,'');
    });


    $(".decimal_only").on("keypress keyup blur",function (event)
       {
         $(this).val($(this).val().replace(/[^0-9\.]/g,''));
            if((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
                event.preventDefault();
            }
      });


     $('.nospace').keydown(function(e) {
	    if (e.keyCode == 32) {
	        return false;
	    }
	  });

    $(document).ready(function() {
            setTimeout(function() {
              $('.sticky-wrapper').each(function() {
                  var stickyWrapper = $(this);
                  var stickyHeight = stickyWrapper.outerHeight();
                  var stickyOffset = stickyWrapper.offset().top;
                  stickyWrapper.addClass('is-sticky');
                
              });
            }, 30);
     });

    $(window).on('scroll', function() {
      var scrollTop = $(window).scrollTop();
      $('.sticky-wrapper').each(function() {
          var stickyWrapper = $(this);
          var stickyHeight = stickyWrapper.outerHeight();
          var stickyOffset = stickyWrapper.offset().top;
          stickyWrapper.addClass('is-sticky');
        
      });
  });

  </script>


