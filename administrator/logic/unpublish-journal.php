<?php
 include('../../classes/autoload.php');
 admin_autoloader_step_two();
 $journal = new journal();
 $session = new session();
if(isset($_GET['journal'])){
    $jour = $_GET['journal'];
    $update= $journal->update_journal($jour);
    switch ($update) {
        case 0:
                header('location: ../index.php');
                break;
        case 1:
                $session->set_session('msg', 'Journal Updated');
                header('location: ../journals.php');
                break;
        default:
                header('location: ../index.php');
                break;
    }
}