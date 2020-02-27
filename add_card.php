<!DOCTYPE html>
<html>
<head>
	<title>ADD</title>
</head>
<body>
<center>
	<?php
  require_once("connect_db.php");
 
  ini_set('display_errors', 0);
?>


<form name="form1" method="post" action="add_card_update.php">        
<?php

  $method = $_POST["method"];
  if(!$method){
    $method = $_GET["method"];
  
  }
  if ($dates=="") {
   $dates = date('Y-m-d');$_SESSION['date_start'] = $dates;
  }

  if($method == '' || $method == 'add'){
     $SQLfindnextcode="Select * FROM card order by card_id DESC limit 1 "; 
     $dbrunquery = mysqli_query($con ,$SQLfindnextcode) ;
     $result=mysqli_fetch_array($dbrunquery);
     $numid=$result['card_id'];
      
      //$num1= substr($numid,3);
      $count = $numid+1;
      //$run1 = sprintf("prd"."%03d",$count);
      $pnum = $count;

   }
?>    
  <table  cellpadding="0" cellspacing="0">
          <tr>
            <td><span class="fonts"><font color="#000000">ID &nbsp;</td>
            <td><input name="TxtcID" readonly type="number" id="textfield" value="<?php echo $pnum ?>" size="4"> </td>
          </tr>

          <tr>
            <td><span class="fonts"><font color="#000000">CODE &nbsp;</td>
            <td><input name="TxtCODE" type="text" id="textfield" value="<?php echo $rs['code']; ?>" size="15" required autofocus> </td>
          </tr>

          

            <td colspan="3" align="center"> </br>
              <input id="btnOrange" type="submit" name="Submit" value="Save">
              <input id="btnOrange" type="button" name="Reset" value="Cancel" onclick=window.history.back() value=back>
            </td> 
            </table> 
      </form>
</center>

</body>
</html>