<!DOCTYPE html>
<html>
<head>
  <title>แก้ไขข้อมูล</title>
</head>
<body>
    <?php

      require_once("connect_db.php");
      
      ini_set('display_errors', 0);
    ?>
      <center>
      <table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tbody>
           <tr>
             <br><font color="#0066CC" size="10">Edit</font></br> 
          </tr>
      </tbody></table>
      <br>
      </br>
    <form name="form1" method="post" action="edit_card_update.php">
            
    <?php
    

      $method = $_POST["method"];
      if(!$method){
        $method = $_GET["method"];
      
      }
      if ($dates=="") {
       $dates = date('Y-m-d');$_SESSION['date_start'] = $dates;
      }

     
          $card_id = $_GET["card_id"];
          echo"<input type='hidden' name ='method' value = 'edit'>";



          $sql="SELECT * FROM card  WHERE card_id='$card_id'";
          $dbquery=mysqli_query($con,$sql);
          $numrow =mysqli_num_rows($dbquery);
          //echo"<br>sql-->$sql<br>numrow-->$numrow<BR>";
          $rs=mysqli_fetch_array($dbquery);
          $run1=$rs['card_id'];
      
    ?>    
      <table  cellpadding="0" cellspacing="0">
              <tr>
                <td><span class="fonts"><font color="#000000">ID &nbsp;</td>
                <td><input name="TxtID" readonly type="number" id="textfield" value="<?php echo $run1 ?>" size="4"> </td>
              </tr>

              <tr>
                <td><span class="fonts"><font color="#000000">CODE&nbsp;</td>
                <td><input name="TxtCODE" type="number" id="textfield" value="<?php echo $rs['code']; ?>" size="15"> </td>
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

   

