










<?php

$obj = new personal();
    if(isset($_POST['ab_skill_add'])){
        $msg = $obj-> ab_skill($_POST);
    }

$counter_area_display  = $obj-> service_counter_display();



// this code for(post Delete) in database
if(isset($_GET['status'])){
    if($_GET['status']='manage_counter'){
        $id = $_GET['id'];
        $msg = $obj-> manage_counter($id);
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
                        <th scope="col">TITLE </th>
                        <th scope="col">COUNTER</th>

                        <th scope="col">ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($sv_info_display = mysqli_fetch_assoc($counter_area_display)){ ?>
                        <tr style="height: 20px !important;">
                            <th scope="row"><?php echo $sv_info_display['ex_id']?></th>
                            <td><?php echo $sv_info_display['ex_title']?> </td>
                            <td><?php echo $sv_info_display['ex_number']?> %</td>
                            <td>
                                <a href="post_edite.php?status=post_edite&&id=<?php echo $sv_info_display['ex_id']?>" class="btn btn-primary btn-block">Edite</a>
                                <a href="?status=manage_counter&&id=<?php echo $sv_info_display['ex_id']; ?>" class="btn btn-danger btn-block">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>





