<?php
 include('../../classes/autoload.php');
 admin_autoloader_step_two();
 $session = new session();
 $about = new about();
 $validate = new validate();
if(isset($_POST['submit'])){
    $aboutus = $validate->text($_POST['about']);
    $update_status = $about->update_about($aboutus);
    if($update_status){
        $session->set_session('success','About Updated Successfully');
    }else{
        $session->set_session('error','Information not Updated');
    } 
    header('location:../about.php');
}