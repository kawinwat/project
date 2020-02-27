<?php
$user_id=$_GET['user_id'];//รับค่าGET ที่ส่งมาจากไฟล์ show
require_once("connect_db.php");//เรียกใช้ไฟล์การเชื่อมต่อDATABASE SERVERและฐานข้อมูล
$sql="DELETE FROM `user` WHERE `user`.`user_id` ='$user_id'";//คำสั่งลบข้อมูล
    
$result = mysqli_query($con,$sql);
?>
	<meta http-equiv="refresh" content="0;index.php" > 