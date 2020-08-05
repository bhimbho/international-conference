<?php
 include('../../classes/autoload.php');
 admin_autoloader_step_two();
 $session = new session();
 $sponsors = new sponsor();
if(isset($_GET['sponsor_id'])){
    $sponsor_id = $sponsors->Validate($_GET['sponsor_id']);
    $verify_count= $sponsors->delete_sponsor($sponsor_id);
    //echo $admin_verify_status = count($admin_verify_count);
    // var_dump($admin_verify_count[0]['admin_id']);
    switch ($verify_count) {
        case 0:
                $session->set_session('err', "<strong> Try Again!</strong>");
                header('location: ../sponsors.php');
                break;
        case 1:
                $session->set_session('success', "Conference Deleted!");
                header('location: ../sponsors.php');
                break;
        default:
                $session->set_session('err', "Something went wrong");
                header('location: ../sponsors.php');
                break;
    }
}
?>