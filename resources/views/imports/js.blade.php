  <script src="{{ asset('js/jquery-3.2.1.slim.min.js') }}"></script> <!-- https://jquery.com/ -->
  <script>
      /* DOM is ready
      ------------------------------------------------*/
      $(function() {

          if (renderPage) {
              $('body').addClass('loaded');
          }

          $('.tm-current-year').text(new Date().getFullYear()); // Update year in copyright
      });
  </script>
