  <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script> <!-- https://jquery.com/ -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
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
