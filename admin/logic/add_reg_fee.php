<?php
 include('../../classes/autoload.php');
 admin_autoloader_step_two();
 $session = new session();
 $registration_fee = new registration_fee();
if(isset($_POST['submit'])){
        $arr_data = [];
        foreach ($_POST as $post => $val) {
            array_push($arr_data,$registration_fee->text_val($val));
        }
        // $obj = json_decode(json_encode($arr_data), true);
        // $obj->fname;
        //var_dump($arr_data);
        
            if($registration_fee->update_registration_fee($arr_data[0],$arr_data[1],$arr_data[2],$arr_data[3],$arr_data[4])){
                $_SESSION['success'] = "Registration Fee updated";
                header("location: ../registration-fee.php");
            }
            else{
                $_SESSION['err'] = "Something Went Wrong";
                header("location: ../registration-fee.php");
            }
        }
?>