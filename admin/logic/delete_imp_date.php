<?php
 include('../../classes/autoload.php');
 admin_autoloader_step_two();
 $session = new session();
 $conference = new conference();
if(isset($_GET['date_id'])){
    $date_id = $conference->Validate($_GET['date_id']);
    $verify_count= $conference->delete_conference_date($date_id);
    //echo $admin_verify_status = count($admin_verify_count);
    // var_dump($admin_verify_count[0]['admin_id']);
    switch ($verify_count) {
        case 0:
                $session->set_session('err', "<strong> Try Again!</strong>");
                header('location: ../important-date.php');
                break;
        case 1:
                $session->set_session('success', "Conference Deleted!");
                header('location: ../important-date.php');
                break;
        default:
                $session->set_session('err', "Something went wrong");
                header('location: ../important-date.php');
                break;
    }
}
?>