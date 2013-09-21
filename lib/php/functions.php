<?php
function isPosted($_var){
	if(isset($_POST)){
		if(isset($_POST[$_var])){
			return true;
		}
	}
	return false;
}
function isGetable($_var){
	if(isset($_GET)){
		if(isset($_GET[$_var])){
			return true;
		}
	}
	return false;
}
function sterilize($_string){
	if(!function_exists("connect")){
		require("lib/php/db_functions.php");
	}
	connect();
	return mysql_real_escape_string($_string);
}
function uploadImage($file_path, $data){
	if(file_exists($file_name)){
		$file_path = substr($file_name,0,stripos($file_path,'.'))."_".time().substr($file_path,strpos($file_path,'.'));
	}
	$fhandle=fopen($file_path, 'wb');
	fwrite($fhandle, $data);
	fclose($fhandle);
	return $file_path;
}
?>