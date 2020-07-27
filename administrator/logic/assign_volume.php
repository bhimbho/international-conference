<?php
 include('../../classes/autoload.php');
 admin_autoloader_step_two();
 $journal = new journal();
 $session = new session();
if(isset($_POST['assign'])){
    $journal_id = $_POST['journal_id'];
    $volume_id = $_POST['volume_id']; 
    $assign_volume= $journal->assign_volume($journal_id, $volume_id);
    switch ($assign_volume) {
        case 0:
                header('location: ../index.php');
                break;
        case 1:
                $session->set_session('msg', 'Volume Assigned');
                header('location: ../modify-journals.php?journal='.$journal_id);
                break;
        default:
                header('location: ../index.php');
                break;
    }
}