<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
	<center>
	<table border="0" >
		<tr>
			<td colspan="7" align="center">  <H1><font color="#000000" size="10"> Data  </H1>  </td>
		</tr>
     		
     		  	<form id="form2" name="form2" method="add" action="add_data.php">
        			<td align="center"> <input type="submit" name="btnAdd" value="Add">  </td>
      			</form>
				  <form id="form3" name="form3" method="add" action="zoom_data.php">
        			<td align="center"> <input type="submit" name="btnAdd" value="Table_card">  </td>
      			</form>

		</tr>
	</table>

	<?PHP
  include('connect_db.php') ;
  if(isset($_POST["btnSearch"]))
  {
    

  $sql=" SELECT * ";
  $sql=$sql." FROM user ";
  $sql=$sql." WHERE user_id  like  "."\"".$user_id."\"  ";
  $sql=$sql." and  firstname  like  "."\"".$firstname."\"  "; 
  $sql=$sql." order by user_id ";	
  }
  else 
  {
   $sql=" SELECT * FROM user WHERE 1 order by user_id ";
  }

  // echo "<BR> ".$sql." <BR>" ;

$record = mysqli_query($con , $sql) ;  
 ?>
	
		<table>
    	<tr bgcolor="FFA07A">
    		<td align="center"> &nbsp; CODE &nbsp;</td>
		    <td align="center"> &nbsp; Firstname &nbsp; </td>
		    <td align="center">&nbsp; Lastname  &nbsp; </td>
		    <td align="center">&nbsp; Age  &nbsp; </td>
		    <td align="center">&nbsp; card_code  &nbsp; </td>
		    <td align="center"> &nbsp; Edit  &nbsp; </td>
		    <td align="center"> &nbsp; Delete  &nbsp; </td>
		</tr>
		
	<?PHP
	while ( $data = mysqli_fetch_assoc($record) ) { ?>
		<tr bgcolor="#FFFFCC">
				<td align="center">&nbsp; <?php echo $data['user_id']; ?> &nbsp;</td>
				<td align="center">&nbsp; <?php echo $data['firstname']; ?> &nbsp;  </td>
				<td align="center">&nbsp; <?php echo $data['lastname']; ?> &nbsp;  </td>
				<td align="center">&nbsp; <?php echo $data['age']; ?> &nbsp; </td>
				<td align="center">&nbsp; <?php echo $data['card_id']; ?> &nbsp; </td>
					
				<td align="center">
	  				<a href="edit_data.php?user_id=<?PHP echo $data['user_id']; ?>&method=edit">Edit </td>
	  			<td align="center">
	  				<a href="delete_data.php?user_id=<?PHP echo $data['user_id']; ?>&method=delete">Delete </td>
				
		</tr>
		
  	<?PHP }  ?>
		
    </table>
	</center>
    
</body>
</html>