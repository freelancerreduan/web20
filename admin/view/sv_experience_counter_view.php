









<?php

$obj = new personal();
    if(isset($_POST['add_counter'])){
        $msg = $obj-> service_counter($_POST);
    }

?>


<form action="" method="post">
    <?php if(isset($msg)){ echo $msg; } ?>
    <h1 class="text-center text-danger"> Skill Counter Area</h1>
    <div class="form-group">
        <label for="exampleInputPassword1">Skill Icon Code:</label>
        <input class="form-control" type="text" name="counter_img" id="counter_img">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Skill Counter Number:</label>
        <input class="form-control" type="number" name="counter_number" id="counter_number">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Skill Name Title:</label>
        <input class="form-control" type="text" name="counter_title" id="counter_title">
    </div>

    <input type="submit" name="add_counter" value="Counter Add" class="btn btn-primary btn-block">
</form>