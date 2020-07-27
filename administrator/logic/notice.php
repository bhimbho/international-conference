<?php
 include('../../classes/autoload.php');
 admin_autoloader_step_two();
 $session = new session();
 $notice = new notice();
if(isset($_POST['submit'])){
    $board_notice = $_POST['notice'];
    $update_status = $notice->add_notice($board_notice, $notice_id = 1);
    $session->set_session('success','Notice Board updated successfully');
    header('location:../notice.php');
}