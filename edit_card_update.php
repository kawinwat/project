<html>
<head>
	<meta charset="UTF-8">
</head>
<body>
<?php
require_once("connect_db.php");

$TxtID = $_POST["TxtID"];
$TxtCODE = $_POST["TxtCODE"];


			$sql = "UPDATE card 
			SET `code` = '$TxtCODE' 
				
			where `card_id`='$TxtID'";

	 //echo"<br>   sql-->$sql";
	//-->ส่งคำสั่งไปให้ dbms run sql
	$result = mysqli_query($con,$sql);


?>

<meta http-equiv="refresh" content="0;zoom_data.php" > 
</body>
</html>