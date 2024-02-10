









<?php

$obj = new personal();
    if(isset($_POST['ab_skill_add'])){
        $msg = $obj-> ab_skill($_POST);
    }

?>


<form action="" method="post">
    <?php if(isset($msg)){ echo $msg; } ?>
    <div class="form-group">
        <label for="exampleInputPassword1">Skill Name:</label>
        <input class="form-control" type="text" name="ab_skill_name" id="ab_skill_name">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Skill % in 100:</label>
        <input class="form-control" type="number" name="ab_skill_persent" id="ab_skill_persent">
    </div>
    <input type="submit" name="ab_skill_add" value="Skill Add" class="btn btn-primary btn-block">
</form>