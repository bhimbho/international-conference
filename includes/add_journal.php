<?php 
session_start();
	include('../classes/autoload.php');
	admin_autoloader_step_one();
	$journal = new journal();
	$validate = new validate();
	if(isset($_POST['submit'])){
		$arr_data = [];
		foreach ($_POST as $post => $val) {
			array_push($arr_data,$journal->text_val($val));
		}
		// $obj = json_decode(json_encode($arr_data), true);
		// $obj->fname;
		// var_dump($arr_data);
		$file_upload = $validate->fileUploadValidateDoc('../uploads/files/','file');
		if($file_upload != 0){
			if($journal->add_journal($arr_data[3],$arr_data[8],$file_upload,$arr_data[6],$arr_data[7],$arr_data[1],$arr_data[0],$arr_data[4],$arr_data[5],$arr_data[2])){
				$_SESSION['success'] = "Registration Complete";
				header("location: ../register.php");
			}
			// else{
			// 	$_SESSION['err'] = "Something Went Wrong";
			// 	header("location: ../register.php");
			// }
		}
		else{
			$_SESSION['err'] = "File is incompatible for upload";
			header("location: ../register.php");
		}
		
		// $save_data = $journal->add_journal();
	}

?>