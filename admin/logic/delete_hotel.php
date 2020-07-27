<?php
 include('../../classes/autoload.php');
 admin_autoloader_step_two();
 $session = new session();
 $hotel = new hotel();
if(isset($_GET['hotel_id'])){
    $hotel_id = $hotel->Validate($_GET['hotel_id']);
    $verify_count= $hotel->delete_hotel($hotel_id);
    //echo $admin_verify_status = count($admin_verify_count);
    // var_dump($admin_verify_count[0]['admin_id']);
    switch ($verify_count) {
        case 0:
                $session->set_session('err', "<strong> Try Again!</strong>");
                header('location: ../hotel.php');
                break;
        case 1:
                $session->set_session('success', "Hotel Deleted!");
                header('location: ../hotel.php');
                break;
        default:
                $session->set_session('err', "Something went wrong");
                header('location: ../hotel.php');
                break;
    }
}
?>