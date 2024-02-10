










<?php

$obj = new personal();
    if(isset($_POST['ab_skill_add'])){
        $msg = $obj-> ab_skill($_POST);
    }

$about_area_display  = $obj-> about_display();



// this code for(post Delete) in database
if(isset($_GET['status'])){
    if($_GET['status']='about_info_delete'){
        $id = $_GET['id'];
        $msg = $obj-> about_info_delete($id);
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
                        <th scope="col">NAME</th>
                        <th scope="col">PROFILE</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col">NUMBER</th>
                        <th scope="col">ABOUT</th>
                        <!-- <th scope="col">SKILL-NAME</th>
                        <th scope="col">SKILL-PERSENT</th> -->

                        <th scope="col">IMG</th>
                        <th scope="col">ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($ab_info_display = mysqli_fetch_assoc($about_area_display)){ ?>
                        <tr style="height: 20px !important;">
                            <th scope="row"><?php echo $ab_info_display['ab_id']?></th>
                            <td><?php echo $ab_info_display['ab_name']?></td>
                            <td><?php echo $ab_info_display['ab_profile']?></td>
                            <td><?php echo $ab_info_display['ab_email']?></td>
                            <td><?php echo $ab_info_display['ab_phone']?></td>
                            <td><?php echo $ab_info_display['ab_about']?></td>
                            <!-- <td><?php echo $ab_info_display['skill_name']?></td>
                            <td><?php echo $ab_info_display['skill_persent']?></td> -->
                            <td>
                                <img src="upload/<?php echo $ab_info_display['ab_img']?>" alt="" class="" style="height: 50px;border-radius: 3px;" name="u_ab_img">
                            </td>
                            <td>
                                <a href="post_edite.php?status=post_edite&&id=<?php echo $ab_info_display['ab_id']?>" class="btn btn-primary btn-block">Edite</a>
                                <a href="?status=about_info_delete&&id=<?php echo $ab_info_display['ab_id']; ?>" class="btn btn-danger btn-block">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>





