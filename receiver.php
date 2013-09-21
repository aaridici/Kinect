<?php
include('lib/php/db_functions.php');
include('lib/php/functions.php');
if(isPosted("command")){
	$result = dbQuery("INSERT INTO commands (command)VALUES('".sterilize($_POST["command"])."')");
	echo($result);
}else{
	echo "No post";
}
?>