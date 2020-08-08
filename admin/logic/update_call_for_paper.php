<?php 
session_start();
	include('../../classes/autoload.php');
	admin_autoloader_step_two();
	$callpapers = new callpapers();
	$validate = new validate();
	if(isset($_POST['submit'])){
		$arr_data = [];
		foreach ($_POST as $post => $val) {
			array_push($arr_data,$validate->text($val));
		}
		// $obj = json_decode(json_encode($arr_data), true);
		// $obj->fname;
		// var_dump($arr_data);
			if($callpapers->update_callpapers($arr_data[0])){
				$_SESSION['success'] = "Call for paper Updated";
				header("location: ../call-for-paper.php");
			}
			else{
				$_SESSION['err'] = "Something Went Wrong";
				header("location: ../call-for-paper.php");
			}
		
		// $save_data = $journal->add_journal();
	}

?>