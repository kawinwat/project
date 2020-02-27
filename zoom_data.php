<!DOCTYPE html>
<html>
<head>
	<title>zoom</title>
</head>
<body>

	<center>
		<h1>TABLE CARD</h1>
		<form id="form2" name="form2" method="add" action="add_card.php">
        			<td align="center"> <input type="submit" name="btnAdd" value="ADD">  </td>
      			</form>

	<?PHP
  include('connect_db.php') ;
  if(isset($_POST["btnSearch"]))
  {
    

  $sql=" SELECT * ";
  $sql=$sql." FROM card ";
  $sql=$sql." WHERE card_id  like  "."\"".$card_id."\"  ";
  $sql=$sql." and  code  like  "."\"".$code."\"  "; 
  $sql=$sql." order by card_id ";	
  }
  else 
  {
   $sql=" SELECT * FROM card WHERE 1 order by card_id ";
  }

  // echo "<BR> ".$sql." <BR>" ;

$record = mysqli_query($con , $sql) ;  
 ?>
 <table>
    	<tr bgcolor="FFA07A">
    		<td align="center"> &nbsp; ID &nbsp;</td>
		    <td align="center"> &nbsp; CODE &nbsp; </td>
		    <td align="center"> &nbsp; Edit &nbsp;</td>
		    <td align="center"> &nbsp; Delete &nbsp; </td>

	<?PHP
	while ( $data = mysqli_fetch_assoc($record) ) { ?>
		<tr bgcolor="#FFFFCC">
				<td align="center">&nbsp; <?php echo $data['card_id']; ?> &nbsp;</td>
				<td align="center">&nbsp; <?php echo $data['code']; ?> &nbsp;  </td>
				<td align="center">
	  				<a href="edit_card.php?card_id=<?PHP echo $data['card_id']; ?>&method=edit">edit </td>
	  			<td align="center">
	  				<a href="delete_card.php?card_id=<?PHP echo $data['card_id']; ?>&method=delete">delete </td>
				
		</tr>
		
  	<?PHP }  ?>
		
    </table>
	
		<form action="index.php">
			<input type="submit" name="back" value="Back">
		</form>
	</center>
</body>
</html>