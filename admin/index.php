






<?php 
include_once('class/function.php');
$obj = new personal();

 if(isset($_POST['login_now'])){
     $msg = $obj->admin_login($_POST);
 }
   // this is code for (login dasboard chack). if admin login dashboard then go to (Dashboard);
   session_start();
   if(isset($_SESSION['adminEmail'])){
       $login_chack = $_SESSION['adminEmail'];
   }
   if(isset($login_chack)){
       header("location:dashboard.php");
   }

?>





<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Hello! Admin</title>
  <!-- base:css -->
  <link rel="stylesheet" href="vendors/typicons/typicons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>  

  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <?php if(isset($msg)){ echo $msg; } ?>
              <a href="../index.php">
                <div class="brand-logo">
                  <img src="images/logo-dark.svg" alt="logo">
                </div>
              </a>
              <h4>Hello! Freelancer Reduan </h4>
              <h6 class="font-weight-light">Sign in to continue Admin access.</h6>
              <form class="pt-1" action="" method="post" >
                <div class="form-group">
                  <input type="email" name="admin_email" class="form-control form-control-lg"  style="border: 3px solid #ccc;;" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" name="admin_pass" class="form-control form-control-lg " style="border: 3px solid #ccc;;" placeholder="Password">
                </div>
                <div class="mt-3">
                  <input type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" name="login_now" value="LOGIN ADMIN">
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                  <a href="#" class="auth-link text-black">Forgot password?</a>
                </div>
                <div class="mb-2">
                  <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                    <i class="typcn typcn-social-facebook mr-2"></i>Connect using facebook
                  </button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="register.html" class="text-primary">Create</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <?php include_once("include/footer.php"); ?>
</body>

</html>
