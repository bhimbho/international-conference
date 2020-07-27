<?php
 include('../../classes/autoload.php');
 admin_autoloader_step_two();
 $session = new session();
 $hotel = new hotel();
if(isset($_POST['submit'])){
        $arr_data = [];
        foreach ($_POST as $post => $val) {
            array_push($arr_data,$hotel->text_val($val));
        }
        // $obj = json_decode(json_encode($arr_data), true);
        // $obj->fname;
        //var_dump($arr_data);
        
            if($hotel->add_hotel($arr_data[0],$arr_data[1],$arr_data[2],$arr_data[3],$arr_data[4])){
                $_SESSION['success'] = "Hostel Added";
                header("location: ../hotel.php");
            }
            else{
                $_SESSION['err'] = "Something Went Wrong";
                header("location: ../hotel.php");
            }
        }
?>