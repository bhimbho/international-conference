<?php
class validate{
    public function text($value){
        $validated_value = htmlspecialchars(trim($value));
        return $validated_value;
    }

    public function fileUploadValidateDoc($_path, $filename)
	{
	/*
	 * @param $path get the path to move the selected file
	 * @param $filename get the file POST name
	*/

	/*
	 * @var $replacePath change the path special character stroke to suit the preg_match
	 * 
	*/

	$path = $_path;
	$replacePath = str_replace('\\', '/', $path);
	// $rep_path = preg_match("/^[a-zA-Z0-9@: \/]+$/", $replacePath);
	
	/*
	 * We check the validity of the parameters
	 * 
	*/
	if(preg_match("/^[a-zA-Z0-9_]+$/", $filename) == false )
	{
		echo 'Supply Parameter [1] with a valid POST filename';
		exit;
	}
	// if(preg_match("/^[a-zA-Z0-9@:\. \/]+$/", $replacePath) == false)
	// {
	// 	echo 'Supply Parameter [2] with a valid path name. [Only special characters [/@] allowed]';
	// 	exit;
	// }
	/*
	 * @var $targetFileName get the complete name of the selected file with it extension
	 * @var $targetFileSize get the filesize of the selected file
	 * @var $nameAttachment get a random number to give each file a unique name
	 * @var $checkFile check the validity of the file selected
	*/
	$directory = $_path;
	$targetFileName = basename($_FILES[$filename]['name']);
	$targetFileSize = $_FILES[$filename]['size'];
	$nameAttachment = mt_rand(1000000, 9999999);
	$targetFileExtension = pathinfo($_FILES[$filename]['name'], PATHINFO_EXTENSION);
	// $checkFile = getimagesize($_FILES[$filename]['tmp_name']);
	$checkCounter = 1;
	// echo 'Hello:'.$targetFileSize;
	if($targetFileSize >= 3000000)
	{
		$checkCounter = 0;
		$_SESSION['file'] = 'File too Large';
	}
	elseif($targetFileSize = 0)
	{
		$checkCounter = 0;
		$_SESSION['file'] = 'File Unknown';
	}

	if($targetFileExtension != 'pdf' && $targetFileExtension != 'docx' && $targetFileExtension !='doc' && $targetFileExtension != 'txt' && $targetFileExtension != 'jpg' && $targetFileExtension != 'png' && $targetFileExtension !='jpeg' && $targetFileExtension != 'gif')
	{
		$checkCounter = 0;
		$_SESSION['file'] = 'Sorry Upload Image files'.$targetFileExtension;
	}
	if($checkCounter == 1)
	{
		
		$fullDirectory = $directory.$nameAttachment.'.'.$targetFileExtension;
		$newFileName = $nameAttachment.'.'.$targetFileExtension;
		move_uploaded_file($_FILES[$filename]['tmp_name'], $fullDirectory);
		// echo $targetFileName;
		return $newFileName;
	}
	else
	{
		echo $checkCounter;
	}

}
}