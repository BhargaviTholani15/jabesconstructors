 <!-- Back to Top -->
 <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
 </div>
 <script>
     $("document").ready(function() {
         setTimeout(function() {
             $("#message1").remove();
         }, 3000);
     })
 </script>
 <!-- JavaScript Libraries -->
 <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
 <script src="{{asset('assetsAdmin/lib/chart/chart.min.js') }}"></script>
 <script src="{{asset('assetsAdmin/lib/easing/easing.min.js') }}"></script>
 <script src="{{asset('assetsAdmin/lib/waypoints/waypoints.min.js') }}"></script>
 <script src="{{asset('assetsAdmin/lib/owlcarousel/owl.carousel.min.js') }}"></script>
 <script src="{{asset('assetsAdmin/lib/tempusdominus/js/moment.min.js') }}"></script>
 <script src="{{asset('assetsAdmin/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
 <script src="{{asset('assetsAdmin/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

 <!-- Template Javascript -->
 <script src="{{asset('assetsAdmin/js/main.js') }}"></script>
 <script>
     document.addEventListener('DOMContentLoaded', function() {
         const navLinks = document.querySelectorAll('.nav-item.nav-link');

         function removeActiveClasses() {
             navLinks.forEach(link => link.classList.remove('active'));
         }

         navLinks.forEach(link => {
             link.addEventListener('click', function() {
                 removeActiveClasses();
                 this.classList.add('active');
             });
         });

         const currentPath = window.location.pathname;
         navLinks.forEach(link => {
             if (link.href.includes(currentPath)) {
                 link.classList.add('active');
             }
         });
     });
 </script>
 </body>

 </html>