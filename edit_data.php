<!DOCTYPE html>
<html>
<head>
  <title>EDIT</title>
</head>
<body>
    <?php

      require_once("connect_db.php");
      //ซ่อนเออเร่อเปิด
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
    <form name="form1" method="post" action="edit_update.php">
            
    <?php
    //  รับค่าตัวแปรจากกดปุ่ม แก้ไขTxtPOS_ID=0&method
    // Input from POST

      $method = $_POST["method"];
      if(!$method){
        $method = $_GET["method"];
      
      }
      if ($dates=="") {
       $dates = date('Y-m-d');$_SESSION['date_start'] = $dates;
      }
    //echo"<br>method-->$method<br> Txtcus_id-->$Txtcus_id<br>";
     
          $user_id = $_GET["user_id"];
          echo"<input type='hidden' name ='method' value = 'edit'>";



          $sql="SELECT * FROM user u,card c WHERE u.card_id=c.card_id and u.user_id='$user_id'";
          $dbquery=mysqli_query($con,$sql);
          $numrow =mysqli_num_rows($dbquery);
          //echo"<br>sql-->$sql<br>numrow-->$numrow<BR>";
          $rs=mysqli_fetch_array($dbquery);
          $run1=$rs['user_id'];
      
    ?>    
      <table  cellpadding="0" cellspacing="0">
              <tr>
                <td><span class="fonts"><font color="#000000">code &nbsp;</td>
                <td><input name="Txtcode" readonly type="number" id="textfield" value="<?php echo $run1 ?>" size="4"> </td>
              </tr>

              <tr>
                <td><span class="fonts"><font color="#000000">firstname&nbsp;</td>
                <td><input name="firstname" type="text" id="textfield" value="<?php echo $rs['firstname']; ?>" size="15"> </td>
              </tr>

               <tr>
                <td><span class="fonts"><font color="#000000">lastname &nbsp;</td>
                <td><input name="lastname" type="text" id="textfield" min="0" value="<?php echo $rs['lastname']; ?>" size="15"> </td>
              </tr>

              <tr>
                <td><span class="fonts"><font color="#000000">age &nbsp;</td>
                <td><input name="age" type="number" id="textfield" min="0" value="<?php echo $rs['age']; ?>" size="3"> </td>
              </tr>

              



                 <tr>
            <td><span class="fonts"><font color="#000000">card_id &nbsp;</td>
            <td><select name="card_id" class="form-control" required="required">
                          <option value="<?php echo $rs['card_id']; ?>" ><?php  echo $rs['code']; ?></option>
                          <?php
                          $sqlx="SELECT * FROM `card`";
                           $dbquery=mysqli_query($con ,$sqlx);
                           while($rs1 = mysqli_fetch_assoc($dbquery)) {
                            if ($rs['card_id'] != $rs1['card_id']) {                            
                          ?>
                          <option value="<?php echo $rs1['card_id']; ?>"><?php  echo $rs1['code']; ?></option>

                          <?php } } ?>
                      </select></td>
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

   

