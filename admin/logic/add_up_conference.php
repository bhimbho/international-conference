<?php 
session_start();
	include('../../classes/autoload.php');
	admin_autoloader_step_two();
	$conference = new conference();
	$validate = new validate();
	if(isset($_POST['submit'])){
		$arr_data = [];
		foreach ($_POST as $post => $val) {
			array_push($arr_data,$validate->text($val));
		}
		// $obj = json_decode(json_encode($arr_data), true);
		// $obj->fname;
		$file_upload = $validate->fileUploadValidateDoc('../../uploads/upcoming_conference/','file');
		if($file_upload != 0){
			if($conference->update_up_conf($arr_data[0],$arr_data[1],$arr_data[2],$arr_data[3],$arr_data[4],$file_upload)){
				$_SESSION['success'] = "Conference Updated";
				header("location: ../upcoming-conference.php");
			}
			else{
				$_SESSION['err'] = "Something Went Wrong";
				header("location: ../upcoming-conference.php");
			}
		}
		else{
			$_SESSION['err'] = "File is incompatible for upload";
			header("location: ../upcoming-conference.php");
		}
		
		// $save_data = $journal->add_journal();
	}

?>