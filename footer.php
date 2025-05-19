<footer id="footer" class="footer dark-background">
  <div class="container">
    <div class="row">
      <!-- Left Column -->
      <div class="col-lg-4 col-md-6 center">
        <img src="assets/img/lab/logo_v3_chiaro.png" style="height: 55px; width: 250px;" alt="Site Logo" class="img-fluid mb-3">
        <p>CFP San Girolamo Emiliani - Somaschi</p>
      </div>
      <!-- Center Column -->
      <div class="col-lg-4 col-md-6 center">
        <div class="social-links d-flex mb-3">
          <a href="https://www.instagram.com/techlab_somaschi/" class="mx-2" target="_blank"><i class="bi bi-instagram"></i></a>
          <a href="https://www.facebook.com/people/Techlab-Somaschi/61561224427492/?rdid=JiDqtvRdDvmYeHeN&share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2F19SgjktEqX%2F" class="mx-2" target="_blank"><i class="bi bi-facebook"></i></a>
          <a href="tel:069304126" class="mx-2"><i class="bi bi-telephone"></i></a>
          <a href="mailto:techlabsomaschi@gmail.com" class="mx-2"><i class="bi bi-envelope"></i></a>
        </div>
        <a href="assets/doc/informativa_pr.pdf" class="text-link" target="_blank">Privacy Policy</a>
      </div>
      <!-- Right Column -->
      <div class="col-lg-4 col-md-12 center">
        <h3>Dove siamo</h3>
        <p><a href="https://maps.app.goo.gl/x88qANkjYf3Qyovy5" target="_blank" class="text-link">Via Rufelli, 14, 00040 Ariccia RM</a></p>
      </div>
    </div>
    <div class="copyright mt-4">
      <span>Copyright</span> <strong class="px-1 sitename">TechlabSomaschi</strong> <span>All Rights Reserved</span>
    </div>
  </div>
</footer>

<!-- Scroll Top -->
<a href="" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

<!-- Main JS File -->
<script src="assets/js/main.js"></script>
<script>
  // Ottieni l'URL della pagina corrente
  let currentPage = window.location.pathname.split("/").pop();
  
  document.querySelectorAll(".link").forEach(link => {
  if(link.getAttribute("href") === currentPage) {
    link.classList.add("active");
  }
  });
</script>
</body>

</html>