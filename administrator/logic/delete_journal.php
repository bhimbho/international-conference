<?php
 include('../../classes/autoload.php');
 admin_autoloader_step_two();
 $session = new session();
 $journal = new journal();
if(isset($_GET['journal'])){
    $jour = $_GET['journal'];
    $delete= $journal->delete_journal($jour);
    // echo $admin_verify_status = count($admin_verify_count);
    // var_dump($admin_verify_count[0]['admin_id']);
    switch ($delete) {
        case 0:
                header('location: ../index.php');
                break;
        case 1:
                $session->set_session('msg','Journal Deleted');
                header('location: ../journals.php');
                break;
        default:
                header('location: ../index.php');
                break;
    }
}

