<?php 
session_start();
	include('../../classes/autoload.php');
	admin_autoloader_step_two();
	$team = new ourteam();
	$validate = new validate();
	if(isset($_POST['submit'])){
		$arr_data = [];
		foreach ($_POST as $post => $val) {
			array_push($arr_data,$validate->text($val));
		}
		// $obj = json_decode(json_encode($arr_data), true);
		// $obj->fname;
		$file_upload = $validate->fileUploadValidateDoc('../../uploads/teams/','speaker_img');
		if($file_upload != 0){
			if($team->add_team($arr_data[0],$arr_data[1],$arr_data[2],$file_upload)){
				$_SESSION['success'] = "Team Member Added Successfully";
				header("location: ../our-team.php");
			}
			else{
				$_SESSION['err'] = "Something Went Wrong";
				header("location: ../our-team.php");
			}
		}
		else{
			$_SESSION['err'] = "File is incompatible for upload";
			header("location: ../our-team.php");
		}
		
		// $save_data = $journal->add_journal();
	}

?>