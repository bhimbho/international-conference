<?php 
session_start();
	include('../../classes/autoload.php');
	admin_autoloader_step_two();
	$journal = new journal();
	$validate = new validate();
	if(isset($_POST['submit'])){
		$arr_data = [];
		foreach ($_POST as $post => $val) {
			array_push($arr_data,$journal->text_val($val));
		}
		// $obj = json_decode(json_encode($arr_data), true);
		// $obj->fname;
		//var_dump($arr_data);
		$file_upload = $validate->fileUploadValidateDoc('../../uploads/new_uploads/','file');
		if($file_upload != 0){
			if($journal->add_new_journal_upload($arr_data[0],$file_upload)){
				$_SESSION['success'] = "Upload Added Successfully";
				header("location: ../upload-paper.php");
			}
			else{
				$_SESSION['err'] = "Something Went Wrong";
				header("location: ../upload-paper.php");
			}
		}
		else{
			$_SESSION['err'] = "File is incompatible for upload";
			header("location: ../upload-paper.php");
		}
		
		// $save_data = $journal->add_journal();
	}

?>