






<?php 
  $info = $obj->service_counter_display_limited();
?>




<div class="section-counter paralax-mf bg-image" style="background-image: url(assets/img/counters-bg.jpg)">
      <div class="overlay-mf"></div>
      <div class="container position-relative">
        <div class="row">
          <?php  while ($display = mysqli_fetch_assoc($info)){ ?>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><?php echo $display['ex_img']; ?></span>
              </div>
              <div class="counter-num">
                <p data-purecounter-start="0" data-purecounter-end="<?php echo $display['ex_number']; ?>" data-purecounter-duration="1"
                  class="counter purecounter"></p>
                <span class="counter-text"><?php echo $display['ex_title']; ?></span>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>