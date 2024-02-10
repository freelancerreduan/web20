










<?php

$obj = new personal();
    if(isset($_POST['ab_skill_add'])){
        $msg = $obj-> ab_skill($_POST);
    }

$service_area_display  = $obj-> service_area_dispaly();



// this code for(post Delete) in database
if(isset($_GET['status'])){
    if($_GET['status']='service_area_delete'){
        $id = $_GET['id'];
        $msg = $obj-> service_area_delete($id);
    }
}

?>



<div class="container">
    <div class="shadow-lg p-3 mb-5 bg-white rounded">
        <?php if(isset($msg)){ echo $msg; } ?>
        <div class="table-responsive">
            <h3 class="text-center text-danger mb-5">Manage About Area</h3> <hr>
            <table class="table ">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">LOGO CODE</th>
                        <th scope="col">CARD TITLE</th>
                        <th scope="col">CARD DESCRIPTION</th>

                        <th scope="col">ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($service_info_display = mysqli_fetch_assoc($service_area_display)){ ?>
                        <tr style="height: 20px !important;">
                            <th scope="row"><?php echo $service_info_display['sv_id']?></th>
                            <td><?php echo $service_info_display['sv_logo']?></td>
                            <td><?php echo $service_info_display['sv_title']?></td>
                            <td><?php echo $service_info_display['sv_des']?></td>

                            <td>
                                <a href="post_edite.php?status=post_edite&&id=<?php echo $service_info_display['sv_id']?>" class="btn btn-primary btn-block">Edite</a>
                                <a href="?status=service_area_delete&&id=<?php echo $service_info_display['sv_id']; ?>" class="btn btn-danger btn-block">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>





