<html>
<head>
	<meta charset="UTF-8">
</head>
<body>
<?php
require_once("connect_db.php");

$Txtcode = $_POST["Txtcode"];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$age = $_POST["age"];
$card_id = $_POST["card_id"];




			$sql = "UPDATE user 
			SET `firstname` = '$firstname' , 
				`lastname` 	= '$lastname' , 
				`age` 		= '$age' ,
				`card_id` 	= '$card_id' 
			where `user_id`='$Txtcode'";

	// echo"<br>   sql-->$sql";
	//-->ส่งคำสั่งไปให้ dbms run sql
	$result = mysqli_query($con,$sql);


?>

<meta http-equiv="refresh" content="0;index.php" >
</body>
</html>