<!DOCTYPE html>
<html>
<head>
	<title>UPDATE</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		require_once("connect_db.php");
		$TxtcID = $_POST["TxtcID"];
		$TxtCODE = $_POST["TxtCODE"];
		
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
		$sql = " INSERT INTO `card`(`card_id`, `code` )

				VALUES ('$TxtcID','$TxtCODE')";

		  //echo"<br>   sql-->$sql";
			//-->ส่งคำสั่งไปให้ dbms run sql
			$result = mysqli_query($con,$sql);
		}
			?>
		<meta http-equiv="refresh" content="0;zoom_data.php" > 
</body>
</html>