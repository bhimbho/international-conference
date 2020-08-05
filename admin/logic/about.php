<?php 
session_start();
	include('../../classes/autoload.php');
	admin_autoloader_step_two();
	$about = new about();
	$validate = new validate();
	if(isset($_POST['submit'])){
		// $arr_data = [];
		// foreach ($_POST as $post => $val) {
		// 	array_push($arr_data,$sponsors->text_val($val));
		// }
		// $obj = json_decode(json_encode($arr_data), true);
		// $obj->fname;
		// var_dump($arr_data);
		
			if($about->update_about($validate->text($_POST['about']))){
				$_SESSION['success'] = "About Updated Successfully";
				header("location: ../about.php");
			}
			else{
				$_SESSION['err'] = "Something Went Wrong";
				header("location: ../about.php");
			}
		}
		
		
		// $save_data = $journal->add_journal();

?>