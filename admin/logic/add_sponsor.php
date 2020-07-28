<?php 
session_start();
	include('../../classes/autoload.php');
	admin_autoloader_step_two();
	$sponsors = new sponsor();
	$validate = new validate();
	if(isset($_POST['submit'])){
		// $arr_data = [];
		// foreach ($_POST as $post => $val) {
		// 	array_push($arr_data,$sponsors->text_val($val));
		// }
		// $obj = json_decode(json_encode($arr_data), true);
		// $obj->fname;
		// var_dump($arr_data);
		$file_upload = $validate->fileUploadValidateDoc('../../uploads/sponsors/','sponsor');
		if($file_upload != 0){
			if($sponsors->add_sponsor($file_upload)){
				$_SESSION['success'] = "Sponsor Added Successfully";
				header("location: ../sponsors.php");
			}
			else{
				$_SESSION['err'] = "Something Went Wrong";
				header("location: ../sponsors.php");
			}
		}
		else{
			$_SESSION['err'] = "File is incompatible for upload";
			header("location: ../sponsors.php");
		}
		
		// $save_data = $journal->add_journal();
	}

?>