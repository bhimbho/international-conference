<?php
 include('../../classes/autoload.php');
 admin_autoloader_step_two();
 $session = new session();
 $admin = new administrator();
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password']; 
    $admin_verify_count= $admin->login($username, MD5($password));
    $admin_verify_status = count($admin_verify_count);
    // var_dump($admin_verify_count[0]['admin_id']);
    switch ($admin_verify_status) {
        case 0:
                $session->set_session('err', "Login Failed");
                header('location: ../index.php');
                break;
        case 1:
                $session->set_session('admin_id', $admin_verify_count[0]['admin_id']);
                header('location: ../dashboard.php');
                break;
        default:
                header('location: ../index.php');
                break;
    }
}