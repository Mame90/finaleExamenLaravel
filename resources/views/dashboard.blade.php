<x-app-layout>


<!-- ======= Header ======= -->

   <!-- ======= Pricing Section ======= -->

   <!-- End Pricing Section -->

    <!-- ======= Pricing Section ======= -->
 <!-- resources/views/index.blade.php -->

 <section class="listproduit">
 <div style="text-align: center;">
    <button style="background-color: blue; border-radius: 20px; color: white; padding: 10px 20px; font-size: 16px;">Passer une commande</button>
</div>
<br>
    <div class="container">
        

        <div class="row row-cols-1 row-cols-md-4 g-4">
        
        </div>
    </div>
</section>

<!-- Assure-toi d'inclure jQuery et Bootstrap JS dans ta page -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>

<script>
    // Script pour afficher/masquer les détails du produit dans le modal
    $(document).ready(function () {
        $('.details-btn').click(function () {
            // Trouve le modal associé au bouton cliqué
            var modalId = $(this).data('target');
            var modal = $(modalId);

            // Affiche le modal
            modal.modal('show');
        });
    });
</script>


   <!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
   
      </div>
    </section><!-- End Frequently Asked Questions Section -->
<!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <a href="index.html" class="logo me-auto"><img src="assets/img/bakeli.png" alt="" width="24%" class="img-fluid" style="border-top-left-radius: 30%;border-bottom-right-radius: 10%;"></a>
              <p>
                Examen-SI<br>
                <br><br>
                <strong>Téléphone:</strong> +221 642-43-32<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Liens utils</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Accueil</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">A propos de nous</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Cout</a></li>
              <!-- <li><i class="bx bx-chevron-right"></i> <a href="#"></a></li> -->
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Nos Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Integrations</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services louables</a></li>
             
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Notre newsletter</h4>
            <p>S'abonner ici en entrant votre adresse email pour ne rater aucun de nos offres et publicités!</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="S'inscrire">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Mbaye Diop</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/sailor-free-bootstrap-theme/ -->
        Designed by <a href="#">Mbaye Diop</a>
      </div>
    </div>
  </footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>


</x-app-layout>
