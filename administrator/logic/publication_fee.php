<?php
 include('../../classes/autoload.php');
 admin_autoloader_step_two();
 $session = new session();
 $publication_fee = new publication_fee();
 $validate = new validate();
if(isset($_POST['submit'])){
    $publication_fees = $validate->text($_POST['publication_fee']);
    $update_status = $publication_fee->update_publication_fee($publication_fees);
    if($update_status){
        $session->set_session('success','Publication Fee Updated Successfully');
    }else{
        $session->set_session('error','Publication Fee not Updated');
    } 
    header('location:../guideline.php');
}