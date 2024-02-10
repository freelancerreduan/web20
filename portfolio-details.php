








<?php

include_once("admin/class/function.php"); 

$obj = new personal();


if(isset($_GET['status'])){
  if($_GET['status']='protfolio_single'){
    $id =$_GET['id'];
    $info = $obj->protfolio_single_display($id);
  }
}

?>


<?php include_once("include/head.php"); ?>
<?php include_once("include/navbar.php"); ?>


  <div class="hero hero-single route bg-image" style="background-image: url(assets/img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="hero-content display-table">
      <div class="table-cell">
        <div class="container">
          <h2 class="hero-title mb-4">Portfolio Details</h2>
          <ol class="breadcrumb d-flex justify-content-center">
            <li class="breadcrumb-item">
              <a href="#">Home</a>
            </li>
            <li class="breadcrumb-item active">Portfolio Details</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <main id="main">
    <!-- ======= Portfolio Details Section ======= -->
    <div id="work">
      <section id="portfolio-details" class="portfolio-details">
        <div class="container">
          <div class="row gy-4">
            <div class="col-lg-8">
              <div class="portfolio-details-slider swiper">
                <div class="swiper-wrapper align-items-center">
                  <div class="swiper-slide">
                    <img src="admin/upload/protfolio_img/<?php echo $info['pf_img'];  ?>" alt="">
                  </div>
                </div>
                <div class="swiper-pagination"></div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="portfolio-info">
                <h3>Project information</h3>
                <ul>
                  <li><strong>Category</strong>: <?php echo $info['pf_category']; ?></li>
                  <li><strong>Client</strong>: <?php echo $info['pf_client']; ?> </li>
                  <li><strong>Project date</strong>: <?php echo $info['pf_date']; ?></li>
                  <li><strong>Project URL</strong>: <a target="_blank" href="<?php echo $info['pf_project_url']; ?>"><?php echo $info['pf_project_url']; ?></a></li>
                </ul>
              </div>
              <div class="portfolio-description">
                <h2><?php echo $info['pf_title']; ?></h2>
                <p>
                <?php echo $info['pf_description']; ?>
                </p>
              </div>
            </div>

          </div>

        </div>
    </div>
    </section><!-- End Portfolio Details Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="copyright-box">
            <p class="copyright">&copy; Copyright <strong>Developer Reduan</strong>. All Rights Reserved</p>
            <div class="credits">
              <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=DevFolio
            -->
              Designed by <a href="https://bootstrapmade.com/">Web Development & Hacking 2022</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>