<?php 
session_start();
	include('../../classes/autoload.php');
	admin_autoloader_step_two();
	$conference = new conference();
	$validate = new validate();
	if(isset($_POST['submit'])){
		$arr_data = [];
		foreach ($_POST as $post => $val) {
			array_push($arr_data,$conference->text_val($val));
		}
		// $obj = json_decode(json_encode($arr_data), true);
		// $obj->fname;
		// var_dump($arr_data);
			if($conference->add_conference_date($arr_data[0],$arr_data[1],$arr_data[2])){
				$_SESSION['success'] = "Conference Date Added";
				header("location: ../important-date.php");
			}
			else{
				$_SESSION['err'] = "Something Went Wrong";
				header("location: ../important-date.php");
			}
		
		// $save_data = $journal->add_journal();
	}

?>