<?php






include_once('class/function.php');
$obj = new personal();

// this is code for ( admin login info chack) if admin info not valid! then go to Redirect( Login page );
session_start();
$id = $_SESSION['adminId'];
if ($id == null) {
  header("location:index.php");
}


// this is code for (Admin Logout ) info check and go to Login page
if (isset($_GET['admin_logout'])) {
  if ($_GET['admin_logout'] == 'logout') {
    $obj->admin_logout();
  }
}


?>



<?php include_once("include/head.php"); ?>
<div class="container-scroller">
  <?php include_once("include/navbar.php"); ?>

  <div class="container-fluid page-body-wrapper">

    <?php include_once("include/side_nav.php"); ?>
    <div class="main-panel">
      <div class="content-wrapper">
        <div class="">
          <?php
          if (isset($view)) {
            if ($view == "dashboard") {
              include('view/dashboard_view.php');
            } 
            elseif ($view == "add_cat") {
              include('view/add_cat_view.php');
            }
            elseif ($view == "bg_img_change") {
              include('view/bg_img_change_view.php');
            }
            elseif ($view == "hero_text_area") {
              include('view/hero_text_area_view.php');
            }
            elseif ($view == "about_area") {
              include('view/about_area_view.php');
            }
            elseif ($view == "ab_skill") {
              include('view/ab_skill_view.php');
            }
            elseif ($view == "ab_about_area_manage") {
              include('view/ab_about_area_manage_view.php');
            }
            elseif ($view == "service_area") {
              include('view/service_area_view.php');
            }
            elseif ($view == "service_area_manage") {
              include('view/service_area_manage_view.php');
            }
            elseif ($view == "sv_experience_counter") {
              include('view/sv_experience_counter_view.php');
            }
            elseif ($view == "counter_manage") {
              include('view/manage_counter_view.php');
            }
            elseif ($view == "add_protfolio") {
              include('view/add_protfolio_view.php');
            }





          }




          ?>
        </div>
      </div>
      <?php include_once("include/footer.php"); ?>