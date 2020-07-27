<?php
 include('../../classes/autoload.php');
 admin_autoloader_step_two();
 $session = new session();
 $guideline = new guideline();
 $validate = new validate();
if(isset($_POST['submit'])){
    $guidelines = $validate->text($_POST['guideline']);
    $update_status = $guideline->update_guideline($guidelines);
    if($update_status){
        $session->set_session('success','Guideline Updated Successfully');
    }else{
        $session->set_session('error','Information not Updated');
    } 
    header('location:../guideline.php');
}