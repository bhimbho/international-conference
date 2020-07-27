<?php
 include('../../classes/autoload.php');
 admin_autoloader_step_two();
 $session = new session();
 $speakers = new speakers();
if(isset($_GET['speaker_id'])){
    $speaker_id = $speakers->Validate($_GET['speaker_id']);
    $verify_count= $speakers->delete_speaker($speaker_id);
    //echo $admin_verify_status = count($admin_verify_count);
    // var_dump($admin_verify_count[0]['admin_id']);
    switch ($verify_count) {
        case 0:
                $session->set_session('err', "<strong> Try Again!</strong>");
                header('location: ../speakers.php');
                break;
        case 1:
                $session->set_session('success', "Speaker Deleted!");
                header('location: ../speakers.php');
                break;
        default:
                $session->set_session('err', "Something went wrong");
                header('location: ../speakers.php');
                break;
    }
}
?>