











<?php

$obj = new personal();
    if(isset($_POST['change_img'])){
        $msg = $obj-> about_info_add($_POST);
    }

?>

<div class="shadow rounded p-4">
    <form action="" method="post" enctype="multipart/form-data">
        <?php if(isset($msg)){ echo  $msg;} ?>
        <h2 class="text-center text-danger">About Area</h2>
        <div class="form-group">
            <label for="exampleInputPassword1">Name:</label>
            <input class="form-control" type="text" name="name" id="name">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Profile:</label>
            <input class="form-control" type="text" name="profile_name" id="Profile_name">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Email:</label>
            <input class="form-control" type="text" name="email_address" id="Email_address">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Phone:</label>
            <input class="form-control" type="text" name="phone_num" id="Phone_num">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">About:</label>
            <textarea name="about_area" id="about_area" class="form-control" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Select Your Img:</label>
            <input type="file" name="personal_img" class="form-control">
        </div>
        <input type="submit" name="change_img" value="Add Information" class="btn btn-primary btn-block">
    </form>
</div>