<?php 
session_start();
	include('../../classes/autoload.php');
	admin_autoloader_step_two();
	$guideline = new guideline();
	$validate = new validate();
	if(isset($_POST['submit'])){
		$arr_data = [];
		foreach ($_POST as $post => $val) {
			array_push($arr_data,htmlspecialchars($val));
		}
		// var_dump($arr_data[0]);
		// $obj = json_decode(json_encode($arr_data), true);
		// $obj->fname;

			if($guideline->update_guideline($arr_data[0])){
				$_SESSION['success'] = "Guideline Updated";
				header("location: ../guideline.php");
			}
			else{
				$_SESSION['err'] = "Something Went Wrong";
				header("location: ../guideline.php");
			}
		
		// $save_data = $journal->add_journal();
	}

?>