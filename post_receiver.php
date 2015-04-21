<?php
	if($_POST) {
		print_r($_POST);
	}

	else if($_FILES){
		$file = $_FILES['file'];
		$fileContents = file_get_contents($file["tmp_name"]);
		print_r($fileContents);
	}

	$1st_field_ = $_POST['1st_field_'];
	$2nd_field_ = $_POST['2nd_field_'];
	$3rd_field_ = $_POST['3rd_field_'];

	file_put_contents('myTextFile.txt', print_r($_POST, true), FILE_APPEND);
?>