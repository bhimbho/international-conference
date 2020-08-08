<?php 
session_start();
	include('../../classes/autoload.php');
	admin_autoloader_step_two();
	$speakers = new speakers();
	$validate = new validate();
	if(isset($_POST['submit'])){
		$arr_data = [];
		foreach ($_POST as $post => $val) {
			array_push($arr_data,$validate->text($val));
		}
		// $obj = json_decode(json_encode($arr_data), true);
		// $obj->fname;
		$file_upload = $validate->fileUploadValidateDoc('../../uploads/speakers_picture/','speaker_img');
		if($file_upload != 0){
			if($speakers->add_speakers($arr_data[0],$arr_data[1],$arr_data[2],$file_upload,$arr_data[5],$arr_data[3],$arr_data[4])){
				$_SESSION['success'] = "Speakers Added Successfully";
				header("location: ../speakers.php");
			}
			else{
				$_SESSION['err'] = "Something Went Wrong";
				header("location: ../speakers.php");
			}
		}
		else{
			$_SESSION['err'] = "File is incompatible for upload";
			header("location: ../speakers.php");
		}
		
		// $save_data = $journal->add_journal();
	}

?>