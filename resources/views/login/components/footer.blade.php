<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.umd.min.js"
></script>
<script src="{{asset('js/login.js')}}"></script>

<script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js'></script> 
<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js'></script>
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