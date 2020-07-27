<?php
 include('../../classes/autoload.php');
 admin_autoloader_step_two();
 $session = new session();
 $journal = new journal();
if(isset($_GET['upload_id'])){
    $upload_id = $journal->Validate($_GET['upload_id']);
    $verify_count= $journal->delete_new_upload($upload_id);
    //echo $admin_verify_status = count($admin_verify_count);
    // var_dump($admin_verify_count[0]['admin_id']);
    switch ($verify_count) {
        case 0:
                $session->set_session('err', "<strong> Try Again!</strong>");
                header('location: ../upload-paper.php');
                break;
        case 1:
                $session->set_session('success', "paper Deleted!");
                header('location: ../upload-paper.php');
                break;
        default:
                $session->set_session('err', "Something went wrong");
                header('location: ../upload-paper.php');
                break;
    }
}
?>