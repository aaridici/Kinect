<?php
header("Content-Type: text/plain");
include('lib/php/db_functions.php');
include('lib/php/functions.php');
$result = dbQuery("SELECT * FROM commands WHERE `read`='unread' ORDER BY id ASC LIMIT 1");
if($result!=NULL){
	while($row = mysql_fetch_array($result)){
		echo $row["command"];
		
		$updateResult = dbQuery("UPDATE commands set `read`='read' WHERE id='".$row["id"]."'");
		if(!$updateResult){
			echo "Error";
		}
	}
}
?>