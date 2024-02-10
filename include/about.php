







<?php 
 
  $info = $obj->about_display_font();
  $skill_display = $obj->display_skill();
 
?>





<section id="about" class="about-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-sm-6 col-md-5">
                      <div class="about-img">
                        <img src="admin/upload/about_img/<?php echo $info['ab_img']; ?>" class="img-fluid rounded b-shadow-a" alt="">
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-7">
                      <div class="about-info">
                        <p><span class="title-s">Name: </span> <span> <?php echo $info['ab_name']; ?> </span></p>
                        <p><span class="title-s">Profile: </span> <span><?php echo $info['ab_profile']; ?></span></p>
                        <p><span class="title-s">Email: </span> <span><?php echo $info['ab_email']; ?></span></p>
                        <p><span class="title-s">Phone: </span> <span>(+880) <?php echo $info['ab_phone']; ?></span></p>
                      </div>
                    </div>
                  </div>
                  <div class="skill-mf">
                    <p class="title-s">Skill</p>
                      <?php while($skill = mysqli_fetch_assoc($skill_display)){  ?>
                        <span><?php echo $skill['skill_name']; ?></span> <span class="pull-right"><?php echo $skill['skill_persent']; ?>%</span>
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" style="width: <?php echo $skill['skill_persent']; ?>%;" aria-valuenow="<?php echo $skill['skill_persent']; ?>"
                            aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      <?php } ?>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="about-me pt-4 pt-md-0">
                    <div class="title-box-2">
                      <h5 class="title-left-1">
                        About Me
                      </h5>
                    </div>
                    <p class="lead lead-c">
                      <?php echo $info['ab_about']; ?>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>