





<?php 
  $info = $obj->protfolio_display_limeted();
  


?>



<section id="work" class="portfolio-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                My Portfolio
              </h3>
              <p class="subtitle-a">
                Some samples of my work are given below
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
        <?php while($display = mysqli_fetch_assoc($info)){ ?>
          <div class="col-md-4">
            <div class="work-box work-box-c" style="height: auto;">
              <a href="admin/upload/protfolio_img/<?php echo $display['pf_img']; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox">
                <div class="work-img">
                  <img src="admin/upload/protfolio_img/<?php echo $display['pf_img']; ?>" alt="" class="img-fluid" style="height: 25vh; width: 100%;">
                </div> 
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                  <h2 class="w-title"><?php echo $display['pf_title']; ?></h2>
                    <div class="w-more">
                    <span class="w-ctegory"> <?php echo $display['pf_category']; ?></span> / <span class="w-date"><?php echo $display['pf_date']; ?></span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="portfolio-details.php?status=protfolio_single&&id=<?php echo $display['pf_id']; ?>"> <span class="bi bi-plus-circle"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <?php } ?>

        </div>
      </div>
    </section>