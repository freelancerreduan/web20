









<?php

$obj = new personal();
    if(isset($_POST['sv_add'])){
        $msg = $obj-> service_area($_POST);
    }

?>


<form action="" method="post">
    <?php if(isset($msg)){ echo $msg; } ?>
    <div class="form-group">
        <label for="exampleInputPassword1">Enter Logo Code:</label>
        <input class="form-control" type="text" name="sv_logo_code" id="sv_logo_code">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Enter Card Heading:</label>
        <input class="form-control" type="text" name="sv_heading" id="sv_heading">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Enter Description:</label>
        <input class="form-control" type="text" name="sv_decription" id="sv_decription">
    </div>
    <input type="submit" name="sv_add" value="Service Add" class="btn btn-primary btn-block">
</form>