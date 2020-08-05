<?php 
session_start();
	include('../../classes/autoload.php');
	admin_autoloader_step_two();
	$venue = new venue();
	$validate = new validate();
	if(isset($_POST['submit'])){
		$arr_data = [];
		foreach ($_POST as $post => $val) {
			array_push($arr_data,$venue->text_val($val));
		}
		// $obj = json_decode(json_encode($arr_data), true);
		// $obj->fname;
		// var_dump($arr_data);
		$file_upload = $validate->fileUploadValidateDoc('../../uploads/venue/','venue_img');
		if($file_upload != 0){
			if($venue->update_venue($arr_data[0],$arr_data[1],$file_upload)){
				$_SESSION['success'] = "Venue Updated Successfully";
				header("location: ../venue.php");
			}
			else{
				$_SESSION['err'] = "Something Went Wrong";
				header("location: ../venue.php");
			}
		}
		else{
			$_SESSION['err'] = "File is incompatible for upload";
			header("location: ../venue.php");
		}
		
		// $save_data = $journal->add_journal();
	}

?>