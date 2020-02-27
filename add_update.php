<!DOCTYPE html>
<html>
<head>
	<title>UPDATE</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		require_once("connect_db.php");
		$Txtcode = $_POST["Txtcode"];
		$Txtname = $_POST["Txtname"];
		$lastname = $_POST["lastname"];
		$age = $_POST["age"];
		$card_id = $_POST["card_id"];
//---->สร้างคำสั่ง add
		if(isset($_POST["method"])){
			$method = $_POST["method"];
		}
		elseif(isset($_GET["method"]))
		{
			$method = $_GET["method"];
		}
		else
		{
			$method = '';
		}

		if($method =='' || $method == 'add'){	
		$sql = " INSERT INTO `user`(`user_id`, `firstname` , `lastname` , `age` , `card_id` )

				VALUES ('$Txtcode','$Txtname','$lastname','$age','$card_id')";

		  //echo"<br>   sql-->$sql";
			//-->ส่งคำสั่งไปให้ dbms run sql
			$result = mysqli_query($con,$sql);
		}
			?>
		<meta http-equiv="refresh" content="0;index.php" > 
</body>
</html>