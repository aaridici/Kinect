<?php
include('lib/php/functions.php');

/*
if(isGetable("file_name")){
	$path = "images/";
	$file_name=$path.$_GET["file_name"];
	$file_data=file_get_contents('php://input');
	if($file_data!=NULL){
		echo("Received file name:".$filename."\r\n");
		$path_on_server = uploadImage($file_name, $file_data);
		echo("File uploaded to:".$path_on_server."\r\n");		
	}
}*/

$uploaddir = 'images/';
if (is_uploaded_file($_FILES['file']['tmp_name'])) {
	
	//$file_name = basename($_FILES['file']['name']);
	
	//$uploadfile = $uploaddir . substr($file_name,0,stripos($file_path,'.'))."_".time().substr($file_path,strpos($file_path,'.'));
	
	//$uploadfile =$uploaddir . time(). ".png";
	
	$uploadfile = "images/screen.png";
	//$uploadfile = "images/".$_FILES['file']['name'];
	
	echo "File ". $_FILES['file']['name'] ." uploaded successfully. \r\n";

	if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {
		echo "File is valid, and was successfully moved. \r\n";
	}else{
		print_r($_FILES);
	}
}else{
	echo "Upload Failed!!!\r\n";
	print_r($_FILES);
}

?>