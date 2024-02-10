


















<?php

$obj = new personal();
    if(isset($_POST['pf_add_info'])){
        $msg = $obj-> pf_add_info($_POST);
    }


?>


<form action="" method="post" enctype="multipart/form-data">
    <h2 class="text-center text-danger"> Proftfolio Added Section </h2>
    <?php if(isset($msg)){ echo $msg; } ?>
    <div class="form-group">
        <label for="exampleInputPassword1">Enter Title:</label>
        <input class="form-control" type="text" name="pf_title" id="pf_title">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Category Name:</label>
        <input class="form-control" type="text" name="pf_category" id="pf_category">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Client Country Name:</label>
        <input class="form-control" type="text" name="pf_client" id="pf_client">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Project URL:</label>
        <input class="form-control" type="text" name="pf_url" id="pf_url">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Protfolio Description:</label>
        <input class="form-control" type="text" name="pf_description" id="pf_description">
    </div>
    <div class="form-group">
        <label for="pf_thumbonail">Protfolio Image Select:</label>
        <input type="file" name="pf_thumbonail" multiple accept="image/*">
        <!-- <input class="form-control" type="file"  id="pf_thumbonail"> -->
    </div>

    
    <input type="submit" name="pf_add_info" value="Add Protfolio" class="btn btn-primary btn-block">
</form>