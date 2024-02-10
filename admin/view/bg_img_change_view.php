




<?php

$obj = new personal();
    if(isset($_POST['change_img'])){
        $msg = $obj-> bg_change_img($_POST);
    }

?>


<form action="" method="post" enctype="multipart/form-data">
    <?php if(isset($msg)){ echo  $msg;} ?>
    <div class="form-group">
        <label for="exampleInputPassword1">Hero Background Img</label>
        <input type="file" class="form-control" style="width: 100%;" name="bg_img_change">
    </div>
    <input type="submit" name="change_img" value="Add Img">
    <!-- <input type="submit" name="" class="btn btn-primary"></input> -->
</form>