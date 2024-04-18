<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/scripts.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/chart-area-demo.js')}}"></script>
        <script src="{{ asset('js/chart-bar-demo.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/datatables-simple-demo.js')}}"></script>
        <script src="https://cdn.lordicon.com/lordicon.js"></script>

         {{-- sweetalert --}}
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 <!-- Include SweetAlert Script -->
 <script>
  document.addEventListener("DOMContentLoaded", function () {
      const alert = {!! json_encode(session('alert')) !!};

      if (alert) {
          const { type, message } = alert;
          Swal.fire({
              icon: type,
              title: message,
              showConfirmButton: false,
              timer: 1500
          });
      }
  });
  </script>
    </body>
</html>
