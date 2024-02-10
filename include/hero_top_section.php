





<?php  
  include_once("admin/class/function.php");
  $obj = new personal();

  $hero_area = $obj->hero_img_display();

?>








<div id="hero" class="hero route bg-image" style="background-image: url(admin/upload/hero_bg/<?php echo $hero_area['hero_bg_img']; ?>)">
    <div class="overlay-itro"></div>
    <div class="hero-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->
          <h1 class="hero-title mb-4">I'm Reduan, Creative </h1>
          <p class="hero-subtitle"><span class="typed"
              data-typed-items=" Web Designer, Web Developer, Freelancer, Photographer"></span></p>
          <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
        </div>
      </div>
    </div>
  </div><!-- End Hero Section -->