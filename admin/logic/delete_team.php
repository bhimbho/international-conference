<?php
 include('../../classes/autoload.php');
 admin_autoloader_step_two();
 $session = new session();
 $team = new ourteam();
if(isset($_GET['team_id'])){
    $team_id = $team->Validate($_GET['team_id']);
    $verify_count= $team->delete_team($team_id);
    //echo $admin_verify_status = count($admin_verify_count);
    // var_dump($admin_verify_count[0]['admin_id']);
    switch ($verify_count) {
        case 0:
                $session->set_session('err', "<strong> Try Again!</strong>");
                header('location: ../our-team.php');
                break;
        case 1:
                $session->set_session('success', "Member Deleted!");
                header('location: ../our-team.php');
                break;
        default:
                $session->set_session('err', "Something went wrong");
                header('location: ../our-team.php');
                break;
    }
}
?>