









<?php

class personal
{
    private $conn;
    public function __construct()
    {
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = "";
        $dbname = 'protfolio';
        $this->conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
        if (!$this->conn) {
            die("Connection Faild!");
        }
    }


    // it's function for admin login In website
    public function admin_login($data)
    {
        $admin_email = $data['admin_email'];
        $admin_pass = md5($data['admin_pass']);
        $query = "SELECT * FROM  admin_info WHERE admin_email='$admin_email' && admin_pass='$admin_pass'";

        if (mysqli_query($this->conn, $query)) {
            $admin_info = mysqli_query($this->conn, $query);
            if ($admin_info) {
                header("location:dashboard.php");
                $admin_login = mysqli_fetch_assoc($admin_info);
                session_start();
                $_SESSION['adminId'] = $admin_login['admin_id'];
                $_SESSION['adminEmail'] = $admin_login['admin_email'];
            } else {
                return 'login faild';
            }
        }
    }

    // =====admin logout system======
    public function admin_logout(){
        unset($_SESSION['adminId']);
        unset($_SESSION['adminEmail']);
        header("location:index.php");
    }

    // ==========================================================================
    // ===========================Admin Dashboard Area Hear======================
    // ==========================================================================
    
    // =======================hero area =================
    public function bg_change_img($data){
        $img = $_FILES['bg_img_change']['name'];
        $tmp_name = $_FILES['bg_img_change']['tmp_name'];
        $query = "INSERT INTO hero_area(hero_bg_img) VALUE ('$img')";
        if(mysqli_query($this->conn, $query)) {
            // unlink("upload/hero_bg/".$img);
            move_uploaded_file($tmp_name,"upload/hero_bg/".$img);
            return "Img add Successfully";
        }
    }

    // display hero area 
    public  function hero_img_display(){
        $query = "SELECT * FROM hero_area ORDER BY hero_id DESC LIMIT 1";
        if(mysqli_query($this->conn, $query)){
            $info = mysqli_query($this->conn, $query);
            $fetch_datails = mysqli_fetch_assoc($info);
            return $fetch_datails;
        }
    }
    // ================About area=====================
    public function about_info_add($data){
        $name = $data["name"];
        $profile = $data['profile_name'];
        $email = $data['email_address'];
        $phone = $data['phone_num'];
        $about = $data['about_area'];
        $personal_img = $_FILES['personal_img']['name'];
        $img_tmp = $_FILES['personal_img']['tmp_name'];

        $query = "INSERT INTO about_area(ab_name,ab_profile,ab_email,ab_phone,ab_about,ab_img) VALUE ('$name','$profile','$email','$phone','$about','$personal_img')";
        if(mysqli_query($this->conn, $query)){
            move_uploaded_file($img_tmp,"upload/about_img/".$personal_img);
            return "Information Updated Successfully";
        }
    }

    // add skill area
    public function ab_skill($data){
        $ab_skill_name = $data["ab_skill_name"];
        $ab_skill_persent = $data["ab_skill_persent"];
        $quere = "INSERT INTO ab_skill_area(skill_name,skill_persent) VALUE ('$ab_skill_name','$ab_skill_persent')";
        if(mysqli_query($this->conn, $quere)) {
            return "Skill Added Successfully";
        }

    }

    // ============== About_display  =============
    public function about_display(){ 
        $query = "SELECT * FROM about_area";
        if(mysqli_query($this->conn, $query)) {
            $view = mysqli_query($this->conn, $query);
            // $display = mysqli_fetch_assoc($view);
            return $view;
        }

    }
    // ==============================skill display==================
    public function display_skill(){ 
        $query = "SELECT * FROM ab_skill_area ORDER BY skill_id DESC LIMIT 6";
        if(mysqli_query($this->conn, $query)) {
            $view = mysqli_query($this->conn, $query);
            // $display = mysqli_fetch_assoc($view);
            return $view;
        }

    }



    public function about_display_font(){ 
        $query = "SELECT * FROM about_area ORDER BY ab_id DESC LIMIT 1";
        if(mysqli_query($this->conn, $query)) {
            $view = mysqli_query($this->conn, $query);
            $display = mysqli_fetch_assoc($view);
            return $display;
        }

    }

    // ================= about_info_delete ==============
    public function about_info_delete($id){
        $query ="DELETE FROM about_area WHERE ab_id=$id";
        if(mysqli_query($this->conn, $query)) { 
            unlink("upload/".$id);
            return "Delete Successfully";
        }
    }

    // ================service area============
    public function service_area($data){ 
        $card_logo = $data['sv_logo_code'];
        $card_title = $data['sv_heading'];
        $card_des = $data['sv_decription'];
        $query = "INSERT INTO service_area(sv_logo,sv_title,sv_des) VALUE ('$card_logo','$card_title','$card_des')";
        if(mysqli_query($this->conn, $query)) {
            return"Service Card Add Successfully";
        }
    }

    // =================service card display ================
    public function service_area_dispaly(){ 
        $query = "SELECT * FROM service_area";
        if(mysqli_query($this->conn, $query)) {
            $view = mysqli_query($this->conn, $query);
            // $display = mysqli_fetch_assoc($view);
            return $view;
        }
    }
    public function service_area_dispaly_limited(){ 
        $query = "SELECT * FROM service_area ORDER BY sv_id DESC LIMIT 6";
        if(mysqli_query($this->conn, $query)) {
            $view = mysqli_query($this->conn, $query);
            // $display = mysqli_fetch_assoc($view);
            return $view;
        }
    }

    // ================= service card deleted ===========
    public function service_area_delete($id){
        $query ="DELETE FROM service_area WHERE sv_id=$id";
        if(mysqli_query($this->conn, $query)) { 
            return "Delete Successfully";
        }
    }

    //==============service experience counter==============
    public function service_counter($data){
        $counter_icon = $data['counter_img'];
        $counter_numer = $data['counter_number'];
        $counter_title = $data['counter_title'];
        $query = "INSERT INTO sv_experence(ex_img,ex_number,ex_title) VALUE ('$counter_icon','$counter_numer','$counter_title')";
        if(mysqli_query($this->conn, $query)) {
            return "Service counter add Successfullt";
        }
    }
    public function service_counter_display(){
        $query = "SELECT * FROM sv_experence";
        if(mysqli_query($this->conn, $query)) {
            $info = mysqli_query($this->conn, $query);
            return $info;
        }
    }
    public function service_counter_display_limited(){
        $query = "SELECT * FROM sv_experence ORDER BY ex_id DESC LIMIT 4";
        if(mysqli_query($this->conn, $query)) {
            $info = mysqli_query($this->conn, $query);
            return $info;
        }
    }

    // =============counter area info delete===============
    public function manage_counter($id){
        $query ="DELETE FROM sv_experence WHERE ex_id=$id";
        if(mysqli_query($this->conn, $query)) { 
            return "Delete Successfully";
        }
    }


    // ================ profolio area add================
    public function pf_add_info($data){
        $pf_title = $data["pf_title"];
        $pf_category = $data["pf_category"];
        $pf_client_country= $data["pf_client"];
        $pf_project_url = $data["pf_url"];
        $pf_description = $data["pf_description"];
        $thumbonail_img =$_FILES['pf_thumbonail']['name'];
        $thumbonail_img_tmp = $_FILES['pf_thumbonail']['tmp_name'];
        
        $query = "INSERT INTO protfolio(pf_title,pf_category,pf_date,pf_client,pf_project_url,pf_description,pf_img) VALUE ('$pf_title','$pf_category',now(),'$pf_client_country','$pf_project_url','$pf_description','$thumbonail_img')";
        if(mysqli_query($this->conn, $query)) { 
            move_uploaded_file($thumbonail_img_tmp,"upload/protfolio_img/".$thumbonail_img);
            return "Protfolio Added Successfully!";
        }

    }

    // ================= protfolio info display====================
    public function protfolio_display_limeted(){
        $query = "SELECT * FROM protfolio ORDER BY pf_id DESC LIMIT 3";
        if(mysqli_query($this->conn, $query)) {
            $info = mysqli_query($this->conn, $query);
            return $info;
        }
    }
    public function protfolio_single_display($id){
        $query = "SELECT * FROM protfolio WHERE pf_id=$id";
        if(mysqli_query($this->conn, $query)) {
            $info = mysqli_query($this->conn, $query);
            $fetch_datails = mysqli_fetch_assoc($info);
            return $fetch_datails;
        }
    }

}



?>