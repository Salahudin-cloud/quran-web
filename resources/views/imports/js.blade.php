  <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script> <!-- https://jquery.com/ -->
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script>
      const year = new Date;
      document.getElementById('tm-current-year').innerHTML = year.getFullYear();
  </script>
