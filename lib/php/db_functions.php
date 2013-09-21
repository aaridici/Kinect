<?php
function connect(){
	$link = mysql_connect('***server address***', '***db_username***', '***db_pass**'); 
	if (!$link) { 
		die('Could not connect: ' . mysql_error()); 
	}
	mysql_select_db('kinect');
	if(isset($_SESSION)){
		$_SESSION["connected"] = true;
	}
	return $link;
}
function dbQuery($queryStr){
	if(!isConnected()){
		connect();
	}
	$result = mysql_query($queryStr) or die("Error: ".mysql_error()."<br/>Query: ".$queryStr);
	return $result;
}
function isConnected(){
	if(isset($_SESSION)){
		if(isset($_SESSION["link"])){
			if($_SESSION["link"]){
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}
	}else{
		return false;
	}
}