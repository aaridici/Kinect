<?php
include('lib/php/db_functions.php');
include('lib/php/functions.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Issued commands</title>
</head>

<body>
<table>
<tr>
	<td><strong>ID</strong></td>
    <td><strong>Command</strong></td>
    <td><strong>Read?</strong></td>
</tr>
<?php
$result = dbQuery("SELECT * FROM commands ORDER BY id DESC");
if($result!=NULL){
	while($row = mysql_fetch_array($result)){
		echo "<tr><td><b>".$row["id"]."</b></td><td>".$row["command"]."</td><td>".$row["read"]."</td></tr>";
	}
}
?>
</table>
</body>
</html>