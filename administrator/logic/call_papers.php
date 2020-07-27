<?php
 include('../../classes/autoload.php');
 admin_autoloader_step_two();
 $session = new session();
 $callpapers = new callpapers();
if(isset($_POST['submit'])){
    $call_content = $_POST['call_content'];
    $call_id = $_POST['call_id'];
    $update_status = $callpapers->update_callpapers($call_content, $call_id);
    $session->set_session('success','Call for Paper '.$call_id.' updated successfully');
    ($call_id == "2")?header('location:../call-for-paper2.php') : header('location:../call-for-paper.php');
    
}