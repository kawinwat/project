<?php
$card_id=$_GET['card_id'];//รับค่าGET ที่ส่งมาจากไฟล์ show
require_once("connect_db.php");//เรียกใช้ไฟล์การเชื่อมต่อDATABASE SERVERและฐานข้อมูล
$sql="DELETE FROM `card` WHERE `card`.`card_id` ='$card_id'";//คำสั่งลบข้อมูล
     //echo"<br>   sql-->$sql";
$result = mysqli_query($con,$sql);
?>
	<meta http-equiv="refresh" content="0;zoom_data.php" > 