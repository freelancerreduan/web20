







<?php 
  $service_display = $obj->service_area_dispaly_limited();


?>

<section id="services" class="services-mf pt-5 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Services
              </h3>
              <p class="subtitle-a">
                The subjects I provide services
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <?php while($info = mysqli_fetch_assoc($service_display)){ ?>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><?php echo $info['sv_logo'];  ?></span>
              </div>
              <div class="service-content">
                <h2 class="s-title"><?php echo $info['sv_title'];  ?></h2>
                <p class="s-description text-center">
                <?php echo $info['sv_des'];  ?>
                </p>
              </div>
            </div>
          </div>
          <?php  } ?>
        </div>
      </div>
    </section>